<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Laravel</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- ここtailwindcss化が終わったらあとで消す -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- ここtailwindcss化が終わったらあとで消す -->

</head>
<body>
	<div class="container">
		@yield('content')
	</div>

</body>
</html>
