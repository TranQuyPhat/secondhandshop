
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">
	<link rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	@livewireStyles
</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
	<div class="mercado-clone-wrap">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels"></div>
	</div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item">
									<a title="Hotline: (+123) 456 789" href="#"><span class="icon label-before fa fa-mobile"></span>Hotline: 0971324117</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<!-- <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a></li>
								<li class="menu-item"><a title="Register or Login" href="{{route('register')}}">Register</a></li> -->
							
								@if(Route::has('login'))
								@auth
								@if(Auth::user()->utype === 'ADM')
								<li class="menu-item menu-item-has-children parent">
									<a title="Dollar (USD)" href="#">My accout({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency">
										<li class="menu-item">
											<a title="Pound (GBP)" href="{{route('admin.dashboard')}}" >Dashboard</a>
										</li>
										<li class="menu-item">
											<a href="{{route('admin.categories')}}">Tất cả danh mục</a>
										</li>
										<li class="menu-item">
											<a href="{{route('admin.products')}}">Sản phẩm </a>
										</li>
										<li class="menu-item">
											<a href="{{route('admin.coupons')}}">Phiếu giảm giá  </a>
										</li>

										<li class="menu-item">
											<a href="{{route('admin.orders')}}">Xem đơn hàng </a>
										</li>
										
										<li class="menu-item">
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										</li>
									<form id="logout-form" action="{{route('logout')}}" method="POST">
										@csrf
										
									</form>
									</ul>
								</li>
								@else 
								<li class="menu-item menu-item-has-children parent">
									<a title="Dollar (USD)" href="#">My accout({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency">
										<li class="menu-item">
											<a title="Pound (GBP)" href="{{route('user.dashboard')}}">Dashboard</a>
										</li>
										<li class="menu-item">
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										</li>
									<form id="logout-form" action="{{route('logout')}}" method="POST">
										@csrf
										
									</form>
									</ul>
								</li>

								@endif

								@else
								<li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Đăng nhập</a></li>
								<li class="menu-item"><a title="Register or Login" href="{{route('register')}}">Đăng kí</a></li>
								@endif
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/secondhand_logo.png')}}" alt="SecondHandLogo"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wishlist-count-component')

							@livewire('cart-count-component')
							
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<!-- <li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li> -->
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Cửa hàng</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Giỏ hàng</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Thanh toán</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Liên hệ </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info" style="background: #005a7d;">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Miễn phí vận chuyển </h4>
								<p class="fc-desc">Với đơn hàng trên $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Bảo hành </h4>
								<p class="fc-desc">Hoàn tiền trong 20 ngày </p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Thanh toán an toàn</h4>
								<p class="fc-desc">Thanh toán trực tuyến</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Hỗ trợ trực tiếp</h4>
								<p class="fc-desc">Chúng tôi hoạt động 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			
			<footer class="site-footer" id="footer" style="margin-top: 50px;" >
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Contact Info-->
          <section class="widget widget-light-skin">
            <h3 class="widget-title">Liên hệ với chúng tôi</h3>
            <p class="text-white">Điện thoại : 84 971 324 117</p>
            <ul class="list-unstyled text-sm text-white">
              <li><span class="opacity-50">Địa điểm :</span> 102 Võ Chí Công Hòa Hải</li>
              <li><span class="opacity-50">Thời gian :</span> 7h sáng - 16h30</li>
            </ul>
            <p><a class="navi-link-light" href="#">phipham882@gmail.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
          </section>
        </div>
       
        <div class="col-lg-4 col-md-6">
          <!-- About Us-->
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">Về chúng tôi</h3>
            <ul>
              <li><a href="#">Tương tác</a></li>
              <li><a href="#">Ủng hộ</a></li>
              <li><a href="#">Đánh giá</a></li>
             
              <li><a href="#">Blog</a></li>
            </ul>
          </section>
        </div>
        <div class="col-lg-4 col-md-6">
     
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">Tài khoản  &amp; Vận chuyển</h3>
            <ul>
              <li><a href="#">Tài khoản của bạn</a></li>
              <li><a href="#">Chính sách  &amp; Phí vận chuyển</a></li>
              <li><a href="#">Hoàn lại tiền &amp; Thay thế</a></li>
              <li><a href="#">Thuế</a></li>
              <li><a href="#">Thông tin giao hàng</a></li>
              <li><a href="#">Chương trình liên kết</a></li>
            </ul>
          </section>
        </div>
      </div>
      <hr class="hr-light mt-2 margin-bottom-2x">
      <div class="row">
        <div class="col-md-7 padding-bottom-1x"></div>
        <div class="col-md-5 padding-bottom-1x">
          <div class="margin-top-1x hidden-md-up"></div>
          <!--Subscription-->
          <form class="subscribe-form" action="#" method="post" target="_blank" novalidate="">
            <div class="clearfix">
              <div class="input-group input-light">
                <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
              </div>
              <button class="btn btn-primary mt-2" type="submit">Suscbribe</button>
            </div><span class="form-text text-sm text-white opacity-50">Đăng ký Bản tin của chúng tôi để nhận ưu đãi giảm giá sớm, tin tức, thông tin bán hàng và khuyến mãi mới nhất..</span>
          </form>
        </div>
      </div>
      <!-- Copyright-->
      <p class="footer-copyright">&copy; All rights reserved.</a></p>
    </div>
  </footer>
		</div>
	</footer>

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
	<!-- <script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script> -->
	<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assets/js/functions.js')}}"></script>
	
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>

  $(".testmonial_slider_area").owlCarousel({
  autoplay: true,
  slideSpeed:1000,
  items : 3,
  loop: true,
  nav:true,
  navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
  margin: 30,
  dots: true,
  responsive:{
    320:{
      items:1
    },
    767:{
      items:2
    },
    600:{
      items:2
    },
    1000:{
      items:3
    }
  }
  
});
</script>

	@livewireScripts
</body>