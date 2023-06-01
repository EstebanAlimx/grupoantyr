<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AutoPorLocacionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::namespace('auto_locacion')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome', [AutoPorLocacionController::class, 'index']);
    })->name('auto-location.index');

    Route::post('/auto_x_locacion',  [AutoPorLocacionController:: class, 'store'])->name('auto-locacion.store');
    Route::patch('/auto_x_locacion', [AutoPorLocacionController::class, 'update'])->name('auto-location.update');
    Route::delete('/auto_x_locacion', [AutoPorLocacionController:: class, 'destroy'])->name('auto-location.destroy');
    Route::get('/show-auto-locacion', [AutoPorLocacionController:: class, 'show'])->name('auto-location.show');
});

Route::namespace('autos')->group(function () {
    Route::get('/autos', [AutosController:: class, 'index'])->name('autos.index');
    Route::post('/autos', [AutosController:: class, 'store'])->name('autos.store');
    Route::patch('/autos', [ProfileController::class, 'update'])->name('autos.update');
    Route::delete('/autos', [AutosController:: class, 'destroy'])->name('autos.destroy');
    Route::get('/autos-locacion', [AutosController:: class, 'auto_por_locacion'])->name('autos.auto-locacion');
    Route::get('/filtro-autos-locacion', [AutosController:: class, 'obtener_auto_por_filtro'])->name('autos.filtro-auto-locacion');
    Route::get('/show-auto', [AutosController:: class, 'show'])->name('autos.show');
});

Route::namespace('locaciones')->group(function () {
    Route::get('/locaciones', [LocacionesController:: class, 'index'])->name('locaciones.index');
    Route::post('/locaciones', [LocacionesController:: class, 'store'])->name('locaciones.store');
    Route::patch('/locaciones', [LocacionesController::class, 'update'])->name('locaciones.update');
    Route::delete('/locaciones', [LocacionesController:: class, 'destroy'])->name('locaciones.destroy');
    Route::get('/show-locacion', [AutosController:: class, 'show'])->name('locaciones.show');
});

/*Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

require __DIR__.'/auth.php';*/
