@extends('layouts.dashboard')
@section('title')
     Create Food Page
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
             <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label>Nama Culinary</label>
                    <input type="text" name="food_name" class="form-control" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select name="categories_id" class="form-control">
                       @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Uploader</label>
                    <select name="users_id" class="form-control">
                      <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label>Food Desc en</label>
                      <input type="text" name="food_desc_en" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Food History en</label>
                      <input type="text" name="food_history_en" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Food Desc id</label>
                      <input type="text" name="food_desc_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Food History id</label>
                      <input type="text" name="food_history_id" class="form-control" required>
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

