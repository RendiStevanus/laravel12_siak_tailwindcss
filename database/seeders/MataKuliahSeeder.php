<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed matakuliah

        $mataKuliahTeknikInformatika = [
            // Teknik Informatika
            // id=1
            [
                'kode' => 'DU5020',
                'nama' => 'Sidang Skripsi',
                'sks' => 4,
                'kelompok_id' => 2,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=2
            [
                'kode' => 'DU5019',
                'nama' => 'Seminar Skripsi',
                'sks' => 2,
                'kelompok_id' => 1,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=3
            [
                'kode' => 'DU5001',
                'nama' => 'Algoritma dan Pemrograman',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=4
            [
                'kode' => 'DU5002',
                'nama' => 'Struktur Data',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=5
            [
                'kode' => 'DU5003',
                'nama' => 'Basis Data',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=6
            [
                'kode' => 'DU5004',
                'nama' => 'Jaringan Komputer',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=7
            [
                'kode' => 'DU5005',
                'nama' => 'Pemrograman Web',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=8
            [
                'kode' => 'DU5006',
                'nama' => 'Kecerdasan Buatan',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=9
            [
                'kode' => 'DU5007',
                'nama' => 'Rekayasa Perangkat Lunak',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // id=10
            [
                'kode' => 'DU5008',
                'nama' => 'Manajemen Proyek TI',
                'sks' => 2,
                'kelompok_id' => 2,
                'prodi_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        $mataKuliahTeknikSipil = [
            [
                'kode' => 'TS5001',
                'nama' => 'Statika Bangunan',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5002',
                'nama' => 'Material Teknik Sipil',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5003',
                'nama' => 'Mekanika Tanah',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5004',
                'nama' => 'Rancang Bangun Jalan',
                'sks' => 2,
                'kelompok_id' => 2,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5005',
                'nama' => 'Hidrolika dan Drainase',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5006',
                'nama' => 'Perancangan Struktur Beton',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5007',
                'nama' => 'Perancangan Struktur Baja',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5008',
                'nama' => 'Manajemen Konstruksi',
                'sks' => 2,
                'kelompok_id' => 2,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5009',
                'nama' => 'Survey dan Pemetaan',
                'sks' => 2,
                'kelompok_id' => 1,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TS5010',
                'nama' => 'Teknik Geoteknik Lanjut',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $mataKuliahTeknikIndustri = [
            [
                'kode' => 'TI5001',
                'nama' => 'Manajemen Produksi',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5002',
                'nama' => 'Statistika Industri',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5003',
                'nama' => 'Manajemen Rantai Pasok',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5004',
                'nama' => 'Rekayasa Sistem Industri',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5005',
                'nama' => 'Ergonomi dan Keselamatan Kerja',
                'sks' => 2,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5006',
                'nama' => 'Manajemen Kualitas',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5007',
                'nama' => 'Simulasi Sistem Industri',
                'sks' => 3,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5008',
                'nama' => 'Lean Manufacturing',
                'sks' => 2,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5009',
                'nama' => 'Optimisasi Produksi',
                'sks' => 3,
                'kelompok_id' => 1,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode' => 'TI5010',
                'nama' => 'Manajemen Proyek Industri',
                'sks' => 2,
                'kelompok_id' => 2,
                'prodi_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];


        DB::table('mata_kuliah')->insert(
            array_merge($mataKuliahTeknikInformatika, $mataKuliahTeknikSipil, $mataKuliahTeknikIndustri)
        );
    }
}
