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

/*http://mashable.com/2013/01/15/color-scheme-tools/*/

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
// http://kb.siteground.com/ssl_error_message/
// Site does not open after SSL installation

// After an SSL installation on your web hosting account you may not be able to open your site.

// This issue is caused by the SSL installation which requires a DNS change of your domain’s A record. Right after the SSL installation you might be still resolving your domain with the old DNS settings. Generally those changes should occur immediately but it is still possible to access your website using cached DNS information.

// You should allow a few hours for the DNS change to propagate and take effect. After that you will be able to access your site without any problems.

// It is also a good idea in such cases to clear up your browser’s cache  and your local DNS cache.

// If you are having problems with your SSL certificate, ask your host for assistance. SiteGround offers the best SSL hosting and any SSL issues are resolved quickly and efficiently.
?>

<h2>IP: {{getRealIpAddr()}}</h2>




<p>
	<a href="http://gristech.com/webmail">Webmail</a>

</p>

<div class="page-header">
	

	<h3>
		Website Management :)
		<div class="pull-right">
			<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i>Create </a>
		</div>
	</h3>

	<div class="btn-group">
		<a class="btn btn-primary" data-toggle="collapse" data-target="#piwik">Live Analytics</a>
		<a class="btn btn-primary" href="https://www.l4.gristech.com/piwik/index.php">Piwik Dashboard</a>
		<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Tools <span class="caret"></span></a>

		<ul class="dropdown-menu">
			<li><a href="https://bootsnipp.com/resources">https://bootsnipp.com/resources</a></li>
			<li>foo</li>
			<li><a href="#">Something else here</a></li>
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
		<ul class="thumbnails">
			@foreach ($posts as $post)
			<li>
				<div class="thumbnail span3">
					<h4>{{{ $post->title }}}</h4>
					{{--URL::to($post->slug)--}}


<img class="thumby" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this,200,200);">

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

<script>
	$(document).ready(function(){
  
        $(".collapse").collapse();
});
</script>


@stop

@section('footer')

<!-- PAYPAL -->
<div class="span2 well pull-right">
<h6>Please, give Ryan some money:</h6>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6WG8557WFT7XA">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
<!-- PAYPAL -->



<div class="span2 well">
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


@stop