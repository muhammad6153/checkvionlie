<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap 5 JS (popper.js and jquery.js are dependencies) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Home</title>

    <link rel="icon" type="image/png" href="">
    <style>
    @media(max-width:390px){
        .topbar{
            display: none;
        }
    }
    @media(max-width:800px)
    {
        .top-grids{
            display:inline-flex;
        }
        .top-grids p{
            font-size:10px;
        }
    }
    </style>
</head>


<body>


    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start top Bar -->
    <div class="topbar">
        <div class="container">
        <div class="top-grids" style="width:40%">
            <span>
                <img src="./assets/img/Vin/location-icon.svg" alt="" srcset="" width="28px">
                <p>5586 W ATLANTIC AVE STE 2095 DELRAY BEACH, FL, 33446</p>
            </span>
        </div>
        <div class="top-grids">
            <span>
                <img src="./assets/img/Vin/phone-icon.svg" alt="" srcset="" width="28px">
                <p><a href="tel:+1 (786)-480-5228">+1 (786)-480-5228</a></a></p>
            </span>
        </div>
        <div class="top-grids">
            <span>
                <img src="./assets/img/Vin/email-icon.svg" alt="" srcset="" width="28px">
                <p>support@Checkvinonline.com</p>
            </span>
        </div>
        </div>
    </div>
    <!-- End top Bar -->

    <!-- Start Navbar Area -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logowhite.png') }}" >
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route(front_route('page.about')) }}" class="nav-link">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route(front_route('page.faq')) }}" class="nav-link">
                            Info
                        </a>
                    </li>
               

                </ul>

                <div class="others-option">
                    <div class="d-flex align-items-center">
                        <div class="option-item">
                            <a class="default-btn" href="{{ asset('assets/img/sample.pdf') }}" download="" >
                                Download Sample Report
                       
                            </a>
                            {{-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel"
                                                style="font-weight: bolder; font-size:18px; width:100%; margin: auto;">
                                                <span
                                                    style="width:50%; padding: 0px 20%; border-bottom: 4px solid #006CD9;">Login</span><span
                                                    style=" width:50%; padding: 0px 20%;"
                                                    data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Register</span>
                                            </h5><br><br>
                                            <!-- <h5 class="modal-title" id="exampleModalToggleLabel" style="font-weight: bolder; font-size:18px;"><span>Login</span></h5> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="-div" style="width: fit-content; margin: auto;"></div>
                                        <!-- <h5 style="width: fit-content; margin: auto;"><span>Login</span>  | <span>Register</span></h5> -->
                                        <div class="modal-body">
                                            <!-- <h5 class="modal-title" id="exampleModalToggleLabel" style="font-weight: bolder; font-size:18px; width:100%; margin: auto;"><span style="width:50%; border-bottom: 4px solid #006CD9; padding: 0px 20%;">Login</span><span style="width:50%; padding: 0px 20%;">Signup</span></h5><br><br> -->
                                            <form>
                                                <h5
                                                    style="font-size: 12px; margin: auto; width: fit-content;padding-top: 10px; padding-bottom: 10px;">
                                                    or Sign up with Email</h5>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                                                    <input
                                                        style="margin-bottom: 10px; border: #006CD9 1px solid !important;"
                                                        type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Enter email"
                                                        style="color: black; border: #0015ff 2px solid !important;">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputPassword1">Password</label> -->
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password"
                                                        style="color: black; border: #0015ff 2px solid !important;">
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Remember
                                                        Me</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary"
                                                    style="width: 100%;">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Signup Now</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel"
                                                style="font-weight: bolder; font-size:18px; width:100%; margin: auto;">
                                                <span style="width:50%; padding: 0px 20%;"
                                                    data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Login</span><span
                                                    style=" border-bottom: 4px solid #006CD9; width:50%; padding: 0px 20%;"
                                                    data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Register</span>
                                            </h5><br><br>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <h5
                                                    style="font-size: 12px; margin: auto; width: fit-content;padding-top: 10px; padding-bottom: 10px;">
                                                    or Sign up with Email</h5>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                                                    <input
                                                        style="margin-bottom: 10px; border: #006CD9 1px solid !important;"
                                                        type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Enter email"
                                                        style="color: black; border: #0015ff 2px solid !important;">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                                                    <input
                                                        style="margin-bottom: 10px; border: #006CD9 1px solid !important;"
                                                        type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Enter email"
                                                        style="color: black; border: #0015ff 2px solid !important;">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputPassword1">Password</label> -->
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password"
                                                        style="color: black; border: #0015ff 2px solid !important;">
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Remember
                                                        Me</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary"
                                                    style="width: 100%;">Submit</button>
                                            </form>.
                                        </div>
                                        <!-- <div class="modal-footer">
                                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to Login</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="#" class="logo">
                            <h2>Car VinCheck</h2>
                        </a>
                        
                        <ul class="social-list">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">


                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Pages</h3>
                        <ul class="list">
                            <li>
                                <a href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route(front_route('page.about')) }}">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route(front_route('page.faq')) }}">
                                    VIN Check Information
                                </a>
                            </li>
                            <li>
                                <a href="{{ route(front_route('page.terms')) }}">
                                    Terms and Policies
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact</h3>
                        <ul class="list">
                            <li>
                                <a href="tel:+1 (786)-480-5228">
                                    +1 (786)-480-5228
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    support@Checkvinonline.com
                                </a>
                            </li>
                          
                            <li>
                                <a href="#">
                                    5586 W ATLANTIC AVE STE 2095 DELRAY BEACH, FL, 33446
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="padding:0px!important; border-bottom:transparent!important;     background-color: #006cd9;">
                  
                       <img src="{{ asset('assets/img/logowhite.png') }}" width="200px" style="margin-left: 150px; margin-top:10px">
                        <button type="button" class="close btn btn-default" data-dismiss="modal" id="closemodal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>We don't save customer's credit card infromation. Your credit card infromation is secured with 64-bit encryption to our mechant and we cannot see it. All of the data of a client is protected by PCI DSS standards (Payment Card Industry Data Security Standard)</p>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copy-right">
        <div class="container">
            <div class="copy-right-content">
                <p>
                    Copyright © 2023 CarVINCheck. All right reserved.
                    <a href="#" target="_blank">
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Section -->
    <div class="go-top">
        <i class="fa fa-chevron-up"></i>
        <i class="fa fa-chevron-up"></i>
    </div>
    <!-- End Go Top Section -->

    <!-- jQuery Min JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Popper Min JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Particles JS -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <!-- Ripples JS -->
    <script src="{{ asset('assets/js/jquery.ripples-min.js') }}"></script>
    <!-- Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- WOW Min JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- AjaxChimp Min JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact Form Min JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
<script>
    $(document).ready(function() {
        $("#myModal").modal('show');
        $('#closemodal').click(function() {
            $('#myModal').modal('hide');
        });
    });
</script>

</html>
