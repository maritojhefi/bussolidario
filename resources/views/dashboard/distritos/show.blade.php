@extends('dashboard.master')   
@section('content')


    
<div class="card">
    <div class="card-header card-header-warning">
      <h4 class="card-title">
        Distrito: {{$distrito->nombre}}
      </h4>
      <div class="card-category">
       Visualizacion a detalle</div>
    </div>
   
    <div class="card-body">
       
            <div class="form-group">
                <label for="title" class="bmd-label-floating">Nombre</label>
            <input type="text" readonly name="title" class="form-control" id="title" value="{{$distrito->nombre}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="color" class="bmd-label-floating">Observacion</label>
                <input type="text" name="color"readonly class="form-control" id="color" value="{{$distrito->observacion}}">
          
            </div>
    </div>
</div>


           
           
             
         
      

@endsection


