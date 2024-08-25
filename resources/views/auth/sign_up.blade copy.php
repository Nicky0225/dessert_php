<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@extends('layout.nicky_master')

<body class="stretched">



@section('content') 
		<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">
					<div class="page-title-content">
						<h1>註冊頁面</h1>
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">首頁</a></li>
							<li class="breadcrumb-item"><a href="#">會員</a></li>
							<li class="breadcrumb-item active" aria-current="page">註冊頁面</li>
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

					<div>
					<div >

						<!-- <div class="form-result">
						@if( $errors and count($errors))
							<ul class="iconlist" data-username="envato" data-count="2">
							@foreach( $errors->all() as $err )
								<div class="alert text-center alert-danger">
								{{$err}} 
								</div>
							@endforeach
							</ul>
						@endif 
						</div>   已變成include套用-->

						@include('components.error') 
						<div class="row">
							<div class="col-lg-12">
								<form class="row" action="/user/auth/signup" method="post" enctype="multipart/form-data">
								<form action="/user/auth/signup" method="post" >
                                    @csrf
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-12 form-group">
										<label>暱稱:</label>
										<input type="text" name="nickname" id="nickname" class="form-control required" value="{{old('nickname')}}" placeholder="輸入名稱">
									</div>
									<div class="col-12 form-group">
										<label>email:</label>
										<input type="email" name="email" id="email" class="form-control required" value="{{old('email')}}" placeholder="輸入帳號">
									</div>
									<div class="col-12 form-group">
										<label>密碼:</label>
										<input type="password" name="password" id="password" class="form-control required" value="{{old('password')}}" placeholder="輸入密碼">
									</div>
									<div class="col-12 form-group">
										<label>帳號類型:</label><br>
										<div class="form-check form-check-inline">
											@if( old('type') == 'G' )
											<input class="form-check-input required" type="radio" name="type" id="type" value="G" checked>
											@else
											<input class="form-check-input required" type="radio" name="type" id="type" value="G">
											@endif
											<label class="form-check-label text-transform-none" for="type">一般會員</label>
										</div>
										<div class="form-check form-check-inline">
											@if( old('type') == 'A' )
											<input class="form-check-input" type="radio" name="type" id="type" value="A" checked >
											@else
											<input class="form-check-input" type="radio" name="type" id="type" value="A">
											@endif
											<label class="form-check-label text-transform-none" for="type">管理者</label>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-secondary">註冊</button>
									</div>
								</form>
							</div>
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

