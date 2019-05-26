@extends('app')

@section('title')
  Destination - Wisata Alam Capolaga
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Wisata Alam Capolaga</h1>
          <p>
            <i class="fa fa-map-marker"></i>
            Sagalaherang, Subang Selatan
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
          <h1>Wisata Alam Capolaga</h1>
          <p>
            <i class="fa fa-map-marker"></i> Sagalaherang, Subang Selatan
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/wisata-alam-capolaga') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Wisata+Alam+Capolaga/@-6.711367,107.6341123,17z/data=!3m1!4b1!4m5!3m4!1s0x2e691f0fd52c6555:0xdadb6d2c71027ee8!8m2!3d-6.711367!4d107.636301" target="_blank">
                <i class="fa fa-instagram"></i>
              </a> 
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/curug-capolaga.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Capolaga Adventure Camp atau yang dikenal juga dengan nama Wisata Alam Capolaga merupkaan satu diantara obyek wisata alam yang terdapat di Subang. Di bangun pada th. 2001 yang berdiri di atas tempat seluas kurang lebih 10 hektar, pada th. 2004 tempat ini resmi di buka untuk umum. Obyek wisata ini mempunyai 3 curug salah satunya Curug Karembong, Curug Sawer, serta Curug Goa Badak.
        </p>
        <p>
          Jarak dari satu curug ke curug yang lain tidaklah terlalu jauh, pada curug yang satu dengan yang lain dapat ditempuh dengan jalan kaki.
          ditempat ini pengunjung juga dapat nikmati situasi alam ada kebun teh serta sungai Cimuja yang masihlah terbangun keasriannya. Capolaga Adventure Camp juga mempunyai 10 blok camping ground komplit dengan penerangan dan perlengkapan camping. Di obyek wisata ini dapat ada banyak wahana menarik lainya salah satunya flying fox, rimba pinus, recreation center, gathering, photography, adventure sport, trekking, water theraphy, serta ada banyak lagi.
        </p>
        <p>
          Capolaga Adventure Camp telah mempunyai sarana yang cukup ideal, salah satunya telah ada kolam renang, sarana MCK, musholla serta ruang parkir yang luas. Tempat ini pas untuk yang menginginkan mencari sensasi berlibur yang alami, mendekat ke alam serta jauh dari perkotaan.
        </p>
        <p>
          Harga ticket masuk Capolaga Adventure Camp ini cukup murah yakni Rp 10. 000/orang, untuk pengunjung yang menginginkan lakukan camping berbarengan rekan atau keluarga akan dikenai harga yang berbeda.
          Alamat Capolaga Adventure Camp
          Kampung Panaruban desa Cicadas, Kec. Sagalaherang
          Subang, Jawa Barat.
        </p>
        <div class="img-more">
          <img src="{{ asset('/img/view/curug-capolaga2.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('/img/view/curug-capolaga3.jpg') }}" alt="">
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4780245185143!2d107.63411231450536!3d-6.711366995147984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e691f0fd52c6555%3A0xdadb6d2c71027ee8!2sWisata+Alam+Capolaga!5e0!3m2!1sid!2sid!4v1522162350533" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
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
          <img src="{{ asset('/img/view/curug-masigit2.jpg') }}" alt="">
          <div class="caption">
            <h3>
              CURUG MASIGIT
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Kasomalang, Subang Selatan
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
            <a href="{{ url('tourism/destination/curug-masigit') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('/img/view/curug-cibareubeuy.jpg') }}" alt="">
          <div class="caption">
            <h3>
              CURUG CIBAREUBEUY
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Ciater, Subang Selatan
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
            <a href="{{ url('tourism/destination/curug-cibareubeuy') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('/img/view/sari-ater.jpg') }}" alt="">
          <div class="caption">
            <h3>
              SARI ATER
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Sagalaherang, Subang Selatan
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
            <a href="{{ url('tourism/destination/sari-ater') }}">
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
    $('#panorama').css({
      "background" : "url({{ asset('img/view/curug-capolaga.jpg') }})",
      "background-size" : "cover",
      "background-attachment" : "fixed"
    }).addClass('parallax').attr('data-value', 0.2);

    $('<div/>').css({
      "position" : "absolute",
      "top" : "0",
      "left" : "0",
      "width" : "100%",
      "height" : "100%",
      "background" : "linear-gradient(to right, #11998e, #38ef7d)",
      "opacity" : "0.5",
      "z-index" : "-999"
    }).appendTo('#panorama');

    $('<div/>').css({
      "position" : "absolute",
      "top" : "50%",
      "left" : "50%",
      "transform" : "translate(-50%,-50%)",
      "color" : "#fff",
      "text-shadow" : "0px 8px 8px #555",
      "font-size" : "35px",
      "z-index" : "1"
    }).html("Gambar 360 Tidak Tersedia").appendTo('#panorama div');

  </script>
@endsection
