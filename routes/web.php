<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'getHome' ]);

//Route::get('/login', [AuthController::class, 'getLogIn' ]);

//Route::get('/logout', [AuthController::class, 'getLogOut' ]);

Route::get('/post', [PostController::class, 'getIndex'])->name('post.index');

Route::get('/post/create', [PostController::class, 'getCreate'])->name('post.create');

Route::post('/post', [PostController:: class, 'store' ])->name('post.store');

Route::get('/post/show/{id}', [PostController::class, 'getShow'])->name('post.show');

Route::get('/post/edit/{id}', [PostController::class, 'getEdit'])->name('post.edit');
?>