@extends('client.layout.app')
@section('content')
<div class="col-lg-4 col-md-4 col-sm-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12">
        <div class="oder_form " style="border:0px;">
    <div class="right_col" role="main">
      <div class="">
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="border:none;">
              <div class="x_content">
                <div class="member-left-side">
                  <h2>Your Blance is</h2>
                  <div class="c100 p50 big">
                    <span>PKR {{$balaces}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
        </div>
@endsection