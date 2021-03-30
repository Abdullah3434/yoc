 @extends('client.layout.app')
@section('content')

<div id="breadcrumb">
  <div class="container-fluid">
    <ul class="breadcrumb">
      @if(count($result)>0)
      <li><a href="{{URL('/')}}/">Home</a></li>
      <li><a href="{{URL('/')}}/{{$result[0]->category}}">{{$result[0]->category}}</a></li>
      
      <li><a href="{{URL('/')}}/product/{{$result[0]->category}}/{{$result[0]->sub_category}}">{{$result[0]->sub_category}}</a></li>
      @endif
    </ul>
  </div>
</div>
<section id="description"> @if(count($result)>0)
  <div class="container">
    <h1 style="text-align:center; color:#ed6c71 !important;">Product Details</h1>
    <form method="post" action = "{{url('/')}}/product/add/cart/{{$result[0]->pk_id}}">
      {{ csrf_field() }}
      
      @if($errors->any())
      <div class"alert alert-danger">{{$errors->first()}}</div>
      @endif
      <div class="row">
        <div class="col-md-4 col-xs-11 col-sm-11">
          <div id="product-main-view">
            <div class="product-view"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail}}" alt=""> </div>
            <div class="product-view"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail2}}" alt=""> </div>
            <div class="product-view"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail3}}" alt=""> </div>
          </div>
          <div id="product-view">
            <div class="product-view"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail}}" alt=""> </div>
            <div class="product-view"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail2}}" alt=""> </div>
            <div class="product-view"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail3}}" alt=""> </div>
          </div>
        </div>
        <div class="col-md-4 box-shadow">
          <h3 style="color:#ed6c71;text-transform: uppercase;float:left;"> <span class="in_sport">{{$result[0]->name}}</span></h3>
          <table class="table">
            <tbody>
              <tr>
                <td><span>Product Type</span></td>
                <td>{{$result[0]->product_type}}</td>
              </tr>
              <tr>
                <td><span>Product Category</span></td>
                <td>{{$result[0]->category}}</td>
              </tr>
              <tr>
                <td><span>Product Code</span></td>
                <td>{{$result[0]->sku}}</td>
              </tr>
            </tbody>
          </table>
          <div class="product-color">
            <div class="header-item"  > <span class="label-success label" id="myspan">In Stock</span></div>
            <div class="header-item" >Color</div>
            <div class="color-choose"> @if(count($result1)>0)
              @foreach($result1 as $results) <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}">
              <input id="black" type="button" name="color">
              <label><span style="background-color:{{$results->color}} "></span></label>
              </a> @endforeach
              @endif </div>
            <div class="menu-size menu-item bgsize">
              <div class="header-item" >Size</div>
              <select class="form-control" name="size" id="size" required>
                <option value="" disable="true" selected="true" >---Select Size---</option>
                
                
                	@if(count($array)>0)
							@foreach($array as $arrays)
            
                
                <option value="{{$arrays->pk_id}}">{{$arrays->size}}</option>
                
                
            		@endforeach
					@endif
       
            
              
              </select>
            </div>
            <div class="menu-size menu-item bgsize">
              <div class="header-item" >QTY</div>
              <ul class="">
                <input class="form-control" type="number" name="quantity" value="1" min="1" max="1" id="myInput" required>
              </ul>
            </div>
            @if(!empty($result[0]->thumbnail4))
            <div class="menu-size menu-item bgsize">
              <div class="header-item" >Size Chart</div>
              <ul class="">
                <a href="#" data-toggle="modal" data-target="#myModal"><img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail4}}" alt="Size Chart"></a>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-decoration: none;">Size Chart</h4>
                      </div>
                      <div class="modal-body"> <img src="{{URL('/')}}/storage/images/{{$result[0]->thumbnail4}}" alt="Size Chart"> </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
            @else
            <div> </div>
            <!-- Modal --> 
            
            @endif
            <div class="row">
              <div class="col-md-12"> @if(count($d)>0)
                    <div class="price">PKR {{number_format($discount_price)}} <span style="display: initial;font-size:14px;">PKR {{number_format($d[0]->price)}} </span></div>
                
                @else
                @if(count($result)>0)
                <h3 style="float:left;">PKR {{number_format($result[0]->price)}}</h3>
                @endif
                @endif </div>
            </div>
            <button class="btn btn-cart" id="disable" name="submit" type="submit">Add to cart</button>
            <button class="btn btn-cart" id="btnSubmit" type="submit" formaction="{{URL('/')}}/product/buy/now/{{$result[0]->pk_id}}">Buy Now</button>
            <p><span style="color:red;">*</span><strong>FREE Shipping all Over Pakistan</strong></p>
          </div>
        </div>
        <div class="col-lg-3 col-lg-offset-1 box-shadow">
          <h3 style="color:#ed6c71;font-size:22px;text-transform: uppercase;inline-size: max-content;"> <span class="in_sport">Vendor Information</span></h3>
          @if(count($vendor)>0)
          <table class="table">
            <tbody>
              <tr>
                <td><span>Store Name</span></td>
                <td>{{$vendor[0]->store_name}}</td>
              </tr>
              <tr>
                <td><span>Vendor Name</span></td>
                <td>{{$vendor[0]->fname}} {{$vendor[0]->lname}}</td>
              </tr>
              <tr>
                <td><span>City</span></td>
                <td>{{$vendor[0]->city}}</td>
              </tr>
              <tr>
                <td><span>Sales</span></td>
                <td>{{$result3}}</td>
              </tr>
            </tbody>
          </table>
          @endif </div>
      </div>
    </form>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="dis">
          <h2 style="color:#ed6c71;">About this Product</h2>
          <p>{{$result[0]->description}}</p>
        </div>
      </div>
    </div>
  </div>
  @endif </section>
<script src="js/bootstrap.min.js"></script> 
<script>
   _colors=$('._select_color_drop li');
    for (var i = _colors.length - 1; i >= 0; i--) {
        $(_colors[i]).click(function(){
            var color_text = $(this).find('span').attr('_text_display');
            var elemnt = $(this).closest('._select_color_drop').prev();
            elemnt.find('span.color').remove();
            $(this).find('span').clone().appendTo(elemnt);
            var contents = $(elemnt).contents();
            if (contents.length > 0) {
                if (contents.get(0).nodeType == Node.TEXT_NODE) {
                    $(elemnt).html(color_text).append(contents.slice(1));
                }
            }
            if($('[name=_color]').val() == undefined){
                elemnt.next().append("<input type='hidden' name='_color' value='"+color_text+"'>");
            }else{
                $('[name=_color]').val(color_text);
            }
            
        })
    };
</script> 
@endsection