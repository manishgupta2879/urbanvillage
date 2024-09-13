@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->

@include('partials.breadcrumb', ['currentPage' => 'Waterloo'])

@include('partials.content-image-section', [
    'subheading' => 'Estate & Letting Agents in',
    'mainHeading' => 'Waterloo',
    'descriptions' => [
'Combining old and new, local and international, cultural and commercial – Waterloo has come to typify some of the most enviable elements of London living.',
'With one turn down a residential street, you can be completely transported from a busy city to a quiet local community. Whether you are on the hunt for a family home, a buy-to-let investment or shared rental accommodation, we can help find your dream Waterloo property that meets all your criteria.'
],
    'saleLink' => '#',
    'rentLink' => '#',
    'videoLink' => 'https://www.youtube.com/embed/paW1T11FAZc'
])

@include('partials.love-denmark-hill-section', [
    'imagePath' => 'camberwell-denmark-hill.png',
    'imageAlt' => 'Denmark Hill Image',
    'heading' => 'Why we love Waterloo',
    'paragraphs' => [
'The beauty of Waterloo is in its ability to merge the local community feel with the convenience of a central London location. ',
'Just moments from the river, the area is home to numerous public gardens and green spaces, iconic theatres like the Old Vic, major attractions like the London Eye, and numerous restaurants and pubs that keep the area bustling.',
'Not to mention the fact that Waterloo is perfectly suited for commuters. You will find major train and tube stations just on your doorstep, as well as bus routes heading in every direction, and easy walks into the city centre with iconic views along the way.',
'Think Waterloo could be the place for you? Get in touch with our team to start your search.'
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
