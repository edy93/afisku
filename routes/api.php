<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\ProdukController;
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

Route::group(['middleware' => ['json.response'] ,'prefix' => 'v1'], function () {
    // Public routes
    Route::post('login', [AuthController::class, 'login']);

    // Protected routes
    Route::group(['middleware' => ['auth:sanctum']], function () {
        // produk
        Route::resource('produk', ProdukController::class);
    });
});
