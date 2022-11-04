<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proud Kepri</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    @include('layouts.landing-page.stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/review.css') }}">
    <link href="{{ asset('img/logo-bar.png') }}" rel="icon" type="image/x-icon">

<body>
    <!---Javascript-->
    @include('layouts.landing-page.javascript')
    <!---/Javascript-->

    <!---Navbar-->
    @include('layouts.landing-page.navbar')
    <!---/Navbar-->

    <!---Bagian Utama-->
    <div class="mb-5" style="background-color:#24373D;">
        <div class="container" id="home">
            <div class="row">
                <!--Left Col-->
                <div class="col-sm-6 text-white text-center text-sm-start my-4 my-sm-auto">
                    <h1 class="fs-1 fw-bold"><b>Why is it Important to <span style="color: #CC9E5F">Build Branding </span> Social Media</b></h1>
                    <p>Curious? Just scroll for the answer :) </p>
                    <button style="background: #CC9E5F;" type="button" class="btn btn-lg"><a style="text-decoration: none; color: white;" href="https://wa.me/6281371961901?text=Hi%20I'm%20interesting%20with%20your%20Portfolio%20how%20to%20make%20a%20collaboration%20?"><b>Let's Talk</b></a></button>
                </div>
                <!--Right Col-->
                <div class="col-sm-6 d-flex align-items-end justify-content-center">
                    <!--Gambar-->
                    <img src="{{ asset('img/foto-utama-line.png') }}" alt="Logo" class="img-fluid w-75 my-4">
                </div>
            </div>
        </div>
    </div>
    <!---/Bagian Utama-->



    <!--Container-->
    <!--Portofolio-->
    <div class="container" id="portofolio">
        <!-- Subtittle-->
        <div class="col col-sm-7 text-center mx-auto">
            <h2><b>So, Do You Want Your Social Media Branding To Look <span style="color: #CC9E5F">Professional</span> Like This?</b></h2>
            <p>We can help you manage and display a professional branding design</p>
        </div>
        <!-- isi -->
        <div class="container-img">
            <div class="slide-container">
                <div class="slide-image">
                    <img src="{{ asset('img/1.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img src="{{ asset('img/2.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img src="{{ asset('img/1.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img src="{{ asset('img/2.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img-porto src="{{ asset('img/1.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img src="{{ asset('img/2.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img src="{{ asset('img/1.png') }}" alt="">
                </div>
                <div class="slide-image">
                    <img src="{{ asset('img/2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--/Portofolio-->

    <!-- Feedback-->
    <div class="container my-5" id="feedback">
        <div class="text-center fs mx-auto">
            <h2><b> Let's Hear What <span style="color: #CC9E5F">They Say </span></b></h2>
            <p>We can help you manage and display a professional branding design</p>
        </div>
        <!-- isi -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/women.jfif') }}" alt="" style=" width: 50px; height: 50px; border-radius: 60%;">
                            <h5 class=" card-title mt-3">Q-House</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/women.jfif') }}" alt="" style=" width: 50px; height: 50px; border-radius: 60%;">
                            <h5 class=" card-title mt-3">Tanfood</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/women.jfif') }}" alt="" style=" width: 50px; height: 50px; border-radius: 60%;">
                            <h5 class=" card-title mt-3">Global</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- /Feedback-->

    <!--- Brand Partner -->
    <div class="container my-5 mt-5 mb-5" id="brand-partner">
        <!-- Subtittle-->
        <div class="text-center">
            <h2> <b> Brands <span style="color: #CC9E5F">We Manage </span></b></h2>
            <p>Some of the brands that we have managed social media brands</p>
        </div>
        <!-- isi -->
        <div class="image_row">
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-aloptical.png') }}" alt="" style="width: 80px;">
                    </div>
                </div>
            </div>
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-qhouse.png') }}" alt="" style="width: 80px;">
                    </div>
                </div>
            </div>
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-petdreams.png') }}" alt="" style="width: 80px;">
                    </div>
                </div>
            </div>
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-kopinagih.png') }}" alt="" style="width: 80px;">
                    </div>
                </div>
            </div>
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-md.png') }}" alt="" style="width: 60px;">
                    </div>
                </div>
            </div>
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-indahrasa.png') }}" alt="" style="width: 80px;">
                    </div>
                </div>
            </div>
            <div class="image_cont">
                <div class="images">
                    <div class="image_effect">
                        <img src="{{ asset('img/brand-tanfood.jpg') }}" alt="" style="width: 80px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- /Brand Partner -->

    <!--- Tentang -->
    <div class="container my-5 mt-5 mb-5" id="about">
        <!-- Subtittle-->
        <div class="text-center fs mx-auto">
            <h2><b> Proud Kepri <span style="color: #CC9E5F"> Suitable</span> For You</b></h2>
            <p>If you want the following, Proud Kepri will suit y</p>
        </div>
        <!-- isi -->
        <div class="row">
            <div class="col-6 col-sm-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/favorite.png') }}" alt="" style="width: 60px; height: 60px; display: block; margin-left:auto; margin-right:auto">
                        <h6 class="card-text text-center mt-3">Menampilkan kualitas produk dan membangun kredibilitas brand Anda</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/chatting.png') }}" alt="" style="width: 60px; height: 60px; display: block; margin-left:auto; margin-right:auto">
                        <h6 class="card-text text-center mt-3">Memudahkan interaksi dengan konsumen dan calon konsumen Anda</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/graph.png') }}" alt="" style="width: 60px; height: 60px; display: block; margin-left:auto; margin-right:auto">
                        <h6 class="card-text text-center mt-3">Memudahkan interaksi dengan konsumen dan calon konsumen Anda</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/profits.png') }}" alt="" style="width: 60px; height: 60px; display: block; margin-left:auto; margin-right:auto">
                        <h6 class="card-text text-center mt-3">Memudahkan interaksi dengan konsumen dan calon konsumen Anda</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- /Tentang -->

    <!--- Servis -->
    <div class="container my-5 mt-5 mb-5" id="services">
        <!-- Subtittle-->
        <div class="text-center fs mx-auto my-5">
            <h2><b> Our<span style="color: #CC9E5F"> Service</span></b></h2>
            <p>Digital marketing services you can choose</p>
        </div>
        <!-- isi -->
        <div class="row text-white">
            <div class="col-12 col-sm-6">
                <div class="card mt-3" style="background: #B73E3E;">
                    <div class=" card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('img/logo-designer.png') }}" alt="..." style="width: 50px; height: 50px; display: block; margin-left:auto; margin-right:auto">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><b>Sosial Media Management</b></h5>
                                <p>Layanan social media management, membantu membuat konten, desain dan postingan terjadwal di social media Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card mt-3" style="background: #FF884B;">
                    <div class="card-body d-flex flex-row">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('img/consultation.png') }}" alt="..." style="width: 50px; height: 50px; display: block; margin-left:auto; margin-right:auto">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><b>Brand Consultant</b></h5>
                                <p>Layanan brand consultant, rekomendasi tepat untuk menjadi partner konsultan brand bisnis Anda.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card mt-3" style="background: #379237;">
                    <div class="card-body d-flex flex-row">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('img/tripod.png') }}" alt="..." style="width: 50px; height: 50px; display: block; margin-left:auto; margin-right:auto">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><b>Photografi</b></h5>
                                <p>Layanan foto produk untuk brand anda. Dengan photografer profesional dan berpengalaman<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card mt-3" style="background: #277BC0;">
                    <div class="card-body d-flex flex-row">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('img/graphic-designer.png') }}" alt="..." style="width: 50px; height: 50px; display: block; margin-left:auto; margin-right:auto">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5><b>Logo Designer</b></h5>
                                <p>Layanan desain logo. Desainer professional siap membantu membuat logo anda menjadi berkelas dan profesional<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- /Servis -->

    <!-- Paket -->
    <div class="container my-5 mt-5 mb-5" id="package">
        <!-- Subtittle-->
        <div class="text-center mx-auto">
            <h2><b>Package<span style=" color: #CC9E5F"> List</span></b></h2>
            <p>You can choose a package according to your needs and of course it is wallet-friendly</p>
        </div>
        <!-- isi -->
        <div class="row">
            <div class="col-12 col-sm-6 mt-3">
                <div class="card text-light bg-secondary">
                    <div class="card-body">
                        <h1 class="text-center my-5">PAKET PREMIUM</h1>
                        <div class="d-flex justify-content-center my-4">
                            <img src="{{ asset('img/ig-white.png') }}" alt="" style="width: 30px; height: 30px;float:right;display:block;">
                            <img src="{{ asset('img/tiktok-white.png') }}" alt="" style="width: 30px; height: 30px; float:right;display:block;" class="ml-2">
                        </div>
                        <h1 class="text-center my-4"><span style="color:#FFFF00"><b>RP. 2.750.000</span></b></h1>
                        <ul>
                            <h5>
                                <li><b> ✓ Desain Konten Harian</li>
                                <li> ✓ Reels Seminggu 3x
                                <li> ✓ Promosi Seminggu 3x</li>
                                <li> ✓ Boom Story Harian</b></li>
                                <li> ✓ Free Admin</li>
                                <li> ✓ Free Copywriting</li>
                                <li> ✓ Hastag Tertarget</li>
                                <li> ✓ Report Insight Bulanan</li>
                                <li> ✓ Cover Tiktok dan Reels</li>
                                <li> ✓ Tiktok Boots</li>
                                <br>
                                <br>
                                <br>
                                <br>
                            </h5>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-bg-gray mt-3">
                    <div class="card-body">
                        <h1 class="text-center my-5"><b>PAKET JUARA</b></h1>
                        <div class="d-flex justify-content-center my-4">
                            <img src="{{ asset('img/instagram.png') }}" alt="" style="width: 30px; height: 30px;float:right;display:block;">
                            <img src="{{ asset('img/tik-tok.png') }}" alt="" style="width: 30px; height: 30px; float:right;display:block;" class="ml-2">
                            <img src="{{ asset('img/whatsapp.png') }}" alt="" style="width: 30px; height: 30px;float:right;display:block;" class="ml-2">
                            <img src="{{ asset('img/facebook.png') }}" alt="" style="width: 30px; height: 30px; float:right;display:block;" class="ml-1">
                        </div>
                        <h1 class="text-center my-4"><span style="color: #CC9E5F"><b>RP. 5.800.000</span></b></h1>
                        <ul>
                            <h5>
                                <li><b> ✓ 2 Desain Konten Harian (Carousel)</li>
                                <li> ✓ Daily Video Reels & Tiktok
                                <li> ✓ Promosi Setiap Hari (Feed & Story)</li>
                                <li> ✓ Boom Story Harian</b></li>
                                <li> ✓ Free Admin</li>
                                <li> ✓ Free Copywriting</li>
                                <li> ✓ Hastag Tertarget</li>
                                <li> ✓ Report Insight Bulanan</li>
                                <li> ✓ Cover Tiktok dan Reels</li>
                                <li> ✓ Tiktok FYP Target</li>
                                <li> ✓ Free Desain Tentatif (Flyer, dsb)</li>
                                <li> ✓ Free Instagram & Facebook Ads 3x</li>
                                <li> ✓ WhatsApp 5 Account Boots</li>
                                <li> ✓ Daily Facebook Boots</li>
                            </h5>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Paket -->

    <!-- Hubungi Kami-->
    <div class="container my-5 mt-5 mb-5" id="call-me">
        <!--Left Col-->
        <div class="col col-sm-7 text-center mx-auto ">
            <h2 class="fs-1 fw-bold my-1 py-5" style="color:black;">Are you interested in us managing your social media brand?</h2>
            <button style="background: #CC9E5F;" type="button" class="btn-lg btn rounded shadow fw-bold"><a style="text-decoration: none; color: white;" href="https://wa.me/6281371961901?text=Hi%20I'm%20interesting%20with%20your%20Portfolio%20how%20to%20make%20a%20collaboration%20?">Contact Us</a></button>
        </div>
        <!--Right Col-->
        <div>
            <img src="{{ asset('img/foto-kedua-line.png') }}" alt="Logo" class="img-fluid w-50 my-5" style="margin-left:auto;margin-right:auto;display:bloack;">
        </div>
    </div>
    <!-- /Hubungi Kami-->


</body>

<!-- Footer-->
@include('layouts.landing-page.footer')
<!-- /Footer-->

</html>