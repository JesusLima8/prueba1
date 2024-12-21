<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Dashboard, protegido por autenticación y verificación de correo
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas para perfiles de usuario
Route::middleware('auth')->group(function () {
    // Perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rutas para la administración de sensores
    Route::get('/admin/sensores', [SensorController::class, 'index'])->name('sensores.index');
    Route::get('/admin/sensores/agregar', [SensorController::class, 'create'])->name('sensores.create');
    Route::post('/admin/sensores', [SensorController::class, 'store'])->name('sensores.store');
    
    // Rutas para la administración de usuarios
    Route::get('/admin/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    Route::get('/admin/usuarios/crear', [UserController::class, 'create'])->name('usuarios.create');
    Route::post('/admin/usuarios', [UserController::class, 'store'])->name('usuarios.store');
    Route::get('/admin/usuarios/{id}/editar', [UserController::class, 'edit'])->name('usuarios.edit');
    Route::put('/admin/usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');
    Route::delete('/admin/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
});

// Incluye las rutas de autenticación de Laravel
require __DIR__.'/auth.php';
