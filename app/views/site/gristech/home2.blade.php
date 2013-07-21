@extends('site.layouts.advantage')

{{-- Update the Meta Title --}}
@section('title')
@parent
 - {{$company->slogan}}
@stop
{{-- Update the Meta Description --}}
@section('meta_description')
@parent
{{$company->description}}
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent
<!-- <meta name="keywords" content="Lawn Mower Repair, Lawn Mower Service" /> -->
@stop

@section('styles')
@parent
<!-- \@ stylesheets("public-css") -->
	
	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	    <!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"> -->
	    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css"> -->

	    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css"> -->
@stop

@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

		<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
		<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

		<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}"> -->
		<link rel="shortcut icon" href="{{{ asset('assets/ico/'.$company->name.'/favicon.png') }}}">

		<!-- hardy har -->		
@stop

{{-- Content --}}
@section('content')
@parent

<!-- @parent -->
<h1>Welcome Home.</h1>
<h2>Company:{{$company->brand}}</h2>
<!-- <?php var_dump($company)?> -->
<p>Icon: </p>
<!-- About -->
<!-- Contact -->
<!-- Services -->
<img src="asset({{$company->image}})" alt="">
<div>ID: {{{ $company->id }}}</div>
<div>Name: {{{ $company->name }}}</div>
<div>Brand: {{{ $company->brand }}}</div>
<div>Phone: {{{ $company->phone }}}</div>
<div>Email: {{{ $company->email }}}</div>
<div>Description: {{{ $company->description }}}</div>
<div>Slogan: {{{ $company->slogan }}}</div>
<div>Image: {{{ $company->image }}}</div>
<div>Menus: {{{ $company->menus }}}</div>

@stop

@section('dev')


                    <ul class="nav pull-right">
                        @if (Auth::check())
                            @if (Auth::user()->hasRole('admin'))

                                <li{{ (Request::is('admin/blogs/create*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> New</a></li>

	                            <li><a href="{{{ URL::to('admin') }}}">Dashboard</a></li>
                            @endif
                            <li><a href="{{{ URL::to('user') }}}">Name: {{{ Auth::user()->username }}}</a></li>
                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                        @else
                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                            
                        @endif
                        @include('site.partials.contact')
                    </ul>




	<div class="span8 offset4">
		<h1>Posts:</h1>

		<div class="text-center">
		{{ $posts->links() }}
		</div>
	
		@foreach ($posts as $post)
			<div class="row-fluid">
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
			</div>
			

			<div class="well">
				{{$post->title}}
				{{$post->img}}

				<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
				<p>
				{{ String::tidy(Str::limit($post->meta_description, 158)) }}
				</p>
				<p>
					<a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
				</p>
			</div>

			<ul class='tag'>
				<li><i class="icon-tag"></i></li>
				@foreach($post->tags() as $tag)
					
				    <li><a href="{{ $tag }}">{{ $tag }}</a></li>
				    
				@endforeach
			</ul>

		@endforeach
		{{ $posts->links() }}

	</div>

<!-- ************************************************ -->
@stop