@extends('layouts.main')

@section('content')
    
{{-- @include('partials.header') --}}
<main>
<div class="card" style="width: 18rem; margin-top: 55px;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$product->price}}</li>
      <li class="list-group-item">{{$product->genre}}</li>
      <li class="list-group-item">{{$product->date}}</li>
      <li class="list-group-item">{{$product->id}}</li>
      <li class="list-group-item"> <a href="{{route('main.buy',['id' => $product->id])}}" class="btn btn-success">Buy</a></li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Edit</a>
      <a href="#" class="card-link">Delete</a>
      <a href="{{route('admin.keys',['id' => $product->id])}}" class="card-link">Add key</a>
    </div>
  </div>

 

 


@endsection