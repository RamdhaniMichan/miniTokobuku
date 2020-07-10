<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
</head>
<body>
	@include('layout.header')
	@yield('content')
	@include('layout.footer')
	<script src="{{asset('js/bootsrap.js')}}"></script>
	<script src="{{asset('js/jquery-3.5.1.js')}}"></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	<script>window.jQuery || document.write('<script src="vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('vendor/popper.min.js')}}"></script>
    <!-- <script src="../../../../dist/js/bootstrap.min.js"></script> -->
    <script src="{{asset('vendor/holder.min.js')}}"></script>
	<script>
		$('.date').datepicker({
			format: "yyyy/mm/dd",
			autoclose : "true"
		});
	</script>
</body>
</html>