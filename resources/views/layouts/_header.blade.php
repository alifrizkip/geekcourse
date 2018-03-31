<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">
      <img class="udemy-logo" src="https://www.udemy.com/staticx/udemy/images/v6/logo-coral.svg" alt="Udemy" width="110" data-purpose="udemy-brand-logo">                
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home
                  <span class="sr-only">(current)</span>
              </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
          </li>
          <li class="nav-item">
              <form class="form-inline mt-2 mt-md-0 ml-3">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </li>
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Signup</a>
          </li>
      </ul>
  </div>
</nav>