


@extends('layout.cafe_signin_master')


@section('content')
<!-- <div class="container">
    <h1>{{ $title }}</h1>

   
    @include('components.error')

    <table>
        <tr>
            <th>名稱</th>
            <th>照片</th>
            <th>價格</th>
            <th>剩餘數量</th>
        </tr>
        @foreach($MerchandisePaginate as $Merchandise)
        <tr>
            <td>
                <a href="/merchandise/{{ $Merchandise->id }}">
                    {{ $Merchandise->name }}
                </a>
            </td>
            <td>
                <a href="/merchandise/{{ $Merchandise->id }}">
                <img src="{{ asset($Merchandise->photo) }}" width='100' height='100'/>
                </a>
            </td>
            <td> {{ $Merchandise->price }}</td>
            <td> {{ $Merchandise->remain_count }}</td>
        </tr>
        @endforeach

    </table>



</div> -->


	<!-- Page Title -->
	<section class="page-title page-title-parallax parallax dark page-title-center include-header" style="padding: 120px 0 180px;">
		<video autoplay loop muted playsinline class="parallax-bg">
			<source src="{{asset('assets/nicky/dessert.mp4')}}" type="video/mp4">
			
		</video>

		<div class="container">
			<div class="page-title-row">
				<div class="page-title-content">
					<h1 class="font-secondary text-capitalize ls-0" style="font-size: 74px;"></h1>
					<span class="fw-normal"></span>
				</div>
			</div>
		</div>
	</section><!-- .page-title end -->

	<!-- Content -->
	<section id="content">
		<div class="content-wrap py-0" style="overflow: visible;">
			<div class="container">
				<div id="tab-restuarant">

					<!-- Tabs Navigation -->
					<ul class="nav canvas-alt-tabs2 tabs nav-pills nav-fill mb-5" id="canvas-tab-nav2" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="canvas-tabs-breakfast-tab" data-bs-toggle="pill" data-bs-target="#tabs-breakfast"
								type="button" role="tab" aria-controls="canvas-tabs-breakfast" aria-selected="true"><img src="{{asset('assets/nicky/breads.png')}}" alt="Image" width="20" height="20"> Breads</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="canvas-tabs-salad-tab" data-bs-toggle="pill" data-bs-target="#tabs-salad"
								type="button" role="tab" aria-controls="canvas-tabs-salad" aria-selected="false"><img src="{{asset('assets/nicky/cake.png')}}" alt="Image" width="20" height="20"> Cakes</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="canvas-tabs-pizza-tab" data-bs-toggle="pill" data-bs-target="#tabs-pizza"
								type="button" role="tab" aria-controls="canvas-tabs-pizza" aria-selected="false"><img src="{{asset('assets/nicky/coffee-cup.png')}}" alt="Image" width="20" height="20"> Beverage</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="canvas-tabs-dessert-tab" data-bs-toggle="pill" data-bs-target="#tabs-dessert"
								type="button" role="tab" aria-controls="canvas-tabs-dessert" aria-selected="false"><img src="{{asset('assets/nicky/gift-box.png')}}" alt="Image" width="20" height="20"> Gift</button>
						</li>
					</ul>

					<!-- bread Content -->
					<div id="canvas-tab-alt-content" class="tab-content mt-4">
						<!-- Bread Tab -->
						<div class="tab-pane fade show active" id="tabs-breakfast" role="tabpanel" aria-labelledby="canvas-tabs-breakfast-tab" tabindex="0">
							<div class="row gutter-40">
							@foreach($MerchandisePaginate->where('kind', 'bread') as $merchandise_bread)
							<div class="col-lg-3 col-md-6">
								<div class="portfolio-item">
									<a href="/merchandise/{{ $merchandise_bread->id }}" class="portfolio-image">
										<img src="{{ asset($merchandise_bread->photo) }}" alt="{{ $merchandise_bread->name }}" class="rounded" width="100" height="100">
									</a>
									<div class="portfolio-desc pt-2">
										<h4 class="mb-1">
											<a href="/merchandise/{{ $merchandise_bread->id }}">{{ $merchandise_bread->name }}</a>
										</h4>
										<div class="item-price">&dollar; {{ $merchandise_bread->price }}</div>
										<div>剩餘數量: {{ $merchandise_bread->remain_count }}</div>
							
									</div>
								</div>
							</div>
							@endforeach

							</div>
						</div>

						<!-- dessert Tab -->
						<div class="tab-pane fade" id="tabs-salad" role="tabpanel" aria-labelledby="canvas-tabs-salad-tab" tabindex="0">
							<div class="row gutter-40">
							@foreach($MerchandisePaginate->where('kind', 'dessert') as $merchandise_dessert)
							<div class="col-lg-3 col-md-6">
								<div class="portfolio-item">
									<a href="/merchandise/{{ $merchandise_dessert->id }}" class="portfolio-image">
										<img src="{{ asset($merchandise_dessert->photo) }}" alt="{{ $merchandise_dessert->name }}" class="rounded" width="100" height="100">
									</a>
									<div class="portfolio-desc pt-2">
										<h4 class="mb-1">
											<a href="/merchandise/{{ $merchandise_dessert->id }}">{{ $merchandise_dessert->name }}</a>
										</h4>
										<div class="item-price">&dollar; {{ $merchandise_dessert->price }}</div>
										<div>剩餘數量: {{ $merchandise_dessert->remain_count }}</div>
									</div>
								</div>
							</div>
							@endforeach

							</div>
						</div>

						<!-- drink Tab -->
						<div class="tab-pane fade" id="tabs-pizza" role="tabpanel" aria-labelledby="canvas-tabs-pizza-tab" tabindex="0">
							<div class="row gutter-40">
							@foreach($MerchandisePaginate->where('kind', 'drink') as $merchandise_drink)
							<div class="col-lg-3 col-md-6">
								<div class="portfolio-item">
									<a href="/merchandise/{{ $merchandise_drink->id }}" class="portfolio-image">
										<img src="{{ asset($merchandise_drink->photo) }}" alt="{{ $merchandise_drink->name }}" class="rounded" width="100" height="100">
									</a>
									<div class="portfolio-desc pt-2">
										<h4 class="mb-1">
											<a href="/merchandise/{{ $merchandise_drink->id }}">{{ $merchandise_drink->name }}</a>
										</h4>
										<div class="item-price">&dollar; {{ $merchandise_drink->price }}</div>
										<div>剩餘數量: {{ $merchandise_drink->remain_count }}</div>
									</div>
								</div>
							</div>
							@endforeach

							</div>
						</div>

						<!-- free Tab -->
						<div class="tab-pane fade" id="tabs-dessert" role="tabpanel" aria-labelledby="canvas-tabs-dessert-tab" tabindex="0">
							<div class="row gutter-40">
							@foreach($MerchandisePaginate->where('kind', 'free') as $merchandise_free)
							<div class="col-lg-3 col-md-6">
								<div class="portfolio-item">
									<a href="/merchandise/{{ $merchandise_free->id }}" class="portfolio-image">
										<img src="{{ asset($merchandise_free->photo) }}" alt="{{ $merchandise_free->name }}" class="rounded" width="100" height="100">
									</a>
									<div class="portfolio-desc pt-2">
										<h4 class="mb-1">
											<a href="/merchandise/{{ $merchandise_free->id }}">{{ $merchandise_free->name }}</a>
										</h4>
										<div class="item-price">&dollar; {{ $merchandise_free->price }}</div>
										<div>剩餘數量: {{ $merchandise_free->remain_count }}</div>
									</div>
								</div>
							</div>
							@endforeach

							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="section mb-0 mt-3" style="padding: 80px 0; background: #F5F5F5 url('demos/restaurant/images/food-pattern.png') repeat center center;">
				<div class="container">
					<div class="heading-block border-bottom-0 text-center mb-4">
						<span class="font-primary ls-1 color">Steps of Order</span>
						<h3 class="text-transform-none font-secondary ls-0" style="font-size: 52px; line-height: 1.3;">How do you Get your Food</h3>
					</div>

					<div class="clear"></div>

					<div class="row mt-5 g-5">
						<div class="col-lg-4 col-sm-6">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 60px; height: 60px">
									<img src="{{asset('assets/nicky/location.png')}}" alt="Image" width="20" height="20">
								</div>
								<div class="fbox-content px-0">
									<h3>1. 選擇您的地址</h3>
									<p>所有產品皆沒有添加防腐劑，皆是當天製作，當天就會出貨喔!</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 60px; height: 60px">
									<img src="{{asset('assets/nicky/click.png')}}" alt="Image" width="20" height="20">
								</div>
								<div class="fbox-content px-0">
									<h3>2. 選擇想要的產品</h3>
									<p>選購之前可先看看有沒有優惠活動再購買喔~</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 75px; height: 60px">
									<img src="{{asset('assets/nicky/delivery-man.png')}}" alt="Image" width="20" height="20">
								</div>
								<div class="fbox-content px-0">
									<h3>3. 派專人送至您手上</h3>
									<p>收到產品記得在三天內吃完喔~當天沒吃完記得冰進冰箱</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section m-0 bg-transparent" style="padding: 80px 0 70px;">
				<div class="container">
					<div class="mx-auto d-flex justify-content-center text-center" style="max-width: 900px;">
						<h3 class="mb-0 ls-0">立即選購享優惠!<a href="#" class="button button-circle button-xlarge button-light text-white ls-0 text-transform-none mt-0 mb-1 ms-3" style="position: relative;"><span>馬上選購</span> <i class="bi-arrow-right fw-semibold"></i></a></h3>
					</div>
				</div>
			</div>

		</div>

		<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('demos/restaurant/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
	</section><!-- #content end -->







@endsection

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="bi-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('assets/js/functions.js')}}"></script>