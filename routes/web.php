<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','login');
Route::post('/',[UserController::class,'login'])->name("user-login");
Route::get('/home',[UserController::class,'index'])->name("home");