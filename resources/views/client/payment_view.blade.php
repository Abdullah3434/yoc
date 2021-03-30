@extends('client.layout.app')
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12  col-lg-offset-2">
      <form method="post" action = "{{url('/')}}/cart/checkout/address/view/order/complete/order">
        {{ csrf_field() }}
        
        @if($errors->any())
        <div class="danger">
          <p><strong></strong>{{$errors->first()}}</p>
        </div>
        @endif
        <div class="panel panel-default pnel">
          <div class="panel-heading" style="border-bottom:none;">
            <h3 class="panel-title" > 1: YOUR EMAIL &nbsp;&nbsp;&nbsp;&nbsp; {{session()->get('username')}} </h3>
          </div>
          @if(count($result)>0)
          @foreach($result as $results)
          <div class="panel-heading" style="border-bottom:none;">
            <h3 class="panel-title"> 2: YOUR ADDRESS :  &nbsp;&nbsp;&nbsp;&nbsp; {{$results->fname}} {{$results->lname}} : {{$results->phone}} :
              {{$results->address}} , {{$results->city}} </h3>
          </div>
          @endforeach
          @endif
          <div class="panel-heading" style="border-bottom:none;">
            <h3 class="panel-title"> 3:ORDER SUMMERY </h3>
          </div>
          @if(Session::has('cart'))
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
              <div class="promohead"> @if(Session::has('pro'))
                <h4><span style="color:#ed6c71;"> Total:</span> PKR{{number_format(Session::get('pro'))}}</h4>
                @elseif(Session::has('promoPrice'))
                <h4 style="font-size:22px;"><span style="color:#ed6c71;">Total Price:</span> PKR{{number_format(Session::get('promoPrice'))}} </h4>
                @else
                <h4 style="font-size:22px;"><span style="color:#ed6c71;">Total Price: PKR {{number_format($totalPrice)}}</span></h4>
                @endif </div>
            </div>
          </div>
          @endif
          <div class="panel-heading" style="border-bottom:none;">
            <h3 class="panel-title"> 4: PAYMENT </h3>
          </div>
          <div class="payment">
            <div class="col-lg-12 col-md-5 col-sm-8  bhoechie-tab-container">
              <div class="col-lg-3 col-md-3 col-sm-3  bhoechie-tab-menu">
                <div class="list-group"> <a href="#" class="list-group-item text-center active">
                  <h4 class="fa fa-dollar active"></h4>
                  <br>
                  Cash on delivery </a> </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <div class="bhoechie-tab-content active">
                  <p class="textwrite">Pay in cash to the courier at the time of the delivery <br>
                    Please keep exact change for the courier company</p>
                    @if( $balance >= $promo_price )

  <button type="submit" class="btn cnfmorder">Wallet Order</button>
  <button type="submit" class="btn cnfmorder" formaction="{{URL('/')}}/cart/checkout/address/view/order/complete/order/cod">COD Order</button>

@else
  <button type="submit" class="btn cnfmorder" formaction="{{URL('/')}}/cart/checkout/address/view/order/complete/order/cod">COD Order</button>
  <button type="submit" class="btn cnfmorder" disabled>Wallet Order</button>
@endif

                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection 