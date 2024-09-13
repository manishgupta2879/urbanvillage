@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Peckham'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Peckham',
    'descriptions' => [
'Less Dell Boy market stall and more trendy hipster hangout, Peckham has transformed in recent years into one of London’s coolest areas. Its gorgeous Victorian houses, copious green spaces, vibrant nightlife and village-like atmosphere all make it a hugely desirable place to live – for both young and old.',
'Whether you’re on the hunt for a family home, buy-to-let investment or shared rental accommodation, we can help you find your dream Peckham property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Peckham',
    'paragraphs' => [
'Less Dell Boy market stall and more trendy hipster hangout, Peckham has transformed in recent years into one of London’s coolest areas. Its gorgeous Victorian houses, copious green spaces, vibrant nightlife and village-like atmosphere all make it a hugely desirable place to live – for both young and old.',
'Whether you’re on the hunt for a family home, buy-to-let investment or shared rental accommodation, we can help you find your dream Peckham property that meets all your criteria.'

],
    'buttonLink' => '#',
    'buttonText' => 'Book a valuation'
])


@include('partials.free-valuation', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Company Logo',
    'heading' => 'Get a free property valuation',
    'paragraphs' => [
'No longer an undiscovered secret, Peckham has quickly become one of the most popular locations for prospective buyers and tenants – and it isn’t difficult to see why.',
'Peckham Rye’s cool credentials and small town vibe offers wonderful housing options, a wide array of independent boutiques and an excellent selection of pubs and popular restaurants ranging from street food to fine dining. ',
'Paired with its easy access to transport links into central London and the West End, Peckham offers the best of village and city life, appealing to residents of all ages.',
'Think Peckham could be the place for you? Get in touch with our team to start your search.'

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
