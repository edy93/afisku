<?php

namespace App\Repositories;

use App\Models\Absensi;
use App\Models\AbsensiRekap;
use App\Models\AbsensiStatus;
use App\Models\AbsensiTipe;
use App\Models\Pegawai;
use App\Models\User;

class AbsenRepository
{
    public function daftarAbsen($id = null, $statusID = null, $sort = null, $whereRaw = null, $take = null, $paginate = null)
    {
        $query = Absensi::orderBy('created_at', $sort ?? 'DESC');

        if ($id) {
            if (is_array($id)) {
                $query->whereIn('pegawai_id', $id);
            } else {
                $query->wherePegawaiId($id);
            }
        } else {
            if (auth()->user() instanceof User && auth()->user()->hasRole('admin-opd')) {
                $allPegawai = Pegawai::whereSatkerId(auth()->user()->satker_id)->get();
                $query->whereIn('pegawai_id', $allPegawai->pluck('id'));
            }
        }

        // status absensi
        if ($statusID) {
            $query->where('status_id', $statusID);
        }

        // conditional scope
        if ($whereRaw) {
            $query->whereRaw($whereRaw);
        }

        if ($take) {
            $query->take($take);
        }

        // paginate jika paginate didefinisikan
        if (is_null($take) && $paginate) {
            $data = $query->paginate($paginate);
        } else {
            $data = $query->get();
        }

        return $data;
    }

    public function first($id)
    {
        $data = Absensi::whereId($id)->first();
        return $data;
    }

    public function storeAbsen($request, $pegawai, $dataJamKerja)
    {
        // masukkan data absensi
        $absen = new Absensi();
        $absen->pegawai_id = $pegawai->id;
        $absen->nip = $pegawai->nip;
        $absen->jam_kerja_id = $dataJamKerja->jam_kerja->id;
        $absen->tipe_id = $request->tipe;
        $absen->tanggal = now()->format('Y-m-d');
        $absen->jam = now()->format('H:i:s');
        $absen->lat = $request->lat;
        $absen->lng = $request->lng;
        $absen->alamat = $request->alamat ?? Geocoder::getAddressForCoordinates(-0.025035409149489946, 109.33516348065147)['formatted_address'];
        $absen->is_dilokasi = $request->is_dilokasi;
        // jika absen di luar lokasi
        if (!$request->is_dilokasi) {
            if (auth()->user()->is_auto_verif) {
                $kode = 'V';    // Terverifikasi
            } else {
                $kode = 'T';    // Tertunda
            }
            $absen->status_id = AbsensiStatus::getDataByKode($kode)->id;
            $absen->keterangan_pegawai = $request->alasan;
        } else {
            $absen->status_id = 3; // DILOKASI
        }

        if ($absen->save()) {
            return $absen;
        }

        return false;
    }

    public function storeRekapAbsen($request, $pegawai, $dataJamKerja, $absenID)
    {
        // masukkan data absensi ke rekap
        // jika absen masuk
        if ($request->tipe == 1) {
            // cek apakan sudah ada absen masuk
            $cekAbsenMasuk = AbsensiRekap::wherePegawaiId($pegawai->id)
                ->whereJamKerjaId($dataJamKerja->jam_kerja->id)
                ->whereDate('tanggal', $dataJamKerja->tanggal)
                ->whereNotNull('pulang')
                ->first();

            // jika ada
            if ($cekAbsenMasuk) {
                $rekap = $cekAbsenMasuk;
            } else {
                $rekap = new AbsensiRekap();
                $rekap->pegawai_id = $pegawai->id;
                $rekap->nip = $pegawai->nip;
                $rekap->jam_kerja_id = $dataJamKerja->jam_kerja->id;
                $rekap->tanggal = $dataJamKerja->tanggal;
            }

            $rekap->masuk = $absenID;
            if ($rekap->save()) {
                return true;
            }
        }

        // jika absen pulang
        if ($request->tipe == 2) {
            // cek apakan sudah ada absen masuk
            $cekAbsenMasuk = AbsensiRekap::wherePegawaiId($pegawai->id)
                ->whereJamKerjaId($dataJamKerja->jam_kerja->id)
                ->whereDate('tanggal', $dataJamKerja->tanggal)
                ->whereNotNull('masuk')
                ->first();

            // jika ada
            if ($cekAbsenMasuk) {
                $rekap = $cekAbsenMasuk;
            } else {
                $rekap = new AbsensiRekap();
                $rekap->pegawai_id = $pegawai->id;
                $rekap->nip = $pegawai->nip;
                $rekap->jam_kerja_id = $dataJamKerja->jam_kerja->id;
                $rekap->tanggal = $dataJamKerja->tanggal;
            }

            $rekap->pulang = $absenID;

            if ($rekap->save()) {
                return true;
            }
        }

        return false;
    }

    public function verifikasiAbsen($request)
    {
        $data = Absensi::whereId($request->id_absensi)->first();
        $data->status_id = AbsensiStatus::getDataByKode('V')->id;
        $data->verifikator = auth()->user()->nip;

        if($data->save()) {
            return true;
        }

        return false;
    }

    public function isSudahAbsenHariIni($tipeID, $tanggal, $pegawaiID)
    {
        $data = Absensi::whereTipeId($tipeID)
            ->whereDate('tanggal', $tanggal ?? now()->format('Y-m-d'))
            ->wherePegawaiId($pegawaiID)
            ->first();

        if ($data) {
            return true;
        }

        return false;
    }

    public function isInRange($tipeID, $dataJamKerja)
    {
        if ($tipeID == 1 && now()->format('H:i:s') >= $dataJamKerja->jam_kerja->checkin_start && now()->format('H:i:s') <= $dataJamKerja->jam_kerja->checkin_end) {
            return true;
        }

        if ($tipeID == 2 && now()->format('H:i:s') >= $dataJamKerja->jam_kerja->checkout_start && now()->format('H:i:s') <= $dataJamKerja->jam_kerja->checkout_end) {
            return true;
        }

        return false;
    }

    public function getTipeAbsen($id)
    {
        $data = AbsensiTipe::whereId($id)->first();
        return $data;
    }
}
