<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperStockistController;
use App\Http\Controllers\Admin\ZoneController;

Route::get('/test', function () {
    echo "Abhiram";
});


Route::group(
    ['prefix' => 'admin'],
    function () {
        Route::controller(AdminController::class)->group(
            function () {
                Route::get('/login', 'login')->name('admin-login');
                Route::post('/login/post', 'loginPost')->name('admin-login-post');
                Route::group(['middleware' => 'auth:admin'], function () {
                    Route::get('/dashboard', 'dashboard')->name('admin-dashboard');
                    Route::get('/logout',  'adminLogout')->name('admin-logout');
                });
            }
        );

        Route::controller(ZoneController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/zone/create', 'create')->name('admin-zone-create');
                Route::post('/zone/store', 'store')->name('admin-zone-store');
                Route::get('/zone/index', 'index')->name('admin-zone-index');
            });
        });

        Route::controller(SuperStockistController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/super/stockist/create', 'create')->name('admin-super-stockist-create');
            });
        });
    }



);
