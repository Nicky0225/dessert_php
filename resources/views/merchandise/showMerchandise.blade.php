@extends('layout.cafe_signin_master')

<!-- 傳遞資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳遞資料到母模板，並指定變數為 content -->
@section('content')
<!-- <div class="container">
    <h1>{{ $title }}</h1>

    {{-- 錯誤訊息模板元件 --}}
    @include('components.error')
    <table>
        <tr>
            <th>名稱</th>
            <td>{{ $Merchandise->name }}</td>
        </tr>
        <tr>
            <th>照片</th>
            <td>
                <img src="{{ asset($Merchandise->photo) }}" width='100' height='100'/>
            </td>
        </tr>
        <tr>
            <th>價格</th>
            <td>
                {{ $Merchandise->price }}
            </td>
        </tr>
        <tr>
            <th>剩餘數量</th>
            <td>
                {{ $Merchandise->remain_count }}
            </td>
        </tr>
        <tr>
            <th>介紹</th>
            <td>
                {{ $Merchandise->introduction }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="/merchandise/{{ $Merchandise->id }}/buy" method="post">
                    購買數量
                    <select name="buy_count">
                        @for($count = 0; $count <= $Merchandise->remain_count; $count++)
                            <option value="{{ $count }}">{{ $count }}</option>
                        @endfor
                    </select>
                    <button type="submit">
                        購買
                    </button>

                    @csrf    
                </form>

                <form action="/merchandise/{{ $Merchandise->id }}/cart" method="post">
                    購買數量
                    <select name="buy_count">
                        @for($count = 0; $count <= $Merchandise->remain_count; $count++)
                            <option value="{{ $count }}">{{ $count }}</option>
                        @endfor
                    </select>
                    <button type="submit">
                        加入購物車
                    </button>

                    @csrf    
                </form>
            </td>
        </tr>
    

    </table>

</div> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<style>
.container {
    padding-top: 8px; /* 讓內容區塊下移，避免被header擋住 */
}

.content-wrap {
    padding-top: 50px; /* 讓內容區塊下移，避免被header擋住 */
}

th, td {
    width: 150px; /* 根據需要調整這個寬度 */
    text-align: center; /* 讓文字在欄位內部居中 */
    padding: 10px; /* 設置適當的內距，讓內容看起來更整齊 */
}




    
</style>
		<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>{{ $Merchandise->name }}</h1>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('user.auth.home')}}">首頁</a></li>
							<li class="breadcrumb-item"><a href="{{route('merchandise')}}">產品</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $Merchandise->name }}</li>
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

					<div class="single-product">
						<div class="product">
							<div class="row gutter-40">

								<div class="col-md-6">

									<!-- Product Single - Gallery
									============================================= -->
									<div class="product-image">
										<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
											<div class="flexslider">
												<div class="slider-wrap" data-lightbox="gallery">
													<div class="slide" data-thumb="{{ asset($Merchandise->photo) }}"><a href="{{ asset($Merchandise->photo) }}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{ asset($Merchandise->photo) }}" alt="Pink Printed Dress"></a></div>
													<div class="slide" data-thumb="{{ asset($Merchandise->photo) }}"><a href="{{ asset($Merchandise->photo) }}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{ asset($Merchandise->photo) }}" alt="Pink Printed Dress"></a></div>
													<div class="slide" data-thumb="{{ asset($Merchandise->photo) }}"><a href="{{ asset($Merchandise->photo) }}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{ asset($Merchandise->photo) }}" alt="Pink Printed Dress"></a></div>
												</div>
											</div>
										</div>
										<!-- <div class="sale-flash badge bg-danger p-2">Sale!</div> -->
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col-md-6 product-desc">

									<div class="d-flex align-items-center justify-content-between">

										<!-- Product Single - Price
										============================================= -->
										<div class="product-price">${{ $Merchandise->price }}</div><!-- Product Single - Price End -->

										<!-- Product Single - Rating
										============================================= -->
										<div class="d-flex align-items-center">
											<div class="product-rating">
												<i class="bi-star-fill"></i>
												<i class="bi-star-fill"></i>
												<i class="bi-star-fill"></i>
												<i class="bi-star-half"></i>
												<i class="bi-star"></i>
											</div><!-- Product Single - Rating End -->
											<button type="button" class="btn btn-sm btn-secondary ms-3"><i class="bi-heart-fill"></i></button>
										</div>

									</div>

									<div class="line"></div>

									<!-- Product Single - Quantity & Cart Button
									============================================= -->
									<form class="cart mb-0 d-flex justify-content-between align-items-center"action="/merchandise/{{ $Merchandise->id }}/cart" method="post" enctype='multipart/form-data'>
                                        @csrf 
                                        <div class="quantity">
											<input type="button" value="-" class="minus">
											<input  name="buy_count" type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty">
											<input type="button" value="+" class="plus">
                                            
                                            
										</div>
										<button type="submit" class="add-to-cart button m-0">加入購物車</button>
									</form>

                                    <!-- @if(session('message'))
                                        <script>
                                            window.onload = function() {
                                                alert('{{ session('message') }}');
                                            };
                                        </script>
                                    @endif -->

									@if(session('message'))
										<script>
											window.onload = function() {
												var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
												messageModal.show();
											};
										</script>
									@endif


											<!-- 模態框 -->
									<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="messageModalLabel">訊息</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													{{ session('message') }}
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
												</div>
											</div>
										</div>
									</div>


<!-- 
									@if ($errors->has('error'))
										<div class="alert alert-danger">
											{{ $errors->first('error') }}
										</div>
									@endif -->


									<!-- @if ($errors->any())
										<script>
											alert('{{ $errors->first() }}');
										</script>
									@endif -->



									@if ($errors->any())
										<script>
											window.onload = function() {
												var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
												errorModal.show();
											};
										</script>
									@endif

									<!-- 模態框 -->
									<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="errorModalLabel">錯誤訊息</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													{{ $errors->first() }}
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
												</div>
											</div>
										</div>
									</div>







                                    <p>剩餘數量：{{ $Merchandise->remain_count }}</p>

									<div class="line"></div>

									<!-- Product Single - Short Description
									============================================= -->
									<p>{{ $Merchandise->introduction }}</p>



									<!-- Product Single - Share
									============================================= -->
									<div class="card mt-6 pt-4 border-0 border-top rounded-0 border-default">
										<div class="card-body p-0">
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="fs-6 fw-semibold mb-0">Share:</h6>
												<div class="d-flex">
													<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
														<i class="fa-brands fa-facebook-f"></i>
														<i class="fa-brands fa-facebook-f"></i>
													</a>

													<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
														<i class="fa-brands fa-twitter"></i>
														<i class="fa-brands fa-twitter"></i>
													</a>

													<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
														<i class="fa-brands fa-pinterest-p"></i>
														<i class="fa-brands fa-pinterest-p"></i>
													</a>

													<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
														<i class="fa-brands fa-whatsapp"></i>
														<i class="fa-brands fa-whatsapp"></i>
													</a>

													<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
														<i class="fa-solid fa-rss"></i>
														<i class="fa-solid fa-rss"></i>
													</a>

													<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
														<i class="fa-solid fa-envelope"></i>
														<i class="fa-solid fa-envelope"></i>
													</a>
												</div>
											</div>
										</div>
									</div><!-- Product Single - Share End -->

								</div>



			

					



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
	<script src="{{asset('assets/js/functions.js')}}"></script>

