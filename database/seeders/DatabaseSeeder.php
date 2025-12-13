<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PerguruanTinggiSeeder::class);
        $this->call(ProgramStudiSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GedungSeeder::class);
        $this->call(RuanganSeeder::class);
        $this->call(NilaiSkalaSeeder::class);
        $this->call(KelompokMataKuliahSeeder::class);
        $this->call(MataKuliahSeeder::class);
    }
}
