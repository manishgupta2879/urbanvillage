@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Peckham</li>
    </ol>
</div>

<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <!-- Intro Content -->
            <div class="col-lg-6">
                <div class="intro_content">
                    <div class="section_title_container">
                    <br/><br/>
                        <h1 class="main-title">Peckham</h1>
                        <p>Estate And Letting Agent</p>
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
                    <iframe width="100%"  height="355" class="set-phone-height" src="https://player.vimeo.com/video/717875393" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <p>Mention you live in Peckham and watch the reaction you get.  Most likely it’s respect, bordering on envy. As attitudes towards Peckham have changed.
                            <br/><br/>Less Dell Boy market stall more trendy hipster hangout, Peckham has transformed into one of London’s coolest areas. Whether you’re sipping a cocktail in Frank’s café and enjoying the spectacular views, or experiencing the cutting edge culture available at the Bussey building, Peckham offers the very best of new and old London.
                            <br/><br/>Peckham’s popularity has something to do with its gorgeous Victorian houses with their big gardens and high ceilings.  Buyers with young families have flocked to the area, making the most of comparatively low property prices and enjoying the copious green spaces on their doorstep as well as the excellent connections and transport links to central London and the West End.  No longer an undiscovered secret its appeal remains strong and as an estate agency we constantly get requests from tenants looking to move to the area.
                            <br/><br/>A particular favourite for would-be-buyers in the area is Peckham Rye, with its villagey atmosphere and cool credentials. Peckham Rye offers wonderful housing options with a good number of well-proportioned Victorian properties all closely situated on and around Bellenden Rd.  Serving the area are plenty of independent boutiques and artisan stores for daytime shopping as well as an excellent selection of pubs and popular restaurants, bars and cafes where menus range from street food to fine dining.
                            <br/><br/>Peckham is a place where you can let your hair down and not care what anyone thinks, where weekends can be spent happily in the park with family or geared towards a night out with friends, where old and young live happily side by side and where cultural differences are explored and welcomed.  Whether you dress it up or down somethings about Peckham never change.  At its core it is fun, fuss-free and friendly.
                            <br/><br/>At Urban Village estate agency we are confident we can find the right tenant or buyer for your property in Peckham.  We know and love the area, we can match the right candidates to the right property and we will impress you with our speed and excellent customer service.
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
