<?php

use App\Http\Controllers\UsersController;
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
Route::get('/dashboard/password', function () {
    return view('dashboard.password');
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

//Route::group(['prefix' =>'admin', 'as' => 'admin'], function(){});
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::resource('/dashboard/users', 'App\Http\Controllers\UsersController');

Route::resource('/dashboard/posts', 'App\Http\Controllers\UsersPostsController');

Route::resource('/dashboard/graphics', 'App\Http\Controllers\GraphicsController');
/*Route::resource('/dashboard/users', UsersController::class)->names([
    'index' => '/dashboard/users',
    'store' => '/dashboard/users',
    'edit' => '/dashboard/users/{{$usuario->id}}',
]);*/


//Route::get('/user', [App\Http\Controllers\ClientController::class, 'index'])->name('user');
