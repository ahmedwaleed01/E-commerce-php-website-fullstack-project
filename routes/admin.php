<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboardcontroller;
use App\Http\Controllers\Admin\usercontroller;
use App\Http\Controllers\Admin\RoleController;
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

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){ //...
        
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isadmin'])->group(function () {
    
    Route::resource('/users', usercontroller::class);
    
    Route::get('/addmoderator', function () {
        return view('users.createm');
    })->name("addmoderator");
    Route::get('/allusers',  [App\Http\Controllers\HomeController::class, 'allusers'])->name("allusers");

    Route::get('/viewproduct',  [usercontroller::class,'showproduct'])->name("viewproduct");
    Route::get('/deletewomen/{productid}',  [usercontroller::class,'deletewomen'])->name("deletewomen");
    Route::get('/deletemen/{productid}',  [usercontroller::class,'deletemen']);
    Route::get('/deletefeet/{productid}',  [usercontroller::class,'deletefeet']);
    Route::get('/deleteaccessories/{productid}',  [usercontroller::class,'deleteaccessories']);
    Route::get('/storem',  [usercontroller::class,'storem'])->name('storem');
    Route::resource('/roles', RoleController::class);
    Route::get('/dash', function () {
        return view('admin.dashboard');
    });
    Route::get('/users/{id}/showposts', [usercontroller::class,'ShowPosts'])->name("users.showposts");

    
    

});
Route::middleware(['auth','ismoderator'])->group(function () {
    Route::get('/addproduct', function () {
        return view('users.addproduct');
    })->name("addproduct");

});