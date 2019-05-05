<nav class="navbar navbar-expand-lg h3 fixed-top navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/games">
        <img src="{{asset('css/img/6.png')}}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('main.profile',['id' => Auth::id()])}}">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin">Admin</a>
              </li>
              <li class="nav-item">
                <a href="logout" class="btn btn-danger fas fa-sign-out-alt"></a>
              </li>
            @else   
              <div class="float-right">
                <a href="login" class="btn btn-success">Войти</a>
                <a href="register" class="btn btn-primary">Регистрация</a>
              </div>    
            @endif
            
        </ul>
      </div>
    </div>
  </nav>

  <aside>
    
    <div class="list-group">
      <a href="" class="list-group-item">Action</a>
      <a href="" class="list-group-item">Adventure</a>
      <a href="" class="list-group-item">Fighting</a>
      <a href="" class="list-group-item">Platform</a>
      <a href="" class="list-group-item">Racing</a>
      <a href="" class="list-group-item">Role-playing</a>
      <a href="" class="list-group-item">Shooter</a>
      <a href="" class="list-group-item">Simulation</a>
      <a href="" class="list-group-item">Sports</a>
      <a href="" class="list-group-item">Strategy</a>
      <a href="" class="list-group-item">Misc</a>
      
    </div>
  </aside>