@extends('vendor.layout.appvendor')

@section('content')


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="border-bottom:3px solid #ab0f23;">
          <h1 style="margin-bottom:20px;">
            Earnings
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <!-- TABLE: LATEST ORDERS -->
             
                    @if(count($result)>0)
                    @foreach($result as $results)
              <h2 style="color:#ab0f23;">Amount To Be Paid: PKR {{number_format($results->payment)}}</h2>
              @endforeach
              @else
                  <h2 style="color:#ab0f23;margin:0px;">Amount To Be Paid:PKR 0</h2>
                    
              @endif
              <br><br><br><br><br><br><br><br><br><br>
              
              
              
              
              
              
                <!-- /.box-header -->
                <!-- /.box-footer -->
                <!-- /.box-footer add button next/previus
                
                
                
                
                 -->
            
            </div><!-- /.col -->
            
            
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     @endsection