<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NilaiSkalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Template data skala nilai
        $templateSkala = [
            ['A',  4.00, 91,   100],
            ['A-', 3.70, 86,   90.99],
            ['B+', 3.30, 81,   85.99],
            ['B',  3.00, 76,   80.99],
            ['B-', 2.70, 71,   75.99],
            ['C+', 2.30, 66,   70.99],
            ['C',  2.00, 61,   65.99],
            ['D',  1.00, 51,   60.99],
            ['E',  0.00, 0,    50.99],
        ];

        // Daftar prodi (1 = Informatika, 2 = Sipil, 3 = Industri)
        $prodiList = [1, 2, 3];

        $insertData = [];

        foreach ($prodiList as $prodiId) {
            foreach ($templateSkala as [$huruf, $index, $min, $max]) {
                $insertData[] = [
                    'prodi_id' => $prodiId,
                    'nilai_huruf' => $huruf,
                    'nilai_index' => $index,
                    'bobot_minimum' => $min,
                    'bobot_maksimum' => $max,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('nilai_skala')->insert($insertData);
    }
}
