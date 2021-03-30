@extends('admin.layout.appadmin')
@section('content')

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Vendor view
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
  @if($result>0)
  @foreach($result as $results)
  <div class="row">
                 <div class="productbox">
        <div class=" col-md-6">
            <div class="panel panel-default">
                            <h3 style="color:#ab0f23; text-align:center;"><strong>Personal Information</strong></h3>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                   
                            <div class="col-sm-6 col-md-6 col-lg-6">
                            
                                    <div itemscope="">
                                        <h2> <span itemprop="name"></span></h2>
                                        <p>Name</p>
                                        <p>Store Name</p>
                                        <p>Email</p>
                                        <p>Phone</p>
                                        <p>City</p>
                                        <p>Zip Code</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                    	<h2><span></span></h2>
                                    		
                                    	@if($results->fname == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->fname}} {{$results->lname}}</p>
                                        	@endif
                                    	@if($results->store_name == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->store_name}}</p>
                                        	@endif
                                    	@if($results->email == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->email}}</p>
                                        	@endif
                                    	@if($results->phone == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->phone}}</p>
                                        	@endif
                                    	@if($results->city == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->city}}</p>
                                        	@endif
                                    	@if($results->zip_code == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->zip_code}}</p>
                                        	@endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-6">
        <div class="panel panel-default">
            <h3 style="text-align:center; color:#ab0f23;"><strong>Business Information</strong></h3>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        <h2> <span itemprop="name"></span></h2>
                                        <p>CNIC</p>
                                        <p>Bank Account Title</p>
                                        <p>Bank Account Number</p>
                                        <p>Bank Name</p>
                                         <p>Branch Code</p>
                                        <p>Address</p>
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                    	<h2><span></span></h2>
                                    	@if($results->cnic == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->cnic}}</p>
                                        @endif
                                    	@if($results->bank_title == "")
                                    	 <p>...</p>
                                    	@else
                                        
                                        <p>{{$results->bank_title}}</p>
                                        @endif
                                    	@if($results->account_number == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->account_number}}</p>
                                        @endif
                                    	@if($results->bank_name == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->bank_name}}</p>
                                        @endif
                                    	@if($results->bank_code == "")
                                    	 <p>...</p>
                                    	@else
                                        <p>{{$results->bank_code}}</p>
                                        @endif
                                        
                                    	@if($results->address == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->address}}</p>
                                    	@endif
                                    </div>
                                </div>
                                <h4 style="color:#ab0f23; text-align:left;">Cheque Copy</h4>
             					<h5>Image</h5>
             					<img src="{{URL('/')}}/storage/images/{{$results->cheque_copy}}" class="img-rounded" alt="Cinque Terre" style="width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <br><br>
            
            
        </div>
       
    </div>
    </div>
    @endforeach
    @endif
                    <!-- /.table-responsive -->
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