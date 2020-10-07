@extends('dashboard.master')   
@section('content')


    
    
       
            <div class="form-group">
                <label for="title">Usuario</label>
            <input type="text" readonly name="title" class="form-control" id="title" value="{{$user->name}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_clean">Rol</label>
                <input type="text" name="url_clean"readonly class="form-control" id="url_clean" value="{{$user->rol_id}}">
          
            </div>
           
             
         
      

@endsection


