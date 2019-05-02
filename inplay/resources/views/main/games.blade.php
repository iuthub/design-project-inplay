@extends('layouts.main')


@section('content')
    
@include('partials.header')

<div class=" main-container">
<main>
 <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner" role="listbox">
     <div class="carousel-item active">
       <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
     </div>
     <div class="carousel-item">
       <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
     </div>
     <div class="carousel-item">
       <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
        
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $action->id])}}">{{$action->name}}</a>
                        </h4>
                        <h5>${{$action->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $adventure->id])}}">{{$adventure->name}}</a>
                        </h4>
                        <h5>${{$adventure->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $fighting->id])}}">{{$fighting->name}}</a>
                        </h4>
                        <h5>${{$fighting->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $platform->id])}}">{{$platform->name}}</a>
                        </h4>
                        <h5>${{$platform->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $racing->id])}}">{{$racing->name}}</a>
                        </h4>
                        <h5>${{$racing->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $role_playing->id])}}">{{$role_playing->name}}</a>
                        </h4>
                        <h5>${{$role_playing->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $shooter->id])}}">{{$shooter->name}}</a>
                        </h4>
                        <h5>${{$shooter->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $simulation->id])}}">{{$simulation->name}}</a>
                        </h4>
                        <h5>${{$simulation->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $sport->id])}}">{{$sport->name}}</a>
                        </h4>
                        <h5>${{$sport->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $strategy->id])}}">{{$strategy->name}}</a>
                        </h4>
                        <h5>${{$strategy->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="{{route('main.gameInfo',['id' => $misc->id])}}">{{$misc->name}}</a>
                        </h4>
                        <h5>${{$misc->price}}</h5>
                        <p class="card-text">{{Guid::create()}} </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
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
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

@endsection