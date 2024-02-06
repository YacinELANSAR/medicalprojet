<div>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="stylesheet" href="style.css">
  <title>Doctor Reservation</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- style for input comment -->
  
  <!-- end style for input comment -->
  <!-- Favicons -->
  <link rel="stylesheet" href="{{asset('style2.css')}}">
  <link href="{{ asset('import/assets/img/favicon.png')}}" rel="icon">
<link href="{{ asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('import/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
 
</head>

<body>

  
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="margin-top: -50px">
    <div class="container d-flex align-items-center">
      
      <h1  class="logo me-auto"><a href="index.html">Doctor Reservation</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('import/assets/img/logo.png')}}" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="btn btn-success text-white" href="">Patient area</a></li>
          <a href="{{ route('login.show') }}" class="btn btn-success text-white">Doctor area</a>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->
      
      
    </div>
</div>
<script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('import/assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
<script src="{{ asset('import/assets/js/main.js') }}"></script>

<!-- start succes logout -->
@if (Session::has('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'voit plus tard ',
            text: '{{ Session::get('success')}}',
            confirmButtonColor: '#0A758A'
        });
    </script>
@endif