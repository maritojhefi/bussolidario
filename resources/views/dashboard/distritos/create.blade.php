@extends('dashboard.master')   
@section('content')

@include('dashboard.partials.validation-error')
<div class="card">
    <div class="card-header card-header-warning">
      <h4 class="card-title">
        Distrito nuevo
      </h4>
      <div class="card-category">
      Cree el nuevo distrito</div>
    </div>
   
    <div class="card-body">
<form action="{{route("distrito.store")}}" method="POST">
   

 @include('dashboard.distritos._form')      
</form>
    </div>
</div>

@endsection


