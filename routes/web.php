<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// RUTA PRINCIPAL
Route::get('/', [HomeController::class, 'getHome']);
Route::get('/welcome', function () {
    return view('welcome');
});

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
    Route::get('/post', [PostController::class, 'getIndex'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'getCreate'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/show/{id}', [PostController::class, 'getShow'])->name('post.show');
    Route::get('/post/edit/{id}', [PostController::class, 'getEdit'])->name('post.edit');
    Route::put('/post/show/{id}', [PostController::class, 'update'])->name('post.update');

});

// ARCHIVO DE AUTENTICACIÓN DE BREEZE (login, registro, logout, etc.)
require __DIR__.'/auth.php';
?>