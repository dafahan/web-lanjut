<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JRP</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/')}}images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('/')}}css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('home')}}" class="text-nowrap logo-img">
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
              <a class="sidebar-link" href="{{url('home')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">View Website</span>
              </a>
            </li>

            @if(auth()->user()->role == 'Super Admin')
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Manage</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('manageaccount')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Manage Account</span>
              </a>
            </li>
            @endif
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Post</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('layananadmin')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Layanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('visiadmin')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Visi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('misiadmin')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Misi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('strukturadmin')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Struktur</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('verifikasi-pengajuan')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Verifikasi Pengajuan</span>
                </a>
              </li>
        </ul>

        </nav>
        <!-- End Sidebar navigation -->
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
      <div class="container-fluid">
        <!-- Grafik Garis -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Statistik Nasabah Baru Per Bulan</h4>
                <div id="chart-nasabah-line"></div>
              </div>
            </div>
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
  <script>
    const dataNasabahLine = {
      categories: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
      series: [
        {
          name: "Asuransi Kesehatan",
          data: [70, 80, 85, 75, 80, 85, 90], 
        },
        {
          name: "Asuransi Kecelakaan",
          data: [60, 65, 70, 60, 65, 70, 75], 
        }
      ]
    };
  
    const optionsLine = {
      chart: {
        type: "line",
        height: 350,
        toolbar: {
          show: false 
        }
      },
      stroke: {
        curve: "smooth", 
        width: 2 
      },
      series: dataNasabahLine.series,
      xaxis: {
        categories: dataNasabahLine.categories,
        title: {
          text: "Bulan",
          position: 'bottom'
        }
      },
      yaxis: {
        title: {
          text: "Jumlah Nasabah"
        }
      },
      colors: ["#1E90FF", "#8A2BE2"], 
      markers: {
        size: 5 
      },
      title: {
        text: "Statistik Nasabah Baru Per Bulan",
        align: "center"
      },
      legend: {
        position: "top", 
        horizontalAlign: "center"
      }
    };
  
    // Render grafik garis
    const chartLine = new ApexCharts(document.querySelector("#chart-nasabah-line"), optionsLine);
    chartLine.render();
  </script>
  
</body>

</html>
