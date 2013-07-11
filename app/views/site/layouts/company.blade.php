@extends('site.layouts.default')

{{-- Update the Meta Title --}}
@section('title')
<!-- @parent -->
{{-- $company  --}} : 
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
		<link rel="shortcut icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">
		<link rel="icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">	
@stop

@section('mynav')
<!-- Navbar -->
@include('site.partials.nav-buckeye')
@stop
{{-- Content --}}
@section('content')
<!-- Your Company Page Here -->
Content
@stop

@section('footer')
Footer
@stop

@section('hotel')
Hotel
@stop
