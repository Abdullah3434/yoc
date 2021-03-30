
@extends('admin.layout.appadmin')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="bgg">
		<div class="row">
        	<div class="col-lg-12">
            	<div class="salogan">
                	<h3 style="color:#ab0f23;">Admin Profile</h3>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content" id="content">
          <div class="row">
        <div class=" col-lg-offset-3 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        <h2> <span itemprop="name">Name</span></h2>
                                        <p itemprop="email">Email</p>
                                        <p><span itemprop="affiliation">Permissions</span></p>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        <h2> <span itemprop="name">{{$result[0]->fname}} {{$result[0]->lname}}</span></h2>
                                        <p itemprop="email">{{$result[0]->username}}</p>
                                        <p itemprop="jobTitle">
                                             @if($result[0]->admin_management==1)
                          <span class="label label-warning">Admin</span>
                            @endif
                          @if($result[0]->product_management==1)
                            <span class="label label-success">Product </span>
                            @endif
                            @if($result[0]->category_management==1)
                          <span class="label label-primary">Category</span>
                          @endif
                          
                           @if($result[0]->brand_management==1)
                          <span class="label label-warning">Brand </span>
                            @endif
                          @if($result[0]->order_management==1)
                            <span class="label label-success">Order Management</span>
                            @endif
                            @if($result[0]->reporting==1)
                          <span class="label label-primary">Reporting</span>
                          @endif
                          
                           @if($result[0]->discount==1)
                          <span class="label label-warning">Discount</span>
                            @endif
                          @if($result[0]->promocode==1)
                            <span class="label label-success">Promocode</span>
                            @endif
                            @if($result[0]->vendor_management==1)
                          <span class="label label-primary">Vendor Management</span>
                          @endif

                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div id="social-links" class=" col-lg-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{url('/')}}/admin/home/view/admin/edit/admin/{{$result[0]->pk_id}}" class="btn btn-social btn-block">
                                        <i class="fa fa-pencil"></i> Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="clearfix"></div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		</div>
        <!-- footer -->
      @endsection