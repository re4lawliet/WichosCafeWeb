@extends('layouts.appCaja')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu de Caja</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3><center>Menu de Caja:</center></h3>
                    <br>
                    <br>
                    <br><br><br> 
                    <form id="hacer_frm" action="{{ url('/add') }}" method="POST" >
                        {{ csrf_field() }}
                        <input type="hidden" name="txt_codigo" id="txt_codigo" value="Pedido_X">
                        <button name="btn_Pedido" id="btn_Pedido" form="hacer_frrm" type="submit" class="btn btn-primary" onclick="enviar()">Enviar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    function enviar(){
        document.forms["hacer_frm"].submit();
    }
</script>