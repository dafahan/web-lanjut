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
    .content {
        padding-top: 40px;
    }

    .card {
        border-radius: 10px;
        border-color: #000000;
    }

    .section-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .benefit-list {
        list-style: none;
        padding-left: 0;
    }

    .benefit-list li {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .cta-button {
        margin-top: 20px;
        padding: 10px 30px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .cta-button:hover {
        background-color: #0056b3;
        color: white;
    }

    .testimonial {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-top: 30px;
    }

    .testimonial .quote {
        font-style: italic;
        font-size: 18px;
    }

    .testimonial .author {
        text-align: right;
        font-weight: bold;
        margin-top: 15px;
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
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
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('chat')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Chat With JRP Bot</span>
                </a>
              </li>
          </ul>
        </nav>
      </div>
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
          <!-- Section: Introduction -->
          <div class="section-title">Asuransi Kesehatan - Perlindungan Lengkap untuk Kesehatan Anda</div>
          <p>Asuransi kesehatan kami memberikan perlindungan menyeluruh, mulai dari rawat inap, rawat jalan, hingga penyakit kritis. Dengan layanan yang cepat dan efisien, Anda dapat merasa tenang dan fokus pada pemulihan kesehatan Anda tanpa khawatir soal biaya.</p>

          <!-- Section: Manfaat Layanan -->
          <div class="section-title">Manfaat Layanan Kami</div>
          <ul class="benefit-list">
            <li>Perlindungan biaya rawat inap dan rawat jalan di rumah sakit terbaik di seluruh Indonesia.</li>
            <li>Proteksi terhadap penyakit kritis seperti kanker, stroke, dan penyakit jantung.</li>
            <li>Jaringan rumah sakit yang luas dan dapat diakses kapan saja, di mana saja.</li>
            <li>Penggantian biaya obat dan pemeriksaan medis sesuai dengan kebijakan asuransi.</li>
            <li>Layanan pelanggan 24/7 untuk memudahkan proses klaim dan pertanyaan.</li>
          </ul>
          <br><br>
          <a href="{{url('beranda')}}" class="cta-button">Kembali</a>

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
