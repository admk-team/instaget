<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PackageController;
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


//Admin  Routes//
Route::name('admin.')->group(function () {
    Route::get('index' , [AdminController::class , 'index'])->name('index');

    // Categories 
    Route::resource('category' , CategoryController::class);
    Route::get('category/{id}/{status}', [CategoryController::class, 'status'])->name('category.status');

    // Sub Category
    Route::resource('subcategory' , SubCategoryController::class);
    Route::get('subcategory/{id}/{status}' , [SubCategoryController::class , 'status'])->name('subcategory.status');

    // Services 
    Route::resource('services' , ServiceController::class);
    Route::get('services/{id}/{status}' , [ServiceController::class , 'status'])->name('services.status');

    // Packages 
    Route::resource('package' , PackageController::class );
    Route::get('package/{id}/{status}' , [PackageController::class , 'status'])->name('package.status');

});

Route::get('/cmd/{cmd}', [FrontController::class, 'cmd']);
//Front Routes//
Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/service', [FrontController::class, 'service'])->name('service');
});


