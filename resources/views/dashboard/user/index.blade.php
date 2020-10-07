@extends('dashboard.master')   
@section('content')

<h3>Usuarios</h3>
<a class="btn btn-success btn-sm mt-3 mb-3" href="{{route('user.create')}}">Crear</a>
    
<table class="table">
    <thead>
        <tr>
            <td>
                Nombre
            </td>
            <td>
              CI
          </td>
            <td>
                Rol
            </td>
           
          <td>
            Correo
        </td>
         
            <td>
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)
        <tr>
            <td>
               {{$user->name}}
            </td>
            <td>
              {{$user->ci}}
           </td>
           <td>
            {{ $user->rol->nombre}}
         </td>
            <td>
                {{$user->email}}
            </td>
           
            
            <td>
               
               
                <a href="{{route('user.edit',$user->id)}}" class="btn btn-success"> Editar</a>
               
                    
                    <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id}}">Eliminar</button>
               


            </td>
        </tr>
        @endforeach
    </tbody>
</table>  
      


{{$users->links()}}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Borrar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <p>Seguro que desea borrar el Usuario? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <form id="formDelete" method="POST" action="{{route('user.destroy',0)}}" data-action="{{route('user.destroy',0)}}">
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
  
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  action = $('#formDelete').attr('data-action').slice(0,-1)
  action+=id
  console.log(action)
  $('#formDelete').attr('action',action)
  var modal = $(this)
  modal.find('.modal-title').text('Vas a borrar el Usuario: ' + id)

})
}

  </script>



@endsection