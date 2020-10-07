@extends('dashboard.master')   
@section('content')

@include('dashboard.partials.validation-error')
    
<form action="{{route("distrito.store")}}" method="POST">
   

 @include('dashboard.distritos._form')      
</form>
@endsection


