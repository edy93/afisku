<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\AbsenResource;
use App\Http\Resources\PegawaiResource;
use App\Models\AbsensiStatus;
use App\Repositories\AbsenRepository;
use App\Repositories\DashboardRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $dashboardRepo;
    private $absenRepo; 
    
    public function __construct(
        DashboardRepository $dashboardRepository,
        AbsenRepository $absenRepository
    ) {
        $this->dashboardRepo = $dashboardRepository;
        $this->absenRepo = $absenRepository;
    }

    public function dashboard()
    {
        // data pegawai
        $data['pegawai'] = new PegawaiResource(auth()->user());

        // grafik absensi minggu ini
        $data['minggu_ini'] = $this->dashboardRepo->graphMingguIni();

        // jumlah bawahan
        $data['jlh_bawahan'] = auth()->user()->bawahan()->count();

        // jumlah absensi yang harus diverifikasi
        $statusTertunda = AbsensiStatus::whereKode('T')->first();
        $bawahanIDs = DB::table('atasan_bawahan')->whereAtasanId(auth()->user()->id)->get()->pluck('bawahan_id');
        $data['jlh_verifikasi'] = $bawahanIDs->count() > 0 ? $this->absenRepo->daftarAbsen($bawahanIDs, $statusTertunda->id)->count() : 0;

        // riwayat 5 absensi terakhir
        $riwayat5Data = $this->absenRepo->daftarAbsen(auth()->user()->id, null, null, null, 5);
        $data['riwayat'] = $riwayat5Data->count() > 0 ? AbsenResource::collection($riwayat5Data) : [];

        return ResponseFormatter::success('memuat data dashboard', $data);
    }
}
