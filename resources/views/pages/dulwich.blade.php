@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dulwich</li>
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
                        <h1 class="main-title">Dulwich</h1>
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
                        <h4>Dulwich Village</h4>
                        <p>If you’re looking for village charm, but don’t want to move out of London, Dulwich village holds the answer.  Just 17 minutes by train to London Bridge, it offers a leafy idyll without the commute.  Known for its wonderful park, fantastic art gallery and close proximity to outstanding schools*, it’s no surprise that Dulwich village is so popular amongst higher income families.  As you’d expect from an upmarket village, Dulwich has some wonderful boutique shops that sell everything you need and more, and excellent options for eating out, including Rocca, a family-friendly authentic Italian restaurant, Gail’s Bakery, and the ever-popular Pizza Express.  For fine-dining there is also Belair House, an impressive Georgian house, serving British cuisine that uses the best of seasonal produce.   Properties in Dulwich Village are highly sought after with good reason.   If this is the area for you and you see a property that you like, be prepared to act fast as it won’t stay on the market for long.</p>

                        <h4>East Dulwich</h4>
                        <p>East Dulwich has become one of the most desirable yet accessible places to live in South East London, with a large number of Victorian terraced properties making it popular amongst professionals and families.  As well as great schools* and excellent transport links in and out of London, East Dulwich is best known for the shops, bars and restaurants that run along Lordship Lane. From on-trend burgers at MEATLiquor to free range and organic meat from William Rose Butchers; from the latest films for all the family at the East Dulwich Picturehouse to cheering on Dulwich Hamlet FC from the terraces; from designer women’s and men’s fashion at Question Air to antiques, crafts and quirky “one-offs” at the North Cross Road Market on Fridays and Saturdays. East Dulwich has something for everyone and if you want to escape the hustle and bustle, nearby Peckham Rye Park and Common and Dulwich Park offer plenty of green space.</p>

                        <h4>West Dulwich</h4>
                        <p>West Dulwich is home to a diversity of residents, attracted by the intimate countryside feel of Dulwich Village and the more urban vibe of West Norwood, with the balance of shops, café’s and restaurants of Rosendale Road, Park Hall Road and Croxted Road in the middle. Here you can find the latest best sellers and rare editions in Dulwich Books before popping over the road to enjoy time at the Dulwich Trader.  Or for the keen gardener there’s Alleyn Park Garden Centre.  For meals out you’ll find hearty pies and pints at the Rosendale or traditional Italian cuisine at Da Porcini.  There’s also gourmet small batch coffee roasted at the Volcano Coffee Works .  West Dulwich is a hidden gem that offers the best of the city and the countryside in one postcode.</p>

                        <h4>North Dulwich</h4>
                        <p>Often referred to as the “North Dulwich triangle”, this area is essentially the Southwark half of Herne Hill and has the appeal of having the shops of Half Moon Lane and those of Dulwich Village on its doorstep.  With its own train station , trains run four times an hour to London Bridge, taking just 17 minutes.  Also home to JAGS Sports Club , a firm favourite amongst families interested in extra curricular activities for the kids and keeping fit in general.  It describes itself as the friendliest dual-use and community-led sports club in South East London.  Its ‘dual use’ is that during school hours it is reserved exclusively for the James Allen’s Girls School.  Which brings things neatly back to schools:</p>

                        <h4>*Schools</h4>
                        <p>Dulwich’s educational options bring in pupils from all over London.  With two state primary schools Dulwich Hamlet Junior School and Dulwich Village Infants School, a high achieving academy in Kingsdale Foundation School and the Charter School, an excellent state secondary school.  It is also home to three of London’s top independent schools: James Allen’s Girls’ School, Dulwich College and Alleyn’s.</p>

                        <p>When you weigh up all that Dulwich (in its entirety) has to offer, it’s little wonder it’s such a sought after address.</p>
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
