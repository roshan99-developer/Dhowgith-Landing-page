@extends('layouts.main')

@section('content')

<!--===== WELCOME STARTS =======-->
<div class="about-welcome-section-area about3" style="background-image: url({{ asset('assets/images/background/header2-bg.png') }}); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 m-auto">
                <div class="about-welcome-header text-center heading3">
                    <h1>Access Quad From Everywhere</h1>
                    <div class="space16"></div>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span>Download</span></a>
                </div>
                <div class="download-images">
                    <img src="{{ asset('assets/images/all-images/download-img2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WELCOME ENDS =======-->



<!--===== BLOG INNER STARTS =======-->
<div class="blog-inner-section inner-download">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="blog-inner-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-inner-header heading6">
                                <span>Blog & News</span>
                                <div class="space16"></div>
                                <h2>Article On Growth Quad  Sass & Software</h2>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="content-area heading6">
                                <p>Stay informed and inspired with the latest articles, tutorials, and industry news on our blog. Our team of experts curates content specifically tailored to web developers looking to optimize their workflow with Sass.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    <div class="row">
                        <div class="blog-inner-boxs">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="images">
                                        <img src="{{ asset('assets/images/all-images/download-img3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content tags">
                                        <span>Quad</span>
                                        <div class="space16"></div>
                                        <a href="#">Desktop Version</a>
                                        <div class="space16"></div>
                                        <p>Get work done from your desktop.</p>
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('assets/images/all-images/google-img.png') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/images/all-images/google-img1.png') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space24"></div>
                        <div class="col-lg-6">
                            <div class="blog-inner-boxarea">
                                <div class="images">
                                    <img src="{{ asset('assets/images/all-images/download-img4.png') }}" alt="">
                                </div>
                                <div class="space24"></div>
                                <div class="content tags">
                                    <span>Mobile</span>
                                    <div class="space16"></div>
                                    <a href="#">Mobile App</a>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('assets/images/all-images/google-img.png') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/all-images/google-img1.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog-inner-boxarea">
                                <div class="images">
                                    <img src="{{ asset('assets/images/all-images/download-img5.png') }}" alt="">
                                </div>
                                <div class="space24"></div>
                                <div class="content tags">
                                    <span>Chrome</span>
                                    <div class="space16"></div>
                                    <a href="#">Chrome Extensions</a>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('assets/images/all-images/web-img1.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-inner-boxarea">
                                <div class="images">
                                    <img src="{{ asset('assets/images/all-images/download-img6.png') }}" alt="">
                                </div>
                                <div class="space24"></div>
                                <div class="content tags">
                                    <span>Email</span>
                                    <div class="space16"></div>
                                    <a href="#">Email Add-ons</a>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('assets/images/all-images/web-img1.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog-inner-boxarea">
                                <div class="images">
                                    <img src="{{ asset('assets/images/all-images/download-img7.png') }}" alt="">
                                </div>
                                <div class="space24"></div>
                                <div class="content tags">
                                    <span>Apple</span>
                                    <div class="space16"></div>
                                    <a href="#">Apple Watch</a>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('assets/images/all-images/google-img1.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG INNER ENDS =======-->

@endsection