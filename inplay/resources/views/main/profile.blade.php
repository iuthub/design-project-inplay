@extends('layouts.main')

@section('content')
    
@include('partials.header')
<br>


<div class="card" style="width: 18rem; margin-left:50%">
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


  <table class="table col-9" style="margin-left:25%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Game</th>
        <th scope="col">Key</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($games as $key=>$game)
     
      <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$game->date}}</td>
        <td>{{$game->name}}</td>
        <td>{{$game->id}}</td>
        
      </tr>
     
      @endforeach
    </tbody>
  </table>
@endsection