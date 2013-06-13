@extends('site.layouts.default')

{{-- Content --}}
@section('content')

	<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">

			
	<div class="row">

		<!-- <div class="span6"> -->
			<img class="pull-right img-circle" src="http://gristech.com/img/automation-busn.jpg" alt="think about it">
			<h1>The Next Level<br><small>How can a Custom Web Application help your business?</small></h1>
<p>For starters, you can...</p>
			<ul>
				<li>Generate Traffic</li>
				<li>Provide Better service for your clients</li>
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
<!-- end hero-unit -->
	

		<h2>What is a website, anyway?</h2>
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


<!-- <div id="foobar">
    Contact me!
</div>
<a href="#" id="toggle">Contact</a> -->
<style>
#contact
{
    display: none;
    background: grey;
    color: #FFF;
    padding: 10px;
}
.well{
	box-shadow: 10px 10px 5px #666666;
}
</style>

<script>
// $(function()
// {
//      $("a#toggle").click(function()
//      {
//          $("#foobar").slideToggle();
//          return false;
//      }); 
// });
</script>


<div class="container-fluid">
  <div class="row-fluid">

<!--     <div class="collapse-group">
      <div class="span2">
BLAH BLAH
      </div>
      <a class="btn" data-toggle="collapse" data-target=".span2">Toggle</a>
    </div> -->

    <div class="span10">
      <!--Body content-->
    </div>

  </div>

</div>
			
<div class="span12">
<!-- <ul class="tag">
	<li><i class="icon-tag"></i></li>
	<?php

		// foreach ($alltags as $mytag) {
		// 	echo "<li><a href='/tags/$mytag'>$mytag</a></li>";
		// }
		 // $mylist;	
	?>
</ul> -->
</div>

<div class="span12">
<!-- <h1>Posts:</h1> -->
@foreach ($posts as $post)
	<!-- <div class="row"> -->
		<div class="span3 well">
			
			<!-- Post Title -->
			<div class="row">
				<div class="span3">
					{{$post->title}}
				</div>
			</div>
			<!-- ./ post title -->

			<!-- Post Content -->
			<div class="row">
				<div class="span3">
					<a href="{{{ $post->url() }}}" class="thumbnail">
						<!-- http://placehold.it/260x180 -->
						<img src="http://gristech.com/img/{{{$post->image}}} " alt="{{{$post->image}}}">
					</a>
			<!-- Tags -->
					<p>
						<ul class='tag'>
							<li><i class="icon-tag"></i></li>
							@foreach($post->tags() as $tag)
								
							    <li><a href="{{ $tag }}">{{ $tag }}</a></li>
							    
							@endforeach
						</ul>
					</p>
				</div>
				<div class="span3">
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
				<div class="span3">
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

					<!-- Comments -->
						&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
						| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
						| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
					</p>

				</div>
				<!-- span8 -->
			</div>
			<!-- row -->
			<!-- ./ post footer -->
		</div>
		<!-- well -->

	<!-- </div> -->
<!-- row -->
	<!-- <hr /> -->
@endforeach
</div>
<div class="span12 text-center">
{{ $posts->links() }}
</div>
<!-- https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site/issues/49 -->

@stop
