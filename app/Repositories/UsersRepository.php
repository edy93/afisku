<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UsersRepository
{
    public function all()
    {
        $exclude = [
            'superadmin',
            'masteradmin'
        ];

        $data = User::whereNotIn('username', $exclude)->orderBy('id', 'DESC')->get();

        return $data;
    }

    public function roles()
    {
        $exclude = [
            'superadmin',
            'masteradmin'
        ];

        $data = Role::whereNotIn('name', $exclude)->pluck('name', 'name')->all();

        return $data;
    }

    public function store($request)
    {
        // tambah user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->satker_id = $request->satker_id;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            $user->assignRole($request->roles);
            return true;
        }

        return false;
    }

    public function update($request, $id)
    {
        // update user
        $result = false;
        try {
            DB::beginTransaction();

            $user = User::whereId($id)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->satker_id = $request->satker_id;
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->save();

            // Update Peran
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $user->assignRole($request->roles);

            DB::commit();
            $result = true;
        } catch (\Throwable $th) {
            DB::rollBack();
            $result = $th->getMessage();
        }

        return $result;
    }

    public function delete($id)
    {
        // hapus kamar
        return User::whereId($id)->delete();
    }
}
