<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"> --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		.is-complete {
			text-decoration: line-through;
		}
	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

</body>
</html>
