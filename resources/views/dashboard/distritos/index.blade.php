@extends('dashboard.master')   
@section('content')
<h3>Distritos registrados</h3>

<a class="btn btn-success btn-sm mt-3 mb-3" href="{{route('distrito.create')}}">Crear</a>
    
<table class="table">
    <thead>
        <tr>
           
            <td>
                Nombre
            </td>
            
            
            <td>
              Ubicacion
          </td>
          
         
          
            <td>
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>

        @foreach ($distritos as $distrito)
        <tr>
           
            <td>
                {{$distrito->nombre}}
            </td>
           
            
            <td>
              {{$distrito->ubicacion}}
          </td>
          
        

         <td>
          <a href="{{route('distrito.show',$distrito->id)}}" class="btn btn-primary"> Ver</a>
         
          @if(auth()->user()->rol_id=='2') 
          <a href="{{route('distrito.edit',$distrito->id)}}" class="btn btn-success"> Editar</a>
         
              
              <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#deleteModal" data-id="{{ $distrito->id}}">Eliminar</button>
         


      </td>
         @endif
           
        </tr>
        @endforeach
    </tbody>
</table>  
      


{{$distritos->links()}}

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
          <form id="formDelete" method="POST" action="{{route('distrito.destroy',0)}}" data-action="{{route('distrito.destroy',0)}}">
            @method('DELETE')
        
            @csrf
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </form>
          
      </div>
    </div>
  </div>
  <script>
//$('#title').on('show.bs.modal', function (event) {
   //var extraction = $(event.relatedTarget) 
  // var title=extraction.data('title')
//}

      window.onload=function(){
      $('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  var nom=button.data('nombre')
  
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  action = $('#formDelete').attr('data-action').slice(0,-1)
  action+=id
  console.log(action)
  $('#formDelete').attr('action',action)
  var modal = $(this)
  modal.find('.modal-title').text('Vas a borrar al distrito: ' + id)

})
}

  </script>



@endsection