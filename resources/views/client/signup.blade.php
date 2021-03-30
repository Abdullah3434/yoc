@extends('client.layout.app')
@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<div class="container">
  <div class="row">
      
       

    <div class="col-lg-8 col-lg-offset-2">
      <div class="formbody">
        <div class="form_head">
      
          <h2>Create Account</h2>
        </div>
        <form method="post" action = "{{url('/')}}/signup">
               {{ csrf_field() }}
         				@if($errors->any())
         				<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">First Name <Span>*</Span></label>
                <input type="text" class="form-control" name="fname" maxlength="100" placeholder="Enter your Name" autocomplete="false" required/>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Last Name <Span>*</Span></label>
                <input type="text" class="form-control" name="lname" maxlength="100"  placeholder="Enter your Name" autocomplete="false" required/>
              </div>
            </div>
          </div>
          <div class="row">
                          <div class="col-lg-6">
              <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your Email <Span>*</Span></label>
                <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email" autocomplete="false" required/>
              </div>
            </div>
            
        
          </div>
<div class="row">
    
                <div class="col-lg-6">
              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password <Span>*</Span></label>
                <input type="password" class="form-control" name="password" id="password" pattern=".{8,}" maxlength="36"  placeholder="Enter your Password" autocomplete="false" required/>
                <p>atleast 8 characters</p>
              </div>
            </div>
          <div class="col-lg-6">
              <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Confirm Password <Span>*</Span></label>
                <input type="password" class="form-control" name="confirm" id="confirm" maxlength="36" placeholder="Confirm your Password" autocomplete="false" required/>
              </div>
            </div>
</div>

 
          <div class="form-group ">
            <button name="submit" type="submit" class="btn btn-default btn-lg">Signup</button>
          </div>
        </form>
        <div class="form_bottom"> </div>
      </div>
    </div>
  </div>
</div>
@endsection