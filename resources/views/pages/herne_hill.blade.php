@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Herne Hill'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Herne Hill ',
    'descriptions' => [
        'Whether you’re on the hunt for a family home, a first house or a lively hub just outside of central London – there’s so much happening in Herne Hill. ',
        'Nestled amongst the tall redbrick Edwardian properties is a lively village centre with an abundance of friendly pubs and great eateries. Home to an array of independent food shops, artisan delis, fashion boutiques, bookstores and chemists, Herne Hill makes the perfect location for those wanting a blend of city and country village life.',
        'But don’t just take our word for it. Browse our Herne Hill properties below.'
    ],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'path/to/your/image.jpg',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Herne Hill',
    'paragraphs' => [
        'Apart from the large swathe of artisan shops and boutiques, Herne Hill is host to a charming Sunday market, with copious amounts of stalls offering local produce as well as arts and crafts and other trinkets.',
        'It is also located just outside of Brockwell Park, offering ample green space and sports facilities for local residents to enjoy at all times of year.',
        'With such a strong community vibe and great transport links, it’s easy to see why properties in Herne Hill don’t stay on the market for long. That’s why our team is focused on being fast and efficient – finding serious buyers and tenants and helping the best properties get seen by the right people. '
            ],
    'buttonLink' => '#',
    'buttonText' => 'Book a valuation'
])


@include('partials.free-valuation', [
    'imagePath' => 'camberwell-denmark-hill.png',
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
