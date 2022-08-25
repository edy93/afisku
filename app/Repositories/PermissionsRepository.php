<?php

namespace App\Repositories;

use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PermissionsRepository
{
    public function all()
    {
        $exclude = [
            'permissions-browse',
            'permissions-read',
            'permissions-edit',
            'permissions-add',
            'permissions-delete',
        ];
        $q = Permission::orderBy('created_at', 'DESC');
        // jika peran bukan master data
        if (auth()->user()->roles->pluck('name') != 'masterdata') {
            $q->whereNotIn('name', $exclude);
        }
        $data = $q->get();

        return $data;
    }

    public function store($request)
    {
        try {
            DB::beginTransaction();

            // tambah hak akses
            $permission = new Permission();
            $permission->group = $request->group;

            if ($request->has('options')) {
                foreach ($request->options as $option) {
                    $name = Str::slug($request->name, '-') . '-' . $option;
                    $permission->name = $name;
                    $permission->save();

                    // beri hak akses ke peran superadmin dan masteradmin
                    $superadmin = Role::where('name', 'superadmin')->first();
                    $superadmin->givePermissionTo($name);
                    $masteradmin = Role::where('name', 'masteradmin')->first();
                    $masteradmin->givePermissionTo($name);
                }
            } else {
                $permission->name = Str::slug($request->name, '-');
                $permission->save();
            }

            DB::commit();
            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return false;
    }

    public function update($request, $id)
    {
        $permission = Permission::whereId($id)->first();
        if ($permission) {
            $permission->name = Str::slug($request->name, '-');
            $permission->group = $request->group;

            if ($permission->save()) {
                return true;
            }
        }

        return false;
    }

    public function delete($id)
    {
        // hapus kamar
        return Permission::whereId($id)->delete();
    }
}
