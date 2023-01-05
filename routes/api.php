<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kategori', [App\Http\Controllers\KategoriController::class, 'get']);
Route::get('kategori/{id}', [App\Http\Controllers\KategoriController::class, 'get']);
Route::post('kategori', [App\Http\Controllers\KategoriController::class, 'store']);
Route::put('kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update']);
Route::delete('kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);