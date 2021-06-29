<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.indexlogin');
});

Route::get('/admin', function () {
    return view('pages.indexadmin');
});

Route::get('/user', function () {
    return view('pages.indexuser');
});

Route::resource('products', ProductController::class);