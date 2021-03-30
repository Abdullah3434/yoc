<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Fashion Factory | Comfort is just a click away</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="{{URL('/')}}/pic/logo.png"/>
<!-- Bootstrap 3.3.4 -->
<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/css/bootstrap-colorpicker.min.css" rel="stylesheet"/>
<!-- Font Awesome Icons -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- DATA TABLES -->
<link href="{{url('/')}}/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="{{url('/')}}/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{{url('/')}}/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg">
<img src="{{url('/')}}/pic/logo.png" alt="logo">
<div class="login-page">
  <div class="form">
    <form method="post" action = "{{url('/')}}/admin/login" class="login-form">
      {{ csrf_field() }}
      @if($errors->any())
      <div class"alert alert-danger">{{$errors->first()}}</div>
      @endif
      <input type="email" name ="username" placeholder="username"/>
      <input type="password" name ="password" placeholder="password"/>
      <div class="text-right p-t-13 p-b-23"> <span class="txt1"> Forgot </span> <a href="{{URL('/')}}/admin/password/reset" class="txt2"> Username / Password? </a> </div>
      <button>login</button>
    </form>
  </div>
</div>
</body>
</html>