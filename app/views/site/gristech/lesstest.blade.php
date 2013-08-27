<!doctype html>
<html>
	<head>
		<title>
			LESS Demo.
		</title>

<!-- If you're using laravel, and basset, this line is what you will need here: -->
<!-- @ stylesheets('bs3-css'); -->

<link rel="stylesheet/less" type="text/css" href="assets/css/less/sewcute.less" />
<script src="assets/js/less.js" type="text/javascript"></script>

	</head>
	<body>
		<div class="container">
			<h1>Welcome to the LESS test</h1>

			<div class="shape" id="shape1"></div>
		    <div class="shape" id="shape2"></div>
		    <div class="shape" id="shape3"></div>
		</div>
		<p>This page is my partial execution of <a href="http://verekia.com/less-css/dont-read-less-css-tutorial-highly-addictive">Don't read this tutorial</a></p>


There are 3 main methods you can use to use LESS.
<ol>
	<li>A simple line of javascript</li>
	<li>Manually compile each change</li>
	<li>Set up a server-side compiler</li>
	<li>Jason Lewis' Basset</li>
</ol>
<p>This page uses the first option. View the source to see what's going on.</p>

<p>If you'd prefer option number 2, here's how:</p>
Assuming you have node.js installed, we can run this on the command line:
<pre><code>
lessc master.less > master.css
</code></pre>
that is, until we get a better compiler running...
<blockquote><b>
Less provides the following color functions:

darken() and lighten(), which add some black or white,
saturate() and desaturate(), to make a color more “colorful” or more “grayscale”,
fadein() and fadeout(), to increase or reduce transparency,
and spin(), which modifies the hue of the color.</b>
</blockquote>



	</body>
</html>

