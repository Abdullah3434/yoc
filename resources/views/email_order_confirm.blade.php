<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>YOC</title>
</head>

<body>
<div id="mailsub" class="notification" align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;">
    <tr>
      <td align="center" bgcolor="#eff3f8"><table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
          <tr>
            <td><!-- padding -->
              
              <div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td>
          </tr>
          <!--header -->
          <tr>
            <td align="center" bgcolor="#ffffff"><!-- padding -->
              
              <div style="height: 30px; line-height: 30px; font-size: 10px;"></div>
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left"><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;">
                      <table class="mob_center" width="170" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
                        <tr>
                          <td align="left" valign="middle"><!-- padding -->
                            
                            <div style="font-size: 10px;"></div>
                            <table width="170" border="0" cellspacing="0" cellpadding="0" >
                              <tr>
                                <td align="left" valign="top" class="mob_center"><a href="https://yoc.com.pk/" target="_blank"> <img src="{{url('/')}}/pic/logo.png" alt="YOC"/></a></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table>
                    </div></td>
                </tr>
              </table>
              
              <!-- padding -->
              
              <div style="height: 50px; line-height: 50px; font-size: 10px;"></div></td>
          </tr>
          <!--header END--> 
          
          <!--content 1 -->
          <tr>
            <td align="center" bgcolor="#fbfcfd"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center"><!-- padding -->
                    
                    <div style="height: 60px; line-height: 60px; font-size: 10px;"></div>
                    <div style="line-height: 44px;"> <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e" style="font-size: 34px;"> <span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;"> Order Confirm </span></font> </div>
                    
                    <!-- padding -->
                    
                    <div style="height: 40px; line-height: 40px; font-size: 10px;"></div></td>
                </tr>
                <tr>
                  <td><div style="line-height: 24px;"> <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;"> <b>Dear {{$customer_fname}} {{$customer_lname}},</b><br>
                      <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> Your order has been confirmed by YOC on {{$date}}.Your tracking Id is {{$order_id}}. Thankyou shopping for us. <br>
                      Here are the details of your Order: </span></font> </div>
                    
                    <!-- padding -->
                    
                    <div style="height: 40px; line-height: 40px; font-size: 10px;"></div></td>
                </tr>
                <tr>
                  <td><div style=" width:40%; height:auto; float:left font-family: Arial, Helvetica, sans-serif; font-size: 15px;">
                      <p itemprop="email"><b>Email</b></p>
                      <p itemprop="email"><b>Address</b></p>
                      <p itemprop="email"><b>City</b></p>
                      <p itemprop="email"><b>Phone no</b></p>
                      <p itemprop="email"><b>ZIP Code</b></p>
                    </div></td>
                  <td><div style=" width:60%; height:auto; float:left font-family: Arial, Helvetica, sans-serif; font-size: 15px;">
                      <p>{{$customer_email}}</p>
                      <p>{{$customer_address}}</p>
                      <p>{{$customer_city}}</p>
                      <p>{{$customer_phone}}</p>
                      <p>{{$customer_region}}</p>
                    </div></td>
                </tr>
                @if(Session::has('cart'))
                <table style="width:100%;">
                  <tr style="border:1px solid black">
                    <th style="border:1px solid black">Product</th>
                    <th style="border:1px solid black">Name</th>
                    <th style="border:1px solid black">Size</th>
                    <th style="border:1px solid black">Quantity</th>
                    <th style="border:1px solid black">Unit Price</th>
                    <th style="border:1px solid black">Item Total</th>
                  </tr>
                  @php
                  $cart = Session::get('cart');
                  
                  $products = $cart->items;
                  @endphp
                  @foreach($products as $product)
                  <tr style="border:1px solid black">
                    <td style="border:1px solid black"><img class="media-object" src="{{URL('/')}}/storage/images/{{$product['item']->thumbnail}}" style="width: 100px; height: auto;"></td>
                    <td style="border:1px solid black"><strong>{{$product['item']->name}}</strong></td>
                    <td style="border:1px solid black"><strong>{{$product['size']}}</strong></td>
                    <td style="border:1px solid black"><strong>{{$product['qty']}}</strong></td>
                    <td style="border:1px solid black"><strong>PKR {{number_format($product['item']->price)}} 
                      @if($product['save']>0) saving -{{$product['save']}}@endif</strong></td>
                    <td style="border:1px solid black"><strong>
                        @if(Session::has('promoPrice') )
                        PKR {{number_format(Session::get('promoPrice'))}}
                        @elseif(Session::has('pro') >0)
                        PKR {{number_format(Session::get('pro'))}} 
                        @else
                        PKR {{number_format($product['price'])}}
                        @endif</strong></td>
                  </tr>
                  @endforeach
                </table>
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6" style="float:right;">
                    <table class="table table-bordered">
                      <tr>
                        <td><h4>Subtotal</h4></td>
                        <td class="text-right"><h4><strong>PKR {{number_format($total_price)}}</strong></h4></td>
                      </tr>
                      <tr>
                        <td><h4>Net Total</h4></td>
                        <td class="text-right"><h4><strong>
                             @if(Session::has('promoPrice') )
                        PKR {{number_format(Session::get('promoPrice'))}}
                        @elseif(Session::has('pro') >0)
                        PKR {{number_format(Session::get('pro'))}} 
                        @else
                         PKR {{number_format($total_price)}}
                        @endif
                           </strong></h4></td>
                      </tr>
                      <tr> </tr>
                    </table>
                  </div>
                </div>
                @endif
                <tr>
                  <td ><div style="line-height: 24px;"> <font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167"> <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> YOC<br>
                      0323-3222243<br>
                      </span></font> </div>
                    
                    <!-- padding -->
                    
                    <div style="height: 60px; line-height: 60px; font-size: 10px;"></div></td>
                </tr>
              </table></td>
          </tr>
          <!--content 1 END--> 
          <!--footer -->
          <tr>
            <td class="iage_footer" align="center" bgcolor="#ffffff" style="padding-top:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center"><font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;"> <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;"> 2019-2020 © YOC. ALL Rights Reserved. </span></font></td>
                </tr>
              </table></td>
          </tr>
          <!--footer END-->
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>
