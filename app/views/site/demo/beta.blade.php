<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration Beta</title>    
  </head>
  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->

  	<h1>Beta</h1>
    <p><strong>Basic meta changes</strong></p>
    <a href="{{URL::to('demo/alpha')}}"><- back to alpha</a>
    <a href="#">Beta (this page)</a>
    <a href="{{URL::to('demo/charlie')}}">next : charlie -></a>

    <p>We'll consider 4 changes on this page, all within the {{{'<head>'}}}:
    </p>
    <p>Here's what the top of the document looks like now:</p>
<pre>
{{{'<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
    
    <title>Demonstration Beta</title>
  </head>'}}}
</pre>
<h2>Explanation:</h2>
<ol>
  <li><pre>{{{'<html lang="en">'}}}</pre> tells the browser we're speaking english</li>
  <li><pre>{{{'<meta charset="utf-8">'}}}</pre> this is a standard, and helps avoid encoding issues... just do it</li>
  <li><pre>{{{'<meta name="viewport" content="width=device-width, initial-scale=1.0">'}}}</pre> This is a very important step when building responsive websites.  Had you viewed the previous page on a phone, it would have been tiny, so you'd have to zoom in and whatnot just to read it.  This meta-tag tells the browser... well, look carefully at the tag, you should be able to figure it out.</li>
  <li><pre>{{{'<link rel="shortcut icon" href="/assets/ico/myapp/left.png">'}}}</pre> More on this another time, but this line adds a custom 'favicon' in one of its simplest forms.</li>
</ol>

<p>Next, we'll introduce bootstrap...</p>
<a href="{{URL::to('demo/alpha')}}"><- back to alpha</a>
<a href="{{URL::to('demo/charlie')}}">next : charlie -></a>

<!-- STOP EDITING CONTENT HERE  -->

  </body>

</html>