<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ResetController as AdminPasswordResetController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\AuthController as UserAuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserProfileController ;



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
Route::any('/instagram', [FrontController::class, 'instagram'])->name('front.instagram.getpost');
Route::any('/fetch/instagram/post', [FrontController::class, 'fetch_post'])->name('front.instagram.fetchpost');
Route::get('/guest/instagram/post', [FrontController::class, 'guest_post'])->name('front.instagram.guestpost');
Route::get('test-end', [FrontController::class, 'test_insta']);

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
    // Review
    Route::resource('review' , ReviewController::class);
    // General Settings
    Route::resource('general' , GeneralSettingController::class);
    Route::get('general/release/{key}' , [GeneralSettingController::class , 'release'])->name('general.release');
       // Blog
    Route::resource('blog' , BlogController::class);
    Route::any('blog/{id}/{status}' , [BlogController::class , 'status'])->name('blog.status');


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

Route::get('/user/register', [FrontController::class, 'user_signup'])->name('front.user.register');
Route::get('/user/login', [FrontController::class, 'user_login'])->name('front.user.login');
Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/instagram/callback', [FrontController::class, 'callback'])->name('instagram.callback');
    Route::get('/pay' , [FrontController::class , 'pay'])->name('pay');
    Route::get('/payment' , [FrontController::class , 'payment'])->name('payment');
    Route::get('/post' , [FrontController::class , 'post'])->name('post');
    Route::get('/term-of-services',[FrontController::class,'termsOfService'])->name('termsOfService');
    Route::get('/privacy-statement',[FrontController::class,'privacyStatement'])->name('privacyStatement');
    Route::get('/getstarted' , [FrontController::class , 'getstarted'])->name('getstarted');
    Route::get('/service/{slug}', [FrontController::class, 'service'])->name('service');
    Route::get('/login' , [FrontController::class , 'login'])->name('login');
    Route::get('/signup' , [FrontController::class , 'signup'])->name('signup');
    Route::get('/user_signup' , [FrontController::class , 'usersignup'])->name('usersignup');
    Route::get('/reviews', [FrontController::class, 'reviews'])->name('reviews');
    Route::get('/faq' , [FrontController::class , 'faq'])->name('faq');
    Route::post('/order' , [FrontController::class , 'order'])->name('order');
    Route::get('/order1' , [FrontController::class , 'order1'])->name('order1');
    Route::get('/membership' , [FrontController::class , 'membership'])->name('membership');
    Route::get('/sub-category/{subcategoryslug?}' , [FrontController::class , 'subcategory_packages'])->name('subcategory_packages');
    Route::post('registeration' , [UserController::class , 'register'])->name('register');
    Route::post('/user_registeration' , [UserController::class , 'userregisteration'])->name('userregisteration');
    Route::post('register/user' , [UserController::class , 'user_register'])->name('user.registration');
    Route::post('userlogin' , [UserController::class , 'user_login'])->name('user_login');
    Route::post('login/user' , [UserController::class , 'loginUser'])->name('user.login.store');
    Route::post('packages' , [FrontController::class , 'get_packages'])->name('get_packages');
    Route::post('placeorder',[FrontController::class,'place_order'])->name('place.order');
    Route::resource('feedback' , FeedbackController::class);
    Route::any('feedback/{id}/{status}' , [FeedbackController::class , 'status'])->name('feedback.status');
    Route::get('/user_info' , [UserProfileController::class , 'userinfo'])->name('user_info');
        //Logout 
    Route::get('/logout' , [UserProfileController::class , 'Logout'])->name('logout');
    Route::get('purchase_history'  ,[UserProfileController::class ,'purchasehistory'])->name('purchase_history');
    Route::get('member_info'  ,[UserProfileController::class ,'memberinfo'])->name('member_info');
    
    Route::get('/get/sub-categories-packages/{id}',[FrontController::class,'get_category_packages']);

    // for add to cart
    Route::get('/add_to_cart' , [FrontController::class,'cart'])->name('add_to_cart');
});

// user Reset Password 
Route::get('/password/reset', [UserController::class, 'forgotpassword'])->name('password.reset.page');
Route::post('/password/reset/email', [UserController::class, 'email'])->name('password.reset.email');
Route::get('/reset/password/{token}', [UserController::class, 'reset_page'])->name('password.reset');
Route::post('/reset/change/password', [UserController::class, 'change_password'])->name('reset.change.password');


// User Auth Routes
Route::prefix('/auth')->group(function() {
    // User Google Auth Routes
    Route::get('/google/redirect', [UserAuthController::class, 'google_login_redirect'])->name('google.login.redirect');
    Route::get('/google/callback', [UserAuthController::class, 'google_login_callback'])->name('google.login.callback');
    // User Kakao Auth Routes
    Route::get('/kako', [UserAuthController::class, 'kakao'])->name('kakao');
    Route::get('/kako/redirect', [UserAuthController::class, 'kakao_red'])->name('kakao');
    Route::get('/naver', [UserAuthController::class , 'redirectToProviderNaver'])->name('naver.login');
    Route::get('naver/callback', [UserAuthController::class , 'handleProviderCallbackNaver']);
});

Route::get('admin/delete/packages/{id}' , [SubcategoryController::class , 'package_delete'])->name('package_delete');
Route::get('front/get/subcategory/title/{id}' , [FrontController::class , 'get_subcategory_title'])->name('get_subcategory_title');