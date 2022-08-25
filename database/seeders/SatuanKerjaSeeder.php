<?php

namespace Database\Seeders;

use App\Models\SatuanKerja;
use Illuminate\Database\Seeder;

class SatuanKerjaSeeder extends Seeder
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
                'nm_satker' => 'SEKRETARIAT DAERAH',
                'akronim' => 'SETDA',
                'slug' => 'setda',
            ],
            [
                'nm_satker' => 'SEKRETARIAT DPRD',
                'akronim' => 'SEKRETARIAT DPRD',
                'slug' => 'sekretariat-dprd',
            ],
            [
                'nm_satker' => 'SATUAN POLISI PAMONG PRAJA',
                'akronim' => 'SATPOL PP',
                'slug' => 'satpol-pp',
            ],
            [
                'nm_satker' => 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL',
                'akronim' => 'DISDUKCAPIL',
                'slug' => 'disdukcapil',
            ],
            [
                'nm_satker' => 'DINAS PERHUBUNGAN',
                'akronim' => 'DISHUB',
                'slug' => 'dishub',
            ],
            [
                'nm_satker' => 'INSPEKTORAT',
                'akronim' => 'INSPEKTORAT',
                'slug' => 'inspektorat',
            ],
            [
                'nm_satker' => 'DINAS KESEHATAN',
                'akronim' => 'DINKES',
                'slug' => 'dinkes',
            ],
            [
                'nm_satker' => 'KANTOR KESATUAN BANGSA DAN SOSIAL POLITIK',
                'akronim' => 'KESBANGSOSPOL',
                'slug' => 'kesbangsospol',
            ],
            [
                'nm_satker' => 'DINAS KOMUNIKASI DAN INFORMATIKA',
                'akronim' => 'DISKOMINFO',
                'slug' => 'diskominfo',
            ],
            [
                'nm_satker' => 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA',
                'akronim' => 'BKPSDM',
                'slug' => 'bkpsdm',
            ],
            [
                'nm_satker' => 'BADAN PENGELOLAAN KEUANGAN DAN ASSET DAERAH',
                'akronim' => 'BPKAD',
                'slug' => 'bpkad',
            ],
            [
                'nm_satker' => 'BADAN PERENCANAAN PEMBANGUNAN DAERAH',
                'akronim' => 'BAPPEDA',
                'slug' => 'bappeda',
            ],
            [
                'nm_satker' => 'DINAS KEPEMUDAAN, OLAHRAGA DAN PARIWISATA',
                'akronim' => 'DISPORAPAR',
                'slug' => 'disporapar',
            ],
            [
                'nm_satker' => 'DINAS PERPUSTAKAAN',
                'akronim' => 'DISTAKA',
                'slug' => 'distaka',
            ],
            [
                'nm_satker' => 'DINAS KOPERASI, USAHA MIKRO DAN PERDAGANGAN',
                'akronim' => 'DKUMP',
                'slug' => 'dkump',
            ],
            [
                'nm_satker' => 'BADAN PENANGGULANGAN BENCANA DAERAH',
                'akronim' => 'BPBD',
                'slug' => 'bpbd',
            ],
            [
                'nm_satker' => 'DINAS PENANAMAN MODAL, TENAGA KERJA DAN PELAYANAN TERPADU SATU PINTU',
                'akronim' => 'DPMTKPTSP',
                'slug' => 'dpmtkptsp',
            ],
            [
                'nm_satker' => 'DINAS SOSIAL',
                'akronim' => 'DINSOS',
                'slug' => 'dinsos',
            ],
            [
                'nm_satker' => 'DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN',
                'akronim' => 'PERKIM',
                'slug' => 'perkim',
            ],
            [
                'nm_satker' => 'RUMAH SAKIT UMUM DAERAH',
                'akronim' => 'RSUD',
                'slug' => 'rsud',
            ],
            [
                'nm_satker' => 'OPD UJI COBA',
                'akronim' => 'UJICOBA',
                'slug' => 'ujicoba',
            ],
        ];

        foreach ($data as $item) {
            SatuanKerja::create([
                'nm_satker' => $item['nm_satker'],
                'akronim' => $item['akronim'],
                'slug' => $item['slug'],
            ]);
        }
    }
}
