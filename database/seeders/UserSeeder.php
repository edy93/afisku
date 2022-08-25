<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masteradmin = User::create([
            'name' => 'Master Admin',
            'email' => 'masteradmin@nyagam.id',
            'username' => 'masteradmin',
            'email_verified_at' => now(),
            'password' => Hash::make('masteradmin135246'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $masteradmin->assignRole('masteradmin');

        $superadmin = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@nyagam.id',
            'username' => 'superadmin',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $superadmin->assignRole('superadmin');

        $adminBKPSDM = User::create([
            'name' => 'Admin OPD BKPSDM',
            'email' => 'admin-bkpsdm@nyagam.id',
            'username' => 'bkpsdm',
            'email_verified_at' => now(),
            'satker_id' => 10,
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $adminBKPSDM->assignRole('admin-opd');

        $adminSETDA = User::create([
            'name' => 'Admin OPD SETDA',
            'email' => 'admin-setda@nyagam.id',
            'username' => 'setda',
            'email_verified_at' => now(),
            'satker_id' => 1,
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $adminSETDA->assignRole('admin-opd');

        $adminINSPEKTORAT = User::create([
            'name' => 'Admin OPD INSPEKTORAT',
            'email' => 'admin-inspektorat@nyagam.id',
            'username' => 'inspektorat',
            'email_verified_at' => now(),
            'satker_id' => 6,
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $adminINSPEKTORAT->assignRole('admin-opd');

        $adminBPKAD = User::create([
            'name' => 'Admin OPD BPKAD',
            'email' => 'admin-bpkad@nyagam.id',
            'username' => 'bpkad',
            'email_verified_at' => now(),
            'satker_id' => 11,
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $adminBPKAD->assignRole('admin-opd');

        $adminRSUD = User::create([
            'name' => 'Admin OPD RSUD',
            'email' => 'admin-rsud@nyagam.id',
            'username' => 'rsud',
            'email_verified_at' => now(),
            'satker_id' => 20,
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $adminRSUD->assignRole('admin-opd');
    }
}