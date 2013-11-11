<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Lima</title>
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- LESS stylesheet -->
    <!-- <link rel="stylesheet/less" type="text/css" href="/assets/css/less/mydemo.less" /> -->
    
    <!-- less.js, which compiles less on the fly -->
    <!--<script src="/assets/js/less.js" type="text/javascript"></script>
-->
  </head>

  <body>
<h1>NO LESS, NO JAVASCRIPT</h1>
<p>The lesson here is that the layout of the page still makes sense, even if all of our fancy styles fail for some reason.</p>
<hr>
<!-- EDIT CONTENT FROM HERE DOWN -->

<nav>
  <div class="nav navbar-inverse navbar-fixed-top user-top">
    <div class="navbar-brand">User-top:</div>
    <div class="container">
          
      
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/kilo')}}"><- kilo</a></li>
        <li><a href="#" class="active">Lima</a></li>
        <li><a href="{{URL::to('demo/mike')}}">mike -></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container content-wrap">
  <div class="content-header">
    <h1>Lima</h1>
    <p class="lead">Refactoring page structure & beginning LESS mixins</p>
  </div>


  <div class="content-main">
    <h2>HTML</h2>
    <p>On this page, We've changed things up alot, but it's again, only a few lines of code here and there.  First of all, I am refining my structure a bit, to include 5 primary areas on the page:</p>

    <style>
      div.shaded{
        background-color: rgba(10,50,150,.2);
        min-width: 20px;
        min-height: 20px;
        margin-top: 5px;
        padding: 10px;
        border: solid black 2px;
      }
    </style>
    <p>Here's a visualization of this idea:</p>
    <div class="shaded">
      body
      <div class="shaded">nav</div>
      <div class="shaded">content-wrap
        <div class="shaded">content-header</div>
        <div class="shaded">content-main</div>
        <div class="shaded">content-secondary</div>
      </div>
      <div class="shaded">footer</div>
    </div>

    <p>Please note that the structure is very simple, and the names are consistent, yet very flexible.</p>
  </div><!-- ./content-main -->

  <div class="content-secondary">
    <h2>LESS</h2>
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#mycode">View Code</button>
    <div class="collapse" id="mycode">
<pre>{{{'<html>
  <head></head>
  <body>
    <div class="nav"></div>
    <div class="container content-wrap">
      <div class="content-header"></div>
      <div class="content-main"></div>
      <div class="content-secondary"></div>
    </div>
    <div class="footer"></div>
  </body>
</html>'}}}</pre>
    </div>
  </div><!-- ./content-secondary -->

</div><!-- ./content-wrap -->

<div class="footer">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="{{URL::to('demo/kilo')}}"><- kilo</a></li>
      <li><a href="#" class="active">Lima</a></li>
      <li><a href="{{URL::to('demo/mike')}}">mike -></a></li>
    </ul>
  </div>
</div>

<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/demo.js"></script>
-->
  </body>

</html>