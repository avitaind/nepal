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
Route::get('/','HomeController@redirectToHome')->middleware('cacheable:5');
//Route::get('/', 'HomeController@redirectToHome');


Route::get('/support-demo','HomeController@supportDemo');

Route::get('/sales-enquiry', 'SalesEnquiryController@salesEnquiry');
Route::post('/sales-enquiry','SalesEnquiryController@enquirySaveData');

//Route::get('/cap', 'CustomController@campus');
//Route::get('/cap2', 'CustomController@campus2');
//Route::post('/', ['as'=>'campus.store','uses'=>'CustomController@campusSaveData']);
//Route::resource('campus','CustomController');


// Campus Controller
Route::get('/cap','CampusController@index'); 
Route::post('/cap','CampusController@storeDevice');
// Campus Controller
//Route::post('/subscription', 'HomeController@handleSubscription');
Route::post('subscribe', 'HomeController@handleSubscription');


//Pre Order Controller 
Route::resource('notify','NotifyController');
//Blogs Start
//Route::get('/blog','BlogController@index');

//Blogs
Route::get('/blog', 'BlogController@showBlogList')->name('blog');
Route::get('/blog/detail/{slug}', 'BlogController@showBlogDetail')->name('blog.detail');
//


Route::get('/Why-should-your-Personal-Laptop-be-Light-Weighted', 'BlogController@blog1');

Route::get('/Avita-Liber-Technology-to-keep-YOU-high-on-Fashion','BlogController@blog2');

Route::get('/Why-is-College-the-RIGHT-time-to-become-Creative', 'BlogController@blog3');

Route::get('/What-are-the-benefits-of-smart-scale', 'BlogController@blog4');

Route::get('/AVITAs-Guide-to-Buying-the-Perfect-Student-Laptop', 'BlogController@blog5');

Route::get('/AVITA-Magus–8-Wonderful-Benefits-of-a-2-in-1-Laptops', 'BlogController@blog6');

Route::get('/why-millennials-are-choosing-cloud-storage-for-personal-computing','BlogController@blog7');

Route::get('/ssd-storage-for-modern-laptops', 'BlogController@blog8');


Route::get('/AVITA-breaks-down-the-Most-Creative-Career-Choices-students-make-today','BlogController@blog9');


//Blogs End
//Events Starts


Route::get('/ces-events','EventsController@event1');


Route::get('/AVITA-launches-stylish-ADMIROR-notebooks', 'EventsController@event2');

Route::get('/Hong-Kong-tech-innovator-Nexstgo-returns-to-COMPUTEX-2019_final','EventsController@event3');
Route::get('/ces-events-2020','EventsController@event4');
Route::get('/avita-appoints-ingram-micro','EventsController@event5');

//Events End


//sitemap

Route::get('/sitemap.xml', 'HomeController@sitemap');

Route::get('/lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
//Route::get('/country/{country}', ['as' => 'country.switch', 'uses' => 'CountryController@switchCountry']);


// OAuth Routes
//Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


// Global URLs.

Route::get('/entry','HomeController@entry');


Route::get('/aboutus', 'HomeController@getAboutUs');
Route::get('/contact-us', 'HomeController@getContactUs');
Route::get('tnc', 'HomeController@getTerms');

// Route::get('/imago', 'HomeController@getImago')->name('imago');
// Route::get('/imago/spec', 'HomeController@getImagoSpec')->name('imago.spec');
// Route::get('/modus', 'HomeController@getModus')->name('modus');

//redirect to https://avita-americas.com/
/*Route::get('/us', function(){
    return redirect('https://avita-americas.com/');
});
*/

// User Login
Route::get('/member/profile', 'MemberController@showProfile')->middleware(['auth'])->name('member.profile');
Route::post('/member/profile', 'MemberController@handleUpdateDetails');
Route::get('/member/change_password', 'MemberController@showChangePasswordForm')->name('member.change_password');
Route::post('/member/change_password', 'MemberController@handleChangePasswordForm')->name('member.change_password');
Route::get('/member/product_list', 'MemberController@showProductList')->name('member.product_list');

Route::get('/member/product_reg', 'MemberController@showProductRegForm')->name('member.product_reg');
Route::post('/member/product_reg', 'MemberController@handleProductRegistration');
Route::get('/member/success', 'MemberController@success');
Route::get('/member/product_reg_success', 'MemberController@showProduct_reg_success');


//EDM


Route::auth();
Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

// ====================================
// API

Route::get('api/drivers', 'ProductsController@showDriverComponent');
Route::get('api/products/types', 'ProductsController@showProductTypes');
Route::get('api/products/series', 'ProductsController@showProductSeries');
Route::get('api/products/marketing_numbers', 'ProductsController@showProductMarketingNumbers');
Route::get('api/products/numbers', 'ProductsController@showProductNumbers');
Route::get('api/products/models', 'ProductsController@showProductModels');

// ====================================
// Mirror Integration
Route::get('auth/login', 'Integration\LoginController@handleLoginRequest');
Route::get('/app/{app_code}/approve',  'Integration\ApplicationController@showApprovalForm')->name('integration.approval');
Route::post('/app/{app_code}/approve',  'Integration\ApplicationController@handleApproval');

if ( Request::segment(1) != 'admin') {

    // Route::group(['prefix' => '{country}',  'middleware' => 'country' ], function() {

    // Pages
    Route::get('/repair-tnc', 'HomeController@getRepairTerms')->name('repair-tnc');
    
   Route::get('/support', 'HomeController@getSupport')->name('support');

 
    Route::get('/search_result', 'HomeController@getSearch_result');


    //News and Media | Article
    Route::get('news', 'ArticleController@showArticleList')->name('news');
    Route::get('/news/detail/{slug}', 'ArticleController@showArticleDetail')->name('news.detail');

    //
    // News
    //Route::get('/news/{month?}', 'NewsController@showNewsList')->name('news');
    //Route::get('/news/detail/{slug}', 'NewsController@showNewsDetail')->name('news.detail');

    //Route::group(['prefix' => '{country}',  'middleware' => 'country' ], function() {
    // Products
    //Route::get('/products', 'ProductsController@products');

    Route::get('/products', 'ProductsController@getProducts')->name('products');
    Route::get('/accessories/mouse', 'ProductsController@mouse');

    
    //});


//    Route::get('/accessories/{slug}', 'ProductsController@showAccessoriesFeatures')->name('accessories.overview');
  //  Route::get('/accessories/{slug}/spec', 'ProductsController@showAccessoriesSpec')->name('accessories.spec');



    Route::get('/product/{slug}', 'ProductsController@showProductFeatures')->name('product.overview');
    Route::get('/product/{slug}/spec_new', 'ProductsController@showProductSpecNew')->name('product.spec_new');
    Route::get('/product/{slug}/spec', 'ProductsController@showProductSpec')->name('product.spec');
    Route::get('/product/{slug}/support', 'ProductsController@showProductSupport')->name('product.support');
   // Route::get('/product/{slug}/where_to_buy', 'ProductsController@whereToBuy')->name('product.map');
  
   Route::get('where-to-buy', 'ProductsController@whereToBuy');

   Route::get('/searchWhereToBuy', 'WhereToBuyController@searchWhereToBuy');

    //  });

}

//Route::post('/search', 'HomeController@search')->name('full-text-search.action');

// ====================================
// Admin CMS routes
//
Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function( $route ) {

    // Authentication Routes...
    Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@login');
    Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');

    // Password Reset Routes...
    Route::get('password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'AdminResetPasswordController@reset');

});




Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin'],  'namespace' => 'Admin', 'as' => 'admin.'], function ( $route ) {

    Route::get('/', 'HomeController@getHome')->name('home');

    Route::get ('change_password', 'HomeController@showChangePasswordForm');
    Route::post('change_password', 'HomeController@updateChangePasswordForm');

    Route::resource('users', 'UsersController');

    Route::get('device_data_export', 'DeviceDataController@downloadForm');
    Route::post('device_data_export', 'DeviceDataController@handleDownload');

// EDM subscription
//   Route::post('/subscription', 'SubscriptionController@handleSubscription');

   

//Route::get('/subscription','SubscriptionController@index'); 
//Route::post('/subscription','SubscriptionController@storeDevice');


  // Route::get('subscription', 'SubscriptionController@showSubcriptionList');
    

//    Route::get('registrations', 'RegistrationsController@showRegistrationList');


    
  //  Route::resource('news', 'NewsController');


    Route::get('export', 'CustomersController@export')->name('customers.export');
    Route::post('customer/{customer}/export-data', 'CustomersController@exportDeviceData')->name('customer.export-data');
    Route::resource('customers', 'CustomersController');


    Route::resource('product_types', 'ProductTypesController');
    Route::resource('products', 'ProductsController');
    Route::resource('shops', 'ShopsController', ['except' => ['show']] );
    Route::resource('service-provider', 'ServiceProviderController');

    Route::resource('products.models', 'ProductModelsController', ['except' => ['index']]);

    Route::resource('faqs', 'FAQsController');
    Route::resource('warranties', 'WarrantyTermsController');

    Route::resource('repair_tnc', 'RepairTermController');
//    Route::get('/repair_tnc', 'SettingController@getRepairTerms')->middleware('can:manage-service-data');
//    Route::post('/repair_tnc', 'SettingController@postRepairTerms')->middleware('can:manage-service-data');

    Route::resource('service_centers', 'ServiceCenterController');
    Route::post('file_uploads', 'FileUploadController@uploadImage')->name('image_upload');

    
});
Route::get('/support', 'SearchController@index')->name('support');

Route::post('/support', 'HomeController@handleSupportRedirect');

Route::get('/search', 'SearchController@search');


Route::get('locale/{locale}','HomeController@local');
Route::get('april-fools', 'HomeController@fools');