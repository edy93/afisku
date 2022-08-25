<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\PermissionUpdateRequest;
use App\Models\Permission;
use App\Repositories\PermissionsRepository;
use Brian2694\Toastr\Facades\Toastr;

class PermissionsController extends Controller
{
    private $permissionsRepo;

    function __construct(PermissionsRepository $permissionsRepository)
    {
        $this->permissionsRepo = $permissionsRepository;

        $this->middleware('permission:permissions-browse', ['only' => ['index', 'datatableAPI']]);
        $this->middleware('permission:permissions-read', ['only' => ['show']]);
        $this->middleware('permission:permissions-edit', ['only' => ['edit']]);
        $this->middleware('permission:permissions-add', ['only' => ['add']]);
        $this->middleware('permission:permissions-delete', ['only' => ['destroy']]);
    }

    public function datatableAPI()
    {
        $data = $this->permissionsRepo->all();

        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($row) {
                    $btn = '';
                    // if (auth()->user()->can('permissions-read')) {
                    //     $btn .= '<a href="' . route('permissions.show', $row['id']) . '" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="DETAIL"><i class="fa fa-eye"></i></a> ';
                    // }
                    if (auth()->user()->can('permissions-edit')) {
                        $btn .= '<a href="' . route('permissions.edit', $row['id']) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="UBAH"><i class="fa fa-pencil-alt"></i></a> ';
                    }
                    if (auth()->user()->can('permissions-delete')) {
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
            ->rawColumns(['action'])
            ->make(true);
    }

    public function index()
    {
        $data['pageTitle'] = 'Permissions';

        return view('manajemen.permissions.index', $data);
    }

    public function create()
    {
        $data['pageTitle'] = 'Tambah Permissions';
        $data['options'] = ['browse', 'read', 'edit', 'add', 'delete'];

        return view('manajemen.permissions.create', $data);
    }

    public function store(PermissionStoreRequest $request)
    {
        $simpan = $this->permissionsRepo->store($request);
        if ($simpan) {
            Toastr::success('Berhasil tambah permissions', 'PERMISSIONS');
            return redirect()->route('permissions.index');
        }

        Toastr::error('Gagal tambah permissions', 'PERMISSIONS');
        return redirect()->back()->withInput();
    }

    public function edit(Permission $permission)
    {
        $data['pageTitle'] = 'Ubah Permissions';
        $data['permission'] = $permission;

        return view('manajemen.permissions.edit', $data);
    }

    public function update(PermissionUpdateRequest $request, $id)
    {
        $ubah = $this->permissionsRepo->update($request, $id);

        if ($ubah) {
            Toastr::success('Berhasil ubah permissions', 'PERMISSIONS');
            return redirect()->route('permissions.index');
        }

        Toastr::error('Gagal ubah permissions', 'PERMISSIONS');
        return redirect()->back()->withInput();
    }

    public function destroy($id)
    {
        $hapus = $this->permissionsRepo->delete($id);
        if ($hapus) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menghapus permissions',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus permissions',
            ]);
        }
    }
}
