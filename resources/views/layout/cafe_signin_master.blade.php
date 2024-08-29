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











	</style>



</head>

<body>


	<!-- Document Wrapper
	============================================= -->
	<!-- <div id="wrapper"> -->

	<!-- Header
	============================================= -->
<header>
<div class="row">
<div class="primary-menu" >


    <ul class="menu-container " style="list-style: none; padding: 0; margin: 0;">
        
            <div class="col-3 d-flex justify-content-left">
                <div class="row d-flex align-items-center">
                    <div class="col-6">
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('user.auth.home') }}">
                                <img class="logo" src="{{ asset('assets/nicky/black_logo.png') }}" alt="Logo" >
                            </a>
                        </li>
                    </div>
                    <div class="col-6">    
                        <li class="menu-item mx-2"><a class="menu-link" href="{{ route('user.auth.home') }}">回首頁</a></li>
                    </div>
                </div>
            </div>

            <div class="col-6 ">
                <div class="row" >
                    <div class="col-2"></div>
                    <div class="col-2">
                        <li class="menu-item mx-2"><a class="menu-link" href="{{ route('user.auth.home') }}#about">關於我們</a></li>
                    </div>
                    <div class="col-2" > 
                        <li class="menu-item mx-2"><a class="menu-link" href="{{ route('user.auth.home') }}#news">最新消息</a></li>
                    </div>
                    <div class="col-2" > 
                        <li class="menu-item mx-2"><a class="menu-link" href="{{route('merchandise')}}">產品介紹</a></li>
                    </div>
                    <div class="col-2" > 
                        <li class="menu-item mx-2"><a class="menu-link" href="{{ route('user.auth.home') }}#location">門市資訊</a></li>
                    </div>
                    <div class="col-2"></div>
                </div>    
            </div>
            <div class="col-3  d-flex justify-content-right">
                <div class="row d-flex align-items-center">
                        
                            @if (session()->has('user_id'))

                            <div class="col-4"> 
                                <li class="menu-item mx-2"><a class="menu-link" href="{{route('cart')}}">購物車</a></li>
                            </div>
                            <div class="col-4"> 
                                <li class="menu-item mx-2"><a class="menu-link" href="{{route('transaction')}}">交易紀錄</a></li>
                            </div>
                            <div class="col-4 ">  
                                <li class="menu-item">
                                <a href="{{route('user.auth.signout')}}" class="button button-color reverse text-uppercase ls-1 w-100 text-center">
                                    <i class="bi bi-person-fill fs-6"></i>登出
                                </a>
                                </li>
                            </div>
                            @else
                            <li class="menu-item">
                            <div class="col-12"> 
                                <a href="{{route('user.auth.login')}}" class="button button-color reverse text-uppercase ls-1">
                                    <i class="bi bi-person-fill fs-6"></i>會員登入 / 註冊
                                </a>
                            </div>
                            </li>
                            @endif 
                        
                </div>   
            </div>
        
    </ul>
</div>
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


