<?php

use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SewaController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\TransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
//home dan barang
Route::get('/', [WelcomeController::class, "index"]);
Route::get('/barang/{id}/detail', [WelcomeController::class, "detail"]);
Route::get('/barang', [WelcomeController::class, "barang"]);

//Register dan login
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'prosesRegister']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
//sewa
Route::get('/sewa', [WelcomeController::class, 'sewa'])->middleware('UserAuth');
Route::post('/sewa', [WelcomeController::class, 'prosesSewa'])->middleware('UserAuth');

//user sewa
Route::get('/user/sewa', [TransaksiController::class, 'index'])->middleware('UserAuth');
Route::get('/user/sewa/{id}/bayar', [TransaksiController::class, 'bayar'])->middleware('UserAuth');
Route::post('/user/sewa/{id}/bayar', [TransaksiController::class, 'prosesBayar'])->middleware('UserAuth');

//admin dashboard
Route::get("/admin", [\App\Http\Controllers\admin\HomeController::class, "index"])->middleware('AdminAuth');

//admin barang
Route::resource('/admin/barang', BarangController::class)->middleware('AdminAuth');

//admin persewaan
Route::resource('/admin/persewaan', SewaController::class)->middleware('AdminAuth');

//admin user
Route::resource('/admin/user', UserController::class)->middleware('AdminAuth');
