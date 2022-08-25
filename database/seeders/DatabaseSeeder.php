<?php

namespace Database\Seeders;

use App\Models\AbsensiTipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SatuanKerjaSeeder::class,
            PermissionsSeeder::class,
            RolesSeeder::class,
            UserSeeder::class,
            AbsensiStatusSeeder::class,
            AbsensiTipeSeeder::class,
            JamKerjaSeeder::class,
            SQLSeeder::class,
            // PegawaiSeeder::class,
        ]);
    }
}
