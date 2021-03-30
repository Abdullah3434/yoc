@extends('client.layout.app')
@section('content')
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 co-xs-12 col-lg-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"> 1: YOUR EMAIL &nbsp;&nbsp;&nbsp;&nbsp; {{session()->get('email')}} </h3>
        </div>
        <div class="panel-heading">
          <h3 class="panel-title"> 2: YOUR ADDRESS   &nbsp;&nbsp;&nbsp;&nbsp; {{session()->get('fname')}} {{session()->get('lname')}} : {{session()->get('phone')}} :
            {{session()->get('address')}} , {{session()->get('city')}} </h3>
        </div>
        <div class="panel-heading">
          <h3 class="panel-title"> 3:ORDER SUMMERY </h3>
        </div>
        @if(Session::has('cart'))
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">Image</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Size</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-center">Unit Price</th>
                  <th class="text-center">Amount</th>
                </tr>
              </thead>
              @foreach($products as $product)
              <tbody>
                <tr>
                  <td class="col-sm-1 col-md-1 text-center"><div class="media" style="text-align: -webkit-center;"> <img class="media-object" src="{{URL('/')}}/storage/images/{{$product['item']->thumbnail}}" style="width: 72px; height: 72px;"> </div></td>
                  <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['item']->name}}</strong></td>
                  <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['size']}}</strong></td>
                  <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['qty']}}</strong></td>
                  <td class="col-sm-1 col-md-1 text-center"><strong>PKR {{number_format($product['item']->price)}} 
                    @if($product['save']>0) saving -{{number_format($product['save'])}}@endif</strong></td>
                  <td class="col-sm-1 col-md-1 text-center"><strong>PKR {{number_format($product['price'])}}</strong></td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 co-xs-12 pull-right">
              <table class="table">
                <tbody>
                    <tr>
            <!--            <td>-->
            <!--              @if(session()->get('city') =='Lahore')-->
            <!--<strong>200 Delivery charges added</strong>-->
            <!--@else-->
            <!--<strong>250 Delivery charges added</strong>-->
            <!--@endif-->
            <!--          </td>-->
                    </tr>
                  <tr>
                      
                    <td style="border-top: 0px;"><h4>Total Amount</h4></td>
                    <td style="border-top: 0px;"><h4>PKR {{number_format($totalPrice)}}</h4></td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <tbody>
                  <tr>
                    <td style="border-top: 0px;"><a href="{{url('/')}}/cart/guest/checkout/address/view/order/complete/order" class="btn btn-default pull-right">Complete Checkout</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        @endif
        <div class="panel-heading panelhead">
          <h3 class="panel-title"> 4: PAYMENT </h3>
        </div>
      </div>
      <br/>
    </div>
  </div>
</div>
</body>
@endsection