<?php

namespace App\Repositories;

use App\Models\JamKerja;
use App\Models\JamKerjaPegawai;
use Carbon\Carbon;

class JamKerjaRepository
{
    public function getDetailJamKerja($id)
    {
        $data = JamKerja::whereId($id)->first();
        return $data;
    }

    public function jamKerjaPegawaiHariIni($pegawaiID, $jamKerjaID = null)
    {
        // tanggal hari ini
        $tanggal = now()->format('Y-m-d');

        // cek apakah pegawai mempunyai jam kerja yang telah diset
        $cekJamKerjaPegawai = JamKerjaPegawai::where('id', $pegawaiID)
            ->where('tanggal', $tanggal)
            ->first();

        if ($cekJamKerjaPegawai) {
            // jika ada maka set jam kerja sesuai yang telah diset
            $jamKerjaPegawai = $cekJamKerjaPegawai->jam_kerja_id;
        } else if ($jamKerjaID != null) {
            // set jam kerja sesuai yang telah ditentukan
            $jamKerjaPegawai = $jamKerjaID;
        } else {
            // set jam kerja sesuai dengan jam kerja normal
            $hari = date('w', strtotime($tanggal));
            // Jam Kerja Normal Untuk Semua OPD
            if ($hari >= 1 && $hari <= 5) {     // hari Senin sampai Jumat
                $jamKerjaPegawai = 2;           // jam_kerja_id = 2 untuk jam kerja hari normal (Senin - Jumat)
            } else {
                $jamKerjaPegawai = 1;           // jam_kerja_id = 1 untuk hari libur
            }
        }

        return $jamKerjaPegawai;
    }

    public function penyesuaianJamKerja($pegawaiID, $jamKerjaPegawaiHariIni, $jamKerjaID = null)
    {
        $tanggalHariIni = now()->format('Y-m-d');
        $jamHariIni     = now()->format('H:i:s');

        // cek apakah waktu sekarang sudah masuk jam masuk pada jam kerja hari ini?
        $checkInStart = $this->getDetailJamKerja($jamKerjaPegawaiHariIni)->checkin_start;
        if ($jamHariIni > $checkInStart) {
            // jika ya maka pakai jam kerja hari ini
            $jamKerjaPegawai = $jamKerjaPegawaiHariIni;
            $tanggal = $tanggalHariIni;
        } else {
            // jika tidak maka cek apakah hari sebelumnya hari libur?
            $tanggalSebelumnya = date('Y-m-d', strtotime('-1 day', strtotime($tanggalHariIni)));
            $jamKerjaPegawaiHariSebelumnya = $this->jamKerjaPegawaiHariIni($pegawaiID, $tanggalSebelumnya, $jamKerjaID);
            $checkOutEnd = JamKerja::getDataById($jamKerjaPegawaiHariSebelumnya)->checkout_end;
            if ($jamKerjaPegawaiHariSebelumnya == 1) {
                // jika ya maka pakai jam kerja hari ini
                $jamKerjaPegawai = $jamKerjaPegawaiHariIni;
                $tanggal = $tanggalHariIni;
            } else if ($checkOutEnd > $jamHariIni) {
                // cek apakah sekarang sudah lewat jam terakhir check out hari sebelumnya
                $jamKerjaPegawai = $jamKerjaPegawaiHariIni;
                $tanggal = $tanggalHariIni;
            } else {
                // jika tidak maka pakai jam kerja hari sebelumnya
                $jamKerjaPegawai = $jamKerjaPegawaiHariSebelumnya;
                $tanggal = $tanggalSebelumnya;
            }
        }

        return json_decode(json_encode([
            'jam_kerja' => $this->getDetailJamKerja($jamKerjaPegawai),
            'tanggal' => $tanggal,
        ]), FALSE);
    }
}
