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
  @include('admin.includes.style')

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      @include('admin.includes.farmar')
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
 
  @include('admin.includes.script')
    
</body>

</html>