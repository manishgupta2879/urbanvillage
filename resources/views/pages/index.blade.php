@include('includes.header')

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link rel="stylesheet" href="{{ asset('css//new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css//newhome.css') }}">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->

<style>
    .work-with-us-section {
        display: flex;
        /* Flexbox for layout */
        justify-content: space-between;
        /* Space between text and image */
        align-items: center;
        /* Center align items vertically */
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

    .work-with-us-content {
        max-width: 50%;
        /* Maximum width for text content */
    }

    .work-with-us-content h2 {
        color: #A22D6C;
        /* Heading color */
        font-size: 24px;
        /* Font size for the heading */
        margin-bottom: 15px;
        /* Margin below the heading */
    }

    .work-with-us-content p {
        font-size: 16px;
        /* Font size for paragraphs */
        line-height: 1.5;
        /* Line height for readability */
        color: #333;
        /* Text color */
        margin-bottom: 15px;
        /* Margin below paragraphs */
    }

    .work-with-us-content ul {
        list-style-type: none;
        /* Remove default list style */
        padding-left: 0;
        /* Remove left padding */
        margin-bottom: 0;
        /* Remove bottom margin */
    }

    .work-with-us-content ul li {
        font-size: 16px;
        /* Font size for list items */
        line-height: 1.5;
        /* Line height for list items */
        color: #6f6f6f;
        /* Text color */
        margin-bottom: 10px;
        /* Margin between list items */
        padding-left: 8px;
        /* Padding to align text */
        position: relative;
        /* Positioning for icon */
    }

    

    .work-with-us-image {
        max-width: 45%;
        /* Maximum width for image */
        margin-left: 20px;
        /* Margin between image and text */
    }

    .work-with-us-image img {
        width: 100%;
        /* Full width image */
        border-radius: 10px;
        /* Rounded corners   */
    }

    .quote-text {
        text-align: center;
        font: normal normal normal 35px/47px DM Serif Display;
        letter-spacing: 0.84px;
        color: #992785;
        opacity: 1;
    }
</style>

<div id="video_model" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close-btn">&times;</span>
            <h5>Urban Village Video</h5>
        </div>
        <div class="modal-body">
            <iframe title="Urban Village Reviews" style="width: 100% !important;" src="https://player.vimeo.com/video/361889922" height="374" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="img-responsive" />
        </div>
    </div>
</div>

<div class="page-title-div mb-3"> Buy, sell, let or rent – we’re here at every step </div>
<div class="page-subtitle-div"> Your dedicated Independent Estate Agents in SE5 </div>
<!-- search-bar -->
<div class="container search-bar mt-3 mt-lg-5">
    <nav class="navbar navbar-light p-0">
        <div class="container-fluid p-0">
            <div class="Properties-for-sale d-flex justify-content-center align-items-center w-100">
                <div class="all-properties d-flex justify-content-center align-items-center">
                    <a href="">Properties for sale</a>
                </div>
                <div class="all-properties d-flex justify-content-center align-items-center">
                    <a href="">Properties for rent</a>
                </div>
                <div class="all-properties d-flex justify-content-center align-items-center">
                    <a href="">Book a valuation</a>
                </div>
            </div>
            <form class="w-100 d-flex flex-column flex-lg-row pt-4">
                <div class="enter-location">
                    <label for="exampleInput" class="form-label">Enter a location</label>
                    <input class="form-control me-2 mb-0" type="search" placeholder="Search for street, postcode or area" aria-label="Search">
                </div>
                <div class="d-flex" style="gap: 10px;">
                    <div class="form-group d-flex align-items-center justify-content-evenly mb-0">
                        <input type="checkbox" id="html">
                        <label for="html" class="d-flex align-items-center mb-0">Rent</label>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-evenly">
                        <input type="checkbox" id="buy">
                        <label for="buy" class="d-flex align-items-center mb-0">Buy</label>
                    </div>
                </div>

                <button class="btn text-white d-flex align-items-center justify-content-center" type="submit"><svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg> Search</button>
            </form>
        </div>
    </nav>
</div>

<div class="featured" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row featured_row move_up">

            @foreach($properties AS $k => $property)

            <div class="col-lg-4">

                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">

                            <a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">
                                <img src="{{ $property->image }}" alt="Urban Village Home - {{ $property->displayAddress }}">
                            </a>


                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            {{-- <div class="tag tag_house"><a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->availability }}</a>
                        </div> --}}
                        <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                    </div>
                    <div class="tag_price listing_price">{{ $property->availability }}</div>
                    {{-- <div class="tag_price listing_price">£ @if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif
                </div> --}}
            </div>

            <div class="listing_content">
                <div class="prop_location listing_location align-items-start justify-content-start">

                    <div class="row">
                        <!-- <div class="col-md-2">
                            <img src="{{ asset('images/icon_4_large.png') }}" alt="Icon Image">
                        </div> -->

                        <div class="col-md-12">

                            <!-- <a class="pro-title" href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">
                                {{ str_limit($property->displayAddress, $limit = 25, $end = '...') }}</a> -->
                            <div class="sold-cards">
                                <p>
                                    <b class="text-dark">£900,000</b>
                                    <br>
                                    Crossthwaite Avenue, SE5
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="">
                                        Terraced
                                    </p>
                                    <div class="d-flex justify-content-between" style="gap: 9px;">
                                    <div class="d-flex align-items-center" style="gap: 4px; font-size: 14px">4<svg fill="#e228b3" height="16px" width="16px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 315.00 315.00" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 315 315" stroke="#e228b3" stroke-width="0.00315"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="m292.617,146.484h-3.105v-51.322c0-17.997-14.642-32.639-32.638-32.639h-198.748c-17.996,0-32.638,14.642-32.638,32.639v51.322h-3.106c-12.341,0-22.382,10.041-22.382,22.383v33.162c0,12.342 10.041,22.383 22.383,22.383h27.672v21.064c0,3.866 3.134,7 7,7s7-3.134 7-7v-21.064h186.891v21.064c0,3.866 3.134,7 7,7 3.866,0 7-3.134 7-7v-21.064h27.672c12.342,0 22.383-10.041 22.383-22.383v-33.162c-0.001-12.342-10.042-22.383-22.384-22.383zm-253.129-51.322c0-10.277 8.36-18.639 18.638-18.639h198.748c10.277,0 18.638,8.361 18.638,18.639v51.322h-8.974v-14.057c0-8.964-7.292-16.256-16.255-16.256h-71.754c-8.965,0-16.258,7.292-16.258,16.256v14.057h-9.543v-14.057c0-8.964-7.293-16.256-16.258-16.256h-71.753c-8.963,0-16.255,7.292-16.255,16.256v14.057h-8.974v-51.322zm136.783,51.322v-14.057c0-1.223 1.034-2.256 2.258-2.256h71.754c1.223,0 2.255,1.033 2.255,2.256v14.057h-76.267zm-113.809,0v-14.057c0-1.223 1.032-2.256 2.255-2.256h71.754c1.224,0 2.258,1.033 2.258,2.256v14.057h-76.267zm238.538,55.545c0,4.622-3.761,8.383-8.383,8.383h-270.234c-4.622,0-8.383-3.761-8.383-8.383v-33.162c0-4.622 3.761-8.383 8.383-8.383h270.234c4.622,0 8.383,3.761 8.383,8.383v33.162z"></path> </g></svg></div>
                                    <div class="d-flex align-items-center" style="gap: 4px; font-size: 14px">1 <svg height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#c733a2" stroke="#c733a2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#ffffff;" d="M484.615,197.061v24.064c0,0.61,0,1.208-0.012,1.817c-0.966,92.403-76.184,167.011-168.806,167.011 h-205.42c-45.839,0-82.994-37.155-82.994-82.994V197.061L484.615,197.061L484.615,197.061z"></path> <path style="fill:#ffffffCCCCCC;" d="M358.928,370.978H153.514c-45.839,0-83-37.16-83-83v-90.919H27.38v109.898c0,45.839,37.16,83,83,83 h205.414c32.59,0,63.018-9.244,88.821-25.24C390.082,368.793,374.761,370.978,358.928,370.978z"></path> <path style="fill:#ffffff;" d="M484.394,157.766H27.606c-10.481,0-18.979,8.497-18.979,18.979v1.337 c0,10.481,8.497,18.979,18.979,18.979h456.788c10.482,0,18.979-8.497,18.979-18.979v-1.337 C503.373,166.263,494.876,157.766,484.394,157.766z"></path> <path style="fill:#ffffffCCCCCC;" d="M78.285,177.413L78.285,177.413c0-10.851,8.796-19.647,19.647-19.647H28.274 c-10.851,0-19.647,8.796-19.647,19.647l0,0c0,10.851,8.796,19.647,19.647,19.647h69.657 C87.081,197.06,78.285,188.264,78.285,177.413z"></path> <polyline style="fill:#ffffff;" points="62.646,373.436 35.865,443.54 66.228,443.54 139.458,389.958 "></polyline> <path style="fill:#ffffffCCCCCC;" d="M484.615,197.061v24.064c0,0.61,0,1.208-0.012,1.817H27.384v-25.882H484.615z"></path> <polyline style="fill:#ffffff;" points="351.467,384.972 431.5,443.535 461.866,443.535 424.903,346.749 424.796,346.487 "></polyline> <path d="M512,177.413c0-15.59-12.683-28.274-28.274-28.274h-83.5c-4.765,0-8.627,3.863-8.627,8.627c0,4.765,3.863,8.627,8.627,8.627 h83.5c6.076,0,11.02,4.943,11.02,11.02c0,6.077-4.943,11.02-11.02,11.02H28.274c-6.076,0-11.02-4.943-11.02-11.02 c0-6.076,4.943-11.02,11.02-11.02h335.041c4.765,0,8.627-3.863,8.627-8.627c0-4.765-3.863-8.627-8.627-8.627H51.637V97.04 c0-11,8.949-19.951,19.951-19.951c11,0,19.95,8.949,19.95,19.951v1.786c0,4.765,3.863,8.627,8.627,8.627 c4.765,0,8.627-3.863,8.627-8.627V97.04c0-20.514-16.69-37.205-37.205-37.205c-20.514,0-37.204,16.69-37.204,37.205v52.099h-6.108 C12.684,149.139,0,161.822,0,177.413c0,12.251,7.834,22.703,18.753,26.621v43.037c0,4.765,3.863,8.627,8.627,8.627 s8.627-3.863,8.627-8.627v-41.383h439.985v9.503c0,18.385-2.98,36.444-8.858,53.675c-1.538,4.509,0.87,9.412,5.38,10.951 c0.923,0.315,1.862,0.465,2.786,0.465c3.589,0,6.941-2.257,8.165-5.845c6.492-19.028,9.783-38.961,9.783-59.245v-11.156 C504.167,200.116,512,189.664,512,177.413z"></path> <path d="M435.064,349.171c13.018-12.172,24.271-26.213,33.296-41.681c2.401-4.116,1.011-9.398-3.103-11.8 c-4.117-2.4-9.398-1.011-11.8,3.104c-14.389,24.66-35.01,45.334-59.635,59.788c-25.357,14.883-54.393,22.749-83.97,22.749h-196.55 c-42.62,0-77.293-34.673-77.293-77.293v-23.031c0-4.765-3.863-8.627-8.627-8.627s-8.627,3.863-8.627,8.627v23.03 c0,28.921,13.066,54.836,33.59,72.193L27.806,440.46c-1.012,2.651-0.657,5.632,0.954,7.97c1.61,2.339,4.268,3.735,7.107,3.735 h30.363c1.831,0,3.617-0.583,5.095-1.664l70.954-51.917h167.575c13.402,0,26.698-1.487,39.662-4.352l76.893,56.264 c1.478,1.081,3.262,1.664,5.095,1.664h30.364c2.839,0,5.496-1.396,7.105-3.735s1.966-5.319,0.954-7.97L435.064,349.171z M63.41,434.912H48.395l18.538-48.526c13.647,7.714,29.379,12.151,46.131,12.192L63.41,434.912z M434.319,434.908l-63.755-46.651 c11.087-3.882,21.808-8.819,31.991-14.795c6.444-3.782,12.629-7.962,18.543-12.483l28.236,73.93H434.319z"></path> </g></svg></div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>

<!-- <div class="container-fluid mt-5"> -->
<section class="our-story position-relative mt-lg-2">
    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
    <div class="container">
        <h2 class="pt-0">We are Urban Village</h2>
        <div class="body-component">
            <p>
                <b>Your local Independent Estate Agents for South London properties.
            </p>
            </br>
            </br>
            <p>
                We know how challenging the London property market can be, which is why we pride ourselves on our dedication to customer service, fair and open fees, and local market knowledge and expertise to help you find exactly what you’re looking for.
                </br>
                </br>Whether you want to sell, let, buy or rent – we’re here to support you at every step.
            </p>
            <div class="d-flex justify-content-center pt-4 pt-lg-5">
                <a href="#" class="book-now text-white d-flex justify-content-center align-items-center">MEET THE TEAM</a>
            </div>
        </div>
    </div>
</section>
<section class="Why-work-with-us">
    <div class="container">
        <div class="profile-card  row">
            <div class="col-12 col-md-6 work-with-us-section">
                <div class="work-with-us-content">
                    <h2>Why work with us?</h2>
                    <p>We don’t just work for you, we work with you. Partner with our team of experts to benefit from:</p>
                    <ul>
                        <ul class="d-flex mb-0">
                              <img src="http://127.0.0.1:8000/images/about-us/logo.png" alt="">
                        <li>Unrivalled market knowledge and local expertise</li></ul>
                        <ul class="d-flex mb-0">
                              <img src="http://127.0.0.1:8000/images/about-us/logo.png" alt="">
                        <li>Free professional photoshoot to showcase your property</li></ul>
                        <ul class="d-flex mb-0">
                              <img src="http://127.0.0.1:8000/images/about-us/logo.png" alt="">
                        <li>Exceptional, dedicated customer service</li></ul>
                        <ul class="d-flex mb-0">
                              <img src="http://127.0.0.1:8000/images/about-us/logo.png" alt="">
                        <li>Coverage on all major property websites</li>
                        </ul>
                    </ul>
                </div>
            </div>
            <!-- <div class="profile-info d-flex flex-column justify-content-center align-items-start">
                <h3 class="mb-2">Suzanne Vincent</h3>
                <p>Suzanne is our very own estate agency guru. She first started in the industry in 1992 by complete accident, following a misunderstanding at a job interview. Little did she know that it would be the catalyst for a lifelong passion! Fast forward 33 years, and she set up her own independent estate agency, Urban Village, in 2015. Today, she’s all about delivering bespoke, trusted experiences for our clients, with fair and transparent fees and dedicated customer service. When she’s not wowing our clients, you’ll likely find her horse riding or walking her dog.</p>
            </div> -->
            <div class="col-12 col-md-6 p-0 px-lg-3">
                <img src="http://127.0.0.1:8000/images/about-us/MaskGroup44.png" alt="" class="profile-image ms-3">
            </div>
        </div>
    </div>
</section>

<!-- <div class="work-with-us-section">
    <div class="work-with-us-content">
        <h2>Why work with us?</h2>
        <p>We don’t just work for you, we work with you. Partner with our team of experts to benefit from:</p>
        <ul>
            <li>Unrivalled market knowledge and local expertise</li>
            <li>Free professional photoshoot to showcase your property</li>
            <li>Exceptional, dedicated customer service</li>
            <li>Coverage on all major property websites</li>
        </ul>
    </div>
    <div class="work-with-us-image">
        <img src="your-image-path.jpg" alt="Team Image">
    </div>
</div> -->


<!-- Reviews Section -->
<div class="reviews-section container-fluid customers-say">
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
        <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01 green-chevron">  <img src="{{ asset('images/icons/green-chevron.png') }}" ></div>
    </div>
</div>
<br />

<!-- “The level of service is brilliant.”-->
<div class="reviews-section container-fluid our-community Brilliant">
        <h2>“The level of service is brilliant.”</h2>
        <div class="reviews-container pt-2 pt-lg-4 row d-flex justify-content-center row">
           <div class="col-6" style="display: contents;">
           <iframe width="100%" height="591" class=" set-phone-height" src="https://player.vimeo.com/video/328369211" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
           </div>
           
        </div>
    </div>

<!-- <div class="quote-text">
    “The level of service is brilliant.”
</div> -->

<section class="our-story position-relative my-2 my-lg-5 valuation position-relative">
    <img src="{{ asset('images/about-us/logo.png') }}" alt="">
    <div class="container">
        <h2 class="pt-0">Book a free valuation</h2>
        <div class="body-component text-center mx-0">
            <p>
                Do you know what your property is really worth? Whether you’re looking to sell or let, or you’re just curious, book a free valuation with one of our teams today.
            </p>
            <div class="d-flex justify-content-center pt-4 pt-lg-5">
                <a href="#" class="book-now text-white d-flex justify-content-center align-items-center">BOOK NOW</a>
            </div>
        </div>
    </div>
</section>

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
                <div class="author mt-lg-4">
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
            <img src="{{ asset('images/icons/left-chevron.png') }}" >
            <!-- <i class="fa-solid fa-chevron-left"></i> -->
                <div data-v-90132dd2="" class="ruk-icon-arrow-left-thin-1-01"></div>
            </span>
            <span class="custom-next d-none d-md-block">
            <img src="{{ asset('images/icons/right-chevron.png') }}" >
            <!-- <i class="fa-solid fa-chevron-right"></i> -->
                <div data-v-90132dd2="" class="ruk-icon-arrow-right-thin-1-01"></div>
            </span>
        </div>
    </div>
</div>

</div>
<script>
    // Get the modal
    var modal = document.getElementById("video_model");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-btn")[0];

    // Get the button that opens the modal
    function getFunction() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $('#mortgage_submit').on('click', function() {

        var mortgage_price = 0;
        var down_payment = 0;
        var mortgage_term = 1;
        var mortgage_interest = 0;

        mortgage_price = document.getElementById('ma').value;
        down_payment = document.getElementById('dp').value;
        mortgage_term = document.getElementById('mt').value;
        mortgage_interest = document.getElementById('ir').value;

        var mortgage_term_months = mortgage_term * 12;
        var mortgage_value = mortgage_price - down_payment;
        var mortgage_interest_final = mortgage_interest / 1200;
        var final_monthly = mortgage_value * (mortgage_interest_final * Math.pow((1 + mortgage_interest_final), mortgage_term_months)) / (Math.pow((1 + mortgage_interest_final), mortgage_term_months) - 1);
        final_monthly = +(final_monthly.toFixed(2));
        var total_repayment = final_monthly * mortgage_term_months;

        $('#m_amount').html(mortgage_value.toFixed(2));
        $('#m_years').html(mortgage_term);
        $('#m_interest').html(mortgage_interest);
        $('#m_payment').html(final_monthly);
        $('#m_total').html(total_repayment);

        $("#mortgage_div").show();
    });


    //========= Stamp Duty calculator starts ========

    $.ajaxSetup({
        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#stamp_submit").click(function(e) {
        e.preventDefault();

        var value = $("input[name=value]").val();
        var country = $("input[name=country]:checked").val();
        var additional = $("input[name=additional]:checked").val();

        $.ajax({

            type: 'POST',
            url: '/calculate-stamp-duty',

            data: {
                "_token": "{{ csrf_token() }}",
                "value": value,
                "country": country,
                "additional": additional
            },

            success: function(data) {
                $("#error-message").hide();

                var effective_rate = 0.0;
                var higher_rates = 'Not Applicable';

                if (data.additional_rate_used == true) {
                    higher_rates = 'Applicable';
                }

                effective_rate = ((data.sdlt_payable / value) * 100).toFixed(2);

                //set values to the output
                $('#tax_payable').html(data.sdlt_payable.toFixed(2));
                $('#effective_rate').html(effective_rate);
                $('#higher_rates').html(higher_rates);
            },

            error: function(xhr, status, error) {
                $("#error-message").toggle();
            }

        });



    });

    //========= Stamp Duty calculator end ========
</script>
<style>
    #selling_banner {
        display: none;
    }

    @media screen and (min-width: 768px) {
        #selling_banner {
            display: block;
        }
    }
</style>

@include('includes.footer')