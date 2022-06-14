  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="/" class="logo me-auto"><img src="{{asset('./assets/img/logo.jpeg')}}" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          {{-- <li><a class="active" href="{{route('client.search')}}">Home</a></li> --}}
          <li><a class="active" href="{{route('client.about')}}">About</a></li>
          <a href="/register" class="get-started-btn text-white">Register</a>
          <a href="/login" class="get-started-btn text-white">Login</a>
          <a href=""> &nbsp;&nbsp;&nbsp; Hello , Anus</a>
          <a href="" class="text-danger">&nbsp;&nbsp;&nbsp;Logout</a>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  