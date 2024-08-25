<html> 
        <head>

            <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <meta http-equiv="x-ua-compatible" content="IE=edge">
            <meta name="author" content="SemiColonWeb">
            <meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

            <!-- Font Imports -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

            <!-- Core Style -->
            <!-- <link rel="stylesheet" href="style.css"> -->
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> 

            <!-- Font Icons -->
            <!-- <link rel="stylesheet" href="css/font-icons.css"> -->
            <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}"> 

            <!-- Custom CSS -->
            <!-- <link rel="stylesheet" href="css/custom.css"> -->
            <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> 
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Document Title
            ============================================= -->
            <title>Login | Canvas</title>

        </head>


<body class="stretched">

        	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">


<!-- Top Bar
============================================= -->
<div id="top-bar">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
                ============================================= -->
                <div class="top-links on-click">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="index.html">Home</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="about.html">About</a></li>
                                <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                                <li class="top-links-item"><a href="contact.html">Contact</a></li>
                                <li class="top-links-item"><a href="sitemap.html">Sitemap</a></li>
                            </ul>
                        </li>
                        <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                        <li class="top-links-item"><a href="contact.html">Contact</a></li>
                        <li class="top-links-item"><a href="login-register.html">Login</a>
                            <div class="top-links-section">
                                <form id="top-login" autocomplete="off">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="email" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <div class="form-group form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="top-login-checkbox">
                                        <label class="form-check-label" for="top-login-checkbox">Remember Me</label>
                                    </div>
                                    <button class="btn btn-danger w-100" type="submit">Sign in</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Social
                ============================================= -->
                <ul id="top-social">
                    <li><a href="#" class="h-bg-facebook"><span class="ts-icon"><i class="fa-brands fa-facebook-f"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="#" class="h-bg-twitter"><span class="ts-icon"><i class="fa-brands fa-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                    <li class="d-none d-sm-flex"><a href="#" class="h-bg-dribbble"><span class="ts-icon"><i class="fa-brands fa-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
                    <li><a href="#" class="h-bg-github"><span class="ts-icon"><i class="fa-brands fa-github"></i></span><span class="ts-text">Github</span></a></li>
                    <li class="d-none d-sm-flex"><a href="#" class="h-bg-pinterest"><span class="ts-icon"><i class="fa-brands fa-pinterest-p"></i></span><span class="ts-text">Pinterest</span></a></li>
                    <li><a href="#" class="h-bg-instagram"><span class="ts-icon"><i class="fa-brands fa-instagram"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="tel:+1.11.85412542" class="h-bg-call"><span class="ts-icon"><i class="fa-solid fa-phone"></i></span><span class="ts-text">+1.11.85412542</span></a></li>
                    <li><a href="mailto:info@canvas.com" class="h-bg-email3"><span class="ts-icon"><i class="fa-solid fa-envelope"></i></span><span class="ts-text">info@canvas.com</span></a></li>
                </ul><!-- #top-social end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html">
								<!-- <img class="logo-default" srcset="images/logo.png, images/logo@2x.png 2x" src="assets/images/logo@2x.png" alt="Canvas Logo"> -->
                                <!-- <img class="logo-default" srcset="assets/images/logo.png, assets/images/logo@2x.png 2x" src="assets/images/logo@2x.png" alt="Canvas Logo"> -->
                                <img class="logo-default" srcset="{{ asset('assets/images/logo.png') }}, {{ asset('assets/images/logo@2x.png') }} 2x" src="{{ asset('assets/images/logo@2x.png') }}" alt="Canvas Logo">

								<!-- <img class="logo-dark" srcset="assets/images/logo-dark.png, assets/images/logo-dark@2x.png 2x" src="assets/images/logo-dark@2x.png" alt="Canvas Logo"> -->
                                <img class="logo-dark" srcset="{{ asset('assets/images/logo-dark.png') }}, {{ asset('assets/images/logo-dark@2x.png') }} 2x" src="{{ asset('assets/images/logo-dark@2x.png') }}" alt="Canvas Logo">

							</a>
						</div><!-- #logo end -->

						<div class="header-misc">
									<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								@if ( session()->has('user_id'))
								<li class="menu-item">
								<a class="menu-link" href="{{route('user.auth.signout')}}"><div>登出</div></a>
								</li>
								@else
								<li class="menu-item">
								<a class="menu-link" href="{{route('user.auth.login')}}"><div>登入</div></a>
								</li>
								<a class="menu-link" href="{{route('user.auth.signup')}}"><div>註冊</div></a>
								</li>
								@endif 
							</ul>

						</nav><!-- #primary-menu end -->


		</header><!-- #header end -->
        @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget">

										<!-- <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo"> -->
                                        <img src="{{asset('assets/images/footer-widget-logo.png') }}" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<!-- <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;"> -->
                                        <div style="background: url('{{asset('assets/images/world-map.png')}}') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
											<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
											<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="bi-envelope-plus"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-facebook me-2 mb-0 float-none">
													<i class="fa-brands fa-facebook-f"></i>
													<i class="fa-brands fa-facebook-f"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Like Us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-rss me-2 mb-0 float-none">
													<i class="fa-solid fa-rss"></i>
													<i class="fa-solid fa-rss"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end mb-2">
								<a href="#" class="social-icon border-transparent si-small h-bg-facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-twitter">
									<i class="fa-brands fa-twitter"></i>
									<i class="fa-brands fa-twitter"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-google">
									<i class="fa-brands fa-google"></i>
									<i class="fa-brands fa-google"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-pinterest">
									<i class="fa-brands fa-pinterest-p"></i>
									<i class="fa-brands fa-pinterest-p"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-vimeo">
									<i class="fa-brands fa-vimeo-v"></i>
									<i class="fa-brands fa-vimeo-v"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-github">
									<i class="fa-brands fa-github"></i>
									<i class="fa-brands fa-github"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-yahoo">
									<i class="fa-brands fa-yahoo"></i>
									<i class="fa-brands fa-yahoo"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
									<i class="fa-brands fa-linkedin"></i>
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="bi-skype"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->
    </div><!-- #wrapper end -->
</body>
</html> 


