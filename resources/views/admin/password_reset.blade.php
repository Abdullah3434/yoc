<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/bootstrap.min.css">
<!--===============================================================================================-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/util.css">
	<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="login p-t-20">
                	<a href=""><img src="{{URL('/')}}/images1/logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action = "{{url('/')}}/admin/password/reset" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
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
                    <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Reset
                            </button>
                        </div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{URL('/')}}/js1/jQuery-2.1.4.min.js"></script>
<!--===============================================================================================-->
	<script src="{{URL('/')}}/js1/main.js"></script>

</body>
</html>