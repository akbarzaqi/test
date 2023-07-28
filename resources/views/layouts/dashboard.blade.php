<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  @stack('prepend-style')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../images/favicon.png" />
  @stack('addon-style')
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="../../../images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../../images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
         
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../../images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title ">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('penulis.index') }}">
              <i class="mdi mdi-pen menu-icon"></i>
              <span class="menu-title">Penulis</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('buku.index') }}">
              <i class="mdi mdi-book menu-icon"></i>
              <span class="menu-title">Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('genre.index') }}">
              <i class="mdi mdi-human menu-icon"></i>
              <span class="menu-title">Genre</span>
            </a>
          </li>
         
        
        </ul>
      </nav>
      <!-- main content -->
     @yield('content')
     
      <!-- main-panel ends -->
      
    </div>
    <!-- page-body-wrapper ends -->
    
  </div>
 
  
  <!-- container-scroller -->

  <!-- plugins:js -->
  @stack('prepend-script')
  <script src="../../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../../vendors/chart.js/Chart.min.js"></script>
  <script src="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.js"></script>
  <script src="../../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../js/off-canvas.js"></script>
  <script src="../../../js/hoverable-collapse.js"></script>
  <script src="../../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../js/dashboard.js"></script>
  <script src="../../../js/data-table.js"></script>
  <script src="../../../js/jquery.dataTables.js"></script>
  <script src="../../../js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="../../../js/jquery.cookie.js" type="text/javascript"></script>
  @stack('addon-script')
</body>

</html>

