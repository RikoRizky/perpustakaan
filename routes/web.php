<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;

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

Route::middleware(['auth'])->group(function () {

    Route::get("tampilan",[AppController::class,"tampilan"]);
    Route::get("data",[AppController::class,"data"]);
    Route::get("tambah-data",[AppController::class,"tambah_data"]);
    Route::post("proses-tambah-data",[AppController::class,"proses_tambah_data"]);
    Route::get("info",[AppController::class,"info"]);
    Route::get('data/{id}/edit', [AppController::class, 'edit'])->name('edit');
    Route::post('proses-edit-data/{id}', [AppController::class, 'prosesEditData'])->name('proses-edit-data');
    Route::get('data/{id}/hapus', [AppController::class, 'hapusData']);
    
});
    
    Route::get("login",[AppController::class,"login"])->name("login");
    Route::get("logout",[AuthController::class,"proses_logout"]);
    Route::post("proses-login",[AuthController::class,"proses_login"]);
    
    Route::get("/",[AppController::class,"home"]);
    Route::get("tabel",[AppController::class,"tabel"]);
    Route::get("bukukisahnabi",[AppController::class,"bukukisahnabi"]);
    Route::get("bukudesain",[AppController::class,"bukudesain"]);
    Route::get("bukuhome",[AppController::class,"bukuhome"]);
    Route::get("bukulayangan",[AppController::class,"bukulayangan"]);
    Route::get("bukuphp",[AppController::class,"bukuphp"]);
    Route::get("bukuulama",[AppController::class,"bukuulama"]);
    