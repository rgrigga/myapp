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
			<p>This page is my partial execution of: <a href="http://verekia.com/less-css/dont-read-less-css-tutorial-highly-addictive"><strong>Don't read this tutorial</strong></a></p>

			<div class="shape" id="shape1"></div>
		    <div class="shape" id="shape2"></div>
		    <div class="shape" id="shape3"></div>
		</div>
		


There are 4 methods I have used to implement LESS:
<ol>
	<li>A single line of javascript</li>
	<li>Manually compile each change</li>
	<li>Set up a server-side compiler</li>
	<li>Jason Lewis' Basset (I have used with Laravel)</li>
</ol>
<p>This page uses the first option. View the source to see what's going on, or check out <a href="http://gristech.com/blog/less-hello-world-how-to-install-getting-started-tutorial/">Hello World in LESS</a></p>

<p>If you'd prefer option number 2, (manually compiling LESS) here's how:</p>
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

