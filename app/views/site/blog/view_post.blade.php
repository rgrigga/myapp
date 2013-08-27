@extends('site.layouts.bs3')

<!-- http://stackoverflow.com/questions/1884724/what-is-node-js -->

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


.hero-unit { 
/*  background: url(
{{--{asset('assets/'.strtolower($company->brand).'/grass2.png')}--}}
) no-repeat left bottom fixed; 
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
*/
}
.page-header{
	margin-left: 0;
	margin-right: 0;
}

.page-header img{
	max-width: 100%;
	/*position: relative;*/
	/*left:-120px;*/
	/*bottom: -60px;*/
}

.footer{
	/*margin-left: 0;*/
	/*margin-right: 0;*/
}

.footer img{
	/*position: absolute;*/
	position: relative;
	/*width: 30%;*/
	/*height: 30%;*/
	right:-50%;
	bottom: -50%;
}

.contentwrap{
	margin-bottom: 200px;
}
.bg {
	background-color: rgba(99,99,0,.3);
	/*width: 150%;*/
}

.bg img{
	margin:auto;
	/*position: fixed;*/
	/*bottom:-60px;*/
	/*left: -10%;*/
	/*width: 100%;*/
	/*z-index: -1;*/
}

.page-header img{
	/*padding: 40px;*/
	/*max-width:70%;*/
}

.btn{
background: rgba(39, 174, 96,1.0);
padding: 16px 75px;
border-radius: 8px;
}

</style>
@stop

@section('nav')
@include('site.partials.nav-top-min')
@stop

{{-- Content --}}
@section('main')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span8">	
			<div class="row-fluid">
				<div class="span4">
					<img class="img-circle" src="{{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}}" alt="{{{$post->image}}}" onerror="imgError(this);">

				</div>
				<div class="span8">
					<h2>{{{ $post->title }}}</h2>
					<p>
						{{$post->meta_description}}
					</p>
					<p>
						{{$post->content}}
					</p>
					
					@if (Auth::check())
						<h5>Tags:</h5>
						<ul class='tag'>
							@foreach($post->tags() as $tag)
								<li><a href='/tags/{{{ $tag }}}'>{{{$tag}}}</a></li>
							    
							@endforeach
						</ul>
							<!-- // <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script> -->
						<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

					@endif
					<!-- intentionally not written as elseif so we can move the contents -->
					@if ( ! Auth::check())
					<a class="btn btn-warning" href="{{{ URL::to('user/login') }}}">Login for more options</a>
					@endif
				</div>
			</div>
		</div>
		<div class="span4">
			<aside>
				<?php 
				$mowerlist=array('deere','toro','cub cadet');
				$brand = str_replace(' ', '', strtolower($company->brand));
				$path="assets/".$brand."/";

				?>
				<style>
					#mowerlist li a img{
						max-height: 64px;
					}
				</style>
		
				<h2>Brands We Service</h2>
		
				<ul class="nav nav-stacked" id="mowerlist">
					@foreach($mowerlist as $mower)
						<?php 
						$mower = str_replace(' ', '', strtolower($mower)); ?>
						<li>
							<a href="#">
								<img class="pull-right" src="{{asset($path.$mower.'.png')}}" alt="$mower">
								<?php //echo $mower; ?>
							</a>
						</li>
					@endforeach
					<li>
						<a href="#"><img class="pull-right" src="holder.js/200x64/industrial/text:Another Brand" alt=""></a>
					</li>
					<li>
						<a href="#"><img class="pull-right" src="holder.js/200x64/industrial/text:Another Brand" alt=""></a>
					</li>
					<li>
						<a href="#"><img class="pull-right" src="holder.js/200x64/industrial/text:Another Brand" alt=""></a>
					</li>
					<li>
						<a href="#"><img class="pull-right" src="holder.js/200x64/industrial/text:Another Brand" alt=""></a>
					</li>
					<li>
						<a href="#"><img class="pull-right" src="holder.js/200x64/industrial/text:Another Brand" alt="">
						</a>
					</li>
				</ul>
			</aside>
		</div>
	<div>
		<!-- row -->
</div>
	<!-- page-header -->

<div class="comments">
	<a id="comments"></a>
	<h4>
		{{--{ $comments->count() }--}}
	</h4>
	@if ( ! Auth::check())
	<!-- You need to be logged in to add comments.<br /><br /> -->
	<a class="btn btn-inverse" href="{{{ URL::to('user/login') }}}">Say Something!</a>
	@elseif ( ! $canComment )
	You don't have the correct permissions to add comments.
	@else

	<form method="post" action="{{{ URL::to('blog/'.$post->slug) }}}">

		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

		<textarea class="input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

		<div class="control-group">
			<div class="controls">
				<input type="submit" class="btn" id="submit" value="Speak Your Mind" />
			</div>
		</div>
	</form>
	@endif
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


</div>


<!-- <div class=""> -->
<!-- <div class="hero-unit"> -->
	<div class="row-fluid">
		<div class="span8">
			{{$carousel}}
		</div>
		<div class="span3">
			<!-- <div class="nav"> -->
				
			<!-- </div> -->
		</div>
	</div>
<!-- </div> -->

<!-- </div> -->

					

<!-- //copy and edit buttons -->
				@if (Auth::check())
	                @if (Auth::user()->hasRole('admin'))
{{View::make('site.partials.postlist',compact($posts))}}
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

<!-- <p> -->
	{{-- $post->content --}}
<!-- </p> -->

<div>
	<span class="badge badge-info">Posted {{{ $post->date() }}}</span>
	<span class="badge">{{{$post->author->username}}}</span>
</div>

<hr />


@stop

@section('admin-bottom')
<h1>Admin/Development</h1>


<style>
	.footer{
		background-color: rgba(52, 73, 94,.9);
	}
</style>
<div class="footer">
	<p class="lead">{{$post->meta_description}}</p>
	<!-- //this should produce a div with class 'about' -->
	{{$about}}
	<!-- onerror="imgError(this) -->

	<pre class="prettyprint">
	Developer: uncomment vardump in blog.view_post to view Post $post
	<?php //var_dump($post); ?>
	</pre>	
</div>
@stop

