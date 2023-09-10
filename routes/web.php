<?php

use App\Http\Controllers\Admin\LoginController;
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



Route::prefix('admin')->group(function(){
    Route::prefix('login')->group(function (){
        Route::get('',[LoginController::class, 'landscape'])->name('admin.login.landscape');
        Route::post('',[LoginController::class, 'check'])->name('admin.login.check');
    });

});
