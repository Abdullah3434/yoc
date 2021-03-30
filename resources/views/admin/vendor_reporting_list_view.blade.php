@extends('admin.layout.appadmin')

@section('content')

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Vendors Reporting
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
                          <th>Vendor_id</th>
                      
                          <th>Name</th>
                          <th>Email</th>
                          <th>Store Name</th>
                          <th>Phone</th>
                          <th>Total earned</th>
                  
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($result)>0)
                        @foreach($result as $results)
                        <tr>
                          <td>{{$results->id}}</td>
                          <td>{{$results->fname}} {{$results->lname}}</td>
                          <td>{{$results->email}}</td>
                          <td>{{$results->store_name}}</td>
                          <td>{{$results->phone}}</td>
                                    <td>PKR {{number_format($results->total_earned)}}</td>
              
                  
                          
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