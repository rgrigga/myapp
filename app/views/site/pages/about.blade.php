@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.about') }}} ::
@parent
@stop

{{-- Content --}}
@section('about')

<h1>About {{$company->name}}</h1>


<abbr title="title='this is an abbreviation'">abbr</abbr>
<address>
	{{$company->address}}
</address>
<!-- //address tags -->

{{$company->address}}

@include('site.russ.contact')

@stop
