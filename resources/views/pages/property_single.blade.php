@include('includes.header')
<!--<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/cover.jpg') }}" data-speed="0.8"></div>
</div>-->

<div class="listing_container">

   
    <div class="container">
        <div class="row" >
            <div class="col">
                <div class="col" style="margin-top: 55px;">
                    <div class="section_title_container">
                        <div class="property_info">
                            <div class="tag_price-2 listing_price-2">£ @if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif</div>
                            <div class="listing_location align-items-start justify-content-start">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <a class="pro-title" href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->displayAddress }}</a>
                                        <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <span style="border-radius: 4px; background: #a4bd17; padding: 10px; color: white;">{{ $property->availability }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> 
                <!-- Image -->
                <div class="listing_image">
                    @foreach($property->images AS $k => $image)
                        <div class="mySlides">
                            <div class="numbertext">{{ $k+1 }} / {{ count($property->images) }}</div>
                            <img src="{{ $image }}" style="width:100%" alt="Urban Village Home - {{ $property->displayAddress }}  : Image {{ $k+1 }}">
                            <div class="text">UVH - {{ $property->displayAddress }} : {{ $k+1 }}</div>
                        </div>
                    @endforeach

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    <br/>

                    <div style="margin-top:20px;text-align:center">
                        @foreach($property->images AS $k => $image)
                            <span class="dot" onclick="currentSlide({{ $k+1 }})"></span>
                        @endforeach
                    </div>
                </div>
                <!-- Tabs -->
                <div class="listing_tabs d-flex flex-row align-items-start justify-content-between flex-wrap">

                    <!-- Tab -->
                    <div class="tab">
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/house.svg') }}" class="svg" alt="house icon"></div>
                            <span>{{ $property->availability }}</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <a href="#tab_features">
                        <div class="tab">
                            <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                <div class="tab_icon"><img src="{{ asset('images/houses.svg') }}" class="svg" alt=""></div>
                                <span>features</span>
                            </div>
                        </div>
                    </a>

                    <!-- Tab -->
                    <a href="#tab_resources">
                        <div class="tab">
                            <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                <div class="tab_icon"><img src="{{ asset('images/contract.svg') }}" class="svg" alt=""></div>
                                <span>documents &amp; Floor Plan</span>
                            </div>
                        </div>
                    </a>

                    <!-- Tab -->
                    <a href="#tab_location">
                        <div class="tab">
                            <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                <div class="tab_icon"><img src="{{ asset('images/location.svg') }}" class="svg" alt=""></div>
                                <span>location</span>
                            </div>
                        </div>
                    </a>

                    <!-- Tab -->
                    <a href="#tab_contact">
                        <div class="tab">
                            <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                <div class="tab_icon"><img src="{{ asset('images/directions.svg') }}" class="svg" alt="Contact icon"></div>
                                <span>Arrange a viewing</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- About -->
                <div class="about">
                    <div class="row">
                        <!--<div class="col-lg-7">
                            <div class="property_info">
                                <div class="tag_price-2 listing_price-2">£ @if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif</div>
                                <div class="listing_location align-items-start justify-content-start">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                        </div>
                                        <div class="col-md-10">
                                            <a class="pro-title" href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->displayAddress }}</a>
                                            <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-lg-6">
                            <div class="listing_features" style="margin-top: 0px !important;">
                                <h3>Description</h3>
                                <p style="text-align: justify;">{!! $property->mainSummary !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="listing_features" style="margin-top: 0px !important;">
                                <h3>Contact Agent</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <br/>
                                        <p><b>Urban Village Homes Limited</b><br/>

                                            121 Denmark Hill<br/>
                                            Camberwell<br/>
                                            London<br/>
                                            SE5 8EN<br/>
                                            United Kingdom<br/>
                                            Tel: 020 3519 9121<br/>
                                            info@urbanvillagehomes.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" id="tab_features">
                            <div class="listing_features" style="margin-top: 0px !important;">
                                <h3>Property at A Glance</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li>{!! $property->propertyFeature1 !!}</li>
                                            <li>{!! $property->propertyFeature2 !!}</li>
                                            <li>{!! $property->propertyFeature3 !!}</li>
                                            <li>{!! $property->propertyFeature4 !!}</li>
                                            <li>{!! $property->propertyFeature5 !!}</li>
                                            <li>{!! $property->propertyFeature6 !!}</li>
                                            <li>{!! $property->propertyFeature7 !!}</li>
                                            <li>{!! $property->propertyFeature8 !!}</li>
                                            <li>{!! $property->propertyFeature9 !!}</li>
                                            <li>{!! $property->propertyFeature10 !!}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!empty($property['virtualTours']))
                    <div class="row mb-4 mt-2">
                        <div class="col-md-12 mb-2">
                            <h3>Property Virtual Tour</h3>
                        </div>
                       @foreach($property['virtualTours'] AS $k => $virtualTours)
                            <div class="col-md-12">
                                <div class='embed-container'>
                                    <iframe src='{{ $virtualTours->virtualTour }}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                                    </iframe>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="services" id="tab_resources">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-md-12" style="margin-top:-45px; ">
                                <div class="listing_title"><h3>EPC, Floorplans & Others</h3></div>
                                <br/><br/>
                            </div>
                            <!-- EPC -->
                            @foreach($property->epcGraphs AS $k => $epcGraph)
                                <div class="col-xl-4 col-md-6">
                                    <a target="_blank" href="{{url('view-resource/'.$epcGraph)}}">
                                        <div class="service">
                                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                                    <i class="fa fa-bar-chart"></i>
                                                </div>
                                                <div class="service_title"><h3>EPC</h3></div>
                                            </div>
                                            <div class="service_text">
                                                <p>Energy Performance Certificate</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            <!-- Floor Plan -->
                            @foreach($property->floorplans AS $k => $floorplan)
                                <div class="col-xl-4 col-md-6">
                                    <a target="_blank" href="{{url('view-resource/'.$floorplan)}}">
                                        <div class="service">
                                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                                    <i class="fa fa-newspaper-o"></i>
                                                </div>
                                                <div class="service_title"><h3>Floor Plan</h3></div>
                                            </div>
                                            <div class="service_text">
                                                <p>{{ $property->displayAddress }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            <!-- Broucher PDF -->
                            @foreach($property->brochures AS $k => $brochure)
                                <div class="col-xl-4 col-md-6">
                                    <a target="_blank" href="{{url('view-resource/'.$brochure)}}">
                                        <div class="service">
                                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                                    <i class="fa fa-book"></i>
                                                </div>
                                                <div class="service_title"><h3>Additional Media</h3></div>
                                            </div>
                                            <div class="service_text">
                                                <p>Brochure No {{ $k+1 }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            <!-- External Links -->
                            @if(!empty($property['externalLinks']))
                                @foreach($property['externalLinks'] AS $k => $externalLinks)
                                    <div class="col-xl-4 col-md-6">
                                        <a target="_blank" href="{{ $externalLinks->url }}">
                                            <div class="service">
                                                <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                                    <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                                        <i class="fa fa-external-link-square"></i>
                                                    </div>
                                                    <div class="service_title"><h3>{{ $externalLinks->description }}</h3></div>
                                                </div>
                                                <div class="service_text">
                                                    <p>External Link {{ $k+1 }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!($property->availability == "Sold"))
    <div class="contact">
        <div class="container" id="tab_contact">
            <div class="row">
                <div class="col-12">
                    <div class="section_title_container">
                        <br/><br/>
                        <h1 class="main-title">Viewing / Valuation Request</h1>
                        <p class="empty-pr">&nbsp;</p>
                        <div class="header_title_border"></div>
                    </div>
                </div>
            </div>
            <div class="row contact_row">
                <!-- Contact - About -->
                <div class="col-lg-12 contact_col">
                    <div class="contact_form_container">
                        <!-- Contact - About -->
                        <form action="{{url('send-valuation-request')}}" method="post" class="contact_form text-center" id="contact_form">
                            {{csrf_field()}}
                            <input type="hidden" name="property_id" value="{{ $property->propertyID }}"/>
                            <input type="hidden" name="display_address" value="{{ $property->displayAddress }}"/>
                            <div class="row">
                                <div class="col-lg-6 contact_col">
                                    <div class="contact_form_container">
                                        <div class="row">
                                            <div class="col-lg-12" style="text-align: left !important;">
                                                <label>Name</label>
                                                <input type="text" class="contact_input" name="name" placeholder="Full Name" required="required">
                                            </div>
                                            <div class="col-lg-12" style="text-align: left !important;">
                                                <label>Email</label>
                                                <input type="email" class="contact_input" name="email" placeholder="Your e-mail" required="required">
                                            </div>
                                            <div class="col-lg-12" style="text-align: left !important;">
                                                <label>Phone</label>
                                                <input type="text" class="contact_input" name="phone" placeholder="Phone number" required="required">
                                            </div>
                                            <div class="col-lg-12" style="text-align: left !important;">
                                                <label>Address</label>
                                                <input type="text" class="contact_input" name="address" placeholder="Address" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact - Info -->
                                <div class="col-lg-6 contact_col">
                                    <div class="contact_form_container">
                                        @if(session('flash_success'))
                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-xl-12">
                                                    <div class="alert alert-success icons-alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <i class="icofont icofont-close-line-circled"></i>
                                                        </button>
                                                        <p><i class="fa fa-check-circle"></i> <strong>Success!!</strong>{!!   session('flash_success') !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12" style="text-align: left !important;">
                                                <label>Requested Preferred Times</label>
                                                <input type="text" class="contact_input" name="preferr_date" value="" id="datetimepicker"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12" style="text-align: left !important;">
                                                <label>Message</label>
                                                <textarea class="contact_textarea contact_input" name="body_text" placeholder="Message" required="required"></textarea>
                                                <div style="float: left !important;">
                                                    <div class="col-lg-12">
                                                        <label class="chk-container">By submitting this form you agree to the terms of our <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                                                            <input type="checkbox" id="checkme" name="privacy" value="terms">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="chk-container"> I would like to receive new events, invites and newsletters by email, from Urban Village Homes.</a>
                                                            <input type="checkbox" id="checkme" name="marketing" value="marketing">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact_form_container pull-right">
                                                    <button disabled id="sendNewSms" class="btn btn-primary contact_button-2">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .listing_features ul li {
            height: 40px !important;
            line-height: 15px !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            color: #6c7079 !important;
            padding-left: 30px !important;
            padding-top: 6px !important;
        }
        
        .embed-container {
          position: relative;
          padding-bottom: 56.25%;
          height: 0;
          overflow: hidden;
          max-width: 100%;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container embed {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
    </style>
    <script type="text/javascript">
        var checker = document.getElementById('checkme');
        var sendbtn = document.getElementById('sendNewSms');
        checker.onchange = function() {
            if(this.checked){
                sendbtn.disabled = false;
            }else{
                sendbtn.disabled = true;
            }
        };
    </script>
@endif
<iframe  id="tab_location" src="https://maps.google.com/maps?q={{ $property->latitude }},{{ $property->longitude }}&z=15&output=embed" style="margin-top:12px;max-width: 100%;border:0" width="100%" height="450" frameborder="0" allowfullscreen></iframe>


    <script>
        $(document).on("click", ".resource-class", function () {
            var resource_path = $(this).data('path');
            window.open(resource_path);
        });
    </script>
    
@include('includes.footer')
