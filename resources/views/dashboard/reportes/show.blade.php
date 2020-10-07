@extends('dashboard.master')   
@section('content')


    
    
       
            <div class="form-group">
                <label for="title">Beneficiario</label>
            <input type="text" readonly name="title" class="form-control" id="title" value="{{$formulario->beneficiario}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="color">Cedula de Identidad</label>
                <input type="text" name="color"readonly class="form-control" id="color" value="{{$formulario->ci}}">
          
            </div>

            <div class="form-group">
                <label for="foto">Telefono</label>
                <input type="text" name="foto"readonly class="form-control" id="foto" value="{{$formulario->telefono}}">
          
            </div>
            <div class="form-group">
                <label for="foto">Barrio</label>
                <input type="text" name="foto"readonly class="form-control" id="foto" value="{{$formulario->barrio}}">
          
            </div>
            <div class="form-group">
                <label for="foto">Zona</label>
                <input type="text" name="foto"readonly class="form-control" id="foto" value="{{$formulario->zona}}">
          
            </div>
            <div class="form-group">
                <label for="foto">Distrito</label>
                <input type="text" name="foto"readonly class="form-control" id="foto" value="{{$formulario->distrito->nombre}}">
          
            </div>
            <div class="form-group">
                <label for="foto">Usuario que lo registro</label>
                <input type="text" name="foto"readonly class="form-control" id="foto" value="{{$formulario->user->name}}">
          
            </div>
            <div class="form-group">
                <label for="foto">Fecha de registro</label>
                <input type="text" name="foto"readonly class="form-control" id="foto" value="{{$formulario->created_at}}">
          
            </div>
           
             
         
      

@endsection


