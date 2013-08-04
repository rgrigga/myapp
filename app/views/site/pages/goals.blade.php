@extends('site.layouts.default')
{{-- Web site Title --}}
@section('meta-title')
{{{ "Blank" }}} ::
@parent
@stop

{{-- Content --}}
@section('main')

<section>
	<article>
		<h1>Goals</h1>
		<h2>SMART Goals</h2>
		<h3></h3>
	</article>
</section>

<img src="{{asset('assets/img/craigslist_make_post.png')}}" alt="Craigslist">


@stop
