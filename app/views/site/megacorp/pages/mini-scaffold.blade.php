<!DOCTYPE html>
<html lang="en">
	<head>
		@section('styles')
		    @stylesheets("bs3-css")
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
			<link rel="stylesheet" href="/assets/css/wysihtml5/bootstrap-wysihtml5.css">
			<link href="/assets/js/bootstrap-wysiwyg/index.css" rel="stylesheet">
			<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

			<!-- This display's the company's less page -->
			<link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

			<!-- This is one method of LESS processing: -->
			<script src="/assets/js/less.js" type="text/javascript"></script>

			<style>
			.piwik{
				background-color: blue;
			}
			</style>
		@show
	</head>
	<body>
		<nav>
			
		</nav>
		<div class="page-header">
			
		</div>
		<div class="content-main">
			@yield('main')
		</div>
		<div class="secondary">
			
		</div>
		<footer>
			
		</footer>
	</body>
</html>