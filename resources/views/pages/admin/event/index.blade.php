@extends('layouts.dashboard')
@section('title')
     Dashboard Event Page
@endsection
@section('content')
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-body">
          <a href="{{ route('event.create') }}" class="btn btn-primary mb-3"> + Add Event</a>
            <div class="table-responsive">
              <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Event</th>
                    <th>Uploader</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Event desc en</th>
                    <th>Event desc id</th>
                    <th>Event history en</th>
                    <th>Event history id</th>
                    <th>Address</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
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
            {data:'event_name', name:'event_name'},
            {data:'user.name', name:'user.name'},
            {data:'date_start', name:'date_start'},
            {data:'date_end', name:'date_end'},
            {data:'event_desc_en', name:'event_desc_en'},
            {data:'event_desc_id', name:'event_desc_id'},
            {data:'event_history_en', name:'event_history_en'},
            {data:'event_history_id', name:'event_history_id'},
            {data:'address', name:'address'},
            {data:'longitude', name:'longitude'},
            {data:'latitude', name:'latitude'},
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
