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
/*  Car create  */
Route::get("/create", "CarController@create");
Route::post("/create/store", "CarController@store")->name('cars.store');

/*  Car store  */
Route::get("/", "CarController@index");

/*  Car delete  */
Route::get("/delete/{id}", "CarController@delete")->name('delete');

/*  Car edit  */
Route::get("/edit/{id}", "CarController@edit")->name('edit');

/* Car update */
Route::post("/update/{id}", "CarController@update")->name('update');

/* Car search */
Route::get("/search", "CarController@search")->name('search');