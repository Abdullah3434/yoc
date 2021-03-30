@extends('admin.layout.appadmin')
<script>
  var OrgID=-1;
    function getId(id)
    {
  
      
      OrgID = id;
      return true;
    }
    function getreal()
    {
      alert(OrgID);
      
     
    }
    
    
  
  </script>
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Vendors
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
                        <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                      
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Status Change</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Update Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option>Select status</option>
                                        <option value="0">Active</option>
                                        <option value="1">Blocked</option>
                                          
                                   
                                    </select>
                             </div>
                             <button id="v1" type="button" class="btn btn-submmit">Submit</button>
                            </div>
                          </div>
                      
                        </div>
                      </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th> ID</th>
                      <th> Name</th>
                      <th>Email</th>
                      <th>Store Name</th>
                      <th> Phone</th>
                            <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($result>0)
                    @foreach($result as $results)
                    <tr>   
                    <td>{{$results->id}}</td>
                      <td>{{$results->fname}} {{$results->lname}}</td>
                      <td>{{$results->email}}</td>
                      <td>{{$results->store_name}}</td>
                      <td>{{$results->phone}}</td>
                       @if($results->vendor_status == 1)
                      <td><span id="{{$results->id}}" onclick="getId(this.id)" class="label label-danger" data-toggle="modal" data-target="#myModal">Blocked</span></td>
          
          @elseif($results->vendor_status == 0)
            <td><span id="{{$results->id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">Active</span></td>
              @else
            <td><span id="{{$results->id}}" onclick="getId(this.id)" class="label label-warning" data-toggle="modal" data-target="#myModal">Pending</span>
            <a href="{{url('/')}}/admin/home/delete/vendor/{{$results->id}}">Delete</a></td>
           @endif
           
                      
                      <td><a href="{{url('/')}}/admin/home/view/vendor/{{$results->id}}">View</a></td>

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
 