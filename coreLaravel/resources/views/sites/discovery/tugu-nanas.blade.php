@extends('app')

@section('title')
  Discovey - Tugu Nanas
@endsection
@section('script')
  <script>
    thisbanner = $('.single-banner');
    thisbannerBg = thisbanner.data('img');
    // alert(thisbannerBg);
    thisbanner.css({
      "background" : "url("+thisbannerBg+") center",
      "background-size" : "cover",
      "background-attachment": "fixed"
    })
  </script>
@endsection

@section('content')
  <section class="single-banner parallax" data-img="{{ asset('img/discovery/tugu-nanas.jpg') }}" data-value="0.2">
    <div class="caption">
      <h1 class="title">Discovery Subang.</h1>
      <p class="sub-title">
        Tugu nanas sebagai icon kota Subang.
      </p>
      <a href="#detail">
        <div class="arrow">
          <i class="fa fa-angle-down"></i>
        </div>
      </a>
    </div>
  </section>

  <section class="detail" id="detail">
    <div class="container">
      <div class="left">
        <div class="title">
          <h1>TUGU NANAS</h1>
          <p>
            Tugu nanas sebagai icon kota Subang.
          </p>
        </div>
        <div class="share">
          <div class="content">
            <p>
              <span>
                Share this
              </span>
              <a href="#">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="{{ asset('img/discovery/tugu-nanas.jpg') }}" alt="" class="object-top">
      </div>
      <div class="bottom">
        <p>
          Tugu Nanas merupakan sebuah monumen berbentuk buah nanas yang terletak di kawasan Subang bagian selatan yaitu di Kecamatan Jalancagak, tepatnya berada di persimpangan arah menuju Pantura, Bandung dan Sumedang [1]. Kecamatan Jalancagak merupakan kawasan yang memiliki jumlah lahan perkebunan nanas terbesar di Kabupaten Subang. Tugu nanas menjadi simbol Kabupaten Subang karena nanas merupakan salah satu komoditi utama Kabupaten Subang yang menjadikan Subang sebagai salah satu pemasok nanas nusantara
        </p>
        <p>
          Jalan jaga yang sudah ada sebelum Indonesia merdeka, sebagai tempat penjagaan pasukan Belanda yang akan melintas untuk menjajah.
          Kantor Pos yang berada tepat di depan tugu nanas, merupakan rumah peninggalan Belanda yang diduduki pribumi sejak tanggal 17 Agustus 1945. Semenjak Indonesia merdeka, jalan jaga yang kini menjadi Jalancagak, mulai bebas dilewati warga pribumi. Ketika zaman Belanda, jalan itu hanya tanah dan batu, belum ada tugu nanas. Hanya saja yang paling terkenal, karena jalan tersebut ada tiga cabang, warga pribumi menyebutnya jalan nyagak (bercabang, red). Tetapi warga menyebutnya dengan fasih Jalancagak yang hingga kini terkenal dengan tugu nanasnya.
          Seiring berjalannya waktu, dengan pertambahan jumlah penduduk, pemerintahan mulai dibangun. Desa Bunihayu yang merupakan desa tertua mengawali adanya pemerintahan di kawasan tersebut pada tahun 70-an. Setelah mekar, desa Jalancagak, bertumbuhlah desa yang lain, hingga 11 desa yang mendesak untuk didirikan menjadi kecamatan.
          Dari kemantren Jalancagak menjadi perwakilan daerah yang dipimpim Tajudin Nur dengan kantor di balai desa Jalancagak (saat ini kantor desa Jalancagak, red).
        </p>
        <!-- <a href="">https://www.mangyono.com/2013/01/sisingaan-subang.html</a> -->
        <!-- <div class="img-more">
          <img src="{{ asset('img/discovery/sisingaan.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('img/discovery/sisingaan2.jpg') }}" alt="" class="cover-bottom">
        </div> -->
      </div>
    </div>
  </section>

  <section class="other-dest">
    <div class="container">
      <div class="title">
        <h1>
          <span>Other Discovery</span>
        </h1>
        <hr>
      </div>
      <ul class="items">
        <li>
          <img src="{{ asset('img/discovery/oleh-oleh.jpg') }}" alt="">
          <div class="caption">
            <h3>
              OLEH OLEH SUBANG
            </h3>
            <p>
             Menikmati Oleh Oleh khas Subang
            </p>
          </div>
          <div class="button">
            <a href="oleh-oleh-subang.html">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('img/discovery/pelabuhan-patimban.jpg') }}" alt="">
          <div class="caption">
            <h3>
              PELABUHAN INTERNASIONAL
            </h3>
            <p>
             Pembangunan Pelabuhan Internasional.
            </p>
          </div>
          <div class="button">
            <a href="pelabuhan-internasional.html">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('img/discovery/sisingaan2.jpg') }}" alt="">
          <div class="caption">
            <h3>
              SISINGAAN
            </h3>
            <p>
             Kesenian yang melegenda
            </p>
          </div>
          <div class="button">
            <a href="sisingaan.html">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </section>
@endsection
