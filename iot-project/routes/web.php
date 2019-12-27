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
Route::get("/addwater", "CountController@addWater")->name("addwater");
Route::get("/waterplants", "CountController@waterPlants")->name("waterplants");
Route::get("/addcoffee", "CountController@addCoffee")->name("addcoffee");


Route::get("/water", "CountController@changeWater")->name("water");
Route::get("/plants", "CountController@changePlants")->name("plants");
Route::get("/coffee", "CountController@changeCoffee")->name("coffee");