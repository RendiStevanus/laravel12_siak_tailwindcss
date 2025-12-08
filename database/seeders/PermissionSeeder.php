<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resources = [
            'user',
            'perguruan_tinggi',
            'program_studi',
            'gedung',
            'ruangan',
            'skala_nilai',
            'kelompok_matkul',
            'mata_kuliah',
            'tahun_akademik',
            'jadwal_perwalian',
            'kurikulum',
            'kelas',
            'kelas_rombongan',
            'jadwal_kuliah',
            'krs',
            'presensi',
            'nilai_kuliah',
            'khs',
            'dosen',
            'mahasiswa',
            'histori_pendidikan',
            'nilai_transfer',
        ];

        $actions = ['read', 'create', 'update', 'delete'];

        // Buat semua permissions
        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                Permission::firstOrCreate(['name' => "$action-$resource"]);
            }
        }

        // 4️⃣ Permission khusus reset-password & toggle
        Permission::firstOrCreate(['name' => 'reset-dosen']);
        Permission::firstOrCreate(['name' => 'reset-mahasiswa']);
        Permission::firstOrCreate(['name' => 'toggle-dosen']);
        Permission::firstOrCreate(['name' => 'toggle-mahasiswa']);
        Permission::firstOrCreate(['name' => 'toggle-tahun_akademik']);
        Permission::firstOrCreate(['name' => 'toggle-kurikulum']);
        Permission::firstOrCreate(['name' => 'reset-user']);
        Permission::firstOrCreate(['name' => 'read-kategori_mahasiswa']);
        Permission::firstOrCreate(['name' => 'read-kategori_dosen']);
        Permission::firstOrCreate(['name' => 'read-kategori_perkuliahan']);
        Permission::firstOrCreate(['name' => 'read-kategori_akademik']);
        Permission::firstOrCreate(['name' => 'read-kategori_master_data']);
        Permission::firstOrCreate(['name' => 'read-kategori_konfigurasi']);
        Permission::firstOrCreate(['name' => 'read-dashboard_admin']);

        // Mapping role → permissions
        $rolePermissions = [
            'super-admin' => Permission::pluck('name')->toArray(), // semua

            'admin-akademik' => Permission::whereNotIn('name', [
                'create-user',
                'read-user',
                'update-user',
                'delete-user',
                'reset-user',
                'read-kategori_konfigurasi',
            ])->pluck('name')->toArray(),

            'admin-prodi' => [
                'read-dashboard_admin',
                'read-kategori_mahasiswa',
                'read-kategori_dosen',
                'read-kategori_perkuliahan',
                'read-kategori_akademik',
                'read-kategori_master_data',

                'read-perguruan_tinggi',
                'read-program_studi',
                'read-gedung',
                'read-ruangan',
                'read-skala_nilai',
                'read-kelompok_matkul',
                'read-mata_kuliah',
                'read-tahun_akademik',
                'toggle-tahun_akademik',
                'read-jadwal_perwalian',
                'read-kurikulum',

                // CRUD PERKULIAHAN
                'create-kelas',
                'read-kelas',
                'update-kelas',
                'delete-kelas',

                'create-kelas_rombongan',
                'read-kelas_rombongan',
                'update-kelas_rombongan',
                'delete-kelas_rombongan',

                'create-jadwal_kuliah',
                'read-jadwal_kuliah',
                'update-jadwal_kuliah',
                'delete-jadwal_kuliah',
                'create-krs',
                'read-krs',
                'update-krs',
                'delete-krs',
                'create-presensi',
                'read-presensi',
                'update-presensi',
                'delete-presensi',
                'create-nilai_kuliah',
                'read-nilai_kuliah',
                'update-nilai_kuliah',
                'delete-nilai_kuliah',
                'create-khs',
                'read-khs',
                'update-khs',
                'delete-khs',
                // CRUD mahasiswa
                'create-mahasiswa',
                'read-mahasiswa',
                'update-mahasiswa',
                'delete-mahasiswa',
                'reset-mahasiswa',
                // CRUD histori pendidikan
                'create-histori_pendidikan',
                'read-histori_pendidikan',
                'update-histori_pendidikan',
                'delete-histori_pendidikan',
                // CRUD nilai transfer
                'create-nilai_transfer',
                'read-nilai_transfer',
                'update-nilai_transfer',
                'delete-nilai_transfer',
                // CRUD dosen
                'create-dosen',
                'read-dosen',
                'update-dosen',
                'delete-dosen',
                'reset-dosen',
            ],
        ];

        // Assign permissions ke roles
        foreach ($rolePermissions as $roleName => $perms) {
            $role = Role::where('name', $roleName)->first();
            $role?->syncPermissions($perms);
        }
    }
}
