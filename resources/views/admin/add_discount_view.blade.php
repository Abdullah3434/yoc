 @extends('admin.layout.appadmin')
@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Add Discount </h1>
  </section>
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- Main row -->
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-6"> 
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row">
              <div class="productbox">
                <div class=" col-md-12">
                  <form method="post" action = "{{url('/')}}/admin/home/add/discount" class="login-form">
                    {{ csrf_field() }}
                    <div class="form-login">
                      <label for="text">Discount by SKU</label>
                      <select class="form-control" id="product type" name="sku"  >
                      <option value="" >--Select SKU--</option>
                  @if(count($result)>0)
                        @foreach($result as $results )
                            
                        <option value="{{$results->sku}}">{{$results->sku}}</option>
                        
                               @endforeach
                        @endif
                        
                      </select>

<h3>OR
</h3>

                      <label for="text">Discount by Categories</label>
                      <select class="selectpicker form-control" data-show-subtext="true" id="product type" name="category" data-live-search="true" >
                      <option value="" >--Select Category--</option>
                  @if(count($result1)>0)
                        @foreach($result1 as $results )
                            
                        <option value="{{$results->sub_category}}">{{$results->sub_category}}</option>
                        
                               @endforeach
                        @endif
                        
                      </select>


                      <label for="text">Start Date</label>
                      <input type="date" name="start_date"  class="form-control" placeholder="Start Date" />
                      <label for="text">End Date</label>
                      <input type="date" name="end_date"  class="form-control" placeholder="End Date" />
                      <label for="text">Discount in percentage</label>
                      <input type="text"  name="percentage" class="form-control" placeholder="Discount in percentage" />
                      <br>
                      <p>OR</p>
                      <br>
                      <label for="text">Discount in Fixed Amount</label>
                      <input type="text" name="fixed_amount" class="form-control" placeholder="Discount in Fixed Amount" />
                      <br>
                      <span class="group-btn">
                      <button type="submit" class="btn btn-default btn-md">Add Discount</button>
                      </span> </div>
                  </form>
                </div>
              </div>
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
<!-- /.content-wrapper --> 
@endsection