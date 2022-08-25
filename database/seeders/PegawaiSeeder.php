<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataBKPSDM = [
            [
                'nm_pegawai' => 'JAYA SUTARDI,SH',
                'nip' => '196805231995031002',
                
                'satker_id' => 10,
                'jabatan' => 'KEPALA BKPSDM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AGUS BADRUN',
                'nip' => '196908051991021003',
                
                'satker_id' => 10,
                'jabatan' => 'SEKRETARIS BKPSDM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RUMIRIS RAMARITO NAINGOLAN ,SH',
                'nip' => '198109112010012018',
                
                'satker_id' => 10,
                'jabatan' => 'KABID PEMBINAAN, PENGANALISA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HENDRA PERMANA ,S.IP',
                'nip' => '198804292007011004',
                
                'satker_id' => 10,
                'jabatan' => 'KABID PERENCANAAN, PENGEMBANGAN & DIKLAT APARATUR',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AGUSTINI ,SE',
                'nip' => '197308052005022002',
                
                'satker_id' => 10,
                'jabatan' => 'KASUBBAG PERENCANAAN &',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RAHYUNI ,S.IP',
                'nip' => '198004042009042002',
                
                'satker_id' => 10,
                'jabatan' => 'ANALIS SUMBER DAYA MANUSIA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'CRESSY SANTY, S. SOS',
                'nip' => '198012212009042001',
                
                'satker_id' => 10,
                'jabatan' => ' KASUBBAG UMUM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARKUS ECIN ,S.PD',
                'nip' => '198209052009041001',
                
                'satker_id' => 10,
                'jabatan' => 'ANALIS SUMBER DAYA MANUSIA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'CRISTI SANDY SP PANJAITAN ,SP',
                'nip' => '198411072009041001',
                
                'satker_id' => 10,
                'jabatan' => 'ANALIS SUMBER DAYA MANUSIA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SYUJAMRI, ,S.SOS',
                'nip' => '198504252006041004',
                
                'satker_id' => 10,
                'jabatan' => 'ANALIS SUMBER DAYA MANUSIA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANITA RANDISARI OKTAVIA ,SE,.M.AK',
                'nip' => '198610082015022001',
                
                'satker_id' => 10,
                'jabatan' => 'ASSESSOR SUMBER DAYA ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANGGA PAREIRA ,S.STP',
                'nip' => '199110092012061002',
                
                'satker_id' => 10,
                'jabatan' => 'ANALIS SUMBER DAYA MANUSIA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YETNAYATI, ,S.SOS',
                'nip' => '197509222014072003',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RATNA DEWI, A. MD',
                'nip' => '198001262009042001',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FITRI MAHMUDAH, ,S.SOS',
                'nip' => '198208132006042016',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YULIANA ,AMD',
                'nip' => '198303032011012007',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SATRIA DARMA PUTRA, ,S.SOS',
                'nip' => '198309192011011006',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'UMAR SODERI ,AMD',
                'nip' => '198401182009041001',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ETNI MARLENA ,S.PD',
                'nip' => '198403192014072006',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUHENDRO GULTOM ,S.KOM',
                'nip' => '198908082015021003',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PATRIA YOKI ,S.KOM',
                'nip' => '199001082015021001',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ALIANUS ,AMD',
                'nip' => '197603282006041014',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ROBERTUS ,AMD',
                'nip' => '197810032011011003',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WINNER PARENT ,S.E',
                'nip' => '199405062020121012',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'URAY DIRHAM AGYANDI ,S.STP',
                'nip' => '199706302019081002',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AGUSTINUS JOHN RICKY ,AMD',
                'nip' => '198608222015021001',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WAHYU WIBOWO',
                'nip' => '198603082011011003',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUCHAMAD TAUFIQ MAGHRIBBIE ANANDA ,A.Md',
                'nip' => '199204262020121003',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUWARDIYANTO',
                'nip' => '198401012014071001',
                
                'satker_id' => 10,
                'jabatan' => 'STAF',
                'password' => '123456',
            ],
        ];

        foreach ($dataBKPSDM as $item) {
            Pegawai::create([
                'nm_pegawai' => strtoupper($item['nm_pegawai']),
                'nip' => $item['nip'],
                
                'satker_id' => $item['satker_id'],
                'jabatan' => $item['jabatan'],
                'password' => Hash::make($item['password']),
            ]);
        }

        // ----------------------------------

        $dataRSUD = [
            [
                'nm_pegawai' => 'DR, EDWARD SIAGIAN.PD ,SP',
                'nip' => '196405191995031001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Madya ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SRI WAHYUNI ,APT',
                'nip' => '198006012006042018',
                
                'satker_id' => 20,
                'jabatan' => 'Akper Ahli Madya ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRG, PARULIAN TAMBA',
                'nip' => '197510212008031001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Gigi Muda ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRG, RAHMAT SUPRIADI SIMBOLON',
                'nip' => '197601272008031001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Gigi Muda ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'dr. GUNADI LINOH',
                'nip' => '197106102002121006',
                
                'satker_id' => 20,
                'jabatan' => 'Direktur ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUSADAR,S.SOS',
                'nip' => '196811201989111001',
                
                'satker_id' => 20,
                'jabatan' => 'Kabid Pelayanan & Penunjang Medik',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, TANJUNG HARAPAN TAMPUBOLON',
                'nip' => '197408042005021002',
                
                'satker_id' => 20,
                'jabatan' => 'Kabid Keperawatan,Pengendalian & Pengembangan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, MUHAMMAD ALIF. OG ,SP',
                'nip' => '198206062009041001',
                
                'satker_id' => 20,
                'jabatan' => 'Kasi Penunjang Medik',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RANNY KUSUMAWTI. ,APT',
                'nip' => '198402292008032002',
                
                'satker_id' => 20,
                'jabatan' => 'Kasi Pelayanan Medik ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SRI MULYATI',
                'nip' => '196506101986032025',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KRISTIAN STEPANUS',
                'nip' => '197009261991021001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SURIANI',
                'nip' => '197107131992032003',
                
                'satker_id' => 20,
                'jabatan' => 'Pranata Laboratarium kesehatan Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LINA ERIYATI. KEB ,AMD',
                'nip' => '197311202006042017',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'JOKO DARMAJI ,AMD.KEP',
                'nip' => '197407021994031004',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RAGIL SUPARNO ,AMD',
                'nip' => '197701222003121003',
                
                'satker_id' => 20,
                'jabatan' => 'Penyelia Sanitarian',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, JOHN KURNIAWAN RANTEPADANG',
                'nip' => '197709122005021001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SITI MAHFUDATUN ,AMD.KEP',
                'nip' => '197801272006042010',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, FANNY JERRY STOMCY TANGKUD',
                'nip' => '197907062009041005',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ERMIYATI ,AMD.KEP',
                'nip' => '197910142002122007',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, PENGKY SANTOSO',
                'nip' => '198001142014031001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, HENDERA TANUJAYA TAN.O ,SP',
                'nip' => '198005182011011004',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Spesialis Kandungan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DIAH HARTINI, A. MD. KEP',
                'nip' => '198008192006042010',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KURNIA KRISTIANI, A. MD KEB',
                'nip' => '198110192006042010',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LENI LESTARI. F ,AMD',
                'nip' => '198111302006042020',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SAPERIUS GANDUT ,AMD.KEP',
                'nip' => '198207212006041008',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEWI SETIAWATI ,AMD.KEP',
                'nip' => '198209062006042009',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RAJUNA, A. MD. GIZI',
                'nip' => '198211162006042012',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrisionis Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LENI PURNAWATI ,AMD.KEP',
                'nip' => '198312052006042012',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NINA. S, SKM',
                'nip' => '198312152009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PURWANINGSIH, NS ,S.KEP',
                'nip' => '198405312005022001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HANI ROSALINI, A. MD. KEP',
                'nip' => '198408312006042011',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, TRISMAN DESESA',
                'nip' => '198612132014031002',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, HELY PURBASARI',
                'nip' => '198809192014032003',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MILES. M ,SP',
                'nip' => '198004102006041016',
                
                'satker_id' => 20,
                'jabatan' => 'Kabbag TU',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, HERLINA',
                'nip' => '198609172011012019',
                
                'satker_id' => 20,
                'jabatan' => 'Kasi Pengendalian & Pengembangan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUTEJO',
                'nip' => '196809142000031004',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HENDRIKA RATNA SARI SUMANTI, A',
                'nip' => '196907152008032001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YOHANES EKO NUGROHO ,AMD.KEP',
                'nip' => '197612112006041016',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IKE SUSANTI',
                'nip' => '197705072003121001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Gigi Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FRISKA SITUMEANG.G ,AMD',
                'nip' => '197809082006042009',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrionis Mahir /  Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ROMAULI TINAMBUNAN.KEB ,AMD',
                'nip' => '197812262009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, FIKRI HIKMASANJAYA',
                'nip' => '197901302014031001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VERONIKA ARGIYANTI',
                'nip' => '198101042006042024',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'UMI KUSMIYAH ,AMD.KEP',
                'nip' => '198105082009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FAZRI ILHAM. AK ,AMD',
                'nip' => '198105102006041016',
                
                'satker_id' => 20,
                'jabatan' => 'Laboratorium Kesehatan Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NUR ROHMAN ,AMD.KEP',
                'nip' => '198105222009041001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARISTILA YULIANA ,AMD.KEP',
                'nip' => '198106132009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SELVI HUTASOIT',
                'nip' => '198202122006042014',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NORINI ,AMD.KEP',
                'nip' => '198205152009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EVA RISKAYANTI ,AMD.KEP',
                'nip' => '198207282006042031',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, LIUS MARSON LING.B ,SP',
                'nip' => '198209062008032001',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, RACHMAT WIARDI',
                'nip' => '198211282014031002',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOTO SUSANTO ,AMD',
                'nip' => '198212052008031002',
                
                'satker_id' => 20,
                'jabatan' => 'Perekam Medis Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'F. DEPRANATALIS, A. MD.KEP',
                'nip' => '198212182005021002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SRI WAHYUNI ,AMD.KEP',
                'nip' => '198301152009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MENOT ARDIAN. NERS ,S.KEP',
                'nip' => '198304182005021001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURUL HUDA ,AMD.KEP',
                'nip' => '198304192009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KRISTINA ANA.NERS ,S.KEP',
                'nip' => '198305052009042009',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FRANSOLANUS JIMMI. AK ,AMD',
                'nip' => '198307132006041006',
                
                'satker_id' => 20,
                'jabatan' => 'Pranata Lab Kesehatan Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARTINA TRI ENDRATI GIZI ,AMD',
                'nip' => '198308102006042020',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrionis Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BERLIANA BORU SIHOMBING. ,AMD',
                'nip' => '198309282009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrionis Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YUYUL NATALIA ,AMD',
                'nip' => '198312202009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrionis Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BONAULI BORU PASARIBU.KE ,AMD',
                'nip' => '198405122008032003',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrionis Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HERI SATRIA.FIS ,AMD',
                'nip' => '198406182008031002',
                
                'satker_id' => 20,
                'jabatan' => 'Fisioterapi Pelaksana Lanjutan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANASTASIA OCIRIANA.FIS ,AMD',
                'nip' => '198501182009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Fisioterapi Pelaksana Lanjutan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'UTIN DIAH LINGGARSARI.AK ,AMD',
                'nip' => '198502122009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Pranata Laboratarium kesehatan Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUMIYATI ,AMD.KEP',
                'nip' => '198502142009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARTIN NOOR ,S.SI',
                'nip' => '198503112010011012',
                
                'satker_id' => 20,
                'jabatan' => 'Analis Laboratorium',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LINDA PANJAITAN ,AMD.KEP',
                'nip' => '198504012009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HERKULANUS ANTONIUS ,AMD.KEP',
                'nip' => '198504112009041002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'M. ALIRAHMAN ,AMD.KEP',
                'nip' => '198505042009041001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEVI YULITA SARI, A. MD. FAR',
                'nip' => '198507052009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, GAVRILA DIVA AMELIS',
                'nip' => '198509022011012009',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VIVI HENDRIYANI ,AMD.KEP',
                'nip' => '198509222009042004',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SESILIA YUNITA BILLY.KG ,AMD',
                'nip' => '198509242009042002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Gigi Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DR, RUDYANTO',
                'nip' => '198510102015021002',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ASTERIA TRISA ,S.KM',
                'nip' => '198510182010012012',
                
                'satker_id' => 20,
                'jabatan' => 'Penyuluh Kesehatan Masyarakat ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUMIANTI ,AMD.KEP',
                'nip' => '198511112009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IIS IRAWATI. KEB ,AMD',
                'nip' => '198511252009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SURYANINGSIH.AK ,AMD',
                'nip' => '198601242009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Pranata Laboratarium kesehatan Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EVI SUHADA. A.Md.KG ,AMD.KG',
                'nip' => '198606012009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Gigi Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DAHLIA, A. MD. KEP',
                'nip' => '198606022009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LOKAWATI, A. MD. KEP',
                'nip' => '198606142009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FRANSISKA TRININGSIH. KE ,A.MA',
                'nip' => '198607072009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ILUS JULIANI ,AMD.KEP',
                'nip' => '198607172009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SYAMSUWARDI ,AMD.KEP',
                'nip' => '198609012009041002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RIRIEN MARDISEPTININGSIH ,AMD',
                'nip' => '198609192009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EKA OKTAVIA ROSALINA.FAR ,A.MA',
                'nip' => '198610012009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BEATRIKS HALLA ,AMD.KEP',
                'nip' => '198610082009042003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DIAN MAYASARI ,AMD.KEP',
                'nip' => '198612222009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUSILAWATI.FAR ,AMD',
                'nip' => '198701132010012010',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IIN SATRIANI ,AMD.KEP',
                'nip' => '198703102010012017',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AGUSTINA, A. MD. KEP',
                'nip' => '198708142009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RITA MAHTASARI. AK ,AMD',
                'nip' => '198709082009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Pranata Laboratarium kesehatan Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVI KUSTINA JAYANTY ,AMD.KEP',
                'nip' => '198806202009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SIKA MELISA ,AMD.KEP',
                'nip' => '198808232009042001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BEKTI SRI PORWANTI ,AMD.KEP',
                'nip' => '198809022010012009',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NICKY DWI YUSTIANTI ,AMD.KEP',
                'nip' => '198901092010012005',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEWI FITRI YANTI.NS ,S.KEP',
                'nip' => '198904242014032002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KUMALA SARI.NS ,S.KEP',
                'nip' => '199009022014032005',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SRI DAMAYANTI.NS ,S.KEP',
                'nip' => '199012022015022003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUHAMAD YUMNI, ,S.SOS',
                'nip' => '198001072005021002',
                
                'satker_id' => 20,
                'jabatan' => 'Kepala Subbag Perencanaan & Keuangan  ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AMBARWATI, ,S.SOS',
                'nip' => '198312052006042020',
                
                'satker_id' => 20,
                'jabatan' => 'Kepala Subbag TU & Kepegawaian ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MAGDALENA ERNAKULATA ,SE',
                'nip' => '198510112010012021',
                
                'satker_id' => 20,
                'jabatan' => 'Kasi Keperawatan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ABANG ASMADI DANCO, S.I.P',
                'nip' => '197404172006041016',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'APRIANTO SEMUEL ONTHONY. ,AMD',
                'nip' => '197504282006041005',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Pelaksana',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NGADIRAN, ,S.SOS',
                'nip' => '197602202006041014',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'TITIM DILIANA.TW ,AMD',
                'nip' => '197905022005022003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KRISTIANUS PURMA ,AMD.KEP',
                'nip' => '198402062005021002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DARLIA ASTUTI, ,S.SOS',
                'nip' => '198406192006042010',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUCI LESTARI NINGSIH.FAR ,AMD',
                'nip' => '198505042010012031',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Penyelia ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANDREAS AJUNG.PERKES ,AMD',
                'nip' => '198512042011011011',
                
                'satker_id' => 20,
                'jabatan' => 'Perekam Medis Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SHADLI ARIYADI ,AMD.KEP',
                'nip' => '198607162009041001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PEDUPU SEMA SERA DEPUTURIO, A.',
                'nip' => '198703292009041001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SIGIT GUSTOFO AKBAR, AMR',
                'nip' => '198708062009041002',
                
                'satker_id' => 20,
                'jabatan' => 'Radiografer Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DESY JUNIARTI ,AMD.KEP',
                'nip' => '198906122011012007',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SARI WAHYUNI ,AMD.KEP',
                'nip' => '198909212011012007',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VICAYANTI ELISABETH SIBUEA, A.',
                'nip' => '198910082011012004',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IRMA SEPTIANA ,S.Farm.,Apt',
                'nip' => '199009302019032003',
                
                'satker_id' => 20,
                'jabatan' => 'Apoteker Ahli Pertama',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'dr, MIA PUTRI RAHAYU',
                'nip' => '199108282019032002',
                
                'satker_id' => 20,
                'jabatan' => 'Dokter Ahli Muda',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PATRISIA HALLA',
                'nip' => '199410192019032002',
                
                'satker_id' => 20,
                'jabatan' => 'Apoteker Ahli Pertama',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARIYAM',
                'nip' => '197804232006042000',
                
                'satker_id' => 20,
                'jabatan' => 'bidan mahir',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVALINA NAIBORHU.FAR ,AMD',
                'nip' => '198207272014032001',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LENA OKTARIANA. KES ,AMD',
                'nip' => '198311052010012019',
                
                'satker_id' => 20,
                'jabatan' => 'Pengatur  Adm Rumah Sakit',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LINDATI NERLIANA BR PURBA, A.M',
                'nip' => '198610252014032002',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IGA MALASARI ,AMD.KEP',
                'nip' => '198808152014032002',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ERIKA MAULINA PANJAITAN. A.MD.',
                'nip' => '198809302014032004',
                
                'satker_id' => 20,
                'jabatan' => 'Teknisi Elektromedis Pelaksana ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KASWILI CESARIA PRATIWI. ,AMD',
                'nip' => '199001082014032003',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVITA CHANDRIKA.KEB ,AMD',
                'nip' => '199002262014032003',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEA APRILIANOSA ,AMD.KEP',
                'nip' => '199004182014031001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURMANIZA. A.MD.KEB',
                'nip' => '199005232014032002',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RIYAN BHARQAH KOTO ,A.MAd, RAD',
                'nip' => '199010182015021003',
                
                'satker_id' => 20,
                'jabatan' => 'Radiografer Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KARWITO ,AMD. RAD',
                'nip' => '199012152014031001',
                
                'satker_id' => 20,
                'jabatan' => 'Radiologi Pelaksana',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NUR FAJAR RIAWATI ,S.Gz',
                'nip' => '199103292020122011',
                
                'satker_id' => 20,
                'jabatan' => 'Ahli Pertama - Nutrisionis',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MERLINDA SILALAHI.PIK ,AMD',
                'nip' => '199209022014032001',
                
                'satker_id' => 20,
                'jabatan' => 'Perekam Medis Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'Ns., ANDIK SYAIFUDIN ,S.Kep',
                'nip' => '199211252019031001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'Ns., SUKRI AFRIZUL ILHAM ,S.Kep',
                'nip' => '199304102019031001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VALERIA ANGGELA ,S.Kep.Ns',
                'nip' => '199406302020122016',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ALFIANA NOVI AULIA ,S.Kom',
                'nip' => '199411142020122010',
                
                'satker_id' => 20,
                'jabatan' => 'Ahli Pertama - Pranata Komputer',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LAILI ATIKA PUTRI WIBOWO ,S.Tr.Keb',
                'nip' => '199609272020122010',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Pelaksana Lanjutan ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ULIL AINAWATI ,S.Tr.Kes',
                'nip' => '199701272020122007',
                
                'satker_id' => 20,
                'jabatan' => 'Ahli Pertama - Sanitarian',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ABANG SUHARTO',
                'nip' => '196504142006041003',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YOHANA',
                'nip' => '196611102006042010',
                
                'satker_id' => 20,
                'jabatan' => 'Pengadministrasian Umum',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURBAYA',
                'nip' => '197608182006042027',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PETRUS ,A.Md.Gizi',
                'nip' => '198711122010011006',
                
                'satker_id' => 20,
                'jabatan' => 'Nutrisionis Pelaksana ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ERY DWI INDARTO.RMIK ,AMD',
                'nip' => '199102012015021001',
                
                'satker_id' => 20,
                'jabatan' => 'Perekam Medis Pelaksana  ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ELLYA MINARNI',
                'nip' => '197506112012122001',
                
                'satker_id' => 20,
                'jabatan' => 'Teknis/ Administrasi Lainnya',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KRISTINA MARIATA',
                'nip' => '198204012012122002',
                
                'satker_id' => 20,
                'jabatan' => 'Teknis/ Administrasi Lainnya',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEBY RIZNAWATY ,A.Md,Kep',
                'nip' => '198512122019032001',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PAULUS SINGA',
                'nip' => '198812252019031001',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Terampil',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ADE IRMA RAMADHANI ,A.Md,Kep',
                'nip' => '198904102020122009',
                
                'satker_id' => 20,
                'jabatan' => 'Perawat Penyelia',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RETNO AYUNINGRUM ,A.Md,Rad',
                'nip' => '199002172019032002',
                
                'satker_id' => 20,
                'jabatan' => 'Radiografer Terampil',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DIAN LESTARI ,A.Md,Kep',
                'nip' => '199106222020122012',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Perawat',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IRENE YULISA PURBA ,A.Md,Kep',
                'nip' => '199207042019032002',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Perawat',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HAJAH HAIRAH ,A.Md,Far',
                'nip' => '199302022020122008',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Asisten Apoteker',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YEYEN ARMEYLA ,A.Md,Keb',
                'nip' => '199305082019032001',
                
                'satker_id' => 20,
                'jabatan' => 'Bidan Terampil',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVARIA PUTRI RAHAYU ,A.Md,Far',
                'nip' => '199311032019032003',
                
                'satker_id' => 20,
                'jabatan' => 'Asisten Apoteker Terampil',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURUL WIDYANINGRUM ,A.Md,Keb',
                'nip' => '199402162020122008',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Bidan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VIBBRY IMELDA SIMANUNGKALIT ,A.Md,Fis',
                'nip' => '199405262019032003',
                
                'satker_id' => 20,
                'jabatan' => 'Fisioterapi Terampil',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HENI NORZA ,A.Md,Kep',
                'nip' => '199409272020122008',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Perawat',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'OKTA RAHMAWATI',
                'nip' => '199410102019032001',
                
                'satker_id' => 20,
                'jabatan' => 'Radiografer Terampil',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YUDHI FRASETYA ,A.Md',
                'nip' => '199412222020121010',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Teknisi Elektromedis',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RIMA DESKA SARI ,A.Md',
                'nip' => '199412292020122017',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Asisten Penata Anestesi',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HERI SETIAWAN ,A.Md,Rad',
                'nip' => '199504112020121013',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Radiografer',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MIA LESTARI ,A.Md,Kep',
                'nip' => '199605052020122017',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Perawat',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'OKTAVIA PUTRI ASARI ,A.Md,Kep',
                'nip' => '199610062019032001',
                
                'satker_id' => 20,
                'jabatan' => 'Pelaksana/Terampil - Perawat',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YUSTINI',
                'nip' => '197906132012122002',
                
                'satker_id' => 20,
                'jabatan' => 'Teknis/ Administrasi Lainnya',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SRI JAMINAH',
                'nip' => '198003022012122001',
                
                'satker_id' => 20,
                'jabatan' => 'Fungsional Umum ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUHAMMAD KHAIRAL',
                'nip' => '198210112014071002',
                
                'satker_id' => 20,
                'jabatan' => 'Teknis/ Administrasi Lainnya',
                'password' => '123456',
            ],
        ];

        foreach ($dataRSUD as $item) {
            Pegawai::create([
                'nm_pegawai' => strtoupper($item['nm_pegawai']),
                'nip' => $item['nip'],
                
                'satker_id' => $item['satker_id'],
                'jabatan' => $item['jabatan'],
                'password' => Hash::make($item['password']),
            ]);
        }

        // ----------------------------------

        $dataBPKAD = [
            [
                'nm_pegawai' => 'ABANG MANGKOTA, ,S.SOS',
                'nip' => '196406101986031026',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala BPKAD Kabupaten Melawi',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ALFIAN, SE',
                'nip' => '197001261997031003',
                
                'satker_id' => 11,
                'jabatan' => 'Sekretaris BPKAD Kabupaten Melawi',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ABANG ARDIAN, SE',
                'nip' => '197603232005021002',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala Bidang Akuntansi',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VERWIN RAHMADAN ,S.HUT',
                'nip' => '197908091998031002',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala Bidang Perbendaharaan dan Kas Daerah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EPIDIANUS LORE, S. KOM., M.M',
                'nip' => '197901292006041009',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbid  Analis Belanja dan Pembiayaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ELLEN FRANSISCA PATTIPEILOHY, SE',
                'nip' => '197911192005022005',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala  Bidang Aset',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RIO ROSSANDI NURIAN, S.IP.,ME',
                'nip' => '198810192007011003',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala Bidang Anggaran',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HERI ANWARI, S.SOS',
                'nip' => '197705122006041017',
                
                'satker_id' => 11,
                'jabatan' => 'Fungsional Penilai Pemerintah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EKO SUTIYOSO, SE',
                'nip' => '197801192006041008',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala Sub Bidang Pembukuan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IDA SURIYATI, SE',
                'nip' => '197904022006042022',
                
                'satker_id' => 11,
                'jabatan' => 'Fungsional Analis Keuangan Pusat dan Daerah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DESSIE YULIANA, SE',
                'nip' => '198012122008032001',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbag Pengelolaan Kas Daerah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SYAFRIA SAWALI, SE',
                'nip' => '198407142009041001',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbid Pelaporan Keuangan Daerah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PATRISIA UCANG ASYE,  SE,M.Ak',
                'nip' => '198701292010012010',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbid Perencanaan Kebutuhan dan Inventarisasi',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DUMILAH, SE',
                'nip' => '197209212008032002',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Data dan Informasi',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SAMUEL EKO RAYA TAMPUBOLON, SE',
                'nip' => '197809222009041002',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perbendaharaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ELLYSABET, SE',
                'nip' => '198010162011012003',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perbendaharaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DWI ANDIKA SARI, S.SOS',
                'nip' => '198305222006042007',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perbendaharaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANASTASIA DEWI SARTIKA, SE',
                'nip' => '198612222010012019',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perencanaan Anggaran',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AKHMAD SYAMSUHARDI, SE',
                'nip' => '198709012009041001',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Pengelolaan Rekening Pemerintah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BUDI TARIGAN, S.SOS',
                'nip' => '197209202005021002',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbag Umum dan Kepegawaian',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SYAMSURI, S.AP',
                'nip' => '197312042005021002',
                
                'satker_id' => 11,
                'jabatan' => 'Kepala Sub Bidang Perbendaharaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARTINUS, S. Sos., M.SI',
                'nip' => '198302282006041003',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbid Pemanfaatan, Pengawasan dan Penghapusan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'REFINA ELSA, S.SOS',
                'nip' => '198406112006042006',
                
                'satker_id' => 11,
                'jabatan' => 'Kasubbid  Perencanaan Anggaran ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YESIKA, S.PAK',
                'nip' => '197603212014072003',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perencanaan Anggaran',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'M. DAHLAN, SE',
                'nip' => '198408172014031003',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Pelaporan dan Transaksi Keuangan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YUNIKI ERNAWATI, S.SOS',
                'nip' => '198505262010012015',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Pengelolaan Rekening Pemerintah',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EDY SETYAWAN, S.A.B',
                'nip' => '197904022014071004',
                
                'satker_id' => 11,
                'jabatan' => 'Pengelola Barang Milik Negara',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUHARDIYANTO, S.Kom',
                'nip' => '198103272011011004',
                
                'satker_id' => 11,
                'jabatan' => 'Pengelola Barang Milik Negara',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'USMAN, A.Md',
                'nip' => '198202022010011034',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perbendaharaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ARTICHA MEILANIA DARANANDA, S.Pn',
                'nip' => '199605122020122014',
                
                'satker_id' => 11,
                'jabatan' => 'AHLI-PERTAMA ANALIS KEUANGAN PEMERINTAH PUSAT DAN DAERAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PRIESKA MANALU, S.Ak',
                'nip' => '199704022020122016',
                
                'satker_id' => 11,
                'jabatan' => 'AHLI-PERTAMA ANALIS KEUANGAN PEMERINTAH PUSAT DAN DAERAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FITRI NINGSIH, ST',
                'nip' => '199012152019032003',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perencanaan Anggaran',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AMALUDDIN NOER',
                'nip' => '197105012005021002',
                
                'satker_id' => 11,
                'jabatan' => 'Pengelola Barang Milik Negara',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MATHIAS',
                'nip' => '198004282006041014',
                
                'satker_id' => 11,
                'jabatan' => 'Bendahara',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MURNI SEVENTEENCE PARHUSIP, A.Md',
                'nip' => '198409022015022002',
                
                'satker_id' => 11,
                'jabatan' => 'Analis Perbendaharaan',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ADI BUANA',
                'nip' => '198607192006041003',
                
                'satker_id' => 11,
                'jabatan' => 'Bendahara',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SURIPTO ARDI PRAYETNO',
                'nip' => '197705202012121003',
                
                'satker_id' => 11,
                'jabatan' => 'Pengelola Barang Milik Negara',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ITA MERI',
                'nip' => '197509242014072004',
                
                'satker_id' => 11,
                'jabatan' => 'Pengelola Barang Milik Negara',
                'password' => '123456',
            ],
        ];

        foreach ($dataBPKAD as $item) {
            Pegawai::create([
                'nm_pegawai' => strtoupper($item['nm_pegawai']),
                'nip' => $item['nip'],
                
                'satker_id' => $item['satker_id'],
                'jabatan' => $item['jabatan'],
                'password' => Hash::make($item['password']),
            ]);
        }

        // ----------------------------------

        $dataSETDA = [
            [
                'nm_pegawai' => 'DRS, PAULUS',
                'nip' => '196610171992031010',
                
                'satker_id' => 1,
                'jabatan' => 'SEKRETARIS DAERAH ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IMANSYAH, ,S.SOS',
                'nip' => '196510021986031010',
                
                'satker_id' => 1,
                'jabatan' => 'ASISTEN PEMERINTAHAN  ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRS, Drs.JOKO WAHYONO, M.SI ,M.SI',
                'nip' => '196703031988031011',
                
                'satker_id' => 1,
                'jabatan' => 'ASISTEN ADMINISTRASI UMUM  ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRS, OSLAN JUNAIDI',
                'nip' => '196706301994011003',
                
                'satker_id' => 1,
                'jabatan' => 'STAF AHLI BUPATI BIDANG EKONOMI, KEUANGAN DAN PEMBANGUNAN ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'P.R BENIROBIN, . ,M.SI',
                'nip' => '196909191990101001',
                
                'satker_id' => 1,
                'jabatan' => 'ASISTEN EKONOMI KESRA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'A. DERAUP. ,M.SI',
                'nip' => '196506081998031004',
                
                'satker_id' => 1,
                'jabatan' => 'STAF AHLI BUPATI BIDANG PEMERINTAHAN,HUKUM & POLITIK',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SILVANI UMRAN.,S.STP .MM',
                'nip' => '197706281996121002',
                
                'satker_id' => 1,
                'jabatan' => 'STAF AHLI BUPATI  BIDANG KEMASYARAKATAN DAN SUMBER DAYA MANUSIA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'H. AKHMAD, ,S.SOS',
                'nip' => '196407031989031020',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG  ADMINISTRASI DAN TU PIMPINAN ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRA, RATNA IRAWATI ,M.SI',
                'nip' => '196505281992032006',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG ORGANISASI ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'TEGUH. HS ,M.SI',
                'nip' => '196511111989011004',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG KESEJAHTERAAN RAKYAT ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRS, SUMINGGAR SIRINGORINGO',
                'nip' => '196601251994031009',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG  EKONOMI DAN PEMBANGUNAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DRS, H. M. YAMIN',
                'nip' => '196810171994031010',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG TATA PEMERINTAHAN ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HJ. KUSNIARTI ,S.PD',
                'nip' => '197505251999032003',
                
                'satker_id' => 1,
                'jabatan' => 'FASILITATOR KEMITRAAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NINING YULIATI, S. PT',
                'nip' => '197107062005022001',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG LAYANAN PENGADAAN BARANG DAN JASA ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IIQ PRIBADI ,SE',
                'nip' => '197209272006041012',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG HUBUNGAN MASYARAKAT DAN PROTOKOL ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AGUSTIAN SUMARDI ,SH',
                'nip' => '197408242006041003',
                
                'satker_id' => 1,
                'jabatan' => 'KABAG HUKUM DAN HAM ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUHAMMAD ALI. ,M.SI',
                'nip' => '197609182006041002',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ADE MUHAMMAD SYAMSU RIZAL ,SH',
                'nip' => '197807022006041016',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS HUKUM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RIDWAN, ,S.SOS',
                'nip' => '196908101993031012',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PLORIUS, SH ,SH',
                'nip' => '197211292010011006',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS HUKUM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MASYONO, S.AP',
                'nip' => '197408292006041001',
                
                'satker_id' => 1,
                'jabatan' => 'JF PENGELOLA PENGADAAN BARANG/JASA MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YUSUF SALIM. ST',
                'nip' => '198009172005021003',
                
                'satker_id' => 1,
                'jabatan' => 'JF PENGELOLA PENGADAAN BARANG/JASA MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HOTMAN HASIHOLAN LINGGA ,ST',
                'nip' => '198202162010011018',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'P. JOKO WIDYASTORO ,S.IP',
                'nip' => '198411202009041001',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SAGITARIUS, ,S.SOS',
                'nip' => '197404012006041020',
                
                'satker_id' => 1,
                'jabatan' => 'JF SANDIMAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WARIANTO, S.AP',
                'nip' => '197710282005021004',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ARIFIN SAYUTRI PUTRA ,SH',
                'nip' => '198304152011011003',
                
                'satker_id' => 1,
                'jabatan' => 'JF PERANCANG PERATURAN PERUNDANG - UNDANGAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SESILAWATI, ,S.SOS.,MAP',
                'nip' => '198307272006042013',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARSELINA, ,S.SOS.MAP',
                'nip' => '198401152006042010',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEUNGAN PUSAT DAN DAERAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVI TRIWULANDARI,S.SOS.,M.Si',
                'nip' => '198511062011012003',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEPEGAWAIAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'APRILIA SUKRISNI,S.SOS',
                'nip' => '198704042006042002',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NANY PRAMESWARI ,S.STP',
                'nip' => '199011082010102001',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LILIS TEODOSI ,SE,MM',
                'nip' => '199103202014032002',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SOLIHIN',
                'nip' => '196907161993031006',
                
                'satker_id' => 1,
                'jabatan' => 'PENYUSUN PROGRAM ANGGARAN DAN PELAPORAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KAMERIA,S.SOS',
                'nip' => '197106202006042022',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PENDIDIKAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KARTINAH ,AMD',
                'nip' => '197411182006042008',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PERENCANAAN SDM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'OLIMPAS,S.SOS',
                'nip' => '197502022009041001',
                
                'satker_id' => 1,
                'jabatan' => 'PENYUSUN RENCANA KEBUTUHAN RUMAH TANGGA DAN PERLENGKAPAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DESY MARLINA, S.Sos ',
                'nip' => '197812152009042002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS KESEJAHTERAAN RAKYAT',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANIS,S.SOS',
                'nip' => '197901052006041009',
                
                'satker_id' => 1,
                'jabatan' => 'BENDAHARA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EKA KRISTIANA, ,S.SOS',
                'nip' => '198107062006042031',
                
                'satker_id' => 1,
                'jabatan' => 'PENGELOLA KEUANGAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ALEKSANDER, ,S.SOS',
                'nip' => '198208112011011003',
                
                'satker_id' => 1,
                'jabatan' => 'PENYUSUN ABSTRAKSI HUKUM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ARIFIN,S.SOS',
                'nip' => '198308222015021001',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PENGEMBANGAN INFRASTRUKTUR',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NIKOLANUS JULIADI, S.Sos ,S.SOS',
                'nip' => '198406272006041005',
                
                'satker_id' => 1,
                'jabatan' => 'PENYUSUN PROGRAM ANGGARAN DAN PELAPORAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ABED NEGO TAEK, S. SOS',
                'nip' => '198511052014031001',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS KESEJAHTERAAN RAKYAT',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RENI APRIYANTI, ,S.SOS',
                'nip' => '198604212007012001',
                
                'satker_id' => 1,
                'jabatan' => 'FASILITATOR KEMITRAAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARSIANUS ,SE',
                'nip' => '198605072008031001',
                
                'satker_id' => 1,
                'jabatan' => 'VERIFIKATOR KEUANGAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YANUAR ,SH',
                'nip' => '198606052014031002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PRODUK HUKUM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'GUNARDI ,S.KOM',
                'nip' => '198703112015021002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS SISTEM INFORMASI DAN JARINGAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'INDERSON ,SH',
                'nip' => '198801152015022001',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PRODUK HUKUM',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'A. MUJIARI, S,SOS',
                'nip' => '198908032015021002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS JABATAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FEBI NOVIYANTI ,S.IP',
                'nip' => '199101252015021006',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PENGEMBANGAN POTENSI DAERAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FREDDY ANTARES ,S.KOM',
                'nip' => '199203072015021003',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PEREKONOMIAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SYAFWAN ADINATA ,S.STP',
                'nip' => '199405072017081002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PEMERINTAHAN UMUM DAN OTONOMI DAERAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WINDI PUSPITASARI ,S.STP',
                'nip' => '199509222017082001',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS TATA LAKSANA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BETHRIK BINSAR PARSAORAN SITIO ,S.STP',
                'nip' => '199601272017081002',
                
                'satker_id' => 1,
                'jabatan' => 'AJUDAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HERY SUSANTI,S.SOS',
                'nip' => '197703052002122007',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WELVI JUMADI ,AMD',
                'nip' => '198204302005021002',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SALMA NINGSIH,S.SOS',
                'nip' => '198210102007012013',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'TAUFIKUR RACHMAN, A. MD',
                'nip' => '198305012009041001',
                
                'satker_id' => 1,
                'jabatan' => 'JF PENGELOLA PENGADAAN BARANG/JASA MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YULIANA PAULA WOLLAH GOLE, S.Sos',
                'nip' => '198306182011012004',
                
                'satker_id' => 1,
                'jabatan' => 'KASUBBAG PROTOKOL',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RATNA JUITA ,S.KOM',
                'nip' => '198307042012122001',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FARIZ GHADATI ,S.IP',
                'nip' => '198806092014031002',
                
                'satker_id' => 1,
                'jabatan' => 'JF PRANATA HUMAS MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AWALUDIN HARAHAP ,S.STP',
                'nip' => '199102072014061002',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURKHAMDI,S.TTP',
                'nip' => '199208162016091001',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DIMAS SUSANTO ,S.STP',
                'nip' => '199312132015071006',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WIDODO',
                'nip' => '196909212005021001',
                
                'satker_id' => 1,
                'jabatan' => 'PETUGAS PRATOKOL',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARIANI. SAP',
                'nip' => '197409072011012003',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS TATA USAHA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'JONI, S.I.P',
                'nip' => '197410082006041014',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PRATOKOL',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SAPTO KAREBET PRIBADI',
                'nip' => '197811052014071003',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS TATA LAKSANA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RUSDIMAN',
                'nip' => '198705152009041001',
                
                'satker_id' => 1,
                'jabatan' => 'BENDAHARA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ARI SAPRIANTO ,S.Pd',
                'nip' => '198809182019031002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS TATA USAHA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SELVI NURDIANA ,S.IP',
                'nip' => '199008262020122010',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ANIK SEPTIANINGSIH ,S.Kom',
                'nip' => '199009092020122012',
                
                'satker_id' => 1,
                'jabatan' => 'PENELAAH KEBIJAKAN PENGADAAN BARANG DAN JASA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'F.ANASTASIA FAROKTARINA ,S.I.Kom',
                'nip' => '199010232020122011',
                
                'satker_id' => 1,
                'jabatan' => 'JF PRANATA HUMAS PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VIA OCTIWI ,S.IP',
                'nip' => '199110132020122015',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEPEGAWAIAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HERLINA AISYAH ,S.IP',
                'nip' => '199208042019032006',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUHAMMAD FATHONI ,S.Sos',
                'nip' => '199408142019031003',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS JABATAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VALID ZUHAERI ,S.Kom',
                'nip' => '199409132019031001',
                
                'satker_id' => 1,
                'jabatan' => 'JF PRANATA KOMPUTER PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEDE JALALUDDIN PUTRA ,S.H',
                'nip' => '199410062020121012',
                
                'satker_id' => 1,
                'jabatan' => 'JF PERANCANG PERATURAN PERUNDANG - UNDANGAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'TRI MICHAEL GERRY ,S.P',
                'nip' => '199505042020121009',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS TATA USAHA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PUTRI SULISTYAWATI ,S.SOS',
                'nip' => '199611132020122015',
                
                'satker_id' => 1,
                'jabatan' => 'JF ANALIS KEBIJAKAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SYAMSURI',
                'nip' => '198106202006041015',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS PEMERINTAHAN UMUM DAN OTONOMI DAERAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'UUN SURYADI ,AMD',
                'nip' => '198804172015021002',
                
                'satker_id' => 1,
                'jabatan' => 'ANALIS KELEMBAGAAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUGANDI',
                'nip' => '198212062006041011',
                
                'satker_id' => 1,
                'jabatan' => 'PENGELOLA DATA HUMAS DAN RUMAH TANGGA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUWANDI',
                'nip' => '198410122011011007',
                
                'satker_id' => 1,
                'jabatan' => 'PRANATA ACARA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'PAULUS BUDIANTO',
                'nip' => '198511142012121002',
                
                'satker_id' => 1,
                'jabatan' => 'PRANATA BARANG DAN JASA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DIKA ARIANDI ,A.Md,KL',
                'nip' => '199004252020121008',
                
                'satker_id' => 1,
                'jabatan' => 'AJUDAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'JIJEIBA BEBNEA BEGUNO ,A.Md.Gizi',
                'nip' => '199402062020121004',
                
                'satker_id' => 1,
                'jabatan' => 'AJUDAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IWAN DWI FEBRIANTO ,A.Md',
                'nip' => '199402192020121008',
                
                'satker_id' => 1,
                'jabatan' => 'JF PENATA LAKSANA BARANG TERAMPIL',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AMRIYADI',
                'nip' => '197907222014071002',
                
                'satker_id' => 1,
                'jabatan' => 'PENGELOLA BARANG MILIK NEGARA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'JEFRI SIMBOLON',
                'nip' => '198109262014071004',
                
                'satker_id' => 1,
                'jabatan' => 'PENGADMINISTRASI HUKUM',
                'password' => '123456',
            ],
        ];

        foreach ($dataSETDA as $item) {
            Pegawai::create([
                'nm_pegawai' => strtoupper($item['nm_pegawai']),
                'nip' => $item['nip'],
                
                'satker_id' => $item['satker_id'],
                'jabatan' => $item['jabatan'],
                'password' => Hash::make($item['password']),
            ]);
        }

        // ----------------------------------

        $dataINSPKT = [
            [
                'nm_pegawai' => 'DR, YAKOB TANGKIN, M.KES',
                'nip' => '196305201989011002',
                
                'satker_id' => 6,
                'jabatan' => 'INSPEKTUR',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HENDRY AKBAR SUSANTO. ST.,MM',
                'nip' => '197310271999031008',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MADYA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURBANA ANIWATI ,SE',
                'nip' => '196404241986032022',
                
                'satker_id' => 6,
                'jabatan' => 'IRBANWIL IV ',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KAPETETE, ,S.SOS',
                'nip' => '196407091987031016',
                
                'satker_id' => 6,
                'jabatan' => 'SEKRETARIS',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUSIANTO, M.M ,S.HUT',
                'nip' => '196807241997031001',
                
                'satker_id' => 6,
                'jabatan' => 'IRBANWIL II',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RIZALMAN, ,S.SOS',
                'nip' => '196904281990101002',
                
                'satker_id' => 6,
                'jabatan' => 'IRBANWIL III',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ARIF SANTOSO., MKM ,S.KM',
                'nip' => '197101241997031005',
                
                'satker_id' => 6,
                'jabatan' => 'IRBANWIL I',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SITI SEMEAH, ,S.SOS',
                'nip' => '196908181994032011',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MADYA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BUYUNG, ,S.SOS',
                'nip' => '197304192006041004',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MADYA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MAKMUR SIMORANGKIR ,ST',
                'nip' => '197312232006041010',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DEDY ISKANDAR ,ST',
                'nip' => '197510112006041004',
                
                'satker_id' => 6,
                'jabatan' => 'ANALIS PENGAWASAN INTERN PEMERINTAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IRMA SETIANINGSIH ,SE',
                'nip' => '198208122008032003',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVA ODELIA SULISTIWATI DAMANIK',
                'nip' => '198306062008032002',
                
                'satker_id' => 6,
                'jabatan' => 'ANALIS LAPORAN HASIL PENGAWASAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YILIN ,SE',
                'nip' => '197504212010012005',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YOHANES JEHARU ,SE',
                'nip' => '197810122010011008',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'DESI LUSIANA ,SE',
                'nip' => '197908152010012015',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'AGUS IRAWANTO ,SP',
                'nip' => '197908262007011009',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARGARETA, ,S.SOS',
                'nip' => '198003172006042020',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'YULIANTI ,SE',
                'nip' => '198007062009042002',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EKA NITA BLANDINA TILAN PUNG,',
                'nip' => '198306022011012004',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'LIDWINA WIWIN ,SE',
                'nip' => '198404282010012021',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'VERAWATI ,SE',
                'nip' => '198410012011012014',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUMADI, ,S.SOS',
                'nip' => '198512162006041003',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SEVA YUFANDA, S.E',
                'nip' => '198604072011012003',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'OKTAVIYANTI ,ST',
                'nip' => '198710162010012013',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR MUDA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'EDI HUMAIDI ICHSAN ,SH',
                'nip' => '197703162009041001',
                
                'satker_id' => 6,
                'jabatan' => 'KASUBBAG EVALUASI DAN PELAPORAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOSKER HUTABALIAN, ,S.SOS',
                'nip' => '198108062005021004',
                
                'satker_id' => 6,
                'jabatan' => 'KASUBBAG UMUM DAN KEPEGAWAIAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MARDIANA, ,S.SOS',
                'nip' => '197810092011012002',
                
                'satker_id' => 6,
                'jabatan' => 'ANALIS PENGAWASAN INTERN PEMERINTAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'SUHARDIMAN, ,S.SOS',
                'nip' => '197811022006041012',
                
                'satker_id' => 6,
                'jabatan' => 'ANALIS PENGAWASAN INTERN PEMERINTAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FAJAR RAHMAT TRI HENDRATNA ,ST',
                'nip' => '197903212010011011',
                
                'satker_id' => 6,
                'jabatan' => 'ANALIS MONITORING DAN EVALUASI PELAPORAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NOVIE ARDHIA GARINI, A. MD',
                'nip' => '198111032006042016',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR TERAMPIL',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'HENDRA PURWANA ,ST',
                'nip' => '198310082010011019',
                
                'satker_id' => 6,
                'jabatan' => 'PENYUSUNAN PROGRAM ANGGARAN DAN PELAPORAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'KELIMIN ,S.KOM',
                'nip' => '198408092015021001',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RONNY AKBAR PASARIBU ,SE',
                'nip' => '198510142015021001',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'RAHMAH ALAWIYAH ,S.SI',
                'nip' => '198911232015022001',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'FACHRI RAMADHAN ,S.KOM',
                'nip' => '199104152015021003',
                
                'satker_id' => 6,
                'jabatan' => 'ANALIS PENGAWASAN INTERN PEMERINTAH',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'BENYAMIN HERONIMUS BIRA ,AMD',
                'nip' => '198201042011011003',
                
                'satker_id' => 6,
                'jabatan' => 'PENGADMINISTRASIAN PERSURATAN',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'IAYAN FARA',
                'nip' => '198211102014071005',
                
                'satker_id' => 6,
                'jabatan' => 'BENDAHARA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ARITONGA.NST ,S.E',
                'nip' => '198511092020121002',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR KEPEGAWAIAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ERMAWATI PUSPITASARI ,S.H',
                'nip' => '198901172020122009',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR KEPEGAWAIAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'WAHYUNI FEBRIYANI ,S.IP',
                'nip' => '199102232020122011',
                
                'satker_id' => 6,
                'jabatan' => 'P2UPD PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'NURHIDAYAH ,SE',
                'nip' => '199508172019032003',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'REZKY KURNIAWAN',
                'nip' => '199607212019031001',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ICA KATERINA PARDEDE ,S.H',
                'nip' => '199705092020122016',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR KEPEGAWAIAN PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'MUHAMMAD SUSANTO ,S.E',
                'nip' => '199706102020121006',
                
                'satker_id' => 6,
                'jabatan' => 'AUDITOR PERTAMA',
                'password' => '123456',
            ],
            [
                'nm_pegawai' => 'ELVI NUR RITA ,A.Md',
                'nip' => '199509092020122013',
                
                'satker_id' => 6,
                'jabatan' => 'ARSIPARIS TERAMPIL',
                'password' => '123456',
            ],
        ];

        foreach ($dataINSPKT as $item) {
            Pegawai::create([
                'nm_pegawai' => strtoupper($item['nm_pegawai']),
                'nip' => $item['nip'],
                
                'satker_id' => $item['satker_id'],
                'jabatan' => $item['jabatan'],
                'password' => Hash::make($item['password']),
            ]);
        }
    }
}
