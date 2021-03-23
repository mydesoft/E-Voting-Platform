<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><button class="btn btn-info btn-sm rounded-pill border-info btn-outline-secondary text-white">Vote Easy</button></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" >About Vote Easy</a>
      </li>


       <li class="nav-item">
        <a class="nav-link" href="{{route('adminLogin')}}" ><button class="btn btn-secondary btn-sm rounded-pill border-warning btn-outline-info text-white">Staff Login</button></a>
      </li>



       <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}" ><button class="btn btn-secondary btn-sm rounded-pill border-warning btn-outline-info text-white">Login to Vote</button></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('firstRegistrationPage')}}" ><button class="btn btn-secondary btn-sm rounded-pill border-warning btn-outline-info text-white">Register To Vote</button></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="{{route('verify')}}" ><button class="btn btn-secondary btn-sm rounded-pill border-warning btn-outline-info text-white">Candidate Registration</button></a>
      </li>



    </ul>
  </div>
</nav>