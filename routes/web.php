<?php

use Illuminate\Support\Facades\Route;
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
    return view('index');
});
/*
Route::get('/admin', ['middleware' => 'EsAdmin'], function () {
    return view('admin');
});

Route::get('/user', ['middleware' => 'auth'], function () {
    return view('user');
});*/


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\ClientController::class, 'index'])->name('user');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

//Route::get('/user', [App\Http\Controllers\ClientController::class, 'index'])->name('user');
