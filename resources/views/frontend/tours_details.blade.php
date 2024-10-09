@extends('frontend.layouts.layout')

@section('banner')
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="sub_banner_content" data-aos="fade-up">
                    <h1 class="text-white">Paris Tour</h1>
                    <p class="text-white text-size-16"><i class="fa-solid fa-calendar-days"></i> 6 Days / 5 Nights <span>|</span> <i class="fa-solid fa-user"></i> 2</p>
                    <p class="text-white text-size-16"></p>
                    <div class="box">
                        <a href="index.html" class="text-decoration-none">
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

<!-- About -->
<section class="aboutpage-con position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-up">
                    <h6>Tour Details -</h6>
                    <h4>Day 1: Location One</h4>
                    <p class="text-size-14 text">
                        Arrive Singapore. Meet, assist and transfer to the hotel. Check-in and relax. Later in the afternoon proceed to explore Garden By The Bay – this is a nature park spanning 101 hectares in the Central Region of Singapore, adjacent to the Marina Reservoir. The park consists of three waterfront gardens: Bay South Garden, East Garden and Bay Central Garden–entrance to Flower Dome and Cloud Forest. Further proceed to visit Marina Bay Sands Sky park (58th Floor Observatory Deck) - In the evening, the SkyPark Observation Deck offers a spectacular view of Spectra, a nightly outdoor light and water show; watch as its dazzling lasers beam overhead and fountain jets appear over the water at the promenade. Evening return to the hotel.
                    </p>
                    <h4>Day 2: Location Two</h4>
                    <p class="text-size-14 text">
                        Arrive Singapore. Meet, assist and transfer to the hotel. Check-in and relax. Later in the afternoon proceed to explore Garden By The Bay – this is a nature park spanning 101 hectares in the Central Region of Singapore, adjacent to the Marina Reservoir. The park consists of three waterfront gardens: Bay South Garden, East Garden and Bay Central Garden–entrance to Flower Dome and Cloud Forest. Further proceed to visit Marina Bay Sands Sky park (58th Floor Observatory Deck) - In the evening, the SkyPark Observation Deck offers a spectacular view of Spectra, a nightly outdoor light and water show; watch as its dazzling lasers beam overhead and fountain jets appear over the water at the promenade. Evening return to the hotel.
                    </p><hr>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Activity -->
<section class="contactform-con activity-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
            <div class="contact_content" data-aos="fade-up">
                    <h6 class="text-white">A Tour That Creates Lasting Memories...</h6>
                    <h2 class="text-white">Enquire Here</h2>
                    <form id="contactpage" method="post" class="position-relative">
                        <div class="form-group input1 float-left">
                            <input type="text" class="form_style" placeholder="Name" name="fname" id="fname" required>
                        </div>
                        <div class="form-group float-left">
                            <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone" required>
                        </div>
                        <div class="form-group input1 float-left">
                            <input type="email" class="form_style" placeholder="Email" name="email" id="email" required>
                        </div>
                        <div class="form-group float-left">
                            <input type="number"  min="1" max="10" class="form_style" placeholder="No. of person" name="person" id="person" required>
                        </div>
                        <div class="form-group message">
                            <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" id="submit" class="submit_now text-decoration-none">Read More<i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <figure class="activity-bottomimage mb-0">
        <img src="{{ asset('frontend/assets/images/activity-bottomimage.png')}}" alt="image" class="img-fluid">
    </figure>
</section>

@endsection