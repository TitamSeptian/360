@extends('voyager::master')

@section('content')
     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    {{-- @foreach ($destination as $column_name => $value)
                         <div class="panel panel-bordered" style="margin-bottom: 2px;">
                              <div class="panel-heading" style="border-bottom:0; margin-bottom:-15px;">
                                   <h3 class="panel-title">{{ $column_name }}</h3>
                              </div>
                              <div class="panel-body">
                                   {{ $value }}
                              </div>
                         </div> 
                    @endforeach --}}
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
                                                  <img src="{{ asset('storage/' . $destination->images) }}" alt="">
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
                              {{ $destination->description }}
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