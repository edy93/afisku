<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\AbsenRequest;
use App\Http\Resources\AbsenResource;
use App\Http\Resources\LokasiResource;
use App\Repositories\AbsenRepository;
use App\Repositories\JamKerjaRepository;
use App\Repositories\LokasiRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    private $absenRepo;
    private $jamKerjaRepo;
    private $lokasiRepo;

    public function __construct(
        AbsenRepository $absenRepository,
        JamKerjaRepository $jamKerjaRepository,
        LokasiRepository $lokasiRepository
    ) {
        $this->absenRepo = $absenRepository;
        $this->jamKerjaRepo = $jamKerjaRepository;
        $this->lokasiRepo = $lokasiRepository;
    }

    public function absen(AbsenRequest $request)
    {
        // dapatkan jamKerja
        $jamKerjaHariIni = $this->jamKerjaRepo->jamKerjaPegawaiHariIni(auth()->user()->id);

        // sesuaikan jam kerja berdasarkan waktu absen
        $dataJamKerja = $this->jamKerjaRepo->penyesuaianJamKerja(auth()->user()->id, $jamKerjaHariIni);

        // cek apakah masuk dalam range check-in/out start dan end
        $tipe = $this->absenRepo->getTipeAbsen($request->tipe);
        if (!$this->absenRepo->isInRange($tipe->id, $dataJamKerja)) {
            $dari = $tipe->id == 1 ? Carbon::parse($dataJamKerja->jam_kerja->checkin_start)->format('H:i') : Carbon::parse($dataJamKerja->jam_kerja->checkout_start)->format('H:i');
            $sampai = $tipe->id == 1 ? Carbon::parse($dataJamKerja->jam_kerja->checkin_end)->format('H:i') : Carbon::parse($dataJamKerja->jam_kerja->checkout_end)->format('H:i');
            $rentangWaktuAbsen = 'Rentang waktu ' . strtolower($tipe->tipe) . ' Anda adalah dari jam ' . $dari . ' sampai ' . $sampai;
            $reportAdmin = 'Jika JAM KERJA Anda tidak sesuai, maka segera hubungi Admin-OPD';
            return ResponseFormatter::error('Anda ' . strtolower($tipe->tipe) . ' di luar rentang waktu jam kerja yang telah ditentukan. ' . $rentangWaktuAbsen . '. ' . $reportAdmin);
        }

        // cek apakah sudah absen hari ini
        if ($this->absenRepo->isSudahAbsenHariIni($request->tipe, $dataJamKerja->tanggal, auth()->user()->id)) {
            return ResponseFormatter::error('Anda sudah pernah ' . strtolower($tipe->tipe) . ' hari ini');
        }

        try {
            DB::beginTransaction();

            // masukkan data absensi
            $absen = $this->absenRepo->storeAbsen($request, auth()->user(), $dataJamKerja);
            // masukkan data absensi ke rekap
            $this->absenRepo->storeRekapAbsen($request, auth()->user(), $dataJamKerja, $absen->id);
            // dd($this->absenRepo->storeRekapAbsen($request, auth()->user(), $dataJamKerja, $absen->id));

            DB::commit();
            return ResponseFormatter::success(ucfirst($tipe->tipe) . ' berhasil');
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return ResponseFormatter::error('Gagal ketika ' . strtolower($tipe->tipe) . ', silakan coba kembali beberapa saat lagi');
    }

    public function detail($id)
    {
        $detail = $this->absenRepo->first($id);

        if ($detail) {
            $data = new RiwayatResource($detail);
            return ResponseFormatter::success('Memuat detail absensi', $data);
        }
        return ResponseFormatter::error('Absensi tidak ditemukan');
    }

    public function daftarLokasi()
    {
        $data = $this->lokasiRepo->lokasiPegawai(auth()->user()->id);
        
        if ($data->count() > 0) {
            // konversi string koordinat ke array
            foreach ($data as $value) {
                $value->koordinat = json_decode('[' . str_replace(array('(', ')'), array('[', ']'), $value->koordinat) . ']', true);
            }
            return ResponseFormatter::success('Memuat lokasi absensi', LokasiResource::collection($data));
        } else {
            return ResponseFormatter::success('Anda tidak mempunyai lokasi absensi. Silahkan hubungi Admin');
        }

        return ResponseFormatter::error('Lokasi absensi tidak ditemukan');
    }

    public function riwayatByDate($tanggal)
    {
        $scope = "tanggal = '$tanggal'";
        $riwayat = $this->absenRepo->daftarAbsen(auth()->user()->id, null, null, $scope);

        if ($riwayat->count() > 0) {
            return ResponseFormatter::success('Memuat daftar absensi', AbsenResource::collection($riwayat));
        } else {
            return ResponseFormatter::success('Tidak ada riwayat absensi');
        }

        return ResponseFormatter::error('Gagal memuat daftar absensi');
    }

    public function verifikasiAbsen(Request $request)
    {
        $verifikasi = $this->absenRepo->verifikasiAbsen($request);

        if ($verifikasi) {
            return ResponseFormatter::success('Berhasil verifikasi absen');
        } 
        
        return ResponseFormatter::error('Gagal verifikasi absen, silakan dicoba kembali');
    }
}
