<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Indigo</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

<nav>
  <div class="nav navbar-inverse navbar-fixed-top user-top">
    <div class="navbar-brand">User-top:</div>
    <div class="container">
          
      
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/hotel')}}"><- hotel</a></li>
        <li><a href="#" class="active">India</a></li>
        <li><a href="{{URL::to('demo/january')}}">january -></a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container content-wrap">

  <h1>India</h1>
  <p class="lead">Externalizing style sheets</p>
  
<h3>Consider JS & CSS</h3>
<p>On the next page, and thereafter, I'm moving our custom javascript function to an external file.  It's as simple as creating a blank file and pasting our JS there (without the script tags), then calling on our page with a single line.  In my case, I'm making a file called "mydemo.js" and storing it as "/assets/js/mydemo.js".  (actually, I'll make a january.js and a kilo.js to illustrate changes, but my "produciton" page will be "mydemo.js").</p>
<p>Why is this important? This way, instead of embedding the entire script into this page (or any other) we can make changes in ONE place, and re-use the script in other projects.  Perhaps even more importantly, it will be easier to track down our problem if all our JS is in one place.</p>
<p>The same concept (external sheets vs. re-coded on each page) will apply to our CSS and our LESS.  BTW, never use inline-styles if at all avoidable... just trust me, it will make your life easier.</p>
<p>Here's what our code will look like at the bottom of each page from here on out:</p>
<pre>{{{'...
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/demo.js"></script>
  </body>
</html>'}}}</pre>

<p>Next up: styling (we'll really be doing it now!)</p>

<!-- <p class="muted credit">by the way, I realize it should be "india" not "indigo". Oops!</p> -->

      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/hotel')}}"><- hotel</a></li>
        <li><a href="#" class="active">india</a></li>
        <li><a href="{{URL::to('demo/january')}}">january -></a></li>
      </ul>



<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>

    <script>
      function fixMyOverlap(){
        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        $('.content-wrap') .css({'padding-top': (
            $('.user-top').height()
             + $('.admin-top').height()
             + 0 )+'px'
            });
      }
      $(document).ready(function(){
        fixMyOverlap();
      });
      $(window).resize(function(){
        fixMyOverlap();
      });
    </script>
  </body>

</html>