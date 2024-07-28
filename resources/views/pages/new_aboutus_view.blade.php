@include('includes.header_new')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/blog.jpg') }}" alt="banner" />
</header>-->

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
<!-- <div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
    </ol>
</div> -->
<div class="pt-3 pt-lg-5">
    <h1 class="about-us m-0">About us </h1>
    <div class="industry-experience">Over 32 years of industry expertise</div>
    <div class="d-flex justify-content-center">
        <div class="col-6  d-flex justify-content-center">
            <div class="row  accommodation home-accommodation">
                    <video id="myVideo" poster="{{ asset('images/about-us/logo_poster.jpg') }}" width="100%" height="546">
                    <source src="We love estate agency - Estate Agency In London.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid mt-5"> -->
    <section class="our-story position-relative mt-5">
        <img src="{{ asset('images/about-us/logo.png') }}" alt="">
        <div class="container">
            <h2 class="pt-0">Our story</h2>
            <div class="body-component">
                <p>
                    <b>When Urban Village was first established, one thing was set in stone: we were not going to be your stereotypical estate agents.</b>
                    Your property journey should be an exciting time – not one that is burdened with stress and unnecessary pressures. We built a team that is dedicated to ensuring your property journey is as seamless, hassle-free and successful as possible.
                </p>
                <p>
                    Following more than 20 years of experience in the estate agency world, our founder, Suzanne Vincent, set up her own agency in 2015 in South London, focusing on progressive growth by exceptional performance. Today, we pride ourselves on our bespoke service you can only get from an independently owned business.
                </p>
            </div>
        </div>
    </section>
    <!-- </div> -->
    <div class="container container-group text-center">
        <img src="{{ asset('images/about-us/MaskGroup44.png') }}" class="group-photo"> </img>
    </div>
    <!--  -->
    <section>
        <!-- 1 -->
        <div class="container pt-0">
            <div class="profile-card">
                <img src="{{ asset('images/about-us/MaskGroup14.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                    <h3 class="mb-2">Suzanne Vincent</h3>
                    <p>Suzanne is our very own estate agency guru. She first started in the industry in 1992 by complete accident, following a misunderstanding at a job interview. Little did she know that it would be the catalyst for a lifelong passion! Fast forward 33 years, and she set up her own independent estate agency, Urban Village, in 2015. Today, she’s all about delivering bespoke, trusted experiences for our clients, with fair and transparent fees and dedicated customer service. When she’s not wowing our clients, you’ll likely find her horse riding or walking her dog.</p>
                </div>
            </div>

            <div class="profile-card mt-4">
                <div class=" profile-info order-2 order-lg-1 border-change d-flex flex-column justify-content-center align-items-start">
                    <h3 class="color-change mb-2">Sarah Trevett</h3>
                    <p>Sarah is no newbie when it comes to estate agency. After more than seven years in the industry, she manages our dynamic, forward-thinking team, helping us to deliver personalised experiences for all our clients. She takes genuine pleasure in engaging with customers and guiding them throughout their property journeys. Outside of work, Sarah is a gym fanatic, foodie, and proud owner of our resident cockapoo, Reggie.</p>
                </div>
                <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Sarah Trevett" class="profile-image order-lg-2">
            </div>

        </div>
        <!-- 2 -->
        <div class="container pt-0">
            <div class="profile-card">
                <img src="{{ asset('images/about-us/kate morrison.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                    <h3 class="mb-2">Kate Morrison</h3>
                    <p>Kate is an experienced Property Manager with seven years in the industry. Her approach to troubleshooting issues with tenants and quickly resolving them never fails to impress our landlords. She offers sound advice and has a deep understanding of how things work and how to prevent issues escalating. Her calm, friendly nature and impeccable organisation skills are a winning formula for us… Our secret weapon!</p>
                </div>
            </div>

            <div class="profile-card mt-4">
                <div class=" profile-info order-2 order-lg-1 border-change d-flex flex-column justify-content-center align-items-start">
                    <h3 class="color-change mb-2">Julie Simpson</h3>
                    <p>Julie has a unique eye for detail. She takes care of our tenancies, ensuring that they all comply with current legislation. She inspects the properties regularly ensuring that fire safety is adhered to, from smoke alarms to fire blankets to HMO licencing compliance - she is very thorough. She has a knack for quickly spotting any issues, creating bespoke reports for landlords so we can deal with even the smallest repairs before they become a problem. Think of her as our very own Miss Marple!</p>
                </div>
                <img src="{{ asset('images/about-us/julie-simpson.png') }}" alt="Sarah Trevett" class="profile-image order-lg-2">
            </div>

        </div>
        <!-- 3 -->
        <div class="container pt-0">
            <div class="profile-card">
                <img src="{{ asset('images/about-us/natalie-elliott.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                    <h3 class="mb-2">Natalie Elliott</h3>
                    <p>With a background as an entertainment agent and a personal love for all things interior and home-related, the transition into property sales was an easy one for Natalie. Born and raised in South London, she knows the area inside and out. When she’s not impressing her clients with her local knowledge and dedicated customer service, you’ll likely find her relaxing on a beach with a glass of wine in the Mediterranean, or spending time with her two beautiful daughters.</p>
                </div>
            </div>

            <div class="profile-card mt-4">
                <div class="profile-info order-2 order-lg-1 border-change d-flex flex-column justify-content-center align-items-start">
                    <h3 class="color-change mb-2">Tyler Connor</h3>
                    <p>Tyler might be new to city life, but that’s precisely what makes her such a valuable addition to the team – she knows all too well just how strong the draw of South London life can be! After working in estate agency for four years in a small Oxfordshire town, she gave into temptation and moved to Brixton to enjoy the city life. Now, she spends her time helping others find their dream London homes. When not at work, you’ll likely find her with her nose buried in a book, accompanied by a fruity cocktail and some camembert nibbles.</p>
                </div>
                <img src="{{ asset('images/about-us/tyler-connor.png') }}" alt="Sarah Trevett" class="profile-image order-lg-2">
            </div>

        </div>
    </section>
   
    
    <!-- Reviews Section -->
    <div class="reviews-section container-fluid">
        <h2>See what our customers say</h2>
        <div class="reviews-container pt-2 pt-lg-4">
            <div class="review-card main-review">
                <div class="review-content d-flex flex-column gap-3">
                    <div class="">
                        <h3>Excellent</h3>
                        <!-- stars -->
                        <div data-v-5158ce97="" data-v-90132dd2="" class="starCollection Excellent-stars d-flex justify-content-center gap-2 pt-1">
                            <div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--100"></div>&nbsp;<div class="ReviewStar ruk-icon-percentage-star--75"></div>&nbsp;
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1 mt-0 average-reviews">
                        <span>4.9 average</span>
                        <span>207 reviews</span>
                    </div>
                </div>
                <div class="reviews-io d-flex justify-content-center mt-4">
                <div class="review-star position-relative"><img src="{{ asset('images/about-us/review-star.png') }}" alt=""></div>
                <div class="ReviewStar ruk-icon-percentage-star--77 position-relative"></div>&nbsp;
                    <!-- <img src="path_to_reviews_io_logo.png" alt="Reviews.io"> -->
                </div>
            </div>
            <div class="review-card" style="background-color: #C6BEC426; border: 1px solid #992785;">
                <div class="d-flex pb-2">
                    <h4>Ruth Mackie</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div class="review-card">
                <div class="d-flex pb-2">
                    <h4>Ruth Mackie</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div class="review-card">
                <div class="d-flex pb-2">
                    <h4>Ruth Mackie</h4>
                    <div class="stars ml-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div>
        </div>
    </div>
  

    <!-- Our work in the community -->
    <div class="reviews-section container-fluid our-community">
        <h2>Our work in the community</h2>
        <div class="reviews-container pt-2 pt-lg-4 row d-flex justify-content-center row">
           <div class="col-6" style="display: contents;">
           <iframe width="100%" height="591" class=" set-phone-height" src="https://player.vimeo.com/video/328369211"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           
        </div>
    </div>
  


    <!-- Book a free valuation -->
    <section class="our-story position-relative my-2 my-lg-5 valuation position-relative">
        <img src="http://127.0.0.1:8000/images/about-us/logo.png" alt="">
        <h2 class="text-white position-relative">Book a free valuation</h2>
        <div class="body-component text-center mx-0">
            <p>
                Do you know what your property is really worth? Whether you’re looking to sell or let, or you’re just curious, book a free valuation with one of our teams today.
            </p>
            <div class="d-flex justify-content-center pt-4 pt-lg-5">
                <a href="#" class="book-now text-white d-flex justify-content-center align-items-center">BOOK NOW</a>
            </div>
        </div>
    </section>

    <!-- <div class="reviews-section">
        <h2>See what our customers say</h2>
        <div class="reviews-container">
            <div class="review-summary">
                <div class="review-rating">
                    <p class="rating-title">Excellent</p>
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p class="rating-info">4.9 average<br>207 reviews</p>
                </div>
                <div class="review-logo">
                    <img src="path_to_reviews_logo.png" alt="Reviews.io">
                </div>
            </div>
            <div class="review-card">
                <p><strong>Ruth Mackie</strong> ★★★★★</p>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div class="review-card">
                <p><strong>Ruth Mackie</strong> ★★★★★</p>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
            <div class="review-card">
                <p><strong>Ruth Mackie</strong> ★★★★★</p>
                <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved - I didn’t have any major ones! I was very happy with my part-furnished flat while I was searching for a permanent home of my own. I can recommend Urban Village whole-heartedly to any prospective tenant.</p>
            </div>
        </div>
    </div> -->
    <div class="property-market-section container">
        <h2>What's happening in the property market?</h2>
        <div class="property-market-container pt-4">
            <div class="property-card">
                <!-- <img src="path_to_image1.png" alt="7 ways to maximise your outdoor space"> -->
                <img src="{{ asset('images/about-us/urban-villlage-one.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="property-card-content">
                    <span class="category">HOME IMPROVEMENTS <span class="read-time">| 5 MINS READ</span></span>
                    <h3>7 ways to maximise your outdoor space</h3>
                    <br>
                    <div class="author">
                        <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                        <span>Suzanne Vincent</span>
                        <a href="#" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="property-card">
                <!-- <img src="path_to_image2.png" alt="The women etched in history: A tour of South London"> -->
                <img src="{{ asset('images/about-us/urban-village_two.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="property-card-content">
                    <span class="category">LOCAL AREA <span class="read-time">| 5 MINS READ</span></span>
                    <h3>The women etched in history: A tour of South London</h3>
                    <div class="author">
                        <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                        <span>Suzanne Vincent</span>
                        <a href="#" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="property-card">
                <!-- <img src="path_to_image3.png" alt="5 spring cleaning dos and don'ts"> -->
                <img src="{{ asset('images/about-us/urban-village_three.png') }}" alt="Suzanne Vincent" class="profile-image">
                <div class="property-card-content">
                    <span class="category">HOME IMPROVEMENTS <span class="read-time">| 5 MINS READ</span></span>
                    <h3>5 spring cleaning dos and don'ts</h3>
                    <br>
                    <div class="author">
                        <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Suzanne Vincent">
                        <span>Suzanne Vincent</span>
                        <a href="#" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
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
                <div class="item"><a href="https://www.zoopla.co.uk/" target="_blank"><img src="{{ asset('images/logo/zoopla.jpg') }}" class="img-responsive"></a></div>
                <div class="item"><a href="https://www.onthemarket.com/" target="_blank"><img src="{{ asset('images/logo/onthemarket.jpg') }}" class="img-responsive" /></a></div>
                <div class="item"><a href="https://www.urbanvillagehomes.com/" target="_blank"><img src="{{ asset('images/logo/urbanvillagehomes.jpg') }}" class="img-responsive" /></a></div>
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/tenant.jpg') }}" class="img-responsive" /></a></div>
                <div class="item"><a href="" target="_blank"><img src="{{ asset('images/logo/national_approved.jpg') }}" class="img-responsive" /></a></div>
            </div>
        </div>
        <div class="custom-nav">
            <span class="custom-prev d-none d-md-block"><div data-v-90132dd2="" class="ruk-icon-arrow-left-thin-1-01"></div></span>
            <span class="custom-next d-none d-md-block"><div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div></span>
        </div>
    </div>
</div>
    <!-- Profiles Section -->
    <!-- <div class="profiles-section">
    <div class="profile-card">
        <img src="path_to_suzanne_image.png" alt="Suzanne Vincent">
        <div class="profile-content">
            <h2>Suzanne Vincent</h2>
            <p>Suzanne is our very own estate agency guru. She first started in the industry in 1992 by complete accident, following a misunderstanding at a job interview...</p>
        </div>
    </div>
    <div class="profile-card">
        <div class="profile-content">
            <h2>Sarah Trevett</h2>
            <p>Sarah is no newbie when it comes to estate agency. After more than seven years in the industry, she manages our dynamic, forward-thinking team, helping us to deliver personalised experiences...</p>
        </div>
        <img src="path_to_sarah_image.png" alt="Sarah Trevett">
    </div>
</div> -->



    <!-- Property Market Section -->
    <!-- <div class="property-market-section">
    <h2>What's happening in the property market?</h2>
    <div class="property-market-container">
        <div class="property-card">
            <img src="path_to_property_image1.png" alt="7 ways to maximise your outdoor space">
            <div class="property-card-content">
                <span class="category">HOME IMPROVEMENTS | <span class="read-time">5 MINS READ</span></span>
                <h3>7 ways to maximise your outdoor space</h3>
                <div class="author">
                    <img src="path_to_author_image1.png" alt="Suzanne Vincent">
                    <span>Suzanne Vincent</span>
                    <a href="#" class="read-more">Read more...</a>
                </div>
            </div>
        </div>
        <div class="property-card">
            <img src="path_to_property_image2.png" alt="The women etched in history: A tour of South London">
            <div class="property-card-content">
                <span class="category">LOCAL AREA | <span class="read-time">5 MINS READ</span></span>
                <h3>The women etched in history: A tour of South London</h3>
                <div class="author">
                    <img src="path_to_author_image2.png" alt="Suzanne Vincent">
                    <span>Suzanne Vincent</span>
                    <a href="#" class="read-more">Read more...</a>
                </div>
            </div>
        </div>
        <div class="property-card">
            <img src="path_to_property_image3.png" alt="5 spring cleaning dos and don'ts">
            <div class="property-card-content">
                <span class="category">HOME IMPROVEMENTS | <span class="read-time">5 MINS READ</span></span>
                <h3>5 spring cleaning dos and don'ts</h3>
                <div class="author">
                    <img src="path_to_author_image3.png" alt="Suzanne Vincent">
                    <span>Suzanne Vincent</span>
                    <a href="#" class="read-more">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
</div>
@include('includes.footer_new')