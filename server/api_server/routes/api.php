<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('dieren', 'AnimalController@index');
Route::get('dieren/{animal}', 'AnimalController@show');
Route::post('dieren', 'AnimalController@store');
Route::put('dieren/{animal}', 'AnimalController@update');
Route::delete('dieren/{animal}', 'AnimalController@delete');

Route::get('dieren_types', 'AnimalTypeController@index');
Route::get('dieren_types/{animalType}', 'AnimalTypeController@show');

Route::get('dierentuinen', 'ZooController@index');
Route::get('dierentuinen/{zoo}', 'ZooController@show');

