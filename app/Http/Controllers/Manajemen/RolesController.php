<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Role;
use App\Repositories\PermissionsRepository;
use App\Repositories\RolesRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    private $rolesRepo;
    private $permissionsRepo;

    function __construct(
        RolesRepository $rolesRepository,
        PermissionsRepository $permissionsRepository
    ) {
        $this->rolesRepo = $rolesRepository;
        $this->permissionsRepo = $permissionsRepository;

        $this->middleware('permission:roles-browse', ['only' => ['index', 'datatableAPI']]);
        $this->middleware('permission:roles-read', ['only' => ['show']]);
        $this->middleware('permission:roles-edit', ['only' => ['edit']]);
        $this->middleware('permission:roles-add', ['only' => ['add']]);
        $this->middleware('permission:roles-delete', ['only' => ['destroy']]);
    }

    public function datatableAPI()
    {
        $data = $this->rolesRepo->all();

        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn(
                'permissions',
                function ($row) {
                    $permissions = '';
                    foreach ($row->permissions as $permission) {
                        $permissions .= '<span class="badge badge-primary mb-2 mr-2">'.$permission->name.'</span>';
                    }

                    return $permissions;
                }
            )
            ->addColumn(
                'action',
                function ($row) {
                    $btn = '';
                    // if (auth()->user()->can('roles-read')) {
                    //     $btn .= '<a href="' . route('roles.show', $row['id']) . '" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="DETAIL"><i class="fa fa-eye"></i></a> ';
                    // }
                    if (auth()->user()->can('roles-edit')) {
                        $btn .= '<a href="' . route('roles.edit', $row['id']) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="UBAH"><i class="fa fa-pencil-alt"></i></a> ';
                    }
                    if (auth()->user()->can('roles-delete')) {
                        $btn .= '<button type="button" data-id="' . $row['id'] . '" class="delete btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="HAPUS"><i class="fa fa-trash"></i></button> ';
                    }

                    if (!empty($btn)) {
                        $divGroupPrefix = '<div class="btn-group" role="group" aria-label="Aksi Group Button">';
                        $divGroupSuffix = '</div';
                        $btn = $divGroupPrefix . $btn . $divGroupSuffix;
                    }

                    return $btn ?? '';
                }
            )
            ->rawColumns(['permissions', 'action'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Roles';

        return view('manajemen.roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Tambah Roles';
        $permissionCollection = $this->permissionsRepo->all();

        foreach ($permissionCollection as $value) {
            $tmpPermission[$value->group][] = [
                'id' => $value->id,
                'name' => $value->name,
                'name' => $value->name,
            ];
        }
        $sorted = collect($tmpPermission)->sortByDesc(function ($stats, $key) {
            return count($stats);
        });

        $data['permissions'] = $sorted;

        return view('manajemen.roles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStoreRequest $request)
    {
        $simpan = $this->rolesRepo->store($request);

        if ($simpan) {
            Toastr::success('Berhasil tambah roles', 'ROLES');
            return redirect()->route('roles.index');
        }

        Toastr::error('Gagal tambah roles', 'ROLES');
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pageTitle'] = 'Ubah Roles';
        $data['role'] = Role::find($id);
        $permissionCollection = $this->permissionsRepo->all();
        foreach ($permissionCollection as $value) {
            $tmpPermission[$value->group][] = [
                'id' => $value->id,
                'name' => $value->name,
                'name' => $value->name,
            ];
        }
        $sorted = collect($tmpPermission)->sortByDesc(function ($stats, $key) {
            return count($stats);
        });
        $data['permissions'] = $sorted;
        $data['rolePermissions'] = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('manajemen.roles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        $ubah = $this->rolesRepo->update($request, $id);
        if ($ubah) {
            Toastr::success('Berhasil ubah roles', 'ROLES');
            return redirect()->route('roles.index');
        }

        Toastr::error('Gagal ubah roles', 'ROLES');
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = $this->rolesRepo->delete($id);
        if ($hapus) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menghapus peran',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus peran',
            ]);
        }
    }
}
