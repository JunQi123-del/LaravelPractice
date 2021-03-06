<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartController;
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

/*Route::get('/department', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest'])->group(function(){


    });

    route::middleware(['auth'])->group(function(){

    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check');

    });
    Route::middleware(['auth:admin'])->group(function(){
        route::view('/home','dashboard.admin.home')->name('home');
    });
});