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
            }
        );
    }
);
