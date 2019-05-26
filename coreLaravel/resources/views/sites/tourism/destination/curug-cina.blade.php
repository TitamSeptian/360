@extends('app')

@section('title')
  Destination - Curug Cina
@endsection

@section('content')
  <section class="panorama">
    <div class="picture" id="panorama">

    </div>
    <div class="container">
      <div class="info-destination active">
        <div class="content">
          <h1>Curug Cina</h1>
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
          <h1>Curug Cina</h1>
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
              <a href="https://www.facebook.com/sharer.php?u={{ url('tourism/destination/curug-cina') }}">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.google.co.id/maps/place/Curug+China+Subang/@-6.5583058,107.6263673,11z/data=!4m8!1m2!2m1!1scurug+cina+subang!3m4!1s0x2e69229583117e7b:0x97075440c142d37c!8m2!3d-6.6284972!4d107.6891827" target="_blank">
                <i class="fa fa-map-marker"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('/img/view/curug-cina.jpg') }}" alt="">
      </div>
      <div class="bottom">
        <p>
          Curug Cina merupakan kawasan wisata air terjun di Subang yang dikelilingi oleh lahan perkebunan dan pesawahan. Udara di kawasan curug ini cukup sejuk. Air yang mengalir dari atas tebing curug pun sangat jernih, bersih dan terlihat begitu alami. Suasana alamnya begitu menenangkan. Seperti itulah curug Cina dengan segala keindahan alam yang ada. Rimbunya vegetasi alam, suburnya tanah yang ada hingga kini tumbuh pohon tua dan ilalang liar yang membuat kawasan curug cina terlihat begitu alami.
        </p>

        <p>
          Asal muasal penamaan curug cina  sebenarnya bukan diambil berdasarkan kepercayaan, geomorfologi atau adat istiadat dari daerah setempat. Melainkan penamaan curug cina ini diambil berdasarkan cerita yang beredar dimasyarakat. Dimana pada zaman dahulu kala ada seorang keturunan tionghoa yang sering melakukan perburuan di kawasan wisata ini. Pemburu tersebut sangat sering datang ke lokasi curug, hampir setiap hari pemburu itu datang untuk memburu babi, burung dan hewan liar lainnya. Dan warga selalu melihatnya melintasi perkampungan. Sesekali pemburu itu juga bercengkrama dengan warga setempat. Namun pada suatu waktu, pemburu keturunan tionghoa itu meninggal dunia di sekitar lokasi Curug. Sejak saat itulah wisata indah ini dikenal oleh masyarakat setempat dengan sebutan Curug Cina.
        </p>

        <p>
          Curug Cina menyuguhkan panorama alam yang cukup indah. Uniknya curug ini seperti membentuk sebuah tangga. Dimana air mengalir dari atas tebing berundak-undak seperti tangga. Hal itu disebabkan oleh potongan bebatuan besar.yang memotong laju air yang terjun ke bawah. Dibawahnya juga terdapat kolam air yang menampung jatuhan air terjun tersebut.
          Secara administrative Curug Cina terletak di Desa Curugagung, Kecamatan Segalaherang, Kabupaten Subang, Jawa Barat, Indonesia.
          Kordinat peta 06°37′41.8″ LS 107°41′24.1″ BT
        </p>

        <p>
          Akses menuju Desa Curugagung tidak terlalu sulit. Sebab jalan menuju desa tersebut relatif bagus. Medan jalan pun cukup muda dan jaur yang dilalui juga cukup aman karena melewati pemukiman penduduk. Untuk sampai ke Desa Curugagung bisa melalui dua jalur. Jalur utama bisa melalui Kampung Batukapur dan jalur kedua bisa melalui Desa Bunihayu.

        </p>

        <p>
          Bagi wisatawan yang berasal dari Bandung, arahkan kendaraan kea rah jalancagak melewati Lembang – Tangkuban perahu – Ciater – pertigaan Purwakarta dan Jalancagak – ambil arah menuju Purwakarta. Lokasi pertigaan ini berada sebelum pasar dan pertigaan Jalan cagak dengan adanya Tugu Nanas. Jika Kamu hendak melalui Desa Curugagung maka rute yang harus dilalui adalah melalui Desa Bunihayu, setelah belok ke arah Purwakarta, pokoknya patokannya SMAN 1 Jalancagak. Disitu Kamu akan melihat dajaln kecil dan pangkalan ojek. Ikuti terus jalan utama sampai menuju Desa Curugagung.
        </p>

        <p>
          Bila jalur yang dipilih melalui Kampung Batukapur, maka setelah belok menuju arah Purwakarta, terus ikuti jalan raya sampai mendekati pusat Kecamatan Sagalaherang. Tepat diujung jalan yang menikung ke kiri, disi kanan jalan akan terlihat papan petunjuk arah menu Objek wisata Batu Kapur. Ambil jalan menuju objek wisata Batu Kapur. Ikuti terus jalur utama hingga menemui area pesawahan. Kondisi jalan tidak terlalu bagus. Semakin menuju ke arah hutan/kebun, medan jalan akan cukup sulit. Turunan akan berakhir ketika sudah tiba di jembatan besar. Setelah jembatan ini, Kamu akan memasuki Kampung Batu Kapur, Desa Curugagung. Kamu akan melalui jalan menanjak dan melewati pertigaan objek wisata Batu Kapur. Ikuti terus jalan utama desa, jangan belok kea rah objek wisata. Disini kondisi sajaln utama desa Curugagung sudah sangat baik. Disekitarmu juga terlihat hamparan sawan dan perbukitan di sisi kanan jalan sepanjang perjalananmu menuju Desa Curug Agung.

        </p>

        <div class="img-more">
          <img src="{{ asset('/img/view/curug-cina2.jpg') }}" alt="" class="cover-bottom">
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d253677.40910782572!2d107.62636725507562!3d-6.558305842369368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69229583117e7b%3A0x97075440c142d37c!2sCurug+China+Subang!5e0!3m2!1sid!2sid!4v1522161158357" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          <img src="{{ asset('/img/view/curug-goa-badak.jpg') }}" alt="">
          <div class="caption">
            <h3>
              CURUG GOA BADAK
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
            <a href="{{ url('tourism/destination/curug-goa-badak') }}">
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
            <a href="{{ url('tourism/destination/kebun-teh-ciater') }}">
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
      </ul>
    </div>
  </section>
@endsection

@section('script')
  <script type="text/javascript">
    $('#panorama').css({
      "background" : "url({{ asset('img/view/curug-cina.jpg') }})",
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
