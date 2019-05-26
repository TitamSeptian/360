@extends('app')

@section('title')
  Gallery
@endsection
@section('content')
  <div class="viewed">
    <div class="close">
      &times;
    </div>
    <div class="content">
      <img src="{{ asset('/img/gallery/1.jpg') }}" alt="" id="img-viewed">
      <div class="caption">
        <h1 class="title"></h1>
        <div class="text"></div>
        <div class="user-upload">

        </div>
      </div>
    </div>
  </div>

  <section class="single-banner parallax" data-value="0.2">
    <div class="caption">
      <h1 class="title">Gallery.</h1>
      <p class="sub-title">
        Berbagai poster menarik mengenai wisata di Subang
      </p>
      <a href="#gallery">
        <div class="arrow">
          <i class="fa fa-angle-down"></i>
        </div>
      </a>
    </div>
  </section>

  <section class="gallery" id="gallery">
    <div class="container">
      <div class="title">
        <h2>GALLERY</h2>
        <p>
          Melihat uniknya kota Subang
        </p>
      </div>
      <ul class="items">
        <li class="item-full">
          <div class="description" style="display:none;">
            <div class="title">
              <h3 style="line-height:50px;">Mari nikmati lezatnya oleh - oleh khas Kabupaten Subang</h3>
            </div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
            <div class="user-upload">
              <img src="{{ asset('/img/people-1.jpg') }}" alt="">
              <h4>Ahmad Irfan Maulana</h4>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="1">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/1.jpg') }}" alt="">
        </li>
        <li>
          <div class="description" style="display:none;">
            <div class="title">Men</div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="2">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/2.jpg') }}" alt="">
        </li>
        <li>
          <div class="description" style="display:none;">
            <div class="title">Ayo abadikan foto dengan indahnya sunset si pantai patimban</div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="3">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/3.jpg') }}" alt="">
        </li>
        <li>
          <div class="description" style="display:none;">
            <div class="title">Indahnya sunset di pantai Patimban</div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="4">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/4.jpg') }}" alt="">
        </li>
        <li>
          <div class="description" style="display:none;">
            <div class="title">Indahnya sunset di pantai Patimban</div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="5">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/5.jpg') }}" alt="">
        </li>
        <li>
          <div class="description" style="display:none;">
            <div class="title">Indahnya sunset di pantai Patimban</div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="6">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/6.jpg') }}" alt="">
        </li>
        <li>
          <div class="description" style="display:none;">
            <div class="title">Indahnya sunset di pantai Patimban</div>
            <div class="text">
              <p>
                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus quaerat veritatis molestiae nulla sit obcaecati iste vel suscipit, rem odit aut itaque similique ipsa autem, recusandae quod doloribus ea. --}}
              </p>
            </div>
          </div>
          <div class="caption">
            <button href="#" class="btn-flat action" data-gallery="7">
              <i class="fa fa-search"></i> Lihat
            </button>
          </div>
          <img src="{{ asset('/img/gallery/7.jpg') }}" alt="">
        </li>

      </ul>
    </div>
    <div class="loaded"></div>
    <button class="btn-flat load-poster">
      <i class="fa fa-refresh"></i> Load More
    </button>
  </section>

@endsection
