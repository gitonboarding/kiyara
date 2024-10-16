@extends('frontend.layouts.layout')

@section('contents')

@section('banner')
<!-- Sub banner -->
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="sub_banner_content aos-init aos-animate" data-aos="fade-up">
                    <h1 class="text-white">Contact Us</h1>
                    <p class="text-white text-size-16">Kuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore noulla pariatur ccaecat curidatat aero.</p>
                    <div class="box">
                        <a href="{{'/'}}" class="text-decoration-none">
                            <span class="mb-0">Home</span>
                        </a>
                        <i class="arrow fa-solid fa-arrow-right"></i>
                        <span class="mb-0 box_span">Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


<section class="contactinfo-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contactinfo_content text-center" data-aos="fade-up">
                    <h6>Contact Info</h6>
                    <h2>Our Contact Information</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box">
                    <figure class="icon icon1">
                        <img src="{{ asset('frontend/assets/images/contact-icon1.png')}}" alt="image" class="img-fluid">
                    </figure>
                    <h4>Our Location</h4>
                    <a href="https://maps.app.goo.gl/HsfBdVKoQpKibNbn6" class="text-decoration-none text-size-16 mb-0">No.67 Aircondition Market Tardeo, AC Market Tardeo, Mumbai - 400034</a>
                </div>
            </div>
            <div class=" col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="contact-box">
                            <figure class="icon">
                                <img src="{{ asset('frontend/assets/images/contact-icon2.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h4>Phone Number</h4>
                            <a href="tel:+919867692948" class="mb-0 text-decoration-none text-size-16">+91 9867692948</a><br>
                            <a href="tel:+919892132429" class="text-decoration-none text-size-16 mb-0">+91 9892132429</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="contact-box mb-0">
                        <figure class="icon">
                            <img src="{{ asset('frontend/assets/images/contact-icon3.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h4>Our Email</h4>
                        <a href="mailto:kiyaraglobaltravels@kiyara.net" class="mb-0 text-decoration-none text-size-16">kiyaraglobaltravels@kiyara.net</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Contact Form -->
<section class="contactform-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_wrapper position-relative" data-aos="zoom-in">
                    <figure class="contact-leftbackground mb-0">
                        <img src="{{ asset('frontend/assets/images/contact-leftbackground.jpg')}}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_content" data-aos="fade-up">
                    <h6 class="text-white">Get In Touch</h6>
                    <h2 class="text-white">Send us a Message</h2>

                    <!-- Display success message -->
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('tours.contact') }}" method="post" class="position-relative">
                        @csrf
                        <input type="hidden" name="type" value="contact">
                        <!-- Name Field -->
                        <div class="form-group input1 float-left">
                            <input type="text" class="form_style" placeholder="Name" name="fname" id="fname" value="{{ old('fname') }}" required>
                            @error('fname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group float-left">
                            <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="form-group input1 float-left">
                            <input type="email" class="form_style" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Subject Field -->
                        <div class="form-group float-left">
                            <input type="text" class="form_style" placeholder="Subject" name="subject" id="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div class="form-group message">
                            <textarea class="form_style" placeholder="Message" rows="3" name="msg" required>{{ old('msg') }}</textarea>
                            @error('msg')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" id="submit" class="submit_now text-decoration-none">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <figure class="contact-bottomimage mb-0">
        <img src="{{ asset('frontend/assets/images/contact-bottomimage.png')}}" alt="image" class="img-fluid">
    </figure>
</section>
<!-- Map -->
<div class="map-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.0596626158!2d72.8095044850535!3d18.972972309346154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cff1d482220d%3A0xb32bb5304836be9a!2sAC%20Market%20Tardeo%20Mumbai%20400034!5e0!3m2!1sen!2sin!4v1728460588733!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>


@endsection