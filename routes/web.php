<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\detailServiceController;
use App\Http\Controllers\jnsKendaraanController;
use App\Http\Controllers\jnsServiceController;
use App\Http\Controllers\kendaraanController;
use App\Http\Controllers\mekanikController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dasboard');
});

// Routes untuk jnskendaraan
Route::get('/jnskendaraan', [jnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [jnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [jnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id_jns_kendaraan}', [jnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id_jns_kendaraan}', [jnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id_jns_kendaraan}', [jnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');

// Routes untuk jnsService
Route::get('/jnsservice', [jnsServiceController::class, 'index'])->name('jnsservice.index');
Route::get('/jnsservice/add', [jnsServiceController::class, 'create'])->name('jnsservice.create');
Route::post('/jnsservice/add', [jnsServiceController::class, 'store'])->name('jnsservice.store');
Route::get('/jnsservice/edit/{id_jns_service}', [jnsServiceController::class, 'edit'])->name('jnsservice.edit');
Route::post('/jnsservice/edit/{id_jns_service}', [jnsServiceController::class, 'update'])->name('jnsservice.update');
Route::get('/jnsservice/delete/{id_jns_service}', [jnsServiceController::class, 'destroy'])->name('jnsservice.delete');

// Routes untuk kendaraan
Route::get('/kendaraan', [kendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/add', [kendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/add', [kendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/edit/{id_kendaraan}', [kendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::post('/kendaraan/edit/{id_kendaraan}', [kendaraanController::class, 'update'])->name('kendaraan.update');
Route::get('/kendaraan/delete/{id_kendaraan}', [kendaraanController::class, 'destroy'])->name('kendaraan.delete');

// Routes untuk Detail Service
Route::get('/detailservice', [detailServiceController::class, 'index'])->name('detailservice.index');
Route::get('/detailservice/add/', [detailServiceController::class, 'create'])->name('detailservice.create');
Route::post('/detailservice/add', [detailServiceController::class, 'store'])->name('detailservice.store');
Route::get('/detailservice/edit/{id_detail_service}', [detailServiceController::class, 'edit'])->name('detailservice.edit');
Route::post('/detailservice/edit/{id_detail_service}', [detailServiceController::class, 'update'])->name('detailservice.update');
Route::get('/detailservice/delete/{id_detail_service}', [detailServiceController::class, 'destroy'])->name('detailservice.delete');

// Routes untuk Mekanik
Route::get('/mekanik', [mekanikController::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/add', [mekanikController::class, 'create'])->name('mekanik.create');
Route::post('/mekanik/add', [mekanikController::class, 'store'])->name('mekanik.store');
Route::get('/mekanik/edit/{id_mekanik}', [mekanikController::class, 'edit'])->name('mekanik.edit');
Route::post('/mekanik/edit/{id_mekanik}', [mekanikController::class, 'update'])->name('mekanik.update');
Route::get('/mekanik/delete/{id_mekanik}', [mekanikController::class, 'destroy'])->name('mekanik.delete');

// Routes untuk Pemilik
Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/add', [pemilikController::class, 'create'])->name('pemilik.create');
Route::post('/pemilik/add', [pemilikController::class, 'store'])->name('pemilik.store');
Route::get('/pemilik/edit/{id_pemilik}', [pemilikController::class, 'edit'])->name('pemilik.edit');
Route::post('/pemilik/edit/{id_pemilik}', [pemilikController::class, 'update'])->name('pemilik.update');
Route::get('/pemilik/delete/{id_pemilik}', [pemilikController::class, 'destroy'])->name('pemilik.delete');

// Routes untuk Service
Route::get('/service', [serviceController::class, 'index'])->name('service.index');
Route::get('/service/add', [serviceController::class, 'create'])->name('service.create');
Route::post('/service/add', [serviceController::class, 'store'])->name('service.store');
Route::get('/service/edit/{id_service}', [serviceController::class, 'edit'])->name('service.edit');
Route::post('/service/edit/{id_service}', [serviceController::class, 'update'])->name('service.update');
Route::get('/service/delete/{id_service}', [serviceController::class, 'destroy'])->name('service.delete');

// Routes untuk User
Route::get('/user', [userController::class, 'index'])->name('user.index');
Route::get('/user/add', [userController::class, 'create'])->name('user.create');
Route::post('/user/add', [userController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [userController::class, 'edit'])->name('user.edit');
Route::post('/user/edit/{id}', [userController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [userController::class, 'destroy'])->name('user.delete');

// Routes untuk data
Route::get('/user', [dataController::class, 'index'])->name('Data.index');


