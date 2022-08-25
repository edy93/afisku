<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $data = [
            // Manajemen User
            ['name' => 'permissions-browse', 'group' => 'permissions'],
            ['name' => 'permissions-read', 'group' => 'permissions'],
            ['name' => 'permissions-edit', 'group' => 'permissions'],
            ['name' => 'permissions-add', 'group' => 'permissions'],
            ['name' => 'permissions-delete', 'group' => 'permissions'],

            ['name' => 'roles-browse', 'group' => 'roles'],
            ['name' => 'roles-read', 'group' => 'roles'],
            ['name' => 'roles-edit', 'group' => 'roles'],
            ['name' => 'roles-add', 'group' => 'roles'],
            ['name' => 'roles-delete', 'group' => 'roles'],

            ['name' => 'users-browse', 'group' => 'users'],
            ['name' => 'users-read', 'group' => 'users'],
            ['name' => 'users-edit', 'group' => 'users'],
            ['name' => 'users-add', 'group' => 'users'],
            ['name' => 'users-delete', 'group' => 'users'],

            // Pegawai
            ['name' => 'pegawai-browse', 'group' => 'pegawai'],
            ['name' => 'pegawai-read', 'group' => 'pegawai'],
            ['name' => 'pegawai-edit', 'group' => 'pegawai'],
            ['name' => 'pegawai-add', 'group' => 'pegawai'],
            ['name' => 'pegawai-delete', 'group' => 'pegawai'],
            ['name' => 'pegawai-extrasettings-update', 'group' => 'pegawai'],

            // Lokasi
            ['name' => 'lokasi-browse', 'group' => 'lokasi'],
            ['name' => 'lokasi-read', 'group' => 'lokasi'],
            ['name' => 'lokasi-edit', 'group' => 'lokasi'],
            ['name' => 'lokasi-add', 'group' => 'lokasi'],
            ['name' => 'lokasi-delete', 'group' => 'lokasi'],

            // Laporan - Absensi
            ['name' => 'laporan-absensi-browse', 'group' => 'laporan-absensi'],
            ['name' => 'laporan-absensi-read', 'group' => 'laporan-absensi'],
            ['name' => 'laporan-absensi-print', 'group' => 'laporan-absensi'],
        ];

        foreach ($data as $item) {
            Permission::create([
                'name' => $item['name'],
                'group' => $item['group'],
            ]);
        }
    }
}
