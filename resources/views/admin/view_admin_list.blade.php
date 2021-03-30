@extends('admin.layout.appadmin')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Admins List
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-warning table-responsive">
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Permissions</th>
                          <th>More Options</th>
                        </tr>
                      </thead>


                      <tbody>

                          @if($result>0)
                          @foreach($result as $results)
                          <tr>
                         
                            <td>{{$results->fname}} {{$results->lname}}</td>
                            <td>
                          @if($results->admin_management==1)
                          <span class="label label-warning">Admin Management</span>
                            @endif
                          @if($results->product_management==1)
                            <span class="label label-success">Product Management</span>
                            @endif
                            @if($results->category_management==1)
                          <span class="label label-primary">Category Management</span>
                          @endif
                          
                           @if($results->brand_management==1)
                          <span class="label label-warning">Brand anagemen</span>
                            @endif
                          @if($results->order_management==1)
                            <span class="label label-success">Order Management</span>
                            @endif
                            @if($results->reporting==1)
                          <span class="label label-primary">Reporting</span>
                          @endif
                          
                           @if($results->discount==1)
                          <span class="label label-warning">Discount</span>
                            @endif
                          @if($results->promocode==1)
                            <span class="label label-success">Promocode</span>
                            @endif
                            @if($results->vendor_management==1)
                          <span class="label label-primary">Vendor Management</span>
                          @endif
                        </td>
                          <td><a href="{{URL('/')}}/admin/home/view/admin/{{$results->pk_id}}">View</a></td>
                         
                        </tr>
                        
                        
                          @endforeach
                          @endif
                      

                        
                      </tbody>
                    </table><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      @endsection