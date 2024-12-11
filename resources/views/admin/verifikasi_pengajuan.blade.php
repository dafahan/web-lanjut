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
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('home')}}" class="text-nowrap logo-img">
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
              <a class="sidebar-link" href="{{url('home')}}" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('')}}" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
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
                <span><i class="ti ti-layout-dashboard"></i></span>
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
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Layanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('visiadmin')}}" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Visi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('misiadmin')}}" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Misi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('strukturadmin')}}" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Struktur</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
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
                  <div class="message-body">
                    <a href="{{url('actionlogout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card" style="min-height: 485px">
              <div class="card-header card-header-text">
                <h4 class="card-title">Verifikasi Pengajuan</h4>
              </div>
              <div class="card-content table-responsive">
                <table class="table table-hover">
                  <thead class="text-primary">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Telepon</th>
                      <th>Jenis Asuransi</th>
                      <th>Keterangan</th>
                      <th>File KTP</th>
                      <th>File Dokumen Pendukung</th>
                      <th>File Bukti Asuransi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pengajuans as $index => $pengajuan)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $pengajuan->nama }}</td>
                      <td>{{ $pengajuan->telepon }}</td>
                      <td>{{ $pengajuan->jenis_asuransi }}</td>
                      <td>{{ $pengajuan->keterangan }}</td>
                      <td>
                        @if($pengajuan->file_ktp)
                        <a href="{{ asset('storage/' . $pengajuan->file_ktp) }}" target="_blank">Lihat</a>
                        @endif
                      </td>
                      <td>
                        @if($pengajuan->file_dokumen_pendukung)
                        <a href="{{ asset('storage/' . $pengajuan->file_dokumen_pendukung) }}" target="_blank">Lihat</a>
                        @endif
                      </td>
                      <td>
                        @if($pengajuan->file_bukti_asuransi)
                        <a href="{{ asset('storage/' . $pengajuan->file_bukti_asuransi) }}" target="_blank">Lihat</a>
                        @endif
                      </td>
                      <td>
                        <form action="{{ route('approve.pengajuan', $pengajuan->id) }}" method="POST">
                          @csrf
                          @method('POST')
                          <button class="btn btn-success" type="submit">Approve</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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
</body>

</html>
