@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Denmark Hill'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Dulwich',
    'descriptions' => [
       'Denmark Hill – the place we call home. Our office has sat at the heart of Camberwell for some time now, meaning we know the area inside and out. We can advise you on all the best cafes, restaurants, local schools, and even the best properties.',
       'Whether you’re on the hunt for a family home, a buy-to-let investment or a shared rental accommodation, we can help you find the perfect property around Denmark Hill to meet your criteria.'
    ],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Denmark Hill',
    'paragraphs' => [
        'Denmark Hill is perfectly positioned for those seeking an inner-London postcode with easy access to the city centre, without sacrificing the open green spaces and community vibe.',
    'From period properties with large gardens to an abundance of luscious green parks like Ruskin Park, Burgess Park and more – Denmark Hill has something for everyone.',
'It is also home to a range of excellent schools and colleges, making it an ideal location for families or buy-to-let investors.',
'Thanks to the new Cross-Rail trainline, it’s just a short journey from central London, placing it right on the commuter belt for those working in city centre.',
'Think Denmark Hill could be the place for you? Get in touch with our team to start your search'

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
