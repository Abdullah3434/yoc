<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>YOC | Comfort is just a click away</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="shortcut icon" href="{{URL('/')}}/pic/logo.png"/>
<!-- Bootstrap 3.3.4 -->
<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{{url('/')}}/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg">
<img src="{{url('/')}}/pic/logo.png" alt="logo">
<div class="login-page">
  <div class="form">
       @if($errors->any())
<div class="alert alert-danger">{{$errors->first()}}</div>
@endif
    @if(session()->has('message'))
    <div class="alert alert-success"> {{ session()->get('message') }} </div>
@endif
    <form method="post" action = "{{url('/')}}/vendor/password/change/{{$username}}" class="login-form">
      {{ csrf_field() }}
      <input type="password" name="password" placeholder="Enter Your New Password">
      <button>Submit</button>
    </form>
  </div>
</div>
</body>
<script>
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</html>