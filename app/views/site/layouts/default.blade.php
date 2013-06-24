<!DOCTYPE html>

<!-- meta -->
<!-- CSS/styles -->
<!-- JS -->

<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('meta-title')
			Gristech
			@show
		</title>


{{-- Update the Meta Title --}}
<!-- @section('meta_title') -->

<!-- Buckeye Mower ::  -->
 <!-- String::title($post->title) }}} -->
<!-- @stop -->

{{-- Update the Meta Description --}}
@section('meta_description')
Gristech will do things that will help you do what you do better.  We will make you make more money.  We will therefore make you want to give us lots of money.We will make you 
{{-- Update the Meta Keywords --}}
@show
@section('meta_keywords')
<meta name="keywords" content="Gristech" />
@show
	{{-- Update the Meta Description --}}
@section('meta_description')
<meta name="description" content="A flexible, customizable web application" />
@show


		<!-- CSS
		================================================== -->
    @section('styles')
    @stylesheets("public-css")
		
		<link rel="stylesheet" href="/assets/css/style.css">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css" rel="stylesheet">
<!-- font-awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
	@show
<!-- prettify -->

<!-- NOTE: I had an experience with a lengthy pageload on this today.  It's a good lesson NOT to include prettify on the main layout page -->

<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->
@section('js')
<!-- <script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script> -->




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>

@show

@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

		<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
		<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

		<!-- hardy har -->		
@show

<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
	</head>
	<body>

<!-- google analytics! -->

<!-- html -->
<!-- body -->


		<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
		<!-- Navbar -->

		


@section('nav')
@include('site.partials.nav-top')

@show


		<!-- Container -->
		<div class="container-fluid">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->
			<style>
			/*http://css-tricks.com/almanac/properties/z/z-index/*/
			.contentwrap{
				position: relative;
				/*z-index: -3;*/
			}
			</style>
			
			<div class="contentwrap">
						<!-- Content -->
						@yield('content')
						<!-- ./ content -->
			</div>
<!-- <div class="span8">
</div>
<div class="span3"><h2>sidebar</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, cumque praesentium sapiente ipsa incidunt quam. Perspiciatis officiis ut saepe totam quibusdam error hic aperiam obcaecati fugit velit! Ea, nemo esse laboriosam earum perferendis similique id ab nisi sapiente harum sed dolorem at nam quia aliquam itaque sit enim beatae ducimus unde hic repellendus quibusdam odio adipisci quam fuga quos consequuntur reprehenderit minus veniam nulla consequatur nesciunt iusto. Sequi, incidunt, odit, error dolore mollitia blanditiis voluptatum libero reiciendis tenetur minima pariatur dolorum sint illum. Vel, ipsam similique magni qui optio vero fugiat autem unde voluptatem illum aliquid consequuntur dignissimos repudiandae nesciunt!
</div> -->



		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>

</div>
<!-- ./wrap -->


	    <div id="footer">





	        <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew13!</p>

	      
<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Always Beta</a></span>



	      </div>

	    </div>

	    <!-- container -->

<a href="http:myapp.gristech.com/responsive">
	<div class="hotel hotelb">
	<!-- 	<div style="color:black; padding-bottom:50px;">resize me</div> -->

		<div class="hotel pull-right">

			<div class="visible-phone">
				<i class="icon-mobile-phone icon-4x"></i>
			</div>
			
			<div class="visible-tablet">
				<i class="icon-tablet icon-4x"></i>
			</div>
			
			<div class="visible-desktop">
				<i class="icon-desktop icon-4x"></i>
			</div>
		</div>
	</div>
</a>
		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
	</body>
</html>
