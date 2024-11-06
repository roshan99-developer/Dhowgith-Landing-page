@extends('layouts.main')

@section('content')


<!--===== WELCOME STARTS =======-->
<div class="about-welcome-section-area about2" style="background-image: url('{{ asset('assets/images/background/header2-bg.png') }}'); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="about-welcome-header text-center heading3">
                    <h1>Quad Features</h1>
                    <div class="space16"></div>
                    <a href="{{ url('index.html') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Features</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WELCOME ENDS =======-->

<!--===== ABOUT STARTS =======-->
<div class="about-section-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-header-area heading4">
                    <span>About Quad</span>
                    <div class="space20"></div>
                    <h2>Empowering Your Success Innovative SaaS Solutions</h2>
                    <div class="space16"></div>
                    <p>Welcome to Quad where innovation meets excellence in the world of Software as a Service (SaaS). As a leading provider of cutting-edge digital solutions, we are dedicated to empowering businesses of all sizes to thrive in the digital landscape. Learn more about our journey, values, and commitment to delivering exceptional SaaS products below.</p>
                    <div class="space32"></div>
                    <div>
                        <a href="{{ url('contact.html') }}" class="header-btn2">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="images">
                    <img src="{{ asset('assets/images/all-images/about-img1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--===== ABOUT ENDS =======-->
    
    <!--===== FEATURES AREA STARTS =======-->
    <div class="features1-section-area sp4 features2" style="background-image: url('{{ asset('assets/images/background/features-bg2.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto">
              <div class="features1-header heading2 text-center">
                <span>Quad Features</span>
                <h2>Discover the Power Behind Quad <br> Our Key Features</h2>
              </div>
              <div class="space60"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="features-box-area">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="features-author-box">
                      <a href="{{ url('features.html') }}">Intuitive Project Dashboard</a>
                      <p>Stay in control with our user-friendly project dashboard. Get a real-time overview of all your projects, tasks, and milestones at a glance. Intuitive project dashboard with Quad.</p>
                      <div class="div">
                        <img src="{{ asset('assets/images/all-images/features-img1.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="features-author-box">
                      <a href="{{ url('features.html') }}">Secure Data Management</a>
                      <p>Trust our robust security measures to safeguard your project data. We prioritize the confidentiality and integrity of your information through state-of-the-art encryption.</p>
                      <div class="div">
                        <img src="{{ asset('assets/images/all-images/features-img2.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="features-author-box features2">
                      <a href="{{ url('features.html') }}">Assignment and Tracking</a>
                      <p>Assign tasks effortlessly, track progress, and ensure everyone knows their responsibilities. Assignment & tracking.</p>
                      <div class="div">
                        <img src="{{ asset('assets/images/all-images/features-img3.png') }}" alt="">
                      </div>
                    </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6">
                    <div class="features-author-box features2">
                      <a href="{{ url('features.html') }}">Collaborative Workspace</a>
                      <p>Foster seamless collaboration with a centralized workspace. Share files, updates, and feedback in real-time,</p>
                      <div class="div">
                        <img src="{{ asset('assets/images/all-images/features-img4.png') }}" alt="">
                      </div>
                    </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6">
                    <div class="features-author-box features2">
                      <a href="{{ url('features.html') }}">Customisable Workflows</a>
                      <p>Tailor the software to your team's unique needs. Create custom workflows that align requirements.</p>
                      <div class="div">
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

      
      <!--===== PROCESS AREA STARTS =======-->
<div class="process-inner-area sp3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="process-inner-header text-center heading4">
                    <span>Our Process</span>
                    <div class="space20"></div>
                    <h2>Enhance Your Web Development Journey<br class="d-lg-block d-none"> Discover the Power of Our Features</h2>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row align-items-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="brand-single-box">
                    <img src="{{ asset('assets/images/all-images/process-inner-img1.png') }}" alt="Live Compilation">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="process-content-area heading6">
                    <h2>Real-Time Compilation</h2>
                    <div class="space16"></div>
                    <p>Instant feedback with live compilation—transform your Sass code into CSS in real-time without the hassle of manual processes, optimizing your workflow.</p>
                    <span>01</span>
                </div>
            </div>
            <div class="col-lg-1"></div>

            <div class="space80"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="process-content-area content2 heading6">
                    <h2>Syntax Highlighting</h2>
                    <div class="space16"></div>
                    <p>Improve readability with syntax highlighting for Sass code, enabling quick error identification and easier understanding of your code.</p>
                    <span>02</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="brand-single-box">
                    <img src="{{ asset('assets/images/all-images/process-inner-img1.png') }}" alt="Syntax Highlighting">
                </div>
            </div>
            <div class="col-lg-1"></div>

            <div class="space80"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="brand-single-box">
                    <img src="{{ asset('assets/images/all-images/process-inner-img1.png') }}" alt="Integrated Autoprefixer">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="process-content-area heading6">
                    <h2>Seamless Autoprefixing</h2>
                    <div class="space16"></div>
                    <p>Automate vendor prefixing with our integrated Autoprefixer, ensuring smooth cross-browser compatibility without extra effort.</p>
                    <span>03</span>
                </div>
            </div>
            <div class="col-lg-1"></div>

            <div class="space80"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="process-content-area content2 heading6">
                    <h2>Smart Code Completion</h2>
                    <div class="space16"></div>
                    <p>Boost productivity with smart code completion suggestions for variables, mixins, and functions, reducing errors and speeding up your coding process.</p>
                    <span>04</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="brand-single-box">
                    <img src="{{ asset('assets/images/all-images/process-inner-img1.png') }}" alt="Code Completion">
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<!--===== PROCESS AREA ENDS =======-->


<!--===== MORE FEATURES AREA STRATS =======-->
<div class="more-features-scetion-area more-features2 sp4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="more-features-header text-center heading2">
            <span>More Features</span>
            <h2>Experience Seamless Project Collaboration with Quad</h2>
          </div>
        </div>
      </div>
      <div class="space60"></div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="more-features-box">
            <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
            <div class="features-icon">
              <img src="{{ asset('assets/images/icons/features-inner-img1.svg') }}" alt="">
            </div>
            <div class="features-content">
              <a href="features.html">Intuitive Project Planning</a>
              <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
              <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="more-features-box">
            <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
            <div class="features-icon">
              <img src="{{ asset('assets/images/icons/features-inner-img2.svg') }}" alt="">
            </div>
            <div class="features-content">
              <a href="features.html">Real-Time Collaboration</a>
              <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
              <a href="faq.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="more-features-box">
            <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
            <div class="features-icon">
              <img src="{{ asset('assets/images/icons/features-inner-img3.svg') }}" alt="">
            </div>
            <div class="features-content">
              <a href="features.html">Robust Task Management</a>
              <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
              <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="more-features-box">
            <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
            <div class="features-icon">
              <img src="{{ asset('assets/images/icons/features-inner-img4.svg') }}" alt="">
            </div>
            <div class="features-content">
              <a href="features.html">Customisable Workflows</a>
              <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
              <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="more-features-box">
            <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
            <div class="features-icon">
              <img src="{{ asset('assets/images/icons/features-inner-img5.svg') }}" alt="">
            </div>
            <div class="features-content">
              <a href="features.html">Comprehensive Analytics</a>
              <p>Effortlessly plan and organize your projects from start to finish. Our software provides an intuitive project planning interface, allowing you.</p>
              <a href="features.html" class="learnmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="more-features-box">
            <img src="{{ asset('assets/images/elements/more-elements.png') }}" alt="" class="more-elements keyframe4">
            <div class="features-icon">
              <img src="{{ asset('assets/images/icons/features-inner-img6.svg') }}" alt="">
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
<div class="download-app-area sp3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="download-header text-center heading6">
                    <span>Download App</span>
                    <div class="space16"></div>
                    <h2>Download Quad App Now</h2>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row">
          <div class="col-lg-11 m-auto">
            <div class="download-images">
              <img src="{{ asset('assets/images/all-images/download-img2.png') }}" alt="">
              <div class="space32"></div>
              <ul>
                <li><a href="#" class="google-img"><img src="{{ asset('assets/images/all-images/google-img.png') }}" alt=""></a></li>
                <li><a href="#" class="google-img"><img src="{{ asset('assets/images/all-images/google-img1.png') }}" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</div>
<!--===== OTHERS AREA ENDS =======-->


<!--===== PRICING PLAN AREA STARTS =======-->
<div class="pricing-paln-section-area pricing2 sp6">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-auto">
          <div class="pricing-header text-center heading6">
            <span class="seo">Pricing Plan</span>
            <div class="space16"></div>
            <h2 class="text-capitalize"> Empower Your Success Unveiling Quad Flexible and Affordable Pricing Plans</h2>
          </div>
        </div>
      </div>
      <div class="space60"></div>
      <div class="pricing-plans">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <div class="plan-toggle-wrap">
                <div class="toggle-inner">
                  <input id="ce-toggle" checked="" type="checkbox">
                  <span class="custom-toggle"></span>
                  <span class="t-month">Monthly</span>
                  <span class="t-year">Annual</span>
                </div>
              </div>
              <div class="space40"></div>
            </div>
          </div>
          <div class="tab-content">
                <div id="monthly" style="display: block;">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="price-box">
                        <div class="hadding">
                          <div class="pricing-area">
                            <h3>Basic Plan</h3>
                            <div class="space24"></div>
                          <h2 class="pricing-heading">$99<span >/month</span></h2>
                          <div class="space16"></div>
                          <p>Ideal for individuals or small businesses looking to establish a solid online presence.</p>
                          <div class="space24"></div>
                            <div>
                              <a href="contact.html" class="header-btn2">Get Started </a>
                            </div>
                          </div>
                          <div class="price-list">
                            <ul>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt=""> Essential features to establish a solid online </li>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt=""> Keyword research, on-page optimisation</li>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt=""> Ideal for individuals and small businesses</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="price-box">
                        <div class="hadding">
                          <div class="pricing-area bg2">
                            <div class="popular">
                              <p>Most Popular</p>
                            </div>
                            <h3>Pro Plan</h3>
                            <div class="space24"></div>
                          <h2 class="pricing-heading">$149<span >/month</span></h2>
                          <div class="space16"></div>
                          <p>Ideal for individuals or small businesses looking to establish a solid online presence.</p>
                          <div class="space24"></div>
                            <div>
                              <a href="contact.html" class="header-btn2">Choose Pro </a>
                            </div>
                          </div>
                          <div class="price-list">
                            <ul>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Competitor analysis for strategic insights</li>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Backlink management for enhanced online </li>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Real-time rank tracking for prompt </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="price-box">
                        <div class="hadding">
                          <div class="pricing-area">
                            <h3>Enterprise Plan</h3>
                            <div class="space24"></div>
                          <h2 class="pricing-heading">$199<span >/month</span></h2>
                          <div class="space16"></div>
                          <p>Ideal for individuals or small businesses looking to establish a solid online presence.</p>
                          <div class="space24"></div>
                            <div>
                              <a href="contact.html" class="header-btn2">Select Enterprise</a>
                            </div>
                          </div>
                          <div class="price-list">
                            <ul>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Priority support for quick issue resolution</li>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Enhanced analytics for deeper insights</li>
                              <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Customization options for tailored solutions</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <div id="yearly" style="display: none;">
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="price-box">
                      <div class="hadding">
                        <div class="pricing-area">
                          <h3>Basic Plan</h3>
                          <div class="space24"></div>
                        <h2 class="pricing-heading">$399<span >/year</span></h2>
                        <div class="space16"></div>
                        <p>Ideal for individuals or small businesses looking to establish a solid online presence.</p>
                        <div class="space24"></div>
                          <div>
                            <a href="contact.html" class="header-btn2">Get Started </a>
                          </div>
                        </div>
                        <div class="price-list">
                          <ul>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt=""> Essential features to establish a solid online </li>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt=""> Keyword research, on-page optimisation</li>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt=""> Ideal for individuals and small businesses</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="price-box">
                      <div class="hadding">
                        <div class="pricing-area bg2">
                          <div class="popular">
                            <p>Most Popular</p>
                          </div>
                          <h3>Pro Plan</h3>
                          <div class="space24"></div>
                        <h2 class="pricing-heading">$599<span >/year</span></h2>
                        <div class="space16"></div>
                        <p>Ideal for individuals or small businesses looking to establish a solid online presence.</p>
                        <div class="space24"></div>
                          <div>
                            <a href="contact.html" class="header-btn2">Choose Pro </a>
                          </div>
                        </div>
                        <div class="price-list">
                          <ul>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Competitor analysis for strategic insights</li>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Backlink management for enhanced online </li>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Real-time rank tracking for prompt </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="price-box">
                      <div class="hadding">
                        <div class="pricing-area">
                          <h3>Enterprise Plan</h3>
                          <div class="space24"></div>
                        <h2 class="pricing-heading">$999<span >/year</span></h2>
                        <div class="space16"></div>
                        <p>Ideal for individuals or small businesses looking to establish a solid online presence.</p>
                        <div class="space24"></div>
                          <div>
                            <a href="contact.html" class="header-btn2">Select Enterprise</a>
                          </div>
                        </div>
                        <div class="price-list">
                          <ul>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Priority support for quick issue resolution</li>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Enhanced analytics for deeper insights</li>
                            <li><img src="{{ asset('assets/images/icons/check-icons4.svg') }}" alt="">Customization options for tailored solutions</li>
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
    </div>
  </div>
  <!--===== PRICING PLAN AREA ENDS



@endsection