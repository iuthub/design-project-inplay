@extends('layouts.main')

@section('content')
    
@include('partials.header')
<br>
<div class="colorContainer ">
<main>
<div class="card " style="width: 18rem;">
    <img class="card-img-top" src="{{asset('css/img/5.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$user->name}}</h5>
      
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$user->email}}</li>
  </div>

<br>
  <table class="table col-9 bg-white" >
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
</main>
</div>

@endsection