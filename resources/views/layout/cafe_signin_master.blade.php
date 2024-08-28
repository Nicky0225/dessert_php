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
	<title>Nicky Cafe</title>


	<style>
.primary-menu {
    display: flex;
    justify-content: space-between; /* 兩端對齊 */
    align-items: center; /* 垂直方向居中 */
    padding: 10px 20px; /* 設定上下和左右的間距 */
    background-color: #fff; /* 背景顏色設置為白色 */
    border-bottom: 1px solid #ddd; /* 下方邊框 */
    position: fixed; /* 固定在頁面頂部 */
    width: 100%; /* 寬度設置為全寬 */
    top: 0; /* 與頁面頂端對齊 */
    z-index: 1000; /*確保其在其他元素之上*/
    
}

.logo img {
    width: 80px; /* 設置LOGO的寬度，根據需要調整 */
    height: auto; /* 自動調整高度以保持比例 */
    max-height: 80px; /* 設置LOGO的最大高度，防止LOGO過大 */
    display: block; /* 確保LOGO是區塊元素 */
}


.menu-container {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    flex: 1;
    justify-content: flex-end; /* 將導航項目推到最右側 */
}

.menu-item {
    margin-right: 20px; /* 設置每個導航欄項目之間的間距 */
}

.menu-item:last-child {
    margin-right: 0; /* 最後一個項目不需要右邊距 */
}

.menu-link {
    text-decoration: none;
    color: #333; /* 導航欄文字顏色 */
    font-weight: bold;
}

.button-color.reverse {
    background-color: #333; /* 按鈕背景色 */
    color: #d4a373; /* 按鈕文字顏色 */
    padding: 10px 20px; /* 按鈕內部間距 */
    border-radius: 5px; /* 按鈕圓角 */
    text-align: center; /* 文字置中 */
    text-transform: uppercase;
    font-weight: bold;
    display: flex; /* 使用flexbox來對齊內容 */
    align-items: center; /* 垂直方向居中 */
    justify-content: center; /* 水平方向居中 */
}

.button-color.reverse i {
    margin-right: 8px; /* 如果圖標和文字之間需要距離，這裡設置間距 */
}








	</style>



</head>

<body>


	<!-- Document Wrapper
	============================================= -->
	<!-- <div id="wrapper"> -->

	<!-- Header
	============================================= -->
	<header>
    <div class="primary-menu">
        <!-- 左側的LOGO -->
        <div class="logo" style="display: flex; align-items: center;">
            <a href="{{route('user.auth.home')}}" style="display: flex; align-items: center;">
                <img src="{{ asset('assets/nicky/black_logo.png') }}" alt="Logo" style="margin-right: 10px;" />
                <span>回首頁</span>
            </a>
        </div>


        <!-- 導航欄 -->
        <ul class="menu-container">
            <li class="menu-item"><a class="menu-link" href="{{ route('user.auth.home') }}#about">關於我們</a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('user.auth.home') }}#news">最新消息</a></li>
            <li class="menu-item"><a class="menu-link" href="{{route('merchandise')}}">產品</a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('user.auth.home') }}#location">門市資訊</a></li>
            <li class="menu-item"><a class="menu-link" href="{{route('cart')}}">購物車</a></li>
            <li class="menu-item"><a class="menu-link" href="{{route('transaction')}}">交易紀錄</a></li>
            @if (session()->has('user_id'))
            <li class="menu-item border-0">
                <a href="{{route('user.auth.signout')}}" class="button button-color reverse text-uppercase ls-1">
                    <i class="bi bi-person-fill fs-6"></i>登出
                </a>
            </li>
            @else
            <li class="menu-item border-0">
                <a href="{{route('user.auth.login')}}" class="button button-color reverse text-uppercase ls-1">
                    <i class="bi bi-person-fill fs-6"></i>會員登入 / 註冊
                </a>
            </li>
            @endif 
        </ul>
    </div>
    </header>






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


