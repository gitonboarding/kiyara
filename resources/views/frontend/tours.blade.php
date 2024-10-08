@extends('frontend.layouts.layout')
<base href="" >
@section('banner')
<!-- Sub banner -->
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="sub_banner_content" data-aos="fade-up">
                    <h1 class="text-white">Destinations</h1>
                    <p class="text-white text-size-16">Nuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore noulla pariatur ccaecat curidatat aero.</p>
                    <div class="box">
                        <a href="index.html" class="text-decoration-none">
                            <span class="mb-0">Home</span>
                        </a>
                        <i class="arrow fa-solid fa-arrow-right"></i>
                        <span class="mb-0 box_span">Destinations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('contents')

<!-- Place -->
<section class="place-con destinationpage-place position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="place_content text-center" data-aos="fade-up">
                    <h6>Best Places</h6>
                    <h2>Popular Destinations</h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
            <ul class="nav nav-tabs" data-aos="fade-up">
                <li><a class="active" data-toggle="tab" href="#all">All</a></li>
                <li><a data-toggle="tab" href="#asia">Asia</a></li>
                <li><a data-toggle="tab" href="#europe">Europe</a></li>
                <li><a data-toggle="tab" href="#africa">Africa</a></li>
                <li><a data-toggle="tab" href="#australia">Australia</a></li>
            </ul>
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image1.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-1">
                                        <h4>Civita di Bagnoregio</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">128</span></span>
                                        <a href="#" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image2.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-2">
                                        <h4>Fort Conger Island</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="#" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image3.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-3">
                                        <h4>Barcelona City Beach</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="#" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image4.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-4">
                                        <h4>Eiffel Tower Paris</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">128</span></span>
                                        <a href="#" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image5.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-5">
                                        <h4>Machu Picchu Peru</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="#" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image6.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6">
                                        <h4>The Taj Mahal</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="asia" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="{{ asset('frontend/assets/images/place-image3.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-3">
                                        <h4>Barcelona City Beach</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image4.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-4">
                                        <h4>Eiffel Tower Paris</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">128</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image5.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-5">
                                        <h4>Machu Picchu Peru</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image6.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6">
                                        <h4>The Taj Mahal</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="europe" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image5.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-5">
                                        <h4>Machu Picchu Peru</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image6.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6">
                                        <h4>The Taj Mahal</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="africa" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image4.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-4">
                                        <h4>Eiffel Tower Paris</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">128</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image5.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-5">
                                        <h4>Machu Picchu Peru</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image6.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6">
                                        <h4>The Taj Mahal</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image1.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-1">
                                        <h4>Civita di Bagnoregio</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">128</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image2.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-2">
                                        <h4>Fort Conger Island</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image3.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-3">
                                        <h4>Barcelona City Beach</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="australia" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image6.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6">
                                        <h4>The Taj Mahal</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image1.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-1">
                                        <h4>Civita di Bagnoregio</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">128</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image2.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-2">
                                        <h4>Fort Conger Island</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">390</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/place-image3.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-3">
                                        <h4>Barcelona City Beach</h4>
                                    </a>
                                    <div class="value">
                                        <span class="money">$<span class="counter">430</span></span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join -->
<section class="join-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="join_content text-center" data-aos="fade-up">
                    <h6 class="text-white">Come & Join Us</h6>
                    <h2 class="text-white">Making Adventure Tours and Activities Accessible and Affordable for Everyone.</h2>
                    <a href="./contact.html" class="text-decoration-none all_button">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimonial_wrapper position-relative" data-aos="zoom-in">
                    <figure class="testimonial-circle image mb-0">
                        <img src="./assets/images/testimonial-centerimage.jpg" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image1 image mb-0">
                        <img src="./assets/images/testimonial-image1.jpg" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image2 image mb-0">
                        <img src="./assets/images/testimonial-image2.jpg" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image3 image mb-0">
                        <img src="./assets/images/testimonial-image3.jpg" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image4 image mb-0">
                        <img src="./assets/images/testimonial-image4.jpg" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimonial_contentwrapper" data-aos="fade-up">
                    <div class="testimonial_content">
                        <h6>Testimonials</h6>
                        <h2>What Our Customers Have To Say</h2>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet,
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="designation-outer">
                                                <span class="name">Kevin James</span>
                                                <span class="review">Happy Client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet,
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="designation-outer">
                                                <span class="name">Kevin James</span>
                                                <span class="review">Happy Client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-outer">
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fa-solid fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner -->
<section class="partner-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner_content text-center" data-aos="fade-up">
                    <h6>Partners</h6>
                    <h2>Our Trusted Partners</h2>
                </div>
            </div>
            <ul class="list-unstyled mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner1.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner2.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 haus">
                        <img src="./assets/images/partner3.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner4.png" alt="image" class="img-fluid">
                    </figure>
                </li>
            </ul>
            <ul class="list-unstyled second mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner5.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner6.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img src="./assets/images/partner7.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img src="./assets/images/partner8.png" alt="image" class="img-fluid">
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</section>

@endsection