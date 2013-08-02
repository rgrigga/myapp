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
		max-height: 64px;
	}


	.thumbnail{
		/*background-color: red;*/
		/*min-height: 20%;*/
	}

http://mashable.com/2013/01/15/color-scheme-tools/

.page-header{
	padding-left: 20px;
	padding-right:20px;
}

    @media screen and (max-width: 780px) {
    	img.thumby{
			max-height: 300px;
    	}
    }
    @media screen and (min-width: 979px) {

    	.page-header {
	background-color: rgba(60,160,208,.3);
	margin-left: -80px;
	margin-right: -80px;
	padding-left: 80px;
	padding-right: 80px;
}

        /*.contentwrap { padding-top: 20px; }*/
    }

</style>

<?php

$array=array(
	'tweet',
	'fb',
	'linked-in',
	'page',
	);

function myviews(array $array){
	$str='<ul class="dropdown-menu">';
	foreach ($array as $item) {
		$str.='<li>'.$item.'</li>';
	}
	$str.='</ul>';
	return $str;
}



?>
<div>
	 <span class="label label-info">Info</span> Need help?  Please ask!
</div>

<?php
function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  //check ip from share internet
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  //to check ip is pass from proxy
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

// echo getRealIpAddr();

?>

<h2>IP: {{getRealIpAddr()}}</h2>

	<style>
		.piwik iframe{
			min-height: 70%;
		}
	</style>

	<div class="piwik">
	<h2>Piwik:</h2>
		{{$piwik}}
	</div>
<div class="page-header">
	
	<h3>
		Website Management :)
		<div class="pull-right">
			<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i>Create </a>
		</div>
	</h3>

	<div class="btn-group">
		<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Tools <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="https://bootsnipp.com/resources">https://bootsnipp.com/resources</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="tools">Tools Page</a></li>
		</ul>
	</div>
	<div>Menus: {{{ $company->menus }}}</div>

	<div>{{ link_to_route('companies.edit', 'Edit Company', array($company->id), array('class' => 'btn btn-info')) }}</div>
	<a href="http://www.make-rss-feeds.com/making-an-rss-feed.htm">RSS Feeds</a>
			{{myviews($array)}}
</div>
<section>
			<ul class="thumbnails">
			@foreach ($posts as $post)
			<li>
				<div class="thumbnail span2">
					<h4>{{{ $post->title }}}</h4>
					{{--URL::to($post->slug)--}}
					
<img class="thumby" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">

					<!-- <p class="muted credit">{{--URL::to('assets/'.$post->image)--}}</p> -->
				
				<div class="text-center">
					<a href="{{{URL::to('blog/'.$post->slug)}}}" class="btn btn-info btn-mini">View</a>	
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini"><i class="icon-edit"></i> {{{ Lang::get('button.edit') }}}</a>
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger"><i class="icon-trash"></i> {{{ Lang::get('button.delete') }}}</a>
				</div>
				</div>
			</li>
			@endforeach
		</ul>
</section>





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
    <small>Someone famous <cite title="Source Title"><a href="http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html">http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html</a></cite></small>
    </blockquote>






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

@section('footer')

@stop