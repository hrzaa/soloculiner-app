@extends('layouts.dashboard')
@section('title')
     Create Food Gallery Page
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
             <form action="{{ route('food-gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label>Food Name</label>
                    <select name="food_id" class="form-control">
                      @foreach ($foods as $food)
                          <option value="{{ $food->id }}">{{ $food->food_name }}</option>
                      @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label>Thumnails Food</label>
                    <input type="file" name="photos" class="form-control" required>
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

