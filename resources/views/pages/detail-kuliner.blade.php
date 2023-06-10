@extends('layouts.app')
 @section('title')
    Detail Kuliner Page
 @endsection
@section('content')
<div class="container-fluid bg-white p-0">
     <div class="container-fluid py-5 bg-dark hero-event" style="background: linear-gradient(0deg,
            rgba(15, 23, 43, 0.75),
            rgba(15, 23, 43, 0.75)),
        url(/vendor/img/satekere3.jpg), #0f172b;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Sate Kere</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- About Start -->
        <div class="container-fluid py-5 bg-white">
           <div class="container">
               <div class="row g-5 align-items-center">
                   <div class="col-lg-6">
                       <div class="row g-3">
                            <section class="store-gallery" id="gallery">
                            <div class="container">
                            <div class="row">
                                <div class="col-lg-10" data-aos="zoom-in">
                                <transition name="slide-fade" mode="out-in">
                                    <img
                                    :src="photos[activePhoto].url"
                                    :key="photos[activePhoto].id"
                                    class="w-100 main-image"
                                    alt="">
                                </transition>
                                </div>
                                <div class="col-lg-2">
                                <div class="row">
                                    <div class="col-3 col-lg-12 mt-2 mt-lg-0"
                                    v-for="(photo, index) in photos"
                                    :key="photo.id"
                                    data-aos="zoom-in"
                                    data-aos-delay="100"
                                    >
                                    <a href="#" @click="changeActive(index)">
                                    <img
                                    :src="photo.url" class="w-100 thumbnail-image"
                                    :class="{active:index == activePhoto}"
                                    alt=""
                                    >
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>

                        {{-- {{ dd($foods) }} --}}
                        {{-- @if ($foods->food_galleries->isEmpty())
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ url('/vendor/img/default.png') }}" alt="">
                        @else
                            @foreach ($foods->food_galleries as $gallery)
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ Storage::url($gallery->photos) }}" alt="">
                            @endforeach
                        @endif --}}

                        {{-- <div class="date">{{ $foods->updated_at->diffForHumans() }}</div> --}}
                        {{-- style gambar belum ketemu --}}

                       </div>
                   </div>
                   <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">@lang('lang.about us')</h5>
                    <h1 class="mb-4">What About {{ $foods->food_name }} <i class="fa fa-utensils text-primary me-2"></i></h1>
                     <div class="uploader">By {{ $foods->user->name }}</div>
                    <p class="mb-4">{!! $foods->{'food_desc_'.app()->getLocale()} !!}</p>
                       <div class="row g-4 mb-4">
                           <div class="col-sm-6">
                               {{-- <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ count($foods->resto) }}</h1>
                                   <div class="ps-4">
                                       <p class="mb-0">Typical</p>
                                       <h6 class="text-uppercase mb-0">Solo Foods</h6>
                                   </div>
                               </div> --}}
                           </div>
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ count($foods->resto) }}</h1>
                                   <div class="ps-4">
                                       <p class="mb-0">Popular</p>
                                       <h6 class="text-uppercase mb-0">Place to Eat</h6>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- About End -->

        <!-- Story Start -->
       <div class="container-fluid py-5 bg-white">
           <div class="container">
               <div class="row g-5 align-items-center">
                 <div class="col-lg-8">
                       <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                           Theme
                       </h5>
                       <h1 class="mb-4">
                           Story of {{ $foods->food_name }}
                       </h1>
                       <p class="mb-4">
                            {!! $foods->{'food_history_'.app()->getLocale()} !!}
                       </p>

                   </div>
                   {{-- <div class="col-lg-4">
                       <div class="row g-3">
                           <div class="col-6 text-end static">
                               <img class="img-fluid rounded w-250 wow zoomIn" data-wow-delay="0.7s"
                                   src="/vendor/img/satekere1.jpg" />
                           </div>
                           <div class="col-6 text-end absolute ">
                               <img class="img-fluid rounded w-250 wow zoomIn" data-wow-delay="0.5s"
                                   src="/vendor/img/satekere.jpg" />
                           </div>
                       </div>
                   </div> --}}

               </div>
           </div>
       </div>
       <!-- Story End -->


       {{-- @dd($restos) --}}

        <!-- Popular Start -->
            <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Solo Foods</h5>
                    <h1 class="mb-5">Most Popular Resto</h1>
                </div>
                <div class="row g-4">
                    @forelse ($restos as $resto)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden p-2">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="{{ Storage::url($resto->resto_galleries->first()->photos ?? '') }}" alt="">
                            </div>
                            <h5 class="mb-0">{{ $resto->resto_name }}</h5>
                            <a href="{{ $resto->address_link }}" class="mb-1">{{ $resto->address }}</a>
                            {{-- <a class="mb-1">{{ $resto->address }}</a> --}}
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


        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp bg-white" data-wow-delay="0.1s">
           <div class="container">
               <div class="text-center">
                   <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                   <h1 class="mb-5">Suggestions and Critics!!!</h1>
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

       {{-- <h3>{{ $foods->id }}</h3> --}}
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
           <div class="row g-0">
               <div class="col-md-12 d-flex align-items-center">
                   <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                       <h5 class="section-title ff-secondary text-start text-primary fw-normal">Ulasan</h5>
                       <h1 class="text-dark mb-4">Give Your Review</h1>
                       <form action="{{ route('review', $foods->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                                @auth
                                <div class="col-12">
                                    <input type="hidden" name="food_id" value="{{ $foods->id }}">
                                    <input type="hidden" class="form-control" id="users_id" name="users_id" value="{{ Auth::user()->id }}" readonly>
                                </div>
                               @else
                                 <div class="col-12">
                                   <div class="form-floating">
                                       <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                       <label for="name">Name</label>
                                   </div>
                               </div>
                               @endauth
                               <div class="col-12 ">
                                <div class="form-floating">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rating" value="5" />
                                        <label for="star5" title="star5">5 stars</label>
                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label for="star4" title="star4">4 stars</label>
                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label for="star3" title="star3">3 stars</label>
                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label for="star2" title="star2">2 stars</label>
                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label for="star1" title="star1">1 star</label>
                                    </div>
                                </div>
                               </div>
                               <div class="col-12">
                                   <div class="form-floating">
                                       <textarea class="form-control" placeholder="Your Review" id="review" name="comment" style="height: 100px"></textarea>
                                       <label for="message">Your Review</label>
                                   </div>
                               </div>
                               <div class="col-12">
                                @auth
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Now</button>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary w-100 py-3">Sign To Review</a>
                                @endauth
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       </div>

       <!-- Back to Top -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted(){
           AOS.init();
        },
        data:{
          activePhoto: 0,
          photos:[
           @foreach($foods->food_galleries as $gallery)
            {
              id:{{ $gallery->id }},
              url:"{{ Storage::url($gallery->photos) }}",
            },
           @endforeach
          ],
        },
        methods:{
          changeActive(id){
            this.activePhoto = id;
          },
        },
      });
    </script>

@endpush
