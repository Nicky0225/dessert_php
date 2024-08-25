<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@extends('layout.login_master')

<body class="stretched">



@section('content')
		<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>My Account</h1>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Templates</a></li>
							<li class="breadcrumb-item active" aria-current="page">Login &amp; Register</li>
						</ol>
					</nav>

				</div>
			</div>
		</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row g-5">
						<div class="col-md-4">
							<div class="card mb-0 p-2">
								<div class="card-body p-4">

									<form id="login-form" name="login-form" class="row mb-0" action="#" method="post">
									
										<div class="col-12">
											<h3>Login to your Account</h3>
										</div>
										@csrf
										<div class="col-12 form-group">
											<label for="login-form-username">Username:</label>
											<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control">
										</div>

										<div class="col-12 form-group">
											<label for="login-form-password">Password:</label>
											<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control">
										</div>

										<div class="col-12 form-group">
											<div class="d-flex justify-content-between">
												<button class="btn btn-secondary m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												<a href="#">Forgot Password?</a>
											</div>
										</div>

									</form>
								</div>
							</div>

						</div>

						<div class="col-md-8">

							<h3>Don't have an Account? Register Now.</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

							<form id="register-form" name="register-form" class="row" action="#" method="post">
							@csrf
								<div class="col-6 form-group">
									<label for="register-form-name">Name:</label>
									<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control">
								</div>

								<div class="col-6 form-group">
									<label for="register-form-email">Email Address:</label>
									<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control">
								</div>

								<div class="w-100"></div>

								<div class="col-6 form-group">
									<label for="register-form-username">Choose a Username:</label>
									<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control">
								</div>

								<div class="col-6 form-group">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control">
								</div>

								<div class="w-100"></div>

								<div class="col-6 form-group">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control">
								</div>

								<div class="col-6 form-group">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control">
								</div>

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<button class="btn btn-dark m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
								</div>

							</form>

						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

@endsection

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<!-- <script src="js/functions.js"></script> -->
    <script src="{{ asset('assets/js/functions.js') }}" defer></script> 

</body>
</html>

