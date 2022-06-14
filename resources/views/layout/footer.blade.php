  <style>
      .navbar2 {
          padding: 0;
      }

      .navbar2 ul {
          margin: 0;
          padding: 0;
          display: flex;
          list-style: none;
          align-items: center;
      }

      .navbar2 li {
          position: relative;
      }

      .navbar2 a,
      .navbar2 a:focus {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px 0 10px 30px;
          font-family: "Poppins", sans-serif;
          font-size: 15px;
          font-weight: 500;
          color: #37423b;
          white-space: nowrap;
          transition: 0.3s;
      }

      .navbar2 a i,
      .navbar2 a:focus i {
          font-size: 12px;
          line-height: 0;
          margin-left: 5px;
      }

      .navbar2 a:hover,
      .navbar2 .active,
      .navbar2 .active:focus,
      .navbar2 li:hover>a {
          color: #5fcf80;
      }

      .navbar2 .dropdown ul {
          display: block;
          position: absolute;
          left: 30px;
          top: calc(100% + 30px);
          margin: 0;
          padding: 10px 0;
          z-index: 99;
          opacity: 0;
          visibility: hidden;
          background: #fff;
          box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
          transition: 0.3s;
          border-radius: 4px;
      }

      .navbar2 .dropdown ul li {
          min-width: 200px;
      }

      .navbar2 .dropdown ul a {
          padding: 10px 20px;
          font-size: 14px;
          text-transform: none;
          font-weight: 500;
      }

      .navbar2 .dropdown ul a i {
          font-size: 12px;
      }

      .navbar2 .dropdown ul a:hover,
      .navbar2 .dropdown ul .active:hover,
      .navbar2 .dropdown ul li:hover>a {
          color: #5fcf80;
      }

      .navbar2 .dropdown:hover>ul {
          opacity: 1;
          top: 100%;
          visibility: visible;
      }

      .navbar2 .dropdown .dropdown ul {
          top: 0;
          left: calc(100% - 30px);
          visibility: hidden;
      }

      .navbar2 .dropdown .dropdown:hover>ul {
          opacity: 1;
          top: 0;
          left: 100%;
          visibility: visible;
      }

      @media (max-width: 1366px) {
          .navbar2 .dropdown .dropdown ul {
              left: -90%;
          }

          .navbar2 .dropdown .dropdown:hover>ul {
              left: -100%;
          }
      }
  </style>

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container d-md-flex py-4">
          <div class="me-md-auto text-center text-md-start">
              <nav class="navbar2">
                  <ul>
                      <li><a class="active" href="{{ route('client.about') }}">About</a></li>
                  </ul>
              </nav><!-- .navbar2 -->
          </div>
          <div class="me-md-auto text-center text-md-start">
              <nav class="navbar2">
                  <ul>
                      <a href="/" class="logo me-auto"><img src="{{ asset('./assets/img/logo.jpeg') }}" alt=""
                              style="width:250px;" class="img-fluid"></a>
                  </ul>
              </nav><!-- .navbar2 -->
          </div>

          <div class="social-links text-center text-md-right pt-3 pt-md-0">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          </div>
      </div>
  </footer><!-- End Footer -->
