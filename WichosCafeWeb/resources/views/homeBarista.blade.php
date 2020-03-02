@extends('layouts.appCaja')


@section('content')
<head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
</head>


<div id="NO">

 <!--TITULO -->
 <div class="panel-title">
        <h1><center>COLA</center></h1>
    </div>


    <!-- Tabla  -->
    <div class="col-md-5" id="divPedidos">
        <!-- si el resultado de la consulta es mayor a 0-->
            <div class="panel panel-default">
            </div>

            <div class="panel-body">
                <table id="solicitudes_director" class="table table-striped">
                    <!-- Encabezado de Tabla -->
                    <thead>
                        <th>ID</th>
                        <th>Bebida</th>
                        <th>Tipo</th>
                        <th>Complemento</th>
                        <th>Azucar</th>
                        <th>Tamaño</th>
                        <th>Accion</th>
                        
                    </thead>
                    <!-- Cuerpo de Tabla -->
                    <tbody>
                        @foreach($ordenes as $orden)
                        <tr>
                            <td class="table-text"><div><h5><label id="texto1" name="texto1" >{{ $orden->id }})</label></h5></div></td>
                            <td class="table-text"><div><h3><label id="texto1" name="texto1" class="btn-outline-primary">{{ $orden->bebida }}</label></h3></div></td>
                            <td class="table-text"><div><h3><label id="texto1" name="texto1" class="btn-outline-success">{{ $orden->tipo }}</label></h3></div></td>
                            <td class="table-text"><div><h3><label id="texto1" name="texto1" class="btn-outline-info">{{ $orden->complemento }}</label></h3></div></td>
                            <td class="table-text"><div><h3><label id="texto1" name="texto1" class="btn-outline-dark">{{ $orden->azucar }}</label></h3></div></td>
                            <td class="table-text"><div><h2><label id="texto1" name="texto1" class="btn-outline-danger">{{ $orden->tamano }}</label></h2></div></td>
                            
                            <!-- Boton VER -->
                            <td>
                                <button type="submit" class="btn btn-danger" onclick="location.href='/EliminarOrden/{{ $orden->id }}'">
                                    <i class="fa fa-btn fa-pencil"></i>Eliminar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        
    </div>


   

<script type="text/javascript">
       
       $(document).ready(function () {
        setInterval(function () {
            $( "#divPedidos" ).load(window.location.href + " #divPedidos" );
        }, 100);
    });
</script>


@endsection

