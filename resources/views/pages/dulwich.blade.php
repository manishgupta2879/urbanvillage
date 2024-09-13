@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Dulwich'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Dulwich',
    'descriptions' => [
    'If you’re looking for village charm but don’t want to move out of London, Dulwich holds the answer. Just a 17-minute train to London Bridge, it offers a leafy idyll without the commute.',
    'Whether you’re on the lookout for a family home, buy-to-let investment or shared rental accommodation, we can help you find your dream property in Dulwich that meets all your criteria.'           
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'dulwich.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Dulwich',
    'paragraphs' => [
'It isn’t difficult to see why Dulwich is such a highly sought-after address. Known for its wonderful park, fantastic art gallery and close proximity to outstanding schools, the area caters to every need.',
'Properties in Dulwich rarely stay on the market for long. Something of a gastronomic heaven, it offers both family friendly favourites like Pizza Express to fine dining restaurants and artisan bakeries, and all within a short commute of central London.',
'If you’re looking for the perfect blend of quaint rural life and city excitement, Dulwich is the perfect place for you.'
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
