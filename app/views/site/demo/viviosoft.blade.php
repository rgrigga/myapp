@extends('site.layouts.bs3')

@section('styles')
@parent
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

	<!-- This display's the company's less page -->
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/viviosoft.less" />

	<script src="/assets/js/less.js" type="text/javascript"></script>
@stop

@section('page-header')
<h1>Viviosoft</h1>
Yet <em>another</em> demo page 
@stop

@section('main')
<h1>Main</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quas, non cupiditate nulla optio dolor minima iste reiciendis necessitatibus delectus fugiat possimus aut accusantium quasi nemo voluptate animi exercitationem magni consequatur enim aperiam dignissimos corporis amet commodi beatae asperiores repellendus consectetur nobis dolores obcaecati facilis vero architecto fugit quo quibusdam vel maxime. Beatae, aut optio aspernatur maxime itaque quos provident est laudantium officia quidem minus iure saepe. Molestias voluptas laboriosam dolore quod facere optio doloremque accusamus cum. A, iusto, in, minus, error doloremque maxime numquam officiis totam blanditiis minima sit quibusdam quam ducimus expedita reiciendis et alias natus culpa vel sint veniam praesentium possimus magnam debitis amet aliquam commodi. Ex, repellat corporis minus modi ullam aspernatur voluptatibus? Minima soluta perferendis eligendi dolorum reprehenderit? Natus, temporibus, error, culpa tempore voluptas eius voluptatum in eligendi aut maxime praesentium minus aperiam. Laborum, voluptas, excepturi neque dolorem ab architecto perspiciatis quibusdam eius odio unde optio pariatur quos ad cupiditate officiis eveniet ut eos inventore saepe tenetur consequatur eligendi aperiam reiciendis magni quaerat odit perferendis quas nulla maiores sequi. Nostrum, quis, reiciendis, pariatur, ipsum reprehenderit debitis suscipit illo nesciunt possimus excepturi non voluptate numquam dicta ex quisquam repudiandae aliquid tempora atque quia commodi nulla aliquam!</p>
@stop

@section('secondary')

<nav>
	<h3>Resources</h3>
	<ul class="nav nav-pills nav-stacked">
		<li><a href="http://mail.viviosoft.com">EMAIL</a></li>
		<li><a href="http://www.viviosoft.com:8080/">JIRA</a></li>
		<li><a href="{{URL::to('demo/leftslider')}}">leftslider demo</a></li>
		<li><a href="{{URL::to('demo/topmenuhide')}}">topmenuhide</a></li>
	</ul>
	<h3>Reference</h3>
	<ul>
		<li><a href="http://www.ohioleadership.org/">OLAC</a></li>
		<li><a href="http://www.ocali.org/">OCALI</a></li>
		<li><a href="http://www.edutopia.org/">Left Slider</a></li>
	</ul>
	<h3>Tools</h3>
	<ul>
		<li><a href="http://tech.xtremelabs.com/html5-facebook-style-sliding-menu-using-twitter-bootstrap-collapse/">sliding menu</a></li>
		<li><a href="http://davidwalsh.name/hide-address-bar">Hide Address Bar</a></li>
		<li><a href="http://icomoon.io/app/">icomoon</a></li>
	</ul>
</nav>
@stop

@section('footer')
<!-- footer -->
@stop

@section('js-bottom')
@parent
<script>
	// When ready...
window.addEventListener("load",function() {
	// alert("BAM");
	// Set a timeout...
	setTimeout(function(){
		// Hide the address bar!
		window.scrollTo(0, 1);
	}, 0);
});
</script>
@stop