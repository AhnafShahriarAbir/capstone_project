
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/">Car Share</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/map">Map</a></li>
      <li><a href="/about">About us</a></li>
      <li><a href="/contact">Contact us</a></li>
      <li><a href="/cars">Cars</a></li>
    </ul>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> User</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          @if(Auth::check())
            <a class="dropdown-item" href="{{ route('user.profile') }}">History</a>
              <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          @else
              <a class="dropdown-item" href="{{ route('auth.register') }}">Sign Up</a>
              <a class="dropdown-item" href="{{ route('auth.login') }}">Sign In</a>
          @endif
        </div>
      </li>
  </div>
</div>
</nav>