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
@endsection

    @push('addon-script')
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script>
        const map = L.map('map');
        map.setView([-7.5758611036093235, 110.82293324246046], 14);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        })
        .addTo(map);

        L.marker([-7.563005436803856, 110.83613014890723], {
            title: "mesen uns",
        })
        .bindPopup('mesen uns')
        .addTo(map);

        L.marker([-7.570204732796178, 110.81683263885945], {
            title: "pak manto",
        })
        .bindPopup('pak manto')
        .addTo(map);

        L.marker([-7.563088198525068, 110.82884242536625], {
            title: "timlo sastro",
        })
        .bindPopup('timlo sastro')
        .addTo(map);
        </script>
    @endpush
