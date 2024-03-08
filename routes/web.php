<?php

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

Route::middleware(['auth'])->group(function () {

    Route::get("home",[AppController::class,"home"]);
    Route::get("data",[AppController::class,"data"]);
});

Route::get("/",[AppController::class,"login"])->name("login");
Route::post("proses-login",[AuthController::class,"proses_login"]);
Route::get("logout",[AuthController::class,"proses_logout"]);