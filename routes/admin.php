<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;



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
    }
);
