<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix'=>'admin', 'middleware'=>['isUser','auth']], function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('alltickets',[AdminController::class,'alltickets'])->name('admin.alltickets');
    Route::get('departmentview',[AdminController::class,'departmentview'])->name('admin.departmentview');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']], function(){
    Route::get('allopen',[UserController::class,'allopen'])->name('user.allopen');
    Route::get('anonymous',[UserController::class,'anonymous'])->name('user.anonymous');
    Route::get('nanonymous',[UserController::class,'nanonymous'])->name('user.nanonymous');
});