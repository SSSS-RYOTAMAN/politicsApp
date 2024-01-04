<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TopController::class, 'index']);

Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user', [UserController::class, 'store']);
Route::get('user/login', [UserController::class, 'getLogin'])->name('user.login');
Route::post('user/login', [UserController::class, 'postLogin'])->name('user.login');
Route::get('user/logout', [UserController::class, 'logout'])->name('user.logout');