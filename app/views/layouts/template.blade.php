<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MitiEderi - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL}}assets/img/favicon.png" rel="icon">
  <link href="{{URL}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL}}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{URL}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{URL}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{URL}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{URL}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{URL}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL}}assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.8.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  @include('layouts.partials.top_bar')

  <!-- ======= Header ======= -->
  @include('layouts.partials.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {{--@include('layouts.partials.hero_section')--}}
  <!-- End Hero -->

  <main id="main">
    <br>
    @yield('content')
    <!-- ======= Featured Services Section ======= -->
    {{--@include('layouts.partials.services_section')--}}
    <!-- End Featured Services Section -->
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.partials.footer')
  <!-- End Footer -->

  @include('layouts.partials.preloader')

  <!-- Vendor JS Files -->
  <script src="{{URL}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{URL}}assets/vendor/aos/aos.js"></script>
  <script src="{{URL}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL}}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{URL}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{URL}}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{URL}}assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{URL}}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{URL}}assets/js/main.js"></script>
  @yield('scripts')
</body>

</html>