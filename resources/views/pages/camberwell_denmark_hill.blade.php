@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Camberwell And Denmark Hill</li>
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
                        <h1 class="main-title">Camberwell And Denmark Hill</h1>
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
                    <iframe width="100%" height="355" class="set-phone-height" src="https://www.youtube.com/embed/paW1T11FAZc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top-3">
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="intro_text">
                        <p>Thanks to the development of the Cross-Rail train line at nearby Denmark Hill, Camberwell is now fully on the map for buyers looking for affordable accommodation with an inner-London postcode and a fast journey into town.  With an abundance of Victorian and Georgian properties in the area the appeal is clear.  Although selling and letting prices in Camberwell have risen in recent years, it is still more affordable than the neighbouring areas of Dulwich, Herne Hill and Brixton giving residents good reason to feel smug.
                            <br/><br/>Why?  Because Camberwell offers great value for money whilst catering for all.  For young professional families, there is the appeal of period properties with large gardens, close to excellent schools in both the state and private sectors.  These include Lyndhurst Primary, St. Saviours Church of England Primary School, Bessemer Grange Primary School  and The Charter School.  This has built a friendly community of people who also consider themselves lucky for their proximity to excellent park life, with Ruskin Park and Burgess Park on their doorstep and Dulwich Park and Peckham Rye only a short distance away.
                            <br/><br/>Camberwell has also long been known for its art scene, with Camberwell College of Arts recognised as one of the world’s leading art institutions.  A creative vibe permeates the area and it has developed into a destination place for those seeking out cool bars and restaurants and an excellent night out.  There is also a good café culture during the day, ensuring that staff and visitors of Kings College Hospital and The Maudsley opposite are kept happy with lunch options.  Camberwell is also a great choice for buy-to-let investors, whose properties get snapped up by hospital staff and students alike.
                            <br/><br/>At Urban Village estate agency, we are ideally placed to help you with your Camberwell property search, whether it is for a family home, buy-to let investment or shared rental accommodation.  Camberwell is our home.  We know and love the area and we understand the market.  We are constantly selling and letting properties in and around Camberwell and we are confident that whatever your search requirements, we will be able to help.
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
