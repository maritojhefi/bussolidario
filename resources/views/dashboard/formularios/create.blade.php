@extends('dashboard.master')   
@section('content')

@include('dashboard.partials.validation-error')
    
<form action="{{route("formulario.store")}}" method="POST">
   

 @include('dashboard.formularios._form')      
</form>
@endsection


