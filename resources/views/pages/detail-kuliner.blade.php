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

                        {{-- {{ dd($restos) }} --}}
                        
                        {{-- style gambar belum ketemu --}}
                        @foreach ($restos as $resto)
                            <div class="col-6 text-start">
                               <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ Storage::url($resto->photos) }}">
                           </div>
                        @endforeach
                        
                       </div>
                   </div>
                   <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h1 class="mb-4">What About {{ $foods->food_name }} <i class="fa fa-utensils text-primary me-2"></i></h1>
                       <p class="mb-4">{!! $foods->food_desc !!}</p>
                       <div class="row g-4 mb-4">
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $foodCount }}</h1>
                                   <div class="ps-4">
                                       <p class="mb-0">Typical</p>
                                       <h6 class="text-uppercase mb-0">Solo Foods</h6>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $restoCount }}</h1>
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
        <div class="container-fluid pt-5 pb-3 bg-white">
           <div class="container">
               <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                   <h5 class="section-title ff-secondary text-center text-primary fw-normal">Solo Foods</h5>
                   <h1 class="mb-5">Most Popular Items</h1>
               </div>
               <div class="row g-4">
                   <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="team-item text-center rounded overflow-hidden">
                           <div class="rounded overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/satekere.jpg" alt="">
                           </div>
                           <h5 class="mb-0">Sate Kere</h5>
                            <!-- Add icon library -->
                            <small> 
                                {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </small>
                           <div class="d-flex justify-content-center mt-3">
                               <a class="btn btn-square btn-primary mx-1" href=""><i class="fa fa-map-marker"></i></a>
                               <a class="btn btn-square btn-primary mx-1" href=""><i class="fa fa-shopping-cart"></i></a>
                               <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                       <div class="team-item text-center rounded overflow-hidden">
                           <div class="rounded overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/satekere1.jpg" alt="">
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
                           <div class="rounded overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/satekere2.jpg" alt="">
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
                           <div class="rounded overflow-hidden m-4">
                               <img class="img-fluid" src="/vendor/img/satekere3.jpg" alt="">
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

         <!-- Ulasan Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
           <div class="row g-0">
               <div class="col-md-6">
                   <div class="video">
                       <button type="button" class="btn-play" data-bs-toggle="modal" data-src="img/video.mp4" data-bs-target="#videoModal">
                           <span></span>
                       </button>
                   </div>
               </div>
               <div class="col-md-6 bg-dark d-flex align-items-center">
                   <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                       <h5 class="section-title ff-secondary text-start text-primary fw-normal">Ulasan</h5>
                       <h1 class="text-white mb-4">Give Your Review</h1>
                       <form>
                           <div class="row g-3">
                               <div class="col-md-6">
                                   <div class="form-floating">
                                       <input type="text" class="form-control" id="name" placeholder="Your Name">
                                       <label for="name">Your Name</label>
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-floating">
                                       <input type="email" class="form-control" id="email" placeholder="Your Email">
                                       <label for="email">Your Email</label>
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-floating date" id="date3" data-target-input="nearest">
                                       <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                       <label for="datetime">Date & Time</label>
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-floating">
                                       <select class="form-select" id="select1">
                                         <option value="1">People 1</option>
                                         <option value="2">People 2</option>
                                         <option value="3">People 3</option>
                                       </select>
                                       <label for="select1">No Of People</label>
                                     </div>
                               </div>
                               <div class="col-12">
                                   <div class="form-floating">
                                       <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                       <label for="message">Special Request</label>
                                   </div>
                               </div>
                               <div class="col-12">
                                   <button class="btn btn-primary w-100 py-3" type="submit">Send Now</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
        

       <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp bg-white" data-wow-delay="0.1s">
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
       <!-- Testimonial End -->
       </div>

       <!-- Back to Top -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection