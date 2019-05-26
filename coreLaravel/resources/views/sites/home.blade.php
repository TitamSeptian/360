@extends('app')

@section('title')
  Home
@endsection

@section('content')
  <!-- Slide Banner -->
  <section class="slide-banner" id="slide-banner">
    <div class="slide one fade active" data-slide="1">
      <div class="slide-image">
        <img src="{{ asset('img/view/bukit-pamoyanan.jpg') }}" class="animate-bgImageInfinite">
        <div class="slide-dark"></div>
      </div>
      <div class="slide-content">
        <div class="container">
          <div class="caption">
            <label class="animate-label">WISATA ALAM BUKIT PAMOYANAN</label>
            <h2 class="animate-heading">
              Menyaksikan Sunset &amp; Sunrise<br/>
              di ketinggian bukit.
            </h2>

            <div class="border animate-border"></div>
            <a href="{{ url('tourism/destination/bukit-pamoyanan') }}">
              <button class="animate-button">Lihat Tempat</button>
            </a>
          </div>

        </div>
      </div>
      <div class="locate animate-locate">
        <i class="fa fa-map-marker"></i>
        <label>Kecamatan Tanjung Siang</label>
      </div>
    </div>

    <div class="slide two fade" data-slide="2">
      <div class="slide-image">
        <img src="{{ asset('img/view/curug-masigit2.jpg') }}" class="animate-bgImageInfinite">
        <div class="slide-dark"></div>
      </div>
      <div class="slide-content">
        <div class="container">
          <div class="caption">
            <label>WISATA ALAM CURUG MASIGIT</label>
            <h2>
              Berenang di Air yang Tenang<br/>
              dengan Percikan Air Terjun
            </h2>

            <div class="border"></div>
            <a href="{{ url('tourism/destination/curug-masigit') }}">
              <button>Lihat Tempat</button>
            </a>
          </div>

        </div>
      </div>
      <div class="locate animate-locate">
        <i class="fa fa-map-marker"></i>
        <label>Kecamatan Kasomalang </label>
      </div>
    </div>

    <div class="slide three fade" data-slide="3">
      <div class="slide-image">
        <img src="{{ asset('img/view/curug-cibareubeuy2.jpg') }}" class="animate-bgImageInfinite">
        <div class="slide-dark"></div>
      </div>
      <div class="slide-content">
        <div class="container">
          <div class="caption">
            <label>WISATA ALAM CURUG CIBAREUBEUY</label>
            <h2>
              Menikmati Tenangnya Alam Subang<br/>
              di Rumah Pohon.
            </h2>

            <div class="border"></div>
            <a href="{{ url('tourism/destination/curug-cibareubeuy') }}">
              <button>Lihat Tempat</button>
            </a>
          </div>

        </div>
      </div>
      <div class="locate animate-locate">
        <i class="fa fa-map-marker"></i>
        <label>Kecamatan Sagalaherang </label>
      </div>
    </div>

    <div class="slide four fade" data-slide="4">
      <div class="slide-image">
        <img src="{{ asset('img/view/kebun-teh-ciater4.jpg') }}" class="animate-bgImageInfinite">
        <div class="slide-dark"></div>
      </div>
      <div class="slide-content">
        <div class="container">
          <div class="caption">
            <label>KEBUN TEH CIATER</label>
            <h2>
              Menelusuri Kebun Teh<br/>
              dengan Udara yang Segar.
            </h2>

            <div class="border"></div>
            <a href="{{ url('tourism/destination/kebun-teh-ciater') }}">
              <button>Lihat Tempat</button>
            </a>
          </div>

        </div>
      </div>
      <div class="locate animate-locate">
        <i class="fa fa-map-marker"></i>
        <label>Kecamatan Ciater </label>
      </div>
    </div>

    <!-- <div class="move">
      <a onclick="plusIndex(-1)" class="prev">&#10094;</a>
      <a onclick="plusIndex(+1)" class="next">&#10095;</a>
    </div> -->

    <div class="dots">
      <!-- commit -->
      <div class="dots-thumb one active on" data-slide="one"></div>
      <div class="dots-thumb two" data-slide="two"></div>
      <div class="dots-thumb three" data-slide="three"></div>
      <div class="dots-thumb four" data-slide="four"></div>
      <!-- commit -->
      <!-- <div class="dots-thumb" onclick="currentSlide(1)"></div>
      <div class="dots-thumb" onclick="currentSlide(2)"></div>
      <div class="dots-thumb" onclick="currentSlide(3)"></div>
      <div class="dots-thumb" onclick="currentSlide(4)"></div> -->

      <a href="#intro">
        <div class="scroll-down"></div>
      </a>
    </div>

    <div class="loader"></div>
  </section>
  <!-- // Slide Banner -->

  <section class="intro" id="intro">
    <div class="pull-left">
      <div class="container">
        <div class="title waww">
          <h2>APA ITU 360<sup>o</sup> SUBANG ?</h2>
          <h3>APA ITU 360<sup>o</sup> SUBANG ?</h3>

          <span class="line">
            <hr class="zig">
            <hr class="zag">
          </span>
        </div>
        <div class="content">
          <p class="justify">
            <b>360<sup>o</sup> Subang</b> ialah
            Sebuah website yang menyediakan informasi tentang berbagai tempat wisata yang terdapat di Kabupaten Subang dengan menggunakan sistem 360<sup>o</sup> atau di sebut juga Virtual Reality.
            <br><br>
            Sistem 360<sup>o</sup> ini di aplikasikan untuk melihat berbagai fasilitas atau wahana dari tempat wisata yang ada di subang secara lebih dalam atau terlihat seperti nyata. Website ini di buat dengan berbagai tujuan di antaranya seperti yang telah di sebutkan sebelumnay, yaitu untuk memberikan informasi tempat wisata di Kabupaten Subang kepada para wisatawan. Baik itu wisatawan lokal ataupun mancanegara.
          </p>
          <a href="{{ route('about') }}">
            <button class="btn">
              More Info
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="pull-right">
      <iframe src="{{ asset('img/person.html') }}" width="" height=""></iframe>
    </div>

    <!-- commit -->
    <div class="bottom">
      <div class="container">
        <div class="items active" id="item-1">
          <div class="icon">
            <img src="{{ asset('img/icon-360.svg') }}" alt="">
          </div>
          <div class="caption">
            <div class="title">
              360 System
            </div>
            <div class="text justify">
              Melihat tempat wisata dengan konsep 360.
            </div>
          </div>
          <div class="border-bottom"></div>
        </div>
        <div class="items two" id="item-2">
          <div class="icon">
            <img src="{{ asset('img/icon-rute.svg') }}" alt="">
          </div>
          <div class="caption">
            <div class="title">
              Rute Navigator
            </div>
            <div class="text justify">
              Menunjukan rute perjalanan menuju tempat wisata.
            </div>
          </div>
          <div class="border-bottom"></div>
        </div>
        <div class="items three" id="item-3">
          <div class="icon">
            <img src="{{ asset('img/icon-info.svg') }}" alt="">
          </div>
          <div class="caption">
            <div class="title">
              Tourism Information
            </div>
            <div class="text justify">
              Memberikan informasi tentang berbagai tempat wisata.
            </div>
          </div>
          <div class="border-bottom"></div>
        </div>

        <ul class="dots">
          <li class="active" id="info-1" data-info="1"></li>
          <li id="info-2" data-info="2"></li>
          <li id="info-3" data-info="3"></li>
        </ul>
      </div>
    </div>

    <!-- / commit -->

  </section>

  <section class="discover">
    <div class="title">
      <h2>DISCOVERY SUBANG</h2>
      <p>Warisan indahnya seni dan budaya yang ada di Subang serta keindahan alam yang masih terjaga</p>
    </div>

    <div class="content">
      <div class="pull-left">
        <div class="items">
          <div class="caption">
            Treaser Keindahan Alam Subang
          </div>
          <video id="video" loop>
            <source src="{{ asset('obj/video.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="pull-right">
        <div class="items thumbnail one">
            <div class="caption"></div>
            <div class="text">
              <h3>Kesenian Sisingaan yang melegenda.</h3>
              <a href="{{ url('discovery/sisingaan') }}">
                <button>
                  See Detail
                </button>
              </a>
            </div>
          <img src="{{ asset('img/discovery/sisingaan2.jpg') }}">
        </div>
        <div class="items thumbnail">
            <div class="caption"></div>
            <div class="text">
              <h3>Menikmati enak nya <br> oleh - oleh khas Subang.</h3>
              <a href="{{ url('discovery/oleh-oleh') }}">
                <button>
                  See Detail
                </button>
              </a>
            </div>
          <img src="{{ asset('img/discovery/oleh-oleh.jpg') }}">
        </div>
        <div class="items thumbnail">
            <div class="caption"></div>
            <div class="text">
              <h3>Pembangunan Pelabuhan Internasional.</h3>
              <a href="{{ url('discovery/pelabuhan-internasional') }}">
                <button>
                  See Detail
                </button>
              </a>
            </div>
          <img src="{{ asset('img/discovery/pelabuhan-patimban.jpg') }}">
        </div>
        <div class="items thumbnail four">
            <div class="caption"></div>
            <div class="text">
              <h3>Tugu nanas sebagai icon kota Subang.</h3>
              <a href="{{ url('discovery/tugu-nanas') }}">
                <button>
                  See Detail
                </button>
              </a>
            </div>
          <img src="{{ asset('img/discovery/tugu-nanas.jpg') }}">
        </div>
      </div>
    </div>
  </section>

  <section class="top">
    <div class="title">
      <h2>TOP 5 DESTINATIONS</h2>
      <p>Berdasarkan ketertarikan wisatawan terhadap wisata Subang</p>
    </div>

    <div class="content">
      <div class="list">
        <ul class="top">
          <li id="destination-1">
              <div class="caption">
                <div class="pull-left">
                  <div class="label">
                    <h2>BUKIT PAMOYANAN</h2>
                    <p><i class="fa fa-map-marker"></i> Kecamatan Tanjung Siang</p>
                    <p class="rating">
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                    </p>
                  </div>
                </div>
                <div class="pull-right">
                  <button class="btn-info">
                    <i class="fa fa-thumbs-up"></i> 125,878
                  </button>
                  <a href="{{ asset('tourism/destination/bukit-pamoyanan') }}">
                    <button><i class="fa fa-search"></i> See Details</button>
                  </a>
                </div>
              </div>
            <img src="{{ asset('img/view/bukit-pamoyanan.jpg') }}">
          </li>
          <li class="active" id="destination-2">
              <div class="caption">
                <div class="pull-left">
                  <div class="label">
                    <h2>CURUG CIBAREUBEUY</h2>
                    <p><i class="fa fa-map-marker"></i> Kecamatan Sagalaherang</p>
                    <p class="rating">
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                </div>
                <div class="pull-right">
                  <button class="btn-info">
                    <i class="fa fa-thumbs-up"></i> 120,128
                  </button>
                  <a href="{{ asset('tourism/destination/curug-cibareubeuy') }}">
                    <button><i class="fa fa-search"></i> See Details</button>
                  </a>
                </div>
              </div>
            <img src="{{ asset('img/view/curug-cibareubeuy2.jpg') }}">
          </li>
        </ul>
        <ul class="bottom">
          <li id="destination-3">
              <div class="caption">
                <div class="container">
                  <div class="identity">
                    <h2>CURUG MASIGIT</h2>
                    <p><i class="fa fa-map-marker"></i> Kecamatan Sagalaherang</p>
                    <p class="rating">
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                  <br>
                  <button class="btn-info">
                    <i class="fa fa-thumbs-up"></i> 120,128
                  </button>
                  <a href="{{ asset('tourism/destination/curug-masigit') }}">
                    <button><i class="fa fa-search"></i> See Details</button>
                  </a>
                </div>
              </div>
            <img src="{{ asset('img/view/curug-masigit.jpg') }}">
          </li>
          <li id="destination-4">
              <div class="caption">
                <div class="container">
                  <div class="identity">
                    <h2>SARI ATER</h2>
                    <p><i class="fa fa-map-marker"></i> Kecamatan Ciater</p>
                    <p class="rating">
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                  <br>
                  <button class="btn-info">
                    <i class="fa fa-thumbs-up"></i> 120,128
                  </button>
                  <a href="{{ asset('tourism/destination/sari-ater') }}">
                    <button><i class="fa fa-search"></i> See Details</button>
                  </a>
                </div>
              </div>
            <img src="{{ asset('img/view/sari-ater.jpg') }}">
          </li>
          <li id="destination-5">
              <div class="caption">
                <div class="container">
                  <div class="identity">
                    <h2>KAWAH RATU</h2>
                    <p><i class="fa fa-map-marker"></i> Kecamatan Ciater</p>
                    <p class="rating">
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star full"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                  <br>
                  <button class="btn-info">
                    <i class="fa fa-thumbs-up"></i> 120,128
                  </button>
                  <a href="{{ asset('tourism/destination/kawah-ratu') }}">
                    <button><i class="fa fa-search"></i> See Details</button>
                  </a>
                </div>
              </div>
            <img src="{{ asset('img/view/kawah-ratu.jpg') }}">
          </li>
        </ul>
      </div>
      <ul class="dots">
        <li data-destination="1"></li>
        <li data-destination="2" class="active"></li>
        <li data-destination="3"></li>
        <li data-destination="4"></li>
        <li data-destination="5"></li>
      </ul>
      <a href="{{ route('tourism') }}">
        <button class="btn-flat">
         <i class="fa fa-refresh"></i>	Load More
        </button>
      </a>
    </div>
  </section>

  <section class="testimonial parallax" data-value="0.2">
    <div class="container">
      <div class="title">
        <img src="{{ asset('img/quote-icon.png') }}">
      </div>
      <div class="content">
        <div class="caption-switcher" id="caption1">
          <p>
            Mushola bersih ada mukena, kain dan sajadah sudah ada. pokoknya air melimpah dari sumber mata air pegunungan. banyak jajanan harga nya murah - murah.
            Pokoknya Fasilitas lengkap, Murah meriah bersih dan view nya sangat bagus.
          </p>

          <div class="label">
            <h2>SISKA NURUL</h2>
            <h4>Pengunjung Pamoyanan</h4>
          </div>

        </div>

        <div class="caption-switcher selected" id="caption2">
          <p>
            Baru kemarin kesana, recomended banget ini tempat. Fasilitas lengkap, Murah meriah bersih dan view nya sangat bagus. Teu ngajleng teu rame (Ga lompat ga seru).

          </p>

          <div class="label">
            <h2>PUTRI APRILIAN</h2>
            <h4>Pengunjung Curug Masigit</h4>
          </div>

        </div>

        <div class="caption-switcher" id="caption3">
          <p>Tempatnya sesuai dengan gambar yang ada di internet, pemandangan nya indah dan cocok untuk dijadikan spot berfoto bersama keluarga.
              Fasilitasnya juga lengkap dan biaya masuk serta tansportnya murah meriah.</p>
          <div class="label">
            <h2>JENIO YUSMA</h2>
            <h4>Pengunjung Wisata Alam Capolaga</h4>
          </div>

        </div>

        <div class="image">
          <ul>
            <li class="link-img" style="visibility:hidden;">
              <a href="#"><i class="fa fa-angle-left"></i></a>
            </li>
            <li class="tmb-img">
              <img src="{{ asset('img/testi/sisca-nur.jpg') }}" data-target="caption1">
            </li>
            <li class="tmb-img selected">
              <img src="{{ asset('img/testi/putri-aprilian.jpg') }}" data-target="caption2">
            </li>
            <li class="tmb-img">
              <img src="{{ asset('img/testi/jenio-yusma.jpg') }}" data-target="caption3">
            </li>
            <li class="link-img" style="visibility:hidden;">
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="testimonial">
    <div class="content">
      <div class="image-quote">
        <img src="{{ asset('img/quote-icon.png') }}" alt="">
      </div>
      <div class="quote">

      </div>
      <div class="people-quote">

      </div>
    </div>
  </section> -->
@endsection

@section('script')
  <script type="text/javascript">
  var offsetVideo = $('#video').offset().top;
  $(window).scroll(function(event) {
    if ($(window).scrollTop() > (offsetVideo - 800) && $(window).scrollTop() < (offsetVideo + 400)) {
      setTimeout(function () {
        document.getElementById("video").play();
      },500);
    }
    else {
      setTimeout(function () {
        document.getElementById("video").pause();
      },500);
    }
  });
  </script>

@endsection
