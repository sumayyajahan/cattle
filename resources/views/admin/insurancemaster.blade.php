<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('/') }}assets/admin/img/logo/logo.png" rel="icon">
  <title>@yield('title')</title>
  <link href="{{ asset('/') }}assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('/') }}assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('/') }}assets/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      @include('admin.includes.insurance')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('admin.includes.nav')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('body')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
       @include('admin.includes.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('/') }}assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('/') }}assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/') }}assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('/') }}assets/admin/js/ruang-admin.min.js"></script>
  <script src="{{ asset('/') }}assets/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="{{ asset('/') }}assets/admin/js/demo/chart-area-demo.js"></script>  
</body>

</html>