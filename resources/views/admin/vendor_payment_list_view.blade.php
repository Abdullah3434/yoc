@extends('admin.layout.appadmin')

@section('content')

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            
          <h1>
          Vendor Payments
          </h1>
                  </section>

        <!-- Main content -->
        <section class="content">
                <form method="post" action = "{{url('/')}}/admin/view/vendor/payment" class="login-form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
                           @if($errors->any())
                                          <div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
	@endif
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
                          <th>Vendor_ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Store Name</th>
                          <th>Total Payment</th>
                           <th>Partial Payment</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                                 @php

                        $count=0;
          
                        @endphp    
                        @if(count($result)>0)
                        @foreach($result as $results)
                        <tr>
                            
                          <td>{{$results->id}}</td>
                               
                       
                          <td>{{$results->fname}} {{$results->lname}}</td>
                          <td>{{$results->email}}</td>
                              <input name="email[]" value="{{$results->email}}" type="hidden">
                          <td>{{$results->store_name}}</td>
                 
                           <td>PKR {{number_format($results->payment)}}</td>
                                    <input name="payment[]" value="{{$results->payment}}" type="hidden">
                           
             <td> <input type="text" id="Quantity" name="partial_payments[]" class="form-control input-sm chat-input" placeholder="0"   />
            </td>
                    <td>

            
						  <div class="checkbox">

              
              <label><input type="checkbox" name="checkbox[]" value="{{$count}}"></label>
            
							</div>
						  </td>
                      
                        </tr>
                            @php
                        $count++;
                        @endphp
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
          	  <button type="submit" class="btn btn-default pull-right">Create Payments</button>
          	  </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     @endsection