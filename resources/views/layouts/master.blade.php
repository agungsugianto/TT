<!DOCTYPE html>
<html>
<head>
	<title>Latihan Template</title>
</head>
<body>
		@include('template.header')<br><br><br><br><br><br><br><br><br><br><br><br>
			@yield('a')<br>
		@include('template.footer')
		</body>
</html>