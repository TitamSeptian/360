@extends('app')

@section('title')
  Destination - Sari Ater
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Sari Ater</h1>
          <p>
            <i class="fa fa-map-marker"></i>
            Ciater, Subang Selatan
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
          <h1>Sari Ater</h1>
          <p>
            <i class="fa fa-map-marker"></i> Ciater, Subang Selatan
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/sari-ater') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Sari+Ater+Subang/@-6.7382263,107.6517556,17z/data=!3m1!4b1!4m7!3m6!1s0x2e691f909dcb2d7d:0x2ff68c4497e44236!5m1!1s2018-03-29!8m2!3d-6.7382263!4d107.6539443" target="_blank">
                <i class="fa fa-map-marker"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/sari-ater.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Sari ater atau Ciater adalah suatu tempat wisata yang sangat populer di Kabupaten Subang – Jawa Barat. Setiap bulannya, tempat pemandian air panas Sari Ater dapat mendatangkan pengunjung kurang lebih sebanyak 70.000 orang. Para pengunjung yang datang tidak hanya para wisatawan lokal sekitar subang saja, namun juga banyak yang datang dari berbagai kota besar di Indonesia, bahkan tidak sedikit juga para pengunjung yang datang dari mancanegara. Misalnya seperti wisatawan yang berasal dari berbagai negara di kawasan Arab atau Timur Tengah.
        </p>
        <p>
          Lokasi pemandian air panas sari ater persisnya terletak tidak jauh dari kawasan wisata Gunung Tangkuban Perahu.  Yaitu di kompleks pemandian air panas alami sari Ater di daerah Desa Ciater, wilayah kecamatan Jalan Cagak, Subang – Jawa Barat.
        </p>
        <p>
          Banyak ragam keistimewaan yang disediakan oleh tempat wisata pemandian air panas Ciater,
          bahkan hal itu bisa Anda rasakan sebelum Anda tiba di lokasi pemandian air panas Ciater. Di
          sepanjang perjalanan wisata ke pemandian air panas Sari Ater, Anda
          akan menyaksikan pemandangan yang eksotis dan asri.
          Hamparan hijaunya kebun teh di bagian kanan dan juga kiri jalan akan menyejukkan pandangan
          serta menenangkan hati siapa saja yang melewatinya. Udara khas alam pegunungan yang
          sejuk hingga menusuk tulang akan menambah rasa nyaman dalam perjalanan Anda
          menuju ke lokasi pemandian air panas Ciater.
        </p>
        <p>
          Sesampainya di tempat wisata pemandian air panas Sari Ater.  Anda bisa memilih lokasi
          mana saja yang ingin Anda kunjungi karena di kawasan wisata ini ada beberapa
          pihak berbeda yang mengelola sejumlah tempat untuk wisata pemandian air panas.
          Selain menyediakan tempat pemandian air panas yang alami, di objek wisata Ciater
          juga ada kolam umum yang dapat digunakan bersama serta tersedia fasilitas kamar
          kamar berendam air panas yang disewakan. Di dalam kamar-kamar VIP ini,
          Anda bisa mendapatkan privacy serta kenyamanan untuk berendam jika Anda malu berendam di
          kolam umum. Selain itu, di obyek wisata pemandian air panas Ciater juga tersedia fasilitas
          bungalau bagi para pengunjung yang ingin bermalam.
          Anda juga bisa menikmati keindahan air terjun dengan berselimut kabut uap air yang hangat
          di kompleks pemandian air panas Sari Ater ini. Khasiat air panas di Ciater memang telah
          diuji secara klinis. Berdasarkan hasil penelitian air panas di Ciater ini mengandung
          chloride, thermo, kalsium, magnesium, mineral, sulfat dan hypertherma
          dengan kandungan kadar aluminium yang cukup tinggi yaitu 38,5 equiv persen dan keasamannya
          juga cukup tinggi yaitu dengan kandungan ph 2,45. Air panas yang mengalir langsung dari mata
          air Ciater diperkirakan bersuhu 43 hingga 46 derajat celcius. Sedangkan air panas yang sudah
          dialirkan ke dalam kolam pemandian temperaturnya rata-rata sekitar 37 hingga 42 derajat
          celsius. Saat air panas yang terus mengalir dari kawasan wisata Gunung Tangkuban Parahu itu
          sampai di sekitar areal persawahan milik warga, temperaturnya sudah agak dingin sekitar
          8 hingga 10 derajat celsius.
        </p>
        <p>
          Tidak hanya wisata air panas alami dan terapi kesehatan yang bisa Anda dapatkan di Ciater.
          Banyak kegiatan lainnya yang tidak kalah menyenangkan untuk lakukan di tempat ini, misalnya
          seperti bersepeda, memancing, berenang, Anda juga bisa berperahu dan mendayung, menikmati
          arung jeram, berkeliling dengan berkuda, olahraga tenis lapangan, voli, basket, gokart, mini
          golf, berkemah, fasilitas outbond, berbagai wahana permainan anak, jalan-jalan di areal
          perkebunan teh serta mengunjungi pusat kerajinan keramik.
        </p>
      </div>
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.259004343404!2d107.65175561450548!3d-6.7382262951288805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e691f909dcb2d7d%3A0x2ff68c4497e44236!2sSari+Ater+Subang!5e0!3m2!1sid!2sid!4v1522162258807" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          <img src="{{ asset('/img/view/curug-cibareubeuy.jpg') }}" alt="">
          <div class="caption">
            <h3>
              CURUG CIBAREUBEUY
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Ciater, Subang Utara
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
          <img src="{{ asset('/img/view/curug-capolaga.jpg') }}" alt="">
          <div class="caption">
            <h3>
              WISATA ALAM CAPOLAGA
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
            <a href="{{ url('tourism/destination/wisata-alam-capolaga') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('/img/view/bukit-pamoyanan2.jpg') }}" alt="">
          <div class="caption">
            <h3>
              BUKIT PAMOYANAN
            </h3>
            <p>
             <i class="fa fa-map-marker"></i>	Tanjung Siang, Subang Selatan
            </p>
            <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
            </p>
          </div>
          <div class="button">
            <a href="{{ url('tourism/destination/bukit-pamoyanan') }}">
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
      "background" : "url({{ asset('img/view/sari-ater.jpg') }})",
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
      "z-index" : -999
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
