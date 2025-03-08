<?php

use App\Http\Controllers\PanShopController;
use App\Http\Controllers\ProjectorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WallPosterController;
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

Route::get('', [UserController::class, 'userLogin'])->name('login');
Route::get('user/register', [UserController::class, 'userRegister'])->name('user-register');
Route::post('user/register/post', [UserController::class, 'userRegisterPost'])->name('user-register-post');
Route::post('user/login/post', [UserController::class, 'userLoginPost'])->name('user-login-post');
Route::get('user/dashboard', [UserController::class, 'userDashboard'])->name('user-dashboard');
Route::get('user/wallposter/create', [WallPosterController::class, 'create'])->name('user-wallposter-create');
Route::get('user/wallposter/index', [WallPosterController::class, 'index'])->name('user-wallposter-index');

Route::get('user/panshop/create', [PanShopController::class, 'create'])->name('user-panshop-create');
Route::get('user/panshop/index', [PanShopController::class, 'index'])->name('user-panshop-index');

Route::get('user/projector/create', [ProjectorController::class, 'create'])->name('user-projector-create');
Route::get('user/projector/index', [ProjectorController::class, 'index'])->name('user-projector-index');
