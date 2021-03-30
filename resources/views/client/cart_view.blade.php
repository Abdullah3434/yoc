 @extends('client.layout.app')
@section('content')
<div class="container" style="margin-top:25px;"> @if(Session::has('cart'))
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead style="background-color:#f6f6f6;">
            <tr>
              <th class="text-center"></th>
              <th class="text-center">Images</th>
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
              <td class="col-md-1" style="text-align: -webkit-center;"><a href="{{URL('/')}}/delete/carts/{{$product['item']->pk_id}}/{{$product['size']}}/{{$product['qty']}}">
                <button type="button" class="btn btn-cart" style="text-align: -webkit-center;;margin-top:25px;"> <span class="glyphicon glyphicon-remove"></span> Remove </button>
                </a></td>
              <td class="col-sm-1 col-md-1"><div class="media" style="text-align: -webkit-center;"> <img class="media-object" src="{{URL('/')}}/storage/images/{{$product['item']->thumbnail}}" style="width: 72px; height: 72px;"> </div></td>
              <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['item']->name}}</strong></td>
              <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['size']}}</strong></td>
              <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['qty']}}</strong></td>
              <td class="col-sm-1 col-md-1 text-center"><strong>PKR {{number_format($product['item']->price)}} 
                @if(number_format($product['save'])>0) saving -{{number_format($product['save'])}}@endif</strong></td>
              <td class="col-sm-1 col-md-1 text-center"><strong>PKR {{number_format($product['price'])}}</strong></td>
            
            
            
            
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 col-lg-offset-7">
      <table class="table table-bordered">
        <label style="color:#ed6c71;">Subtotal</label>
        <tr>
          <td><h5>Subtotal</h5></td>
          <td class="text-right"><h5><strong>PKR {{number_format($totalPrice)}}</strong></h5></td>
        </tr>
        <tr>
          <td><h5>Total Amount</h5></td>
          <td class="text-right"><h5><strong>PKR {{number_format($totalPrice)}}</strong></h5></td>
        </tr>
        <tr> </tr>
      </table>
      @if(Session::has('username')) <a href="{{url('/')}}/cart/checkout">
      <button  type="button" class="btn btn-default" style="margin-bottom:20px;"> <span class="glyphicon glyphicon-shopping-cart"></span>Proceed To Checkout </button>
      </a> @else <a href="{{url('/')}}/cart/guest/checkout">
      <button  type="button" class="btn btn-default" style="margin-bottom:20px;"> <span class="glyphicon glyphicon-shopping-cart"></span>Proceed To Checkout </button>
      </a> @endif </div>
  </div>
  @else
  <div class="jumbotron">
    <div class="heading">
      <h1>Cart is empty</h1>
    </div>
  </div>
  @endif </div>
@endsection
