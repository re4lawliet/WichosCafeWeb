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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection