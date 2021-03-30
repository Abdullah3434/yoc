@extends('admin.layout.appadmin')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporting by Products
      </h1>
              </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">			 
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
      </div><!-- /.row -->







      <div class="clearfix"></div>
  <!-- <form method="post" action = "{{url('/')}}/admin/home/search/reporting/by/product" class="login-form" enctype="multipart/form-data">
                   
                   {{ csrf_field() }}




                   @if($errors->any())
             
             <div class="alert alert-danger">
             <strong></strong> {{$errors->first()}}
             </div>
             @endif 
                   
                   <div class="row">
                       <div class="col-lg-6 col-sm-12">
                           <div class="alert alert-info">
  <strong>Info!</strong>  Please tick the check box whom you want to filte..
</div>
                       </div>
                   </div> -->
    <!-- <div class="row">
        
        
      <div class="col-lg-2">
        <div class="form-group">
        <label><input type="checkbox" name="name" value="1"> ID</label>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label>From</label>
          <input type="number" name="id_from" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label>To:</label>
          <input type="number"name="id_to"class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-2">
        <div class="form-group">
        <label><input type="checkbox" name="amount" value="1"> Price</label>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label>From</label>
          <input type="number" min="1" name="amount_from" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label>To:</label>
          <input type="number" name="amount_to" class="form-control">
        </div>
      </div>
    </div>
    
      <div class="row">
      <div class="col-lg-2">
        <div class="totalamountp">
          <button type="submit" class="amountbtn btn">Filter</button>
        </div>
      </div>
    </div>
  </form> -->













  <form method="post" action = "{{url('/')}}/admin/home/search/reporting/by/product" class="login-form" enctype="multipart/form-data">
                   
                   {{ csrf_field() }}
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="dateinputcircles">
            <div class="form-group">
              <input type="date" class="form-control" name="date_from" required>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12" >
          <div class="Tohead">
            <h4>To</h4>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="dateinputcircles">
            <div class="form-group">
              <input type="date" class="form-control"  name="date_to" required>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="Applybtn">
            <button href="#" class="btnapply btn">Apply</button>
          </div>
        </div>

</form>






  <!-- <div class="row">
      <div class="col-lg-2">
        <div class="form-group">
        <label><input type="checkbox" name="date" value="1"> Category</label>
        </div>
      </div>
  <form method="post" action = "{{url('/')}}/admin/home/search/reporting/category/product" class="login-form" enctype="multipart/form-data">
                   
                   {{ csrf_field() }}

      <div class="col-lg-4">
        <div class="form-group">
          <label></label>
          <select class="selectpicker form-control" data-show-subtext="true" name="category" id=""  data-live-search="true">
                <option  class="form-control" ></option>
                  
                        @foreach($categry as $results )
        <option  class="form-control"  value="{{$results->category}}" >{{$results->category}}</option>
           @endforeach
                 
       
      </select>
        </div>
      </div>
    
    </div>
    <div class="row">
      <div class="col-lg-2">
        <div class="totalamountp">
          <button type="submit" class="amountbtn btn">Filter</button>
        </div>
      </div>
    </div>
  </form>

 -->







      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border table-responsive">
              
            <div class="box-body">
        
                <table id="example1" class="table no-margin">
                  <thead>
                    <tr>
                      <th>SKU</th>
                      <th>Name</th>
                      <!-- <th>Category</th> -->
                      <th>price</th>
                      <th> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if($result>0)
                        @foreach($result as $results )
                        <tr>      



                          <td>{{$results->sku}}</td>
                          <td>{{$results->product_name}}</td>
                     
                          <td>{{$results->price}}</td>
                          <td><a href="{{URL('/')}}/admin/home/view/detail/reporting/by/products/{{$results->pk_id}}">View</a>
                            </td>
                        </tr>
                          
                        @endforeach
                        @endif
                   
                  </tbody>
                </table><!-- /.table-responsive -->
            </div><!-- /.box-body -->
           
            </div><!-- /.box-header -->
            <!-- /.box-footer -->
            <!-- /.box-footer add button next/previus
            
            
            
            
             -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection