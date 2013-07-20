@extends('admin.layouts.default')
<!-- {{die("SITE/USER/CREATE")}} -->
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('main')

<p>Coming Soon: login with:</p>
<ul class='nav nav-pills'>

	<?php

	$list=array('facebook','linkedin','twitter','google-plus','envelope','phone');

	function a($input){
		$url=URL::to($input);
		$a='<a href="'.$url.'"><i class="icon-'.$input.'"></i></a>';
		return $a;
	}
	?>
	@foreach($list as $item)
	<li>{{a($item)}}</li>
	@endforeach
</ul>

<!-- <ul class="nav">
	<li><a href="#">CLICK</a></li>
	<li><a href="#">CLICK</a></li>
	<li><a href="#">CLICK</a></li>
	<li><a href="#">CLICK</a></li>
	<h1>BAM!</h1>
</ul> -->

<div class="page-header">
	<h1>3 Steps</h1>
	<ol>
		<li>Put your Name down there</li>
		<li>You confirm you're You (Email)</li>

	</ol>

<p>By the way, we only ask for email to verify that you are you.</p>
<p>That and to communicate with you, if that's best for you.  We can email invoices, you can schedule online, even make a payment or deposit.  It's all very secure, and we won't sell your info, etc.</p>

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



