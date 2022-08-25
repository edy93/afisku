<?php

namespace App\Repositories;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;

class PegawaiRepository
{
    public function all($satkerID = null)
    {
        $q = Pegawai::select('*');
        if (!empty($satkerID)) {
            $q->whereSatkerId($satkerID);
        }
        $data = $q->get();

        return $data;
    }

    public function first($id)
    {
        $data = Pegawai::whereId($id)->first();
        return $data;
    }

    public function store($request)
    {
        // tambah pegawai
        $data = new Pegawai();
        $data->nm_pegawai = strtoupper($request->nm_pegawai);
        $data->nip = $request->nip;
        $data->satker_id = $request->satker_id;
        // $data->uniker_id = $request->uniker_id;
        $data->jabatan = strtoupper($request->jabatan);
        $data->kelas_jabatan = $request->kelas_jabatan;
        $data->email = strtolower($request->email);
        $data->nohp = $request->nohp;
        $data->password = Hash::make($request->password);
        $data->is_active = isset($request->is_active) && $request->is_active == 'on' ? true : false;
        $data->is_auto_verif = isset($request->is_auto_verif) && $request->is_auto_verif == 'on' ? true : false;

        if ($data->save()) {
            return true;
        }

        return false;
    }

    public function update($request, $id)
    {
        // tambah pegawai
        $data = Pegawai::whereId($id)->first();
        if ($data) {
            $data->nm_pegawai = strtoupper($request->nm_pegawai);
            $data->nip = $request->nip;
            $data->satker_id = $request->satker_id;
            // $data->uniker_id = $request->uniker_id;
            $data->jabatan = strtoupper($request->jabatan);
            $data->kelas_jabatan = $request->kelas_jabatan;
            $data->email = strtolower($request->email);
            $data->nohp = $request->nohp;
            if ($request->password) {
                $data->password = Hash::make($request->password);
            }
            $data->is_active = isset($request->is_active) && $request->is_active == 'on' ? true : false;
            $data->is_auto_verif = isset($request->is_auto_verif) && $request->is_auto_verif == 'on' ? true : false;

            if ($data->save()) {
                return true;
            }
        }

        return false;
    }

    public function delete($id)
    {
        // hapus pegawai
        return Pegawai::whereId($id)->delete();
    }

    public function daftarBawahan($pegawaiIDAtasan)
    {
        $data = Pegawai::whereId($pegawaiIDAtasan)->with('bawahan')->first();
        return $data->bawahan;
    }
}
