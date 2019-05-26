@extends('app')

@section('content')
  <section class="single-banner parallax" data-value="0.2">
    <div class="caption">
      <h1 class="title">Hasil Pencarian</h1>
      <p class="sub-title">
        {{ $key->keyword }}
      </p>
      <a href="#result">
        <div class="arrow">
          <i class="fa fa-angle-down"></i>
        </div>
      </a>
    </div>
  </section>

  <section class="result" id="result">
    <div class="container">
      <ul class="items">
        <li>
          <img src="{{ asset('img/view/curug-masigit2.jpg') }}" alt="">
          <a href="#">
            <div class="caption">
              <h3>CURUG MASIGIT</h3>
              <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star "></i>
            </p>
              <p>
                <i class="fa fa-map-marker"></i> Kasomalang, Subang Selatan
              </p>
            </div>
          </a>
        </li>
        <li>
          <img src="{{ asset('img/view/curug-goa-badak.jpg') }}" alt="">
          <a href="#">
            <div class="caption">
              <h3>CURUG GOA BADAK</h3>
              <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star"></i>
            </p>
              <p>
                <i class="fa fa-map-marker"></i> Sagalaherang, Subang Selatan
              </p>
            </div>
          </a>
        </li>
        <li>
          <img src="{{ asset('img/view/curug-cina.jpg') }}" alt="">
          <a href="#">
            <div class="caption">
              <h3>CURUG CINA</h3>
              <p class="rating">
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
              <i class="fa fa-star full"></i>
            </p>
              <p>
                <i class="fa fa-map-marker"></i> Sagalaherang, Subang Selatan
              </p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
@endsection
