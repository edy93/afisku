<?php

namespace Database\Seeders;

use App\Models\AbsensiStatus;
use Illuminate\Database\Seeder;

class AbsensiStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['status' => 'Tertunda', 'kode' => 'T', 'warna' => '#fd7e14'],
            ['status' => 'Terverifikasi', 'kode' => 'V', 'warna' => '#20c997'],
            ['status' => 'Di Lokasi', 'kode' => 'DL', 'warna' => '#007bff'],
            ['status' => 'Ditolak', 'kode' => 'DT', 'warna' => '#dc3545'],
        ];

        foreach ($data as $item) {
            AbsensiStatus::create([
                'status' => $item['status'],
                'kode' => $item['kode'],
                'warna' => $item['warna'],
            ]);
        }
    }
}
