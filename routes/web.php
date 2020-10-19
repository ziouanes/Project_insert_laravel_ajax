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



Route::get('/', 'clientcontrollerr@index');
Route::post('store', 'clientcontrollerr@store');
//Route::get('/ss', 'clientcontrollerr@ss');
Route::get('edit-client/{id}', 'clientcontrollerr@edit');
Route::post('update', 'clientcontrollerr@update');
Route::get('delete-client/{id}', 'clientcontrollerr@delete');
