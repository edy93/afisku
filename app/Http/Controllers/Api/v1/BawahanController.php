<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\AbsenResource;
use App\Http\Resources\PegawaiWithPendingResource;
use App\Models\AbsensiStatus;
use App\Repositories\AbsenRepository;
use Illuminate\Http\Request;

class BawahanController extends Controller
{
    private $absenRepo;

    public function __construct(AbsenRepository $absenRepository)
    {
        $this->absenRepo = $absenRepository;
    }

    public function daftarBawahan()
    {
        $daftarBawahan = PegawaiWithPendingResource::collection(auth()->user()->bawahan);

        if ($daftarBawahan->count() > 0) {
            return ResponseFormatter::success('Memuat daftar bawahan', $daftarBawahan);
        }

        return ResponseFormatter::error('Anda tidak mempunyai bawahan');
    }

    public function riwayatByDate($id, $tanggal)
    {
        $scope = "tanggal = '$tanggal'";
        $riwayat = $this->absenRepo->daftarAbsen($id, null, null, $scope);

        if ($riwayat->count() > 0) {
            return ResponseFormatter::success('Memuat daftar absensi bawahan', AbsenResource::collection($riwayat));
        } else {
            return ResponseFormatter::success('Tidak ada riwayat absensi');
        }

        return ResponseFormatter::error('Gagal memuat daftar absensi');
    }

    public function daftarVerifikasi($id)
    {
        $statusTertunda = AbsensiStatus::whereKode('T')->first();
        $riwayatVerifikasi = $this->absenRepo->daftarAbsen($id, $statusTertunda->id);

        if ($riwayatVerifikasi->count() > 0) {
            return ResponseFormatter::success('Memuat daftar absensi bawahan yang perlu diverifikasi', AbsenResource::collection($riwayatVerifikasi));
        } else {
            return ResponseFormatter::success('Riwayat absensi yang perlu diverifikasi tidak ditemukan');
        }

        return ResponseFormatter::error('Gagal memuat daftar absensi yang perlu diverifikasi');
    }
}
