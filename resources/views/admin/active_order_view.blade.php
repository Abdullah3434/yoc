@extends('admin.layout.appadmin') 
@section('content') 
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Active Ordersdd </h1>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes -->
    <div class="row"> 
      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>
    </div>
    <!-- /.row --> 
    
    <!-- Main row -->
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-12"> 
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header with-border table-responsive">
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
                          <option value="1">Shipped</option>
                          <option value="2">Canceled</option>
                          <option value="3">Returned</option>
                          <option value="4">Delivered</option>
                        </select>
                      </div>
                      <button id="b1" type="button" class="btn btn-submmit">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <table id="example1" class="table no-margin">
                <thead>
                  <tr>
                    <th>O_ID</th>
                    <th>Customer Name</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
               
                    <th> Date</th>
                    <th style="cursor: pointer;">Status</th>
                    <th> Note</th>
                    <th> Actions</th>
                  </tr>
                </thead>
                <tbody>
                
                @if(count($result)>0)
                @foreach($result as $results)
                <tr>
                  <td>{{$results->pk_id}}</td>
                  <td>{{$results->fname}} {{$results->lname}}</td>
                  <td>{{$results->wallet_status}}</td>
                  @if($results->promo_amount == "")
                  <td><div class="sparkbar" data-color="#00a65a" data-height="20">PKR {{number_format($results->amount)}}</div></td>
                  @else
                  <td><div class="sparkbar" data-color="#00a65a" data-height="20">PKR {{number_format($results->promo_amount)}}</div></td>
                  @endif
                  <td>{{$results->placed_at}}</td>
                  @if($results->status == 1)
                  <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">shipped</span></td>
                  @else
                  <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">In progress</span></td>
                  @endif
                  <td>{{$results->note}}</td>
                  <td><a href="{{url('/')}}/admin/home/view/active/order/view/specific/order/{{$results->pk_id}}">View</a></td>
                </tr>
                @endforeach
                @endif
                  </tbody>
                
              </table>
              <!-- /.table-responsive --> 
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
</div>
<!-- /.content-wrapper --> 

@endsection