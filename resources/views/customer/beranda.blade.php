<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JRP</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/')}}images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('/')}}css/styles.min.css" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <style>
    .content{
        padding-top: 100px;
    }
    .card {
        border-radius: 10px;
        border-color: #000000;
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('beranda')}}" class="text-nowrap logo-img">
            <img src="{{asset('/')}}images/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('beranda')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pengajuan')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Pengajuan</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('/')}}images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{url('actionlogout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Page Content -->
      <div class="content">
        <div class="container px-4 px-lg-5 mt-5">
          <!-- Welcome Card -->
          <div class="card text-center mb-4" style="background: linear-gradient(135deg, #1e90ff, #00bfff); color: #fff; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
              <h3 class="card-title" style="font-weight: bold; color: #fff;; font-size: 24px;">Welcome to Jasa Raharja Putera Insurance!</h3>
              <p class="card-text" style="color: #f0f8ff; font-size: 16px">Kami hadir untuk memberikan rasa aman dan perlindungan untuk Anda. Mari ciptakan masa depan yang terlindungi.</p>
            </div>
          </div>

          <!-- Insurance Products Section -->
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 1">
                <div class="card-body">
                  <h5 class="card-title">Health Insurance</h5>
                  <p class="card-text">Comprehensive health coverage for you and your family.</p>
                  <a href="#" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 2">
                <div class="card-body">
                  <h5 class="card-title">Life Insurance</h5>
                  <p class="card-text">Secure your loved ones' future with our life insurance plans.</p>
                  <a href="{{url('/life')}}" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 3">
                <div class="card-body">
                  <h5 class="card-title">Vehicle Insurance</h5>
                  <p class="card-text">Comprehensive coverage for your vehicle, giving you peace of mind on the road.</p>
                  <a href="#" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer and Scripts -->
      <script src="{{asset('/')}}libs/jquery/dist/jquery.min.js"></script>
      <script src="{{asset('/')}}libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('/')}}js/sidebarmenu.js"></script>
      <script src="{{asset('/')}}js/app.min.js"></script>
      <script src="{{asset('/')}}libs/apexcharts/dist/apexcharts.min.js"></script>
      <script src="{{asset('/')}}libs/simplebar/dist/simplebar.js"></script>
      <script src="{{asset('/')}}js/dashboard.js"></script>
    </div>
  </div>
</body>

</html>
