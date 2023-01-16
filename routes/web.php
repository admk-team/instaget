<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

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


// Admin Routes //
Route::get('admin' , [AdminController::class , 'index'])->name('index');


//Front Routes//
Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/service/{service?}/{category?}', [FrontController::class, 'service'])->name('service');
});


