@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<style>
    label{
       float: left;
    }
</style>
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/contact.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
</div>
	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<div class="row move_up_top">
				<div class="col">
					<div class="text-center">
                        <p>Please feel free to contact us should you have any questions, queries or suggestions, and we would be happy to help.</p>
					</div>
				</div>
			</div>
			<div class="row contact_row">
				<!-- Contact - About -->
				<div class="col-lg-4 contact_col">
					<div class="logo"><img src="{{ asset('images/logo.jpg') }}"></div>
					<div class="contact_text">
						<p>Urban Village are a dedicated team of property professionals who are deliberately non-stereotypical estate agents.</p>
					</div>
                    <div class="contact_info">
                        <br/><br/>
                        <ul>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <div><img src="images/placeholder_2.svg" alt=""></div>
                                </div>
                                <span>121 Denmark Hill, SE5 8EN, London</span>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <div><img src="images/phone-call-2.svg" alt=""></div>
                                </div>
                                <span>020 3519 9121</span>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <div><img src="images/envelope-2.svg" alt=""></div>
                                </div>
                                <span> info@urbanvillagehomes.com</span>
                            </li>
                        </ul>
                    </div>
				</div>
                <div class="col-lg-8 contact_col">
                    <div class="contact_form_container">
                        <form action="{{url('send-contact-request')}}" class="contact_form text-center" method="post" id="contact_form">
                            {{csrf_field()}}
                            <div class="row">
                                @if(session('flash_success'))
                                    <div class="col-sm-12 col-md-12 col-xl-12">
                                        <div class="alert alert-success icons-alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled"></i>
                                            </button>
                                            <p><i class="fa fa-check-circle"></i> <strong>Success!!</strong> {!!   session('flash_success') !!}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="row" style="margin-top:25px;">
                                <div class="col-lg-4">
                                    <label>Department</label>
                                    <input type="text" class="contact_input" name="department" placeholder="Department">
                                </div>
                                <div class="col-lg-4">
                                    <label>Name</label>
                                    <input type="text" class="contact_input" name="name" placeholder="Your name" required="required">
                                </div>
                                <div class="col-lg-4">
                                    <label>Email</label>
                                    <input type="email" class="contact_input" name="email" placeholder="Your e-mail" required="required">
                                </div>
                                <div class="col-lg-4">
                                    <label>Phone</label>
                                    <input type="text" class="contact_input" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-lg-8">
                                    <label>Subject</label>
                                    <input type="text" class="contact_input" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <textarea class="contact_textarea contact_input" style="font-family: 'Montserrat', sans-serif;" name="body_text" placeholder="Message" required="required"></textarea>
                            <div class="row">
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

                            <button class="contact_button" disabled id="sendNewSms" >send message</button>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map_container">
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19884.065151126033!2d-0.10774696901959789!3d51.467186449662236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760386d75aee89%3A0x6a4e738bb3684b57!2s121+Denmark+Hill%2C+Camberwell%2C+London+SE5+8EN%2C+UK!5e0!3m2!1sen!2sus!4v1562595251900!5m2!1sen!2sus" width="100%" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
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
@include('includes.footer')
