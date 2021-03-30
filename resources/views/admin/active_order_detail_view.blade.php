@extends('admin.layout.appadmin') 
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
@section('content') 
<div class="content-wrapper"> 
  <section class="content-header">
    <h1> View Order </h1>
  </section>
  <section class="content">
    <div class="row"> 
      <div class="col-md-12"> 
        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row">
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog"> 
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Status Change</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Update Status</label>
                        <select id="status" name="status" class="form-control">
                          <option>Select status</option>
                          <option value="1">Shipped</option>
                          <option value="2">Canceled</option>
                          <option value="3">Returned</option>
                          <option value="4">Delivered</option>
                        </select>
                      </div>
                      <button id="b1" type="button" class="btn btn-submmit">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="productbox">
                <div class=" col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div itemscope="">
                            <h2> <span itemprop="name">Order</span></h2>
                            <p >Order ID</p>
                            <p > Customer Name</p>
                            <p > Email</p>
                            <p >Amount</p>
                            <p>Promo Price</p>
                            <p>Payment Method</p>
                            <p>Shipment Address</p>
                            <p>City</p>
                            <p>Phone NO</p>
                          </div>
                        </div>
                        @if($result>0)
                        @foreach($result as $results)
                        <div class="col-xs-6  col-sm-6 col-md-6 col-lg-6">
                          <div itemscope="">
                            <h2> <span>Detail</span></h2>
                            <p>{{$results->pk_id}}</p>
                            <p>{{$results->fname}} {{$results->lname}}</p>
                            <p>{{$results->username}}</p>
                            <p>PKR {{number_format($results->amount)}}</p>
                            @if($results->promo_amount == "")
                            <p>...</p>
                            @else
                            <p>PKR {{number_format($results->promo_amount)}}</p>
                            @endif
                            <p>Cash on Delivery</p>
                            <p>{{$results->address}}</p>
                            @if($results->city == "")
                            <p>...</p>
                            @else
                            <p>{{$results->city}}</p>
                            @endif
                            <p>{{$results->phone}}</p>
                          </div>
                        </div>
                        @endforeach
                        @endif </div>
                    </div>
                  </div>
                </div>
                <div class=" col-md-12">
                  <div class="box box-info">
                    <div class="box-header with-border table-responsive">
                      <div class="box-body">
                        <table id="example1" class="table no-margin">
                          <thead>
                            <tr>
                              <th>SKU</th>
                              <th>Product Name</th>
                              <th>Product Image</th>
                              <th>Total Price</th>
                              <th>Discounted Price</th>
                              <th>Size</th>
                              <th>Quantity</th>
                              <th>vendor_ID</th>
                              <th>Status</th>
                              <th>Rapid Courirrer Status</th>
                            </tr>
                          </thead>
                          <tbody>
                          
                          @if(count($result1)>0)
                          @foreach($result1 as $results)
                          <tr>
                            <td>{{$results->sku}}</td>
                            <td>{{$results->product_name}}</td>
                            <td><img src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" alt="your image"  style="    width: 135px;"/></td>
                            <td>PKR {{number_format($results->price)}}</td>
                            <td>PKR {{number_format($results->discount_price)}}</td>
                            <td>{{$results->size}}</td>
                            <td>{{$results->quantity}}</td>
                            <td>{{$results->vendor_id}}</td>
                            @if($results->v_order_status == 0)
                            <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-info" data-toggle="modal" data-target="#myModal">In progress</span></td>
                            @elseif($results->v_order_status ==1 )
                            <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">shipped</span></td>
                            @elseif($results->v_order_status ==2 )
                            <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-danger" data-toggle="modal" data-target="#myModal">Canceled</span></td>
                            @elseif($results->v_order_status ==3 )
                            <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">Returned</span></td>
                            @elseif($results->v_order_status ==4 )
                            <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-success" data-toggle="modal" data-target="#myModal">Delivered</span></td>
                            @endif
                            
                            <td>{{$response}}</td>
                            
                            </tr>
                          @endforeach
                          @endif
                            </tbody>
                          
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection