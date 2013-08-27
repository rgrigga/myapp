@extends('site.layouts.bs3')



@section('styles')
@parent
        @stylesheets('myapp-css')

        <link rel="stylesheet/less" type="text/css" href="/assets/css/less/tools.less" />
        <script src="/assets/js/less.js" type="text/javascript"></script>
<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css"> -->

<!-- <link rel="stylesheet" href="/assets/css/style.css">

<link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

@stop

{{-- Content --}}
@section('content')

<div class="jumbotron">
      <ul class='tag'>
      @foreach($post->tags() as $tag)
        <li><a href='/tags/{{ $tag }}'>{{$tag}}</a></li>
          
      @endforeach
    </ul>
        <img class="" src="{{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}}" alt="{{{$post->image}}}" onerror="imgError(this);">
        <h2>{{ $post->title }}</h2>

</div>

<div class="page-header">

<div class="row">

	<div class="span11 text-center">
		<a href="{{{ $post->url() }}}" class="thumbnail">
			<!-- http://placehold.it/260x180 -->
<!-- 			<img class="img-circle" src="{{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}}" alt="{{{$post->image}}}" onerror="imgError(this);"> -->
		</a>
	</div>
	<div class="span12">


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
		<!-- http://chiragchamoli.com/posts/simple-file-upload-in-laravel/			 -->
		<!-- https://github.com/JeffreyWay/Laravel-4-Generators#resources -->
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


@section('main')

      <h1>Bootstrap 3 Demo</h1>

      <h2>Bootstrap grids</h2>
      <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>

      <h4>Three equal columns</h4>
      <div class="row">
        <div class="col-lg-4">.col-lg-4</div>
        <div class="col-lg-4">.col-lg-4</div>
        <div class="col-lg-4">.col-lg-4</div>
      </div>

      <h4>Three unequal columns</h4>
      <div class="row">
        <div class="col-lg-3">.col-lg-3</div>
        <div class="col-lg-6">.col-lg-6</div>
        <div class="col-lg-3">.col-lg-3</div>
      </div>

      <h4>Two columns</h4>
      <div class="row">
        <div class="col-lg-8">.col-lg-8</div>
        <div class="col-lg-4">.col-lg-4</div>
      </div>

      <h4>Full width, single column</h4>
      <p class="text-warning">No grid classes are necessary for full-width elements.</p>

      <h4>Two columns with two nested columns</h4>
      <div class="row">
        <div class="col-lg-8">
          .col-lg-8
          <div class="row">
            <div class="col-lg-6">.col-lg-6</div>
            <div class="col-lg-6">.col-lg-6</div>
          </div>
        </div>
        <div class="col-lg-4">.col-lg-4</div>
      </div>

      <h4>Mixed: mobile and desktop</h4>
      <div class="row">
        <div class="col-12 col-lg-8">.col-12 .col-lg-8</div>
        <div class="col-6 col-lg-4">.col-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-6 col-lg-4">.col-6 .col-lg-4</div>
        <div class="col-6 col-lg-4">.col-6 .col-lg-4</div>
        <div class="col-6 col-lg-4">.col-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-6 col-lg-6">.col-6 .col-lg-6</div>
        <div class="col-6 col-lg-6">.col-6 .col-lg-6</div>
      </div>

      <h4>Mixed: mobile, tablet, and desktop</h4>
      <div class="row">
        <div class="col-12 col-sm-8 col-lg-8">.col-12 .col-lg-8</div>
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-lg-6">.col-6 .col-lg-6</div>
        <div class="col-6 col-sm-6 col-lg-6">.col-6 .col-lg-6</div>
      </div>




      <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>


      <div class="body-content">

        <!-- Example row of columns -->
        <div class="row">
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
         </div>
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
          </div>
        </div>

@stop


@section('footer')

<div class="span6">
	{{$carousel}}
</div>
<style>
	.carousel-inner .item img{
		height: 300px;
	}
</style>
@parent
@stop

