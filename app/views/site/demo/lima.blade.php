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
    <h1>Lima</h1>
    <p class="lead">Refactoring page structure & beginning LESS mixins</p>
  </div>


  <div class="content-main">
    <h2>HTML</h2>
    <p>There's alot happening on this page, but it's again, only a few lines of code here and there.  First of all, I am refining my structure a bit, to include 5 'major' areas on this page:</p>

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
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#mycode">View HTML Code</button>
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
<a class="btn btn-primary" href="{{URL::to('demo/lima2')}}">Visit mini page</a>
<a class="btn btn-primary" href="{{URL::to('demo/lima3')}}">Visit full page with no style</a>
    </div>
  </div><!-- ./content-main -->

  <div class="content-secondary">
    <h2>LESS</h2>
    <p>On the LESS side, we are making use of our first "mixin":</p>
    <pre>{{{'.content-main {
  .make-md-column(6);
}
.content-secondary {
  .make-md-column(6);
}'}}}</pre>
<p>That means "make 'content-main' 6 columns wide", and ditto for 'content-secondary'.</p>
<p>The "medium" part refers to "medium or bigger", and introduces the bootstrap grid-system.  There are 4 screen sizes... read all about it in the <a href="http://getbootstrap.com/css/#grid">Grid Docs</a> .</p>
<p>For now, when the screen is 992 pixels or wider, we've got a 2-column layout.  Smaller than that, and column 2 will "slide" under column 1.  THAT's responsive!</p>
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#mycode2">View LESS Code</button>
    <div class="collapse" id="mycode2">
<pre>{{{'@import "/assets/less/bootstrap.less";

// Oranges
@carrot:#e67e22;
@sunflower:#f1c40f;

//Greys:
@clouds: rgba(236, 240, 241,1.0);
@silver:#bdc3c7;
@concrete:#95a5a6;
@asbestos:#7f8c8d;

// Blues;
@asphalt:#34495e;
@midnight:rgba(44, 62, 80,1.0);
@belize:#2980b9;
@river:#3498db;


@dark:@asphalt;
@light:@clouds;

body{
  background-color: @light;
}
p,h1,h2,h3,h4,h5,h5,li{
  color:@dark;
}

.navbar-inverse{
  background-color: @dark;
  color:@light;
}

.content-header {
  padding: 15px;
  background-color: @asphalt;
  p,h1,h2,h3,h4,h5,h5,li{
    color:@clouds;
  }
}
.content-main {
  background-color: @clouds;
  .make-md-column(6);
}
.content-secondary {
  background-color: @dark;
  p,h1,h2,h3,h4,h5,h5,li{
    color:@light;
    }

  .make-md-column(6);
}

.footer{
  background-color: @dark;
  .make-row;
}'}}}</pre>
<p>You really should check out the <a href="http://lesscss.org/#reference">Less Docs</a></p>
<p>And who could forget <a href="http://getbootstrap.com/css/#grid-less">Bootstrap's Mixins</a></p>
<a class="btn btn-primary" href="{{URL::to('demo/lima2')}}">Visit mini html page</a>
<a class="btn btn-primary" href="{{URL::to('demo/lima3')}}">Visit full page with no style</a>
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
    <p>By the way, we told LESS to treat this footer with ".make-row", and gave it an internal <code>{{{'<div class="container">'}}}</code> just like we did the top-nav.</pre></p>
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