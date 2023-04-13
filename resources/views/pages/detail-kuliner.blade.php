@extends('layouts.app')
 @section('title')
    Detail Kuliner Page
 @endsection
@section('content')
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
                           <div class="col-6 text-start">
                               <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="/vendor/img/satekere2.jpg">
                           </div>
                           <div class="col-6 text-start">
                               <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="/vendor/img/satekere3.jpg" style="margin-top: 25%;">
                           </div>
                           <div class="col-6 text-end">
                               <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="/vendor/img/satekere1.jpg">
                           </div>
                           <div class="col-6 text-end">
                               <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="/vendor/img/satekere4.jpg">
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h1 class="mb-4">What About Sate Kere <i class="fa fa-utensils text-primary me-2"></i></h1>
                       <p class="mb-4">Sate Kere adalah sebutan untuk salah satu kuliner khas Solo yang terbuat dari tempe gambus yaitu tempe yang dibuat dari ampas tahu. Selain tempe, bahan dasar pembuatan sate ini juga menggunakan jeroan sapi seperti paru dan usus sapi. Sate ini juga dilengkapi dengan bumbu kacang atau sambal kecap yang sama seperti sate pada umumnya.</p>
                       <div class="row g-4 mb-4">
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">18</h1>
                                   <div class="ps-4">
                                       <p class="mb-0">Typical</p>
                                       <h6 class="text-uppercase mb-0">Solo Foods</h6>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                   <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">36</h1>
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
                           Story of Sate Kere
                       </h1>
                       <p class="mb-4">
                           Di zaman dahulu, sate menjadi salah satu makanan termewah yang hanya bisa disantap oleh kalangan menengah ke atas. Istilah kere yang berarti gelandangan merupakan salah satu pencitraan terhadap kalangan bawah yang terlalu sayang untuk membeli setusuk sate. Atas alasan inilah para kalangan bawah melakukan intervensi. Mereka membuat bentuk lain sate dengan bahan dasar jeroan sapi yang mana jika dilihat, sate ini menyerupai sate pada umumnya. 
                       </p>
                       <p class="mb-4">
                        Cara inilah yang menjadi daya tarik bagi kalangan bawah untuk menikmati sate yang kemudian melahirkan sate kere (satenya orang miskin). Selain itu, sate ini merupakan perwujudan perlawanan dari kalangan bawah kepada kalangan bangsawan dalam budaya feodal yang zaman dahulu masih sangat kental dirasakan oleh masyarakat jawa. 
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
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

       <!-- Back to Top -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection