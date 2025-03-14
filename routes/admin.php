<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DistributorController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\SuperStockistController;
use App\Http\Controllers\Admin\ZoneController;

Route::get('/test', function () {
    echo "Abhiram";
});

Route::get('super/stocklist/ajax/{zone_id}', [DistrictController::class, 'getSuperStockist']);


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
                Route::post('/super/stockist/store', 'store')->name('admin-super-stockist-store');
                Route::get('/super/stockist/index', 'index')->name('admin-super-stockist-index');
            });
        });


        Route::controller(DistrictController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/district/create', 'create')->name('admin-district-create');
                Route::get('/district/index', 'index')->name('admin-district-index');
                Route::post('/district/store', 'store')->name('admin-district-store');
            });
        });


        Route::controller(DistributorController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/distributor/create', 'create')->name('admin-distributor-create');
                // Route::get('/district/index', 'index')->name('admin-district-index');
                // Route::post('/district/store', 'store')->name('admin-district-store');
            });
        });
    }



);
