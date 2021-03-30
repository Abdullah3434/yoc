@extends('client.layout.app')
@section('content')
<div id="breadcrumb">
  <div class="container-fluid">
    <ul class="breadcrumb">
      @if(count($result)>0)
      <li><a href="{{URL('/')}}/">Home</a></li>
      <li><a href="{{URL('/')}}/{{$result[0]->main_category}}">{{$result[0]->main_category}}</a></li>
      @endif
    </ul>
  </div>
</div>
<div class="container-fluid">    
    <div class="row">
       @if(count($result)>0)
        @foreach($result as $results)
        <div class="col-md-3 col-sm-6">
            <a href="{{URL('/')}}/product/{{$results->main_category}}/{{$results->sub_category}}"><div class="cat">
                @if($results->thumbnail>0)
                
                <img src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" alt="{{$results->sub_category}}">
                
                @else
                
                <img src="{{URL('/')}}/images/yoc.png" alt="Yoc">
                @endif
                <h3 class="title">{{$results->sub_category}}</h3>
            </div></a>
        </div>
        @endforeach
        
        @endif</div>
</div>
@endsection