<html> 
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Open+Sans:wght@400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,900;1,400;1,700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/one-page/css/et-line.css')}}">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="{{asset('assets/demos/restaurant/restaurant.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Menu | Canvas</title>

</head>

<body class="stretched sticky-footer page-transition" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="overflow-hidden">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="col-auto me-lg-0 order-lg-2">
							<a href="demo-restaurant.html">
								<img class="logo-default" srcset="demos/restaurant/images/logo.png, demos/restaurant/images/logo@2x.png 2x" src="demos/restaurant/images/logo@2x.png" alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu col-lg-4 order-lg-1">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="demo-restaurant.html"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-restaurant-about-us.html"><div>About</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-restaurant-menu.html"><div>Menu</div></a></li>
							</ul>

						</nav>

						<nav class="primary-menu col-lg-4 order-lg-3">

							<ul class="menu-container justify-content-lg-end">
								<li class="menu-item"><a class="menu-link" href="demo-restaurant-gallery.html"><div>Gallery</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-restaurant-blog.html"><div>Blog</div></a></li>
								<li class="menu-item"><a class="menu-link color" href="demo-restaurant-reservation.html"><div>Reservation</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section class="page-title page-title-parallax parallax dark page-title-center include-header" style="padding: 120px 0 180px;">
			<img src="demos/restaurant/images/sections/food-menu.jpg" class="parallax-bg">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1 class="font-secondary text-capitalize ls-0" style="font-size: 74px;">Menu</h1>
						<span class="fw-normal">Choose Items from Our Menu</span>
					</div>

				</div>
			</div>
		</section><!-- .page-title end -->
        @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: url('demos/restaurant/images/footer-bg.jpg')  repeat center center / cover; background-size: auto 100%;; padding: 20px 0 22px">
			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent pb-4">
				<div class="container">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-md-auto text-center text-md-start">
							<span class="font-primary">&copy; Canvas Inc. 2021. All Rights Reserved.</span>
						</div>

						<div class="col-12 col-md-auto text-center text-md-end">
							<div class="copyrights-menu copyright-links">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

</body>
</html> 


