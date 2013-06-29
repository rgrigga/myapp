<!DOCTYPE html>
<html lang="en">

<?php
$company="gristech";
$menus=array('foo','bar');
?>
<!-- 
	meta -->
<!-- CSS/styles -->
<!-- JS -->

<!-- 
<h3>meta</h3>
<h4>meta-title</h4>
<h4>meta-description</h4>
<h4>meta-keywords</h4>
<h3>Styles</h3> 
-->
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
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

<!-- CSS================================================== -->
@section('styles')
@stylesheets("public-css") <!-- //interesting... -->	
<link rel="stylesheet" href="/assets/css/style.css">

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

		<!-- hardy har -->		
@show

@section('analytics')
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

</head>

<!-- body -->
<body>
<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
<!-- http://twitter.github.io/bootstrap/examples/sticky-footer-navbar.html -->
		@section('nav')
		@include('site.partials.nav-top-inverse')
		@show

		<!-- Container -->
		<div class="container-fluid">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

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

		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
	</body>
</html>
