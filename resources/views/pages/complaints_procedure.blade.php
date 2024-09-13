@include('includes.header')
<!--
<header class="header-area home-banner">
    <img src="{{ asset('images/banner/class_list.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Complaints Procedure</li>
    </ol>
</div>


<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <!-- Intro Content -->
            <div class="col-lg-12">
                <div class="section_title_container">
                        <h1 class="main-title">In-House Complaints Procedure</h1>
                    </div>
                <div class="intro_content">
                    <div class="intro_text">
                        <h4>Disclaimer</h4>
                        <p>We are committed to providing a professional service to all our clients and customers.  When something goes wrong, we need you to tell us about it.  This will help us to improve our standards.</p>
                        <p>If you have a complaint, please put it in writing, including as much detail as possible.  We will then respond in line with the timeframes set out below (if you feel we have not sought to address your complaints within eight weeks, you may be able to refer your complaint to the Property Ombudsman to consider without our final viewpoint on the matter).</p>
                        
						<h4>What will happen next?</h4>
						<ul style="margin-top: 10px;" class="list-unstyled">
							<li style="line-height: 100%;"><i class="fa fa-circle color-green"></i> We will send you a letter acknowledging receipt of you complaint within three working days of receiving it, enclosing a copy of this procedure.</li>
							<li style="line-height:100%;"><i class="fa fa-circle color-green"></i> We will then investigate your complaint. This will normally be dealt with by the office manager who will review your file and speak to the member of staff who dealt with you.</li>
							<li style="line-height:100%;"><i class="fa fa-circle color-green"></i> A formal written outcome of our investigation will be sent to you within 15 working days of sending the acknowledgement letter.</li>
							<li style="line-height: 100%;"><i class="fa fa-circle color-green"></i> If, at this stage, you are still not satisfied, you should contact us again and we will arrange for a separate review to take place by a senior member of staff.</li>
							<li style="line-height: 100%;"><i class="fa fa-circle color-green"></i> We will write to you within 15 working days of receiving your request for a review, confirming our final viewpoint on the matter.</li>
						</ul>
                        <p>If you remain dissatisfied, you can then contact The Property Ombudsman to request an independent review:</p>
						<address class="text-cente">
							<b>The Property Ombudsman Ltd</b><br/>
							Milford House<br/>
							43-45 Milford Street<br/>
							Salisbury<br/>
							Wiltshire<br/>
							SP1 2BP<br/><br/>
							01722 333 306<br/>
							www.tpos.co.uk
						</address>
						<h4>Please note the following:</h4>
                        <p>You will need to submit your complaint to The Property Ombudsman within 12 months of receiving our final viewpoint letter, including any evidence to support your case.</p>
                        <p>The Property Ombudsman requires that all complaints are addressed through this in-house complaints procedure, before being submitted for an independent review.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
