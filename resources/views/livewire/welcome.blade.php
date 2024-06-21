<div>
<html lang="en">



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
              <li><a href="keranjang">Keranjang</a></li>
              @if(auth()->user())
              <li><a href="/logout">Logout</a></li>
              @endif
              @if(!auth()->user())
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

  <div class="main-banner">
    <div class="">
      <div class="item item-1">
        <div class="header-text">
          <!-- <span class="category">Puncak, <em>Bogor</em></span> -->
          <h5 style="text-align:center;">Wonderful Mega</h5>
          <p style="color: white;text-align: center;">Curug Naga</p>
        </div>
      </div>
      <!-- <div class="item item-2">
        <div class="header-text">
          <span class="category">Puncak, <em>Bogor</em></span>
          <h2>WISATA <br>Curug Naga Puncak</h2>
        </div>
      </div> -->
      <!-- <div class="item item-3">
        <div class="header-text">
           <span class="category">Puncak, <em>Bogor</em></span>
          <h2>WISATA <br>Curug Naga Puncak</h2>
        </div>
      </div> -->
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="form-data" method="post" action="/transaksi/store">
          @csrf
          <p style="text-align: center;">Booking Now</p><br>
          <label class="label-form">Nama Lengkap</label>
          <input class="input-book" wire:model.live="test" type="text" name="Nama Lengkap" placeholder="Nama Lengkap">
          <label class="label-form">No Hp</label>
          <input class="input-book" type="text" name="nomor_hp" placeholder="No HP (Whatsapp)">
          <label class="label-form">Alamat</label>
          <input class="input-book" type="text" name="alamat" placeholder="Alamat">
          <label class="label-form">Jumlah Peserta</label>
          <input class="input-book" type="text" name="jumlah_peserta" placeholder="Jumlah Peserta">
          <label class="label-form">Tanggal Booking</label>
          <!-- <input type="text" name="Nama Lengkap" placeholder="Nama Lengkap"> -->
          <input class="input-book" type="date" id="Tanggal" name="Tanggal">

          
        <div class="custom-select" style="width:100%;">
          <select>
          <option value="0">PILIH</option>

            <!-- @foreach($datas as $item)
                <option value="{{$item->id  }}">{!!$item->detail!!}</option>
            @endforeach -->
          </select>
        </div>
        <label class="label-form">Informasi Tambahan</label>
        <textarea class="koment" rows="4" cols="50" name="comment" form="usrform" placeholder="Permintaan Khusus ( Misalnya, makanan khusus, akomodasi, dll)"></textarea>
        <button type="submit" style="
        background-color: black; 
        color: white; 
        border: none; 
        padding: 10px 20px; 
        font-size: 16px; 
        border-radius: 25px; 
        cursor: pointer; 
        transition: background-color 0.3s ease;
    " onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='black'">
          Beli
        </button>

        </form>
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
            <h2>Wisata Curug Naga</h2>
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


  <!-- <div class="properties section" id="tiket">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Wisata Curug Naga</span>
            <h6>Rp 135.000/pax</h6>
            <h4><a href="property-details.html">Paket 3 Trip</a></h4>
            <ul>
              <li><i class="fa-solid fa-caret-right"></i> Tiket Masuk</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Peralatan (Pelampung, Helm) </li><br>
              <li><i class="fa-solid fa-caret-right"></i> Pemandu (Guide)</li><br>
              <li><i class="fa-solid fa-caret-right"></i> Curug Priuk, Curug Naga, Curug Barong</li><br>
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
              <a href="camping.html">Beli TIket</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div> -->

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

  <div class="fun-facts">
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
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-01.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Property</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                        <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
                      </p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Beli TIket</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-02.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Beli TIket</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-03.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Penthouse</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Beli TIket</a>
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





  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © Seetrip.com. </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
 
</body>

</html>
</div>