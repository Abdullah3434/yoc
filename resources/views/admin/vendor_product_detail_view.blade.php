@extends('admin.layout.appadmin')
@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Product Detail view </h1>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes -->
    <div class="row"> 
      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>
    </div>
    <!-- /.row --> 
    
    <!-- Main row -->
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-12"> 
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header with-border table-responsive">
            <div class="box-body">
              <div class="row">
                <div class="productbox"> @if(count($result)>0)
                  @foreach($result as $results)
                  <div class=" col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-sm-6 col-md-6 col-lg-6">
                                <div itemscope="">
                                  <h2> <span itemprop="name"></span></h2>
                                  <p>SKU</p>
                                  <p>Name</p>
                                  <p>Price</p>
                                  <p>Unit</p>
                                  <p>color</p>
                                  <p>Category</p>
                                  <p>Sub Category</p>
                                  <p>Product Type</p>
                                  <p>Brand Name</p>
                                  <p>Discription</p>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6 col-lg-6">
                                <div itemscope="">
                                    <h2> <span itemprop="name"></span></h2>
                                        @if($results->sku == "")
                                    	 <p>...</p>
                                    	@else
                                    	 <p>{{$results->sku}}</p>
                                    	@endif
                                    	
                                       @if($results->name == "")
                                    	 <p>...</p>
                                    	 @else
                                    	 <p>{{$results->name}}</p>
                                    	@endif
                                        
                                        @if($results->price == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->price}}</p>
                                    	@endif
                                    	
                                       
                                        @if($results->unit == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->unit}}</p>
                                    	@endif
                                       
                                        @if($results->color == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->color}}</p>
                                    	@endif
                                           
                                           @if($results->category == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->category}}</p>
                                    	@endif
                                    	
                                        @if($results->sub_category == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->sub_category}}</p>
                                    	@endif
                                                    
                                         @if($results->brand_name == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->brand_name}}</p>
                                    	@endif  
                                           
                                            @if($results->product_type == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p>{{$results->product_type}}</p>
                                    	@endif 
                                        @if($results->description == "")
                                    	 <p>...</p>
                                    	 @else
                                    	  <p >{{$results->description}}</p>
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
                    <div class=" col-md-12">
                      <label for="text">Image</label>
                    </div>
                    <div class=" col-md-4"> <img id="blah" src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail}}" alt="your image" style="width:100%; height:150px;"/> </div>
                    <div class=" col-md-4"> <img id="blah" src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail2}}" alt="your image"  style="width:100%; height:150px;"/> </div>
                    <div class=" col-md-4"> <img id="blah" src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail3}}" alt="your image"  style="width:100%; height:150px;"/> </div>
                  </div>
                  @endforeach
                  @endif 
                  <div class="col-lg-6">
            <div itemscope="">
          <div class="col-lg-6">
                                    	      <div itemscope="">
                                    	          <h4 style="text-align:left;"> <span itemprop="name">Size</span></h4>
          
                  </div>
                                    	  </div>
                                    	  <div class="col-lg-6">
                                    	      
                                    	      <div itemscope="">
                                    	          <h4 style="text-align:left;"> <span itemprop="name">QTY</span></h4>
                                    	           </div>
                                    	  </div>
      @php
      $product_id = $results->pk_id;
      $size_detail = DB::select("select * from size_detail where product_id = '$product_id' order by pk_id asc"); 
      @endphp
      
                                    	       @foreach($size_detail as $results)
                                    	  <div class="col-lg-6">
                                    	      <div itemscope="">
                                    	          <p>{{$results->size}}</p>  
                                    	          </div>
                                    	  </div>
                                    	  <div class="col-lg-6">
                                    	      
                                    	      <div itemscope="">
                                    	          <p>{{$results->quantity}}</p>
                                    	
                                    	        
                                    	          
                                    	          
                                    	          </div>
                                    	  </div>
                                    @endforeach
                                    	</div>
        </div>
                  </div>
              </div>
              <div class="row">
                <div class="productbox">
                  <div class=" col-md-6"> @if(count($result1)>0)
                    @foreach($result1 as $results)
                    <div class="panel panel-default">
                      <h3 style="text-align:center; color:#ab0f23;">Busniess Information</h3>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-sm-6 col-md-6 col-lg-6">
                                <div itemscope="">
                                  <h2> <span itemprop="name"></span></h2>
                                  <p>Full Name</p>
                                  <p> Store Name</p>
                                  <p>Email</p>
                                  <p>Phone</p>
                                  <p>City</p>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6 col-lg-6">
                                <div itemscope="">
                                  <h2><span></span></h2>
                                  <p>{{$results->fname}}  {{$results->lname}}</p>
                                  <p>{{$results->store_name}}</p>
                                  <p>{{$results->email}}</p>
                                  <p>{{$results->phone}}</p>
                                  <p>{{$results->city}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    @endif </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper --> 

@endsection