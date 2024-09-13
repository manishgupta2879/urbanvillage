@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/buyers.jpg') }}" alt="banner" />
</header>-->
<style>
    .custom-btn {
        background-color: #e11959; /* Use the color from the image */
        color: white; /* Text color */
        padding: 10px 20px; /* Adjust padding to match the look */
        border-radius: 25px; /* Rounded corners */
        border: none; /* Remove any border */
        font-weight: bold; /* Bold text */
        text-align: center; /* Center text */
        display: inline-block; /* Ensure it behaves like a button */
        text-decoration: none; /* Remove underline from link */
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    .custom-btn:hover {
        background-color: #d41653; /* Slightly darker shade on hover */
    }

    .button-container { /* New class to center the button */
        text-align: center; /* Center align text within the container */
        margin-top: 20px; /* Optional: Add some space above the button */
    }

    .selling-section {
    display: flex; /* Flexbox for layout */
    justify-content: space-between; /* Space between the two sections */
    align-items: center; /* Align items vertically in the center */
    background-color: white; /* Background color for the content */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for slight elevation */
    margin: 20px 0; /* Margin for spacing above and below */
}

.selling-content {
    max-width: 50%; /* Maximum width for the text content */
}

.selling-content h2 {
    color: #A22D6C; /* Heading color */
    font-size: 24px; /* Font size for heading */
    margin-bottom: 15px; /* Margin below heading */
}

.selling-content p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.5; /* Line height for better readability */
    color: #333; /* Text color */
    margin-bottom: 15px; /* Margin below each paragraph */
}

.selling-button-container {
    text-align: center; /* Center the button horizontally */
    margin-top: 20px; /* Margin above the button */
}

.selling-btn {
    background-color: #e11959; /* Button color */
    color: white; /* Text color */
    padding: 10px 20px; /* Button padding */
    border-radius: 25px; /* Rounded corners */
    border: none; /* No border */
    font-weight: bold; /* Bold text */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it behave like a button */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.selling-btn:hover {
    background-color: #d41653; /* Slightly darker shade on hover */
}

.selling-image {
    max-width: 45%; /* Maximum width for the image */
    margin-left: 
}

.property-section {
    display: flex; /* Flexbox for layout */
    justify-content: space-between; /* Space between image and content */
    align-items: center; /* Align items vertically in the center */
    background-color: white; /* Background color for the section */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for slight elevation */
    margin: 20px 0; /* Margin for spacing above and below */
}

.property-image {
    max-width: 50%; /* Maximum width for the image */
    margin-right: 20px; /* Margin right for spacing between image and text */
}

.property-image img {
    width: 100%; /* Full width image */
    border-radius: 10px; /* Rounded corners for the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for image */
}

.property-content {
    max-width: 45%; /* Maximum width for the text content */
}

.property-content h2 {
    color: #A22D6C; /* Heading color */
    font-size: 24px; /* Font size for heading */
    margin-bottom: 15px; /* Margin below heading */
}

.property-content p {
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.5; /* Line height for better readability */
    color: #333; /* Text color */
    margin-bottom: 15px; /* Margin below each paragraph */
}

</style>

<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sellers</li>
    </ol>
</div>

<!-- Intro -->
<div class="page-title-div"> Selling your property with Urban Village </div>
    <div class= "page-subtitle-div"> Discover why others choose to partner with us </div>

<div class="intro" style="padding-bottom: 42px !important;">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            
            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="intro_content">
                    <br/>
                    <div class="button-container"> <!-- Wrapper to center the button -->
                        <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn custom-btn">
                            <b>Book a Free Valuation</b>
                        </a>
                    </div>
                </div>
            </div>
            <div class="selling-section">
                <div class="selling-content">
                    <h2>Why sell with us?</h2>
                    <p>Making the decision to sell your property can often be stressful – especially when you have to navigate the London property market. But what if it didn’t have to be?</p>
                    <p>Our fresh, forward-thinking, customer-focused approach to property sales, paired with our vast amount of local and market knowledge, has helped us to achieve record prices in our core area, and an impressively low sale fall-through rate.</p>
                    <p>Ready to get your property on the market?</p>
                    <div class="selling-button-container">
                        <a href="#" class="selling-btn">Book a valuation</a>
                    </div>
                </div>
                <div class="selling-image">
                    <img src="{{ asset('images/kitchen.jpg') }}" alt="Kitchen Image">
                </div>
            </div>
            <!-- <div class="container-fluid mt-5"> -->
    <section class="our-story position-relative mt-5">
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

    <div class="property-section">
        <div class="property-image">
            <img src="{{ asset('images/bicycle.jpg') }}" alt="Urban Village Bicycle Image">
        </div>
        <div class="property-content">
            <h2>Sell your property the right way</h2>
            <p>Every decision we make is founded on sound research and experience. We pinpoint emerging market trends, identify when the best time is to sell your home, and help you do so in the shortest timeframe for the best price.</p>
            <p>No two properties are the same – and neither are our clients. Whatever your needs and preferences, we’re committed to actively selling your property, keeping in touch throughout, analysing performance and focusing on activity levels to achieve the best possible results.</p>
            <p>How? With a wide array of marketing tools that help us deliver the widest possible exposure for your property, paired with the local expertise and dedicated service of our sales team.</p>
            <p>With your property in our hands, you can rest assured our team is fully committed to getting the best possible result for you.</p>
        </div>
    </div>
    

    <section class="our-story position-relative mt-5">
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
                <div class="button-container"> <!-- Wrapper to center the button -->
                    <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn custom-btn">
                        <b>Book Now</b>
                    </a>
                </div>
            </div>
        </div>
    </section>
            <div class="col-lg-8">
                <div class="section_title_container">
                    <h1 class="main-title"></h1>
                </div>
                <div class="intro_content">
                    <div class="intro_text" style="margin-top: 12px !important;">
                        <p style="line-height: 1.5 !important;">Urban Village is fresh, forward thinking, innovative and flexible. We are ethical, hardworking and focused on getting the best result for you.</p>
                        <p style="line-height: 1.5 !important;">Our success is built on 30 years of experience in estate agency, a team of the best professionals in the industry and a vast amount of local knowledge.</p>
                        <p style="line-height: 1.5 !important;">We are therefore confident that we can offer you an exceptional level of service with the highest value for money.</p>
                        <!--<p class="font-bold">Selling Fee</p>
                        <ul class="list-unstyled">
                            <li><b>1%</b> of the eventual sale price + VAT (1.2%), Minimum fee of £4000.00 plus VAT applies</li>
                            <li>No sale No fee</li>
                        </ul>-->
                    </div>
                </div>
            </div>

            <!-- Intro Content -->
            <div class="col-xl-4 col-md-4">
                <div class="intro_content">
                    <div class="intro_text" style="margin-top: 12px !important;">
                        <img width="100%;" src="{{ asset('images/denmark-hill-london-estate-agents-rentals-leases-landlords.jpg') }}" alt="" />
                    </div>
                    <div class="">
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services move_up_top services-phone">
    <div class="container">
        <div class="row ">
            <!-- Service -->
            <div class="col-xl-6 col-md-12">
                <div class="intro_content intro_content-phone">
                    <h4 style="color:#ff0878">Top 10 steps to success</h4><br/>
                    <ol>
                        <li><i class="fa fa-circle color-green"></i> Well researched price strategy</li>
                        <li><i class="fa fa-circle color-green"></i> Professional photos</li>
                        <li><i class="fa fa-circle color-green"></i> Effective marketing</li>
                        <li><i class="fa fa-circle color-green"></i> Matching your property to the right buyer</li>
                        <li><i class="fa fa-circle color-green"></i> Positive approach on viewings</li>
                        <li><i class="fa fa-circle color-green"></i> Strong selling techniques</li>
                        <li><i class="fa fa-circle color-green"></i> Ensuring the best offers</li>
                        <li><i class="fa fa-circle color-green"></i> Closing the sale with the best possible result for all</li>
                        <li><i class="fa fa-circle color-green"></i> Excellent communication and Problem-Solving</li>
                        <li><i class="fa fa-circle color-green"></i> Putting you our client first.</li>
                    </ol>
                </div>
            </div>

            <!-- Service -->
            <div class="col-xl-6 col-md-12">
                <div class="intro_content">
                    <iframe height="294px" src="https://player.vimeo.com/video/223590744?" width="100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="intro" style="padding-top: 36px !important; padding-bottom: 42px !important;">
    <div class="container">
        <div class="row row-eq-height">
            <!-- Intro Content -->
            <div class="col-lg-8">
                <div class="intro_content">
                    <p>Getting the price right and pitching to the right audience is critical therefore attracting a buyer and achieving a good price in the first few weeks is key to a successful sale.</p>
                    <p>Buyers look for new properties fresh to the market. If your property valuation is over inflated your property can go stale by sitting too long on the portals. Buyers then start to query this, lose confidence and you risk losing a sale.</p>
                    <p>At Urban Village our aim is to pinpoint the best marketing strategy, to maximise results and “strike while the iron is hot”.</p>
                </div>
            </div>
            <!-- Intro Content -->
            <div class="col-lg-4">
                <h4 style="color:#ff0878">Our free valuation is based on:</h4><br/>
                <ol>
                    <li><i class="fa fa-circle color-green"></i> Research </li>
                    <li><i class="fa fa-circle color-green"></i> Accurate pricing</li>
                    <li><i class="fa fa-circle color-green"></i> Comparable price evidence</li>
                    <li><i class="fa fa-circle color-green"></i> Experience</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="map_section container_reset">
            <div class="container">
                <div class="row row-xl-eq-height">

                    <!-- video -->
                    <div class="col-xl-7 order-xl-1 order-2">
                        <img class="img-responsive" src="{{ asset('images/uvh-team.jpg') }}" alt="Urban Village Homes Team"/>
                    </div>

                    <!-- Content -->
                    <div class="col-xl-5 order-xl-2 order-1">
                        <div class="map_section_content" style="padding-top: 52px !important;">
                            <div class="locations_list d-flex flex-column align-items-start justify-content-start">
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    We advertise your property on all major property websites
                                </label>
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    Free photo shoot to promote your property
                                </label>
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    Walk through video viewing
                                </label>
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    Expert sale negotiation
                                </label>
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    Experienced, reassuring sales progression through to completion
                                </label>
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    Exceptional and friendly service
                                </label>
                                <label class="location_contaner">
                                    <input type="radio" name="location_radio">
                                    <span></span>
                                    Committed to achieving the best price
                                </label>
                                <div class="load-more-btn"><a href="#"><i class="fa fa-phone"></i> 020 3519 9121</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@include('includes.footer')
