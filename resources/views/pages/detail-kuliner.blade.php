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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
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

                        {{-- {{ dd($foods) }} --}}
                        @if ($foods->food_galleries->isEmpty())
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ url('/vendor/img/default.png') }}" alt="">
                        @else
                            @foreach ($foods->food_galleries as $gallery)
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ Storage::url($gallery->photos) }}" alt="">
                            @endforeach
                        @endif
                       
                        {{-- <div class="date">{{ $foods->updated_at->diffForHumans() }}</div> --}}
                        {{-- style gambar belum ketemu --}}
                        
                       </div>
                   </div>
                   <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h1 class="mb-4">What About {{ $foods->food_name }} <i class="fa fa-utensils text-primary me-2"></i></h1>
                     <div class="uploader">By {{ $foods->user->name }}</div>   
                    <p class="mb-4">{!! $foods->food_desc !!}</p>
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
                            {!! $foods->food_desc !!}
                       </p>
                       
                   </div>
                   <div class="col-lg-4">
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
                   </div>
                  
               </div>
           </div>
       </div>
       <!-- Story End -->

            <!-- Popular Start -->
        <div class="container-xxl pt-5 pb-3">
           <div class="container">
               <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                   <h5 class="section-title ff-secondary text-center text-primary fw-normal">Solo Foods</h5>
                   <h1 class="mb-5">Most Popular Items</h1>
               </div>
               <div class="row g-4">
                   <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="team-item text-center rounded overflow-hidden">
                           <div class=" overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/team-1.jpeg" alt="">
                           </div>
                           <h5 class="mb-0">Sate Kere </h5>
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
                   <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                       <div class="team-item text-center rounded overflow-hidden">
                           <div class=" overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/team-2.jpg" alt="">
                           </div>
                           <h5 class="mb-0">Serabi Notosuman</h5>
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
                   <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                       <div class="team-item text-center rounded overflow-hidden">
                           <div class=" overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/team-3.jpg" alt="">
                           </div>
                           <h5 class="mb-0">Es Dawet Mbok Darmi</h5>
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
                   <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                       <div class="team-item text-center rounded overflow-hidden">
                           <div class=" overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/team-4.jpeg" alt="">
                           </div>
                           <h5 class="mb-0">Dimsum Ps. Gede</h5>
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
               </div>
           </div>
       </div>
       <!-- Popular End -->

       
        <!-- Location Start -->
        <div class="container-fluid py-5 bg-white">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1098190545263!2d110.83339197465479!3d-7.563004192450958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17bfca3568f1%3A0x52872ee12cf2fa57!2sKampus%20UNS%20Mesen!5e0!3m2!1sen!2sid!4v1683777846264!5m2!1sen!2sid" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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