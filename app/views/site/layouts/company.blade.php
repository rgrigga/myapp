@extends('site.layouts.default')

{{-- Update the Meta Title --}}
@section('title')
<!-- @parent -->
{{$company}} : 
 <!-- String::title($post->title) }}} -->
@stop

{{-- Update the Meta Description --}}
@section('meta_description')
<meta name="description" content="{{$description}}" />
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
<!-- Company Default Keywords/tags -->
<meta name="keywords" content="Mobile Mower Repair, Mower Service, Engine Repair, Weedeater, Chainsaw, Trimmer" />
@stop

@section('styles')
@parent
<!-- //http://colorschemedesigner.com/#3711Tw0w0w0w0 -->
<!-- \@ stylesheets("public-css") -->
	<!-- <link rel="stylesheet" href="/assets/css/style.css"> -->

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"> -->
	

	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css"> -->
	<style>
		body{
			background-color: green;
			/*background-color:rgba(255,0,0,0.5);*/
		}
		
		.hero-unit{
			/*background-color:rgba(255,0,0,0.5);*/
		}
	</style>
@stop

@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

		<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
		<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

		<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->


		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}"> -->
		
		<link rel="shortcut icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">
		<link rel="icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">


<!-- <link rel="apple-touch-icon" href="path/to/touchicon.png"> -->
<!-- <link rel="icon" href="path/to/favicon.png"> -->
  <!--[if IE]><link rel="shortcut icon" href="path/to/favicon.ico"><![endif]-->
  <!-- or, set /favicon.ico for IE10 win -->
<!-- <meta name="msapplication-TileColor" content="#D83434"> -->
<!-- <meta name="msapplication-TileImage" content="path/to/tileicon.png"> -->
@stop

@section('nav')
@include('site.partials.nav-buckeye')
@stop
{{-- Content --}}
@section('content')
<!-- @parent -->

<!-- Your Company Page Here -->
@stop

@section('footer')
Buckeye Footer
@stop

@section('hotel')
@stop
