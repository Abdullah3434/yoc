 @extends('client.layout.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="mainContentWrapper">
        <div class="col-md-8 col-lg-offset-2">
          <h2 style="text-align: center;  color:#ed6c71 !important;"> Add New Address</h2>
          <div class="shopping_cart">
            <form  role="form" action="{{url('/')}}/cart/checkout/add/new/address" method="post" id="payment-form">
              {{ csrf_field() }}
              <div class="panel bgcard">
                <div class="">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="text">First name</label>
                      <input type="text" name="fname" value= "{{Session::get('fname')}}" class="form-control" placeholder="First Name"  maxlength="100" autocomplete="false" required>
                    </div>
                    <div class="form-group">
                      <label for="text">Last name</label>
                      <input type="text" name="lname" value= "{{Session::get('lname')}}" class="form-control" placeholder="Last Name"  maxlength="100" autocomplete="false" required>
                    </div>
                    <div class="form-group">
                      <label for="text">Address</label>
                      <input name="address"  type="text" class="form-control" placeholder="Address"  maxlength="200" autocomplete="false" required>
                    </div>
                    <div class="form-group">
                      <label for="text">Phone</label>
                      <input name="phone"  type="tel" class="form-control" placeholder="Phone" pattern=".{11,}"  maxlength="15" autocomplete="false" required>
                    </div>
                    <div class="form-group">
                      <label for="text">Zip Code</label>
                      <input name="phone"  type="text" class="form-control" placeholder="Zip Code" autocomplete="false" required>
                    </div>
                    <div class="form-group">
                      <label for="text">Country*</label>
                      <select name="country"  class="countries form-control order-alpha presel-PK" id="countryId" required>
                        <option value="">Select Country</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="text">Province*</label>
                      <select name="state" class="states form-control" id="stateId" required>
                        <option value="">Select Province</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="text">City*</label>
                      <select name="city"  class="cities form-control" id="cityId" required>
                        <option value="">Select City</option>
                      </select>
                    </div>
                    <button type="submit" class="btn login-button">Save Address</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection