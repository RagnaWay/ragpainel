<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\RegisteredUserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[IndexController::class, 'index'])->name('index');

Route::get('/register',[RegisteredUserController::class, 'index'])->name('user.index.register');
Route::post('/register',[RegisteredUserController::class, 'register'])->name('user.register');

Route::get('/login',[AuthenticatedSessionController::class, 'index'])->name('user.index.login');
Route::post('/login',[AuthenticatedSessionController::class, 'authenticate'])->name('user.login');