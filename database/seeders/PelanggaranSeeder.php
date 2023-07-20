<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Pelanggaran;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //a keterlambatan
            ['jenispelanggaran'=>'Terlambat masuk sekolah','tindakan'=>'Pengecekan tas dan mendapat teguran serta sanksi berupa siswa menyanyi lagu nasional/mengaji dan membershikan lingkungan sekolah','jmlh_point'=>5],

            ['jenispelanggaran'=>'Keluar dan meninggalkan sekolah saat jam istirahat/jam KBM tanpa seizin guru piket/wali kelas','tindakan'=>'Siswa dimintai keterangan dan surat pembinaan','jmlh_point'=>10],

            //b kehadiran
            ['jenispelanggaran'=>'Tidak masuk sekolah tanpa keterangan selama 3 kali','tindakan'=>'Siswa dimintai keterangan dan membuat surat perjanjian serta diberikan surat panggilan untuk orang tua','jmlh_point'=>25],

            ['jenispelanggaran'=>'Tidak mengikuti ekstrakurikuler yang telah dipilih','tindakan'=>'Diwajibkan membuat surat pernyataan sesuai dengan alasannya dan diberikan surat pembinaan','jmlh_point'=>10],

            ['jenispelanggaran'=>'Tidak mengikuti upacara bendera','tindakan'=>'Siswa ditugaskan membersihkan lingkungan sekolah dengan pengawasan guru','jmlh_point'=>10],

            //c pakaian seragam
            ['jenispelanggaran'=>'Seragam tidak rapih/baju tidak dimasukkan, tidak memakai sepatu sesuai ketentuan sekolah','tindakan'=>'Siswa langsung ditegur untuk merapihkan pakain dan sepatu akan disita(pemberian sanksi disesuaikan)berita acara penyitaan','jmlh_point'=>10],

            ['jenispelanggaran'=>'Memakai pakaian ketat/rok span, rok diatas 10cm diatas mata kaki','tindakan'=>'Siswa dipanggil untuk tidak memakai kembali (jika melanggar, rok ditandai dengan spidol permanen dan membuat surat pernyataan dan panggilan orangtua)','jmlh_point'=>15],

            ['jenispelanggaran'=>'Siswa laki2 memakai celana ketat, celana pensil, kantung banyak, celana 7/8(mengatung)','tindakan'=>'Siswa ditindak dengan melepas jahitan, panggilan orantua/wali siswa, siswa diminta membuat surat pernyataan didepan orantua/wali siswa(jika masih melanggar,celana langsung digunting','jmlh_point'=>15],

            ['jenispelanggaran'=>'Memakai atribut yang tidak ditentukan oleh sekolah seperti: topi bebas, ikat pinggang bukan hitam/kopel besar/bukan model yang telah ditentukan, jaket/rompi/sweter/cardigran di lingkungan sekolah; kecuali sakit(surat dokter)/diketahui guru piket','tindakan'=>'1 Kali pelanggaran atribut akan disita dan pembinaan, kemudian dikembalikan dengan membuat berita acara penyitaan','jmlh_point'=>10],

            ['jenispelanggaran'=>'Membuat/mencetak kaos, topi, sctiker, jaket, pin atau attribut lainnya dengan menggunakan logo dan nama sekolah yang dimodifikasikan tanpa seizin sekolah','tindakan'=>'Siswa diberi pengarahan/pembinaan dan membuat surat pernyataan untuk tidak dipakai dilingkungan sekolah(jika masih melanggar, orangtua siswa dipanggil kesekolah)','jmlh_point'=>15],

            //d kepribadian
            ['jenispelanggaran'=>'Bersolek berlebihan dilingkunagan sekolah: memakai lipstick, maskara, soft lens, blush on, eye liner, cat kuku/henna, dll','tindakan'=>'Alat make up diambil dan tidak dikembalikan kecuali pengharum badan dan minyak rambut kemudian dipanggil untuk diberi pengarahan dan pembinaan','jmlh_point'=>5],

            ['jenispelanggaran'=>'Memakai perhiasan berlebihan di lingkungan sekolah','tindakan'=>'Siswa dipanggil untuk diberi pengarahan/pembinaan moral','jmlh_point'=>5],

            ['jenispelanggaran'=>'Siswa memakai aksesoris(gelang,kalung,cincin)','tindakan'=>'Barang tersebut diambil dan tidak dikembalikan','jmlh_point'=>5],

            ['jenispelanggaran'=>'Ditindik, tatto temporary/permanen','tindakan'=>'Dikembalikan keorangtua','jmlh_point'=>100],

            ['jenispelanggaran'=>'Rambut siswa putra gondrong/model Mohawk/Skin','tindakan'=>'Siswa diberi peringatan, jika masih melanggar pihak sekolah akan melakukan pencukuran dengan pihak terkait','jmlh_point'=>15],

            ['jenispelanggaran'=>'Memelihara kuku panjang','tindakan'=>'Siswa diminta untuk memotong kuku saat itu juga','jmlh_point'=>5],

            ['jenispelanggaran'=>'Rambut putra/putri dicat/semir bukan hitam','tindakan'=>'Warna rambut diminta segera dikembalikan sesuai dengan warna aslinya(jika dalam yang ditentukan warna rambut belum ada perubahan, maka pihak sekolah akan melakukan pemotongan rambut)','jmlh_point'=>10],

            ['jenispelanggaran'=>'Rambut perempuan tergerai/tidak diikat','tindakan'=>'Siswa dipanggil untuk diberi pembinaan selanjutnya rambut diminta diikat(sanksi kebersihan)','jmlh_point'=>10],

            //e ketertiban
            ['jenispelanggaran'=>'Merusak sarana dan prasarana sekolah baik disengaja mapun tidak sengaja','tindakan'=>'Siswa wajib mengembalikan sarana dan prasarana milik sekolah seperti semula dan membuat surat perjanjian serta panggilan orang tua','jmlh_point'=>'50'],

            ['jenispelanggaran'=>'Mengajak teman luar masuk ke area sekolah tanpa izin dan tanpa tujuan yang jelas','tindakan'=>'Siswa dipanggil untuk dimintai keterangan dan diberikan surat teguran','jmlh_point'=>'20'],

            ['jenispelanggaran'=>'Melompat pagar sekolah untuk keluar masuk','tindakan'=>'Siswa diberikan peringatan dan sanksi kebersihan','jmlh_point'=>''],

            ['jenispelanggaran'=>'Tidak melaksanakan piket kelas','tindakan'=>'Membersihkan lingkungan sekolah setelah pulang sekolah/hari esoknya dengan pengawasan petugas sekolah','jmlh_point'=>10],

            ['jenispelanggaran'=>'Tidur dan makan dalam kelas saat KBM tanpa seizin guru','tindakan'=>'Siswa diberikan teguran dan wajib membersihkan ruangan tersebut','jmlh_point'=>5],

             // f merokok
             ['jenispelanggaran'=>'Membawa atau menghisap rokok/vape/roko elektrik/korek/liquid didalam diluar sekolah dengan memakai seragam sekolah','tindakan'=>'Rokok/vape/rokok elektrik/korek/liquid disita dan siswa diberikan pembinaan serta pemanggilan orangtua','jmlh_point'=>'50'],

             //geografi
             ['jenispelanggaran'=>'Membuat/menyimpan/mengakses/memperjualbelikan konten pornografi','tindakan'=>'Diberikan surat peringatan I, panggilan orangtua, membuat surat pernyataan','jmlh_point'=>'50'],

             ['jenispelanggaran'=>'Membuat, mengirim/menyebarluaskan/meng-upload konten pornografi diri sendiri/oranglain kejejaring sosial/media lain ','tindakan'=>'Diberikan surat peringatan I, panggilan orangtua, membuat surat pernyataan','jmlh_point'=>100],

             //h senjata tajam
             ['jenispelanggaran'=>'Membawa senjata tajam/api kesekolah','tindakan'=>'Siswa dikembalikan ke orangtua dan proses hukum diserahkan kepada pihak kepolisian','jmlh_point'=>100],
            
             ['jenispelanggaran'=>'Memperjualbelikan senjata tajam/api','tindakan'=>'Siswa dikembalikan ke orangtua dan proses hukum diserahkan kepada pihak kepolisian','jmlh_point'=>100],

             ['jenispelanggaran'=>'Menggunakan senjata tajam/api untuk melukai oranglain','tindakan'=>'Siswa dikembalikan ke orangtua dan proses hukum diserahkan kepada pihak kepolisian','jmlh_point'=>100],

            //i narkoba dan minuman keras
            ['jenispelanggaran'=>'Membawa/mengkonmsumsi/memperjualbelikan narkoba/ minuman keras didalam atau diluar lingkungan sekolah','tindakan'=>'Siswa dikembalikan keorangtua dan proses hukum diserhkan kepada pihak kepolisian','jmlh_point'=>100],

            ['jenispelanggaran'=>'Mabuk disekolah/lingkungan sekolah akibat narkoba/miras','tindakan'=>'Siswa dikembalikan ke orangtua dan proses hukum diserahkan kepada pihak kepolisian','jmlh_point'=>100],

            //j berkelahi/tawuran
            ['jenispelanggaran'=>'Berkelahi/tawuran dengan siswa sekolah lain','tindakan'=>'Siswa dikembalikan keorangtua dan proses hukum diserhkan kepada pihak kepolisian ','jmlh_point'=>100],

            ['jenispelanggaran'=>'Menjadi provokator perkelahian dan berkelahi antar siswa/ kelas SMK Taruna Bhakti dan yang berdampak maupun tidak berdampak','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>100],

            // k intimidasi/ancaman dengan kekerasan
            ['jenispelanggaran'=>'Mengancam dan mengintimidasi kepala sekolah, guru, karyawan dan siswa lain ','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>'12'],

            ['jenispelanggaran'=>'Melakukan penganiayaan/penghinaan/pencemaran nama baik terhadap kepala sekolah, guru, karyawan dan siswa lain','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>100],

            ['jenispelanggaran'=>'Berurusan dengan yang berwajib karena melakukan kejahatan/tindakan kriminal','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>100]
        ];
        foreach ($data as $item) {
            Pelanggaran::insert([
                'jenispelanggaran' => $item['jenispelanggaran'],
                'tindakan' => $item['tindakan'],
                'jmlh_point' => $item['jmlh_point'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
    ]);
 }
    }
}
