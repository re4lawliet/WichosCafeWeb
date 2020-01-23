<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Metas Antiguos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Metas Desconocido -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- TITULO EDITABLE -->
    <!--title>@yield('title')</title-->
    <title>Admin SUR</title>
    <!-- Bootstrap -->
    <!-- Scripts Antiguos -->
    <!--script src="{{ asset('js/app.js') }}" defer></script (ESTE ESCRIPT ES VIEJO PERO CAGA LAS TABLAS)-->
    <script src="{{ asset('js/tags.js') }}" defer></script>
    <!-- Script Desconocido -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Script Desconocido pero sirven para el DropDown -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/tags.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="\images\surlogo.png">
                    <img src="\images\logologo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ url('/homes') }}" class="nav-link">Home Admin</a></li>
                            <!--<li class="nav-item"><a href="#" class="nav-link"></a></li>-->
                        </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                Modulos Administrador <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/proyectos') }}" class="nav-link">Modulo de Proyectos</a></li>
                                <li><a href="{{ url('/empresas') }}" class="nav-link">Modulo de Empresas</a></li>
                                <li><a href="{{ url('/asignacion') }}" class="nav-link">Modulo Asignaciones</a></li>
                                <li><a href="{{ url('/register2') }}" class="nav-link">Registrar Usuarios</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Rol:Caja  <span class="caret"></span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>