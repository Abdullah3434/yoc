<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Cart;

use Carbon\Carbon;
use Session;
use Response;
use Socialite;

class clientController extends Controller
{

    public function sms()

    {
        $apikey = "72097a90d0ac36af8a9ce42bc4c4c51a"; ///Your apikey
        $mobile = "923046821313"; ///Recepient Mobile Number
        $sender = "King Fabric"; // your masking or sender
        $message = "Test SMS"; // sms text
        $url = 'http://csms.dotklick.com/api_sms/api.php?key=' . $apikey . '&receiver=' . urlencode($mobile) . '&sender=' . urlencode($sender) . '&msgdata=' . urlencode($message);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if (curl_errno($ch))
        {
            return curl_error($ch);
        }
        else
        {
            return $output;

        }
    }

    public function socialLogin($social)

    {

        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback(Request $request, $social)

    {
        if ($social == "facebook")
        {
            if (!empty($_GET["error"]) && $_GET["error"] == "access_denied")
            {
                return redirect("/login");
            }
        }
        else if ($social == "google")
        {
            if (!empty($_GET["denied"]))
            {
                return redirect("/login");
            }
        }
        $userSocial = null;
        if ($social == "google")
        {
            $userSocial = Socialite::driver($social)->user();
        }
        else if ($social == "facebook")
        {
            $userSocial = Socialite::driver($social)->stateless()
                ->user();
        }
        else
        {
            $userSocial = Socialite::driver($social)->stateless()
                ->user();
        }
        $username = $userSocial->getEmail();
        $b = $userSocial->getName();
        $user = DB::select("SELECT * FROM client_details WHERE username = '$username'");
        if (count($user) > 0)
        {
            $request->session()
                ->put('username', $username);

            $request->session()
                ->put('name', $b);
            $request->session()
                ->put('type', 'client');
            $request->session()
                ->put('pk_id', $user[0]->{'pk_id'});

            return redirect("/");
        }
        else
        {
            $username = $userSocial->getEmail();
            $b = $userSocial->getName();
            $password = md5(123456);
            DB::insert("insert into client_details (fname,username,password) values (?,?,?)", array(
                $b,
                $username,
                $password
            ));
            $user = DB::select("SELECT * FROM client_details WHERE username = '$username'");
            if (count($user) > 0)
            {
                $request->session()
                    ->put('username', $username);

                $request->session()
                    ->put('name', $b);
                $request->session()
                    ->put('type', 'client');

                $request->session()
                    ->put('pk_id', $user[0]->{'pk_id'});

                return redirect("/");
            }
        }
    }

    public function size_detail(Request $request)
    {

        $type_id = $request->Input('type_id');

        $sub_id = DB::select("select* from size_detail where pk_id = '$type_id' ");
        $sub_id = $sub_id[0]->quantity;

        return Response::json($sub_id);
    }

    public function size(Request $request)
    {
        $size = $request->Input('cat_id');
        $pk_id = $request->Input('pk_id');

        $subcategories = DB::select(DB::raw("SELECT * FROM size_detail WHERE product_id = :value and size= :value2") , array(
            'value' => $pk_id,
            'value2' => $size,
        ));

        $subcategories = $subcategories[0]->quantity;

        return Response::json($subcategories);
    }

    public function guest_order_tracking_view()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;

        return view('client.guest_order_tracking_view', compact('products'));
    }

    public function order_tracking_view()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $username = Session::get('username');

        $ordertracking = DB::select("select* from client_details where username = '$username' ");
        $user = $ordertracking[0]->pk_id;
// return $user;
        $orderdetail = DB::select("select* from order_table where user_id = '$user' ");
        // return $orderdetail; 
        return view('client.order_id', compact('products', 'orderdetail'));
    }

    public function order_tracking_detail_view($id)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $username = Session::get('username');
        $user = DB::select("select* from client_details where username = '$username' ");
        $user = $user[0]->pk_id;



        $ordertracking = DB::select("select* from order_table where pk_id ='$id' and user_id = '$user'");

        $address = $ordertracking[0]->shipment_address_id;
        $ad = DB::select("select* from address_table where pk_id = '$address' ");

        $orderdetail = DB::select("select* from detail_table where  order_id ='$id'");


       $time = now()->toDateString();
    //    return $time;
        $button = DB::select("select* from order_table where pk_id = '$id' and expire_at > '$time'  ");
        if (count($ordertracking) > 0)

        return view('client.view_order_tracking', compact('products', 'ordertracking', 'orderdetail', 'ad', 'button'));
        else return Redirect::back()->withErrors('No Order Exist');
    }

    public function order_tracking(Request $request)
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $orderid = $request->input('orderid');
        $username = Session::get('username');
        $user = DB::select("select* from client_details where username = '$username' ");
        $user = $user[0]->pk_id;
        $address = "";
        $ordertracking = DB::select("select* from order_table where pk_id ='$orderid' and user_id = '$user'");
       $time = now()->toDateString();
    //    return $time;
        $button = DB::select("select* from order_table where pk_id = '$orderid' and expire_at > '$time'  ");
        // return $button;
       
       
        if (count($ordertracking) > 0)
        {
            $address = $ordertracking[0]->shipment_address_id;
        }
        $ad = DB::select("select* from address_table where pk_id = '$address' ");

        $orderdetail = DB::select("select* from detail_table where  order_id ='$orderid'");

        if (count($ordertracking) > 0)

        return view('client.view_order_tracking', compact('products', 'ordertracking', 'orderdetail', 'ad', 'button'));
        else return Redirect::back()->withErrors('No Order Exist');
    }

    public function guest_order_tracking(Request $request)
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $email = $request->input('email');
        $orderid = $request->input('orderid');
        $ordertracking = DB::select("select* from order_table where username = '$email' and pk_id ='$orderid'");

        $orderdetail = DB::select("select* from detail_table where  order_id ='$orderid'");
        $test= $orderdetail[0]->product_id;
        

                         $thumbnail = DB::select("select* from product where  pk_id ='$test'");
        if (count($ordertracking) > 0)

        return view('client.order_detail_view', compact('products', 'ordertracking', 'orderdetail'));
        else 
        return Redirect::back()->withErrors('No Order Exist');
    }

    public function verify_code($username, $code)
    {
        $result = DB::select("select* from reset_password where username= '$username' and verification_code= '$code' and TIMESTAMPDIFF(MINUTE,reset_password.created_at,NOW()) <=30 ");

        if (count($result) > 0)
        {
            return view('client.change_password', compact('username'));
        }
        else return "The Verification code is expired";
    }

    public function reset_password_view()
    {

        return view('client.password_reset');
    }

    public function reset_password(Request $request)
    {

        $username = $request->input('username');
        $result = DB::select("select* from client_details where username = '$username'");
        if (count($result) > 0)
        {
            $vcode = uniqid();
            DB::insert("insert into reset_password (username,verification_code) values('$username','$vcode') ");
            $customer_name = $result[0]->{'fname'};
            $data = array(
                'customer_name' => $customer_name,
                'customer_username' => $username,
                'customer_verification_code' => $vcode,

            );
            Mail::send('email_reset_password', $data, function ($message) use ($username)
            {

                $message->from('info@yoc.com.pk', 'YOC');

                $message->to($username)->subject('Password Reset Confirmation Link');
            });
            return redirect()
                ->back()
                ->with('message', 'A Password reset link sent to your email');
        }
        else
        {
            return Redirect::back()
                ->withErrors('Username not found');
        }
    }

    public function password_change(Request $request, $username)
    {
        $password = md5($request->input('password'));
        DB::update("update client_details set password ='$password' where username='$username'");
        return redirect('/login')->with('message', 'Your Password has been changed Successfully');
    }
    public function searchByCategory($main = '', $sub = '', $type = '')
    {
      
        $a = "1";
        $b = "2";
        $c = "0";
        $f = "0";

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $result = [];
        $d = [];

        $result = DB::select(DB::raw("SELECT * FROM product WHERE product.sub_category = :value and product.status = :value2 and product.discount_status = :value3  ORDER BY pk_id DESC ") , array(
            'value2' => $a,
            'value3' => $c,
            'value' => $sub,
        ));

       
    //   $d = DB::select(DB::raw("SELECT product.pk_id,product.sku,product.name,product.price,product.thumbnail,product.thumbnail2,discount_table.percentage,discount_table.fixed_amount ,discount_table.start_date,discount_table.end_date FROM product,discount_table WHERE product.sub_category = :value and product.sku=discount_table.sku  and product.discount_status = :value3 and product.status = :value2 and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date')ORDER BY pk_id DESC") , array(

    //         'value' => $sub,
    //         'value2' => $a,
    //         'value3' => $a,
    //     ));
    
       
        $d = DB::select(DB::raw("SELECT product.pk_id,product.sku,product.name,product.price,product.thumbnail,product.thumbnail2,product.discount_status,discount_table.start_date,discount_table.end_date,discount_table.fixed_amount,discount_table.percentage FROM product,discount_table WHERE (product.sku=discount_table.sku or product.sub_category=discount_table.category) and product.sub_category = :value and (product.status = :value2) and (product.discount_status = :value3) and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date')ORDER BY pk_id DESC") , array(

            'value2' => $a,
              'value3' => $a,
               'value' => $sub,
            
        ));
        // $d = DB::select("select product.pk_id,product.thumbnail,product.thumbnail2,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and product.sub_category = 'Polo' and product.discount_status = '1'  and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");

        $main_category = DB::select("select * from main_category");
        return view('client.product_view', compact('result', 'd', 'main_category', 'main', 'sub', 'type'));
    }





    public function searchByCategoryy($main )
    {
        // return $main;
        $a = "1";
        $b = "2";
        $c = "0";
        $f = "0";

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $result = [];
        $d = [];

        $result = DB::select(DB::raw("SELECT * FROM product WHERE product.category = :value and product.status = :value2 and product.discount_status = :value3 ") , array(
            'value2' => $a,
            'value3' => $c,
            'value' => $main,
        ));

       
       $d = DB::select(DB::raw("SELECT product.pk_id,product.sku,product.name,product.price,product.thumbnail,product.thumbnail2,discount_table.percentage,discount_table.fixed_amount ,discount_table.start_date,discount_table.end_date FROM product,discount_table WHERE product.category = :value and product.sku=discount_table.sku  and product.discount_status = :value3 and product.status = :value2 and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date')") , array(

            'value' => $main,
            'value2' => $a,
            'value3' => $a,
        ));
        // $d = DB::select("select product.pk_id,product.thumbnail,product.thumbnail2,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and product.sub_category = 'Polo' and product.discount_status = '1'  and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");

        $main_category = DB::select("select * from main_category");
        return view('client.product_view', compact('result', 'd', 'main_category', 'main', 'sub', 'type'));
    }











    public function shop()
    {
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        // return $date;
        $result = [];
        $a = "1";
        // $b="2";
        $c = "0";
        $result = DB::select(DB::raw("SELECT * FROM product WHERE product.status = :value2 and product.discount_status = :value3 ORDER BY pk_id DESC " ) , array(
            'value2' => $a,
            'value3' => $c,
        ));
        
        $d = DB::select(DB::raw("SELECT product.pk_id,product.sku,product.name,product.price,product.thumbnail,product.thumbnail2,product.discount_status,discount_table.start_date,discount_table.end_date,discount_table.fixed_amount,discount_table.percentage FROM product,discount_table WHERE (product.sku=discount_table.sku or product.sub_category=discount_table.category) and (product.status = :value2) and (product.discount_status = :value3) and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date')ORDER BY pk_id DESC") , array(

            'value2' => $a,
              'value3' => $a,
            
        ));
        // return $d;
//         if(count($d)>0)
//         {
//           $end_date= $d[0]->end_date;
// $sku= $d[0]->sku;
//   $current = Carbon::now();
// //   return $end_date('yyyy');

// if($current>=$end_date)
// {
//     $wallet="0";
//      DB::update("update product set discount_status ='$wallet' where sku='$sku'");
// }  
//         }
        


//     $current->month;
//   $current->day;
// $trialExpires = $current->addDays(2);


        return view('client.product_view', compact('result', 'd'));
    }
    
        public function sub_category($main = '')
    {

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $result = DB::select(DB::raw("SELECT * FROM sub_category WHERE sub_category.main_category = :value2 ORDER BY SKU DESC " ) , array(
            'value2' => $main,
        ));

        return view('client.sub_category', compact('result'));

    }
    

    public function sale()
    {
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $d = [];
        $a = "1";
        $b = "2";

        $d = DB::select(DB::raw("SELECT * FROM product,discount_table WHERE product.sku=discount_table.sku and (product.status = :value2 or product.v_product_status = :value3)") , array(

            'value2' => $a,
            'value3' => $b,
        ));
        // $d = DB::select("select product.pk_id,product.thumbnail,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");
        

        return view('client.sale_view', compact('d'));
    }

    public function home_view()
    {

        if ((session()->has('username') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin/home');
        }
        elseif ((session()
            ->has('username') && session()
            ->get('type') == 'vendor'))
        {
            return redirect('/vendor/home');
        }

        $a = "1";
        $b = "2";
        $c = "0";
        $f = "1";
        $main = "Polo";

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $result = [];
        $result1 = [];
        $result2 = [];
        $result3 = [];
        $d1 = DB::select("select product.pk_id,product.thumbnail,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and product.category = 'garments'  and product.discount_status = '1' and  (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");

        $result = DB::select("select* from product  where category = 'Babies & Toys' and status = '1' and (v_product_status = '2' or v_product_status = '0') LIMIT 3");

        $d = DB::select("select product.pk_id,product.thumbnail,product.thumbnail2,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage, discount_table.fixed_amount from product,discount_table where product.sku = discount_table.sku and  product.discount_status = '1'  and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");

        // $result1 = DB::select("select* from product where category = 'MEN'S FASHION' and status = '1' and (v_product_status = '2' or v_product_status = '0')LIMIT 3");
        $result1 = DB::select(DB::raw("SELECT * FROM product WHERE sub_category = :value and status = :value3 and (v_product_status = :value4 or v_product_status = :value5 )LIMIT 3") , array(
            'value' => $main,
            'value3' => $a,
            'value4' => $b,
            'value5' => $c,
        ));

        // $result1 = DB::select("select product.pk_id,product.thumbnail,product.thumbnail2,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and product.sub_category = 'Polo'  and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')LIMIT 3");
        $d2 = DB::select("select product.pk_id,product.thumbnail,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and product.category = 'accessories' and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date >= '$date' or discount_table.end_date = '$date')and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");

        $result2 = DB::select("select* from product where category = 'accessories' and status = '1' and (v_product_status = '2' or v_product_status = '0')");

        $d3 = DB::select("select product.pk_id,product.thumbnail,product.name, product.product_type,product.price,product.description,product.sku, discount_table.sku,discount_table.start_date,discount_table.end_date,discount_table.percentage from product,discount_table where product.sku = discount_table.sku and product.category = 'home textile' and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')");

        $result3 = DB::select("select* from product where category = 'home textile' and status = '1' and (v_product_status = '2' or v_product_status = '0')");

        $main_category = DB::select("select * from main_category");

        return view('client.client_home', compact('main_category', 'resultt', 'result', 'result1', 'result2', 'result3', 'result4', 'result5', 'result6', 'result7', 'result8', 'result9', 'result10', 'result11', 'result12', 'result13', 'result14', 'd', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'discount_price', 'discount_price1', 'discount_price2', 'discount_price3', 'discount_price4', 'discount_price5', 'discount_price6', 'discount_price7', 'discount_price8', 'discount_price9', 'discount_price10', 'discount_price11', 'discount_price12', 'discount_price13', 'discount_price14'));
    }

    public function lounch()
    {

        return view('client.lounch');
    }

    public function payment_policy()
    {

        return view('client.payment_policy');
    }

    public function create_client_view()
    {

        return view('client.signup');
    }

    public function create_client(Request $request)
    {

        if ($request->input('password') == $request->input('confirm'))
        {
            $username = $request->input('email');

            $result = DB::select("select* from client_details where username = '$username' ");

            if (count($result) > 0)
            {
                return Redirect::back()->withErrors('Username already Exist');
            }
            else
            {

                DB::insert("insert into client_details (fname,lname, username, password ) values (?,?,?,?)", array(
                    $request->input('fname') ,
                    $request->input('lname') ,
                    $request->input('email') ,
                    md5($request->input('password'))
                ));

                $username = $request->input('email');
                $password = md5($request->input('password'));
                $result = DB::select("select* from client_details where username = '$username' and password='$password' ");

                if (count($result) > 0)
                {
                    $request->session()
                        ->put('pk_id', $result[0]->{'pk_id'});
                    $request->session()
                        ->put('username', $username);
                    $request->session()
                        ->put('type', 'client');
                    $request->session()
                        ->put('name', $result[0]->{'fname'} . ' ' . $result[0]->{'lname'});
                    $request->session()
                        ->put('fname', $result[0]->{'fname'});
                    $request->session()
                        ->put('lname', $result[0]->{'lname'});

                    return Redirect::to('/');
                }
            }
        }
        else
        {
            return Redirect::back()
                ->withErrors('Password does not match');
        }
    }

    public function about_us()
    {

        return view('client.about_us');
    }

    public function accounts()
    {

        return view('client.accounts');
    }

    public function faq()
    {

        return view('client.faq');
    }

    public function returns()
    {

        return view('client.returns_and_refunds');
    }

    public function privacy_policy()
    {

        return view('client.privacy_policy');
    }

    public function vendor_policy()
    {

        return view('client.vendor_policy');
    }

    public function terms()
    {

        return view('client.terms_and_conditions');
    }

    public function client_login_view()
    {
// return "qwdhqw";
        if ((session()
            ->has('username') && session()
            ->get('type') == 'client'))
        {
            return redirect('/');
        }
        else
        {
           

            return view('client.client_login_view');
        }
    }

    public function client_login(Request $request)
    {

        $this->validate($request, ['username' => 'required', 'password' => 'required']);
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $result = DB::select("select* from client_details where username = '$username' and password='$password' ");

        if (count($result) > 0)
        {
            $request->session()
                ->put('pk_id', $result[0]->{'pk_id'});
            $request->session()
                ->put('username', $username);
            $request->session()
                ->put('type', 'client');
            $request->session()
                ->put('name', $result[0]->{'fname'} . ' ' . $result[0]->{'lname'});
            $request->session()
                ->put('fname', $result[0]->{'fname'});
            $request->session()
                ->put('lname', $result[0]->{'lname'});

            return Redirect::to('/');
        }
        else
        {
            return view('client.client_login_view')
                ->withErrors('username or password incorrect');
        }
    }

    public function search_wishlist()
    {

        return view('client.search_wishlist_view');
    }

    public function search_wishlist_by_username(Request $request)
    {

        $username = $request->input('username');

        $result = DB::select("select* from wishlist,product where wishlist.user_id = '$username' and wishlist.product_id=product.pk_id and product.status='0'");

        if (count($result) > 0)
        {
            return view('client.wishlist_product_view', compact('result'));
        }
        else
        {
            return Redirect::back()->withErrors('No result found');
        }
    }

    public function search_wishlist_by_name(Request $request)
    {

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $city = $request->input('city');

        $result = DB::select("select* from wishlist,product,address_table where wishlist.product_id=product.pk_id and address_table.fname = '$fname' and address_table.lname = '$lname' and address_table.city = '$city' and product.status='0' ");

        if (count($result) > 0)
        {
            return view('client.wishlist_product_view', compact('result'));
        }
        else
        {
            return Redirect::back()->withErrors('No result found');
        }
    }

    public function view_wishlist()
    {

        $username = session()->get('username');

        $result = DB::select("select* from wishlist,product where wishlist.user_id = '$username' and wishlist.product_id=product.pk_id");

        if (count($result) > 0)
        {
            return view('client.wishlist_product_view', compact('result'));
        }
        else
        {
            return Redirect::back()->withErrors('No result found');
        }
    }
    public function delete_wishlist($id)
    {
        DB::delete("delete from wishlist where product_id = '$id'");
            return Redirect::back()->withErrors('Remove WishList');

    }

    public function men_collection_view()
    {

        return view('client.men_collection_view');
    }

    public function checkout_view()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        if (session::has('pk_id'))
        {

            $pk_id = session()->get('pk_id');
            // return $pk_id;
            $result1 = DB::select("select* from address_table where user_id = '$pk_id'");
            if (count($result1) > 0)
            {;
                return view('client.client_address_view', compact('result1'));
            }
            else
            {

                return view('client.address_view');
            }
        }
        else

        return view('client.login_view');
    }

    public function address_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }

        return view('client.client_address_view');
    }

    public function add_address_view()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }

        return session()
            ->get('id');
        $result1 = DB::select("select* from address_table where user_id = '$id'");
        return view('client.client_address_view', compact('result', 'result1'));

        return view('client.address_view');
    }
    public function add_new_address_view()
    {

        return view('client.add_address_view');
    }
    public function add_new_address(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }

        $user_id = session()->get('pk_id');

        DB::insert("insert into address_table (user_id,fname,lname,address, phone,zip,country,state,city) values (?,?,?,?,?,?,?,?,?)", array(
            $user_id,
            $request->input('fname') ,
            $request->input('lname') ,
            $request->input('address') ,
            $request->input('phone') ,
            $request->input('zip') ,
            $request->input('country') ,
            $request->input('state') ,
            $request->input('city')
        ));

        // $result = DB::select("select* from client_details where pk_id = '$user_id'");
        $result1 = DB::select("select* from address_table where user_id = '$user_id'");
        return redirect('/cart/checkout')->with('result1');

        //  return view('client.client_address_view',compact('result1'));
        

        
    }

    public function add_address(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }

        $id = session()->get('pk_id');

        DB::insert("insert into address_table (user_id,fname,lname,address,phone,zip,country,state,city ) values (?,?,?,?,?,?,?,?,?)", array(
            $id,
            $request->input('fname') ,
            $request->input('lname') ,
            $request->input('address') ,
            $request->input('phone') ,
            $request->input('zip') ,
            $request->input('country') ,
            $request->input('state') ,
            $request->input('city')
        ));

        $result1 = DB::select("select* from address_table where user_id = '$id'");

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('client.order_view', compact('result1') , ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function women_handbags_view()
    {

        $result = DB::select("select* from product where category = 'handbags' and status = '1'");

        if (count($result) > 0)
        {
            return view('client.women_handbags_view', compact('result'));
        }
    }

    public function product_detail_view($pk_id, $sku)
    {

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $email = "";
        $result = DB::select("select* from product where pk_id = '$pk_id'");

        if (count($result) > 0)
        {
            $email = $result[0]->vendor_id;
        }
        $vendor = DB::select("select* from vendors where email = '$email'");

        $result1 = DB::select("select* from product where sku = '$sku'");
        $d = DB::select("select * from product,discount_table where (product.sku=discount_table.sku or product.sub_category=discount_table.category) and product.pk_id = '$pk_id' and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1'");
// return $d;
        $result3 = DB::table('detail_table')->where('sku', '=', $sku)->sum('quantity');

        if (count($d) > 0)
        {

if ($d[0]->percentage > 0) {
    
    $discount = ($d[0]->price * $d[0]->percentage) / 100;

            $discount_price = $d[0]->price - $discount;
}
else{
     $discount_price =$d[0]->price - $d[0]->fixed_amount;
}
            
        }

        $array = DB::select("select* from size_detail where product_id = '$pk_id' order by pk_id ASC");

        if (count($result) > 0)
        {
            return view('client.product_detail_view', compact('result', 'result1', 'array', 'discount_price', 'discount', 'd', 'vendor', 'result3'));
        }
    }

    public function removeCart($id, $size, $qty)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        // return $qty;
        $cart->remove($id . $size, $qty);
        session()->put('cart', $cart);
        return redirect('/cart/items');
        // return redirect()->back();
    }
    public function addToCart(Request $request, $pk_id)
    {
        //return session()->flush();
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $size = $request->input('size');
        $size = DB::select("select* from size_detail where pk_id = '$size'");
        $size = $size[0]->size;

        $q = $request->input('quantity');
        
   

        $result = DB::select("select* from product where pk_id = '$pk_id'");
        $cat = DB::select("select sub_category from product where pk_id = '$pk_id'");
      $sub_cat= $cat[0]->sub_category;
        // return $sub_cat;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        //  return session()->get('promoPrice');
        $d = DB::select("select * from product,discount_table where (product.sku = discount_table.sku or product.sub_category = discount_table.category) and product.pk_id = '$pk_id' and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1'");
// return $d;
        if (count($d) > 0)
        {
            if (session::has('promoPrice'))
            {
                session()->forget('promoPrice');
            }
            $cart->discount($d[0], $d[0]->pk_id, $size, $q, $sub_cat);
        }
        else
        {
            if (session::has('promoPrice'))
            {
                session()->forget('promoPrice');
            }
            $cart->add($result[0], $result[0]->pk_id, $size, $q,$sub_cat);
        }

        // $cart->discount($result[0],$result[0]->pk_id);
        session()->put('cart', $cart);
        // session()->put('sub_category',  $sub_cat);
       

        //dd(Session::get('cart'));
        return Redirect()->back();

        // $chk = session()->get('cart');
        

        /*
        $result = DB::select("select* from product where pk_id = '$pk_id'");
        //return dd(session()->get('cart.items'));
        //  $c= session()->get('cart.items');
        //return $c[0]['item'][0]->pk_id;
        $data = array(
        'qty' => 0,
        'item'=>$result,
        'price'=>$result[0]->{'price'},
        );
        
        
        
        
        session()->put('cart.qty',0);
        session()->put('cart.subtotal',0);
        $chk = session()->get('cart.items');
        if(is_array($chk))
        {
        if(count($chk)>0)
        {
        echo "check";
        foreach(session()->get('cart.items') as $items )
        {
        if($items['item'][0]->pk_id == $result[0]->{'pk_id'})
        {
           
        }
        }
        }
        }
        
        $data['qty'] = $data['qty']+1;
        $data['price'] = $data['price'] * $data['qty'];
        session()->push('cart.items',$data);
        session()->put('cart.qty',(session()->get('cart.qty')+1));
        session()->put('cart.subtotal',(session()->get('cart.subtotal')+$data['price']));
        
        $item = session()->get('cart.items');
        return dd($item);
        */

        /*foreach(session()->get('cart') as $pk_id)
        {
        
        return view('client.cart_view',compact('result'));
        
        }*/
    }

    public function buynow(Request $request, $pk_id)
    {
        //return session()->flush();
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $size = $request->input('size');
        $size = DB::select("select* from size_detail where pk_id = '$size'");
        $size = $size[0]->size;

        $q = $request->input('quantity');




      

        
        

        $result = DB::select("select* from product where pk_id = '$pk_id'");

        $cat = DB::select("select sub_category from product where pk_id = '$pk_id'");
        $sub_cat= $cat[0]->sub_category;

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        
          $d = DB::select("select * from product,discount_table where (product.sku = discount_table.sku or product.sub_category = discount_table.category) and product.pk_id = '$pk_id' and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1'");
// return $d;

          if (count($d) > 0)
        {
            if (session::has('promoPrice'))
            {
                session()->forget('promoPrice');
            }
            $cart->discount($d[0], $d[0]->pk_id, $size, $q, $sub_cat);
        }
        else
        {
            if (session::has('promoPrice'))
            {
                session()->forget('promoPrice');
            }
            $cart->add($result[0], $result[0]->pk_id, $size, $q, $sub_cat);
        }

        // $cart->discount($result[0],$result[0]->pk_id);
        session()->put('cart', $cart);
        //dd(Session::get('cart'));
        return view('client.cart_view', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCart()
    {

        //return session()->flush();
        if (!Session::has('cart'))
        {
            return view('client.cart_view', ['products' => null]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.cart_view', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function order_view($id)

    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        if (!Session::has('cart'))
        {
            return view('client.order_view', ['products' => null]);
        }



        $user_id = session()->get('pk_id');
        // $result1 = DB::select("select client_details.username,client_details.fname,client_details.lname,address_table.phone,address_table.pk_id,address_table.city,address_table.address from client_details,address_table where client_details.pk_id = '$id'and address_table.user_id = '$id'");
        



        $result = DB::select("select* from client_details where pk_id = '$user_id'");
        $result1 = DB::select("select* from address_table where user_id = '$user_id' and pk_id = '$id'");
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        // if (session()->get('city') == 'Lahore')
        // {
        //     $cart->totalPrice = $cart->totalPrice + 200;
        // }
        // else
        // {
        //     $cart->totalPrice = $cart->totalPrice + 250;
        // }
        return view('client.order_view', compact('result', 'result1') , ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }



    public function order_view_new($id)

    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        if (!Session::has('cart'))
        {
            return view('client.order_view', ['products' => null]);
        }

        $user_id = session()->get('pk_id');
        // $result1 = DB::select("select client_details.username,client_details.fname,client_details.lname,address_table.phone,address_table.pk_id,address_table.city,address_table.address from client_details,address_table where client_details.pk_id = '$id'and address_table.user_id = '$id'");
        

        $result = DB::select("select* from client_details where pk_id = '$user_id'");
        $result1 = DB::select("select* from address_table where user_id = '$user_id' and pk_id = '$id'");
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        // if (session()->get('city') == 'Lahore')
        // {
        //     $cart->totalPrice = $cart->totalPrice + 200;
        // }
        // else
        // {
        //     $cart->totalPrice = $cart->totalPrice + 250;
        // }
        return view('client.order_view', compact('result', 'result1') , ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }







    public function login(Request $request)
    {
        $this->validate($request, ['email' => 'required', 'password' => 'required']);
        $username = $request->input('email');
        $password = md5($request->input('password'));
        //  $result = DB::select("select* from client_details where username = '$username' and password='$password' ");
        $result = DB::select("select* from client_details where username = '$username'");

        if (count($result) > 0)
        {

            $pass = $result[0]->password;
            if ($pass == $password)
            {
                $request->session()
                    ->put('pk_id', $result[0]->{'pk_id'});
                $request->session()
                    ->put('username', $username);
                $request->session()
                    ->put('type', 'client');
                $request->session()
                    ->put('name', $result[0]->{'fname'} . ' ' . $result[0]->{'lname'});
                $request->session()
                    ->put('fname', $result[0]->{'fname'});
                $request->session()
                    ->put('lname', $result[0]->{'lname'});
                $id = $result[0]->pk_id;
                session()
                    ->put('id', $id);

                $result1 = DB::select("select client_details.username,client_details.fname,client_details.lname,address_table.phone,address_table.pk_id,address_table.city,address_table.address from client_details,address_table where client_details.pk_id = '$id'and address_table.user_id = '$id'");
                $result2 = DB::select("select* from address_table where user_id = '$id'");
                if (count($result2) > 0)
                {

                    return view('client.client_address_view', compact('result', 'result1'));
                }
                else
                {
                    return view('client.address_view', compact('result'));
                }
            }
            else
            {
                return view('client.client_checkout_view')->withErrors('username or password incorrect');
            }
        }
        else
        {

            return redirect('/signup');
        }
    }
    public function address(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }

        if (session()
            ->has('id'))
        {
            $username = session()->get('username');

            $result = DB::select("select* from client_details where username = '$username' ");
            if (count($result) > 0)
            {
                $id = $result[0]->pk_id;
                $result = DB::select("select* from address_table where user_id = '$id' ");
                if (count($result) > 0)
                {
                    $fname = $request->input('fname');
                    $lname = $request->input('lname');
                    $phone = $request->input('phone');
                    $city = $request->input('city');
                    $region = $request->input('region');
                    $address = $request->input('address');
                    DB::update("update address_table set fname = '$fname', lname='$lname',phone='$phone',city = '$city', address= '$address', region='$region' where user_id='$id'");
                    return redirect('/cart/checkout/address/view/order');
                }
                else
                {
                    DB::insert("insert into address_table (user_id,fname,lname, address, city, phone, region ) values (?,?,?,?,?,?,?)", array(
                        $id,
                        $request->input('fname') ,
                        $request->input('lname') ,
                        $request->input('address') ,
                        $request->input('city') ,
                        $request->input('phone') ,
                        $request->input('region')
                    ));
                    return redirect('/cart/checkout/address/view/order');
                }
            }
            else
            {
                return redirect('/cart/checkout');
            }
        }
    }

    public function wallet_confirm_order(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        if (!(session()
            ->has('cart')))
        {
            return redirect('/');
        }
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $oldCart = Session::get('cart');
        // if (session()->get('city') == 'Lahore')
        // {
        //     $oldCart->totalPrice = $oldCart->totalPrice + 200;
        // }
        // else
        // {
        //     $oldCart->totalPrice = $oldCart->totalPrice + 250;
        // }
 
        $cart = new Cart($oldCart);
        $username = session()->get('username');
        
        //  return $cart->totalPrice;


        if (session::has('pro'))
        {
            $promo_price= Session::get('pro');
        }
        elseif(session::has('promoPrice'))
        {
            $promo_price= Session::get('promoPrice');
        }
        else
        {
           $promo_price= $cart->totalPrice;
        }

// return $promo_price;



        $pk_id = session()->get('pk_id');
        // return $pk_id;
        $user_id = session()->get('user_id');

        // return $username;

        $userr_id = DB::select("select pk_id from client_details where username = '$username'");
 $userr_id= $userr_id[0]->pk_id;
        // $balance = DB::select("select sum(balance) from balance where user_id = '$userr_id'");
        $balance = DB::table('balance')->where('user_id','>=',$userr_id)->sum('balance');
// return $balance ;



if( $balance >= $promo_price )
{
    $wallet = $balance -$promo_price  ;
    DB::update("update balance set balance ='$wallet' where user_id='$userr_id'");
    // return "hello";
    
}
else{
    return "u dont have sufficient balance";
}


$wallet_status = 'paid';


        $result = DB::select("select* from client_details where pk_id = '$pk_id' ");

        $result1 = DB::select("select* from address_table where user_id = '$pk_id' and pk_id = '$user_id' ");
        $address = $result1[0]->address;
        $city = $result1[0]->city;
        $phone = $result1[0]->phone;
        $zip = $result1[0]->zip;
        $status = 0;
        $v_order_status = 0;
        $s = 0;
        $products = $cart->items;
        $current = Carbon::now();
$trialExpires = $current->addDays(2);
// return $products ;
        if (session::has('pro'))
        {
            $promo = session()->get('pro');
            DB::insert("insert into order_table (user_id,promo_amount,amount, shipment_address_id,placed_at,expire_at,username,fname,lname,status,wallet_status) values (?,?,?,?,?,?,?,?,?,?,?)", array(
                $result[0]->pk_id,
                $promo,
                $cart->totalPrice,
                $result1[0]->pk_id,
               Now(),
                $trialExpires,
                $username,
                $result1[0]->fname,
                $result1[0]->lname,
                $status,
                $wallet_status
            ));
        }
        elseif (session::has('promoPrice'))
        {
            $promo = session()->get('promoPrice');
            DB::insert("insert into order_table (user_id,promo_amount,amount, shipment_address_id,placed_at,expire_at,username,fname,lname,status,wallet_status) values (?,?,?,?,?,?,?,?,?,?,?)", array(
                $result[0]->pk_id,
                $promo,
                $cart->totalPrice,
                $result1[0]->pk_id,
                Now(),
                $trialExpires,
                $username,
                $result1[0]->fname,
                $result1[0]->lname,
                $status,
                $wallet_status
            ));
        }


else



        {
            DB::insert("insert into order_table (user_id,amount, shipment_address_id,placed_at,expire_at,username,fname,lname,status , wallet_status) values (?,?,?,?,?,?,?,?,?,?)", array(
                $result[0]->pk_id,
                $cart->totalPrice,
                $result1[0]->pk_id,
                Now(),
                $trialExpires,
                $username,
                $result1[0]->fname,
                $result1[0]->lname,
                $status,
                $wallet_status
            ));
        }

        $result = DB::select("select* from order_table where user_id = '$pk_id' ORDER BY pk_id DESC");

        foreach ($products as $product)
        {

            if ($product['save'] > 0) DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,discount_price,price,percentage,size,vendor_id,v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?,?,?)", array(
                $product['item']->pk_id,
                $result[0]->pk_id,
                $product['item']->sku,
                $product['item']->name,
                $product['qty'],
                $product['price'],
                $product['item']->price,
                $product['item']->percentage,
                $product['size'],
                $product['item']->vendor_id,
                $v_order_status,
                $s
            ));

            else DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,price,size,vendor_id, v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?)", array(
                $product['item']->pk_id,
                $result[0]->pk_id,
                $product['item']->sku,
                $product['item']->name,
                $product['qty'],
                $product['item']->price,
                $product['size'],
                $product['item']->vendor_id,
                $v_order_status,
                $s
            ));

           
            
            $id = $product['item']->sku;
            $pro_id = DB::select("select pk_id from product where sku = '$id'");
            $prod = $pro_id[0]->pk_id;
            $size = $product['size'];
            $resulting = DB::select("select * from size_detail where product_id = '$prod' and size = '$size'");
            
            $q = $resulting[0]->quantity - $product['qty'];
            
            DB::update("update size_detail set quantity = '$q' where product_id='$prod' and size='$size'");
        
        
        
        
        
        
        
        
        
        
        
        }

        $data = array(
            'customer_fname' => session()->get('fname') ,
            'customer_lname' => session()
                ->get('lname') ,
            'customer_email' => session()
                ->get('username') ,
            'customer_address' => $address,
            'customer_city' => $city,
            'customer_phone' => $phone,
            'customer_region' => $zip,
            'order_id' => $result[0]->{'pk_id'},
            'date' => date('Y-m-d') ,

            'total_price' => $cart->totalPrice,

        );
        $o_id = $result[0]->{'pk_id'};
        Mail::send('email_order_confirm', $data, function ($message) use ($o_id)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            $username = session()->get('username');
            $message->to($username)->subject('Order ID# ' . $o_id . ' Received');
        });
        
        
        $apikey = "3d5e8043ab8bb418791ab5ff18028e78"; ///Your apikey
        $mobile = $phone; ///Recepient Mobile Number
        $sender = "YOC"; // your masking or sender
        $message = "Your order has been confirmed by YOC .Your tracking Id is " . $o_id . "Thankyou shopping for us."; // sms text
        //  $url = 'http://csms.dotklick.com/api_sms/api.php?key=' . $apikey. '&receiver=' . urlencode($mobile). '&sender=' . urlencode($sender). '&msgdata=' .urlencode($message);
        $url = 'http://csms.dotklick.com/api_sms/api.php?key='.$apikey.'&receiver='.urlencode($mobile).'&sender='.urlencode($sender).'&msgdata='.urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
       
            // return "wqd";
        
        
        $result1 = DB::select("select* from address_table where user_id = '$pk_id' and pk_id = '$user_id' ");
        $adres = $result1[0]->address;
        // return  $adres ;
        
        
        if(($result[0]->{'promo_amount'})!= "")
        {
            $amount = $result[0]->{'promo_amount'};
        }
        else
        {
            $amount = $result[0]->{'amount'};
        }
      
        //  return $amount;
         
         
        $phone = $result1[0]->{'phone'};
        //  $zip = $result1[0]->{'zip'};
        
        // return $phone;
        $o_id = $result[0]->{'pk_id'};
        // return $o_id;
      $username = session()->get('username');
        $name=  $result1[0]->fname;
        $apiKey='Qifq0chQyMpoaM4wfb4kferNd';
$name=  $name;
$address= urlEncode($adres);
$email=urlEncode($username);
$cell=urlEncode($phone);
$reference=$o_id;
$parcel='hello';
$cod=$amount;
$peice='1';
$weight='0.5';
$cityCode='LHE';
$comments=urlEncode("Call before delivery");
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => "http://rapidcourier.com.pk/api/BookShipment?ApiKey=".$apiKey."&Name=".$name."&Address=".$address.
"&Email=".$email."&Cell=".$cell."&Reference=".$reference."&ParcelDetail=".$parcel."&CollectRs=".$cod."&Peices=".$peice."&Weight=".$weight."&CityCode=".$cityCode."&Comments=".$comments,
CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
$response = curl_exec($curl);
curl_close($curl);
echo $response;
        
        
        
         $o_id = $result[0]->{'pk_id'};
         DB::update("update order_table set shippment_id = '$response' where pk_id='$o_id' ");
        
         
        
        
        
   
            session()->forget('promoPrice');
            session()->forget('pro');
            session()
                ->forget('cart');
            // session()->flush();
            return view('client.thanks_view', compact('result'));
        
    }







    public function cod_confirm_order(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        if (!(session()
            ->has('cart')))
        {
            return redirect('/');
        }
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $oldCart = Session::get('cart');
        // if (session()->get('city') == 'Lahore')
        // {
        //     $oldCart->totalPrice = $oldCart->totalPrice + 200;
        // }
        // else
        // {
        //     $oldCart->totalPrice = $oldCart->totalPrice + 250;
        // }
 
        $cart = new Cart($oldCart);
        $username = session()->get('username');
        
        //  return $cart->items;


       
// return $promo_price;



        $pk_id = session()->get('pk_id');
        // return $pk_id;
        $user_id = session()->get('user_id');

        // return $username;

      

$wallet_status = 'cod';


        $result = DB::select("select* from client_details where pk_id = '$pk_id' ");

        $result1 = DB::select("select* from address_table where user_id = '$pk_id' and pk_id = '$user_id' ");
        $address = $result1[0]->address;
        $city = $result1[0]->city;
        $phone = $result1[0]->phone;
        $zip = $result1[0]->zip;
        $status = 0;
        $v_order_status = 0;
        $s = 0;
        $products = $cart->items;
        $current = Carbon::now();
$trialExpires = $current->addDays(2);
// return $products ;
        if (session::has('pro'))
        {
            $promo = session()->get('pro');
            DB::insert("insert into order_table (user_id,promo_amount,amount, shipment_address_id,placed_at,expire_at,username,fname,lname,status,wallet_status) values (?,?,?,?,?,?,?,?,?,?,?)", array(
                $result[0]->pk_id,
                $promo,
                $cart->totalPrice,
                $result1[0]->pk_id,
               Now(),
                $trialExpires,
                $username,
                $result1[0]->fname,
                $result1[0]->lname,
                $status,
                $wallet_status
            ));
        }
        elseif (session::has('promoPrice'))
        {
            $promo = session()->get('promoPrice');
            DB::insert("insert into order_table (user_id,promo_amount,amount, shipment_address_id,placed_at,expire_at,username,fname,lname,status,wallet_status) values (?,?,?,?,?,?,?,?,?,?,?)", array(
                $result[0]->pk_id,
                $promo,
                $cart->totalPrice,
                $result1[0]->pk_id,
                Now(),
                $trialExpires,
                $username,
                $result1[0]->fname,
                $result1[0]->lname,
                $status,
                $wallet_status
            ));
        }


else



        {
            DB::insert("insert into order_table (user_id,amount, shipment_address_id,placed_at,expire_at,username,fname,lname,status , wallet_status) values (?,?,?,?,?,?,?,?,?,?)", array(
                $result[0]->pk_id,
                $cart->totalPrice,
                $result1[0]->pk_id,
                Now(),
                $trialExpires,
                $username,
                $result1[0]->fname,
                $result1[0]->lname,
                $status,
                $wallet_status
            ));
        }

        $result = DB::select("select* from order_table where user_id = '$pk_id' ORDER BY pk_id DESC");

        foreach ($products as $product)
        {

            if ($product['save'] > 0) DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,discount_price,price,percentage,size,vendor_id,v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?,?,?)", array(
                $product['item']->pk_id,
                $result[0]->pk_id,
                $product['item']->sku,
                $product['item']->name,
                $product['qty'],
                $product['price'],
                $product['item']->price,
                $product['item']->percentage,
                $product['size'],
                $product['item']->vendor_id,
                $v_order_status,
                $s
            ));

            else DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,price,size,vendor_id, v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?)", array(
                $product['item']->pk_id,
                $result[0]->pk_id,
                $product['item']->sku,
                $product['item']->name,
                $product['qty'],
                $product['item']->price,
                $product['size'],
                $product['item']->vendor_id,
                $v_order_status,
                $s
            ));

           
            
        
        
        
        
        
        
        
        
        
        
        
        }

        $data = array(
            'customer_fname' => session()->get('fname') ,
            'customer_lname' => session()
                ->get('lname') ,
            'customer_email' => session()
                ->get('username') ,
            'customer_address' => $address,
            'customer_city' => $city,
            'customer_phone' => $phone,
            'customer_region' => $zip,
            'order_id' => $result[0]->{'pk_id'},
            'date' => date('Y-m-d') ,

            'total_price' => $cart->totalPrice,

        );
        $o_id = $result[0]->{'pk_id'};
        Mail::send('email_order_confirm', $data, function ($message) use ($o_id)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            $username = session()->get('username');
            $message->to($username)->subject('Order ID# ' . $o_id . ' Received');
        });
        
        $apikey = "3d5e8043ab8bb418791ab5ff18028e78"; ///Your apikey
        $mobile = $phone; ///Recepient Mobile Number
        $sender = "YOC"; // your masking or sender
        $message = "Your order has been confirmed by YOC .Your tracking Id is " . $o_id . "Thankyou shopping for us."; // sms text
        //  $url = 'http://csms.dotklick.com/api_sms/api.php?key=' . $apikey. '&receiver=' . urlencode($mobile). '&sender=' . urlencode($sender). '&msgdata=' .urlencode($message);
        $url = 'http://csms.dotklick.com/api_sms/api.php?key='.$apikey.'&receiver='.urlencode($mobile).'&sender='.urlencode($sender).'&msgdata='.urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
       
            // return "wqd";
        
        
        $result1 = DB::select("select* from address_table where user_id = '$pk_id' and pk_id = '$user_id' ");
        $adres = $result1[0]->address;
        // return  $adres ;
        
        
        if(($result[0]->{'promo_amount'})!= "")
        {
            $amount = $result[0]->{'promo_amount'};
        }
        else
        {
            $amount = $result[0]->{'amount'};
        }
      
        //  return $amount;
         
         
        $phone = $result1[0]->{'phone'};
        //  $zip = $result1[0]->{'zip'};
        
        // return $phone;
        $o_id = $result[0]->{'pk_id'};
        // return $o_id;
      $username = session()->get('username');
        $name=  $result1[0]->fname;
        $apiKey='Qifq0chQyMpoaM4wfb4kferNd';
$name=  $name;
$address= urlEncode($adres);
$email=urlEncode($username);
$cell=urlEncode($phone);
$reference=$o_id;
$parcel='hello';
$cod=$amount;
$peice='1';
$weight='0.5';
$cityCode='LHE';
$comments=urlEncode("Call before delivery");
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => "http://rapidcourier.com.pk/api/BookShipment?ApiKey=".$apiKey."&Name=".$name."&Address=".$address.
"&Email=".$email."&Cell=".$cell."&Reference=".$reference."&ParcelDetail=".$parcel."&CollectRs=".$cod."&Peices=".$peice."&Weight=".$weight."&CityCode=".$cityCode."&Comments=".$comments,
CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
$response = curl_exec($curl);
curl_close($curl);
echo $response;
        
        
         $o_id = $result[0]->{'pk_id'};
         DB::update("update order_table set shippment_id = '$response' where pk_id='$o_id' ");
        
         
        
        
        // return "done";
   
            session()->forget('promoPrice');
            session()->forget('pro');
            session()
                ->forget('cart');
            return view('client.thanks_view', compact('result'));
        
    }









    public function order_payment_view($id)

    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        if (!(session()
            ->has('cart')))
        {
            return redirect('/');
        }
        session()
            ->put('user_id', $id);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);



$username =  Session::get('username');



        if (session::has('pro'))
        {
            $promo_price= Session::get('pro');
        }
        elseif(session::has('promoPrice'))
        {
            $promo_price= Session::get('promoPrice');
        }
        else
        {
           $promo_price= $cart->totalPrice;
        }

// return $promo_price;

        $userr_id = DB::select("select pk_id from client_details where username = '$username'");
 $userr_id= $userr_id[0]->pk_id;
        // $balance = DB::select("select sum(balance) from balance where user_id = '$userr_id'");
        $balance = DB::table('balance')->where('user_id','>=',$userr_id)->sum('balance');
// return $balance ;










        // if (session()->get('city') == 'Lahore')
        // {
        //     $cart->totalPrice = $cart->totalPrice + 200;
        // }
        // else
        // {
        //     $cart->totalPrice = $cart->totalPrice + 250;
        // }
        $result = DB::select("select* from address_table where pk_id = '$id'");

        return view('client.payment_view', compact('result','balance', 'promo_price') , ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function add_promo_code(Request $request,$sub_cat,$price)

    {
// return $sub_cat;
        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // $cat =  Session::get('sub_category');
        // return  $cat;
        // return   $storedItem  = ['price'=>$item->price];
        // return $cart->items;
$products = $cart->items;
      
//         foreach($products as $product)
// $promoCode_cat = DB::select("select* from promo_code,promo_for where promo_code.promo_code = '$promo' and promo_for.discount_for = '$username' and promo_code.discount_category = '$sub_cat'  and promo_code.status = '0'");

// foreach($products as $product)
// {
//     return $product['sub_cat'];
// }
// return $cart->totalPrice;



//        return   ($product['item']->price);
//  $price = $request->input('price');
//  return $cart->totalPrice;
// return $price;
    //   return  $cat;
        // if (session()->get('city') == 'Lahore')
        // {
        //     $cart->totalPrice = $cart->totalPrice + 200;
        // }
        // else
        // {
        //     $cart->totalPrice = $cart->totalPrice + 250;
        // }

    // return $cart->totalPrice;
        $username = session()->get('username');
        // return $username;

        $promo = $request->input('promo');

        // return  session()->put('promoPrice', $cart->totalPrice);
        // $pr = DB::select("select price from product where SKU='$pk_id'");
        // return $promoCode_cat[0]->price;

        // $promoCode_cat = DB::select("select* from promo_code,product,promo_for where promo_code.promo_code = '$promo' and promo_for.discount_for = '$username' and product.sub_category=promo_code.discount_category  and (promo_code.start_date < '$date' or promo_code.start_date = '$date') and (promo_code.end_date > '$date' or promo_code.end_date = '$date') and promo_code.min_total <= '$cart->totalPrice' and promo_code.max_total >= '$cart->totalPrice' and promo_code.status = '0'");
        // return $promoCodee;
        // $products = $cart->items;
        // foreach ($products as $product){

        //    return $product['item']->price;

        $promoCode_cat = DB::select("select* from promo_code,promo_for where promo_code.promo_code = '$promo' and promo_for.discount_for = '$username' and promo_code.discount_category = '$sub_cat'  and promo_code.status = '0'");
        $promoCodee = DB::select("select* from promo_for,promo_code where promo_code.pk_id=promo_for.promo_id and promo_code.promo_code = '$promo'  and promo_for.discount_for = '$username' and promo_code.discount_category = '0' and promo_code.status = '0'");
       
            // return $promoCode_cat;   


                    if (count($promoCode_cat) > 0) {
                    if ($promoCode_cat[0]->discount_type == 'fixed' && $promoCode_cat[0]->discount_for == "$username") {
                        $user = DB::select("select* from client_details where username = '$username' and promostatus != '0'");
                      
                        if (count($user) > 0) {
                            
                            $price = $price - $promoCode_cat[0]->discount_amount;
                            // return  $price;
                            // DB::update("update client_details set promostatus -= 1 where username='$username'");
                          
                            session()->put('promoPrice', $price);
                            $value= $cart->totalPrice - Session::get('promoPrice') ;
                            $ac= $value- $promoCode_cat[0]->discount_amount;
                            $new=  $ac +Session::get('promoPrice');
                            session()->put('pro', $new);
                            $use_time= $user[0]->promostatus;
                            $use_timee = $use_time -1;
                            DB::update("update client_details set promostatus = '$use_timee' where username='$username'");
                            // session()->put('promoPrice', $cart->totalPrice);
                            return redirect()->back();
                        } else {
                            Session::flash('message','u have used  more than required  time');
                            return redirect()->back();
                            
                        }
                    }


                    elseif ($promoCode_cat[0]->discount_type  == 'percentage' && $promoCode_cat[0]->discount_for == "$username") 
                    {
                        $user = DB::select("select* from client_details where username = '$username' and promostatus != '0'");
                        if (count($user) > 0) {
                            //  $cart->addPromo($cart->totalPrice,$promoCode[0]->discount_amount);
                            
                            $pricee = $price - (($price * $promoCode_cat[0]->discount_amount) / 100);
                            // DB::update("update client_details set promostatus = '1' where username='$username'");
                        //    return $price;
                            
                            
                            session()->put('promoPrice', $pricee);
                            $value= $cart->totalPrice - Session::get('promoPrice') ;
                            // return ($pricee * $promoCodee[0]->discount_amount) / 100;
                            $ac= $value -  (($price * $promoCode_cat[0]->discount_amount) / 100);
                            // return $ac;
                            $new=  $ac +Session::get('promoPrice');
                            session()->put('pro', $new);
                            $use_time= $user[0]->promostatus;
                            $use_timee = $use_time -1;
                            DB::update("update client_details set promostatus = '$use_timee' where username='$username'");
                           
                            
                            
                            
                            
                            
                            // session()->put('promoPrice', $cart->totalPrice);
                            return redirect()->back();
                        } 
                        else {
                            return Redirect::back()->withErrors('more than one time');
                        }
                    }


                }
                elseif(count($promoCodee) > 0)
    
{
   
         
                // $promoCodee = DB::select("select* from promo_for,promo_code where promo_code.pk_id=promo_for.promo_id and promo_code.promo_code = '$promo'  and promo_for.discount_for = '$username' and promo_code.status = '0'");
                // return $promoCodee;
                // if (count($promoCodee) > 0) {
                if ($promoCodee[0]->discount_type == 'fixed' && $promoCodee[0]->discount_for == "$username" ) 
                {
                    $user = DB::select("select* from client_details where username = '$username' and promostatus != '0'");
                    if (count($user) > 0) {
                        //  $cart->addPromo($cart->totalPrice,$promoCode[0]->discount_amount);
                        $cart->totalPrice = $cart->totalPrice - $promoCodee[0]->discount_amount;
                       
                        session()->put('promoPrice', $cart->totalPrice);

                        $use_time= $user[0]->promostatus;
                        $use_timee = $use_time -1;
                        DB::update("update client_details set promostatus = '$use_timee' where username='$username'");
                       

                        return redirect()->back();
                    } else {
                        return Redirect::back()->withErrors('In Validd');
                    }
                }
            



elseif($promoCodee[0]->discount_type == 'percentage' && $promoCodee[0]->discount_for == "$username" ) 
{
    $user = DB::select("select* from client_details where username = '$username' and promostatus != '0'");
    if (count($user) > 0) {
        //  $cart->addPromo($cart->totalPrice,$promoCode[0]->discount_amount);
    //   $cart->totalPrice;
    //   return  session()->get('promoPrice');
        $cart->totalPrice = $cart->totalPrice - (($cart->totalPrice * $promoCodee[0]->discount_amount) / 100);
        // return $cart->totalPrice;
        session()->put('promoPrice', $cart->totalPrice);

        $use_time= $user[0]->promostatus;
        $use_timee = $use_time -1;
        DB::update("update client_details set promostatus = '$use_timee' where username='$username'");
       

        return redirect()->back();
    } else {
        return Redirect::back()->withErrors('In Validd');
    }
}




              
        }
            else{
                    return Redirect::back()->withErrors('In Valid ha');
                }











        // $cat = DB::select("select discount_category from promo_code ");
        //   return $cat;      
        
        $promoCode = DB::select("select* from promo_code where promo_code = '$promo' and (start_date < '$date' or start_date = '$date') and (end_date > '$date' or end_date = '$date') and min_total <= '$cart->totalPrice' and max_total >= '$cart->totalPrice' and status = '0'");
        // return $promoCode; 
        if (count($promoCode) > 0)
        {

            if ($promoCode[0]->discount_type == 'fixed' && $promoCode[0]->discount_for == 'all customers')
            {
                $user = DB::select("select* from client_details where username = '$username' and promostatus = '0'");
                if (count($user) > 0)
                {
                    //  $cart->addPromo($cart->totalPrice,$promoCode[0]->discount_amount);
                    $cart->totalPrice = $cart->totalPrice - $promoCode[0]->discount_amount;
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()
                        ->back();
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('promocode cannot be used more than one time');
                }
            }
            
            
            
            
                    
          
        
// ========================= catt 


            











            
            
            
            
            if ($promoCode[0]->discount_type == 'fixed' && $promoCode[0]->discount_for == 'existing customers')
            {
                $user = DB::select("select client_details.username, client_details.pk_id, order_table.user_id from client_details, order_table where client_details.username = '$username' and client_details.promostatus = '0' and client_details.pk_id = order_table.user_id");
                if (count($user) > 0)
                {

                    $cart->totalPrice = $cart->totalPrice - $promoCode[0]->discount_amount;
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()
                        ->back();
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('promocode cannot be used more than one time');
                }
            }
            if ($promoCode[0]->discount_type == 'fixed' && $promoCode[0]->discount_for == 'new customers')
            {
                $user = DB::select("select client_details.username, client_details.pk_id, order_table.user_id from client_details, order_table where client_details.username = '$username' and client_details.promostatus = '0' and client_details.pk_id != order_table.user_id");
                if (count($user) > 0)
                {

                    $cart->totalPrice = $cart->totalPrice - $promoCode[0]->discount_amount;
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()
                        ->back();
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('promocode cannot be used more than one time');
                }
            }
            
            
            
            
            
            
                  
                    
            $promoCodee = DB::select("select* from promo_code where promo_code = '$promo' and discount_for = '$username'  and (start_date < '$date' or start_date = '$date') and (end_date > '$date' or end_date = '$date') and min_total <= '$cart->totalPrice' and max_total >= '$cart->totalPrice' and status = '0'");
       
            if (count($promoCodee) > 0) {
            if ($promoCodee[0]->discount_type == 'percentage' && $promoCodee[0]->discount_for == "$username") {
                $user = DB::select("select* from client_details where username = '$username' and promostatus = '0'");
                if (count($user) > 0) {
                    //  $cart->addPromo($cart->totalPrice,$promoCode[0]->discount_amount);
                   $cart->totalPrice = $cart->totalPrice - (($cart->totalPrice * $promoCode[0]->discount_amount) / 100);
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()->back();
                } else {
                    return Redirect::back()->withErrors('promocode cannot be used more than one time');
                }
            }
        }else{
            return Redirect::back()->withErrors('invalid promocode');
        }
          
            
            
            
            
            
            
            if ($promoCode[0]->discount_type == 'percentage' && $promoCode[0]->discount_for == 'all customers')
            {
                $user = DB::select("select* from client_details where username = '$username' and promostatus = '0'");
                if (count($user) > 0)
                {
                    $cart->totalPrice = $cart->totalPrice - (($cart->totalPrice * $promoCode[0]->discount_amount) / 100);
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()
                        ->back();
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('promocode cannot be used more than one time');
                }
            }
            if ($promoCode[0]->discount_type == 'percentage' && $promoCode[0]->discount_for == 'existing customers')
            {
                $user = DB::select("select client_details.username, client_details.pk_id, order_table.user_id from client_details, order_table where client_details.username = '$username' and client_details.promostatus = '0' and client_details.pk_id = order_table.user_id");

                if (count($user) > 0)
                {

                    //  $cart->addPromo($cart->totalPrice,$promoCode[0]->discount_amount);
                    // return $cart->totalPrice;
                    $cart->totalPrice = $cart->totalPrice - (($cart->totalPrice * $promoCode[0]->discount_amount) / 100);
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()
                        ->back();
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('promocode cannot be used more than one time');
                }
            }
            if ($promoCode[0]->discount_type == 'percentage' && $promoCode[0]->discount_for == 'new customers')
            {
                $user = DB::select("select client_details.username, client_details.pk_id, order_table.user_id from client_details, order_table where client_details.username = '$username' and client_details.promostatus = '0' and client_details.pk_id != order_table.user_id");
                if (count($user) > 0)
                {

                    $cart->totalPrice = $cart->totalPrice - (($cart->totalPrice * $promoCode[0]->discount_amount) / 100);
                    DB::update("update client_details set promostatus = '1' where username='$username'");
                    session()->put('promoPrice', $cart->totalPrice);
                    return redirect()
                        ->back();
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('promocode cannot be used more than one time');
                }
            }
        }
        else
        {

            return Redirect::back()
                ->withErrors('invalid promocode');
        }
    }

    public function cancel_balances()
    {
        if (!(session()->has('type') && session()
        ->get('type') == 'client'))
    {
        return redirect('/login');
    }

    $username = session()->get('username');
    $user_id = DB::select("select* from client_details where username = '$username' ");
    $user_id= $user_id[0]->pk_id;
    $balaces = DB::table('balance')->where('user_id','=',$user_id)->sum('balance');
    return view('client.cancel_balaces',compact('balaces'));

    }


    public function return_active_order(Request $request,$id)
    {
       
        if (!(session()->has('type') && session()
        ->get('type') == 'client'))
    {
        return redirect('/login');
    }

    $status = "3";

    date_default_timezone_set("Asia/Karachi");
    $date = date('Y-m-d');

$reason = $request->input('reason');
// return $id;
    $user_id = DB::select("select user_id from order_table where pk_id = '$id'");
 $user_id= $user_id[0]->user_id;
    $price = DB::select("select amount from order_table where pk_id = '$id'");
   $price= $price[0]->amount;

   $check = DB::select("select balance from balance where user_id = '$user_id'");
$checkk= $check[0]->balance;
$new_bal = $checkk + $price;

if(count($check)>0)
{

    DB::table('balance')
    ->where('user_id', $user_id)
    ->update(['balance' => $new_bal ]);

}
else{
    DB::insert("insert into balance (user_id,balance) values('$user_id','$price') ");
}


    
       
        DB::table('order_table')
            ->where('pk_id', $id)
            ->update(['status' => $status ]);
        DB::table('detail_table')
            ->where('order_id', $id)
            ->update(['v_order_status' => $status ]);
       


            $pro_id = DB::select("select product_id from detail_table where order_id = '$id'");
            $prod = $pro_id[0]->product_id;
            $size = DB::select("select size from detail_table where order_id = '$id'");
            $sizee = $size[0]->size;
            $q = DB::select("select quantity from detail_table where order_id = '$id'");
           $qq = $q[0]->quantity;
        
           
            $resulting = DB::select("select * from size_detail where product_id = '$prod' and size = '$sizee'");
            
            $qn = $resulting[0]->quantity + $qq;
            DB::update("update size_detail set quantity = '$qn' where product_id='$prod' and size='$sizee'");

            DB::insert("insert into return_reason (user_id,product_id,size,quantity,price,order_id,reason,date) values('$user_id','$prod',' $sizee','$qq','$price','$id','$reason','$date') ");


            return redirect('/');

    }






    public function cancel_active_order($id)
    {
       
        if (!(session()->has('type') && session()
        ->get('type') == 'client'))
    {
        return redirect('/login');
    }

    $status = "2";
  
       
        DB::table('order_table')
            ->where('pk_id', $id)
            ->update(['status' => $status ]);
        DB::table('detail_table')
            ->where('order_id', $id)
            ->update(['v_order_status' => $status ]);
       


            $pro_id = DB::select("select product_id from detail_table where order_id = '$id'");
            $prod = $pro_id[0]->product_id;
            $size = DB::select("select size from detail_table where order_id = '$id'");
            $sizee = $size[0]->size;
            $q = DB::select("select quantity from detail_table where order_id = '$id'");
           $qq = $q[0]->quantity;
        
           
            $resulting = DB::select("select * from size_detail where product_id = '$prod' and size = '$sizee'");
            
            $qn = $resulting[0]->quantity + $qq;
            DB::update("update size_detail set quantity = '$qn' where product_id='$prod' and size='$sizee'");

           

            return redirect('/');

    }







    public function update_order_status(Request $request)
    {
       
        if (!(session()->has('type') && session()
        ->get('type') == 'client'))
    {
        return redirect('/login');
    }
   
   
    $id = $request->input('id');
//    return $id;
    $status = $request->input('status');


    $user_id = DB::select("select user_id from order_table where pk_id = '$id'");
 $user_id= $user_id[0]->user_id;
    $price = DB::select("select amount from order_table where pk_id = '$id'");
     $price= $price[0]->amount;
    DB::insert("insert into balance (user_id,balance) values('$user_id','$price') ");
       
        DB::table('order_table')
            ->where('pk_id', $request->input('id'))
            ->update(['status' => $request->input('status') ]);
        DB::table('detail_table')
            ->where('order_id', $request->input('id'))
            ->update(['v_order_status' => $request->input('status') ]);
       


            $pro_id = DB::select("select product_id from detail_table where order_id = '$id'");
            $prod = $pro_id[0]->product_id;
            $size = DB::select("select size from detail_table where order_id = '$id'");
            $sizee = $size[0]->size;
            $q = DB::select("select quantity from detail_table where order_id = '$id'");
           $qq = $q[0]->quantity;
        
           
            $resulting = DB::select("select * from size_detail where product_id = '$prod' and size = '$sizee'");
            
            $qn = $resulting[0]->quantity + $qq;
            DB::update("update size_detail set quantity = '$qn' where product_id='$prod' and size='$sizee'");

        return URL('/') . "/";
    }










    public function add_wishlist($id)

    {
        if (!(session()->has('type') && session()
            ->get('type') == 'client'))
        {
            return redirect('/login');
        }
        $username = session()->get('username');

        if (!(session()
            ->has('type') && session()
            ->get('type') == 'client'))
        {
            
        return redirect()->back()->withErrors('Please login');
        }
        else
        {
        
        $result = DB::select("select* from wishlist where user_id = '$username' and product_id ='$id' ");

            if (count($result) > 0)
            {
                Session::flash('message','Already product is in wishlist');
        return redirect()->back();
            }
            else{    
            
            DB::insert("insert into wishlist (user_id,product_id) values (?,?)", array(
                $username,
                $id
            ));
            }
        }

        Session::flash('message','Prodduct add to wishlist');
        return redirect()->back();
    }

    public function guest_checkout_view()
    {

        if ((session()
            ->has('username') && session()
            ->get('type') == 'client'))
        {
            return redirect('/');
        }
        else
        {

            return view('client.guest_checkout_view');
        }
    }

    public function contact_us()
    {

        return view('client.contact_us');
    }
    public function contact(Request $request)
    {
        $note = $request->input('note');
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');

        $data = array(
            'customer_name' => $name,
            'email' => $email,
            'note' => $note,
            'subject' => $subject,

        );
        Mail::send('contact_us', $data, function ($message) use ($email)
        {

            $message->from('info@yoc.com.pk', 'YOC');

            $message->to('info@yoc.com.pk')
                ->subject('Contact Us mail');

        });
        return redirect('/contact/us')
            ->with('message', 'Your message has been delivered successfully');
    }

    public function warranty_and_repairs()
    {

        return view('client.warranty_and_repairs');
    }

    public function guest_checkout(Request $request)
    {

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $zip = $request->input('zip');
        $address = $request->input('address');
        $country = $request->input('country');
        $state = $request->input('state');
        $note = $request->input('note');

        if ($request->input('check'))
        {
            if (!empty($request->input('password')))
            {

                if ($request->input('password') == $request->input('confirm'))
                {

                    $result = DB::select("select* from client_details where username = '$email'");

                    if (count($result) > 0)
                    {
                        return Redirect::back()->withErrors('This email is already registered');
                    }
                    else
                    {
                        if (!empty($request->input('email')))
                        {
                            $password = $request->input('password');
                            $confirm = $request->input('confirm');
                            session()
                                ->put('password', $password);
                            session()->put('confirm', $confirm);
                        }
                        else
                        {
                            return Redirect::back()->withErrors('Email is required to create account');
                        }
                    }
                }
                else
                {
                    return Redirect::back()
                        ->withErrors('Password does not match');
                }
            }
            else
            {
                return Redirect::back()
                    ->withErrors('Please enter Password');
            }
        }

        session()->put('fname', $fname);
        session()->put('lname', $lname);
        session()->put('email', $email);
        session()->put('phone', $phone);
        session()->put('city', $city);
        session()->put('zip', $zip);
        session()->put('address', $address);

        session()->put('country', $country);
        session()->put('state', $state);
        session()->put('note', $note);

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        // if (session()->get('city') == 'Lahore')
        // {
        //     $cart->totalPrice = $cart->totalPrice + 200;
        // }
        // else
        // {
        //     $cart->totalPrice = $cart->totalPrice + 250;
        // }

        return view('client.guest_order_view', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function guest_payment_view()
    {
        if (!(session()
            ->has('cart')))
        {
            return redirect('/');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // if (session()->get('city') == 'Lahore')
        // {
        //     $cart->totalPrice = $cart->totalPrice + 200;
        // }
        // else
        // {
        //     $cart->totalPrice = $cart->totalPrice + 250;
        // }
        return view('client.guest_payment_view', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function client_logout()
    {
        session()
            ->flush();
        return redirect('/');
    }

    public function search(Request $request)
    {

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');

        $word = $request->input('search');

        $d = DB::select("select * from product,discount_table where product.sku = discount_table.sku and (product.v_product_status = '2' or product.v_product_status = '0') and (discount_table.start_date < '$date' or discount_table.start_date = '$date') and (discount_table.end_date > '$date' or discount_table.end_date = '$date') and product.status = '1' and (product.category LIKE '%$word%' or product.sub_category LIKE '%$word%' or product.product_type LIKE '%$word%' or product.name LIKE '%$word%' ) ");

        $result = DB::select("select * from product,discount_table where product.sku != discount_table.sku and discount_status='0' and product.status = '1'  and (product.category LIKE '%$word%' or product.sub_category LIKE '%$word%' or product.product_type LIKE '%$word%' or product.name LIKE '%$word%' ) ");

        if (empty($d))
        {

            $result = DB::select("select* from product where status = '1' and (product.v_product_status = '2' or product.v_product_status = '0')  and (product.category LIKE '%$word%' or product.sub_category LIKE '%$word%' or product.product_type LIKE '%$word%' or product.name LIKE '%$word%' ) ");
        }

        // $result = DB::select("select* from product where status = '0' and (category LIKE '%$word%' or sub_category LIKE '%$word%' or product_type LIKE '%$word%' or name LIKE '%$word%' ) ");
        return view('client.product_view', compact('result', 'd'));
    }

    public function guest_confirm_order(Request $request)
    {
        if (!(session()->has('cart')))
        {
            return redirect('/');
        }

        date_default_timezone_set("Asia/Karachi");
        $date = date('Y-m-d');
        $oldCart = Session::get('cart');

        // if (session()->get('city') == 'Lahore')
        // {
        //     $oldCart->totalPrice = $oldCart->totalPrice + 200;
        // }
        // else
        // {
        //     $oldCart->totalPrice = $oldCart->totalPrice + 250;
        // }

        $cart = new Cart($oldCart);

        $fname = session()->get('fname');
        $lname = session()->get('lname');
        $email = session()->get('email');
        $phone = session()->get('phone');
        $city = session()->get('city');
        $zip = session()->get('zip');
        $address = session()->get('address');

        $country = session()->get('country');
        $state = session()->get('state');
        $note = session()->get('note');
        $status = 0;
        $v_order_status = 0;
        $s = 0;
        $products = $cart->items;
        if (session::has('password'))
        {
            $promostatus = 0;
            $password = session()->get('password');
            DB::insert("insert into client_details (fname,lname,username, password, promostatus) values (?,?,?,?,?)", array(
                $fname,
                $lname,
                $email,
                md5($password) ,
                $promostatus
            ));

            $result1 = DB::select("select* from client_details where username = '$email' ");

            DB::insert("insert into address_table (user_id,fname,lname, address, city, phone, zip,country,state) values (?,?,?,?,?,?,?,?,?)", array(
                $result1[0]->pk_id,
                $fname,
                $lname,
                $address,
                $city,
                $phone,
                $zip,
                $country,
                $state
            ));

            $id = $result1[0]->pk_id;

            $result2 = DB::select("select* from address_table where user_id = '$id' ");

            DB::insert("insert into order_table (user_id,shipment_address_id,placed_at,username,fname,lname,amount, status,note ) values (?,?,?,?,?,?,?,?,?)", array(
                $result1[0]->pk_id,
                $result2[0]->pk_id,
                Now(),
                $email,
                $fname,
                $lname,
                $cart->totalPrice,
                $status,
                $note
            ));
            $result = DB::select("select* from order_table where user_id = '$id' ORDER BY pk_id DESC");

            foreach ($products as $product)
            {
                if ($product['save'] > 0) DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,discount_price,price,percentage,size,vendor_id,v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?,?,?)", array(
                    $product['item']->pk_id,
                    $result[0]->pk_id,
                    $product['item']->sku,
                    $product['item']->category,
                    $product['qty'],
                    $product['price'],
                    $product['item']->price,
                    $product['item']->percentage,
                    $product['size'],
                    $product['item']->vendor_id,
                    $v_order_status,
                    $s
                ));

                else DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,price,size,vendor_id, v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?)", array(
                    $product['item']->pk_id,
                    $result[0]->pk_id,
                    $product['item']->sku,
                    $product['item']->category,
                    $product['qty'],
                    $product['item']->price,
                    $product['size'],
                    $product['item']->vendor_id,
                    $v_order_status,
                    $s
                ));

                $id = $product['item']->sku;
                $pro_id = DB::select("select pk_id from product where sku = '$id'");
                $prod = $pro_id[0]->pk_id;
                $size = $product['size'];
                $resulting = DB::select("select * from size_detail where product_id = '$prod' and size = '$size'");
                $q = $resulting[0]->quantity - $product['qty'];
                DB::update("update size_detail set quantity = '$q' where product_id='$prod' and size='$size'");
            }

            $password = md5($password);
            $login = DB::select("select* from client_details where username = '$email' and password='$password' ");

            if (count($login) > 0)
            {
                $request->session()
                    ->put('pk_id', $login[0]->{'pk_id'});
                $request->session()
                    ->put('username', $email);
                $request->session()
                    ->put('type', 'client');
                $request->session()
                    ->put('name', $login[0]->{'fname'} . ' ' . $login[0]->{'lname'});
                $request->session()
                    ->put('fname', $login[0]->{'fname'});
                $request->session()
                    ->put('lname', $login[0]->{'lname'});
            }
        }
        else
        {
            DB::insert("insert into order_table (placed_at,username,fname,lname, address, city, phone, zipcode,country,state ,amount, status,note) values (?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                Now(),
                $email,
                $fname,
                $lname,
                $address,
                $city,
                $phone,
                $zip,
                $country,
                $state,
                $cart->totalPrice,
                $status,
                $note
            ));

            $result = DB::select("select* from order_table where username = '$email' ORDER BY pk_id DESC");

            foreach ($products as $product)
            {
                if ($product['save'] > 0) DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,discount_price,price,percentage,size,vendor_id,v_order_status,v_payment_status ) values (?,?,?,?,?,?,?,?,?,?,?,?)", array(
                    $product['item']->pk_id,
                    $result[0]->pk_id,
                    $product['item']->sku,
                    $product['item']->name,
                    $product['qty'],
                    $product['price'],
                    $product['item']->price,
                    $product['item']->percentage,
                    $product['size'],
                    $product['item']->vendor_id,
                    $v_order_status,
                    $s
                ));

                else DB::insert("insert into detail_table (product_id,order_id, sku, product_name, quantity,price,size,vendor_id, v_order_status,v_payment_status  ) values (?,?,?,?,?,?,?,?,?,?)", array(
                    $product['item']->pk_id,
                    $result[0]->pk_id,
                    $product['item']->sku,
                    $product['item']->name,
                    $product['qty'],
                    $product['item']->price,
                    $product['size'],
                    $product['item']->vendor_id,
                    $v_order_status,
                    $s
                ));

                $id = $product['item']->sku;
                $pro_id = DB::select("select pk_id from product where sku = '$id'");
                $prod = $pro_id[0]->pk_id;
                $size = $product['size'];
                $resulting = DB::select("select * from size_detail where product_id = '$prod' and size = '$size'");
                
                $q = $resulting[0]->quantity - $product['qty'];
                //  DB::table('size_detail')->where('pk_id', $id and )->update(['quantity_on_hand' =>$q]);
                DB::update("update size_detail set quantity = '$q' where product_id='$prod' and size='$size'");
            }
        }

        $data = array(
            'customer_fname' => session()->get('fname') ,
            'customer_lname' => session()
                ->get('lname') ,
            'customer_email' => session()
                ->get('email') ,
            'customer_address' => session()
                ->get('address') ,
            'customer_city' => session()
                ->get('city') ,
            'customer_phone' => session()
                ->get('phone') ,
            'customer_region' => session()
                ->get('zip') ,
            'customer_country' => session()
                ->get('country') ,
            'customer_state' => session()
                ->get('state') ,
            'order_id' => $result[0]->{'pk_id'},
            'date' => date('Y-m-d') ,
            'total_price' => $cart->totalPrice,
        );

        $o_id = $result[0]->{'pk_id'};
        Mail::send('email_order_confirm', $data, function ($message) use ($o_id)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            $id = session()->get('email');
            $message->to($id)->subject('Order ID# ' . $o_id . ' Received');
        });

         
        
        $apikey = "3d5e8043ab8bb418791ab5ff18028e78"; ///Your apikey
        $mobile = $phone; ///Recepient Mobile Number
        $sender = "YOC"; // your masking or sender
        $message = "Your order has been confirmed by YOC .Your tracking Id is " . $o_id . "Thankyou shopping for us."; // sms text
        //  $url = 'http://csms.dotklick.com/api_sms/api.php?key=' . $apikey. '&receiver=' . urlencode($mobile). '&sender=' . urlencode($sender). '&msgdata=' .urlencode($message);
        $url = 'http://csms.dotklick.com/api_sms/api.php?key='.$apikey.'&receiver='.urlencode($mobile).'&sender='.urlencode($sender).'&msgdata='.urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        
        
        
        
        
        
        
        
        
        
        
        
        $fname = session()->get('fname');
        
        // $lname = session()->get('lname');
        $email = session()->get('email');
       $o_id = $result[0]->{'pk_id'};
        $phone = session()->get('phone');
       
        $city = session()->get('city');
        $zip = session()->get('zip');
        $address = session()->get('address'); 
        //   return $address;
          $amount = $result[0]->{'amount'};
        // return $amount;
         foreach ($products as $product)
         {
         $qty =  $product['qty'];
        // return $qty;
         }
         
         
        //   return $address;
         
        $apiKey='Qifq0chQyMpoaM4wfb4kferNd';
$name= session()->get('fname');
$address=urlEncode($address);
$email=urlEncode($email);
$cell=urlEncode($phone);
$reference=$o_id;
$parcel='hello';
$cod=$amount;
$peice=$qty;
$weight='0.5';
$cityCode='LHE';
$comments=urlEncode("Call before delivery");
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => "http://rapidcourier.com.pk/api/BookShipment?ApiKey=".$apiKey."&Name=".$name."&Address=".$address.
"&Email=".$email."&Cell=".$cell."&Reference=".$reference."&ParcelDetail=".$parcel."&CollectRs=".$cod."&Peices=".$peice."&Weight=".$weight."&CityCode=".$cityCode."&Comments=".$comments,
CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
$response = curl_exec($curl);
curl_close($curl);
echo $response;
        
             $o_id = $result[0]->{'pk_id'};
         DB::update("update order_table set shippment_id = '$response' where pk_id='$o_id' ");
        
        
        
        

        session()->forget('promoPrice');
        session()
            ->forget('cart');
        return view('client.thanks_view', compact('result'));
    }
    
    
    
    
    
}

