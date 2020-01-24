<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class Controller extends BaseController
{

    public static $listaPedidos = array();
    public $cont = 0;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function inicio(){

            return view('welcome');
            
    }
    public static function Caja(){
            return view('homecaja');
    }

    /*
    public static function add(){
        array_push(self::$listaPedidos,self::$cont);
        self::$cont = self::$cont + 1;
        error_log(self::$cont);
        return redirect('/homecaja');
    }

    public function Barista(){
        array_push(self::$listaPedidos,"Insertado_X");
        return view('homeBarista')->with('val',self::$listaPedidos);
    }
    */



}
