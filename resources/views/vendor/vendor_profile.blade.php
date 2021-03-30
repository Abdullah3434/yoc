@extends('vendor.layout.appvendor')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Vendor Detail
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
                        
                 <div class="productbox">
        <div class=" col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        <h2> <span itemprop="name">Name</span></h2>
                                        <p itemprop="email">Store Name</p>
                                        <p itemprop="email">Phone</p>
                                        <p>City</p>
                                        <p>Email</p>
                                        <p>Store Address</p>
                                        <p>CNIC</p>
                                        <p>Bank Title</p>
                                        <p>Bank Name</p>
                                        <p>Account Number</p>
                                        <p>Bank Code</p>
                                        <p>Zip Code</p>
                                        <p>NTN</p>
                                        <p>STN</p>
                                        <p>Dealing Person Name</p>
                                        <p>Dealing Person Phone#</p>
                                        <p>Cheque Copy</p>
                                    </div>
                                </div>
                                @if($result>0)
                                @foreach($result as $results)
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        @if($results->fname == "")
                                        
                                    	<h2> <span>....</span></h2>
                                        	@else
                                    	<h2> <span>{{$results->fname}} {{$results->lname}}</span></h2>
                                    	@endif
                                    	
                                    @if($results->store_name == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->store_name}}</p>
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
                                    	
                                    	@if($results->email == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->email}}</p>
                                    	@endif
                                    	@if($results->address == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->address}}</p>
                                    	@endif
                                    	
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
                                    	
                                    	@if($results->bank_name == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->bank_name}}</p>
                                    	@endif
                                    	@if($results->account_number == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->account_number}}</p>
                                    	@endif
                                    	@if($results->bank_code == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->bank_code}}</p>
                                    	@endif
                                    	@if($results->zip_code == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->zip_code}}</p>
                                    	@endif
                                    
                                    	@if($results->NTN == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->NTN}}</p>
                                    	@endif
                                    	@if($results->STN == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->STN}}</p>
                                    	@endif
                                    	@if($results->dealing_person == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->dealing_person}}</p>
                                    	@endif
                                    	@if($results->d_p_phone == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->d_p_phone}}</p>
                                    	@endif
                                    		@if($results->cheque_copy == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p><img src="{{URL('/')}}/storage/images/{{$results->cheque_copy}}" alt="" style="width:100%"></p>
                                    	@endif
                                    </div>
                                </div>
                                
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{URL('/')}}/vendor/profile/edit/{{Session::get('id')}}" class="btn btn-block btn-lg regbtn">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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