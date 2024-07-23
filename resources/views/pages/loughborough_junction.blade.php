@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Loughborough junction</li>
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
                        <h1 class="main-title">Loughborough Junction</h1>
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
                    <iframe width="100%" height="355" class="set-phone-height" src="https://player.vimeo.com/video/717875393" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <p>Estate Agents Loughborough Junction: Loughborough Junction is a great place to buy or rent property. No longer just a crossroads with a few shops and a train station, it is fast becoming a vibrant area of its own, with artist studios, an art-house cinema, pop-up cafes, a micro-brewery, horse riding stables and even a fresh produce farm.  As three of our team are local residents of the area we are very well placed to sell or let property in Loughborough Junction.
                            <br/><br/>Just minutes from the junction itself is the beautiful green space of the award winning Ruskin Park. with its children’s play area, general sports facilities (including tennis courts and playing fields), beautiful flower garden and much loved bandstand (in the summer it stages a regular programme of music with summer concerts!).  The Ruskin Park Café provides a warm welcome; serving delicious refreshments, including home-made cakes and organic ice-cream it’s a favourite amongst local families, dog walkers and visitors of King’s College hospital. Other highlights of the park include the wonderful Summer Fete hosted every year for the whole community by the FORP (Friends of Ruskin Park) and the huge paddling pool which is open over the summer months and sponsored this year by Urban Village Estate Agents, Estate Agents Loughborough Junction.
                            <br/><br/>Loughborough Junction train station offers exceptional transport links into central London with trains running regularly throughout the day and at weekends.  Within 10 minutes you could be walking through the doors of The Tate Modern on the South Bank or in 20 minutes checking in at the Eurostar. And the delights of Herne Hill are only a 2 minute train journey the other way.  Local buses go to Shoreditch in the east, south to Dulwich and Lewisham or if you just need to pop to Brixton to the market or catch the tube it is only a 5 minute journey.
                            <br/><br/>LJ, as it is referred to locally, has an active and creative community with LJAG ( Loughborough Junction Action Group) along with Lambeth Council heading a master plan aimed at further regenerating the area, with plans for the arches to be developed and more space given to pedestrian walkways, shops and cafes. In the evening why not head down to The Junction Pub on Coldharbour Lane for one of their regular jazz nights and savour their good food and locally brewed ale. The Cambria Bar and Kitchen a little further up the hill is a great option for Sunday lunch with the family or a quiet drink in the pub garden with friends. And Brixton and Camberwell are both within easy walking distance at opposite ends of Coldharbour lane, both offering fantastic options for café culture and fun, foody nights out.
                            <br/><br/>It’s clear to us at Urban Village Estate Agents why in the last couple of years young people and specifically those with young families are choosing to buy or rent in the area.  There is something for everyone: a warm and friendly community that buzzes with creativity; great outdoor spaces; good schools and an excellent choice of properties. We have earmarked Loughborough Junction as a key up-and-coming place to live. Estate Agents Loughborough Junction
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
