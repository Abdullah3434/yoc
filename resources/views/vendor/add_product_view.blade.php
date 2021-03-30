@extends('vendor.layout.appvendor')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Add New Product </h1>
  </section>
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- Main row -->
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-12"> 
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row">
              <form method="post" action = "{{url('/')}}/vendor/home/add/product" class="login-form"enctype="multipart/form-data">
                {{ csrf_field() }}
                @if($errors->any())
                <div class="alert alert-danger"> <strong>Danger!</strong> {{$errors->first()}} </div>
                @endif
                <div class="productbox">
                  <div class=" col-md-6">
                    <div class="form-login">
                        <div class="alert alert-info">
  <strong>Info!</strong> Please don't use / in SKU.
</div>
                      <label for="text">SKU</label>
                      <input type="text" id="product type" name="sku" class="form-control input-sm chat-input" placeholder="SKU" required/>
                      <label for="text">Name</label>
                      <input type="text" id=" Name" name="name" class="form-control input-sm chat-input" placeholder="Name" required/>
                      <label for="text">Price</label>
                      <input type="text" id="Price" name="price" class="form-control input-sm chat-input" placeholder="Price" pattern="[0-9]+" oninvalid="this.setCustomValidity('Only Number Formate Accept')"
    oninput="this.setCustomValidity('')" required/>
                      
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Color</label>
                        <div class="dropdown">
                          <button class="btnn _select_color dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Green<span class="caret _right"></span> <span _text_display="Green" class="color green"></span></button>
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
                            <li><span _text_display="WHITE" class="color WHITE"></span></li>
                            <li><span _text_display="NONE" class="color NONE">none</span></li>
                            <input type="hidden" name="_color" value="Green">
                          </ul>
                        </div>
                      </div>
                      <!-- /.form group -->
                      
                      <label for="text">Category</label>
                      <select class="form-control" name="mainCategory"  id="mainCategory">
                        <option value="0" disable="true" selected="true" >---select Category---</option>
                        
                    @if($result2>0)
                    @foreach($result2 as $results)
                            
                        <option value="{{urlencode($results->main_category)}}">{{$results->main_category}}</option>
                        
                            @endforeach
                            @endif
                        
                      </select>
                      <label for="text">Sub Category</label>
                      <select class="form-control" name="subCategory"  id="subCategory">
                        <option value="" disable="true" selected="true" >---select sub Category---</option>
                      </select>
                      <label for="text">Product Type</label>
                      <select class="form-control" name="productType"  id="ProductType">
                        <option value="" disable="true" selected="true" >---Select Product type---</option>
                      </select>
                      <label for="text">Brand Name</label>
                      <select class="form-control" name="BrandName">
                        <option value="None">None</option>
                                 
                                 @if($result1>0)
                                 @foreach($result1 as $results)
                                 
                                         
                        <option value="{{$results->brand_name}}">{{$results->brand_name}}</option>
                        
                                         @endforeach
                         @endif
                                     
                      </select>
                      <label for="text">Unit</label>
                      <select class="form-control" name="unit">
                        <option value="Meter">Meter</option>
                        <option value="Yard">Yard</option>
                        <option value="inchs">Inches</option>
                        <option value="Centimeter">Centimeter</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Gram
">Gram </option>
                        <option value="Litre">Litre</option>
                        <option value="Mililitre">Mililitre</option>
                        <option value="Watt">Watt</option>
                        <option value="Volt-ampere">Volt-ampere</option>
                        <option value="Horse-power">Horse-power</option>
                        <option value="Cubic centimeter">Cubic centimeter</option>
                        <option value="Radian">Radian</option>
                        <option value="Degree">Degree</option>
                        <option value="Bit">Bit</option>
                        <option value="Byte">Byte</option>
                        <option value="Kilobyte">Kilobyte</option>
                        <option value="Megabyte">Megabyte</option>
                        <option value="GigaByte">GigaByte </option>
                        <option value="Terabyte">Terabyte</option>
                        <option value="Pixel">Pixel</option>
                        <option value="Density per pixel
">Density per pixel </option>
                        <option value="pieces">pieces </option>
                        <option value="packs">packs</option>
                        <option value="pairs">pairs</option>
                        <option value="dozen">dozen</option>
                        <option value="Vol
">Vol </option>
                        <option value="percent">percent</option>
                      </select>
                      <div class="input_fields_wrap" style="margin-bottom:3rem;">
                        <div class="col-lg-6 lpadding">
                          <label for="text">QTY</label>
                          <input type="number" name="mytextt[]" class="form-control"placeholder="QTY"  value="1" min="1" required>
                        </div>
                        <div class="col-lg-6">
                          <label for="text">Size</label>
                          <input type="text" name="mytextt[]" class="form-control" placeholder="Size" required>
                        </div>
                        <br>
                        <br>
                      </div>
                      
                    </div>
                    <button class="add_field_button btn-md btn" style="margin-top:20px;">Add More Fields</button>
                    
                    <div class="form-group">
                        <h3>Commision Chart</h3><br>
                        <img src="{{url('/')}}/images/commision_chart.png" alt="your image" style="width:100%;"/> </div>
                  </div>
                  <div class=" col-md-4">
                    <div class="form-login">
                      <div class="switch">
                        <label for="text">Inactive?</label>
                        <input id="cmn-toggle-4" name="status" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                        <label for="cmn-toggle-4"></label>
                      </div>
                      <br>
                      <div class="alert alert-info"> <strong>Info!</strong> Please upload image in 350 * 300 pixel </div>
                      <label for="text">Image</label>
                      <div class="form-group">
                        <input type='file' name="file" class="form-control" onchange="readURL(this);"/>
                        <img id="blah" src="{{url('/')}}/images/180.png" alt="your image"style="width:350px; height:300px;" /> </div>
                      <div class="form-group">
                        <input type='file' name="images2" class="form-control" onchange="preview_image(this);"/>
                        <img id="blah2" src="{{url('/')}}/images/180.png" alt="your image" style="width:350px; height:300px;"/> </div>
                      <div class="form-group">
                        <input type='file' name="images3" class="form-control" onchange="preview_img(this);"/>
                        <img id="blah3" src="{{url('/')}}/images/180.png" alt="your image" style="width:350px; height:300px;"/> </div>
                      <div class="form-group">
                        <label>Size Chart</label>
                        <input type='file' name="images4" class="form-control" onchange="preview_imgs(this);"/>
                        <img id="blah4" src="{{url('/')}}/images/size_chart.png" alt="your image" style="width:350px; height:300px;"/> </div>
                      <div class="form-group">
                        <label for="comment">Description</label>
                        <textarea class="form-control" name="description" rows="9" id="comment"></textarea>
                      </div>
                      <br>
                      <span class="group-btn">
                      <button class="btn btn-default btn-md" name="submit" type="submit"> Add </button>
                      </span> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
  
  <!-- Main content --> 
</div>
@endsection