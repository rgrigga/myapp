<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			@section('meta-title')
			Parent
			@show
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

<!-- styles -->
@stylesheets("public-css")
<link rel="stylesheet" href="/assets/css/style.css">
<!-- <link rel="stylesheet" href="/assets/css/russstyle.css"> -->
<style>
	body{
		/*background-color: green;*/
	}

    @media (max-width: 979px) { 
            .navbar-fixed-top .navbar-inner, .navbar-fixed-bottom .navbar-inner {
            padding: 5px;
            padding-left: 20px;
            padding-right: 20px;
            }
         }

</style>
	</head>

	<!-- body -->
	<body>

		<!-- //these are the minimum requirements for bootstrap.  see also: -->
		<!-- //http://twitter.github.io/bootstrap/getting-started.html#html-template -->


		<div class="container">
			@section('nav')
			@include('site.partials.nav-top-inverse')
			@show

			<!-- @ yield('nav') -->
			@yield('content')
			@yield('footer')
		</div>


		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	</body>
</html>
