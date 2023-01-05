<?php

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\registrasiController;

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

Route::get("/",[utamaController::class,"index"]);

Route::get("/login",[loginController::class,"index"])->name("login")->middleware("guest");
Route::post("/login",[loginController::class,"authenticate"]);
Route::post("/logout",[loginController::class,"logout"]);

Route::get("/registrasi",[registrasiController::class,"index"])->middleware("guest") ;
Route::post("/registrasi",[registrasiController::class,"store"]);

Route::get("/update",[updateController::class,"index"])->middleware("auth");