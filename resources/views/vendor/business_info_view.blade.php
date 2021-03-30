<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fashion Factory</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body  class="skin-yellow sidebar-mini">
    <!-- ./wrapper -->
    <div class="signup_page">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            <div class="formbody">
            	<div class="form_head">
                	<h2 style="text-align:center;">Business Information</h2>
                </div>
            
                <form method="post" action = "{{url('/')}}/vendor/business/info" class="login-form">
                    {{ csrf_field() }}
            	<div class="row">
                	<div class="col-lg-12">
                    <div class="form-group">
                    <label>Address*</label>
                                <input type="text" name="address" class="form-control" placeholder="Name" pattern="[a-zA-Z0-9\s]+" maxlength="20" >
                              </div>
                               
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label>CNIC Number*</label>
                                <input type="text" name="cnic" class="form-control" placeholder="Fashion Factory" pattern="[a-zA-Z0-9\s]+" maxlength="20" >
                              </div>
                               
                    </div>

                </div>
                <div class="row">
                	<div class="col-lg-12">
                    <div class="form-group">
                    <label>Bank Account title*</label>
                                <input type="text" class="form-control" name="bank_title" placeholder="Fashion Factory" pattern="[a-zA-Z0-9\s]+" maxlength="20" >
                              </div>
                               
                    </div>
                    
					<div class="col-lg-12">
                    <div class="form-group">
                    <label>Bank Name*</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Fashion Factory" pattern="[a-zA-Z0-9\s]+" maxlength="20" >
                              </div>
                               
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label>Bank Account Number*</label>
                                <input type="text" class="form-control" name="bank_number" placeholder="Fashion Factory" pattern="[a-zA-Z0-9\s]+" maxlength="20" >
                              </div>
                               
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label>Bank Code*</label>
                                <input type="text" class="form-control" name="bank_code" placeholder="Fashion Factory" pattern="[a-zA-Z0-9\s]+" maxlength="20" >
                              </div>
                               
                    </div>
                    <label for="text">Uploded Cheque copy</label>
            <input type="file" onchange="readURL(this);" />
            	<p style="color:#ab0f23;">please uploade a copy of cheque to source your bank information  and you will get online payment.</p>
                </div>
                 
                <br>
                <div class="row">
                <div class="col-lg-12">
                <div class="row">
                	<div class="col-lg-6">
                    <div class="form-group">
                    <a href={{url('/')}}/vendor/signup><button type="submit" class="btn btn-block btn-lg regbtn">Privious</button></a>
                </div></div>
                    <div class="col-lg-6 ">
                    	<div class="form-group">
                <button type="submit" class="btn btn-block btn-lg regbtn">Next</button>
                </div>
                    </div>

                </div>
                    
                </div>
                
                               
                              </div>
            
            </form>
           
                </div>
        	</div>
        </div>	
</div>
      <!-- jQuery 2.1.4 -->
     <script src="{{url('/')}}/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{url('/')}}/js/bootstrap.min.js" type="text/javascript"></script>
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
    </script>

  </body>
</html>