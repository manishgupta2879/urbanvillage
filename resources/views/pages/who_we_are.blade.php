@include('includes.header')
    <!--
    <header class="header-area home-banner">
        <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
    </header>-->
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Who we are</li>
        </ol>
    </div>

	<!-- Intro -->
	<div class="intro">
		<div class="container">
			<div class="row row-eq-height move_up_top">
				<!-- Intro Content -->
				<div class="col-lg-6">
                    <div class="section_title_container">
                        <h3 class="main-title">We Are</h3>
                        <h1>Urban Village</h1>
                        <div class="header_title_border"></div>
                    </div>
					<div class="intro_content">
						<div class="intro_text para-justify">
                            <p>Urban Village are a dedicated team of property professionals who are deliberately non-stereotypical estate agents.</p>
                            <p>We use the best marketing tools and highly proactive sales techniques to achieve the best price for our customers.</p>
                            <p>Dedicated to 5 star service and customer satisfaction.  We offer a pleasant experience by absorbing all the stresses that property sales and rentals can bring.</p>
                            <p>We pride ourselves on fair and open fees, resulting in excellent value for money, therefore creating a good reputation. Our customers are happy to recommend us to their friends which also helps us to grow our client base with a personal touch.</p>
                            <p>​We advertise your property on Rightmove as a featured property, giving you additional marketing exposure. Marketing on Zoopla and Prime Location, in addition to our own website, The Guild of Property professionals.</p>
                        </div>
						<div style="margin-top: 20px;">
                                <img width="100%" class="img-responsive" src="{{ asset('images/logos_panel.jpg') }}" alt=""/>
                            <div class="intro_text para-justify">
                                <p>We advertise quarterly in a glossy Life regional magazine and a national magazine.</p>
                                <p>​We offer online social media marketing through Twitter, FaceBook and our fortnightly Ezine.</p>
                            </div>
                        </div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
                        <iframe width="100%" src="https://www.youtube.com/embed/34l5IkFe8Y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="com-iframe"></iframe>
                        <div class="para-center">
                            <script src="https://widget.reviews.co.uk/badge-ribbon/dist.js"></script>
                            <div id="badge-ribbon"></div>
                            <script>
                            	reviewsBadgeRibbon("badge-ribbon", {
                            		store: "urban-village-",
                            		size: "medium",
                            	});
                            </script>
                        </div>
                        <div class="intro_text">
                            <h3 align="center">Members of The Guild Of Property Professionals</h3>
                            <p class="para-justify">As members of the Guild of Property Professionals we are dedicated to ensuring that the sale of your home is simple, profitable and as timely as possible and that you secure a far better result.</p>
                            <p class="para-justify">We have access to the best marketing available and can deliver the widest possible exposure to your property. With local and regional magazine publications distributed every six weeks, a Park Lane London showroom ensuring visibility to the lucrative London and investor markets, plus a graphic design studio to create high quality property brochures – you can be sure that we are working harder to promote your property to the widest possible audience.</p>
                            <p class="para-justify">Alongside state-of-the-market IT intelligence systems we can pinpoint the market trends identifying when is the best time to sell your home in the shortest timescale and best possible price. We can share your property across the Guild of Property Professionals network online of over 800 other branches in the UK and promoting it on their website.</p>
                            <img width="100%" class="img-responsive" src="{{ asset('images/rotator_guild.jpg') }}" alt=""/>
                        </div>
                    </div>
				</div>
				
				<!--<div  style="margin-top: 40px;" class="col-lg-12 para-center">
                    <div class="section_title_container">
                        <h1 class="main-title"><em>safeagent</em> Client Money Protection Scheme</h1>
                        <p>Urban Village are proud to be members of: The Property Ombudsman redress scheme SAFE agent client money handling.</p>
                    </div>
                    <div class="intro_content">
                        <div style="margin-top: 20px;">
                            <img style="display: block; margin-left: auto; margin-right: auto; width: 50%;" class="img-responsive" src="{{ asset('images/safeagent_feb2022.jpg') }}" alt="safeagent Client Money Protection Scheme"/><br/>
                            <small>safeagent Client Money Protection Scheme Certified Agent</small>
                        </div>
                    </div>
                </div>
				
				<div  style="margin-top: 40px;" class="col-lg-12 para-center">
                    <div class="section_title_container">
                        <h1 class="main-title">Our Achievements!</h1>
                        <p>In a competitive market place, we are proud to have been awarded three awards in the past four years:</p>
                    </div>
                    <div class="intro_content">
                        <div class="intro_text">
                            <h4>2020 – Top 3% of Estate Agents in UK – Rightmove Property Academy</h4>
                            <h4>2019 – Sales - British Property Awards</h4>
                            <h4>2018 – Lettings - British Property Awards</h4>
                        </div>
                        <div style="margin-top: 20px;">
                            <img width="50%" class="img-responsive" src="{{ asset('images/beag_awards.jpg') }}" alt="BEAG Awards"/>
                            <br/>
                            <small>Best Estate Agent Guide (BEAG) Awards 2020 - Excellent Lettings</small>
                        </div>
                    </div>
                </div>-->

			</div>
		</div>
	</div>

<div class="hot logo-spinner move_up_top">
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
@include('includes.footer')
