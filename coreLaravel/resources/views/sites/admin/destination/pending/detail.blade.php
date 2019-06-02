@extends('voyager::master')

@section('css')
     <style>
          #panorama{
               width: 100%;
               height: 500px;
          }
     </style>
     <link rel="stylesheet" href="{{ asset('css/pannellum.min.css') }}">
@endsection

@section('content')
<div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <div class="panel panel-bordered" style="margin-bottom:4px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Created By
                              </h3>
                         </div>
                         <div class="panel-body">
                              {{ $destination->user->name }}
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Slug
                              </h3>
                         </div>
                         <div class="panel-body">
                              {{ $destination->slug }}
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Name of Destination
                              </h3>
                         </div>
                         <div class="panel-body">
                              {{ $destination->name }}
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Images
                              </h3>
                         </div>
                         <div class="panel-body">
                              @if ($destination->images != null)
                                   <div class="container">
                                        <div class="row">
                                             <div class="col-sm-12">
                                                  <input type="hidden" name="images" id="images" value="{{ $destination->images }}">
                                                  <div class="picture" id="panorama">
                                                       
                                                  </div>
                                                  {{-- <img src="{{ asset('coreLaravel/public/storage/' . $destination->images) }}" width="100%" height="600px" id="panorama" alt=""> --}}
                                             </div>
                                        </div>
                                   </div>
                              @else
                                   Gambar tidak ada
                              @endif
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Location
                              </h3>
                         </div>
                         <div class="panel-body">
                              {{ $destination->location->name }}
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Category
                              </h3>
                         </div>
                         <div class="panel-body">
                              {{ $destination->category->name }}
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Description
                              </h3>
                         </div>
                         <div class="panel-body">
                              {!! $destination->description !!}
                         </div>
                    </div>

                    <div class="panel panel-bordered" style="margin-bottom:3px;">
                         <div class="panel-heading" style="border-bottom:0;margin-bottom:-22px;">
                              <h3 class="panel-title">
                                   Rating
                              </h3>
                         </div>
                         <div class="panel-body">
                              {{ $destination->rating }}
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('javascript')
     <script src="{{ asset('js/pannellum.min.js') }}"></script>
     <script>
               const img = document.querySelector('#images').value;
               pannellum.viewer('panorama', {
                    "type": "equirectangular",
                    "panorama": "{{ asset('coreLaravel/public/storage') }}"+'/'+img,
                    "sceneFadeDuration": 200,
                    "autoRotate": -3,
                    "showControls" : false,
                    "autoLoad" : true,
                    "compass" : false,
                    "preview": "{{ asset('coreLaravel/public/storage') }}"+'/'+img
               });
          </script>
@endsection