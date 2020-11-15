<?php

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


//admin barang

Route::get('/admin/barang', function () {
    return view('listbarang');
});
Route::put('/admin/barang', function () {
    return view('listbarang');
});

// Route::push('/admin/barang/push', function () {
//     return view('listbarang');
// });

Route::delete('/admin/barang', function () {
    return view('listbarang');
});

//admin persewaan

Route::get('/admin/persewaan', function () {
    return view('listbarang');
});

Route::put('/admin/persewaan', function () {
    return view('listbarang');
});

// Route::push('/admin/persewaan', function () {
//     return view('listbarang');
// });

Route::delete('/admin/persewaan', function () {
    return view('listbarang');
});

//admin user

Route::get('/admin/user', function () {
    return view('adminuser');
});

Route::put('/admin/user', function () {
    return view('listbarang');
});

// Route::push('/admin/user', function () {
//     return view('listbarang');
// });

Route::delete('/admin/user', function () {
    return view('listbarang');
});
