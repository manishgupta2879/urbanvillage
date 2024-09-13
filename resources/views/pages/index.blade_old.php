@include('includes.header')

<div class="home hide-mobile" style="z-index: 0">
		<div class="home_slider_container">
			 <div class="owl-carousel owl-theme home_slider">
                 <div class="slide">
                     <div class="home_container">
                         <div class="container">
                             <div class="row">
                                 <div class="col">
                                     <!--<div class="center-position-top">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="line-bot"></div>
                                             </div>
                                         </div>
                                     </div>-->
                                     <div class="center-position center-position-phone">
                                         <div class="row move_up-btn move_up-btn-cus">
                                             <div class="col-md-4">
                                                 <div class="tag tag_house slider-btn-2"><a href="{{ url('property/buyers') }}">Sales</a></div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="tag tag_house slider-btn-2"><a href="{{ url('property/tenants') }}">Lettings</a></div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="tag tag_house slider-rbtn-2" ><a onclick="getFunction()" href="#">Reviews</a></div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="center-button">
                                                     <div class="slider-btn-3"><a target="_blank" href="https://urban-village-homes.engage.epropservices.com/">Book a free valuation</a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
			 </div>
		</div>
	</div>

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

    <div class="featured" style="padding-top: 0px !important;">
        <div class="container">
            <div class="row featured_row move_up">
                @foreach($properties AS $k => $property)
                    <div class="col-lg-4">
                        <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    <a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">
                                        <img src="{{ Voyager::image($property->image) }}" alt="Urban Village Home - {{ $property->displayAddress }}">
                                    </a>
                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <div class="tag tag_house"><a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->availability }}</a></div>
                                    <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                                </div>
                                <div class="tag_price listing_price">£ @if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif</div>
                            </div>
                            <div class="listing_content">
                                <div class="prop_location listing_location align-items-start justify-content-start">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('images/icon_4_large.png') }}" alt="Icon Image">
                                        </div>
                                        <div class="col-md-10">
                                            <a class="pro-title" href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ str_limit($property->displayAddress, $limit = 25, $end = '...') }}</a>
                                            <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p>
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
    
    <div class="container">
        <div class="section_title_container text-center">
                    <h3>Camberwell Tours</h3>
                    </div>
            <iframe title="Urban Village Reviews" width="100% !important" height="355" class="set-phone-height" src="https://www.youtube.com/embed/paW1T11FAZc" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
	    </div>

	<div class="container" style="padding-top: 80px !important;">
            <div class="row move_up_top move-up-phone">
                <div class="col">
                    <div class="section_title_container text-center">
                    <h1 class="head-title">Independent Estate Agents in SE5</h1>
                    </div>
                </div>
            </div>
	    </div>

        <!-- Map Section -->
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

<div class="hot">
    <div class="container">
        <div class="row move_up_top">
            <div class="offset-md-2 col-lg-3" style="margin-bottom:6px !important;">
                <img class="img-responsive" alt="Urban Village Homes" src="{{ asset('images/uvh-display.jpg') }}"/>
            </div>
            <div class="col-lg-5">
                <div class="prop_text">
                    <p class="color-black text-justify">Urban Village are genuinely customer focused, determined and calm, providing clients with a high level of professional expertise. Furthermore, we really enjoy what we do and we love working with our client throughout their property journey.
                        <br/><br/>We pride ourselves on fair and open fees, resulting in excellent value for money, therefore creating a good reputation. Our customers are happy to recommend us to their friends, growing our client base with a personal touch.
                    </p>
                </div>
            </div>
        </div>
    </div>
            </div>
<div class="featured">
    <div class="container">
        <link rel="stylesheet" href="https://widget.reviews.co.uk/combined/style.css?RUKcarousel">
<script src="https://widget.reviews.co.uk/combined/dist.js?RUKcarousel"></script>
<div id="ReviewsWidget"></div>
<script>

    new ReviewsWidget('#ReviewsWidget', {

                store: 'urban-village-',
                widget: 'prestige-card-carousel',
                maxReviews: 21,

                contentMode: 'third-party;product;company;',
                sku: 'all-product-reviews',

                structuredData: {
                  product: "",
                  company: ""
                },

                richSnippets: {
                    product: true,
                    company: true,
                },

                carouselOptions: {
                    transitionSpeed: 320,
                    draggableOnDesktop: true,
                    showSliderArrows: true,
                    autoScroll: false,
                    autoScrollTime: 15,
                    showTitle: true,
                    titleText: `Our Customers Love Us`,
                    showSubTitle: true,
                    starsInSubTitle: true,
                    starsAfterName: false,
                    hideDates: false,
                    hideThirdParty: true
                },

                styles: {
                    starColor:'#FFFFFF',
                    primaryColor:'#971c5a',
                    textColor: '#FFFFFF',
                    neutralColor: '#a4bd16',
                    borderRadius: "0px",
                    boxShadow: "0 10px 10px rgba(2,2,2,0.04), 0 6px 6px rgba(2,2,2,0.07) ",
                    logoColor: "#000",
                    subTitleStar: "#4F4F4F"
                },
    });
</script>

    </div>
</div>
<br/>
<hr/>
<div class="hot">
    <div class="container">
        <div class="row" style="margin-top: -55px; margin-bottom: 55px;">
            <div class="col-lg-4" style="min-height:690px; background-color:#f2f2f2;">
                <div class="intro_content" style="padding:10px;">
                    <div class="container-2" style="border: 2px solid black; margin:10px; border-radius:0px !important;">
                        <h4>Mortgage Calculator</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Purchase price: </label><br/>
                                    <div class="form-group-2 box-form">
                                       <span>£</span> <input placeholder="eg: 200000" type="text" name="ma" id="ma">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Deposit: </label><br/>
                                    <div class="form-group-2 box-form">
                                        <span>£</span> <input placeholder="eg: 50000" type="text" name="dp" id="dp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Mortgage term: </label><br/>
                                    <div class="form-group-2 box-form">
                                        <span>years</span> <input  placeholder="eg: 20" type="text" name="mt" id="mt">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Interest rate:</label><br/>
                                    <div class="form-group-2 box-form">
                                        <span>%</span> <input  placeholder="eg: 2.5" type="text" name="ir" id="ir">
                                    </div>
                                </div>
                                <div class="col-md-12" id="mortgage_div" style="text-align: center;">
                                    <hr/>
                                    <p>Amount Borrowed: £ <span id="m_amount">00.00</span></p>
                                    <p>Term: <span id="m_years">00</span> Years</p>
                                    <p>Interest rate: <span id="m_interest">0.0</span> %</p>
                                    <h4>Total Monthly Payment: £ <span id="m_payment">00.00</span></h4>
                                    <p>Total amount repayable: £ <span id="m_total">00.00</span></p>
                                    <hr/>
                                </div>
                            </div>
                            <input style="margin-bottom: 24px;" type="submit" id="mortgage_submit" value="Calculate"><br><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="min-height:690px; background-color:#f2f2f2;">
                <div class="intro_content" style="padding:10px;">
                    <div class="container-2" style="border: 2px solid black; margin:10px; border-radius:0px !important;">
                        <form>
                        <h4>Stamp Duty Calculator</h4>
                        <div class="alert alert-danger" id="error-message" style="display:none;margin-top: 10px;">
                            <ul>
                                <li>The given data was invalid, Please check all your inputs.</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="text-align: center;">
                                <label>Purchase price: </label><br/>
                                <div class="form-group-2 box-form">
                                    <span>£</span> <input placeholder="200000" type="text" name="value"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <input checked="checked" type="radio" name="country" value="england"/> SDLT (England or N. Ire)<br/>
                                <input type="radio" name="country" value="scotland"/> LBTT (Scotland)<br/>
                                <input type="radio" name="country" value="wales"/> LTT (Wales)<br/>
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <input type="radio" name="additional" value="investment"/> Investment property<br/>
                                <input checked="checked" type="radio" name="additional" value="primary"/> Primary residence<br/>
                                <input type="radio" name="additional" value="first"/> First-time buyer<br/>
                            </div>
                            <div class="col-md-12" id="mortgage_div" style="text-align: center;">
                                <hr/>
                                <p>Higher Rates: <span id="higher_rates">-</span></p>
                                <p>Effective rate: <span id="effective_rate">0.0</span> %</p>
                                <h4>Transaction tax payable: £ <span id="tax_payable">00.00</span></h4>
                                <hr/>
                            </div>
                        </div>
                        <input style="margin-bottom: 24px;" type="submit" id="stamp_submit" value="Calculate"><br><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" id="selling_banner">
                <a href="https://urbanvillagehomes.com/contact"><img class="img-responsive" alt="Sell Your Homes With UVH Support" src="{{ asset('images/uvh-banner-selling-portrait.jpg') }}"/></a>
            </div>
        </div>
    </div>
</div>

<div class="hot logo-spinner" style="margin-bottom:-32px;">
    <div class="container">
        <div class="carousel-wrap">
            <div class="owl-carousel" id="owl-carousel-new">
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
    
    $('#mortgage_submit').on('click',function(){

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
        var final_monthly = mortgage_value*(mortgage_interest_final * Math.pow((1 + mortgage_interest_final), mortgage_term_months))/(Math.pow((1 + mortgage_interest_final), mortgage_term_months) - 1);
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

    $("#stamp_submit").click(function(e){
        e.preventDefault();

        var value = $("input[name=value]").val();
        var country = $("input[name=country]:checked").val();
        var additional = $("input[name=additional]:checked").val();

        $.ajax({

            type:'POST',
            url:'/calculate-stamp-duty',

            data:{
                "_token": "{{ csrf_token() }}",
                "value":value,
                "country":country,
                "additional":additional
            },

            success:function(data){
                $("#error-message").hide();

                var effective_rate  = 0.0;
                var higher_rates    = 'Not Applicable';

                if(data.additional_rate_used == true){
                    higher_rates    = 'Applicable';
                }

                effective_rate = ((data.sdlt_payable/value) * 100).toFixed(2);

                //set values to the output
                $('#tax_payable').html(data.sdlt_payable.toFixed(2));
                $('#effective_rate').html(effective_rate);
                $('#higher_rates').html(higher_rates);
            },

            error: function(xhr, status, error){
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
