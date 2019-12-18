<?php

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
Route::get('/', 'IndexController@index');

Route::post('/login/check', 'LoginController@index');
Route::get('/login/confirm', 'LoginController@confirmform');
Route::get('/login', 'LoginController@form');

Route::get("/show", "CountController@show")->name("show");
Route::get("/water/{username}", "CountController@countWater")->name("water");
Route::get("/plants/{username}", "CountController@countPlants")->name("plants");
Route::get("/coffee/{username}", "CountController@countCoffee")->name("coffee");
Route::get("/bike/{username}", "CountController@countBike")->name("bike");


Route::get("/layout", "CountController@changeWater");