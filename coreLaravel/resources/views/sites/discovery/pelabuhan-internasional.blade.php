@extends('app')

@section('title')
  Discovery Pelabuhan Internasional
@endsection

@section('content')
  <section class="single-banner parallax" data-img="{{ url('img/discovery/pelabuhan-patimban.jpg') }}" data-value="0.2">
    <div class="caption">
      <h1 class="title">Discovery Subang.</h1>
      <p class="sub-title">
        Pembangunan Pelabuhan Internasional
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
          <h1>PELABUHAN INTERNASIONAL</h1>
          <p>
            Pembangunan Pelabuhan Internasional di kabupaten Subang.
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
        <img src="{{ url('img/discovery/pelabuhan-patimban.jpg') }}" alt="" class="object-top">
      </div>
      <div class="bottom">
        <p>
          Pembangunan Pelabuhan Patimban akan terbagi ke dalam 3 tahap, khusus untuk tahap pertama terbagi lagi ke dalam dua fase.

          Plt Dirjen Perhubungan Laut Kementerian Perhubungan, Bay M. Hasani, mengungkapkan di tahap pertama fase 1 Pelabuhan Patimban memiliki terminal peti kemas 430 x 300 meter dari total panjang dermaga 4.320 meter. Sedangkan lapangan peti kemas memiliki luas 35 hektar dengan kapasitas 250.000 TEUs dari total 3,75 TEUs.
        </p>
        <p>
          Terminal kendaraan juga mampu menampung hingga 218.000 unit mobil Completely Build Up (CBU) dari total 600.000 CBU. Pembangunan Pelabuhan Patimban tahap pertama fase pertama ditargetkan selesai di 2019.

          Selanjutnya, di tahap pertama fase kedua terminal peti kemas diperluas menjadi 1.740 x 35 meter dari total panjang dermaga 4.320 meter. Sedangkan lapangan peti kemas seluas 66 hektar dengan kapasitas 3,5 juta TEUs dari total 3,75 TEUs.
        </p>
        <p>
          Terminal kendaraan juga mampu menampung hingga 382.000 CBU dari total 600.000 CBU. Pembangunan Pelabuhan Patimban tahap pertama fase kedua ditargetkan selesai di 2023. Tak berhenti di situ, pembangunan Pelabuhan Patimban dilanjutkan ke tahap 2 dan 3.
        </p>
        <p>
          "Tahap 1 ada fase 1 dan 2. Setelah selesai ada tahap 2 dan 3," kata Bay dalam jumpa pers di Kementerian Perhubungan, Jakarta Pusat, Selasa (5/9/2017).
        </p>
        <p>
          Pembangunan Pelabuhan Patimban dibiayai oleh pinjaman Jepang melalui Japan International Coorporation Agency (JICA) sebesar US$ 1,03 miliar, dan pendanaan dari dalam negeri sebesar US$ 90 juta. Pinjaman dari JICA sebesar US$ 1,03 miliar akan dicairkan dalam beberapa tahun hingga 2023.

          "Pembiayaan berasal dari pinjaman Jepang melalui JICA total US$ 1,03 miliar atau Rp 13,7 triliun. Rupiah murni US$ 90 juta atau Rp 1,19 triliun," kata Bay.

          Dokumen studi proyek Pelabuhan Patimban yang terdiri dari Pra Feasibilty Study (FS), AMDAL, Rencana Induk Pelabuhan (RIP), serta penetapan lokasi sudah selesai dipenuhi. Sedangkan studi ANDAL dan LALIN tengah dipersiapkan bersama dengan studi konsesi.

          "Proses dokumen Pra FS, FS, AMDAL, RIP selesai disusun," ujar Bay.

          "Proses pinjaman saat ini telah ditandatangani Menteri PPN/Bappenas dan Bappenas rekomendasi pelaksanaan ke Kementerian Keuangan serta formal disampaikan ke Kedubes Jepang," tambah Bay.
        </p>
        <!-- <a href="">https://www.mangyono.com/2013/01/sisingaan-subang.html</a> -->
        <!-- <div class="img-more">
          <img src="{{ url('img/discovery/sisingaan.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ url('img/discovery/sisingaan2.jpg') }}" alt="" class="cover-bottom">
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
          <img src="{{ url('img/discovery/oleh-oleh.jpg') }}" alt="">
          <div class="caption">
            <h3>
              OLEH OLEH SUBANG
            </h3>
            <p>
             Menikmati Oleh Oleh khas Subang
            </p>
          </div>
          <div class="button">
            <a href="{{ url('discovery/oleh-oleh') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ url('img/discovery/sisingaan2.jpg') }}" alt="">
          <div class="caption">
            <h3>
              SISINGAAN
            </h3>
            <p>
             Kesenian yang melegenda
            </p>
          </div>
          <div class="button">
            <a href="{{ url('discovery/sisingaan') }}">
              <button class="btn-flat">See Detail</button>
            </a>
          </div>
        </li>
        <li>
          <img src="{{ url('img/discovery/tugu-nanas.jpg') }}" alt="">
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
