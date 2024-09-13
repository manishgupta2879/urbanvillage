<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


Route::get('/','PageController@show_home');
Route::get('who-we-are','PageController@show_who_we_are');
Route::get('meet-the-team','PageController@show_meet_the_team');
Route::get('valuation-request','PageController@show_valuation_request');
Route::post('send-valuation-request','PageController@send_request');
Route::get('blog','BlogController@show_all');
Route::get('blog/{slug}','BlogController@show_category');
Route::get('blog/view/{slug}','BlogController@show_single');
Route::get('free-home-staging-consultation','PageController@show_free_home_staging_consultation');
Route::get('home-staging-consultation-request','PageController@show_home_staging_consultation_request');
Route::post('send-home-staging-consultation-request','PageController@send_home_staging_consultation_request');
Route::get('market-updates','PageController@show_market_updates');
Route::get('market-updates/{slug}','PageController@show_market_updates_view');
Route::get('areas','PageController@show_areas');
Route::get('herne-hill','PageController@show_herne_hill');
Route::get('brixton','PageController@show_brixton');
Route::get('peckham','PageController@show_peckham');
Route::get('dulwich','PageController@show_dulwich');
Route::get('loughborough-junction','PageController@show_loughborough_junction');
Route::get('camberwell','PageController@show_camberwell');
Route::get('denmark-hill','PageController@show_denmark_hill');
Route::get('stockwell','PageController@show_stockwell');
Route::get('waterloo','PageController@show_waterloo');
Route::get('community-partnership','PageController@show_community_partner');
Route::get('sellers','PageController@show_sellers');
Route::get('landlords','PageController@show_landlords');
Route::get('full-scale-charges','PageController@show_full_scale_charges');
Route::get('testimonials','PageController@show_testimonials');
Route::get('single','PageController@show_single');
Route::get('contact','PageController@show_contact');
Route::post('send-contact-request','PageController@send_contact_request');
Route::get('listings','PageController@show_listings');
Route::get('ebook','PageController@show_ebook');
Route::get('complaints-procedure','PageController@show_complaints_procedure');
Route::get('vacancies','PageController@show_vacancies');
Route::get('terms-and-condition','PageController@show_terms_and_condition');
Route::get('privacy-policy','PageController@show_privacy_policy');
Route::get('cookie-policy','PageController@show_cookie_policy');
Route::get('class-list','PageController@show_class_list');
Route::post('send-class-list-request','PageController@send_class_list_request');
Route::get('mortgage-calculator','PageController@mortgage_calculator');
Route::get('stamp-duty-calculator','PageController@stamp_duty_calculator');
Route::get('life-magazines','PageController@life_magazines');
Route::get('new-aboutus','PageController@new_aboutus');

// property
Route::get('property/{url_type}','PageController@show_properties');
Route::get('property/{property_id}/{slug}','PageController@get_single_property');
Route::get('view-resource/{file}', function ($file) {
    $file_path = 'storage/'.str_replace('\\', '/', base64_decode($file));
    return response()->file(public_path($file_path));
});
Route::get('more_details.php','PageController@get_single_property_jupix');

//Property data API AJAX
Route::get('calculate-stamp-duty', 'PropertyDataApiController@ajax_stamp_duty');
Route::post('calculate-stamp-duty', 'PropertyDataApiController@ajax_stamp_duty');

//Jupix
Route::get('retrieve','JupixController@retrive_data');

Route::group(['prefix' => 'uvh-back-office'], function () {
    Voyager::routes();
});
