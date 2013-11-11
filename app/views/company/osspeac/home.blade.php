@extends('layouts.company')

@section('title')
{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent

@stop

@section('meta_keywords')
@parent

@stop



@section('styles')
<!-- @ parent -->

	<!-- <link rel="stylesheet/less" type="text/css" href="/assets/bs3/less/master.less" /> -->

	<!-- This display's the company's less page -->
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

	<script src="/assets/js/less.js" type="text/javascript"></script>

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


	<script type="text/javascript">
	     less.env = "development";
	     less.watch();
	</script>

<!-- http://colorschemedesigner.com/#0k41Jw0w0w0w0 -->
<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"> -->
    <!-- @ stylesheets("bs3-css") -->
    <!-- assets/css/less/bootstrap.less -->

    <!-- @ stylesheets('myapp-css') -->
    <!-- assets/css/less/master.less -->

	<!-- @ stylesheets('gristech') -->
	<!-- assets/css/less/gristech.less -->

<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>

<!-- <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>-->
<!-- <link href='http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'> -->
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<style>

</style>

@stop

@section('page-header')
<h6>section.page-header</h6>
<div class="pull-left logo">{{$company->img()}}</div>
<div class="name">
	<h1>{{$company->name}}</h1>
	<p class="lead">{{$company->slogan}}</p>
</div>

<p>{{$company->description}}</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque placeat earum architecto maxime recusandae at impedit excepturi error iure cupiditate. </p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore, sequi totam quo deleniti illo alias nihil amet provident facere aliquid omnis iste enim quidem ducimus aliquam temporibus. Pariatur, fugiat!</p>
@stop

@section('main')
<h6>section.main</h6>
<div class="dot"><a class="danger" href="#">Top</a></div>
<h2>Members Services</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, rerum unde error sit fugiat maiores iure dolorum consequuntur doloribus sequi.</p>
<nav class="navbar navbar-inverse text-center" role="navigation">
	<button class="btn btn-inverse">Button</button>
	<button class="btn btn-danger">Button</button>
	<button class="btn btn-primary navbar-btn">Button</button>
</nav>

<!-- <nav class="navbar navbar-inverse" role="navigation"> -->
	<ul class="nav nav-pills nav-justified">
		<li><a href="#">foo</a></li>
		<li><a href="#">foo</a></li>
		<li><a href="#">foo</a></li>
	</ul>
	<button class="btn btn-inverse">Button</button>
	<button class="btn btn-danger">Button</button>
	<button class="btn btn-primary">Button</button>
	<button class="btn btn-success">Button</button>
<!-- </nav> -->

<nav class="dots navbar navbar-inverse">
	<ul class="nav navbar-nav">
		<li><a class="btn btn-success" href="#">New</a></li>
		<li><a class="btn btn-default"href="#">Edit</a></li>
		<li><a class="btn btn-danger"href="#">Delete</a></li>
	</ul>
</nav>

<p>Or:</p>
<nav class="navbar navbar-inverse" role="navigation">
	<ul class="nav navbar-nav">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
	</ul>
</nav>
<p>Or:</p>

<nav class="" role="navigation">
	<ul class="nav nav-pills nav-stacked">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
	</ul>
</nav>

	<ul class="nav nav-pills nav-stacked">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><button class="btn btn-primary">Button</button></li>
		<li><button class="btn btn-primary">Button</button></li>
		<li><button class="btn btn-primary">Button</button></li>
	</ul>

		<ul class="nav nav-pills nav-stacked">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><a href="#">Bada Bing</a></li>
		<li><a href="#">Bada Bing</a></li>
		<li><a href="#">Bada Bing</a></li>
	</ul>

<nav class="navbar navbar-inverse" role="navigation">
	<ul class="nav nav-pills">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
	</ul>
</nav>

<nav class="navbar" role="navigation">
	<ul class="nav nav-pills">
		<li><a class="btn btn-danger" data-toggle="pill" href="#foo">Foo</a></li>
		<li><a class="btn btn-danger" data-toggle="pill" href="#bar">Bar</a></li>
		<li><a class="btn btn-danger" data-toggle="pill" href="#baz">Baz</a></li>
<!-- 		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
 -->	
	</ul>
</nav>
<section id="posts">
	<!-- Tab panes -->
	<div class="tab-content">
	  <div class="tab-pane fade" id="foo">
	  	<h3>Foo</h3>
	  	<p>This is the Foo Section</p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, rem!  
	  </div>
	  <div class="tab-pane fade" id="bar">
	  	<h2>Bar</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, rem!  
	  </div>
	  <div class="tab-pane fade" id="baz">
	  	<h2>Baz</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, rem!  
	  </div>
	</div>
</section>

<h2>More Resources</h2>
<!-- Nav tabs -->
<ul class="nav nav-pills">
	@foreach($company->menus() as $menu)
  <li><a href="#{{$menu}}" data-toggle="pill">{{$menu}}</a></li>
  	@endforeach
<!--   <li><a href="#profile" data-toggle="pill">Profile</a></li>
  <li><a href="#messages" data-toggle="pill">Messages</a></li>
  <li><a href="#settings" data-toggle="pill">Settings</a></li> -->
</ul>

<!-- Tab panes -->
<div class="tab-content">
	@foreach($company->menus() as $menu)

  <div class="tab-pane fade" id="{{$menu}}">
  	<h3>{{$menu}}</h3>
  	<p>There are several ways to add content:</p>

	<div class="panel panel-default">
	  	<div class="panel-heading">
	  		<h4 class="panel-title">Pages</h4>
	  	</div>
		<div class="panel-body">
		 	<p>You have not made a page for <code>{{strtolower($menu)}}</code> yet.</p>
		  	<p>To add a page, create a file called <code>views/company/{{$company->brand}}/pages/{{strtolower($menu)}}.blade.php</code></p>
		  	<p>The file should only contain html, no heavy styling, etc.</p>
		  	<p>Then you can do something like<code>View::Make('site/{{$company->brand}}/{{strtolower($menu)}}');</code></p>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
		  	<h4 class="panel-title">Posts & Tags</h4>
		</div>
		<div class="panel-body">
		  	<p>You have no posts tagged <strong>{{strtolower($menu)}}</strong>.</p>
		  	<p>Please add <code>Posts</code> with these tags:</p>
<?php
$str=$menu.", ".$company->brand;
?>

<pre><code><?=e(strtolower($str))?></code></pre>

<a href="#" class="btn btn-success">New Post</a>
			
		</div>
	</div>

	
  	
  	<p>You have no posts in the {{strtolower($menu)}} Category.</p>
  	

  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, deleniti, nulla velit labore vel ex.</p>
  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, deleniti, nulla velit labore vel ex.</p>
  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, deleniti, nulla velit labore vel ex.</p>
  </div>
  @endforeach

</div>



@foreach ($company->menus() as $menu)
		<li {{ (Request::is('{{{strtolower($menu)}}}') ? ' class="active"' : '') }}><a href="{{{URL::to('#'.strtolower($menu))}}}">{{{ucfirst($menu)}}}</a><a href="#{{strtolower($menu)}}">link<i class="fa fa-link"></i></a></li>
	@endforeach
@stop

@section('secondary')
<!-- <div class="badge">secondary</div> -->
<!-- <h2>About Us:</h2> -->
<div id="about">
	{{View::make('company/about')->with(compact('company'));}}
</div>

@stop

@section('footer')
<style>

</style>
{{$company->img()}}
<a class="btn btn-large btn-inverse" href="tel:{{{preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $company->phone)}}}"><h2>{{{preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $company->phone)}}}</h2></a>
<!-- <h2>Footer</h2> -->
@stop