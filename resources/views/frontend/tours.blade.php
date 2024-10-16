@extends('frontend.layouts.layout')
<base href="">
@section('banner')
<!-- Sub banner -->
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="sub_banner_content" data-aos="fade-up">
                    <h1 class="text-white">Tours</h1>
                    <p class="text-white text-size-16">Nuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore noulla pariatur ccaecat curidatat aero.</p>
                    <div class="box">
                        <a href="{{'/'}}" class="text-decoration-none">
                            <span class="mb-0">Home</span>
                        </a>
                        <i class="arrow fa-solid fa-arrow-right"></i>
                        <span class="mb-0 box_span">Tours</span>
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
                <li><a href="{{ route('tours.category') }}" class="{{ request()->is('tours') ? 'active' : '' }}">All</a></li>
                <li><a href="{{ route('tours.category', 'international') }}" class="{{ request()->is('tours/international') ? 'active' : '' }}">International</a></li>
                <li><a href="{{ route('tours.category', 'domestic') }}" class="{{ request()->is('tours/domestic') ? 'active' : '' }}">Domestic</a></li>

            </ul>

            <div class="tab-content">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row" data-aos="fade-up">
                        @foreach($tours as $tour)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="{{url('tours/details', $tour->slug)}}" class="text-decoration-none">
                                <div class="place-box">
                                    <figure class="image mb-0">
                                        <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->name }}" class="img-fluid">
                                    </figure>
                                    <div class="lower_content">
                                        <div class="content">
                                            <div class="calendar">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span class="day">{{ $tour->duration }}</span>
                                            </div>
                                            <div class="people">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="person">{{ $tour->parson_no }} Person</span>
                                            </div>
                                        </div>

                                        <h4>{{ $tour->name }}</h4>
                                        <div class="value">
                                            <span class="money">$<span class="counter">{{ $tour->price }}</span></span>
                                            <a href="#" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custform-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2 style="text-align: center; color:#fff; margin-bottom: 40px;">Customize your tour</h2>
                <div class="contact_content" data-aos="fade-up">

                    <form id="contactpage" method="post" action="{{ route('enquiry.store') }}" class="position-relative">
                        @csrf <!-- Add CSRF token for security -->
                        <input type="hidden" name="type" value="tour">

                        <div class="form-group">
                            <select id="contentDropdown">
                                <option selected disabled>Select a country</option>
                                <option value="section1">Section 1</option>
                                <option value="section2">Section 2</option>
                                <option value="section3">Section 3</option>
                            </select>
                        </div>

                        <!-- <a target="_blank"
                            title="Contact Us On WhatsApp"
                            href="https://wa.me/8928826063?text=Hi,%20I%20would%20like%20to%20get%20more%20information.."
                            class="whatsapplink"
                            style="background-color:#2DC100; text-decoration: none; padding: 10px 20px; border-radius: 5px; display: inline-flex; align-items: center;">
                            <i class="fa fa-fw fa-whatsapp" style="color:#fff; font-size: 24px; margin-right: 10px;"></i>
                            <span style="color:#fff; font-size: 16px;">Contact Us On WhatsApp</span>
                        </a> -->


                    </form>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="contact_content country-detail" data-aos="fade-up">
                    <div class="content-section" id="sideContent">
                        <!-- The side content will change here -->
                        <h3>Select a country to customize your tour.</h3>
                    </div>
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
                        <img src="{{ asset('frontend/assets/images/testimonial-centerimage.jpg')}}" alt="image" class="img-fluid" />
                    </figure>
                    <figure class="testimonial-image1 image mb-0">
                        <img src="{{ asset('frontend/assets/images/testimonial-image1.jpg')}}" alt="image" class="img-fluid" />
                    </figure>
                    <figure class="testimonial-image2 image mb-0">
                        <img src="{{ asset('frontend/assets/images/testimonial-image2.jpg')}}" alt="image" class="img-fluid" />
                    </figure>
                    <figure class="testimonial-image3 image mb-0">
                        <img src="{{ asset('frontend/assets/images/testimonial-image3.jpg')}}" alt="image" class="img-fluid" />
                    </figure>
                    <figure class="testimonial-image4 image mb-0">
                        <img src="{{ asset('frontend/assets/images/testimonial-image4.jpg')}}" alt="image" class="img-fluid" />
                    </figure>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimonial_contentwrapper" data-aos="fade-up">
                    <div class="testimonial_content">
                        <h6>Testimonials</h6>
                        <h2>What Our Customers Have To Say</h2>
                    </div>
                    <div
                        id="carouselExampleControls"
                        class="carousel slide"
                        data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">
                                            Nemo enim ipsam voluptatem quia voluptas sit asperna
                                            aut odit aut fugit, sed quia consequuntur magni
                                            dolores eos qui ratione voluptatem sequi nesciuntporro
                                            quisuam est, rui dolorem ipsum quia dolor sit amet,
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="{{ asset('frontend/assets/images/testimonial-quote.png')}}" alt="image" class="img-fluid" />
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
                                        <p class="text-size-16">
                                            Nemo enim ipsam voluptatem quia voluptas sit asperna
                                            aut odit aut fugit, sed quia consequuntur magni
                                            dolores eos qui ratione voluptatem sequi nesciuntporro
                                            quisuam est, rui dolorem ipsum quia dolor sit amet,
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img
                                                    src="{{ asset('frontend/assets/images/testimonial-quote.png')}}"
                                                    alt="image"
                                                    class="img-fluid" />
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
                            <a
                                class="carousel-control-prev"
                                href="#carouselExampleControls"
                                role="button"
                                data-slide="prev">
                                <i class="fa-solid fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a
                                class="carousel-control-next"
                                href="#carouselExampleControls"
                                role="button"
                                data-slide="next">
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
                        <img
                            src="{{ asset('frontend/assets/images/partner1.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img
                            src="{{ asset('frontend/assets/images/partner2.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 haus">
                        <img
                            src="{{ asset('frontend/assets/images/partner3.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img
                            src="{{ asset('frontend/assets/images/partner4.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
            </ul>
            <ul class="list-unstyled second mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img
                            src="{{ asset('frontend/assets/images/partner5.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img
                            src="{{ asset('frontend/assets/images/partner6.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img
                            src="{{ asset('frontend/assets/images/partner7.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img
                            src="{{ asset('frontend/assets/images/partner8.png')}}"
                            alt="image"
                            class="img-fluid" />
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</section>

@endsection