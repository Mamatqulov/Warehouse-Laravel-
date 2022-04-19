<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OtchetController;
use App\Http\Controllers\PrihodController;
use App\Http\Controllers\RashodController;
use Illuminate\Support\Facades\Route;

Route::get("/login", [LoginController::class, 'index'])->name("login");
Route::post("/login", [LoginController::class, 'store'])->name("sign_in");
Route::get("/register", [RegisterController::class, 'index'])->name("register");
Route::post("/register", [RegisterController::class, 'store'])->name("sign_up");

Route::middleware(['auth'])->group(function () {
    Route::get("/logout", [LoginController::class, 'logout'])->name("logout");
    Route::resource("/", IndexController::class);
    Route::resource("/prihod", PrihodController::class);
    Route::resource("/rashod", RashodController::class);
    Route::get('/otchet', [OtchetController::class, 'otchet'])->name('otchet');
    Route::post('/prihod', [PrihodController::class, 'prihod'])->name('prihod');
    Route::post('/rashod', [RashodController::class, 'rashod'])->name('rashod');
    Route::get('/delete/{id}', [RashodController::class, 'delete'])->name('delete');
    Route::get('/showTovar/{id}', [OtchetController::class, 'showTovar'])->name('showTovar');
    Route::get('/showRashod/{id}', [OtchetController::class, 'showRashod'])->name('showRashod');
});
