<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get("/", "paginasController@home");
Route::get("/home", "paginasController@home");
Route::get("/quienesSomos", "paginasController@quienesSomos");
Route::get("/garaje", "paginasController@garaje");
Route::get("/administracion", "paginasController@administracion");

Route::get("/garaje/frigorificas", "paginasController@frigorificas");
Route::get("/garaje/carga", "paginasController@carga");
Route::get("/garaje/pasajeros", "paginasController@pasajeros");
