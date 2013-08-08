@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact_us') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<h2>What would you like to say to me?</h2>
@include('site.partials.contact')

{{Form::open()}}
{{Form::hidden('csrf', $value, $attributes);}}
What time?
{{Form::input('text','username');}}
{{Form::date('date');}}
{{Form::email('email','you@there.huh');}}
{{Form::close()}}
@stop