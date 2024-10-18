<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kiyara Global Travels</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="frontend/assets/images/fevicon.png">

    <link rel="manifest" href="{{ asset('frontend/assets/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('frontend/assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/js/bootstrap.min.js') }}">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/customs.css') }}" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>




<body>

    <a id="button"></a>
    <div class=" sub_banner trip_banner_outer position-relative">

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="{{'/'}}">
                        <figure class="logo mb-0">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="image" class="img-fluid" />
                        </figure>
                    </a>
                    <button
                        class="navbar-toggler collapsed"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                            </li>
                            <li class="nav-item {{ Request::is('tours') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('tours') }}">Tours</a>
                            </li>
                            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link book_now" href="{{ url('contact') }}">Custom Tour</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        @yield('banner')
    </div>
    <!-- End Header -->
    @yield('contents')
    <!-- Start Footer -->
    <section class="footer-con position-relative">
        <div class="footer_upperportion position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="upper_portion">
                            <a href="{{'/'}}">
                                <figure class="footer-logo mb-0">
                                    <img
                                        class="img-fluid"
                                        src="{{ asset('frontend/assets/images/logo.png')}}"
                                        alt="image" />
                                </figure>
                            </a>
                            <p class="text-size-18 mb-0">Sign up for the newsletter:</p>
                            <form action="javascript:;">
                                <div class="form-group position-relative mb-0">
                                    <input
                                        type="text"
                                        class="form_style"
                                        placeholder="Enter Email Address"
                                        name="email" />
                                    <button>
                                        <i class="send fa-sharp fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_lowerportion position-relative">
            <div class="container">
                <div class="middle_portion">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="logo-content">
                                <h5 class="heading">About Us</h5>
                                <p class="text-size-14 text">
                                    Quia voluptas sit asper aut oit aut fugit sed quia
                                    consequuntur magni nesciunt ese ciu aorro...
                                </p>
                                <ul class="list-unstyled mb-0 social-icons">
                                    <li>
                                        <a
                                            href="https://www.facebook.com/"
                                            class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.instagram.com/"
                                            class="text-decoration-none"><i class="fa-brands fa-instagram social-networks"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.youtube.com/"
                                            class="text-decoration-none"><i class="fa-brands fa-youtube social-networks"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="links">
                                <h5 class="heading">Navigation</h5>
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i><a href="{{'/'}}">Home</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i><a href="{{url('/about')}}">About Us</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i><a href="{{url('/tours')}}">Tours</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i><a href="{{url('/contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="icon">
                                <h5 class="heading">Contact Us</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="text">
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:+919867692948" class="text-decoration-none">+91 9867692948</a>
                                    </li>
                                    <li class="text">
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:+919892132429" class="text-decoration-none">+91 9892132429</a>
                                    </li>
                                    <li class="text">
                                        <i class="fa-solid fa-envelope"></i>
                                        <a
                                            href="mailto:kiyaraglobaltravels@kiyara.net"
                                            class="text-decoration-none">kiyaraglobaltravels@kiyara.net</a>
                                    </li>
                                    <li class="text">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <a
                                            href=""
                                            class="text-decoration-none address mb-0">No.67 Aircondition Market Tardeo, AC Market Tardeo, Mumbai - 400034
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="mb-0">Copyright ©2024 Kiyara Global Travels. All Rights Reserved.</p>
            </div>
        </div>
    </section>
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/back-to-top-button.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/preloader.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/counter.js') }}"></script>
    <script>
        // Function to get today's date in yyyy-mm-dd format
        function getTodayDate() {
            let today = new Date();
            let day = String(today.getDate()).padStart(2, '0');
            let month = String(today.getMonth() + 1).padStart(2, '0');
            let year = today.getFullYear();
            return `${year}-${month}-${day}`;
        }

        // Function to convert date to dd/mm/yyyy format
        function formatDateToDDMMYYYY(date) {
            let day = String(date.getDate()).padStart(2, '0');
            let month = String(date.getMonth() + 1).padStart(2, '0');
            let year = date.getFullYear();
            return `${day}/${month}/${year}`;
        }

        const deptDateInput = document.getElementById('deptdate');

        // On focus, change input type to date and set minimum date to today
        deptDateInput.addEventListener('focus', function() {
            deptDateInput.type = 'date';
            deptDateInput.min = getTodayDate();
        });

        // On input (when date is selected), format it to dd/mm/yyyy instantly
        deptDateInput.addEventListener('input', function() {
            if (deptDateInput.value) {
                let selectedDate = new Date(deptDateInput.value);
                deptDateInput.type = 'text'; // Change input back to text
                deptDateInput.value = formatDateToDDMMYYYY(selectedDate); // Show formatted date
            }
        });

        // Reset to text type if input is cleared
        deptDateInput.addEventListener('blur', function() {
            if (!deptDateInput.value) {
                deptDateInput.type = 'text';
            }
        });
    </script>

    


</body>

</html>