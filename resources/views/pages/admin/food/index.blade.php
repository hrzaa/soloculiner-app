@extends('layouts.dashboard')
@section('title')
     Dashboard Culinary Page
@endsection
@section('content')
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-body">
          <a href="{{ route('food.create') }}" class="btn btn-primary mb-3"> + Add Culinary</a>
            <div class="table-responsive">
              <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Culinary</th>
                    <th>Uploader</th>
                    <th>Category</th>
                    <th>Food Desc</th>
                    <th>Food History</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('addon-script')
   <script>
    var datatable = $('#crudTable').DataTable({
        procesing: true,
        serverSide: true,
        ordering : true,
        ajax:{
            url:'{!! url()->current() !!}',
        },
        columns:[
            {data:'id', name:'id'},
            {data:'food_name', name:'food_name'},
            {data:'user.name', name:'user.name'},
            {data:'category.name_id', name:'category.name_id'},
            {data:'food_desc_id', name:'food_desc_id'},
            {data:'food_history_id', name:'food_history_id'},
            {
                data:'action',
                name:'action',
                orderable:false,
                searchable:false,
                width:'15%'
            },
        ]   
        });
  </script>
    
@endpush