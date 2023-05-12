@extends('layouts.dashboard')
@section('title')
     Edit Food Page
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
             <form action="{{ route('food.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Food</label>
                    <input type="text" name="food_name" class="form-control" value="{{ $item->food_name }}">
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select name="categories_id" class="form-control">
                      <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                       @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Uploader</label>
                    {{-- <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option> --}}
                    <select name="users_id" class="form-control">
                       <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->name }}</option>
                      {{-- @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach --}}
                    </select>
                  </div>
                  <div class="form-group">
                      <label>Food Desc</label>
                      <textarea name="food_desc">{!! $item->food_desc !!}</textarea>
                        <script>
                                CKEDITOR.replace( 'food_desc' );
                        </script>
                    </div>
                    <div class="form-group">
                      <label>Food History</label>
                       <textarea name="food_history">{!! $item->food_history !!}</textarea>
                        <script>
                                CKEDITOR.replace( 'food_history' );
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

