@extends('admin.layout.appadmin')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1> Edit Product </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row"> @if($result>0)
              <form method="post" action = "{{url('/')}}/admin/home/edit/product/{{$result[0]->pk_id}}" class="login-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if($errors->any())
                <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
                @endif
                <div class="productbox">
                  <div class=" col-md-6">
                    <div class="form-login">
                      <label for="text">SKU</label>
                      <input type="text" id="product type" name="sku" value="{{$result[0]->sku}}" class="form-control input-sm chat-input" placeholder="SKU"  />
                      <label for="text">Name</label>
                      <input type="text" id=" Name" name="name" value="{{$result[0]->name}}" class="form-control input-sm chat-input" placeholder="Name"  />
                      <label for="text">Price</label>
                      <input type="text" id="Price" name="price" value="{{$result[0]->price}}" class="form-control input-sm chat-input" placeholder="Price" />
                      <div class="form-group">
                        <label>Color</label>
                        <div class="dropdown">
                          <button class="btnn _select_color dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$result[0]->color}}<span class="caret _right"></span> <span _text_display="{{$result[0]->color}}" @if($result[0]->color == "Green") class="color green" @endif @if($result[0]->color == "Red") class="color red" @endif @if($result[0]->color == "Yellow") class="color yellow" @endif 
                          @if($result[0]->color == "Brown") class="color brown" @endif @if($result[0]->color == "Orange") class="color orange" @endif 
                          @if($result[0]->color == "Pink") class="color pink" @endif @if($result[0]->color == "Silver") class="color silver" @endif 
                          @if($result[0]->color == "Blue") class="color blue" @endif @if($result[0]->color == "TEAL") class="color TEAL" @endif 
                          @if($result[0]->color == "NAVY") class="color NAVY" @endif @if($result[0]->color == "PURPLE") class="color PURPLE" @endif
                          @if($result[0]->color == "OLIVE") class="color OLIVE" @endif @if($result[0]->color == "LIME") class="color LIME" @endif  @if($result[0]->color == "BLACK") class="color BLACK" @endif  @if($result[0]->color == "WHITE") class="color WHITE" @endif  @if($result[0]->color == "NONE") class="color NONE" @endif></span></button>
                          <ul class="dropdown-menu _select_color_drop" aria-labelledby="dropdownMenu1">
                            <li><span _text_display="Green" class="color green"></span></li>
                            <li><span _text_display="Red" class="color red"></span></li>
                            <li><span _text_display="Yellow" class="color yellow"></span></li>
                            <li><span _text_display="Brown" class="color brown"></span></li>
                            <li><span _text_display="Orange" class="color orange"></span></li>
                            <li><span _text_display="Pink" class="color pink"></span></li>
                            <li><span _text_display="Silver" class="color silver"></span></li>
                            <li><span _text_display="Blue" class="color blue"></span></li>
                            <li><span _text_display="TEAL" class="color TEAL"></span></li>
                            <li><span _text_display="NAVY" class="color NAVY"></span></li>
                            <li><span _text_display="PURPLE" class="color PURPLE"></span></li>
                            <li><span _text_display="OLIVE" class="color OLIVE"></span></li>
                            <li><span _text_display="LIME" class="color LIME"></span></li>
                            <li><span _text_display="BLACK" class="color BLACK"></span></li>
                            <li><span _text_display="WHITE" class="color WHITE"></span></li>
                            <li><span _text_display="NONE" class="color NONE"></span></li>
                            <input type="hidden" name="_color" value="{{$result[0]->color}}">
                          </ul>
                        </div>
                      </div>
                      <!-- /.form group -->
                      
                      <label for="text">Category</label>
                      <select class="form-control" name="mainCategory" id="mainCategory" >
                        
                        
                    @if($result1>0)
                    @foreach($result1 as $results)
                          
                        
                        <option value="{{urlencode($results->main_category)}}" @if($result[0]->category==$results->main_category) selected @endif>{{$results->main_category}}</option>
                        
                        
                            @endforeach
                            @endif
                        
                      
                      </select>
                      <label for="text">Sub Category</label>
                      <select class="form-control" name="SubCategory" id="SubCategory" >
                        <option value="{{$result[0]->sub_category}}" >{{$result[0]->sub_category}}</option>
                      </select>
                      <label for="text">Product Type</label>
                      <select class="form-control" name="ProductType" id="ProductType">
                        <option value="{{$result[0]->product_type}}" >{{$result[0]->product_type}}</option>
                      </select>
                      <label for="text">Brand Name</label>
                      <select class="form-control" name="brandName">
                        
                        
                                 
                                 @if($result4>0)
                                 @foreach($result4 as $results)
                                 
                                         
                        
                        <option value="{{$results->brand_name}}" @if($result[0]->brand_name == $results->brand_name) selected @endif >{{$results->brand_name}}</option>
                        
                        
                                         @endforeach
                         @endif
                                     
                      
                      </select>
                      <label for="text">Unit</label>
                      <select class="form-control" name="unit">
                        <option   @if($result[0]->unit=="feet") selected @endif  value="feet">feet</option>
                        <option   @if($result[0]->unit=="Meter") selected @endif value="Meter">Meter</option>
                        <option   @if($result[0]->unit=="Yard") selected @endif value="Yard">Yard</option>
                        <option   @if($result[0]->unit=="inchs") selected @endif value="inchs">Inches</option>
                        <option   @if($result[0]->unit=="Centimeter") selected @endif value="Centimeter">Centimeter</option>
                        <option   @if($result[0]->unit=="Kilogram") selected @endif value="Kilogram">Kilogram</option>
                        <option   @if($result[0]->unit=="Gram") selected @endif value="Gram
                        ">Gram </option>
                        <option   @if($result[0]->unit=="Litre") selected @endif value="Litre">Litre</option>
                        <option   @if($result[0]->unit=="Mililitre") selected @endif value="Mililitre">Mililitre</option>
                        <option   @if($result[0]->unit=="Watt") selected @endif value="Watt">Watt</option>
                        <option   @if($result[0]->unit=="Volt-ampere") selected @endif value="Volt-ampere">Volt-ampere</option>
                        <option   @if($result[0]->unit=="Horse-power") selected @endif value="Horse-power">Horse-power</option>
                        <option   @if($result[0]->unit=="Cubic centimeter") selected @endif value="Cubic centimeter">Cubic centimeter</option>
                        <option   @if($result[0]->unit=="Radian") selected @endif value="Radian">Radian</option>
                        <option   @if($result[0]->unit=="Degree") selected @endif value="Degree">Degree</option>
                        <option   @if($result[0]->unit=="Bit") selected @endif value="Bit">Bit</option>
                        <option   @if($result[0]->unit=="Byte") selected @endif value="Byte">Byte</option>
                        <option   @if($result[0]->unit=="Kilobyte") selected @endif value="Kilobyte">Kilobyte</option>
                        <option   @if($result[0]->unit=="Megabyte") selected @endif value="Megabyte">Megabyte</option>
                        <option   @if($result[0]->unit=="GigaByte") selected @endif value="GigaByte">GigaByte </option>
                        <option   @if($result[0]->unit=="Terabyte") selected @endif value="Terabyte">Terabyte</option>
                        <option   @if($result[0]->unit=="Pixel") selected @endif value="Pixel">Pixel</option>
                        <option   @if($result[0]->unit=="Density per pixel") selected @endif value="Density per pixel
                        ">Density per pixel </option>
                        <option   @if($result[0]->unit=="Pieces") selected @endif value="Pieces">Pieces </option>
                        <option   @if($result[0]->unit=="Packs") selected @endif value="packs">Packs</option>
                        <option   @if($result[0]->unit=="Pairs") selected @endif value="Pairs">Pairs</option>
                        <option   @if($result[0]->unit=="Dozen") selected @endif value="Dozen">Dozen</option>
                        <option   @if($result[0]->unit=="Vol") selected @endif value="Vol
                        ">Vol </option>
                        <option   @if($result[0]->unit=="Percent") selected @endif value="Percent">Percent</option>
                      </select>
                      @php
                      $pk_id = $result[0]->pk_id;
                      $size = DB::select("select* from size_detail where product_id = '$pk_id' order by pk_id asc");
                      
                      
                      @endphp
                      <div class="input_fields_wrap" style="margin-bottom:3rem;"> @foreach($size as $sizes)
                        <div>
                          <div class="col-lg-6 lpadding">
                            <label for="text">QTY</label>
                            <input type="number" name="mytextt[]" value="{{$sizes->quantity}}" class="form-control"placeholder="QTY" min="1" >
                          </div>
                          <div class="col-lg-6">
                            <label for="text">Size</label>
                            <input type="text" value="{{$sizes->size}}" class="form-control" name="mytextt[]" class="form-control" placeholder="Size" required min="1" >
                          </div>
                          <a href="#" class="remove_field">Remove</a></div>
                        @endforeach <br>
                      </div>
                      <button class="add_field_button btn-md btn">Add More Fields</button>
                    </div>
                  </div>
                  <div class=" col-md-4">
                    <div class="form-login">
                      <div class="switch">
                        <label for="text">Inactive?</label>
                        <input id="cmn-toggle-4" name="status" @if($result[0]->
                        status==1) checked @endif  class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                        <label for="cmn-toggle-4"></label>
                      </div>
                      <br>
                      <div class="alert alert-info"> <strong>Info!</strong> Please upload image in 350 * 300 pixel </div>
                      <label for="text">Image</label>
                      <div class="form-group">
                        <input type='file' name="file" class="form-control fileControl" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail}}" onchange="readURL(this);"/>
                        <img id="blah" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail}}" alt="your image"style="width:180px; height:180px;" />
                        <button type="button" class="btn btn-default btn-md" onClick="remove();">Remove</button>
                      </div>
                      <div class="form-group">
                        <input type='file' name="images2" class="form-control fileControl2" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail2}}" onchange="preview_image(this);"/>
                        <img id="blah2" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail2}}" alt="your image" style="width:180px; height:180px;"/>
                        <button type="button" class="btn btn-default btn-md" onClick="remove2();">Remove</button>
                      </div>
                      <div class="form-group">
                        <input type='file' name="images3" class="form-control fileControl3" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail3}}" onchange="preview_img(this);"/>
                        <img id="blah3" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail3}}" alt="your image" style="width:180px; height:180px;"/>
                        <button type="button" class="btn btn-default btn-md" onClick="remove3();">Remove</button>
                      </div>
                      <div class="form-group">
                        <LABEL>Size Chart</LABEL>
                        <input type='file' name="images4" class="form-control fileControl4" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail4}}" onchange="preview_imgs(this);"/>
                        <img id="blah4" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail4}}" alt="your image" style="width:180px; height:180px;"/>
                        <button type="button" class="btn btn-default btn-md" onClick="remove4();">Remove</button>
                      </div>
                      <div class="form-group">
                        <label for="comment">Description</label>
                        <textarea class="form-control" name="description" rows="9" id="comment" >{{$result[0]->description}}</textarea>
                      </div>
                      <br>
                      <span class="group-btn">
                      <button class="btn btn-default btn-md" name="submit" type="submit"> Save </button>
                      </span> </div>
                  </div>
                </div>
              </form>
              @endif </div>
          </div>
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </section>
</div>
<!-- /.content-wrapper --> 
@endsection