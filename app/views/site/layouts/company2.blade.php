<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!-- Basic Page Needs
	================================================== -->
	<title>
		@section('title')
		{{$company->brand}}
		@show
	</title>
		<!-- Gristech Default Layout -->
		<!-- should be overridden in children -->

<!-- http://moz.com/learn/seo/meta-description -->
@section('meta_description')
<meta name="description" content="Gristech will do things that will help you do what you do better.  We will make you make more money.  We will therefore make you want to give us lots of money. We will make you lots of money.">
@show

@section('meta_keywords')
<meta name="keywords" content="php, laravel, development, learning, software, business" />
@show

<meta name="author" content="Ryan Grissinger" />
<!-- Mobile Specific Metas
================================================== -->
<!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- CSS
================================================== -->

@section('styles')
    @stylesheets("public-css")
	<link rel="stylesheet" href="/assets/css/style.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<style>
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
	<!-- prettify -->
	<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->
<!--
	<script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script>
-->
@show

@section('analytics')

<!-- <meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" /> -->
@show

@section('favicons')
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
@show
</head>

<body>

<!-- http://twitter.github.io/bootstrap/examples/sticky-footer-navbar.html -->
		<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
	
	<!-- Navbar -->
	@section('nav')
	@include('site.partials.nav-top')
	@show

	
	<!-- Container -->
	<div class="container-fluid">
		<!-- Notifications -->
		@include('notifications')
		<!-- ./ notifications -->
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
		<!-- ./contentwrap -->
	</div>
	<!-- ./ container -->

	<!-- the following div is needed to make a sticky footer -->
	<div id="push"></div>

</div>
<!-- ./wrap -->

@section('footer')
<!-- <div id="footer"> -->
<!-- 	<div class="container">
		 <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew!</p>
		<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Always Beta</a></span>
	</div> -->
	<!-- container -->
<!-- </div> -->
<!-- ./footer -->
@show

@section('hotel')
<a href="/responsive">
	<div class="hotel hotelb">
		<!-- <div style="color:black; padding-bottom:50px;">resize me</div> -->
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
@show
		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
</body>
</html>

