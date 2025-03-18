<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DistributorController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\PanShopController;
use App\Http\Controllers\Admin\ProjectorController;
use App\Http\Controllers\Admin\RetailerController;
use App\Http\Controllers\Admin\SuperStockistController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WallPosterController;
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
                    Route::get('/change/password', 'adminChangePassword')->name('admin-change-password');
                    Route::post('/change/password/post', 'adminChangePasswordPost')->name('admin-change-password-post');
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
                Route::post('/distributor/store', 'store')->name('admin-distributor-store');
                Route::get('/distributor/index', 'index')->name('admin-distributor-index');
            });
        });


        Route::controller(UserController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/user/index', 'index')->name('admin-user-index');
                Route::get('/user/approve', 'approveUser')->name('admin-user-approve');
                Route::get('/user/reject', 'rejectExpense')->name('admin-user-reject');
                Route::get('user/pending/approve/{id}', 'pendingToApproveUser')->name('admin-user-pending-approve');
                Route::get('user/pending/reject/{id}', 'pendingToRejectUser')->name('admin-user-pending-reject');
            });
        });

        Route::controller(RetailerController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/retailer/index', 'index')->name('admin-retailer-index');
            });
        });


        Route::controller(WallPosterController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/wall/poster/index', 'index')->name('admin-wall-poster-index');
            });
        });


        Route::controller(PanShopController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/pan/shop/index', 'index')->name('admin-pan-shop-index');
            });
        });

        Route::controller(ProjectorController::class)->group(function () {
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/projector/index', 'index')->name('admin-projector-index');
            });
        });
    }



);
