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

<<<<<<< HEAD
Route::get('/', 'Controller@inicio');
=======
Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/homecaja', function () {
    return view('homecaja');
});

Route::get('/homebarista', function () {
    return view('homebarista');
});
>>>>>>> 68835420a7a5454a0a3cbe93df538ec1d8903f8b
