<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="{{asset('login-ui/image/png')}}" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-ui/css/main.css')}}">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	@yield('content')
	<script src="{{asset('login-ui/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('login-ui/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('login-ui/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login-ui/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('login-ui/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('login-ui/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login-ui/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('login-ui/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('login-ui/js/main.js')}}"></script>

</body>
</html>