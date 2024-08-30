<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@extends('layout.cafe_signin_master')

<body class="stretched">




@section('content') 
	<!-- Document Title
	============================================= -->
	<title>Form Layout | Canvas</title>

	<style>
		.block-form-8 .form-control {
			--cnvs-input-btn-input-bg: var(--cnvs-contrast-200);
			--cnvs-input-btn-input-color: var(--cnvs-contrast-1000);
			--cnvs-input-focus-color: var(--cnvs-input-btn-input-color);
		}

        .block-form-8 .form-select {
            background-color: var(--cnvs-contrast-200);
        }

		.content-wrap {
			padding-top: 40px; /* 讓內容區塊下移，避免被header擋住 */
		}


	</style>

</head>

<body class="stretched block-form-8">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" style="background: linear-gradient(to bottom, #f9f5f2 640px, var(--cnvs-contrast-0) 640px);">

				<img src="{{ asset('assets/nicky/signup5.png') }}" alt=".." class="position-absolute top-0 start-0 op-01 w-100">


                <div class="w-100 h-100 position-absolute top-0 left-0" style="background: linear-gradient(to bottom, transparent 640px, var(--cnvs-contrast-0) 640px);"></div>

				<div class="container mw-lg">

					<div class="row justify-content-between col-mb-30">
						<div class="col-lg-5">
							<h2 class="mb-3 fs-1">帳 號 註 冊</h2>
                            <p class="text-larger">新會員凡至門市購買商品，首次購買享九折優惠</p>
							<p class="text-larger">限量月餅禮盒上市囉~可提前預約選購~數量有限~歡迎提前預訂~</p>

                            <!-- <div class="clear mb-5"></div>

                            <p class="d-flex mb-3"><i class="me-3 mt-1 bi-telephone-fill"></i> <a href="#" class="text-larger text-contrast-1000 fw-medium">(904) 529-8955</a></p>
                            <p class="d-flex mb-3"><i class="me-3 mt-1 bi-envelope-paper-fill"></i> <a href="#" class="text-larger text-contrast-1000 fw-medium">noreply@semicolonweb.com</a></p>
                            <p class="d-flex mb-4"><i class="me-3 mt-1 bi-geo-alt-fill"></i> <a href="#" class="text-larger text-contrast-1000 fw-medium">659 Leonard C Taylor Pkwy<br>Green Cove, Florida 32043</a></p>

                            <div class="clear mb-6"></div> -->

                            <h3 class="mb-3 fs-2">官 方 社 群</h3>
                            <a href="#" class="social-icon border-transparent bg-light h-bg-facebook" title="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a href="#" class="social-icon border-transparent bg-light h-bg-twitter" title="Twitter">
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-twitter"></i>
                            </a>

                            <a href="#" class="social-icon border-transparent bg-light h-bg-instagram" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </a>
						</div>
						<div class="col-lg-6">
							<div class="card bg-contrast-0 rounded-6 border-0 shadow">
								<div class="card-body p-5">

									<!-- <div class="form-widget"> -->

										<!-- <div class="form-result"></div> -->
										@include('components.error')

										<form class="row" action="/user/auth/signup" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-process">
												<div class="css3-spinner">
													<div class="css3-spinner-scaler"></div>
												</div>
											</div>

											<div class="row">
												<div class="col-12 form-group">
													<label for="template-contactform-name">暱稱：</label>
													<input type="text" id="template-contactform-name" name="nickname" value="{{old('nickname')}}" placeholder="幫自己取個名字" class="form-control required" >
												</div>

												<div class="col-12 form-group">
													<label for="template-contactform-email">Email：</label>
													<input type="email" id="template-contactform-email" name="email" value="{{old('email')}}" placeholder="請輸入信箱" class="form-control required">
												</div>

												<div class="col-12 form-group">
													<label for="template-contactform-password">設定密碼：</label>
													<input type="password" id="template-contactform-password" name="password" value="{{old('password')}}" placeholder="請設定密碼" class="form-control required" >
												</div>

												<div class="col-12 form-group">
													<!-- <label>帳號類型：</label><br> -->
													<div class="form-check form-check-inline">
														@if( old('type') == 'G' )
														<input class="form-check-input required" type="radio" name="type" id="type" value="G" checked>
														@else
														<input class="form-check-input required" type="radio" name="type" id="type" value="G">
														@endif
														<label class="form-check-label text-transform-none" for="type">願意遵守會員約定</label>
													</div>
													<!-- <div class="form-check form-check-inline">
														@if( old('type') == 'A' )
														<input class="form-check-input" type="radio" name="type" id="type" value="A" checked >
														@else
														<input class="form-check-input" type="radio" name="type" id="type" value="A">
														@endif
														<label class="form-check-label text-transform-none" for="type">管理者</label>
													</div> -->
												</div>

												<!-- <div class="col-12 form-group">
													<label for="template-contactform-company">Company</label>
													<input type="text" id="template-contactform-company" name="company" value="" class="form-control">
												</div> -->

                                                <!-- <div class="col-12 form-group">
                                                    <label for="template-contactform-subject">Subjects</label>
                                                    <select id="template-contactform-subject" name="template-contactform-subject" class="form-select">
                                                        <option value="" disabled selected>Select One</option>
                                                        <option value="Wordpress">Wordpress</option>
                                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                                        <option value="Graphic Design">Graphic Design</option>
                                                    </select>
                                                </div> -->

												<div class="w-100"></div>

												<!-- <div class="col-12 form-group">
													<label for="template-contactform-message">Message</label>
													<textarea class="form-control" id="template-contactform-message" name="template-contactform-message" rows="5" cols="30"></textarea>
												</div> -->

												<!-- <div class="col-12 form-group d-none">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
												</div> -->

												<div class="col-12">
													<button class="button button-large button-dark rounded m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">註冊</button>
												</div>
											</div>

											<input type="hidden" name="prefix" value="template-contactform-">

										</form>

										@if(session('message'))
											<script>
												window.onload = function() {
													alert('{{ session('message') }}');
												};
											</script>
										@endif

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

