<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home | Two7Motoshop</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <script src="{{asset('js/darkmode.js')}}" defer></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Motorcycle Repair Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
		  <li>
		  <a class="nav-link" href="/login">LOG IN</a>
			</li>
          <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <p class="material-icons">-</p>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="/user-profile">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Two7Motoshop</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Shop by Brand</a>
          <a href="#" class="list-group-item">Shop by Bike</a>
          <a href="#" class="list-group-item">Apparel</a>
          <a class="nav-link" href="./user1">
              <p>User Profile</p>
            </a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('images/slide1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('images/slide2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('images/slide3.jpg')}}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('images/shoei x14 - Copy.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Shoei X-14/X Spirit III Marquez America TC-2</a>
                </h4>
                <h5>Rp.11.200.000</h5>
                <p class="card-text">"X-Series Helm full face SHOEI untuk Balapan yang dikembangkan melalui Balapan Jalan Teratas Dunia termasuk MotoGP"</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('images/ohlinsttx - Copy.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Ohlins Rear Shock Kawasaki Z636</a>
                </h4>
                <h5>Rp.22.500.000</h5>
                <p class="card-text">"TTX GP meningkatkan cengkeraman, stabilitas, umpan balik, dan konsistensi"</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('images/brembogp4rs - Copy.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Brembo GP4RS Calipers</a>
                </h4>
                <h5>Rp.14.500.000</h5>
                <p class="card-text">"Kaliper Brembo GP4RS 108mm yang diperuntukan untuk motor jepang!
                  Memberikan performa Extra dan juga look yang extra untuk motor anda"
                  Made in Italy.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('images/accosatoclutch - Copy.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Accossato Clutch</a>
                </h4>
                <h5>Rp.2.100.000</h5>
                <p class="card-text">"Clutch Accossato membuat kopling menjadi ringan, PIVOT 24
                  Universal juga untuk motor 250cc keatas lainnya"</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('images/alpinestarfastback2 - Copy.jpg')}}"alpinestarfastback2 alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Alpinestar FastBack 2 Boot</a>
                </h4>
                <h5>Rp.3.600.000</h5>
                <p class="card-text">"Boot road riding ini menggabungkan membran DRYSTAR kedap air dan bernapas dari Alpinestars serta perlindungan internal dan lapisan mesh dan bantalan yang dapat bernapas untuk tingkat kenyamanan dan kinerja yang luar biasa"</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('images/dainisespr - Copy.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Dainese SP-R</a>
                </h4>
                <h5>Rp.4.950.000</h5>
                <p class="card-text">"Teknologi D-Air merupakan teknologi terbaru dan menjadi bukti keseriusan Dainese dalam pengembangan Wearpack yang aman bagi pembalap"</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Two7Motoshop 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  <div class="toggle-container">
    <input type="checkbox" class="checkbox" id="chk" />
    <label class="label" for="chk">
      <div class="ball"></div>
    </label>
  </div>
  
</body>

</html>
