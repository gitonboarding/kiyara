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
        <div class="row custom-country">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2 style="text-align: center; color:#fff; margin-bottom: 40px;">Customize your tour</h2>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact_content select-country" data-aos="fade-up">
                    <select id="myDropdown" onchange="updateSection()">
                        <option value="" selected disabled>Select a country</option>
                        <option value="section1">India</option>
                        <option value="section2">Section 2</option>
                        <option value="section3">Section 3</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="contact_content country-detail" data-aos="fade-up">
                    <div class="content-section" id="sideContent">
                        <h3 id="galleryTitle">Select a country to customize your tour.</h3>
                        <div id="section1" class="section" style="display: none;">
                            <h2 class="text-white">India</h2>
                            <div class="gallery-container">
                                <div class="gallery-item" data-index="1">
                                    <img src="https://images.unsplash.com/photo-1727840732819-bf9116432beb?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                </div>
                                <div class="gallery-item" data-index="2">
                                    <img src="https://images.pexels.com/photos/5969/wood-nature-forest-bridge.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
                                </div>
                                <div class="gallery-item" data-index="3">
                                    <img src="https://images.pexels.com/photos/531321/pexels-photo-531321.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
                                </div>
                                <div class="gallery-item" data-index="4">
                                    <img src="https://images.pexels.com/photos/373920/pexels-photo-373920.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                                </div>
                                <div class="gallery-item" data-index="5">
                                    <img src="https://images.pexels.com/photos/164241/pexels-photo-164241.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                                </div>
                                <div class="gallery-item" data-index="6">
                                    <img src="https://images.pexels.com/photos/417054/pexels-photo-417054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                </div>
                                <div class="gallery-item" data-index="7">
                                    <img src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                </div>
                                <div class="gallery-item" data-index="8">
                                    <img src="https://images.pexels.com/photos/38326/pexels-photo-38326.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                </div>
                                <div class="gallery-item" data-index="9">
                                    <img src="https://images.pexels.com/photos/266691/pexels-photo-266691.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                </div>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="mt-4 btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">
                                Enquire Here
                            </button>

                        </div>

                        <div id="section2" class="section" style="display: none;">
                            <h2>Content for Section 2</h2>
                            <p>This is the content for the second section.</p>
                        </div>

                        <div id="section3" class="section" style="display: none;">
                            <h2>Content for Section 3</h2>
                            <p>This is the content for the third section.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Custom Tour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact_content custom-tour-form" data-aos="fade-up">
                        <h2>Fill the form</h2>
                        <h6>We will contact you shortly...</h6>
                        <form id="contactpage" method="post" action="{{ route('enquiry.store') }}" class="position-relative">
                            @csrf <!-- Add CSRF token for security -->
                            <input type="hidden" name="type" value="tour">
                            <input type="hidden" name="tour_name" value="{{$tour->name}}">
                            <div class="form-group form-input input1 float-left">
                                <input type="text" class="form_style" placeholder="Name" name="fname" id="fname" value="{{ old('fname') }}" required>
                            </div>
                            <div class="form-group form-input float-left">
                                <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="form-group form-input input1 float-left">
                                <input type="email" class="form_style" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group form-input float-left">
                                <select class="form_style" placeholder="Type of meal" name="meal" id="meal" value="{{ old('person') }}" required>
                                    <option value="" selected disabled>Category</option>
                                    <option value="veg">Domestic</option>
                                    <option value="non-veg">International</option>
                                </select>
                            </div>
                            <div class="form-group form-input input1 float-left">
                                <select class="form_style" placeholder="Type of meal" name="meal" id="meal" value="{{ old('person') }}" required>
                                    <option value="" selected disabled>Month</option>
                                    <option value="jan">January</option>
                                    <option value="frb">February</option>
                                </select>
                            </div>
                            <div class="form-group form-input float-left">
                                <input type="number" min="1" max="20" class="form_style" placeholder="Total days" name="totaldays" id="totaldays" value="{{ old('person') }}" required>
                            </div>
                            {{--<div class="form-group form-input float-left">
                                <input type="date" class="form_style" name="date" id="deptdate" placeholder="dd/mm/yyyy" required>
                            </div>--}}
                            <div class="form-group form-input input1 float-left">
                                <input type="number" min="1" class="form_style" placeholder="No. of adults" name="adultperson" id="adultperson" value="{{ old('person') }}" required>
                            </div>
                            <div class="form-group form-input float-left">
                                <input type="number" min="1" class="form_style" placeholder="No. of child" name="childperson" id="childperson" value="{{ old('person') }}" required>
                            </div>
                            <div class="form-group form-input float-left">
                                <select class="form_style" placeholder="Type of meal" name="meal" id="meal" value="{{ old('person') }}" required>
                                    <option value="" selected disabled>Type of meal</option>
                                    <option value="veg">Veg</option>
                                    <option value="non-veg">Non-Veg</option>
                                </select>
                            </div>
                            <div class="form-group form-textarea message">
                                <textarea class="form_style" placeholder="Message" rows="3" name="msg" id="msg">{{ old('msg') }}</textarea>
                            </div>
                            <button type="submit" id="submit" class="submit_now text-decoration-none">Submit</button>

                            <a id="whatsappLink" href="#" target="_blank"
                                style="background-color: #2DC100; text-decoration: none; padding: 10px 20px;
                    border-radius: 5px; display: inline-flex; align-items: center; display: none;">
                                <i class="fa fa-fw fa-whatsapp" style="color: #fff; font-size: 24px; margin-right: 10px;"></i>
                                <span style="color: #fff; font-size: 16px;">Contact Us On WhatsApp</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function updateSection() {
        var selectedValue = document.getElementById("myDropdown").value;

        // Hide all sections
        var sections = document.getElementsByClassName("section");
        for (var i = 0; i < sections.length; i++) {
            sections[i].style.display = "none";
        }

        // Show the selected section
        document.getElementById(selectedValue).style.display = "block";
    }

    const galleryItem = document.getElementsByClassName("gallery-item");
    const lightBoxContainer = document.createElement("div");
    const lightBoxContent = document.createElement("div");
    const lightBoxImg = document.createElement("img");
    const lightBoxPrev = document.createElement("div");
    const lightBoxNext = document.createElement("div");

    lightBoxContainer.classList.add("lightbox");
    lightBoxContent.classList.add("lightbox-content");
    lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
    lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

    lightBoxContainer.appendChild(lightBoxContent);
    lightBoxContent.appendChild(lightBoxImg);
    lightBoxContent.appendChild(lightBoxPrev);
    lightBoxContent.appendChild(lightBoxNext);

    document.body.appendChild(lightBoxContainer);

    let index = 1;

    function showLightBox(n) {
        if (n > galleryItem.length) {
            index = 1;
        } else if (n < 1) {
            index = galleryItem.length;
        }
        let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
        lightBoxImg.setAttribute("src", imageLocation);
    }

    function currentImage() {
        lightBoxContainer.style.display = "block";

        let imageIndex = parseInt(this.getAttribute("data-index"));
        showLightBox(index = imageIndex);
    }
    for (let i = 0; i < galleryItem.length; i++) {
        galleryItem[i].addEventListener("click", currentImage);
    }

    function slideImage(n) {
        showLightBox(index += n);
    }

    function prevImage() {
        slideImage(-1);
    }

    function nextImage() {
        slideImage(1);
    }
    lightBoxPrev.addEventListener("click", prevImage);
    lightBoxNext.addEventListener("click", nextImage);

    function closeLightBox() {
        if (this === event.target) {
            lightBoxContainer.style.display = "none";
        }
    }
    lightBoxContainer.addEventListener("click", closeLightBox);
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





<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>


@endsection