<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'getHome' ]);

Route::get('/login', [AuthController::class, 'getLogIn' ]);

Route::get('/logout', [AuthController::class, 'getLogOut' ]);

Route::get('/category', [CategoryController::class, 'getIndex' ]);

Route::get('/category/create', [CategoryController::class, 'getCreate' ]);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow' ]);

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit' ]);
?>