<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Wonderful Mega - Wisata Alama Curug Naga Megamendung, Puncak Bogor</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>

  <!-- TemplateMo 591 villa agency https://templatemo.com/tm-591-villa-agency -->
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
            <li><i class="fa fa-map"></i> Megamendung Puncak Bogor</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
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
            <a href="index.html" class="logo">
              <h1>Wonderful.Mega</h1>
            </a>
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

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row justify-content-center">
                    @foreach($datas as $data)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="info-table">
                        <img src="assets/images/deal-01.jpg" style="width:100%;" alt="">
                        <ul>
                          <h6 style="margin-top:20px;">Tiket Curug Naga</h6>
                          <li style="color:#f35525;font-weight: 700;"><i class="fa-solid fa-caret-right"></i> Jumlah Tiket</li><br>
                          <li>{{$data->pax}}</li><br>
                          <li style="color:#f35525;font-weight: 700;"><i class="fa-solid fa-caret-right"></i> ID Tiket</li><br>
                          @if($data->status == 'approve')
                          <li>{{$data->id}}</li><br>
                          @else 
                          <li>Mohon Tunggu Konfirmasi</li><br>
                          @endif
                          <li style="color:#f35525;font-weight: 700;"><i class="fa-solid fa-caret-right"></i> Tanggal Transaksi</li><br>
                          <li>{{$data->tanggal_pembayaran}}</li><br>
                          <li style="color:#f35525;font-weight: 700;"><i class="fa-solid fa-caret-right"></i> Status Transaksi</li><br>
                          <li> {{$data->status}}</li><br>
                          @if($data->status == 'reject')
                          <li style="color: red;">Pembayaran Tidak Valid</li><br>
                          @endif
                          @if($data->status == 'pending')
                          <li><a href="/property-detail/{{$data->paket_wisata_id}}/{{$data->id}}">Selesaikan Pembayaran / Tunggu Konfirmasi Admin</a></li><br>
                          @endif
                        </ul>
                        <button type="button" class="btn btn-primary" onclick="showSyarat()">Ketentuan</button>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="ketentuanModal" tabindex="-1" role="dialog" aria-labelledby="ketentuanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ketentuanModalLabel">Ketentuan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="https://placehold.co/1000x1000" style="width:100%;" alt="Ketentuan Image">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © Seetrip.com. </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function showSyarat()
    {
      window.location = "http://localhost:8000/syarat"
    }
  </script>

</body>
</html>
