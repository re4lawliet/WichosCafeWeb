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

Route::get('/', 'Controller@inicio');

Route::get('/homecaja', 'Controller@Caja');

Route::get('/homebarista', 'Controller@Barista');

Route::post('/add','Controller@add');