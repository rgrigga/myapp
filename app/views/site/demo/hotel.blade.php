<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Hotel</title>
    
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
        <li><a href="{{URL::to('demo/golf')}}"><- golf</a></li>
        <li><a href="#" class="active">hotel</a></li>
        <li><a href="{{URL::to('demo/india')}}">india -></a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container content-wrap">

  <h1>Hotel</h1>
  <p class="lead">TOTALLY fixed: navbar overlap problem</p>
  <p>That's better... try resizing, and you'll see that if/when the navbar height changes, so will the content-wrap.</p>
  <p>Again, this solution should work across all browsers, all screen sizes, all nav-bar heights, for one or both navbars, and... if we ever want/need to make changes, it is assumed that we won't break much else.  We can easily change between "user-top" or "user-nav" as mentioned earlier, by just changing a few words of code.  Again, requirements are: semantically named navbars and a "content-wrap", the inclusion of jquery, and the inclusion of our little function:</p>
  <pre>{{{"<script>
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
</script>"}}}</pre>

<p>Also notice the function allows for "fine-tuning" (change the "0" values to 10 or 20 or whatever (pixels) to tweak the placement up or down if desired.</p>

<p>Next up: externalizing our custom javascript</p>
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/golf')}}"><- golf</a></li>
        <li><a href="#" class="active">hotel</a></li>
        <li><a href="{{URL::to('demo/india')}}">india -></a></li>
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