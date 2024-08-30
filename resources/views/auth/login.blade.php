<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@extends('layout.cafe_signin_master')


<style>
#login-form-submit {
    width: 400px; /* 或者你想要的其他寬度，例如 100px，來適應你的設計 */
    display: block;
    margin: 0 auto; /* 確保按鈕在容器中水平居中 */
	background-color: #BF9456; 
	color: #ffffff; /* 設置按鈕文字的顏色為白色 */
    border-color: #BF9456; /* 如果按鈕有邊框，也可以設定邊框顏色 */
}

.form-group a {
    color: #272727; /* 將顏色改為你想要的顏色 */
    text-decoration: none; /* 去除下劃線，如果你不希望有下劃線 */
}

.form-group a:hover {
    color: #BF9456; /* 當鼠標懸停在連結上時變成的顏色 */
    text-decoration: underline; /* 懸停時顯示下劃線，如果你希望有這個效果 */
}

.vertical-middle {
    padding-top: 24px; /* 讓內容區塊下移，避免被header擋住 */
}


</style>


@section('content')


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

			<div class="section p-0 m-0 h-100 position-absolute" style="background: url({{ asset('assets/nicky/login2.png') }}) center center no-repeat; background-size: cover;"></div>


				<div class="section bg-transparent min-vh-100 p-0 m-0">
					<div class="vertical-middle">
						<div class="container-fluid py-5 mx-auto">

							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
								<div class="card-body" style="padding: 40px;">
									<form id="login-form" name="login-form" class="mb-0" action="#" method="post">
									@include('components.error')
										<h3>會 員 登 入</h3> 
										
										@csrf
										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-username">帳號:</label>
												<input type="text" id="email" name="email" value="" class="form-control" placeholder="請輸入信箱" required title="信箱必填">
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">密碼:</label>
												<input type="password" id="password" name="password" value="" class="form-control" placeholder="請輸入密碼" required title="密碼必填">
											</div>
											<br>
											<div class="col-12 form-group">
												<div class="d-flex justify-content-center">
													<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>	
												</div>													
											</div>

											<div class="col-12 form-group">
												<div class="d-flex justify-content-between">
												<a href="{{route('user.auth.forgetpassword')}}">忘記密碼?</a>
												
												<a href="{{route('user.auth.signup')}}">會員註冊</a>
												</div>
											</div>
										</div>
									</form>

									<hr>

									<!-- <div class="line line-sm"></div> -->

									<div class="w-100 text-center">
										<h4 class="mb-3">快速登入</h4>
										<a href="#" class="button button-rounded bg-white" style='color:black'><img src="{{ asset('assets/nicky/google.png') }}" alt="Gmail Login Icon" style='height:20px' >&nbsp;&nbsp;Login with Gmail</a>

										
										<!-- <span class="d-none d-md-inline-block">or</span> -->
										<!-- <a href="#" class="button button-rounded" style="background-color: #00c300; color: #ffffff; border-color: #00c300;">LINE</a> -->

									</div>
								</div>
							</div>

							
						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

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

