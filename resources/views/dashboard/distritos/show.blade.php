@extends('dashboard.master')   
@section('content')


    
    
       
            <div class="form-group">
                <label for="title">Nombre</label>
            <input type="text" readonly name="title" class="form-control" id="title" value="{{$distrito->nombre}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="color">Observacion</label>
                <input type="text" name="color"readonly class="form-control" id="color" value="{{$distrito->observacion}}">
          
            </div>

           
           
             
         
      

@endsection


