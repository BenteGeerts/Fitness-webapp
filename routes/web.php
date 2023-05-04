<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;

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

Route::get("/", [PageController::class, "landingpage"]);
Route::get("/google-login", [LoginController::class, "googleLogin"])->name("googleLogin");
Route::get("/google-redirect", [LoginController::class, "googleRedirect"]);
Route::get("/facebook-login", [LoginController::class, "facebookLogin"])->name("facebookLogin");
Route::get("facebook-redirect", [LoginController::class, "facebookRedirect"]);
Route::get("/dashboard", [FitController::class, "Fit"]);
