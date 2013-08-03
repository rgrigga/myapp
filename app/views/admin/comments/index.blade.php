@extends('admin/layouts.default')

{{-- Web site Title --}}
@section('title')
Blog Comment Management ::
@parent
@stop

{{-- Content --}}
@section('main')
<div class="page-header">
	<h3>
		Blog Comment Management
	</h3>
</div>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="span3">{{{ Lang::get('admin/comments/table.title') }}}</th>
			<th class="span3">{{{ Lang::get('admin/blogs/table.post_id') }}}</th>
			<th class="span2">{{{ Lang::get('admin/users/table.username') }}}</th>
			<th class="span2">{{{ Lang::get('admin/comments/table.created_at') }}}</th>
			<th class="span2">{{{ Lang::get('table.actions') }}}</th>
		</tr>
	</thead>
	<tbody>
		<?php
// var_dump($comments);
// die(var_dump($comment->user()->first()->id));
// die(var_dump($comment->post()->first()->id));
?>
		@foreach ($comments as $comment)
<?php
// var_dump($comment);
?>

{{{$comment->id}}}</br>
{{$comment->content}}</br>
{{{ Str::limit($comment->content, 40, '...') }}}</br>
{{{ URL::to('admin/comments/'.$comment->id .'/edit') }}}</br>
<a href="{{{ URL::to('admin/users/'. $comment->user()->first()->id .'/edit') }}}">{{{ $comment->user()->first()->username }}}</a></br>
<?php
$post=$comment->post()->first();
var_dump($post);
echo $comment->post()->first()->title;
?>


</br>
<hr>
		@endforeach
	</tbody>
</table>

{{ $comments->links() }}
@stop

