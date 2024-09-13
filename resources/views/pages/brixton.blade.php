@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Brixton'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Brixton',
    'descriptions' => [
'We fell in love with Brixton long before big-chain estate agents moved in – enough for our CEO, Suzanne Vincent, to have moved to the area herself over 20 years ago.',
'Birthplace to the legendary David Bowie, and immortalised in Eddie Grant’s ‘Electric Avenue’, it’s not difficult to understand why Brixton has made its place on the map. Today, it’s one of the hottest areas to rent and buy in London.',
'Think Brixton could be the place for you? We can help you find your dream property – whether you’re on the hunt for a family home, a buy-to-let investment, or shared rental accommodation.'    
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Brixton',
    'paragraphs' => [
'What’s not to love about the electric, vibrant area of Brixton? Renowned for its diverse culture, bustling market place, independent boutique shops and excellent transport links, there isn’t much that Brixton fails to offer.',
'Brixton is just a short train journey into central London, with links via the Victoria Line, mainline rail services and numerous bus routes.',
'For both landlords and homeowners, Brixton has always been a reliable marketplace, with a stable stream of tenants and buyers keen to zone in on the action. '
    
],
    'buttonLink' => '#',
    'buttonText' => 'Book a valuation'
])


@include('partials.free-valuation', [
    'imagePath' => 'http://127.0.0.1:8000/images/about-us/logo.png',
    'imageAlt' => 'Company Logo',
    'heading' => 'Get a free property valuation',
    'paragraphs' => [
        'The London property market is hugely competitive, which means getting your pricing right and pitching to the right audience is key. Aim too high with your asking price, and your property can go stale by sitting too long on the portals. Aim too low, and you could talk yourself out of a considerable profit.',
        'Pricing your property is a balancing act, which is why getting an accurate, up-to-date, and research-based valuation is critical.',
        'Get in touch with our team to book your free valuation today.'
    ],
    'buttonLink' => '#',
    'buttonText' => 'BOOK NOW'
])


@include('partials.area-guides-section', [
    'heading' => 'Area guides',
    'subtitle' => 'We sell and let homes all across London\'s cityscape, discover the areas we cover'
])


@if(count($posts) > 0)
@include('partials.property-market', ['posts' => $posts])
@endif

@include('partials.logo-spinner')


@include('includes.footer')
