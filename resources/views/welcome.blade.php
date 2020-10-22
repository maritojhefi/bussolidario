<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bus Solidario</title>

  <!-- Font Awesome Icons -->
  <link href="{{ asset('creative/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
<link href="{{ asset('creative/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{ asset('creative/css/creative.min.css') }}" rel="stylesheet">
  <link href="{{ asset('creative/login.css') }}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
	  <a class="navbar-brand js-scroll-trigger" href="#page-top">GAMDT</a>
	  <img src="{{ asset('images/logo.png') }}" alt="..." class="img-thumbnail rounded float-left" style="width: 80px">
	  <img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-right" style="width:60px ">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.facebook.com/Gobierno.Autonomo.Municipal.Tarija/"><i class="fab fa-facebook fa-2x"></i></a>
		  </li>
		  
	

  @if (Route::has('login'))
  @auth
          <li class="nav-item">
            <label class="nav-link js-scroll-trigger" href="#services">Bienvenid@!{{auth()->user()->name}}</label>
          </li>
          <li class="nav-item">
			<a  href="{{ url('/dashboard/formulario') }}" class="nav-link js-scroll-trigger text-info">Ir al panel administrativo</a>
		  </li>
		  <div class="nav-item" >
			<a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
			   onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
Cerrar sesion
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</div>
		  @else
		  @error('email')
		  <li class="nav-item">
            <label class="nav-link js-scroll-trigger btn btn-danger btn-lg text-white" for="">Error en los datos ingresados</label>
		  </li>
		  @enderror
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Iniciar Sesion</a>
		  </li>
		  @endauth
		  @endif 
		</ul>
		
      </div>
    </div>
  </nav>
 
  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">BUS SOLIDARIO</h1>
		  <hr class="divider my-1">
		  <img src="{{ asset('images/logoeditado.png') }}" alt="..." class=" rounded float-center" style="width:200px ">

        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">GOBIERNO AUTONOMO MUNICIPAL DE LA CIUDAD DE TARIJA</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">De que se trata?</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">BONO SOLIDARIO COVID-19</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Miles de personas reciben este bono por parte de la alcaldia para ayudar a la gente en estos tiempos complicados de pandemia...</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#portfolio">ASI AYUDAMOS A LA GENTE!</a>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
		<a class="portfolio-box" href="{{asset('images/BUS/1.jpg')}}">
            <img class="img-fluid" src="{{asset('images/BUS/1.jpg')}}" alt="Responsive image">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
				Bus Solidario
              </div>
              <div class="project-name">
				<img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-left" style="width:100px ">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6" >
          <a class="portfolio-box" href="{{asset('images/BUS/9.jpg')}}">
            <img class="img-fluid" src="{{asset('images/BUS/9.jpg')}}" alt="Responsive image">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Bus Solidario
              </div>
              <div class="project-name">
				<img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-left" style="width:100px ">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('images/BUS/7.jpg')}}">
            <img class="img-fluid" src="{{asset('images/BUS/7.jpg')}}" alt="Responsive image">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Bus Solidario
              </div>
              <div class="project-name">
				<img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-left" style="width:100px ">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('images/BUS/4.jpg')}}">
            <img class="img-fluid" src="{{asset('images/BUS/4.jpg')}}" alt="Responsive image">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Bus Solidario
              </div>
              <div class="project-name">
				<img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-left" style="width:100px ">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('images/BUS/5.jpg')}}">
            <img class="img-fluid" src="{{asset('images/BUS/5.jpg')}}" alt="Responsive image">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Bus Solidario
              </div>
              <div class="project-name">
				<img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-left" style="width:100px ">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('images/BUS/10.jpg')}}">
            <img class="img-fluid" src="{{asset('images/BUS/10.jpg')}}" alt="Responsive image">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Bus Solidario
              </div>
              <div class="project-name">
				<img src="{{ asset('images/MARCA.png') }}" alt="..." class=" rounded float-left" style="width:100px ">

              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Sigue a la pagina oficial del Gobierno Municipal</h2>
      <a class="btn btn-light btn-xl" href="https://www.facebook.com/Gobierno.Autonomo.Municipal.Tarija/">Ir a la pagina de <i class="fab fa-facebook fa-2x" aria-hidden="true"></i> </a>
    </div>
  </section>
@guest
  <!-- Contact Section -->
  <section  id="contact">
    <div class="container">
		<div class="wrapper fadeInDown">
			<div id="formContent">
			  <!-- Tabs Titles -->
		  
			  <!-- Icon -->
			  <div class="fadeIn first ">
				<img src="{{ asset('images/logo2.png') }}" id="icon" alt="User Icon" class="img-thumbnail rounded float-center" style="width: 100px"/>
			  </div>
		  
			  <!-- Login Form -->
			  <form method="POST" action="{{ route('login') }}">
				@csrf
				
					<input id="email" type="email" class="fadeIn form-control form-control-lg second  @error('email') is-invalid @enderror"  placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" >
					@error('email')
					<span class="invalid-feedback"  role="alert">
						<strong>{{ $message }}</strong>
					</span>
							@enderror
			
				
					<input id="password" type="password" class=" fadeIn form-control form-control-lg third  @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password" >
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					
							@enderror
				
				
				<input type="submit" class="fadeIn fourth btn" value="INGRESAR">
			  </form>

			 
			  
		  
			  <!-- Remind Passowrd -->
			  <div id="formFooter">
				<label for="" class="fadeIn first nav-item">ESTAMOS AL SERVICIO DE LA GENTE!</label>
			  </div>
		  
			</div>
		  </div>
    </div>
  </section>
  @endguest
  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy;  <?php echo date('Y'); ?> Mario Cotave-Ingeniero de Sistemas-Desarrollador Full Stack</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('creative/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('creative/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('creative/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('creative/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('creative/js/creative.min.js') }}"></script>

</body>

</html>
