@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.about') }}} ::
@parent
@stop

{{-- Content --}}
@section('about')

<h1>About {{$company->name}}</h1>

<address>
	{{$company->address}}
</address>
<!-- //address tags -->

<abbr title="title='this is an abbreviation'">abbr</abbr>

@include('site.russ.contact')

@stop
