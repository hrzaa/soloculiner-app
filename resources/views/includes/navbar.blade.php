<!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                {{-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> --}}
                <img src="/vendor/img/logo-image.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('kuliner') }}" class="nav-item nav-link">Surga Kuliner</a>
                    <a href="{{ route('event') }}" class="nav-item nav-link">Semangat Festival</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                    <!-- {{-- <a href="{{ route('home') }}" class="nav-item nav-link {{ (request()->is('home')) ? 'active' : '' }}">Home</a>
                    <a href="{{ route('event') }}" class="nav-item nav-link {{ (request()->is('event/*')) ? 'active' : '' }}" >Semangat Festival</a>
                    <a href="{{ route('kuliner') }}" class="nav-item nav-link {{ (request()->is('kuliner/*')) ? 'active' : '' }}" >Surga Kuliner</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link {{ (request()->is('gallery')) ? 'active' : '' }} ">Gallery</a> --}} -->
                </div>
                <a href="" class="btn btn-primary py-2 px-4">Login</a>
            </div>
        </nav>   
    </div>
    <!-- Navbar & Hero End -->
