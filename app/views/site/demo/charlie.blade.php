<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Charlie</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

  	<h1>Charlie</h1>
    <p><strong>Adding Bootstrap</strong></p>
    <a href="{{URL::to('demo/beta')}}"><- beta</a>
    <a href="#">Charlie</a>
    <a href="{{URL::to('demo/delta')}}">delta -></a>

    <p>Right off the bat, we notice major visual changes on this page.  We've accomplished this by including the Twitter Bootstrap system with exactly 3 lines of code:

    <h2>1. Within our {{{'<head>'}}}:</h2>
     <h3>Code:</h3>
<p><pre>{{{'<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
    
    <title>Demonstration Charlie</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>'}}}</pre></p>
  <h3>Explanation:</h3>
  <p>We've added a single line here: <pre>{{{'<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">'}}}</pre> This tells the computer to look in the specified directory to find our bootstrap CSS file.  It is assumed you've downloaded & extracted it there, of course... more on that another time...</p>
        <h2>2. at the very end of our {{{'<body>'}}}:</h2>
          <h3>Code:</h3>
          <pre>{{{'    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
  </body>'}}}</pre>
          <h3>Explanation:</h3>
<p>Please note that it is important to load jquery <em>before</em> bootstrap; otherwise, bootstrap would not work.</p>
<p>Now, these lines of course assume that you've downloaded bootstrap and jquery to the correct directories.  There are other ways to do it, too: a CDN for example.  We'll also use bootstrap.less later... but if you're stuck here for any reason, please follow <a href="http://getbootstrap.com/getting-started/">these directions</a> carefully (it's just a download & unzip, really), then come back here.</p>
<p>PS: we're not going to be using glyphicons... so you can safely neglect downloading those if you like.</p>
<hr>
    <p>Next, we'll add a more formal navigation structure.</p>
    <a href="{{URL::to('demo/beta')}}"><- beta</a>
    <a href="#">Charlie</a>
    <a href="{{URL::to('demo/delta')}}">delta -></a>
<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
  </body>

</html>