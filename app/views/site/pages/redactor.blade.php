<!DOCTYPE html>
<html>
	<head>
		<title>Redactor in live</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- <link rel="stylesheet" href="/css/kube.css" /> -->
		<!-- <link rel="stylesheet" href="/css/live.css" /> -->
		<!-- http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/ -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
		<link rel="stylesheet" href="{{asset('assets/js/redactor/redactor.css')}}" />
		<script src="{{asset('assets/js/redactor/redactor.js')}}"></script>

		<script type="text/javascript">
		$(function() {
			$('#redactor_content').redactor();
		});
		</script>
	</head>
	<body>
		<div id="page">
			<p><a href="home">back to the site</a></p>
			<h2><a href="#redactor">Redactor Demo</a></h2>

			<textarea id="redactor_content" name="content" style="height: 560px;">
				<p>view-source:http://imperavi.com/redactor/live/</p>
			</textarea>
<h1>
	
</h1>
		</div>
	</body>
</html>