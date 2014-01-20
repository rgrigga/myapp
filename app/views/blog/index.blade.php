@extends('layouts.bootstrap3')
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


<div class="center">
	<img class="img-responsive img-center" src="{{asset('assets/'.strtolower($company->brand).'/cloud.svg')}}" alt="">
</div>


@stop

@section('main')

{{$accordion}}

{{--View::make('site.gristech.partials.about')--}}
{{View::make('site.gristech.md5form')}}
<script>
	console.log('adding prettyprint');
	$('pre').addClass('prettyprint');
</script>

@stop

@section('footer')
<?php
$hash= md5( strtolower( trim( "ryan.grissinger@gmail.com " ) ) );
?>
<img id="gravatar" class="pull-left img-circle" src="http://www.gravatar.com/avatar/{{$hash}}" alt="Ryan's Gravatar">
@stop