<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Fashion Factory</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="{{URL('/')}}/pic/fevicon.png"/>
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
        	      @if($errors->any())
        	    <div class="alert alert-danger">
 <strong>Danger!</strong> {{$errors->first()}}
</div>
 @endif
            <div class="formbody">
            	<div class="form_head">
           
                	<h2 style="text-align:center;">Personal Information</h2>
                </div>
            @if($result>0)
                <form method="post" action = "{{url('/')}}/vendors/profile/edit/{{Session::get('id')}}" enctype="multipart/form-data" class="login-form">
                  {{ csrf_field() }}
            	<div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>First Name <span style="color:red;">*</span></label>
                                              <input type="text" class="form-control" name="fname" placeholder="First Name" value="{{$result[0]->fname}}"  maxlength="100" required> 

                              </div>
                               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label>Last Name <span style="color:red;">*</span></label>
                                              <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{$result[0]->lname}}"  maxlength="100" required> 

                              </div>
                               
                    </div>
                	<div class="col-lg-6">
                    <div class="form-group">
                    <label>Fashion Factory Store Name (Maximum 100 Characters) <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="store_name" placeholder="Store Name" value="{{$result[0]->store_name}}"  maxlength="100" required>
                              </div>
                               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label>Mobile Number (Ex.03001234567) <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="phone" placeholder="Mobile Number" pattern=".{11,}" value="{{$result[0]->phone}}"  maxlength="15" required>
                              </div>
                               
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>City <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="city" placeholder="City" maxlength="100" value="{{$result[0]->city}}"  required>
                                  </div>
                                   
                        </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label>Store Address <span style="color:red;">*</span></label>
                                  <input type="text" name="address" class="form-control" placeholder="Address"  maxlength="100" value="{{$result[0]->address}}"  required>
                                </div>
                                 
                      </div>
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>CNIC Number (Ex.3520112345678) <span style="color:red;">*</span></label>
                                  <input type="text" name="cnic" class="form-control" placeholder="CNIC Number" value="{{$result[0]->cnic}}"  required/>
                                </div>
                                 
                      </div>
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>Bank Account title <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" name="bank_title" placeholder="Bank Account title" value="{{$result[0]->bank_title}}"  maxlength="100" required>
                                </div>
                                 
                      </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label>Bank Name (Only Alphabets) <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" name="bank_name" placeholder="Bank Name"  maxlength="100" value="{{$result[0]->bank_name}}" required>
                                </div>
                                 
                      </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label>Bank Account Number <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" name="bank_number" maxlength="30" placeholder="Bank Account Number" value="{{$result[0]->account_number}}"  required>
                                </div>
                                 
                      </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label>Branch Code <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" name="bank_code" placeholder="Branch Code" value="{{$result[0]->bank_code}}"  required>
                                </div>
                                 
                      </div>
                          
                      
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>Zip Code <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" value="{{$result[0]->zip_code}}" required>
                                </div>
                                 
                      </div>
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>NTN (Optional)</label>
                                  <input type="text" class="form-control" name="ntn" value="{{$result[0]->NTN}}"  placeholder="NTN">
                                </div>
                                 
                      </div>
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>STN (Optional)</label>
                                  <input type="text" class="form-control" name="stn" value="{{$result[0]->STN}}"  placeholder="STN">
                                </div>
                                 
                      </div>
                      
                      <div class="col-lg-12">
                      <div class="form-group">
                      <label><span style="color:red;">Person other then you please provide his/her contact info.</span></label>
                                </div>
                                 
                      </div>
                      
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>Dealing Person (Optional)</label>
                                  <input type="text" class="form-control" name="dealing_person" placeholder="Dealing Person" value="{{$result[0]->dealing_person}}" >
                                </div>
                                 
                      </div>
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>Dealing Person Contact Number (Optional)</label>
                                  <input type="text" class="form-control" name="d_p_phone" placeholder="Dealing Person Contact Number" value="{{$result[0]->d_p_phone}}" >
                                </div>
                                 
                      </div>
                    <div class="col-lg-12">
                        <label for="text">Uploded Cheque copy <span style="color:red;">*</span></label>
                        <div class="form-group">
<input type='file' name="file" class="form-control" value="{{url('/')}}/storage/images/{{$result[0]->cheque_copy}}" onchange="readURL(this);"/>
<img id="blah" src="{{url('/')}}/storage/images/{{$result[0]->cheque_copy}}" alt="your image"style="width:180px; height:180px;" />
</div>
                <p style="color:#ab0f23;">please uploade a copy of cheque to source your bank information  and you will get online payment.</p>         
                      </div>
                      <div class="col-lg-4 col-lg-offset-4">
                        <div class="form-group">
                  <button type="submit" class="btn btn-block btn-lg regbtn">Edit</button>
                  </div>
                      </div>
                </div>
                
            
            </form>
            @endif
                </div>
        	</div>
        </div>	
</div>


  </body>
</html>