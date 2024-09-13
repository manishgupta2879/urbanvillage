@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css//newhome.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Camberwell'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Camberwell ',
    'descriptions' => [
        'Camberwell is our home. Based on Denmark Hill, we know the area inside and out, arming our team with the local knowledge and market expertise to help you find your dream Camberwell property.',
        'Whether you’re on the lookout for a family home, buy-to-let investment or shared rental accommodation, Camberwell has a whole host of beautiful and conveniently located properties that are sure to meet your criteria.'
    ],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])



@include('partials.love-denmark-hill-section', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Camberwell',
    'paragraphs' => [
        'Thanks to the new Cross-Rail trainline near Denmark Hill, Camberwell is now firmly on the map for prospective buyers looking for an inner-London property and a fast journey into the city centre – and it’s easy to see why.',
        'Whilst Camberwell property prices have risen in recent years, they are still more affordable than some of the neighbouring areas and offer great value for money. From period properties with large gardens to an abundance of luscious green parks and excellent schools – Camberwell caters to everyone.',
        'Home to one of the world’s leading art institutions, a creative vibe permeates the area, and its café culture and lively restaurant scene make Camberwell a great choice for buy-to-let investors.',
        'Think Camberwell could be the place for you? Get in touch with our team to start your search.'
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



{{-- @include('partials.area-guides-section', [
    'heading' => 'Area guides',
    'subtitle' => 'We sell and let homes all across London\'s cityscape, discover the areas we cover'
]) --}}
@include('partials.area-guides')


@if(count($posts) > 0)
@include('partials.property-market', ['posts' => $posts])
@endif

@include('partials.logo-spinner')


@include('includes.footer')


