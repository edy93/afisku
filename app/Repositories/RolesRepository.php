<?php

namespace App\Repositories;

use App\Models\Role;

class RolesRepository
{
    public function all()
    {
        $exclude = [
            'superadmin',
            'masteradmin'
        ];

        $data = Role::whereNotIn('name', $exclude)->get();

        return $data;
    }

    public function store($request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        if ($role) {
            return true;
        }

        return false;
    }

    public function update($request, $id)
    {
        $role = Role::whereId($id)->first();
        if ($role) {
            $role->name = $request->name;
            if ($role->save()) {
                $role->syncPermissions($request->permissions);
                return true;
            }
        }

        return false;
    }

    public function delete($id)
    {
        // hapus peran
        return Role::whereId($id)->delete();
    }
}
