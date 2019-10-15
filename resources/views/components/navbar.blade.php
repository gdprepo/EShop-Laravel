<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Accueil</a>
    </li>
  <?php 
    $adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

    if ($adresse === 'http://127.0.0.1/presentation') {
      echo '
      <li class="nav-item active">
        <a class="nav-link" href="/presentation">Presentation</a>
      </li>      
      ';
    } else {
      echo '
      <li class="nav-item">
        <a class="nav-link" href="/presentation">Presentation</a>
      </li>      
      ';
    }

    if ($adresse === 'http://127.0.0.1/contact') {
      echo '
      <li class="nav-item active">
        <a class="nav-link" href="/contact">Contact</a>
      </li>      
      ';
    } else {
      echo '
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>      
      ';
    }

    if ($adresse == 'http://127.0.0.1/autre') {
      echo '
      <li class="nav-item active">
        <a class="nav-link" href="/autre">Autre</a>
      </li>      
      ';
    } else {
      echo '
      <li class="nav-item">
        <a class="nav-link" href="/autre">Autre</a>
      </li>      
      ';
    }    
  
  ?>


  </ul>


  @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
  @endif
</nav>

