<?php

namespace App\Repositories;

use App\Models\Lokasi;
use App\Models\Pegawai;

class LokasiRepository
{
    public function all($satker_id = null)
    {
        $q = Lokasi::select('*');
        if (!empty($satker_id)) {
            $q->whereSatkerId($satker_id);
        }
        $data = $q->get();

        return $data;
    }

    public function lokasiPegawai($id)
    {
        $pegawai = Pegawai::whereId($id)->first();
        $data = Lokasi::whereSatkerId($pegawai->satker_id)
            ->whereIsActive(true)
            ->get();

        return $data;
    }

    public function store($request)
    {
        // tambah lokasi
        $data = new Lokasi();
        $data->nm_lokasi = strtoupper($request->nm_lokasi);
        $data->deskripsi = $request->deskripsi;
        $data->satker_id = $request->satker_id;
        // $data->uniker_id = $request->uniker_id;
        $data->koordinat = $request->koordinat;
        $data->is_active = isset($request->is_active) && $request->is_active == 'on' ? true : false;
        if ($data->save()) {
            return true;
        }

        return false;
    }

    public function update($request, $id)
    {
        // tambah lokasi
        $data = Lokasi::whereId($id)->first();
        if ($data) {
            $data->nm_lokasi = strtoupper($request->nm_lokasi);
            $data->deskripsi = $request->deskripsi;
            $data->satker_id = $request->satker_id;
            // $data->uniker_id = $request->uniker_id;
            $data->koordinat = $request->koordinat;
            $data->is_active = isset($request->is_active) && $request->is_active == 'on' ? true : false;
            if ($data->save()) {
                return true;
            }
        }

        return false;
    }

    public function delete($id)
    {
        // hapus lokasi
        return Lokasi::whereId($id)->delete();
    }

    public function isLokasiExist($request)
    {
        $cekLokasi = Lokasi::whereSatkerId($request->satker_id)
            ->whereUnikerId($request->uniker_id)
            ->whereIsActive(true)
            ->first();
        if ($cekLokasi) {
            return true;
        }

        return false;
    }
}
