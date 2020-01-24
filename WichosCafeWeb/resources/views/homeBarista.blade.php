@extends('layouts.appCaja')


@section('content')
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    </head>

    <div id="divPedidos">
        <table>
            @foreach($val as $v)
            <tr>
            
            <td>{{ $v }}</td>
                
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

