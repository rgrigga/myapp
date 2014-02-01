@extends('admin::layouts.master')

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
// http://kb.siteground.com/ssl_error_message/
// Site does not open after SSL installation

// After an SSL installation on your web hosting account you may not be able to open your site.

// This issue is caused by the SSL installation which requires a DNS change of your domain’s A record. Right after the SSL installation you might be still resolving your domain with the old DNS settings. Generally those changes should occur immediately but it is still possible to access your website using cached DNS information.

// You should allow a few hours for the DNS change to propagate and take effect. After that you will be able to access your site without any problems.

// It is also a good idea in such cases to clear up your browser’s cache  and your local DNS cache.

// If you are having problems with your SSL certificate, ask your host for assistance. SiteGround offers the best SSL hosting and any SSL issues are resolved quickly and efficiently.
?>

@section('styles')
	@parent

	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />
	<!-- This display's the company's less page -->
	<script src="/assets/js/less.js" type="text/javascript"></script>
@stop

{{-- Web site Title --}}
@section('title')
Website Management :::
@parent
@stop

@section('secondary')

<div class="well">
		 <p class="text-center">Your IP: <span class="label label-info">{{getRealIpAddr()}}</span></p>
	
</div>




@stop

@section('page-header')
<h1>Admin Index</h1>
<h2>{{{$company->name}}}</h2>
@stop
{{-- Content --}}
@section('main')




<p>
	<a href="http://gristech.com/webmail">Webmail</a>
</p>

<div class="page-header">
	<h3>
		
		<div class="pull-right">
			<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i>New Post </a>
		</div>
	</h3>

	<div class="btn-group">
		<a class="btn btn-primary" data-toggle="collapse" data-target="#piwik">Live Analytics</a>
		<a class="btn btn-primary" href="https://www.l4.gristech.com/piwik/index.php">Piwik Dashboard</a>
		<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Tools <span class="caret"></span></a>

		<ul class="dropdown-menu">
			<li><a href="https://bootsnipp.com/resources">https://bootsnipp.com/resources</a></li>
			<li>foo</li>
			<li class="divider"></li>
			<li><a href="tools">Tools Page</a></li>
		</ul>
	</div>
	<div>Menus: {{{ $company->menus }}}</div>
	<!-- PIWIK -->
	<style>
		.piwik iframe{
			min-height: 420px;
		}
	</style>
	<!-- http://stackoverflow.com/questions/362730/are-iframes-considered-bad-practice -->
	<!-- http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site/18053041#18053041 -->

	<div class="row">
		<div class="piwik collapse" id="piwik">
			{{$piwik}}
		</div>
	</div>
	<!-- PIWIK -->
	<!-- side slider? http://jsfiddle.net/Osis/Mns8q/ -->
		<div>{{ link_to_route('companies.edit', 'Edit Company', array($company->id), array('class' => 'btn btn-info')) }}</div>
		<a href="http://www.make-rss-feeds.com/making-an-rss-feed.htm">RSS Feeds</a>

	<!-- BROKEN -->
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
		{{myviews($array)}}
	<!-- ./ BROKEN -->

</div>
<!-- page-header -->



<section>
	{{ $posts->links() }}

<input type="text" placeholder="filter">

		<ul class="thumbnails">
			@foreach ($posts as $post)
			<li>
				<div class="thumbnail span3">
					<img class="thumby pull-left" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this,200,200);">

					<h4>{{{$post->id}}}:{{{ $post->title }}}</h4>
					<p>{{{$post->meta_title}}}</p>
					<p><a href="{{$post->url()}}">{{{$post->slug}}}</a></p>



					<!-- <p class="muted credit">{{--URL::to('assets/'.$post->image)--}}</p> -->
				
				<div class="text-center">
					<a href="{{{URL::to('blog/'.$post->slug)}}}" class="btn btn-info btn-mini">View</a>	
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini"><i class="icon-edit"></i> {{{ Lang::get('button.edit') }}}</a>
					<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger"><i class="icon-trash"></i> {{{ Lang::get('button.delete') }}}</a>

				</div>
									<!-- <ul class='nav'> -->
					@foreach($post->tags() as $mytag)
					<!-- <li> -->
						<span class="badge">{{$mytag}}</span>
					<!-- </li> -->
					@endforeach						
					<!-- </ul> -->
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
			<td>{{{ $post->comments()->count() }}}{{--$c--}}</td>
			<td>{{{ $post->created_at() }}}</td>
			<td>{{{ $post->views }}}</td>
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














@stop

@section('footer')

<section class="well">
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
</section>


<!-- <section class="favicons">
	<div class="well">
	<h5>These favicons are fetched at will.</h5>
<ul class='nav'>
	<li>
		<a href="http://facebook.com"><img src="http://s2.googleusercontent.com/s2/favicons?domain_url=http%3A//facebook.com" width="32" height="32" alt="Favicon" /></a>
	</li>
	<li>
		<a href="http://twitter.com"><img src="http://s2.googleusercontent.com/s2/favicons?domain_url=http%3A//twitter.com" width="32" height="32" alt="Favicon" /></a>
	</li>
	<li>
		<a href="http://buckeyemower.com"><img src="http://s2.googleusercontent.com/s2/favicons?domain_url=http%3A//buckeyemower.com" width="32" height="32" alt="Favicon" /></a>
	</li>
	<li>
		<a href="http://advantage.gristech.com"><img src="http://s2.googleusercontent.com/s2/favicons?domain_url=http%3A//advantage.gristech.com" width="32" height="32" alt="Favicon" /></a>
	</li>
	<li>
		<a href="http://myapp.gristech.com"><img src="http://s2.googleusercontent.com/s2/favicons?domain_url=http%3A//myapp.gristech.com" width="32" height="32" alt="Favicon" /></a>
	</li>
</ul>
</div>
</section> -->


		<script>
            function imgError(image){
                image.onerror = "";
                //could not get this to work with holder.js
                image.src = "http://placehold.it/300x300";
                return true;
            }


        </script>
@stop