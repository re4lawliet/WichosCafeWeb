<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;



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

    public function Barista(){
        $orden = DB::select("SELECT *
                                    FROM pedido
                                    WHERE estado = '0';");
        return view('homeBarista')->with('ordenes',$orden);
    }

    public function add(){
        $bebida = $_POST['txt1'];
        $tipo = $_POST['txt2'];
        $complemento = $_POST['txt3'];
        $azucar = $_POST['txt4'];
        $tamano = $_POST['txt5'];

        $insert = DB::insert("INSERT INTO pedido (bebida, tipo, complemento, azucar, tamano, estado)
                            VALUES ('$bebida', '$tipo', '$complemento', '$azucar', '$tamano','0')");
        return back();
    }

    /*
    

    









      $Insertar_Abono = DB::insert("INSERT INTO orden_abierta (id_orden,no_orden,fecha,abono,debe,haber,saldo,pdf,enviado,respuesta_conta)
                                                    VALUES ($a->id_orden,'$a->no_orden', '$fecha',$nuevoAbono,'-','$val_Abono','$nuevoSaldo','$path','0','0')");


    $orden = DB::select("SELECT *
                                    FROM orden
                                    WHERE id = '$idOrden';");
                                    
     $insertarPDF = DB::update("UPDATE orden_abierta
                                                    SET respuesta_conta ='1'
                                                    WHERE id_orden = $idOrden
                                                    AND abono = $abono;");
    */



}
