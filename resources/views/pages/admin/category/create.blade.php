@extends('layouts.dashboard')
@section('title')
     Create Category Page
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
             <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label>Categories</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="photo" class="form-control" required>
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

