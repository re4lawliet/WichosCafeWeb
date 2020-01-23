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
    return view('welcome');
    
});

Route::get('/homecaja', function () {
    return view('homecaja');
});

Route::get('/homebarista', function () {
    return view('homebarista');
<<<<<<< HEAD
});
=======
});
>>>>>>> 9eb84525e22d503073e80e15a8a310a2d7a61fa9
