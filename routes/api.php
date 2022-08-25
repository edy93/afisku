<?php

use App\Http\Controllers\Api\v1\AbsensiController;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\BawahanController;
use App\Http\Controllers\Api\v1\DashboardController;
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
    Route::post('auth/login', [AuthController::class, 'login']);

    // Protected routes
    Route::group(['middleware' => ['auth:sanctum']], function () {
        // dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard']);

        // absen
        Route::post('absen', [AbsensiController::class, 'absen']);
        Route::post('absensi/verifikasi', [AbsensiController::class, 'verifikasiAbsen']);
        Route::get('absensi/riwayat/tanggal/{tanggal}', [AbsensiController::class, 'riwayatByDate']);
        Route::get('absensi/lokasi-absensi', [AbsensiController::class, 'daftarLokasi']);

        // bawahan
        Route::get('bawahan', [BawahanController::class, 'daftarBawahan']);
        Route::get('bawahan/riwayat/tanggal/{id}/{tanggal}', [BawahanController::class, 'riwayatByDate']);
        Route::get('bawahan/riwayat/daftar-verifikasi/{id}', [BawahanController::class, 'daftarVerifikasi']);
    });
});
