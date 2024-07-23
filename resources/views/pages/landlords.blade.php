@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/landlords.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tenants</li>
    </ol>
</div>
<div class="intro" style="padding-bottom: 42px !important;">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="intro_content">
                    <br/>
                    <a arget="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn cus-btn-2" style="background:#a82266 !important; border:#a82266 !important;" class="btn cus-btn-2"><b>Book a Free Valuation</b></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="intro_content">
                    <div class="intro_text">
                        <p>With our knowledge of the local rental market and demand we are perfectly placed to give you the most accurate free rental valuation for your property.</p>
                        <p>Using our lettings experience and our regularly updated data base of suitable tenants we can find the ideal match for you.</p>
                        <p>We don’t inflate prices on repairs and maintenance; our fees outlined clearly.</p>
                        <ul>
                            <li><i class="fa fa-circle color-green"></i>  Exceptional and friendly service</li>
                            <li><i class="fa fa-circle color-green"></i>  Committed to achieving the best price</li>
                            <li><i class="fa fa-circle color-green"></i>  Clear and fair fees</li>
                            <li><i class="fa fa-circle color-green"></i>  Putting you in the driving seat</li>
                            <li><i class="fa fa-circle color-green"></i>  Community partnerships</li>
                        </ul><br/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 intro_col">
                <div class="intro_text">
                    <iframe width="100%" height="305" class="set-phone-height" src="https://www.youtube.com/embed/ijkFi29Y_xs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr/>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="intro move_up_top-2" style="padding-top: 36px !important; padding-bottom: 42px !important;">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-lg-12 text-left">
                <h4 style="color:#ff0878">We offer a choice of two different services</h4><br/>
            </div>
            <!-- Intro Content -->
            <div class="col-lg-4">
                <div class="intro_content">
                    <div class="intro_text">
                        <h4>Premium Managed</h4>
                        <div class="header_title_border"></div>
                        <p class="empty-pr">&nbsp;</p>
                        <p>We look after everything from the moment your tenants move in. If you have any maintenance issues during the tenancy we have an experienced property manager on hand who will match the best trade person to your job so it is completed efficiently.</p>
                        <p>Most Landlords choose our fully managed service as it gives them complete peace of mind so they can carry on with their busy lives.</p>
                        <p>15% including VAT for our standard 12 month tenancy. <i>No automatic renewal fees charged, which is a unique benefit with Urban Village.</i> We also add FREE RENTAL WARRANTY and LEGAL PROTECTION COVER  for the first 12 months for rent collection and managed landlords.</p>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-4">
                <div class="intro_content">
                    <div class="intro_text">
                        <h4>Rent Collection</h4>
                        <div class="header_title_border"></div>
                        <p class="empty-pr">&nbsp;</p>
                        <p>We ensure that the rent is paid into your account on time.</p>
                        <p>12.5% including VAT for our standard 12 month tenancy. <i>No automatic renewal fees charged, which is a unique benefit with Urban Village.</i></p>
                    </div>
                </div>
            </div>-->
            <div class="col-lg-4">
                <div class="intro_content">
                    <div class="intro_text">
                        <h4>Let Only Service</h4>
                        <div class="header_title_border"></div>
                        <p class="empty-pr">&nbsp;</p>
                        <p>We find the tenant and after they move in you manage the tenancy.</p>
                        <p>10% including VAT for our standard 12 month tenancy. <i>No automatic renewal fees charged, .which is a unique benefit with Urban Village</i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="intro_text text-right">
                        <h4>Click here for <a class="" href="{{ url('full-scale-charges') }}">our full scale of charges</a></h4>
                    </div>
                </div>
            </div>
            <br/><br/>
            <div class="col-lg-12">
                <hr  style="border:2px solid gray;">
                <div class="intro_content">
                    <img src="{{ asset('images/checklist-new.jpg') }}" alt="Service Check-list" />
                </div>
                <div class="text-center">
                    <div class="intro_text">
                        <iframe width="100%" height="305" class="set-phone-height" src="https://www.youtube.com/embed/oA8JM8DOHn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
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
