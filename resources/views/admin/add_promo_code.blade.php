@extends('admin.layout.appadmin')
@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Add Promo Code </h1>
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
              <form method="post" action = "{{url('/')}}/admin/home/add/promo" class="login-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="productbox">
                  <div class=" col-md-6">
                    <div class="form-login">
                      <label for="text">Promo Code</label>
                      <input type="text" id="Promo Code" name="promo" class="form-control input-sm chat-input" placeholder="Promo Code " required/>
                     


                      <div class=" col-md-6">
                    <div class="form-login">
                      <label for="text">Promo Use Time</label>
                      <input type="text" id="use_time" name="use_time" class="form-control input-sm chat-input" placeholder="Promo Use Time" />
                      <label for="text">
                      </div> </div>
                     
                     
                      <label for="text">



                    




                      <h4>Discount Type</h4>
                      </label>
                      <div class="radio">
                        <label class="form-check-label">
                          <input type="radio" value="1" name="radio">
                          fixed</label>
                      </div>
                      <div class="radio">
                        <label class="form-check-label">
                          <input type="radio" value="2" name="radio">
                          Percentage</label>
                      </div>
                      <label for="text">Discount Amount</label>
                      <input type="number" id="Discount Amount" name="discount" class="form-control input-sm chat-input" placeholder=" Discount Amount"  />
                      <label for="text">Start Date</label>
                      <input type="date" id="Start Date" name="start_date" class="form-control input-sm chat-input" placeholder="Start Date"  />
                      <label for="text">EndDate </label>
                      <input type="date" id="EndDate" name="end_date" class="form-control input-sm chat-input" placeholder="EndDate" />
                    </div>
                  </div>
                  <div class=" col-md-6">
                    <div class="form-login">
                      <label for="text">Min Sub Total</label>
                      <input type="number" id="MinSubTotal" name="min" class="form-control input-sm chat-input" placeholder="Min Sub Total"  />
                      <label for="text">Max Sub Total</label>
                      <input type="number" id="Max Sub Total" name="max" class="form-control input-sm chat-input" placeholder="Max Sub Total"  />
                      <label for="text">
                      <h4>Apply Discount For:</h4>
                      </label>
                      
                      <!-- <div class="radio">
                                <label><input type="radio" value="3" name="optradio">All Customer</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" value="4" name="optradio">Exiting Customer</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" value="5" name="optradio">New Customer</label>
                              </div>
                       -->
                      <div class="form-group">
                        <h5> Promo Code for Specific Person</h5>
                        <div class="promoinput" style="margin-bottom:3rem;">
                          <select class="selectpicker form-control" data-show-subtext="true" name="promoinput[]"  data-live-search="true">
                            <option  class="form-control" ></option>
                            
                          
                  @if(count($result)>0)
                        @foreach($result as $results )
        
                          
                            <option  class="form-control"  value="{{$results->username}}" >{{$results->username}}</option>
                            
                          
           @endforeach
                  @endif
       
      
                        
                          </select>
                        </div>
                        <button class="promobtn btn-md btn">Add More Fields</button>
                        <br>
                        <h5> Promo Code for Specific Category </h5>
                        <select class="selectpicker form-control" data-show-subtext="true" name="category" id=""  data-live-search="true">
                          <option  class="form-control" ></option>
                          
                        
                  @if(count($result1)>0)
                        @foreach($result1 as $results )
        
                        
                          <option  class="form-control"  value="{{$results->sub_category}}" >{{$results->sub_category}}</option>
                          
                        
           @endforeach
                  @endif
       
      
                      
                        </select>
                        
                        <!--<div class="radio">--> 
                        <!--@if(count($result)>0)--> 
                        <!--@foreach($result as $results )--> 
                        <!--  <label><input type="radio" value="{{$results->username}}" name="username" >{{$results->username}}</label>--> 
                        <!--<br>--> 
                        <!--  @endforeach--> 
                        <!--@endif--> 
                        <!--</div>-->
                        
                        <div class="switch">
                          <label for="text">Inactive/Active</label>
                          <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" name="status">
                          <label for="cmn-toggle-4"></label>
                        </div>
                        <br>
                        <span class="group-btn">
                        <button type="submit" class="btn btn-default btn-md">Add</button>
                        </span> </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.box --> 
        </div>
        <!-- /.col --> 
      </div>
    </div>
  </section>
  <!-- /.content --> 
  
  <!-- Main content --> 
</div>
<!-- /.content-wrapper --> 

@endsection