@extends('layouts.appCaja')


@section('content')
<head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
</head>


<div id="NO">
   
</div>
    <div id="divPedidos">
        <table>
            @foreach($ordenes as $orden)
            <tr>

            <td>{{ $orden->bebida }}</td>

            </tr>

            @endforeach

        </table>
    </div>

   

<script type="text/javascript">
       
       $(document).ready(function () {
        setInterval(function () {
            $( "#divPedidos" ).load(window.location.href + " #divPedidos" );
        }, 100);
    });
</script>


@endsection

