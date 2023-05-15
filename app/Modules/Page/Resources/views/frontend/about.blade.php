@extends( front_layout('master') )
@section('title', $page_title)
@section('meta_tags')
    @if( isset($seo_metadata['meta_keywords']) && $seo_metadata['meta_keywords'] )
        <meta name="keywords" content="{{ $seo_metadata['meta_keywords'] }}"/>
    @endif

    <meta property="url" content="{{ route(front_route('page.about')) }}" />
    <meta property="type" content="article" />
    <meta property="title" content="{{ $seo_metadata['meta_title'] ?? $page_title }}" />
    @if( isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'] )
        <meta property="description" content="{{ $seo_metadata['meta_description'] }}"/>
    @endif

    <meta property="og:url" content="{{ route(front_route('page.about')) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $seo_metadata['meta_title'] ?? $page_title }}" />
    @if( isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'] )
        <meta property="og:description" content="{{ $seo_metadata['meta_description'] }}" />
    @endif

    @php $site_settings = get_site_settings(); @endphp
    @if( isset($site_settings['sites']) && isset($site_settings['sites']['share_logo']) )
        <meta property="image" content="{{ ( \App\Models\Setting::getImageURL( $site_settings['sites']['share_logo']) ?: front_asset('images/logo.png')) }}" />
        <meta property="og:image" content="{{ ( \App\Models\Setting::getImageURL( $site_settings['sites']['share_logo']) ?: front_asset('images/logo.png')) }}" />
    @endif
@endsection
@section('content')
  
    <section class="about">
        <div class="head-top-banner">
            <h3 style="width: fit-content; color: white;">About us</h3>
        </div>
       


        <!-- Start About Area -->
        <section id="about" class="about-area ptb-100">
            <div class="container">
                <!-- <div class="section-title">
                    <h2>About Our App</h2>
                    <div class="bar"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div> -->

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3>Our History</h3>
                            <div class="bar"></div>
                            <p>CHECKVINONILNE is a free lookup service provided to the public to assist in determining if a vehicle may have a record of an insurance theft claim, and has not been recovered, or has ever been reported as a salvage vehicle by participating NICB member insurance companies. To perform a lookup, a vehicle identification number (VIN) is required. A maximum of five searches can be conducted within a 24-hour period per IP address.</p>
                            <h3>Our Mission</h3>
                            <p>Help people to to find there car details. </p>
                            <h3>Our Vision</h3>
                            <p></p>
                              
                            
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="./assets/img/Vin/eb5058dfca953313605d2b5d1b9abe.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-shape">
                <div class="shape-1">
                    <img src="assets/img/shape/1.png" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="assets/img/shape/2.png" alt="image">
                </div>

                <div class="shape-3">
                    <img src="assets/img/shape/3.svg" alt="image">
                </div>

                <div class="shape-4">
                    <img src="assets/img/shape/4.svg" alt="image">
                </div>

                <div class="shape-5">
                    <img src="assets/img/shape/5.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <section class="testimonial-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>How to check vehicle history with CarVINCheck</h2>
                    <div class="bar"></div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> -->
                </div>
                <div id="Group_34">
                    <div id="How_to_check_vehicle_history_w">
                        <span>How to check vehicle history with CarVINCheck</span>
                    </div>
                    <div id="Step_1">
                        <span>Step 1</span>
                    </div>
                    <div id="Step_2">
                        <span>Step 2</span>
                    </div>
                    <div id="Step_3">
                        <span>Step 3</span>
                    </div>
                    <img id="settings-gears" src="settings-gears.png" srcset="settings-gears.png 1x, settings-gears@2x.png 2x">
                        
                    <div id="Group_22">
                        <img id="dollar" src="dollar.png" srcset="dollar.png 1x, dollar@2x.png 2x">
                            
                    </div>
                    <img id="folder" src="folder.png" srcset="folder.png 1x, folder@2x.png 2x">
                        
                    <div id="Enter_the_VIN_number">
                        <span>Enter the VIN number</span>
                    </div>
                    <div id="Buy_the_report">
                        <span>Buy the report</span>
                    </div>
                    <div id="Verify_the_condition_of_the_ve">
                        <span>Verify the condition<br>of the vehicle</span>
                    </div>
                    <svg class="Path_882" viewBox="230.227 3238.736 327.653 149.97">
                        <path id="Path_882" d="M 230.2265319824219 3388.7060546875 C 230.2265319824219 3388.7060546875 374.4329833984375 3250.155029296875 557.879150390625 3238.73583984375">
                        </path>
                    </svg>
                    <svg class="Path_883" viewBox="768.818 3274.384 355.044 89.364">
                        <path id="Path_883" d="M 768.8175048828125 3274.38427734375 C 853.9974365234375 3299.61083984375 945.0632934570312 3330.921142578125 1042.726806640625 3349.132080078125 C 1140.390380859375 3367.343017578125 1122.591674804688 3363.38427734375 1122.591674804688 3363.38427734375">
                        </path>
                    </svg>
                    <svg class="Path_884" viewBox="1914.33 3247.353 296.606 95.689">
                        <path id="Path_884" d="M 1914.330078125 3247.3525390625 C 2042.12255859375 3266.20947265625 2145.45947265625 3310.77783203125 2210.935791015625 3343.04150390625">
                        </path>
                    </svg>
                    <svg class="Path_885" viewBox="1335.719 3268.531 240.077 81.276">
                        <path id="Path_885" d="M 1335.718872070312 3349.80712890625 C 1379.043701171875 3340.642822265625 1423.393676757812 3326.725830078125 1468.88330078125 3306.89013671875 C 1505.209594726562 3291.05029296875 1540.996704101562 3278.375244140625 1575.79541015625 3268.531005859375">
                        </path>
                    </svg>
                </div>
               

            
            </div>
            <img src="./assets/img/Vin/Group 34.png" alt="" srcset="">
        </section>
        <section class="ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-content">
                            <h3>What People Say About Us</h3>
                            <div class="bar"></div>
                            <h3 style="font-size: medium;">Wonderful experience</h3>
                            <p>Thanks to CHECKVINONILNE I got valuable info that I needed about a car’s damages. to be specific there was an airbag deployment and a vehicle rollover. So I was lucky that I checked the report first before buying the car. Was the price worth it? absolutely! Thanks for your service EpicVIN!</p>
                            <div class="overview-btn">
                                <span><img src="./assets/img/Vin/Mask_Group_2.png" style="display: inline; width: fit-content;" alt="" srcset="" style="border: #0015ff 3px solid; border-radius: 50%;"></span>
                                <span><h5 style="display: inline; width: fit-content;">Chris Hoang</h5></span>
                                <span><p  style="display: inline; width: fit-content;"><br>Chris Hoang</p></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="overview-image">
                            <img src="assets/img/Vin/clients-circle-1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="subscribe-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="subscribe-content">
                            <h2>We're Here</h2>
                            <p style="color: white; width: 350px;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.643066291656!2d-73.93463448509584!3d40.70385804605153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25c013a561ff7%3A0x4fc46dca5a77cd9d!2s14%20Rock%20St%2C%20Brooklyn%2C%20NY%2011206%2C%20USA!5e0!3m2!1sen!2s!4v1678307981489!5m2!1sen!2s" width="auto" height="350" style="border:0; height: 250px;width: 500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="row align-items-center">
                            <form id="contactFormmy">
                                <h1 style="color: white;">Get in Touch</h1>
                                <p style="color: white;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                                <br>
                                <div class="row">
                                    <!-- <h2>Get in Touch</h2> -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="send-btn">
                                            <button type="submit" class="default-btn">
                                                Send Message
                                                <span></span>
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>

@endsection
