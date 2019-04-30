@extends('layouts.main')

@section('content')
    
@include('partials.header')
<br>


<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$user->name}}</h5>
      
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$user->email}}</li>
      
    <div class="card-body">
      <a href="#" class="card-link">Edit</a>
      <a href="#" class="card-link">Delete</a>
    </div>
  </div>

@endsection