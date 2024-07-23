@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Herne Hill</li>
    </ol>
</div>

<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top">
            <!-- Intro Content -->
            <div class="col-lg-6">
                <div class="intro_content">
                    <div class="section_title_container">
                    <br/><br/>
                        <h1 class="main-title">Herne Hill</h1>
                        <p>Estate And Letting Agent</p>
                        <div class="header_title_border"></div>
                    </div>
                    <div class="intro_text">
                        <p>Please click on the link below and if you have a local business you love and would like it to feature in one of our guides; give us a shout at info@urbanvillagehomes.com</p>
                        <br/>
                        <ul>
                            <li><i class="fa fa-circle color-green"></i>  Exceptional and friendly service</li>
                            <li><i class="fa fa-circle color-green"></i>  Committed to achieving the best price</li>
                            <li><i class="fa fa-circle color-green"></i>  Clear and fair fees</li>
                            <li><i class="fa fa-circle color-green"></i>  Putting you in the driving seat</li>
                            <li><i class="fa fa-circle color-green"></i>  Community partnerships</li>
                        </ul><br/>
                        <a href="https://urban-village-homes.engage.epropservices.com" target="_blank" class="submit-btn">Book a Free Valuation</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 intro_col">
                <div class="intro_text">
                    <iframe width="100%" height="355" class="com-iframe set-phone-height" src="https://player.vimeo.com/video/717875393" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<!--
<div class="milestones">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-6 milestone_col">
                <h4 style="float: right; color:white;">PROPERTY SEARCH</h4>
                <p style="float: right; color:#7e7e7e;">search by area, road, post code or property type
                </p>
            </div>

            <div class="col-xl-7 col-md-6 milestone_col">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-xl-8">
                            <input type="text" class="contact_input" placeholder="Your name" required="required">
                        </div>
                        <div class="col-xl-4">
                            <input style="margin-left:-25px;" type="submit" class="contact_button" value="Buy" />
                            <input type="submit" class="contact_button" value="Rent" />
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>-->
<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top-3">
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="intro_text">
                        <p>There’s so much happening in Herne Hill. Nestled amongst the tall redbrick Edwardian properties is a lively village centre with an abundance of friendly pubs and great eateries. Close to the station you’ll find an array of independent food shops that include grocers, butchers, bakers and artisan delis. Shopping in the area has the family in mind with everything you need close at hand: independent fashion boutiques, book stores, a toy shop and bike shop not to mention several chemists, GP practices and a family friendly dental practice.
                            <br/><br/>A particular favourite for us at Urban Village Estate Agents is the Sunday market located in the semi-pedestrianised area next to the station. With copious stalls providing locally produced foods and arts and crafts it draws shoppers from all over South London. It is always difficult to resist the lure of what’s on offer, just as it’s always a fun day out.
                            <br/><br/>Herne Hill attracts a sporty and outdoorsy type due to the wonderful Brockwell Park with its many attractions. Home to the Brockwell Lido and Fusion gym, there is something here for everyone to get involved in, from the fitness fanatic to the fair-weather summer swimmer. The park also has a wonderful children’s play area, and summer paddling pool.
                            <br/><br/>The appeal of the area is such that properties in Herne Hill don’t stay on the market for long. Here Urban Village Estate Agents can help by being fast and efficient and able to spot the time wasters from the serious tenants and buyers. It helps that we know and love the area.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.section_form')

@if(count($posts) > 0)
<div class="container" style="margin-bottom:20px;">
    <div class="row">
        <div class="col-12">
            <div class="section_title_container">
                <h1 class="main-title">Realated Posts</h1>
                <p class="empty-pr">&nbsp;</p>
                <div class="header_title_border "></div>

                <br/><br/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            @if(count($posts) < 1)
                <h5 class="author">No Results Found</h5>
            @else
                <div class="row">
                @foreach($posts AS $k => $post)
                    <!-- Blog Post -->
                        <div class="col-sm-12 col-md-4">
                            <a href="{{ url('blog/view/'.$post->slug) }}">
                                <div class="card">
                                    <img class="card-img-top" src="{{ Voyager::image($post->image) }}" alt="UVH Blog - {{ $post->title }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-subtitle mb-2 text-muted">
                                            {{ date('d M Y', strtotime($post->created_at)) }} |
                                            in <a href="{{ url('blog/'.$post->category->slug) }}">{{ $post->category->name }}</a>
                                        </p>
                                        <a href="{{ url('blog/view/'.$post->slug) }}">
                                            <p class="card-text">{{ str_limit($post->excerpt, $limit = 250, $end = '...') }}</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(count($posts) > 4)
                <div class="page_nav">
                    <ul class="">
                        {{ $posts->links() }}
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endif

@include('includes.footer')
