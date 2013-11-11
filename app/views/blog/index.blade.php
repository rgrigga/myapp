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
</style>



@section('page-header')


<img class="img-responsive" src="{{asset('assets/'.strtolower($company->brand).'/cloud.svg')}}" alt="">


@stop

@section('main')

{{$accordion}}

{{--View::make('site.gristech.partials.about')--}}
{{--View::make('site.gristech.md5')--}}
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