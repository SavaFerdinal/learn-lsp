<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/peminjaman', function () {
    return view('user.peminjaman');
});
Route::get('/form-peminjaman', function () {
    return view('user.form_peminjaman');
});
Route::get('/pengembalian', function () {
    return view('user.pengembalian');
});
Route::get('/pesan', function () {
    return view('user.pesan');
});
Route::get('/profile', function () {
    return view('user.profile');
});