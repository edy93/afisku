<?php

use App\Http\Controllers\Manajemen\Auth\LoginController;
use App\Http\Controllers\Manajemen\DashboardController;
use App\Http\Controllers\Manajemen\LokasiController;
use App\Http\Controllers\Manajemen\PegawaiController;
use App\Http\Controllers\Manajemen\PermissionsController;
use App\Http\Controllers\Manajemen\RolesController;
use App\Http\Controllers\Manajemen\UsersController;
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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // permissions
    Route::resource('permissions', PermissionsController::class);
    Route::get('permissions/datatable/api', [PermissionsController::class, 'datatableAPI'])->name('permissions.datatable.api');

    // roles
    Route::resource('roles', RolesController::class);
    Route::get('roles/datatable/api', [RolesController::class, 'datatableAPI'])->name('roles.datatable.api');

    // users
    Route::resource('users', UsersController::class);
    Route::get('users/datatable/api', [UsersController::class, 'datatableAPI'])->name('users.datatable.api');

    // pegawai
    Route::resource('pegawai', PegawaiController::class);
    Route::get('pegawai/datatable/api', [PegawaiController::class, 'datatableAPI'])->name('pegawai.datatable.api');

    // lokasi
    Route::resource('lokasi', LokasiController::class);
    Route::get('lokasi/datatable/api', [LokasiController::class, 'datatableAPI'])->name('lokasi.datatable.api');
});
