@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{ $post->title }} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent
 :: {{ $post->title }} 
@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent
{{{ String::title($post->description) }}} ::
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent
{{{ String::title($post->title) }}} ::

@stop

{{-- Content --}}
@section('content')

<div class="hero-unit">

<div class="row">

	<div class="span11 text-center">
		<a href="{{{ $post->url() }}}" class="thumbnail">
			<!-- http://placehold.it/260x180 -->
			<img src="/assets/img/{{$post->image}} " alt="{{$post->image}}">
		</a>
	</div>
	<div class="span12">

		<h2>{{ $post->title }}</h2>

		<h5>Tags:</h5>

		<ul class='tag'>
			@foreach($post->tags() as $tag)
				<li><a href='/tags/{{ $tag }}'>{{$tag}}</a></li>
			    
			@endforeach
		</ul>

		<p>
			{{{$post->meta_description}}}
		</p>
	</div>

</div>


					
</div>

<!-- //copy and edit buttons -->
				@if (Auth::check())
                @if (Auth::user()->hasRole('admin'))
				<p>
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
				</p>
				@endif
				@endif
<!-- 				<div class="pull-left">
					<img src="http://gristech.com/img/{{ $post->image }}" class="thumbnail" style="padding:10px;">
				</div> -->

<p>{{ $post->content() }}</p>

<div>
	<span class="badge badge-info">Posted {{{ $post->date() }}}</span>
</div>

<hr />

<a id="comments"></a>
<h4>{{{ $comments->count() }}} Comments</h4>

@if ($comments->count())
@foreach ($comments as $comment)
<div class="row">
	<div class="span1">
		<img class="thumbnail" src="http://placehold.it/60x60" alt="">
		 <!-- {{{$comment->author->avatar}}} -->
	</div>
	<div class="span11">
		<div class="row">
			<div class="span11">
				<span class="muted">{{{ $comment->author->username }}}</span>
				&bull;
				{{{ $comment->date() }}}
			</div>

			<div class="span11">
				<hr />
			</div>

			<div class="span11">
				{{{ $comment->content() }}}
			</div>
		</div>
	</div>
</div>
<hr />
@endforeach
@else
<hr />
@endif

@if ( ! Auth::check())
You need to be logged in to add comments.<br /><br />
Click <a href="{{{ URL::to('user/login') }}}">here</a> to login into your account.
@elseif ( ! $canComment )
You don't have the correct permissions to add comments.
@else
<h4>Add a Comment</h4>
<form method="post" action="{{{ URL::to($post->slug) }}}">
	<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

	<textarea class="input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

	<div class="control-group">
		<div class="controls">
			<input type="submit" class="btn" id="submit" value="Submit" />
		</div>
	</div>
</form>
@endif
@stop


<div id="prettified">
	
<h3>Prettified Code Snippets</h3>
<h5>Javascript:</h5>
<pre class="prettyprint">
{{{e('// javascript
<script type="text/javascript">
// Say hello world until the user starts questioning
// the meaningfulness of their existence.
function helloWorld(world) {
  for (var i = 42; --i >= 0;) {
    alert(\'Hello \' + String(world));
  }
}
</script>
<style>
p { color: pink }
b { color: blue }
u { color: "umber" }
</style>')}}}</pre>

<h5>PHP</h5>
<pre class="prettyprint">
<code class="language-php">{{e('<?php
	echo "foobar!";
	die("You\'ve been hacked!");
	class Foo extends Bar{
		__construct($baz){
			//code here
		}
		echo "bar";
	}')}}</code></pre>

<h5>CSS:</h5>
<pre class="prettyprint"><code class="lang-css">{{e('/* css */
/*http://stackoverflow.com/questions/5506258/horizontal-scroll-overflowing-html-lis-without-knowing-width*/
ul.tag li{
    display: inline-block;
    background-color: orange;
    padding: 5px;
    margin:2px;
}')}}</code></pre>

</div>
