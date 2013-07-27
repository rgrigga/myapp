@extends('site.layouts.company')

die("layout");
<!-- 
Company Properties:
Styles
Name?
Favicons?
Meta-Title?
Meta_Description
Meta-Keywords
 -->

@section('meta_title')
{{$company->brand}}
<!-- Advantage Services - We treat your home as our own. -->
@stop

@section('meta_description')
<meta name="description" content="{{$company->description}}." />
@stop

@section('meta_keywords')
<meta name="keywords" content="Lawn Mower Repair, Lawn Mower Service" />
@stop

@section('styles')
@parent
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

	    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css"> -->

<!-- http://stackoverflow.com/questions/806000/css-semi-transparent-background-but-not-text -->
<style>
	/* Your code here*/
</style>
@stop

@section('favicons')
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}"> -->
@stop

@section('mynav')
<!-- @ include('site.partials.nav-top') -->
@stop

{{-- Content --}}
@section('content')
<h2>
<?php 
$env=App::environment();
echo $env;
?>
</h2>
@stop

@section('footer')
@stop

@section('hotel')
@stop