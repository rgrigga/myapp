@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.about') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<?php
class Company extends User{
	public $name = "Gristech";
	public $address = "Westerville, OH";
}
$company = new Company;
?>

<h1>About <em>{{$company->name}}</em></h1>

<address>
	{{$company->address}}
</address>
<!-- //address tags -->

<abbr title='this is an abbreviation'>abbr</abbr>

{{-- <!-- @include('site.russ.contact') --> --}}

@stop
