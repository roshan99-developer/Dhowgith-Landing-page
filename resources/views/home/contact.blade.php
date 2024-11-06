@extends('layouts.main')

@section('content')

<!--===== WELCOME STARTS =======-->
<div class="about-welcome-section-area about2" style="background-image: url({{ asset('assets/images/background/header2-bg.png') }}); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-inner-header heading1">
                    <h1 class="text-start">Get In Touch</h1>
                    <div class="spasce16"></div>
                    <p>Thank you for considering our project management software for your team's needs. We're here to answer any questions you may have and provide assistance in selecting the right solution for your organization.</p>
                    <div class="space32"></div>
                    <h3>Contact Information:</h3>
                    <div class="space32"></div>
                    <div class="contact-box-area">
                        <div class="contact-boxs">
                            <div class="img1">
                                <img src="{{ asset('assets/images/icons/call-img1.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <p>Contact Us</p>
                                <div class="space12"></div>
                                <a href="tel:(123)456-7890">(123) 456-7890</a>
                            </div>
                        </div>
                        <div class="space24"></div>
                        <div class="contact-boxs">
                            <div class="img1">
                                <img src="{{ asset('assets/images/icons/email-img1.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <p>Send Us a Mail</p>
                                <div class="space12"></div>
                                <a href="mailto:demo.quad@gmail.com">demo.quad@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="conatact-header-boxarea heading6">
                    <h2>Contact Us</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="space24"></div>
                            <div class="input-area">
                                <input type="text" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="space24"></div>
                            <div class="input-area">
                                <input type="number" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="space24"></div>
                            <div class="input-area">
                                <input type="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="space24"></div>
                            <div class="input-area">
                                <input type="text" placeholder="Rate Your Credit">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="space24"></div>
                            <div class="input-area">
                                <textarea placeholder="Additional Details" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="space24"></div>
                            <div class="div">
                                <button type="submit" class="header-btn2">Send Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WELCOME ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service-inner-section-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="service-inner-header text-center heading4">
                    <span>Our Value</span>
                    <div class="space16"></div>
                    <h2>Our Core Values: Guiding Principles for Success</h2>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-inner-boxarea">
                    <div class="icons">
                        <img src="{{ asset('assets/images/icons/service-inner1.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content">
                        <a href="about.html">Innovation</a>
                        <div class="space16"></div>
                        <p>We embrace innovation as the cornerstone of our success, continuously seeking new ways to improve and evolve services.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="space50 d-lg-block d-none"></div>
                <div class="service-inner-boxarea box2">
                    <div class="icons icons2">
                        <img src="{{ asset('assets/images/icons/service-inner2.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content">
                        <a href="about.html">Customer Centricity</a>
                        <div class="space16"></div>
                        <p>Our customers are at the heart of everything we do. We prioritise their needs, listen to their feedback, and go above and beyond.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-inner-boxarea box3">
                    <div class="icons icons3">
                        <img src="{{ asset('assets/images/icons/service-inner3.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content">
                        <a href="about.html">Integrity</a>
                        <div class="space16"></div>
                        <p>We conduct business with the highest level of integrity, transparency, and ethical standards, fostering trust in Quad.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="space50 d-lg-block d-none"></div>
                <div class="service-inner-boxarea box4">
                    <div class="icons icons4">
                        <img src="{{ asset('assets/images/icons/service-inner4.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content">
                        <a href="about.html">Collaboration</a>
                        <div class="space16"></div>
                        <p>We believe in the power of collaboration and teamwork, both internally and with our clients, partners, & stakeholders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== FAQ AREA STARTS =======-->
<div class="faq-inner-section-area sp3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="faq-inner-header heading6 tags text-center">
                    <span>FAQs</span>
                    <div class="space16"></div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="space16"></div>
                    <p>Welcome to our FAQ section. Here, we address some of the most common queries to help you understand more about our services and offerings.</p>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="faq-all-area">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What sets Quad apart in the competitive SEO market?
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">At Quad, we are committed to delivering exceptional SEO results through a combination of innovative strategies, in-depth analysis, and continuous optimization. Our approach is tailored to each client’s needs, ensuring maximum ROI and visibility.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How secure is my data with Quad?
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We take data security seriously. Quad implements industry-leading security protocols, ensuring that your data is encrypted and stored safely, with access limited only to authorized personnel.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Can I use Quad for local SEO optimization?
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, Quad offers specialized tools and strategies for local SEO optimization, helping businesses improve their online visibility in specific geographic locations and attract more local customers.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                How frequently are new features added to Quad?
                            </button>
                          </h2>
                          <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We constantly update Quad to ensure our users have access to the latest features. New updates are rolled out regularly, and you’ll be notified whenever a new feature becomes available.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Is there a limit to the number of projects or websites I can manage?
                            </button>
                          </h2>
                          <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">No, there is no limit to the number of projects or websites you can manage with Quad. Our platform is designed to scale with your needs, providing the flexibility to manage multiple sites and projects simultaneously.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Why do I need email marketing software?
                            </button>
                          </h2>
                          <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Email marketing software is essential for creating targeted campaigns, tracking engagement, and optimizing your marketing efforts. It helps you stay connected with your audience and drive conversions efficiently.</div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<div class="map-section-area">
    <div class="mapouter">
        <div class="gmap_canvas">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>    
</div>
<!--===== FAQ AREA ENDS =======-->



@endsection