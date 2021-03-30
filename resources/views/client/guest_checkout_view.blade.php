 @extends('client.layout.app')
@section('content')
<div class="container"> 
  <!-- row -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
    @if($errors->any())
    <div class="alert alert-danger"> <strong>Danger!</strong> {{$errors->first()}} </div>
    @endif
    <section class="content-header">
      <h3> Checkout </h3>
    </section>
    <tbody class="nDividerBlockOuter">
      <tr>
        <td class="nDividerBlockInner" style="padding: 18px;"><table class="nDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 5px;border-top-style: solid;border-top-color: #ed6c71;">
            <tbody>
              <tr>
                <td><span></span></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
    </tbody>
    
    <!-- Main content --> 
    <!-- /.content --> 
  </div>
  <!-- /row -->
  <div class="row">
  <form method="post" action = "{{url('/')}}/cart/guest/checkout" class="login100-form validate-form">
    {{ csrf_field() }}
    <div class="col-lg-7 col-md-7 col-sm-12">
      <div class="boxcheck1">
        <div class="form-group">
          <label for="text">First name</label>
          <input type="text" name ="fname" class="form-control" placeholder="First Name"  maxlength="100" autocomplete="false">
        </div>
        <div class="form-group">
          <label for="txt">Last name</label>
          <input type="text" name ="lname" class="form-control" placeholder="Last Name"  maxlength="100" autocomplete="false">
        </div>
      </div>
      <div class="newbox">
        <div class="form-group">
          <label for="text">Email*</label>
          <input type="email" name ="email" class="form-control" autocomplete="false" required>
        </div>
        <div class="form-group">
          <label for="text">Shipping Address*</label>
          <input type="text" name ="address" class="form-control" maxlength="200" autocomplete="false" required>
        </div>
        <div class="form-group">
          <label for="text">Phone no* (03001234567)</label>
          <input type="tel" name ="phone" class="form-control" placeholder="Mobile Number" pattern=".{11,}"  maxlength="15" autocomplete="false" required>
        </div>
        <div class="form-group">
          <label for="text">Zip Code*</label>
          <input type="number" name ="zip" class="form-control" autocomplete="false" required>
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
        <div class="form-group">
          <label for="text">Addional Note</label>
          <textarea name ="note" class="form-control" maxlength="500" autocomplete="false" rows="9"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input type="checkbox" id="myCheck"  name="check" onclick="myFunction()">
          Create as Account?
          <div id="text" style="display:none">
            <div class="form-group">
              <label for="text">Password* (Minimum 8 characters)</label>
              <input type="password" name="password" class="form-control" pattern=".{8,}" maxlength="36" autocomplete="new-password">
            </div>
            <div class="form-group">
              <label for="text">Confirm Password* (Minimum 8 characters)</label>
              <input type="password" name="confirm" class="form-control" pattern=".{8,}" maxlength="36" autocomplete="new-password">
            </div>
          </div>
        </div>
      </div>
      <div class="checkbox">
        <button type="submit" class="btn btn-default btn1">Proceed to Checkout</button>
      </div>
      <br>
    </div>
    </div>
  </form>
</div>
</div>
@endsection