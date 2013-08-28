@extends('site.layouts.bs3')

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
<meta name="description" content="{{{$post->description}}}">
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent
<meta name="keywords" content="{{{ $post->meta_keywords }}}" />
@stop


@section('styles')
@parent
        <link rel="stylesheet/less" type="text/css" href="/assets/css/less/tools.less" />
        <script src="/assets/js/less.js" type="text/javascript"></script>
@stop
{{-- Content --}}
@section('content')

<!-- <div class="page-header"> -->

<div class="container">
		<div class="row">

		<div class="jumbotron">
			<a href="{{{ $post->url() }}}">
				<!-- http://placehold.it/260x180 -->
				<img class="pull-left img-responsive" src="{{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}}" alt="{{{$post->image}}}" onerror="imgError(this);">
			</a>
			<h2>{{ $post->title }}</h2>

			<h5>Tags:</h5>

			<ul class='tag'>
				@foreach($post->tags() as $tag)
					<li><a href='/tags/{{ $tag }}'>{{$tag}}</a></li>
				@endforeach
			</ul>

			<p>
				{{substr($post->meta_description, 0,148)}}
			</p>
		</div>
	</div>
</div>
		<!-- http://chiragchamoli.com/posts/simple-file-upload-in-laravel/			 -->
		<!-- https://github.com/JeffreyWay/Laravel-4-Generators#resources -->
<!-- </div> -->
<!-- //copy and edit buttons -->
@if (Auth::check())
@if (Auth::user()->hasRole('admin'))
<p>
	<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
	<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
</p>
@endif
@endif


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
<form method="post" action="{{{ URL::to($post->slug) }}}" role="form">
	<div class="control-group">
		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

		<textarea class="input-block-level wysihtml5" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>
	</div>

	<div class="control-group">
		<div class="controls">
			<input type="submit" class="btn" id="submit" value="Submit" />
		</div>
	</div>
</form>
@endif

@stop





@section('footer')

<div class="col-lg-6">
	{{$carousel}}
</div>
<style>
/*	.carousel-inner .item img{
		height: 300px;
	}*/
</style>
@parent
@stop

