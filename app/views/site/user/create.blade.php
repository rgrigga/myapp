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
	

	<ol>
		<li>Sign in with any existing account: Facebook, Twitter, Google, Gmail, Ebay</li>

	</ol>
</div>




<h2>Privacy</h2>
<p>Privacy is very important to us.  Any information you share will never be shared unless you clearly tell us it's OK.</p>

{{ Confide::makeSignupForm()->render() }}
@stop

<p>Learn more about <a class='btn' href="{{{URL::to('security')}}}">Security</a></p>

