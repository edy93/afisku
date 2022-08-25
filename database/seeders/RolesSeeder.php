<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleMasterAdmin = Role::create([
            'name'  => 'masteradmin'
        ]);

        $roleMasterAdmin->givePermissionTo([
            // Manajemen User   
            'permissions-browse',
            'permissions-read',
            'permissions-edit',
            'permissions-add',
            'permissions-delete',

            'roles-browse',
            'roles-read',
            'roles-edit',
            'roles-add',
            'roles-delete',

            'users-browse',
            'users-read',
            'users-edit',
            'users-add',
            'users-delete',

            // Pegawai
            'pegawai-browse',
            'pegawai-read',
            'pegawai-edit',
            'pegawai-add',
            'pegawai-delete',
            'pegawai-extrasettings-update',

            // Lokasi
            'lokasi-browse',
            'lokasi-read',
            'lokasi-edit',
            'lokasi-add',
            'lokasi-delete',

            // Laporan - Absensi
            'laporan-absensi-browse',
            'laporan-absensi-read',
            'laporan-absensi-print',
        ]);

        $roleSuperadmin = Role::create([
            'name'  => 'superadmin'
        ]);

        $roleSuperadmin->givePermissionTo([
            // Manajemen User
            'roles-browse',
            'roles-read',
            'roles-edit',
            'roles-add',
            'roles-delete',

            'users-browse',
            'users-read',
            'users-edit',
            'users-add',
            'users-delete',

            // Pegawai
            'pegawai-browse',
            'pegawai-read',
            'pegawai-edit',
            'pegawai-add',
            'pegawai-delete',
            'pegawai-extrasettings-update',

            // Lokasi
            'lokasi-browse',
            'lokasi-read',
            'lokasi-edit',
            'lokasi-add',
            'lokasi-delete',

            // Laporan - Absensi
            'laporan-absensi-browse',
            'laporan-absensi-read',
            'laporan-absensi-print',
        ]);

        $roleAdminOPD = Role::create([
            'name'  => 'admin-opd'
        ]);
        $roleAdminOPD->givePermissionTo([
            // Pegawai
            'pegawai-browse',
            'pegawai-read',
            'pegawai-edit',
            'pegawai-add',
            'pegawai-delete',
            'pegawai-extrasettings-update',

            // Lokasi
            'lokasi-browse',
            'lokasi-read',
            'lokasi-edit',
            'lokasi-add',
            'lokasi-delete',

            // Laporan - Absensi
            'laporan-absensi-browse',
            'laporan-absensi-read',
            'laporan-absensi-print',
        ]);
    }
}
