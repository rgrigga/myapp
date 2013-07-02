<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
<!-- <<<<<<< HEAD -->
			@section('meta-title')
			Default
			@show
		</title>
			<!-- Gristech Default Layout -->
			<!-- should be overridden in children -->

{{-- Update the Meta Title --}}
<!-- @section('meta_title') -->

<!-- Buckeye Mower ::  -->
 <!-- String::title($post->title) }}} -->
<!-- @stop -->

{{-- Update the Meta Description --}}
<!-- http://moz.com/learn/seo/meta-description -->
@section('meta_description')
<meta name="description" content="Gristech will do things that will help you do what you do better.  We will make you make more money.  We will therefore make you want to give us lots of money. We will make you lots of money.">

 
{{-- Update the Meta Keywords --}}
@show

@section('meta_keywords')
<meta name="keywords" content="Gristech" />
@show

{{-- Update the Meta Description --}}
@section('meta_description')
<meta name="description" content="You are experiencing a flexible, fully customizable web application" />
@show

<!-- // branding -->
<!-- // marketing-->
<!-- ======= -->
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
<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->

<!-- CSS================================================== -->
@section('styles')
@stylesheets("public-css") <!-- //interesting... -->	
<link rel="stylesheet" href="/assets/css/style.css">

<!-- <<<<<<< HEAD -->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- font-awesome -->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">


	<style>
	/*http://css-tricks.com/almanac/properties/z/z-index/*/

		.mycontentwrap{
			margin-top: 40px;
			position: relative;
			/*z-index: -3;*/
		}
	</style>
@show

<!-- prettify -->
<!-- NOTE: I had an experience with a lengthy pageload on this today.  It's a good lesson NOT to include prettify on the main layout page.  Load it in a child page where you need it. -->
<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->

@section('myjs')
<!-- I prefer to keep javascript to a minimum when possible. -->
<!-- <script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script> -->

<!-- google.com/analytics -->
@show

@section('favicons')
<!-- ======= -->
<!-- prettify -->
<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->
<script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script>

<!-- font-awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file 
e.g. /company/assets/ico/apple-touch blah.  the path should simply be overridden in the child.-->

<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

<!-- http://www.jonathantneal.com/blog/understand-the-favicon/ -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
<!-- <<<<<<< HEAD -->

		<!-- hardy har -->		
@show

@section('analytics')
<!-- ======= -->
		<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');
// <<<<<<< HEAD
</script>
<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
@show

</head>

<!-- body -->
<body>
<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
<!-- http://twitter.github.io/bootstrap/examples/sticky-footer-navbar.html -->
		@section('nav')
		@include('site.partials.nav-top-inverse')
		@show
<!-- ======= -->

</script>
	</head>

	<body>

<!-- google analytics -->




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
							<li {{ (Request::is('technical') ? ' class="active"' : '') }}><a href="{{{ URL::to('/technical') }}}">Technical</a></li>
							<li {{ (Request::is('features') ? ' class="active"' : '') }}><a href="{{{ URL::to('/features') }}}">Features</a></li>
							<li {{ (Request::is('tags') ? ' class="active"' : '') }}><a href="{{{ URL::to('/tags') }}}">Tags</a></li>
						</ul>

						<!-- admin/user nav -->
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
	                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Join (Free)</a></li>
                            @endif
                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>

			</div>
			<!-- //this is the only place to put india! -->
			<div class="india pull-right">
					<!-- <div>phone, email, chat, anything!</div> -->
				<div>
					<img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design">
				</div>
			        
			</div>
		</div>
		<!-- ./ navbar -->
<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->

		<!-- Container -->
		<div class="container-fluid">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->
<!-- <<<<<<< HEAD -->

			<div class="mycontentwrap">
				<!-- Content -->
				@yield('content')
				<!-- ./ content -->
			</div>

		<!-- the following div is needed to make a sticky footer -->
		<!-- this sticky footer is broken.  there is a working example at bootstrap -->
			<div id="push"></div>
		</div>
		<!-- ./ container-fluid -->
	</div>
		<!-- ./wrap -->


	    <div id="footer">
			<div class="container">
			<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Always Beta</a></span>
			</div>

		</div>


	    <!-- //wrap -->
<!-- ======= -->
			<style>
			/*http://css-tricks.com/almanac/properties/z/z-index/*/
			.contentwrap{
				position: relative;
				/*z-index: -3;*/
			}
			</style>
<div class="contentwrap">
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
</div>
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


<div class="container">


	      	


</div>
<!-- container -->

	        <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew!</p>
	      
<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Always Beta</a></span>



	      </div>

	    </div>
<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->

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
