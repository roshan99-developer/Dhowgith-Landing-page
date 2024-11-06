@extends('layouts.main')

@section('content')


 <!--===== WELCOME STARTS =======-->

 <div class="welocme1-section-area" style="background-image: url('{{ asset('assets/images/background/header-bg1.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="welcome-content-header heading1">
          <div class="elementors-img">
            <img src="{{ asset('assets/images/elements/header-element1.png') }}" alt="" class="keyframe4">
          </div>
          <h1 class="text-anime">Unlock Seamless Project Management with Quad</h1>
          <p data-aos="fade-up" data-aos-duration="1200">Welcome to Quad the ultimate solution for modern project management. Streamline your <br> workflow, collaborate effortlessly, and achieve unparalleled project success. </p>
          <div class="welcome-btnarea text-center" data-aos="fade-up" data-aos-duration="1400">
            <a href="{{ route('home.download') }}" class="header-btn">15 Days Free Trial <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ route('home.contect') }}" class="header-btn1">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--===== WELCOME ENDS =======--> 



<!--===== TESTIMONIAL STARTS =======-->
<section class="swiper-container" data-aos="fade-down" data-aos-duration="1000">
  <h2 class="d-none">Heading starts</h2>
  <div class="swiper-wrapper">
      <div class="swiper-slide">
          <img src="{{ asset('assets/images/all-images/swiper-carousel-img1.png') }}" alt="" class="entity-img" data-animation="image">
      </div>
      <div class="swiper-slide">
          <img src="{{ asset('assets/images/all-images/swiper-carousel-img2.png') }}" alt="" class="entity-img">
      </div>
      <div class="swiper-slide">
          <img src="{{ asset('assets/images/all-images/swiper-carousel-img3.png') }}" alt="" class="entity-img">
      </div>
  </div>
  <div class="swiper-pagination"></div>
</section>
<!--===== TESTIMONIAL ENDS =======-->


  <!--===== COUNTER AREA STARTS =======-->
  <div class="counter1-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="counter-auhtor-area" data-aos="fade-up" data-aos-duration="800">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter-box1 text-center">
                  <h3><span class="counter">450</span></h3>
                  <p>Project Done</p>
                </div>  
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-box1 text-center" data-aos="fade-up" data-aos-duration="1000">
                  <h3><span class="counter">96</span>%</h3>
                  <p>Success Rate</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-box1 text-center" data-aos="fade-up" data-aos-duration="1200">
                  <h3><span class="counter">220</span></h3>
                  <p>Winning Awards</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-box1 text-center counter-after" data-aos="fade-up" data-aos-duration="1400">
                  <h3><span class="counter">75</span>K</h3>
                  <p>Happy Client</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== COUNTER AREA ENDS =======-->

  <!--===== SLIDER AREA STARTS =======-->
<div class="slider1-section-area" data-aos="fade-up" data-aos-duration="1000">
  <div class="marquee-wrap">
      <div class="marquee-text">
          <div class="brand-single-box">
              <h3>Software & Sass Landing Page <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Project Management <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Startup Business <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Creative Design <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Software & Sass Landing Page <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Project Management <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Startup Business <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Creative Design <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Software & Sass Landing Page <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Project Management <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Startup Business <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Creative Design <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Software & Sass Landing Page <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Project Management <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Startup Business <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>

          <div class="brand-single-box">
              <h3>Creative Design <img src="{{ asset('assets/images/elements/marque-elements1.svg') }}" alt=""></h3>
          </div>
      </div>
  </div>
</div>
<!--===== SLIDER AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area sp3">
  <div class="container">
      <div class="row">
          <div class="col-lg-10 m-auto">
              <div class="service1-header heading2 text-center">
                  <span data-aos="fade-up" data-aos-duration="800">Why Choose Us</span>
                  <h2 data-aos="fade-up" data-aos-duration="1000">Powerful Project Collaboration Starts Here</h2>
              </div>
          </div>
          <div class="space60"></div>
      </div>

      <div class="service-vertical-tabs">
          <img src="{{ asset('assets/images/elements/tabs-elements1.png') }}" alt="" class="tabs-elements keyframe4">
          <div class="grid">
              <div class="row">
                  <div class="col-lg-5">
                      <div class="service-tabs-grid">
                          <div class="menu">
                              <div class="active">
                                  <span class="light"></span>
                                  <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="800">
                                      <div class="tabs-btn-icon">
                                          <img src="{{ asset('assets/images/icons/tabs-btn1.svg') }}" alt="">
                                      </div>
                                      <div class="tabs-btn-content">
                                          <h4>User-Friendly Interface</h4>
                                          <p>Prioritise user experience</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="space16"></div>
                              <div>
                                  <span class="light"></span>
                                  <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1000">
                                      <div class="tabs-btn-icon">
                                          <img src="{{ asset('assets/images/icons/tabs-btn2.svg') }}" alt="">
                                      </div>
                                      <div class="tabs-btn-content">
                                          <h4>Proven Track Record</h4>
                                          <p>Join the ranks of satisfied users</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="space16"></div>
                              <div>
                                  <span class="light"></span>
                                  <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1200">
                                      <div class="tabs-btn-icon">
                                          <img src="{{ asset('assets/images/icons/tabs-btn3.svg') }}" alt="">
                                      </div>
                                      <div class="tabs-btn-content">
                                          <h4>Robust Security Measures</h4>
                                          <p>Security is our top priority.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="space16"></div>
                              <div>
                                  <span class="light"></span>
                                  <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1400">
                                      <div class="tabs-btn-icon">
                                          <img src="{{ asset('assets/images/icons/tabs-btn4.svg') }}" alt="">
                                      </div>
                                      <div class="tabs-btn-content">
                                          <h4>Customisable Workflows</h4>
                                          <p>No two projects are the same.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="space16"></div>
                              <div>
                                  <span class="light"></span>
                                  <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1600">
                                      <div class="tabs-btn-icon">
                                          <img src="{{ asset('assets/images/icons/tabs-btn5.png') }}" alt="">
                                      </div>
                                      <div class="tabs-btn-content">
                                          <h4>Insightful Analytics</h4>
                                          <p>Make informed decisions.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-7">
                      <div class="service-tabs-grid" data-aos="zoom-out" data-aos-duration="1200">
                          <ul class="service-tabs-content">
                              <li class="active">
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                              <li>
                                  <div class="vertical-tabs-img reveal">
                                      <img src="{{ asset('assets/images/all-images/vertyical-tabs-img1.png') }}" alt="">
                                      <img src="{{ asset('assets/images/all-images/vertical-tabs-img2.png') }}" alt="" class="vertical-img2">
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== FEATURES AREA STARTS =======-->
<div class="features1-section-area sp4" style="background-image: url({{ asset('assets/images/background/features-bg1.png') }}); background-repeat: no-repeat; background-size: cover;">
  <img src="{{ asset('assets/images/elements/features-elements1.png') }}" alt="" class="features-elements1 keyframe4">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 m-auto">
              <div class="features1-header heading2 text-center">
                  <span data-aos="fade-up" data-aos-duration="800">Features</span>
                  <h2 data-aos="fade-up" data-aos-duration="1000">Discover the Power Behind Quad <br> Our Key Features</h2>
              </div>
              <div class="space60"></div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="features-box-area">
                  <div class="row">
                      <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                          <div class="features-author-box">
                              <a href="features.html">Intuitive Project Dashboard</a>
                              <p>Stay in control with our user-friendly project dashboard. Get a real-time overview of all your projects, tasks, and milestones at a glance. Intuitive project dashboard with Quad.</p>
                              <div class="images">
                                  <img src="{{ asset('assets/images/all-images/features-img1.png') }}" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                          <div class="features-author-box">
                              <a href="features.html">Secure Data Management</a>
                              <p>Trust our robust security measures to safeguard your project data. We prioritize the confidentiality and integrity of your information through state-of-the-art encryption.</p>
                              <div class="images">
                                  <img src="{{ asset('assets/images/all-images/features-img2.png') }}" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                          <div class="features-author-box features2">
                              <a href="features.html">Assignment and Tracking</a>
                              <p>Assign tasks effortlessly, track progress, and ensure everyone knows their responsibilities. Assignment & tracking.</p>
                              <div class="images">
                                  <img src="{{ asset('assets/images/all-images/features-img3.png') }}" alt="">
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                          <div class="features-author-box features2">
                              <a href="features.html">Collaborative Workspace</a>
                              <p>Foster seamless collaboration with a centralized workspace. Share files, updates, and feedback in real-time,</p>
                              <div class="images">
                                  <img src="{{ asset('assets/images/all-images/features-img4.png') }}" alt="">
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1400">
                          <div class="features-author-box features2">
                              <a href="features.html">Customisable Workflows</a>
                              <p>Tailor the software to your team's unique needs. Create custom workflows that align requirements.</p>
                              <div class="images">
                                  <img src="{{ asset('assets/images/all-images/features-img5.png') }}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--===== FEATURES AREA ENDS =======-->

<!--===== MORE FEATURES AREA STARTS =======-->
<div class="more-features-scetion-area sp4">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 m-auto">
              <div class="more-features-header text-center heading2">
                  <span data-aos="fade-up" data-aos-duration="800">More Features</span>
                  <h2 data-aos="fade-up" data-aos-duration="1000">Experience Seamless Project Collaboration with Quad</h2>
              </div>
          </div>
      </div>
      <div class="space60"></div>
      <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1000">
              <div class="more-features-box">
                  <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
                  <div class="features-icon">
                      <img src="{{ asset('assets/images/icons/features-icon1.svg') }}" alt="">
                  </div>
                  <div class="features-content">
                      <a href="features.html">Intuitive Project Planning</a>
                      <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
                      <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1200">
              <div class="more-features-box">
                  <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
                  <div class="features-icon">
                      <img src="{{ asset('assets/images/icons/features-icon2.svg') }}" alt="">
                  </div>
                  <div class="features-content">
                      <a href="features.html">Real-Time Collaboration</a>
                      <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
                      <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1400">
              <div class="more-features-box">
                  <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
                  <div class="features-icon">
                      <img src="{{ asset('assets/images/icons/features-icon3.svg') }}" alt="">
                  </div>
                  <div class="features-content">
                      <a href="features.html">Robust Task Management</a>
                      <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
                      <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1000">
              <div class="more-features-box">
                  <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
                  <div class="features-icon">
                      <img src="{{ asset('assets/images/icons/features-icon4.svg') }}" alt="">
                  </div>
                  <div class="features-content">
                      <a href="features.html">Customisable Workflows</a>
                      <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
                      <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1200">
              <div class="more-features-box">
                  <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
                  <div class="features-icon">
                      <img src="{{ asset('assets/images/icons/features-icon5.svg') }}" alt="">
                  </div>
                  <div class="features-content">
                      <a href="features.html">Comprehensive Analytics</a>
                      <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
                      <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1400">
              <div class="more-features-box">
                  <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
                  <div class="features-icon">
                      <img src="{{ asset('assets/images/icons/features-icon6.svg') }}" alt="">
                  </div>
                  <div class="features-content">
                      <a href="features.html">Secure Data Management</a>
                      <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
                      <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--===== MORE FEATURES AREA ENDS =======-->


<!--===== OTHERS AREA STARTS =======-->
<div class="brand-section-area sp6">
  <div class="container">
    <div class="row">
      <div class="col-gl-6 m-auto">
        <div class="brand-header heading2 text-center">
          <span data-aos="fade-up" data-aos-duration="800">Brand</span>
          <h2 data-aos="fade-up" data-aos-duration="1000">Automate With 110+ Integrations</h2>
        </div>
      </div>
    </div>
    <div class="space60"></div>
  </div>
  <div class="marquee-wrap" data-aos="fade-right" data-aos-duration="1200">
    <div class="marquee-text">
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo1.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo3.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo4.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo5.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo6.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo7.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo1.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo3.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo4.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo5.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo6.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo7.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo1.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo1.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo3.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo4.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo5.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo6.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo7.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo1.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo3.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo4.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo5.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo6.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo7.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo1.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo2.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo3.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo4.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo5.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo6.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo7.png') }}" alt="">
      </div>
    </div>
  </div>

  <div class="marquee-wrap2" data-aos="fade-left" data-aos-duration="1200">
    <div class="marquee-text">
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo8.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo9.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo10.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo11.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo12.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo13.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo14.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo8.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo9.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo10.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo11.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo12.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo13.png') }}" alt="">
      </div>
      <div class="brand-single-box">
        <img src="{{ asset('assets/images/elements/logo14.png') }}" alt="">
      </div>
    </div>
  </div>
</div>
<!--===== OTHERS AREA ENDS =======-->

  


<!--===== WORK AREA STARTS =======-->
<div class="works1-section-area sp3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="works-bg-area">
          <img src="{{ asset('assets/images/elements/elements-works.png') }}" alt="" class="elements-works">
          <div class="row">
            <div class="col-lg-5 m-auto">
              <div class="works-header heading2 text-center">
                <span data-aos="fade-up" data-aos-duration="800">Work Flow</span>
                <h2 data-aos="fade-up" data-aos-duration="1000">How Quad Works</h2>
              </div>
            </div>
            <div class="space60"></div>
            <div class="col-lg-10 m-auto">
              <div class="tabs-button text-center" data-aos="fade-right" data-aos-duration="1000">
                <div class="nav-work">
                  <a href="javascript:void(0)" data-tab="one" class="active">Board</a>
                  <a href="javascript:void(0)" data-tab="two">Views</a>
                  <a href="javascript:void(0)" data-tab="three">Dashboard</a>
                  <a href="javascript:void(0)" data-tab="four">Automations</a>
                  <a href="javascript:void(0)" data-tab="five">Tracker</a>
                  <a href="javascript:void(0)" data-tab="six">Docs</a>
                  <a href="javascript:void(0)" data-tab="seven" class="m-0">Apps</a>
                </div>
              </div>
              
              <div class="tabs-auhtor-area">
                <div class="tabContainer">
                  <div id="one" class="Tabcondent active fade">
                    <div class="tabs-img-content-area">
                      <div class="row align-items-center">
                        <div class="col-lg-7">
                          <div class="tabs-auhtor-img reveal">
                            <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="tabs-auhtor-content heading2">
                            <span>Board</span>
                            <h2>Quad Board</h2>
                            <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="two" class="Tabcondent fade">
                    <div class="tabs-img-content-area">
                      <div class="row align-items-center">
                        <div class="col-lg-7">
                          <div class="tabs-auhtor-img reveal">
                            <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="tabs-auhtor-content heading2">
                            <span>Board</span>
                            <h2>Quad Board</h2>
                            <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="three" class="Tabcondent">
                    <div class="tabs-img-content-area">
                      <div class="row align-items-center">
                        <div class="col-lg-7">
                          <div class="tabs-auhtor-img reveal">
                            <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="tabs-auhtor-content heading2">
                            <span>Board</span>
                            <h2>Quad Board</h2>
                            <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="four" class="Tabcondent fade">
                    <div class="tabs-img-content-area">
                      <div class="row align-items-center">
                        <div class="col-lg-7">
                          <div class="tabs-auhtor-img reveal">
                            <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="tabs-auhtor-content heading2">
                            <span>Board</span>
                            <h2>Quad Board</h2>
                            <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="five" class="Tabcondent active">
                    <div class="tabs-img-content-area">
                      <div class="row align-items-center">
                        <div class="col-lg-7">
                          <div class="tabs-auhtor-img reveal">
                            <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="tabs-auhtor-content heading2">
                            <span>Board</span>
                            <h2>Quad Board</h2>
                            <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="six" class="Tabcondent fade">
                    <div class="tabs-img-content-area">
                    <div class="row align-items-center">
                      <div class="col-lg-7">
                        <div class="tabs-auhtor-img reveal">
                          <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-5">
                        <div class="tabs-auhtor-content heading2">
                          <span>Board</span>
                          <h2>Quad Board</h2>
                          <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div id="seven" class="Tabcondent">
                    <div class="tabs-img-content-area">
                      <div class="row align-items-center">
                        <div class="col-lg-7">
                          <div class="tabs-auhtor-img reveal">
                            <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="tabs-auhtor-content heading2">
                            <span>Board</span>
                            <h2>Quad Board</h2>
                            <p>Start a new project effortlessly. Define the project scope, set objectives, and establish milestones using our intuitive project creation wizard.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1-section-area sp3">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="testimonial1-header text-center heading2">
          <span data-aos="fade-up" data-aos-duration="800">Testimonials</span>
          <h2 data-aos="fade-up" data-aos-duration="1000" class="text-capitalize">What Our Users Say: Real Stories of Project Success with Quad</h2>
        </div>
      </div>
    </div>
    <div class="space60"></div>
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="testimonial-sliders">
             <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="testimonial-content-slider slider-nav1">
                  <div class="testimonial-slider-boxarea">
                    <div class="testimonila-img">
                      <div class="mans-slider-info">
                        <img src="{{ asset('assets/images/all-images/testimonial-slider-img2.png') }}" alt="">
                        <div class="content">
                          <a href="team.html">Andre Smith</a>
                          <p>Owner At Frenzy Design</p>
                        </div>
                      </div>
                      <ul>
                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      </ul>
                    </div>
                    <div class="testimonial5-all-content">
                      <p>“The analytics tools in Quad provide invaluable insights. Tracking project progress and identifying trends has never been easier. The data-driven approach has helped us make informed decisions, leading to better project outcomes. The ability to create custom workflows that fit our unique requirements sets it apart. It adapts to us, not the other way around. Highly recommended!”</p>
                    </div>
                  </div>

                  <!-- Additional testimonial slides with updated image paths -->
                </div>
                <div class="testimonial-arrows">
                  <div class="testimonial-prev-arrow">
                    <button><i class="fa-solid fa-arrow-left"></i></button>
                  </div>
                  <div class="testimonial-next-arrow">
                    <button><i class="fa-solid fa-arrow-right"></i></button>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="teimonial-slider-nav-area foter-carousel">
                  <div class="testimonial-slider-img reveal">
                    <img src="{{ asset('assets/images/all-images/testimonial-slider-img1.png') }}" alt="">
                  </div>
                  <div class="testimonial-slider-img reveal">
                    <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                  </div>
                  <div class="testimonial-slider-img reveal">
                    <img src="{{ asset('assets/images/all-images/testimonial-slider-img1.png') }}" alt="">
                  </div>
                  <div class="testimonial-slider-img reveal">
                    <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                  </div>
                  <div class="testimonial-slider-img reveal">
                    <img src="{{ asset('assets/images/all-images/testimonial-slider-img1.png') }}" alt="">
                  </div>
                  <div class="testimonial-slider-img reveal">
                    <img src="{{ asset('assets/images/all-images/works-img1.png') }}" alt="">
                  </div>
                </div>
              </div>
             </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->


<!--===== BLOG AREA STARTS =======-->
<div class="blog1-section-area sp3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="blog1-header text-center heading2">
          <span data-aos="fade-up" data-aos-duration="800">Blog</span>
          <h2 data-aos="fade-up" data-aos-duration="1000">Empowering Your Project Management Journey</h2>
        </div>
      </div>
    </div>
    <div class="space60"></div>
    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="800">
        <div class="blog1-boxarea">
          <div class="blog-img">
            <img src="{{ asset('assets/images/all-images/blog-img1.png') }}" alt="">
          </div>
          <div class="blog-all-content-area">
            <div class="blog1-content">
              <img src="{{ asset('assets/images/icons/calender-img1.svg') }}" alt="">
              <a href="#">November 21, 2023</a>
            </div>
            <div class="blog-main-content">
              <a href="blog-details.html">Mastering Task Prioritisation: A Guide for Project Managers</a>
              <p>Explore effective strategies and best practices for prioritising tasks within your projects mastering task.</p>
              <a href="blog-details.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
        <div class="blog1-boxarea">
          <div class="blog-img">
            <img src="{{ asset('assets/images/all-images/blog-img2.png') }}" alt="">
          </div>
          <div class="blog-all-content-area">
            <div class="blog1-content">
              <img src="{{ asset('assets/images/icons/calender-img1.svg') }}" alt="">
              <a href="#">November 19, 2024</a>
            </div>
            <div class="blog-main-content">
              <a href="blog-details.html">Collaboration 101: Building Stronger Teams with Quad</a>
              <p>Discover how our collaborative tools can transform team dynamics and foster seamless communication.</p>
              <a href="blog-details.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
        <div class="blog1-boxarea">
          <div class="blog-img">
            <img src="{{ asset('assets/images/all-images/blog-img3.png') }}" alt="">
          </div>
          <div class="blog-all-content-area">
            <div class="blog1-content">
              <img src="{{ asset('assets/images/icons/calender-img1.svg') }}" alt="">
              <a href="#">November 16, 2024</a>
            </div>
            <div class="blog-main-content">
              <a href="blog-details.html">Custom Workflows: Tailoring Quad to Your Project Needs</a>
              <p>Dive into the flexibility of customisable workflows and how they empower you to adapt with Quad management</p>
              <a href="blog-details.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="space30"></div>
        <div class="div text-center" data-aos="fade-up" data-aos-duration="1200">
          <a href="blogv1.html" class="header-btn">View All Blog <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->


@endsection