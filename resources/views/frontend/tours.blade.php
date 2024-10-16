@extends('frontend.layouts.layout')

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
<style>
    .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .gallery img {
        width: 150px;
        /* Adjust width as needed */
        height: auto;
        /* Maintain aspect ratio */
        display: block;
        /* Ensure images are displayed */
    }
</style>

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
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <h2 style="text-align: center; color:#fff; margin-bottom: 40px;">Customize your tour</h2>
                <div class="contact_content" data-aos="fade-up">
                    <form id="contactpage" method="post" action="{{ route('enquiry.store') }}" class="position-relative">
                        @csrf
                        <input type="hidden" name="type" value="tour">

                        <div class="form-group">
                            <label for="contentDropdown" style="color:#fff;">Select a country</label>
                            <select id="contentDropdown" class="form-control" onchange="updateGallery()">
                                <option selected disabled>Select a country</option>
                                <option value="india">India</option>
                                <option value="usa">USA</option>
                                <option value="france">France</option>
                                <option value="uk">UK</option>
                                <option value="germany">Germany</option>
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="japan">Japan</option>
                                <option value="brazil">Brazil</option>
                                <option value="south_africa">South Africa</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_content country-detail" data-aos="fade-up">
                    <div class="content-section" id="sideContent">
                        <h3 id="galleryTitle">Select a country to customize your tour.</h3>
                        <div id="gallery" class="owl-carousel gallery"></div> <!-- Owl Carousel Container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // This function runs when the DOM is fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        const galleries = {
            india: [
                'https://images.unsplash.com/photo-1523428461295-92770e70d7ae?q=80&w=1990&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'https://images.unsplash.com/photo-1545126178-862cdb469409?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'https://images.unsplash.com/photo-1649203906735-b33faecbfb45?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'https://images.unsplash.com/photo-1523428461295-92770e70d7ae?q=80&w=1990&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'https://images.unsplash.com/photo-1640674458300-db3eae079b1f?q=80&w=1948&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'https://images.unsplash.com/photo-1658316532318-8d9a5595293f?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            usa: [
                'https://images.unsplash.com/photo-1518458231900-41c00b2edb9c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDR8fHVzYXxlbnwwfHx8fDE2MTM2OTkyMTA&ixlib=rb-1.2.1&q=80&w=400',
                'https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fHVzYXxlbnwwfHx8fDE2MTM2OTkyMTA&ixlib=rb-1.2.1&q=80&w=400',
                'https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDE4fHR1c2F8ZW58MHx8fHwxNjEzNjk5MjE0&ixlib=rb-1.2.1&q=80&w=400',
                'https://images.unsplash.com/photo-1517065860619-5bb35e76c7ff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEwfHR1c2F8ZW58MHx8fHwxNjEzNjk5MjE0&ixlib=rb-1.2.1&q=80&w=400',
                'https://images.unsplash.com/photo-1554757568-9bb4210e52ee?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEyfHR1c2F8ZW58MHx8fHwxNjEzNjk5MjE0&ixlib=rb-1.2.1&q=80&w=400',
                'https://images.unsplash.com/photo-1533597891762-c5ec8c2e140c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fHR1c2F8ZW58MHx8fHwxNjEzNjk5MjE0&ixlib=rb-1.2.1&q=80&w=400',
            ],
            // Add other countries similarly...
        };


        window.updateGallery = function() {
            const dropdown = document.getElementById('contentDropdown');
            const selectedCountry = dropdown.value;
            const galleryContainer = document.getElementById('gallery');
            const galleryTitle = document.getElementById('galleryTitle');

            // Clear the gallery
            galleryContainer.innerHTML = '';

            // Check if a valid country is selected
            if (selectedCountry && galleries[selectedCountry]) {
                // Update the title
                galleryTitle.innerText = `Gallery for ${selectedCountry.charAt(0).toUpperCase() + selectedCountry.slice(1)}`;

                // Populate the gallery
                galleries[selectedCountry].forEach(src => {
                    const item = document.createElement('div');
                    item.classList.add('item'); // Owl Carousel item class
                    item.innerHTML = `<img src="${src}" alt="${selectedCountry} Gallery">`;
                    galleryContainer.appendChild(item);
                });

                // Initialize Owl Carousel
                $(galleryContainer).owlCarousel({
                    items: 3, // Number of items to display
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                });
            } else {
                galleryTitle.innerText = 'Select a country to customize your tour.';
            }
        }
    });
</script>











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