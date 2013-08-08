@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
Create a New Blog Post ::
@parent
@stop

{{-- Content --}}
@section('main')
<style>
	.page-header{
		color: white;
		/*text-align: center;*/
	}
</style>
<div class="page-header" name='ph'>
	<h3>
		Create Something <em>Awesome</em>
<!-- http://en.wikipedia.org/wiki/LESS_(stylesheet_language) -->
		<div class="pull-right">
			<a href="{{{ URL::to('admin/blogs') }}}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
<script type="text/javascript" src="{{asset('assets/js/jscolor/jscolor.js')}}"></script>


	<p>Howdy. This is the create page... Required fields are:</p>
	 
	 <ul>
	 	<li>"Title"</li>
		<li>"Content"</li>
	 	<li>"Image"</li> 
	 </ul>

	 <p>Please create those, then click "publish", then we'll add some better details through the "Edit" page.</p>
	 <p>
	 	<h3>COMING SOON</h3>
	 	<p>This doesn't work yet, but it will soon!</p>
	 	Change background: <input class="color"
	onchange="document.getElementsByTagName('DIV')[0].style.backgroundColor = '#'+this.color">
	 </p>

</div>

<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
	<li><a href="#tab-meta-data" data-toggle="tab">Meta Data</a></li>
	<li><a href="#tab-foo" data-toggle="tab">Foo Bar</a></li>
</ul>
<!-- ./ tabs -->

<form class="form-horizontal" method="post" action="" autocomplete="off">

	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<!-- ./ csrf token -->

	<!-- Form Actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{{ URL::to('admin/blogs') }}}">Cancel</a>
			<button type="reset" class="btn">Reset</button>
			<button type="submit" class="btn btn-success">Start</button>
		</div>
	</div>
	<!-- ./ form actions -->


<!-- <a href="http://thenounproject.com/noun/lawn-mower/#icon-No2960">The Noun Project</a>
<a href="http://css-tricks.com/using-svg/">http://css-tricks.com/using-svg/</a> -->
	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- Tab General -->
		<div class="tab-pane active" id="tab-general">
			<!-- Post Title -->
			<div class="control-group {{{ $errors->has('title') ? 'error' : '' }}}">
				<label class="control-label" for="title">Post Title</label>
				<div class="controls">
					<input type="text" name="title" id="title" value="{{{ Input::old('title') }}} New Post" />
					{{{ $errors->first('title', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ post title -->

			<!-- Content -->
			<div class="control-group {{{ $errors->has('content') ? 'error' : '' }}}">
				<label class="control-label" for="content">Content</label>


				<a href="http://imperavi.com/redactor/docs/">Redactor Docs</a>


				<div class="controls">


					<textarea class="redactor full-width span10 wysihtml5" name="content" value="content" rows="20">{{{ Input::old('content') }}} </textarea>
					{{{ $errors->first('content', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ content -->

			<!-- Image -->
			<div class="control-group {{{ $errors->has('image') ? 'error' : '' }}}">
				<label class="control-label" for="image">image URL</label>
				<div class="controls">
					<textarea class="full-width span10 " name="image" value="image" rows="1">{{{ Input::old('image') }}}</textarea>
					{{{ $errors->first('image', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ image -->
		</div>
		<!-- ./ tab general -->

		<!-- New Data tab -->
		<div class="tab-pane" id="tab-foo">
			<!-- Meta Title -->
			<!-- hello world! -->
			<div class="control-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
				<label class="control-label" for="meta-title">Meta Title</label>
				<div class="controls">
					<input type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title') }}}" />
					{{{ $errors->first('meta-title', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ meta title -->

			<!-- Meta Description -->
			<div class="control-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
				<label class="control-label" for="meta-description">Meta Description</label>
				<div class="controls">
					<input type="text" name="meta-description" id="meta-description" value="{{{ Input::old('meta-description') }}}" />
					{{{ $errors->first('meta-description', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ meta description -->

			<!-- Meta Keywords -->
			<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
				<label class="control-label" for="meta-keywords">Meta Keywords</label>
				<div class="controls">
					<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords') }}}" />
					{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ meta keywords -->
		</div>
		<!-- ./ meta data tab -->

		<!-- Meta Data tab -->
		<div class="tab-pane" id="tab-meta-data">
			<!-- Meta Title -->
			<div class="control-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
				<label class="control-label" for="meta-title">Meta Title</label>
				<div class="controls">
					<input type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title') }}}" />
					{{{ $errors->first('meta-title', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ meta title -->

			<!-- Meta Description -->
			<div class="control-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
				<label class="control-label" for="meta-description">Meta Description</label>
				<div class="controls">
					<input type="text" name="meta-description" id="meta-description" value="{{{ Input::old('meta-description') }}}" />
					{{{ $errors->first('meta-description', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ meta description -->
{{$env=App::environment();}}
			<!-- Meta Keywords -->
			<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
				<label class="control-label" for="meta-keywords">Meta Keywords</label>
				<div class="controls">
					<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ App::environment().",".Input::old('meta-keywords')}}}"/>
					{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ meta keywords -->
		</div>

	</div>
	<!-- ./ tabs content -->


</form>
@stop
