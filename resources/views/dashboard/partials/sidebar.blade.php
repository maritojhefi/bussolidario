
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('images/fondo2.jpeg') }}">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><label  class="simple-text logo-normal">
    GAMDT	 <a href="{{route('welcome')}}">  <img src="{{ asset('images/logo.png') }}" alt="..." class="img-thumbnail rounded " style="width: 60px"></a>

  </label>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      
      
      <li class="nav-item {{ Request::path()=='dashboard/distrito' ? 'active':''}}">
        <a class="nav-link" href="{{route('distrito.index')}}">
          <i class="material-icons">location_city</i>
          <p>Distritos</p>
        </a>
      </li>
      <li class="nav-item {{ Request::path()=='dashboard/formulario' ? 'active':''}}">
        <a class="nav-link" href="{{route('formulario.index')}}">
          <i class="material-icons">library_books</i>
          <p>Registros Personales</p>
        </a>
      </li>
      @if (auth()->user()->rol_id==2)
      <li class="nav-item {{ Request::path()=='dashboard/reporte' ? 'active':''}}">
        <a class="nav-link" href="{{route('reporte')}}">
          <i class="material-icons">timeline</i>
          <p>Reportes</p>
        </a>
      </li>
      <li class="nav-item {{ Request::path()=='dashboard/indexUsers' ? 'active':''}}">
        <a class="nav-link" href="{{route('IndexUsers')}}">
          <i class="material-icons">vpn_lock</i>
          <p>Registros Globales</p>
        </a>
      </li>
      <li class="nav-item {{ Request::path()=='dashboard/user' ? 'active':''}}">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="material-icons">assignment_ind</i>
          <p>Usuarios</p>
        </a>
      </li>
      <li class="nav-item {{ Request::path()=='dashboard/imports' ? 'active':''}}">
        <a class="nav-link" href="{{route('importarShow')}}">
          <i class="material-icons">publish</i>
          <p>Importar desde Excel</p>
        </a>
      </li>
      <li class="nav-item active-pro ">
        <p class="nav-link alert alert-success">
          <i class="material-icons text-white">person</i>
          <label for="" class="text-white ">Usuario: {{auth()->user()->name}}</label>
        </p>
      </li>
      @endif
    </ul>
  </div>
</div>