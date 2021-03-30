@extends('admin.layout.appadmin')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Promo Code
          </h1>
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
                        <form method="post" action = "{{url('/')}}/admin/home/edit/promo/{{$result[0]->pk_id}}" class="login-form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                          @if($errors->any())

                            
                            <div class="alert alert-danger">
  <strong>Danger!</strong> {{$errors->first()}}
</div>
	@endif
                 <div class="productbox">
        <div class=" col-md-6">
            <div class="form-login">
            <label for="text">Promo Code</label>
            <input type="text" id="Promo Code" name="promo" value="{{$result[0]->promo_code}}" class="form-control input-sm chat-input" placeholder="Promo Code" required/>
            
                        <label for="text"><h4>Discount Type</h4></label>
                        <div class="radio"  >
                                <label class="form-check-label"><input type="radio" @if($result[0]->discount_type=="fixed") checked @endif value="1" name="radio">fixed</label>
                              </div>
                              <div class="radio">
                                <label class="form-check-label"><input type="radio"  @if($result[0]->discount_type=="percentage") checked @endif value="2" name="radio">Percentage</label>
                              </div>
                  
                
            
            <label for="text">Discount Amount</label>
            <input type="number" id="Discount Amount" name="discount" value="{{$result[0]->discount_amount}}" class="form-control input-sm chat-input" placeholder=" Discount Amount" required/>
           
            <label for="text">Start Date</label>
            <input type="date" id="Start Date" name="start_date" value="{{$result[0]->start_date}}" class="form-control input-sm chat-input" placeholder="Start Date" required/>
            
                    <label for="text">EndDate </label>
            <input type="date" id="EndDate" name="end_date" value="{{$result[0]->end_date}}" class="form-control input-sm chat-input" placeholder="EndDate" required/>
            
           
            </div>
        
        </div>
             <div class=" col-md-6">
            <div class="form-login">
            <label for="text">Min Sub Total</label>
            <input type="number" id="MinSubTotal" name="min" value="{{$result[0]->min_total}}" class="form-control input-sm chat-input" placeholder="Min Sub Total" required />
            
            <label for="text">Max Sub Total</label>
            <input type="number" id="Max Sub Total" name="max" value="{{$result[0]->max_total}}" class="form-control input-sm chat-input" placeholder="Max Sub Total" required/>
                        <label for="text"><h4>Apply Discount For:</h4></label>
                        
                      

                      
                      
                        <div class="radio">
                                <label><input type="radio"  @if($result[0]->discount_for=="all customers") checked @endif value="3" name="optradio">All Customer</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" @if($result[0]->discount_for=="exiting customers") checked @endif value="4" name="optradio">Exiting Customer</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio"  @if($result[0]->discount_for=="new customers") checked @endif value="5" name="optradio">New Customer</label>
                              </div>
                              
                              
                              
                                                     <select class="selectpicker form-control" data-show-subtext="true" name="username"  data-live-search="true">
                <option  class="form-control" ></option>
                  @if(count($result1)>0)
                        @foreach($result1 as $results )
        <option  class="form-control"  value="{{$results->username}}" >{{$results->username}}</option>
           @endforeach
                  @endif
       
      </select>
                              
                              
                              
                              
            
            <div class="switch">
           <label for="text">Inactive?</label>
                            <input id="cmn-toggle-4" name="status" @if($result[0]->status==0) checked @endif  class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                            <label for="cmn-toggle-4"></label>
                            </div>
            
            <br>
            
            
            
            <span class="group-btn">     
                <button type="submit" class="btn btn-default btn-md">Edit</button>
            </span>
            </div>
        
        </div>
    </div>
    </form>
    </div>
                 
                 
                 
                 
                 
                 
                </div><!-- /.box-header -->
                
                <!-- /.box-footer -->
                <!-- /.box-footer add button next/previus
                
                
                
                
                 -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

        <!-- Main content -->
      </div><!-- /.content-wrapper -->

     @endsection