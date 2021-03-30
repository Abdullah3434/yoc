<!DOCTYPE HTML>
<html>
<head>
<title>Fashion Factory</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{URL('/')}}/css1/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="{{URL('/')}}/css1/bootstrap.min.css" type="text/css"/>
<link href="{{URL('/')}}/css1/style.css" rel="stylesheet" type="text/css"/>
<link type="text/css" rel="stylesheet" href="{{URL('/')}}/css1/nouislider.min.css" />
<link href="{{URL('/')}}/css1/slick.css" rel="stylesheet" type="text/css"/>
<link href="{{URL('/')}}/css1/slick-theme.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----webfonts---->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
<!----//webfonts---->
<!----start-alert-scroller---->
<script src="{{URL('/')}}/js1/jquery.min.js"></script>
<script type="text/javascript" src="{{URL('/')}}/js1/jquery.easy-ticker.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
<!----start-alert-scroller---->
<!-- start menu -->
<link href="{{URL('/')}}/css1/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{URL('/')}}/js1/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{URL('/')}}/js1/menu_jquery.js"></script>
<!-- //End menu -->
<!---slider---->
<link rel="stylesheet" href="{{URL('/')}}/css1/slippry.css">
<script src="{{URL('/')}}/js1/jquery-ui.js" type="text/javascript"></script>
<script src="{{URL('/')}}/js1/scripts-f0e4e0c2.js" type="text/javascript"></script>
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
<!----start-pricerage-seletion---->
<script type="text/javascript" src="{{URL('/')}}/js1/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/jquery-ui.css">
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
<!----//End-pricerage-seletion---->
<!---move-top-top---->
<script type="text/javascript" src="{{URL('/')}}/js1/move-top.js"></script>
<script type="text/javascript" src="{{URL('/')}}/js1/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---//move-top-top---->
</head>
<body>
<!---start-container----> 
<!---start-header---->
<div class="header">
  <div class="top-header">
    <div class="container">
      <div class="top-header-left">
        <ul> 
          <!---//cart-tonggle-script---->
          <li><a class="cart" href="{{URL('/')}}/cart"></a>Your Cart is <span>{{Session::has('cart') ? Session::get('cart')->abc : '0'}}</span></li>
        </ul>
      </div>
      <div class="top-header-right">
        <ul>
            @if(Session::has('username'))  
                <li><a href="order/tracking/view" style="margin-left:10px;float: right;
    margin-top: 10px;
    color: white;">Order History</a></li>  
            <li><a href="{{URL('/')}}/">{{session::get('name')}}</a><span> </span></li>                       
        
            <li><a href="{{URL('/')}}/logout">logout</a></li>
            @else
                 <li><a href="guest/order/tracking/view" style="margin-left:10px;float: right;
    margin-top: 10px;
    color: white;">Order Tracking</a></li> 
            <li><a href="{{URL('/')}}/login">Log in</a><span> </span></li>  
            <li><a href="{{URL('/')}}/signup">Join</a></li>
            @endif
          
          
     
     
        </ul>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
  <!----start-mid-head---->
  <div class="mid-header">
    <div class="container">
      <div class="mid-grid-left"> <a class="logo" href="{{URL('/')}}/"><span> </span></a> </div>
      <div class="mid-grid-right">
        <form class="navbar-form" role="search">
          <div class="input-group add-on">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text" style="margin:0px;" required>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="clear"> </div>
    </div>
  </div>

  <!----//End-mid-head----> 
  <!----start-bottom-header---->
  <div class="header-bottom">
    <div class="container"> 
      <!-- start header menu -->
      <ul class="megamenu skyblue">
        <li class="grid"><a class="color2" href="{{URL('/')}}/">Home</a> </li>
        <li class="grid"><a class="color2" href="{{URL('/')}}/product/garments">Garments</a>
          <div class="megapanel">
            <div class="row">
              <div class="col1">
                <div class="h_nav">
                    <h4> <a href="{{URL('/')}}/product/garments/garments category">Garments Category</a></h4>
                  <ul>
                      <li><a href="{{URL('/')}}/product/garments/garments category/tshirts">T-Shirts</a></li>
                      <li><a href="{{URL('/')}}/product/garments/garments category/hoodies">Hoodies</a></li>
                      <li><a href="{{URL('/')}}/product/garments/garments category/trouser">Trouser</a></li>
                      <li><a href="{{URL('/')}}/product/garments/garments category/abaya">Abaya</a></li>
                      <li><a href="{{URL('/')}}/product/garments/garments category/scarfs">Scarfs</a></li>
                      <li><a href="{{URL('/')}}/product/garments/garments category/printed lawn">Printed Lawn</a></li>
                      <li><a href="{{URL('/')}}/product/garments/garments category/embroidery fabrics">Embroidery Fabrics</a></li>
                    </ul>
                </div>
                <div class="h_nav">
                  <h4 class="top"><a href="{{URL('/')}}/product/garments/kids category">Kids Category</a></h4>
                  <ul>
                      <li><a href="{{URL('/')}}/product/garments/kids category/children">Children</a></li>
                
                  </ul>
                </div>
              </div>
              <div class="col1">
                <div class="h_nav">
                    <h4><a href="{{URL('/')}}/product/garments/leather category">Leather Category</a></h4>
                    
      
                  <ul>
                       <li><a href="{{URL('/')}}/product/garments/leather category/leather garments">Leather Garments</a></li>
                
                  </ul>
                </div>
              </div>
          
              <div class="col1 men">
                <div class="men-pic"> <img src="{{url('/')}}/pic/men.png" alt="" title="" /> </div>
              </div>
            </div>
          </div>
        </li>
        <li class="active grid"><a class="color4" href="{{URL('/')}}/product/shoes">Shoes</a>
          <div class="megapanel">
            <div class="row">
         
      <div class="col1 women">
                <div class="women-pic"> <img src="{{url('/')}}/pic/women.png" alt="" title="" /> </div>
              </div>
            </div>
         
          </div>
        </li>
        <li><a class="color5" href="{{URL('/')}}/product/accessories">Accessories</a>
          <div class="megapanel">
            <div class="row">
              <div class="col1">
                <div class="h_nav">
               
                  <h4><a href="{{URL('/')}}/product/accessories/accessories">Accessories</a></li></h4>
                  <ul>
                    <li><a href="{{URL('/')}}/product/accessories/accessories/car accessories">Car Accessories</a></li>
                    <li><a href="{{URL('/')}}/product/accessories/accessories/general accessories">General Accessories</a></li>
                    <li><a href="{{URL('/')}}/product/accessories/accessories/bags and wallets">Bags and Wallet</a></li>

                  </ul>
                </div>
         
              </div>
      
              <div class="col1 kids">
                <div class="kids-pic"> <img src="{{url('/')}}/pic/kids1.png" alt="" title="" /> </div>
              </div>
              <div class="col1"></div>
              <div class="col1"></div>
              <div class="col1"></div>
              <div class="col1"></div>
            </div>
          </div>
        </li>
        
        <li class="dropdown mega-dropdown"> <a href="{{URL('/')}}/product/home textile" class="dropdown-toggle" data-toggle="dropdown">Home Textile<span class="caret"></span></a>
          <ul class="dropdown-menu mega-dropdown-menu">
            <li class="col-sm-3">
              <ul>
               
        <li><a class="color6" href="{{URL('/')}}/product/home textile">Home Textile</a>
          <div class="megapanel">
            <div class="row">
              <div class="col1">
                <div class="h_nav">
                    <h4><a href="{{URL('/')}}/product/home textile/bed sheets">Home Textile</a></h4>
                  <ul>
                    <li><a href="{{URL('/')}}/product/home textile/bed sheets/fitted bed sheets">Fitted bed sheets</a></li>
                    <li><a href="{{URL('/')}}/product/home textile/bed sheets/knitted bed sheets">Knitted bed sheets</a></li>
  
                  </ul>
                </div>
           
              </div>
        
              <div class="col1 sports">
                <div class="sports-pic"> <img src="{{url('/')}}/pic/sport.png" alt="" title="" /> </div>
              </div>
            </div>
            <div class="row">
              <div class="col2"></div>
              <div class="col1"></div>
              <div class="col1"></div>
              <div class="col1"></div>
              <div class="col1"></div>
            </div>
          </div>
        </li>
        
       
      </ul>
    </div>
  </div>
</div>

<!----//End-image-slider----> 
<!----start-price-rage--->
<div class="container">
  <div class="price-rage">
    <h3>Weekly selection:</h3>
    <div id="slider-range"> </div>
  </div>
</div>
<!----//End-price-rage---> 
<!--- start-content---->






                            
 @yield('content')


<!--header-->
<div class="footer1">
  <div class="container-fluid ">
    <div class="row"><!-- row -->
      
      <div class="col-lg-3 col-md-3"><!-- widgets column left -->
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
            <h1 class="title-widget">COMPANY</h1>
            <ul>
              <li><a  href="about us.html"><i class="fa fa-angle-double-right"></i> About Us</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- widgets column left end -->
      
      <div class="col-lg-3 col-md-3"><!-- widgets column left -->
        
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
            <h1 class="title-widget">MY ACCOUNT</h1>
            <ul>
              <li><a  href="Create Account.html"><i class="fa fa-angle-double-right"></i>Create Account</a></li>
              <li><a  href="account.html"><i class="fa fa-angle-double-right"></i>Accounts</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- widgets column left end -->
      
      <div class="col-lg-3 col-md-3"><!-- widgets column left -->
        
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
            <h1 class="title-widget">CUSTOMER SERVICS</h1>
            <ul>
              <li><a href="#"><i class="fa fa-angle-double-right"></i> Live Chat</a></li>
              <li><a href="FAQ.html"><i class="fa fa-angle-double-right"></i> FAQ</a></li>
              <li><a href="trackmyorder.html"><i class="fa fa-angle-double-right"></i> Track My Order</a></li>
              <li><a href="Retern&exchange.html"><i class="fa fa-angle-double-right"></i> Returns & Exchanges</a></li>
              <li><a href="Shipping .html"><i class="fa fa-angle-double-right"></i> Shipping Terms</a></li>
              <li><a href="Shipping .html"><i class="fa fa-angle-double-right"></i> WISH LIST</a></li>
              <li><a href="payment policy.html"><i class="fa fa-angle-double-right"></i> Payment Policy</a></li>
              <li><a href="giftcard.html"><i class="fa fa-angle-double-right"></i> Gift Cards</a></li>
              <li><a href="contact us.html"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
              <li><a href="warranty-repair.html"><i class="fa fa-angle-double-right"></i> Warranty & Repair</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- widgets column left end -->
      
      <div class="col-lg-3 col-md-3"><!-- widgets column center -->
        
        <ul class="list-unstyled clear-margins">
          <!-- widgets -->
          
          <li class="widget-container widget_recent_news"><!-- widgets list -->
            
            <h1 class="title-widget">Contact Detail </h1>
            <div class="footerp">
              <h2 class="title-median">Fashion Factory.Ltd</h2>
              <p><b>Email id:</b> <a href="mailto:info@webenlance.com">support@fashionfactory.com</a></p>
              <p><b>Phone Numbers : </b> +92 300 8481078</p>
            </div>
            <div class="social-icons">
              <ul class="nomargin">
                <a target="_blank" href="#"><i class="fa fa-facebook-square fa-3x social-in" id="social"></i></a> <a target="_blank" href="#"><i class="fa fa-twitter-square fa-3x social-tw" id="social1"></i></a><a target="_blank" href="#"><i class="fa fa-twitter-square fa-3x social-tw" id="social1"></i></a> 
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12"> </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="design"> <a href="#">Copyright &copy; 2019</a> | <a target="_blank" href="#">All rights reserved.</a> </div>
      </div>
    </div>
  </div>
</div>
<!---//End-container---->
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


</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>  
$("#size").on('change',function(e){

      console.log(e);
      
      var type_id = e.target.value;
    
      $.get('{{URL('/')}}/client/ajax-size?type_id='+ type_id,function(data){
        console.log(data);
   $("#myInput").attr({
   "max" : data
});
      });


  });</script>
  
<script>
    $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ 190, 728 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
         var mi = ui.values[0];
              var mx = ui.values[1];
              filterSystem(mi, mx);
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );


  function filterSystem(minPrice, maxPrice) {
      $(".items div.item").hide().filter(function () {
          var price = parseInt($(this).data("price"), 10);
          return price >= minPrice && price <= maxPrice;
      }).show();
  }
  
//   $( "#slider-range" ).on( "slidechange", function( event, ui ) {
//     console.log(ui.value);
// } );
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
</script>
	<script src="{{url('/')}}/js1/bootstrap.min.js"></script>
	<script src="{{url('/')}}/js1/slick.min.js"></script>
	<script src="{{url('/')}}/js1/nouislider.min.js"></script>
	<script src="{{url('/')}}/js1/jquery.zoom.min.js"></script>
	<script src="{{url('/')}}/js1/main.js"></script>
</body>

</html>

