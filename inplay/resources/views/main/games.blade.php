@extends('layouts.main')


@section('content')
    
@include('partials.header')

  <!-- Page Content -->
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

        
          

        <div class="card">
          <div class="card-header">
            Action
          </div>
          <div class="card-body">
            
            
                <div class="row">
                  
                  <div class="owl-carousel owl-theme">
                      @foreach ($products as $product)
                    <div class="item">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                              <div class="card-body">
                                <h4 class="card-title">
                                <a href="{{route('main.gameInfo',['id' => $product->id])}}">{{$product->name}}</a>
                                </h4>
                                <h5>${{$product->price}}</h5>
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
          <div class="card">
              <div class="card-header">
                Sport
              </div>
              <div class="card-body">
                
                
                    <div class="row">
                      
                      <div class="owl-carousel owl-theme">
                          @foreach ($products as $product)
                        <div class="item">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                  <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="{{route('main.gameInfo',['id' => $product->id])}}">{{$product->name}}</a>
                                    </h4>
                                    <h5>${{$product->price}}</h5>
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