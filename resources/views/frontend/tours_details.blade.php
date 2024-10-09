@extends('frontend.layouts.layout')

@section('banner')
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="sub_banner_content" data-aos="fade-up">
                    <h1 class="text-white">{{$tour->name}}</h1>
                    <p class="text-white text-size-16"><i class="fa-solid fa-calendar-days"></i> {{$tour->duration}} <span>|</span> <i class="fa-solid fa-user"></i> {{$tour->parson_no}}</p>
                    <p class="text-white text-size-16"></p>
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

<!-- About -->
<section class="aboutpage-con position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-up">
                    <h6>Tour Details -</h6>

                    {!! $tour->dec !!}

                    <hr>
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
                            <input type="number" min="1" max="10" class="form_style" placeholder="No. of person" name="person" id="person" required>
                        </div>
                        <div class="form-group message">
                            <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" id="submit" class="submit_now text-decoration-none">Submit</button>
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