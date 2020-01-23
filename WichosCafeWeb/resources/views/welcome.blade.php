<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wichos Cafe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="top-right links">
                
                <a href="/homecaja">Caja</a>
                <a href="">Barista</a>
                
            </div>

            <div class="content">

                <div class="card-body">
                @if(Session::has('message-error'))
                    <div class="card">
                    <font color="red"><div class="card-header">Error:</div></font>
                    <h7><B><font color="red">{{Session::get('message-error')}}</font></B></h7>
                    </div>
                @endif
                </div>
                
                
                <div class="title m-b-md">
                    
                    <img src="images/logoindex.png">
                    
                </div>

                <div class="links">
                    <a href="">Empresa</a>
                    <a href="">Wichos Cafe</a>
                    <a href="">Acerca De</a>
                    <a href="">Desarrollo</a>
                    <a href="">Mision</a>
                    <a href="">Vision</a>
                </div>
            </div>
        </div>
    </body>
</html>
