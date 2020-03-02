@extends('layouts.appCaja')


@section('content')
<div class="container">

        <h3><center>Menu de Caja:</center></h3>
        <div id="cont1">
                <h5><center>
                    ORDEN:
                    <form id="ordenar_frm" action="{{ url('/add') }}" method="post">
                        {{ csrf_field() }}
                        <label id="texto1" name="texto1" class="btn-outline-primary">X</label>
                        <label id="texto3" class="btn-outline-info">X</label>
                        <label id="texto2" class="btn-outline-success">X</label>
                        <label id="texto4" class="btn-outline-dark">X</label>
                        <label id="texto5" class="btn-outline-danger">X</label>
                        <input id="txt1" name="txt1" type="hidden" value="X"></input>
                        <input id="txt2" name="txt2" type="hidden" value="X"></input>
                        <input id="txt3" name="txt3" type="hidden" value="X"></input>
                        <input id="txt4" name="txt4" type="hidden" value="X"></input>
                        <input id="txt5" name="txt5" type="hidden" value="X"></input>
                        <br>
                        <button type="button" class="btn btn-success" onclick="Enviar()" width="100px">
                            <i class="fa fa-btn fa-pencil"></i>Ordenar&nbsp;
                        </button>
                        <button form="as" type="button" class="btn btn-danger" onclick="Cancelar()" width="100px">
                            <i class="fa fa-btn fa-pencil"></i>Cancelar&nbsp;
                        </button>
                    </form>
                    
                    
                </center></h5>
                
        </div>


        <table id="solicitudes_director" class="table table-striped task-table">
            
            <thead>
                <th>Bebida</th>
                <th>Complemento</th>
                <th>Chai</th>
                <th>Tipo</th>
                <th>Azucar</th>
                <th>Tamaño</th>
                
            </thead>    

            <tbody>
                
                <tr>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtCafe()" width="100px">
                            <i class="fa fa-btn fa-pencil"></i>Cafe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtTe()">
                            <i class="fa fa-btn fa-pencil"></i>Te&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtMoka()">
                            <i class="fa fa-btn fa-pencil"></i>Moka&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Chocolate
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Frape
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Infucion
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Americano
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Capuchino
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Gaseosa
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Chai
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtChocolate()">
                            <i class="fa fa-btn fa-pencil"></i>Latte
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info" onclick="agregarTxtNegro()">
                            <i class="fa fa-btn fa-pencil"></i>Negro&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Cremora
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Vainilla
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Expreso
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Entera
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Deslactosada
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Descremada
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Soya
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Blanco
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Cookies
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                            <i class="fa fa-btn fa-pencil"></i>Matcha
                        </button>
                        <br>
                        <br>
                        
                    </td>

                    <td>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Flamingo&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Elefante&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Tortuga&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Tiburon&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Rhino&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Tigre&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Orca&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Tucan&nbsp;
                        </button>
                    </td>

                    <td>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtFuerte()">
                            <i class="fa fa-btn fa-pencil"></i>Fuerte&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtSuave()">
                            <i class="fa fa-btn fa-pencil"></i>Suave&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Normal&nbsp;
                        </button>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                    </td>
                    <td>
                        <button type="button" class="btn btn-light" onclick="agregarTxtUno()">
                            <i class="fa fa-btn fa-pencil"></i>1&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-light" onclick="agregarTxtDos()">
                            <i class="fa fa-btn fa-pencil"></i>2&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-light" onclick="agregarTxtTres()">
                            <i class="fa fa-btn fa-pencil"></i>3&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-light" onclick="agregarTxtCuatro()">
                            <i class="fa fa-btn fa-pencil"></i>4&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-light" onclick="agregarTxtSinAzucar()">
                            <i class="fa fa-btn fa-pencil"></i>X&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="agregarTxtPequeño()">
                            <i class="fa fa-btn fa-pencil"></i>Normal&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-warning" onclick="agregarTxtGrande()">
                            <i class="fa fa-btn fa-pencil"></i>Grande&nbsp;&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                    </td>
                </tr>
                

            </tbody>

    
</div>
@endsection

<script>
    //------------------------------------------------------Transaccion
    function Enviar(){
        document.getElementById('txt1').value = document.getElementById('texto1').innerHTML;
        document.getElementById('txt2').value = document.getElementById('texto2').innerHTML;
        document.getElementById('txt3').value = document.getElementById('texto3').innerHTML;
        document.getElementById('txt4').value = document.getElementById('texto4').innerHTML;
        document.getElementById('txt5').value = document.getElementById('texto5').innerHTML;
        document.forms["ordenar_frm"].submit();
    }

    function Cancelar(){
        document.getElementById('texto1').innerHTML = 'X';
        document.getElementById('texto2').innerHTML = 'X';
        document.getElementById('texto3').innerHTML = 'X';
        document.getElementById('texto4').innerHTML = 'X';
        document.getElementById('texto5').innerHTML = 'X';
    }
    //------------------------------------------------------Bebida
    function agregarTxtCafe(){   
        document.getElementById('texto1').innerHTML = 'Cf';
    }
    function agregarTxtTe(){   
        document.getElementById('texto1').innerHTML = 'Te';
    }      
    function agregarTxtMoka(){   
        document.getElementById('texto1').innerHTML = 'Mk';
    }                                  
    function agregarTxtChocolate(){   
        document.getElementById('texto1').innerHTML = 'Ch';
    }   
    //------------------------------------------------------Tipo Bebida
    function agregarTxtFuerte(){   
        document.getElementById('texto2').innerHTML = 'F';
    }      
    function agregarTxtSuave(){   
        document.getElementById('texto2').innerHTML = 'S';
    }   
    function agregarTxtNormal(){   
        document.getElementById('texto2').innerHTML = 'N';
    } 
    //------------------------------------------------------Complemento
    function agregarTxtNegro(){   
        document.getElementById('texto3').innerHTML = 'Ng';
    }  
    function agregarTxtLeche(){   
        document.getElementById('texto3').innerHTML = 'L';
    }  
    function agregarTxtCremora(){   
        document.getElementById('texto3').innerHTML = 'Cr';
    }
    //------------------------------------------------------Azucar          
    function agregarTxtUno(){   
        document.getElementById('texto4').innerHTML = '1';
    } 
    function agregarTxtDos(){   
        document.getElementById('texto4').innerHTML = '2';
    }   
    function agregarTxtTres(){   
        document.getElementById('texto4').innerHTML = '3';
    }  
    function agregarTxtCuatro(){   
        document.getElementById('texto4').innerHTML = '4';
    }  
    function agregarTxtSinAzucar(){   
        document.getElementById('texto4').innerHTML = 'X';
    } 
    //------------------------------------------------------Tamaño 
    function agregarTxtGrande(){   
        document.getElementById('texto5').innerHTML = '+';
    } 
    function agregarTxtPequeño(){   
        document.getElementById('texto5').innerHTML = '-';
    } 
    //------------------------------------------------------Crear ORDEN
    function CrearOrden(){   
        var texto1=document.getElementById('texto1').innerHTML;
        var texto2=document.getElementById('texto2').innerHTML;
        var texto3=document.getElementById('texto3').innerHTML;
        var texto4=document.getElementById('texto4').innerHTML;
        var texto5=document.getElementById('texto5').innerHTML;

        var Salida=texto1+texto2+texto3+texto4+texto5;

        alert(Salida);
        location.reload();

    } 

</script>