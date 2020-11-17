<?php

use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\admin\SewaController;
use App\Http\Controllers\admin\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detailbarang');
});

Route::get('/barang', function () {
    return view('listbarang');
});

//admin dashboard
Route::get("/admin", [\App\Http\Controllers\admin\HomeController::class, "index"]);

//admin barang
Route::resource('/admin/barang', BarangController::class);

//admin persewaan
Route::resource('/admin/persewaan', SewaController::class);

//admin user

Route::resource('/admin/user', UserController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
