@extends('client.layout.app')
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 col-lg-offset-2">
      <div class="panel panel-default pnel">
        <div class="panel-heading" style="border-bottom:none;">
          <h3 class="panel-title" > 1: YOUR EMAIL &nbsp;&nbsp;&nbsp;&nbsp; {{session()->get('email')}} </h3>
        </div>
        <div class="panel-heading" style="border-bottom:none;">
          <h3 class="panel-title"> 2: YOUR ADDRESS :  &nbsp;&nbsp;&nbsp;&nbsp; {{session()->get('fname')}} {{session()->get('lname')}} : {{session()->get('phone')}} :
            {{session()->get('address')}} , {{session()->get('city')}} </h3>
        </div>
        <div class="panel-heading" style="border-bottom:none;">
          <h3 class="panel-title"> 3:TOTAL PAYMENT:  &nbsp;&nbsp;&nbsp;&nbsp; @if(Session::has('cart'))<strong>PKR {{number_format($totalPrice)}}</strong> @endif</h3>
        </div>
        <div class="panel-heading" style="border-bottom:none;">
          <h3 class="panel-title"> 4: PAYMENT </h3>
        </div>
        <form method="post" action ="{{url('/')}}/cart/guest/checkout/address/view/order/complete/order">
          {{ csrf_field() }}
          <div class="payment">
            <div class="col-lg-12 col-md-5 col-sm-8  bhoechie-tab-container">
              <div class="col-lg-3 col-md-3 col-sm-3  bhoechie-tab-menu">
                <div class="list-group"> <a href="#" class="list-group-item text-center active">
                  <h4 class="fa fa-dollar  active"></h4>
                  <br>
                  Cash on delivery </a> </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab"> 
                <div class="bhoechie-tab-content active">
                  <p class="textwrite">Pay in cash to the courier at the time of the delivery<br>
                    Please keep exact change for the courier company</p>
                  <button type="submit" name = "submit" class="btn cnfmorder">Confirm Order</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <br/>
    </div>
  </div>
</div>
@endsection 