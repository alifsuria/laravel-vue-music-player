<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("register", [\App\Http\Controllers\Auth\RegisterController::class, "register"]);
Route::post("login", [\App\Http\Controllers\Auth\LoginController::class, "login"]);

Route::group(["middleware" => "auth:sanctum"], function () {
    Route::get("get-user", [\App\Http\Controllers\Auth\LoginController::class, "getUser"]); // Route for handling frontend middleware
    Route::get("logout", [\App\Http\Controllers\Auth\LoginController::class, "logout"]);
    Route::post("profile-update",[\App\Http\Controllers\ProfileController::class,"update"]);
    Route::post("profile-delete",[\App\Http\Controllers\ProfileController::class,"destroy"]);
    Route::post("password-update",[\App\Http\Controllers\Auth\PasswordManagerController::class,"update"]);
});