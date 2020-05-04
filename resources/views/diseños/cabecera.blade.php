<div class="row ">
  <div class="col-3"></div>
  <div class="col-6 ">
    <img src="{{asset('imagenes/logoPrincipal.png')}}" class="img-fluid rounded mx-auto d-block" alt="Responsive image "></div>
  <div class="col-3"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{request()->is('home') || request()->is ('/') ? 'active' :''}}">
        <a class="nav-link" href="{{url('home')}}">Home </a>
      </li>
      <li class="nav-item {{request()->is('garaje') ? 'active' :''}}">
        <a class="nav-link" href="{{url('garaje')}}">Garaje</a>
      </li>
      <li class="nav-item {{request()->is('quienesSomos') ? 'active' :''}}">
        <a class="nav-link" href="{{url('quienesSomos')}}">Quienes somos</a>
      </li>
    </ul>
  </div>
  </div>
        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link">Login</a>
        </div>
</nav>