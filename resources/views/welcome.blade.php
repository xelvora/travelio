<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
  </head>
  <body>
    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow"  >
            <div class="container" >
                <img src="{{asset('front/img/logo.png')}}" class="ban-img img-fluid" alt="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Account
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                      <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <section id="banner">
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Travel, enjoy and live a new an full life.</h1>
                        <p>Nikmati masa liburanmu detik demi detiknya sebelum kembali ke aktivitas padatmu sehari-harinya</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('front/img/2.png')}}" class="ban-img img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L80,208C160,224,320,256,480,245.3C640,235,800,181,960,144C1120,107,1280,85,1360,74.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <section id="features">
        <div class="container">
            <h2 class="text-center">Paket Travel yang kami tawarkan</h2>
            <div class="row text-center">
                <div class="col-md-4 features">
                    <img src="{{asset('front/img/3.png')}}" class="img-fluid" alt="">
                    <h4>Tiket Kendaraan</h4>
                    <p>Kami akan memilihkan anda tiket pesawat, kereta, bus, dan kapal yang aman nyaman dan terjamin</p>
                </div>
                <div class="col-md-4 features">
                    <img src="{{asset('front/img/4.png')}}" class="img-fluid" alt="">
                    <h4>Hotel</h4>
                    <p>Kami memberikan penawaran Hotel dengan reputasi terbaik di masing masing Kota</p>
                </div>
                <div class="col-md-4 features">
                    <img src="{{asset('front/img/5.png')}}" class="img-fluid" alt="">
                    <h4>Pariwisata</h4>
                    <p>Kami juga memberikan pengarahan untuk para client untuk berwisata di tempat terbaik pula </p>
                </div>
            </div>
        </div>
    </section>
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).webp" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).webp" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).webp" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).webp" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).webp" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a> Travelio.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
