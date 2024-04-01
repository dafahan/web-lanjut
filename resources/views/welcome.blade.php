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
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


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

	<div class="hero overlay" >
		<img src="{{ asset('images/blob.svg') }}" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center justify-content-between pt-5">
				<div class="col-lg-6 text-center text-lg-start pe-lg-5">
					<h1 class="heading text-white mb-3" data-aos="fade-up">PERUSAHAAN ASURANSI TERKEMUKA</h1>
					<p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Didirikan pada 27 November 1993 di Jakarta , telah memberikan layanan asuransi yang luas kepada masyarakat di seluruh Indonesia selama lebih dari dua dasawarsa.</p>
					<div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
						<a href="contact.html" class="btn btn-outline-white-reverse me-4">Kontak kami</a>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<div class="img-wrap">
						<img src="{{ asset('images/logo.png') }}" alt="Image" class="img-fluid rounded" style="background-color: #ffffff;">
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- <div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-4 mb-lg-0">
					<img src="{{ asset('images/img-3.jpg') }}" alt="Image" class="img-fluid rounded
					">
				</div>
				<div class="col-lg-4 ps-lg-2">
					<div class="mb-5">
						<h2 class="text-black h4">Make payment fast and smooth.</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-wallet-fill me-4"></span>
						</div>
						<div>
							<h3>Build financial</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-pie-chart-fill me-4"></span>
						</div>
						<div>
							<h3>Invest for the future</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="section sec-features">
		<div class="container">
			<div class="row g-5">
				<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
					<div class="feature d-flex">
						<span class="bi-bag-check-fill"></span>
						<div>
							<h3>Build financial</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<div class="feature d-flex">
						<span class="bi-wallet-fill"></span>
						<div>
							<h3>Invest for the future</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
					<div class="feature d-flex">
						<span class="bi-pie-chart-fill"></span>
						<div>
							<h3>Responsible banking</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-lg-2 mb-4 mb-lg-0">
					<img src="{{ asset('images/img-1.jpg') }}" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-5 pe-lg-5">
					<div class="mb-5">
						<h2 class="text-black h4">Straight-forward way of financing</h2>
					</div>
					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-wallet-fill me-4"></span>
						</div>
						<div>
							<h3>Build financial</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-pie-chart-fill me-4"></span>
						</div>
						<div>
							<h3>Invest for the future</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>

					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-bag-check-fill me-4"></span>
						</div>
						<div>
							<h3>Responsible banking</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>-->>


<div class="section sec-services">
	<!-- <div class="container">
		<div class="row mb-5">
			<div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
				<h2 class="heading text-primary">Our Services</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up">

				<div class="service text-center">
					<span class="bi-cash-coin"></span>
					<div>
						<h3>Faster payments</h3>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
					</div>
				</div>

			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
				<div class="service text-center">
					<span class="bi-chat-text"></span>
					<div>
						<h3>Grow your business</h3>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="service text-center">
					<span class="bi-fingerprint"></span>
					<div>
						<h3>Investments</h3>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">

				<div class="service text-center">
					<span class="bi-gear"></span>
					<div>
						<h3>Payment & Cards</h3>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
					</div>
				</div>

			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="service text-center">
					<span class="bi-graph-up-arrow"></span>
					<div>
						<h3>Strategic Finance</h3>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
				<div class="service text-center">
					<span class="bi-layers"></span>
					<div>
						<h3>Digital Currency</h3>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
					</div>
				</div>
			</div>

		</div>
	</div> -->
</div>


<div class="section sec-cta overlay" style="background-image: url('images/img-3.jpg')">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
				<h2 class="heading">Perlu hubungi kami?</h2>
			</div>
			<div class="col-lg-5 text-end" data-aos="fade-up" data-aos-delay="100">
				<a href="#" class="btn btn-outline-white-reverse">Kontak Kami</a>
			</div>
		</div>
	</div>
</div>


<!-- <div class="section sec-portfolio bg-light pb-5	">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-5 mx-auto text-center ">
				<h2 class="heading text-primary mb-3" data-aos="fade-up" data-aos-delay="0">Case Studies</h2>
				<p class="mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

				<div id="post-slider-nav" data-aos="fade-up" data-aos-delay="200">
					<button class="btn btn-primary py-2" class="prev" data-controls="prev">Prev</button>
					<button class="btn btn-primary py-2" class="next" data-controls="next">Next</button>
				</div>

			</div>
		</div>
	</div>

	<div class="post-slider-wrap" data-aos="fade-up" data-aos-delay="300">



		<div id="post-slider" class="post-slider">
			<div class="item">
				<a href="case-study.html" class="card d-block">
					<img src="{{ asset('images/img-1.jpg') }}" class="card-img-top" alt="Image">
					<div class="card-body">
						<h5 class="card-title">Behind the word mountains</h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</a>
			</div>

			<div class="item">
				<a href="case-study.html" class="card">
					<img src="{{ asset('images/img-2/jpg') }}" class="card-img-top" alt="Image">
					<div class="card-body">
						<h5 class="card-title">Behind the word mountains</h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</a>
			</div>

			<div class="item">
				<a href="case-study.html" class="card">
					<img src="{{ asset('images/img-3.jpg') }}" class="card-img-top" alt="Image">
					<div class="card-body">
						<h5 class="card-title">Behind the word mountains</h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</a>
			</div>

			<div class="item">
				<a href="case-study.html" class="card">
					<img src="{{ asset('images/img-4.jpg') }}" class="card-img-top" alt="Image">
					<div class="card-body">
						<h5 class="card-title">Behind the word mountains</h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</a>
			</div>

			<div class="item">
				<a href="case-study.html" class="card">
					<img src="{{ asset('images/img-1.jpg') }}" class="card-img-top" alt="Image">
					<div class="card-body">
						<h5 class="card-title">Behind the word mountains</h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</a>
			</div>
		</div>
	</div>


</div>

<div class="section sec-testimonial bg-light">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-lg-6 text-center">
				<h2 class="heading text-primary">Testimonials</h2>
			</div>

		</div>


		<div class="testimonial-slider-wrap">
			<div class="testimonial-slider" id="testimonial-slider">
				<div class="item">
					<div class="testimonial-half d-lg-flex bg-white">
						<div class="img" style="background-image: url('images/img-4.jpg')">

						</div>
						<div class="text">
							<blockquote>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</blockquote>
							<div class="author">
								<strong class="d-block text-black">John Campbell</strong>
								<span>CEO & Co-founder</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-half d-lg-flex bg-white">
						<div class="img" style="background-image: url('images/img-3.jpg')">

						</div>
						<div class="text">
							<blockquote>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</blockquote>
							<div class="author">
								<strong class="d-block text-black">John Campbell</strong>
								<span>CEO & Co-founder</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-half d-lg-flex bg-white">
						<div class="img" style="background-image: url('images/img-2.jpg')">

						</div>
						<div class="text">
							<blockquote>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</blockquote>
							<div class="author">
								<strong class="d-block text-black">John Campbell</strong>
								<span>CEO & Co-founder</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->



<div class="section sec-news">
	<!-- <div class="container">
		<div class="row mb-5">
			<div class="col-lg-7">
				<h2 class="heading text-primary">Latest News</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="card post-entry">
					<a href="single.html"><img src="{{ asset('images/img-1.jpg') }}" class="card-img-top" alt="Image"></a>
					<div class="card-body">
						<div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
						<h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p class="mt-5 mb-0"><a href="#">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card post-entry">
					<a href="single.html"><img src="{{ asset('images/img-2.jpg') }}" class="card-img-top" alt="Image"></a>
					<div class="card-body">
						<div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
						<h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p class="mt-5 mb-0"><a href="#">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card post-entry">
					<a href="single.html"><img src="{{ asset('images/img-3.jpg') }}" class="card-img-top" alt="Image"></a>
					<div class="card-body">
						<div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
						<h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
					</div>
				</div>
			</div>


		</div>
	</div> -->
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
