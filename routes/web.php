<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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

//Admin  Routes//
Route::name('admin.')->group(function () {
    Route::get('index' , [AdminController::class , 'index'])->name('index');

    // Categories 
    Route::resource('category' , CategoryController::class);
    Route::get('category/{id}/{status}', [CategoryController::class, 'status'])->name('category.status');

});

//Front Routes//
Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/service/{service?}/{category?}', [FrontController::class, 'service'])->name('service');
});


