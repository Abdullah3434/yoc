

@extends('client.layout.app')
@section('content')
<div id="breadcrumb">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}/">Home</a></li>
      <li style="color:#F09819; ">Wishlist</li>
      
    </ul>
  </div>
</div>
<div class="container-fluid">
    
    @if($errors->any())
<div class="success">
  <p><strong></strong>{{$errors->first()}}</p>
</div>
@endif
    @if(count($result)>0)
              @foreach($result as $results)
    <div class="product-list-item mb-40">
		                                        <div class="row">
		                                            <!--Single List Product Start-->
		                                            <div class="col-md-3">
		                                                <div class="single-product">
		                                                    <div class="product-img img-full">
		                                                        <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">
                                                                    <img src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" alt="">
                                                                </a>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                            <div class="col-md-8">
		                                                <div class="product-content shop-list">
		                                                    <h2><a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">{{$results->name}}</a></h2>
                                                            <div class="product-description">
                                                                <p>{{$results->description}}</p>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="price">PKR {{number_format($results->price)}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-list-action">
                                                               <div class="add-btn">
                                                                    <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">Add To Cart</a>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="{{URL('/')}}/delete/wishlist/{{$results->pk_id}}" title="Whishlist"><i class="fa fa-times"></i></a></li>
                                                                </ul>
                                                            </div>
		                                                </div>
		                                            </div>
		                                            <!--Single List Product End-->
		                                        </div>
		                                    </div>
		                                           @endforeach

            @endif
  </div>
@endsection
	