@extends('admin.layout.appadmin')

@section('content')

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Approved Vendor Products
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
                 
             
                    <table id="example1" class="table no-margin">
                      <thead>
                        <tr>
                          <th>SKU</th>
                          <th>Product Name</th>
                          <th>Vendor Email</th>
                          <th>price</th>
                          <th>categoty</th>
                          <th>Status</th>
                          <th> Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($result)>0)
                        @foreach($result as $results)
                        <tr>
                          <td>{{$results->sku}}</td>
                       
                          <td>{{$results->name}}</td>
                          <td>{{$results->vendor_id}}</td>
                 
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">PKR {{number_format($results->price)}}</div></td>
                          <td>{{$results->category}}</td>
                        
                          <td><span class="label label-primary">Approved</span></td>
                          <td><a href="{{url('/')}}/admin/home/view/approved/products/view/detail/product/{{$results->pk_id}}">View</a></td>
                          
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