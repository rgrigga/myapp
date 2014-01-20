<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration January</title>
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/january.less" />
    
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
        <li><a href="{{URL::to('demo/india')}}"><- india</a></li>
        <li><a href="#" class="active">January</a></li>
        <li><a href="{{URL::to('demo/kilo')}}">kilo -></a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container content-wrap">
  <h1>January</h1>
  <p class="lead">Time for the good stuff</p>
  <p>Please note we haven't included a single line of CSS up to this point (except for the yellow admin bar a few steps back).  This page still doesn't exactly use CSS.  Instead, we're using LESS.</p>
  <p>LESS is a CSS pre-compiler, meaning that we give it LESS code, and it creates a CSS stylesheet behind the scenes.  This is infinitely more flexible, powerful, and maintainable than pure CSS. <strong>It's bad-ass!</strong></p>
  <p>It's a deep subject, and there is the LESS vs. SASS debate... but for now what's most important to realize is that we are keeping our styles completely seperate from our document's structure.</p>
  <h2>Changes to {{{'<head>'}}}</h2>
  <p>we're adding 2 lines:</p>
  <pre><code>{{{'<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
    
    <title>Demonstration January</title>
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/january.less" />
    
    <!-- less.js, which compiles less on the fly -->
    <script src="/assets/js/less.js" type="text/javascript"></script>

  </head>'}}}</code></pre>
  <p>Please note, I REMOVED the bootstrap.min.css (Actually, I commented it out.)  This is because it is being replaced by the <code>{{{'@import'}}}</code> statement in our mydemo.less file (see below).</p>

<h2>mydemo.less</h2>

  <p>For now, think of it as 3 sections:</p>
  <ol>
    <li>Color Definitions</li>
    <li>"Secondary" variables</li>
    <li>Assign colors to elements</li>
  </ol>
  <pre>{{{'// no docs clearly explain to include this first line,
// but it is necessary...
// how frustrating!
@import "/assets/less/bootstrap.less";

// DEFINITIONS /////////////////////
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

// SECONDARY VARIABLES //////////////
@dark:@asphalt;
@light:@clouds;

// ASSIGN TO ELEMENTS ///////////////
body{
  background-color: @light;
}
p,h1,h2,h3,h4,h5,h5{
  color:@dark;
}

.navbar-inverse{
  background-color: @dark;
  color:@light;
}'}}}</pre>

<p>If you study this for a moment, you'll see that by defining some variables, we can quickly make changes to the entire color scheme of the site by simply switching out a single word: for example, on the next page we will reverse the color scheme by reversing the "light" and "dark" values on our body, text, and navbar.</p>
</div>

<ul class="nav navbar-nav">
  <li><a href="{{URL::to('demo/india')}}"><- india</a></li>
  <li><a href="#" class="active">January</a></li>
  <li><a href="{{URL::to('demo/kilo')}}">kilo -></a></li>
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