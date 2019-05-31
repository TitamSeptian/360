@extends('voyager::master')

@section('content')
     <div class="container" style="margin-top:50px;">
          <div class="row">
               <div class="col-md-12">
                    <div class="panel panel-bordered">
                         <div class="panel-body">
                              <div class="col-md-12">
                                   <table class="table table-stripped" id="table-pending" style="width:100%;">
                                        <thead>
                                             <th>No</th>
                                             <th>Slug</th>
                                             <th>Name of User</th>
                                             <th>Name of Place</th>
                                             <th>Location</th>
                                             <th>Category</th>
                                             <th>Description</th>
                                             <th>Images</th>
                                             <th>Status</th>
                                             <th>Rating</th>
                                             <th>Action</th>
                                        </thead>
                                        <tbody>
                                             
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

@push('javascript')
     {{-- <script src="{{ asset('vendor/DataTables/datatables.min.js') }}"></script> --}}
     <script>
          $('#table-pending').DataTable({
               responsive: true,
               serverSide:true,
               ajax: "{{ route('getdata.detination.accepted') }}",
               columns:[
                    {data: "DT_RowIndex", orderable: false, searchable: false},
                    {data: "slug", name:"slug"},
                    {data: "name_user", name:"user.name"},
                    {data: "name", name:"name"},
                    {data:"location"},
                    {data: "category"},
                    {data: "description", name:"description"},
                    {data: "images", name:"images", orderable:false, searchable:false},
                    {data: "status", name:"status"},
                    {data: "rating", name:"rating"},
                    {data: "action", orderable:false, searchable:false},
               ]
          });
     </script>
@endpush