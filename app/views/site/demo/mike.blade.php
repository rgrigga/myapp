<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>OOPS 3~ </title>
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/mydemo.less" />
    
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
        <li><a href="{{URL::to('demo/kilo')}}"><- kilo</a></li>
        <li><a href="#" class="active">Lima</a></li>
        <li><a href="{{URL::to('demo/mike')}}">mike -></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container content-wrap">
  <div class="content-header">
    <h1>OOPS 3~</h1>
    <p class="lead">This "demo" is a work in progress.</p>
    <p>This is where I left off.  What do you think so far?</p>
  </div>


  <div class="content-main">
;)
  </div><!-- ./content-main -->

  <div class="content-secondary">
3~
  </div><!-- ./content-secondary -->

</div><!-- ./content-wrap -->

<div class="footer">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="{{URL::to('demo/kilo')}}"><- kilo</a></li>
      <li><a href="#" class="active">Lima</a></li>
      <li><a href="{{URL::to('demo/mike')}}">mike -></a></li>
    </ul>
    <p>By the way, we told LESS to treat this footer with ".make-row", and gave it an internal <code>{{{'<div class="container">'}}}</code> just like we did the top-nav.</pre></p>
  <span class="pull-right"><a href="/contact">&Pi;</a></span>
  </div>

</div>

<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/demo.js"></script>

  </body>

</html>