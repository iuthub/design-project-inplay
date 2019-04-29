@extends('layouts.main')

@section('content')
    
@include('partials.header')
<br>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$product->price}}</li>
      <li class="list-group-item">{{$product->janre}}</li>
      <li class="list-group-item">{{$product->date}}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Edit</a>
      <a href="#" class="card-link">Delete</a>
    </div>
  </div>


@endsection