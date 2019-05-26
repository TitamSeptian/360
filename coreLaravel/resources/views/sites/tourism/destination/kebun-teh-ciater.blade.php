@extends('app')

@section('title')
  Destination - Kebun Teh Ciater
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Kebun Teh Ciater</h1>
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
          <h1>Kebun Teh Ciater</h1>
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
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/kebun-teh-ciater') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://www.google.co.id/maps/place/Kebun+Teh+Sekitar+Ciater/@-6.780867,107.6275445,14z/data=!4m8!1m2!2m1!1skebun+teh+ciater!3m4!1s0x2e691fe1564d101f:0xa95282a76a6bef89!8m2!3d-6.7574594!4d107.6509975">
                <i class="fa fa-map-marker"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/kebun-teh-ciater.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Kebun teh ciater merupakan salah perkebunan teh yang dikembangkan pada zaman penjajahan Belanda di Jawa Barat dan saat ini dikelola oleh PTPN VIII. Wisatawan yang berkunjung ke Bandung sudah tidak asing dengan kebun teh ini karena dilewati ketika menuju ke Pemandian Air Panas Ciater. Pemandangan alam Kebun Teh Ciater cukup menarik dan indah karena berada di lereng Gunung Tangkuban Perahu dan perbukitan utara Bandung.
        </p>
        <p>
          Kebun Teh Ciater didirikan pada zaman Penjajahan Belanda tepatnya pada tahun 1934 dan mulai peroperasi pada tahun 1937. Sejarah Perkebunan Teh Ciatercukup panjang karena berulang kali berganti pengelola.
        </p>
        <p>
          Lokasi Kebun Teh Ciater berada di lereng Gunung Tangkuban Perahu dan tepi Jalan Raya SubangBandung. Dari gerbang masuk Taman Nasional Gunung Tangkuban Perahu ikuti jalan terus hingga memasuki wilayah kabupaten Subang. Hanya berselang beberapa menit pengunjung melewati are Kebun Teh Ciater yang terhampar luas disebelah kiri dan kanan jalan.
        </p>
        <p>
          Pemandangan Kebun Teh Ciater terlihat indah dan menarik dari tepi Jalan Raya Subang-Bandung. Pengunjung atau wisatawan tidak perlu bersusah payah melewati jalan kecil untuk mencari lokasi yang diinginkan. Pengunjung tinggal memilih sudut tepi jalan mana yang dikehendaki kemudian berhenti sejenak di area datar yang disediakan di tepian kebun teh. Selanjutnya wisatawan dipersilakan untuk berfoto ataupun menikmati keindahan pemandangan Kebun Teh Ciater.
        </p>
        <p>
          Pilihan lain untuk menikmati pemandangan Kebun Teh Ciated dengan mendatangi beberapa rest area atau restoran sebagai lokasi pemberhentian pengunjung. Dari tempat tersebut pengunjung dapat menikmati keindahan Kebun teh Ciater sambil menikmati hidangan yang disediakan. Harga
          yang ditawarkan terhitung lebih mahal daripada harga normal makanan dan minuman. Namun cukup terpuaskan karena mendapatkan daya tarik pemandangan perkebunan teh yang indah dan membuat suasana menjadi lebih santai.

        </p>


        <div class="img-more">
          <img src="{{ asset('/img/view/kebun-teh-ciater.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('/img/view/kebun-teh-ciater3.jpg') }}" alt="">
          <img src="{{ asset('/img/view/kebun-teh-ciater4.jpg') }}" alt="">
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31695.276069811687!2d107.62754446832827!3d-6.780866986309656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e691fe1564d101f%3A0xa95282a76a6bef89!2sKebun+Teh+Sekitar+Ciater!5e0!3m2!1sid!2sid!4v1522160802949" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
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
        <li>
          <img src="{{ asset('/img/view/curug-capolaga.jpg') }}" alt="">
          <div class="caption">
            <h3>
              WISATA ALAM CAPOLAGA
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
            <a href="{{ url('tourism/destination/wisata-alam-capolaga') }}">
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
      "background" : "url({{ asset('img/view/kebun-teh-ciater.jpg') }})",
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
