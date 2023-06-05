@extends('layouts.dashboard')
@section('title')
     Edit Event Page
@endsection
@section('content')
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <div class="card">
          <div class="card-body">
             <form action="{{ route('event.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label>Nama Event</label>
                  <input type="text" name="event_name" class="form-control" value="{{ $item->event_name }}">
                </div>
                <div class="form-group">
                 <label>Uploader</label>
                    <select name="users_id" class="form-control">
                       <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option>
                      @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="date_start">Date Start</label>
                    <input type="date" class="form-control" id="date_start" name="date_start" value="{{$item->date_start}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="date_end">Date End</label>
                    <input type="date" class="form-control" id="date_end" name="date_end"  value="{{$item->date_end}}">
                  </div>
                  </div>
                <div class="form-group">
                    <label>Event Desc en</label>
                    <input type="text" name="event_desc_en" class="form-control" value="{{ $item->event_desc_en }}">
                    </div>
                <div class="form-group">
                    <label>Event Desc id</label>
                    <input type="text" name="event_desc_id" class="form-control" value="{{ $item->event_desc_id }}">
                    </div>
                <div class="form-group">
                    <label>Event History en</label>
                    <input type="text" name="event_history" class="form-control" value="{{ $item->event_history_en }}">
                    </div>
                <div class="form-group">
                    <label>Event History id</label>
                    <input type="text" name="event_history" class="form-control" value="{{ $item->event_history_id }}">
                    </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $item->address }}">
                    </div>
                <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" name="longitude" class="form-control" value="{{ $item->longitude }}">
                    </div>
                <div class="form-group">
                    <label>Latitude</label>
                    <input type="text" name="latitude" class="form-control" value="{{ $item->latitude }}">
                    </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('addon-script')
    <!-- ck editor -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
@endpush

