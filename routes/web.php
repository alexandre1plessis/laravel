<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('singleton', 'SingletonController@show');
Route::get('factory', 'FactoryController@show');
Route::get('facade', 'FacadeController@commander');
Route::get('iterator', 'IteratorController@commander');
Route::get('observator', 'ObservatorController@show');
Route::get('strategie', 'StrategieController@show');
Route::get('template', 'TemplateController@show');
Route::get('command', 'CommandController@show');
Route::get('state', 'StateController@show');