@extends('vendor.layout.appvendor')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Cancel Products
      </h1>
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
                      <th> Name</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($result>0)
                    @foreach($result as $results)
                    <tr>          
                      <td>{{$results->sku}}</td>
                      <td>{{$results->name}}</td>
                      <td>{{$results->price}}</td>
                      <td>{{$results->category}}</td>
                      <td><span class="label label-primary" >Cancel</span></td>
               
                      <td><a href="{{url('/')}}/vendor/home/view/product/{{$results->pk_id}}">View</a></td>

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
        xmlhttp.open("GET", "{{URL('/')}}/admin/home/view/product/status/update/"+id+"/"+status, true);
        xmlhttp.send();
    
    }
    </script>