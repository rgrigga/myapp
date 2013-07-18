@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
Website Management ::
@parent
@stop

{{-- Content --}}
@section('main')

<style>
img.thumby{
	height: 64px;
}
	.thumbnail{
		background-color: red;
		min-height: 20%;
}
</style>
<div class="page-header">
	<h3>
		Website Management
		<div class="pull-right">
			<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i>Create </a>
		</div>
	</h3>
	<div class="btn-group">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<a href="http://www.make-rss-feeds.com/making-an-rss-feed.htm">RSS Feeds</a>
</div>
		<ul class="thumbnails">
			@foreach ($posts as $post)
			<li>
				<div class="thumbnail span2">
					<h4>{{{ $post->title }}}</h4>
					<a href="{{{URL::to($post->slug)}}}">{{{URL::to($post->slug)}}}</a>
					<img class="thumby" src="{{asset('assets/'.$post->image)}}" alt="{{$post->image}}">
					{{asset('assets'.$post->image)}}
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini"><i class="icon-edit"></i> {{{ Lang::get('button.edit') }}}</a>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger"><i class="icon-trash"></i> {{{ Lang::get('button.delete') }}}</a>
				</div>
			</li>
			@endforeach
		</ul>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="span6">{{{ Lang::get('admin/blogs/table.title') }}}</th>
			<th class="span2">{{{ Lang::get('keywords') }}}</th>
			<th class="span2">{{{ Lang::get('admin/blogs/table.comments') }}}</th>
			<th class="span2">{{{ Lang::get('admin/blogs/table.created_at') }}}</th>
			<th class="span2">{{{ Lang::get('table.actions') }}}</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($posts as $post)
		
		<tr>

			<td>t{{{ $post->title }}}</td>
			<td>md{{{ $post->meta_description }}}</td>			
			<td>mk{{{ $post->meta_keywords }}}</td>
			<td>{{{ $post->author->username }}}</td>
			<td>{{{ $post->views }}}</td>

			<td>{{{ $post->comments()->count() }}}</td>
			<td>{{{ $post->created_at() }}}</td>
			<td>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">icon {{{ Lang::get('button.edit') }}}</a>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">icon {{{ Lang::get('button.delete') }}}</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $posts->links() }}
@stop
