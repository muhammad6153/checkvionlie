@php
    $site_settings = get_site_settings();
    $meta_title = $seo_metadata['meta_title'] ?? 'FAQ\'s';
@endphp
@extends(front_layout('master'))
@section('title', 'FAQ\'s')
@section('meta_tags')
    @if (isset($seo_metadata['meta_keywords']) && $seo_metadata['meta_keywords'])
        <meta name="keywords" content="{{ $seo_metadata['meta_keywords'] }}" />
    @endif

    <meta property="url" content="{{ route(front_route('page.faq')) }}" />
    <meta property="type" content="article" />
    <meta property="title" content="{{ $meta_title }}" />
    @if (isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'])
        <meta property="description" content="{{ $seo_metadata['meta_description'] }}" />
    @endif

    <meta property="og:url" content="{{ route(front_route('page.faq')) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $meta_title }}" />
    @if (isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'])
        <meta property="og:description" content="{{ $seo_metadata['meta_description'] }}" />
    @endif

    @if (isset($site_settings['sites']) && isset($site_settings['sites']['site_logo']))
        <meta property="image"
            content="{{ \App\Models\Setting::getImageURL($site_settings['sites']['site_logo']) ?: front_asset('images/logo.png') }}" />
        <meta property="og:image"
            content="{{ \App\Models\Setting::getImageURL($site_settings['sites']['site_logo']) ?: front_asset('images/logo.png') }}" />
    @endif
@endsection
@section('content')

    <section class="faqs faqpage">
        <div class="head-top-banner-2">
            <h3 style="width: fit-content; color: white;">Car Vin Check</h3>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding-top: 55px;">
                <div class="col vintopbox justify-content-center">
                    <img src="./assets/img/Vin/icons/1.png" alt="" srcset="" style="padding-left: 35%;">
                    <div class="content">
                        <h5>Past odometer readings - has the odometer ever been rolled back?</h5>
                    </div>
                </div>
                <div class="col vintopbox  justify-content-center">
                    <img src="./assets/img/Vin/icons/2.png" alt="" srcset=""style="padding-left: 35%;">
                    <div class="content">
                        <h5>Theft vehicle check - has the car been registered as a stolen vehicle?</h5>
                    </div>
                </div>
                <div class="col vintopbox  justify-content-center">
                    <img src="./assets/img/Vin/icons/3.png" alt="" srcset=""style="padding-left: 35%;">
                    <div class="content">
                        <h5>Hidden Damages - does this car have any undisclosed or hidden damages?</h5>
                    </div>
                </div>
                <div class="col vintopbox justify-content-center">
                    <img src="./assets/img/Vin/icons/4.png" alt="" srcset=""style="padding-left: 35%;">
                    <div class="content">
                        <h5>Technical data - what are the vehicles specifications and technical Data?</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding-bottom: 55px;">
                <div class="col vintopbox  justify-content-center"></div>
                <div class="col vintopbox justify-content-center">
                    <img src="./assets/img/Vin/icons/5.png" alt="" srcset=""style="padding-left: 35%;">
                    <div class="content">
                        <h5>How was the car previously used? Was it a prior taxi or rental car?</h5>
                    </div>
                </div>
                <div class="col vintopbox justify-content-center">
                    <img src="./assets/img/Vin/icons/6.png" alt="" srcset=""style="padding-left: 35%;">
                    <div class="content">
                        <h5>Photos of previous sales - has this vehicle previously been listed for sale?</h5>
                    </div>
                </div>
                <div class="col vintopbox justify-content-center"></div>
            </div>
        </div>
        <!-- End Screenshot Area -->
        <section id="screenshots" class="screenshot-area ptb-100">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>What is a VIN Number?</h2>
                    <h3 style="color: white;"">Vehicle Identification Number?</h3>
                    <div class="bar"></div>
                    <p>A vehicle identification number (VIN) is a unique code assigned to every motor vehicle when it's
                        manufactured. The VIN is a 17-character string of letters and numbers without intervening spaces or
                        the letters Q (q), I (i), and O (o); these are omitted to avoid confusion with the numerals 0 and 1.
                        Each section of the VIN provides a specific piece of information about the vehicle, including the
                        year, country, and factory of manufacture; the make and model; and the serial number. VINs are
                        usually printed in a single line.</p>
                    <div class="bluebox"
                        style="width:40%; background-color:#006CD9; margin: auto; border-radius: 20px; width: 500px; height:120px; padding: 20px;">
                        <table style="width:auto; margin:auto; border:none;">

                            <tr class="tabletrd">
                                <td class="tabletrd" style="border:none;">How many characters:</td>
                                <td class="tabletrd" style="border:none;">17 (digits and capital letters)</td>

                            </tr>
                            <tr class="tabletrd">
                                <td class="tabletrd" style="border:none;">Where to find:</td>
                                <td class="tabletrd" style="border:none;">Dashboard on the driver's side</td>

                            </tr>
                            <tr class="tabletrd">
                                <td class="tabletrd" style="border:none;">First digit stands for:</td>
                                <td class="tabletrd" style="border:none;">Country of manufacturer</td>

                            </tr>
                        </table>
                    </div>
                </div>
                <div class="center-vincar">
                    <img src="./assets/img/Vin/2 (1).png" alt="" srcset="">
                    <div class="about-btn" style="margin: auto; width: fit-content;">
                        <a href="#" class="default-btn">
                            Download Vehicle History Report
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Screenshot Area -->

        <!-- Start Testimonial Area -->
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
                    <img id="settings-gears" src="settings-gears.png"
                        srcset="settings-gears.png 1x, settings-gears@2x.png 2x">

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
                        <path id="Path_882"
                            d="M 230.2265319824219 3388.7060546875 C 230.2265319824219 3388.7060546875 374.4329833984375 3250.155029296875 557.879150390625 3238.73583984375">
                        </path>
                    </svg>
                    <svg class="Path_883" viewBox="768.818 3274.384 355.044 89.364">
                        <path id="Path_883"
                            d="M 768.8175048828125 3274.38427734375 C 853.9974365234375 3299.61083984375 945.0632934570312 3330.921142578125 1042.726806640625 3349.132080078125 C 1140.390380859375 3367.343017578125 1122.591674804688 3363.38427734375 1122.591674804688 3363.38427734375">
                        </path>
                    </svg>
                    <svg class="Path_884" viewBox="1914.33 3247.353 296.606 95.689">
                        <path id="Path_884"
                            d="M 1914.330078125 3247.3525390625 C 2042.12255859375 3266.20947265625 2145.45947265625 3310.77783203125 2210.935791015625 3343.04150390625">
                        </path>
                    </svg>
                    <svg class="Path_885" viewBox="1335.719 3268.531 240.077 81.276">
                        <path id="Path_885"
                            d="M 1335.718872070312 3349.80712890625 C 1379.043701171875 3340.642822265625 1423.393676757812 3326.725830078125 1468.88330078125 3306.89013671875 C 1505.209594726562 3291.05029296875 1540.996704101562 3278.375244140625 1575.79541015625 3268.531005859375">
                        </path>
                    </svg>
                </div>
            </div>
            <img src="./assets/img/Vin/Group 34.png" alt="" srcset="">
        </section>
        <!-- End Testimonial Area -->
        <div id="howtovin">
            <div class="section-title">
                <h2>How to Find the Vehicle Vin Number</h2>
                <p>On most passenger cars, you may find the VIN number on the front of the dashboard on the driver's side.
                    The best way to see it is to look through the windshield from outside the car. You may also find the VIN
                    number on the driver's side door pillar. Open the door and look around the area where the door latches
                    to the car. A motorcycle's VIN is usually on the steering neck below the handlebars, although sometimes
                    it's on the motor or on the frame near the motor. A semitrailer's VIN is located on the front part of
                    the semitrailer on the left side.</p><br>
                <p>If you can't find the VIN number on the vehicle, you should also be able to locate it on your vehicle's
                    title or liability insurance documents.</p>
            </div>
            <div class="section-title">
                <h2>How to use the vin decoder to do a VIN Number Check</h2>
                <p>Enter your vehicle's 17-character Vehicle Identification Number (VIN) in the field above to look up and
                    receive an instant report on its manufacturer, brand, make and model, body style, engine size, assembly
                    plant, and model year. The information is provided by the National Highway Traffic Safety Administration
                    (NHTSA) from the data submitted by the manufacturers to NHTSA. The VIN Decoder lookup is intended for
                    use with vehicles manufactured since 1981. If your vehicle was made before 1981, the VIN will most
                    likely contain 11 characters.</p>
            </div>
        </div>
        <section id="table">
            <div class="section-title">
                <h2>Model Year Character Codes</h2>
            </div>
            <table class="aligncenter" style="border-collapse: collapse; width: 80%; height: 100%; margin: auto;"
                border="1" cellspacing="0" cellpadding="0">
                <colgroup>
                    <col style="width: 11.428%;" span="6" width="64">
                </colgroup>
                <tbody>
                    <tr style="height: 14.4pt;">
                        <th class="xl66" style="height: 14.4pt; width: 92.9px;" height="19">Code</th>
                        <th class="xl66" style="border-left: medium none; width: 92.9px;">Year</th>
                        <th class="xl66" style="border-left: medium none; width: 92.9px;">Code</th>
                        <th class="xl66" style="border-left: medium none; width: 92.9px;">Year</th>
                        <th class="xl66" style="border-left: medium none; width: 92.9px;">Code</th>
                        <th class="xl66" style="border-left: medium none; width: 92.9px;">Year</th>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">A</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1980</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">X</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1999</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">J</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2018</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">B</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1981</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">Y</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2000</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">K</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2019</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">C</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1982</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2001</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">L</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2020</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">D</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1983</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2002</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">M</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2021</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">E</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1984</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">3</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2003</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">N</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2022</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">F</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1985</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">4</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2004</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">P</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2023</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">G</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1986</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">5</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2005</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">R</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2024</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">H</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1987</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">6</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2006</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">S</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2025</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">J</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1988</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">7</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2007</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">T</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2026</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">K</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1989</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">8</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2008</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">V</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2027</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">L</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1990</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">9</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2009</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">W</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2028</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">M</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1991</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">A</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2010</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">X</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2029</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">N</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1992</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">B</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2011</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">Y</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2030</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">P</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1993</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">C</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2012</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2031</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">R</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1994</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">D</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2013</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2032</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">S</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1995</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">E</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2014</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">3</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2033</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">T</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1996</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">F</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2015</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">4</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2034</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">V</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1997</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">G</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2016</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">5</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2035</td>
                    </tr>
                    <tr style="height: 14.4pt;">
                        <td class="xl65" style="height: 14.4pt; border-top: medium none; width: 92.9px;" scope="col"
                            height="19">W</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">1998</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">H</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2017</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">6</td>
                        <td class="xl65" style="border-top: medium none; border-left: medium none; width: 92.9px;"
                            scope="col">2036</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- Start Overview Area -->
        <section class="ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-content">
                            <h3>What People Say About Us</h3>
                            <div class="bar"></div>
                            <h3 style="font-size: medium;">Wonderful experience</h3>
                            <p>Thanks to CHECKVINONILNE I got valuable info that I needed about a car’s damages. to be specific
                                there was an airbag deployment and a vehicle rollover. So I was lucky that I checked the
                                report first before buying the car. Was the price worth it? absolutely! Thanks for your
                                service EpicVIN!</p>
                            <div class="overview-btn">
                                <span><img src="./assets/img/Vin/Mask_Group_2.png"
                                        style="display: inline; width: fit-content;" alt="" srcset=""
                                        style="border: #0015ff 3px solid; border-radius: 50%;"></span>
                                <span>
                                    <h5 style="display: inline; width: fit-content;">Chris Hoang</h5>
                                </span>
                                <span>
                                    <p style="display: inline; width: fit-content;"><br>Chris Hoang</p>
                                </span>
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
    </section>

@endsection
@push('scripts')
@endpush
