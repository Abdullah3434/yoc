@extends('admin.layout.appadmin')
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
                      <th>Size</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                        @if(count($result)>0)
                        @foreach($result as $results )
                           @php
                        $a = $results->order_id;
                             $result1 = DB::select("select * from order_table where pk_id = '$a' and status = '4'");
                        @endphp
                         @if(count($result1)>0)
                  
                        <tr>          
                          <td>{{$results->sku}}</td>
                          <td>{{$results->order_id}}</td>
                          <td>{{$results->quantity}}</td>
                          <td>PKR {{$results->price}}</td>
                          @if($results->discount_price == "")
                           <td></td>
                          @else
                               <td>PKR {{$results->discount_price}}</td>
                               @endif
                          <td>{{$results->size}}</td>
                          
                        </tr>
                        @endif
                          
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