<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DivisiController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\PayrollController;

use App\Http\Controllers\PDFController;

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

// get
Route::get('/', [DashboardController::class, 'index']);
Route::get('/divisi', [DivisiController::class, 'index']);
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/absensi', [AbsensiController::class, 'index']);
Route::get('/payroll', [PayrollController::class, 'index']);

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');


// route resource
Route::resource('/divisi', DivisiController::class);
Route::resource('/jabatan', JabatanController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/absensi', AbsensiController::class);
Route::resource('/payroll', PayrollController::class);
