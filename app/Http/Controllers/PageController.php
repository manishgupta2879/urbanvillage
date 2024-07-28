<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LifeMagazine;
use App\Post;
use App\Property;
use App\Resource;
use App\PropertyType;
use App\ResidentialPropertyStyle;
use App\PropertyAvailability;
use App\RentFrequency;
use DateTime;
class PageController extends Controller
{
    public function show_home()
    {
        $posts = Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        //set withdrawn id
        $withdrawn = array(6, 7);

        //latest featured properties
        $properties = Property::select('id', 'propertyID', 'department', 'displayAddress', 'propertyBedrooms', 'propertyType', 'propertyStyle', 'price', 'rent', 'rentFrequency', 'availability')
            ->where('status', 1)
            ->where('featuredProperty', 1)
            ->whereNotIn('availability', $withdrawn)
            ->orderBy('price', 'DESC')
            ->get();

        //add the one image to the property array
        foreach ($properties AS $k => $property){
            //Create slug and assign to the property
            if(isset($property['displayAddress'])){
                $slug_text = $property['displayAddress'];
            }elseif(isset($property['address2'])){
                $slug_text = $property['address2'];
                $property['displayAddress'] = $property['address2'];
            }elseif(isset($property['propertyFeature1'])){
                $slug_text = $property['propertyFeature1'];
                $property['displayAddress'] = $property['propertyFeature1'];
            }
            $slug = str_slug($slug_text);
            $properties[$k]['slug'] = $slug;

            //get available resources of a property and set
            $resource = Resource::where('propertyID', $property['propertyID'])
                ->where('type', 'image')
                ->orderBy('sort_order')
                ->first();

            $properties[$k]['image'] = $resource['path'];

            //get property type
            $resource_type = PropertyType::select('type')
                ->where('group_id', $property['propertyType'])
                ->where('department', $property['department'])
                ->first();
            $properties[$k]['propertyType'] = $resource_type['type'];

            //get property style
            $resource_style = ResidentialPropertyStyle::select('style_name')->where('style_id', $property['propertyStyle'])->first();
            $properties[$k]['propertyStyle'] = $resource_style['style_name'];

            //get property availability
            $resource_type = PropertyAvailability::select('name')
                ->where('group_id', $property['availability'])
                ->where('department', $property['department'])
                ->first();
            $properties[$k]['availability'] = $resource_type['name'];

            //get property availability
            if(isset($property['rentFrequency'])){
                $rent_type = RentFrequency::select('frequency_type')
                    ->where('id', $property['rentFrequency'])
                    ->first();
                $properties[$k]['rentFrequency'] = $rent_type['frequency_type'];
            }
        }

        return view('pages.index',
            [
                'page_title'    => 'Estate Agents and Letting Agents in Camberwell, Brixton, SE5',
                'posts'         => $posts,
                'properties'    => $properties
            ]);
    }

    public function get_single_property($property_id, $slug)
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        //latest featured properties
        $property = Property::where('status', 1)
            ->where('propertyID', $property_id)
            ->firstOrFail();

        //Create slug and assign to the property
        if(!isset($property['displayAddress'])){
            if(isset($property['address2'])){
                $property['displayAddress'] = $property['address2'];
            }elseif(isset($property['propertyFeature1'])){
                $property['displayAddress'] = $property['propertyFeature1'];
            }
        }

        // get virtual tour link if available
        if(isset($property['virtualTours'])){
            $property['virtualTours'] = json_decode($property['virtualTours']);
        }

        // get external links if available
        if(isset($property['externalLinks'])){
            $property['externalLinks'] = json_decode($property['externalLinks']);
        }

        //get available resources of a property and set
        $resources = Resource::where('propertyID', $property['propertyID'])->orderBy('sort_order')->get();
        //dd($resources);exit;
        $first_image = 0;
        $images = array();
        $floorplans = array();
        $epcGraphs = array();
        $brochures = array();

        foreach ($resources AS $l => $resource){
            //echo $resource['type']. ' - ' . $resource['path'].'<br/>';
            if($resource['type'] == 'image'){
                $images[] = $resource['path'];
            }elseif($resource['type'] == 'floorplan'){
                $floorplans[] = base64_encode($resource['path']);
            }elseif($resource['type'] == 'epcGraph'){
                $epcGraphs[] = base64_encode($resource['path']);
            }elseif($resource['type'] == 'brochure'){
                $brochures[] = base64_encode($resource['path']);
            }
        }

        $property['images'] = $images;
        $property['floorplans'] = $floorplans;
        $property['epcGraphs'] = $epcGraphs;
        $property['brochures'] = $brochures;

        //get property type
        $resource_type = PropertyType::select('type')
            ->where('group_id', $property['propertyType'])
            ->where('department', $property['department'])
            ->first();
        $property['propertyType'] = $resource_type['type'];

        //get property style
        $resource_style = ResidentialPropertyStyle::select('style_name')->where('style_id', $property['propertyStyle'])->first();
        $property['propertyStyle'] = $resource_style['style_name'];

        //get property availability
        $resource_type = PropertyAvailability::select('name')
            ->where('group_id', $property['availability'])
            ->where('department', $property['department'])
            ->first();
        $property['availability'] = $resource_type['name'];

        //get property availability
        if(isset($property['rentFrequency'])){
            $rent_type = RentFrequency::select('frequency_type')
                ->where('id', $property['rentFrequency'])
                ->first();
            $property['rentFrequency'] = $rent_type['frequency_type'];
        }

        return view('pages.property_single',
            [
                'page_title'    => $property['displayAddress'],
                'css_files'     => $css_files,
                'js_files'      => $js_files,
                'property'      => $property
            ]);
    }

    public function get_single_property_jupix(Request $request)
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        $property_id = $request->profileID;

        //latest featured properties
        $property = Property::where('status', 1)
            ->where('propertyID', $property_id)
            ->firstOrFail();

        //Create slug and assign to the property
        if(!isset($property['displayAddress'])){
            if(isset($property['address2'])){
                $property['displayAddress'] = $property['address2'];
            }elseif(isset($property['propertyFeature1'])){
                $property['displayAddress'] = $property['propertyFeature1'];
            }
        }

        // get virtual tour link if available
        if(isset($property['virtualTours'])){
            $property['virtualTours'] = json_decode($property['virtualTours']);
        }

        // get external links if available
        if(isset($property['externalLinks'])){
            $property['externalLinks'] = json_decode($property['externalLinks']);
        }

        //get available resources of a property and set
        $resources = Resource::where('propertyID', $property['propertyID'])->orderBy('sort_order')->get();
        //dd($resources);exit;
        $first_image = 0;
        $images = array();
        $floorplans = array();
        $epcGraphs = array();
        $brochures = array();

        foreach ($resources AS $l => $resource){
            //echo $resource['type']. ' - ' . $resource['path'].'<br/>';
            if($resource['type'] == 'image'){
                $images[] = $resource['path'];
            }elseif($resource['type'] == 'floorplan'){
                $floorplans[] = base64_encode($resource['path']);
            }elseif($resource['type'] == 'epcGraph'){
                $epcGraphs[] = base64_encode($resource['path']);
            }elseif($resource['type'] == 'brochure'){
                $brochures[] = base64_encode($resource['path']);
            }
        }

        $property['images'] = $images;
        $property['floorplans'] = $floorplans;
        $property['epcGraphs'] = $epcGraphs;
        $property['brochures'] = $brochures;

        //get property type
        $resource_type = PropertyType::select('type')
            ->where('group_id', $property['propertyType'])
            ->where('department', $property['department'])
            ->first();
        $property['propertyType'] = $resource_type['type'];

        //get property style
        $resource_style = ResidentialPropertyStyle::select('style_name')->where('style_id', $property['propertyStyle'])->first();
        $property['propertyStyle'] = $resource_style['style_name'];

        //get property availability
        $resource_type = PropertyAvailability::select('name')
            ->where('group_id', $property['availability'])
            ->where('department', $property['department'])
            ->first();
        $property['availability'] = $resource_type['name'];

        //get property availability
        if(isset($property['rentFrequency'])){
            $rent_type = RentFrequency::select('frequency_type')
                ->where('id', $property['rentFrequency'])
                ->first();
            $property['rentFrequency'] = $rent_type['frequency_type'];
        }

        return view('pages.property_single',
            [
                'page_title'    => $property['displayAddress'],
                'css_files'     => $css_files,
                'js_files'      => $js_files,
                'property'      => $property
            ]);
    }

    public function show_properties(Request $request)
    {
        $css_files  = array('about','listings','listings_responsive');
        $js_files   = array('listings', 'property_search');

        //set withdrawn id
        $withdrawn = array(6, 7);
        //set sol/ sold stc/ let/ let agreed id
        $include_current = array(4, 5);

        //select option values
        $prices = array(500, 1000, 2000, 5000, 10000, 25000, 50000, 60000, 70000, 80000, 90000, 100000, 120000, 140000, 160000, 180000, 200000, 250000, 300000, 350000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1250000, 1500000, 1750000, 2000000, 2500000, 3000000, 4000000, 5000000, 6000000, 7000000, 8000000, 9000000, 10000000);
        $property_types = array('Houses', 'Flats / Apartments', 'Bungalows', 'Other');
        $per_page = array(12, 21, 42);
        $orders = array(
            array('display'=>'Price Descending', 'value'=>'price+desc'),
            array('display'=>'Price Ascending', 'value'=>'price+asc'),
            array('display'=>'Newest Listed', 'value'=>'newest'),
            array('display'=>'Oldest Listed', 'value'=>'oldest')
        );

        //Call properties
        $properties = new Property();

        if(isset($request->property_type)){
            $properties = $properties->where('propertyType', $request->property_type);
        }

        if(isset($request->bedroom_min)){
            $properties = $properties->where('propertyBedrooms', '>=', $request->bedroom_min + 0);
        }

        if(isset($request->residence) && $request->residence == 'Lettings'){
            $properties = $properties->where('department', 'Lettings');
            $url_type = 'Lettings';
            $url_type_caps = strtoupper($url_type);
            $prices = array(500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000);
        }elseif(isset($request->residence) && $request->residence == 'Sales'){
            $properties = $properties->where('department', 'Sales');
            $url_type = 'Sales';
            $url_type_caps = strtoupper($url_type);
            $prices = array(500, 1000, 2000, 5000, 10000, 25000, 50000, 60000, 70000, 80000, 90000, 100000, 120000, 140000, 160000, 180000, 200000, 250000, 300000, 350000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1250000, 1500000, 1750000, 2000000, 2500000, 3000000, 4000000, 5000000, 6000000, 7000000, 8000000, 9000000, 10000000);
        }elseif(isset($request->url_type) && $request->url_type == 'tenants'){
            $properties = $properties->where('department', 'Lettings');
            $url_type = 'Lettings';
            $url_type_caps = strtoupper($url_type);
            $prices = array(500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000);
        }elseif(isset($request->url_type) && $request->url_type == 'buyers'){
            $properties = $properties->where('department', 'Sales');
            $url_type = 'Sales';
            $url_type_caps = strtoupper($url_type);
            $prices = array(500, 1000, 2000, 5000, 10000, 25000, 50000, 60000, 70000, 80000, 90000, 100000, 120000, 140000, 160000, 180000, 200000, 250000, 300000, 350000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1250000, 1500000, 1750000, 2000000, 2500000, 3000000, 4000000, 5000000, 6000000, 7000000, 8000000, 9000000, 10000000);
        }else{
            $properties = $properties->where('department', 'Sales');
            $url_type = 'Sales';
            $url_type_caps = strtoupper($url_type);
            $prices = array(500, 1000, 2000, 5000, 10000, 25000, 50000, 60000, 70000, 80000, 90000, 100000, 120000, 140000, 160000, 180000, 200000, 250000, 300000, 350000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1250000, 1500000, 1750000, 2000000, 2500000, 3000000, 4000000, 5000000, 6000000, 7000000, 8000000, 9000000, 10000000);
        }

         if(isset($request->price_min)){
             if($url_type=='Sales' || $url_type=='buyers'){
                 $properties = $properties->where('price', '>=', $request->price_min + 0);
             }else{
                 $properties = $properties->where('rent', '>=', $request->price_min + 0);
             }
         }

         if(isset($request->price_max)){
             if($url_type=='Sales' || $url_type=='buyers'){
                 $properties = $properties->where('price', '<=', $request->price_max + 0);
             }else{
                 $properties = $properties->where('rent', '<=', $request->price_max + 0);
             }
         }

        if(isset($request->include_current)){
            $properties = $properties->whereNotIn('availability', $include_current);
        }

        $properties = $properties->where('status', 1)
            ->whereNotIn('availability', $withdrawn)
            ->get();

         //Final filtration for properties
        if(isset($request->location)) {
            foreach($properties AS $k => $property){

                if(stripos($property->displayAddress,$request->location)!==false){
                }elseif(stripos($property->addressPostcode,$request->location)!==false){
                }elseif(stripos($property->addressStreet,$request->location)!==false){
                }elseif(stripos($property->address2,$request->location)!==false){
                }elseif(stripos($property->address3,$request->location)!==false){
                }elseif(stripos($property->address4,$request->location)!==false){
                }else{
                    unset($properties[$k]);
                }
            }
        }


        $properties_id = array();
        //update pagination & gather final data
        foreach ($properties AS $k => $property){
            $properties_id[] = $property->id;
        }

        //check whether initial search return null value
        if(count($properties_id) < 1){
            $properties_final = array();

            return view('pages.properties_view',
                [
                    'page_title'    => $url_type_caps,
                    'css_files'     => $css_files,
                    'js_files'      => $js_files,
                    'url_type'      => $url_type,
                    'url_type_caps' => $url_type_caps,
                    'properties'    => $properties_final,
                    'prices'        => $prices,
                    'property_types'=> $property_types,
                    'per_page'      => $per_page,
                    'orders'        => $orders,
                    'location_selected'      => $request['location'],
                    'price_min_selected'     => $request['price_min'],
                    'price_max_selected'     => $request['price_max'],
                    'property_type_selected' => $request['property_type'],
                    'residence_selected'     => $request['residence'],
                    'bedroom_min_selected'   => $request['bedroom_min'],
                    'property_per_page_selected' => $request['property_per_page'],
                    'order_by_selected'      => $request['order_by'],
                    'include_current'        => $request['include_current'],
                ]);
        }

        $properties_final = new Property();
        //filter
        if(isset($request->order_by)){
            if($request->order_by == 'price+desc'){
                if($url_type=='Sales' || $url_type=='buyers'){
                    $properties_final = $properties_final->orderBy('price', 'DESC');
                }else{
                    $properties_final = $properties_final->orderBy('rent', 'DESC');
                }
            }elseif($request->order_by == 'price+asc'){
                if($url_type=='Sales' || $url_type=='buyers'){
                    $properties_final = $properties_final->orderBy('price', 'ASC');
                }else{
                    $properties_final = $properties_final->orderBy('rent', 'ASC');
                }
            }elseif($request->order_by == 'newest'){
                $properties_final = $properties_final->orderBy('id', 'DESC');
            }elseif($request->order_by == 'oldest'){
                $properties_final = $properties_final->orderBy('id', 'ASC');
            }
        }

        if(isset($request->property_per_page)){
            $properties_final = $properties_final->whereIn('id', $properties_id)->paginate($request->property_per_page);
        }else{
            $properties_final = $properties_final->whereIn('id', $properties_id)->paginate(18);
        }

         //add the one image to the property array
         foreach ($properties_final AS $k => $property){
             //Create slug and assign to the property
             if(isset($property['displayAddress'])){
                 $slug_text = $property['displayAddress'];
             }elseif(isset($property['address2'])){
                 $slug_text = $property['address2'];
                 $property['displayAddress'] = $property['address2'];
             }elseif(isset($property['propertyFeature1'])){
                 $slug_text = $property['propertyFeature1'];
                 $property['displayAddress'] = $property['propertyFeature1'];
             }
             $slug = str_slug($slug_text);
             $properties_final[$k]['slug'] = $slug;

             //get available resources of a property and set
             $resource = Resource::where('propertyID', $property['propertyID'])
                 ->where('type', 'image')
                 ->orderBy('sort_order')
                 ->first();

             $properties_final[$k]['image'] = $resource['path'];

             //get property type
             $resource_type = PropertyType::select('type')
                 ->where('group_id', $property['propertyType'])
                 ->where('department', $property['department'])
                 ->first();
             $properties_final[$k]['propertyType'] = $resource_type['type'];

             //get property style
             $resource_style = ResidentialPropertyStyle::select('style_name')->where('style_id', $property['propertyStyle'])->first();
             $properties_final[$k]['propertyStyle'] = $resource_style['style_name'];

             //get property availability
             $resource_type = PropertyAvailability::select('name')
                 ->where('group_id', $property['availability'])
                 ->where('department', $property['department'])
                 ->first();
             $properties_final[$k]['availability'] = $resource_type['name'];

             //get property availability
             if(isset($property['rentFrequency'])){
                 $rent_type = RentFrequency::select('frequency_type')
                     ->where('id', $property['rentFrequency'])
                     ->first();
                 $properties_final[$k]['rentFrequency'] = $rent_type['frequency_type'];
             }
         }

         return view('pages.properties_view',
             [
                 'page_title'    => $url_type_caps,
                 'css_files'     => $css_files,
                 'js_files'      => $js_files,
                 'url_type'      => $url_type,
                 'url_type_caps' => $url_type_caps,
                 'properties'    => $properties_final,
                 'prices'        => $prices,
                 'property_types'=> $property_types,
                 'per_page'      => $per_page,
                 'orders'        => $orders,
                 'location_selected'      => $request['location'],
                 'price_min_selected'     => $request['price_min'],
                 'price_max_selected'     => $request['price_max'],
                 'property_type_selected' => $request['property_type'],
                 'residence_selected'     => $request['residence'],
                 'bedroom_min_selected'   => $request['bedroom_min'],
                 'property_per_page_selected' => $request['property_per_page'],
                 'order_by_selected'      => $request['order_by'],
                 'include_current'        => $request['include_current'],
             ]);
    }

    public function life_magazines(Request $request)
    {
        $css_files  = array('about','listings','listings_responsive');
        $js_files   = array('listings', 'property_search');


        //Get all life magazines
        $lifeMagazines = new LifeMagazine();

        $lifeMagazines = $lifeMagazines->where('status', 'published')
            ->orderBy('id', 'DESC')
            ->get();

         return view('pages.life_magazines_view',
             [
                 'page_title'    => 'Life Magazines',
                 'css_files'     => $css_files,
                 'js_files'      => $js_files,
                 'life_magazines'    => $lifeMagazines,
             ]);
    }

    public function new_aboutus(Request $request)
    {


         return view('pages.new_aboutus_view',
             [
                 'page_title'    => 'About us',

             ]);
    }

    public function show_who_we_are()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.who_we_are',
            [
                'page_title'    => 'About Urban Village Homes',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_meet_the_team()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.meet_the_team',
            [
                'page_title'    => 'Meet the Team',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_community_partner()
    {
        $css_files  = array('about');
        $js_files   = array('about','slider');

        return view('pages.community_partner',
            [
                'page_title'    => 'Community Partner',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_valuation_request()
    {
        $css_files  = array('contact','contact_responsive','jquery.datetimepicker');
        $js_files   = array('contact','jquery.datetimepicker.full','date_time_picker');

        return view('pages.valuation_request',
            [
                'page_title'    => 'Instant Valuation',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function send_request(Request $request) {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required| email',
            'phone'=>'required'
        ]);
        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'date'=>$request->preferr_date,
            'comments'=>$request->body_text,
            'subject'=>'Urban Village Valuation Request',
        );

        $to 		= 'info@urbanvillagehomes.com';
        $from		= $data['email'];
        $subject	= $data['subject'];

        $specific = "";
        if(isset($request->property_id)){
            $specific = "<h4>Property ID: ".$request->property_id."</h4><h4>Property Address: ".$request->display_address."</h4>";
        }

        $message="<html>
			<head>
			<title>".$data['name']." - ".$data['subject']."</title>
			</head>
			</html>
			<body style='background-color:##f2f2f2;'>
			<div>
			<h2 style='color:#a4bb1a;'>URBAN VILLAGE VALUATION REQUEST MESSAGE!</h2>
			<div style='margin-top:-15px !important;'>
            <p style='padding-top:-25px;margin-bottom: 12px;'>Hi... You've got a message from ".$data['name']."!<br/></p>
            </div>".$specific."
			<table style='border-collapse: collapse;width: 100%;;margin-top: 12px;'>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Full Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Phone No </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Address </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['address']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Preferred Date & Time </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['date']."</td>
			  </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Message </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['comments']."</td>
              </tr>
			</table>
			</body>
			</html>";

        // Mail For admin
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$data['name'].' <'.$data['email'].'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sentMailResult = mail($to,$subject,$message,$headers);

        if($sentMailResult )
        {
            return redirect()->back()->with('flash_success', 'Your request has been accepted! We will contact you soon as possible.');
        }
        else
        {
            return redirect()->back()->with('flash_success', 'Sorry but the email could not be sent. Please go back and try again!');
        }
    }

    public function show_free_home_staging_consultation()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.free_home_staging_consultation',
            [
                'page_title'    => 'Free Home Staging Consultation',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_home_staging_consultation_request()
    {
        $css_files  = array('contact','contact_responsive','jquery.datetimepicker');
        $js_files   = array('contact','jquery.datetimepicker.full','date_time_picker');

        return view('pages.home_staging_valuation_request',
            [
                'page_title'    => 'Home Staging Consultation Request',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function send_home_staging_consultation_request(Request $request) {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required| email',
            'phone'=>'required',
            'address'=>'required',
            'preferr_date'=>'required',
        ]);
        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'date'=>$request->preferr_date,
            'comments'=>$request->body_text,
            'subject'=>'Urban Village Free Home Staging Consultation Request',
        );

        $to 		= 'info@urbanvillagehomes.com';
        $from		= $data['email'];
        $subject	= $data['subject'];

        $message="<html>
			<head>
			<title>".$data['name']." - ".$data['subject']."</title>
			</head>
			</html>
			<body style='background-color:##f2f2f2;'>
			<div>
			<h2 style='color:#a4bb1a;'>URBAN VILLAGE VALUATION REQUEST MESSAGE!</h2>
			<div style='margin-top:-15px !important;'>
            <p style='padding-top:-25px;'>Hi... You've got a message from ".$data['name']."!<br/></p></div>
			<table style='border-collapse: collapse;width: 100%;'>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Full Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Phone No </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Address </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['address']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Preferred Date & Time </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['date']."</td>
			  </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Message </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['comments']."</td>
              </tr>
			</table>
			</body>
			</html>";

        // Mail For admin
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$data['name'].' <'.$data['email'].'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sentMailResult = mail($to,$subject,$message,$headers);

        if($sentMailResult )
        {
            return redirect()->back()->with('flash_success', 'Your request has been accepted! We will contact you soon as possible.');
        }
        else
        {
            return redirect()->back()->with('flash_success', 'Sorry but the email could not be sent. Please go back and try again!');
        }
    }

    public function show_blog()
    {
        //Returning blogs
        $css_files  = array('blog');
        $js_files   = array('blog');

        //: Get all the blogs
        $blogs =Post::all();

        foreach($blogs AS $k => $blog){
            $description = $blog['description'];
            $description = strip_tags($description);
            $description = substr($description, 0, 200).'...';

            $date = new DateTime($blog['date_created']);
            //var_dump($date);
            $date = $date->format('Y-m-d');

            $blogs[$k]['description'] = $description;
            $blogs[$k]['date_created'] = $date;
        }


        if(!$blogs) {
            $blogs = null;
        }

        return view('pages.blog',
            [
                'page_title'    => 'Blog',
                'css_files'     => $css_files,
                'js_files'      => $js_files,
                'blogs'=>$blogs,

            ]);
    }

    public function show_blog_view($slug)
    {
        //Returning blogs
        $css_files  = array('blog');
        $js_files   = array('blog');
        //: Get all the blogs
        $blog= Post::where('slug',$slug)->where('is_delete',0)->where('is_blog',1)->first();


        return view('pages.blog_view',
            [
                'page_title'    => 'Blog Title',
                'css_files'     => $css_files,
                'js_files'      => $js_files,
                'blog'=>$blog,
            ]);
    }

    public function show_market_updates()
    {
        //Returning blogs
        $css_files  = array('blog');
        $js_files   = array('blog');

        return view('pages.market_updates',
            [
                'page_title'    => 'Market updates',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_market_updates_view()
    {
        //Returning blogs
        $css_files  = array('blog');
        $js_files   = array('blog');

        return view('pages.market_updates_view',
            [
                'page_title'    => 'Market Updates Title',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_areas()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.areas',
            [
                'page_title'    => 'Areas',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_herne_hill()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 16)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.herne_hill',
            [
                'posts' => $posts,
                'page_title'    => 'Herne Hill',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_brixton()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 15)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.brixton',
            [
                'posts' => $posts,
                'page_title'    => 'Brixton',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_peckham()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 14)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.peckham',
            [
                'posts' => $posts,
                'page_title'    => 'Peckham',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_dulwich()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 13)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.dulwich',
            [
                'posts' => $posts,
                'page_title'    => 'Dulwich',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_loughborough_junction()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 12)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.loughborough_junction',
            [
                'posts' => $posts,
                'page_title'    => 'Loughborough Junction',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_camberwell_denmark_hill()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 11)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.camberwell_denmark_hill',
            [
                'posts' => $posts,
                'page_title'    => 'Camberwell Denmark Hill',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }
    public function show_stockwell()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 10)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.stockwell',
            [
                'posts' => $posts,
                'page_title'    => 'Stockwell',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }
    public function show_waterloo()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', 9)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.waterloo',
            [
                'posts' => $posts,
                'page_title'    => 'Waterloo',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_property($slug)
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single');

        return view('pages.view_property',
            [
                'page_title'    => $slug. '- Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_grove_lane_camberwell()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.grove_lane_camberwell',
            [
                'page_title'    => 'Grove Lane Camberwell Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_ferndene_road_herne_hill()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.ferndene_road_herne_hill',
            [
                'page_title'    => 'Ferndene Road Herne Hill Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_finsen_road_ruskin_park()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.finsen_road_ruskin_park',
            [
                'page_title'    => 'Finsen Road Ruskin Park Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_grove_lane_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.grove_lane_london',
            [
                'page_title'    => 'Grove Lane London Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_finsen_road_denmark_hill()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.finsen_road_denmark_hill',
            [
                'page_title'    => 'Finsen Road Denmark Hill Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_lowden_road_herne_hill()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.lowden_road_herne_hill',
            [
                'page_title'    => 'Lowden Road Herne Hill Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_romola_road()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.romola_road',
            [
                'page_title'    => 'Romola Road Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_kemerton_road_denmark_hill()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.kemerton_road_denmark_hill',
            [
                'page_title'    => 'Kemerton Road Denmark Hill Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_denmark_hill_herne_hill()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.denmark_hill_herne_hill',
            [
                'page_title'    => 'Denmark Hill Herne Hill Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_poplar_road_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.poplar_road_london',
            [
                'page_title'    => 'Poplar Road London Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_norwood_road_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.norwood_road_london',
            [
                'page_title'    => 'Norwood Road London Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_wingmore_road_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.wingmore_road_london',
            [
                'page_title'    => 'Wingmore Road London Property',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_highwood_garden_terrace_north()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.highwood_garden_terrace_north',
            [
                'page_title'    => 'Highwood Garden Terrace North',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_herne_hillroad_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.herne_hillroad_london',
            [
                'page_title'    => 'Herne Hillroad London',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_albert_embankment_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.albert_embankment_london',
            [
                'page_title'    => 'Albert Embankment London',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.london',
            [
                'page_title'    => 'London',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_comber_grove_london()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.comber_grove_london',
            [
                'page_title'    => 'Comber Grove London',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_gilesmead_camberwell_church_street()
    {
        $css_files  = array('about','single','single_responsive');
        $js_files   = array('single','slider');

        return view('pages.gilesmead_camberwell_church_street',
            [
                'page_title'    => 'Gilesmead Camberwell Church Street',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_sellers()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.sellers',
            [
                'page_title'    => 'Sellers',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_tenants()
    {
        $css_files  = array('about','listings','listings_responsive');
        $js_files   = array('listings');

        return view('pages.tenants',
            [
                'page_title'    => 'Tenants',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_landlords()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.landlords',
            [
                'page_title'    => 'Landlords',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_full_scale_charges()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.full_scale_charges',
            [
                'page_title'    => 'Full Scale Charges',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_contact()
    {
        $css_files  = array('contact');
        $js_files   = array('contact');

        return view('pages.contact',
            [
                'page_title'    => 'Contact',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_ebook()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.ebook',
            [
                'page_title'    => 'Ebook',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }



    public function show_complaints_procedure()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.complaints_procedure',
            [
                'page_title'    => 'Complaints Procedure',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_vacancies()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.vacancies',
            [
                'page_title'    => 'Vacancies',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_testimonials()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.testimonials',
            [
                'page_title'    => 'Testimonials',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_terms_and_condition()
    {
        $css_files  = array('about');
        $js_files   = array('about');

        return view('pages.terms_and_condition',
            [
                'page_title'    => 'Terms and Condition',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_privacy_policy()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        return view('pages.privacy_policy',
            [
                'page_title'    => 'Privacy Policy',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_cookie_policy()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        return view('pages.cookie_policy',
            [
                'page_title'    => 'Cookie Policy',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_class_list()
    {
        $css_files  = array('about');
        $js_files   = array('about');
        return view('pages.class_list',
            [
                'page_title'    => 'Class List',
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function send_class_list_request(Request $request) {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required| email',
        ]);

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'school'=>$request->school,
            'comments'=>$request->body_text,
            'subject'=>'Urban Village Class List Request',
        );

        $to 		= 'info@urbanvillagehomes.com';
        $from		= $data['email'];
        $subject	= $data['subject'];

        $message="<html>
			<head>
			<title>".$data['name']." - ".$data['subject']."</title>
			</head>
			</html>
			<body style='background-color:##f2f2f2;'>
			<div>
			<h2 style='color:#a4bb1a;'>URBAN VILLAGE CLASS LIST MESSAGE!</h2>
			<div style='margin-top:-15px !important;'>
            <p style='padding-top:-25px;'>Hi... You've got a message from ".$data['name']."!<br/></p></div>
			<table style='border-collapse: collapse;width: 100%;'>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Full Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Phone No </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Preferred School</td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['school']."</td>
			  </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Message </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['comments']."</td>
              </tr>
			</table>
			</body>
			</html>";

        // Mail For admin
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$data['name'].' <'.$data['email'].'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sentMailResult = mail($to,$subject,$message,$headers);

        if($sentMailResult )
        {
            return redirect()->back()->with('flash_success', 'Your request has been accepted! We will contact you soon as possible.');
        }
        else
        {
            return redirect()->back()->with('flash_success', 'Sorry but the email could not be sent. Please go back and try again!');
        }
    }

    public function send_contact_request(Request $request) {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required| email',
        ]);

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'department'=>$request->department,
            'comments'=>$request->body_text,
            'subject'=>$request->subject,
        );

        $to 		= 'info@urbanvillagehomes.com';
        $from		= $data['email'];
        $subject	= $data['subject'];

        $message="<html>
			<head>
			<title>".$data['name']." - ".$data['subject']."</title>
			</head>
			</html>
			<body style='background-color:##f2f2f2;'>
			<div>
			<h2 style='color:#a4bb1a;'>URBAN VILLAGE CONTACT MESSAGE!</h2>
			<div style='margin-top:-15px !important;'>
            <p style='padding-top:-25px;'>Hi... You've got a message from ".$data['name']."!<br/></p></div>
			<table style='border-collapse: collapse;width: 100%;'>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Phone No </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Department</td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['department']."</td>
			  </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Message </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['comments']."</td>
              </tr>
			</table>
			</body>
			</html>";

        // Mail For admin
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$data['name'].' <'.$data['email'].'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sentMailResult = mail($to,$subject,$message,$headers);

        if($sentMailResult )
        {
            return redirect()->back()->with('flash_success', 'Your contact request has been accepted! We will contact you soon as possible.');
        }
        else
        {
            return redirect()->back()->with('flash_success', 'Sorry but the email could not be sent. Please go back and try again!');
        }
    }

    public function mortgage_calculator() {

        return view('pages.mortgage_calculator',
            [
                'page_title'    => 'Mortgage Calculator'
            ]);
    }

    public function stamp_duty_calculator() {

        return view('pages.stamp_duty_calculator',
            [
                'page_title'    => 'Stamp Duty Calculator'
            ]);
    }

}
