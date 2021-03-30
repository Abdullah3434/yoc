@extends('vendor.layout.appvendor')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Products
      </h1>
      @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
              </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
      
        
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

       
      
      </div><!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border table-responsive">
            <!-- /.box-header -->
            <div class="box-body">
                        <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <p>Are you sure...?</p>
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
    </div>
  </div>
  
</div>
</div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SKU</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Is Active?</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($result>0)
                    @foreach($result as $results)
                    <tr>          
                      <td>{{$results->sku}}</td>
                      <td>{{$results->name}}</td>
                      <td>PKR {{number_format($results->price)}}</td>
                      <td>{{$results->category}}</td>
                      <td>{{$results->sub_category}}</td>
                    
                      <td><div class="switch">
                        <input @if($results->status==1) checked @endif  onchange="updateStatus(this.id)" id="cmn-toggle-{{$results->pk_id}}" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                        <label for="cmn-toggle-{{$results->pk_id}}"></label>
                        </div></td>
                      <td><a href="{{url('/')}}/vendor/home/edit/product/{{$results->pk_id}}">Edit</a><a href="{{url('/')}}/vendor/home/view/product/{{$results->pk_id}}" style="margin-left:10px;">View</a><a href = "{{url('/')}}/vendor/home/delete/product/{{$results->pk_id}}" style="margin-left:10px;">Delete</a></td>

                    </tr>
                      
                    @endforeach
                    @endif
                  </tbody>
                </table><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <!-- /.box-footer -->
           </div>
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
    
  </div><!-- /.content-wrapper -->
  @endsection
 
  <script>
    function updateStatus(id)
    {
      CheckBox = id;
      id = id.split("-");
      id = id[2];
      cstatus = document.getElementById(CheckBox).checked;
      status= 0;
    
    if(cstatus)
      {
        status = 1;
      }
      else
      status=0;
      
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               alert("status updated");
            }
        };
        xmlhttp.open("GET", "{{URL('/')}}/vendor/home/view/product/status/update/"+id+"/"+status, true);
        xmlhttp.send();
    
    }
    </script>