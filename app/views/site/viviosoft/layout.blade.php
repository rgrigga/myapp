<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
	
	<!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/mydemo.less" />
    
    <!-- less.js, which compiles less on the fly -->
    <script src="/assets/js/less.js" type="text/javascript"></script>
	</head>
	<body>
	

	@section('nav')
		@include('site.viviosoft.partials.nav')
	@show

	<div class="container">
		@yield('main',"Main Seciton")
	</div>
		
	</body>
</html>