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

Route::get('/homecaja', 'Controller@Caja');

Route::get('/homebarista', function(){
    //$str = "It is %a on %b %d, %Y, %X - Time zone: %Z";
        //echo(gmstrftime($str,time()));
        //return view('homeBarista')->with('data',$str);
    return view('homeBarista');
    
});
