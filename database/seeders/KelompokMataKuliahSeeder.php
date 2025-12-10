<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelompokMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed kelompok_matakuliah
        DB::table('mata_kuliah_kelompok')->insert([
            [
                'nama' => 'Mata kuliah pengembangan kepribadian',
                'singkatan' => 'MPK',
                'deskripsi' => 'mata kuliah yang membentuk karakter, sikap, dan kepribadian mahasiswa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'mata kuliah keilmuan & keterampilan',
                'singkatan' => 'MKK',
                'deskripsi' => 'mata kuliah dasar untuk membekali ilmu pengetahuan dan keterampilan umum mahasiswa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
