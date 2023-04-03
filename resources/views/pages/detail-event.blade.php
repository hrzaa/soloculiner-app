@extends('layouts.app')
 @section('title')
    Detail Kuliner Page
 @endsection
@section('content')

     <div class="container-fluid py-5 bg-dark hero-even mb-5" style="background: linear-gradient(0deg,
            rgba(15, 23, 43, 0.75),
            rgba(15, 23, 43, 0.75)),
        url(/vendor/img/header-event.JPG), #0f172b;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Solo Indonesia Culinary Festival (SICF)</h1>
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
                           About Us
                       </h5>
                       <h1 class="mb-4">
                           Welcome to Culinary Festival
                       </h1>
                       <p class="mb-4">
                           Pada Hari Kamis, 9 Maret 2023. Solo Indonesia Culinary Festival (SICF) 2023 resmi dibuka. Opening ceremony dimulai pukul 19.00 di pelataran Benteng Vastenburg. Rencananya bakal dihadiri oleh Wali Kota Surakarta Gibran Rakabuming Raka.
                       </p>
                       <p class="mb-4">Gibran bersama forkompimda dan tamu undangan akan mengajak seluruh pengunjung SICF 2023 membakar sate bersama dalam acara Sate Fiesta. Sebanyak 10 ribu tusuk sate dibakar dan dibagikan gratis kepada para pengunjung.</p>
                   </div>
                  
               </div>
           </div>
       </div>
       <!-- About End -->
    
    <!-- About Start -->
        <div class="container-fluid py-5 bg-white">
           <div class="container py-2">
               <div class="row g-5 align-items-center">
                   <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Theme</h5>
                    <h1 class="mb-4">What About Culinary Festival <i class="fa fa-utensils text-primary me-2"></i></h1>
                       <p class="mb-4">Kuliner Solo atau Solo Indonesia Culinary Festival 2023 berlangsung di Halaman Benteng Vastenburg, Kota Surakarta, Jawa Tengah yaitu pada tanggal 9 sampai 12 Maret 2023. Ketua Panitia Pelaksana Solo Indonesia Culinary Festival 2023, yaitu Bapak Daryono, mengatakan bahwa festival tahun ini mengangkat tema cita rasa sate kuliner nusantara untuk mengenalkan sate ke masyarakat secara lebih luas lagi. Karena banyaknya wisatawan yang datang ke solo hanya untuk mencicipi Sate maka untuk tema kali ini berhungunan dengan sate.</p>
                       <p class="mb-4">Salah satu sate Legend yang ada di kota surakarta ini yaitu, Sate Kere. Jenis sate  ini merupakan jenis yang jarang ditemui di daerah lain dan masih banyak didapati di Kota Solo. Sate kere ini berasal dari bahan baku buangan yang kemudian diolah menjadi makanan. Bukan hanya unggul dari cita rasa tetapi harganya bisa luar biasa. </p>
                       <p class="mb-4">Saat ini potensi pariwisata Solo mulai menggeliat dan kuliner merupakan salah satu alasan orang datang ke destinasi wisata. Dan event ini merupakan upaya untuk meningkatkan perekonomian daerah melalui kuliner. Karena saat ini setiap daerah berpacu meningkatkan ekonomi daerahnya. </p>
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
                       <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                   </div>
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
               </div>
           </div>
       </div>
       <!-- About End -->
       
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
        <!-- Location End -->

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