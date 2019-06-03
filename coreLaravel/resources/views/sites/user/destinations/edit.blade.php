@extends('voyager::master')

@section('css')
     <style>
          #panorama{
               width: 100%;
               height: 500px;
               margin-bottom: 12px;
          }
          .is-invalid{
               border: 1px solid #e21b1b;
          }
          .invalid-feedback{
               color: #e21b1b;
          }
     </style>
     <link rel="stylesheet" href="{{ asset('css/pannellum.min.css') }}">
@endsection

@section('content')
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Tambah Destinasi</h4>
                    <div class="card">
                         <div class="card-body">
                              <form action="{{ route('voyager.destinations.update', $destinations->id) }}" method="post" enctype="multipart/form-data">
                                   {{ csrf_field() }}
                                   {{ method_field('PUT') }}

                                   <div class="form-group">
                                        <label for="name">Nama Destinasi</label>
                                        <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $destinations->name }}">
                                        @error('name')
                                             <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                   </div>

                                   <div class="form-group">
                                        <label for="category_id">Kategori</label>
                                        <select id="category_id" class="form-control" name="category_id">
                                             @foreach ($categories as $category)
                                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                             @endforeach
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label for="location_id">Lokasi</label>
                                        <select id="location_id" class="form-control @error('location_id') is-invalid @enderror" name="location_id">
                                             @foreach ($locations as $location)
                                                  <option value="{{ $location->id }}">{{ $location->name }}</option>
                                             @endforeach
                                        </select>
                                        @error('location_id')
                                             <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                   </div>

                                   <div class="form-group">
                                        <label for="images">Gambar</label>
                                        <input type="hidden" id="images" value="{{ $destinations->images }}">
                                        @if ($destinations->images != null)
                                             <div class="container">
                                                  <div class="row">
                                                       <div class="col-sm-12">
                                                            {{-- <input type="hidden" name="images" id="images" value="{{ $destinations->images }}">
                                                            <div class="picture" id="panorama">
                                                                 
                                                            </div> --}}
                                                            <div id="panorama"></div>
                                                       </div>
                                                  </div>
                                             </div>
                                        @else
                                             <img src="{{ asset('img/images/camera_360.png') }}" style="margin-bottom:8px;" id="panorama">
                                        @endif
                                        <input id="images" class="form-control-file @error('images') is-invalid @enderror" type="file" name="images">
                                        @error('images')
                                             <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                   </div>

                                   <div class="form-group">
                                        <label class="control-label" for="richtextdescription">Keterangan</label>
                                        <textarea class="form-control richTextBox @error('description') is-invalid @enderror" name="description" id="richtextdescription">
                                        {{ $destinations->description }}
                                        </textarea>
                                        @error('description')
                                             <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                   </div>

                                   <button type="submit" class="btn btn-primary pull-right">Save</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('javascript')
<script src="{{ asset('js/pannellum.min.js') }}"></script>
<script>
     setTimeout(function(){
          const img = $('#images').val();
          pannellum.viewer('panorama', {
          "type": "equirectangular",
          "panorama": "{{ asset('coreLaravel/public/storage') }}"+'/'+img,
          "sceneFadeDuration": 200,
          "autoLoad": true,
          "autoRotate": -3,
          "showControls" : false,
          "compass" : false,
          "preview": "{{ asset('coreLaravel/public/storage') }}"+'/'+img
          });
     },1000);

     function preview(event) {
     let reader = new FileReader();
     let imageField = document.querySelector('#panorama');

     reader.onload = function () {
          if (reader.readyState === 2) {
               imageField.src = reader.result;
          }
     }
     reader.readAsDataURL(event.target.files[0]);

     }
</script>
@endsection