<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

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

// Route::middleware(['auth'])->group(function () {

    Route::get("/",[AppController::class,"home"]);
    Route::get("data",[AppController::class,"data"]);
    Route::get("table",[AppController::class,"table"]);
    Route::get("tambah-data",[AppController::class,"tambah_data"]);
    Route::post("proses-tambah-data",[AppController::class,"proses_tambah_data"]);
    Route::get("info",[AppController::class,"info"]);
    
// });

// Route::get("/",[AppController::class,"login"])->name("login");
// Route::post("proses-login",[AuthController::class,"proses_login"]);
// Route::get("logout",[AuthController::class,"proses_logout"]);