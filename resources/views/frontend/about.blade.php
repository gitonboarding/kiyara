@extends('frontend.layouts.layout')
@section('banner')
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="sub_banner_content" data-aos="fade-up">
                    <h1 class="text-white">About Us</h1>
                    <p class="text-white text-size-16">Quis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore noulla pariatur ccaecat curidatat aero.</p>
                    <div class="box">
                        <a href="{{'/'}}" class="text-decoration-none">
                            <span class="mb-0">Home</span>
                        </a>
                        <i class="arrow fa-solid fa-arrow-right"></i>
                        <span class="mb-0 box_span">About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('contents')
<!-- About -->
<section class="aboutpage-con position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                <div class="about_wrapper position-relative" data-aos="zoom-in">
                    <figure class="about-image mb-0">
                        <img src="{{ asset('frontend/assets/images/aboutpage-image.jpg')}}" alt="image" class="img-fluid">
                    </figure>
                    <figure class="about-locationimage mb-0">
                        <img src="{{ asset('frontend/assets/images/about-locationimage.png')}}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-up">
                    <h6>About Us</h6>
                    <h2>Discover Top Destinations With Us</h2>
                    <p class="text-size-16 text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur ccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Excepteur sint occaecat cupidatat noru even.</p>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Duis aute irure dolor in reprehenderit in voluta facis.</p>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Rerum hic tenetur a sapiente delectus au occae.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Activity -->
<section class="activity-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
                <div class="activity_content" data-aos="fade-up">
                    <h6 class="text-white">What We Do</h6>
                    <h2 class="text-white">Activities That Makes You Thrilled</h2>
                    <p class="text-white text-size-16 text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur ccaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <span class="value"><span class="counter">500</span>k</span>
                            <p class="text-size-14 mb-0">Successful Tours</p>
                        </li>
                        <li>
                            <span class="value"><span class="counter">190</span>+</span>
                            <p class="text-size-14 mb-0">Total Countries</p>
                        </li>
                        <li>
                            <span class="value"><span class="counter">5</span>+</span>
                            <p class="text-size-14 mb-0">Years of Experience</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                <div class="activity_wrapper position-relative" data-aos="zoom-in">
                    <figure class="activity-rightbackground mb-0">
                        <img src="{{ asset('frontend/assets/images/activity-rightbackground.jpg')}}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <figure class="activity-bottomimage mb-0">
        <img src="{{ asset('frontend/assets/images/activity-bottomimage.png')}}" alt="image" class="img-fluid">
    </figure>
</section>
<!-- Explore -->
{{--<section class="aboutexplore-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="explore_content text-center" data-aos="fade-up">
                    <h6>Where to Go</h6>
                    <h2>Explore The World With Us</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-12">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="explore-box">
                            <figure class="image mb-0">
                                <img src="{{ asset('frontend/assets/images/explore-image1.jpg')}}" alt="image" class="img-fluid">
</figure>
<div class="rating">
    <i class="fa-solid fa-star"></i>
    <span class="text-white">4.7</span>
</div>
<div class="content">
    <div class="text">
        <div class="place">
            <i class="fa-solid fa-location-dot"></i>
            <span class="text-white">24 Places</span>
        </div>
        <h4 class="text-white mb-0">Chicago</h4>
    </div>
</div>
</div>
</div>
<div class="item">
    <div class="explore-box">
        <figure class="image mb-0">
            <img src="{{ asset('frontend/assets/images/explore-image2.jpg')}}" alt="image" class="img-fluid">
        </figure>
        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <span class="rate text-white">4.8</span>
        </div>
        <div class="content">
            <div class="text">
                <div class="place">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="text-white">18 Places</span>
                </div>
                <h4 class="text-white mb-0">London</h4>
            </div>
        </div>
    </div>
</div>
<div class="item">
    <div class="explore-box">
        <figure class="image mb-0">
            <img src="{{ asset('frontend/assets/images/explore-image3.jpg')}}" alt="image" class="img-fluid">
        </figure>
        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <span class="rate text-white">5.0</span>
        </div>
        <div class="content">
            <div class="text">
                <div class="place">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="text-white">15 Places</span>
                </div>
                <h4 class="text-white mb-0">Venice</h4>
            </div>
        </div>
    </div>
</div>
<div class="item">
    <div class="explore-box">
        <figure class="image mb-0">
            <img src="{{ asset('frontend/assets/images/explore-image4.jpg')}}" alt="image" class="img-fluid">
        </figure>
        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <span class="rate text-white">3.9</span>
        </div>
        <div class="content">
            <div class="text">
                <div class="place">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="text-white">32 Places</span>
                </div>
                <h4 class="text-white mb-0">Spain</h4>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>--}}
<!-- Join -->
{{--<section class="join-con position-relative">
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
</section>--}}
<!-- Testimonial -->
{{--<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimonial_wrapper position-relative" data-aos="zoom-in">
                    <figure class="testimonial-circle image mb-0">
                        <img src="{{ asset('frontend/assets/images/testimonial-centerimage.jpg')}}" alt="image" class="img-fluid">
</figure>
<figure class="testimonial-image1 image mb-0">
    <img src="{{ asset('frontend/assets/images/testimonial-image1.jpg')}}" alt="image" class="img-fluid">
</figure>
<figure class="testimonial-image2 image mb-0">
    <img src="{{ asset('frontend/assets/images/testimonial-image2.jpg')}}" alt="image" class="img-fluid">
</figure>
<figure class="testimonial-image3 image mb-0">
    <img src="{{ asset('frontend/assets/images/testimonial-image3.jpg')}}" alt="image" class="img-fluid">
</figure>
<figure class="testimonial-image4 image mb-0">
    <img src="{{ asset('frontend/assets/images/testimonial-image4.jpg')}}" alt="image" class="img-fluid">
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
                                    <img src="{{ asset('frontend/assets/images/testimonial-quote.png')}}" alt="image" class="img-fluid">
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
                                    <img src="{{ asset('frontend/assets/images/testimonial-quote.png')}}" alt="image" class="img-fluid">
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
</section>--}}
<!-- Partner -->
{{--<section class="partner-con">
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
                        <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
</figure>
</li>
<li>
    <figure class="mb-0">
        <img src="{{ asset('frontend/assets/images/partner2.png')}}" alt="image" class="img-fluid">
    </figure>
</li>
<li>
    <figure class="mb-0 haus">
        <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
    </figure>
</li>
<li>
    <figure class="mb-0">
        <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
    </figure>
</li>
</ul>
<ul class="list-unstyled second mb-0" data-aos="fade-up">
    <li>
        <figure class="mb-0">
            <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
        </figure>
    </li>
    <li>
        <figure class="mb-0">
            <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
        </figure>
    </li>
    <li class="mb-0">
        <figure class="mb-0">
            <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
        </figure>
    </li>
    <li class="mb-0">
        <figure class="mb-0">
            <img src="{{ asset('frontend/assets/images/partner1.png')}}" alt="image" class="img-fluid">
        </figure>
    </li>
</ul>
</div>
</div>
</section>--}}






@endsection