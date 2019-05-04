@extends('layouts.main')


@section('content')
    
@include('partials.header')

<div class="main-container">
<main>
  
        
  @if ($actions->count()>0)
  <div class="card">
    <div class="card-header">
      Action
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($actions as $action)
                <div class="item">
                 <div class="card1">
                 <img src="{{asset('css/img/index'.$action->id.'.jpg')}}" alt="">
                  <div class="container1">
                   <h4>{{$action->name}}</h4>
                   <p>{{$action->description}}</p>
                   </div>
                   <a href="{{route('main.gameInfo',['id' => $action->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                 </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif
  
  @if ($adventures->count()>0)
  <div class="card">
    <div class="card-header">
      Adventure
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($adventures as $adventure)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$adventure->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$adventure->name}}</h4>
                     <p>{{$adventure->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $adventure->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif
  
  @if ($fightings->count()>0)
  <div class="card">
    <div class="card-header">
      Fighting
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($fightings as $fighting)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$fighting->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$fighting->name}}</h4>
                     <p>{{$fighting->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $fighting->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($platforms->count()>0)
  <div class="card">
    <div class="card-header">
      Platform
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($platforms as $platform)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$platform->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$platform->name}}</h4>
                     <p>{{$platform->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $platform->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($racings->count()>0)
  <div class="card">
    <div class="card-header">
      Racing
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($racings as $racing)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$racing->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$racing->name}}</h4>
                     <p>{{$racing->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $racing->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($role_playings->count()>0)
  <div class="card">
    <div class="card-header">
      Role Playing
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($role_playings as $role_playing)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$role_playing->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$role_playing->name}}</h4>
                     <p>{{$role_playing->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $role_playing->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($shooters->count()>0)
  <div class="card">
    <div class="card-header">
      Shooter
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($shooters as $shooter)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$shooter->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$shooter->name}}</h4>
                     <p>{{$shooter->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $shooter->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($simulations->count()>0)
  <div class="card">
    <div class="card-header">
      Simulation
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($simulations as $simulation)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$simulation->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$simulation->name}}</h4>
                     <p>{{$simulation->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $simulation->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($sports->count()>0)
  <div class="card">
    <div class="card-header">
      Sport
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($sports as $sport)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$sport->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$sport->name}}</h4>
                     <p>{{$sport->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $sport->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif
  
  @if ($strategys->count()>0)
  <div class="card">
    <div class="card-header">
      Strategy
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($strategys as $strategy)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$strategy->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$strategy->name}}</h4>
                     <p>{{$strategy->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $strategy->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif

  @if ($miscs->count()>0)
  <div class="card">
    <div class="card-header">
      Misc
    </div>
    <div class="card-body">
      <div class="row">
          <div class="owl-carousel owl-theme">
              @foreach ($miscs as $misc)
                <div class="item">
                  <div class="card1">
                    <img src="{{asset('css/img/index'.$misc->id.'.jpg')}}" alt="">
                     <div class="container1">
                     <h4>{{$misc->name}}</h4>
                     <p>{{$misc->description}}</p>
                     </div>
                     <a href="{{route('main.gameInfo',['id' => $misc->id])}}" class="btn btn-success btn-lg btn-block">Buy</a>
                   </div>
               </div>
             @endforeach
          </div>
       </div>
    </div>
  </div>
  <br>
  @endif
</main>
</div>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; InPlay 2019</p>
  </div>
</footer>
@endsection