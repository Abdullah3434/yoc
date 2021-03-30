@extends('admin.layout.appadmin')
@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Complete Order </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-12"> 
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row">
              <div class="productbox">
                <div class=" col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div itemscope="">
                            <h2> <span itemprop="name">Order</span></h2>
                            <p itemprop="email">Order ID</p>
                            <p itemprop="email"> Customer Name</p>
                            <p itemprop="email">Email</p>
                            <p itemprop="email">Total Price</p>
                            <p itemprop="email">Promo Price</p>
                            <p>Payment Method</p>
                            <p>Shipment Address</p>
                            <p>City</p>
                            <p>Status</p>
                            <p>Phone NO</p>
                          </div>
                        </div>
                        @if($result>0)
                        @foreach($result as $results)
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
                            <p>{{$results->city}}</p>
                            <p>Complete</p>
                            <p>{{$results->phone}}</p>
                          </div>
                        </div>
                        @endforeach
                        @endif </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
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
                              <th>Percentage</th>
                              <th> Size</th>
                              <th>Quantity</th>
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
                            @if($results->percentage > 0)
                            <td>{{$results->percentage}}%</td>
                            @else
                            <td></td>
                            @endif
                            <td>{{$results->size}}</td>
                            <td>{{$results->quantity}}</td>
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
          <!-- /.box --> 
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    </div>
  </section>
</div>
@endsection