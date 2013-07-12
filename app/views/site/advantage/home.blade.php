@extends('layouts.scaffold')

@section('title')
@parent
{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent
{{$company->description}}
@stop

@section('meta_keywords')
@parent

@stop

@section('styles')

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

<style>
	html,body{
		background-color: rgba(235,196,162,.2);
	}
	.well{
		background-color: rgba(121,186,242,.6);
		box-shadow: 2px 2px 1px #8285E6;
	}
	h1,h2{
		color:rgba(18,124,166,1);
		/*font-size: 32px;*/
		/*box-shadow: 5px 5px 3px #666666;*/
	}
</style>
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
@stop

@section('nav')
@include('site.partials.nav-top-min')
@show

@section('main')
<?php
	$env=App::environment();
	echo "<div class='alert alert-info'>Welcome to the <strong>".$env."</strong> environment.</div>";

	if($env=="local"){
		$path='/home/ryan/MyApp6/app/views/site/pages/';
	}
	else{
    	$path='/home/gristech/myapp/app/views/site/pages/';
    }
    $mypages = array();
    foreach (glob($path."*.blade.php") as $filename) {
        $filename=str_replace($path, "", $filename);
        $filename=str_replace(".blade.php", "", $filename);
        array_push($mypages,$filename);
        // echo "$filename" . "<br>";
    }
?>

<div data-spy="affix" data-offset-top="80">
	<img src="{{asset($company->image)}}" alt="MyImage">
</div>

	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-pills">
		@foreach($company->menus() as $menu)
	    <li><a href="#{{$menu}}" data-toggle="tab"><i class="icon-rocket icon-4x"></i> {{{$menu}}}</a></li>
	    @endforeach
	    <li class="active"><a href="#tab1" data-toggle="tab">Section 2</a></li>
	  </ul>
	  
	  <div class="tab-content">
	    @foreach($company->menus() as $menu)
	    <div class="tab-pane" id="{{{$menu}}}">
	      <p>Howdy, I'm {{{$menu}}}.</p>
	    </div>
	    @endforeach
	    <div class="tab-pane active" id="tab1">
	      <p>I'm in Section 1.</p>
	    </div>
	  </div>
	</div>

<div class="row page-header">
	<div class="span4">
		<!-- <div class="pull-right"> -->
		<img src="{{asset($company->image)}}" alt="MyImage">
	<!-- </div> -->
	<div>ID: {{{ $company->id }}}</div>
	<div>Name: {{{ $company->name }}}</div>
	<div>Brand: {{{ $company->brand }}}</div>
	<div>Phone: {{{ $company->phone }}}</div>
	<div>Email: {{{ $company->email }}}</div>
	<div>Description: {{{ $company->description }}}</div>
	<div>Slogan: {{{ $company->slogan }}}</div>
	<div>Image: {{{ $company->image }}}</div>
	<div>Menus: {{{ $company->menus }}}</div>
	</div>
</div>

<div class="span8 offset4">
<h1>Posts:</h1>
<div class="text-center">
{{ $posts->links() }}
</div>

@foreach ($posts as $post)
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




	

	</div>
@stop