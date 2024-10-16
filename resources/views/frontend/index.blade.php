@extends('frontend.layouts.layout')

@section('contents')
@section('banner')
<!-- Banner -->
<section class="banner-con position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-12 mx-auto">
        <div class="banner_content text-center" data-aos="fade-up">
          <h3 class="text-white">Discover The World</h3>
          <h1 class="text-white">
            Enjoy Luxurious Adventures Trip With Us
          </h1>
          {{--<div class="banner-box">
                        <form action="javascript:;">
                            <div class="form-group float-left mb-0">
                                <div class="upper">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <label for="destination">Destination</label>
                                </div>
                                <input
                                    type="text"
                                    class="form_style"
                                    id="destination"
                                    placeholder="Switzerland"
                                    name="destination" />
                            </div>
                            <div class="form-group float-left mb-0">
                                <div class="upper">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <label for="date">Date</label>
                                </div>
                                <input
                                    type="date"
                                    class="form_style"
                                    id="date"
                                    name="date" />
                            </div>
                            <div class="form-group float-left mb-0 mr-0">
                                <div class="upper">
                                    <i class="fa-solid fa-users"></i>
                                    <label for="people">People</label>
                                </div>
                                <input
                                    type="text"
                                    class="form_style"
                                    id="people"
                                    placeholder="4 People"
                                    name="people" />
                            </div>
                            <hr />
                            <button>
                                <i class="search fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>--}}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-1 mx-auto">
        <a href="#dropdown" class="top-btn text-center">
          <figure class="banner-dropdownimage mb-0">
            <img
              src="{{ asset('frontend/assets/images/banner-dropdownimage.png')}}"
              class="img-fluid"
              alt="image" />
          </figure>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
<!-- end banner -->
<!-- Explore -->
<section class="explore-con" id="dropdown">
  <div class="container-fluid">
    <div class="row">
      <div class="explore_content" data-aos="fade-up">
        <h6>Where to Go</h6>
        <h2>Explore The World With Us</h2>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
      <div class="owl-carousel">
        @foreach($exploretours as $tour)
        <div class="item">
          <div class="explore-box">
            <figure class="image mb-0">
              <img
                src="{{ asset('storage/' . $tour->image) }}"
                alt="{{ $tour->name }}"
                class="img-fluid" />
            </figure>
            <div class="rating">
              <i class="fa-solid fa-star"></i>
              <span class="text-white">{{ $tour->category }}</span>
            </div>
            <div class="content">
              <div class="text">
                <div class="place">
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="text-white">{{ $tour->places }} Places</span>
                </div>
                <h4 class="text-white mb-0">{{ $tour->name }}</h4>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section class="about-con position-relative">
  <div class="container">
    <div class="row align-items-center">
      <div
        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-lg-left text-center">
        <div class="about_wrapper position-relative" data-aos="zoom-in">
          <figure class="about-image mb-0">
            <img
              src="{{ asset('frontend/assets/images/travel-2.jpg')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          {{--<figure class="about-locationimage mb-0">
                <img
                  src="{{ asset('frontend/assets/images/about-locationimage.png')}}"
          alt="image"
          class="img-fluid"
          />
          </figure>--}}
          <div class="box" data-aos="fade-up">
            <div class="images">
              <figure class="about-personimage1 mb-0 ml-0">
                <img
                  src="{{ asset('frontend/assets/images/about-personimage1.jpg')}}"
                  alt="image"
                  class="img-fluid" />
              </figure>
              <figure class="about-personimage2 mb-0">
                <img
                  src="{{ asset('frontend/assets/images/about-personimage2.jpg')}}"
                  alt="image"
                  class="img-fluid" />
              </figure>
              <figure class="about-personimage3 mb-0">
                <img
                  src="{{ asset('frontend/assets/images/about-personimage3.jpg')}}"
                  alt="image"
                  class="img-fluid" />
              </figure>
            </div>
            <div class="text">
              <span class="value"><span class="numb counter">156</span>+</span>
              <span class="review">Satisfied Clients</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="about_content" data-aos="fade-up">
          <h6>About Us</h6>
          <h2>Unveil Prime Destinations With Us</h2>
          <p class="text-size-16 text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur ccaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit.
          </p>
          <ul class="list-unstyled mb-0">
            <li>
              <span class="value"><span class="counter">15</span>k</span>
              <p class="text-size-14 mb-0">Success Journey</p>
            </li>
            <li>
              <span class="value"><span class="counter">26</span>+</span>
              <p class="text-size-14 mb-0">Awards Win</p>
            </li>
            <li>
              <span class="value"><span class="counter">30</span>+</span>
              <p class="text-size-14 mb-0">Years of Experience</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Service -->
<section class="service-con position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <div class="service_content text-center" data-aos="fade-up">
          <h6>What We Offer</h6>
          <h2>Best Services We Offer</h2>
        </div>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="service-box">
          <figure class="icon">
            <img
              src="{{ asset('frontend/assets/images/service-icon1.png')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          <h4>Exciting Journeys</h4>
          <p class="text-size-16">
            Embark on thrilling expeditions and immerse yourself in
            unforgettable experiences.
          </p>
          <a href="#" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="service-box">
          <figure class="icon">
            <img
              src="{{ asset('frontend/assets/images/service-icon2.png')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          <h4>Expert Guides</h4>
          <p class="text-size-16">
            Our seasoned guides ensure a safe and enriching adventure,
            tailored to your needs.
          </p>
          <a href="#" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="service-box">
          <figure class="icon">
            <img
              src="{{ asset('frontend/assets/images/service-icon3.png')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          <h4>Personalized Packages</h4>
          <p class="text-size-16">
            Choose from a variety of custom packages designed to suit every
            traveler's desire.
          </p>
          <a href="#" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="service-box">
          <figure class="icon">
            <img
              src="{{ asset('frontend/assets/images/service-icon4.png')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          <h4>Scenic Trails</h4>
          <p class="text-size-16">
            Explore breathtaking trails and discover the beauty of untouched
            nature.
          </p>
          <a href="#" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="service-box">
          <figure class="icon">
            <img
              src="{{ asset('frontend/assets/images/service-icon5.png')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          <h4>Family Adventures</h4>
          <p class="text-size-16">
            Create lasting memories with family trips that are fun and
            suitable for all ages.
          </p>
          <a href="#" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="service-box">
          <figure class="icon">
            <img
              src="{{ asset('frontend/assets/images/service-icon6.png')}}"
              alt="image"
              class="img-fluid" />
          </figure>
          <h4>Comprehensive Support</h4>
          <p class="text-size-16">
            Receive a complete guide to make your adventure seamless and
            worry-free.
          </p>
          <a href="#" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
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
          <h2 class="text-white">
            Making Adventure Tours and Activities Accessible and Affordable
            for Everyone.
          </h2>
          <a href="#" class="text-decoration-none all_button">Find Tours<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Place -->
<section class="place-con position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <div class="place_content text-center" data-aos="fade-up">
          <h6>Best Places</h6>
          <h2>Popular Destinations</h2>
        </div>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
      <div class="owl-carousel owl-theme">
        @foreach($is_recommendation as $destination)
        <div class="item">
          <div class="place-box">
            <figure class="image mb-0">
              <img
                src="{{ asset('storage/' . $destination->image) }}"
                alt="{{ $destination->title }}"
                class="img-fluid" />
            </figure>
            <div class="lower_content">
              <div class="content">
                <div class="calendar">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span class="day">{{ $destination->duration }} Days</span>
                </div>
                <div class="people">
                  <i class="fa-solid fa-user"></i>
                  <span class="person">{{ $destination->parson_no }} Person</span>
                </div>
              </div>
              <a
                href="{{url('tours/details', $destination->slug)}}"
                class="text-decoration-none"
                >
                <h4>{{ $destination->name }}</h4>
              </a>
              <div class="value">
                <span class="money">₹<span class="counter">{{ $destination->price }}</span></span>
                <a
                  href="{{url('tours/details', $destination->slug)}}"
                  class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
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