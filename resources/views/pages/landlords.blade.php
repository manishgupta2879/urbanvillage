@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link rel="stylesheet" href="{{ asset('css//newhome.css') }}">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->

<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/landlords.jpg') }}" alt="banner" />
</header>-->
<style>
    .custom-btn {
        background-color: #AFB700;
        /* Use the color from the image */
        color: white;
        /* Text color */
        padding: 10px 18px;
        /* Adjust padding to match the look */
        border-radius: 25px;
        /* Rounded corners */
        border: none;
        /* Remove any border */
        font-weight: bold;
        /* Bold text */
        text-align: center;
        /* Center text */
        display: inline-block;
        /* Ensure it behaves like a button */
        text-decoration: none;
        /* Remove underline from link */
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
        width: 255px;
        font-size: 20px;
    }

    .custom-btn:hover {
        background-color: #afb700c7;
        /* Slightly darker shade on hover */
        color: #fff;
    }

    .button-container {
        /* New class to center the button */
        text-align: center;
        /* Center align text within the container */

    }

    .letting-section {
        display: flex;
        /* Flexbox for layout */
        justify-content: space-between;
        /* Space between text and image */
        align-items: center;
        /* Align items vertically in the center */
        background-color: white;
        /* Background color for the section */
        border-radius: 10px;
        /* Rounded corners */
        padding: 20px;
        /* Padding inside the section */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow for slight elevation */
        margin: 20px 0;
        /* Margin for spacing above and below */
    }

    .letting-content h2 {
        color: #A22D6C;
        /* Heading color */
        font-size: 24px;
        /* Font size for the heading */
        margin-bottom: 15px;
        /* Margin below the heading */
    }

    .letting-content p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for readability */
        color: #333;
        /* Text color */
        margin-bottom: 15px;
        /* Margin below paragraphs */
    }

    .letting-button-container {
        text-align: center;
        /* Center align button horizontally */
        margin-top: 20px;
        /* Margin above button */
    }

    .letting-btn {
        background-color: #e11959;
        /* Button background color */
        color: white;
        /* Button text color */
        padding: 10px 20px;
        /* Button padding */
        border-radius: 25px;
        /* Rounded button corners */
        border: none;
        /* Remove button border */
        font-weight: bold;
        /* Bold text */
        text-align: center;
        /* Center text in button */
        text-decoration: none;
        /* Remove underline */
        display: inline-block;
        /* Make it behave like a button */
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
    }

    .letting-btn:hover {
        background-color: #d41653;
        /* Darker shade on hover */
    }

    .letting-image {
        max-width: 45%;
        /* Maximum width for image */
        margin-left: 20px;
        /* Margin between image and text */
    }

    .letting-image img {
        width: 100%;
        /* Full width image */
        border-radius: 10px;
        /* Rounded corners for image */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow for image */
    }

    .support-section {
        text-align: center;
        /* Center align the text */
        margin: 20px 0;
        /* Margin for spacing above and below */
    }

    .support-section h2 {
        color: #992785;
        /* Heading color */
        font-size: 35px;
        /* Font size for the heading */
        margin-bottom: 10px;
        font-weight: 400 !important;
        /* Margin below the heading */
    }

    .support-section p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for readability */
        color: #333;
        /* Text color */
        margin-bottom: 20px;
        /* Margin below paragraphs */
        /* max-width: 600px; */
        /* Max width for paragraphs */
        margin-left: auto;
        /* Centering */
        margin-right: auto;
        /* Centering */
    }

    .service-box {
        border: 2px solid #E00069;
        /* Border color */
        border-radius: 20px;
        /* Rounded corners */
        padding: 44px 38px;
        /* Padding inside the box */
        margin: 58px auto;
        /* Margin around the box */
        /* max-width: 800px; */
        /* Max width for service boxes */
        text-align: left;
        /* Align text to the left */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow for slight elevation */
    }

    .service-two {
        border: 2px solid #992785;
        /* Border color */
        border-radius: 20px;
        /* Rounded corners */
        padding: 44px 38px;
        /* Padding inside the box */
        margin: 44px auto;
        /* Margin around the box */
        /* max-width: 800px; */
        /* Max width for service boxes */
        text-align: left;
        /* Align text to the left */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow for slight elevation */
    }

    .service-box h3 {
        color: #E00069;
        /* Subheading color */
        font: 35px DM Serif Display;
        font-weight: 400;
        /* Font size for subheadings */
        margin-bottom: 15px;
        /* Margin below the subheading */
    }

    .service-two h3 {
        color: #992785 !important;
        /* Subheading color */
        font: 35px DM Serif Display;
        font-weight: 400;
        /* Font size for subheadings */
        margin-bottom: 15px;
        /* Margin below the subheading */
    }


    .service-box p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for readability */
        color: #333;
        /* Text color */
        margin-bottom: 15px;
        /* Margin below paragraphs */
    }

    .service-box strong {
        font-weight: bold;
        /* Bold text for emphasis */
    }

    .service-buttons {
        margin-top: 20px;
        /* Margin above the buttons */
    }

    .service-btn {
        background-color: #E00069;
        /* Button background color */
        color: white;
        /* Button text color */
        padding: 10px 20px;
        /* Button padding */
        border-radius: 25px;
        /* Rounded button corners */
        border: none;
        /* Remove button border */
        font-weight: bold;
        /* Bold text */
        text-align: center;
        /* Center text in button */
        text-decoration: none;
        /* Remove underline */
        display: inline-block;
        /* Make it behave like a button */
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
        margin-right: 10px;
        /* Margin right between buttons */
    }

    .service-btn a {
        border-radius: 50% !important;
    }

    .service-two .service-btn {
        background-color: #992785;
    }

    .service-btn:hover {
        background-color: #d41653;
        color: #fff;
    }

    .service-two .service-btn:hover {
        background-color: #992785d4;
        color: #fff;
    }

    .service-btn.whatsapp {
        background-color: #E00069;
        /* WhatsApp green color */
        padding: 8px;
        /* Padding for WhatsApp button */
    }

    .service-btn.whatsapp:hover {
        background-color: #d41653;
        color: #fff;
    }

    .service-two .service-btn.whatsapp {
        background-color: #992785;
        /* WhatsApp green color */
        padding: 8px;
        /* Padding for WhatsApp button */
    }

    .service-two .service-btn.whatsapp:hover {
        background-color: #992785d4;
        color: #fff;
    }

    .service-btn.whatsapp img {
        height: 28px !important;
        /* Font size for WhatsApp icon */
        color: white;
        /* Icon color */
    }
    .card-carousel #customNext{
        position: absolute;
        left: 48%;
        background: transparent;
        border: none;
    }
    button:focus {
    outline: none !important;
    outline: none !important;
}
    .card-carousel #customNext img{
        height: 54px !important;
    }
</style>
<!-- <div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tenants</li>
    </ol>
</div> -->
<div class="container-fluid">
<div class="page-title-div">Letting with us</div>
<div class="page-subtitle-div pt-lg-3"> Looking for good tenants? Discover why so many landlords choose to let with us. </div>
</div>


<div class="intro" style="padding-bottom: 42px !important;">
    <div class="section">
        <div class="row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="intro_content">
                    <div class="button-container mt-4 mt-lg-0 pt-lg-5"> <!-- Wrapper to center the button -->
                        <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn custom-btn">
                            <b>Book a Free Valuation</b>
                        </a>
                    </div>
                </div>
            </div>

            <!-- card-carousel -->
            <div class="container-fluid card-carousel mt-5">
                <div class="row">
                    <h2 class="m-auto">Properties we’ve let</h2>
                    <div class="col-md-12 mt-3">
                        <div id="news-slider" class="owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item cloned">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="{{ asset('images/kitchen.jpg') }}" alt="">
                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-description mb-0">
                                                    <span class="post-date">Road name, SE5</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="customNav">
                                <!-- <button id="customPrev">Previous</button> -->
                                <button id="customNext"><img src="{{ asset('images/icons/green-chevron.png') }}"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Urvan-villages -->
            <div class="container Why-sell-section Why-sell">
                <div class="selling-section row">
                    <div class="selling-content letting-content col-12 col-lg-8">
                        <h2>Why let with Urban Village?</h2>
                        <p>We're not your typical run-of-the-mill estate agency. As a genuinely independent, local agency, you can rest assured that your property is highly valued and looked after.</p>
                        <p>We make an effort to get to know our landlords personally, as well as their properties, so we can provide a bespoke service tailored to you as an individual, not just as an addition to our portfolio. Essentially, we are a real estate agency run by real people that you can contact whenever you need to.</p>
                        <p>With our extensive knowledge of the local rental market, unparalleled lettings experience and regularly updated database of suitable tenants, we can help you find the ideal match, making sensible and fast decisions on your behalf to best protect your property and tenancy.</p>
                        <div class="selling-button-container">
                            <a href="#" class="selling-btn">Book a valuation</a>
                        </div>
                    </div>
                    <div class="selling-image col-12 col-lg-4 p-0 p-lg-4 ">
                        <img src="{{ asset('images/garden.jpg') }}" alt="Property Image" class="w-100">
                    </div>
                </div>
            </div>

            <!-- staging-consulation -->
            <section class="our-story position-relative letting-experience Village-achieve p-0">
                <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                <div class="container mt-lg-5">
                    <div class="consultation-section">
                        <div class="row">
                            <!-- <div class="col-12 col-lg-6 text-center pt-5 pt-lg-0">
                        <div class="consultation-image">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Urban Village Logo">
                        </div>
                    </div> -->
                            <div class="col-12 col-lg-6  d-flex justify-content-lg-center pt-lg-3">
                                <div class="accommodation home-accommodation">
                                    <video id="myVideo" poster="{{ asset('images/about-us/logo_poster.jpg') }}" width="100%" height="">
                                        <source src="We love estate agency - Estate Agency In London.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="consultation-content">
                                    <h2>A stress-free letting experience</h2>
                                    <p>Choosing to let with Urban Village gives you access to a whole host of benefits and support as you navigate the lettings experience, including:</p>
                                    <ul>
                                        <ul class="d-flex"><img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                            <li> Our 24/7 client care portal, giving you peace of mind and control throughout the tenancy</li>
                                        </ul>
                                        <ul class="d-flex"><img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                            <li> Highly trusted contractor partners</li>
                                        </ul>
                                        <ul class="d-flex"><img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                            <li> Pre-qualification and detailed referencing to find the best tenants </li>
                                        </ul>
                                        <ul class="d-flex"><img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                            <li> A highly experienced, in-house property manager to ensure your property is well looked after</li>
                                        </ul>
                                        <ul class="d-flex"><img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                            <li> Completely transparent, fair fees with no inflated prices on repairs or maintenance </li>
                                        </ul>
                                        <ul class="d-flex"><img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                            <li> Our team visit, in person every six months rather than delegating to a third party, so we genuinely know the property!</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="support-section">
                    <h2>Get the right support for your needs</h2>
                    <p class="my-lg-5">Every landlord has varying levels of letting experience — so we let you take the driving seat in deciding what you need from us. Whether you want all-round property maintenance support, or just want a helping hand in sourcing the right tenants, we have your back.</p>

                    <div class="service-box service-one">
                        <h3>Premium Managed</h3>
                        <p>From the moment your tenants move in, we look after everything — from rental collection to property maintenance.</p>
                        <p>With our fully managed service, landlords get complete peace of mind that their tenants are looked after, their property is kept in good condition, and everything is taken care of, with an experienced property manager on hand and a network of trusted trade people.</p>
                        <p><strong>15% including VAT for our standard 12-month tenancy. No automatic renewal fees charged, which is a unique benefit with Urban Village. We also add free rental warranty and legal protection cover for the first 12 months for rent collection and managed landlords.</strong></p>


                        <div class="service-buttons">
                            <a href="#" class="btn service-btn">BOOK A VALUATION</a>
                            <a href="#" class="btn service-btn whatsapp"> <img src="{{ asset('images/icons/whatsapp.png') }}" alt="whatsapp"></a>
                        </div>
                    </div>

                    <div class="service-box service-two">
                        <h3>Let-Only Service</h3>
                        <p>Our team of letting experts will help you to market your property and find the perfect tenants — once the contracts are signed, you take the reins.</p>
                        <p>You will be in total control of your own property maintenance, rental collection, and tenancy, from start to finish.</p>
                        <p><strong>10% including VAT for our standard 12-month tenancy. No automatic renewal fees charged, which is a unique benefit with Urban Village.</strong></p>
                        <div class="service-buttons">
                            <a href="#" class="btn service-btn">Book a Valuation</a>
                            <a href="#" class="btn service-btn whatsapp"><img src="{{ asset('images/icons/whatsapp.png') }}" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div class="Service-options">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-white">Service options and charges</p>
                        <!-- <i class="fa-solid fa-play"></i> -->
                        <img src="{{ asset('images/icons/white-chevron.png') }}">
                    </div>
                </div>
            </div>

            <!-- We keep tenants and landlords fully informed-video -->
            <div class="reviews-section container-fluid our-community Brilliant landlords mt-5">
                <h2>We keep tenants and landlords fully informed</h2>
                <div class="reviews-container pt-2 pt-lg-4 row d-flex justify-content-center row">
                    <div class="col-6" style="display: contents;">
                        <iframe width="100%" height="591" class=" set-phone-height" src="https://player.vimeo.com/video/328369211" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>

                </div>
            </div>

            <section class="our-story position-relative mt-5 valuation">
                <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                <div class="container">
                    <h2 class="pt-0">Get a free property valuation</h2>
                    <div class="body-component">
                        <p>
                            The London property market is hugely competitive, which means getting your pricing right and pitching to the right audience is key. Aim too high with your asking price, and your property can go stale by sitting too long on the portals. Aim too low, and you could talk yourself out of a considerable profit.
                        </p>
                        <p>
                            Pricing your property is a balancing act, which is why getting an accurate, up-to-date, and research-based valuation is critical.
                        </p>
                        <p>
                            Get in touch with our team to book your free valuation today.
                        </p>
                        <div class="button-container mt-4"> <!-- Wrapper to center the button -->
                            <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn custom-btn">
                                <b>Book Now</b>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Thank you for choosing Urban Village -->
            <div class="reviews-section container-fluid our-community Brilliant landlords mt-5">
                <h2>Thank you for choosing Urban Village</h2>
                <div class="reviews-container pt-2 pt-lg-4 row d-flex justify-content-center row">
                    <div class="col-6" style="display: contents;">
                        <iframe width="100%" height="591" class=" set-phone-height" src="https://player.vimeo.com/video/328369211" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>

                </div>
            </div>

            <div class="property-market-section container">
                <h2>What's happening in the property market?</h2>
                <div class="property-market-container pt-4">
                    @foreach($posts AS $k => $post)


                        <div class="property-card">
                            <!-- <img src="path_to_image1.png" alt="7 ways to maximise your outdoor space"> -->
                            <img src="{{ Storage::url($post->image) }}" alt="Suzanne Vincent" class="profile-image">
                            <div class="property-card-content">
                                <span class="category">{{ $post->category->name }} <span class="read-time">| 5 MINS READ</span></span>
                                <h3>{{$post->title }}</h3>
                                <br>
                                <div class="author">
                                    {{-- <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                                    <span>Suzanne Vincent</span> --}}
                                    <a href="{{ url('blog/view/'.$post->slug) }}" class="read-more">Read more...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- carousel -->
            <div class="hot logo-spinner" style="margin-bottom:-42px;">
                <div class="container">
                    <div class="carousel-wrap">
                        <div class="owl-carousel" id="about-us-carousel">
                            <div class="item"><a href="https://safeagents.co.uk/" target="_blank"><img src="{{ asset('images/logo/safeagent_Logo_RGB.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.guildproperty.co.uk" target="_blank"><img src="{{ asset('images/logo/guildproperty.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.hometrack.com/uk" target="_blank"><img src="{{ asset('images/logo/hometrack.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.primelocation.com" target="_blank"><img src="{{ asset('images/logo/primelocation.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.rightmove.co.uk/" target="_blank"><img src="{{ asset('images/logo/rightmove.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.urbanvillagehomes.com/" target="_blank"><img src="{{ asset('images/logo/urbanvillagehomes.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/tenant.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/national_approved.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/zoopla-colour.png') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="https://www.zoopla.co.uk/" target="_blank"><img src="{{ asset('images/logo/jupix.png') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.zoopla.co.uk/" target="_blank"><img src="{{ asset('images/logo/tpos.jpg') }}" class="img-responsive"></a></div>
                        </div>
                    </div>
                    <div class="custom-nav d-none d-lg-block">
                        <span class="custom-prev d-none d-md-block">
                            <!-- <i class="fa-solid fa-chevron-left"></i> -->
                            <img src="{{ asset('images/icons/left-chevron.png') }}">
                            <div data-v-90132dd2="" class="ruk-icon-arrow-left-thin-1-01"></div>
                        </span>
                        <span class="custom-next d-none d-md-block">
                            <!-- <i class="fa-solid fa-chevron-right"></i> -->
                            <img src="{{ asset('images/icons/right-chevron.png') }}">
                            <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div>
                        </span>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // var owl = $('#news-slider').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     nav: false,
        //     autoplay: true,
        //     autoplayHoverPause: true,
        //     rewind: true,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 2
        //         },
        //         1000: {
        //             items: 3
        //         }
        //     }
        // });

        var owl = $('#news-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 5
            }
        }
    });

        // Custom Next Button
        $('#customNext').click(function() {
            owl.trigger('next.owl.carousel');
        });

        // Custom Previous Button
        $('#customPrev').click(function() {
            owl.trigger('prev.owl.carousel');
        });
    });
</script>

@include('includes.footer')
