<?php

namespace App\Http\Controllers;

use Auth;
use App\Country;
use App\Product;
use App\ProductModel;
use App\RepairTerm;
use App\ServiceCenter;
use App\Settings;
use Illuminate\Http\Request;
use App\Subscription;
use App\Mailers\AppMailer;

class HomeController extends Controller
{

    public function redirectToHome( ) {

       return view('home');

    }

    public function fools( ) {

        return view('april-fools.index');
 
     }

    public function entry(){
        return view('global');
    }

    public function sitemap(){
        return response()->view('sitemap')
            ->header('Content-Type', 'xml');
    }

    public function getHome(){
		$country = 'in';
        $supported_countries = array_keys( config('constants.countries') );

        if (in_array($country, $supported_countries)) {
            return view('home');
        } else {

            // unset country
            session(['country' => null]);
            return redirect()->to('/');
        }


    }

    public function getTerms( ){

        $locale = app()->getLocale();

        if ( $locale == 'id' ) {
            $view_name = 'pages.terms_and_conditions_id';
        } elseif ( $locale == 'th')  {
            $view_name = 'pages.terms_and_conditions_thai';
        } else {
            $view_name = 'pages.terms_and_conditions';
        }

        return view($view_name);
    }

    public function getAboutUs( ) {
        return view('pages.about_us');
    }

/*
   public function getSupport( ){

        $productModels = ProductModel::all();

        $country = 'in';
        $serviceCenters = ServiceCenter::whereCountry($country)->get();

        return view('pages.support-new', compact('productModels', 'serviceCenters'));
    }
*/

    public function search(Request $request)
     {
           if($request->ajax())
            {
             $data = Full_text_search::search($request->get('full_text_search_query'))->get();
       
             return response()->json($data);
            }
     }       



    public function getSupport( ){

        $productModels = ProductModel::all();

        $country = 'in';
        $serviceCenters = ServiceCenter::whereCountry($country)->get();

        return view('pages.support', compact('productModels', 'serviceCenters'));
    }


    /*public function supportDemo(){

        return view('support-demo');

    }

    public function local($locale){

    Session::put('locale', $locale);
    return redirect()->back();

    }
*/

    public function handleSupportRedirect(Request $request) {
        $this->validate($request, [
            'product_number'   => 'required',
     //       'product_model'  => 'required',
            'type'             => 'required',
            'series'           => 'required',
            'marketing_number' => 'required',
        ]);

        $product_model = $request->get('product_model');
        $product_number = $request->get('product_number');
        $product_type = $request->get('type');
        $product_series = $request->get('series');

        // Finding the short code

        $short_code = 'liber';

        $params = ['slug'   => $short_code,
                   'model'  => $product_model,
                   'pn'     => $product_number,
                   'type'   => $product_type,
                   'series' => $product_series,
                   'marketing_number' => $request->get('marketing_number')];

        return redirect()->route('product.support', $params);
    }

    public function getSearch_result( ){
        return view('pages.search_result');
    }
    
  

    public function showCountrySelections( ){
        return view('pages.global');
    }

    public function getContactUs( ){

        // Determine which contact_us page by region

        $country_code = session('country', 'in');

        $view_name = 'pages.contact-us-'.$country_code;

        if ( !\View::exists($view_name) ) {
            $view_name = 'pages.contact-us';
        }

        return view( $view_name );

    }

    public function getPromotionVanillaAir( ) {
        return view('pages.promotion_vanilla_air');
    }

    public function getRepairTerms( ){

     $title = __('site.footer-repair-tnc');
	            return view('pages.repair-tnc', ['title' => $title]);


    }

    public function handleSubscription(Request $request, AppMailer $mailer) {

        $this->validate($request, [
             'email'     => 'required',
            ]);
    
        $subscription = new Subscription([
           'email'     => $request->input('email'),
         ]);
        
           
        $subscription->save();
        $mailer->sendSubscriberInformation(Auth::user(), $subscription);
        return redirect()->back()->with("status", "Thanks for Subscribing, We will connect you shortly.");
        


    }


    public function getImago(Request $request) {
        return view('product.imago');
    }

    public function getImagoSpec(Request $request){
        return view('product.imago_spec');
    }

    public function getModus() {
        return view('product.modus');
    }
}
