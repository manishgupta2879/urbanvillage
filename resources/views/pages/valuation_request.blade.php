@include('includes.header')
<style type="text/css">
    label{
        float: left;
    }
</style>
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/valuation-request.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Valuation Request</li>
    </ol>
</div>

<!-- Contact -->
<div class="contact">
    <div class="container">
        <div class="row move_up_top-2">
            <div class="col-12">
                <div class="section_title_container ">
                    <br/><br/>
                    <h1 class="main-title">Valuation Request</h1>
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
                        <div class="row">
                            <div class="col-lg-6 contact_col">
                                <div class="contact_form_container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Name</label>
                                            <input type="text" class="contact_input" name="name" placeholder="Full Name" required="required">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Email</label>
                                            <input type="email" class="contact_input" name="email" placeholder="Your e-mail" required="required">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Phone</label>
                                            <input type="text" class="contact_input" name="phone" placeholder="Phone number" required="required">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Address</label>
                                            <input type="text" class="contact_input" name="address" placeholder="Address">
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
                                        <div class="col-lg-12">
                                            <label>Requested Preferred Times</label>
                                            <input type="text" class="contact_input" name="preferr_date" value="" id="datetimepicker"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Message</label>
                                            <textarea class="contact_textarea contact_input" name="body_text" placeholder="Message"></textarea>
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
