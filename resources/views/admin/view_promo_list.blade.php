@extends('admin.layout.appadmin')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View promo code
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
                <div class="box-header with-border table-responsive">
                <div class="box-body ">
                    <table id="example1" class="table no-margin">
                      <thead>
                        <tr>
                          <th>P_Code</th>
                          <th>Discount Type</th>
                           
                            <th>Promo Use Time</th>
                          <th>Discount Amount</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <!-- <th>Min Subtotal</th>
                          <th>Max Subtotal</th> -->
                          <th>Is Active?</th>
                          <th style="cursor: pointer;"> Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(count($result1)>0)
                          @foreach($result1 as $results)
                        <tr>
                          <td>{{$results->promo_code}}</td>
                          <td>{{$results->discount_type}}</td>
                          <td>{{$results->use_time}}</td>
                          <td>{{$results->discount_amount}}</td>
                         <td>{{$results->start_date}}</td>
                           <td>{{$results->end_date}}</td>
                           <!-- <td>{{$results->min_total}}</td>
                           <td>{{$results->max_total}}</td> -->
                           <td><div class="switch">
                                <input @if($results->status==0) checked @endif  onchange="updateStatus(this.id)" id="cmn-toggle-{{$results->pk_id}}" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                                <label for="cmn-toggle-{{$results->pk_id}}"></label>
                                </div>
                          </td>
                         
                      
                          <td>
                              @php
                             $idd = $results->pk_id;
                              $id =  DB::select("select* from promo_for where promo_id= '$idd'");
                              
                              @endphp
                               
                          <a href="{{url('/')}}/admin/home/view/promo/{{$id[0]->promo_id}}">view </a>
                         
                          <td>
                          <a href="{{url('/')}}/admin/home/delete/promo/{{$id[0]->promo_id}}">Delete</a></td>
                         
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

     <script>
            function updateStatus(id)
            {
              CheckBox = id;
              id = id.split("-");
              id = id[2];
              cstatus = document.getElementById(CheckBox).checked;
              status= 1;
            
            if(cstatus)
              {
                status = 0;
              }
              else
              status=1;
              
              var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       alert("status updated");
                  
                    }
                };
                xmlhttp.open("GET", "{{URL('/')}}/admin/home/view/promo/status/update/"+id+"/"+status, true);
                xmlhttp.send();
            
            }

        </script>