@extends('layouts.main')
@section('content')
<div id="header">        
  @include('partials.main-header')
</div>

<div id="fullpage">
  <div class="section" id="section0"></div>
  <div class="section" id="section1">
      <div class="slide" id="slide1">
          <section>
              <div class="container">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Curabitur gravida vestibulum imperdiet.</h4>
                        <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                        <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-img-bottom">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </section>
      </div>
      <div class="slide" id="slide2">
          <section>
              <div class="container">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <h4 class="card-title">Curabitur gravida vestibulum imperdiet.</h4>
                        <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                        <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                      </div>
                     </div>
                     <div class="col-md-6">
                       <div class="card-img-bottom">
                       </div>
                     </div>
                   </div>
                 </div>
              </div>
          </section>
      </div>
  </div>
  <div class="section" id="section2">
      <div class="team-section">
          <div class="inner-width">
              <h1>Команда</h1>
              <div class="pers">
                  <div class="pe">
                      <img src="css/img/5.png" alt="">
                      <div class="p-name"> Full name</div>
                      <div class="p-desc"> Designer</div>
                      <div class="p-sm">
                          <a href="#"> <i class="fab fa-facebook-f"></i></a>
                          <a href="#"> <i class="fab fa-twitter"></i></a>
                          <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="pe">
                      <img src="css/img/5.png" alt="">
                      <div class="p-name"> Full name</div>
                      <div class="p-desc"> Developer</div>
                      <div class="p-sm">
                          <a href="#"> <i class="fab fa-facebook-f"></i></a>
                          <a href="#"> <i class="fab fa-twitter"></i></a>
                          <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="pe">
                      <img src="css/img/5.png" alt="">
                      <div class="p-name"> Full name</div>
                      <div class="p-desc"> Front-end</div>
                      <div class="p-sm">
                          <a href="#"> <i class="fab fa-facebook-f"></i></a>
                          <a href="#"> <i class="fab fa-twitter"></i></a>
                          <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
