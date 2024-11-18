<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JRP - Status Pengajuan</title>
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
        padding-top: 60px;
        margin-left: 100px;
        width: 100%;
    }
    .card {
        border-radius: 10px;
        border-color: #000000;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .card-body {
        padding: 2rem;
        background-color: #f9f9f9;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .status-pending {
        background-color: #5bc0de;
        color: white;
        padding: 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    .status-approved {
        background-color: #20d742;
        color: white;
        padding: 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    .status-rejected {
        background-color: #d9534f;
        color: white;
        padding: 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    .card-title {
        color: #333;
        font-size: 18px;
        font-weight: 600;
    }

    .card-text {
        font-size: 16px;
        color: #555;
    }

    .info-header {
        font-size: 18px;
        font-weight: 600;
        color: #444;
    }

    .info-details {
        font-size: 16px;
        color: #666;
    }

    .row-icon {
        width: 30px;
        height: 30px;
    }
  </style>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('beranda')}}" class="text-nowrap logo-img">
            <img src="{{asset('/')}}images/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
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
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('statuspengajuan')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Status Pengajuan</span>
                </a>
            </li>
        </ul>
        </nav>
      </div>
    </aside>

    <!-- Main wrapper -->
    <div class="body-wrapper">
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
                  <a href="{{url('actionlogout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    </div>

    <!-- Content Start -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <!-- Menampilkan Status Pengajuan -->
                    <div class="card">
                        <div class="card-body">
                            <h3 class="header-text">Status Pengajuan Anda</h3>

                            <!-- Informasi Pengajuan -->
                            @if($status)
                                <div class="info-header">Nama Pengaju:</div>
                                <p class="info-details">{{ $status->nama }}</p>

                                <div class="info-header">Jenis Asuransi:</div>
                                <p class="info-details">{{ $status->jenis_asuransi }}</p>

                                <div class="info-header">Tanggal Pengajuan:</div>
                                <p class="info-details">{{ $status->created_at->format('d-m-Y') }}</p>

                                <div class="info-header">Deskripsi Pengajuan:</div>
                                <p class="info-details">{{ $status->deskripsi }}</p>

                                <!-- Tambahan Info -->
                                <div class="info-header mt-4">Informasi Kontak:</div>
                                <p class="info-details">Telepon: {{ $status->telepon }}</p>

                                <!-- Status display -->
                                <div class="mt-3">
                                    @if($status->status == 0)
                                        <div class="status-pending">Belum Diverifikasi</div>
                                    @elseif($status->status == 1)
                                        <div class="status-approved">Disetujui</div>
                                    @else
                                        <div class="status-rejected">Ditolak</div>
                                    @endif
                                </div>
                            @else
                                <p>Anda belum memiliki pengajuan yang terdaftar.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <script src="{{asset('/')}}libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('/')}}libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}js/sidebarmenu.js"></script>
    <script src="{{asset('/')}}js/app.min.js"></script>
</body>

</html>
