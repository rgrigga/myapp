<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!-- Basic Page Needs
	================================================== -->
	<?php //die("bam"); ?>
		<!-- Bootstrap 3 Layout -->
		<!-- site.layouts.bs3 -->
		<!-- sections can be overridden in children -->

	<!-- Page Title -->
	<title>
	@section('title')
	{{{$company->brand}}}
	@show
	</title>

	@section('meta-title')
<!-- //had problems with this -->
	@show
	<!-- http://moz.com/learn/seo/meta-description -->
	@section('meta_description')
	<meta name="description" content="{{{$company->description}}}">
	@show

	@section('meta_keywords')
	<meta name="keywords" content="awesome" />
	@show

	<meta name="author" content="Ryan Grissinger" />
	<!-- Mobile Specific Metas
	================================================== -->
	<!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- CSS
	================================================== -->

	@section('styles')
	<!-- STYLES -->
	    @stylesheets("bs3-css")
		<!-- @ stylesheets("myapp-css") -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	@show

	@section('myjs')

	   	<!-- JavaScript plugins (requires jQuery) 
	    <script src="http://code.jquery.com/jquery.js"></script>
	    -->

	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <!-- < script src="/bs3/js/bootstrap.min.js"></script> -->

	    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
	    <!-- < script src="/bs3/js/respond.js"></script> -->

	<!-- I prefer to keep javascript to a minimum when possible. -->
	<!-- <script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script> -->

	@show

	@section('analytics')

	@include('site.'.strtolower($company->brand).'.analytics')
	<!-- // BlogController -->
	{{--$analytics--}}
	<!-- //google, piwik -->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41528506-1', 'gristech.com');
	  ga('send', 'pageview');

	</script>
	<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
	
	@show

	@section('favicons')
<!-- Favicons		==================================================
-->
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
		
		<!-- Navbar -->
		
	@section('nav')
		@include('site.partials.nav-top-bs3')
		<!-- <h1>NAV</h1> -->
	@show

		<div class="container">		
			<div class="content-wrap">
			<!-- Container -->

				<!-- Notifications -->
				@include('notifications')
				<!-- ./ notifications -->
				
				<div class="page-header">
					@yield('page-header')
				</div>

				<div class="content-main">
					@yield('content')
					@yield('main')
				</div>
				<div class="content-secondary">
					@yield('secondary')
				</div>
				<div class="posts">
                    @yield('posts')
                </div>
			</div>
			<!-- ./contentwrap -->

		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>

@section('footer')

<footer>
	<div class="container">
		<a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
</a>
<img src="{{asset('assets/img/php.png')}}" alt="PHP">
<img src="{{asset('assets/img/laravel.png')}}" alt="Laravel">
<img src="{{asset('assets/img/bootstrap-logo.png')}}" alt="Bootstrap">
		 <!-- <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew!</p> -->
		<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Beta</a></span>
	</div>
	<!-- container -->
</footer>
<!-- ./footer -->
@show

@section('hotel')
<!-- be sure to include the hotel CSS -->
<a href="/responsive">
	<div class="hotel hotelb">
		<!-- <div style="color:black; padding-bottom:50px;">resize me</div> -->
		<div class="hotel pull-right">
			<div class="visible-xs visible-sm">
				
				<i class="icon-mobile-phone icon-4x"></i>
			</div>
			<div class="visible-md">
				<i class="icon-tablet icon-4x"></i>
			</div>
			<div class="visible-lg">
				<i class="icon-desktop icon-4x"></i>
			</div>
		</div>
	</div>
</a>
@show

@section('javascripts')
		<!-- Javascripts
		================================================== -->
        @javascripts('myapp-js')
        @javascripts('bs3-js')
        <!-- holder.js -->
		

		<!-- https://github.com/mindmup/bootstrap-wysiwyg/ -->
		<script>
            function imgError(image){
                image.onerror = "";
                //could not get this to work with holder.js
                image.src = "http://placehold.it/300x300";
                return true;
            }


        </script>
@show
</body>
</html>
