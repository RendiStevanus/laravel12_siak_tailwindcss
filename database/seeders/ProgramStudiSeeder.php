<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('program_studi')->insert([
            [
                'pt_id' => 1, // Assuming the first PT is the one we just created
                'kode' => '55211',
                'nama' => 'Teknik Informatika',
                'jenjang' => $faker->randomElement(['S1', 'S2', 'S3']),
                'akreditasi' => $faker->randomElement(['Baik', 'Baik Sekali', 'Unggul']),
                'dosen_id'  => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'pt_id' => 1, // Assuming the first PT is the one we just created
                'kode' => '55201',
                'nama' => 'Teknik Sipil',
                'jenjang' => $faker->randomElement(['S1', 'S2', 'S3']),
                'akreditasi' => $faker->randomElement(['Baik', 'Baik Sekali', 'Unggul']),
                'dosen_id'  => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'pt_id' => 1, // Assuming the first PT is the one we just created
                'kode' => '55202',
                'nama' => 'Teknik Industri',
                'jenjang' => $faker->randomElement(['S1', 'S2', 'S3']),
                'akreditasi' => $faker->randomElement(['Baik', 'Baik Sekali', 'Unggul']),
                'dosen_id'  => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
