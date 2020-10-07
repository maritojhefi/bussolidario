@extends('dashboard.master')   
@section('content')

@include('dashboard.partials.validation-error')
    
<form action="{{route("distrito.update",$distrito->id)}}" method="POST">
  @method('PUT')
 @include('dashboard.distritos._form')      
</form>
@endsection
