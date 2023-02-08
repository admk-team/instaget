<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ResetController as AdminPasswordResetController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;


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
Route::get('/admin', [AdminDashboard::class, 'login'])->name('login');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin-login');

Route::group(['middleware' => ['adminauth']], function () {
Route::prefix('admin')->name('admin.')->group(function () { 
    Route::get('/dashboard' , [AdminController::class , 'index'])->name('dashboard');
    // Categories 
    Route::resource('category' , CategoryController::class);
    Route::any('category/{id}/{status}', [CategoryController::class, 'status'])->name('category.status');
    // Sub Category
    Route::resource('subcategory' , SubCategoryController::class);
    Route::any('subcategory/{id}/{status}' , [SubCategoryController::class , 'status'])->name('subcategory.status');
    // Services 
    Route::resource('services' , ServiceController::class);
    Route::any('services/{id}/{status}' , [ServiceController::class , 'status'])->name('services.status');
    // Packages 
    Route::resource('package' , PackageController::class );
    Route::any('package/{id}/{status}' , [PackageController::class , 'status'])->name('package.status');
    // Profile
    Route::get('/profile/edit', [AdminProfileController::class, 'index'])->name('profile.edit');
    Route::post('/profile/update', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::get('get/subcategories/{id}' ,  [PackageController::class , 'get_subcategory']);
    //Logout 
    Route::get('/logout' , [AdminController::class , 'Logout'])->name('logout');
    
});
});

// Admin Password Resetting
Route::middleware('guest:admin')->group(function () {
    Route::get('/password/reset', [AdminPasswordResetController::class, 'index'])->name('password.reset.page');
    Route::post('/password/reset/email', [AdminPasswordResetController::class, 'email'])->name('password.reset.email');
    Route::get('/reset/password/{token}', [AdminPasswordResetController::class, 'reset_page'])->name('password.reset');
    Route::post('/reset/change/password', [AdminPasswordResetController::class, 'change_password'])->name('reset.change.password');
 });

Route::get('/cmd/{cmd}', [FrontController::class, 'cmd']);
//Front Routes//
Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/pay' , [FrontController::class , 'pay'])->name('pay');
    Route::get('/payment' , [FrontController::class , 'payment'])->name('payment');
    Route::get('/post' , [FrontController::class , 'post'])->name('post');
    Route::get('/service/{slug}', [FrontController::class, 'service'])->name('service');
    Route::get('/login' , [FrontController::class , 'login'])->name('login');
    Route::get('/signup' , [FrontController::class , 'signup'])->name('signup');
    Route::get('/reviews', [FrontController::class, 'reviews'])->name('reviews');
    Route::get('/faq' , [FrontController::class , 'faq'])->name('faq');
    Route::post('/order' , [FrontController::class , 'order'])->name('order');
    Route::get('/membership' , [FrontController::class , 'membership'])->name('membership');
    Route::get('/{subcategoryslug}' , [FrontController::class , 'subcategory_packages'])->name('subcategory_packages');
   
});
Route::get('/auth/instagram', function () {
    $fb = new \Facebook\Facebook([
        'app_id' => '711758627169981',
        'app_secret' => 'e710a48b2e1f652be7355188bf4676e9',
        'default_graph_version' => 'v8.0',
    ]);
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['user_profile', 'user_media']; // request permission to access user profile and media
    $loginUrl = $helper->getLoginUrl('http://127.0.0.1:8000/post', $permissions);

    return redirect($loginUrl);
});

