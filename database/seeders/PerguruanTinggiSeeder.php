<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PerguruanTinggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('perguruan_tinggi')->insert([
            'kode' => '233078',
            'nama' => 'Sekolah Tinggi Teologi SAPPI Ciranjang',
            'singkatan' => 'STT SAPPI',
            'akreditasi' => 'Baik',
            'alamat' => 'Jl. Raya Palalangon, Kec. Ciranjang, Kabupaten Cianjur, Jawa Barat 43282',
            'no_telp' => '+62 263 2323 854',
            'email' => 'mail@sttsappil.ac.id',
            'website' => 'https://sttsappi.ac.id/',
            'logo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
