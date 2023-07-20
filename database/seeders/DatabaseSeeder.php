<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\KelasSeeder;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use App\Models\Guru;
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
            SiswaSeeder::class,
            KelasSeeder::class,
            PelanggaranSeeder::class,
            GuruSeeder::class
        ]);
    }
}
