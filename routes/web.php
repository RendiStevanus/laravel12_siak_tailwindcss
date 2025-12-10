<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Dashboard\Dashboard;

use App\Livewire\Roles\RoleIndex;
use App\Livewire\Users\UserIndex;
use App\Livewire\Permissions\PermissionIndex;

use App\Livewire\Ruangan\RuanganIndex;
use App\Livewire\Gedung\GedungIndex;
use App\Livewire\ProgramStudi\ProgramStudiIndex;
use App\Livewire\PerguruanTinggi\PerguruanTinggiIndex;
use App\Livewire\SkalaNilai\SkalaNilaiIndex;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

// Master Data
Route::get('/skala-nilai', SkalaNilaiIndex::class)->name('skala-nilai');
Route::get('/ruangan', RuanganIndex::class)->name('ruangan');
Route::get('/gedung', GedungIndex::class)->name('gedung');
Route::get('/program-studi', ProgramStudiIndex::class)->name('program-studi');
Route::get('/perguruan-tinggi', PerguruanTinggiIndex::class)->name('perguruan-tinggi');

// User Management
Route::get('/users', UserIndex::class)->name('users');
Route::get('/roles', RoleIndex::class)->name('roles');
Route::get('/permissions', PermissionIndex::class)->name('permission');

// Route::get('/dashboard', function () {
//     return view('dashboard', ['title' => 'Dashboard']);
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
