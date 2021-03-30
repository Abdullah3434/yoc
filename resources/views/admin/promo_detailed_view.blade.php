@extends('admin.layout.appadmin') 

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> View Promo </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row"> 
      <!-- Left col -->
      <div class="col-md-12"> 
        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header wip-border">
            <div class="row">
              
              
              <div class="productbox">
                <div class=" col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div itemscope="">
                            <h2> <span itemprop="name">promo</span></h2>
                            <tr>
                          <p>P_Code</p>
                          <p>Discount Type</p>
                            
                            <p>Promo Use Time</p>
                          <p>Discount Amount</p>
                          <p>Discount Category</p>
                          <p>Start Date</p>
                          <p>End Date</p>
                          <p>Min Subtotal</p>
                          <p>Max Subtotal</p>
                          <p>Is Active?</p>

                         
                           <p>Discount For</p>
                            
                        </tr>
                          </div>
                        </div>
                        @if($result1>0)
                        @foreach($result1 as $results)
                        <div class="col-xs-6  col-sm-6 col-md-6 col-lg-6">
                          <div itemscope="">
                            <h2> <span>Detail</span></h2>
                            <p>{{$results->promo_code}}</p>
                            <p>{{$results->discount_type}} </p>
                            <p>{{$results->use_time}} </p>
                            <p>PKR {{number_format($results->discount_amount)}}</p>

                            @if($results->discount_category=='0')
                            <p>....</p>
                            @else
                            <p>{{$results->discount_category}} </p>
                            @endif

                           
                            
                              @if($results->start_date==0)
                            <p>....</p>
                            @else
                            <p>{{$results->start_date}} </p>
                            @endif
                           
                             @if($results->end_date==0)
                            <p>....</p>
                            @else
                            <p>{{$results->end_date}} </p>
                            @endif
                            <p>{{$results->min_total}}</p>
                             @if($results->min_total==0)
                            <p>....</p>
                            @else
                            <p>{{$results->min_total}} </p>
                            @endif
                           <p>{{$results->max_total}}</p>
                            @if($results->max_total==0)
                            <p>....</p>
                            @else
                            <p>{{$results->max_total}} </p>
                            @endif
                            @if($results->status==0)
                            <p>Active
                            @else
                            Inavtive
                            @endif
                            </p>
                           
                              @php
                             $idd = $results->pk_id;
                            
                              $id =  DB::select("select* from promo_for where promo_id= '$idd'");
                         
                              @endphp
                            
                        <p>{{$id[0]->discount_for}}</p>
                       
                          </div>
                        </div>
                        @endforeach
                        @endif </div>
                    </div>
                  </div>
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
</div>
<!-- /.content-wrapper --> 

@endsection