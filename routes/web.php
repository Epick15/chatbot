<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Landing (Guest)

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('welcome'); */

// Dashboard (Authenticated + Verified)
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard - Profile (Authenticated)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/modulos', function () {
        return Inertia::render('seguridad/Modulos');
    })->name('seguridad.modulos');

    Route::get('/permisos', function () {
        return Inertia::render('seguridad/Permisos');
    })->name('seguridad.permisos');

    Route::get('/personas', function () {
        return Inertia::render('seguridad/Personas');
    })->name('seguridad.personas');

    Route::get('/usuarios', function () {
        return Inertia::render('seguridad/Usuarios');
    })->name('seguridad.usuarios');
});

//Rutas de seguridad



/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Preview Pages Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/preview.php';
