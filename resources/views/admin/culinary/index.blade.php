@extends('layouts.dashboard')
@section('title')
    Store Dashboard Page
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">    
                <a href="#" class="btn btn-lg icon-left btn-primary"><i class="far fa-edit"></i> Add Culinary</a>
            </div>
             
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-md">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Location Id</th>
                        <th scope="col">thumbnails</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sate kere</td>
                        <td>jajanan pasar</td>
                        <td><a href=""></a>https://goo.gl/maps/xaud6PQVj7ucRMYB8</td>
                        <td><img src="/vendor/img/satekere.jpg" class="w-50"></td>
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
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</div>
@endsection