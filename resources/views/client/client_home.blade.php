<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>YOC | Comfort is just a click away</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="shortcut icon" href="{{URL('/')}}/pic/logo.png"/>
<link href="{{URL('/')}}/css1/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{URL('/')}}/css1/main.css" rel="stylesheet" type="text/css"/>
<link href="{{URL('/')}}/css1/util.css" rel="stylesheet" type="text/css"/>
<link href="{{URL('/')}}/css1/slippry.css" rel="stylesheet" type="text/css"/>
<link href="{{URL('/')}}/css1/style.css" rel="stylesheet" type="text/css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{URL('/')}}/css1/font-awesome.min.css" />
<!-- Slick -->
<link href="{{URL('/')}}/css1/slick.css" type="text/css" rel="stylesheet" />
<link href="{{URL('/')}}/css1/slick-theme.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="{{URL('/')}}/css1/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '220127215705041');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=220127215705041&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  
  

<script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '2925980637a4c9cac94bda9df98cb723e3247473');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172146215-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172146215-1');
</script>

<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "product",
  "brand": "YOC",
  "name": "Your Own Collection",
  "image": "https://yoc.com.pk/pic/logo.png",
  "description": "High Quality Brands at Extremely Low Prices.",
  "aggregateRating": {
    "@type": "aggregateRating",
    "ratingValue": "5/5",
    "reviewCount": "28"
  }
}
 </script>
</head>
<body>
    
    
    
  
    
<!---start-header---->
<div class="header">
  <div class="top-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <ul class="social_links">
            <li><a href="https://www.facebook.com/yourowncollection1" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/yourowncollection1/" target="_blank" ><i class="fa fa-instagram"></i></a></li>
            <li><a class="mobilesOnly"  href="tel:+923233222243"><i class="fa fa-phone"></i> +923233222243</a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="top-header-center">FREE Shipping All Over Pakistan</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <li><a style="margin-left:10px;color:white;float:right;margin-top:10px;">
            <div id="google_translate_element"></div>
            </a> </li>
          @if(Session::has('username')) 
          
          <li class="hidden-md hidden-lg"><a href="{{URL('/')}}/order/tracking/view"  style="color:white;float:left;margin-top:10px;">Order Tracking</a></li>
          @else
          <li><a class="color8" href="{{URL('/')}}/guest/order/tracking/view" style="color:white;float:left;margin-top:10px;"><i class="fa fa-shopping-cart"></i> Order Tracking</a> </li>
          @endif </div>
      </div>
    </div>
  </div>
  <!----start-mid-head---->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2">
        <div class="mid-grid-left"> <a href="{{url('/')}}/"> <img src="{{url('/')}}/pic/logo.png" alt="logo"> </a> </div>
      </div>
      <div class="col-lg-10">
        <div class="header-bottom"> 
          <!-- start header menu -->
          <div class="col-lg-7">
            <div class="header-search-area">
              <form role="form" action="{{url('/')}}/search" method="post" id="payment-form">
                {{ csrf_field() }}
                <div class="form-input">
                  <input name="search" id="search" placeholder="Search..." type="text" required>
                  <button type="submit" class="header-search-btn"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="top-header-right">
              <ul>
                @if(Session::has('username'))
                <li class="dropdown dropdown-btn"> <a class="dropdown-toggle" data-toggle="dropdown">{{session::get('name')}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{URL('/')}}/see/cancel/balances">Your Vault</a></li>
                    <li><a href="{{URL('/')}}/client/logout">logout</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-btn"> <a class="dropdown-toggle" data-toggle="dropdown">Wishlist<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{URL('/')}}/view/wishlist"> View Wishlist</a></li>
                  </ul>
                </li>
                <li class="hidden-sm hidden-xs"><a href="{{URL('/')}}/order/tracking/view">Order Tracking</a></li>
                <li>
                    <a class="cart" href="{{URL('/')}}/cart/items"><span><i class="fa fa-shopping-cart"></i></span>
                    <div class="badge"> {{Session::has('cart') ? Session::get('cart')->abc: '0'}}</div>
                    </a>
                </li>
                @else
                <li><a href="{{URL('/')}}/client/login" style="margin-left:10px;">Log in</a></li>
                <li><a href="{{URL('/')}}/client/signup" style="margin-left:10px;">Signup</a></li>
                <li><a href="{{URL('/')}}/search/wishlist" style="margin-left:10px;">Wishlist</a></li>
                <li>
                    <a class="cart" href="{{URL('/')}}/cart/items"><span><i class="fa fa-shopping-cart"></i></span>
                    <div class="badge"> {{Session::has('cart') ? Session::get('cart')->abc: '0'}}</div>
                    </a>
                </li>
                @endif
              </ul>
            </div>
            <div class="clear"> </div>
          </div>
          <div class="clear"> </div>
          <ul class="megamenu skyblue hidden-md hidden-lg" >
            <li class="grid"><a class="color2" href="{{URL('/')}}/">Home</a> </li>
            <li class="grid"><a class="color2" href="{{URL('/')}}/shop">Shop</a> </li>
            @php
            
            $main_category = DB::select( DB::raw("SELECT DISTINCT category from product WHERE status = :value and (v_product_status = :value2 or v_product_status = :value3)"), array(
            'value' => '1',
            'value2' => '0',
            'value3' => '2',
            ));
            
            @endphp
            @if(count($main_category)>0)
            @foreach($main_category as $results)

            
            <li class="grid"><a class="color2">{{$results->category}}</a>
              <div class="megapanel">
                <div class="row">
                  <div class="col1">
                    <div class="h_nav">
                      <h4> <a>Sub Categories</a></h4>
                      @php
                      $sub_category = $results->category;
                      
                      $sub = DB::select( DB::raw("SELECT DISTINCT sub_category from product WHERE category = :value and status = :value4 and (v_product_status = :value2 or v_product_status = :value3)"), array(
                  'value' => $sub_category,
                  'value4' => '1',
                  'value2' => '0',
                  'value3' => '2',
                  ));
                      @endphp
                      
                      
                      @if(count($sub)>0)
                      <ul>
                        @foreach($sub as $results)
                        <li><a href="{{URL('/')}}/product/{{$sub_category}}/{{$results->sub_category}}">{{$results->sub_category}}</a></li>
                        @endforeach
                      </ul>
                      @endif </div>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- NAVIGATION -->
<div class="clearfix"></div>
<div id="navigation"> 
  <!-- container -->
  <div class="container-fluid">
    <div id="responsive-nav"> 
      <!-- category nav -->
      <div class="category-nav"> <span class="category-header">Categories <i class="fa fa-list"></i></span>
        <ul class="category-list">
          @php
          $main_category = DB::select( DB::raw("SELECT DISTINCT category from product WHERE status = :value and (v_product_status = :value2 or v_product_status = :value3)"), array(
          'value' => '1',
          'value2' => '0',
          'value3' => '2',
          ));
          
          @endphp
          @if(count($main_category)>0)
          @foreach($main_category as $results)
          <li class="dropdown side-dropdown"> <a href="{{URL('/')}}/{{$results->category}}" class="dropdown-toggle">{{$results->category}}<i class="fa fa-angle-right"></i></a>
            <div class="custom-menu">
              <div class="row">
                <div class="col-md-4"> @php
                  $sub_category = $results->category;
                  
                  $sub = DB::select( DB::raw("SELECT DISTINCT sub_category from product WHERE category = :value and status = :value4 and (v_product_status = :value2 or v_product_status = :value3)"), array(
                  'value' => $sub_category,
                  'value4' => '1',
                  'value2' => '0',
                  'value3' => '2',
                  ));
                  @endphp
                  @if(count($sub)>0)
                  <ul class="list-links">
                    <li>
                      <h3 class="list-links-title">Sub Categories</h3>
                    </li>
                    @foreach($sub as $results)
                    <li><a href="{{URL('/')}}/product/{{$sub_category}}/{{$results->sub_category}}">{{$results->sub_category}}</a></li>
                    @endforeach
                  </ul>
                  @endif </div>
              </div>
            </div>
          </li>
          @endforeach
          @endif
        </ul>
      </div>
      <!-- /category nav --> 
      
      <!-- menu nav -->
      <div class="menu-nav"> <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
        <ul class="menu-list">
          <li><a href="{{URL('/')}}/shop">YOUR OWN COLLECTION</a></li>
        </ul>
      </div>
      <!-- menu nav --> 
    </div>
  </div>
  <!-- /container --> 
</div>
<div class="clearfix"></div>
<!-- /NAVIGATION --> 

<!-- HOME -->
<div id="home" class="hidden-sm hidden-xs"> 
  <!-- container -->
  <div class="container-fluid"> 
    <!-- home wrap -->
    <div class="home-wrap"> 
      <!-- home slick -->
      <div id="home-slick"> 
        <!-- banner --> 
        <a href="{{URL('/')}}/shop">
        <div class="banner banner-1"> <img src="{{url('/')}}/pic/banner2.jpg" alt="Polo"> </div>
        </a> 
        <!-- /banner --> 
        <!-- banner --> 
        <a href="{{URL('/')}}/shop">
        <div class="banner banner-1"> <img src="{{url('/')}}/pic/banner3.jpg" alt="shop"> </div>
        </a> 
        <!-- /banner --> 
        
        <!-- banner --> 
        <a href="{{URL('/')}}/shop">
        <div class="banner banner-1"> <img src="{{url('/')}}/pic/banner1.jpg" alt="babies"> </div>
        </a> </div>
      <!-- /home slick --> 
    </div>
    <!-- /home wrap --> 
  </div>
  <!-- /container --> 
</div>
<div class="clearfix"></div>
<!-- /HOME -->

<div class="container">

  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h2>BABIES & TOYS</h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3"> <a  href="{{URL('/')}}/shop" >
      <div class="banner banner-2"> <img src="{{URL('/')}}/pic/banner14.jpg" alt="">
        <div class="banner-caption">
          <h2 class="white-color">NOW<br>
            OPEN</h2>
          <button type="button" class="btn primary-btn add-to-cart">Our Shop</button>
        </div>
      </div>
      </a> </div>
    <div class="col-lg-9"> @if(count($result)>0)
      @foreach($result as $results)
      <div class="col-md-4 col-sm-6">
        <div class="product-grid">
          <div class="product-image"> <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"> <img class="pic-1" src="{{URL('/')}}/storage/images/{{$results->thumbnail}}"> <img class="pic-2" src="{{URL('/')}}/storage/images/{{$results->thumbnail2}}"> </a> </div>
          <div class="product-content">
            <h3 class="title"><a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">{{$results->name}}</a></h3>
            <div class="price" style="float:none;">PKR {{number_format($results->price)}} </div>
            <a class="add-to-cart" href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"> Add To Cart</a>
            <div>
  <form method="post" action="{{URL('/')}}/product/add/wishlist/{{$results->pk_id}}">{{ csrf_field() }}<button class="btn" type="submit" data-tip="Add to Wishlist"><i class="heart fa fa-heart-o"></i></button></form>
</div>
            </div>
        </div>
      </div>
      @endforeach
      @endif </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <a href="{{URL('/')}}/shop">
      <div class="images"> <img src="{{URL('/')}}/pic/new_collection.jpg" alt="img"> </div>
      </a> </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <a href="https://yoc.com.pk/product/Men's%20Fashion/Polo">
      <div class="images"> <img src="{{URL('/')}}/pic/summer_collection.jpg" alt="img"> </div>
      </a> </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h2>MEN'S FASHION</h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-9">
      <div class="row"> @if(count($result1)>0)
        @foreach($result1 as $results)
        <div class="col-md-4 col-sm-6">
          <div class="product-grid">
            <div class="product-image"> <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"> <img class="pic-1" src="{{URL('/')}}/storage/images/{{$results->thumbnail}}"> <img class="pic-2" src="{{URL('/')}}/storage/images/{{$results->thumbnail2}}"> </a> </div>
            <div class="product-content">
              <h3 class="title"><a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">{{$results->name}}</a></h3>
              <div class="price" style="float:none;">PKR {{number_format($results->price)}} </div>
              <a class="add-to-cart" href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"> Add To Cart</a> 
              <div>
  <form method="post" action="{{URL('/')}}/product/add/wishlist/{{$results->pk_id}}">{{ csrf_field() }}<button class="btn" type="submit" data-tip="Add to Wishlist"><i class="heart fa fa-heart-o"></i></button></form>
</div>
              </div>
          </div>
        </div>
        @endforeach
        @endif </div>
    </div>
    <div class="col-lg-3"> <a href="{{URL('/')}}/shop">
      <div class="banner banner-2"> <img src="{{URL('/')}}/pic/banner15.jpg" alt="">
        <div class="banner-caption">
          <h2 class="white-color">BAGS<br>
            COLLECTION</h2>
          <button type="button" class="btn primary-btn add-to-cart">Our Shop</button>
        </div>
      </div>
      </a> </div>
    <div class="col-lg-12"> <a href="https://yoc.com.pk/product/Babies%20&%20Toys/Clothing%20&%20Accessories">
      <div class="images"> <img src="{{URL('/')}}/pic/fashion_banner.jpg" alt="img"> </div>
      </a> </div>
  </div>
  <div class="blue_color">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats border_lefts">
          <div class="icon hidden-sm hidden-xs"><i class="fa fa-phone"></i></div>
          <div class="count">9:AM-6:PM</div>
          <h3>Online Support</h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon hidden-sm hidden-xs"><i class="fa fa-dollar"></i></div>
          <div class="count">7 Days Return</div>
          <h3>Money back Gurantee</h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats" style="border-right:none;">
          <div class="icon hidden-sm hidden-xs"><i class="fa fa-plane"></i></div>
          <div class="count">Free Shipping</div>
          <h3>On PKR 2000 or above</h3>
        </div>
      </div>
    </div>
  </div>
  

  
  
</div>




<div class="clearfix"></div>
<div class="footer1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4"><!-- widgets column left -->
        
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
            <h1 class="title-widget">MY ACCOUNT</h1>
            <ul>
              <li><a  href="{{url('/')}}/client/signup">Create Account</a></li>
              <li><a  href="{{url('/')}}/accounts">Accounts</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- widgets column left end -->
      <div class="col-lg-4 col-md-4"><!-- widgets column left -->
        
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
            <h1 class="title-widget">MAKE MONEY WITH US</h1>
            <ul>
              <li><a  href="{{url('/')}}/vendor/signup">Become a Vendor</a></li>
              <li><a  href="{{url('/')}}/vendor/login">Vendor Login</a></li>
              <li><a  href="{{url('/')}}/vendor/policy">Vendor Policy</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- widgets column left end -->
      
      <div class="col-lg-4 col-md-4"><!-- widgets column left -->
        
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
            <h1 class="title-widget">CUSTOMER SERVICES</h1>
            <ul>
              <li><a  href="{{url('/')}}/about/us">About Us</a></li>
              <li><a href="{{url('/')}}/our/faq"> FAQ</a></li>
              <li><a href="{{url('/')}}/returns/and/refunds"> Returns & Refunds</a></li>
              <li><a href="{{url('/')}}/terms/and/conditions">Terms and Conditions</a></li>
              <li><a href="{{url('/')}}/search/wishlist"> Wish List</a></li>
              <li><a href="{{url('/')}}/payment/policy"> Payment Policy</a></li>
              <li><a href="{{url('/')}}/privacy/policy"> Privacy Policy</a></li>
              <li><a href="{{url('/')}}/contact/us"> Contact Us</a></li>
              <li><a target="_blank" href="https://www.youtube.com/watch?v=uWUAe0GsVXk">Tutorial Video</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- widgets column left end --> 
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="footer-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="design">Copyright © 2020 YOC. All rights reserved. <br>
          <p>Powered By : <a href="https://greengrapez.com/" target="_blank"><img src="{{url('/')}}/pic/greengrapez.png" alt="Green Grapez"></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<!---//End-container----> 

<script src="{{URL('/')}}/js1/jquery.min.js"></script> 
<script src="{{URL('/')}}/js1/bootstrap.min.js"></script> 
<script src="{{url('/')}}/js1/jquery.zoom.min.js"></script> 
<script src="{{url('/')}}/js1/main.js"></script> 
<script src="{{URL('/')}}/js/magiczoomplus.js"></script> 
<script src="{{URL('/')}}/js1/jquery-ui.js" type="text/javascript"></script> 
<script src="{{URL('/')}}/js1/scripts-f0e4e0c2.js" type="text/javascript"></script> 
<script src="{{URL('/')}}/js1/megamenu.js"  type="text/javascript" ></script> 
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script> 
<script src="{{URL('/')}}/js1/menu_jquery.js"></script> 
<script src="{{URL('/')}}/js1/slick.min.js"></script> 
<script src="{{URL('/')}}/js1/main2.js"></script> 



  
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="2165724393682276">
      </div>
    




<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & containerper
			  slipprycontainerper: '<div class="sy-box jquery-demo" />', // containerper to container everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script> 
<script type="text/javascript">//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script> 
<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
		
		function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
	var textbox = document.getElementById("textbox");
    if (checkBox.checked == true){
        text.style.display = "block";
		textbox.style.display = "none";
    } else {
       text.style.display = "none";
	   textbox.style.display = "block";
    }
}
	</script> 
<script type="text/javascript">
      $(document).ready(function () {
          $(".sub > a").click(function() {
              var ul = $(this).next(),
                      clone = ul.clone().css({"height":"auto"}).appendTo(".mini-menu"),
                      height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
              clone.remove();
              ul.animate({"height":height});
              return false;
          });
             $('.mini-menu > ul > li > a').click(function(){
             $('.sub a').removeClass('active');
             $(this).addClass('active');
          }),
             $('.sub ul li a').click(function(){
             $('.sub ul li a').removeClass('active');
             $(this).addClass('active');
          });
      });
  
  
    function filterSystem(minPrice, maxPrice) {
        $(".items div.item").hide().filter(function () {
            var price = parseInt($(this).data("price"), 10);
            return price >= minPrice && price <= maxPrice;
        }).show();
    }
    
    $(window).on('load', function() {
	 setTimeout(function(){
	   $('#subscribeModal').modal('show');
   }, 10000);
   setTimeout(function(){
	   $('.subscribeModal-lg').modal('show');
   }, 10000);
});
$('.popup-close').click(function() {
    $('.subscribeModal-lg').modal('hide');
});
$('#Reloadpage').click(function() {
    location.reload();
});
  </script> 
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
