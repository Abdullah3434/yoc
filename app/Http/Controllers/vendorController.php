<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\vendor;
use Session;
use Response;

class vendorController extends Controller
{
    
  
     public function sub(Request $request)
    {
        $value = $request->Input('cat_id');
        
  
    $subcategories = DB::select( DB::raw("SELECT * FROM sub_category WHERE main_category = :value"), array(
   'value' => $value,
 ));

        
        return Response::json($subcategories);
            
            

    }
    
        public function type(Request $request)
    {
        $type_id = $request->Input('type_id');
    
       
         $sub_id = DB::select("select* from sub_category where SKU = '$type_id' ");
         $sub_id =  $sub_id[0]->sub_category;
  
       $subcategories = DB::select( DB::raw("SELECT * FROM product_type WHERE sub_category = :value"), array(
   'value' => $sub_id,
 ));

      //  $sub_id = DB::select("select* from product_type where sub_category = '$sub_id' and username='admin' ");
        
   return Response::json($subcategories);
            
      

    }
    
       public function add_product_type_view() {
   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }

    $result = DB::select("select* from main_category where username = 'admin'");
        $result1 = DB::select("select* from sub_category where username = 'admin'");
        return view('vendor.add_product_type_view',compact('result','result1')); 
       }
       
       
          public function add_product_type(Request $request) {
   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          
           $cat = $request->input('productType');
      $cat1 = urldecode($request->input('mainCategory'));
  
       $cat2 = $request->input('subCategory');
    
 
         $result = DB::select( DB::raw("SELECT * FROM product_type WHERE product_type = :value and main_category= :value2 and sub_category= :value3 "), array(
   'value' => $cat,
   'value2' => $cat1,
   'value3' => $cat2,
 ));
        if(count($result)>0)
        {
             return Redirect::back()->withErrors('Product Type already Exist');
            
        }
        else
        
  {
                $username = session()->get('username'); 
        DB::insert("insert into product_type (product_type,main_category,sub_category,username) values (?,?,?,?)",array($request->input('productType'),$cat1,$request->input('subCategory'),$username));
        return redirect('/vendor/view/product/type');
       }

}

public function edit_product_type_view($pk_id) {
  if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }


    $result = DB::select("select* from product_type where pk_id = '$pk_id'");
       $result2 = DB::select("select* from main_category");
    $result1 = DB::select("select* from sub_category");
    return view('vendor.edit_product_type_view',compact('result','result2','result1'));

}


public function edit_product_type(Request $request, $pk_id) {
   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
                 $cat = $request->input('productType');
        $result = DB::select("select* from product_type where product_type = '$cat' ");
        if(count($result)>0)
        {
             return Redirect::back()->withErrors('Product Type already Exist');
            
        }
        else
        
  {
 $product_type =$request->input('productType');
    $main_category =$request->input('mainCategory');
    $sub_category =$request->input('subCategory');

    DB::table('product_type')->where('pk_id', $pk_id)->update(['product_type' =>$product_type,'main_category' =>$main_category,'sub_category' =>$sub_category]);
    return redirect('/vendor/view/product/type');

}
}

  public function delete_product_type($id) {

    if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }

    DB::delete("delete from product_type where pk_id = '$id'");
    
  
    return redirect()->back(); 
   }

       public function product_type_list_view() {
     if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
 $username = session()->get('username'); 
        $result = DB::select("select* from product_type where username = '$username'");
     
        return view('vendor.product_type_list_view',compact('result'));

}


    
      public function delete_main_category($id) {

   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }

    DB::delete("delete from main_category where SKU = '$id'");
    
  
    return redirect()->back(); 
   }
   
     public function delete_sub_category($id) {

  if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }

    DB::delete("delete from sub_category where SKU = '$id'");
    
  
    return redirect()->back(); 
   }
    
    public function add_main_category_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          
          
      
    return view('vendor.add_main_category_view'); 
      
   }
   
     public function add_main_category(Request $request) {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          $cat = $request->input('mainCategory');
        $result = DB::select("select* from main_category where main_category = '$cat' ");
        if(count($result)>0)
        {
             return Redirect::back()->withErrors('Category already Exist');
            
        }
        else
        
  {
          $username = session()->get('username');
  
          DB::insert("insert into main_category (main_category,username) values (?,?)",array($request->input('mainCategory'),$username));
          return redirect('/vendor/home/view/main/category');   
         }
     }
              public function add_sub_category_view() {
     if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }

            $result = DB::select("select* from main_category");
            return view('vendor.add_sub_category_view',compact('result'));        
           }
           
           
               public function add_sub_category(Request $request) {
        if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          $category = $request->input('mainCategory');
           
               $cat = $request->input('subCategory');
            $result = DB::select( DB::raw("SELECT * FROM sub_category WHERE sub_category = :value and main_category= :value2"), array(
   'value' => $cat,
   'value2' => $category,
 ));
        if(count($result)>0)
        {
             return Redirect::back()->withErrors('Subcategory already Exist');
            
        }
        else
        
  {
 $username = session()->get('username');
           $category = $request->input('mainCategory');
          
                  DB::insert("insert into sub_category (main_category,sub_category,username) values (?,?,?)",array($category,$request->input('subCategory'),$username));
                  return redirect('/vendor/home/view/sub/category'); 
                 }
               }
               
               
               
                 
                             public function main_category_list_view() {
                                 
                   $username = session()->get('username');

                    $result = DB::select("select* from main_category where username  = '$username'");
                 
                    return view('vendor.view_main_category_list',compact('result'));
          
    }
    public function sub_category_list_view() {
     if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
 $username = session()->get('username');
        $result = DB::select("select* from sub_category where username  = '$username'");
     
        return view('vendor.view_sub_category_list',compact('result'));

}

public function edit_main_category_view($sku) {
   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }


    $result = DB::select("select* from main_category where SKU = '$sku'");
 
    return view('vendor.edit_main_category',compact('result'));

}

public function edit_main_category(Request $request, $sku) {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          
                  $cat = $request->input('mainCategory');
        $result = DB::select("select* from main_category where main_category = '$cat' ");
        if(count($result)>0)
        {
             return Redirect::back()->withErrors('Category already Exist');
            
        }
        else
        
  {

    $main_category =$request->input('mainCategory');

    DB::table('main_category')->where('SKU', $sku)->update(['main_category' =>$main_category]);
    return redirect('/vendor/home/view/main/category');

}
}

public function edit_sub_category_view($sku) {
   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }

    $result = DB::select("select* from main_category");

    $result1 = DB::select("select* from sub_category where SKU = '$sku'");
 
    return view('vendor.edit_sub_category',compact('result','result1'));

}

public function edit_sub_category(Request $request, $sku) {
   if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          
                         $cat = $request->input('subCategory');
        $result = DB::select("select* from sub_category where sub_category = '$cat' ");
        if(count($result)>0)
        {
             return Redirect::back()->withErrors('Subcategory already Exist');
            
        }
        else
        
  {

    $main_category =$request->input('mainCategory');
    $sub_category =$request->input('subCategory');

    DB::table('sub_category')->where('SKU', $sku)->update(['main_category' =>$main_category,'sub_category' =>$sub_category]);
    return redirect('/vendor/home/view/sub/category');

}

}


    
    	public function verify_code($username,$code)
        {
            $result = DB::select("select* from vendor_reset_password where username= '$username' and verification_code= '$code' and TIMESTAMPDIFF(MINUTE,vendor_reset_password.created_at,NOW()) <=30 ");
            
            
            if(count($result)>0)
            {
                return view('vendor.change_password',compact('username'));
            }
            else
            return "The Verification code is expired";
        }
        
           public function reset_password_view() {
            
                 return view('vendor.password_reset');
             
             }
             
                    public function vendor_reset_password(Request $request) {


                $username = $request->input('username');
                $result = DB::select("select* from vendors where email = '$username'");
                if(count($result)>0)
                {
                    $vcode = uniqid();
                    DB::insert("insert into vendor_reset_password (username,verification_code) values('$username','$vcode') ");
                    $customer_name= $result[0]->{'fname'};
                    $data = array(
                        'customer_name' =>$customer_name,
                        'customer_username'=> $username,
                        'customer_verification_code'=> $vcode,
                        
                        
                    );
                    Mail::send('vendor_email_reset_password', $data, function ($message) use($username) {
                        
                                $message->from('info@yoc.com.pk','YOC' );
                               
                                $message->to($username)->subject('Password Reset Confirmation Link');
                        
                            });
                    return redirect()->back()->with('message', 'A Password reset link sent to your email');
                } 
                else
                {
                    return Redirect::back()->withErrors('Username not found');
                }

                

                    
                 
                 }
                 
                      public function password_change(Request $request,$username)
        {
            $password = md5($request->input('password'));
            DB::update("update vendors set password ='$password' where email='$username'");
            return redirect('/vendor/login')->with('message', 'Your Password has been changed Successfully');
        }
    public function vendor_signup_view() {
       
        return view('vendor.vendor_signup_view');
    
    }

    public function business_info_view() {
       
        return view('vendor.business_info_view');
    
    }

    public function vendor_login_view() {
        if((session()->has('username') && session()->get('type')=='vendor'))
      {
          return redirect('/vendor/home');
      }elseif((session()->has('username') && session()->get('type')=='admin'))
      {
          return redirect('/admin/home');
      }elseif((session()->has('username') && session()->get('type')=='client'))
      {
          return redirect('/');
      }
      else{
        return view('vendor.vendor_login_view');
      }
    
    }

    public function admin_home() {
        if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
      
  
            $v_id= session()->get('username');

   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and (v_order_status = '0' or v_order_status = '1')");
       $c = count($result);
          $result1 = DB::select("select * from detail_table where vendor_id = '$v_id' and v_order_status = '4'");
       $com = count($result1);
       
           $result4 = DB::select("select* from product where vendor_id = '$v_id'");
         $p = count($result4);
      
              return view('vendor.home',compact('result','c','com','p'));
             
          }


          public function add_product_view() {
            if(!(session()->has('type') && session()->get('type')=='vendor'))
              {
                  return redirect('/vendor/login');
              }
          
              $result = DB::select("select* from product_type where product_type IS NOT NULL and username = 'admin'");
              $result2 = DB::select("select* from main_category where username = 'admin'");
              $result1 = DB::select("select* from brand");
          
              $result3 = DB::select("select* from sub_category where sub_category IS NOT NULL and username = 'admin'");
            
              return view('vendor.add_product_view',compact('result','result2','result3','result1')); 
             }

             public function add_product(Request $request) {
                if(!(session()->has('type') && session()->get('type')=='vendor'))
               {
                   return redirect('/vendor/login');
               }
               
                
               
                 $q = $request->input('mytextt');
               
                                     $cat = $request->input('sku');
        $result = DB::select("select* from product where SKU = '$cat' ");
      
       $main_category = urldecode($request->input('mainCategory'));
        
      
    $a =  $request->input('subCategory');
     $sub_category = DB::select("select* from sub_category where SKU = '$a' ");
     if(count($sub_category)>0)
     {
    $sub_category = $sub_category[0]->sub_category;
     }
    else
    {
    $sub_category = "";
    }
    
     $product_type = $request->input('productType');
     
               $final_size="";
             
           
               $thumbnail = "";
               if ($request->hasFile('file')) {
                   $image = $request->file('file');
                   $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                   $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
                   $image->storeAs('public/images',$uniqueFileName);
                   $thumbnail=$uniqueFileName;
               }
               $thumbnail2 = "";
               if ($request->hasFile('images2')) {
                   $image = $request->file('images2');
                   $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                   $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
                   $image->storeAs('public/images',$uniqueFileName);
                   $thumbnail2=$uniqueFileName;
               }
           
               $thumbnail3 = "";
               if ($request->hasFile('images3')) {
                   $image = $request->file('images3');
                   $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                   $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
                  $image->storeAs('public/images',$uniqueFileName);
                  
                   $thumbnail3=$uniqueFileName;
               }
               $thumbnail4 = "";
    if ($request->hasFile('images4')) {
        $image = $request->file('images4');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
       $image->storeAs('public/images',$uniqueFileName);
       
        $thumbnail4=$uniqueFileName;
    }
               $status = 0;
               if($request->input('status'))
               {
                   $status = 1;
               }
               
               $color = $request->input('_color');
               
               $v_product_status = 1;
               $vendor_id = session()->get('username');
               $unit = $request->input('unit');

               $sku= $request->input('sku');
    
    $pname = $request->input('name');
    
               DB::insert("insert into product (SKU,name,price,color,category,sub_category,brand_name,product_type,thumbnail,thumbnail2,thumbnail3,thumbnail4,description,status,size,unit,quantity_on_hand,v_product_status,vendor_id) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($request->input('sku'),$request->input('name'),$request->input('price'),$color,$main_category,$sub_category,$request->input('brandName'),$product_type,$thumbnail,$thumbnail2,$thumbnail3,$thumbnail4,$request->input('description'),$status,$final_size,$unit,$request->input('quantity_on_hand'),$v_product_status,$vendor_id));
                $sku = $request->input('sku');
      $sku = DB::select("select* from product where SKU = '$sku' and color='$color'");
      if(count($sku)>0)
      {
      $sku = $sku[0]->pk_id;
      for($i=0; $i < count($q); $i++ )
    {
 
        DB::insert("insert into size_detail (product_id,quantity,size) values (?,?,?)",array($sku,$q[$i],$q[++$i]));

    }
   
      }
                $result = DB::select("select* from vendors where email = '$vendor_id'");
               $fname= $result[0]->fname;
               $username= $result[0]->email;
               $phone= $result[0]->phone;
               
    $data = array(
            'customer_name' =>$fname,
            'customer_username'=> $username,
            'customer_atype'=> $phone,
            
            'product_name'=> $pname,
            'sku'=> $sku,
            
            
        );
        Mail::send('vendor_add_product', $data, function ($message) use($username) {
               
           $message->from('info@yoc.com.pk', 'YOC');
           
            $message->to('info@yoc.com.pk')->subject('A new product has been added by vendor');
    
        });
               return redirect('/vendor/home/view/product')->with('message', 'Product is added and Email send to admin for verification');
              
}
              public function product_list_view() {
                if(!(session()->has('type') && session()->get('type')=='vendor'))
                  {
                      return redirect('/vendor/login');
                     
                  }
                  $v_id = session()->get('username');
                  $result = DB::select("select* from product where vendor_id= '$v_id' and (v_product_status = '1' or v_product_status = '2')");
                
                  return view('vendor.product_list_view',compact('result')); 
                 }
                 
                   public function updateProductStatus($pk_id,$status)
   {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
                  {
                      return redirect('/vendor/login');
                     
                  }
    
       DB::update("update product set status='$status' where pk_id = '$pk_id'");

       return $status;
   }


                 public function pending_product_list_view() {
                    if(!(session()->has('type') && session()->get('type')=='vendor'))
                      {
                          return redirect('/vendor/login');
                      }
                      $v_id = session()->get('username');
                      $result = DB::select("select* from product where v_product_status = '1' and vendor_id = '$v_id'");
                      return view('vendor.pending_product_list_view',compact('result')); 
                     }

                     public function approved_product_list_view() {
                        if(!(session()->has('type') && session()->get('type')=='vendor'))
                          {
                              return redirect('/vendor/login');
                          }
                          $v_id = session()->get('username');
                          $result = DB::select("select* from product where v_product_status = '2' and vendor_id = '$v_id'");
                          return view('vendor.approved_product_list_view',compact('result')); 
                         }

                         public function cancel_product_list_view() {
                            if(!(session()->has('type') && session()->get('type')=='vendor'))
                              {
                                  return redirect('/vendor/login');
                              }

                              $v_id = session()->get('username');
                              $result = DB::select("select* from product where v_product_status = '3' and vendor_id = '$v_id'");
                              return view('vendor.cancel_product_list_view',compact('result')); 
                             }
   
                             public function vendor_home() {
                                if(!(session()->has('type') && session()->get('type')=='vendor'))
                                  {
                                      return redirect('/vendor/login');
                                  }
                               
            $v_id= session()->get('username');

   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and (v_order_status = '0' or v_order_status = '1')");
       $c = count($result);
          $result1 = DB::select("select * from detail_table where vendor_id = '$v_id' and v_order_status = '4'");
       $com = count($result1);
       
           $result4 = DB::select("select* from product where vendor_id = '$v_id'");
         $p = count($result4);
      
              return view('vendor.home',compact('result','c','com','p'));
                                     
                                  }
    public function vendor_login(Request $request)
    {
       
        $this->validate($request,['username' => 'required','password'=> 'required']);
        $password= md5($request->input('password'));
        $username= $request->input('username');
 
         $result = vendor::where('email',$username)
                  ->Where('password',  $password)
                  ->get();
                 
        if(count($result)>0){
            if($result[0]->vendor_status == 0){
            $request->session()->put('username',$username);
             session()->put('fname',$result[0]->fname);
              session()->put('lname',$result[0]->lname);
              
              session()->put('id',$result[0]->id);
            $request->session()->put('type','vendor');

            
       
            $v_id= session()->get('username');

   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and (v_order_status = '0' or v_order_status = '1')");
       $c = count($result);
          $result1 = DB::select("select * from detail_table where vendor_id = '$v_id' and v_order_status = '4'");
       $com = count($result1);
       
           $result4 = DB::select("select* from product where vendor_id = '$v_id'");
         $p = count($result4);
      
              return view('vendor.home',compact('result','c','com','p'));
            }
            elseif($result[0]->vendor_status == 2){
                   return Redirect::back()->withErrors('Please wait for Admin approval');
            }
            else{
                 return Redirect::back()->withErrors('User has been blocked');
            }
        }
      
        else
        {
            return Redirect::back()->withErrors('Username or Password is incorrect');
        }
    }
    public function delete_product($id) {

        if(!(session()->has('type') && session()->get('type')=='vendor'))
        {
            return redirect('/vendor/login');
        }
    
        DB::delete("delete from product where pk_id = '$id'");
        
      
        return redirect()->back(); 
       }
    public function edit_product($pk_id, Request $request) {

        if(!(session()->has('type') && session()->get('type')=='vendor'))
        {
            return redirect('/vendor/login');
        }
        
               if($request->input('mytextt'))
    {
         $q = $request->input('mytextt');
       
           DB::delete("delete from size_detail where product_id = '$pk_id'");
    
      for($i=0; $i < count($q); $i++ )
    {
            DB::insert("insert into size_detail (product_id,quantity,size) values (?,?,?)",array($pk_id,$q[$i],$q[++$i]));

    }
  
    
    }
        
            $main_category = urldecode($request->input('mainCategory'));
        
      
    $a =  $request->input('subCategory');
    
           $sub_category = DB::select( DB::raw("SELECT * FROM sub_category WHERE sub_category = :value"), array(
   'value' => $a,
 ));
 

    if(count($sub_category)>0)
    {
         $sub_category = $sub_category[0]->sub_category;
        
    }
    else
    {
    
      $sub_category = DB::select( DB::raw("SELECT * FROM sub_category WHERE SKU = :value"), array(
   'value' => $a,
 ));
 
 if(count($sub_category)>0)
    {
    
    $sub_category = $sub_category[0]->sub_category;
    }
    else
    {
        $sub_category = "";
    }
    }
 
    
     $product_type = $request->input('productType');
        
          $result = DB::select("select * from product where pk_id = '$pk_id'"); 
          $status = 0;
        if($request->input('status'))
        {
            $status = 1;
        }
        
           $final_size="";
   
        
         $unit = $request->input('unit');
         $thumbnail = $result[0]->thumbnail;
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            $destinationPath =public_path('/storage/images');
           $image->storeAs('public/images',$uniqueFileName);
            $thumbnail=$uniqueFileName;
        }
        $thumbnail2 = $result[0]->thumbnail2;
        if ($request->hasFile('images2')) {
            $image = $request->file('images2');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            $destinationPath =public_path('/storage/images');
          $image->storeAs('public/images',$uniqueFileName);
            $thumbnail2=$uniqueFileName;
        }
    
        $thumbnail3 = $result[0]->thumbnail3;
        if ($request->hasFile('images3')) {
            $image = $request->file('images3');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            $destinationPath =public_path('/storage/images');
        $image->storeAs('public/images',$uniqueFileName);
            $thumbnail3=$uniqueFileName;
        }
        $thumbnail4 = $result[0]->thumbnail4;
        if ($request->hasFile('images4')) {
            $image = $request->file('images4');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            $destinationPath =public_path('/storage/images');
        $image->storeAs('public/images',$uniqueFileName);
            $thumbnail4=$uniqueFileName;
        }

        $v_product_status = 1;
    
       DB::table('product')->where('pk_id', $pk_id)->update(['sku' =>$request->input('sku'),'name' =>$request->input('name'),'price' =>$request->input('price'),'color' =>$request->input('_color'),'category' =>$main_category,'sub_category' =>$sub_category,'brand_name' =>$request->input('brandName'),'product_type' =>$product_type,'thumbnail' =>$thumbnail,'thumbnail2' =>$thumbnail2,'thumbnail3' =>$thumbnail3,'thumbnail4' =>$thumbnail4,'status' =>$status,'size' =>$final_size,'unit' =>$unit,'quantity_on_hand'=>$request->input('quantity_on_hand'),'v_product_status' =>$v_product_status,'description' =>$request->input('description')]);
        return redirect('/vendor/home/view/product');
    
    }

    public function active_order_detail_view($id,$o_id) {
        if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
      
      
          $result = DB::select("select * from product where pk_id = '$id'"); 
        
        //   $result1 = DB::select("select * from detail_table where order_id = '$o_id' and  product_id = '$id'");  
          
           $result1 = DB::select("select * from product,detail_table where  detail_table.order_id = '$o_id' and product_id = '$id' and detail_table.sku = product.sku"); 
  
             
          return view('vendor.active_order_detail_view',compact('result','result1'));
     
         }
         
             public function vendor_profile($id) {
        if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
      
      
          $result = DB::select("select * from vendors where id = '$id'");  
             
          return view('vendor.vendor_profile',compact('result'));
     
         }
         
         public function edit_vendor_profile($id) {
        if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
      
      
          $result = DB::select("select * from vendors where id = '$id'");  
             
          return view('vendor.edit_vendor_profile',compact('result'));
     
         }
         
         public function edit_vendors_profile(Request $request, $id) {
        if(!(session()->has('type') && session()->get('type')=='vendor'))
          {
              return redirect('/vendor/login');
          }
          
          $result = DB::select("select * from vendors where id = '$id'");  
        $email= session()->get('username');
      $fname = $request->input('fname');
      $lname = $request->input('lname');
      $store_name = $request->input('store_name');
      $phone = $request->input('phone');
      $city = $request->input('city');
      $address = $request->input('address');
      $cnic = $request->input('cnic');
      $bank_title = $request->input('bank_title');
      $bank_name = $request->input('bank_name');
      $bank_number = $request->input('bank_number');
      $bank_code = $request->input('bank_code');
      
      $zip_code = $request->input('zip_code');
      $ntn = $request->input('ntn');
      $stn = $request->input('stn');
      $dealing_person = $request->input('dealing_person');
      
      $d_p_phone = $request->input('d_p_phone');
      
$thumbnail = $result[0]->cheque_copy;
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            $destinationPath =public_path('/storage/images');
           $image->storeAs('public/images',$uniqueFileName);
            $thumbnail=$uniqueFileName;
        }
        $status="2";
        DB::table('vendors')
            ->where('id', $id)->update(['fname' => $fname, 'lname' => $lname, 'store_name' => $store_name, 'phone' => $phone, 'city' => $city, 'address' => $address,'cnic' => $cnic,'bank_title' => $bank_title,'bank_name' => $bank_name,'account_number' => $bank_number, 'bank_code' => $bank_code, 'zip_code' => $zip_code,'cheque_copy' => $thumbnail, 'NTN' => $ntn,'STN' => $stn,'dealing_person' => $dealing_person,'d_p_phone' => $d_p_phone,'vendor_status' => $status]);


 $data = array(
            'customer_name' =>$fname,
            'customer_username'=> $email,
            'customer_atype'=> $phone,
            
            
        );
        Mail::send('confirm_user', $data, function ($message) use($email) {
               
            $message->from('info@fashionfactory.world','FASHION FACTORY' );
           
            $message->to('info@fashionfactory.world')->subject('A new Vendor has been signup');
    
        });
                  session()->flush();
                return redirect('/vendor/login')->with('message', 'Email send to admin for verification');
            }

         public function complete_order_detail_view($id,$o_id) {
            if(!(session()->has('type') && session()->get('type')=='vendor'))
              {
                  return redirect('/vendor/login');
              }
          
          
              $result = DB::select("select * from product where pk_id = '$id'"); 
            
              $result1 = DB::select("select * from detail_table where order_id = '$o_id' and  product_id = '$id'");  
                 
              return view('vendor.complete_order_detail_view',compact('result','result1'));
         
             }
             public function logout()
             {
                 session()->flush();
                 return redirect('/vendor/login');
             }

             public function cancel_order_detail_view($id,$o_id) {
                if(!(session()->has('type') && session()->get('type')=='vendor'))
                  {
                      return redirect('/vendor/login');
                  }
              
              
                  $result = DB::select("select * from product where pk_id = '$id'"); 
                
                  $result1 = DB::select("select * from detail_table where order_id = '$o_id' and  product_id = '$id'");  
                     
                  return view('vendor.cancel_order_detail_view',compact('result','result1'));
             
                 }
                 public function return_order_detail_view($id,$o_id) {
                    if(!(session()->has('type') && session()->get('type')=='vendor'))
                      {
                          return redirect('/vendor/login');
                      }
                  
                  
                      $result = DB::select("select * from product where pk_id = '$id'"); 
                    
                      $result1 = DB::select("select * from detail_table where order_id = '$o_id' and  product_id = '$id'");  
                         
                      return view('vendor.return_order_detail_view',compact('result','result1'));
                 
                     }

         public function edit_product_view($pk_id) {
            if(!(session()->has('type') && session()->get('type')=='vendor'))
           {
               return redirect('/admin');
           }
       
           $result = DB::select("select* from product where pk_id = '$pk_id'");
         
           $result1 = DB::select("select* from main_category where username = 'admin'");
           
               $main = $result[0]->category;
      $sub = $result[0]->sub_category;
      $username = "admin";
      
                  $result2 = DB::select( DB::raw("SELECT * FROM sub_category WHERE main_category = :value and username= :value2"), array(
   'value' => $main,
    'value2' => $username,
 ));
 
          $result3 = DB::select( DB::raw("SELECT * FROM product_type WHERE main_category= :value and sub_category= :value2 and username= :value3 "), array(
   'value' => $main,
   'value2' => $sub,
   'value3' => $username,
 ));
   
    // $result2 = DB::select("select* from sub_category where main_category = '$main' and  username = 'admin'");

    // $result3 = DB::select("select* from product_type  where main_category = '$main' and sub_category = '$sub' and  username = 'admin'");
    

              $result4 = DB::select("select* from brand");
        
           return view('vendor.edit_product',compact('result','result1','result2','result3','result4'));
       
       }


public function product_detail_view($pk_id) {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
    {
        return redirect('/vendor/login');
    }
    $result = DB::select("select* from product where pk_id='$pk_id'");
 
    return view('vendor.view_product',compact('result'));

}

    public function create_vendor(Request $request)
    {
        $v = new vendor;

        $e = $request->input('email');
        $result = DB::select("select * from vendors where email = '$e' ");
if(count($result)>0){

    return Redirect::back()->withErrors('Email already exist');
}
else{
      if($request->input('password')== $request->input('confirm_password'))
{
                $v->fname = $request->input('fname');
                $fname = $request->input('fname');
                $v->lname = $request->input('lname');
                $v->store_name = $request->input('store_name');
                $v->phone = $request->input('phone');
                $phone = $request->input('phone');
                $v->city = $request->input('city');
                $v->email = $request->input('email');
                $email = $request->input('email');
                $v->password = md5($request->input('password'));
            
                $v->address = $request->input('address');
                $v->cnic = $request->input('cnic');
            
                $v->bank_title = $request->input('bank_title');
                $v->bank_name = $request->input('bank_name');
            
                $v->account_number = $request->input('bank_number');
                $v->bank_code = $request->input('bank_code');
                    $v->zip_code = $request->input('zip_code');
                    $v->NTN = $request->input('ntn');
                    $v->STN = $request->input('stn');
                    $v->dealing_person = $request->input('dealing_person');
                    $v->d_p_phone = $request->input('d_p_phone');
            
                $thumbnail = "";
                if ($request->hasFile('file')) {
                    $image = $request->file('file');
                    $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                    $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
                    $image->storeAs('public/images',$uniqueFileName);
                    $thumbnail=$uniqueFileName;
                }
             
                $v->cheque_copy = $thumbnail;
                  $v->vendor_status = 2;
                $v->save();
                
                $data = array(
            'customer_name' =>$fname,
            'customer_username'=> $email,
            'customer_atype'=> $phone,
            
            
        );
        Mail::send('confirm_user', $data, function ($message) use($email) {
               
           $message->from('info@yoc.com.pk', 'YOC');
           
            $message->to('info@yoc.com.pk')->subject('A new Vendor has been signup');
    
        });
                return redirect('/vendor/login')->with('message', 'Email send to admin for verification');
            }
                   
else{

    return Redirect::back()->withErrors('Password Does Not Match');
}
}

}


public function active_order_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
      {
          return redirect('/vendor/login');
      }
  
  
   //$result = DB::select("select order_table.pk_id,order_table.fname,order_table.lname,address_table.fname,address_table.lname,order_table.amount,order_table.placed_at from order_table,address_table where order_table.shipment_address_id=address_table.pk_id or order_table.status = '0'");
  
  $v_id= session()->get('username');

   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and (v_order_status = '0' or v_order_status = '1')"); 
  
  
   return view('vendor.active_order_view',compact('result'));
  
  }

  public function cancel_order_list_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
      {
          return redirect('/vendor/login');
      }
  
  
   //$result = DB::select("select order_table.pk_id,order_table.fname,order_table.lname,address_table.fname,address_table.lname,order_table.amount,order_table.placed_at from order_table,address_table where order_table.shipment_address_id=address_table.pk_id or order_table.status = '0'");
  
  $v_id= session()->get('username');
 
   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and v_order_status = '2'"); 
  
  
   return view('vendor.canceled_order_list_view',compact('result'));
  
  }

  public function return_order_list_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
      {
          return redirect('/vendor/login');
      }
  
  
   //$result = DB::select("select order_table.pk_id,order_table.fname,order_table.lname,address_table.fname,address_table.lname,order_table.amount,order_table.placed_at from order_table,address_table where order_table.shipment_address_id=address_table.pk_id or order_table.status = '0'");
  
  $v_id= session()->get('username');
 
   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and v_order_status = '3'"); 
  
  
   return view('vendor.return_order_list_view',compact('result'));
  
  }

  public function complete_order_list_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
      {
          return redirect('/vendor/login');
      }
  
  
   //$result = DB::select("select order_table.pk_id,order_table.fname,order_table.lname,address_table.fname,address_table.lname,order_table.amount,order_table.placed_at from order_table,address_table where order_table.shipment_address_id=address_table.pk_id or order_table.status = '0'");
  
  $v_id= session()->get('username');
 
   $result = DB::select("select * from detail_table where vendor_id = '$v_id' and v_order_status = '4' "); 
  
  
   return view('vendor.complete_order_list_view',compact('result'));
  
  }
  public function update_order_status(Request $request)
  {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
   {
       return redirect('/vendor/login');
   }
   $id = $request->input('id');
   
   
     DB::table('detail_table')->where('pk_id', $request->input('id'))->update(['v_order_status' =>$request->input('status')]);
     
     
        $v_id= session()->get('username');
     $sum = 0;
     $status = 0;
     $s = 0;
     
       $total = 0;
      
      
      
       $order_result = DB::select("select* from detail_table where vendor_id ='$v_id' and v_order_status = '1' and pk_id = '$id' and v_payment_status = '0'");
 
       
       if(count($order_result)>0)
      {
          foreach($order_result as $results)
          {
          $pay_result = DB::select("select* from vendor_payments where vendor_id ='$v_id'");
         
         
            if(count($pay_result)>0)
      {
          
          $sum = $pay_result[0]->payment;
        
            if($results->discount_price == "")
                $sum =  $sum + ($results->quantity * $results->price);
            else
               $sum =  $sum + ($results->quantity * $results->discount_price);
           
                    $result_total = DB::select("select* from detail_table where vendor_id ='$v_id' and (v_order_status = '4' or v_order_status = '1')");  
                
                    
                                  if(count($result_total)>0)
                                     {
                                       foreach($result_total as $results)
                                            {
                                                  if($results->discount_price == "")
                                                       $total = $total + ($results->quantity * $results->price);
                                                  else
                                                        $total =  $total + ($results->quantity * $results->discount_price);
                                            }
                                     }
                                     
                                     
                                   
                                     
                           DB::table('vendor_payments')->where('vendor_id', $v_id)->update(['payment' =>$sum ,'status' =>$s,'total_earned' =>$total]);
              
          
      }
      
      else
      {
          
          
            if($results->discount_price == "")
                $sum =  $sum + ($results->quantity * $results->price);
            else
               $sum =  $sum + ($results->quantity * $results->discount_price);
             
                    $result_total = DB::select("select* from detail_table where vendor_id ='$v_id' and (v_order_status = '4' or v_order_status = '1')");  
                
                    
                                  if(count($result_total)>0)
                                     {
                                       foreach($result_total as $results)
                                            {
                                                  if($results->discount_price == "")
                                                  {
                                                       $total = $total + ($results->quantity * $results->price);
                                                       $commision = ($total * 10)/100;
                                                  }
                                                  else
                                                        $total =  $total + ($results->quantity * $results->discount_price);
                                                         $commision = ($total * 10)/100;
                                            }
                                     }
                                     
                                     
                                    
                                     
                                     
      
              DB::insert("insert into vendor_payments (vendor_id,payment,total_earned,commision,status) values (?,?,?,?)",array($v_id,$sum,$total,$commision,$status));
              
          
      }
    
          }
          
         
      }
      
          DB::update("update detail_table set v_payment_status ='1' where vendor_id ='$v_id' and pk_id ='$id' and v_order_status = '1' ");
      
          
           
       return URL('/')."/vendor/home/view/active/orders";
  }
  
  
  public function v_test()
  {
        $v_id= "vendor@gmail.com";
      $id = 192;
     $sum = 0;
     $status = 0;
     $s = 0;
     
       $total = 0;
      
      
     $order_result = DB::select("select* from detail_table where vendor_id ='$v_id' and v_order_status = '1' and order_id = '$id' and v_payment_status = '0'");
 
       
       if(count($order_result)>0)
      {
          foreach($order_result as $results)
          {
          $pay_result = DB::select("select* from vendor_payments where vendor_id ='$v_id'");
         
         
            if(count($pay_result)>0)
      {
          
          
        
            if($results->discount_price == "")
                $sum =  $sum + ($results->quantity * $results->price);
            else
               $sum =  $sum + ($results->quantity * $results->discount_price);
           
                    $result_total = DB::select("select* from detail_table where vendor_id ='$v_id' and (v_order_status = '4' or v_order_status = '1')");  
                
                    
                                  if(count($result_total)>0)
                                     {
                                       foreach($result_total as $results)
                                            {
                                                  if($results->discount_price == "")
                                                       $total = $total + ($results->quantity * $results->price);
                                                  else
                                                        $total =  $total + ($results->quantity * $results->discount_price);
                                            }
                                     }
                                     
                                     
                                   
                                     
                           DB::table('vendor_payments')->where('vendor_id', $v_id)->update(['payment' =>$sum ,'status' =>$s,'total_earned' =>$total]);
              
            return "true"; 
      }
      
      else
      {
          
          
            if($results->discount_price == "")
                $sum =  $sum + ($results->quantity * $results->price);
            else
               $sum =  $sum + ($results->quantity * $results->discount_price);
             
                    $result_total = DB::select("select* from detail_table where vendor_id ='$v_id' and (v_order_status = '4' or v_order_status = '1')");  
                
                    
                                  if(count($result_total)>0)
                                     {
                                       foreach($result_total as $results)
                                            {
                                                  if($results->discount_price == "")
                                                       $total = $total + ($results->quantity * $results->price);
                                                  else
                                                        $total =  $total + ($results->quantity * $results->discount_price);
                                            }
                                     }
                                     
                                     
                                    
                                     
                                     
      
              DB::insert("insert into vendor_payments (vendor_id,payment,total_earned,status) values (?,?,?,?)",array($v_id,$sum,$total,$status));
              
          
      }
    
          }
          
         
      }
      
        //  DB::update("update detail_table set v_payment_status ='1' where vendor_id ='$v_id' and order_id ='$id' and v_order_status = '1' ");
      
      return "done";
  }
  public function reporting_by_product_list_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
    {
        return redirect('/vendor/login');
    }

      
  $v_id= session()->get('username');
 

    $result = DB::select("select* from product where vendor_id = '$v_id' and v_product_status = '2'");


    return view('vendor.product_reporting_view',compact('result'));
   
}

public function earning_view() {
    if(!(session()->has('type') && session()->get('type')=='vendor'))
    {
        return redirect('/vendor/login');
    }

      
  $v_id= session()->get('username');
 

    $result = DB::select("select* from vendor_payments where vendor_id = '$v_id' and status = '0'");

  return $result[0]->total_earned;

    return view('vendor.earning_view',compact('result'));
   
}

public function reporting_by_product($sku) {

    if(!(session()->has('type') && session()->get('type')=='vendor'))
    {
        return redirect('/vendor/login');
    }
    $total = 0 ;
    $result = DB::select("select* from detail_table where product_id = '$sku' and v_order_status = '4'");
 foreach($result as $results)
 {
     if($results->discount_price == 0)
     $total = $total + $results->price; 
     else
    $total = $results->discount_price;
 }
   
    return view('vendor.product_reporting_detail_view',compact('result','total'));
}
public function reporting_by_sale_list_view() {

    if(!(session()->has('type') && session()->get('type')=='vendor'))
    {
        return redirect('/vendor/login');
    }
$total = 0;
         
  $v_id= session()->get('username');
 
    $result = DB::select("select* from detail_table where vendor_id ='$v_id' and v_order_status = '4'");


    foreach( $result as  $results)
    {
        if($results->discount_price == "")
        $total = $total + $results->price;
        else
          $total = $total + $results->discount_price;
    }
    return view('vendor.reporting_by_sale_list_view',compact('result','total')); 
   }
}