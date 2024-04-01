<!-- /*
* Template Name: Financing
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{asset('/')}}favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="{{asset('/')}}fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{asset('/')}}fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="{{asset('/')}}css/tiny-slider.css">
  <link rel="stylesheet" href="{{asset('/')}}css/aos.css">
  <link rel="stylesheet" href="{{asset('/')}}css/glightbox.min.css">
  <link rel="stylesheet" href="{{asset('/')}}css/style.css">

  <link rel="stylesheet" href="{{asset('/')}}css/flatpickr.min.css">


	<title>Jasa Raharja Putera</title>
</head>
<body>

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2" style="background: #ffffff; border-radius: 0.25rem;">
							<a href="{{url('')}}" class="logo m-0 float-start"><img src="{{ asset('images/output-onlinegiftools.gif') }}" class="img-fluid" style="width: 250px;"></a>
						</div>
						<div class="col-8 text-center ">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{url('')}}">Home</a></li>
								<li><a href="{{url('produk')}}">Produk</a></li>
								<li><a href="{{url('layanan')}}">Layanan</a></li>
								<li class="has-children">
											<a href="#">Tentang Kami</a>
											<ul class="dropdown">
												<li><a href="{{url('sejarah')}}">Sejarah</a></li>
												<li><a href="{{url('visimisi')}}">Visi Misi</a></li>
												<li><a href="{{url('struktur')}}">Struktur Organisasi</a></li>
											</ul>
										</li>
								<li><a href="{{route('login')}}">Masuk</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

  <div class="hero overlay inner-page">
    <img src="{{asset('/')}}images/blob.svg" alt="" class="img-fluid blob">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up" >Produk</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section sec-news">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
          <div class="card post-entry">
            <a href="single.html"><img src="{{asset('/')}}images/img-1.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
              <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card post-entry">
            <a href="single.html"><img src="{{asset('/')}}images/img-2.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
              <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card post-entry">
            <a href="single.html"><img src="{{asset('/')}}images/img-3.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
              <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
          <div class="card post-entry">
            <a href="single.html"><img src="{{asset('/')}}images/img-1.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
              <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card post-entry">
            <a href="single.html"><img src="{{asset('/')}}images/img-2.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
              <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p class="mt-5 mb-0"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card post-entry">
            <a href="single.html"><img src="{{asset('/')}}images/img-3.jpg" class="card-img-top" alt="Image"></a>
            <div class="card-body">
              <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
              <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
            </div>
          </div>
        </div>


      </div>

      <div class="row">
        <div class="col-lg-12 text-center py-5">
          <div class="custom-navigation">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <span>...</span>
            <a href="#">5</a>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="widget">
					<h3>Tentang</h3>
					<p>JRP-INSURANCE sebagai afiliasi Indonesia Financial Group (IFG) menerapkan Core Value AKHLAK yaitu Amanah, Kompeten, Harmonis, Loyal, Adaptif dan Kolaboratif.</p>
				</div> <!-- /.widget -->
				<div class="widget">
					<address>Jalan Diponegoro 59 B-c 35212 Kota Bandar Lampung</address>
				</div> <!-- /.widget -->
			</div> <!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<div class="widget">
				</div> <!-- /.widget -->
			</div> <!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<div class="widget">
					<h3>Sosial</h3>
					<ul class="list-unstyled social">
						<li><a href="https://www.instagram.com/jrp_insurance/"><span class="icon-instagram"></span></a></li>
						<li><a href="https://twitter.com/pt_jasaraharja"><span class="icon-twitter"></span></a></li>
						<li><a href="https://www.facebook.com/pages/PT.%20Jasa%20Raharja%20Putra/1730389286995996/"><span class="icon-facebook"></span></a></li>
						<li><a href="https://www.linkedin.com/company/pt--jasaraharja-putera"><span class="icon-linkedin"></span></a></li>
					</ul>
				</div> <!-- /.widget -->
			</div> <!-- /.col-lg-4 -->
		</div> <!-- /.row -->

		<div class="row mt-5">
			<div class="col-12 text-center">
					<!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>

    <script src="{{ asset('js/flatpickr.min.js') }}"></script>


    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
  </html>
