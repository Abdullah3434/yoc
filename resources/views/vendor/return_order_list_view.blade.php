@extends('vendor.layout.appvendor')

@section('content')

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Return Orders
          </h1>
                  </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">			 
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border table-responsive">
                  
                <div class="box-body">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                      
                          <!-- Modal content-->
            
                      
                        </div>
                      </div>
                    <table id="example1" class="table no-margin">
                      <thead>
                        <tr>
                          <th>O_ID</th>
                      
                        <th>Total Price</th>
                      <th>Discounted Price</th>
                        <th>Discount</th>
                          <th>Quantity</th>
             
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($result)>0)
                        @foreach($result as $results)
                        <tr>
                          <td>{{$results->order_id}}</td>
                       
              
                 
                                <td>{{$results->price}}</td>
                             <td>{{$results->discount_price}}</td>
                             @if($results->percentage > 0)
                                <td>{{$results->percentage}}%</td>
                                @else
                                  <td> </td>
                                  @endif
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{$results->quantity}}</div></td>
                         
                 
                     
                          <td><span class="label label-primary" >Return</span></td>
                     
                          <td><a href="{{url('/')}}/vendor/home/view/return/order/view/specific/order/{{$results->product_id}}/{{$results->order_id}}">View</a></td>
                          
                        </tr>
                        @endforeach
                        @endif
                
                 
              
                      </tbody>
                    </table><!-- /.table-responsive -->
                </div><!-- /.box-body -->
               
                </div><!-- /.box-header -->
                <!-- /.box-footer -->
                <!-- /.box-footer add button next/previus
                
                
                
                
                 -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     @endsection