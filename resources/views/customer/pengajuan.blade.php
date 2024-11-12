<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JRP</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/')}}images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('/')}}css/styles.min.css" />
  <style>
    body {
        font-family: "Open Sans", sans-serif;
    }
    .sidebar-item a{
        font-size: 16px !important;
    }
    .content{
        padding-top: 100px;
    }
    .card {
        border-radius: 10px;
        border-color: #000000;
    }

    .card-body {
        padding: 3rem;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .header-text h2 {
        font-size: 24px;
        font-weight: bold;
    }

    .header-text p {
        font-size: 18px;
        color: #777;
    }

  </style>
</head>

<body>
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
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->

    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li> -->
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
                    <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> -->
                    <a href="{{url('actionlogout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
  </div>

 <!-- Content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Card untuk Formulir Pengajuan Asuransi -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="header-text mb-4">
                            <h2>Pengajuan Asuransi</h2>
                            <p>Silakan isi formulir di bawah ini untuk mengajukan asuransi.</p>
                        </div>

                        <!-- Formulir Pengajuan Asuransi -->
                        <form action="{{ route('customer.pengajuan') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" required="">
                            </div>
                            <div class="mb-3">
                                <select name="jenis_asuransi" class="form-control" required="">
                                    <option value="">Pilih Jenis Asuransi</option>
                                    <option value="Kecelakaan">Asuransi Kecelakaan</option>
                                    <option value="Kendaraan">Asuransi Kendaraan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea name="keterangan" class="form-control" placeholder="Keterangan (opsional)" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100 fs-6">Ajukan Asuransi</button>
                            </div>
                        </form>

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
</div>


  <script src="{{asset('/')}}libs/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('/')}}libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}js/sidebarmenu.js"></script>
  <script src="{{asset('/')}}js/app.min.js"></script>
  <script src="{{asset('/')}}libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{asset('/')}}libs/simplebar/dist/simplebar.js"></script>
  <script src="{{asset('/')}}js/dashboard.js"></script>
</body>

</html>
