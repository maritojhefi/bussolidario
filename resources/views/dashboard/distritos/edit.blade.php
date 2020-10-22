@extends('dashboard.master')   
@section('content')

@include('dashboard.partials.validation-error')
<div class="card">
  <div class="card-header card-header-warning">
    <h4 class="card-title">
      Distrito: {{$distrito->nombre}}
    </h4>
    <div class="card-category">
      Edite el distrito</div>
  </div>
 
  <div class="card-body">
<form action="{{route("distrito.update",$distrito->id)}}" method="POST">
  @method('PUT')
 @include('dashboard.distritos._form')      
</form>
  </div>
</div>

@endsection
