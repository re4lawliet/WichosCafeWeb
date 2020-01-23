@extends('layouts.appCaja')


@section('content')
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
</head>

<div id="NO">
<ul>
<?php for($i=1;$i<=5;$i++){ ?>
<li>Menu Item <?php echo $i; ?></li>
<?php } ?>
</ul>
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

