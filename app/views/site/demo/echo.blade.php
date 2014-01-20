<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Echo</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

<nav>
  <ul>
    <li><a href="{{URL::to('demo/delta')}}"><- delta</a></li>
    <li><a href="#">Echo</a></li>
    <li><a href="{{URL::to('demo/foxtrot')}}">foxtrot -></a></li>
  </ul>
</nav>


<div class="container">

    <h1>Echo</h1>
<p class="lead">The Container</p>
<p>Before we move into a better way to style the nav (and other elements), we'll pause to wrap our content in a {{{'<div class="container">'}}} element. What this does is to center our page's content and "set max-width at various media-query breakpoints".</p>
<p>In other words, it gives us prettier margins, and begins to make responsiveness work.</p>
<p>To illustrate:</p>
<pre>{{{'<html>
  <head></head>
  <body>
    <div class="container">
      <!--content here-->
    </div>
  </body>
</html>'}}}</pre>
<p>On the next page, and in the future, we'll wrap our content, nav's, and other stand-alone elements in a similar fashion.  Please note that only a few "primary" containers will exist (so you don't wrap <em>everything</em> in it's own 'container', just the <em>major</em> structural elements.)</p>
<p>Here's another example from bootstrap's <a href="http://getbootstrap.com/examples/starter-template/">example starter template</a>: (notice the <code>{{{'<div class="container">'}}}</code>)</p>
<pre>{{{'<html>
  <head></head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <!--content here-->
    </div>
  </body>
</html>'}}}</pre>
<p>If you study the above, you'll notice that the "nav's container" is "inside" the "navbar" element.  

<pre>{{{'<div class="navbar">
  <div class="container">
    <!-- blah blah -->
  </div>
</div>'}}}</pre>
This allows a full-width navbar... I'll leave you to think about that on your own for a moment...</p>

Next-up: more styling...
</div>

<nav>
  <ul>
    <li><a href="{{URL::to('demo/delta')}}"><- delta</a></li>
    <li><a href="#">Echo</a></li>
    <li><a href="{{URL::to('demo/foxtrot')}}">foxtrot -></a></li>
  </ul>
</nav>

<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
  </body>

</html>