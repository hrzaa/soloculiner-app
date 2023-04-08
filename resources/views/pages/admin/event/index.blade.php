@extends('layouts.dashboard')
@section('title')
     Dashboard Event Page
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
            <div class="card-header">
                <a href="" class="btn btn-primary"> + Add Event</a>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">date</th>
                        <th scope="col">location Id</th>
                        <th scope="col">cover</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" style="width: 5%;">1</th>
                        <td style="width: 20%;">Solo Culinary Festival</td>
                        <td style="width: 20%;">10 maret 2023-20 maret 2023</td>
                        <td style="width: 15%;">https://goo.gl/maps/xaud6PQVj7ucRMYB8</td>
                        <td style="width: 40%;"><img src="/vendor/img/hero-event.jpg" class="w-50"></td>
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