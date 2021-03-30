@extends('client.layout.app')
@section('content')
		<div class="container">
			<div class="limiter m-t-20 m-b-20">
				<div class="container-login100">
				<div class="wrap-login100">
                <form method="post" action = "{{url('/')}}/login" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					{{ csrf_field() }}
					<span class="login100-form-title">
						Login
					</span>
					@if($errors->any())
<div class="danger">
  <p><strong></strong>{{$errors->first()}}</p>
</div>
@endif
						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
									<input type="email" class="input100" name="username"  placeholder="Enter your Email" autocomplete="false"/>
						<span class="focus-input100"></span>
						</div>
						

						<div class="wrap-input100 validate-input" data-validate = "Please enter password">
									<input type="password" class="input100" name="password" placeholder="Enter your Password" autocomplete="new-password"/>
						</div>
						<div class="text-right p-t-13 p-b-23">
						<a href="{{URL('/')}}/password/reset" class="txt2">
							Forget Password?
						</a>
					</div>

						<div class="container-login100-form-btn">
                                <button name="submit" type="submit" class="login100-form-btn">	<b>LOGIN</b></button>
							</div>
                          
                          <div class="or-seperator"><i>or</i></div>
                    <div class="wrap-input100 validate-input"> <a href="{{ url('/') }}/login/facebook" class=" login100-form-btn fbbtn"><i class="fa fa-facebook" style="margin-right:10px;color:#FFFFFF;"></i>|<span style="margin-left:10px; color:#FFFFFF;">LOG IN WITH FACEBOOK</span></a> </div>
<div class="or-seperator"><i>or</i></div>
<div class="wrap-input100 validate-input"> <a href="{{ url('/') }}/login/google" class="login100-form-btn gbtn"><i class="fa fa-google" style="margin-right:10px;color:#FFFFFF;"></i>|<span style="margin-left:10px; color:#FFFFFF;">LOG IN WITH GOOGLE</span></a> </div>
					
                          
              <div class="center">

						<a href="{{URL('/')}}/signup" class="txt3">
							Sign up now
						</a>
                       
					</div>
					
					
					</form>
					<div class="login100-form validate-form p-l-55 p-r-55 p-b-20">
							
							                    </div>
					</div>
				</div>
			</div>
		</div>	
        
 @endsection