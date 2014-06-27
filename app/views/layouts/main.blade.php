<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/bootstrap.min.css">
	@yield('style')
	<title>@yield('title')</title>
	<link rel="stylesheet" href="">
</head>
<body>
<div style="text-align:center;">
@yield('content')
</div>
</body>
<script src="{{ URL::to('/') }}/js/bootstrap.min.js" type="text/javascript"></script>
@yield('script')
</html>