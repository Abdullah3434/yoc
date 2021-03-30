@extends('admin.layout.appadmin')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Brands
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
                <table id="example1" class="table no-margin">
                  <thead>
                    <tr>
                      <th>ID_NO</th>
                      <th>Brand Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if($result>0)
                        @foreach($result as $results )
                        <tr>          
                          <td>{{$results->SKU}}</td>
                          <td>{{$results->brand_name}}</td>
                          <td><a href="{{URL('/')}}/admin/home/edit/brand/{{$results->SKU}}">Edit</a>
                              <a href="{{URL('/')}}/admin/home/delete/brand/{{$results->SKU}}" style="margin-left:10px;">Delete</a></td>
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