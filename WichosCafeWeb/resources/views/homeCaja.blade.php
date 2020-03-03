@extends('layouts.appCaja')


@section('content')
<div class="container">

        <h3><center>Menu de Caja:</center></h3>
        <div id="cont1">
                <h5><center>
                    ORDEN:
                    <form id="ordenar_frm" action="{{ url('/add') }}" method="post">
                        {{ csrf_field() }}
                        <label id="texto6" class="btn-outline-danger"></label>
                        <label id="texto1" name="texto1" class="btn-outline-primary"></label>
                        <label id="texto2" class="btn-outline-info"></label>
                        <label id="texto3" class="btn-outline-success"></label>
                        <label id="texto4" class="btn-outline-dark"></label>
                        <label id="texto5" class="btn-outline-dark"></label>
                        
                        <input id="txt6" name="txt6" type="hidden" value=""></input>
                        <input id="txt1" name="txt1" type="hidden" value=""></input>
                        <input id="txt2" name="txt2" type="hidden" value=""></input>
                        <input id="txt3" name="txt3" type="hidden" value=""></input>
                        <input id="txt4" name="txt4" type="hidden" value=""></input>
                        <input id="txt5" name="txt5" type="hidden" value=""></input>
                        
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
                <th id="thChai" style="display:none">Chai</th>
                <th>Complemento</th>
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
                        <button type="button" class="btn btn-primary" onclick="agregarTxtFrape()">
                            <i class="fa fa-btn fa-pencil"></i>Frape
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtInfucion()">
                            <i class="fa fa-btn fa-pencil"></i>Infucion
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtAmericano()">
                            <i class="fa fa-btn fa-pencil"></i>Americano
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtCapuchino()">
                            <i class="fa fa-btn fa-pencil"></i>Capuchino
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtGaseosa()">
                            <i class="fa fa-btn fa-pencil"></i>Gaseosa
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="MostrarChai()">
                            <i class="fa fa-btn fa-pencil"></i>Chai
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtLatte()">
                            <i class="fa fa-btn fa-pencil"></i>Latte
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="agregarTxtMatcha()">
                            <i class="fa fa-btn fa-pencil"></i>Matcha
                        </button>
                    </td>
                    <td id="tdChai" style="display:none">
                        <button type="button" class="btn btn-success" onclick="agregarTxtFlamingo()">
                            <i class="fa fa-btn fa-pencil"></i>Flamingo&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtElefante()">
                            <i class="fa fa-btn fa-pencil"></i>Elefante&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtTortuga()">
                            <i class="fa fa-btn fa-pencil"></i>Tortuga&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtTiburon()">
                            <i class="fa fa-btn fa-pencil"></i>Tiburon&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtRhino()">
                            <i class="fa fa-btn fa-pencil"></i>Rhino&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtTigre()">
                            <i class="fa fa-btn fa-pencil"></i>Tigre&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtOrca()">
                            <i class="fa fa-btn fa-pencil"></i>Orca&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" onclick="agregarTxtTucan()">
                            <i class="fa fa-btn fa-pencil"></i>Tucan&nbsp;
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
                        <button type="button" class="btn btn-info" onclick="agregarTxtVainilla()">
                            <i class="fa fa-btn fa-pencil"></i>Vainilla
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtExpreso()">
                            <i class="fa fa-btn fa-pencil"></i>Expreso
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtLecheEntera()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Entera
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtLecheDeslactosada()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Deslactosada
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtLecheDescremada()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Descremada
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtLecheSoya()">
                            <i class="fa fa-btn fa-pencil"></i>Leche Soya
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtBlanco()">
                            <i class="fa fa-btn fa-pencil"></i>Blanco
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="agregarTxtCookies()">
                            <i class="fa fa-btn fa-pencil"></i>Cookies
                        </button>
                        <br>
                        <br>
                        
                    </td>
                    <td>
                        <button type="button" class="btn btn-light" onclick="agregarTxtFuerte()">
                            <i class="fa fa-btn fa-pencil"></i>Fuerte&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-light" onclick="agregarTxtSuave()">
                            <i class="fa fa-btn fa-pencil"></i>Suave&nbsp;&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-light" onclick="agregarTxtNormal()">
                            <i class="fa fa-btn fa-pencil"></i>Normal&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtBoraBora()">
                            <i class="fa fa-btn fa-pencil"></i>BoraBora&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtNube()">
                            <i class="fa fa-btn fa-pencil"></i>La Nube&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtMenta()">
                            <i class="fa fa-btn fa-pencil"></i>Menta Verde&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtVainillaC()">
                            <i class="fa fa-btn fa-pencil"></i>Vainilla Cereza&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtAmareto()">
                            <i class="fa fa-btn fa-pencil"></i>Amareto Manzana&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtOrganico()">
                            <i class="fa fa-btn fa-pencil"></i>Organico&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtLemon()">
                            <i class="fa fa-btn fa-pencil"></i>Lemon Ginger&nbsp;
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-secondary" onclick="agregarTxtMarroco()">
                            <i class="fa fa-btn fa-pencil"></i>Marroco&nbsp;
                        </button>
                        
                        
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
                        <button type="button" class="btn btn-warning" onclick="agregarTxtIce()">
                            <i class="fa fa-btn fa-pencil"></i>ICE&nbsp;&nbsp;&nbsp;
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
        document.getElementById('txt6').value = document.getElementById('texto6').innerHTML;
        document.forms["ordenar_frm"].submit();
    }

    function Cancelar(){
        document.getElementById('texto1').innerHTML = '';
        document.getElementById('texto2').innerHTML = '';
        document.getElementById('texto3').innerHTML = '';
        document.getElementById('texto4').innerHTML = '';
        document.getElementById('texto5').innerHTML = '';
        document.getElementById('texto6').innerHTML = '';
    }
    //------------------------------------------------------Bebida
    function agregarTxtCafe(){   
        document.getElementById('texto1').innerHTML = 'Caf';
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
    function agregarTxtFrape(){   
        document.getElementById('texto1').innerHTML = 'Frap';
    }   
    function agregarTxtInfucion(){   
        document.getElementById('texto1').innerHTML = 'Infu';
    }   
    function agregarTxtAmericano(){   
        document.getElementById('texto1').innerHTML = 'Amer';
    }   
    function agregarTxtCapuchino(){   
        document.getElementById('texto1').innerHTML = 'Capu';
    }   
    function agregarTxtGaseosa(){   
        document.getElementById('texto1').innerHTML = 'Gase';
    }   
    function MostrarChai(){   
        agregarTxtChai(); 
        var y = document.getElementById("thChai");
        var x = document.getElementById("tdChai");    
        if (y.style.display === "none") {
            y.style.display = "block";
            x.style.display = "block";
        }
    } 
    function ocultarChai() {
        var y = document.getElementById("thChai");
        var x = document.getElementById("tdChai");
        if (y.style.display === "block") {
            x.style.display = "none";
            y.style.display = "none";
        }
    }
    function agregarTxtChai(){   
        document.getElementById('texto1').innerHTML = 'Chai';
    }   
    function agregarTxtLatte(){   
        document.getElementById('texto1').innerHTML = 'Latt';
    }   
    function agregarTxtMatcha(){   
        document.getElementById('texto1').innerHTML = 'Matc';
    }   
    //------------------------------------------------------Complemento
    function agregarTxtNegro(){   
        document.getElementById('texto2').innerHTML = 'Neg';
    }  
    function agregarTxtCremora(){   
        document.getElementById('texto2').innerHTML = 'Crem';
    }
    function agregarTxtVainilla(){   
        document.getElementById('texto2').innerHTML = 'Vain';
    }  
    function agregarTxtExpreso(){   
        document.getElementById('texto2').innerHTML = 'Exps';
    }  
    function agregarTxtLecheEntera(){   
        document.getElementById('texto2').innerHTML = 'Entera';
    }  
    function agregarTxtLecheDeslactosada(){   
        document.getElementById('texto2').innerHTML = 'Deslac';
    }  
    function agregarTxtLecheDescremada(){   
        document.getElementById('texto2').innerHTML = 'Descrem';
    }  
    function agregarTxtLecheSoya(){   
        document.getElementById('texto2').innerHTML = 'Soya';
    }  
    function agregarTxtBlanco(){   
        document.getElementById('texto2').innerHTML = 'Blan';
    }  
    function agregarTxtCookies(){   
        document.getElementById('texto2').innerHTML = 'Cook';
    }  
    //------------------------------------------------------Chai
    function agregarTxtFlamingo(){  
        document.getElementById('texto3').innerHTML = 'Flam';
        ocultarChai();
    }      
    function agregarTxtElefante(){   
        document.getElementById('texto3').innerHTML = 'Elef';
        ocultarChai();
    }   
    function agregarTxtTortuga(){   
        document.getElementById('texto3').innerHTML = 'Tort';
        ocultarChai();
    } 
    function agregarTxtTiburon(){   
        document.getElementById('texto3').innerHTML = 'Tibu';
        ocultarChai();
    } 
    function agregarTxtRhino(){   
        document.getElementById('texto3').innerHTML = 'Rino';
        ocultarChai();
    } 
    function agregarTxtTigre(){   
        document.getElementById('texto3').innerHTML = 'Tigr';
        ocultarChai();
    } 
    function agregarTxtOrca(){   
        document.getElementById('texto3').innerHTML = 'Orca';
        ocultarChai();
    } 
    function agregarTxtTucan(){   
        document.getElementById('texto3').innerHTML = 'Tuca';
        ocultarChai();
    } 
    //------------------------------------------------------Tipo Bebida
    function agregarTxtFuerte(){   
        document.getElementById('texto4').innerHTML = 'Fuer';
    }      
    function agregarTxtSuave(){   
        document.getElementById('texto4').innerHTML = 'Suav';
    }   
    function agregarTxtNormal(){   
        document.getElementById('texto4').innerHTML = 'Norm';
    } 
    function agregarTxtBoraBora(){   
        document.getElementById('texto4').innerHTML = 'BrBr';
    } 
    function agregarTxtNube(){   
        document.getElementById('texto4').innerHTML = 'Nube';
    } 
    function agregarTxtMenta(){   
        document.getElementById('texto4').innerHTML = 'MeVe';
    } 
    function agregarTxtVainillaC(){   
        document.getElementById('texto4').innerHTML = 'VaCe';
    } 
    function agregarTxtAmareto(){   
        document.getElementById('texto4').innerHTML = 'Amar';
    } 
    function agregarTxtOrganico(){   
        document.getElementById('texto4').innerHTML = 'Orga';
    } 
    function agregarTxtLemon(){   
        document.getElementById('texto4').innerHTML = 'LemonGi';
    } 
    function agregarTxtMarroco(){   
        document.getElementById('texto4').innerHTML = 'Mrco';
    } 
    //------------------------------------------------------Azucar          
    function agregarTxtUno(){   
        document.getElementById('texto5').innerHTML = '1az';
    } 
    function agregarTxtDos(){   
        document.getElementById('texto5').innerHTML = '2az';
    }   
    function agregarTxtTres(){   
        document.getElementById('texto5').innerHTML = '3az';
    }  
    function agregarTxtCuatro(){   
        document.getElementById('texto5').innerHTML = '4az';
    }  
    function agregarTxtSinAzucar(){   
        document.getElementById('texto5').innerHTML = '0az';
    } 
    //------------------------------------------------------Tamaño 
    function agregarTxtGrande(){   
        document.getElementById('texto6').innerHTML = 'Grd';
    } 
    function agregarTxtPequeño(){   
        document.getElementById('texto6').innerHTML = 'Norm';
    } 
    function agregarTxtIce(){   
        document.getElementById('texto6').innerHTML = 'Ice';
    } 
    //------------------------------------------------------Crear ORDEN
    function CrearOrden(){   
        var texto1=document.getElementById('texto1').innerHTML;
        var texto2=document.getElementById('texto2').innerHTML;
        var texto3=document.getElementById('texto3').innerHTML;
        var texto4=document.getElementById('texto4').innerHTML;
        var texto5=document.getElementById('texto5').innerHTML;
        var texto6=document.getElementById('texto6').innerHTML;

        var Salida=texto6+texto2+texto3+texto4+texto5+texto1;

        alert(Salida);
        location.reload();

    } 

</script>