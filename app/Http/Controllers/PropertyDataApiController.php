<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDataApiController extends Controller
{
    public function ajax_stamp_duty(Request $request)
    {
        $validatedData = $request->validate([
            'value'         => 'required|numeric',
            'country'       => 'required',
            'additional'    => 'required',
        ]);

        //Assigning parms for API request
        $value      = $request->value;
        $country    = "england";
        $additional = 1;
        $first_time = 0;

        if(isset($request->country)){
            $country = $request->country;
        }

        if(isset($request->additional)){
            if($request->additional == "investment"){
                $additional = 1;
                $first_time = 0;
            }elseif($request->additional == "primary"){
                $additional = 0;
                $first_time = 0;
            }elseif($request->additional == "first"){
                $additional = 0;
                $first_time = 1;
            }
        }

        //prepare URL for API and get data
        $api_endpoint = env('PROPERTY_DATA_API').'&value='.$value.'&country='.$country.'&additional='.$additional.'&first_time='.$first_time;

        $api_result_jason = file_get_contents($api_endpoint);
        $api_result_array = json_decode($api_result_jason, true);

        return response()->json($api_result_array);
    }
}
