@extends('app')

@section('title')
  Discovery - Sisingaan
@endsection

@section('content')
  <section class="single-banner parallax" data-img="{{ asset('img/discovery/sisingaan3.jpg') }}" data-value="0.2">
    <div class="caption">
      <h1 class="title">Discovery Subang.</h1>
      <p class="sub-title">
        Kesenian Sisingaan yang Melegenda.
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
          <h1>SISINGAAN</h1>
          <p>
            Kesenian yang Melegenda di kabupaten Subang.
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
        <img src="{{ asset('img/discovery/sisingaan3.jpg') }}" alt="" class="object-top">
      </div>
      <div class="bottom">
        <p>
          Sisingaan adalah kesenian tradisional yang lahir dan berkembang di daerah Kabupaten Subang. Kesenian Sisingaan ini pun telah menjadi icon Kabupaten Subang, serta telah mengangkat dan mengharumkan nama Kabupaten Subang, bukan hanya di dalam negeri, melainkan juga telah dikenal di dunia Internasional.
        </p>
        <p>
          Penamaan kesenian Sisingaan diambil dari alat utama kesenian ini, yaitu “sisingaan”, suatu benda yang dibentuk sedemikian rupa sehingga menyerupai wujud seekor singa. Jadi dalam kesenian Sisingaan, alat utamanya bukan singa yang sesungguhnya, melainkan singa tiruan yang terbuat dari kayu.
          Banyak penamaan atau sebutan yang diberikan pada kesenian Sisingan ada yang menyebutnya kesenian Gotong Singa, Kuda Ungkleuk, atau Singa Ungkleuk, Odong-odong, Singa Depok, Pergosi.
        </p>
        <p>
          Sisingaan mulai muncul pada saat kaum penjajah menguasai subang. Pada masa pemerintahan belanda berkuasa di Subang pada tahun 1812 pada saat itu Subang dikenal sebagai daerah Doble bestuur dan dijadikan kawasan perkebunan dengan nama P&T Lands(Pamanoekan en Tjiasemladen). Pada saat Subang dikuasai oleh Belanda masyarakat Subang mulai diperkenalkan dengan lambang Negara mereka yaitu Crown atau mahkota kerajaan.
          Pada saat yang bersamaan Subang juga dikuasai oleh Inggris dan mempetrkenalkan lambang Negaranya yaitu Singa. Sehingga secara administrative subang dibagi ke dalam dua bagian yaitu : Secara politik dikuasai oleh Belanda dan secara Ekonomi dikuasai oleh Inggris. Dengan adanya tekanan dari penjajah terhadap masyarakat Subang yaitu tekana secara politik, ekonomi, social, dan budaya masyarakat Subang melakukan perlawanan terhadap penjajah.
          Perlawanan pun tidak hany melalui fisik, akan tetapi dalam bentuk kesenian yang di dalamnya mengandung Silib(Ironi atau sesuatu yang bertentangan dengan kenyataan),Siloka ( khiasan atau melambankan),Sasmita(Contoh criteria yang mengandung arti atau makna).
        </p>
        <p>
          Artinya bahwa tindakan masyarakat Subang diekspresikan secara terselebung melalui sindiran, perumpamaan yang mengena terhadapa keadaan pada saat itu. Salah satu ekspresi jiwa masyarakat Subang mereka mewujudkan dengan cara membuat salah satu kesenian yang dikenal dengan nama kesenian Sisingaan. Kesenian sisingaan merupakan ungkapan rasa ketidak puasan atau upaya pemberontakan dari masyarakat Subang kepada kaum penjajah.Dengan demikian sepasang sisingaan melambangkan kaum penjajah yaitu Belanda dan Inggris yang menindas masyarakat Subang, atau lambang kebodohan atau kemiskinan.Dengan diciptakan sisingaan tersebut para seniman dapat berharap agar suatu saat generasi muda harus bangkit dan harus mampu mengusir penjajah dari tanah air mereka dan dapat hidup jauh lebih baik lagi.
        </p>
        <p>
          Sisingaan secara garis besar terdiri dari 4 orang pengusung sisingaan, sepasang patung sisingaan, penunggang sisingaan, waditra,nayaga, dan sinden atau juru kawih. Jadi secara filosofi 4 orang pengusung sisingaan melambang masyarakat pribumi ditindas oleh kaum penjajah, sepasang patung sisingaan melambangkan 2 penjajah(Belanda&Inggris), sedangkan penunggang sisingaan melambangkan generasi muda yang suatu saat harus mampu mengusir penjajah, dan nayaga melambangkan mayarakat yang gembira atau masyarakat subang yang berjuang dan memberi motivasi terhadap generasi muda untuk dapat mengalahkan dan megusir penjajah dari tanah air mereka.
        </p>
        <!-- <a href="">https://www.mangyono.com/2013/01/sisingaan-subang.html</a> -->
        <div class="img-more">
          <img src="{{ asset('img/discovery/sisingaan.jpg') }}" alt="" class="cover-bottom">
          <img src="{{ asset('img/discovery/sisingaan2.jpg') }}" alt="" class="cover-bottom">
        </div>
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
            <a href="{{ url('discovery/oleh-oleh') }}">
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
