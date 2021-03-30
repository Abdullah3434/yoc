@extends('vendor.layout.appvendor')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporting by Products
      </h1>
              </section>

    <!-- Main content -->
    <section class="content">

        <h1>
            Total Revenue {{$total}}
          </h1>
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
        
                <table id="example1" class="table no-margin">
                  <thead>
                    <tr>
                        <th>SKU</th>
                      <th>ORDER ID</th>
                      <th>Quantity</th>
                  <th>Total Price</th>
                      <th>Discounted Price</th>
                        <th>Discount</th>
                      <th>Size</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                        @if(count($result)>0)
                        @foreach($result as $results )
                        <tr>          
                          <td>{{$results->sku}}</td>
                          <td>{{$results->order_id}}</td>
                          <td>{{$results->quantity}}</td>
                              <td>{{$results->price}}</td>
                             <td>{{$results->discount_price}}</td>
                             @if($results->percentage > 0)
                                <td>{{$results->percentage}}%</td>
                                @else
                                  <td> </td>
                                  @endif
                          <td>{{$results->size}}</td>
                          
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