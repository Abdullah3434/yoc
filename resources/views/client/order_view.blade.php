@extends('client.layout.app')
@section('content')
<body>
<div class="container">
  <div class="row"> @if($errors->any())
    <div class="danger">
      <p><strong></strong>{{$errors->first()}}</p>
    </div>
    @endif
    @if(Session::has('message'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ Session::get('message') }}</strong> </div>
    @endif
    <div class="col-lg-8 col-md-12 col-sm-12 col-lg-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"> 1: YOUR EMAIL &nbsp;&nbsp;&nbsp;&nbsp; {{session::get('username')}} </h3>
        </div>
        @if(count($result1)>0)
        @foreach($result1 as $results)
        <div class="panel-heading">
          <h3 class="panel-title"> 2: YOUR ADDRESS   &nbsp;&nbsp;&nbsp;&nbsp; {{$results->fname}} {{$results->lname}} : {{$results->phone}} :
            {{$results->address}} , {{$results->city}} </h3>
        </div>
        @endforeach
        @endif
        <div class="panel-heading">
          <h3 class="panel-title"> 3:ORDER SUMMARY </h3>
        </div>
        @if(Session::has('cart'))
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Category</th>
                <th>Unit Price</th>
                <th>Item Total</th>
                <th>Total Saving</th>
                <th>Total Amount</th>
                <th>Promo Code</th>
              </tr>
            </thead>
            @foreach($products as $product)
            <tbody>
              <tr>
                <td style="width:15%;"><img src="{{URL('/')}}/storage/images/{{$product['item']->thumbnail}}" alt="pic" style="width:100%;"></td>
                <td>{{$product['item']->name}}</td>
                <td>{{$product['qty']}} </td>
                <td>{{$product['size']}}</td>
                <td>{{$product['sub_cat']}}</td>
                <td>PKR {{number_format($product['item']->price)}}</td>
                <td>@if($product['save']>0) saving -{{$product['save']}}@endif</td>
                <td>PKR {{number_format($product['price'])}}</td>
                <td><form method="post" action = "{{url('/')}}/cart/checkout/address/view/order/complete/order/add/promo/{{$product['sub_cat']}}/{{($product['price'])}}">
                    {{ csrf_field() }}
                    <div class="panel-body">
                      <input class="form-control" id="id_address_line_1" name="promo"  type="text"/>
                      <br>
                      <button type="submit" name = "submit" class="btn cnfmorder">Add Promo Code</button>
                    </div>
                  </form></td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
            <table class="table">
              <tbody>
             
              @if(Session::has('promoPrice') )
              <tr> 
              <td><h4>Your discounted price is PKR {{number_format(Session::get('promoPrice'))}}</h4></td>
              </tr>
              @endif
              <tr>
                <td style="border-top: 0px;"><h4>Sub Total</h4></td>
                <td style="border-top: 0px;"><h4>PKR {{number_format($totalPrice)}}</h4></td>
              </tr>
              @if(Session::has('pro') >0)
              <tr>
                <td style="border-top: 0px;"><h4>Net Total</h4></td>
                <td style="border-top: 0px;"><h4>PKR {{number_format(Session::get('pro'))}} </h4></td>
              </tr>
              @else
              <tr>
                <td style="border-top: 0px;"><h4>Promo Price</h4></td>
                <td style="border-top: 0px;"><h4>PKR {{number_format(Session::get('promoPrice'))}} </h4></td>
              </tr>
              @endif
                </tbody>
              
            </table>
            <table class="table">
              <tbody>
                <tr> @if(count($result1)>0)
                  @foreach($result1 as $results) <a href="{{url('/')}}/cart/checkout/address/view/order/complete/order/{{$results->pk_id}}" class="btn btn-default pull-right">Complete Checkout</a> @endforeach
                  @endif </tr>
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