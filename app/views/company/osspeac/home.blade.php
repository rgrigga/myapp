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
<h6><code>$company->description</code></h6>
<p>OSSPEAC was founded in 1994 with 12 charter members. Today, current membership stands at over 800 members. The Ohio School Speech Pathology Educational Audiology Coalition provides a united voice for those Speech Language Pathologists and Audiologists employed in the educational setting. Your active membership is vital to the future of OSSPEAC.</p>

@stop

@section('main')
<h6>section.main</h6>
<div class="dot"><a class="danger" href="#">Top</a></div>
<h2>Member Services</h2>
<p>OSSPEAC was founded in 1994 with 12 charter members. Today, current membership stands at over 800 members. The Ohio School Speech Pathology Educational Audiology Coalition provides a united voice for those Speech Language Pathologists and Audiologists employed in the educational setting. Your active membership is vital to the future of OSSPEAC.</p>

<h6>navbar > ul.nav-pills > li > a.btn-danger data-toggle="pill"</h6>
<nav class="navbar" role="navigation">
	<ul class="nav nav-pills">
		<li><a class="btn btn-danger" data-toggle="pill" href="#baz">Benefits</a></li>
		<li class="active"><a class="btn btn-danger" data-toggle="pill" href="#foo">Foo</a></li>
		<li><a class="btn btn-danger" data-toggle="pill" href="#bar">Bar</a></li>
		
<!-- 		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
		<li><button class="btn btn-primary navbar-btn">Button</button></li>
 -->	
	</ul>
</nav>

<section id="posts">
	<h6>section#posts</h6>
	<!-- Tab panes -->
	<div class="tab-content">
	  <div class="tab-pane fade" id="baz">
	  	<h2>Benefits</h2>

	  	Benefits of OSSPEAC membership include:

<h3>Continuing Education</h3>

Premium fall conference dedicated to school-based issues
Regional workshops
<h3>Communication</h3>

Membership Directory published annually
Quarterly newsletter, The Communicator, provides current news and information from around the state
Express electronic mailings as needed
Regional representation via liaisons representing 16 geographical regions from around Ohio
<h3>Liability Insurance</h3>

OSSPEAC provides members the opportunity to purchase liability insurance well below the cost of other professional organizations

<h3>Community Involvement</h3>

The Julie S. Kelly Scholarship is an annual gift awarded to a hearing impaired high school senior who will pursue post secondary education
Our S.O.S. (SUPPORT Our Students) outreach program which assists members who have students with specific needs and limited financial resources
<h3>Legislative Advocacy</h3>

As a partner in the Governmental Affairs Coalition, we employ a lobbyist that coordinates our legislative strategies for major issues impacting the delivery of services in our state
Our Legislation Committee provides legislative advocacy for consumers as well as Speech Language Pathologists and Educational Audiologists. Kelly O’Reilly, the Governmental Policy Group (GPG) lobbyist who represents the Governmental Affairs Coalition (GAC), of which OSSPEAC is a member, provides summaries of introduced/pending legislation to OSSPEAC. The Legislation Committee, comprised of the chairperson and no fewer than 4 members, also conducts legislative initiatives of the organization.
OSSPEAC offers you information, communication and camaraderie. Join over 800 speech language pathologists and audiologists in Ohio who understand and share your professional concerns.

<h2>Not a member yet?</h2>
Complete the form below and join today.  

2012-2013 Membership Form 
	  </div>
	  <div class="tab-pane fade" id="foo">
	  	<h3>Foo</h3>
	  	<img class="pull-left" src="{{asset('assets/osspeac/img/school.jpg')}}" alt="">
	  	<p>This is the Foo Section</p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, rem!  
	  </div>
	  <div class="tab-pane fade" id="bar">
	  	<h2>Bar</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, rem!  
	  </div>

	</div>
</section>

<section class="resources">
	
	<h2>More Resources</h2>
	<!-- Nav tabs -->
	<ul class="nav nav-pills">
		@foreach($company->menus() as $menu)
	  <li><a href="#pane-{{$menu}}" data-toggle="pill">{{$menu}}</a></li>
	  	@endforeach
	<!--   <li><a href="#profile" data-toggle="pill">Profile</a></li>
	  <li><a href="#messages" data-toggle="pill">Messages</a></li>
	  <li><a href="#settings" data-toggle="pill">Settings</a></li> -->
	</ul>


	<!-- Tab panes -->
	<div class="tab-content">
		@foreach($company->menus() as $menu)

	  <div class="tab-pane fade" id="pane-{{$menu}}">
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
	<a href="#" class="btn btn-warning">View All Posts</a>
				
			</div>
		</div>
	  	
	  	<p>You have no posts in the {{strtolower($menu)}} Category.</p>
	  	<p>Assign the <code>{{strtolower($menu)}}</code> Category to some posts</p>

	  </div>
	  @endforeach

	</div>
	<!-- /.tab-content -->

<script>
	$('.tab-content').find('.tab-pane:first').addClass('active in');
</script>

</section>


<h2>More Navigation Examples:</h2>
<p>The posisbilities are practically limitless:</p>
<h6>navbar-inverse nav-pills ul > li > button.navbar-btn</h6>
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

<h6>.navbar-inverse .text-center</h6>
<nav class="navbar navbar-inverse text-center" role="navigation">
	<button class="btn btn-inverse">Button</button>
	<button class="btn btn-danger">Button</button>
	<button class="btn btn-primary navbar-btn">Button</button>
</nav>

<h6>.nav-pills .nav-justified</h6>
<!-- <nav class="navbar navbar-inverse" role="navigation"> -->
<ul class="nav nav-pills nav-justified">
	<li><a href="#">foo</a></li>
	<li><a href="#">foo</a></li>
	<li><a href="#">foo</a></li>
</ul>

<h6>Button styles</h6>
	<button class="btn">nothing</button>
	<button class="btn btn-default">default</button>
	<button class="btn btn-danger">danger</button>
	<button class="btn btn-primary">primary</button>
	<button class="btn btn-success">success</button>
	<button class="btn btn-info">info</button>
	<button class="btn btn-warning">warning</button>
<!-- </nav> -->

<h6>dots navbar navbar-inverse</h6>
<nav class="dots navbar navbar-inverse">
	<ul class="nav navbar-nav">
		<li><a class="btn btn-success" href="#">New</a></li>
		<li><a class="btn btn-default"href="#">Edit</a></li>
		<li><a class="btn btn-danger"href="#">Delete</a></li>
	</ul>
</nav>

<h6>navbar-inverse</h6>
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

<h6>nav-pills nav-stacked ul > li > button.navbar-button</h6>
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

<h6>nav-pills nav-stacked  ul > li > button</h6>
	<ul class="nav nav-pills nav-stacked">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><button class="btn btn-primary">Button</button></li>
		<li><button class="btn btn-primary">Button</button></li>
		<li><button class="btn btn-primary">Button</button></li>
	</ul>

<h6>nav-pills nav-stacked ul > li> a</h6>
		<ul class="nav nav-pills nav-stacked">
<!-- 		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li>
		<li><a class="btn btn-danger navbar-btn" href="#">Foo</a></li> -->
		<li><a href="#">Bada Bing</a></li>
		<li><a href="#">Bada Bing</a></li>
		<li><a href="#">Bada Bing</a></li>
	</ul>







<h6>ul.nav</h6>
<ul class="nav">
	@foreach ($company->menus() as $menu)
		<li {{ (Request::is('{{{strtolower($menu)}}}') ? ' class="active"' : '') }}><a href="{{{URL::to('#'.strtolower($menu))}}}">{{{ucfirst($menu)}}}<i class="fa fa-link"></i></a></li>
	@endforeach
</ul>

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
	<div class="pull-right">
		@include('site.partials.fa4-contact')
		<p class="text-right">We look forward to serving you</p>
	</div>
{{$company->img()}}
<a class="btn btn-large btn-inverse" href="tel:{{{preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $company->phone)}}}"><h2>{{{preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $company->phone)}}}</h2></a>
<!-- <h2>Footer</h2> -->

<aside id="viviosoft">
	<div class="panel">
		<div class="panel-body text-center">
			<img class="img-responsive" src="{{asset('assets/viviosoft/viviosoft_logo.png')}}" alt="Viviosoft">
		</div>
		
	</div>
</aside>

@stop