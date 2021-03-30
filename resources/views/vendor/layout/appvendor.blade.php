<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>YOC | Comfort is just a click away</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <link rel="shortcut icon" href="{{URL('/')}}/pic/logo.png"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{url('/')}}/css/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{url('/')}}/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-yellow sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{URL('/')}}/vendor/home" class="logo" >
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>YOC</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>YOC</b></span>
        </a>

              <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> {{Session::get('fname')}} {{Session::get('lname')}} <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{URL('/')}}/vendor/profile/{{Session::get('id')}}"><i class="fa fa-person pull-right"></i> Profile</a></li>
                <li><a href="{{URL('/')}}/vendor/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
            <li class="treeview">
              <a href="{{URL('/')}}/vendor/home">
                <i class="fa fa-home"></i> <span>Home</span>
                
              </a>
            </li>
            <!--      <li class="treeview">-->
            <!--  <a href="">-->
            <!--    <i class="fa fa-list-ul"></i> <span>Category Management</span>-->
            <!--  </a>-->
            <!--  <ul class="treeview-menu">-->
            <!--    <li><a href="{{URL('/')}}/vendor/home/view/main/category"><i class="fa fa-circle-o"></i>View Category</a></li>-->
            <!--    <li><a href="{{URL('/')}}/vendor/home/view/sub/category"><i class="fa fa-circle-o"></i>View Sub Category</a></li>-->
            <!--    <li><a href="{{URL('/')}}/vendor/home/add/main/category"><i class="fa fa-circle-o"></i>Add Main Category</a></li>-->
            <!--    <li><a href="{{URL('/')}}/vendor/home/add/sub/category"><i class="fa fa-circle-o"></i>Add Sub Category</a></li>-->
            <!--  </ul>-->
            <!--</li>-->
            <li class="treeview">
              <a href="">
                <i class="fa fa-shopping-cart"></i> <span>Product Managment</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/')}}/vendor/home/add/product"><i class="fa fa-circle-o"></i>Add Product</a></li>
                <li><a href="{{URL('/')}}/vendor/home/view/product"><i class="fa fa-circle-o"></i>View Product</a></li>
                <li><a href="{{URL('/')}}/vendor/view/product/type"><i class="fa fa-circle-o"></i>View Product Type</a></li>
                <li><a href="{{URL('/')}}/vendor/home/add/product/type"><i class="fa fa-circle-o"></i>Add Product Type</a></li>
                <li><a href="{{URL('/')}}/vendor/home/pending/product"><i class="fa fa-circle-o"></i>Pending Product</a></li>
                <li><a href="{{URL('/')}}/vendor/home/approved/product"><i class="fa fa-circle-o"></i>Approved Product</a></li>
                <li><a href="{{URL('/')}}/vendor/home/cancel/product"><i class="fa fa-circle-o"></i>Cancel Product</a></li>
              
            
            
            </ul>
            </li>
   
            <li class="treeview">
              <a href="">
                <i class="ion ion-bag"></i> <span>Order Management</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('/')}}/vendor/home/view/active/orders"><i class="fa fa-circle-o"></i>Active Order</a></li>
                <li><a href="{{URL('/')}}/vendor/home/view/complete/orders"><i class="fa fa-circle-o"></i>Completed Order</a></li>
                <li><a href="{{URL('/')}}/vendor/home/view/return/orders"><i class="fa fa-circle-o"></i>Return Order</a></li>
                <li><a href="{{URL('/')}}/vendor/home/view/cancel/orders"><i class="fa fa-circle-o"></i>Cancel Order</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-file"></i> <span>Reporting</span>
              </a>
              <ul class="treeview-menu">
            <li><a href="{{URL('/')}}/vendor/home/view/reporting/by/sale"><i class="fa fa-circle-o"></i>By Sale</a></li>
                
                <li><a href="{{URL('/')}}/vendor/home/view/reporting/by/products"><i class="fa fa-circle-o"></i>By Product</a></li>
            
              </ul>
            </li>
      

            <li class="treeview">
                    <a href="{{URL('/')}}/vendor/home/view/earning">
                      <i class="fa fa-money"></i> <span>Earnings</span>
                    </a>
                 
                  </li>
       
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      @yield('content')

      <footer class="main-footer">
        <strong>Copyright &copy; 2020-2021 <a href="#">YOC</a>.</strong> All rights reserved.
      <li>Powered By:<a href="http://greengrapez.com/"><img src="{{url('/')}}/pic/greengrapez.png" alt="Green Grapez"></a></li>
      </footer>
      <!-- Add the sidebar"s background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

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
    <!-- page script -->
    <script>
      $("#b1").click(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var status = $('#status').val();
        $.ajax({
          /* the route pointing to the post function */
          url: "{{URL('/')}}/vendor/home/order/update/status",
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
      $(function () {
        $("#example1").dataTable();
        $("#example2").dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });

      $(".my-colorpicker2").colorpicker();
    </script>


  <script type="text/javascript">
      $("#MainCategory").on('change',function(e){

        console.log(e);
        
        var cat_id = e.target.value;
       
        $.get('{{URL('/')}}/vendor/ajax-subcat?cat_id='+ cat_id,function(data){
          console.log(data);
          $('#subCategory').empty();
          $('#subCategory').append('<option value="" disable="true" selected="true" >---Select Sub Category---</option>');
          $.each(data,function(create,subcatObj){
           
            $('#subCategory').append('<option value ="'+subcatObj.sub_category+'">'+subcatObj.sub_category+'</option>');
        });
     


        });
  

    });
 
  </script>
  
   
  
  <script type="text/javascript">
    $("#mainCategory").on('change',function(e){

      console.log(e);
      
      var cat_id = e.target.value;
     
      $.get('{{URL('/')}}/vendor/ajax-subcat?cat_id='+ cat_id,function(data){
        console.log(data);
        $('#subCategory').empty();
        $('#subCategory').append('<option value="" disable="true" selected="true" >---Select Sub Category---</option>');
        
        $.each(data,function(create,subcatObj){
         
          $('#subCategory').append('<option value ="'+subcatObj.SKU+'">'+subcatObj.sub_category+'</option>');
      });
   


      });


  });

    $("#subCategory").on('change',function(e){

      console.log(e);
      
      var type_id = e.target.value;
    
      $.get('{{URL('/')}}/vendor/ajax-product-type?type_id='+ type_id,function(data){
        console.log(data);
      $('#ProductType').empty();
        $('#ProductType').append('<option value="" disable="true" selected="true" >---Add Product Type---</option>');
        $.each(data,function(create,typeObj){
         
          $('#ProductType').append('<option value ="'+typeObj.product_type+'">'+typeObj.product_type+'</option>');
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