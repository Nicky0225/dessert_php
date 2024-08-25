<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@extends('layout.cafe_login_master')

<body class="stretched">



@section('content') 
	<!-- Document Title
	============================================= -->
	<title>Form Layout | Canvas</title>

	<style>
		.block-form-9 .form-control {
            --cnvs-input-btn-padding-x: 1rem;
            --cnvs-input-btn-padding-y: 0.875rem;
            --cnvs-input-btn-border-width: 1px;
            --cnvs-input-btn-border-color: var(--cnvs-contrast-1000);
			--cnvs-input-btn-input-color: var(--cnvs-contrast-1000);
			--cnvs-input-focus-color: var(--cnvs-input-btn-input-color);
            --cnvs-form-control-radius: 0.875rem;
		}

        .block-form-9 label {
            --cnvs-input-label-mb: 0.75rem;
        }

        .block-form-9 form .btn {
            --bs-btn-padding-y: 0.875rem;
            --bs-btn-border-radius: 0.875rem;
        }

        .block-form-9 .form-select {
            padding: 0.875rem 1rem;
            border-color: var(--cnvs-contrast-1000);
            border-radius: 0.875rem;
        }

	</style>

</head>

<body class="stretched block-form-9">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" style="background-color:#FFF4C1; opacity: 1;">

				<div class="container mw-lg">

					<div class="row justify-content-between g-3 gx-lg-6">
						<div class="col-md-6">
							<img src="{{ asset('assets/nicky/signup.png') }}" alt=".." class="w-100 h-100 object-cover" style="border-radius: 20px;">

						</div>
						<div class="col-md-6">
							<div class="card bg-contrast-0 border-0" style="border-radius: 20px;">
								<div class="card-body p-5">

									<div class="form-widget">

										<div class="form-result"></div>

										<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

											<div class="form-process">
												<div class="css3-spinner">
													<div class="css3-spinner-scaler"></div>
												</div>
											</div>

											<div class="row">
												<div class="col-12 mb-4 pb-2">
													<label for="template-contactform-name">暱稱:</label>
													<input type="text" id="template-contactform-name" name="nickname" value="{{old('nickname')}}" placeholder="幫自己取個名字" class="form-control required" placeholder="輸入名稱">
												</div>

												<div class="col-12 mb-4 pb-2">
													<label for="template-contactform-email">email:</label>
													<input type="email" id="template-contactform-email" name="email" value="{{old('email')}}" placeholder="請輸入信箱" class="required email form-control" placeholder="輸入信箱">
												</div>

												<div class="col-12 mb-4 pb-2">
													<label for="template-contactform-phone">密碼:</label>
													<input type="text" id="template-contactform-phone" name="password" value="{{old('password')}}" placeholder="請輸入密碼" class="form-control required" placeholder="輸入密碼">
												</div>

                                                <div class="col-12 mb-4 pb-2">
                                                    <label for="template-contactform-services">Services<small>*</small></label>
                                                    <div class="row row-cols-lg-2 flex-fill g-3">
                                                        <div>
                                                            <input type="checkbox" class="btn-check" id="template-contactform-services-web" autocomplete="off">
                                                            <label class="btn btn-outline-dark w-100 mb-0" for="template-contactform-services-web">Web Design</label>
                                                        </div>

                                                        <div>
                                                            <input type="checkbox" class="btn-check" id="template-contactform-services-app" autocomplete="off">
                                                            <label class="btn btn-outline-dark w-100 mb-0" for="template-contactform-services-app">App Development</label>
                                                        </div>

                                                        <div>
                                                            <input type="checkbox" class="btn-check" id="template-contactform-ecommerce" autocomplete="off">
                                                            <label class="btn btn-outline-dark w-100 mb-0" for="template-contactform-ecommerce">E-commerce</label>
                                                        </div>

                                                        <div>
                                                            <input type="checkbox" class="btn-check" id="template-contactform-seo" autocomplete="off">
                                                            <label class="btn btn-outline-dark w-100 mb-0" for="template-contactform-seo">SEO</label>
                                                        </div>

                                                        <div>
                                                            <input type="checkbox" class="btn-check" id="template-contactform-digital Marketing" autocomplete="off">
                                                            <label class="btn btn-outline-dark w-100 mb-0" for="template-contactform-digital Marketing">Digital Marketing</label>
                                                        </div>

                                                        <div>
                                                            <input type="checkbox" class="btn-check" id="template-contactform-branding" autocomplete="off">
                                                            <label class="btn btn-outline-dark w-100 mb-0" for="template-contactform-branding">Branding</label>
                                                        </div>
                                                    </div>
                                                </div>

												<div class="col-12 mb-4 pb-2">
                                                    <label for="template-contactform-budget">Budget<small>*</small></label>
                                                    <select id="template-contactform-budget" name="template-contactform-budget" class="form-select required">
                                                        <option value="" disabled selected>Select One</option>
                                                        <option value="Below 5K">Below 5k</option>
                                                        <option value="5k - 10K">5k - 10K</option>
                                                        <option value="10K - 20K">10K - 20K</option>
                                                        <option value="10K+">10K+</option>
                                                    </select>
                                                </div>

												<div class="col-12 mb-4 pb-2">
													<label for="template-contactform-message">Message<small>*</small></label>
													<textarea class="form-control required" id="template-contactform-message" name="template-contactform-message" placeholder="Write your message here..." rows="5" cols="30"></textarea>
												</div>

												<div class="col-12 mb-4 pb-2 d-none">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
												</div>

												<div class="col-12">
													<button class="button button-large button-dark rounded-6 m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Submit</button>
												</div>
											</div>

											<input type="hidden" name="prefix" value="template-contactform-">

										</form>
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

