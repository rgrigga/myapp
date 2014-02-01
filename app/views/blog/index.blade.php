@extends('layouts.master')
<style>
/*	.alert{
        position:relative;
	}*/
.page-header{
	margin-bottom: 50px !important;
}
#gravatar{
	padding:10px;
}
.img-center{
	margin-left: auto;
	margin-right: auto;
}
</style>


@section('page-header')

<h1>Blog Index</h1>
<div class="center">
	{{$company->logo}}
	<img class="img-responsive img-center" src="{{asset('packages/rgrigga/'.strtolower($company->brand).'/logo.png')}}" alt="{{$company->brand}}">
</div>

@stop

@section('main')

{{$accordion}}

{{--View::make('site.gristech.partials.about')--}}
{{--View::make('site.gristech.md5form')--}}
<pre><code>
	.page-header{
		margin-bottom: 50px !important;
	}
	#gravatar{
		padding:10px;
	}
	.img-center{
		margin-left: auto;
		margin-right: auto;
	}
</code></pre>

@stop

@section('footer')
<?php
$hash= md5( strtolower( trim( "ryan.grissinger@gmail.com " ) ) );
?>
<img id="gravatar" class="pull-left img-circle" src="http://www.gravatar.com/avatar/{{$hash}}" alt="Ryan's Gravatar">
@stop