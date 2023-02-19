<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\FeetController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\Admin\usercontroller;
use App\Http\Controllers\Cartcontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialAuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/blog', function () {
    return view('blog');
});

Route::get('/sales', function () {
    return view('sales');
});
Route::resource('/women',WomenController::class);
Route::resource('/men',MenController::class);
Route::resource('/feetwear',FeetController::class);
Route::resource('/accessories',AccessoriesController::class);
Route::get('/search',[SearchController::class,'search'])->name('search');

Route::middleware(['auth'])->group(function () {
    
     
    // Route::get('/cart', function () {
    //     return view('users.cart');
    // });
    
    Route::resource('/cart', CartController::class);
    Route::get('cart/cartstore/{id}', [Cartcontroller::class,'cartstore']);
    Route::get('cart/cartstorem/{id}', [Cartcontroller::class,'cartstorem']);
    Route::get('cart/cartstoref/{id}', [Cartcontroller::class,'cartstoref']);
    Route::get('cart/cartstoreA/{id}', [Cartcontroller::class,'cartstoreA']);
 });
 
//  Route::get('/auth/facebook/redirect', function () {
//     return Socialite::driver('facebook')->redirect();
// });
 
// Route::get('/auth/facebook/callback', function () {
//     $user = Socialite::driver('facebook')->user();
 
//     // $user->token
// });

Route::get('auth/google',[SocialAuthController::class,'redirect'])->name('google_auth');
Route::get('auth/google/call-back',[SocialAuthController::class,'callbackGoogle']);