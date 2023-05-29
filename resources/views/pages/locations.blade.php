@extends('layouts.app')
    @section('title')
    Kuliner Page
    @endsection
    @section('content')
    <div class="container-fluid py-5 bg-dark hero-heder" style="background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(/vendor/img/bg-hero.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Surga Kuliner</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Kuliner</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-white py-5">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Solo Foods</h5>
                <h1 class="mb-5">Our Resto Maps</h1>
            </div>
            <div id="map" class="wow fadeInUp" data-wow-delay="0.2s"></div>
        </div>
    </div>

    <!-- map -->
    <script>
        const resto = [
        @foreach($resto as $resto => $data)
            [ "{{$data->longitude}}", "{{$data->latitude}}", "{{$data->address}}" ],
        @endforeach
        ];
    </script>

    <script>
        const map = L.map('map');
        map.setView([-7.5758611036093235, 110.82293324246046], 14);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        })
        .addTo(map);

        //add markers
        if (resto.length) {
        resto.forEach(function(data, i) {
            let [longitude, latitude] = [data[0], data[1]];
            let label = data[2];
            if (longitude && latitude) {
            marker = new L.marker([longitude, latitude])
                .bindPopup(label)
                .addTo(map);

            } else {
            console.log('no geo data available for: ' + label)
            }
        })
        }
    </script>

@endsection




