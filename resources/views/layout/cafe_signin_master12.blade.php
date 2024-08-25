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
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&family=PT+Sans:wght@400;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/one-page/css/et-line.css')}}">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="{{asset('assets/demos/barber/barber.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Barber | Canvas</title>

	<style>
		/* Page Loading Style */
		.css3-spinner {height:100vh; -webkit-box-align:center; -ms-flex-align:center; align-items:center; display:-webkit-box; display:-ms-flexbox; display:flex; -webkit-box-pack:center; -ms-flex-pack:center; justify-content:center; background-color: #bF9456; } @keyframes pulse {0% {opacity: 0; -webkit-transform: scale3d(.8, .8, .8); transform: scale3d(.8, .8, .8); } 50% { opacity: 1; } } .infinite.animated.pulse { -webkit-animation-duration: 1.7s; animation-duration: 1.7s; }

		
		/* 左上角圖標點選顏色 */
		.slider-social .h-bg-cart4:hover {
			background-color: 	#FFA042 !important; 
		}

		.slider-social .h-bg-search:hover {
			background-color: 	#EAC100 !important; 
		}

		.slider-social .h-bg-chat-dots:hover {
			background-color: 	#FFA042 !important; 
		}

		.social-icon .h-bg-vimeo{
			background-color: 	#FF2D2D !important;

		}

		
	</style>

</head>

<body class="stretched page-transition" data-loader-html="<img class='infinite animated pulse' src='{{ asset('assets/demos/barber/images/slider-logo.svg') }}' width='300'>">


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark header-size-md" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="60" data-responsive-class="not-dark" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container px-0">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html">
							<img class="logo-default" 
								srcset="{{ asset('assets/nicky/black_logo.png') }}, {{ asset('assets/nicky/black_logo.png') }} 2x" 
								src="{{ asset('assets/nicky/black_logo.png') }}" 
								alt="Canvas Logo"
								style="width: 125px; height: auto;">

							</a>
						</div><!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation 頁面往下滑，會跑出的上方橫軸
						============================================= -->
						<nav class="primary-menu text-lg-center">

							<ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1300" data-offset="60">
								<li class="menu-item active"><a class="menu-link" href="#" data-href="#wrapper">關於我們</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-offset="56" data-href="#service">最新消息</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#price">麵包</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#shop">甜點</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#testimonial">飲品</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#contact">餐盒自由配</a></li>

								<li class="menu-item border-0">
									<a href="{{route('user.auth.signout')}}"  class="button button-color reverse text-uppercase ls-1 w-100 m-0 text-center text-uppercase ls-1"><i class="bi bi-person-fill fs-6"></i> 登出</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider 首頁最上面的背景圖和logo
		============================================= -->
		<section id="slider" class="slider-element slider-parallax page-section min-vh-60 min-vh-md-100 include-header">
			<div class="slider-inner" style="background: url({{ asset('assets/nicky/home7.png') }}) center center no-repeat; background-size: cover;">
			


				<div class="vertical-middle">
					<div class="text-center py-5 py-md-0">
						<img src="{{asset('assets/nicky/white_logo.png')}}" alt="Logo" height="360">

						<!-- Slider Navigation 首頁中間的橫軸選單
						============================================= -->
						<nav class="custom-hero-nav">
							<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1300" data-offset="60">
								<li class="active"><a href="#" data-href="#slider">關於我們</a></li>
								<li><a href="#" data-offset="56" data-href="#service">最新消息</a></li>
								<li><a href="#" data-href="#price">麵包</a></li>
								<li><a href="#" data-href="#shop">甜點</a></li>
								<li><a href="#" data-href="#testimonial">飲品</a></li>
								<li><a href="#" data-href="#contact">餐盒自由配</a></li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="video-wrap">
					<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
				</div>

				<!-- 首頁右上角的會員登出的按鈕
				============================================= -->
				<a href="{{route('user.auth.signout')}}" class="button button-large button-color button-appointment d-none d-lg-block text-uppercase ls-1"><i class="bi bi-person-fill fs-6"></i> 登 出</a>

				<!-- 左上角圖標 Icons
				============================================= -->
				<div class="slider-social d-none d-lg-block">
					<a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-small border-0 h-bg-cart4">
						<i class="bi bi-cart4" style="font-size: 1.25rem;"></i>
						<i class="bi bi-cart4" style="font-size: 1.25rem;"></i>
					</a>
					<a href="https://twitter.com/__semicolon" target="_blank" class="social-icon si-small border-0 h-bg-search">
					<i class="bi bi-search" style="font-size: 1.25rem;"></i>
					<i class="bi bi-search" style="font-size: 1.25rem;"></i>
					</a>
					<a href="https://instagram.com/semicolonweb" target="_blank" class="social-icon si-small border-0 h-bg-chat-dots">
						<i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
						<i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
					</a>
				</div>

			</div>
		</section>
        @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #121212; padding: 60px 0">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap text-center">

					<img src="{{asset('assets/nicky/white_logo.png')}}" width="300" alt="Image">

					<div class="mt-6">
						<a href="#" class="social-icon si-small rounded-circle text-light text-opacity-50 border-0 inline-block h-bg-facebook">
							<i class="fa-brands fa-facebook-f"></i>
							<i class="fa-brands fa-facebook-f"></i>
						</a>

						<a href="#" class="social-icon si-small rounded-circle text-light text-opacity-50 border-0 inline-block h-bg-instagram">
							<i class="bi-instagram"></i>
							<i class="bi-instagram"></i>
						</a>

						<a href="#" class="social-icon si-small rounded-circle text-light text-opacity-50 border-0 inline-block h-bg-youtube">
							<i class="bi bi-youtube"></i>
							<i class="bi bi-youtube"></i>
						</a>


					</div>

					<div class="text-uppercase ls-3" style="color: #333; margin-top: 10px">&copy; NICKY café Inc. 2024. All Rights Reserved.</div>

				</div>

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

</body>
</html> 


