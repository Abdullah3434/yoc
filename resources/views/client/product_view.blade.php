@extends('client.layout.app')
@section('content')

<div id="breadcrumb">
  <div class="container-fluid">
    <ul class="breadcrumb">
      @if(count($result)>0)
      <li><a href="{{URL('/')}}/">Home</a></li>
      <li><a href="{{URL('/')}}/{{$result[0]->category}}">{{$result[0]->category}}</a></li>
      <li>{{$result[0]->sub_category}}</li>
      @endif
    </ul>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
@if(Session::has('message'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ Session::get('message') }}</strong>
      </div>  
    @endif
        @if(count($d)>0)
        <div class="row">
            
        @foreach($d as $results)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">
                        <img class="pic-1" src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" style="width:334px; height:392px;">
                        <img class="pic-2" src="{{URL('/')}}/storage/images/{{$results->thumbnail2}}" style="width:334px; height:392px;">
                    </a>
                    <span class="product-new-label">Sale</span>
                    @if ($results->percentage > 0) 
                    <span class="product-discount-label">{{$results->percentage}} %</span>
                    
                    @else
                    
                    <span class="product-discount-label">{{$results->fixed_amount}} PKR</span>
                    @endif
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">{{$results->name}}</a></h3>
                    @if ($results->percentage > 0) 
                    <div class="price" style="float:none;">PKR {{number_format($results->price - (($results->price*$results->percentage)/100))}}
                        <span> PKR {{number_format($results->price)}}</span>
                    </div>
                    @else
                    <div class="price" style="float:none;">PKR {{number_format($results->price - $results->fixed_amount)}}
                        <span> PKR {{number_format($results->price)}}</span>
                    </div>
                    @endif
                    <a class="add-to-cart" href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"> Add To Cart</a>
                    <div>
  <form method="post" action="{{URL('/')}}/product/add/wishlist/{{$results->pk_id}}">{{ csrf_field() }}<button type="submit"><i class="heart fa fa-heart-o"></i></button></form>
</div>
                </div>
            
            </div>
            
        </div>
        @endforeach
        
        </div>
        @endif
        <div class="row">
       @if(count($result)>0)
        @foreach($result as $results)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">
                        <img class="pic-1" src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" style="width:334px; height:392px;">
                        <img class="pic-2" src="{{URL('/')}}/storage/images/{{$results->thumbnail2}}" style="width:334px; height:392px;">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">{{$results->name}}</a></h3>
                    <div class="price" style="float:none;">PKR {{number_format($results->price)}}
                    </div>
                    <a class="add-to-cart" href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"> Add To Cart</a>
                    <div>
  <form method="post" action="{{URL('/')}}/product/add/wishlist/{{$results->pk_id}}">{{ csrf_field() }}<button class="btn" type="submit" data-tip="Add to Wishlist"><i class="heart fa fa-heart-o"></i></button></form>
</div>
                </div>
            </div>
        </div>
        @endforeach
        
        @endif</div>
    </div>
  </div>
  
</div>

@endsection