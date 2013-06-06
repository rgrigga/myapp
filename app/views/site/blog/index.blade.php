@extends('site.layouts.default')

{{-- Content --}}
@section('content')

	<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">

			
	<div class="row">

		<!-- <div class="span6"> -->
			<img class="pull-right img-circle" src="http://gristech.com/img/automation-busn.jpg" alt="think about it">
			<h1>Automate Your Business <br><small>Custom Web Applications</small></h1>

			<ul>
				<li>Generate Traffic</li>
				<li>Better service for your clients</li>
				<li>Make life easier for you and your employees</li>
				<li>Save Money</li>
				<li>Make Money</li>
			</ul>
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
			
		<!-- </div> -->
		<!-- <div class="span5 text-center" style="padding:30px;"> -->
			
		<!-- </div> -->
	</div>
</div>
		<h2>What is a website?</h2>
		<p>A website is a just organized text, images, video.  It is very, very simple.</p>

		<a href="http://www.whatisawebsite.com/">http://www.whatisawebsite.com/</a>

			<p>Your website is the first thing that many of your customers will know of your business, and you may only have one shot to convert "searcher" to "prospect", and "prospect" to "client".</p>
			<p>Your website helps you turn "clients" into "happy clients" and keep them that way.</p>
	
			<h3>It's not just a website...</h3>
			
			<p>
				Your website is a marketing machine.  On the front end, it is your 24/7 connection to clients.
			</p>
				<p>On the back end, it allows you to study your clients so that you may make better decisions.</p>
				<p>
					It's easy might put off, because you are too busy running your business to deal with it.  It may seem too expensive.  Maybe you've researched Web Designers, and you've found high prices.
				</p>

			


<!-- end hero-unit -->

<div class="span8">
<!-- <h1>Posts:</h1> -->
@foreach ($posts as $post)
<div class="row">
	<div class="span8 well">
		<!-- Post Title -->
		<div class="row">
			<div class="span8">
				
			</div>
		</div>
		<!-- ./ post title -->

		<!-- Post Content -->
		<div class="row">
			<div class="span4">
				<a href="{{{ $post->url() }}}" class="thumbnail">
					<!-- http://placehold.it/260x180 -->
					<img src="http://gristech.com/img/{{{$post->image}}} " alt="{{{$post->image}}}">
				</a>



		<!-- Tags -->
				<p>

					<ul class='tag'>
						<li><i class="icon-tag"></i></li>
				@foreach($post->tags() as $tag)
					
				    <li><a href="tag/{{ $tag }}">{{ $tag }}</a></li>
				    
				@endforeach
				</ul>
				</p>

			</div>
			<div class="span4">
				<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
				<p>
					{{ String::tidy(Str::limit($post->content, 300)) }}
				</p>
				<p>
					<a class="btn btn-info" href="{{{ $post->url() }}}">Read more</a>
				</p>

			</div>
		</div>
		<!-- ./ post content -->

		<!-- Post Footer -->
		<div class="row">
			<div class="span8">
				<p></p>
				<p>
							<!-- Edit/Delete Buttons -->
			<div class="metabuttons pull-left">
				@if (Auth::check())
	                @if (Auth::user()->hasRole('admin'))
						<p>
							<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
							<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
						| </p>
					@endif
				@endif
			</div>

					&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
					| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
					| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
				</p>

			</div>
		</div>
		<!-- ./ post footer -->
	</div>

</div>

<hr />
@endforeach


{{ $posts->links() }}
<!-- https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site/issues/49 -->


@stop
