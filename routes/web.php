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



Route::get('/select/test','adminController@select');



Route::get('/sms/test','clientController@sms');

Route::get('/corrier/tracking','clientController@corrier');



Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);

Route::get('405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);

Route::get('/ajax-subcat','adminController@sub');

Route::get('/ajax-product-type','adminController@type');




Route::get('/admin/logout','adminController@logout');
Route::get('/admin','adminController@admin_login_view');
Route::post('/admin/login','adminController@index');

Route::get('/admin/home/view/admin','adminController@admin_list_view');
Route::get('/admin/home/view/admin/{id}','adminController@admin_specific_view');
Route::get('/admin/home/view/admin/edit/admin/{id}','adminController@edit_admin_view');
Route::post('/admin/home/view/admin/edit/admin/{id}','adminController@edit_admin');
Route::post('admin/home/create/admin','adminController@create_admin');
Route::get('/admin/home/create/admin','adminController@create_admin_view');


Route::get('/admin/home','adminController@admin_home');
Route::get('/admin/home/add/brand','adminController@add_brand_view');
Route::post('/admin/home/add/brand','adminController@add_brand');

Route::get('/admin/home/view/brand','adminController@brand_list_view');
Route::get('/admin/home/edit/brand/{sku}','adminController@edit_brand_view');
Route::post('/admin/home/edit/brand/{sku}','adminController@edit_brand');

Route::get('/admin/home/add/main/category','adminController@add_main_category_view');
Route::post('/admin/home/add/main/category','adminController@add_main_category');

Route::get('/admin/home/add/sub/category','adminController@add_sub_category_view');
Route::post('/admin/home/add/sub/category','adminController@add_sub_category');

Route::get('/admin/home/view/main/category','adminController@main_category_list_view');
Route::get('/admin/home/view/sub/category','adminController@sub_category_list_view');

Route::get('/admin/home/edit/main/category/{sku}','adminController@edit_main_category_view');
Route::post('/admin/home/edit/main/category/{sku}','adminController@edit_main_category');

Route::get('/admin/home/edit/sub/category/{sku}','adminController@edit_sub_category_view');
Route::post('/admin/home/edit/sub/category/{sku}','adminController@edit_sub_category');

Route::get('/admin/home/add/product','adminController@add_product_view');
Route::post('/admin/home/add/product','adminController@add_product');

Route::get('/admin/home/edit/product/{id}','adminController@edit_product_view');
Route::post('/admin/home/edit/product/{id}','adminController@edit_product');

Route::get('/admin/home/add/product/type','adminController@add_product_type_view');
Route::post('/admin/home/add/product/type','adminController@add_product_type');

Route::get('/admin/home/view/product/type','adminController@product_type_list_view');
Route::get('/admin/home/edit/product/type/{pk_id}','adminController@edit_product_type_view');
Route::post('/admin/home/edit/product/type/{pk_id}','adminController@edit_product_type');
Route::get('/admin/home/delete/main/category/{pk_id}','adminController@delete_main_category');
Route::get('/admin/home/delete/sub/category/{pk_id}','adminController@delete_sub_category');
Route::get('/admin/home/delete/brand/{pk_id}','adminController@delete_brand');

Route::get('/admin/home/view/product','adminController@product_list_view');
Route::get('/admin/home/view/product/{id}','adminController@product_detail_view');
Route::get('/admin/home/delete/product/{id}','adminController@delete_product');
Route::get('/admin/home/delete/product/type/{id}','adminController@delete_product_type');

Route::get('/admin/home/view/product/status/update/{pk_id}/{status}','adminController@updateProductStatus');


Route::get('/admin/home/view/active/orders','adminController@active_order_view');
Route::get('/admin/home/view/active/order/view/specific/order/{id}','adminController@active_order_detail_view');
Route::post('/admin/home/order/update/status','adminController@update_order_status');

Route::post('/client/home/orderss/update/status','clientController@update_order_status');

Route::post('/admin/home/vendor/update/status','adminController@update_vendor_status');

Route::get('/admin/home/view/complete/orders','adminController@complete_order_list_view');
Route::get('/admin/home/view/complete/order/view/specific/order/{id}','adminController@complete_order_detail_view');


Route::get('/admin/home/view/cancel/orders','adminController@cancel_order_list_view');
Route::get('/admin/home/view/cancel/order/view/specific/order/{id}','adminController@cancel_order_detail_view');


Route::get('/admin/home/view/return/orders','adminController@return_order_list_view');
Route::get('/admin/home/view/return/order/view/specific/order/{id}','adminController@return_order_detail_view');

Route::get('/admin/home/view/reporting/by/products','adminController@reporting_by_product_list_view');

Route::post('admin/home/search/reporting/by/product','adminController@search_reporting_byProduct');
Route::post('admin/home/search/reporting/category/product','adminController@search_reporting_bycategory');


Route::get('/admin/home/view/detail/reporting/by/products/{id}','adminController@reporting_by_product');

Route::get('/admin/home/view/reporting/by/customer','adminController@customer_reporting_list_view');
Route::get('/admin/home/view/detail/reporting/by/customer/{id}','adminController@customer_reporting');
//Route::get('/admin/home/view/detail/reporting/by/specific/customer/{id}','adminController@customer_specific_reporting');


Route::get('/admin/home/view/reporting/by/sale','adminController@reporting_by_sale_list_view');
Route::get('/admin/home/view/detail/reporting/by/sale/{id}','adminController@reporting_by_sale');

Route::get('/admin/home/add/discount','adminController@add_discount_view');
Route::post('/admin/home/add/discount','adminController@add_discount');
Route::get('/admin/home/view/discount','adminController@view_discount');

Route::get('/admin/home/edit/discount/{id}','adminController@edit_discount_view');
Route::post('/admin/home/edit/discount/{id}','adminController@edit_discount');
Route::get('/admin/home/delete/discount/{id}','adminController@delete_discount');

Route::get('/admin/home/add/promo','adminController@add_promo_view');
Route::post('/admin/home/add/promo','adminController@add_promo');

Route::get('/admin/home/view/promo','adminController@view_promo_list');
Route::get('/admin/home/view/promo/{id}','adminController@promo_detailed_view');

Route::post('/cancel_active_order/{id}','clientController@return_active_order');

Route::get('/customer-cancel-active-order/{id}','clientController@cancel_active_order');


Route::get('/admin/home/edit/promo/{id}','adminController@edit_promo_view');
Route::post('/admin/home/edit/promo/{id}','adminController@edit_promo');
Route::get('/admin/home/delete/promo/{id}','adminController@delete_promo_code');

Route::get('/admin/home/view/promo/status/update/{pk_id}/{status}','adminController@update_promo_status');


Route::get('/admin/home/view/vendor','adminController@vendor_list_view');


Route::get('/admin/home/delete/vendor/{id}','adminController@delete_vendor');

Route::get('/admin/home/view/vendor/{id}','adminController@vendor_detail_view');

Route::get('/admin/home/view/pending/products','adminController@pending_product_list_view');
Route::get('/admin/home/view/pending/products/view/detail/product/{id}','adminController@pending_product_detail_view');
Route::post('/admin/home/product/update/status','adminController@update_ven_product_status');

Route::get('/admin/home/view/approved/products','adminController@approved_product_list_view');
Route::get('/admin/home/view/approved/products/view/detail/product/{id}','adminController@approved_product_detail_view');


Route::get('/admin/home/view/cancel/products','adminController@cancel_product_list_view');
Route::get('/admin/home/view/cancel/products/view/detail/product/{id}','adminController@cancel_product_detail_view');

Route::post('/admin/home/vendor/order/update/status','adminController@update_vendor_order_status');
Route::post('/admin/home/update/payment/status','adminController@update_vendor_payment_status');

Route::get('/admin/view/vendor/reporting','adminController@vendor_reporting_list_view');
Route::get('/admin/view/vendors/payments','adminController@vendor_payments_list_view');
Route::post('/admin/view/vendor/payment','adminController@create_payment');





Route::get('product/{main?}/{sub?}/{type?}','clientController@searchByCategory');



Route::get('productss/{main}','clientController@searchByCategoryy');


 Route::get('/','clientController@home_view');
  Route::get('/home','clientController@home_view');
  
    Route::get('/shop','clientController@shop');
    
Route::get('/{main?}','clientController@sub_Category');
    Route::get('/sale','clientController@sale');
 
Route::get('/ajax-size','clientController@size');

Route::get('/client/signup','clientController@create_client_view');
Route::post('/signup','clientController@create_client');

Route::post('/search','clientController@search');

Route::get('/search/wishlist','clientController@search_wishlist');
Route::post('/search/wishlist/by/name','clientController@search_wishlist_by_name');
Route::post('/search/wishlist/by/username','clientController@search_wishlist_by_username');
Route::get('/view/wishlist','clientController@view_wishlist');
Route::get('/delete/wishlist/{id}','clientController@delete_wishlist');


Route::post('/product/add/wishlist/{id}','clientController@add_wishlist');


Route::get('/client/login','clientController@client_login_view');
Route::post('/login','clientController@client_login');

Route::get('/client/logout','clientController@client_logout');

Route::get('/payment/policy','clientController@payment_policy');

Route::get('/men/collection','clientController@men_collection_view');

Route::get('/handbags','clientController@women_handbags_view');

Route::get('/products/details/{pk_id}/{sku}','clientController@product_detail_view');

Route::post('/product/add/cart/{pk_id}','clientController@addToCart');

Route::post('/product/buy/now/{pk_id}','clientController@buynow');

Route::get('/cart/items','clientController@getCart');

Route::get('/about/us','clientController@about_us');
Route::get('/accounts','clientController@accounts');
Route::get('/our/faq','clientController@faq');
Route::get('/returns/and/refunds','clientController@returns');
Route::get('/privacy/policy','clientController@privacy_policy');

Route::get('/vendor/policy','clientController@vendor_policy');

Route::get('/warranty/and/repairs','clientController@warranty_and_repairs');
Route::get('/contact/us','clientController@contact_us');
Route::post('/contact','clientController@contact');

Route::get('/terms/and/conditions','clientController@terms');


Route::get('/cart/guest/checkout','clientController@guest_checkout_view');
Route::post('/cart/guest/checkout','clientController@guest_checkout');

Route::get('/cart/checkout','clientController@checkout_view');
Route::post('/cart/checkout','clientController@login');

Route::get('/cart/checkout/address','clientController@address_view');
Route::post('/cart/checkout/address','clientController@address');

Route::get('/cart/checkout/add/address','clientController@add_address_view');
Route::post('/cart/checkout/add/address','clientController@add_address');

Route::get('/cart/checkout/add/new/address','clientController@add_new_address_view');
Route::post('/cart/checkout/add/new/address','clientController@add_new_address');

Route::get('/cart/checkout/address/view/order/{id}','clientController@order_view');
Route::get('/cart/checkout/address/view/order/complete/order/{id}','clientController@order_payment_view');



Route::post('/cart/checkout/address/view/order/complete/order/cod','clientController@cod_confirm_order');
Route::post('/cart/checkout/address/view/order/complete/order','clientController@wallet_confirm_order');

Route::get('/cart/guest/checkout/address/view/order/complete/order','clientController@guest_payment_view');
Route::post('/cart/guest/checkout/address/view/order/complete/order','clientController@guest_confirm_order');

Route::post('/cart/checkout/address/view/order/complete/order/add/promo/{sub_cat}/{price}','clientController@add_promo_code');

Route::get('/delete/carts/{id}/{size}/{qty}','clientController@removeCart');

Route::get('/see/cancel/balances','clientController@cancel_balances');

Route::get('order/tracking/view','clientController@order_tracking_view');
Route::get('/order/tracking/detail/{id}','clientController@order_tracking_detail_view');
Route::get('guest/order/tracking/view','clientController@guest_order_tracking_view');

Route::post('order/tracking','clientController@order_tracking');
Route::post('guest/order/tracking','clientController@guest_order_tracking');

Route::get('/client/ajax-size','clientController@size_detail');





Route::get('vendor/signup','vendorController@vendor_signup_view');
Route::get('/vendor/logout','vendorController@logout');

Route::post('vendor/signup','vendorController@create_vendor');
Route::get('/vendor/home','vendorController@vendor_home');

Route::get('vendor/login','vendorController@vendor_login_view');
Route::post('vendor/login','vendorController@vendor_login');

Route::get('vendor/profile/{id}','vendorController@vendor_profile');
Route::get('vendor/profile/edit/{id}','vendorController@edit_vendor_profile');

Route::post('vendors/profile/edit/{id}','vendorController@edit_vendors_profile');

Route::get('/vendor/home/view/active/order/view/specific/order/{id}/{o_id}','vendorController@active_order_detail_view');
Route::get('/vendor/home/view/complete/order/view/specific/order/{id}/{o_id}','vendorController@complete_order_detail_view');
Route::get('/vendor/home/view/cancel/order/view/specific/order/{id}/{o_id}','vendorController@cancel_order_detail_view');
Route::get('/vendor/home/view/return/order/view/specific/order/{id}/{o_id}','vendorController@return_order_detail_view');


Route::get('/vendor/home/add/product','vendorController@add_product_view');
Route::post('/vendor/home/add/product','vendorController@add_product');

Route::get('/vendor/home/edit/product/{id}','vendorController@edit_product_view');
Route::post('/vendor/home/edit/product/{id}','vendorController@edit_product');
Route::get('/vendor/home/delete/product/{id}','vendorController@delete_product');


Route::get('/vendor/home/add/main/category','vendorController@add_main_category_view');
Route::post('/vendor/home/add/main/category','vendorController@add_main_category');

Route::get('/vendor/home/add/sub/category','vendorController@add_sub_category_view');
Route::post('/vendor/home/add/sub/category','vendorController@add_sub_category');

Route::get('/vendor/home/view/main/category','vendorController@main_category_list_view');
Route::get('/vendor/home/view/sub/category','vendorController@sub_category_list_view');

Route::get('/vendor/home/edit/main/category/{sku}','vendorController@edit_main_category_view');
Route::post('/vendor/home/edit/main/category/{sku}','vendorController@edit_main_category');

Route::get('/vendor/home/edit/sub/category/{sku}','vendorController@edit_sub_category_view');
Route::post('/vendor/home/edit/sub/category/{sku}','vendorController@edit_sub_category');

Route::get('/vendor/home/delete/main/category/{pk_id}','vendorController@delete_main_category');
Route::get('/vendor/home/delete/sub/category/{pk_id}','vendorController@delete_sub_category');

Route::get('/vendor/home/view/product','vendorController@product_list_view');
Route::get('/vendor/home/view/product/{id}','vendorController@product_detail_view');
Route::get('/vendor/home/pending/product','vendorController@pending_product_list_view');
Route::get('/vendor/home/approved/product','vendorController@approved_product_list_view');
Route::get('/vendor/home/cancel/product','vendorController@cancel_product_list_view');

Route::get('/vendor/home/view/active/orders','vendorController@active_order_view');
Route::post('/vendor/home/order/update/status','vendorController@update_order_status');

Route::get('/vendor/home/view/cancel/orders','vendorController@cancel_order_list_view');
Route::get('/vendor/home/view/return/orders','vendorController@return_order_list_view');
Route::get('/vendor/home/view/complete/orders','vendorController@complete_order_list_view');

Route::get('/vendor/home/view/reporting/by/products','vendorController@reporting_by_product_list_view');
Route::get('/vendor/home/view/detail/reporting/by/products/{id}','vendorController@reporting_by_product');

Route::get('/vendor/home/view/reporting/by/sale','vendorController@reporting_by_sale_list_view');
Route::get('/vendor/home/view/earning','vendorController@earning_view');
Route::get('/admin/home/view/earning','adminController@earning_view');
Route::get('/vendor/home/view/product/status/update/{pk_id}/{status}','vendorController@updateProductStatus');

Route::get('/admin/home/view/client/details','adminController@balance_view');


Route::get('/vendor/home/add/product/type','vendorController@add_product_type_view');
Route::post('/vendor/home/add/product/type','vendorController@add_product_type');

Route::get('/vendor/view/product/type','vendorController@product_type_list_view');
Route::get('/vendor/home/edit/product/type/{pk_id}','vendorController@edit_product_type_view');
Route::post('/vendor/home/edit/product/type/{pk_id}','vendorController@edit_product_type');
Route::get('/vendor/home/delete/product/type/{id}','vendorController@delete_product_type');



Route::get('/vendor/ajax-subcat','vendorController@sub');
Route::get('/vendor/ajax-product-type','vendorController@type');

Route::get('/login/{social}','clientController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
 
Route::get('/login/{social}/callback','clientController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');


Route::get('/vendor/test','vendorController@v_test');

Route::get('/flush/cart',function()
{
// return "asd";
    session()->forget('cart');
});

Route::get('/ssendmail',function(Request $request)
{
Log::info("asd");
//$json = $request->input('id');
//DB::insert("insert into pwebhook (wid,status,text) values('1','2','$json')");


 $data = array(
     'name' => "Nouman Shoaib",
     'firstname'=> "nice",
);
Mail::send('test', $data, function ($message) {

$message->from('no-reply@fashionfactory.com', 'test');

$message->to('sumrariaz@yahoo.com')->subject('Learning Laravel test email');

    
});

return "asd";
});


Route::get('/verify/{username}/{verfication_code}','clientController@verify_code');
Route::get('/password/reset','clientController@reset_password_view');

Route::post('/password/reset','clientController@reset_password');


Route::post('/password/change/{username}','clientController@password_change');



Route::get('/admin/verify/{username}/{verfication_code}','adminController@verify_code');
Route::get('/admin/password/reset','adminController@reset_password_view');

Route::post('/admin/password/reset','adminController@admin_reset_password');


Route::post('/admin/password/change/{username}','adminController@password_change');



Route::get('/vendor/verify/{username}/{verfication_code}','vendorController@verify_code');
Route::get('/vendor/password/reset','vendorController@reset_password_view');

Route::post('/vendor/password/reset','vendorController@vendor_reset_password');


Route::post('/vendor/password/change/{username}','vendorController@password_change');





//Clear configurations:
			Route::get('/configs/clear', function() {
				$status = Artisan::call('config:clear');
				return '<h1>Configurations cleared</h1>';
			});

//Clear cache:
			Route::get('/caches/clear', function() {
				$status = Artisan::call('cache:clear');
				return '<h1>Cache cleared</h1>';
			});

