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
		/*height: 64px;*/
	}

	.thumbnail{
		/*background-color: red;*/
		/*min-height: 20%;*/

}
</style>

<?php
function myviews(array $array){
	$str='<ul class="dropdown-menu">';
	foreach ($array as $item) {
		$str.='<li>'.$item.'</li>';
	}
	$str.='</ul>';
	return $str;
}

$array=array(
	'tweet',
	'fb',
	'linked-in',
	'page',
	);
?>



 <span class="label label-info">Info</span>

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
			{{myviews($array)}}
					<!-- {{myviews($array)}} -->
</div>
		<ul class="thumbnails">
			@foreach ($posts as $post)
			<li>
				<div class="thumbnail span2">
					<h4>{{{ $post->title }}}</h4>
					<a href="{{{URL::to($post->slug)}}}">{{{URL::to($post->slug)}}}</a>
					<img class="thumby" src="{{asset('assets/'.$post->image)}}" alt="{{$post->image}}">

					<p class="muted credit">{{asset('assets'.$post->image)}}</p>
					
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
			
			<th>views</th>
			<th>#comments</th>
			<th>created</th>
			<th class="span2">{{{ Lang::get('table.actions') }}}</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($posts as $post)
		<tr>
			<td><a href="{{{URL::to('blog/'.$post->slug)}}}">{{{ $post->title }}}</a></td>
			<td>{{{ $post->meta_description }}}</td>			
			<td>{{{ $post->meta_keywords }}}</td>
			<td>{{{ $post->author->username }}}</td>
			<td>{{{ $post->views }}}</td>

			<td>{{{ $post->comments()->count() }}}</td>
			<td>{{{ $post->created_at() }}}</td>
			<td>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini"> <i class="icon-pencil"></i> {{{ Lang::get('button.edit') }}}</a>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger"><i class="icon-trash"></i> {{{ Lang::get('button.delete') }}}</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $posts->links() }}
@stop

