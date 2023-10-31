<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Main;
use App\Http\Controllers\Test;
use App\Livewire\Dashboard;
use App\Livewire\User;
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


Route::get('/logout', [Test::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/', function () {
        return redirect()->route('login');
    });
    Route::get('/users', User::class)->name('users');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
