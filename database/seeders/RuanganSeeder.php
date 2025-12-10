<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed Ruangan
        DB::table('ruangan')->insert([
            [
                'gedung_id' => 2, // Assuming the first Gedung is the one we just created
                'nama' => 'LPPM 1.1',
                'deskripsi' => $faker->sentence,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'gedung_id' => 3, // Assuming the first Gedung is the one we just created
                'nama' => 'FT 1.1',
                'deskripsi' => $faker->sentence,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'gedung_id' => 3, // Assuming the first Gedung is the one we just created
                'nama' => 'FT 2.1',
                'deskripsi' => $faker->sentence,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
