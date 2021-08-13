<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','login');
Route::post('/',[UserController::class,'login'])->name("user-login");

Route::resource('cats',CategoryController::class);
Route::resource('subcats',SubCatController::class);


/*

GET|HEAD  | subcat               | subcat.index   | App\Http\Controllers\SubCatController@index    
POST      | subcat               | subcat.store   | App\Http\Controllers\SubCatController@store    
GET|HEAD  | subcat/create        | subcat.create  | App\Http\Controllers\SubCatController@create   
GET|HEAD  | subcat/{subcat}      | subcat.show    | App\Http\Controllers\SubCatController@show     
PUT|PATCH | subcat/{subcat}      | subcat.update  | App\Http\Controllers\SubCatController@update   
DELETE    | subcat/{subcat}      | subcat.destroy | App\Http\Controllers\SubCatController@destroy  
GET|HEAD  | subcat/{subcat}/edit | subcat.edit    | App\Http\Controllers\SubCatController@edit 

*/
