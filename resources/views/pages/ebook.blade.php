@include('includes.header')
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content text-center">
                    <div class="home_title">Ebook</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="section_title_container">
                        <div class="section_title"><h3>Download Your Unmissable Guide To Finding Your Next Home</h3></div>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hot move_up_top">
    <div class="container">
        <div class="row hot_row row-eq-height move_up_top-2">
            <!-- Hot Deal Image -->
            <div class="col-lg-3">
                <div class="hot_image">
                    <img src="{{ asset('images/t.png') }}" alt="" />
                </div>
            </div>
            <!-- Hot Deal Content -->
            <div class="col-lg-9">
                <div class="hot_content">
                    <div class="hot_deal">
                        <div>
                            <ul>
                                <li><i class="fa fa-circle color-green2"></i> The inside track on the latest South East London hotspots: Herne Hill, Loughborough Junction, Camberwell, Peckham and Dulwich</li>
                                <li><i class="fa fa-circle color-green2"></i> Detailed information on transport links and commuter times</li>
                                <li><i class="fa fa-circle color-green2"></i> Where to find the best local cafes, restaurants and bars</li>
                                <li><i class="fa fa-circle color-green2"></i> Top local schools, services, sports facilities, green spaces</li>
                                <li><i class="fa fa-circle color-green2"></i> A clear guide to the intricacies of buying or renting</li>
                            </ul>
                            <hr/>
                        </div>
                        <form action="/">
                            <label for="fname">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name..">
                            <label for="lname">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email..">
                            <div style="float: left !important;">
                                <div class="col-lg-12 gdpr_block">
                                    <p class="gdpr_tick"> <input type="checkbox" name="privacy" value="terms"> By submitting this form you agree to the terms of our <a href="{{ url('privacy-policy') }}">Privacy Policy</a></p>
                                    <p class="gdpr_tick"><input  type="checkbox" name="marketing" value="marketing"> I would like to receive new events, invites and newsletters by email, from Urban Village Homes.</p><br>
                                </div>
                                <br/>
                            </div>
                            <input type="submit" value="Submit">
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('includes.footer')
