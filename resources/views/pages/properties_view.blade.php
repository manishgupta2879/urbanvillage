@include('includes.header')

<link rel="stylesheet" href="{{ asset('css/new_aboutus.css') }}">
<link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
<link rel="stylesheet" href="{{ asset('css//newhome.css') }}">
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/buyers.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $url_type_caps }}</li>
    </ol>
</div>

<div class="page-title-div"> Selling your property with Urban Village </div>
<div class="page-subtitle-div"> Discover why others choose to partner with us </div>

<!-- search-bar -->
<div class="container search-bar mt-3 mt-lg-5">
    <nav class="navbar navbar-light p-0">
        <div class="container-fluid p-0">
            <div class="Properties-for-sale d-flex justify-content-center align-items-center w-100">
                <div class="all-properties d-flex justify-content-center align-items-center">
                    <a href="">Properties for sale</a>
                </div>
                <div class="all-properties d-flex justify-content-center align-items-center">
                    <a href="">Properties for rent</a>
                </div>
                <div class="all-properties d-flex justify-content-center align-items-center">
                    <a href="">Book a valuation</a>
                </div>
            </div>
            <form class="w-100 d-flex flex-column flex-lg-row pt-4" id="searchForm" method="GET" action="">
                <div class="enter-location">
                    <label for="exampleInput" class="form-label">Enter a location</label>
                    <input class="form-control me-2 mb-0" type="search"
                        placeholder="Search for street, postcode or area" aria-label="Search" name="search"
                        value="{{ request()->query('search') ?? '' }}">
                </div>
                <div class="d-flex" style="gap: 10px;">
                    <div class="form-group d-flex align-items-center justify-content-evenly mb-0">
                        <input type="checkbox" id="html" name="rent" value="1"
                            {{ request()->query('rent') == 1 ? 'checked' : '' }} />
                        <label for="html" class="d-flex align-items-center mb-0">Rent</label>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-evenly">
                        <input type="checkbox" id="buy" name="buy" value="1"
                            {{ request()->query('buy') == 1 ? 'checked' : '' }} />
                        <label for="buy" class="d-flex align-items-center mb-0">Buy</label>
                    </div>
                </div>

                <button class="btn text-white d-flex align-items-center justify-content-center" type="submit">
                    @include('icons.search-icon') Search</button>
            </form>
        </div>
    </nav>
</div>

<div class="featured">

    <div class="container">

        @if (count($properties))

            <div class="row featured_row move_up_top-2">
                <div class="col-lg-12 mb-2">
                    <p>Showing {{ $properties->count() }} records out of {{ $properties->total() }}</p>
                </div>
                @foreach ($properties as $k => $property)
                    <div class="col-lg-4">
                        <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    <a href="{{ url('property/' . $property->propertyID . '/' . $property->slug) }}">
                                        <img src="{{ $property->image }}"
                                            alt="Urban Village Home - {{ $property->displayAddress }}">
                                    </a>


                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    {{-- <div class="tag tag_house"><a href="{{ url('property/'.$property->propertyID.'/'.$property->slug) }}">{{ $property->availability }}</a>
                        </div> --}}
                                    <!--<div class="tag tag_sale"><a href="listings.html">for sale</a></div>-->
                                </div>
                                <div class="tag_price listing_price">{{ $property->availability }}</div>

                            </div>

                            <div class="listing_content">
                                <div class="prop_location listing_location align-items-start justify-content-start">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sold-cards">
                                                <p>
                                                    <b class="text-dark">£ @if ($property->rent)
                                                            {{ number_format($property->rent) . '/' . $property->rentFrequency }}
                                                        @else
                                                            {{ number_format($property->price) }}
                                                        @endif
                                                    </b>
                                                    <br>
                                                    {{ str_limit($property->displayAddress, $limit = 25, $end = '...') }}
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="">
                                                        {{ $property->displayPropertyType }}
                                                    </p>
                                                    <div class="d-flex justify-content-between" style="gap: 9px;">
                                                        <div class="d-flex align-items-center"
                                                            style="gap: 4px; font-size: 14px">
                                                            {{ $property->propertyBedrooms }}<svg fill="#e228b3"
                                                                height="16px" width="16px" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 315.00 315.00"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                enable-background="new 0 0 315 315" stroke="#e228b3"
                                                                stroke-width="0.00315">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path
                                                                        d="m292.617,146.484h-3.105v-51.322c0-17.997-14.642-32.639-32.638-32.639h-198.748c-17.996,0-32.638,14.642-32.638,32.639v51.322h-3.106c-12.341,0-22.382,10.041-22.382,22.383v33.162c0,12.342 10.041,22.383 22.383,22.383h27.672v21.064c0,3.866 3.134,7 7,7s7-3.134 7-7v-21.064h186.891v21.064c0,3.866 3.134,7 7,7 3.866,0 7-3.134 7-7v-21.064h27.672c12.342,0 22.383-10.041 22.383-22.383v-33.162c-0.001-12.342-10.042-22.383-22.384-22.383zm-253.129-51.322c0-10.277 8.36-18.639 18.638-18.639h198.748c10.277,0 18.638,8.361 18.638,18.639v51.322h-8.974v-14.057c0-8.964-7.292-16.256-16.255-16.256h-71.754c-8.965,0-16.258,7.292-16.258,16.256v14.057h-9.543v-14.057c0-8.964-7.293-16.256-16.258-16.256h-71.753c-8.963,0-16.255,7.292-16.255,16.256v14.057h-8.974v-51.322zm136.783,51.322v-14.057c0-1.223 1.034-2.256 2.258-2.256h71.754c1.223,0 2.255,1.033 2.255,2.256v14.057h-76.267zm-113.809,0v-14.057c0-1.223 1.032-2.256 2.255-2.256h71.754c1.224,0 2.258,1.033 2.258,2.256v14.057h-76.267zm238.538,55.545c0,4.622-3.761,8.383-8.383,8.383h-270.234c-4.622,0-8.383-3.761-8.383-8.383v-33.162c0-4.622 3.761-8.383 8.383-8.383h270.234c4.622,0 8.383,3.761 8.383,8.383v33.162z">
                                                                    </path>
                                                                </g>
                                                            </svg></div>
                                                        <div class="d-flex align-items-center"
                                                            style="gap: 4px; font-size: 14px">
                                                            {{ $property->propertyBathrooms }}<svg height="16px"
                                                                width="16px" version="1.1" id="Layer_1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                viewBox="0 0 512 512" xml:space="preserve"
                                                                fill="#c733a2" stroke="#c733a2">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path style="fill:#ffffff;"
                                                                        d="M484.615,197.061v24.064c0,0.61,0,1.208-0.012,1.817c-0.966,92.403-76.184,167.011-168.806,167.011 h-205.42c-45.839,0-82.994-37.155-82.994-82.994V197.061L484.615,197.061L484.615,197.061z">
                                                                    </path>
                                                                    <path style="fill:#ffff;"
                                                                        d="M358.928,370.978H153.514c-45.839,0-83-37.16-83-83v-90.919H27.38v109.898c0,45.839,37.16,83,83,83 h205.414c32.59,0,63.018-9.244,88.821-25.24C390.082,368.793,374.761,370.978,358.928,370.978z">
                                                                    </path>
                                                                    <path style="fill:#ffffff;"
                                                                        d="M484.394,157.766H27.606c-10.481,0-18.979,8.497-18.979,18.979v1.337 c0,10.481,8.497,18.979,18.979,18.979h456.788c10.482,0,18.979-8.497,18.979-18.979v-1.337 C503.373,166.263,494.876,157.766,484.394,157.766z">
                                                                    </path>
                                                                    <path style="fill:#CCCCCC;"
                                                                        d="M78.285,177.413L78.285,177.413c0-10.851,8.796-19.647,19.647-19.647H28.274 c-10.851,0-19.647,8.796-19.647,19.647l0,0c0,10.851,8.796,19.647,19.647,19.647h69.657 C87.081,197.06,78.285,188.264,78.285,177.413z">
                                                                    </path>
                                                                    <polyline style="fill:#ffffff;"
                                                                        points="62.646,373.436 35.865,443.54 66.228,443.54 139.458,389.958 ">
                                                                    </polyline>
                                                                    <path style="fill:#CCCCCC;"
                                                                        d="M484.615,197.061v24.064c0,0.61,0,1.208-0.012,1.817H27.384v-25.882H484.615z">
                                                                    </path>
                                                                    <polyline style="fill:#ffffff;"
                                                                        points="351.467,384.972 431.5,443.535 461.866,443.535 424.903,346.749 424.796,346.487 ">
                                                                    </polyline>
                                                                    <path
                                                                        d="M512,177.413c0-15.59-12.683-28.274-28.274-28.274h-83.5c-4.765,0-8.627,3.863-8.627,8.627c0,4.765,3.863,8.627,8.627,8.627 h83.5c6.076,0,11.02,4.943,11.02,11.02c0,6.077-4.943,11.02-11.02,11.02H28.274c-6.076,0-11.02-4.943-11.02-11.02 c0-6.076,4.943-11.02,11.02-11.02h335.041c4.765,0,8.627-3.863,8.627-8.627c0-4.765-3.863-8.627-8.627-8.627H51.637V97.04 c0-11,8.949-19.951,19.951-19.951c11,0,19.95,8.949,19.95,19.951v1.786c0,4.765,3.863,8.627,8.627,8.627 c4.765,0,8.627-3.863,8.627-8.627V97.04c0-20.514-16.69-37.205-37.205-37.205c-20.514,0-37.204,16.69-37.204,37.205v52.099h-6.108 C12.684,149.139,0,161.822,0,177.413c0,12.251,7.834,22.703,18.753,26.621v43.037c0,4.765,3.863,8.627,8.627,8.627 s8.627-3.863,8.627-8.627v-41.383h439.985v9.503c0,18.385-2.98,36.444-8.858,53.675c-1.538,4.509,0.87,9.412,5.38,10.951 c0.923,0.315,1.862,0.465,2.786,0.465c3.589,0,6.941-2.257,8.165-5.845c6.492-19.028,9.783-38.961,9.783-59.245v-11.156 C504.167,200.116,512,189.664,512,177.413z">
                                                                    </path>
                                                                    <path
                                                                        d="M435.064,349.171c13.018-12.172,24.271-26.213,33.296-41.681c2.401-4.116,1.011-9.398-3.103-11.8 c-4.117-2.4-9.398-1.011-11.8,3.104c-14.389,24.66-35.01,45.334-59.635,59.788c-25.357,14.883-54.393,22.749-83.97,22.749h-196.55 c-42.62,0-77.293-34.673-77.293-77.293v-23.031c0-4.765-3.863-8.627-8.627-8.627s-8.627,3.863-8.627,8.627v23.03 c0,28.921,13.066,54.836,33.59,72.193L27.806,440.46c-1.012,2.651-0.657,5.632,0.954,7.97c1.61,2.339,4.268,3.735,7.107,3.735 h30.363c1.831,0,3.617-0.583,5.095-1.664l70.954-51.917h167.575c13.402,0,26.698-1.487,39.662-4.352l76.893,56.264 c1.478,1.081,3.262,1.664,5.095,1.664h30.364c2.839,0,5.496-1.396,7.105-3.735s1.966-5.319,0.954-7.97L435.064,349.171z M63.41,434.912H48.395l18.538-48.526c13.647,7.714,29.379,12.151,46.131,12.192L63.41,434.912z M434.319,434.908l-63.755-46.651 c11.087-3.882,21.808-8.819,31.991-14.795c6.444-3.782,12.629-7.962,18.543-12.483l28.236,73.93H434.319z">
                                                                    </path>
                                                                </g>
                                                            </svg></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- <p class="pro-desc">{{ $property->propertyBedrooms }} Bedroom, {{ $property->propertyStyle }}</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $properties->appends(request()->input())->links() }}
            </div>
        @else
            <div class="text-center move_up_top-2">
                <br />
                <p class="text-center">There are no properties listed for your search criteria</p><br />
                <h4 class="text-center"  style="font-size: 1.5rem;font-weight: 500;">Please click <a href="{{ url('property/' . $url_type) }}">here</a> to see all
                    our properties for sale or refine your search criteria.</h4>
            </div>
        @endif
    </div>
</div>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        var searchInput = document.getElementById('searchInput');
        searchInput.value = searchInput.value.replace(/\s+/g, '+');
    });
</script>
@include('includes.footer')
