@extends('layouts.app')
@section('title')
   Home Page
@endsection
@section('content')
   <div class="container-fluid bg-white p-0">
       <!-- Spinner Start -->
       <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
           <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
               <span class="sr-only">Loading...</span>
           </div>
       </div>
       <!-- Spinner End -->
         <section class="home" id="home" >
            <div class="container-fluid py-5 bg-dark hero-home mb-5" >
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">@lang('lang.header home')</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">@lang('lang.paragraf home')</p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">@lang('lang.read more')</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden animated slideInRight">
                            <img class="img-fluid" src="/vendor/img/group-92.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Category Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                   <h5 class="section-title ff-secondary text-center text-primary fw-normal">@lang('lang.header solo foods')</h5>
                   <h1 class="mb-5">@lang('lang.header category')</h1>
                </div>
                <div class="row">
                @php
                    $incrementCategory = 0
                @endphp
                @forelse ($categories as $category)
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+=100 }}">
                        <a href="{{ route('culinary') }}" class="component-categories d-block">
                            <div class="categories-images">
                                <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100"/>
                            </div>
                            <p class="categories-text">{{ $category->{'name_'.app()->getLocale()} }}</p>
                        </a>
                    </div>
                @empty
                     <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                    No Categories Found!
                    </div>
                @endforelse
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
           <div class="container">
               <div class="row g-5 align-items-center">
                   <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="/vendor/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="/vendor/img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="/vendor/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="/vendor/img/about-4.jpg">
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">@lang('lang.about us')</h5>
                    <h1 class="mb-4">@lang('lang.header kuliner nusantara')<i class="fa fa-utensils text-primary me-2"></i></h1>
                       <p class="mb-4">@lang('lang.paragraf kuliner nusantara')</p>
                       <div class="row g-4 mb-4">
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $foods->count() }}</h1>
                                   <div class="ps-4">
                                       <p class="mb-0">@lang('lang.p.k.n typical')</p>
                                       <h6 class="text-uppercase mb-0">@lang('lang.p.k.n foods')</h6>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $restos->count() }}</h1>
                                   <div class="ps-4">
                                       <p class="mb-0">@lang('lang.p.k.n popular')</p>
                                       <h6 class="text-uppercase mb-0">@lang('lang.p.k.n place to eat')</h6>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a class="btn btn-primary py-3 px-5 mt-2" href="">@lang('lang.read more')</a>
                   </div>
               </div>
           </div>
       </div>
       <!-- About End -->

       <!-- About Start -->
       <div class="container-xxl py-5">
           <div class="container">
               <div class="row g-5 align-items-center">
                   <div class="col-lg-6">
                       <div class="row g-3">
                           <div class="col-6 text-end static">
                               <img class="img-fluid rounded w-250 wow zoomIn" data-wow-delay="0.5s"
                                   src="/vendor/img/bg-solo2.jpeg" />
                           </div>
                           <div class="col-6 text-end absolute ">
                               <img class="img-fluid rounded w-250 wow zoomIn" data-wow-delay="0.7s"
                                   src="/vendor/img/bg-solo1.jpeg" />
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            @lang('lang.about us')
                       </h5>
                       <h1 class="mb-4">
                            @lang('lang.history of solo')
                       </h1>
                       <p class="mb-4">
                        @lang('lang.paragraf solo')
                       </p>
                   </div>
               </div>
           </div>
       </div>
       <!-- About End -->

       <!-- Menu Start -->
    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">@lang('lang.food menu')</h5>
                <h1 class="mb-4">@lang('lang.all foods available')</h1>
            </div>
             <div class="row g-4">
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
                                <a href="{{ route('culinary-detail', $food->slug) }}" class="text-primary">Think to Try</a>
                            </div>
                        </div>
                    </div>
                @empty
                        <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        No Culinary Found!
                    </div>
                @endforelse
                <div class="col-12 text-center py-5">
                    <div class="d-flex justify-content-center">
                        {{ $foods->links() }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    <!-- Menu End -->

    <!-- Event Start -->
        <div class="container-fluid bg-white py-5">
            <div class="container mt-3">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">@lang('lang.solo events')</h5>
                    <h1 class="mb-5">@lang('lang.our event')</h1>
                 </div>
                <div class="row g-4">
                    @php
                        $incrementCategory = 0
                    @endphp
                    @forelse ($events as $event)
                    <div class="col-lg-3 col-md-6"  data-aos="fade-up" data-aos-delay="{{ $incrementCategory+=100 }}" style="color: #0c0d36;">
                        <div class="team-item rounded overflow-hidden">
                            <div class="rounded overflow-hidden m-4">
                                <a href="{{ route('event-detail', $event->slug) }}"><img class="img-event" src="{{ Storage::url($event->event_galleries->first()->photos ?? '') }}" alt=""></a>
                            </div>
                            <h4 class="mt-4 text-center">{{ $event->event_name }}</h4>
                            <div class="maps">
                                 <i class="fas fa-map-marked-alt p-3"></i><a href="">Kota Surakarta, Jawa Tengah</a>
                            </div>
                            <div class="date mb-2">
                               <i class="fas fa-calendar-alt p-3"></i>{{ date('d F Y', strtotime($event->date_start)) }} - {{ date('d F Y', strtotime($event->date_end)) }}
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                            No Event Found!
                        </div>
                    @endforelse
                     {{ $events->links() }}
                </div>
            </div>
        </div>
        <!-- eVENT End -->

        <!-- Popular Start -->
            <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">@lang('lang.solo restaurants')</h5>
                    <h1 class="mb-5">@lang('lang.most popular restaurants')</h1>
                </div>
                <div class="row g-4">
                    @forelse ($restos as $resto)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="{{ Storage::url($resto->resto_galleries->first()->photos ?? '') }}" alt="">
                            </div>
                            <h5 class="mb-0">{{ $resto->resto_name }}</h5>
                            <p class="mb-1">{{ $resto->address }}</p>
                            <h6>Rp{{ number_format($resto->price) }}</h6>
                                <!-- Add icon library -->
                                <small>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        No Resto Found!
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
        <!-- Popular End -->

       <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content rounded-0">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <!-- 16:9 aspect ratio -->
                       <div class="ratio ratio-16x9">
                           <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                               allow="autoplay"></iframe>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Ulasan Start -->


        {{-- <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
           <div class="container">
               <div class="text-center">
                   <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                   <h1 class="mb-5">Suggestions and Critics!!!</h1>
               </div>
               <div class="owl-carousel testimonial-carousel">
                   <div class="testimonial-item bg-transparent border rounded p-4">
                       <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                       <p>Bagus</p>
                       <div class="d-flex align-items-center">
                           <img class="img-fluid flex-shrink-0 rounded-circle" src="/vendor/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                           <div class="ps-3">
                               <h5 class="mb-1">Eri</h5>
                               <small>Mahasiswa</small>
                           </div>
                       </div>
                   </div>
                   <div class="testimonial-item bg-transparent border rounded p-4">
                       <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                       <p>Keren</p>
                       <div class="d-flex align-items-center">
                           <img class="img-fluid flex-shrink-0 rounded-circle" src="/vendor/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                           <div class="ps-3">
                               <h5 class="mb-1">Hareza</h5>
                               <small>Wirausahawan</small>
                           </div>
                       </div>
                   </div>
                   <div class="testimonial-item bg-transparent border rounded p-4">
                       <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                       <p>Sangat Bagus</p>
                       <div class="d-flex align-items-center">
                           <img class="img-fluid flex-shrink-0 rounded-circle" src="/vendor/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                           <div class="ps-3">
                               <h5 class="mb-1">Hikmal</h5>
                               <small>Bos</small>
                           </div>
                       </div>
                   </div>
                   <div class="testimonial-item bg-transparent border rounded p-4">
                       <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                       <p>EnaK buangettt</p>
                       <div class="d-flex align-items-center">
                           <img class="img-fluid flex-shrink-0 rounded-circle" src="/vendor/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                           <div class="ps-3">
                               <h5 class="mb-1">Mei</h5>
                               <small>Diplomat</small>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <!-- Testimonial End --> --}}

          <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp bg-white" data-wow-delay="0.1s">
           <div class="container">
               <div class="text-center">
                   <h5 class="section-title ff-secondary text-center text-primary fw-normal">@lang('lang.testimonial')</h5>
                   <h1 class="mb-5">@lang('lang.suggestions and critics')</h1>
               </div>
               <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="review">
                            @forelse ($reviews as $review)
                                <div class="testimonial-item bg-transparent rounded p-3">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="/vendor/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                                        <div class="ps-3">
                                            <h5 class="mb-1">{{ $review->user->name }}</h5>
                                            <p>{{ $review->comment }}</p>
                                                <small>{{ $review->updated_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                                    No Review Found!
                                </div>
                            @endforelse
                        </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- Testimonial End -->



       <!-- Back to Top -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   </div>


@endsection


