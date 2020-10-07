@extends('dashboard.master')   
@section('content')

@include('dashboard.partials.validation-error')
    
<form action="{{route("formulario.update",$formulario->id)}}" method="POST">
  @method('PUT')
 @include('dashboard.formularios._form')      
</form>
@endsection
