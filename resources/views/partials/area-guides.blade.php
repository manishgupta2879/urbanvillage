    <style>
        .card-carousel h2 {
            color: #992785;
            font-size: 35px !important;
            margin-bottom: 15px;
        }

        .property-market-section {
            padding: 26px 0px 50px 0px !important;
        }

        .post-slide .post-img img {
            width: 100%;
            height: 250px;
            transform: scale(1, 1);
            transition: transform 0.2s linear;
        }

        .card-carousel {
            margin-top: 7% !important;
        }

        .card-carousel #customNext {
            position: absolute;
            left: 48%;
            bottom: -10px;
            background: transparent;
            border: none;
        }

        .post-slide {
            width: 400px !important;
            box-shadow: none;
        }

        .post-slide .post-img {
            position: relative;
            overflow: hidden;
            border-radius: 9px;
            margin: -12px 15px 8px 15px;
        }

        .post-slide .post-content {
            position: absolute;
            top: 36%;
            left: 21%;
            background-color: transparent;
            z-index: 30;
        }

        .post-slide .post-description {
            color: #fff !important;
        }

        .post-slide .post-date {
            color: #fff !important;
            font-size: 28px;
        }

        button:focus {
            outline: none !important;
            outline: none !important;
        }

        .card-carousel #customNext img {
            height: 54px !important;
        }

        .owl-carousel .owl-stage {
            display: flex !important;
            height: 301px !important;
        }

        .card-carousel p {
            font-size: 19px !important;
        }

        .post-img {
            position: relative;
            overflow: hidden;
        }

        .post-img img {
            display: block;
            width: 100%;
            height: auto;
        }
        .post-img::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(0 0 0 / 15%);
            opacity: 1;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        
    </style>
    <!-- card-carousel -->
    <div class="container-fluid card-carousel my-lg-5">
        <div class="row">
            <div class="d-flex flex-column justify-content-center align-items-center w-100">
                <h2 class="m-auto">Area guides</h2>
                <p class="py-2">We sell and let homes all across London's cityscape, discover the areas we cover</p>
            </div>
            <div class="col-md-12 mt-5">
                <div id="news-slider" class="owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">


                            <div class="owl-item cloned">
                                <div class="post-slide">
                                    <div class="post-img">
                                        <img src="/images/blog_2.jpg" alt="">
                                        <!-- <a href="asdf" class=""><i class="fa fa-link"></i></a> -->
                                    </div>
                                    <div class="post-content">
                                        <p class="post-description mb-0">
                                            <span class="post-date">Camberwell</span>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            var owl = $('#news-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>