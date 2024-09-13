@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/community.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Community Partner</li>
    </ol>
</div>

<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <div class="col-lg-12 intro_col">
                <div class="section_title_container">
                    <h1 class="main-title">Community Partnership</h1>
                    <p>We are Urban village homes limited</p>
                    <div class="header_title_border"></div>
                </div>
                <div class="intro_text">
                    <h5 style="text-align:justify;">We love the local community and have donated to local schools and charities, including Ruskin Park paddling pool and seasonal fetes.</h5>
                </div>
                <!--<div class="intro_text">
                    <h4>Local Community Partner!</h4>
                    <p>Urban Village have teamed up with Trees for Cities and plant a tree for every property we sell.</p>
                    <img src="{{ asset('images/logo/trees-for-cities.jpg') }}" alt="" />
                </div>-->
            </div>
            
            <div class="col-lg-6 intro_text">
                <img src="{{ asset('images/pool_new.jpeg') }}" style="width:100%">
            </div>
            
            <div class="col-lg-6 intro_col">
                <div class="intro_text">
                    <p>Suzanne and Urban Village have been instrumental in working with Lambeth Parks and local community fundraising to secure a much needed renovation of the Ruskin Park Paddling pool. The refurbishment, costing around £85,000 was completed in 2022. Suzanne and Urban Village have been generous donators of both time and money to the Paddling Pool campaign since Lambeth were unable to keep the much loved asset going and closed in 2017.</p>
                    <p>Urban Village have been the main company sponsor and the team have given much of their time to volunteer for the day to day running of the pool. It’s great to see that the renovation has been a success and the pool looks so inviting!</p>
                </div>
            </div>
            
            <div class="col-lg-6 intro_col">
                <div class="intro_text">
                    <p>In 2019 Suzanne at Urban Village commissioned and paid for talented artists to create an urban mural in Ruskin Park to cover over what used to be a wall covered in random graffiti. The mural is reflecting day to day Park life.</p>
                </div>
            </div>
            
            <div class="col-lg-6 intro_text">
                <img src="{{ asset('images/community-1.jpg') }}" style="width:100%">
            </div>
            
            <div class="col-lg-6 intro_text">
                <img src="{{ asset('images/bikes.jpeg') }}" style="width:100%">
            </div>
            
            <div class="col-lg-6 intro_col">
                <div class="intro_text">
                    <p>You’ll see our agents attending viewings and valuations on our eye catching and environmentally friendly bicycles. Not only a great way to get around, it’s much easier than navigating road closures and finding a parking space. A much easier way to ensure that we arrive on time to all appointments and don’t have the stresses that traffic can bring!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br/>
@include('includes.footer')
