@extends('app')

@section('title')
  About
@endsection

@section('content')
  <section class="single-banner about parallax" data-value="0.2">
    <div class="caption">
      <h1 class="title">About.</h1>
      <p class="sub-title">
        Mengenal lebih dalam tentang 360 Subang
      </p>
      <a href="#intro">
        <div class="arrow">
          <i class="fa fa-angle-down"></i>
        </div>
      </a>
    </div>
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
            Sistem 360<sup>o</sup> ini di aplikasikan untuk melihat berbagai fasilitas atau wahana dari tempat wisata yang ada di subang secara lebih dalam atau terlihat seperti nyata. Website ini di buat dengan berbagai tujuan di antaranya seperti yang telah di sebutkan sebelumnya, yaitu untuk memberikan informasi tempat wisata di Kabupaten Subang kepada para wisatawan. Baik itu wisatawan lokal ataupun mancanegara.

          </p>
          <br>
          <p class="justify">
            Terima kasih yang sebesar besarnya kepada IG <a href="https://www.instagram.com/exploresubang/" target="_blank">@exploresubang</a> untuk sebagian besar foto yang ada website ini, dan tidak lupa juga kepada <a href="https://www.wikipedia.org">Wikipedia</a> untuk penjelasan umum setiap destinasi yang ada di website ini.
          </p>
        </div>
      </div>
    </div>
    <div class="pull-right">
      <iframe src="{{ asset('/img/person.html') }}" width="" height=""></iframe>
    </div>

    <!-- commit -->
    <div class="bottom">
      <div class="container">
        <div class="items">
          <div class="icon">
            <img src="{{ asset('/img/icon-360.svg') }}" alt="">
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
        <div class="items">
          <div class="icon">
            <img src="{{ asset('/img/icon-rute.svg') }}" alt="">
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
        <div class="items">
          <div class="icon">
            <img src="{{ asset('/img/icon-info.svg') }}" alt="">
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
      </div>
    </div>
    <!-- / commit -->

  </section>

  <section class="tutorial">
    <div class="title">
      <h2>PANDUAN</h2>
      <p>
        Beberapa langkah membuat gambar 360
      </p>
    </div>
    <div class="content">
      <div class="steps">
        <div class="step one active" data-step="1">
          1
        </div>
        <div class="step-hr one"></div>
        <div class="step two" data-step="2">
          2
        </div>
        <div class="step-hr two"></div>
        <div class="step three" data-step="3">
          3
        </div>
        <div class="step-hr three"></div>
        <div class="step four" data-step="4">
          4
        </div>
      </div>
      <div class="description">
        <div id="description-1" class="active">
          <h3>Step 1 Siapkan Smartphone &amp; Aplikasi Google Camera</h3>
          <p>
            Jika anda menggunakan smartphone android, smartphone anda harus dengan OS KitKat ke atas, dan pastinya memiliki sensor gyroscope.
            Atau jika anda menggunakan iPhone, yang mendukung ialah iPhone 4S dan di atasnya.
          </p>
        </div>
        <div id="description-2">
          <h3>Step 2 Buka Aplikasi Google Camera</h3>
          <p>
            Buka Aplikasi Google Camera, swipe ke sebelah kiri layar ke kanan. Akan muncul icon pilihan, dan pilih yang paling atas, lalu bulatkan seperti globe (Photo Sphere), maka akan muncul titik putih setelah menekanya.
          </p>
        </div>
        <div id="description-3">
          <h3>Step 3 Arahkan kamera pada titik - titik</h3>
          <p>
            Setelah muncul titik putih, arahkan kamera ke titik tersebut, lalu tunggu hingga kamera memfoto secara otomatis. Setelah terfoto otomatis, arahkan kamera ke titik - titik yang telah ditentukan oleh Aplikasi Google Camera.
          </p>
        </div>
        <div id="description-4">
          <h3>Step 4 Lihat foto hasil render</h3>
          <p>
            Swipe ke kanan untuk menampilkan foto. Tunggu proses hingga selesai. Dan jika sudah selesai, di bawah foto terdapat icon - icon kecil, lalu pilih gambar bulatan. Tinggal usap - usap untuk melihat hasilnya. Foto yang sudah terender akan di simpan secara otomatis di gallery. Selesai
          </p>
        </div>
      </div>
      <div class="image">
        <div id="image-1"class="active">
          <img src="{{ asset('img/panduan/ss_1.png') }}" alt="">
        </div>
        <div id="image-2" >
          <img src="{{ asset('img/panduan/ss_2.png') }}" alt="">
        </div>
        <div id="image-3">
          <img src="{{ asset('img/panduan/ss_3.png') }}" alt="">
        </div>
        <div id="image-4">
          <img src="{{ asset('img/panduan/ss_4.png') }}" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="about-me">
    <div class="title">
      <h2>ABOUT DEVELOPER</h2>
      <p>
        Sekilas Tentang Developer
      </p>
    </div>
    <div class="content">
      <div class="card">
        <div class="bg-image">
          <img src="{{ asset('img/developer/irfan.jpg') }}" alt="">
        </div>
        <div class="caption">
          <h3>AHMAD IRFAN MAULANA</h3>
          <span>Programmer</span>
          <p>"Aku tidak memiliki bakat khusus, aku hanya punya rasa penasaran yang besar."</p>
        </div>
      </div>
      <div class="card active">
        <img src="{{ asset('img/developer/dian.jpg') }}" alt="" id="img-dian">
        <div class="caption">
          <h3>DIAN ALDIANSYAH</h3>
          <span>Designer</span>
          <p>"Orang yang tak pernah melakukan kesalahan adalah mereka yang tidak pernah mencoba sesuatu yang baru."</p>
        </div>
      </div>
      <div class="card">
        <div class="bg-image">
          <img src="{{ asset('img/developer/alif.jpg') }}" alt="">
        </div>
        <div class="caption">
          <h3>ALIFIA HAMZAH</h3>
          <span>Analis</span>
          <p>"Janganlah mencoba menjadi orang sukses. Jadilah orang yang bernilai."</p>
        </div>
      </div>
      <ul class="dots">
        <li data-target="1"></li>
        <li data-target="2" class="active"></li>
        <li data-target="3"></li>
      </ul>
    </div>
  </section>

@endsection
