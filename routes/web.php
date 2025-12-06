<?php

use App\Livewire\Counter;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Users\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/counter', Counter::class)->name('counter');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/users', UserList::class)->name('users');

// Route::get('/dashboard', function () {
//     return view('dashboard', ['title' => 'Dashboard']);
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
