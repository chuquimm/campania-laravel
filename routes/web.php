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

Route::get('/', 'DonanteController@create')->name('donantes.create');
Route::post('/store', 'DonanteController@store')->name('donantes.store');

// Route::group('/', function (){
//     Route::resource('donantes', 'DonanteController');
// });
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
