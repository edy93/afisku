<?php

namespace Database\Seeders;

use App\Models\JamKerja;
use Illuminate\Database\Seeder;

class JamKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nm_jam_kerja' => 'LIBUR',
                'jam_masuk' => '00:00',
                'jam_pulang' => '00:00',
                'checkin_start' => '00:00',
                'checkin_end' => '00:00',
                'checkout_start' => '00:00',
                'checkout_end' => '00:00',
                'is_crossday' => false,
            ],
            [
                'nm_jam_kerja' => 'JAM KERJA SENIN - JUMAT NORMAL',
                'jam_masuk' => '07:15',
                'jam_pulang' => '15:45',
                'checkin_start' => '05:00:00',
                'checkin_end' => '10:59:59',
                'checkout_start' => '11:00:00',
                'checkout_end' => '20:00:59',
                'is_crossday' => false,
            ],
        ];

        foreach ($data as $item) {
            JamKerja::create([
                'nm_jam_kerja' => $item['nm_jam_kerja'],
                'jam_masuk' => $item['jam_masuk'],
                'jam_pulang' => $item['jam_pulang'],
                'checkin_start' => $item['checkin_start'],
                'checkin_end' => $item['checkin_end'],
                'checkout_start' => $item['checkout_start'],
                'checkout_end' => $item['checkout_end'],
                'is_crossday' => $item['is_crossday'],
            ]);
        }
    }
}
