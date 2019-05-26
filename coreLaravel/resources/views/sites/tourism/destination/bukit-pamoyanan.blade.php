@extends('app')

@section('title')
  Destination - Bukit Pamoyanan
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Bukit Pamoyanan</h1>
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
          <h1>Bukit Pamoyanan</h1>
          <p>
            <i class="fa fa-map-marker"></i> Tanjung Siang, Subang Selatan
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/bukit-pamoyanan') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Bukit+Pamoyanan/@-6.7536198,107.79299,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69274de15dbe3f:0xede86b7c161779b7!8m2!3d-6.7536198!4d107.7951787" target="_blank" title="Open location on Google Maps">
                <i class="fa fa-map-marker"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/bukit-pamoyanan.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Menawarkan keindahan alamnya yang mempesona, Bukit Pamoyanan yang berada di Desa Kwungluwuk, Kecamatan Tanjungsiang, Kabupaten Subang, Jawa Barat menjadi salah satu destinasi wisata baru yang ramai dikunjungi. Di tempat ini  kamu bisa menikmati indahnya sunrise dengan lautan kabut yang terhampar, yang tersaji di pagi hari.
        </p>
        <p>
          Untuk dapat menikmati keindahan alamnya, di sarankan untuk camping dilokasi tersebut. Jika kamu tidak memiliki tenda, jangan kwatir karena pengelola wisata menyewakan tenda dengan harga <b>Rp. 60.000</b>.
          Akses menuju bukit Pamoyanan dapat ditempuh melalui tugu nanas Jalancagak ke arah timur. Kemudian setelah SPBU Tanjungsiang dan sebelum pasar Tanjungsiang arahkan kendaraan menuju desa Kawungluwuk. Gerbang menuju desa Kawungluwuk dari arah barat berada di kanan jalan.
          Salah satu pengunjung, Fitri asal kabupaten Purwakarta menuturkan, dirinya sengaja dating dari Purwakarta untuk bias menikmati keindahan alam di Pamoyanan.
        </p>
        <p>
          Estimasi perjalanan menuju tempat wiasata tersebut dari kota Subang memakan waktu sekira 1 jam perjalanan. Adapun untuk tiket masuk ke lokasi wisata sebesar sebesar <b>Rp. 5000,-</b> per orang dan penitipan motor <b>Rp. 10.000,-</b> per malam.
        </p>
        <div class="img-more">
          <img src="{{ asset('/img/view/bukit-pamoyanan2.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('/img/view/bukit-pamoyanan3.jpg') }}" alt="">
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1330878106237!2d107.79299001477182!3d-6.753619795117969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69274de15dbe3f%3A0xede86b7c161779b7!2sBukit+Pamoyanan!5e0!3m2!1sid!2sid!4v1522160598496" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
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

    // panorama.on('mousedown', function(event) {
    //   event.preventDefault();
    //   var pitch = panorama.mouseEventToCoords(event)[0];
    //   var yaw = panorama.mouseEventToCoords(event)[1];
    //
    //   $('.locate-in').html('('+pitch+','+yaw+')');
    // });
  </script>
@endsection
