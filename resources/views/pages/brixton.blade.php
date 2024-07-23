@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Brixton</li>
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
                        <h1 class="main-title">Brixton</h1>
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
<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top-3">
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="intro_text">
                        <p>We fell in love with Brixton well before big-chain estate agents moved in – enough for Suzanne Vincent, founder of Urban Village estate agency, to have moved in to the area herself 20 years ago. Birthplace to David Bowie (RIP) and immortalised in Eddie Grant’s ‘Electric Avenue’ (about the first market street in the UK to have electricity), it’s super cool!
                            <br/><br/>Brixton has seen gentrification on a grand scale – becoming one of the hottest areas to rent and buy in London. It also has excellent transport links into town via the Victoria line, mainline rail services and numerous bus routes.
                            <br/><br/>The covered market place by day is bustling with global food stalls and independent boutique shops, transforming at night into ‘Brixton Village’ an exciting, vibrant place to have a good value night out, sample the international cuisine and top cocktails. And this has been added to with ‘POP Brixton’ a pop up venue for bars, shops, restaurants and live music made from shipping containers that has become something of a permanent fixture.
                            <br/><br/>Inevitably there are some victims of the new Brixton and many feel that the very essence of the area is being lost. The pioneers who originally ‘made’ Brixton and stayed throughout the changing times are now themselves being forced out by crippling rent increases.  This has seen more chain-restaurants and shops moving in, changing the community at its heart. But its diversity is still very much there and no one can truly destroy the soul of Brixton.
                            <br/><br/>Events like Brixton Splash celebrate Brixton’s rich history; a large percentage of its population is made up of London’s Afro-Caribbean community, who run some of the best shops, cafes and venues in the capital. The annual Lambeth Country Show gets bigger every year gaining festival status, and Brixton is a big draw for music fans with Brixton Academy playing host to a diverse selection of bands and solo artists. Morleys and Brixton Wholefoods make Brixton a shopping destination as well as hot nightspot, so head on over!
                            <br/><br/>For landlords and homeowners Brixton is a reliable marketplace and there’s a good stream of tenants and buyers keen to zone in on the action.  Urban Village Estate Agency fits well with the Brixton scene as it appeals to all types of people and all types of property and is, at its core, an independent South East London business.  Our staff are local, loyal and down to earth with a passion for Brixton. We can let, sell, rent and buy properties, just get in touch.
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
