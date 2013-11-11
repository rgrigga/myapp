<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Kilo</title>
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/kilo.less" />
    
    <!-- less.js, which compiles less on the fly -->
    <script src="/assets/js/less.js" type="text/javascript"></script>

  </head>

  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

<nav>
  <div class="nav navbar-inverse navbar-fixed-top user-top">
    <div class="navbar-brand">User-top:</div>
    <div class="container">
          
      
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/january')}}"><- january</a></li>
        <li><a href="#" class="active">Kilo</a></li>
        <li><a href="{{URL::to('demo/lima')}}">lima -></a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container content-wrap">
  <h1>Kilo</h1>
  <p class="lead">LESS Basic color variables</p>

  <p>So there you have it, we reversed the site's look with about 4 lines of code - exactly 4 words, actually</p>
  <pre>{{{'body{
  background-color: @dark; //was light
}
p,h1,h2,h3,h4,h5,h5,li{
  color:@light; //was dark
}

.navbar-inverse{
  background-color: @light; //was dark
  color:@dark; //was light
}'}}}</pre>

<p>This is just the tip of the iceberg when it comes to variables and color manipulation.  We can also mathematically lighten, darken, or spin the color wheel.  And so much more.  We'll use each of those techniques on the next page.</p>
<p>On the next page, we'll also begin using mixins to actually move things around on the page, make columns, and some other structural changes.</p>
</div>

<ul class="nav navbar-nav">
  <li><a href="{{URL::to('demo/january')}}"><- january</a></li>
  <li><a href="#" class="active">Kilo</a></li>
  <li><a href="{{URL::to('demo/lima')}}">lima -></a></li>
</ul>

<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/demo.js"></script>

  </body>

</html>