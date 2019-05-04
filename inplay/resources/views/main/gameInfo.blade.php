@extends('layouts.main')

@section('content')
    
@include('partials.header')
<main>


  <div class="card mb-3">
    <img class="card-img-top" src="{{asset('css/img/index'.$product->id.'.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">{{$product->name}}</h3>
      <p class="card-text">Description: {{$product->description}}</p>
      <p class="card-text">Date: {{$product->date}} </p>
      <p class="card-text">Genre: {{$product->genre}} </p>
    <hr>
      <a href="{{route('main.buy',['id' => $product->id])}}" class="btn btn-success float-right ml-1">Buy</a>
      <a href="{{route('admin.keys',['id' => $product->id])}}" class="btn btn-success card-link float-right">Add key</a>
    
    </div>
  </div>

 


@endsection