<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

// RUTA DE EJEMPLO
Route::get('/welcome', function () {
    return view('welcome');
});

// RUTA PRINCIPAL
Route::get('/', [HomeController::class, 'getHome'])->name('home');

// RUTA SIN AUTENTICACIÓN
Route::get('/category', [CategoryController::class, 'getIndex'])->name('category.index');

// RUTAS PROTEGIDAS POR AUTENTICACIÓN
Route::middleware(['auth', 'verified'])->group(function () {
    
    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // PERFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // POSTS (solo accesibles para usuarios autenticados)    
    Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])->name('category.show');
    Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit'])->name('category.edit');
    Route::put('/category/show/{id}', [CategoryController::class, 'update'])->name('category.update');

});

// ARCHIVO DE AUTENTICACIÓN DE BREEZE (login, registro, logout, etc.)
require __DIR__.'/auth.php';
?>