@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link rel="stylesheet" href="{{ asset('css//newhome.css') }}">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/buyers.jpg') }}" alt="banner" />
</header>-->
<style>
    body {
        margin: 0;
        font-family: Outfit;
        background-color: #fff;
    }

    h1,
    h2,
    h3 {
        font-family: "DM Serif Display", serif;
    }

    p {
        font-family: Outfit;
    }

    .custom-btn {
        background-color: #E00069 !important;
        /* Use the color from the image */
        color: white;
        /* Text color */
        padding: 10px 18px;
        /* Adjust padding to match the look */
        border-radius: 30px;
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
        background-color: #d41653 !important;
        color: #fff;
        /* Slightly darker shade on hover */
    }

    .button-container {
        /* New class to center the button */
        text-align: center;
        /* Center align text within the container */
        /* margin-top: 20px; */
        /* Optional: Add some space above the button */
    }

    .selling-section {
        display: flex;
        /* Flexbox for layout */
        justify-content: space-between;
        /* Space between the two sections */
        align-items: center;
        /* Align items vertically in the center */
        background-color: white;
        /* Background color for the content */
        border-radius: 10px;
        /* Rounded corners */
        padding: 20px;
        /* Padding inside the container */
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  */
        margin: 20px 0;
        /* Margin for spacing above and below */
    }



    .selling-content h2 {
        color: #A22D6C;
        /* Heading color */
        font-size: 24px;
        /* Font size for heading */
        margin-bottom: 15px;
        /* Margin below heading */
    }

    .selling-content p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for better readability */
        color: #333;
        /* Text color */
        margin-bottom: 15px;
        /* Margin below each paragraph */
    }

    .selling-button-container {
        text-align: start;
        /* Center the button horizontally */
        margin-top: 20px;
        /* Margin above the button */
    }

    .selling-btn {
        background-color: #949c0c;
        /* Button color */
        color: white;
        /* Text color */
        padding: 10px 20px;
        /* Button padding */
        border-radius: 25px;
        /* Rounded corners */
        border: none;
        /* No border */
        font-weight: bold;
        /* Bold text */
        text-align: center;
        /* Center text */
        text-decoration: none;
        /* Remove underline */
        display: inline-block;
        /* Make it behave like a button */
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
    }

    .selling-btn:hover {
        background-color: #d41653;
        /* Slightly darker shade on hover */
    }

    .selling-image {
        /* max-width: 45%;  */
        /* margin-left: */
    }

    .property-section {
        display: flex;
        /* Flexbox for layout */
        justify-content: space-between;
        /* Space between image and content */
        align-items: center;
        /* Align items vertically in the center */
        background-color: white;
        /* Background color for the section */
        border-radius: 10px;
        /* Rounded corners */
        /* padding: 20px; */
        /* Padding inside the container */
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        /* Box shadow for slight elevation */
        margin: 20px 0;
        /* Margin for spacing above and below */
    }


    .property-image img {
        width: 100%;
        /* Full width image */
        border-radius: 10px;
        /* Rounded corners for the image */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow for image */
    }

    .property-content {
        /* max-width: 45%; */
        /* Maximum width for the text content */
    }

    .property-content h2 {
        color: #A22D6C;
        /* Heading color */
        font-size: 32px !important;
        /* Font size for heading */
        margin-bottom: 15px;
        /* Margin below heading */
    }

    .property-content p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for better readability */
        color: #333;
        /* Text color */
        margin-bottom: 15px;
        /* Margin below each paragraph */
    }

    .consultation-section {
        display: flex;
        /* Flexbox for layout */
        justify-content: space-between;
        /* Space between text and image */
        align-items: center;
        /* Center align items vertically */
        background-color: white;
        /* White background */
        border-radius: 10px;
        /* Rounded corners */
        padding: 38px 30px 42px 30px;
        /* Padding inside the section */
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        /* Box shadow for slight elevation */
        border: 1px solid #C6BEC4;
        margin: 20px 0;
        /* Margin for spacing above and below */
    }


    .consultation-content h2 {
        color: #A22D6C;
        /* Heading color */
        font-size: 24px;
        /* Font size for the heading */
        margin-bottom: 15px;
        /* Margin below the heading */
    }

    .consultation-content p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for readability */
        color: #000;
        /* Text color */
        margin-bottom: 15px;
        /* Margin below paragraphs */
    }

    .consultation-content ul {
        list-style-type: none;
        /* Remove default list style */
        padding-left: 0;
        /* Remove left padding */
        margin-bottom: 20px;
        /* Margin below the list */
    }

    .consultation-content ul li {
        font-size: 16px;
        /* Font size for list items */
        line-height: 1.5;
        /* Line height for list items */
        color: #000;
        /* Text color */
        margin-bottom: 10px;
        /* Margin between list items */
        padding-left: 8px;
        /* Padding to align text */
        position: relative;
        font-weight: 300;
        /* Positioning for icon */
    }



    .consultation-button-container {
        text-align: start;
        /* Center align button horizontally */
        margin-top: 35px;
        /* Margin above button */
    }

    .consultation-btn {
        background-color: #AFB700;
        /* Button background color */
        color: white;
        /* Button text color */
        padding: 10px 20px;
        /* Button padding */
        border-radius: 25px
    }

    .consultation-btn:hover {
        background-color: #afb700c7;
        color: #fff;
    }

    .card-carousel #customNext {
        position: absolute;
        left: 48%;
        background: transparent;
        border: none;
    }

    button:focus {
        outline: none !important;
        outline: none !important;
    }

    .card-carousel #customNext img {
        height: 54px !important;
    }
</style>

<!-- <div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sellers</li>
    </ol>
</div> -->

<!-- Intro -->
<div class="page-title-div"> Selling your property with Urban Village </div>
<div class="page-subtitle-div pt-lg-3"> Discover why others choose to partner with us </div>

<div class="intro" style="padding-bottom: 30px !important;">
    <div class="section">
        <div class="row-eq-height move_up_top">

            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="intro_content">
                    <div class="button-container pt-lg-5"> <!-- Wrapper to center the button -->
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
                                    <div class="owl-item cloned" >
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
                                    <div class="owl-item cloned" >
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
                                    <div class="owl-item cloned" >
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
                                    <div class="owl-item active" >
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
                                    <div class="owl-item active" >
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
                                    <div class="owl-item active" >
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
                                    <div class="owl-item" >
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
                                    <div class="owl-item" >
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
                                    <div class="owl-item" >
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
                                    <div class="owl-item cloned" >
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
                                    <div class="owl-item cloned" >
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
                                    <div class="owl-item cloned" >
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


            <div class="container Why-sell-section">
                <div class="selling-section row">
                    <div class="selling-content col-12 col-lg-6">
                        <h2>Why sell with us?</h2>
                        <p>Making the decision to sell your property can often be stressful – especially when you have to navigate the London property market. But what if it didn’t have to be?</p>
                        <p>Our fresh, forward-thinking, customer-focused approach to property sales, paired with our vast amount of local and market knowledge, has helped us to achieve record prices in our core area, and an impressively low sale fall-through rate.</p>
                        <p>Ready to get your property on the market?</p>
                        <div class="selling-button-container">
                            <a href="#" class="selling-btn">Book a valuation</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-0 px-lg-4 ">
                        <div class="selling-image">
                            <img src="{{ asset('images/kitchen.jpg') }}" alt="Kitchen Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid mt-5"> -->
            <section class="our-story position-relative Village-achieve mt-lg-5">
                <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                <div class="container">
                    <h2 class="pt-0">Why Urban Village achieve the best results</h2>
                    <div class="body-component">
                        <p>
                            <b>We are dedicated to ensuring that the sale of your home is simple, profitable and as timely as possible, so that you secure a far better result. We thrive on repeat business and customer recommendations, so we really do the best we can for our customers.
                        </p>

                    </div>
                </div>
            </section>

            <div class="container mt-lg-4">
                <div class="property-section row">
                    <div class="col-12 col-lg-6 p-0 p-lg-4">
                        <div class="property-image">
                            <img src="{{ asset('images/bicycle.jpg') }}" alt="Urban Village Bicycle Image">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-0">
                        <div class="property-content">
                            <h2>Sell your property the right way</h2>
                            <p>Every decision we make is founded on sound research and experience. We pinpoint emerging market trends, identify when the best time is to sell your home, and help you do so in the shortest timeframe for the best price.</p>
                            <p>No two properties are the same – and neither are our clients. Whatever your needs and preferences, we’re committed to actively selling your property, keeping in touch throughout, analysing performance and focusing on activity levels to achieve the best possible results.</p>
                            <p>How? With a wide array of marketing tools that help us deliver the widest possible exposure for your property, paired with the local expertise and dedicated service of our sales team.</p>
                            <p>With your property in our hands, you can rest assured our team is fully committed to getting the best possible result for you.</p>
                        </div>
                    </div>
                </div>
            </div>


            <section class="our-story position-relative mt-lg-5 property-valuation valuation">
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
                            <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn book-now justify-content-center align-items-center">
                                <b>Book Now</b>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container mt-5">
                <div class="consultation-section row">
                    <div class="col-12 col-lg-7">
                        <div class="consultation-content">
                            <h2>Free home staging consultation</h2>
                            <p>Just as important as establishing your asking price is ‘setting the stage’ for your potential buyers. Home staging is all about improving your property’s appeal by making it a welcoming, attractive home that any buyer can see themselves living in.</p>
                            <p>Home staging also offers various benefits to you as the seller:</p>
                            <ul>
                                <ul class="d-flex mb-0">
                                    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                    <li>Organising your home reduces stress</li>
                                </ul>
                                <ul class="d-flex mb-0">
                                    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                    <li>Selling unwanted items make you money</li>
                                </ul>
                                <ul class="d-flex mb-0">
                                    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                    <li>Increases the value of your home</li>
                                </ul>
                                <ul class="d-flex mb-0">
                                    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
                                    <li>Decluttering creates valuable space</li>
                                </ul>
                            </ul>
                            <div class="consultation-button-container">
                                <a href="#" class="consultation-btn">Book your free consultation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 text-center pt-5 pt-lg-0">
                        <div class="consultation-image">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Urban Village Logo">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thank you for choosing Urban Village -->
            <div class="reviews-section container-fluid our-community Brilliant mt-5 choosing-Urban" style="background-color: #C6BEC433;">
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
            <div class="hot logo-spinner" style="margin-bottom:-32px;">
                <div class="container">
                    <div class="carousel-wrap">
                        <div class="owl-carousel" id="about-us-carousel">
                            <div class="item"><a href="https://safeagents.co.uk/" target="_blank"><img src="{{ asset('images/logo/safeagent_Logo_RGB.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.guildproperty.co.uk" target="_blank"><img src="{{ asset('images/logo/guildproperty.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.hometrack.com/uk" target="_blank"><img src="{{ asset('images/logo/hometrack.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.primelocation.com" target="_blank"><img src="{{ asset('images/logo/primelocation.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.rightmove.co.uk/" target="_blank"><img src="{{ asset('images/logo/rightmove.jpg') }}" class="img-responsive"></a></div>
                            <div class="item"><a href="https://www.onthemarket.com/" target="_blank"><img src="{{ asset('images/logo/onthemarket.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="https://www.urbanvillagehomes.com/" target="_blank"><img src="{{ asset('images/logo/urbanvillagehomes.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/tenant.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/national_approved.jpg') }}" class="img-responsive" /></a></div>
                            <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/arla-colour.png') }}" class="img-responsive" /></a></div>
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
        //             items: 1,
        //             nav: false
        //         },
        //         600: {
        //             items: 2,
        //             nav: false
        //         },
        //         1000: {
        //             items: 3,
        //             loop: false
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
