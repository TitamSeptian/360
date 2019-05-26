<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>360 SUBANG | @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Programmer Negeri Satu Subang">
		<meta name="description" content="360 Subang adalah sebuah website yang memudahkan masyarakat dalam mencari tempat wisata yang tepat">

		<link rel="stylesheet" type="text/css" href="{{ asset('css/pannellum.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
		<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">


	</head>

	<body>
		<!-- <section id="preloader">
			<div id="dots-preloader">
		    	<div class="dot" style=" animation-name:preloader_1;"></div>
		        <div class="dot" style=" animation-name:preloader_2;"></div>
		        <div class="dot" style=" animation-name:preloader_3;"></div>
		        <div class="dot" style=" animation-name:preloader_4;"></div>
		    </div>
		    <div id="bg_left" class="pre_half"></div>
		    <div id="bg_right" class="pre_half"></div>
		</section> -->

		<nav class="navbar">
			<div class="container">
				<div class="logo">
					<a href="{{ route('home') }}">
						<img src="{{ asset('img/logo-360-subang.svg') }}">
					</a>
				</div>
				<div class="menu">
					<ul>
						<li>
							<i class="fa fa-search"></i>
						</li>
						<li class="toggle-menu">
							<div class="nav one"></div>
							<div class="nav two"></div>
							<div class="nav three"></div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<data></data>
		<div class="sidebar hide">
			<i class="fa fa-times"></i>
			<div class="brand">
				<a href="{{ route('home') }}">
					<span>360 SUBANG</span>
				</a>
			</div>
			<ul class="menu">
				<a href="{{ route('home') }}">
				<li>
					<i class="fa fa-home"></i> Beranda
				</li>
				</a>
				<a href="{{ route('tourism') }}">
				<li>
					<i class="fa fa-globe"></i> Tourism
				</li>
				</a>
				<a href="{{ route('gallery') }}">
				<li>
					<i class="fa fa-image"></i> Gallery
				</li>
				</a>
				<a href="{{ route('about') }}">
				<li>
					<i class="fa fa-info-circle"></i> About
				</li>
				</a>
				<a href="{{ route('example') }}">
				<li>
					<i class="fa fa-refresh"></i> 360 Example
				</li>
				</a>
			</ul>
			<div class="sign-in">
				<a href="{{ route('login') }}">
					<button>
						Login
					</button>
				</a>
			</div>
			<div class="bottom-right">
				<img src="{{ asset('img/pattern_kepalasisingaan/sudut-pattern.svg') }}" alt="">
			</div>
		</div>

		<div class="search">
			<div class="close">
				&times;
			</div>
			<div class="content">
				<h1>Ketikan kata kunci</h1>
				<form action="{{ url('result') }}" method="GET">
					<input type="search" placeholder="" id="search" name="keyword">
					<input type="submit" name="submit" value="submit" style="display:none;" id="submit-search">
				</form>
			</div>
		</div>

		@yield('content')

		<footer class="footer">
			<div class="link-upload">
				<div class="container">
					<p>Punya tempat wisata keren yang ingin membuat nya di kenal masyarakat ? <br> klik tombol dibawah</p>
					<a href="{{ route('login') }}">
						<button class="btn">
							Upload
						</button>
					</a>
				</div>
			</div>
			<div class="legal">
				<img src="{{ asset('img/pattern_kepalasisingaan/sudut-pattern.svg') }}" alt="" class="bottom-right">
				<div class="nav">
					<div class="brand" style="position:relative;">
						<img src="{{ asset('img/logo-360.svg') }}" alt="">
						<label style="position:absolute;top:20px;">
							360 SUBANG
						</label>
					</div>
					<ul class="menu">
						<a href="https://www.facebook.com/360-Subang-775524685971241" target="_blank">
							<li>
									<i class="fa fa-facebook"></i>
							</li>
						</a>
						<a href="https://www.instagram.com/exploresubang/?hl=id" target="_blank">
							<li>
									<i class="fa fa-instagram"></i>
							</li>
						</a>
					</ul>
				</div>
				<p class="copyright">
					&copy; 2018 PNS - SMKN 1 SUBANG
				</p>
			</div>
		</footer>

		<!-- arrow top -->
		<a href="#slide-banner">
			<div class="arrow-top out">
				<i class="fa fa-angle-double-up"></i>
			</div>
		</a>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/pannellum.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    @yield('script')
	</body>
</html>
