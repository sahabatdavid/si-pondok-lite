<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SantriController;
use App\Http\Controllers\AsramaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Routing untuk Santri
    // Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
    // Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');
    // Route::post('/santri/create', [SantriController::class, 'store'])->name('santri.store');
    // Route::get('/santri/{id}', [SantriController::class, 'show'])->name('santri.show');
    // Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');
    // Route::put('/santri/{id}/edit', [SantriController::class, 'update'])->name('santri.update');
    // Route::delete('/santri/{id}', [SantriController::class, 'destroy'])->name('santri.destroy');


    // Resource Routes
    Route::resource('santri', SantriController::class);
    Route::resource('asrama', AsramaController::class);
});

/**
 * GET
 * POST
 * PUT (update)
 * -- PATCH --
 * DELETE
 */

require __DIR__.'/auth.php';
