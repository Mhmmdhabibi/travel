<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->

            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="welcome"><i class="fa fa-calendar"></i> Home</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <!-- ***** Table Tunggu ACC by Admin End ***** -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <div class="properties section" id="tiket">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h2>Cari Paket Yang Tersedia </h2>
            <!-- ***** Search Engine Area Start ***** -->
            <div class="search-engine section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="search-wrapper">
                      <form action="/cekJadwal" method="post" class="search-form">
                        @csrf
                        <p>Tanggal Masuk</p>
                        <input type="date" class="form-control" name="tanggal_masuk" id="search" placeholder="Cari Paket...">
                        <p>Tanggal Keluar</p>
                        <input type="date" class="form-control" name="tanggal_keluar" id="search" placeholder="Cari Paket...">
                        <input type="submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Search Engine Area End ***** -->


          </div>
        </div>
      </div>
      <div class="row">
        @foreach($datas as $data)
        @if($data->type == 'wisata')
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Wisata Curug Naga</span>
            <h6>Rp {{$data->harga}}/pax</h6>
            <h4><a href="property-details.html">{{$data->title}}</a></h4>
            <ul>
              {!!$data->detail!!}
            </ul>
            <div class="main-button">
              <a href="login">Beli TIket</a>
            </div>
          </div>
        </div>  
        @endif
        @if($data->type == 'camping' && !Session::get('status'))
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Wisata Curug Naga</span>
            <h6>Rp {{$data->harga}}/pax</h6>
            <h4><a href="property-details.html">{{$data->title}}</a></h4>
            <ul>
              {!!$data->detail!!}
            </ul>
            <div class="main-button">
              <a href="login">Beli TIket</a>
            </div>
          </div>
        </div>  
        @endif
        @endforeach
        <!-- <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Wisata Curug Naga</span>
            <h6>Rp 110.000/pax</h6>
            <h4><a href="property-details.html">Paket 2 Trip</a></h4>
            <ul>
              <li><i class="fa-solid fa-caret-right"></i> Tiket Masuk</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Peralatan (Pelampung, Helm) </li><br>
              <li><i class="fa-solid fa-caret-right"></i> Pemandu (Guide)</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Trekking 2 curug (Sesuai Pilihan)</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Asuransi Kegiatan</li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Beli TIket</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Wisata Curug Naga</span>
            <h6>Rp 85.000/pax</h6>
            <h4><a href="property-details.html">Paket 1 Trip</a></h4>
            <ul>
              <li><i class="fa-solid fa-caret-right"></i> Tiket Masuk</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Peralatan (Pelampung, Helm) </li><br>
              <li><i class="fa-solid fa-caret-right"></i> Pemandu (Guide)</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Trekking 1 curug (Sesuai Pilihan)</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Asuransi Kegiatan</li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Beli TIket</a>
            </div>
          </div>
        </div>
        @if(!Session::get('status') == 'kosong')
        
          <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Wisata Curug Naga</span>
            <h6>Rp 385.000/pax</h6>
            <h4><a href="property-details.html">Paket Camping (2 Hari 1 Malam)</a></h4>
            <span class="category"><i class="fa-solid fa-quote-right"></i> Minimal 8 PAX</span>
            <ul>

              <li><i class="fa-solid fa-caret-right"></i> Tiket Masuk Area</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Makan 3x</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Area Camp</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Perlengkapan Camp (Tenda, Matras, Sleeping Bag)</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Boddyrafting dan Peralatan (Pelampung, Helm)</li>
              <li><i class="fa-solid fa-caret-right"></i> Asuransi Kegiatan</li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Beli TIket</a>
            </div>
          </div>
        </div>
        @endif -->

      </div>
    </div>
  </div>

</body>

</html>