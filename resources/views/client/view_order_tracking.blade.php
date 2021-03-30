@extends('client.layout.app')
@section('content') 
<script>
  var OrgID=-1;
    function getId(id)
    {
  
      
     OrgID = id;
     return true;
    }
    function getreal()
    {
      alert(OrgID);
      
     
    }
</script>
<div id="breadcrumb">
<div class="section"> 
  <!-- container -->
  <div class="container"> 
    <!-- row -->
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
      <div class="wrappers">
        <div id="login-form" class="form">
          <h3 class="text-center content-header pt-20 pb-20">Order Detail</h3>
          <div class="x_panel" style="border:0px">
            <div class="member-left-side"> @if(count($ordertracking)>0)
              <div class="member-email clearfix"> <b>Order ID</b> <span>{{$ordertracking[0]->pk_id}}</span> </div>
              <div class="member-email clearfix"> <b>Customer Name</b> <span>{{$ordertracking[0]->fname}} {{$ordertracking[0]->lname}}</span> </div>
              <div class="member-email clearfix"> <b>Total Price</b> <span>PKR {{number_format($ordertracking[0]->amount)}}</span> </div>
              <div class="member-email clearfix"> <b>Payment Method</b> <span>Cash On Delivery </span> </div>
              @if($ordertracking[0]->status == 0)
              <div class="member-email clearfix"> <b>Status</b> <span>Shipped</span> </div>
              @elseif($ordertracking[0]->status == 1)
              <div class="member-email clearfix"> <b>Status</b> <span>In progress</span> </div>
              @elseif($ordertracking[0]->status == 3)
              <div class="member-email clearfix"> <b>Status</b> <span>Return</span> </div>
              @elseif($ordertracking[0]->status == 2)
              <div class="member-email clearfix"> <b>Status</b> <span>Cancel</span> </div>
              @else
              <div class="member-email clearfix"> <b>Status</b> <span>Delivered</span> </div>
              @endif
              @endif
              @if(count($ad)>0)
              <div class="member-email clearfix"> <b>Phone No</b> <span>{{$ad[0]->phone}}</span> </div>
              <div class="member-email clearfix"> <b>Shipment Address </b> <span>{{$ad[0]->address}}</span> </div>
              @endif </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /row --> 
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
<div class="section"> 
  <!-- container -->
  <div class="container"> 
    <!-- row -->
    <div class="content-wrapper"> 
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h3> View Order </h3>
      </section>
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <table class="table">
            <thead>
              <tr>
                <th>Images</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Unit Price</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            
            @if(count($orderdetail)>0)
            @foreach($orderdetail as $results)
            <tr>
              <td style="width:10%;"></td>
              <td>{{$results->product_name}}</td>
              <td>{{$results->quantity}}</td>
              <input name="quantity" type="hidden" value="{{$results->quantity}}" >
              <td>{{$results->size}}</td>
              <input name="size" type="hidden" value="{{$results->size}}" >
              <td><strong>PKR {{number_format($results->price)}}</strong></td>
              <td><strong>PKR {{number_format($results->quantity * $results->price)}} </strong></td>
              @if($results->v_order_status == 2)
              <td><span class="label label-danger">Cancelled</span></td>
              @elseif($results->v_order_status == 3)
              <td><span class="label label-danger">Returned</span></td>
              @elseif(count($button)> 0 and $results->v_order_status == 4)
              <td><button  type="button" class="btn btn-default"   onclick="getId(this.id)"  data-toggle="modal" data-target="#myModal{{$results->order_id}}">Return</button></td>
                 @else
            <td disable>Canceled</td>
              @endif </tr>
            
            <!-- Modal -->
  <div class="modal fade" id="myModal{{$results->order_id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation Message</h4>
        </div>
        <input type= " text"  name="reason"  id="">
        <form method="post" action = "{{url('/')}}/cancel_active_order/{{$results->order_id}}">
                            {{ csrf_field() }}
        <div class="modal-body">
       <input type="text" name="reason" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" >submit</button>
         
        </div>
        </form>
      </div>
      
    </div>
  </div>







<!-- Modal -->
<div class="modal fade" id="myModal2{{$results->order_id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation Message</h4>
        </div>
        <div class="modal-body">
          <p>You are about to delete <b><i class="title"></i></b> record, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <a href="{{URL('/')}}/customer-cancel-active-order/{{$results->order_id}}" class="btn btn-danger">Yes</a>
        </div>
      </div>
      
    </div>
  </div>








            @endforeach
            @endif
              </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif

@endsection