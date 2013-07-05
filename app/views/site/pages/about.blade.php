@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.about') }}} ::
@parent
@stop

$company = "MegaCorp";


{{-- Content --}}
@section('about')

<h1>About {{$company->name}}</h1>


<abbr title="title='this is an abbreviation'">abbr</abbr>
<address>
	
</address>
<!-- //address tags -->

{{$company->address}}
{{$company->address}}
{{$company->address}}
{{$company->address}}
{{$company->address}}






@include('site.russ.contact')

@stop
