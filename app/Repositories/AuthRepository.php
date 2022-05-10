<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function cekAdmin($request)
    {
        $admin = Admin::where('username', $request->username)->first();
        return $admin;
    }

    public function cekPassword($request, $admin)
    {
        $password = Hash::check($request->pass, $admin->pass);
        
        return $password;
    }
}
