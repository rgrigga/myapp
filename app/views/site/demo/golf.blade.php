<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Golf</title>
    
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
        <li><a href="{{URL::to('demo/foxtrot')}}"><- foxtrot</a></li>
        <li><a href="#" class="active">golf</a></li>
        <li><a href="{{URL::to('demo/hotel')}}">hotel -></a></li>
      </ul>
    </div>
  </div>
</nav>
<nav>
  <div class="nav navbar-inverse navbar-fixed-top admin-top">
    <div class="navbar-brand">Admin-top:</div>
    <div class="container">
          
      
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/foxtrot')}}"><- foxtrot</a></li>
        <li><a href="#" class="active">golf</a></li>
        <li><a href="{{URL::to('demo/hotel')}}">hotel -></a></li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .admin-top{
    background-color: yellow;
  }
</style>

<div class="container content-wrap">

  <h1>Golf</h1>
  <p class="lead">Fixed-navbar overlap problem fixed</p>
  <p>Here, we've fixed the overlapping navbar... for the moment.  I even added a second admin bar for illustration.  Please note that we added descriptive classes: "user-top" and "admin-top" to the navbars, and described our main content wrapper with the class: "content-wrap".  In my opinion, these are non-obtrusive additions, as they both describe "what it is" as opposed to "how it should look".  It is arguable to use "user-nav" vs "user-top", etc., but we'll leave that debate for another time.</p>

  <h2>Code:</h2>
  <p>Here's the relevant part of our updated HTML:</p>

  <pre>{{{'<html>
  <head></head>
  <body>
    <ul class="nav user-top">...</ul>
    <ul class="nav admin-top">...</ul>
    <div class="container content-wrap"></div>
  <!-- JS GOES HERE -->
  </body>
</html>'}}}</pre>
  <p>And here's the JS code again:</p>

  <pre>{{{"<script>
  $(document).ready(function(){
    $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
    $('.content-wrap') .css({'padding-top': (
        $('.user-top').height()
         + $('.admin-top').height()
         + 0 )+'px'
        });
  });
</script>"}}}</pre>

<h2>Explanation:</h2>
<p>JS first nestles the admin-top up against the user-top by setting the admin "margin-top" equal to the "user-top" height.  Similarly, it adds the user-top and admin-top together, and finally sets the "padding-top" of the "content-wrap" equal to that total.</p>

<h3>One more problem:</h3>
<p>Since we're using the document.ready function, this works on the initial pageload, but what if we resize the browser?  Assuming you're on a desktop, try it: resize your window to make it really narrow, and you'll see the problem.  If our menu "overflows" to the next line, it'll overlap our content again.
</p>
<p>To fix that, we'll extract our logic into a function, and then call it on both document.ready AND window.resize... go to the next page to see it in action...</p>

      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/foxtrot')}}"><- foxtrot</a></li>
        <li><a href="#" class="active">golf</a></li>
        <li><a href="{{URL::to('demo/hotel')}}">hotel -></a></li>
      </ul>

<!-- STOP EDITING CONTENT HERE  -->

  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        $('.content-wrap') .css({'padding-top': (
            $('.user-top').height()
             + $('.admin-top').height()
             + 0 )+'px'
            });
      });
    </script>
  </body>

</html>