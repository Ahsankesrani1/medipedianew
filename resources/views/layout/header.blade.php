  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
          <a href="/" class="logo me-auto"><img src="" alt=""
                  class="img-fluid"> Small Web</a>
          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  @if (auth()->check())
                      <a href=""> &nbsp;&nbsp;&nbsp; {{ auth()->user()->name }}</a>
                      <a href="{{ route('user.logout') }}" class="text-danger">&nbsp;&nbsp;&nbsp;Logout</a>
                  @else
                  @endif
              </ul>

              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
      </div>
  </header><!-- End Header -->
