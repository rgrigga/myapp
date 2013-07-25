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
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Tools <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="https://bootsnipp.com/resources">https://bootsnipp.com/resources</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="tools">Tools Page</a></li>
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
					{{--URL::to($post->slug)--}}
					<a href="{{{URL::to($post->slug)}}}" class="btn">View Post</a>
					<img class="thumby" src="{{asset('assets/'.$post->image)}}" alt="{{$post->image}}">

					<!-- <p class="muted credit">{{--URL::to('assets/'.$post->image)--}}</p> -->
					
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
			<th>#views</th>
			<th>author</th>
			<th class="span2">{{{ Lang::get('table.actions') }}}</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($posts as $post)
		<tr>
			<td><a href="{{{URL::to('blog/'.$post->slug)}}}">{{{ $post->title }}}</a></td>
			
			<td>{{{ $post->meta_keywords }}}</td>
<?php
$url=asset('assets/img/underconstruction.gif');
$c='<img src='.$url.'>';
?>
<img src="" alt="">
			<td>{{{ $post->comments()->count() }}}{{$c}}</td>
			<td>{{{ $post->created_at() }}}</td>
			<td>{{{ $post->views }}}{{$c}}</td>
			<td>{{{ $post->author->username }}}</td>
			


			<td>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini"> <i class="icon-pencil"></i> {{{ Lang::get('button.edit') }}}</a>
				<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger"><i class="icon-trash"></i> {{{ Lang::get('button.delete') }}}</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $posts->links() }}

    <blockquote class="pull-right">
    <p>The solution to this is so easy that its lack of popularity and diffusion makes us burn with nerd rage.</p>
    <small>Someone famous <cite title="Source Title">http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html</cite></small>
    </blockquote>


<a href="http://www.templatemonster.com/infographics/bootstrap-interactive-infographics.php"><img src="http://t.tmimgcdn.com/themes/default/images/interactive-responsive-webdesign-infographic/interactive-responsive-webdesign.jpg" alt="Responsive Bootstrap Web Design" title="Interactive Responsive Webdesign Infographic" /></a><br />Via: <a href="http://www.templatemonster.com/">TemplateMonster.com</a>

<div class="span3">
	<address>
    <strong>Twitter, Inc.</strong><br>
    795 Folsom Ave, Suite 600<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
     
    <address>
    <strong>Full Name</strong><br>
    <a href="mailto:#">first.last@example.com</a>
    </address>
</div>

		      		<div class="span3 thumbnail delta pull-right">
		      			<a href="http://opensource.org/">
		      			<img src="http://gristech.com/img/logo/osi_standard_logo.png" alt="open source">
						<h4><span>Open Source</span></h4>
						</a>
						<p class="photocredit"><a href="http://opensource.org/">logo &copy; opensource.org</a></p>
						<h6>Free (as in freedom)</h6>
						<h6>Free (as in free beer)</h6>
						<h6><a href="http://opensource.org/licenses/MIT">MIT License</a></h6>
						<p>The best thing since sliced bread.</p>
						<p>Read about <a href="{{{ URL::to('security') }}}">Security</a> </p>
		      		</div>
@stop

