<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--My css-->
  <link rel="stylesheet" href="css/style.css">
  <title>loker difabel</title>
  
  <style>
    .footer-widgets {
  background-color: #343a40; /* Dark background */
  color: #ffffff; /* White text */
}

.footer-widgets .widget-title {
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-widgets .menu-item a {
  color: #ffffff;
  text-decoration: none;
  display: block;
  margin-bottom: 10px;
}

.footer-widgets .menu-item a:hover {
  text-decoration: underline;
}

  </style>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C1DDF6;">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      {{-- <img src="img/loker-removebg-preview.png" alt="loker" style="height: 50px;"> --}}
      <h2 class="fw-bold36">LOKER DIFABEL</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/loker">CARI LOKER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pelatihan">CARI PELATIHAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/infopelatihan">INFO PELATIHAN</a>
            </li>
            @auth('member')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/teamm.jpg" alt="Profile" class="rounded-circle" width="30" height="30">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li>
                        <form method="POST" action="/member-logout">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @endauth
        </ul>
    </div>
    
    </div>
  </nav>


  <!-- ======= Slides with captions ======= -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/teamm.jpg') }}" class="d-block w-100" alt="Hanifah">

        <div class="col-md-1 hidden-xs"></div>
      </div>
      </form>
    </div>
  </div>

  </div>
  </div>
  </div>

  </div>

  <!-- ======= End Slides with captions ======= -->

  <!---Content-->
  @yield('container')
  </div>
  <!--Akhir content-->
  <br>
  <hr>
  <!--Footer-->
  <footer id="footer">
  <div class="footer">
    <div class="footer-widgets bg-dark text-light pt-5">
      <div class="container">
        <div class="row">
          <div id="text-6" class="widget widget-footer-item widget_text widget-count-4 col-md-3 mb-4">
            <h4 class="widget-title text-uppercase">Tentang Loker</h4>
            <div class="textwidget">Job portal loker difabel adalah layanan berbasis software (Software as a service) hadir sejak 2007 fokus dibidang rekrutmen untuk mempermudah cari pekerjaan dan perekrutan karyawan.</div>
          </div>
          <div id="nav_menu-3" class="widget widget-footer-item widget_nav_menu widget-count-4 col-md-3 mb-4">
            <h4 class="widget-title text-uppercase">Tentang Kami</h4>
            <div class="menu-tentang-kami-container">
              <ul id="menu-tentang-kami" class="list-unstyled">
                <li class="menu-item"><a href="" class="text-light">Hubungi Kami</a></li>
                <li class="menu-item"><a href="" class="text-light">Pusat Bantuan</a></li>
                <li class="menu-item"><a href="" class="text-light">Logo</a></li>
                <li class="menu-item"><a href="" class="text-light">Kebijakan Privasi</a></li>
                <li class="menu-item"><a href="" class="text-light">Kondisi dan Ketentuan</a></li>
              </ul>
            </div>
          </div>
          <div id="nav_menu-31" class="widget widget-footer-item widget_nav_menu widget-count-4 col-md-3 mb-4">
            <h4 class="widget-title text-uppercase">Pencari Kerja</h4>
            <div class="menu-anonymous-jobseeker-footer-container">
              <ul id="menu-anonymous-jobseeker-footer" class="list-unstyled">
                <li class="menu-item"><a href="" class="text-light">Registrasi Pencari Kerja</a></li>
                <li class="menu-item"><a href="" class="text-light">Buat Resume Online</a></li>
                <li class="menu-item"><a href="" class="text-light">Cari Lowongan Kerja</a></li>
                <li class="menu-item"><a href="" class="text-light">Job Alerts</a></li>
                <li class="menu-item"><a href="" class="text-light">Kategori Loker</a></li>
                <li class="menu-item"><a href="" class="text-light">Tips Loker</a></li>
              </ul>
            </div>
          </div>
          <div id="nav_menu-32" class="widget widget-footer-item widget_nav_menu widget-count-4 col-md-3 mb-4">
            <h4 class="widget-title text-uppercase">Perusahaan</h4>
            <div class="menu-anonymous-employer-footer-container">
              <ul id="menu-anonymous-employer-footer" class="list-unstyled">
                <li class="menu-item"><a href="" class="text-light">Registrasi Perusahaan</a></li>
                <li class="menu-item"><a href="" class="text-light">Pasang Lowongan</a></li>
                <li class="menu-item"><a href="" class="text-light">Produk</a></li>
                <li class="menu-item"><a href="" class="text-light">Paket</a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="bg-light">
        <div class="text-center py-3">
          <p class="mb-0">&copy; 2024 loker difabel. All rights reserved.</p>
        </div>
      </div>
    </div>
    
    <!-- ======= Footer ======= -->
    <!-- <footer id="footer">
      <div class="container mt-5">
        <div class="copyright">
          &copy; Copyright <strong><span>Hartanto</span></strong>. see you next time.
        </div>
        <div class="credits">
          Designed by <a href="">Synta</a>
        </div>
      </div> -->
    </footer>
    <!-- ======= End Footer ======= -->
<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
<!--akhir footer-->

</html>