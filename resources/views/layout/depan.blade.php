<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/images/logo-sm-cb.png" rel="icon">
  <link href="/assets/images/logo-sm-cb.png" rel="logo-sm-cb">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Bootstrap Css -->
  <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">

  <!-- Icons Css -->
  <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assets/images/logo-cb.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="depan">Home</a></li>
          <li><a class="nav-link scrollto" href="depan">About</a></li>
          <li><a class="nav-link scrollto" href="depan">Product</a></li>
          <li><a class="nav-link scrollto" href="depan">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="depan">Team</a></li>
          <li><a class="nav-link scrollto" href="depan">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="ajuan_pinjaman">Pinjaman</a></li>
              <li><a href="#">Pembelian Gula</a></li>
              <li><a href="#">Pembelian Tetes</a></li>
              <li><a href="#">Pembelian Ampas</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @if (Auth::check())
          <li class="dropdown"><a href="#"><span>
            <img class="rounded-circle header-profile-user" src="/assets/images/avatar-img.png"
            alt="Header Avatar"> {{ Auth::user()->username }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile">Profile</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </li>
        @else
        <li><a class="getstarted scrollto" href="auth/login">
          Login</a></li>
        @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('konten')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Kirim alamat email Anda untuk mendapatkan notifikasi dari kami</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Berlangganan">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="depan" class="logo d-flex align-items-center mb-5">
              <img src="/assets/images/logo-cb.png" alt="">
            </a>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Products</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Produk Gula</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Produk Tetes</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Produk Ampas</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jl Raya Candi No. 10 Sidoarjo <br>
              (61271) Jawa Timur<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62318921003<br>
              <strong>Email:</strong> pgcandibaru@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IT Support Intern PG CB 2023</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Silvia Nanda Syafa Iswahyudi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script>
  jQuery(document).ready(function () {
    jQuery('#tanggal').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '+1d'
    });
});</script>

</body>

</html>