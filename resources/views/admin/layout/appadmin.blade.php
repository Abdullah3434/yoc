<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>YOC | Comfort is just a click away</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{URL('/')}}/pic/logo.png"/>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.4 -->
<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/css/bootstrap-colorpicker.min.css" rel="stylesheet"/>
<!-- Font Awesome Icons -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- DATA TABLES -->
<link href="{{url('/')}}/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="{{url('/')}}/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{{url('/')}}/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
</head>
<body class="skin-yellow sidebar-mini">
<div class="wrapper">
  <header class="main-header"> 
    
    <!-- Logo --> 
    <a href="{{URL('/')}}/admin/home" class="logo" > 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><b>F</b>F</span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><b>Fashion</b> Factory</span> </a> 
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a> 
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less--> 
          <!-- User Account: style can be found in dropdown.less -->
          <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> {{Session::get('name')}} <span class=" fa fa-angle-down"></span> </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="{{URL('/')}}/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      <!-- Sidebar user panel --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview"> <a href="{{URL('/')}}/admin/home"> <i class="fa fa-home"></i> <span>Home</span> </a> </li>
        @if(session('admin_management')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-male"></i> <span>Admin Management</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/')}}/admin/home/view/admin"><i class="fa fa-circle-o"></i> View Admin</a></li>
            <li><a href="{{url('/')}}/admin/home/create/admin"><i class="fa fa-circle-o"></i>Create Admin</a></li>
          </ul>
        </li>
        @endif
        
        @if(session('product_management')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-shopping-cart"></i> <span>Product Managment</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/product"><i class="fa fa-circle-o"></i>View Product</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/product/type"><i class="fa fa-circle-o"></i>View Product Type</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/product"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/product/type"><i class="fa fa-circle-o"></i>Add Product Type</a></li>
          </ul>
        </li>
        @endif
        
        @if(session('category_management')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-list-ul"></i> <span>Category Management</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/main/category"><i class="fa fa-circle-o"></i>View Category</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/sub/category"><i class="fa fa-circle-o"></i>View Sub Category</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/main/category"><i class="fa fa-circle-o"></i>Add Main Category</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/sub/category"><i class="fa fa-circle-o"></i>Add Sub Category</a></li>
          </ul>
        </li>
        @endif
        
        
        @if(session('brand_management')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-th"></i> <span>Brand Management</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/brand"><i class="fa fa-circle-o"></i>View Brand</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/brand"><i class="fa fa-circle-o"></i>Add Brand</a></li>
          </ul>
        </li>
        @endif
        
        @if(session('order_management')==1)
        <li class="treeview"> <a href=""> <i class="ion ion-bag"></i> <span>Order Management</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/active/orders"><i class="fa fa-circle-o"></i>Active Order</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/complete/orders"><i class="fa fa-circle-o"></i>Completed Order</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/return/orders"><i class="fa fa-circle-o"></i>Return Order</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/cancel/orders"><i class="fa fa-circle-o"></i>Cancel Order</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/client/details"><i class="fa fa-circle-o"></i>Client Details</a></li>
              </ul>
        </li>
        @endif
        
        @if(session('reporting')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-file"></i> <span>Reporting</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/reporting/by/sale"><i class="fa fa-circle-o"></i>By Sale</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/reporting/by/products"><i class="fa fa-circle-o"></i>By Product</a></li>
            <li><a href="{{URL('/')}}/admin/home/view/reporting/by/customer"><i class="fa fa-circle-o"></i>By Customer</a></li>
          </ul>
        </li>
        @endif
        
        @if(session('vendor_management')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-user"></i> <span>Vendor Management</span> </a>
          <ul class="treeview-menu">
            <li ><a href="{{URL('/')}}/admin/home/view/vendor"><i class="fa fa-circle-o"></i>Vendor</a> </li>
            <li ><a href="{{URL('/')}}/admin/view/vendors/payments"><i class="fa fa-circle-o"></i>Vendor Payments</a> </li>
            <li ><a href="{{URL('/')}}/admin/view/vendor/reporting"><i class="fa fa-circle-o"></i>Vendor Reporting</a> </li>
            <li ><a href="{{URL('/')}}/admin/home/view/earning"><i class="fa fa-circle-o"></i>Vendor Earnings</a> </li>
            
            <li class="treeview"> <a href=""><i class="fa fa-circle-o"></i>Vendor Products</a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/')}}/admin/home/view/approved/products"><i class="fa fa-circle-o"></i>Approved Products</a></li>
                <li><a href="{{URL('/')}}/admin/home/view/pending/products"><i class="fa fa-circle-o"></i>Pending Products</a></li>
                <li><a href="{{URL('/')}}/admin/home/view/cancel/products"><i class="fa fa-circle-o"></i>Unapproved Products</a></li>
              </ul>
            </li>
          </ul>
        </li>
        @endif
        
        @if(session('discount')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-tags"></i> <span>Discount</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/discount"><i class="fa fa-circle-o"></i>View Discount</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/discount"><i class="fa fa-circle-o"></i>Add Discount</a></li>
          </ul>
        </li>
        @endif
        
        @if(session('promocode')==1)
        <li class="treeview"> <a href=""> <i class="fa fa-barcode"></i> <span>Promo Code</span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/admin/home/view/promo"><i class="fa fa-circle-o"></i>View Promo code</a></li>
            <li><a href="{{URL('/')}}/admin/home/add/promo"><i class="fa fa-circle-o"></i>Create Promo code</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>
  @yield('content')
  <footer class="main-footer"> <strong>Copyright &copy; 2019 <a href="#">YOC</a>.</strong> All rights reserved.
    <li>Powered By:<a href="http://greengrapez.com/"><img src="{{url('/')}}/pic/greengrapez.png" alt="Green Grapez"></a></li>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery 2.1.4 --> 
<script src="{{url('/')}}/js/jQuery-2.1.4.min.js"></script> 
<!-- Bootstrap 3.3.2 JS --> 
<script src="{{url('/')}}/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="{{url('/')}}/js/bootstrap-colorpicker.min.js"></script> 
<!-- DATA TABES SCRIPT --> 
<script src="{{url('/')}}/js/jquery.dataTables.min.js" type="text/javascript"></script> 
<script src="{{url('/')}}/js/dataTables.bootstrap.min.js" type="text/javascript"></script> 
<!-- SlimScroll --> 
<script src="{{url('/')}}/js/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- FastClick --> 
<script src="{{url('/')}}/js/fastclick.min.js"></script> 
<!-- AdminLTE App --> 
<script src="{{url('/')}}/js/app.min.js" type="text/javascript"></script> 
<!-- AdminLTE for demo purposes --> 
<script src="{{url('/')}}/js/demo.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js">
</script>
<script>
      $("#b1").click(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var status = $('#status').val();
        $.ajax({
          /* the route pointing to the post function */
          url: "{{URL('/')}}/admin/home/order/update/status",
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {_token: CSRF_TOKEN, status:status,
          id: OrgID,
        },
          /* remind that 'data' is the response of the AjaxController */
          success: function (data) { 
            window.location.href = data;
          }
      }); 

    });
    </script>














    <script>
        $("#p1").click(function(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var status = $('#status').val();
      $.ajax({
        /* the route pointing to the post function */
        url: "{{URL('/')}}/admin/home/product/update/status",
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, status:status,
        id: OrgID,
      },
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
          window.location.href = data;
        }
    }); 

  });
    
        $("#v1").click(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var status = $('#status').val();
        $.ajax({
          /* the route pointing to the post function */
          url: "{{URL('/')}}/admin/home/vendor/update/status",
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {_token: CSRF_TOKEN, status:status,
          id: OrgID,
        },
          /* remind that 'data' is the response of the AjaxController */
          success: function (data) { 
            window.location.href = data;
          }
      }); 

    });
    
    
    $("#active_order").click(function(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var status = $('#status').val();
      $.ajax({
        /* the route pointing to the post function */
        url: "{{URL('/')}}/admin/home/view/active/orders",
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, status:status,
        id: OrgID,
      },
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
          window.location.href = data;
        }
    }); 

  });
  @php
  $result = DB::select("select* from client_details ");
  @endphp
  $(document).ready(function() {
  var max_field      = 10; //maximum input boxes allowed
  var wrappers         = $(".promoinput"); //Fields wrapper
  var add_buttons      = $(".promobtn"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_buttons).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_field){ //max input box allowed
          x++; //text box increment
          $(wrappers).append('<div><div class="col-lg-12 lpadding"><h5> Promo Code for Specific Person</h5><select class="selectpicker form-control" data-show-subtext="true" name="promoinput[]" data-live-search="true"><option class="form-control"></option>@foreach($result as $results)<option class="form-control" value="{{$results->username}}">{{$results->username}}</option>@endforeach</select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
  });
  
  $(wrappers).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});











    $("#payment_status").click(function(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var status = $('#status').val();
      $.ajax({
        /* the route pointing to the post function */
        url: "{{URL('/')}}/admin/home/update/payment/status",
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, status:status,
        id: OrgID,
      },
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
          window.location.href = data;
        }
    }); 

  });

  </script> 
<script type="text/javascript">
    $("#mainCategory").on('change',function(e){

      console.log(e);
      
      var cat_id = e.target.value;
     
      $.get('{{URL('/')}}/ajax-subcat?cat_id='+ cat_id,function(data){
        console.log(data);
        $('#SubCategory').empty();
        $('#SubCategory').append('<option value="" disable="true" selected="true" >---Select Sub Category---</option>');
        
        $.each(data,function(create,subcatObj){
         
          $('#SubCategory').append('<option value ="'+subcatObj.SKU+'">'+subcatObj.sub_category+'</option>');
      });
   


      });


  });

    $("#SubCategory").on('change',function(e){

      console.log(e);
      
      var type_id = e.target.value;
    
      $.get('{{URL('/')}}/ajax-product-type?type_id='+ type_id,function(data){
        console.log(data);
      $('#ProductType').empty();
        $('#ProductType').append('<option value="" disable="true" selected="true" >---Add Product Type---</option>');
        $.each(data,function(create,typeObj){
         
          $('#ProductType').append('<option value ="'+typeObj.product_type+'">'+typeObj.product_type+'</option>');
      });
   


      });


  });
</script> 
<script type="text/javascript">
    
      $(function () {
        $("#example1").dataTable({
    "order": [[ 0, "desc" ]]
    } );
        $("#example2").dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": false,
          "bAutoWidth": false
        });
      });

      $(".my-colorpicker2").colorpicker();
      
    </script> 
<script type="text/javascript">
      $("#MainCategory").on('change',function(e){

        console.log(e);
        
        var cat_id =  e.target.value;
       
        $.get('{{URL('/')}}/ajax-subcat?cat_id='+ cat_id,function(data){
          console.log(data);
          $('#subCategory').empty();
          $('#subCategory').append('<option value="" disable="true" selected="true" >---Select Sub Category---</option>');
          
          $.each(data,function(create,subcatObj){
           
            $('#subCategory').append('<option value ="'+subcatObj.sub_category+'">'+subcatObj.sub_category+'</option>');
        });
     


        });
  

    });
 
  </script> 
<script>
      
    $(function() {
$('input:text').keydown(function(e) {
if(e.keyCode==191)
    return false;

});
});
  </script>
</body>
</html>