<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Mail;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;

class adminController extends Controller
{

    public function sub(Request $request)
    {
        $value = $request->Input('cat_id');

        $subcategories = DB::select(DB::raw("SELECT * FROM sub_category WHERE main_category = :value") , array(
            'value' => $value,
        ));

        return Response::json($subcategories);

    }

    public function type(Request $request)
    {
        $type_id = $request->Input('type_id');

        $sub_id = DB::select("select* from sub_category where SKU = '$type_id' ");
        $sub_id = $sub_id[0]->sub_category;

        $subcategories = DB::select(DB::raw("SELECT * FROM product_type WHERE sub_category = :value") , array(
            'value' => $sub_id,
        ));

        //  $sub_id = DB::select("select* from product_type where sub_category = '$sub_id' and username='admin' ");
        return Response::json($subcategories);

    }

    public function verify_code($username, $code)
    {
        $result = DB::select("select* from admin_reset_password where username= '$username' and verification_code= '$code' and TIMESTAMPDIFF(MINUTE,admin_reset_password.created_at,NOW()) <=30 ");

        if (count($result) > 0)
        {
            return view('admin.change_password', compact('username'));
        }
        else return "The Verification code is expired";
    }

    public function reset_password_view()
    {

        return view('admin.password_reset');

    }

    public function admin_reset_password(Request $request)
    {

        $username = $request->input('username');
        $result = DB::select("select* from admin_details where username = '$username'");
        if (count($result) > 0)
        {
            $vcode = uniqid();
            DB::insert("insert into admin_reset_password (username,verification_code) values('$username','$vcode') ");
            $customer_name = $result[0]->{'fname'};
            $data = array(
                'customer_name' => $customer_name,
                'customer_username' => $username,
                'customer_verification_code' => $vcode,

            );
            Mail::send('admin_email_reset_password', $data, function ($message) use ($username)
            {

                $message->from('no-reply@fashionfactory.world', 'YOC');

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
        DB::update("update admin_details set password ='$password' where username='$username'");
        return redirect('/admin')->with('message', 'Your Password has been changed Successfully');
    }
    public function update_order_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $id = $request->input('id');
        // return $id;
        $status = $request->input('status');
        DB::table('order_table')
            ->where('pk_id', $request->input('id'))
            ->update(['status' => $request->input('status') ]);
        DB::table('detail_table')
            ->where('order_id', $request->input('id'))
            ->update(['v_order_status' => $request->input('status') ]);



            $current = Carbon::now();
            $trialExpires = $current->addDays(7);

if($status='4')
{
    DB::table('order_table')
            ->where('pk_id', $request->input('id'))
            ->update(['expire_at' =>  $trialExpires ]);
       
}




//         $result = DB::select("select* from order_table where pk_id = '$id'");
//         $username = $result[0]->{'username'};
//         $fname = $result[0]->{'fname'};
//         $lname = $result[0]->{'lname'};
//         $phone = $result[0]->{'phone'};
//         $data = array(
//             'customer_fname' => $fname,
//             'customer_lname' => $lname,
//             'customer_email' => $username,
//             'status' => $status,

//             'order_id' => $id,
//             'date' => date('Y-m-d') ,

//         );

//         Mail::send('email_status_update', $data, function ($message) use ($id, $username)
//         {

//             $message->from('info@yoc.com.pk', 'YOC');

//             $message->to($username)->subject('Order ID# ' . $id . 'Status Updated');

//         });

//         $apikey = "72097a90d0ac36af8a9ce42bc4c4c51a"; ///Your apikey
//         $mobile = $phone; ///Recepient Mobile Number
//         $sender = "King Fabric"; // your masking or sender
//         if ($status == 1)
//         {

//             $message = "Your order " . $id . " shipped from our warehouse for delivery. You will get your delivery soon. Thanks for buying from YOC.";

//         }
//         elseif ($status == 2)
//         {
//             $message = "We noticed you cancelled your order "  . $id .  " , and we are sorry for any inconvenience caused from our side. We would love to know what made you change your mind, because it helps us improve the service we provide to you. Just to let you know your order has been cancelled. Have a great day.
// ";
//         }
//         elseif ($status == 3)
//         {
//             $message = "We noticed you return your order "  . $id .  " , and we are sorry for any inconvenience caused from our side. We would love to know what made you change your mind, because it helps us improve the service we provide to you. Just to let you know your order has been cancelled. Have a great day.
// ";
//         }
//         elseif ($status == 4)
//         {
//             $message = "Your order "  . $id .  " has been delivered by our rider. Wish you a satisfied with our products and had a wonderful experience shopping at our website. Hoping to see you again!";
//         }

        // $url = 'http://csms.dotklick.com/api_sms/api.php?key=' . $apikey . '&receiver=' . urlencode($mobile) . '&sender=' . urlencode($sender) . '&msgdata=' . urlencode($message);

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $output = curl_exec($ch);

        return URL('/') . "/admin/home/view/active/orders";
    }

    public function create_payment(Request $request)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $id = $request->input('email');
        $payment = $request->input('payment');
        $pp = $request->input('partial_payments');

        $chk = $request->input('checkbox');

        if ($request->input('checkbox'))
        {
            foreach ($chk as $chks)
            {

                $payment1 = $payment[$chks] - $pp[$chks];
                DB::update("update vendor_payments set payment ='$payment1' where vendor_id='$id[$chks]'");
                //  DB::table('vendor_payments')->where(['vendor_id',$id[$chks]])->update(['payment' => '$payment1']);
                
            }
        }
        else
        {

            return Redirect::back()->withErrors('atleast you neeed to select one check');
        }
        return redirect()
            ->back();

    }





public function balance_view(){
        
    if (!(session()->has('type') && session()
    ->get('type') == 'admin'))
{
    return redirect('/admin');
}

         $result = DB::select("select* from balance,client_details where balance.user_id=client_details.pk_id  ");

        //  return $result;
         return view('admin.view_balance_list', compact('result'));
    
    }
    








    public function update_vendor_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $id = $request->input('id');
        DB::table('vendors')
            ->where('id', $id)->update(['vendor_status' => $request->input('status') ]);
             $status = $request->input('status');
          $data = DB::select("select* from vendors where id= '$id'");  
          $vendor = $data[0]->email;
         
           $fname = $data[0]->fname;
               $data = array(
            'customer_fname' => $fname,
            
         );
         
          
         if( $status == 0)
         {
                 
            Mail::send('email_vendor_active', $data, function ($message) use ($vendor)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            
            $message->to($vendor)->subject('Dear Vendor, Your Username ' . $vendor . ' has been activated');
        });
         }
         else
         {
             
                 
            Mail::send('email_vendor_reject', $data, function ($message) use ($vendor)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            
            $message->to($vendor)->subject('Dear Vendor, Your Username ' . $vendor . ' has been rejected');
        });
             
         }
        
            

        return URL('/') . "/admin/home/view/vendor";
    }

    public function update_promo_status($pk_id, $status)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::update("update promo_code set status='$status' where pk_id = '$pk_id'");

        return $status;
    }

    public function admin_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        if (session()
            ->has('username'))
        {
            $result = DB::select("select* from admin_details");

            return view('admin.view_admin_list', compact('result'));

        }
        else
        {
            return redirect('/admin');
        }

    }

    public function admin_specific_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from admin_details where pk_id = '$id'");
        return view('admin.view_admin_profile', compact('result'));
    }

    public function edit_admin_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        if (session()
            ->has('username'))
        {
            $result = DB::select("select*  from admin_details where pk_id = '$id'");
            return view('admin.edit_admin_profile', compact('result'));
        }
        else
        {
            return redirect('/admin');
        }

    }

    public function create_admin_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        if (session()
            ->has('username'))
        {
            return view('admin.create_admin');
        }
        else
        {
            return redirect('/admin');
        }

    }

    public function edit_admin($id, Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        if (session()
            ->has('username'))
        {
            $admin_management = 0;
            $product_management = 0;
            $category_management = 0;
            $brand_management = 0;
            $order_management = 0;
            $reporting = 0;
            $discount = 0;
            $promocode = 0;
            $vendor_management = 0;
            if ($request->input('admin_management'))
            {
                $admin_management = 1;
            }
            if ($request->input('product_management'))
            {
                $product_management = 1;
            }
            if ($request->input('category_management'))
            {
                $category_management = 1;
            }

            if ($request->input('brand_management'))
            {
                $brand_management = 1;
            }
            if ($request->input('order_management'))
            {
                $order_management = 1;
            }
            if ($request->input('reporting'))
            {
                $reporting = 1;
            }

            if ($request->input('discount'))
            {
                $discount = 1;
            }
            if ($request->input('promocode'))
            {
                $promocode = 1;
            }
            if ($request->input('vendor_management'))
            {
                $vendor_management = 1;
            }

            if ($admin_management == 0 && $product_management == 0 && $category_management == 0 && $brand_management == 0 && $order_management == 0 && $reporting == 0 && $discount == 0 && $promocode == 0 && $vendor_management == 0)
            {
                return Redirect::back()->withErrors('atleast you neeed to select one permission');
            }
        }
        if (is_null($request->input('password')) && is_null($request->input('confirm')))
        {
            DB::table('admin_details')
                ->where('pk_id', $id)->update(['fname' => $request->input('fname') , 'lname' => $request->input('lname') , 'admin_management' => $admin_management, 'product_management' => $product_management, 'category_management' => $category_management, 'brand_management' => $brand_management, 'order_management' => $order_management, 'reporting' => $reporting, 'discount' => $discount, 'promocode' => $promocode, 'vendor_management' => $vendor_management]);

            return redirect('/admin/home/view/admin');
        }
        elseif ($request->input('password') == $request->input('confirm'))
        {

            DB::table('admin_details')
                ->where('pk_id', $id)->update(['fname' => $request->input('fname') , 'lname' => $request->input('lname') , 'password' => md5($request->input('password')) , 'admin_management' => $admin_management, 'product_management' => $product_management, 'category_management' => $category_management, 'brand_management' => $brand_management, 'order_management' => $order_management, 'reporting' => $reporting, 'discount' => $discount, 'promocode' => $promocode, 'vendor_management' => $vendor_management]);

            return redirect('/admin/home/view/admin');
        }
        else
        {
            return Redirect::back()->withErrors('Password does not match');
        }

    }

    public function create_admin(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $admin_management = 0;
        $product_management = 0;
        $category_management = 0;
        $brand_management = 0;
        $order_management = 0;
        $reporting = 0;
        $discount = 0;
        $promocode = 0;
        $vendor_management = 0;
        if ($request->input('admin_management'))
        {
            $admin_management = 1;
        }
        if ($request->input('product_management'))
        {
            $product_management = 1;
        }
        if ($request->input('category_management'))
        {
            $category_management = 1;
        }

        if ($request->input('brand_management'))
        {
            $brand_management = 1;
        }
        if ($request->input('order_management'))
        {
            $order_management = 1;
        }
        if ($request->input('reporting'))
        {
            $reporting = 1;
        }

        if ($request->input('discount'))
        {
            $discount = 1;
        }
        if ($request->input('promocode'))
        {
            $promocode = 1;
        }
        if ($request->input('vendor_management'))
        {
            $vendor_management = 1;
        }

        if ($admin_management == 0 && $product_management == 0 && $category_management == 0 && $brand_management == 0 && $order_management == 0 && $reporting == 0 && $discount == 0 && $promocode == 0 && $vendor_management == 0)
        {
            return Redirect::back()->withErrors('atleast you neeed to select one permission');

        }

        if ($request->input('password') == $request->input('confirm'))
        {
            $username = $request->input('email');

            $result = DB::select("select* from admin_details where username = '$username' ");

            if (count($result) > 0)
            {

                return Redirect::back()->withErrors('Username already Exist');
            }
            else
            {

                DB::insert("insert into admin_details (fname,lname, username, password, admin_management,product_management, category_management,brand_management,order_management,reporting,discount,promocode,vendor_management ) values (?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                    $request->input('fname') ,
                    $request->input('lname') ,
                    $request->input('email') ,
                    md5($request->input('password')) ,
                    $admin_management,
                    $product_management,
                    $category_management,
                    $brand_management,
                    $order_management,
                    $reporting,
                    $discount,
                    $promocode,
                    $vendor_management
                ));

                return redirect('/admin/home/view/admin');
            }

        }
        else
        {
            return Redirect::back()->withErrors('Password does not match');
        }
    }

    public function update_vendor_payment_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $s = 1;
        $id = $request->input('id');
        DB::table('vendor_payments')
            ->where('vendor_id', $request->input('id'))
            ->update(['status' => $request->input('status') ]);
        DB::table('detail_table')
            ->where('vendor_id', $request->input('id'))
            ->update(['v_payment_status' => $s]);

        return URL('/') . "/admin/view/vendors/payments";
    }

    public function update_vendor_order_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $id = $request->input('id');
        DB::table('detail_table')
            ->where('pk_id', $request->input('id'))
            ->update(['v_order_status' => $request->input('status') ]);

        return URL('/') . "/admin/home/view/active/orders";
    }

    public function update_ven_product_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $id = $request->input('id');
        DB::table('product')
            ->where('pk_id', $request->input('id'))
            ->update(['v_product_status' => $request->input('status') ]);
            
            
            $status = $request->input('status');
            $dat = DB::select("select* from product where pk_id= '$id'");  
             $vendor = $dat[0]->vendor_id;
            $dataa = DB::select("select* from vendors where email= '$vendor'"); 
                
          $fname = $dataa[0]->fname;
          
            $data = array(
            'customer_fname' => $fname,
         );
          
            if($status==2)
            {
                Mail::send('email_vendor_product_active', $data, function ($message) use ($vendor,$fname)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            
            $message->to($vendor)->subject('Dear  '.$fname.' Your Product  has been activated');
        }); 
            }
            elseif($status == 3)
            {
                Mail::send('email_vendor_product_reject', $data, function ($message) use ($vendor,$fname)
        {

            $message->from('info@yoc.com.pk', 'YOC');
            
            $message->to($vendor)->subject('Dear  '.$fname.' Your Product  has been cancelled');
        }); 
            }
           
            
            

        return URL('/') . "/admin/home/view/pending/products";
    }
    public function product_detail_view($pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from product where pk_id='$pk_id'");

        return view('admin.view_product', compact('result'));

    }

    public function pending_product_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product  where pk_id = '$id'");
        $v_id = $result[0]->vendor_id;
        $result1 = DB::select("select* from vendors  where email = '$v_id'");
        return view('admin.vendor_product_detail_view', compact('result', 'result1'));

    }

    public function approved_product_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product  where pk_id = '$id'");
        $v_id = $result[0]->vendor_id;
        $result1 = DB::select("select* from vendors  where email  = '$v_id'");
        return view('admin.approved_product_detail_view', compact('result', 'result1'));

    }

    public function cancel_product_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product  where pk_id = '$id'");
        $v_id = $result[0]->vendor_id;
        $result1 = DB::select("select* from vendors  where email  = '$v_id'");
        return view('admin.cancel_product_detail_view', compact('result', 'result1'));

    }

    public function admin_login_view()
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
        elseif ((session()
            ->has('username') && session()
            ->get('type') == 'client'))
        {
            return redirect('/');
        }
        else
        {
            return view('admin.login');
        }

    }
    public function logout()
    {
        session()
            ->flush();
        return redirect('/admin');
    }
    public function index(Request $request)
    {

        $this->validate($request, ['username' => 'required', 'password' => 'required']);
        $password = md5($request->input('password'));
        $username = $request->input('username');
        $result = DB::select("select* from admin_details where username = '$username' and password='$password'");
        if (count($result) > 0)
        {
            $request->session()
                ->put('username', $username);
            $request->session()
                ->put('name', $result[0]->{'fname'} . ' ' . $result[0]->{'lname'});

            $request->session()
                ->put('admin_management', $result[0]->{'admin_management'});
            $request->session()
                ->put('product_management', $result[0]->{'product_management'});
            $request->session()
                ->put('category_management', $result[0]->{'category_management'});
            $request->session()
                ->put('brand_management', $result[0]->{'brand_management'});
            $request->session()
                ->put('order_management', $result[0]->{'order_management'});
            $request->session()
                ->put('reporting', $result[0]->{'reporting'});
            $request->session()
                ->put('discount', $result[0]->{'discount'});
            $request->session()
                ->put('promocode', $result[0]->{'promocode'});
            $request->session()
                ->put('vendor_management', $result[0]->{'vendor_management'});

            $request->session()
                ->put('type', 'admin');
            $result = DB::select("select * from order_table where status = '0' or status = '1' ");

            $result1 = DB::select("select* from client_details");
            $c = count($result1);
            $result2 = DB::select("select* from order_table ");
            $o = count($result2);
            $result3 = DB::select("select* from order_table where status = '4' ");
            $com = count($result3);
            $result4 = DB::select("select* from product ");
            $p = count($result4);

            return view('admin.home', compact('result', 'c', 'o', 'com', 'p'));
        }
        else
        {
            return Redirect::back()->withErrors('Username or Password is incorrect');
        }
    }
    public function reporting_by_product_list_view()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from detail_table");
        $categry = DB::select("select* from product");

        return view('admin.product_reporting_view', compact('result','categry'));

    }


    public function search_reporting_byProduct(Request $request) {
    
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
       
      $id_from =  $request->input('id_from');
      $id_to =  $request->input('id_to');

      $category =  $request->input('category');
    //   return $category;
    //   $date_to =  $request->input('date_to');


      $amount_from =  $request->input('date_from');
      $amount_to =  $request->input('date_to');

      $categry = DB::select("select* from product");

$result = "Select* from detail_table where ";


        // $result = "Select* from expense where ";
      
      if($request->input('date_from'))
      {
                    $result .= "created_at BETWEEN '$amount_from' AND '$amount_to' ";
                   
      }

    
      
    
  

    if($request->input('category'))
    {
        $result = "Select* from product  ";
        $cat = DB::select(DB::raw("SELECT * FROM product WHERE category = :value") , array(
            'value' => $category,
           
        ));
        return view('admin.product_reporting_view',compact('result','cat','result4','categry'));
    
     
      }

    //   return $cat;
      $result = DB::select("$result");
        return view('admin.product_reporting_view',compact('result','result4','categry'));
     
             }




             public function search_reporting_bycategory(Request $request) {
    
                if(!(session()->has('type') && session()->get('type')=='admin'))
                {
                    return redirect('/admin');
                }
               
                $category =  $request->input('category');
        
      $amount_from =  $request->input('date_from');
      $amount_to =  $request->input('date_to');

 
$result = "Select* from detail_table where  ";


        // $result = "Select* from expense where ";
      
      if($request->input('date_from'))
      {
                    $result .= "created_at BETWEEN '$amount_from' AND '$amount_to' ";
                   
      }

              $category =  $request->input('category');
           
            $result = DB::select(DB::raw("SELECT * FROM product WHERE category = :value") , array(
                'value' => $category,));
                // return $cat;
        
                // $result = DB::select("select* from product ");
        
            
           
        
         
                return view('admin.reporting_search_by_category',compact('result'));
            
             
              
             
                     }
        


                     public function earning_view() {
                        if(!(session()->has('type') && session()->get('type')=='admin'))
                        {
                            return redirect('/admin');
                        }
                          
                     
                     
                    
                      $result = DB::select("select* from vendors,vendor_payments where vendors.email=vendor_payments.vendor_id ");
                    
                    
                        return view('admin.earning_view',compact('result'));
                       
                    }


    public function reporting_by_product($sku)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $total = 0;
        $result = DB::select("select* from detail_table where product_id = '$sku'");
        $result1 = DB::select("SELECT SUM(detail_table.price)
        FROM detail_table
        WHERE detail_table.product_id='$sku'");
        $total = $result1[0]->{'SUM(detail_table.price)'};
        return view('admin.product_reporting_detail_view', compact('result', 'total'));
    }

    public function customer_reporting_list_view()
    {

        if (!(session()
            ->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from client_details");

        return view('admin.customer_reporting_list_view', compact('result'));

    }

    public function customer_reporting($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $sum = 0;
        $result = DB::select("select * from order_table, client_details where order_table.user_id = client_details.pk_id and order_table.user_id = '$id' and order_table.status = '4'");

        if (count($result) > 0) foreach ($result as $results)
        {
            if ($results->promo_amount == "") $sum = $sum + $results->amount;
            else $sum = $sum + $results->promo_amount;
        }
        return view('admin.customer_reporting_detail_view', compact('result', 'sum'));

    }

    public function reporting_by_sale($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where pk_id = '$id'");

        $o_id = $result[0]->user_id;
        if (empty($o_id))
        {
            $result1 = DB::select("select * from detail_table where order_id = '$id'");

            return view('admin.sale_reporting_detail_view', compact('result', 'result1'));

        }
        else
        {
            $result = DB::select("select order_table.pk_id,address_table.fname,address_table.lname,order_table.amount,address_table.address,order_table.status,address_table.phone from order_table,address_table where order_table.shipment_address_id=address_table.pk_id and order_table.pk_id = '$id'");
            $result1 = DB::select("select * from detail_table where order_id = '$id'");

            return view('admin.sale_reporting_detail_view', compact('result', 'result1'));
        }
    }

    public function reporting_by_sale_list_view()
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $total = 0;

        $result = DB::select("select* from order_table where status = '4'");

        foreach ($result as $results)
        {
            $total = $total + $results->amount;
        }
        return view('admin.reporting_by_sale_list_view', compact('result', 'total'));
    }

    public function vendor_reporting_list_view()
    {

        if (!(session()
            ->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from vendors, vendor_payments where vendors.email = vendor_payments.vendor_id ");

        return view('admin.vendor_reporting_list_view', compact('result'));
    }

    public function vendor_payments_list_view()
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from vendor_payments, vendors where vendor_payments.vendor_id = vendors.email and vendor_payments.status = '0' and vendor_payments.payment > '0' ");

        return view('admin.vendor_payment_list_view', compact('result'));
    }

    public function admin_home()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where status = '0' or status = '1' ");
        $result1 = DB::select("select* from client_details");
        $c = count($result1);
        $result2 = DB::select("select* from order_table ");
        $o = count($result2);
        $result3 = DB::select("select* from order_table where status = '4' ");
        $com = count($result3);
        $result4 = DB::select("select* from product ");
        $p = count($result4);

        return view('admin.home', compact('result', 'c', 'o', 'com', 'p'));

    }

    public function add_discount_view()
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product");
        $result1 = DB::select("select* from sub_category");
        return view('admin.add_discount_view', compact('result','result1'));

    }

    public function add_discount(Request $request)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $status = "1";
        $sku = $request->input('sku');
        // return $sku;
            $category = $request->input('category');
           
        DB::insert("insert into discount_table (sku,category,start_date,end_date,percentage,fixed_amount) values (?,?,?,?,?,?)", array(
            $request->input('sku') ,
            $request->input('category'),
            $request->input('start_date') ,
            $request->input('end_date') ,
            $request->input('percentage'),
            $request->input('fixed_amount')
        ));
         if($request->input('sku'))
         {
        DB::table('product')
            ->where('sku', $sku)->update(['discount_status' => $status]);
}
else{
    DB::table('product')
            ->where('sub_category', $category)->update(['discount_status' => $status]);
}
        return redirect('/admin/home/view/discount');
    }

    public function view_discount()
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from discount_table");

        return view('admin.view_discount', compact('result'));

    }

    public function edit_discount_view($pk_id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from discount_table where pk_id = '$pk_id'");

        return view('admin.edit_discount_view', compact('result'));

    }

    public function edit_discount(Request $request, $pk_id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
 $status = "1";
  
        // return $sku;
            $category = $request->input('category');
        $sku = $request->input('sku');
        DB::table('discount_table')
            ->where('pk_id', $pk_id)->update(['sku' => $request->input('sku') ,'category'=> $request->input('category') ,'start_date' => $request->input('start_date') , 'end_date' => $request->input('end_date') , 'percentage' => $request->input('percentage'),'fixed_amount' => $request->input('fixed_amount') ]);
     
      
       
if($request->input('sku'))
         {
        DB::table('product')
            ->where('sku', $sku)->update(['discount_status' => $status]);
}
else{
    DB::table('product')
            ->where('sub_category', $category)->update(['discount_status' => $status]);
}
     
     
     

        return redirect('/admin/home/view/discount');

    }

    public function add_promo_view()
    {

        if (!(session()
            ->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from client_details ");
        $result1 = DB::select("select* from sub_category ");

  return view('admin.add_promo_code',compact('result','result1'));

    }

    public function add_promo(Request $request)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        
        
        $promo_name = $request->input('promoinput') ;
        // return $promo_name;
       if( $request->input('category'))

       {
        $discount_category = $request->input('category') ;


       }
else{

    $discount_category = "0" ;

}

    //   $discount_category = $request->input('category') ;

      $use_time = $request->input('use_time') ;
    //   return $discount_category;
  
 
// return $promo_name;
        
        $status = 1;
        if ($request->input('status'))
        {
            $status = 0;
        }

        if ($request->input('radio') == '1')
        {
            $discount_type = 'fixed';
        }
        if ($request->input('radio') == '2')
        {
            $discount_type = 'percentage';
        }
        
        
//         if($request->input('username') )
//   {
//       $discount_for = "$promo_name";
  
//   }


  


        if ($request->input('optradio') == '3')
        {
            $discount_for = 'all customers';
        }
        if ($request->input('optradio') == '4')
        {
            $discount_for = 'existing customers';
        }
        if ($request->input('optradio') == '5')
        {
            $discount_for = 'new customers';
        }

        DB::insert("insert into promo_code (promo_code,use_time,discount_type,discount_amount,start_date,end_date,min_total,max_total, discount_category,status) values (?,?,?,?,?,?,?,?,?,?)", array(
            $request->input('promo') ,
            $use_time,
            $discount_type,
            $request->input('discount') ,
            $request->input('start_date') ,
            $request->input('end_date') ,
            $request->input('min') ,
            $request->input('max') ,
            // $discount_for,
            $discount_category,
            $status
        ));

        $dietPlanId = DB::getPdo()->lastInsertId();
        // return $dietPlanId;


        $promo_name = $request->input('promoinput') ;
//  return $promo_name;
          if(count($promo_name)>0)
          {
          
          for($i=0; $i < count($promo_name); $i++ )
        {
        
            DB::insert("insert into promo_for (promo_id,discount_for) values (?,?)",array($dietPlanId,$promo_name[$i]));
        
        }
          }
        




        DB::update("update client_details set promostatus = '$use_time' where username= '$promo_name[0]' ");
        return redirect('/admin/home/view/promo');
    }

    public function view_promo_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from promo_code,promo_for where promo_code.pk_id= promo_for.promo_id");
        // return $result;
        $result1 = DB::select("select* from promo_code");
        return view('admin.view_promo_list', compact('result','result1'));

    }
    


    public function promo_detailed_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        // return $id;
        $result = DB::select("select* from promo_code,promo_for where promo_code.pk_id= '$id' and promo_for.promo_id= '$id'  ");
        // return $result;
        $result1 = DB::select("select* from promo_code where pk_id='$id'  ");
       
        return view('admin.promo_detailed_view', compact('result','result1'));

    }




    public function edit_promo_view($pk_id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from promo_code where pk_id = '$pk_id'");

 $result1 = DB::select("select* from client_details ");
        return view('admin.edit_promo_view', compact('result','result1'));

    }

    public function edit_promo(Request $request, $pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        
         $promo_name = $request->input('username') ;
// return $promo_name;
        
        $discount_type = "";

        $status = 1;
        if ($request->input('status'))
        {
            $status = 0;
        }

        if ($request->input('radio') == '1')
        {
            $discount_type = 'fixed';
        }
        if ($request->input('radio') == '2')
        {
            $discount_type = 'percentage';
        }

if($request->input('username') )
  {
      $discount_for = "$promo_name";
  
  }

        if ($request->input('optradio') == '3')
        {
            $discount_for = 'all customers';
        }
        if ($request->input('optradio') == '4')
        {
            $discount_for = 'existing customers';
        }
        if ($request->input('optradio') == '5')
        {
            $discount_for = 'new customers';
        }
        DB::table('promo_code')->where('pk_id', $pk_id)->update(['promo_code' => $request->input('promo') , 'discount_type' => $discount_type, 'start_date' => $request->input('start_date') , 'end_date' => $request->input('end_date') , 'min_total' => $request->input('min') , 'max_total' => $request->input('max') , 'discount_for' => $discount_for, 'discount_amount' => $request->input('discount') , 'status' => $status]);
        return redirect('/admin/home/view/promo');

    }

    public function add_brand_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        return view('admin.add_brand_view');

    }

    public function add_brand(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $cat = $request->input('brandname');
        $result = DB::select("select* from brand where brand_name = '$cat' ");
        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Brand already Exist');

        }
        else

        {
            $thumbnail = "";
            if ($request->hasFile('file'))
            {
                $image = $request->file('file');
                $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
                $image->storeAs('public/images', $uniqueFileName);
                $thumbnail = $uniqueFileName;
            }

            DB::insert("insert into brand (brand_name,thumbnail) values (?,?)", array(
                $request->input('brandname') ,
                $thumbnail
            ));
            return redirect('/admin/home/view/brand');
        }
    }

    public function brand_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from brand");

        return view('admin.view_brand_list', compact('result'));

    }

    public function edit_brand_view($sku)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from brand where SKU = '$sku'");

        return view('admin.edit_brand', compact('result'));

    }

    public function edit_brand(Request $request, $sku)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $cat = $request->input('brandname');
        $result = DB::select("select* from brand where brand_name = '$cat' ");
        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Brand already Exist');

        }
        else

        {
            $thumbnail = "";
            if ($request->hasFile('file'))
            {
                $image = $request->file('file');
                $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
                $image->storeAs('public/images', $uniqueFileName);
                $thumbnail = $uniqueFileName;
            }

            $brand_name = $request->input('brandname');

            DB::table('brand')
                ->where('SKU', $sku)->update(['brand_name' => $brand_name, 'thumbnail' => $thumbnail]);
            return redirect('/admin/home/view/brand');

        }
    }

    public function add_main_category_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        return view('admin.add_main_category_view');

    }

    public function add_main_category(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $cat = $request->input('mainCategory');
        
        $result = DB::select(DB::raw("SELECT * FROM main_category WHERE main_category = :value") , array(
            'value' => $cat,
        ));
        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Category already Exist');

        }
        else

        {

            $username = 'admin';

            DB::insert("insert into main_category (main_category,username) values (?,?)", array(
                $request->input('mainCategory') ,
                $username
            ));
            return redirect('/admin/home/view/main/category');
        }
    }

    public function add_sub_category_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from main_category");
        return view('admin.add_sub_category_view', compact('result'));
    }

    public function add_sub_category(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $category = $request->input('mainCategory');

        $cat = $request->input('subCategory');
        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }

        $result = DB::select(DB::raw("SELECT * FROM sub_category WHERE sub_category = :value and main_category= :value2") , array(
            'value' => $cat,
            'value2' => $category,
        ));

        //     $result = DB::select("select* from sub_category where sub_category = '$cat' and main_category='$category'  ");
        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Subcategory already Exist');

        }
        else

        {
            $username = 'admin';
            $category = $request->input('mainCategory');

            DB::insert("insert into sub_category (main_category,sub_category,thumbnail,username) values (?,?,?,?)", array(
                $category,
                $request->input('subCategory') ,
                $thumbnail,
                $username
            ));
            return redirect('/admin/home/view/sub/category');
        }
    }
    public function main_category_list_view()
    {

        $result = DB::select("select* from main_category");

        return view('admin.view_main_category_list', compact('result'));

    }
    public function sub_category_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from sub_category");

        return view('admin.view_sub_category_list', compact('result'));

    }

    public function edit_main_category_view($sku)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from main_category where SKU = '$sku'");

        return view('admin.edit_main_category', compact('result'));

    }

    public function edit_main_category(Request $request, $sku)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $cat = $request->input('mainCategory');
        
        
        $result = DB::select("select* from main_category where main_category = '$cat' ");

        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Category already Exist');

        }
        else

        {

            $main_category = $request->input('mainCategory');

            DB::table('main_category')
                ->where('SKU', $sku)->update(['main_category' => $main_category]);
            return redirect('/admin/home/view/main/category');

        }
    }

    public function edit_sub_category_view($sku)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from main_category");

        $result1 = DB::select("select* from sub_category where SKU = '$sku'");

        return view('admin.edit_sub_category', compact('result', 'result1'));

    }

    public function edit_sub_category(Request $request, $sku)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $main_category = $request->input('mainCategory');
        $cat = $request->input('subCategory');
        
        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        $result = DB::select(DB::raw("SELECT * FROM sub_category WHERE sub_category = :value and main_category= :value2") , array(
            'value' => $cat,
            'value2' => $main_category,
        ));

        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Subcategory already Exist');

        }
        else

        {

            DB::table('sub_category')
                ->where('SKU', $sku)->update(['main_category' => $main_category, 'sub_category' => $cat,'thumbnail' => $thumbnail]);
            return redirect('/admin/home/view/sub/category');

        }
    }

    public function add_product_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product_type where product_type IS NOT NULL and username = 'admin'");
        $result1 = DB::select("select* from brand");
        $result2 = DB::select("select* from main_category where username = 'admin'");
        $result3 = DB::select("select* from sub_category where sub_category IS NOT NULL and username = 'admin'");

        return view('admin.add_product_view', compact('result', 'result1', 'result2', 'result3'));
    }

    public function add_product(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $q = $request->input('mytextt');

        $cat = $request->input('sku');
        $result = DB::select("select* from product where SKU = '$cat' ");

        $main_category = urldecode($request->input('mainCategory'));
        $sub_category = '';
        $product_type = '';
        if (!empty($main_category))
        {
            $a = $request->input('SubCategory');
            $sub_category = DB::select("select* from sub_category where SKU = '$a' ");
            $sub_category = $sub_category[0]->sub_category;

            $product_type = $request->input('ProductType');

        }

        $final_size = "";

        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        $thumbnail2 = "";
        if ($request->hasFile('images2'))
        {
            $image = $request->file('images2');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail2 = $uniqueFileName;
        }

        $thumbnail3 = "";
        if ($request->hasFile('images3'))
        {
            $image = $request->file('images3');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);

            $thumbnail3 = $uniqueFileName;
        }

        $thumbnail4 = "";
        if ($request->hasFile('images4'))
        {
            $image = $request->file('images4');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);

            $thumbnail4 = $uniqueFileName;
        }
        $status = 0;
        if ($request->input('status'))
        {
            $status = 1;
        }

        $color = $request->input('_color');

        $vendor_id = "admin";
        $v_product_status = 0;
        $unit = $request->input('unit');

        DB::insert("insert into product (SKU,name,price,color,category,sub_category,brand_name,product_type,thumbnail,thumbnail2,thumbnail3,thumbnail4,description,status,size,unit,quantity_on_hand,v_product_status) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
            $request->input('sku') ,
            $request->input('name') ,
            $request->input('price') ,
            $color,
            $main_category,
            $sub_category,
            $request->input('brandName') ,
            $product_type,
            $thumbnail,
            $thumbnail2,
            $thumbnail3,
            $thumbnail4,
            $request->input('description') ,
            $status,
            $final_size,
            $unit,
            $request->input('quantity_on_hand') ,
            $v_product_status
        ));
        $sku = $request->input('sku');
        $sku = DB::select("select* from product where SKU = '$sku' and color='$color'");
        if (count($sku) > 0)
        {
            $sku = $sku[0]->pk_id;
            for ($i = 0;$i < count($q);$i++)
            {

                DB::insert("insert into size_detail (product_id,quantity,size) values (?,?,?)", array(
                    $sku,
                    $q[$i],
                    $q[++$i]
                ));

            }
        }
        return redirect('/admin/home/view/product');

    }
    public function delete_product($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from product where pk_id = '$id'");

        return redirect()->back();
    }


public function delete_vendor($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from vendors where id = '$id'");

        return redirect()->back();
    }




    public function delete_promo_code($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from promo_code where pk_id = '$id' ");
        DB::delete("delete from promo_for where promo_id = '$id' ");

        return redirect()->back();
    }

    public function delete_discount($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from discount_table  where pk_id = '$id'");

        return redirect()->back();
    }

    public function delete_product_type($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from product_type where pk_id = '$id'");

        return redirect()->back();
    }

    public function delete_main_category($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from main_category where SKU = '$id'");

        return redirect()->back();
    }

    public function delete_sub_category($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from sub_category where SKU = '$id'");

        return redirect()->back();
    }

    public function delete_brand($id)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::delete("delete from brand where SKU = '$id'");

        return redirect()->back();
    }

    public function edit_product($pk_id, Request $request)
    {

        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select * from product where pk_id = '$pk_id'");

        if ($request->input('mytextt'))
        {
            $q = $request->input('mytextt');
            DB::delete("delete from size_detail where product_id = '$pk_id'");

            for ($i = 0;$i < count($q);$i++)
            {
                DB::insert("insert into size_detail (product_id,quantity,size) values (?,?,?)", array(
                    $pk_id,
                    $q[$i],
                    $q[++$i]
                ));

            }

        }

        $status = 0;
        if ($request->input('status'))
        {
            $status = 1;
        }

        $main_category = urldecode($request->input('mainCategory'));

        $a = $request->input('SubCategory');
        $sub_category = DB::select(DB::raw("SELECT * FROM sub_category WHERE sub_category = :value") , array(
            'value' => $a,
        ));

        if (count($sub_category) > 0)
        {
            $a = $sub_category[0]->sub_category;

        }
        else
        {

            $sub_category = DB::select(DB::raw("SELECT * FROM sub_category WHERE SKU = :value") , array(
                'value' => $a,
            ));

            if (count($sub_category) > 0)

            {
                $a = $sub_category[0]->sub_category;
            }
            else
            {
                $a = "";
            }
        }

        $product_type = $request->input('ProductType');

        $final_size = "";

        $unit = $request->input('unit');
        $thumbnail = $result[0]->thumbnail;
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $destinationPath = public_path('/storage/images');
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        $thumbnail2 = $result[0]->thumbnail2;
        if ($request->hasFile('images2'))
        {
            $image = $request->file('images2');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $destinationPath = public_path('/storage/images');
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail2 = $uniqueFileName;
        }

        $thumbnail3 = $result[0]->thumbnail3;
        if ($request->hasFile('images3'))
        {
            $image = $request->file('images3');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $destinationPath = public_path('/storage/images');
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail3 = $uniqueFileName;
        }

        $thumbnail4 = $result[0]->thumbnail4;
        if ($request->hasFile('images4'))
        {
            $image = $request->file('images4');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $destinationPath = public_path('/storage/images');
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail4 = $uniqueFileName;
        }
        $color = $result[0]->color;

        if ($request->input('_color'))
        {
            $color = $request->input('_color');
        }

        DB::table('product')
            ->where('pk_id', $pk_id)->update(['sku' => $request->input('sku') , 'name' => $request->input('name') , 'price' => $request->input('price') , 'color' => $color, 'category' => $main_category, 'sub_category' => $a, 'brand_name' => $request->input('brandName') , 'product_type' => $product_type, 'thumbnail' => $thumbnail, 'thumbnail2' => $thumbnail2, 'thumbnail3' => $thumbnail3, 'thumbnail4' => $thumbnail4, 'status' => $status, 'quantity_on_hand' => $request->input('quantity_on_hand') , 'size' => $final_size, 'unit' => $unit, 'description' => $request->input('description') ]);

        if ($request->input('mytextt'))
        {
            $q = $request->input('mytextt');
            DB::delete("delete from size_detail where product_id = '$pk_id'");

            for ($i = 0;$i < count($q);$i++)
            {
                DB::insert("insert into size_detail (product_id,quantity,size) values (?,?,?)", array(
                    $pk_id,
                    $q[$i],
                    $q[++$i]
                ));

            }

        }

        return redirect('/admin/home/view/product');

    }

    public function edit_product_view($pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product where pk_id = '$pk_id'");
        $result1 = DB::select("select* from main_category");
        $main = $result[0]->category;
        $sub = $result[0]->sub_category;

        $result2 = DB::select(DB::raw("SELECT * FROM sub_category WHERE main_category = :value") , array(
            'value' => $main,
        ));

        $result3 = DB::select(DB::raw("SELECT * FROM product_type WHERE main_category= :value and sub_category= :value2 ") , array(
            'value' => $main,
            'value2' => $sub,
        ));

        // $result2 = DB::select("select* from sub_category where main_category = '$main'");
        //  $result3 = DB::select("select* from product_type  where main_category = '$main' and sub_category = '$sub' ");
        $result4 = DB::select("select* from brand");

        return view('admin.edit_product', compact('result', 'result1', 'result2', 'result3', 'result4'));

    }
    public function updateProductStatus($pk_id, $status)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        DB::update("update product set status='$status' where pk_id = '$pk_id'");

        return $status;
    }
    public function add_product_type_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from main_category");
        $result1 = DB::select("select* from sub_category");
        return view('admin.add_product_type_view', compact('result', 'result1'));
    }

    public function add_product_type(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $cat = $request->input('productType');
        $cat1 = urldecode($request->input('mainCategory'));

        $cat2 = $request->input('subCategory');

        $result = DB::select(DB::raw("SELECT * FROM product_type WHERE product_type = :value and main_category= :value2 and sub_category= :value3 ") , array(
            'value' => $cat,
            'value2' => $cat1,
            'value3' => $cat2,
        ));

        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Product Type already Exist');

        }
        else

        {
            $username = 'admin';
            DB::insert("insert into product_type (product_type,main_category,sub_category,username) values (?,?,?,?)", array(
                $request->input('productType') ,
                $cat1,
                $request->input('subCategory') ,
                $username
            ));
            return redirect('/admin/home/view/product/type');
        }
    }
    public function product_type_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product_type");

        return view('admin.product_type_list_view', compact('result'));

    }

    public function edit_product_type_view($pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product_type where pk_id = '$pk_id'");

        return view('admin.edit_product_type_view', compact('result'));

    }

    public function edit_product_type(Request $request, $pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $cat = $request->input('productType');
        $cat1 = urldecode($request->input('mainCategory'));

        $cat2 = $request->input('subCategory');

        $result = DB::select(DB::raw("SELECT * FROM product_type WHERE product_type = :value and main_category= :value2 and sub_category= :value3 ") , array(
            'value' => $cat,
            'value2' => $cat1,
            'value3' => $cat2,
        ));
        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Product Type already Exist');

        }
        else

        {

            DB::table('product_type')
                ->where('pk_id', $pk_id)->update(['product_type' => $cat, 'main_category' => $cat1, 'sub_category' => $cat2]);
            return redirect('/admin/home/view/product/type');

        }
    }

    public function vendor_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from vendors");
        return view('admin.vendor_list_view', compact('result'));
    }

    public function vendor_detail_view($pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from vendors where id = '$pk_id'");

        return view('admin.vendor_detail_view', compact('result'));

    }

    public function product_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from product where v_product_status='2' or v_product_status='0' ");
        return view('admin.product_list_view', compact('result'));
    }

    public function active_order_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        //$result = DB::select("select order_table.pk_id,order_table.fname,order_table.lname,address_table.fname,address_table.lname,order_table.amount,order_table.placed_at from order_table,address_table where order_table.shipment_address_id=address_table.pk_id or order_table.status = '0'");
        

        $result = DB::select("select* from order_table where status = '0' or status = '1' ");

        return view('admin.active_order_view', compact('result'));

    }

    public function active_order_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where pk_id = '$id'");


  $shipmentId = $result[0]->shippment_id;
// $shipmentId='120001731';
// echo $shipmentId;

$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => "http://rapidcourier.com.pk/api/Track?ShipmentID=".$shipmentId,
CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
$response = curl_exec($curl);
$response = json_encode($response, true);
curl_close($curl);
//$response = $response['response'];
// print_r($response);



        $o_id = $result[0]->user_id;
        if (empty($o_id))
        {
            $result1 = DB::select("select * from product,detail_table where  detail_table.order_id = '$id' and detail_table.sku = product.sku");

            return view('admin.active_order_detail_view', compact('result', 'result1','response'));

        }
        else
        {
            $result = DB::select("select order_table.pk_id ,order_table.username,order_table.promo_amount,address_table.city,address_table.fname,address_table.lname,order_table.amount,address_table.address,order_table.status,address_table.phone from order_table,address_table where order_table.shipment_address_id=address_table.pk_id and order_table.pk_id = '$id'");
    $result1 = DB::select("select * from product,detail_table where detail_table.order_id = '$id' and detail_table.sku = product.sku"); 
    
    
 
    return view('admin.active_order_detail_view',compact('result','result1','response')); 
        }
    }

    public function complete_order_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where status = '4'");
        return view('admin.complete_order_list_view', compact('result'));
    }

    public function pending_product_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product where v_product_status = '1'");
        return view('admin.pending_product_list_view', compact('result'));
    }

    public function approved_product_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product where v_product_status = '2'");
        return view('admin.approved_product_list_view', compact('result'));
    }

    public function cancel_product_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from product where v_product_status = '3'");
        return view('admin.cancel_products_list_view', compact('result'));
    }

    public function cancel_order_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where status = '2'");
        return view('admin.canceled_order_list_view', compact('result'));
    }

    public function return_order_list_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where status = '3'");
        return view('admin.return_order_list_view', compact('result'));
    }

    public function complete_order_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where pk_id = '$id'");
        $o_id = $result[0]->user_id;
        if (empty($o_id))
        {
            $result1 = DB::select("select * from product,detail_table where detail_table.order_id = '$id' and detail_table.sku=product.sku");

            return view('admin.complete_order_detail_view', compact('result', 'result1'));

        }
        else
        {

            $result = DB::select("select order_table.pk_id ,order_table.username,address_table.city ,order_table.promo_amount,address_table.fname,address_table.lname,order_table.amount,address_table.address,order_table.status,address_table.phone from order_table,address_table where order_table.shipment_address_id=address_table.pk_id and order_table.pk_id = '$id'");
            
            $result1 = DB::select("select * from product,detail_table where detail_table.order_id = '$id' and detail_table.sku = product.sku");
            return view('admin.complete_order_detail_view', compact('result', 'result1'));
        }
    }

    public function cancel_order_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where pk_id = '$id'");

        $o_id = $result[0]->user_id;
        if (empty($o_id))
        {
            $result1 = DB::select("select * from product,detail_table where detail_table.order_id = '$id' and detail_table.sku = product.sku");
            return view('admin.cancel_order_detail_view', compact('result', 'result1'));
        }
        else
        {
            $result = DB::select("select order_table.pk_id ,order_table.promo_amount,address_table.fname,address_table.lname,order_table.amount,address_table.address,order_table.status,address_table.phone from order_table,address_table where order_table.shipment_address_id=address_table.pk_id and order_table.pk_id = '$id'");
            $result1 = DB::select("select * from product, detail_table where detail_table.order_id = '$id' and detail_table.sku= product.sku");
            return view('admin.cancel_order_detail_view', compact('result', 'result1'));
        }
    }

    public function return_order_detail_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from order_table where pk_id = '$id'");

        $o_id = $result[0]->user_id;
        if (empty($o_id))
        {
            $result1 = DB::select("select * from detail_table where order_id = '$id'");

            return view('admin.return_order_detail_view', compact('result', 'result1'));

        }
        else
        {
            $result = DB::select("select order_table.pk_id ,order_table.promo_amount,address_table.fname,address_table.lname,order_table.amount,address_table.address,order_table.status,address_table.phone from order_table,address_table where order_table.shipment_address_id=address_table.pk_id and order_table.pk_id = '$id'");
            $result1 = DB::select("select * from detail_table where order_id = '$id'");
            return view('admin.return_order_detail_view', compact('result', 'result1'));
        }
    }
}

