@extends('app')

@section('title')
  Destination - Curug Masigit
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Curug Masigit</h1>
          <p>
            <i class="fa fa-map-marker"></i>
            Kasomalang, Subang Selatan
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
          <a href="#detail" title="Detail Wisata">
            <button>
              <i class="fa fa-angle-down"></i>
            </button>
          </a>
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

  <section class="detail" id="detail">
    <div class="container">
      <div class="left">
        <div class="title">
          <h1>Curug Masigit</h1>
          <p>
            <i class="fa fa-map-marker"></i> Kasomalang, Subang Selatan
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/curug-masigit') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Wisata+Alam+Curug+Masigit/@-6.7200993,107.7204775,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6920fddbf2e4bb:0x761ad1e8460b2d5d!8m2!3d-6.7200993!4d107.7226662" target="_blank">
                <i class="fa fa-map-marker"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/curug-masigit2.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Curug Masigit merupakan salah satu air terjun yang berada di Desa Pesanggrahan, Kecamatan Kasomalang, Kabupaten Subang. Air terjun yang masih asri ini belum secara resmi di buka sebagai objek wisata namun sudah banyak dikunjungi.
          Terletak sekitar 4 kilometer dari jalan utama kasomalang, Curug Masigit menawarkan pemandangan yang asri, bersih yang bisa melepas kepenatan.
          Curug Masigit mempunyai tiga tahapan air terjun dan empat kubangan dengan kedalaman yang berbeda, namun sebaiknya sahabat traveler berhati-hati jika ingin berenang karena sangat dalam menurut warga setempat.
        </p>

        <p>
          Untuk bisa mencapai lokasi Curug masigit, sahabat Traveler jika dari arah kota subang, bisa berkendara menuju kecamatan jalan cagak setelah itu melanjutkan ke Arah Kecamatan Kasomalang.
          Setelah melewati Pasar Kasomalang, tidak jauh dari sana sahabat traveler akan melewati jembatan akan ada petunjuk arah menuju lokasi mata air cimincul, ikuti petunjuk tersebut sampai mata air cimincul.
        </p>

        <p>
          Setelah sampai di Cimincul, Sahabat traveler bisa memarkirkan kendaraan di lokasi tersebut, kemudian dilanjutkan dengan berjalan kaki naik mengikuti jalan raya lalu belok kiri mengikuti jalan setapak yang ada di pinggir selokan.
          Biaya nya cukup terjangkau yaitu biaya parkir <b>Rp. 5000</b> dan tiket masuk <b>Rp. 5000</b>.
        </p>

        <div class="img-more">
          <img src="{{ asset('/img/view/curug-masigit.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('/img/view/curug-masigit3.jpg') }}" alt="">
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.406913803384!2d107.72047751450539!3d-6.720099295141772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6920fddbf2e4bb%3A0x761ad1e8460b2d5d!2sWisata+Alam+Curug+Masigit!5e0!3m2!1sid!2sid!4v1522161427474" frameborder="0" style="border:0" allowfullscreen></iframe>        </div> 
      </div>
    </div>
  </section>

  <section class="other-dest">
    <div class="container">
      <div class="title">
        <h1>
          <span>Other Destinations</span>
        </h1>
        <hr>
      </div>
      <ul class="items">
        <li>
          <img src="{{ asset('/img/view/pondok-bali3.jpg') }}" alt="">
          <div class="caption">
            <h3>
              PONDOK BALI
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Patimban, Subang Utara
            </p>
            <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star "></i>
            </p>
          </div>
          <div class="button">
            <a href="{{ url('tourism/destination/pondok-bali') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('/img/view/curug-cina.jpg') }}" alt="">
          <div class="caption">
            <h3>
              CURUG CINA
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Sagalaherang, Subang tengah
            </p>
            <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star "></i>
            </p>
          </div>
          <div class="button">
            <a href="{{ url('tourism/destination/curug-cina') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('/img/view/kawah-ratu.jpg') }}" alt="">
          <div class="caption">
            <h3>
              KAWAH RATU
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Ciater, Subang - Jawa barat
            </p>
            <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star "></i>
            </p>
          </div>
          <div class="button">
            <a href="{{ url('tourism/destination/kawah-ratu') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </section>
@endsection

@section('script')
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
      "preview" : "{{ asset('img/view/curug-masigit.jpg') }}"
    },

    "scenes": {
        "scene1": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/1.jpg') }}",
            "hotSpots": [
              {
                  "pitch": -13.158732919525647,
                  "yaw": -135.11607473531294,
                  "type": "scene",
                  "text": "Pergi ke sini",
                  "cssClass" : "scene-right",
                  "sceneId": "scene2"

              }
            ]
        },
        "scene2": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/2.jpg') }}",
            "hotSpots": [
              {
                  "pitch": 4.6515649254336715,
                  "yaw": 175.90606056678592,
                  "type": "scene",
                  "text": "Pergi ke sini",
                  "cssClass" : "scene-right",
                  "sceneId": "scene1"

              },
              {
                  "pitch": -15.832618658114093,
                  "yaw": 5.091179188272759,
                  "type": "scene",
                  "text": "Pergi ke bawah",
                  "cssClass" : "scene-right-sm",
                  "sceneId": "scene5"
              },
              {
                  "pitch" : -6.4939220015705414,
                  "yaw" : -117.90293474506147,
                  "type" : "info",
                  "text" : "Tempat Parkir Motor / Mobil",
                  "cssClass" : "info"
              }
            ]
        },
        "scene3": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/3.jpg') }}",
            "hotSpots": [
              {
                "pitch" : -28.689603156838494,
                "yaw"   : -73.72401678356705,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-right",
                "sceneId": "scene4"

              },
              {
                "pitch" : -11.218497848217117,
                "yaw"   : 64.2686908123529,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-left",
                "sceneId": "last"
              },
              {
                "pitch" : -19.345194144302997,
                "yaw"   : 86.52292727556905,
                "type": "info",
                "text": "Warung Jajanan",
                "cssClass" : "info"
              },
              {
                "pitch" : 15.72687700385583,
                "yaw"   : -140.83727290953235,
                "type": "scene",
                "text": "Pergi ke atas",
                "cssClass" : "scene-right-sm",
                "sceneId": "scene6"
              },
              // {
              //   "pitch" : -28.689603156838494,
              //   "yaw"   : -73.72401678356705,
              //   "type": "scene",
              //   "text": "Pergi ke sini",
              //   "cssClass" : "scene",
              //   "sceneId": "scene4"
              //
              // }
            ]
        },
        "scene4": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/4.jpg') }}",
            "hotSpots": [
              {
                "pitch" : 4.288796178029102,
                "yaw"   : 106.6556036956487,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-left",
                "sceneId": "scene3"
              },
              {
                "pitch" : -1.2593068512671328,
                "yaw"   : 80.41320686600297,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-left-sm",
                "sceneId": "last"
              },
              {
                "pitch" : 16.851670372877784,
                "yaw"   : -174.18875848795471,
                "type": "info",
                "text": "Slogan Kebersihan",
                "cssClass" : "info"
              },
              {
                "pitch" : 7.65907882012155,
                "yaw"   : 100.76152979392484,
                "type": "info",
                "text": "Warung Jajanan",
                "cssClass" : "info"
              },
              {
                "pitch" : 5.845243582063856,
                "yaw"   : 38.68348600477252,
                "type": "info",
                "text": "Warung Jajanan & Tempat Bersantai",
                "cssClass" : "info"
              },
              {
                "pitch" : 27.078190787694187,
                "yaw"   : -163.6737852180309,
                "type": "scene",
                "text": "Pergi ke atas",
                "cssClass" : "scene-right-sm",
                "sceneId": "scene6"
              }
            ]
        },
        "scene5": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/5.jpg') }}",
            "hotSpots": [
              {
                "pitch" : -16.568331287357978,
                "yaw"   : 3.8288599772422884,
                "type": "scene",
                "text": "Pergi ke bawah",
                "cssClass" : "scene-right-sm",
                "sceneId": "scene6"
              },
              {
                "pitch" : 8.698888401515859,
                "yaw"   : 174.3795755061788,
                "type": "scene",
                "text": "Pergi ke atas",
                "cssClass" : "scene-right",
                "sceneId": "scene2"
              },
            ]
        },
        "scene6": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/6.jpg') }}",
            "hotSpots": [
              {
                "pitch" : -22.461235205498376,
                "yaw"   : -27.60429538330132,
                "type": "scene",
                "text": "Pergi ke bawah",
                "cssClass" : "scene-left-sm",
                "sceneId": "scene3"
              },
              {
                "pitch" : 5.0418519813311296,
                "yaw"   : 158.58160292032417,
                "type": "scene",
                "text": "Pergi ke atas",
                "cssClass" : "scene-left-sm",
                "sceneId": "scene5"
              },
            ]
        },
        "last": {
            "title": "Curug Masigit",
            "type": "equirectangular",
            "panorama": "{{ asset('360pictures/Curug Masigit/last3.jpg') }}",
            "hotSpots": [
              {
                "pitch" : 1.6841740476800715,
                "yaw"   : 154.13211106957297,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-right",
                "sceneId": "scene3"
              },
              {
                "pitch" : -2.1452584378648556,
                "yaw"   : 165.3135014779333,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-right-sm",
                "sceneId": "scene4"
              },
              {
                "pitch" : 0.9788647930789866,
                "yaw"   : -15.935653527499003,
                "type": "info",
                "text": "Curug Masigit",
                "cssClass" : "info",
              },
              {
                "pitch" : 4.822647009439245,
                "yaw"   : -84.67857372109698,
                "type": "info",
                "text": "Warung Jajanan & Tempat Bersantai",
                "cssClass" : "info"
              },
              {
                "pitch" : -6.855610383328735,
                "yaw"   : -2.1571455657151404,
                "type": "info",
                "text": "Kedalaman 2 Meter",
                "cssClass" : "info"
              }
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

  // panorama.on('mousedown', function(event) {
  //   event.preventDefault();
  //   var pitch = panorama.mouseEventToCoords(event)[0];
  //   var yaw = panorama.mouseEventToCoords(event)[1];
  //
  //   $('.locate-in').html('('+pitch+','+yaw+')');
  // });

  </script>
@endsection
