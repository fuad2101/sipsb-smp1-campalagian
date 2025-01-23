<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SIPSB | SMP1 Campalagian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap v5.3.2 Landing Page Template" />
        <meta name="keywords" content="bootstrap v5.3.2, premium, marketing, multipurpose" />
        <meta content="Themesdesign" name="author" />

        <!-- fevicon -->
        <link rel="shortcut icon" href="/favicon-32x32.png" type="image/x-icon">

        {{-- Bootstrap CDNku --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Bootstrap css -->
        {{-- <link rel="stylesheet" href="/oxhen-template/css/bootstrap.min.css" type="text/css" /> --}}

        <!-- animation -->
        <link rel="stylesheet" href="/oxhen-template/css/aos.css" />

        <!-- slider -->
        <link rel="stylesheet" href="/oxhen-template/css/swiper-bundle.min.css" />

        <!-- Icon -->
        <link rel="stylesheet" href="/oxhen-template/css/materialdesignicons.min.css" type="text/css" />

        <!-- css -->
        <link rel="stylesheet" href="/oxhen-template/css/style.min.css" type="text/css" />


    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

        <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand text-uppercase" href="index-1.html">
                    <img class="logo-light" src="images/logo-light.png" alt="" height="25">
                    <img class="logo-dark" src="images/logo-dark.png" alt="" height="25">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                    <!-- toggle button -->
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fasilitas">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tenaga">Tenaga Pengajar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ekstrakulikuler">Ekstrakulikuler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-3 mb-lg-0" href="#contact">Alamat</a>
                        </li>
                    </ul>
                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-primary nav-btn" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                        Sign Up
                    </button> --}}
                    <a href="/login" class="btn btn-primary nav-btn">
                        Login / Daftar
                    </a>
                    <!-- Nav btn -->
                </div>
            </div><!-- End container -->
        </nav>
        <!-- End Navbar -->
          <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-close">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body p-5">
                            <div class="text-center mb-5">
                                <h4 class="modal-title" id="exampleModalLongTitle">Sing Up</h4>
                                <p class="fs-14">Already Have an account? <a href="javascript:void(0)">Log in here</a></p>
                            </div>
                            <div class="d-grid gap-3">
                                <a class="btn btn-outline-dark btn-lg" href="javascript:void(0)">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xs me-2" src="images/google.jpg" alt="Image Description">
                                    Sign up with Google
                                </span>
                                </a>
                                <a class="btn btn-primary btn-lg" href="javascript:void(0)">Sign up with Email</a>
                                <div class="text-center">
                                    <p class="mb-0 fs-13">By continuing you agree to our <a class="text-primary" href="javascript:void(0)">Terms and Conditions</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-block text-center px-5 pb-5">
                            <p class="footer-text mb-4">Trusted by the world's best teams</p>
                            <div class="mx-auto">
                              <div class="row justify-content-between">
                                <div class="col">
                                  <img class="img-fluid" src="images/github.svg" alt="Logo">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="images/gitlab.svg" alt="Logo">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="images/linkedin.svg" alt="Logo">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="images/instagram.svg" alt="Logo">
                                </div>
                              </div>
                            </div>
                            <!-- End Row -->
                          </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

        <div class="overflow-hidden-x">
            <!-- Start Home -->
        <section class="section home home-1" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="home-heading">
                            <h1 class="mb-3 text-white">Selamat Datang di Website SMP 1 <span class="typewrite text-primary d-none d-sm-inline-block" data-period="2000" data-type='[ "Campalagian" ]'>
                                <span class="wrap"></span> </span>
                            </h1>
                        </div>
                            <p class="text-white-50 fs-20">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>
                        <div class="home-btn hstack gap-2 flex-column d-sm-block">
                            <a class="btn btn-white me-1" href="/register">Daftar Calon Siswa Baru </a>
                            <a class="modal-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".watchvideomodal">
                                {{-- <span class="avatar-sm">
                                    <span class="avatar-title rounded-circle btn-icon">
                                        <i class="mdi mdi-play"></i>
                                    </span>
                                </span> --}}
                            </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                <div class="modal-content home-modal p-1">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <video id="VisaChipCardVideo" class="video-box" controls="">
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL -->
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!--end container-->
        </section>
        <!-- End Home -->

        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-arrow">
                    <a href="#features" class="mouse-down"><i class="mdi mdi-arrow-down arrow-icon text-dark h5"></i></a>
                </div>
            </div><!--end row-->
        </div><!--end container-->

        <!-- Start features -->
        <section class="section feature" id="fasilitas">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-4">
                            <h2 class="heading">Fasilitas SMP 1 Campalagian</h2>
                            <p class="text-muted fs-17">Ut enim ad minima veniam quis nostrum exercitationem ullam
                                corporis suscipit laboriosam nisi commodi consequatur.</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
                <div class="row justify-content-center">
                    {{-- <div class="col-lg-4 col-md-7 mt-sm-4">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="feature-card p-3 py-sm-4 rounded d-flex">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-responsive text-primary float-start me-3 h2"></i>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                        <div class="content">
                                            <h5 class="title">WiFi Gratis</h5>
                                            <p class="text-muted">One disadvantage of Lorum Ipsum is that in certain letters which is said more than.</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-7 mt-sm-4">
                        <div class="feature-card p-3 py-sm-4 rounded">
                            <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                            <div class="content d-block overflow-hidden">
                                <h5 class="title">Tenaga Pengajar Kompeten</h5>
                                <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem', which well-known is said which is said.</p>
                                {{-- <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-7 mt-sm-4">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="feature-card p-3 py-sm-4 rounded">
                                <i class="mdi mdi-clipboard-flow-outline text-primary float-start me-3 h2"></i>
                                <div class="content d-block overflow-hidden">
                                    <h5 class="title">Laboratorium Komputer dan Fisika<i class="fas fa-kiss-wink-heart    "></i> </h5>
                                    <p class="text-muted mt-2">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>
                                    {{-- <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row my-sm-5 py-5 align-items-center justify-content-between">
                    {{-- <div class="col-lg-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="card bg-transparent border-0 mb-3 mb-lg-0">
                                <img src="/oxhen-template/images/feature1.png" class="img-fluid rounded-3" alt="">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-5">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <h3 class="feature-heading mb-2">Kepala Sekolah</h3>
                            <p class="text-muted">Now that we've aligned the details, it's time to get things mapped out and organized. Now that we've aligned the details. </p>
                            <ul class="feature-list">
                                <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Advertising for a trade magazine</li>
                                <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Designing marketing materials </li>
                                <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Update website content</li>
                            </ul>
                            <a class="btn btn-primary" href="avascipt:void(0)">Learn more</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <h3 class="feature-heading">Visi</h3>
                            <p class="text-muted">Visi: Religius, memiliki kecakapan abad 21, berprestasi dan peduli lingkungan.</p>
                            <h3 class="feature-heading">Misi</h3>
                            <ul>
                                <li>Mewujudkan peserta didik yang religious sehingga terbangun insan yang beriman, bertaqwa, mandiri, berakhlak mulia, terampil, dan siap mendukung Pendidikan/jenjang berikutnya. </li>
                                <li>Mengarahkan peserta didik untuk memiliki kecakapan abad 21. </li>
                                <li>Mewujudkan peserta didik yang berprestasi akakdemik maupun non akademik.</li>
                            </ul>
                            {{-- <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a class="accordion-button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div>
                                            <p class="mb-0">Flexible access to facilities.</p>
                                            <p class="mb-0 fs-13 text-muted">Our new key fobs make it so easy!</p>
                                        </div>
                                    </a>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14 text-muted mb-1">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                        <a href="javascript:void(0)">
                                            Check it out <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div>
                                            <p class="mb-0">Snacks, drinks, coffee, and more.</p>
                                            <p class="mb-0 fs-13 text-muted">Keep your engine going with free food and drinks.</p>
                                        </div>
                                    </a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14 text-muted mb-0">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                        <a href="javascript:void(0)" class="fs-14 text-decoration-none">
                                            Check it out <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div>
                                            <p class="mb-0">On site tech support</p>
                                            <p class="mb-0 fs-13 text-muted">Connectivity, power, and IT issues solved in no time.</p>
                                        </div>
                                    </a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14 text-muted mb-0">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                        <a href="javascript:void(0)" class="fs-14 text-decoration-none">
                                            Check it out <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div> --}}
                        </div>
                    </div><!-- end col -->
                    {{-- <div class="col-lg-6">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="card bg-transparent border-0">
                                <img src="/oxhen-template/images/feature2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div> --}}
                </div><!-- end row-->
            </div><!-- end container -->
        </section>
        <!-- end Features -->

        <!-- Start cta -->
        <section class="section cta">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div data-aos="fade-down" data-aos-duration="1800">
                            <h3 class="fw-bold">Bergabunglah di SMP 1 Campalagian</h3>
                            <p>Bergabung dengan lebih dari 500 siswa dan kembangkan kreatifitas dan potensi kamu bersama kami</p>
                            <a class="btn btn-primary" href="javascript:void(0)">Daftar Sekarang</a>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section>
        <!-- End cta -->

        <!-- Start Reviews -->
        {{-- <section class="section reviews" id="review">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Apa Kata Alumni?</h2>
                            <p class="text-muted fs-17">Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum mauris sit amet arcu
                                fringilla auctor In eleifend maximus nisi sed vulputate.</p>
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators mb-0">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid" src="images/user/user1.png" alt="Image 1">
                                                            <div class="mt-3">
                                                                <h6 class="mb-0">Brandon Carney</h6>
                                                                <p class="text-muted mb-0 fs-14">Vice president</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                        <h5 class="reviews-heading">Client Reviews</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1" src="images/quote.png" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item active">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid" src="images/user/user2.png" alt="">
                                                            <div class="mt-3">
                                                                <h6 class="mb-0">Brandon Carney</h6>
                                                                <p class="text-muted mb-0 fs-14">Vice president</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                        <h5 class="reviews-heading">Client Reviews</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1" src="images/quote.png" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid" src="images/user/user.png" alt="">
                                                            <div class="mt-3">
                                                                <h6 class="mb-0">Brandon Carney</h6>
                                                                <p class="text-muted mb-0 fs-14">Vice president</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                        <h5 class="reviews-heading">Client Reviews</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1" src="images/quote.png" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->
                </div><!-- End row-->
            </div><!-- end container-->
        </section> --}}
        <!-- End Reviews -->

        <!-- START pricing -->
        {{-- <section class="section pricing" id="pricing">
            <div class="bg-shape"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Pricing</h2>
                            <p class="text-muted fs-17">Donec nec nibh vestibulum, fringilla ante nec, convallis turpis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rhoncus tristique nibh.</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- End row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="card pricing-box mx-1 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Standard</h6>
                                        <h1 class="mb-0 pt-2 fw-bold">$10 <sub class="fs-14 fw-normal">/-Monthly</sub></h1>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">150+ Templets</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">250+ Icons</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">Build Tools</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-close-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">Free Update</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-close-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">Source Files</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-grid">
                                        <a href="javascript:void(0)" class="btn btn-outline-primary">Choose Plan</a>
                                    </div>
                                </div>
                            </div><!-- End card -->
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card pricing-box mx-1 mt-4 active">
                            <span class="pricing-lable">populer</span>
                            <div class="card">
                                <div class="card-body">
                                    <h6>Premium</h6>
                                    <h1 class="mb-0 pt-2 fw-bold">$30 <sub class="fs-14 fw-normal">/-Monthly</sub></h1>
                                </div>
                            </div>
                            <div class="p-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shring-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 fs-14">290+ Templets</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shring-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 fs-14">400+ Icons</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shring-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 fs-14">Build Tools</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shring-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 fs-14">Free Update</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shring-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-close-circle-outline text-primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 fs-14">Source Files</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-grid">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary active">Choose Plan</a>
                                </div>
                            </div>
                        </div><!-- End card -->
                    </div><!-- col end -->
                    <div class="col-lg-4 col-md-6">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="card pricing-box mx-1 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Enterprise</h6>
                                        <h1 class="mb-0 pt-2 fw-bold">$39 <sub class="fs-14 fw-normal">/-Monthly</sub></h1>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">350+ Templets</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">999+ Icons</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">Build Tools</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">Free Update</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="mb-0 fs-14">Source Files</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-grid">
                                        <a href="javascript:void(0)" class="btn btn-outline-primary">Choose Plan</a>
                                    </div>
                                </div>
                            </div><!-- End card -->
                        </div>
                    </div><!-- col end -->
                </div><!-- End row -->
            </div><!-- End container -->
        </section> --}}
        <!-- END pricing -->

        <!-- Start cta -->
        {{-- <section class="section cta">
            <marquee behavior="" direction="left"><p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></marquee>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div data-aos="fade-down" data-aos-duration="1800">
                            <div class="cta-heading">Today Offer <span class="mb-3">
                                    <span class="counter_value" data-target="37">0</span>
                                    <span>% Off</span>
                                </span>!
                            </div>
                                <p>Now that we've aligned the details, it's time to get things mapped out and organized. Now that we've aligned the details.</p>
                                <!-- <p class="fs-18">Limited signup only. Order today before the discount period end.</p> -->
                                <a class="btn btn-primary" href="javascript:void(0)">Learn More</a>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section> --}}
        <!-- End cta -->

        <!-- Start Team -->
        <section class="section team" style="z-index: 1;" id="tenaga">
            <div id="particles-js" style="z-index: -1;">
            </div>
            <!-- end particles -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Tenaga Pengajar</h2>
                            <p class="text-muted fs-17">Tenaga Pengajar dan Staff SMP 1 Campalagian</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row -->
                <div class="row gy-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($pkn as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($pkn as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Pendidikan Kewarganegaraan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="pai" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($pai as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#pai" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#pai" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($pai as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#pai" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#pai" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Pendidikan Agama Islam</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="bhi" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($bhi as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#bhi" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#bhi" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($bhi as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#bhi" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#bhi" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Bahasa Indonesia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="matematika" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($matematika as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#matematika" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#matematika" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($matematika as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#matematika" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#matematika" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Matematika</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="ipa" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($ipa as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#ipa" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#ipa" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($ipa as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#ipa" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#ipa" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">IPA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="ips" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($ips as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#ips" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#ips" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($ips as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#ips" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#ips" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">IPS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="bahasa_inggris" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($bahasa_inggris as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#bahasa_inggris" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#bahasa_inggris" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($bahasa_inggris as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#bahasa_inggris" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#bahasa_inggris" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Bahasa Inggris</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="sbd" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($sbd as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#sbd" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#sbd" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($sbd as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#sbd" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#sbd" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Seni Budaya</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="pjok" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($pjok as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#pjok" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#pjok" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($pjok as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#pjok" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#pjok" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">PJOK</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="informatika" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($informatika as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#informatika" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#informatika" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($informatika as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#informatika" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#informatika" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Informatika</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="prakarya" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($prakarya as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#prakarya" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#prakarya" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($prakarya as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#prakarya" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#prakarya" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Prakarya</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="bimkol" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($bimkol as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#bimkol" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#bimkol" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($bimkol as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#bimkol" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#bimkol" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Bimbingan dan Konsultasi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div id="staff" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($staff as $val)
                                        @if ($loop->first)
                                            <button type="button" data-bs-target="#staff" data-bs-slide-to="0" class="active" aria-label="Slide 2"></button>
                                        @endif
                                            <button type="button" data-bs-target="#staff" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide 2"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($staff as $val)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="https://placehold.co/400x400?text=Photo" class="d-block w-100" alt="Image 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{$val->nama}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#staff" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#staff" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Staff Administrasi</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- end row-->
            </div><!-- end cotainer-->
        </section>
        <!-- End Team -->

        <!-- Start ekstrakulikuler -->
        <section class="section reviews" id="ekstrakulikuler">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Ekstrakulikuler</h2>
                            <p class="text-muted fs-17">Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum mauris sit amet arcu
                                fringilla auctor In eleifend maximus nisi sed vulputate.</p>
                        </div>
                    </div><!-- end col-->
                    {{-- <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators mb-0">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid" src="images/user/user1.png" alt="">
                                                            <div class="mt-3">
                                                                <h6 class="mb-0">Brandon Carney</h6>
                                                                <p class="text-muted mb-0 fs-14">Vice president</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                        <h5 class="reviews-heading">Client Reviews</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1" src="images/quote.png" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item active">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid" src="images/user/user2.png" alt="">
                                                            <div class="mt-3">
                                                                <h6 class="mb-0">Brandon Carney</h6>
                                                                <p class="text-muted mb-0 fs-14">Vice president</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                        <h5 class="reviews-heading">Client Reviews</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1" src="images/quote.png" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid" src="images/user/user.png" alt="">
                                                            <div class="mt-3">
                                                                <h6 class="mb-0">Brandon Carney</h6>
                                                                <p class="text-muted mb-0 fs-14">Vice president</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                        <h5 class="reviews-heading">Client Reviews</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1" src="images/quote.png" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col--> --}}

                </div>
                <div class="row row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                            <img src="https://img.dummy-image-generator.com/_mono/dummy-400x400-colorBAD0C4-plain.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pramuka</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi non, id fuga sit consequuntur, eveniet, itaque iure rerum architecto earum eius.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="https://img.dummy-image-generator.com/_mono/dummy-400x400-colorBAD0C4-plain.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PMR</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi non, id fuga sit consequuntur, eveniet, itaque iure rerum architecto earum eius.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="https://img.dummy-image-generator.com/_mono/dummy-400x400-colorBAD0C4-plain.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tari</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi non, id fuga sit consequuntur, eveniet, itaque iure rerum architecto earum eius.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="https://img.dummy-image-generator.com/_mono/dummy-400x400-colorBAD0C4-plain.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bimbingan Prestasi</h5>
                                <p class="card-text">
                                    <ul>
                                        <li>OSN</li>
                                        <li>Matematika</li>
                                        <li>IPA</li>
                                        <li>IPS</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="https://img.dummy-image-generator.com/_mono/dummy-400x400-colorBAD0C4-plain.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Seni Tari</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi non, id fuga sit consequuntur, eveniet, itaque iure rerum architecto earum eius.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="https://img.dummy-image-generator.com/_mono/dummy-400x400-colorBAD0C4-plain.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Layanan Bimbingan Konseling</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi non, id fuga sit consequuntur, eveniet, itaque iure rerum architecto earum eius.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- End ekstrakulikuler -->

        <!-- Start contact -->
        <section class="section contact" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h2 class="heading">Alamat</h2>
                            <p class="text-muted mt-2 fs-17">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row align-items-center gy-3">
                    <div class="col-lg-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="card">
                                <div class="card-body">
                                    <div class="map">  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15929.868272369451!2d119.1395683!3d-3.4786316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d949153383893ad%3A0xac0325ff4af3f87a!2sSMP%20Negeri%201%20Campalagian!5e0!3m2!1sid!2sid!4v1728445627297!5m2!1sid!2sid"
                                        width="100%" height="325" style="border: 0" allowfullscreen></iframe>  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                                <span id="error-msg"></span>
                                <div class="row rounded-3 py-3">
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                        <span class="input-group-text align-items-start"><i class="mdi mdi-comment-text-outline"></i></span>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Kirim Pesan">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end form-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- End contect -->

        <!-- START FOOTER -->
        <footer class="section footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-10 text-center">
                        <a href="javascript:void(0)"><img src="images/logo-light.png" height="24" alt=""></a>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Home</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="#fasilitas">Fasilitas</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Tenaga Pengajar</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Ekstrakulikuler</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Alamat</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div>
            <!--end container-->
        </footer>
        <!-- END FOOTER -->
        </div>


        <!-- FOOTER-ALT -->
        <div class="footer-alt pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-white fs-15">©
                                <script>document.write(new Date().getFullYear())</script> Created by <a href="https://www.mandar.web.id" target="_blank">Mandar Web</a> with
                                <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER-ALT -->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!--Custom js-->
        <script src="/oxhen-template/js/counter.js"></script>

        <!--Bootstrap Js-->
        <script src="/oxhen-template/js/bootstrap.bundle.min.js"></script>

        <!-- animation -->
        <script src="/oxhen-template/js/aos.js"></script>

        <!-- swiper js -->
        <script src="/oxhen-template/js/swiper-bundle.min.js"></script>

        <!-- contact -->
        <script src="/oxhen-template/js/contact.js"></script>

        <!-- Team particles-->
        <script src="/oxhen-template/js/particles.min.js"></script>

        <!-- App Js -->
        <script src="/oxhen-template/js/app.js"></script>

    </body>
</html>







{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIPSB | SMP 1 Campalagian</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>

        </div>
    </body>
</html> --}}
