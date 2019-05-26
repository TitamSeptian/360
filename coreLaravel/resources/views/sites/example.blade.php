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
				<input type="search" placeholder="" autofocus>
			</div>
		</div>

    <section class="panorama">
      <div class="picture" id="panorama">

      </div>
      <div class="container">
        <div class="info-destination active">
          <div class="content">
            <h1>Example in Bukit Pamoyanan</h1>
            <p>
              <i class="fa fa-map-marker"></i>
              Tanjung Siang, Subang Selatan
            </p>
            <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star"></i>
            </p>
            <button class="btn-flat">
              <i class="fa fa-search"></i> Jelajahi
            </button>
          </div>
        </div>
        <div class="buttons in">
            <button class="arrow-left" >
              <i class="fa fa-long-arrow-left"title="Tampilkan Bar"></i>
            </button>
            <button class="arrow-right" title="Sembunyikan Bar">
              <i class="fa fa-long-arrow-right"></i>
            </button><br>
            <button class="button-info" title="Tentang Wisata">
              <i class="fa fa-info"></i>
            </button><br>
            <button onclick="panorama.toggleFullscreen()" title="Lihat 360 Secara Fullscreen">
              <i class="fa fa-arrows-alt"></i>
            </button><br>
        </div>
        <!-- <div class="locate">
          <i class="fa fa-map-marker"></i>
          <label class="locate-in">Curug Masigit - Kasomalang </label>
        </div>
        <div class="scroll">
          <a href="#detail">
            <div class="scroll-down"></div>
          </a>
        </div> -->
      </div>
    </section>

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
    <script type="text/javascript">
      var panorama = pannellum.viewer('panorama', {
        'default' : {
          "firstScene": "scene1",
          "author": "Ahmad Irfan Maulana",
          "sceneFadeDuration": 200,
          "autoRotate": -1,
          "showControls" : false,
          "autoLoad" : true,
          "compass" : false,
          "preview" : "{{ asset('img/view/bukit-pamoyanan.jpg') }}"
        },

        "scenes": {
              "scene1": {
                  "title": "Bukit Pamoyanan",
                  "type": "equirectangular",
                  "panorama": "{{ asset('360pictures/Pamoyanan/1.jpg') }}",
                  "hotSpots": [
                    {
                        "pitch": 13.193603619606826,
                        "yaw": 9.95424118483875,
                        "type": "scene",
                        "text": "Pergi ke atas",
                        "cssClass" : "scene-left-sm",
                        "sceneId": "scene2"

                    }
                  ]
              },
              "scene2": {
                  "title": "Bukit Pamoyanan",
                  "type": "equirectangular",
                  "panorama": "{{ asset('360pictures/Pamoyanan/2.jpg') }}",
                  "hotSpots": [
                    {
                        "pitch":  13.307923432178008,
                        "yaw": 94.21688115498299,
                        "type": "scene",
                        "text": "Pergi ke atas",
                        "cssClass" : "scene-right-sm",
                        "sceneId": "scene3"

                    },
                    {
                        "pitch":  -17.020517119165593,
                        "yaw": -12.66485574975884,
                        "type": "scene",
                        "text": "Pergi ke bawah",
                        "cssClass" : "scene-left-sm",
                        "sceneId": "scene1"

                    },
                  ]
              },
              "scene3": {
                  "title": "Bukit Pamoyanan",
                  "type": "equirectangular",
                  "panorama": "{{ asset('360pictures/Pamoyanan/3.jpg') }}",
                  "hotSpots": [
                    {
                        "pitch":  13.307923432178008,
                        "yaw": 94.21688115498299,
                        "type": "scene",
                        "text": "Pergi ke atas",
                        "cssClass" : "scene-right-sm",
                        "sceneId": "scene3"

                    },
                    {
                        "pitch":  -17.020517119165593,
                        "yaw": -12.66485574975884,
                        "type": "scene",
                        "text": "Pergi ke bawah",
                        "cssClass" : "scene-left-sm",
                        "sceneId": "scene1"

                    },
                  ]
              }
          }
      });
      $('<div/>',{
        "class" : "lds-ellipsis"
      }).appendTo('.pnlm-load-box');

      $('<div/>').appendTo('.lds-ellipsis');
      $('<div/>').appendTo('.lds-ellipsis');
      $('<div/>').appendTo('.lds-ellipsis');
      $('<div/>').appendTo('.lds-ellipsis');

      panorama.on('mousedown', function(event) {
        event.preventDefault();
        var pitch = panorama.mouseEventToCoords(event)[0];
        var yaw = panorama.mouseEventToCoords(event)[1];

        $('.locate-in').html('('+pitch+','+yaw+')');
      });
    </script>
	</body>
</html>
