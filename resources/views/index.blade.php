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
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
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
                      <li><a href="#home" class="active">Home</a></li>
                      <li><a href="#tentang">Tentang Kami</a></li>
                      <li><a href="#tiket">Beli Tiket</a></li>
                      <li><a href="login">Keranjang</a></li>
                      <li><a href="#info">Contact Us</a></li>
                      @if (auth())
                      <li><a href="/login">Login</a></li>

                      @endif
                      <li><a href="jadwal"><i class="fa fa-calendar"></i> Lihat Jadwal</a></li>
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



  <div class="main-banner" id="home">
    
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Puncak, <em>Bogor</em></span>
          <h2>WISATA <br>Curug Naga Puncak</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Puncak, <em>Bogor</em></span>
          <h2>WISATA <br>Curug Naga Puncak</h2>
        </div>
      </div>
      <!-- <div class="item item-3">
        <div class="header-text">
           <span class="category">Puncak, <em>Bogor</em></span>
          <h2>WISATA <br>Curug Naga Puncak</h2>
        </div>
      </div> -->
    </div>
  </div>

   <div class="container" id="tiket">
    <div class="row">
      <div class="col-md-12">
        <form class="form-data">
          <p style="text-align: center;">Booking Now</p><br>
          <label class="label-form">Nama Lengkap</label>
          <input class="input-book" type="text" name="Nama Lengkap" placeholder="Nama Lengkap">
          <label class="label-form">No Hp</label>
          <input class="input-book" type="text" name="Nomor HP" placeholder="No HP (Whatsapp)">
          <label class="label-form">Alamat</label>
          <input class="input-book" type="text" name="Alamat" placeholder="Alamat">
          <label class="label-form">Jumlah Peserta</label>
          <input class="input-book" type="text" name="Jumlah Peserta" placeholder="Jumlah Peserta">
          <label class="label-form">Tanggal Booking</label>
          <!-- <input type="text" name="Nama Lengkap" placeholder="Nama Lengkap"> -->
          <input  class="input-book" type="date" id="Tanggal" name="Tanggal">

        </form>
        <div class="custom-select" style="width:100%;">
            <select>
              <option value="0">- Pilih Paket -</option>
              <option value="1"><h1>Paket 3 Trip Rp135.000/pax | Tiket Masuk
               Peralatan (Pelampung, Helm)
               Pemandu (Guide)
               Curug Priuk, Curug Naga, Curug Barong
               Asuransi Kegiatan</em></option>
                            <option value="2">Paket 2 Trip Rp110.000/pax | Tiket Masuk
               Peralatan (Pelampung, Helm),
               Pemandu (Guide),
               Trekking 2 curug (Sesuai Pilihan),
               Asuransi Kegiatan</option>
                            <option value="3">Paket 1 Trip Rp85.000/pax | Tiket Masuk
               Peralatan (Pelampung, Helm),
               Pemandu (Guide),
               Trekking 1 curug (Sesuai Pilihan),
               Asuransi Kegiatan</option>
                            <option value="4">Paket Camping (2 Hari 1 Malam) Rp385.000/pax |  Minimal 8 PAX
               Tiket Masuk Area,
               Makan 3x,
               Area Camp,
               Perlengkapan Camp (Tenda, Matras, Sleeping Bag),
               Boddyrafting dan Peralatan (Pelampung, Helm),  Asuransi Kegiatan</option>
              
            </select>
        </div>
        <form>
          <label class="label-form">Informasi Tambahan</label>
          <textarea class="koment" rows="4" cols="50" name="comment" form="usrform" placeholder="Permintaan Khusus ( Misalnya, makanan khusus, akomodasi, dll)"></textarea>
        </form>
        <div class="main-button">
              <a href="property-details.html">Beli TIket</a>
            </div>
      </div>
    </div>
  </div>



  <div class="featured section" id="tentang">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/featured.jpg" alt="">
            <a href="property-details.html"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>Sekilas Tentang</h6>
            <h2>Wisata  Curug Naga</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Apa Itu Wisata Curug Naga?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Selamat datang di situs resmi Wisata Curug Naga. Wisata Curug Naga merupakan tempat wisata alam yang berada di daerah Megamendung, Puncak - Bogor yang dikelola oleh Perhutani KBM dan warga setempat. Di Wisata Curug Naga terdapat 3 curug, yaitu Curug Priuk, Curug Naga, dan Curug Barong. Setiap Curug memiliki ciri khas, karakter, dan tingkat kesulitan masing-masing untuk dijelajahi, sangat cocok bagi anda yang sangat menyukai tantangan.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apa Saja yang didapat pengunjung?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Di Wisata Curug Naga pengunjung akan melakukan aktifitas body rafting, river trekking, jungle trekking, cliff jumping.Untuk menuju curug, pengunjung harus melakukan river trekking/body rafting terlebih dahulu, memakai pelampung serta dipandu oleh pemandu Wisata Curug Naga.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Bagaimana Cara Reservasi atau Membeli Tiket?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 Bagi pengunjung yang ingin mengunjungi Wisata Curug Naga, wajib melakukan reservasi/booking terlebih dahulu atau melakukan pembelian tiket di wonderfulmega.com, karena untuk persiapan peralatan dan logistik di lapangan.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>Parkiran Luas<br><span>Akses Bus</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>Keselamatan nomor 1</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Tiket <br><span>Online Sistem</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Lihat Video</h6>
            <h2>Mari Berjelajah </h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/video-frame.jpg" alt="">
            <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1" data-speed="1000"></h2>
                   <p class="count-text ">Body Rafting</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2" data-speed="1000"></h2>
                  <p class="count-text ">Camping</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="3" data-speed="1000"></h2>
                  <p class="count-text ">Explor</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Wisata Viral</h6>
            <h2>Gallery Kami</h2>
          </div>
        </div>
        
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>185 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>4</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-01.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Property</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. 
                      <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Beli TIket</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>250 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>5</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-02.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="login"><i class="fa fa-calendar"></i> Beli TIket</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>320 m2</span></li>
                          <li>Floor number <span>34th</span></li>
                          <li>Number of rooms <span>6</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-03.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Penthouse</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="login"><i class="fa fa-calendar"></i> Beli TIket</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="contact section" id="info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Contact Us</h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>010-020-0340<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>info@villa.co<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
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

  </body>
</html>