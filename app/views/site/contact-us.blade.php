@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact_us') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h1>Contact Us</h1>
				    <a href="http://facebook.com" class="social-icon">
				    <img src="http://gristech.com/img/facebook.png" class="img-circle"></a>
				    <a href="http://twitter.com" class="social-icon"><img src="http://gristech.com/img/twitter.png" class="img-circle"></a>
				    <a href="http://linkedin.com" class="social-icon"><img src="http://gristech.com/buttons/linkedin.png" class="img-circle"></a>
				    <a href="http://gmail.com" class="social-icon"><img src="http://gristech.com/buttons/email.png" class="img-circle"></a>
@stop
