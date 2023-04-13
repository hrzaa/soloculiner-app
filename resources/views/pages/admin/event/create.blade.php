@extends('layouts.dashboard')
@section('title')
     Create Event Page
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
             <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label>Nama Event</label>
                    <input type="text" name="event_name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Uploader</label>
                    <select name="user_id" class="form-control">
                      @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="date_start">Date Start</label>
                      <input type="date" class="form-control" id="date_start" name="date_start">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="date_end">Date End</label>
                      <input type="date" class="form-control" id="date_end" name="date_end">
                    </div>
                    </div>
                  <div class="form-group">
                      <label>Event Desc</label>
                      <textarea name="event_desc"></textarea>
                        <script>
                                CKEDITOR.replace( 'event_desc' );
                        </script>
                    </div>
                    <div class="form-group">
                      <label>Event History</label>
                       <textarea name="event_history"></textarea>
                        <script>
                                CKEDITOR.replace( 'event_history' );
                        </script>
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
