@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/buyers.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $url_type_caps }}</li>
    </ol>
</div>

@include('includes.section_search')
<div class="featured">
    <div class="container">
        
        @if(count($properties))
        <div class="row featured_row move_up_top-2">
            @foreach($properties AS $k => $property)
                <div class="col-lg-4">
                    <div class="listing">
                        <div class="listing_image">
                            <div class="listing_image_container">
                                <a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">
                                    <img src="{{ Voyager::image($property->image) }}" alt="Urban Village Home - {{ $property->displayAddress }}">
                                </a>
                            </div>
                            <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="tag tag_house"><a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->availability }}</a></div>
                                <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                            </div>
                            <div class="tag_price listing_price">£ @if($property->rent) {{ number_format($property->rent).'/'.$property->rentFrequency }} @else {{ number_format($property->price) }} @endif</div>
                        </div>
                        <div class="listing_content">
                            <div class="prop_location listing_location align-items-start justify-content-start">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/icon_4_large.png') }}" alt="Icon Image">
                                    </div>
                                    <div class="col-md-10">
                                        <a class="pro-title" href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ str_limit($property->displayAddress, $limit = 25, $end = '...') }}</a>
                                        <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="load_more">
            <div class="button ml-auto mr-auto">{{ $properties->appends(request()->input())->links() }}</div>
        </div>
        @else
            <div class="text-center move_up_top-2">
                <br/>
                <p class="text-center">There are no properties listed for your search criteria</p><br/>
                <h4 class="text-center">Please click <a href="{{ url('property/'.$url_type) }}">here</a> to see all our properties for sale or refine your search criteria.</h4>
            </div>
        @endif
    </div>
</div>

@include('includes.footer')
