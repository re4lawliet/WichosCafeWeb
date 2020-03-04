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
        $complemento = $_POST['txt2'];
        $chai = $_POST['txt3'];
        $tipo = $_POST['txt4'];
        $azucar = $_POST['txt5'];
        $tamano = $_POST['txt6'];
        
        
        $insert = DB::insert("INSERT INTO pedido (bebida, tipo, complemento, azucar, tamano, estado, chai)
                            VALUES ('$bebida', '$tipo', '$complemento', '$azucar', '$tamano','0','$chai')");
        return back();
    }

    public function EliminarOrden($id){
        try{

            
            $delete = DB::delete("DELETE FROM pedido WHERE id=$id;");

            $orden = DB::select("SELECT *
                                    FROM pedido
                                    WHERE estado = '0';");
            return view('homeBarista')->with('ordenes',$orden);

        }catch (Exception $e) { 
            Session::flash('catch_error','Eliminar Orden');
            return view('ErrorCatch');  
        }
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
