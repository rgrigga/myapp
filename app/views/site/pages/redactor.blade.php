<!DOCTYPE html>
<html>
	<head>
		<title>Redactor live</title>

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
		        $('#content').redactor({
		            imageUpload: '/redactorUpload'
		        });
		     });
		</script>

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

<p>
	<a href="https://github.com/mindmup/bootstrap-wysiwyg/"><h1>bootstrap-wysiwyg</h1></a>
<pre>
Tiny bootstrap-compatible WISWYG rich text editor, based on browser execCommand, built originally for MindMup. Here are the key features:

Automatically binds standard hotkeys for common operations on Mac and Windows
Drag and drop files to insert images, support image upload (also taking photos on mobile devices)
Allows a custom built toolbar, no magic markup generators, enabling the web site to use all the goodness of Bootstrap, Font Awesome and so on...
Does not force any styling - it's all up to you
Uses standard browser features, no magic non-standard code, toolbar and keyboard configurable to execute any supported browser command
Does not create a separate frame, backup text areas etc - instead keeps it simple and runs everything inline in a DIV
(Optionally) cleans up trailing whitespace and empty divs and spans
Requires a modern browser (tested in Chrome 26, Firefox 19, Safari 6)
Supports mobile devices (tested on IOS 6 Ipad/Iphone and Android 4.1.1 Chrome)
Dependencies

jQuery http://jquery.com/
jQuery HotKeys https://github.com/jeresig/jquery.hotkeys
Bootstrap http://twitter.github.com/bootstrap/
</pre>

</p>
		</div>
	</body>
</html>