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

	<ol>
		<li>Do we know each other from Facebook, Twitter, Google, Gmail?</li>
	</ol>	

<h2>Privacy</h2>
<p>Privacy is very important to us.  Any information you share will never be shared unless you clearly tell us it's OK.</p>

{{ Confide::makeSignupForm()->render() }}

<p>Learn more about <a class='btn' href="{{{URL::to('security')}}}">Security</a></p>
@stop



