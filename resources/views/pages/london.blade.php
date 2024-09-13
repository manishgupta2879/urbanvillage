@include('includes.header')
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/cover.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content text-center">
                    <div class="home_title"><h1>Poplar Road, London</h1></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="listing_container">
    <div class="container">
        <div class="row" >
            <div class="col" style="margin-top: 55px;">
                <!-- Image -->
                <div class="listing_image"><img style="width:100%;" src="{{ asset('images/property/house1.jpg') }}" alt=""></div>
                <!-- Tabs -->
                <div class="listing_tabs d-flex flex-row align-items-start justify-content-between flex-wrap">

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_1" name="listing_tabs" checked>
                        <label for="tab_1"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/house.svg') }}" class="svg" alt=""></div>
                            <span>open house</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_2" name="listing_tabs">
                        <label for="tab_2"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/houses.svg') }}" class="svg" alt=""></div>
                            <span>features</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_3" name="listing_tabs">
                        <label for="tab_3"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/house2.svg') }}" class="svg" alt=""></div>
                            <span>photos</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_4" name="listing_tabs">
                        <label for="tab_4"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/camera.svg') }}" class="svg" alt=""></div>
                            <span>video</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_5" name="listing_tabs">
                        <label for="tab_5"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/directions.svg') }}" class="svg" alt=""></div>
                            <span>nearby amenities</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_6" name="listing_tabs">
                        <label for="tab_6"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/location.svg') }}" class="svg" alt=""></div>
                            <span>location</span>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab">
                        <input type="radio" id="tab_7" name="listing_tabs">
                        <label for="tab_7"></label>
                        <div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                            <div class="tab_icon"><img src="{{ asset('images/contract.svg') }}" class="svg" alt=""></div>
                            <span>contact</span>
                        </div>
                    </div>
                </div>

                <!-- About -->
                <div class="about">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="property_info">
                                <div class="tag_price-2 listing_price-2">£3,200pcm</div>
                                <div class="listing_location align-items-start justify-content-start">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                        </div>
                                        <div class="col-md-10">
                                            <a class="pro-title" href="{{ url('property/poplar-road-london') }}">Poplar Road, London</a>
                                            <p class="pro-desc">4 Bedroom Terraced House</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="about_text" style="margin-top:-98px;">
                                <p>Stunning Victorian terrace house. Walking distance to Herne Hill, Brockwell Park and Lido, farmer's market, Loughborough junction station and Brixton tube. Beautifully presented and extended with large kitchen / breakfast room and loft en suite. A further three bedrooms and bathroom on the first floor (the smallest bedroom is small, just about fit a double). Double reception and pretty rear garden. Residents permit parking. Available 12th June, unfurnished. Read more</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="listing_features">
                                <div class="listing_title"><h3>Contact Agent</h3></div>
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
                        <div class="col-lg-3">
                            <div class="listing_features">
                                <div class="listing_title"><h3>Property At A Glance</h3></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li>Victorian Terrace</li>
                                            <li>Four bedrooms</li>
                                            <li>Double reception room</li>
                                            <li>Kitchen diner</li>
                                            <li>Pretty decked garden</li>
                                            <li>Immaculate</li>
                                            <li>Two bathrooms</li>
                                            <li>Herne Hill Farmers market</li>
                                            <li>Excellent transport links</li>
                                            <li>Available 12th June</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="listing_video">
                                <div class="listing_title"><h3>Property Photos</h3></div>
                                <div class="video_container d-flex flex-column align-items-center justify-content-center">
                                    <div class="slideshow-container">

                                        <div class="mySlides ">
                                            <div class="numbertext">1 / 3</div>
                                            <img src="{{ asset('images/property/1/1.jpg') }}" style="width:100%">
                                            <div class="text">Image 1</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">2 / 3</div>
                                            <img src="{{ asset('images/property/1/2.jpg') }}" style="width:100%">
                                            <div class="text">Image2</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">3 / 3</div>
                                            <img src="{{ asset('images/property/1/3.jpg') }}" style="width:100%">
                                            <div class="text">Image3</div>
                                        </div>

                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    </div>
                                    <br>

                                    <div style="text-align:center">
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        <span class="dot" onclick="currentSlide(2)"></span>
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                    </div>
                                <!--
                                    <img src="{{ asset('images/video.jpg') }}" alt="">
                                    <div class="video_button"><a class="youtube" href="https://www.youtube.com/embed/IV3ueyrp5M4?autoplay=1"><i class="fa fa-play" aria-hidden="true"></i></a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-md-12" style="margin-top:-45px; ">
                                <div class="listing_title"><h3>EPC, Floorplans & Property Tour</h3></div>
                                <br/><br/>
                            </div>

                            <!-- Service -->
                            <div class="col-xl-4 col-md-6">
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
                            </div>

                            <!-- Service -->
                            <div class="col-xl-4 col-md-6">
                                <div class="service">
                                    <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="service_title"><h3>Additional Media</h3></div>
                                    </div>
                                    <div class="service_text">
                                        <p>Brochure</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service -->
                            <div class="col-xl-4 col-md-6">
                                <div class="service">
                                    <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="service_title"><h3>Additional Media</h3></div>
                                    </div>
                                    <div class="service_text">
                                        <p>Brochure</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="service">
                                    <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="service_title"><h3>Floor Plan</h3></div>
                                    </div>
                                    <div class="service_text">
                                        <p>Grove Lane, Camberwell</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service">
                                    <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="service_title"><h3>Floor Plan</h3></div>
                                    </div>
                                    <div class="service_text">
                                        <p>Grove Lane, Camberwell</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service">
                                    <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="service_title"><h3>Floor Plan</h3></div>
                                    </div>
                                    <div class="service_text">
                                        <p>Grove Lane, Camberwell</p>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9943.140821858537!2d-0.101199!3d51.4621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDI3JzQzLjYiTiAwwrAwNicwNC4zIlc!5e0!3m2!1sen!2sus!4v1563437317461!5m2!1sen!2sus" style="max-width: 100%;" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@include('includes.footer')
