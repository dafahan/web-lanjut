<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JRP</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/')}}images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('/')}}css/styles.min.css" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  <style>
    trix-toolbar [data-trix-button-group = "file-tools"]{
      display:none;
    }
  </style>
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
      <!--  Header End -->
      <div class="container-fluid">
        <form action="{{('storevisi')}}" method="POST">
          @csrf
        <!--  Row 1 -->
        <div class="row">
        <div class="col-lg-12 col-md-12">
        <div class="card" style="min-height: 485px">
                                        <div class="card-header card-header-text">
                                            <h4 class="card-title">Create Visi</h4>
                                        </div>
                                        <div class="card-content table-responsive">
                                          <!-- <textarea type="text" style="max-width: 90%; margin-left:30px;" class="form-control" name="deskripsi" placeholder="Deskripsi" rows="15"></textarea> -->
                                          <input id="deskripsi" type="hidden" name="deskripsi">
                                          <trix-editor input="deskripsi"></trix-editor>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success mx-3 mt-2 d-block ml-auto" style="max-width: 10%;" >SIMPAN</button>
                                      </div>
                                </div>
        </div>
        <div class="row">
        </div>
        </form>
      </div>
    </div>
  </div>
  <script src="{{asset('/')}}libs/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('/')}}libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}js/sidebarmenu.js"></script>
  <script src="{{asset('/')}}js/app.min.js"></script>
  <script src="{{asset('/')}}libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{asset('/')}}libs/simplebar/dist/simplebar.js"></script>
  <script src="{{asset('/')}}js/dashboard.js">
    document.addEventListener('trix-file-accept-', function(e){
      e.preventDefault();
    })
  </script>

</body>

</html>