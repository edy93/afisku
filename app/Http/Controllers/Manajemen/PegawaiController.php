<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Http\Requests\PegawaiStoreRequest;
use App\Http\Requests\PegawaiUpdateRequest;
use App\Models\Pegawai;
use App\Models\SatuanKerja;
use App\Repositories\PegawaiRepository;
use Brian2694\Toastr\Facades\Toastr;

class PegawaiController extends Controller
{
    private $pegawaiRepo;

    public function __construct(PegawaiRepository $pegawaiRepository)
    {
        $this->pegawaiRepo = $pegawaiRepository;

        $this->middleware('permission:pegawai-browse', ['only' => ['index', 'datatableAPI']]);
        $this->middleware('permission:pegawai-read', ['only' => ['show']]);
        $this->middleware('permission:pegawai-edit', ['only' => ['edit']]);
        $this->middleware('permission:pegawai-add', ['only' => ['add']]);
        $this->middleware('permission:pegawai-delete', ['only' => ['destroy']]);
    }

    public function datatableAPI()
    {
        $data = collect();
        if (auth()->user()->hasRole('admin-opd')) {
            $satkerID = auth()->user()->satker_id;
            if ($satkerID) {
                $data = $this->pegawaiRepo->all($satkerID);
            }
        } else if(auth()->user()->hasRole(['masteradmin', 'superadmin'])) {
            $data = $this->pegawaiRepo->all();
        }

        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn(
                'data_pegawai',
                function ($row) {
                    $dataPegawai = '';
                    $dataPegawai .= $row->nm_pegawai;
                    $dataPegawai .= '<div class="small text-primary">'.$row->nip.'</div>';

                    return $dataPegawai;
                }
            )
            ->editColumn(
                'jabatan',
                function ($row) {
                    $jabatan = '';
                    $jabatan .= $row->jabatan;
                    // $jabatan .= '<div class"small">Kelas Jabatan'.$row->nip.'</div>';

                    return $jabatan;
                }
            )
            ->addColumn(
                'satuan_unit_kerja',
                function ($row) {
                    $dataSatUniKer = '';
                    if (auth()->user()->hasRole(['masteradmin', 'superadmin'])) {
                        $dataSatUniKer .= $row->satuanKerja->akronim;
                    }
                    if (!empty($row->unitKerja)) {
                        $dataSatUniKer .= '<div class"small">['.$row->unitKerja->nm_uniker.']</div>';
                    }

                    return $dataSatUniKer;
                }
            )
            ->addColumn(
                'kontak',
                function ($row) {
                    $dataKontak = '';
                    $dataKontak .= $row->email;
                    if (!empty($row->nohp)) {
                        $dataKontak .= '<div class"small">'.$row->nohp.'</div>';
                    }

                    return $dataKontak;
                }
            )
            ->addColumn(
                'action',
                function ($row) {
                    $btn = '';
                    if (auth()->user()->can('pegawai-read')) {
                        $btn .= '<a href="' . route('pegawai.show', $row['id']) . '" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="DETAIL"><i class="fa fa-eye"></i></a> ';
                    }
                    if (auth()->user()->can('pegawai-edit')) {
                        $btn .= '<a href="' . route('pegawai.edit', $row['id']) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="UBAH"><i class="fa fa-pencil-alt"></i></a> ';
                    }
                    if (auth()->user()->can('pegawai-delete')) {
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
            ->rawColumns(['data_pegawai', 'kontak', 'jabatan', 'action'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Pegawai';

        return view('manajemen.pegawai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Tambah Pegawai';
        $data['satker'] = SatuanKerja::pluck('nm_satker', 'id')->all();

        return view('manajemen.pegawai.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PegawaiStoreRequest $request)
    {
        $simpan = $this->pegawaiRepo->store($request);
        if ($simpan) {
            Toastr::success('Berhasil tambah data pegawai', 'PEGAWAI');
            return redirect()->route('pegawai.index');
        }

        Toastr::error('Gagal tambah data pegawai', 'PEGAWAI');
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
        $data['pageTitle'] = 'Detail Pegawai';
        $data['pegawai'] = $this->pegawaiRepo->first($id);
        $data['bawahan'] = $this->pegawaiRepo->all($data['pegawai']->satker_id);
        return view('manajemen.pegawai.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        $data['pageTitle'] = 'Ubah Pegawai';
        $data['pegawai'] = $pegawai;
        $data['satker'] = SatuanKerja::pluck('nm_satker', 'id')->all();

        return view('manajemen.pegawai.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PegawaiUpdateRequest $request, $id)
    {
        $ubah = $this->pegawaiRepo->update($request, $id);

        if ($ubah) {
            Toastr::success('Berhasil ubah data pegawai', 'PEGAWAI');
            return redirect()->route('pegawai.index');
        }

        Toastr::error('Gagal ubah data pegawai', 'PEGAWAI');
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
        $hapus = $this->pegawaiRepo->delete($id);
        if ($hapus) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menghapus data pegawai',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus data pegawai',
            ]);
        }
    }
}
