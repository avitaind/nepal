<?php

namespace App\Http\Controllers;
use App\ASPAPIService;
use App\Product;
use App\ProductModel;
use App\Shop;
use App\NewWhereToBuy;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    protected function productFromURL($country, $slug ) {

        $country = 'in';
        $product = Product::whereCountry($country)->where('short_code', $slug)->first();

        // Fallback..
        if ( !$product ) {
            $product = Product::where('short_code', $slug)->first();
        }

        return $product;
    }

    public function mouse(){
        return view('mouse');
    }

    public function getproducts(){
        return view('product.overview');
    }


    public function showAccessoriesFeatures( $slug) {
        $country = 'in';
        $accessories = $this->productFromURL($country, $slug);

    if ( $slug == 'ubique' ){

            switch ( $country ) {
                case 'in':
                    return view('accessories.mouse.feature_hk_en', compact( 'accessories'));
                    break;
            }
        }
    }


    public function showProductFeatures( $slug) {
        $country = 'in';
        $product = $this->productFromURL($country, $slug);


     		
		if ( $slug == 'essential' ){  
			
			switch ( $country ) {
				case 'in':  
                        return view('product.essential.feature_hk_en', compact( 'product')); 
                        break;
                    }
                }
				
       
     if ( $slug == 'magus-lite' ){

            switch ( $country ) {
                case 'in':
                    return view('product.magus-lite', compact( 'product'));
                    break;
            }
        }

    if ( $slug == 'liber-v' ){

            switch ( $country ) {
                case 'in':
                    return view('product.liber-v.feature_hk_en', compact( 'product'));
                    break;

            }
        }
  
        if ( $slug == 'liber-v-gold' ){

            switch ( $country ) {
                case 'in':
                    return view('product.liber-v-gold.feature_hk_en_demo', compact( 'product'));
                    break;

            }
        }
        if ( $slug == 'liber-v-gold-black' ){

            switch ( $country ) {
                case 'in':
                    return view('product.liber-v-gold.feature_hk_black_en', compact( 'product'));
                    break;

            }
        }
        if ( $slug == 'liber-v-gold-blue' ){

            switch ( $country ) {
                case 'in':
                    return view('product.liber-v-gold.feature_hk_blue_en', compact( 'product'));
                    break;

            }
        }
      /*  if ( $slug == 'cosmos' ){

            switch ( $country ) {
                case 'in':
                    return view('product.cosmos.feature_hk_en', compact( 'product'));
                    break;

            }
        }
    */
        if ( $slug == 'admiror' ){

            switch ( $country ) {
                case 'in':
                    return view('product.admiror.feature_hk_en', compact( 'product'));
                    break;

            }
        }

        if ( $slug == 'pura' ){

            switch ( $country ) {
                case 'in':
                    return view('product.pura.feature_hk_en', compact( 'product'));

                    break;

            }
        }
       /*
        if ( $slug == 'pura-amd' ){

            switch ( $country ) {
                case 'in':
                    return view('product.pura.amd_feature_hk_en', compact( 'product'));

                    break;

            }
        }
        */
        if ( $slug == 'liber-new-generation' ){

            switch ( $country ) {
                case 'in':
                    return view('product.liber-new-generation.feature', compact( 'product'));

                    break;

            }
            
        }

        if ( $slug == 'magus-lite-2in1-laptop' ) {
                return view('product.magus', compact( 'product'));
        }
        if ( $slug == 'magus12-2in1-laptop-c' ) {
            return view('product.magus_tc', compact( 'product'));
        }
        if ( $slug == 'magus-spec' ) {
            if ( $country == 'id' ) {
                return view('product.magus_spec_id', compact( 'product'));
            } else {
                return view('product.magus_spec_hk', compact( 'product'));
            }
        }
        if ( $slug == 'magus-lite-spec' ) {
            return view('product.magus_lite_spec', compact( 'product'));
        }

        if ( !$product ) {
            abort(404);
        }

        $view = $product->getFeatureView( );

        if (!$view){
            abort(404);
        }

        return view($view, compact('product'));
    }

   /* public function showProductSpecNew( $slug) {
        
        $country = 'in';
        $product = $this->productFromURL($country, $slug);

        if ( !$product ) {
            abort(404);
        }

        $view = $product->getSpecView( );

        if (!$view){
            abort(404);
        }

        return view('product.liber_spec_new');
    }
    */

    public function showAccessoriesSpec( $slug) {
        $country = 'in';
        $accessories = $this->productFromURL($country, $slug);

        if ( $slug == 'ubique' ){
            switch ( $country ) {
                case 'in':
                    return view('accessories.mouse.spec_hk_en', compact( 'accessories'));

                    break;
            }
        }
    }


    public function showProductSpec( $slug) {
        $country = 'in';
        $product = $this->productFromURL($country, $slug);

        if ( $slug == 'essential' ){  
			
			switch ( $country ) {
				case 'in': 
                        return view('product.essential.spec_hk_en', compact( 'product')); 
                        break;
					}
                } 
         
        if ( $slug == 'liber-v' ){
            switch ( $country ) {
                case 'in':
                    return view('product.liber-v.spec_hk_en', compact( 'product'));
                    break;
            }
        }

        if ( $slug == 'liber-v-gold' ){
            switch ( $country ) {
                case 'in':
                    return view('product.liber-v-gold.spec_hk_en', compact( 'product'));

                    break;
            }
        }
       
   
        if ( $slug == 'cosmos' ){
            switch ( $country ) {
                case 'in':
                    return view('product.cosmos.spec_hk_en', compact( 'product'));

                    break;
            }
        }

        if ( $slug == 'admiror' ){
            switch ( $country ) {
                case 'in':
                    return view('product.admiror.spec_hk_en', compact( 'product'));

                    break;
            }
        }

        if ( $slug == 'pura' ){
            switch ( $country ) {
                case 'in':
                    return view('product.pura.spec_hk_en', compact( 'product'));

            }
        }

       /* if ( $slug == 'pura-amd' ){
            switch ( $country ) {
                case 'in':
                    return view('product.pura.amd_spec_hk_en', compact( 'product'));

            }
        }
        */

        if ( $slug == 'liber-new-generation' ){
            switch ( $country ) {
                case 'in':
                    return view('product.liber-new-generation.spec', compact( 'product'));

                    break;
            }
            
        }


        if ( !$product ) {
            abort(404);
        }

        $view = $product->getSpecView( );

        if (!$view){
            abort(404);
        }


        return view($view, compact('product'));
    }
    public function showProductSupport(Request $request, $slug) {
        $country = 'in';
        $product = $this->productFromURL($country, $slug);

        if ( !$product ) {
            abort(404);
        }

//        $product_model = $request->get('model');
//        $product_number =
//        $product_type = $request->get('type');
//        $product_series = $request->get('series');

        $json_data = [
            'product_model' =>  $request->get('model'),
            'product_number' => $request->get('pn'),
            'product_type' => $request->get('type'),
            'product_series' => $request->get('series'),
            'marketing_number' => $request->get('marketing_number')
        ];

        return view('product.support', compact('product', 'slug', 'json_data'));
    }

    public function whereToBuy(){

        $rshops = NewWhereToBuy::all();
        $country = 'in';

        if ( \App::isLocale('en') ) {
            $equery = Shop::select('shops.*')->leftJoin('shop_translations', function ($join) {
                $join->on('shops.id', '=', 'shop_translations.shop_id');
                $join->on('shop_translations.locale', '=', \DB::raw('"en"') );
            });
            $rquery = Shop::select('shops.*')->leftJoin('shop_translations', function ($join) {
                $join->on('shops.id', '=', 'shop_translations.shop_id');
                $join->on('shop_translations.locale', '=', \DB::raw('"en"') );
            });
               
            } else {
            $equery = Shop::select();
            $rquery = Shop::select();

        }

        $equery->where('country', $country);
        $equery->where('enabled', true);
        $equery->where('priority', 1);
        $eshops = $equery->get();
    //    $rquery->orwhere('priority', 0);
    //    $rshops = $rquery->get();

        return view('product.map', compact('eshops','rshops'));

    }

    /*public function whereToBuy(){
        $country = 'in';
        $product = Product::select();
      
        if ( !$product ) {
            abort(404);
        }
        if ( \App::isLocale('en') ) {
            $query = Shop::select('shops.*')->leftJoin('shop_translations', function ($join) {
                $join->on('shops.id', '=', 'shop_translations.shop_id');
                $join->on('shop_translations.locale', '=', \DB::raw('"en"') );
            })
                ->orderBy('shop_translations.priority', 'desc');

        } else {
            $query = Shop::select();
        }
        $query->where('country', $country);
        $query->where('enabled', true);
        $shops = $query->get();
      dd( $shops );
    
            return view('product.map', compact('product', 'shops'));
    
    }

    */
    

    public function showDriverComponent(Request $request) {

        $product_number = $request->get('product_number');

        // Get drivers list from asp server.
        $all_drivers = ASPAPIService::getDriversForModelNumber($product_number);

        $total = $all_drivers->reduce(function ( $carry, $item ) {
            return $carry + count( $item );
        });

        if ( !$total ) {
            $total = 0;
        }

        return view('product.drivers', compact('all_drivers', 'total'));
    }

    public function showProductTypes(Request $request) {
        return ASPAPIService::getProductTypes( );
    }

    public function showProductSeries(Request $request) {

        $type = $request->get('type');
        return ASPAPIService::getProductSeries($type);

    }

    public function showProductMarketingNumbers(Request $request) {
        $series = $request->get('series');
        return ASPAPIService::getProductMarketingNumbersBySeries($series);
    }

    public function showProductNumbers(Request $request) {

        if ( $request->has('marketing_number' ) ) {
            return ASPAPIService::getProductNumbersByMarketingNumber( $request->get('marketing_number') );
        } else {
            return ASPAPIService::getProductNumbersByProductSeries( $request->get('series') );
        }
      
    }

    public static function showProductModels(Request $request) {

        return ASPAPIService::getProductModels( $request->get('product_number'), $request->get('marketing_number'));

    }

}
