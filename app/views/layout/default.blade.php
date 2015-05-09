<html>
<head>
	<title>Bikin validasi</title>

	{{ HTML::style('css/bootstrap.css') }}
</head>
<body>
	
	@yield('content')

	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.js') }}
</body>
</html>