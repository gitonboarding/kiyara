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
                    <form id="contactpage" method="post" action="{{ route('enquiry.store') }}" class="position-relative">
                        @csrf <!-- Add CSRF token for security -->
                        <input type="hidden" name="type" value="tour">
                        <input type="hidden" name="tour_name" value="{{$tour->name}}">
                        <div class="form-group input1 float-left">
                            <input type="text" class="form_style" placeholder="Name" name="fname" id="fname" value="{{ old('fname') }}" required>
                        </div>
                        <div class="form-group float-left">
                            <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone" value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group input1 float-left">
                            <input type="email" class="form_style" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group float-left">
                            <input type="text" class="form_style" name="date" id="deptdate" placeholder="dd/mm/yyyy" required>
                        </div>
                        <div class="form-group input1 float-left">
                            <input type="number" min="1" class="form_style" placeholder="No. of adults" name="adultperson" id="adultperson" value="{{ old('person') }}" required>
                        </div>
                        <div class="form-group float-left">
                            <input type="number" min="1" class="form_style" placeholder="No. of child" name="childperson" id="childperson" value="{{ old('person') }}" required>
                        </div>
                        <div class="form-group input1 float-left">
                            <select class="form_style" placeholder="Type of meal" name="meal" id="meal" value="{{ old('person') }}" required>
                                <option value="" selected disabled>Type of meal</option>
                                <option value="veg">Veg</option>
                                <option value="non-veg">Non-Veg</option>
                            </select>
                        </div>
                        <div class="form-group float-left">
                            <input type="number" min="1" class="form_style" placeholder="No. of child" name="childperson" id="childperson" value="{{ old('person') }}" required>
                        </div>
                        <div class="form-group message">
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

                <script>
                    document.getElementById('contactpage').addEventListener('submit', function(e) {
                        e.preventDefault(); // Prevent form submission to get WhatsApp link

                        // Get input values
                        var name = document.getElementById('fname').value;
                        var phone = document.getElementById('phone').value;
                        var email = document.getElementById('email').value;
                        var persons = document.getElementById('person').value;
                        var message = document.getElementById('msg').value;
                        var tourName = "{{ $tour->name }}"; // Get the tour name from Blade variable

                        // WhatsApp number
                        var whatsappNumber = '+918698467755';

                        // Construct the message
                        var whatsappMessage = `Hi, my name is ${name}. I would like to inquire about the tour: ${tourName}. Here are my details:\n` +
                            `Phone: ${phone}\n` +
                            `Email: ${email}\n` +
                            `Number of persons: ${persons}\n` +
                            `Message: ${message}`;

                        // Encode the message for URL
                        var encodedMessage = encodeURIComponent(whatsappMessage);

                        // Determine user agent
                        var userAgent = navigator.userAgent.toLowerCase();
                        var isMobile = /android|iphone|ipad/.test(userAgent);

                        // Construct the WhatsApp link
                        var whatsappLink;
                        if (isMobile) {
                            // For mobile
                            whatsappLink = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedMessage}`;
                        } else {
                            // For desktop
                            whatsappLink = `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedMessage}`;
                        }

                        // Update the WhatsApp link and show the button
                        var linkElement = document.getElementById('whatsappLink');
                        linkElement.href = whatsappLink;
                        linkElement.style.display = 'inline-flex'; // Show the link
                    });
                </script>



            </div>
        </div>
    </div>
    <figure class="activity-bottomimage mb-0">
        <img src="{{ asset('frontend/assets/images/activity-bottomimage.png')}}" alt="image" class="img-fluid">
    </figure>
</section>
<script>

</script>
@endsection