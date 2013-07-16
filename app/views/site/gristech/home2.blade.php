@extends('site.layouts.advantage')

{{-- Update the Meta Title --}}
@section('title')
@parent
 - {{$company->slogan}}
@stop
{{-- Update the Meta Description --}}
@section('meta_description')
@parent
{{$company->description}}
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent
<!-- <meta name="keywords" content="Lawn Mower Repair, Lawn Mower Service" /> -->
@stop

@section('styles')
@parent
<!-- \@ stylesheets("public-css") -->
	
	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	    <!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"> -->
	    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css"> -->

	    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css"> -->
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
		<link rel="shortcut icon" href="{{{ asset('assets/ico/'.$company->name.'/favicon.png') }}}">

		<!-- hardy har -->		
@stop

{{-- Content --}}
@section('content')
@parent

<!-- @parent -->
<h1>Welcome Home.</h1>
<h2>Company:{{$company->brand}}</h2>
<!-- <?php var_dump($company)?> -->
<p>Icon: </p>
<!-- About -->
<!-- Contact -->
<!-- Services -->
<img src="asset({{$company->image}})" alt="">
<div>ID: {{{ $company->id }}}</div>
<div>Name: {{{ $company->name }}}</div>
<div>Brand: {{{ $company->brand }}}</div>
<div>Phone: {{{ $company->phone }}}</div>
<div>Email: {{{ $company->email }}}</div>
<div>Description: {{{ $company->description }}}</div>
<div>Slogan: {{{ $company->slogan }}}</div>
<div>Image: {{{ $company->image }}}</div>
<div>Menus: {{{ $company->menus }}}</div>

@stop