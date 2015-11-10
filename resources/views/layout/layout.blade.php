<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
			<li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
		</ul>
	</nav>

	@yield('content')

</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>