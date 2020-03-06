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

Route::get('/', function () {
    return view('layouts/root');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/icmHeaders/create", "IcmHeadersController@create")->name("icmHeaders.create");
Route::get("/materials/create", "MaterialsController@create")->name("materials.create");
