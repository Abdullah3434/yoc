@extends('client.layout.app')
@section('content') 
<!-- /NAVIGATION --> 

<!-- BREADCRUMB -->
<div id="breadcrumb">
<div class="section"> 
  <div class="container"> 
    <div class="content-wrapper"> 
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h3> Order Tracking </h3>
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
    </div>
    <div class="wrappers" style="margin:0 auto; width:70%;">
      <div class="row">
        <form method="post" action = "{{url('/')}}/order/tracking" class="login100-form validate-form ">
          {{ csrf_field() }}
          @if($errors->any())
          <div class="alert alert-danger"> <strong>Danger!</strong> {{$errors->first()}} </div>
          @endif
          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="boxcheck1">
              <div class="form-group">
                <label for="text">Order ID</label>
                <input type="text" name ="orderid" class="form-control" pattern="[a-zA-Z0-9\s]+" maxlength="20" required  >
              </div>
            </div>
            <div class="newbox">
              <div class="checkbox">
                <button type="submit" class="btn btn-default btn1">Search</button>
              </div>
              <br>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<div class="section"> 
  <!-- container -->
  <div class="container"> 
    <!-- row -->
    <div class="content-wrapper"> 
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h3> </h3>
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
    </div>
  </div>
</div>
@if(count($orderdetail)>0)
@foreach($orderdetail as $results)

@php 
$order_id =   $results->pk_id; 

$orderdetailed = DB::select("select* from detail_table where order_id = '$order_id' ");

@endphp
<div class="section"> 
  <!-- container -->
  <div class="container"> 
    <!-- row -->
    <div class="content-wrapper"> 
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-lg-6">
            <h3> View Orders <a href="{{url('/')}}/order/tracking/detail/{{$results->pk_id}}">{{$results->pk_id}}</a> </h3>
          </div>
          <div class="col-lg-6">
            <table class="table">
              <tbody>
                <tr>
                  <td><h3>Amount</h3></td>
                  <td class="text-right"><h3><strong>PKR {{number_format($results->amount)}} </strong></h3></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <table class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Unit Price</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            
            @if(count($orderdetailed)>0)
            @foreach($orderdetailed as $results)
            <tr> 
              <td>{{$results->product_name}}</td>
              <td>{{$results->quantity}}</td>
              <td>{{$results->size}}</td>
              <td><strong> PKR {{number_format($results->price)}}</strong></td>
              <td><strong> PKR {{number_format($results->quantity * $results->price)}} </strong></td>
            </tr>
            @endforeach
            @endif
              </tbody>
            
          </table>
        </div>
      </div>
      <div class="content-wrapper"> 
        <section class="content-header">
          <h3> </h3>
        </section>
        <table class="nDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 5px;border-top-style: solid;border-top-color: #ed6c71;">
          <tbody>
            <tr>
              <td><span></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif
@endsection