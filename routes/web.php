<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticador;
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

Route::get('/', [SeriesController::class, 'index'])->name("index")->middleware(Autenticador::class);

Route::resource('serie', SeriesController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');

Route::get('/register', [UserController::class, 'create'])->name('user.create');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
