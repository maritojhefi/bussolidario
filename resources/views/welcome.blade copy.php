<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bus Solidario</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Sansita+Swashed&display=swap" rel="stylesheet">        <!-- Styles -->
        <style>
            html, body {
               
                color: rgba(36, 33, 33, 0.829);
                font-family: 'Krona One', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
                height: 100%;
               
            /* Center and scale the image nicely */
          

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
                color: #FF7126;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .color{
                height: 100px;
                background-color: #FF7126;
            }
            .fondo{
                background-image: url({{ asset('images/logo.png') }});
                background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
                -webkit-filter: blur(10px);
  -moz-filter: blur(10px);
  -o-filter: blur(10px);
  -ms-filter: blur(10px);
  filter: blur(0px);
            }
           .shadowtext{
            text-shadow: 3px 3px orange;
           }
        </style>
    </head>
    <body>
     
        <div class="flex-center position-ref full-height fondo img-fluid" alt="Responsive image">
           
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
            <a class="" for="">Bienvenido! {{auth()->user()->name}}</a>
                    <a  href="{{ url('/dashboard/formulario') }}" class="btn btn-dark">Ir al panel administrativo</a>

                @else
                    <a href="{{ route('login') }}" class="btn " style="font-family: 'Sansita Swashed', cursive;">Iniciar Sesion</a>

                   
                @endauth
            </div>
        @endif
          
            

            <div class="content">
                <div class="title m-b-md shadowtext">
                    Bus Solidario Tarija
                </div>

               
               
            </div>
        </div>
    </body>
</html>

