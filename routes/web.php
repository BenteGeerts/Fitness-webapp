<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;

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

Route::get("/", [PageController::class, "landingpage"])->name("landingpage");
Route::middleware('guest')->group(function () {
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "signIn"])->name("signIn");
    Route::get("/signup", [AuthController::class, "signUp"])->name("signup");
    Route::post("/signup", [AuthController::class, "register"])->name("register");

    Route::get("/password/reset/{token}", [ResetPasswordController::class, "showResetForm"])->name("password.reset");
    Route::get("/password/reset", [ForgotPasswordController::class, "showLinkRequestForm"])->name("password.request");
    Route::post("/password/email", [ForgotPasswordController::class, "sendResetLinkEmail"])->name("password.email");
    Route::post("/password/reset", [ResetPasswordController::class, "reset"])->name("password.update");
});

Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard", [FitController::class, "Fit"])->name("home");
    Route::get("/setup", [SetupController::class, "setup"])->name("setup");
    Route::get("/training", [TrainingController::class, "training"])->name("training");
    Route::get("/shop", [ShopController::class, "shop"])->name("shop");
    Route::get("/friends", [FriendsController::class, "friends"])->name("friends");
    Route::get("/profile", [ProfileController::class, "profile"])->name("profile");
    Route::get("/profile/{id}", [ProfileController::class, "show"])->name("profile.show");
});


Route::get("/logout", [AuthController::class, "logOut"])->name("logout");

Route::get("/google-login", [AuthController::class, "googleLogin"])->name("googleLogin");
Route::get("/google-redirect", [AuthController::class, "googleRedirect"]);
Route::get("/microsoft-login", [AuthController::class, "microsoftLogin"])->name("microsoftLogin");
Route::get("/microsoft-redirect", [AuthController::class, "microsoftRedirect"]);
