<?php

namespace App\Repositories;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function isPegawaiExist($request)
    {
        $user = Pegawai::where('nip', $request->nip)->first();
        return $user;
    }

    public function matchPassword($request, $user)
    {
        $password = Hash::check($request->password, $user->password);
        return $password;
    }
}
