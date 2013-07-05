<!DOCTYPE html>
<html lang="en">
	<head>

<!-- a quick note to all those that helped with this: -->
<!-- THANK YOU!!! -->
<!-- I am humbled.  I am in awe.  I hope I am worth of contributing, and I wish you all riches. -->

		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			<!-- //call @parent here from the child page -->
			Gristech MyApp Demo
			@show
		</title>

		@section('meta')

		<!-- Metatags are super important.-->
		
		<!-- Google's SEO Starter Guide: http://static.googleusercontent.com/external_content/untrusted_dlcp/www.google.com/en/us/webmasters/docs/search-engine-optimization-starter-guide.pdf -->

		<!-- http://www.seologic.com/faq/meta-keywords -->

		<!-- Meta keywords tags should adhere to the following guidelines: (1) keep your list of keywords or keyword phrases down to 10 - 15 unique words or phrases; (2) separate the words or phrases using a comma (you do not need to leave a space between words separated by commas); (3) do not repeat words or phrases; (4) put your most important word or phrases at the beginning of your list. -->

		<!-- //Conclusion: Keywords are not as important as the description.  I once read google doesn't use them anymore.  Bing/Yahoo might? -->

			<meta name="keywords" content="php, laravel, web application, development, learning, software, business, design" />
			<meta name="author" content="Ryan Grissinger" />
			<meta name="description" content="A flexible, customizable web application" />

			<!-- Mobile Specific Metas
			================================================== -->

			<!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		@show


		<!-- CSS
		================================================== -->
    @section('styles')
    
    <!-- Here are two methods of accomplishing the same thing: -->
    @stylesheets("public-css")
	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- 
	Next, let's talk about global styles on the default page. <style> Tags help me to understand what's going on on a particular page during development.  The assets can later be moved to external stylesheets and finally compiled assets when pushed to production, right?-->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

	@show

@section('js')
<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->
<!-- prettify -->

<!-- NOTE: I had an experience with a lengthy pageload on this today.  It's a good lesson NOT to include prettify on the main layout page.  Move to the bottom? -->
<script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script>

<!-- font-awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css" rel="stylesheet">

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
		
		<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>

@show
	</head>

	<body>

<!-- google analytics -->

		<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
		<!-- Navbar -->

		<style>
		.navbar-fixed-top{
			position:fixed;
		}
		</style>

<div class="nav">
	this is div called "nav"
</div>

<div class="thumbnail idea">
	Field of dreams
</div>

		<div class="navbar">

			<div class="navbar-inner">

				<div class="container-fluid">
<h3>Search Laravel Docs:</h3>
<script>
  (function() {
    var cx = '012277204628171564007:sik_hha9myk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>



<!-- search -->

<!-- search -->


<!-- <form action="{{ URL::to('tags') }}"> -->
<!-- action="" -->


<!-- <form class="navbar-search" action="/tags" method='get'> -->

<!-- </form> -->
<!-- //moved -->
<!-- </form> -->

<!-- 					<div class="pull-right">
						<a href="http://facebook.com" class="social-icon">
					    	<img src="http://gristech.com/img/facebook.png" class="img-circle">
					    </a>
					    <a href="http://twitter.com" class="social-icon">
					    	<img src="http://gristech.com/img/twitter.png" class="img-circle">
					    </a>
					    <a href="http://linkedin.com" class="social-icon">
					    	<img src="http://gristech.com/buttons/linkedin.png" class="img-circle">
					    </a>
					    <a href="http://gmail.com" class="social-icon">
					    	<img src="http://gristech.com/buttons/email.png" class="img-circle">
					    </a>
					</div> -->

					<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">


						<!-- <div class="text-center">foo</div> -->
						<i class="icon-collapse icon-2x"></i>
<!-- 						<span class="icon-bar"></span>
	<span class="icon-bar"></span>
						<span class="icon-bar"></span> -->
					</a>

					<a class="brand" style="margin-left:30px;" href="#">MyApp</a>

					<div class="nav-collapse collapse">
						
						<ul class="nav">
							<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
							<li {{ (Request::is('tools') ? ' class="active"' : '') }}><a href="{{{ URL::to('/tools') }}}">Tools</a></li>
							<li {{ (Request::is('features') ? ' class="active"' : '') }}><a href="{{{ URL::to('/features') }}}">Features</a></li>
							<li {{ (Request::is('tags') ? ' class="active"' : '') }}><a href="{{{ URL::to('/tags') }}}">Tags</a></li>
						</ul>

						<!-- admin/user nav -->
                        <ul class="nav pull-right">
							

                            @if (Auth::check())
                                @if (Auth::user()->hasRole('admin'))

                                    <li{{ (Request::is('admin/blogs/create*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> Create</a></li>

		                            <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                                @endif
	                            <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
	                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                            @else
	                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
	                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Welcome</a></li>
                            @endif
                            @include('site.partials.contact')
                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>

			</div>
			<!-- //this is the only place to put india! -->
			<div class="india pull-right">
					<!-- <div>phone, email, chat, anything!</div> -->
				<div>
					<img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design">
				</div>
			        
			</div>
		</div>
		<!-- ./ navbar -->

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


<div class="container">


	      	


</div>
<!-- container -->

	        <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew13!</p>

	      
<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Always Beta</a></span>



	      </div>

	    </div>

<a href="/responsive">



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
