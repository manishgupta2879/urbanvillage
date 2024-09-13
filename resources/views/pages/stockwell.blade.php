@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Stockwell'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Stockwell',
    'descriptions' => [
'If it’s good enough for the likes of Vincent Van Gogh, David Bowie, Roger Moore, Will Self and Joanna Lumley, it’s good enough for us! Nestled in the borough of Lambeth in South West London, Stockwell has been home to a number of well-known faces. Its good transport links, fantastic local amenities and rich history make it a hugely popular area to live, and it’s easy to see why.',
'Whether you’re on the hunt for a family home, a buy-to-let investment, or shared rental accommodation, we can help you find your dream Stockwell property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Stockwell',
    'paragraphs' => [
'A diverse and vibrant area, Stockwell has been described as one of South London’s up-and-coming neighbourhoods. It’s home to a hot pot of highly rated restaurants, from Ethiopian to African, Peruvian and Mediterranean, as well as a number of celebrated cafes, bars, and pubs.',
'But if food isn’t one of your top criteria, Stockwell has plenty more to offer. With easy access to both the Victoria and Northern lines, it’s just a short journey from central London, and its close proximity to a range of high performing primary and secondary schools make it the perfect location for your next family home.',
'Slade Gardens and Larkhall Park are just a short walk away, leaving playgrounds, basketball and tennis courts and football pitches right on your doorstep.',
'Think Stockwell could be the place for you? Get in touch with our team to start your search.'
],
    'buttonLink' => '#',
    'buttonText' => 'Book a valuation'
])


@include('partials.free-valuation', [
    'imagePath' => 'http://127.0.0.1:8000/images/about-us/logo.png',
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
