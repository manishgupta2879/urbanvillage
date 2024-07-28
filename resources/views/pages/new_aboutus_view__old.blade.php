@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/blog.jpg') }}" alt="banner" />
</header>-->

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
    </ol>
</div>
<div class="container">
    <div class="about-us">About us </div>
    <div class="industry-experience">Over 32 years of inductry experience </div>
    <div class="container">
        <section class="our-story">
            <h2>Our story</h2>
            <div class="body-component">
            <p>
                When Urban Village was first established, one thing was set in stone: we were not going to be your stereotypical estate agents.
                Your property journey should be an exciting time – not one that is burdened with stress and unnecessary pressures. We built a team that is dedicated to ensuring your property journey is as seamless, hassle-free and successful as possible.
            </p>
            <p>
                Following more than 20 years of experience in the estate agency world, our founder, Suzanne Vincent, set up her own agency in 2015 in South London, focusing on progressive growth by exceptional performance. Today, we pride ourselves on our bespoke service you can only get from an independently owned business.
            </p>
            </div>
        </section>
    </div>
    <div class="container" >
        <img src="{{ asset('images/about-us/MaskGroup44.png') }}" > </img>
    </div>
    <div class="container">
        <div class="profile-card">
            <img src="{{ asset('images/about-us/MaskGroup14.png') }}" alt="Suzanne Vincent" class="profile-image">
            <div class="profile-info">
                <h3>Suzanne Vincent</h3>
                <p>Suzanne is our very own estate agency guru. She first started in the industry in 1992 by complete accident, following a misunderstanding at a job interview. Little did she know that it would be the catalyst for a lifelong passion! Fast forward 33 years, and she set up her own independent estate agency, Urban Village, in 2015. Today, she’s all about delivering bespoke, trusted experiences for our clients, with fair and transparent fees and dedicated customer service. When she’s not wowing our clients, you’ll likely find her horse riding or walking her dog.</p>
            </div>
        </div>

        <div class="profile-card">
            <div class="profile-details">
                <h2>Sarah Trevett</h2>
                <p>Sarah is no newbie when it comes to estate agency. After more than seven years in the industry, she manages our dynamic, forward-thinking team, helping us to deliver personalised experiences for all our clients. She takes genuine pleasure in engaging with customers and guiding them throughout their property journeys. Outside of work, Sarah is a gym fanatic, foodie, and proud owner of our resident cockapoo, Reggie.</p>
            </div>
            <img src="{{ asset('images/about-us/MaskGroup15.png') }}" alt="Sarah Trevett" class="profile-image">
        </div>
        
    </div>
    <div class="reviews-section">
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
    </div>
    <div class="property-market-section">
        <h2>What's happening in the property market?</h2>
        <div class="property-market-container">
            <div class="property-card">
                <img src="path_to_image1.png" alt="7 ways to maximise your outdoor space">
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
                <img src="path_to_image2.png" alt="The women etched in history: A tour of South London">
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
                <img src="path_to_image3.png" alt="5 spring cleaning dos and don'ts">
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
    </div>
<!-- Profiles Section -->
<div class="profiles-section">
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
</div>

<!-- Reviews Section -->
<div class="reviews-section">
    <h2>See what our customers say</h2>
    <div class="reviews-container">
        <div class="review-card main-review">
            <div class="review-content">
                <h3>Excellent</h3>
                <div class="stars">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p>4.9 average</p>
                <p>207 reviews</p>
            </div>
            <div class="reviews-io">
                <img src="path_to_reviews_io_logo.png" alt="Reviews.io">
            </div>
        </div>
        <div class="review-card">
            <h4>Ruth Mackie</h4>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved...</p>
        </div>
        <div class="review-card">
            <h4>Ruth Mackie</h4>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved...</p>
        </div>
        <div class="review-card">
            <h4>Ruth Mackie</h4>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>The lovely team at Urban Village were always available and any minor problems were immediately resolved...</p>
        </div>
    </div>
</div>

<!-- Property Market Section -->
<div class="property-market-section">
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
</div>
</div>
@include('includes.footer')

