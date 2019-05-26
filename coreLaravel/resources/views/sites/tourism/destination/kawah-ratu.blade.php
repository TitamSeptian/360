@extends('app')

@section('title')
  Destination - Kawah Ratu
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Kawah Ratu</h1>
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
          <h1>Kawah Ratu</h1>
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
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/kawah-ratu') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Kawah+Ratu,+Taman+Nasional+Gunung+Halimun+Salak/@-6.7175181,106.7109514,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69d203401d696f:0xa83f2ef511ce5810!8m2!3d-6.7175181!4d106.7131401" target="_blank">
                <i class="fa fa-map-marker"></i>
              </a> 
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/kawah-ratu.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Kawah Ratu merupakan salah satu objek wisata yang paling populer di daerah Bandung dan sekitarnya . Wajar saja sih, hal ini dikarenakan pemandangan seputar gunung dan Kawah Ratu yang indah dan memanjakan mata.
          Gunung tangkuban perahu seolah-olah menjadi tempat yang wajib anda kunjungi kalau berlibur di Bandung. Tempatnya mudah dijangkau dan cukup unik lho. Kawah utama disini, kawah ratu, luas sekali. anda bisa menikmati pemandangan sekitarnya langsung dari bibir kawah.
        </p>
        <p>
          Tidak terdapat hotel atau tempat menginap didalam kompleks wisata gunung Tangkuban Perahu . Tapi anda bisa dengan mudah menemukan penginapan dan hotel yang tidak jauh dari lokasi. Anda bisa mencari penginapan di daerah Lembang yang terletak dekat dengan lokasi.
          Jangan khawatir jika merasa lapar atau haus, banyak pedagang dan kantin tempat istirahat yang menyediakan makanan dan minuman. Kelengkapan lain seperti Masjid dan kamar kecil tersedia cukup banyak dan bersih . Sarana parkir juga tersedia cukup luas. Jika anda membawa kendaraan pribadi, anda bisa langsung parkir di dekat kawah tangkuban perahu sehingga tidak perlu berjalan jauh untuk menuju lokasi.
          Jika rombongan dengan kendaraan besar/bis, area parkir khusus mobil besar terletak kurang lebih 200 meter sebelum kawah ratu.
        </p>
        <p>
          Ukurannya luas sekali dan bisa dikatakan objek wisata utama dari kompleks wisata tangkuban perahu. Anda bisa langsung memarkir kendaraan di bibir kawah, jadi tidak perlu berjalan jauh untuk menuju lokasi.
          Jika ingin menikmati suasana yang lebih tenang, atau ingin sekedar ngopi santai sambil menikmati pemandangan bibir kawah, anda bisa berjalan sedikit menuju ke area sebelah kanan dari parkiran di kawah ratu. Suasana disana jauh lebih tenang. Selain itu terdapat banyak warung dan bangku dipinggir kawah untuk tempat anda ngopi dan istirahat.
        </p>
        <div class="img-more">
          <img src="{{ asset('/img/view/kawah-ratu.jpg') }}" alt="" class="cover-bottom">
        </div>
        <div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.427943160122!2d106.71095141477171!3d-6.717518095143615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69d203401d696f%3A0xa83f2ef511ce5810!2sKawah+Ratu%2C+Taman+Nasional+Gunung+Halimun+Salak!5e0!3m2!1sid!2sid!4v1522161969709" frameborder="0" style="border:0" allowfullscreen></iframe>
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
              <i class="fa fa-star "></i>
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
      "background" : "url({{ asset('img/view/kawah-ratu.jpg') }})",
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
