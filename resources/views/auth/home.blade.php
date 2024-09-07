<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<meta name="cf-2fa-verify" content="d8397308aa57aee">

@extends('layout.cafe_master')

<body class="stretched">



<style>
.content-wrap{
    margin-top: 150px; /* 讓內容區塊下移，避免被header擋住 */
}




</style>



@section('content')

<!-- Content
============================================= -->
<section id="content" style="border-top: 5px solid #bf9456">

	<div class="content-wrap py-0">

							<!-- 關於我們
				============================================= -->
				<div id="about" class="section m-0 bg-transparent page-section" style="padding: 70px 0">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12 d-none d-md-block">
								<img src="{{asset('assets/nicky/home8.png')}}"  height="360" alt="Image">
							</div>
							<div class="col-md-6 col-12 text-center" style="padding: 0 50px;">
								<img src="{{asset('assets/nicky/fork.png')}}" alt="Image" height="60" style="margin-bottom: 20px">
								<div class="heading-block mb-4">
									<h2>關於我們</h2>
								</div>
								<p>
								Nicky cafe是一家以溫馨與幸福感為核心的甜點店，我們致力於以天然食材製作無人工添加的精緻甜點，每一口都蘊含著細膩的口感與濃郁的風味。店內裝潢融合現代與可愛元素，以橙色和紅色為主調，營造出溫暖且舒適的氛圍，是與朋友共度下午茶或獨自放鬆的理想場所。我們還提供專屬訂製服務，無論是慶祝特別日子或日常小確幸，都能讓Nicky cafe的甜點成為您生活中的甜美回憶。</p>
							</div>
						</div>
					</div>
				</div>



						<!-- 最新消息
				============================================= -->
				<div id="news" class="section bg-transparent mb-0 mt-4">

					<div class="container">

						<div class="heading-block text-center">
							<img src="{{asset('assets/nicky/strawberry-cake.png')}}" alt="Image" height="50" style="margin-bottom: 20px">
							<h3 class="ls-2">最新消息</h3>
							
						</div>

						<div class="row g-5 mb-5">
							<!-- Team 1
							============================================= -->
							<div class="col-md-4">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('assets/nicky/中秋節2.png')}}"alt="John Doe">
										<div class="bg-overlay">
											<div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">

											<button class="button button-large button-color m-0 w-100 text-center text-uppercase ls-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-hover-animate="fadeInDown">活動介紹</button>

											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
										</div>
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>中秋節活動</h4><span>113-7-1~113-9-20</span></div>
									</div>
								</div>
							</div>

							<!-- Team 2
							============================================= -->
							<div class="col-md-4">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('assets/nicky/周年慶.png')}}"alt="John Doe">
										<div class="bg-overlay">
											<div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">

											<button class="button button-large button-color m-0 w-100 text-center text-uppercase ls-1" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-hover-animate="fadeInDown">活動介紹</button>

											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
										</div>
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>周年慶活動</h4><span>113-9-1~113-10-2</span></div>
									</div>
								</div>
							</div>
							<!-- Team 3
							============================================= -->
							<div class="col-md-4">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('assets/nicky/聖誕節.png')}}"alt="John Doe">
										<div class="bg-overlay">
											<div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">

											<button class="button button-large button-color m-0 w-100 text-center text-uppercase ls-1" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-hover-animate="fadeInDown">活動介紹</button>

											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
										</div>
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>聖誕節活動</h4><span>113-11-1~113-12-31</span></div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

				<!-- Service Page Section
				============================================= -->
				<div id="location" class="section page-section bg-transparent p-0 mt-0">

					<div class="row align-items-stretch mb-5">

						<!-- Service Image
						============================================= -->
						<div class="col-lg-6 text-center col-padding parallax">
							<img src="{{asset('assets/nicky/店內照片.png')}}" class="parallax-bg">

						</div>

						<!-- Service Featured Boxes
						============================================= -->
						<div class="col-lg-6 col-padding" style="background-color: #F9F9F9">
							<div>
								<div class="row g-5 py-4">
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{asset('assets/nicky/store.png')}}" alt="Image"></a>
											</div>
											<div class="fbox-content">
												<h3>台南旗艦店</h3>
												<p>電話：06-1234567</p>
												<p>地址：台南市東區123號</p>
												<p>email：Tainan123@gmail.com</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{asset('assets/nicky/cake_1.png')}}"  alt="Image"></a>
											</div>
											<div class="fbox-content">
											<h3>台北旗艦店</h3>
												<p>電話：02-1234567</p>
												<p>地址：台北市東區123號</p>
												<p>email：Taipei123@gmail.com</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{asset('assets/nicky/bread.png')}}"  alt="Image"></a>
											</div>
											<div class="fbox-content">
											<h3>新竹旗艦店</h3>
												<p>電話：03-1234567</p>
												<p>地址：新竹市東區123號</p>
												<p>email：Hsinchu123@gmail.com</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{asset('assets/nicky/gift_1.png')}}"  alt="Image"></a>
											</div>
											<div class="fbox-content">
											<h3>高雄旗艦店</h3>
												<p>電話：07-1234567</p>
												<p>地址：高雄市東區123號</p>
												<p>email：Kaohsiung123@gmail.com</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{asset('assets/nicky/bake.png')}}"  alt="Image"></a>
											</div>
											<div class="fbox-content">
											<h3>台中旗艦店</h3>
												<p>電話：04-1234567</p>
												<p>地址：台中市東區123號</p>
												<p>email：Taichung123@gmail.com</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>


				</div>

				

			
			

	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">中秋節活動</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<p>1. 來店選購中秋月餅，享優惠，還可參加賞月燈籠DIY活動 !</p>
				<p>2. 中秋團圓賞月，限量月餅買一送一，送禮自用兩相宜 !</p>
				<p>3. 中秋購物滿額贈精美燈籠，讓您的團圓夜更加溫馨 !</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					<a href="{{route('merchandise')}}" >
					<button type="button" class="btn btn-primary">現在就參加</button>
					</a>
				</div>
			</div>
		</div>
	</div>


		<!-- Modal2 -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">周年慶活動</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<p>1. 甜點周年慶，全場甜點買一送一，限量精緻蛋糕免費品嚐！</p>
				<p>2. 甜點店周年慶，購買滿額送迷你蛋糕，享受更多甜蜜時刻！</p>
				<p>3. 周年慶期間，來店購買甜點滿千贈精美甜點禮盒，甜蜜加倍！</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					<a href="{{route('merchandise')}}" >
					<button type="button" class="btn btn-primary">現在就參加</button>
					</a>
				</div>
			</div>
		</div>
	</div>

			<!-- Modal3 -->
			<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">聖誕節活動</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<p>1. 聖誕節限量商品大優惠，來店即享驚喜折扣，讓節日更添歡樂！</p>
				<p>2. 聖誕購物滿額贈精美禮物包裝，為您的禮物增添節日驚喜！</p>
				<p>3. 聖誕節特賣，全店商品7折起，聖誕老人等你來領禮物！</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					<a href="{{route('merchandise')}}" >
					<button type="button" class="btn btn-primary">現在就參加</button>
					</a>
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

