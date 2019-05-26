@extends('app')

@section('title')
  Destination - Pondok Bali
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Pondok Bali</h1>
          <p>
            <i class="fa fa-map-marker"></i>
            Patimban, Subang Selatan
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
          <h1>Pondok Bali</h1>
          <p>
            <i class="fa fa-map-marker"></i> Patimban, Subang Selatan
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/pondok-bali') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Pantai+Pondok+Bali/@-6.2068591,107.7747048,17z/data=!3m1!4b1!4m5!3m4!1s0x2e695b92bf77a2ab:0x1a5d663dbccf5c61!8m2!3d-6.2068591!4d107.7768935" target="_blank">
                <i class="fa fa-map-marker"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/pondok-bali2.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Obyek Wisata Pantai Pondok Bali Pamanukan di Mayangan Subang Jawa Barat adalah salah satu tempat wisata yang berada di Mayangan, Legonkulon, Kabupaten Subang, Jawa Barat 41254, Indonesia. Tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.
        </p>
        <p>
          memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota subang tidak mengunjungi wisata pantai  yang mempunyai keindahan  yang tiada duanya tersebut.
          sangat cocok untuk mengisi kegiatan liburan anda, apalagi saat liburan panjang seperti libur nasional, ataupun hari ibur lainnya.  Keindahan Obyek Wisata Pantai Pondok Bali Pamanukan di Mayangan Subang Jawa Barat ini sangatlah baik bagi anda semua yang berada di dekat  atau di kejauhan untuk merapat mengunjungi tempat Obyek Wisata Pantai Pondok Bali Pamanukan di Mayangan Subang Jawa Barat di kota subang.

        </p>
        <p>
          Konon asal kata Pondok Bali itu dari kata Pondok Wali. Jadi dahulu kala para wali yang menyebarkan agama islam ke subang mereka berdiam dan berkumpul di pantai ini, sehingga disebutlah Pantai Pondokan Wali atau Pantai Pondok Wali. Katanya juga di pantai ini para wali tersebut membuat sebuah sumur untuk keperluan berwudhu. Anehnya air sumur tersebut terasa tawar padahal berada di daerah pantai. Nah, seiring waktu kata “Wali” itu berubah menjadi “Bali”.
        </p>
        <p>
          Obyek Wisata Pantai Pondok Bali Pamanukan di Mayangan Subang Jawa Barat bisa dibilang sebuah wisata pantai yang memiliki beberapa akan fasilitas dan pelayanan di antaranya
           Area Parkir kendaraan, Mushola, Kamar mandi / MCK, Penginapan, dan masih banyak lainya.
        </p>
        <div class="img-more">
          <img src="{{ asset('/img/view/pondok-bali.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('/img/view/pondok-bali3.jpg') }}" alt="" class="cover-bottom">
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.430116406928!2d107.77470481450241!3d-6.206859095506732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e695b92bf77a2ab%3A0x1a5d663dbccf5c61!2sPantai+Pondok+Bali!5e0!3m2!1sid!2sid!4v1522162191115" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          <img src="{{ asset('/img/view/pondok-bali.jpg') }}" alt="">
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
          <img src="{{ asset('/img/view/kebun-teh-ciater3.jpg') }}" alt="">
          <div class="caption">
            <h3>
              KEBUN TEH CIATER
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
            <a href="{{ url('tourism/destination/kebun-teh-ciater') }}">
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
      "background" : "url({{ asset('img/view/pondok-bali3.jpg') }})",
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
