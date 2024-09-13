@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Loughborough Junction'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Loughborough Junction',
    'descriptions' => [
'Loughborough Junction is no longer just a crossroads with a few shops and a train station. Today, it has become a vibrant area of its own, with artist studios, pop-up cafes, horse-riding stables and even a fresh produce farm right on its doorstep.',
'With three of our team being local residents of the area, we know Loughborough Junction inside and out. Whether you are on the lookout for a family home, a buy-to-let investment or shared rental accommodation, we can help you find a property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
   'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Loughborough Junction',
    'paragraphs' => [
'There is something for everyone in Loughborough Junction. Looking for a warm and friendly community that buzzes with creativity? Want an abundance of outdoor spaces? Need good schools and family-friendly local amenities? Loughborough Junction has it all.',
'Just minutes from Loughborough Junction you will find the renowned Ruskin Park – housing a children’s play area, sports facilities, a beautiful flower garden and much-loved bandstand that becomes a firm favourite in the summer months.',
'Both Brixton and Camberwell are within easy walking distance, offering fantastic options for café culture and foody nights out, and thanks to the area’s excellent transport links, you can find yourself on the steps of the Tate Modern in just 10 minutes.',
'Between its village community atmosphere and proximity to central London, the area is hugely desirable for both tenants and buyers alike.'
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
