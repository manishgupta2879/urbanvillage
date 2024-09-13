@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/tenants.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tenants</li>
    </ol>
</div>
<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="section_title_container">
                    <br/><br/>
                    <h1 class="main-title">Tenants</h1>
                </div>
                <div class="intro_content">
                    <br/>
                    <a href="{{ url('valuation-request') }}" class="btn cus-btn-2"><b>Book a Free Valuation</b></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sp-mk"></div>
            </div>
        </div>
    </div>
</div>
<div class="search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_container">
                    <!--<div class="search_title">Search Criteria</div>-->
                    <div class="container-2">
                        <form action="/">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="" class="btn btn-primary opt-mov">Residential</a>
                                    <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><span class="option-1">For Sale</span><span class="option-2">Residential</span></div></label>
                                </div>
                                <div class="col-lg-2">
                                    <select >
                                        <option value="0">Price From</option>
                                        <option value="50,000">$50,000</option>
                                        <option value="60,000">$60,000</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select >
                                        <option value="0">Price To</option>
                                        <option value="50,000">$50,000</option>
                                        <option value="60,000">$60,000</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <select >
                                        <option value="0">Property Type</option>
                                        <option value="flat/apartment">Flat/Apartment</option>
                                        <option value="House">House</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <select >
                                        <option value="0">Areas</option>
                                        <option value="flat/apartment">Example</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="" placeholder="Postcode, Street or Area" required="required">
                                </div>
                                <div class="col-lg-4">
                                    <select >
                                        <option value="0">Min Bedroom</option>
                                        <option value="50,000">1</option>
                                        <option value="60,000">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <select >
                                        <option value="0">Properties per page</option>
                                        <option value="50,000">5</option>
                                        <option value="60,000">10</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select >
                                        <option value="0">Order results by</option>
                                        <option value="flat/apartment">Lower price first</option>
                                        <option value="House">Heighst price first</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn btn-primary cus-btn" type="submit" value="Submit">Start my search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured">
    <div class="container">
        <!--
        <div class="row move_up_top">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_title"><h1>Our Recent Properties</h1></div>
                </div>
            </div>
        </div>-->
        <div class="row featured_row move_up_top-2">
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house1.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SSTC</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£2,400,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/grove-lane-camberwell') }}">Grove Lane, Camberwell</a>
                                    <p class="pro-desc">4 Bedroom Terraced House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house2.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SOLD</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,200,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/ferndene-road-herne-hill') }}">Ferndene Road, Herne Hill</a>
                                    <p class="pro-desc">5 Bedroom End of Terrace House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house3.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SOLD</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,200,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/finsen-road-ruskin-park') }}">Finsen Road, Ruskin Park</a>
                                    <p class="pro-desc">4 Bedroom Semi-Detached House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house4.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SOLD</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,200,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/grove-lane-london') }}">Grove Lane, London</a>
                                    <p class="pro-desc">6 Bedroom Terraced House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house5.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SSTC</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,200,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/finsen-road-denmark-hill') }}">Finsen Road, Denmark Hill</a>
                                    <p class="pro-desc">4 Bedroom Semi-Detached House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house6.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SOLD</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,175,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/lowden-road-herne-hill') }}">Lowden Road, Herne Hill</a>
                                    <p class="pro-desc">4 Bedroom Terraced House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house7.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SSTC</a></div>
                        </div>
                        <div class="tag_price listing_price">£1,120,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/romola-road') }}">Romola Road</a>
                                    <p class="pro-desc">5 Bedroom Terraced House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house8.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SOLD</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,100,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/kemerton-road-denmark-hill') }}">Kemerton Road, Denmark Hill</a>
                                    <p class="pro-desc">5 Bedroom End of Terrace House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                            <img src="{{ asset('images/sold_property/house9.jpg') }}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="tag tag_house"><a href="{{ url('buyers') }}">SOLD</a></div>
                            <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                        </div>
                        <div class="tag_price listing_price">£1,100,000</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location align-items-start justify-content-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <a class="pro-title" href="{{ url('property/denmark-hill-herne-hill') }}">Denmark Hill, Herne Hill</a>
                                    <p class="pro-desc">6 Bedroom Semi-Detached House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="load-more-btn"><a href="#">See More</a></div>
                    </div>
                </div>
            </div>-->

        </div>
        <div class="load_more">
            <div class="button ml-auto mr-auto"><a href="#">load more</a></div>
        </div>
    </div>
</div>
@include('includes.footer')
