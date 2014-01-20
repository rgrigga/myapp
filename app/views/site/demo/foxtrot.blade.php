<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Foxtrot</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

<nav>
  <div class="nav navbar-inverse navbar-fixed-top">
    <div class="container">
          
      
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('demo/echo')}}"><- echo</a></li>
        <li><a href="#" class="active">Foxtrot</a></li>
        <li><a href="{{URL::to('demo/golf')}}">golf -></a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">

  <h1>Foxtrot</h1>
  <p class="lead">Nav-top overlap problem</p>
  <p>Here, we've implemented a fixed-top navbar... But...</p>
  <p>You'll certianly notice a major problem with this page: the fixed-top navbar overlapps our main content.</p>
  <p>Personally, I don't like this problem at all, nor the <a href="http://getbootstrap.com/components/#navbar-fixed-top">suggested workaround</a>:</p>

<blockquote>
    <div class="panel panel-danger bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>

    <div class="highlight">
<pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-top</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span></code></pre>
    </div>

    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
  </div>
</blockquote>

  <p>This definitely works, but the big problem with this is what happens in case our navbar is NOT 50px high?  What if we add another navbar (for admin purposes, for example)?  What if padding on the body breaks some other technique?</p>
  <h3>A more flexible solution</h3>
  <p>I came up with a javascript solution: it is dependant on jquery (so is bootstrap itself), and on consistently named classes such as "user-top", "admin-top", and "content-main".  But assuming we can stick to a few naming conventions, this solution accomodates <strong>multiple navbars of unknown dimensions</strong>.</p>
  <p>I will implement this on the next page, but for now, please commit to remembering that this problem exists.  Also, I'm about to break a best practice by adding a line of javascript directly to the bottom of my document: the best practice will be to include an external javascript file... but we will fix that a few steps later...</p>

  <p>Here's the code we're about to use on the next page and thereafter:</p>
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



</div><!-- ./container -->

<nav>
  <ul>
    <li><a href="{{URL::to('demo/echo')}}"><- echo</a></li>
    <li><a href="#" class="active">Foxtrot</a></li>
    <li><a href="{{URL::to('demo/golf')}}">golf -></a></li>
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