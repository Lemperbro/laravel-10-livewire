<?php

use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Pengiriman\Pengiriman;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/pengiriman', Pengiriman::class)->name('pengiriman');
Route::get('/login', Login::class)->name('login');