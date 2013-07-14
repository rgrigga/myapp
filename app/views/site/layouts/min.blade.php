<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			@yield('meta-title')
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
	</head>

	<!-- body -->
	<body>
		<!-- //these are the minimum requirements for bootstrap.  see also: -->
		<!-- //http://twitter.github.io/bootstrap/getting-started.html#html-template -->

		@yield('content')
		<!-- <h1>hello world!</h1> -->

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<!-- //redactor? -->
		<!-- compiled? -->
	</body>
</html>
