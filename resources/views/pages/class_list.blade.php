@include('includes.header')
<style type="text/css">
    label{
        float: left;
    }
</style>
<!--
<header class="header-area home-banner">
    <img src="{{ asset('images/banner/class_list.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Class List</li>
    </ol>
</div>

<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-6">
                <div class="section_title_container">
                    <h1 class="main-title">Class List</h1>
                </div>
                <div class="intro_content">
                    <div class="intro_text">
                        <p>Send your details to us, and we will donate to your preferred school once the the sale or letting is completed</p>
                    </div>
                </div>
            </div>

            <!-- Intro Image -->
            <div class="col-lg-6 intro_col">
                <div class="intro_image">
                    <div class="hot_deal">
                        <div>&nbsp;</div>
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
                        <form action="{{url('send-class-list-request')}}" method="post">
                            {{csrf_field()}}
                            <label for="fname">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name.." required />

                            <label for="lname">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email.." required />

                            <label for="lname">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="Your phone &nbsp;(Optional).." />

                            <label for="fname">Preferred School</label>
                            <input type="text" id="school" name="school" placeholder="Your preferred school.." />

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
                            <input type="submit" disabled id="sendNewSms" value="Submit" />
                        </form>
                    </div>
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
