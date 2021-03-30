@extends('client.layout.app')
@section('content') 
<!--Error 404 Area Start-->
<div class="error-404-area mt-70 mb-50">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="error-wrapper text-center">
          <div class="error-text">
            <h1>404</h1>
            <h2>Opps! PAGE NOT BE FOUND</h2>
            <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
          </div>
      
          <div class="btn btn-default error-button"> <a href="{{url('/')}}/">Back to home page</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Error 404 Area End--> 
@endsection