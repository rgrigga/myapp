@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Signup</h1>
	<p>Please note: This is a collobaration, and your comments will help a great deal.  Please have a look around and make a comment somewhere.  Thank you!</p>
</div>
{{ Confide::makeSignupForm()->render() }}
@stop
