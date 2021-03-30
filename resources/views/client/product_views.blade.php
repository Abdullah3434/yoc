@extends('client.layout.app')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h2>Shop</h2>
      </div>
      <div class="items"> @if(count($result)>0)
        @foreach($result as $results)
        <div class="col-lg-3 col-md-3 col-lg-12">
          <div data-price="674" class="item"> <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"><img src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" alt="jacket" class="img-item"></a>
            <div class="info">
              <h3>{{$results->name}}</h3>
              <h5> PKR {{number_format($results->price)}}</h5>
            </div>
          </div>
        </div>
        @endforeach
        
        @endif </div>
    </div>
  </div>
</div>

@endsection