<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
		Bus Solidario
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <style>
       body{
	margin:0;
	padding:0;
	background:#fff;
	font-family: 'Raleway',sans-serif;
	color: #fff;
}
.banner{
	height: 100vh;
	width: 100%;
	background:url({{ asset('images/overlay.png') }}),url({{ asset('images/fondo2.jpeg') }});
	background-position: top;
	background-size:cover;
	/*background-attachment: fixed;*/
	background-repeat: no-repeat;
}
.banner .navbar{
	margin-top:4%;
}
.banner .navbar-brand{
	color: white;
	font-size:1.8em;
	font-weight: 700;
	margin-left: 10%;
}
.banner .nav{
	margin-right:10%; 
}
.banner .nav li a{
	color:white;
	font-size: 1.2em;
}
.banner .info{
	margin-top:15%;
	transform: translateY(-15%);
}
.banner .info h1{
	font-size: 2.5em;
	font-weight: 700;
	color: #fff;
	letter-spacing: 2px;
}
.banner .info p{
	font-size: 2em;
	font-weight: 500;
	color:white;
	letter-spacing: 2px;
}
.banner .info a{
	margin-left:50%;
	transform: translateX(-50%);
	color: #fff;
	background: orange;
	padding:10px 20px; 
	font-size: 2em;
	font-weight: 600;
}
.banner .info a:hover{
	background: black;
} 
    </style>
</head>
<body>
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand">GAMDT</div>
					<ul class="nav">
                        @if (Route::has('login'))
                       
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" for="">Bienvenido! {{auth()->user()->name}}</a>
                                
                            </li>
                      <li class="nav-item">
                        <a  href="{{ url('/dashboard/formulario') }}" class="nav-link btn btn-warning">Ir al panel administrativo</a>
                      </li>
            
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link btn btn-warning ">Iniciar Sesion</a>

                            </li>
            
                               
                            @endauth
                        </div>
                    @endif
						
						
					</ul>
				</nav>
			</div>
			<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center">Bus Solidario</h1>
				<p class="text-center">
					2020
				</p>
				<a href="{{ route('login') }}" class="btn btn-md text-center">Ingrese aqui</a>
			</div>
		</div>
	</div>
</body>
</html>