<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\SatuanKerja;
use App\Models\User;
use App\Repositories\UsersRepository;
use Brian2694\Toastr\Facades\Toastr;
use Hash;

class UsersController extends Controller
{
    private $usersRepo;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepo = $usersRepository;

        $this->middleware('permission:users-browse', ['only' => ['index', 'datatableAPI']]);
        $this->middleware('permission:users-read', ['only' => ['show']]);
        $this->middleware('permission:users-edit', ['only' => ['edit']]);
        $this->middleware('permission:users-add', ['only' => ['add']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);
    }

    public function datatableAPI()
    {
        $data = $this->usersRepo->all();

        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn(
                'roles',
                function ($row) {
                    $roles = '';
                    if (!empty($row->getRoleNames())) {
                        foreach ($row->getRoleNames() as $value) {
                            $roles .= '<label class="badge badge-primary mb-2 mr-2">'.$value.'</label>';
                        }
                    }

                    return $roles;
                }
            )
            ->addColumn(
                'action',
                function ($row) {
                    $btn = '';
                    // if (auth()->user()->can('users-read')) {
                    //     $btn .= '<a href="' . route('users.show', $row['id']) . '" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="DETAIL"><i class="fa fa-eye"></i></a> ';
                    // }
                    if (auth()->user()->can('users-edit')) {
                        $btn .= '<a href="' . route('users.edit', $row['id']) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="UBAH"><i class="fa fa-pencil-alt"></i></a> ';
                    }
                    if (auth()->user()->can('users-delete')) {
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
            ->rawColumns(['roles', 'action'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Users';

        return view('manajemen.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Tambah Users';
        $data['roles'] = $this->usersRepo->roles();
        $data['satker'] = SatuanKerja::pluck('nm_satker', 'id')->all();

        return view('manajemen.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $simpan = $this->usersRepo->store($request);
        if ($simpan) {
            Toastr::success('Berhasil tambah data user', 'USERS');
            return redirect()->route('users.index');
        }

        Toastr::error('Gagal tambah data user', 'USERS');
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
        $data['user'] = $this->usersRepo->userByID($id);
        return view('users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['pageTitle'] = 'Ubah Users';
        $data['user'] = $user;
        $data['roles'] = $this->usersRepo->roles();
        $data['userRole'] = $data['user']->roles->pluck('name', 'name')->all();
        $data['satker'] = SatuanKerja::pluck('nm_satker', 'id')->all();

        return view('manajemen.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $ubah = $this->usersRepo->update($request, $id);

        if ($ubah) {
            Toastr::success('Berhasil ubah data user', 'USERS');
            return redirect()->route('users.index');
        }

        Toastr::error('Gagal ubah data user', 'USERS');
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
        $hapus = $this->usersRepo->delete($id);
        if ($hapus) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menghapus data user',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus data user',
            ]);
        }
    }
}
