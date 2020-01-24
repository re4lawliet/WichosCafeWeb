@extends('layouts.appCaja')


@section('content')
<div class="container">

        <h3><center>Menu de Caja:</center></h3>
        <div id="cont1">
                <h5><center>
                    ORDEN:
                    <label id="texto1" class="btn-outline-primary">X</label>
                    <label id="texto2" class="btn-outline-success">X</label>
                    <label id="texto3" class="btn-outline-info">X</label>
                    <label id="texto4" class="btn-outline-dark">X</label>
                    <label id="texto5" class="btn-outline-danger">X</label>
                    <br>
                    <button type="button" class="btn btn-success" onclick='alert("Orden Enviada")' width="100px">
                        <i class="fa fa-btn fa-pencil"></i>Ordenar&nbsp;
                    </button>
                    <button type="button" class="btn btn-danger" onclick="location.reload()" width="100px">
                        <i class="fa fa-btn fa-pencil"></i>Cancelar&nbsp;
                    </button>
                </center></h5>
                
        </div>
        <div class="grid-container">
            
            <div class="grid-item">

                <center>Bebida</center>
                 <!-- Boton Rechazar -->
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

            </div>

            <div class="grid-item">

                <center>Tipo</center>
                <button type="button" class="btn btn-success" onclick="agregarTxtFuerte()">
                    <i class="fa fa-btn fa-pencil"></i>Fuerte&nbsp;
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-success" onclick="agregarTxtSuave()">
                    <i class="fa fa-btn fa-pencil"></i>Suave&nbsp;&nbsp;
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-success" onclick="agregarTxtNormal()">
                    <i class="fa fa-btn fa-pencil"></i>Normal&nbsp;
                </button>
                <br>
                <br>

            </div>
            <div class="grid-item">

                    <center>Complemento</center>
                
                    <button type="button" class="btn btn-info" onclick="agregarTxtNegro()">
                        <i class="fa fa-btn fa-pencil"></i>Negro&nbsp;&nbsp;&nbsp;
                    </button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-info" onclick="agregarTxtLeche()">
                        <i class="fa fa-btn fa-pencil"></i>Leche&nbsp;&nbsp;&nbsp;&nbsp;
                    </button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-info" onclick="agregarTxtCremora()">
                        <i class="fa fa-btn fa-pencil"></i>Cremora
                    </button>
                    <br>
                    <br>

            </div>  
            <div class="grid-item">

                    <center>Azucar</center>
                
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
            </div>
            <div class="grid-item">


                    <center>Tamaño</center>
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

            </div>
        </div>
    
</div>
@endsection

<script>
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

</script>