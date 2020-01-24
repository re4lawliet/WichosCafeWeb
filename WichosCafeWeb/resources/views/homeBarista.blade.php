@extends('layouts.appCaja')


@section('content')
<<<<<<< HEAD
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

                    <h3><center>Menu de Proyectos:</center></h3>
                    <br>
                    <br>
                    <br><br><br> 

                    <section>aasdfasdfasdfasdfasdfaasdfasdfasdfsdfasdfasdfasdfasdfasdfasdfasdfasjdflkajsdflkjasldkfjalskdjflaksdjflkasdjflkajsdlkfjaslkdfjalksdjflkasjdflkajsdfkajsdfkjasdlkfjalskdfjlaksjdflsjadflk</section>

<div class="container">

        <div class="col-12"><h2>Buscar Proyecto
            
                {{ Form::open(['route' => 'homeAdmin', 'method' => 'GET', 'class' => 'navbar-form navbar-left']) }}
                <div class="form-group">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Proyecto']) }}
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
                {{ Form::close() }}
        
        
        
        </h2></div>
=======
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
</head>

<div id="NO">
<ul>
<?php for($i=1;$i<=5;$i++){ ?>
<li>Menu Item <?php echo $i; ?></li>
<?php } ?>
</ul>
>>>>>>> 51e043f24f360dbe35c134cf6fddd3e3b13d8566
</div>


<div id="links">
<ul>
<?php for($i=1;$i<=15;$i++){ ?>
<li>Menu Item <?php echo $i; ?></li>
<?php } ?>
</ul>
holis
</div>
<script type="text/javascript">
   /*setTimeout(function(){
       location.links.reload();
   },1000);*/
   $(document).ready(function () {
    setInterval(function () {
        $( "#links" ).load(window.location.href + " #links" );
    }, 1000);
});
</script>

@endsection

