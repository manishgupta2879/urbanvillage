@if(isset($url_type_caps) && $url_type_caps=="SALES")
<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <!-- Intro Content -->
            <div class="col-lg-12 move_up_top-2">
                <div class="intro_content">
                    <br/>
                    <a target="_blank" href="https://urban-village-homes.engage.epropservices.com/" class="btn cus-btn-2" style="background:#a82266 !important; border:#a82266 !important;"><b>Book a Free Valuation</b></a>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 4px;">
                <div class="sp-mk"></div>
            </div>
            <div class="col-lg-5 move_up_top">
                <div class="intro_content">
                    <a href="{{ url('mortgage-calculator') }}" class="btn cus-btn" style="color:white;">Mortgage Calculator</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="sp-mk"></div>
            </div>
            <div class="col-lg-5 move_up_top">
                <div class="intro_content">
                    <a href="{{ url('stamp-duty-calculator') }}" class="btn cus-btn" style="color:white;">Stamp Duty Calculator</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sp-mk"></div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="intro">
        <div class="container">
            <div class="row row-eq-height">
            </div>
        </div>
    </div>
@endif

<div class="search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_container">
                    <!--<div class="search_title">Search Criteria</div>-->

                    <div class="container-2">
                        <form action="{{url('property/' . $url_type )}}">
                            <div class="row">
                                <div class="col-lg-4">
                                    <input name="location" type="text" value="{{ isset($location_selected) ? $location_selected : '' }}" placeholder="E.g: 'Denmark Hill', 'SE5' or 'SE5 8EN'">
                                </div>
                                <div class="col-lg-2">
                                    <select name="price_min" class="select-css">
                                        <option value="">Min Price</option>
                                        @foreach($prices AS $k => $price)
                                            <option value="{{ $price }}" @if($price == $price_min_selected) selected="selected" @endif >£ {{ number_format($price) }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select name="price_max" class="select-css">
                                        <option value="" selected="selected">Max Price</option>
                                        @foreach($prices AS $k => $price)
                                            <option value="{{ $price }}" @if($price == $price_max_selected) selected="selected" @endif>£ {{ number_format($price) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select name="property_type" class="select-css">
                                        <option value="">Property Type</option>
                                        @foreach($property_types AS $k => $property_type)
                                            <option value="{{ ($k + 1) }}" @if(($k + 1) == $property_type_selected) selected="selected" @endif> {{ $property_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select name="bedroom_min" class="select-css">
                                        <option value="">Min Bedroom</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ ($i) }}" @if($i == $bedroom_min_selected) selected="selected" @endif > {{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="custom-container">Buy a Property
                                        <input id="buy_property" type="radio" @if($residence_selected == 'Sales' || $url_type == "Sales" || $url_type == "buyers" ) checked="checked" @endif value="Sales" name="residence"/>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-2">
                                    <label class="custom-container">Rent a Property
                                        <input id="rent_property" type="radio"  @if($residence_selected == 'Lettings' || $url_type == "Lettings" || $url_type == "tenants" ) checked="checked" @endif value="Lettings" name="residence"/>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-2">
                                    <select name="property_per_page" class="select-css">
                                        <option value="">Property per page</option>
                                        @foreach($per_page AS $k => $per_page_number)
                                            <option value="{{ $per_page_number }}" @if($per_page_number == $property_per_page_selected) selected="selected" @endif > {{ $per_page_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select name="order_by" class="select-css">
                                        @foreach($orders AS $k => $order)
                                            <option value="{{ $order['value'] }}" @if($order['value'] == $order_by_selected) selected="selected" @endif > {{ $order['display'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label class="custom-container"><span id="include_current_label"></span>
                                        @if($url_type == 'buyers' || $url_type == "Sales")
                                            <span id="script_include_current_label">Avoid Sold & Sold STC</span>
                                        @elseif($url_type == 'tenants' || $url_type == "Lettings")
                                            <span id="script_include_current_label">Avoid Let & Let Agreed</span>
                                        @endif
                                        <input type="checkbox" name="include_current" value="true" @if($include_current == 'true') checked="checked" @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-2">
                                    <button class="btn btn-primary cus-btn" type="submit" value="Submit">Start my Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    /* Customize the label (the container) */
    .custom-container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 10px;
        cursor: pointer;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .custom-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .custom-container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .custom-container input:checked ~ .checkmark {
        background-color: #ff006c;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .custom-container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .custom-container .checkmark:after {
        top: 8px;
        left: 8px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
</style>
<script>
    $('#buy_property').on('click change', function() {
        if (this.value == 'Sales') {
            document.getElementById('script_include_current_label').innerText = "";
            document.getElementById('include_current_label').innerText = 'Avoid Sold & Sold STC';
        }
    });
    $('#rent_property').on('click change', function() {
        if (this.value == 'Lettings') {
            document.getElementById('script_include_current_label').innerText = "";
            document.getElementById('include_current_label').innerText = 'Avoid Let & Let Agreed';
        }
    });
</script>
