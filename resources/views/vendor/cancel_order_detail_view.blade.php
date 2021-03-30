@extends('vendor.layout.appvendor')

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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Detail Order
          </h1>
                  </section>
                  <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                
                 
                 
                 <div class="row">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                      
                          <!-- Modal content-->
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
                                        <option value="0">In Progress</option>
                                        <option value="1">Shipped</option>
                                        <option value="2">Canceled</option>
                                        <option value="3">Returned</option>
                      
                              
                                  
                                    </select>
                             </div>
                             <button id="b1" type="button" class="btn btn-submmit">Submit</button>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                      
                        </div>
                      </div>
                        
                 <div class="productbox">
        <div class=" col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        <h2> <span itemprop="name">Order</span></h2>
                                        <p itemprop="email">SKU</p>
                                        <p itemprop="email">Name</p>
                                     
                                        <p>Payment Method</p>
                                        
                                    </div>
                                </div>
                                @if($result1>0)
                                @foreach($result1 as $results)
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                    	<h2> <span>Detail</span></h2>
                                    <p>{{$results->sku}}</p>
                                        <p>{{$results->product_name}}</p>
                                  
                                        <p>Cash on Delivery</p>

                                        
                                    </div>
                                </div>
                                
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table id="example1" class="table no-margin">
                <thead>
                  <tr>
                    <th>SKU</th>
                    <th>Product Name</th>
                     <th>Total Price</th>
                      <th>Discounted Price</th>
                        <th>Discount</th>
                    <th> Size</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
             
                        @if(count($result1)>0)
                        @foreach($result1 as $results)
                        <tr>
                          <td>{{$results->sku}}</td>
                       
                          <td>{{$results->product_name}}</td>

                          <td>{{$results->price}}</td>
                             <td>{{$results->discount_price}}</td>
                             @if($results->percentage > 0)
                                <td>{{$results->percentage}}%</td>
                                @else
                                  <td> </td>
                                  @endif
                          <td>{{$results->size}}</td>
                          <td>{{$results->quantity}}</td>
                          @if($results->v_order_status == 0)
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">In progress</span></td>
                          @elseif($results->v_order_status ==1 )
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">shipped</span></td>
                          @elseif($results->v_order_status ==2 )
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">Canceled</span></td>
                          @elseif($results->v_order_status ==3 )
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">Returned</span></td>
                          @elseif($results->v_order_status ==4 )
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">Delivered</span></td>
                          @endif
                         
                      
                        </tr>
                        @endforeach
                        @endif
           
        
                </tbody>
              </table>
       
    </div>
    </div>
                 
                 
                 
                 
                 
                 
                </div><!-- /.box-header -->
                
                <!-- /.box-footer -->
                <!-- /.box-footer add button next/previus
                
                
                
                
                 -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

        <!-- Main content -->
      </div><!-- /.content-wrapper -->

     @endsection