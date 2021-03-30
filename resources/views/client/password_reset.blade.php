@extends('client.layout.app')
@section('content')
<div class="container">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action = "{{url('/')}}/password/reset" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					{{ csrf_field() }}
					<span class="login100-form-title">
						Reset Your Password
					</span>
					@if($errors->any())
<div class"alert alert-danger">{{$errors->first()}}</div>
@endif
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Enter the Username you want to reset">
						<span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn p-b-40">
                            <button class="login100-form-btn">
                                Reset
                            </button>
                        </div>
				</form>
			</div>
		</div>
	</div>
	</div>
 @endsection