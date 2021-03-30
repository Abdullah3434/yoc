<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>YOC | Comfort is just a click away</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="shortcut icon" href="{{URL('/')}}/pic/logo.png"/>
<!-- Bootstrap 3.3.4 -->
<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{{url('/')}}/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
</head>
<body  class="skin-yellow sidebar-mini">
<!-- ./wrapper -->
<div class="signup_page">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12"> @if($errors->any())
      <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
      @endif
      <div class="formbody">
        <div class="form_head">
          <h2 style="text-align:center;">Personal Information</h2>
        </div>
        <form method="post" action = "{{url('/')}}/vendor/signup" enctype="multipart/form-data" class="login-form">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>First Name <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="fname" placeholder="First Name"  maxlength="150" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Last Name <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="lname" placeholder="Last Name" maxlength="150" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Store Name (Maximum 100 Characters) <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="store_name" placeholder="Store Name"  maxlength="100" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Mobile Number (Ex.03001234567) <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="phone" placeholder="Mobile Number" pattern=".{11,}"  maxlength="15" required>
              </div>
            </div>
            
            <div class="col-lg-12">
              <div class="form-group">
                <label>Store Address (Kindly put complete address otherwise store will not registered) <span style="color:red;">*</span></label>
                <input type="text" name="address" class="form-control" placeholder="Address"  maxlength="300" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>City <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="city" placeholder="City" maxlength="100" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Email Address <span style="color:red;">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Password (Minimum 8 characters) <span style="color:red;">*</span></label>
                <input type="password" name="password"class="form-control" pattern=".{8,}" maxlength="36"  placeholder="Password" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Confirm Password (Minimum 8 characters) <span style="color:red;">*</span></label>
                <input type="password" name="confirm_password" class="form-control" pattern=".{8,}" maxlength="36"  placeholder="Confirm Password" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>CNIC Number (Ex.3520112345678) <span style="color:red;">*</span></label>
                <input type="text" name="cnic" class="form-control" placeholder="CNIC Number" required/>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Bank Account title <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="bank_title" placeholder="Bank Account title" maxlength="100" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Bank Name (Only Alphabets) <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="bank_name" placeholder="Bank Name"  maxlength="100" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Bank Account Number <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="bank_number" maxlength="30" placeholder="Bank Account Number" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Branch Code <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="bank_code" placeholder="Branch Code" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>NTN (Optional)</label>
                <input type="text" class="form-control" name="ntn" placeholder="NTN">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>STN (Optional)</label>
                <input type="text" class="form-control" name="stn" placeholder="STN">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Zip Code <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" required>
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
                <input type="text" class="form-control" name="dealing_person" placeholder="Dealing Person">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Dealing Person Contact Number (Optional)</label>
                <input type="text" class="form-control" name="d_p_phone" placeholder="Dealing Person Contact Number">
              </div>
            </div>
            <div class="col-lg-12">
              <label for="text">Uploded Cheque copy <span style="color:red;">*</span></label>
              <input type="file" name = "file" onchange="readURL(this);" required/>
              <p style="color:#ab0f23;">please uploade a copy of cheque to source your bank information  and you will get online payment.</p>
            </div>
            <div class="col-lg-12">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" required>
                  I here by agree to the Terms And Conditions of the <a href="{{url('/')}}/vendor/policy" style="color:#ab0f23;">Vendor Policy</a></label>
              </div>
            </div>
            <div class="col-lg-4 col-lg-offset-4">
              <div class="form-group">
                <button type="submit" class="btn btn-block btn-lg regbtn"style="">Sign Up</button>
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
</body>
</html>