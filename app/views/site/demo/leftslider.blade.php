<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <title>Off Canvas Template for Bootstrap</title>




    <!-- Bootstrap core CSS -->
    <!-- <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/leftslider.less" />
    
    <!-- less.js, which compiles less on the fly -->
    <script src="/assets/js/less.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <!-- <link href="/assets/bs3/css/offcanvas.css" rel="stylesheet"> -->



  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse user-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="offcanvas">
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
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container content-wrap">
<!-- <div class="visible-xs">
	X-Small!
</div>
<div class="hidden-xs">
	Hidden!
</div> -->

      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-12 col-sm-8">
<!--           <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs visible-xs" data-toggle="offcanvas">Toggle nav</button>
          </p> -->
          <div class="jumbotron">

            <h1>Left Slider Demo</h1>
            <img class = "pull-left img-responsive" src="{{asset('assets/ico/myapp/left.png')}}" alt="">
            <p class="lead">Looking for OLAC? <a href="{{URL::to('viviosoft/demo/olac')}}">GO</a></p>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            <p class="text-muted"><small><em>Adapted from <a href="http://getbootstrap.com/examples/offcanvas/">http://getbootstrap.com/examples/offcanvas/</a></em></small></p>
          </div>

<h2>What it does:</h2>
<p>On larger screens, a "side-menu" appears to the right.</p>
<p>On an "XS" sized screen, the "side menu" desappears, and the "navbar button" (hot dog button) appears.</p>
<p>When the user clicks the hot dog button, the menu slides in from the left.  Click it again to toggle.</p>


<h2>Requirements:</h2>
<h3>Bootstrap 3.0.0</h3>
<h4>Bootstrap CSS</h4>
<p>included in {{{'<head>'}}}</p>              
<pre>
{{{'<!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">'}}}
</pre>
<h4>Jquery & Bootstrap JS</h4>
<p>At the bottom of the document, just before the closing{{{'</body>'}}} tag</p>
<pre>
{{{'<script src="/assets/js/jquery.v1.8.3.min.js"></script>
<script src="/assets/dist/js/bootstrap.min.js"></script>'}}}
</pre>

<h3>A little custom CSS</h3>
<p>included in {{{'<head>'}}}</p> 
<pre>
{{{'<!-- Custom styles for this template -->
<link href="/assets/bs3/css/offcanvas.css" rel="stylesheet">'}}}
</pre>
<h3>A little Javascript</h3>
<p>Included at the bottom of the page for this example:</p>
<pre>
{{{"$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});"}}}
</pre>

<h3>Some LESS</h3>
<p>Here's the LESS code that finishes the sidebar styling.  All the above mentioned CSS should be moved into this.</p>
<pre>
{{{'@dkgrey:#48484a;
@ltgrey:#818285;
@white:#fff;

.sidebar-nav{
  padding: 5px;
  background-color: @ltgrey;
  ul > li {
    &.active{background-color: @dkgrey}
    a{
      color: @white;
      &:hover{ background-color: @dkgrey }
      &:focus{ background-color: @dkgrey }
    }
    // background-color: @ltgrey;
    color: @white;
  }
}

.sidebar-nav header{
  padding: 5px;
  background-color: @dkgrey;
  ul > li {
    &.active{background-color: @ltgrey}
    a{
      color: @white;
      &:hover{ background-color: @ltgrey }
      &:focus{ background-color: @ltgrey }
    }
    // background-color: @ltgrey;
    color: @white;
  }
}

.open > .dropdown-menu {
background-color: @dkgrey;
  li {
    &.active{background-color: @dkgrey}
    a{
      color: @white;
      &:hover, &:focus{ 
        background-color: @ltgrey;
        color: @white;
       }

    }
  }
}

.nav .open > a, .nav .open > a:hover, .nav .open > a:focus{
  background-color: @dkgrey;
  color: @white;
'}}}
</pre>

          <div class="row">

            <div class="well col-6 col-sm-6 col-lg-4">
              <h3>One problem with the original example:</h3>
              <p><img class="img-responsive" src="{{asset('assets/viviosoft/problem.png')}}" alt="problem"></p>
              <p>
                On a "re-sized desktop", The menus "jump" around.  After a user has moused-over a few dropdown menus, the menus fail to "reset", leaving a somewhat ugly problem.</p>
              <p></p>
              
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="sidebar-nav">
            <header>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="icon-search"></i><!-- Search --></button>
                </span>
              </div><!-- /input-group -->
              <ul class="nav nav-pills">
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Join</a></li>
              </ul>
            </header>
            <ul class="nav">
              <li>Sidebar</li>
              <li class="active"><a href="#">Active Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li>Sidebar</li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <i class="icon-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Link</a></li>
                </ul>
              </li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li>Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/olac.js"></script>
<script>
$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
</script>

  </body>
</html>
