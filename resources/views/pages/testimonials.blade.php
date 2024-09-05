@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/testimonial.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
    </ol>
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

<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-6">
                <div class="section_title_container">
                    <h1 class="main-title">Customer Testimonials</h1>
                    <p>We provide an honest and fair service for landlords.</p>
                    <div class="header_title_border"></div>
                </div>
                <div class="intro_content">
                    <div class="intro_text">
                        <h4 style="font-weight: lighter !important;">Sales, lettings and property management.</h4>
                        <h4 style="font-weight: lighter !important;;">We maximise results for our customers with our utmost care and attention to detail.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 intro_col">
                <div class="intro_content">
                    <div class="col-md-12">
                        <div class="video-3 mb-15">
                            <br/>
                            <div class="embed-responsive embed-responsive-16by9" style="height:290px; background: url('https://static.propertylogic.net/website/1515063856/screen_shot_2019-04-04_at_09.38.26.png') no-repeat center / cover">
                                <a onclick="getFunction()"  style="position: absolute; top:38%; left:45%" class="magnific-video"><i class="fa fa-play-circle" style="font-size: 55px; color: white"></i></a>
                            </div>
                        </div>
                        <!--<iframe title="vimeo-player" src="https://player.vimeo.com/video/328369211" width="100%" height="374" frameborder="0" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>
</div>


             <div class="intro">
                <div class="container">
                    <div class="row row-eq-height" style="margin-top:-75px;margin-bottom:-75px;">
                        <!-- Intro Content -->
                        <div class="col-lg-12">
                            <div class="intro_content">
                                <div class="intro_text">
                                    <div id="full-page-widget" style="width:100%;">
                                        <iframe src="https://widget.reviews.co.uk/vertical/widget?elementId=full-page-widget&version=1&&store=urban-village-&primaryClr=%23f47e27&layout=fullWidth&height=500&numReviews=21" frameborder="0" width="100%" style="min-width: 170px;" height="599"></iframe>
                                    </div>
                                </div>
                            </div>
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
</script>
@include('includes.footer')
