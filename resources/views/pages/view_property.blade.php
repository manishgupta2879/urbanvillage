@include('includes.header')
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/cover.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content text-center">
                    <div class="home_title"><h1>280 , London road, London SE1E 5M</h1></div>
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
                <div class="listing_image"><img src="{{ asset('images/listing.jpg') }}" alt=""></div>
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
                                <div class="tag_price-2 listing_price-2">£ 262 346</div>
                                <div class="listing_name"><h1>Home for sale</h1></div>
                                <div class="listing_location d-flex flex-row align-items-start justify-content-start">
                                    <img src="{{ asset('images/icon_1.png') }}" alt="">
                                    <span>280 , London road, London SE1E 5M</span>
                                </div>
                                <div class="listing_list">
                                    <ul>
                                        <li>Property ID: 643682</li>
                                        <li>Posted on: July 10, 2019</li>
                                    </ul>
                                </div>
                                <div class="prop_agent d-flex flex-row align-items-center justify-content-start">
                                    <div class="prop_agent_image"><img src="{{ asset('images/agent_1.jpg') }}" alt=""></div>
                                    <div class="prop_agent_name"><a>Admin</a></div>
                                </div>
                                <div class="prop_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="{{ asset('images/icon_2_large.png') }}" alt="">
                                            <div>
                                                <div>1234</div>
                                                <div>sq ft</div>
                                            </div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="{{ asset('images/icon_3_large.png') }}" alt="">
                                            <div>
                                                <div>2</div>
                                                <div>baths</div>
                                            </div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="{{ asset('images/icon_4_large.png') }}" alt="">
                                            <div>
                                                <div>5</div>
                                                <div>beds</div>
                                            </div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="{{ asset('images/icon_5_large.png') }}" alt="">
                                            <div>
                                                <div>2</div>
                                                <div>garages</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about_text" style="margin-top:-48px;">
                                <p>A rare and elegant Georgian townhouse, on one of the best Georgian terraces in London. One of the few on this sought after terrace with five storeys. Ample and flexible accommodation in beautiful condition with restored original Georgian features. There is a detached cottage at the rear of the garden with an integral garage, making this home very special. Attractive front and rear gardens and a wonderful view of St Giles Church from the front windows. A peaceful and charming place to live, in the midst of the eclectic delights of Camberwell, Denmark Hill and Peckham. Walking distance to Kings College Hospital & Ruskin Park. An enviable and sought after residence. </p>
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
                                <div class="listing_title"><h3>Features</h3></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li>2 car garages</li>
                                            <li>3 bedrooms</li>
                                            <li>heated floors</li>
                                            <li>contemporary architecture</li>
                                            <li>swimming pool</li>
                                            <li>exercise room</li>
                                            <li>formal entry</li>
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
                                            <img src="{{ asset('images/listing.jpg') }}" style="width:100%">
                                            <div class="text">Image 1</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">2 / 3</div>
                                            <img src="{{ asset('images/listing2.jpg') }}" style="width:100%">
                                            <div class="text">Image2</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">3 / 3</div>
                                            <img src="{{ asset('images/listing.jpg') }}" style="width:100%">
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4970.480883130478!2d-0.09067308408818421!3d51.472100735501456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876038035462195%3A0xc8cf8038633eb4be!2s9+Evesham+Walk%2C+Camberwell%2C+London+SE5+8SJ%2C+UK!5e0!3m2!1sen!2sus!4v1562950921377!5m2!1sen!2sus" style="max-width: 100%;" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" activee", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " activee";
    }
</script>
@include('includes.footer')
