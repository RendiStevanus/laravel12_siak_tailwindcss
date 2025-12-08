<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $superAdmin = User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
        ]);

        $superAdmin->assignRole('super-admin');

        $adminAkademik = User::factory()->create([
            'name'      => 'Admin Akademik',
            'username'  => 'akademik@gmail.com',
            'email'     => 'akademik@gmail.com',
        ]);

        $adminProdi1 = User::factory()->create([
            'name'      => 'Admin Prodi 1',
            'username'  => 'prodi1@gmail.com',
            'email'     => 'prodi1@gmail.com',
            // 'prodi_id'  => 1,
        ]);

        $adminProdi2 = User::factory()->create([
            'name'      => 'Admin Prodi 2',
            'username'  => 'prodi2@gmail.com',
            'email'     => 'prodi2@gmail.com',
            // 'prodi_id'  => 2,
        ]);


        $superAdmin->assignRole('super-admin');
        $adminAkademik->assignRole('admin-akademik');
        $adminProdi1->assignRole('admin-prodi');
        $adminProdi2->assignRole('admin-prodi');
    }
}
