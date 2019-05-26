@extends('app')

@section('title')
  Discovey - Oleh Oleh Khas Subang
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
  <section class="single-banner parallax" data-img="{{ asset('img/discovery/oleh-oleh.jpg') }}" data-value="0.2">
    <div class="caption">
      <h1 class="title">Discovery Subang.</h1>
      <p class="sub-title">
        Menikmati oleh - oleh khas Subang.
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
          <h1>OLEH - OLEH KHAS SUBANG</h1>
          <p>
            Berbagai oleh - oleh khas kabupaten Subang.
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
        <img src="{{ asset('img/discovery/oleh-oleh.jpg') }}" alt="" class="object-top">
      </div>
      <div class="bottom">
        <p>
          Terdapat kurang lebih 19 makanan khas Subang yang sampai saat ini bisa kamu nikmati dan rasakan ketika kamu berkunjung ke Kota Subang ini. nah, buat kamu yang penasaran apa saja sih, makanan khas Subang yang menjadi favorit para wisatawan dari luar kota untuk menikmatinya.
        </p>
        <p>
          Berikut adalah 19 daftar makanan khas Subang :
          Peuyeum Ketan , Dodol Nanas , Keripik Nanas , Nanas Madu , Coklas Nanas , Delipel (Kinanti Bakery) ,
          Abon Jantung Pisang , Gepuk , Gitrek , Oncom Dawuan , Lapan Crispy , Kerupuk Miskin , Nasi Liwet , Rambutan , Kalijati , Tutut Soding , Tape Ketan , Dodol Nanas , Cokelat nanas.
        </p>
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
          <img src="{{ asset('img/discovery/sisingaan2.jpg') }}" alt="">
          <div class="caption">
            <h3>
              SISINGAAN
            </h3>
            <p>
             Kesenian yang Melegenda
            </p>
          </div>
          <div class="button">
            <a href="{{ url('discovery/sisingaan') }}">
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
            <a href="{{ url('discovery/pelabuhan-internasional') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ asset('img/discovery/tugu-nanas.jpg') }}" alt="">
          <div class="caption">
            <h3>
              TUGU NANAS
            </h3>
            <p>
             Tugu nanas sebagai icon kota Subang.
            </p>
          </div>
          <div class="button">
            <a href="{{ url('discovery/tugu-nanas') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </section>
@endsection
