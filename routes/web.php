<?php

use App\Livewire\Counter;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Users\UserIndex;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Permissions\PermissionIndex;
use App\Livewire\Users\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/users', UserIndex::class)->name('users');
Route::get('/roles', RoleIndex::class)->name('roles');
Route::get('/permissions', PermissionIndex::class)->name('permission');

// Route::get('/dashboard', function () {
//     return view('dashboard', ['title' => 'Dashboard']);
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
