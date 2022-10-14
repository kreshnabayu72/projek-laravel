<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
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

Route::get('/',[NewsController::class,'index']);
Route::get("/news/{news}",[NewsController::class,'news']);
Route::get("/write",[NewsController::class,'write']);
Route::post("/news",[NewsController::class,'post']);
Route::delete("/news/{news}",[NewsController::class,'delete']);

Route::get("/login",[AuthController::class,'showLogin']);
Route::get("/register",[AuthController::class,'showRegister']);
Route::get("/admin",[AuthController::class,'admin']);
Route::post("/register",[AuthController::class,'register']);
Route::post("/login",[AuthController::class,'login']);
Route::post("/logout",[AuthController::class,'logout']);

Route::get('/fill',[NewsController::class,'fill']);