<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Http\Requests\LokasiStoreRequest;
use App\Http\Requests\LokasiUpdateRequest;
use App\Models\Lokasi;
use App\Models\SatuanKerja;
use App\Repositories\LokasiRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    private $lokasiRepo;

    public function __construct(LokasiRepository $lokasiRepository)
    {
        $this->lokasiRepo = $lokasiRepository;

        $this->middleware('permission:lokasi-browse', ['only' => ['index', 'datatableAPI']]);
        $this->middleware('permission:lokasi-read', ['only' => ['show']]);
        $this->middleware('permission:lokasi-edit', ['only' => ['edit']]);
        $this->middleware('permission:lokasi-add', ['only' => ['add']]);
        $this->middleware('permission:lokasi-delete', ['only' => ['destroy']]);
    }

    public function datatableAPI()
    {
        $data = collect();
        if (auth()->user()->hasRole('admin-opd')) {
            $satkerID = auth()->user()->satker_id;
            if ($satkerID) {
                $data = $this->lokasiRepo->all($satkerID);
            }
        } else if(auth()->user()->hasRole(['masteradmin', 'superadmin'])) {
            $data = $this->lokasiRepo->all();
        }

        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn(
                'satuan_unit_kerja',
                function ($row) {
                    $dataSatUniKer = '';
                    if (auth()->user()->hasRole(['masteradmin', 'superadmin'])) {
                        if (!empty($row->satuanKerja)) {
                            $dataSatUniKer .= $row->satuanKerja->nm_satker;
                        }
                    }
                    if (!empty($row->unitKerja)) {
                        $dataSatUniKer .= '<div class"small">['.$row->unitKerja->nm_uniker.']</div>';
                    }

                    return $dataSatUniKer;
                }
            )
            ->addColumn(
                'status',
                function ($row) {
                    $status = $row->is_active ? '<span class="badge badge-success">AKTIF</span>' : '<span class="badge badge-danger">TIDAK AKTIF</span>';
                    return $status;
                }
            )
            ->addColumn(
                'action',
                function ($row) {
                    $btn = '';
                    // if (auth()->user()->can('pegawai-read')) {
                    //     $btn .= '<a href="' . route('pegawai.show', $row['id']) . '" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="DETAIL"><i class="fa fa-eye"></i></a> ';
                    // }
                    if (auth()->user()->can('lokasi-edit')) {
                        $btn .= '<a href="' . route('lokasi.edit', $row['id']) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="UBAH"><i class="fa fa-pencil-alt"></i></a> ';
                    }
                    if (auth()->user()->can('lokasi-delete')) {
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
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Lokasi';

        return view('manajemen.lokasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Tambah Lokasi';
        $data['satker'] = SatuanKerja::pluck('nm_satker', 'id')->all();

        return view('manajemen.lokasi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiStoreRequest $request)
    {
        // validasi duplikat lokasi
        // if($request->satker_id) {
        //     if($this->lokasiRepo->isLokasiExist($request)) {
        //         return redirect()->back()->withInput()->withErrors(['msg' => 'Lokasi sudah pernah diinput']);
        //     }
        // }

        $simpan = $this->lokasiRepo->store($request);
        if ($simpan) {
            Toastr::success('Berhasil tambah data lokasi', 'LOKASI');
            return redirect()->route('lokasi.index');
        }

        Toastr::error('Gagal tambah data lokasi', 'LOKASI');
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
    public function edit(Lokasi $lokasi)
    {
        $data['pageTitle'] = 'Ubah Lokasi';
        $data['lokasi'] = $lokasi;
        $data['satker'] = SatuanKerja::pluck('nm_satker', 'id')->all();

        return view('manajemen.lokasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LokasiUpdateRequest $request, $id)
    {
        $ubah = $this->lokasiRepo->update($request, $id);

        if ($ubah) {
            Toastr::success('Berhasil ubah data lokasi', 'LOKASI');
            return redirect()->route('lokasi.index');
        }

        Toastr::error('Gagal ubah data lokasi', 'LOKASI');
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
        $hapus = $this->lokasiRepo->delete($id);
        if ($hapus) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menghapus data lokasi',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus data lokasi',
            ]);
        }
    }
}
