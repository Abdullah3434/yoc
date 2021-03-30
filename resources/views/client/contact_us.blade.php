@extends('client.layout.app')
@section('content') 
<!----//End-bottom-header----> 

<!---//End-header---->
<div class="container">
  <div class="CONTACTUS">
    <h1 class="text-muted" style="text-align:center;">CONTACT US</h1>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="form">
          <form  method="post" action = "{{url('/')}}/contact" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div>
            @endif
            <div class="form-group">
              <label>Name <span style="color:red;">*</span></label>
              <input type="text" class="form-control" name="fname" placeholder="Name" maxlength="100" required="">
            </div>
            <div class="form-group">
              <label>Email <span style="color:red;">*</span></label>
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <label>Subject <span style="color:red;">*</span></label>
              <input type="text" class="form-control" name="subject" placeholder="Subject" maxlength="100" required="">
            </div>
            <div class="form-group">
              <label>Message <span style="color:red;">*</span></label>
              <textarea  class="form-control" name="note" placeholder="Message" maxlength="500" rows="9" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn regbtn" style="">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="chatus">
          <h4 class="text-muted">Give Us a Call</h4>
          <br>
          <p class="text-muted">We're available from 9 AM to 6 PM EST, 7 days a week</p>
          <br>
          <h4 class="text-muted">Phone number</h4>
          <br>
          <p class="text-muted">+92 323 3222243</p>
          <br>
          <h4 class="text-muted">Email</h4>
          <br>
          <p class="text-muted">info@yoc.com.pk</p>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

<!--- //End-content----> 

<!--header--> 
@endsection