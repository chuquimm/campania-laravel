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

Route::get('/', function ()
{
    return view('welcome');
})->name('inicio');

Route::resource('donantes', 'DonanteController');
Route::resource('campanias', 'CampaniaController');

Auth::routes(['register' => false]);
Route::get('provincias/get/{id}', 'DonanteController@getProvincias');
Route::get('distritos/get/{id}', 'DonanteController@getDistritos');

Route::get('/home', 'HomeController@index')->name('home');