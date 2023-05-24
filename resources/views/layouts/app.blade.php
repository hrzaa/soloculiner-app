<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      {{-- Style.css --}}
      @stack('prepend-style')
      @include('includes.style')
      @stack('addon-style')

    <title>@yield('title')</title>
  </head>
  <body>
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script');
    @stack('addon-script')
  </body>

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

</html>
