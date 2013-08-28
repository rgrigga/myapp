@extends('layouts.bootstrap3')
<!-- //this is a structural document.  other docs can be called -->
<!-- //from here, but styles should be kept in a theme somewhere else. -->

{{-- Web site Title --}}
@section('title')

@parent
@stop


{{-- Content --}}
@section('main')
<!-- <div class="page-header"> -->

<div class="jumbotron">
	<h1>Contact</h1>
	<h2>What would you like to say?</h2>
	<p>This page also demonstrates comments.</p>
	<?php
	// var_dump($posts);
	?>
</div>

<div class="text-center">
    <div class="comments">
		<a id="comments"></a>
		<h4>
			{{--{ $comments->count() }--}}
		</h4>
<h3>{{{$post->title}}}</h3>
		<form method="post" action="{{{ URL::to('blog/'.$post->slug) }}}">

			<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

			<textarea class="input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn" id="submit" value="Speak" />
				</div>
			</div>
		</form>



	@if ( ! Auth::check())
		You normally need to be logged in to add comments.  On this page, you may sign in, or comment anonymously.<br /><br />
		<a class="btn btn-inverse" href="{{{ URL::to('user/login') }}}">WHO ARE YOU?</a>
		@elseif ( ! $canComment )
		You don't have the correct permissions to add comments.
	@else
		@if ($comments->count())
		@foreach ($comments as $comment)
			<blockquote>
				{{{ $comment->content() }}}
				<small>{{{ $comment->author->username }}} &bull;{{{ $comment->date() }}}</small>	
			</blockquote>
				<!-- <img class="thumbnail" src="http://placehold.it/60x60" alt=""> -->
		<hr />
		@endforeach
		@else
		<hr />
		@endif
	@endif

	</div>
</div>


<!-- </div> -->
<div class="main">


@include('site.partials.contact')
</div>
<footer>
	
</footer>






@stop
