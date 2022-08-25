<?php

namespace Database\Seeders;

use App\Models\AbsensiTipe;
use Illuminate\Database\Seeder;

class AbsensiTipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['tipe' => 'Absen Masuk', 'kode' => 'AM', 'warna' => '#28a745'],
            ['tipe' => 'Absen Pulang', 'kode' => 'AP', 'warna' => '#dc3545'],
        ];

        foreach ($data as $item) {
            AbsensiTipe::create([
                'tipe' => $item['tipe'],
                'kode' => $item['kode'],
                'warna' => $item['warna'],
            ]);
        }
    }
}
