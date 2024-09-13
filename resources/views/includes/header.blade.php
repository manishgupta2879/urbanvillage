<!DOCTYPE html>
<html lang="en">
<head>
    <title>Urban Village Homes | {{ isset($page_title) ? $page_title : '' }}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'Urban Village Homes Estate Agents and Letting Agents in Camberwell, Brixton, SE5' }}" />
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Urban Village Homes Estate Agents and Letting Agents in Camberwell, Brixton, SE5' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://www.urbanvillagehomes.com" />
    <!-- Favicon -->
    <link href="{{ asset('favicon.png') }}" rel="icon" type="image/png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css?t=3') }}">
    <link rel="stylesheet" href="{{ asset('css/extra/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.cookiebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customs.css?t=5') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    @if(isset($css_files))
        @foreach($css_files AS $k => $css_file)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/'.$css_file.'.css') }}">
        @endforeach
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PJPJBXD');</script>
    <!-- End Google Tag Manager -->
    <!-- FB Tag -->
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Organization",
          "name" : "Urban Village Homes",
         "url" : "https://www.urbanvillagehomes.com/",
         "sameAs" : [
           "https://twitter.com/UVHomes1",
           "https://www.facebook.com/urbanvillagehomes",
           "https://www.instagram.com/urbanvillagehomes/"
           ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "121 Denmark Hill",
            "addressRegion": "London",
            "postalCode": "SE5 8EN",
            "addressCountry": "UK"
          }
        }
    </script>
    <!-- End FB Tag -->
    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '1874803346125046'); 
        fbq('track', 'PageView');
        </script>
        <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=1874803346125046&ev=PageView
        &noscript=1"/>
        </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJPJBXD"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



   

<style>
#stickyHeader-sticky-wrapper{
    z-index:10 !important;
}
</style>
    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between mt-3" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 200px; height: auto;">
                </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li> -->
                          
                            <li><a href="#" class="text-black">SALES <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 320 512" style="width: 35px; height:20px"><path  d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg></a>
                                <ul class="dropdown dropdown-3">
                                    <li><a href="{{ url('property/buyers') }}">Buyers</a></li>
                                    <li><a href="{{ url('sellers') }}">Sellers</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="text-black">LETTINGS  <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 320 512" style="width: 35px; height:20px"><path   d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg></a>
                                <ul class="dropdown dropdown-3">
                                    <li><a href="{{ url('property/tenants') }}">Tenants</a></li>
                                    <li><a href="{{ url('landlords') }}">Landlords</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('new-aboutus') }}"> About Us</a>
                                 
                            </li>
                            <li><a href="{{ url('blog') }}" class="text-black">BLOG</a></li>
                            <li><a href="{{ url('contact') }}" class="text-black">CONTACT</a></li>
                            <li>
                            <a href="https://urban-village-homes.engage.epropservices.com/" class="BOOK-VALUATION text-white ml-4">BOOK A VALUATION</a></li>
                        </ul>

                        <!-- Search Form -->
                        <div class="south-search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
