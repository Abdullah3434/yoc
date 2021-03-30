@extends('vendor.layout.appvendor')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
                  </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
        
			 <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Order</span>
                  <span class="info-box-number">{{$c}}<small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-pie-graph"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sales</span>
                  <span class="info-box-number">{{$com}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-bag"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Product</span>
                  <span class="info-box-number">{{$p}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border table-responsive">
                <div class="box-body">
                 		
  
                    <table id="example1" class="table no-margin">
                      <thead>
                        <tr>
                          <th>O_ID</th>
                          <th>Price</th>
                          <th> Date</th>
                          <th>Status</th>
                          <th> Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                    @if(count($result)>0)
                        @foreach($result as $results)
                        <tr>
                        <td>{{$results->order_id}}</td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">PKR {{number_format($results->price)}}</div></td>
                          <td>{{$results->created_at}}</td>
                          @if($results->v_order_status == 1)
                          <td><span class="label label-primary">shipped</span></td>
                          @endif
                          @if($results->v_order_status == 0)
                          <td><span class="label label-primary">In progress</span></td>
                        @endif
                          <td><a href="{{url('/')}}/vendor/home/view/active/order/view/specific/order/{{$results->product_id}}/{{$results->order_id}}">View</a></td>
                          
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