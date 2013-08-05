@extends('layouts.scaffold')

{{-- Web site Title --}}
@section('title')
@parent
 - {{ $post->title }}
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
{{$company->brand}} - {{ $post->meta_title }}
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

@section('styles')
<style>
	/* Pretty printing styles. Used with prettify.js. */
/* Vim sunburst theme by David Leibovic */

pre .str, code .str { color: #65B042; } /* string  - green */
pre .kwd, code .kwd { color: #E28964; } /* keyword - dark pink */
pre .com, code .com { color: #AEAEAE; font-style: italic; } /* comment - gray */
pre .typ, code .typ { color: #89bdff; } /* type - light blue */
pre .lit, code .lit { color: #3387CC; } /* literal - blue */
pre .pun, code .pun { color: #fff; } /* punctuation - white */
pre .pln, code .pln { color: #fff; } /* plaintext - white */
pre .tag, code .tag { color: #89bdff; } /* html/xml tag    - light blue */
pre .atn, code .atn { color: #bdb76b; } /* html/xml attribute name  - khaki */
pre .atv, code .atv { color: #65B042; } /* html/xml attribute value - green */
pre .dec, code .dec { color: #3387CC; } /* decimal - blue */

pre.prettyprint, code.prettyprint {
        background-color: #000;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        -o-border-radius: 8px;
        -ms-border-radius: 8px;
        -khtml-border-radius: 8px;
        border-radius: 8px;
}

pre.prettyprint {
        width: 95%;
        margin: 1em auto;
        padding: 1em;
        white-space: pre-wrap;
}


/* Specify class=linenums on a pre to get line numbering */
ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE; } /* IE indents via margin-left */
li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
/* Alternate shading for lines */
li.L1,li.L3,li.L5,li.L7,li.L9 { }

@media print {
  pre .str, code .str { color: #060; }
  pre .kwd, code .kwd { color: #006; font-weight: bold; }
  pre .com, code .com { color: #600; font-style: italic; }
  pre .typ, code .typ { color: #404; font-weight: bold; }
  pre .lit, code .lit { color: #044; }
  pre .pun, code .pun { color: #440; }
  pre .pln, code .pln { color: #000; }
  pre .tag, code .tag { color: #006; font-weight: bold; }
  pre .atn, code .atn { color: #404; }
  pre .atv, code .atv { color: #060; }
}
</style>
@stop

@section('nav')
@include('site.partials.nav-top-inverse')
@stop

{{-- Content --}}
@section('main')

<div class="hero-unit">

<div class="row">

	<div class="span5 text-center">
		<a href="{{{ $post->url() }}}" class="thumbnail">
			<!-- http://placehold.it/260x180 -->

<!-- without error -->
			<img class="img-circle" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" >

<!-- with error -->
			<img class="img-circle" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this);">
		</a>
	</div>
	<div class="span5">
<!-- //copy and edit buttons -->
<!-- holder.js -->
<!-- <script src="{{asset('assets/js/holder.js')}}"></script> -->
<!-- <img src="holder.js/300x300" alt=""> -->
<img src="holder.js/300x200/social">
	<img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$company->logo)}}" alt="{{$post->image}}" onerror="imgError(this);">
		<h2>{{ $post->title }}</h2>
		<p>
			<!-- String Tidy here? -->
			<!-- Str::limit() -->
			{{$post->meta_description}}
		</p>
		

		@if (Auth::check())
		<h5>Tags:</h5>
		<ul class='tag'>
			@foreach($post->tags() as $tag)
				<li><a href='/tags/{{ $tag }}'>{{$tag}}</a></li>
			    
			@endforeach
		</ul>
			<!-- // <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script> -->
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<pre class="prettyprint">
Developer: uncomment vardump in blog.view_post to view Post $post
<?php //var_dump($post); ?>
</pre>
		@endif
		<!-- intentionally not written as elseif so we can move these -->
		@if ( ! Auth::check())
		<a class="btn btn-warning" href="{{{ URL::to('user/login') }}}">Login for more options</a>
		@endif

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

<!-- 				@if (Auth::check())
	                @if (Auth::user()->hasRole('admin'))
					<p>
						<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
						<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
					</p>
					@endif
				@endif -->
<!-- 				<div class="pull-left">
					<img src="http://gristech.com/img/{{ $post->image }}" class="thumbnail" style="padding:10px;">
				</div> -->

<p>{{ $post->content }}</p>

<div>
	<span class="badge badge-info">Posted {{{ $post->date() }}}</span>
	<span class="badge">{{{$post->author->username}}}</span>
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
<form method="post" action="{{{ URL::to('blog/'.$post->slug) }}}">
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



