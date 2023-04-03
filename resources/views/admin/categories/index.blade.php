@extends('layouts.dashboard')
@section('title')
     Dashboard Event Page
@endsection
@section('content')
    <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-body">
                <a href="categories-create.html" class="btn btn-primary mb-3"> + Add Categories</a>
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">category</th>
                          <th scope="col">foto</th>
                          <th scope="col">Slug</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>jajanan pasar</td>
                          <td><img src="/vendor/img/about-3.jpg" class="w-50"></td>
                          <td>jajanan pasar</td>
                          <td>
                             <div class="dropdown d-inline mr-2">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Sunting</a>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  
                </div>
              </div>
            </div>
            </div>
@endsection