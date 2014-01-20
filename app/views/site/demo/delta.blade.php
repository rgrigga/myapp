<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Delta</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

<nav>
  <ul>
    <li><a href="{{URL::to('demo/charlie')}}"><- charlie</a></li>
    <li><a href="#">Delta</a></li>
    <li><a href="{{URL::to('demo/echo')}}">echo -></a></li>
  </ul>
</nav>

  	<h1>Delta</h1>
<p class="lead">slightly improved navigation</p>
<p>The only change on this page is that we've added a {{{'<nav>'}}} element and an unordered list.</p>

<pre>{{{'<nav>
  <ul>
    <li><a href="http://myapp.gristech.com/demo/charlie">&lt;- charlie</a></li>
    <li><a href="http://myapp.gristech.com/demo/echo">echo -&gt;</a></li>
  </ul>
</nav>'}}}</pre>

<p>It's important to note that we <em>could</em> quickly hard-code a few classes into the UL to get some fancy styling like this:</p>

  <ul class="nav nav-pills">
    <li><a href="{{URL::to('demo/charlie')}}"><- charlie</a></li>
    <li class="active"><a href="{{URL::to('demo/delta')}}">delta</a></li>
    <li><a href="{{URL::to('demo/echo')}}">echo -></a></li>
  </ul>

<pre>{{{'<ul class="nav nav-pills">
  <li><a href="http://myapp.gristech.com/demo/charlie">&lt;- charlie</a></li>
  <li class="active"><a href="http://myapp.gristech.com/demo/delta">delta</a></li>
  <li><a href="http://myapp.gristech.com/demo/echo">echo -&gt;</a></li>
</ul>'}}}</pre>
Many stylish variations are available: see the <a href="http://getbootstrap.com/components/#nav">Bootstrap Docs</a>
<h3>However...</h3>
<p>I have a problem hardcoding any "visual" class into this UL.  It violates <em>separation of concerns</em>.  The class "nav-pills" describes <em>How it should look</em>, but our core HTML should only provide our content in terms of <em>what it is</em>.  This:</p>
<pre>{{{'<ul class="nav">'}}}</pre>
<p>is OK, because it's describing what it is: a nav element.</p>
<p>Moving toward HTML5, we would use:</p>
<pre>{{{'<nav>'}}}</pre>
<p>Again, the issue is <strong>separation of concerns</strong>.  Think about the difference between a structural layer and a visual (presentation) layer.  Twitter, (or perhaps the bootstrap team), has been criticized for violating best practices, and I think this is a good example... and it's confusing for a beginner reading the Bootstrap docs, and trying examples that dump hard-coded classes everywhere like this.</p>
<p>There may be a better way... using Javascript to apply classes, and therefore isolate all presentation logic.  We will let this issue go for the moment, but we should always be aware of it, and we will revisit it a bit later.</p>

<nav>
  <ul>
    <li><a href="{{URL::to('demo/charlie')}}"><- charlie</a></li>
    <li><a href="#">Delta</a></li>
    <li><a href="{{URL::to('demo/echo')}}">echo -></a></li>
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