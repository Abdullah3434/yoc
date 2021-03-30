@extends('admin.layout.appadmin')
@section('content') 
<div class="content-wrapper"> 
  <section class="content-header">
    <h1> View Product </h1>
  </section>
  <section class="content"> 
    <div class="row"> 
      <div class="col-md-12"> 
        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row">
              <div class="productbox">
                <div class=" col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div itemscope="">
                            <h2> <span itemprop="name">Product</span></h2>
                            <p itemprop="email">SKU</p>
                            <p itemprop="email">Name</p>
                            <p itemprop="email"> Price</p>
                            <p>Unit</p>
                            <p>Color</p>
                            <p>Category</p>
                            <p> Sub Category</p>
                            <p>Brand Name</p>
                            <p>Product Type</p>
                            <p>Status</p>
                            <p>Description</p>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> @if($result>0)
                          @foreach($result as $results )
                          <div itemscope="">
                            <h2> <span>Detail</span></h2>
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
                            @if($results->status == 1)
                            <p>Active</p>
                            @else
                            <p>Inactive</p>
                            @endif
                            @if($results->description == "")
                            <p>...</p>
                            @else
                            <p >{{$results->description}}</p>
                            @endif </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div itemscope="">
                    <h2> <span itemprop="name">Product Image</span></h2>
                  </div>
                </div>
                <div class=" col-md-2"> <img src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" alt="your image"  style="    width: 135px;"/> </div>
                <div class=" col-md-2"> <img src="{{URL('/')}}/storage/images/{{$results->thumbnail2}}" alt="your image"  style="    width: 135px;"/> </div>
                <div class=" col-md-2"> <img src="{{URL('/')}}/storage/images/{{$results->thumbnail3}}" alt="your image"  style="    width: 135px;"/> </div>
                @endforeach
                @endif
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div itemscope="">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div itemscope="">
                        <h4 style="text-align:left;"> <span itemprop="name">Size</span></h4>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div itemscope="">
                        <h4 style="text-align:left;"> <span itemprop="name">QTY</span></h4>
                      </div>
                    </div>
                    @php
                    $product_id = $results->pk_id;
                    $size_detail = DB::select("select * from size_detail where product_id = '$product_id' order by pk_id asc"); 
                    @endphp
                    
                    @foreach($size_detail as $results)
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div itemscope="">
                        <p>{{$results->size}}</p>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div itemscope="">
                        <p>{{$results->quantity}}</p>
                      </div>
                    </div>
                    @endforeach </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </section>
</div>
@endsection