@extends('app')

@section('title')
  Destination - Mata Air Cimincul
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Mata Air Cimincul</h1>
          <p>
            <i class="fa fa-map-marker"></i>
            CIsalak, Subang Selatan
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
          <h1>Mata Air Cimincul</h1>
          <p>
            <i class="fa fa-map-marker"></i> CIsalak, Subang Selatan
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/mata-air-cimincul') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Wisata+Mata+Air+Cimincul/@-6.7195459,107.7252616,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6926afffffffff:0xcafd548b363c302e!8m2!3d-6.7195459!4d107.7274503" target="_blank">
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
          Menawarkan keindahan alamnya yang mempesona, Mata Air Cimincul yang berada di Desa Kwungluwuk, Kecamatan Tanjungsiang, Kabupaten Subang, Jawa Barat menjadi salah satu destinasi wisata baru yang ramai dikunjungi. Di tempat ini  kamu bisa menikmati indahnya sunrise dengan lautan kabut yang terhampar, yang tersaji di pagi hari.
        </p>
        <p>
          Untuk dapat menikmati keindahan alamnya, di sarankan untuk camping dilokasi tersebut. Jika kamu tidak memiliki tenda, jangan kwatir karena pengelola wisata menyewakan tenda dengan harga <b>Rp. 60.000</b>.
          Akses menuju Mata Air Cimincul dapat ditempuh melalui tugu nanas Jalancagak ke arah timur. Kemudian setelah SPBU Tanjungsiang dan sebelum pasar Tanjungsiang arahkan kendaraan menuju desa Kawungluwuk. Gerbang menuju desa Kawungluwuk dari arah barat berada di kanan jalan.
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4114230991136!2d107.72526161450547!3d-6.719545895142166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6926afffffffff%3A0xcafd548b363c302e!2sWisata+Mata+Air+Cimincul!5e0!3m2!1sid!2sid!4v1522162114345" frameborder="0" style="border:0" allowfullscreen></iframe>
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
  $('#panorama').css({
    "background" : "url({{ asset('img/view/mata-air-cimincul.jpg') }})",
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
