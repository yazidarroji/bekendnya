<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

// Public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/transaksi', 'App\Http\Controllers\TransaksiController@store');
Route::get('/list/transaksi', 'App\Http\Controllers\TransaksiController@index');
Route::get('/delete/transaksi/{id}', 'App\Http\Controllers\TransaksiController@delete');

Route::get('/chart/transaksi/{id_user}', 'App\Http\Controllers\TransaksiController@chart');




// Route::get('/list', [ProductController::class, 'index']);
// Route::get('/search/{name}', [ProductController::class, 'search']);
// Route::get('/product/{slug}', [ProductController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    // Route::post('/product/add', [ProductController::class, 'store']);
    // Route::post('/product/edit/{id}', [ProductController::class, 'update']);
    // Route::delete('/product/delete/{id}', [ProductController::class, 'destroy']);

    // Route::post('/cart/add', [CartController::class, 'store']);
    // Route::get('/cart/list', [CartController::class, 'index']);
    // Route::get('/cart/{user_id}', [CartController::class, 'show']);
    // Route::delete('/cart/delete/{id}', [CartController::class, 'destroy']);

    // Route::get('/user/list', [AuthController::class, 'listUser']);
    Route::post('/user/logout', [AuthController::class, 'logout']);
    // Route::delete('/user/delete/{id}', [AuthController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
