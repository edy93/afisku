<?php

namespace App\Repositories;

use App\Models\Absensi;
use App\Models\AbsensiStatus;
use App\Models\Pegawai;

class DashboardRepository
{
    private $absenRepo;
    
    public function __construct(AbsenRepository $absenRepository) {
        $this->absenRepo = $absenRepository;
    }

    public function graphMingguIni()
    {
        $pegawaiID = auth()->user() instanceof Pegawai ? auth()->user()->id : null;
        $status = AbsensiStatus::where('status', '!=', 'Ditolak')->get();
        $data = [];
        foreach ($status as $value) {
            $data[] = [
                'status' => $value->status,
                'jumlah' => $this->absenRepo->daftarAbsen($pegawaiID, $value->id)->count(),
                'warna' => $value->warna,
            ];
        }

        return $data;
    }

    

    // $data['pegawai'] = new PegawaiResource($pegawai);
    //         $data['minggu_ini'] = $this->grafikMingguIni();
    //         $data['jlh_bawahan'] = auth()->user()->bawahan()->count();
    //         $data['ada_verif_absen'] = $this->adaVerifikasiAbsen();
    //         $data['riwayat'] = $this->riwayat5RecordTerakhir();
}
