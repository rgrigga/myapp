<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Gristech MyApp
			@show
		</title>
		<meta name="keywords" content="php, laravel, development, learning, software, business" />
		<meta name="author" content="Ryan Grissinger" />
		<meta name="description" content="A flexible, customizable web application" />

		<!-- Mobile Specific Metas
		================================================== -->

		<!-- MOre info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- CSS
		================================================== -->
    @stylesheets("public-css")
		
		<link rel="stylesheet" href="/assets/css/style.css">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<!-- font-awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('http://gristech.com/ico/favicon.png') }}}">
	</head>

	<body>





		<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">

@include('site.partials.contact')

<!-- //moved -->
<!-- 					<div class="pull-right">
						<a href="http://facebook.com" class="social-icon">
					    	<img src="http://gristech.com/img/facebook.png" class="img-circle">
					    </a>
					    <a href="http://twitter.com" class="social-icon">
					    	<img src="http://gristech.com/img/twitter.png" class="img-circle">
					    </a>
					    <a href="http://linkedin.com" class="social-icon">
					    	<img src="http://gristech.com/buttons/linkedin.png" class="img-circle">
					    </a>
					    <a href="http://gmail.com" class="social-icon">
					    	<img src="http://gristech.com/buttons/email.png" class="img-circle">
					    </a>
					</div> -->

					<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<div class="nav-collapse collapse">
						<ul class="nav">
							<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
							<li {{ (Request::is('/footer') ? ' class="active"' : '') }}><a href="{{{ URL::to('#footer') }}}">Partners</a></li>
						</ul>

			                        <ul class="nav pull-right">
			                            @if (Auth::check())
                                        @if (Auth::user()->hasRole('admin'))

                                        <li{{ (Request::is('admin/blogs/create*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> Create</a></li>

			                            <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                                        @endif
			                            <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
			                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
			                            @else
			                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
			                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Sign Up</a></li>
			                            @endif
			                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container-fluid">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
<!-- <div class="span8">
</div>
<div class="span3"><h2>sidebar</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, cumque praesentium sapiente ipsa incidunt quam. Perspiciatis officiis ut saepe totam quibusdam error hic aperiam obcaecati fugit velit! Ea, nemo esse laboriosam earum perferendis similique id ab nisi sapiente harum sed dolorem at nam quia aliquam itaque sit enim beatae ducimus unde hic repellendus quibusdam odio adipisci quam fuga quos consequuntur reprehenderit minus veniam nulla consequatur nesciunt iusto. Sequi, incidunt, odit, error dolore mollitia blanditiis voluptatum libero reiciendis tenetur minima pariatur dolorum sint illum. Vel, ipsam similique magni qui optio vero fugiat autem unde voluptatem illum aliquid consequuntur dignissimos repudiandae nesciunt!
</div> -->



		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>

</div>
		<!-- ./wrap -->


	    <div id="footer">

<h1>Partners<small>This site is built on:</small></h1>
<p class="muted">PS: : Ask me about stock options!</p>

	      <div class="container">

	      	<div class="row">

	      		<div class="span1 pull-right thumbnail">
	      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
	      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
					<h5>PHP</h5></a>
					<h6>Web Application Language</h6>
					<p>Why PHP?</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Laravel</h5>
					<h6>PHP Framework</h6>
					<ul>
						<li>Eloquent ORM</li>
						<li>Artisan CLI</li>
						<li>Polymorphic Relations</li>
						<li>Eager Loading</li>
					</ul>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span2 thumbnail">
	      			<a href="http://twitter.github.io/bootstrap/scaffolding.html#responsive">
	      			<img src="http://gristech.com/img/logo/twitter-bootstrap.jpg" alt="laravel rocks">
					<h5>Bootstrap</h5>
					</a>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      			      		<div class="span1 pull-right thumbnail">
	      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
	      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
					<h5>PHP</h5></a>
					<h6>Web Application Language</h6>
					<p>Why PHP?</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Laravel</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span1 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Bootstrap</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      			      		<div class="span1 pull-right thumbnail">
	      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
	      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
					<h5>PHP</h5></a>
					<h6>Web Application Language</h6>
					<p>Why PHP?</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Laravel</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span1 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Bootstrap</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span1 pull-right thumbnail">
	      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
	      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
					<h5>PHP</h5></a>
					<h6>Web Application Language</h6>
					<p>Why PHP?</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Laravel</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span1 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Bootstrap</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span1 thumbnail">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Siteground</h5>
					<h6>PHP Framework</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	<div class="span1">
	<img src="http://placehold.it/350x150" alt="">
	
	</div>


	      	</div>
	        <p class="muted credit">Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.</p>
	      




	      </div>

	    </div>

<a href="/whyresponsive">
<div class="hotel hotelb">
<!-- 	<div style="color:black; padding-bottom:50px;">resize me</div> -->
	<div class="hotel pull-right">
		<div class="visible-phone">
			
			<i class="icon-mobile-phone icon-4x"></i>
		</div>
		<div class="visible-tablet">

			<i class="icon-tablet icon-4x"></i>
		</div>
			<div class="visible-desktop">
			<i class="icon-desktop icon-4x"></i>
		</div>
	</div>
</div>
</a>
		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
	</body>
</html>
