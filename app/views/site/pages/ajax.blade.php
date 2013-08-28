@extends('site.layouts.bs3')

@section('styles')
@parent
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

<!-- This display's the company's less page -->
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

	<script src="/assets/js/less.js" type="text/javascript"></script>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>


@stop
@section('page-header')
<h1>Ajax Navigation System</h1>
<p class="muted">This page uses ajax for navigation.  It's pretty fast, simple, flexible, and could be very useful.</p>
<!-- <p>It only takes a few lines of code to make it happen, and it's very flexible.</p> -->

<h2>html</h2>
My page has exactly 5 structural components:
<ol>
	<li>Nav (top)</li>
	<li>page-header</li>
	<li>content-main</li>
	<li>content-secondary</li>
	<li>footer</li>
</ol>

<pre class="prettyprint">
{{{'<html>
	<head></head>
	<body>
		<nav></nav>
		<header></header>
		<div class="page-header"></div>
		<div class="content-main"></div>
		<div class="content-secondary"></div>
		<footer></footer>
	</body>
</html>'}}}
</pre>

<pre class="prettyprint">{{{'<button type="button" onclick="loadXMLDoc(\'example\')">Example</button>'}}}</pre>
<a href="https://www.google.com/search?q=loadXMLDoc">Read about loadXMLDoc</a>
<pre class="prettyprint">{{{'<div id="myDiv"><h2>AJAX change this text</h2></div>'}}}</pre>


<h2>File System</h2>
<p>My file system looks something like this:</p>
<pre>
app
├── views
│   │   ├── site
│   │   │   ├── megacorp
│   │   │   │   └── pages
│   │   │   │       ├── about.blade.php
│   │   │   │       ├── about.blade.php
│   │   │   │       └── example.blade.php
│   │   │   ├── gristech
│   │   │   │   └── pages
│   │   │   │       ├── about.blade.php
│   │   │   │       └── example.blade.php
│   │   │   ├── anothercompany
│   │   │   │   └── pages
│   │   │   │       ├── about.blade.php
│   │   │   │       └── example.blade.php
│   │   │   ├── pages
│   │   │   │   └── ajax.blade.php
</pre>

<h2>Laravel</h2>
<h3>Routes</h3>
<pre class="prettyprint">Route::get('company/pages/{page}','BlogController@getCompanyPage')
    ->where('name', '[a-zA-Z_]+');</pre>

<h3>BlogController</h3>
<pre class="prettyprint">Route::get('company/pages/{page}','BlogController@getCompanyPage')
    ->where('name', '[a-zA-Z_]+');</pre>



<h2>Javascript</h2>
<p>I pasted this into my assets/js/site.js file.  It could also be included in an external file, or on an individual page, within a {{{'<style>'}}} tag.</p>
<pre class="prettyprint">
function loadXMLDoc(input)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  // alert(input);
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {

	    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET",input,true);
	xmlhttp.send();
}
</pre>

@stop

@section('secondary')

<h2>{{strtolower($company->brand)}}/pages/</h2>

@foreach($company->pages() as $item)
<button type="button" onclick="loadXMLDoc('company/pages/{{$item}}')">{{$item}}</button>
@endforeach



<h2>site/pages/</h2>

<?php
	$mypages = array();
	$path="../app/views/site/pages/";

	// die($path);

	foreach (glob($path."*.blade.php") as $filename) {
		// die($filename);
	        $filename=str_replace($path, "", $filename);
	        $filename=str_replace(".blade.php", "", $filename);
	        array_push($mypages,$filename);
	    }

?>
@foreach($mypages as $item)
<button type="button" onclick="loadXMLDoc('/{{$item}}')">{{$item}}</button>
@endforeach

<h2>myarray</h2>
	<?php
	$myarray=array('home','seo','security','backup');
	?>
	@foreach($myarray as $item)
	<button type="button" onclick="loadXMLDoc('pages/{{$item}}')">{{$item}}</button>
	@endforeach



	<h2>/</h2>
	<button type="button" onclick="loadXMLDoc('security')">Security</button>
	<button type="button" onclick="loadXMLDoc('notes3')">Notes</button>
	<button type="button" onclick="loadXMLDoc('backup')">Backup</button>

	<h2>search/</h2>
		<ul class = "nav navbar">
		@foreach($company->menus() as $menu)
			<li>
				<div class="btn" onclick="loadXMLDoc('search/{{{$menu}}}')">{{{$menu}}}</div>
			</li>
		@endforeach	 	
		</ul>
		
@stop
@section('main')
	<!-- <h1>Main</h1> -->

	<div id="myDiv"><h2>AJAX change this text</h2></div>

	<div class="row text-center">
		<a href="#" class="btn btn-large btn-success"><i class="icon-thumbs-up"></i> cool</a>
		<a href="#" class="btn btn-large btn-danger"><i class="icon-thumbs-down"></i> dumb</a>
	</div>
@stop

@section('admin-bottom')
	<!-- @ parent -->
	<style>
		.admin-bottom{
			background-color:black;
		}
	</style>

	<a href="http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html">Bootstrap Mixins</a>
@stop