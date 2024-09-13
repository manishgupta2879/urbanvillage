<?php

namespace App\Console\Commands;
ini_set('max_execution_time', '0'); //sets infinite time of execution
ini_set('memory_limit', '512M'); // set memory usage

use Illuminate\Console\Command;
use Tightenco\Collect\Support\Collection;
use Rodenastyle\StreamParser\StreamParser;
use Illuminate\Support\Facades\Storage;
use App\Property;
use App\Resource;
use Illuminate\Support\Facades\Log;

class JupixRetrieve extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jupix:retrieve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JUPIX API call and data CRUD';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $now_date = date('Y-m-d H:i:s');
            session(['now_date' => $now_date]);

            StreamParser::xml(env('JUPIX_URL'))->each(function(Collection $property){
            //StreamParser::xml(env('JUPIX_URL'))->each(function(Collection $property){
            $property_array = $property->toArray();
            $property_images = $property->get('images')->toArray();
            $property_floorplans = $property->get('floorplans')->toArray();
            $property_epcGraphs = $property->get('epcGraphs')->toArray();
            $property_brochures = $property->get('brochures')->toArray();
            $property_array = array_filter($property_array);
            
            Log::info('Jupix: ', [$property]);
            Log::info('Jupix array: ', [$property_array]);
            
            //echo ($property_array['displayAddress'))."<br/>";
            //$now_date = date('Y-m-d H:i:s');

            //set data values from xml
            //common
            //$property_data['propertyID']        = isset($property_array['propertyID']) ? $property_array['propertyID'] : null;
            $property_data['branchID']          = isset($property_array['branchID']) ? $property_array['branchID'] : null;
            $property_data['clientName']        = isset($property_array['clientName']) ? $property_array['clientName'] : null;
            $property_data['branchName']        = isset($property_array['branchName']) ? $property_array['branchName'] : null;
            $property_data['department']        = isset($property_array['department']) ? $property_array['department'] : null;
            $property_data['referenceNumber']   = isset($property_array['referenceNumber']) ? $property_array['referenceNumber'] : null;
            $property_data['addressName']       = isset($property_array['addressName']) ? $property_array['addressName'] : null;
            $property_data['addressNumber']     = isset($property_array['addressNumber']) ? $property_array['addressNumber'] : null;
            $property_data['addressStreet']     = isset($property_array['addressStreet']) ? $property_array['addressStreet'] : null;
            $property_data['address2']          = isset($property_array['address2']) ? $property_array['address2'] : null;
            $property_data['address3']          = isset($property_array['address3']) ? $property_array['address3'] : null;
            $property_data['address4']          = isset($property_array['address4']) ? $property_array['address4'] : null;
            $property_data['addressPostcode']   = isset($property_array['addressPostcode']) ? $property_array['addressPostcode'] : null;
            $property_data['country']           = isset($property_array['country']) ? $property_array['country'] : null;
            $property_data['displayAddress']    = isset($property_array['displayAddress']) ? $property_array['displayAddress'] : null;
            $property_data['propertyFeature1']  = isset($property_array['propertyFeature1']) ? $property_array['propertyFeature1'] : null;
            $property_data['propertyFeature2']  = isset($property_array['propertyFeature2']) ? $property_array['propertyFeature2'] : null;
            $property_data['propertyFeature3']  = isset($property_array['propertyFeature3']) ? $property_array['propertyFeature3'] : null;
            $property_data['propertyFeature4']  = isset($property_array['propertyFeature4']) ? $property_array['propertyFeature4'] : null;
            $property_data['propertyFeature5']  = isset($property_array['propertyFeature5']) ? $property_array['propertyFeature5'] : null;
            $property_data['propertyFeature6']  = isset($property_array['propertyFeature6']) ? $property_array['propertyFeature6'] : null;
            $property_data['propertyFeature7']  = isset($property_array['propertyFeature7']) ? $property_array['propertyFeature7'] : null;
            $property_data['propertyFeature8']  = isset($property_array['propertyFeature8']) ? $property_array['propertyFeature8'] : null;
            $property_data['propertyFeature9']  = isset($property_array['propertyFeature9']) ? $property_array['propertyFeature9'] : null;
            $property_data['propertyFeature10'] = isset($property_array['propertyFeature10']) ? $property_array['propertyFeature10'] : null;
            $property_data['dateLastModified']  = isset($property_array['dateLastModified']) ? $property_array['dateLastModified'] : null;
            $property_data['timeLastModified']  = isset($property_array['timeLastModified']) ? $property_array['timeLastModified'] : null;
            $property_data['featuredProperty']  = isset($property_array['featuredProperty']) ? $property_array['featuredProperty'] : null;
            $property_data['regionID']          = isset($property_array['regionID']) ? $property_array['regionID'] : null;
            $property_data['latitude']          = isset($property_array['latitude']) ? $property_array['latitude'] : null;
            $property_data['longitude']         = isset($property_array['longitude']) ? $property_array['longitude'] : null;
            $property_data['flags']             = isset($property_array['flags']) ? json_encode($property_array['flags'],true) : null;
            $property_data['mainSummary']       = isset($property_array['mainSummary']) ? $property_array['mainSummary'] : null;
            $property_data['fullDescription']   = isset($property_array['fullDescription']) ? $property_array['fullDescription'] : null;

            //Residential Sales and Lettings data fields
            $property_data['propertyBedrooms']  = isset($property_array['propertyBedrooms']) ? $property_array['propertyBedrooms'] : null;
            $property_data['propertyBathrooms'] = isset($property_array['propertyBathrooms']) ? $property_array['propertyBathrooms'] : null;
            $property_data['propertyEnsuites']  = isset($property_array['propertyEnsuites']) ? $property_array['propertyEnsuites'] : null;
            $property_data['propertyReceptionRooms'] = isset($property_array['propertyReceptionRooms']) ? $property_array['propertyReceptionRooms'] : null;
            $property_data['propertyKitchens']  = isset($property_array['propertyKitchens']) ? $property_array['propertyKitchens'] : null;
            $property_data['propertyAge']       = isset($property_array['propertyAge']) ? $property_array['propertyAge'] : null;
            $property_data['floorArea']         = isset($property_array['floorArea']) ? $property_array['floorArea'] : null;
            $property_data['floorAreaUnits']    = isset($property_array['floorAreaUnits']) ? $property_array['floorAreaUnits'] : null;
            $property_data['displayPropertyType'] = isset($property_array['displayPropertyType']) ? $property_array['displayPropertyType'] : null;
            $property_data['propertyType']      = isset($property_array['propertyType']) ? $property_array['propertyType'] : null;
            $property_data['propertyStyle']     = isset($property_array['propertyStyle']) ? $property_array['propertyStyle'] : null;

            //Residential Sales Specific Fields
            $property_data['availability']      = isset($property_array['availability']) ? $property_array['availability'] : null;
            $property_data['price']             = isset($property_array['price']) ? $property_array['price'] : null;
            $property_data['forSalePOA']        = isset($property_array['forSalePOA']) ? $property_array['forSalePOA'] : null;
            $property_data['priceQualifier']    = isset($property_array['priceQualifier']) ? $property_array['priceQualifier'] : null;
            $property_data['propertyTenure']    = isset($property_array['propertyTenure']) ? $property_array['propertyTenure'] : null;
            $property_data['saleBy']            = isset($property_array['saleBy']) ? $property_array['saleBy'] : null;
            $property_data['tenure']            = isset($property_array['tenure']) ? $property_array['tenure'] : null;
            $property_data['developmentOpportunity'] = isset($property_array['developmentOpportunity']) ? $property_array['developmentOpportunity'] : null;
            $property_data['investmentOpportunity'] = isset($property_array['investmentOpportunity']) ? $property_array['investmentOpportunity'] : null;
            $property_data['estimatedRentalIncome'] = isset($property_array['estimatedRentalIncome']) ? $property_array['estimatedRentalIncome'] : null;

            //Residential Lettings Specific Fields
            //$property_data['availability'] already in the list
            $property_data['rent']              = isset($property_array['rent']) ? $property_array['rent'] : null;
            $property_data['rentFrequency']     = isset($property_array['rentFrequency']) ? $property_array['rentFrequency'] : null;
            $property_data['toLetPOA']          = isset($property_array['toLetPOA']) ? $property_array['toLetPOA'] : null;
            $property_data['studentProperty']   = isset($property_array['studentProperty']) ? $property_array['studentProperty'] : null;
            $property_data['lettingFeePolicyHeadline'] = isset($property_array['lettingFeePolicyHeadline']) ? $property_array['lettingFeePolicyHeadline'] : null;
            $property_data['lettingFeePolicyDetails'] = isset($property_array['lettingFeePolicyDetails']) ? $property_array['lettingFeePolicyDetails'] : null;

            //Commercial specific fields
            $property_data['forSale']           = isset($property_array['forSale']) ? $property_array['forSale'] : null;
            $property_data['toLet']             = isset($property_array['toLet']) ? $property_array['toLet'] : null;
            //$property_data['availability'] already in the list
            $property_data['priceTo']           = isset($property_array['priceTo']) ? $property_array['priceTo'] : null;
            $property_data['priceFrom']         = isset($property_array['priceFrom']) ? $property_array['priceFrom'] : null;
            $property_data['rentTo']            = isset($property_array['rentTo']) ? $property_array['rentTo'] : null;
            $property_data['rentFrom']          = isset($property_array['rentFrom']) ? $property_array['rentFrom'] : null;
            //$property_data['rentFrequency'], propertyTenure, saleBy, forSalePOA, toLetPOA,  already in the list
            $property_data['floorAreaTo']       = isset($property_array['floorAreaTo']) ? $property_array['floorAreaTo'] : null;
            $property_data['floorAreaFrom']     = isset($property_array['floorAreaFrom']) ? $property_array['floorAreaFrom'] : null;
            //$property_data['floorAreaUnits'] already in the list
            $property_data['siteArea']          = isset($property_array['siteArea']) ? $property_array['siteArea'] : null;
            $property_data['siteAreaUnits']     = isset($property_array['siteAreaUnits']) ? $property_array['siteAreaUnits'] : null;
            //$property_data['developmentOpportunity'], investmentOpportunity already in the list
            $property_data['strapLine']         = isset($property_array['strapLine']) ? $property_array['strapLine'] : null;
            $property_data['propertyTypes']     = isset($property_array['propertyTypes']) ? json_encode($property_array['propertyTypes'],true) : null;

            //Agricultural specific fields
            //$property_data['availability'], priceTo, priceFrom, forSalePOA,  already in the list
            $property_data['landAreaTo']        = isset($property_array['landAreaTo']) ? $property_array['landAreaTo'] : null;
            $property_data['landAreaFrom']      = isset($property_array['landAreaFrom']) ? $property_array['landAreaFrom'] : null;
            $property_data['landAreaUnits']     = isset($property_array['landAreaUnits']) ? $property_array['landAreaUnits'] : null;
            //$property_data['strapLine'], priceQualifier, propertyTenure  already in the list
            $property_data['forSaleLeaseLength'] = isset($property_array['forSaleLeaseLength']) ? $property_array['forSaleLeaseLength'] : null;
            //$property_data['propertyTypes']  already in the list

            //medias
            $property_data['images']            = isset($property_array['images']) ? json_encode($property_array['images'],true) : null;
            $property_data['floorplans']        = isset($property_array['floorplans']) ? json_encode($property_array['floorplans'],true) : null;
            $property_data['epcGraphs']         = isset($property_array['epcGraphs']) ? json_encode($property_array['epcGraphs'],true) : null;
            $property_data['epcFrontPages']     = isset($property_array['epcFrontPages']) ? json_encode($property_array['epcFrontPages'],true) : null;
            $property_data['brochures']         = isset($property_array['brochures']) ? json_encode($property_array['brochures'],true) : null;
            $property_data['virtualTours']      = isset($property_array['virtualTours']) ? json_encode($property_array['virtualTours'],true) : null;
            $property_data['externalLinks']     = isset($property_array['externalLinks']) ? json_encode($property_array['externalLinks'],true) : null;

            $property_data['status']            = 1;
            $property_data['created_at']        = session('now_date');
            $property_data['updated_at']        = session('now_date');

            //Save or update details
            $property_model = Property::updateOrCreate(
                ['propertyID' => $property_array['propertyID']], $property_data
            );


            //CRUD images & resources table
            if($property_model && isset($property_array['propertyID']) && count($property_images)){
                foreach ($property_images AS $k => $property_image)
                {
                    $resource = Resource::where('propertyID', $property_array['propertyID'])
                        ->where('url',$property_image['image'])
                        ->where('type','image')
                        ->first();

                    if($resource)
                    {
                        $db_modified = new \DateTime($resource['modified']);
                        $api_modified = new \DateTime($property_image['modified']);
                        if ($api_modified > $db_modified)
                        {
                            try {
                            //Update Record
                            Resource::destroy($resource['id']);
                            Storage::delete('public\\'.$resource['path']);

                            //Download image from url and upload to server
                            $content = file_get_contents($property_image['image']);
                            $name = substr($property_image['image'], strrpos($property_image['image'], '/') + 1);
                            Storage::put('public\\properties\\'.$property_array['propertyID'].'\\images\\'.$name, $content);

                            //Collect data and update to DB
                            $new_resource = new Resource;
                            $new_resource->propertyID = $property_array['propertyID'];
                            $new_resource->modified = $property_image['modified'];
                            $new_resource->url = $property_image['image'];
                            $new_resource->type = 'image';
                            $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\images\\'.$name;
                            $new_resource->sort_order = ($k+1);
                            $new_resource->created_at = session('now_date');
                            $new_resource->updated_at = session('now_date');
                            $new_resource->save();
                        } catch (\Exception $e) {
                            // Log the exception message
                            Log::error('Error downloading image: ' . $e->getMessage());
                        
                            // Optionally, you can notify via Telegram or any other method
                            $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                                'Status: FAILED'.chr(10).
                                'Date: '.date('Y-m-d H:i:s').chr(10).
                                'Error: Failed to download image for property ID ' . $property_array['propertyID'] . chr(10).
                                'Exception: '.$e->getMessage().chr(10);
                        
                            $data = [
                                'parse_mode' => 'Markdown',
                                'chat_id' => '-340968060',
                                'text' => $text
                            ];
                        
                            //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                        }
                        }
                    }else {
                        try {
                        //New Record
                        //Download image from url and upload to server
                        $content = file_get_contents($property_image['image']);
                        $name = substr($property_image['image'], strrpos($property_image['image'], '/') + 1);
                        Storage::put('public\\properties\\'.$property_array['propertyID'].'\\images\\'.$name, $content);

                        //Collect data and save to DB
                        $new_resource = new Resource;
                        $new_resource->propertyID = $property_array['propertyID'];
                        $new_resource->modified = $property_image['modified'];
                        $new_resource->url = $property_image['image'];
                        $new_resource->type = 'image';
                        $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\images\\'.$name;
                        $new_resource->sort_order = ($k+1);
                        $new_resource->created_at = session('now_date');
                        $new_resource->updated_at = session('now_date');
                        $new_resource->save();
                    } catch (\Exception $e) {
                        // Log the exception message
                        Log::error('Error downloading image: ' . $e->getMessage());
                    
                        // Optionally, you can notify via Telegram or any other method
                        $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                            'Status: FAILED'.chr(10).
                            'Date: '.date('Y-m-d H:i:s').chr(10).
                            'Error: Failed to download image for property ID ' . $property_array['propertyID'] . chr(10).
                            'Exception: '.$e->getMessage().chr(10);
                    
                        $data = [
                            'parse_mode' => 'Markdown',
                            'chat_id' => '-340968060',
                            'text' => $text
                        ];
                    
                        //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                    }
                    }
                }


                /*Delete resources
                $resources = [];
                foreach ($property_images AS $k => $property_image)
                {
                    $resource = Resource::select('id')
                        ->where('propertyID', $property_array['propertyID'])
                        ->where('url', $property_image['image'])
                        ->where('type', 'image')
                        ->first();

                    $resources[] = $resource->id;
                }

                $db_resources = Resource::where('propertyID', $property_array['propertyID'])
                    ->where('type','image')
                    ->get();

                foreach ($db_resources AS $K => $db_resource)
                {
                    if (!in_array($db_resource['id'], $resources)) {
                        Resource::destroy($db_resource['id']);
                        Storage::delete('public\\'.$db_resource['path']);
                    }
                }*/

            }

            //CRUD floorplans & resources table
            if($property_model && isset($property_array['propertyID']) && count($property_floorplans)){
                foreach ($property_floorplans AS $k => $property_floorplan)
                {
                    $resource = Resource::where('propertyID', $property_array['propertyID'])
                        ->where('url',$property_floorplan['floorplan'])
                        ->where('type','floorplan')
                        ->first();

                    if($resource)
                    {
                        $db_modified = new \DateTime($resource['modified']);
                        $api_modified = new \DateTime($property_floorplan['modified']);
                        if ($api_modified > $db_modified)
                        {
                            try {
                            //Update Record
                            Resource::destroy($resource['id']);
                            Storage::delete('public\\'.$resource['path']);

                            //Download floorplan from url and upload to server
                            $content = file_get_contents($property_floorplan['floorplan']);
                            $name = substr($property_floorplan['floorplan'], strrpos($property_floorplan['floorplan'], '/') + 1);
                            Storage::put('public\\properties\\'.$property_array['propertyID'].'\\floorplans\\'.$name, $content);

                            //Collect data and update to DB
                            $new_resource = new Resource;
                            $new_resource->propertyID = $property_array['propertyID'];
                            $new_resource->modified = $property_floorplan['modified'];
                            $new_resource->url = $property_floorplan['floorplan'];
                            $new_resource->type = 'floorplan';
                            $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\floorplans\\'.$name;
                            $new_resource->sort_order = ($k+1);
                            $new_resource->created_at = session('now_date');
                            $new_resource->updated_at = session('now_date');
                            $new_resource->save();
                        } catch (\Exception $e) {
                            // Log the exception message
                            Log::error('Error downloading image: ' . $e->getMessage());
                        
                            // Optionally, you can notify via Telegram or any other method
                            $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                                'Status: FAILED'.chr(10).
                                'Date: '.date('Y-m-d H:i:s').chr(10).
                                'Error: Failed to download image for property ID ' . $property_array['propertyID'] . chr(10).
                                'Exception: '.$e->getMessage().chr(10);
                        
                            $data = [
                                'parse_mode' => 'Markdown',
                                'chat_id' => '-340968060',
                                'text' => $text
                            ];
                        
                            //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                        }
                        }
                    }else {
                        try {
                        //New Record
                        //Download floorplan from url and upload to server
                        $content = file_get_contents($property_floorplan['floorplan']);
                        $name = substr($property_floorplan['floorplan'], strrpos($property_floorplan['floorplan'], '/') + 1);
                        Storage::put('public\\properties\\'.$property_array['propertyID'].'\\floorplans\\'.$name, $content);

                        //Collect data and save to DB
                        $new_resource = new Resource;
                        $new_resource->propertyID = $property_array['propertyID'];
                        $new_resource->modified = $property_floorplan['modified'];
                        $new_resource->url = $property_floorplan['floorplan'];
                        $new_resource->type = 'floorplan';
                        $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\floorplans\\'.$name;
                        $new_resource->sort_order = ($k+1);
                        $new_resource->created_at = session('now_date');
                        $new_resource->updated_at = session('now_date');
                        $new_resource->save();
                    } catch (\Exception $e) {
                        // Log the exception message
                        Log::error('Error downloading brochure: ' . $e->getMessage());
                    
                        // Optionally, you can notify via Telegram or any other method
                        $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                            'Status: FAILED'.chr(10).
                            'Date: '.date('Y-m-d H:i:s').chr(10).
                            'Error: Failed to download brochure for property ID ' . $property_array['propertyID'] . chr(10).
                            'Exception: '.$e->getMessage().chr(10);
                    
                        $data = [
                            'parse_mode' => 'Markdown',
                            'chat_id' => '-340968060',
                            'text' => $text
                        ];
                    
                        //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                    }
                    }
                }


                /*Delete resources
                $resources = [];
                foreach ($property_floorplans AS $k => $property_floorplan)
                {
                    $resource = Resource::select('id')
                        ->where('propertyID', $property_array['propertyID'])
                        ->where('url', $property_floorplan['floorplan'])
                        ->where('type', 'floorplan')
                        ->first();

                    $resources[] = $resource->id;
                }

                $db_resources = Resource::where('propertyID', $property_array['propertyID'])
                    ->where('type','floorplan')
                    ->get();

                foreach ($db_resources AS $K => $db_resource)
                {
                    if (!in_array($db_resource['id'], $resources)) {
                        Resource::destroy($db_resource['id']);
                        Storage::delete('public\\'.$db_resource['path']);
                    }
                }*/

            }

            //CRUD epcGraphs & resources table
            if($property_model && isset($property_array['propertyID']) && count($property_epcGraphs)){
                foreach ($property_epcGraphs AS $k => $property_epcGraph)
                {
                    $resource = Resource::where('propertyID', $property_array['propertyID'])
                        ->where('url',$property_epcGraph['epcGraph'])
                        ->where('type','epcGraph')
                        ->first();

                    if($resource)
                    {
                        $db_modified = new \DateTime($resource['modified']);
                        $api_modified = new \DateTime($property_epcGraph['modified']);
                        if ($api_modified > $db_modified)
                        {
                            try{
                            //Update Record
                            Resource::destroy($resource['id']);
                            Storage::delete('public\\'.$resource['path']);

                            //Download epcGraph from url and upload to server
                            $content = file_get_contents($property_epcGraph['epcGraph']);
                            $name = substr($property_epcGraph['epcGraph'], strrpos($property_epcGraph['epcGraph'], '/') + 1);
                            Storage::put('public\\properties\\'.$property_array['propertyID'].'\\epcGraphs\\'.$name, $content);

                            //Collect data and update to DB
                            $new_resource = new Resource;
                            $new_resource->propertyID = $property_array['propertyID'];
                            $new_resource->modified = $property_epcGraph['modified'];
                            $new_resource->url = $property_epcGraph['epcGraph'];
                            $new_resource->type = 'epcGraph';
                            $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\epcGraphs\\'.$name;
                            $new_resource->sort_order = ($k+1);
                            $new_resource->created_at = session('now_date');
                            $new_resource->updated_at = session('now_date');
                            $new_resource->save();
                        } catch (\Exception $e) {
                            // Log the exception message
                            Log::error('Error downloading image: ' . $e->getMessage());
                        
                            // Optionally, you can notify via Telegram or any other method
                            $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                                'Status: FAILED'.chr(10).
                                'Date: '.date('Y-m-d H:i:s').chr(10).
                                'Error: Failed to download image for property ID ' . $property_array['propertyID'] . chr(10).
                                'Exception: '.$e->getMessage().chr(10);
                        
                            $data = [
                                'parse_mode' => 'Markdown',
                                'chat_id' => '-340968060',
                                'text' => $text
                            ];
                        
                            //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                        }
                        }
                    }else {
                        try{
                        //New Record
                        //Download epcGraph from url and upload to server
                        $content = file_get_contents($property_epcGraph['epcGraph']);
                        $name = substr($property_epcGraph['epcGraph'], strrpos($property_epcGraph['epcGraph'], '/') + 1);
                        Storage::put('public\\properties\\'.$property_array['propertyID'].'\\epcGraphs\\'.$name, $content);

                        //Collect data and save to DB
                        $new_resource = new Resource;
                        $new_resource->propertyID = $property_array['propertyID'];
                        $new_resource->modified = $property_epcGraph['modified'];
                        $new_resource->url = $property_epcGraph['epcGraph'];
                        $new_resource->type = 'epcGraph';
                        $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\epcGraphs\\'.$name;
                        $new_resource->sort_order = ($k+1);
                        $new_resource->created_at = session('now_date');
                        $new_resource->updated_at = session('now_date');
                        $new_resource->save();
                    } catch (\Exception $e) {
                        // Log the exception message
                        Log::error('Error downloading image: ' . $e->getMessage());
                    
                        // Optionally, you can notify via Telegram or any other method
                        $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                            'Status: FAILED'.chr(10).
                            'Date: '.date('Y-m-d H:i:s').chr(10).
                            'Error: Failed to download image for property ID ' . $property_array['propertyID'] . chr(10).
                            'Exception: '.$e->getMessage().chr(10);
                    
                        $data = [
                            'parse_mode' => 'Markdown',
                            'chat_id' => '-340968060',
                            'text' => $text
                        ];
                    
                        //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                    }
                    }
                }


                /*Delete resources
                $resources = [];
                foreach ($property_epcGraphs AS $k => $property_epcGraph)
                {
                    $resource = Resource::select('id')
                        ->where('propertyID', $property_array['propertyID'])
                        ->where('url', $property_epcGraph['epcGraph'])
                        ->where('type', 'epcGraph')
                        ->first();

                    $resources[] = $resource->id;
                }

                $db_resources = Resource::where('propertyID', $property_array['propertyID'])
                    ->where('type','epcGraph')
                    ->get();

                foreach ($db_resources AS $K => $db_resource)
                {
                    if (!in_array($db_resource['id'], $resources)) {
                        Resource::destroy($db_resource['id']);
                        Storage::delete('public\\'.$db_resource['path']);
                    }
                }*/

            }

            //CRUD brochures & resources table
            if($property_model && isset($property_array['propertyID']) && count($property_brochures)){
                foreach ($property_brochures AS $k => $property_brochure)
                {
                    $resource = Resource::where('propertyID', $property_array['propertyID'])
                        ->where('url',$property_brochure['brochure'])
                        ->where('type','brochure')
                        ->first();

                    if($resource)
                    {
                        $db_modified = new \DateTime($resource['modified']);
                        $api_modified = new \DateTime($property_brochure['modified']);
                        if ($api_modified > $db_modified)
                        {
                            try{
                            //Update Record
                            Resource::destroy($resource['id']);
                            Storage::delete('public\\'.$resource['path']);

                            //Download brochure from url and upload to server
                            $content = file_get_contents($property_brochure['brochure']);
                            $name = substr($property_brochure['brochure'], strrpos($property_brochure['brochure'], '/') + 1);
                            Storage::put('public\\properties\\'.$property_array['propertyID'].'\\brochures\\'.$name, $content);

                            //Collect data and update to DB
                            $new_resource = new Resource;
                            $new_resource->propertyID = $property_array['propertyID'];
                            $new_resource->modified = $property_brochure['modified'];
                            $new_resource->url = $property_brochure['brochure'];
                            $new_resource->type = 'brochure';
                            $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\brochures\\'.$name;
                            $new_resource->sort_order = ($k+1);
                            $new_resource->created_at = session('now_date');
                            $new_resource->updated_at = session('now_date');
                            $new_resource->save();
                        } catch (\Exception $e) {
                            // Log the exception message
                            Log::error('Error downloading image: ' . $e->getMessage());
                        
                            // Optionally, you can notify via Telegram or any other method
                            $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                                'Status: FAILED'.chr(10).
                                'Date: '.date('Y-m-d H:i:s').chr(10).
                                'Error: Failed to download image for property ID ' . $property_array['propertyID'] . chr(10).
                                'Exception: '.$e->getMessage().chr(10);
                        
                            $data = [
                                'parse_mode' => 'Markdown',
                                'chat_id' => '-340968060',
                                'text' => $text
                            ];
                        
                            //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                        }
                        }
                    }else {
                        try {
                        //New Record
                        //Download brochure from url and upload to server
                        $content = file_get_contents($property_brochure['brochure']);
                        $name = substr($property_brochure['brochure'], strrpos($property_brochure['brochure'], '/') + 1);
                        Storage::put('public\\properties\\'.$property_array['propertyID'].'\\brochures\\'.$name, $content);

                        //Collect data and save to DB
                        $new_resource = new Resource;
                        $new_resource->propertyID = $property_array['propertyID'];
                        $new_resource->modified = $property_brochure['modified'];
                        $new_resource->url = $property_brochure['brochure'];
                        $new_resource->type = 'brochure';
                        $new_resource->path = 'properties\\'.$property_array['propertyID'].'\\brochures\\'.$name;
                        $new_resource->sort_order = ($k+1);
                        $new_resource->created_at = session('now_date');
                        $new_resource->updated_at = session('now_date');
                        $new_resource->save();
                    } catch (\Exception $e) {
                        // Log the exception message
                        Log::error('Error downloading brochure: ' . $e->getMessage());
                    
                        // Optionally, you can notify via Telegram or any other method
                        $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                            'Status: FAILED'.chr(10).
                            'Date: '.date('Y-m-d H:i:s').chr(10).
                            'Error: Failed to download brochure for property ID ' . $property_array['propertyID'] . chr(10).
                            'Exception: '.$e->getMessage().chr(10);
                    
                        $data = [
                            'parse_mode' => 'Markdown',
                            'chat_id' => '-340968060',
                            'text' => $text
                        ];
                    
                        //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
                    }
                    }
                    
                }


                /*Delete resources
                $resources = [];
                foreach ($property_brochures AS $k => $property_brochure)
                {
                    $resource = Resource::select('id')
                        ->where('propertyID', $property_array['propertyID'])
                        ->where('url', $property_brochure['brochure'])
                        ->where('type', 'brochure')
                        ->first();

                    $resources[] = $resource->id;
                }

                $db_resources = Resource::where('propertyID', $property_array['propertyID'])
                    ->where('type','brochure')
                    ->get();

                foreach ($db_resources AS $K => $db_resource)
                {
                    if (!in_array($db_resource['id'], $resources)) {
                        Resource::destroy($db_resource['id']);
                        Storage::delete('public\\'.$db_resource['path']);
                    }
                }*/

            }

        });

        $properties = Property::where('status', 1)
            ->get();

        foreach ($properties AS $k => $property) {
            if($property['updated_at'] != session('now_date')){
                Property::where('id', $property['id'])
                    ->update(['status' => 0, 'deleted_at' => session('now_date')]);
            }
        }

        session()->forget('now_date');

        Log::info('--- END of JupixRetrieve' );

        }catch(exception $e){
            //Telegram Update
            $now_date = date('Y-m-d H:i:s');

            //Success order telegram notification
            $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
                'Status: FAILED'.chr(10).
                'Date: '.$now_date.chr(10).
                'Exception: '.$e->getMessage().chr(10);

            $data = [
                'parse_mode' => 'Markdown',
                'chat_id' => '-340968060',
                'text' => $text
            ];

            //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
        }

        /*Telegram Update*/
        $now_date = date('Y-m-d H:i:s');

        //Success order telegram notification
        $text = '*JUPIX API UPDATE!*'.chr(10).chr(10).
            'Status: Success, All Data Updated on BH.'.chr(10).
            'Date: '.$now_date.chr(10);

        $data = [
            'parse_mode' => 'Markdown',
            'chat_id' => '-340968060',
            'text' => $text
        ];

        //$telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );
    }
}
