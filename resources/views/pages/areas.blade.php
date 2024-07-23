@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/about.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Areas</li>
    </ol>
</div>

<div class="intro">
    <div class="container">
        <div class="row row-eq-height move_up_top-2">
            <!-- Intro Content -->
            <div class="col-lg-12">
                <div class="section_title_container">
                    <br/><br/>
                        <h1 class="main-title">Areas</h1>
                        <p class="empty-pr">&nbsp;</p>
                        <div class="header_title_border header_title_border-sml"></div>

                </div>
                <div class="intro_content">
                    <div class="intro_text">
                        <p>At Urban Village estate agency, we are ideally placed to help you with your South London property search, whether it is for a family home, buy-to let investment or shared rental accommodation.
                            <br/><br/>We <strong>live</strong>, we <strong>work</strong> and we <strong>know</strong> South London it's our home. We love the area and we <strong>understand the market.</strong>
                            <br/>We are constantly selling and letting properties in and around the local area and we are confident that whatever your search requirements, we will be able to help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map_section container_reset">
    <div class="container">
        <div class="row row-xl-eq-height">

            <!-- Map -->
            <div class="col-xl-7 order-xl-1 order-2">
                <div class="map">
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <script src="https://maps.googleapis.com/maps/api/js?key=&extension=.js"></script><script src="https://cdn.mapkit.io/v1/infobox.js"></script>
                            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet" />
                            <link href="https://cdn.mapkit.io/v1/infobox.css" rel="stylesheet" /><script>
                                google.maps.event.addDomListener(window, 'load', init);
                                var map, markersArray = [];

                                function bindInfoWindow(marker, map, location) {
                                    google.maps.event.addListener(marker, 'click', function() {
                                        function close(location) {
                                            location.ib.close();
                                            location.infoWindowVisible = false;
                                            location.ib = null;
                                        }

                                        if (location.infoWindowVisible === true) {
                                            close(location);
                                        } else {
                                            markersArray.forEach(function(loc, index){
                                                if (loc.ib && loc.ib !== null) {
                                                    close(loc);
                                                }
                                            });

                                            var boxText = document.createElement('div');
                                            boxText.style.cssText = 'background: #fff;';
                                            boxText.classList.add('md-whiteframe-2dp');

                                            function buildPieces(location, el, part, icon) {
                                                if (location[part] === '') {
                                                    return '';
                                                } else if (location.iw[part]) {
                                                    switch(el){
                                                        case 'photo':
                                                            if (location.photo){
                                                                return '<div class="iw-photo" style="background-image: url(' + location.photo + ');"></div>';
                                                            } else {
                                                                return '';
                                                            }
                                                            break;
                                                        case 'iw-toolbar':
                                                            return '<div class="iw-toolbar"><h3 class="md-subhead">' + location.title + '</h3></div>';
                                                            break;
                                                        case 'div':
                                                            switch(part){
                                                                case 'email':
                                                                    return '<div class="iw-details"><i class="material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span><a href="mailto:' + location.email + '" target="_blank">' + location.email + '</a></span></div>';
                                                                    break;
                                                                case 'web':
                                                                    return '<div class="iw-details"><i class="material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span><a href="' + location.web + '" target="_blank">' + location.web_formatted + '</a></span></div>';
                                                                    break;
                                                                case 'desc':
                                                                    return '<label class="iw-desc" for="cb_details"><input type="checkbox" id="cb_details"/><h3 class="iw-x-details">Details</h3><i class="material-icons toggle-open-details"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><p class="iw-x-details">' + location.desc + '</p></label>';
                                                                    break;
                                                                default:
                                                                    return '<div class="iw-details"><i class="material-icons"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span>' + location[part] + '</span></div>';
                                                                    break;
                                                            }
                                                            break;
                                                        case 'open_hours':
                                                            var items = '';
                                                            if (location.open_hours.length > 0){
                                                                for (var i = 0; i < location.open_hours.length; ++i) {
                                                                    if (i !== 0){
                                                                        items += '<li><strong>' + location.open_hours[i].day + '</strong><strong>' + location.open_hours[i].hours +'</strong></li>';
                                                                    }
                                                                    var first = '<li><label for="cb_hours"><input type="checkbox" id="cb_hours"/><strong>' + location.open_hours[0].day + '</strong><strong>' + location.open_hours[0].hours +'</strong><i class="material-icons toggle-open-hours"><img src="//cdn.mapkit.io/v1/icons/keyboard_arrow_down.svg"/></i><ul>' + items + '</ul></label></li>';
                                                                }
                                                                return '<div class="iw-list"><i class="material-icons first-material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><ul>' + first + '</ul></div>';
                                                            } else {
                                                                return '';
                                                            }
                                                            break;
                                                    }
                                                } else {
                                                    return '';
                                                }
                                            }

                                            boxText.innerHTML =
                                                buildPieces(location, 'photo', 'photo', '') +
                                                buildPieces(location, 'iw-toolbar', 'title', '') +
                                                buildPieces(location, 'div', 'address', 'location_on') +
                                                buildPieces(location, 'div', 'web', 'public') +
                                                buildPieces(location, 'div', 'email', 'email') +
                                                buildPieces(location, 'div', 'tel', 'phone') +
                                                buildPieces(location, 'div', 'int_tel', 'phone') +
                                                buildPieces(location, 'open_hours', 'open_hours', 'access_time') +
                                                buildPieces(location, 'div', 'desc', 'keyboard_arrow_down');

                                            var myOptions = {
                                                alignBottom: true,
                                                content: boxText,
                                                disableAutoPan: true,
                                                maxWidth: 0,
                                                pixelOffset: new google.maps.Size(-140, -40),
                                                zIndex: null,
                                                boxStyle: {
                                                    opacity: 1,
                                                    width: '280px'
                                                },
                                                closeBoxMargin: '0px 0px 0px 0px',
                                                infoBoxClearance: new google.maps.Size(1, 1),
                                                isHidden: false,
                                                pane: 'floatPane',
                                                enableEventPropagation: false
                                            };

                                            location.ib = new InfoBox(myOptions);
                                            location.ib.open(map, marker);
                                            location.infoWindowVisible = true;
                                        }
                                    });
                                }

                                function init() {
                                    var mapOptions = {
                                        center: new google.maps.LatLng(51.459676252148626,-0.09138211987306022),
                                        zoom: 13,
                                        gestureHandling: 'auto',
                                        fullscreenControl: false,
                                        zoomControl: true,
                                        disableDoubleClickZoom: true,
                                        mapTypeControl: true,
                                        mapTypeControlOptions: {
                                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                                        },
                                        scaleControl: true,
                                        scrollwheel: true,
                                        streetViewControl: true,
                                        draggable : true,
                                        clickableIcons: false,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    }
                                    var mapElement = document.getElementById('mapkit-5998');
                                    var map = new google.maps.Map(mapElement, mapOptions);
                                    var locations = [
                                        {"title":"Herne Hill","address":"Herne Hill, London, UK","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":51.4545465,"lng":-0.0966607999999951,"vicinity":"Herne Hill, London, UK","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"f":"px","b":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Brixton","address":"Brixton, London, UK","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":51.4612794,"lng":-0.11561480000000302,"vicinity":"Brixton, London, UK","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"f":"px","b":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Peckham","address":"Peckham, London SE15 5JR, UK","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":51.474191,"lng":-0.06913699999995515,"vicinity":"Peckham, London SE15 5JR, UK","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"f":"px","b":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Dulwich","address":"Dulwich, London SE21 7ER, UK","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":51.441868,"lng":-0.08480499999996027,"vicinity":"Dulwich, London SE21 7ER, UK","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"f":"px","b":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Loughborough Junction","address":"United Kingdom","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":51.4660641,"lng":-0.10218399999996564,"vicinity":"United Kingdom","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"f":"px","b":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Camberwell","address":"Camberwell, London, UK","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":51.4740846,"lng":-0.09301370000002862,"vicinity":"Camberwell, London, UK","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"f":"px","b":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}}
                                    ];
                                    for (i = 0; i < locations.length; i++) {
                                        marker = new google.maps.Marker({
                                            icon: locations[i].marker,
                                            position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
                                            map: map,
                                            title: locations[i].title,
                                            address: locations[i].address,
                                            desc: locations[i].desc,
                                            tel: locations[i].tel,
                                            int_tel: locations[i].int_tel,
                                            vicinity: locations[i].vicinity,
                                            open: locations[i].open,
                                            open_hours: locations[i].open_hours,
                                            photo: locations[i].photo,
                                            time: locations[i].time,
                                            email: locations[i].email,
                                            web: locations[i].web,
                                            iw: locations[i].iw
                                        });
                                        markersArray.push(marker);

                                        if (locations[i].iw.enable === true){
                                            bindInfoWindow(marker, map, locations[i]);
                                        }
                                    }
                                }
                            </script>
                            <style type="text/css">#mapkit-5998 {
                                    height:500px;
                                    width:600px;
                                }
                            </style>
                            <div style="width:100% !important; height: 100%" id="mapkit-5998">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-xl-5 order-xl-2 order-1">
                <div class="map_section_content map_section_content-phone">
                    <div class="map_overlay">
                        <svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z" />
                        </svg>
                    </div>

                    <div class="section_title_container">
                        <div class="color-white">Please click on the link below and if you have a local business you love and would like it to feature in one of our guides; give us a shout at info@urbanvillagehomes.com<br/><br/><br/><br/></div>
                    </div>

                    <div class="locations_list d-flex flex-column align-items-start justify-content-start">
                        <label class="location_contaner">
                            <input type="radio" name="location_radio">
                            <span></span>
                            Herne Hill
                        </label>
                        <label class="location_contaner">
                            <input type="radio" name="location_radio">
                            <span></span>
                            Brixton
                        </label>
                        <label class="location_contaner">
                            <input type="radio" name="location_radio">
                            <span></span>
                            Peckham
                        </label>
                        <label class="location_contaner">
                            <input type="radio" name="location_radio">
                            <span></span>
                            Dulwich
                        </label>
                        <label class="location_contaner">
                            <input type="radio" name="location_radio">
                            <span></span>
                            Loughborough Junction
                        </label>
                        <label class="location_contaner" data-lat="39.296713" data-lng="-76.634918">
                            <input type="radio" name="location_radio">
                            <span></span>
                            Camberwell and Denmark Hill
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('includes.footer')
