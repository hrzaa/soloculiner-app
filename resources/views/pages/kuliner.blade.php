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
  
    <!-- Menu Start -->
    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-2">Most Popular Items</h1>
            </div>
             <div class="row gy-4">
                @php
                    $incrementCategory = 0
                @endphp
                @forelse ($foods as $food)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+=100 }}">
                        <div class="d-flex align-items-center p-5" style="background-color: #f0f0f0; border-radius:8px">
                            {{-- image resto belum muncul --}}
                            <div class="img-fluid" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                @if($food->food_galleries->count())
                                    <div class="img" style="background-image: url('{{ Storage::url($food->food_galleries->first()->photos) }}'); width: 150px; height:100px; background-size: cover">
                                        {{-- <img class="flex-shrink-0 img-fluid rounded" src="{{ Storage::url($food->food_galleries->first()->photos) }}" alt="" style="width: 150px; height:auto;"> --}}
                                    </div>
                                @else
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ url('/vendor/img/default.png') }}" alt="" style="width: 150px;">
                                @endif
                            </div>
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span>{{ $food->food_name }}</span>
                                </h5>
                                <small class="fst-italic">{!! Str::words($food->{'food_desc_'.app()->getLocale()}, 20) !!}</small>
                                <a href="{{ route('kuliner-detail', $food->slug) }}" class="text-primary">Think to Try</a>
                            </div>
                        </div>
                    </div>
                @empty
                        <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        No Culinary Found!
                    </div>
                @endforelse
                <div class="col-12 text-center py-5">
                    {{ $foods->links() }}
                </div>
               

                {{-- @dd($restos) --}}
                </div>
            </div>
        </div>
    <!-- Menu End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection