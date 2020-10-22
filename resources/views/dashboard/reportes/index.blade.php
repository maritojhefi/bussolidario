@extends('dashboard.master')   
@section('content')

<div class="card">
  <div class="card-header card-header-success">
    <h4 class="card-title">
     Personalize su reporte
    </h4>
    <div class="card-category">
     Puede buscar por mas de 1 filtro</div>
  </div>
 
  <div class="card-body">

  <form class="form-inline">
<div
 class="row m-1">
 <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">

   
    <div class="form-inline mr-1">
      <label for="buscarpordistrito" class="bmd-label-floating"> Distrito</label>
<select name="buscarpordistrito" class="form-control" id="buscarpordistrito">
  <option value="">Selecciona</option>
  @foreach ($listDistritos  as $nombre=>$id)
  <option value="{{$id}}">{{$nombre}}</option>
  
      @endforeach

 

</select>
  </div>
    <input name="buscarporci" class="form-control mr-sm-2" type="search" placeholder="Buscar por CI" aria-label="Search">

</div>
   <div class="row m-1">
     <label for="" class="bmd-label-floating">INICIO</label>
    <input type="date" name="fecha_inicio"  class="form-control mr-sm-2" placeholder="Fecha inicio"/>
    <label for="" class="bmd-label-floating">FINAL</label>
    <input type="date" name="fecha_final"  class="form-control mr-sm-2" placeholder="Fecha final"/>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
   </div>
    
  </form>

  </div>
</div>

<div class="table-responsive">
  <div class="card">
  <div class="card-header card-header-warning">
    <h4 class="card-title">
      @if ($cantidad!=null)
      Registros encontrados: {{$cantidad}}
      @foreach ($filtros as $filtros)
      @if ($filtros!=null)
      
      @endif    
      
      @endforeach
          
      @else
     No se encontraron registros
        
      
      @endif
    </h4>
    <div class="card-category">
     Crea tu reporte personalizado</div>
  </div>
  <div class="form-inline">
    <div class="btn-sm mt-3 mb-3 ml-3">{{$Registros->links()}}</div>
    {!! Alert::render() !!}
  </div>
  <div class="card-body">
    <table class="table table-shopping">

<table class="table">
  <thead>
      <tr style="color:#FF7126 ">
         
          <td>
              Nombre Beneficiario
          </td>
          
          
          <td>
            CI
        </td>
        <td>
          Distrito
      </td>
       
    
  <td>
    Fecha de registro
</td>
        
          <td>
              Acciones
          </td>
      </tr>
  </thead>
  <tbody>

      @foreach ($Registros as $formulario)
      <tr>
         
          <td>
              {{$formulario->beneficiario}}
          </td>
         
          
          <td>
            {{$formulario->ci}}
        </td>
        <td>
          @if ($formulario->distrito!=null)
          {{$formulario->distrito->nombre}}

          @endif
      </td>
       
    
  <td>
    {{$formulario->created_at->format('d-M-Y')}}
</td>
          
          <td>
              <a href="{{route('showreport',$formulario->id)}}" class="btn btn-primary btn-sm"> Detalle</a>
             
            
             
                  
             


          </td>
      </tr>
      @endforeach
  </tbody>
</table>  
    



      
<a href="{{route('reporteExcel',$Registros)}}">Descargar Excel</a>



<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Borrar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <p>Seguro que desea borrar el registro ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <form id="formDelete" method="POST" action="" data-action="">
            @method('DELETE')
        
            @csrf
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </form>
          
      </div>
    </div>
  </div>
 



@endsection