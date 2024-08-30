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


    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

	<!-- Document Title
	============================================= -->
	<title>Nicky Cafe</title>


	<style>





.primary-menu {
    display: flex;
    margin: 0;
    padding: 10px 10px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    position: fixed;
    left: 0; /* 保證左對齊 */
    right: 0; /* 保證右對齊 */
    top: 0;
    z-index: 1000;
    width: 100%;
    box-sizing: border-box;
}




.logo {
    width: 76px; /* 根据需要设置固定宽度 */
    height: 76px; /* 根据需要设置固定高度 */
    display: block; /* 使图片成为块级元素 */
    background-size:contain;
}




.menu-container {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    flex: 1;
    /* justify-content: space-between; */
    /* justify-content: center; 將導航項目推到最右側 */
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
    background: none;
    box-shadow: none;
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

.menu-link, .menu-item, .menu-link::before, .menu-link::after {
    border-top: none !important;
    border-bottom: none !important;
    text-decoration: none !important;
    background-image: none !important;
    box-shadow: none !important;
}



// 導航欄樣式
.navbar-light .navbar-nav .nav-link {
    color: #ff5733 !important;
}

.navbar-light .navbar-nav .nav-link:hover {
    color: 	#D26900 !important;
}

/* 修改按鈕背景顏色 */
.nav-link.button.button-color.reverse.text-uppercase.ls-1 {
    background-color:#BF9456 !important; /* 替換為你想要的顏色 */
    color: #ffffff !important; /* 修改文字顏色，確保對比度良好 */
}

/* 如果需要修改懸停狀態的顏色 */
.nav-link.button.button-color.reverse.text-uppercase.ls-1:hover {
    background-color: #3C3C3C !important; /* 替換為你想要的懸停顏色 */
    color: #ffffff !important; /* 修改文字顏色 */
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
        <!-- 折疊按鈕 -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('user.auth.home') }}">
            <img class="logo" src="{{ asset('assets/nicky/black_logo.png') }}" alt="Logo" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- 折疊內容 -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <!-- 主選單項目 -->
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('user.auth.home') }}">回首頁</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('user.auth.home') }}#about">關於我們</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('user.auth.home') }}#news">最新消息</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('merchandise') }}">產品介紹</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('user.auth.home') }}#location">門市資訊</a>
            </li>
            
            <!-- 根據登入狀態顯示的選項 -->
            @if (session()->has('user_id'))
                <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('cart') }}">購物車</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('transaction') }}">交易紀錄</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link button button-color reverse text-uppercase ls-1 w-100 text-center" href="{{ route('user.auth.signout') }}">
                    <i class="bi bi-person-fill fs-6"></i> 登出
                </a>
                </li>
            @else
                <li class="nav-item mx-2">
                <a class="nav-link button button-color reverse text-uppercase ls-1" href="{{ route('user.auth.login') }}">
                    <i class="bi bi-person-fill fs-6"></i> 會員登入 / 註冊
                </a>
                </li>
            @endif
            </ul>
        </div>
        </nav>



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


