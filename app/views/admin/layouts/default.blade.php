<!DOCTYPE html>
<html lang="en">
<!--
If you like this, you really should check out the source code on 
------------------------------------------------------------------------
-------GITHUB--github.com/rgrigga/myapp---------------------------------
------------------------------------------------------------------------
----------ryan.grissinger@gmail.com-------------------------------------
----------@ryangrissinger-----------------------------------------------
------------------------------------------------------------------------
----------thanks, I hope you enjoy.-------------------------------------
------------------------------------------------------------------------
-->

<!-- Just look at all these fabulous resources: -->
<!-- http://www.opensourcecms.com/ -->
<!-- Want more?  Check out /tools ('myapp/tools')-->

<!-- Our Competition/Partners: -->
<!-- http://myappinc.com/ -->

<!-- 
If you have no idea what git is, please type in myapp.gristech.com/git or search the site for git. 

If you know what git is, but are just learning, I have documented everything about how to connect and so on, just contact me and I'll help you.

PROGRAMMERS: Demonstrate your abilities: this is a community demo site.

-->
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			admin.layouts.default
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<!-- //Needed for bootstrap responsive! -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- // My goal for this project is to build a flexible, maintainable web applicaiton infrastructure.  This codebase is the foundation for our organization to own a sustainable, profitable code base, which applies to multiple industries.

If you contribute to this project, and it becomes profitable, I will share it with you.  If you fork it and make money, please share with me. (Don't be a D***)  If you are reading this, perhaps we can discuss a partnership.  Please get in touch.

For now, you may clone this public repository and develop it as much as you like for now, but you must agree to share your contributions here at this site.  Others have done the same before you and I.  Let's help each other out.-->

<!-- There is also a private repository with additional features available if you register.  If you're interested, please contact me. -->

		<!-- CSS
		================================================== -->
        {{ Basset::show('admin-css.css') }}

<!-- // http://stackoverflow.com/questions/5506258/horizontal-scroll-overflowing-html-lis-without-knowing-width*/ -->
		@section('styles')
		<style>
		.page-header{
			margin-top: 60px;
		}
/*		body {
			padding: 60px 0;
		}*/
		
		ul.tag li{
		    display: inline-block;
		    background-color: orange;
		    padding: 5px;
		    margin:2px;
		}


		.wrap{
			/*background-color: rgba(100,85,255,.1);*/
			background-color: rgba(3,71,105,.3);
		}

		div{
			background-color: rgba(255,89,0,.1);
		}
		</style>
		@show

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

<!-- taggies used for marketing - to contain information about a product which can automatically display on any device.  like a link, but a fully functional application.  The entire thing can be embedded on a USB stick. -->

<!-- Live updates to media: billboards, etc. -->

<!-- As an early adoptor, you will receive discounted pricing on the service, and perhaps more later, including stock. -->



<!-- redactor -->
<!-- redactor is not free.  please buy a license or remove these in a produciton environment. -->
<link rel="stylesheet" href="/assets/js/redactor/redactor.css" />
<script src="/assets/js/redactor/redactor.js"></script>
<link rel="stylesheet" href="/js/redactor/redactor.css" />
<script src="/js/redactor/redactor.js"></script>
<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>



	</head>

	<body>

<div class="wrap">
		<!-- Container -->
		<div class="container">
			<!-- Navbar -->
			@section('logo')
			<style>
				.logo{
					/*background-color: red;*/
					position:fixed;
					left:20px;
					top:100px;
					z-index: -1;
					opacity: .3;

			/*		bottom:-20px;
					position:fixed;
					right:0px;
					z-index:10;
					max-height: 30%;
					overflow: hidden;
					max-width: 300px;*/
				}
			</style>
			<div class="logo">
				<img src="{{asset('assets/gristech/gristech.png')}}" alt="Company Logo">
			</div>
			@show

			@include('admin.nav')
			@section('navold')
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin') }}}">

								<!-- <i class="icon-home icon-white"></i> -->
								 Home</a></li>
								
								<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs') }}}">

								<!-- <i class="icon-list-alt icon-white"></i> -->
								 Blog</a></li>
								
								<li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}">

								<!-- <i class="icon-bullhorn icon-white"></i> -->
								 Comments</a></li>

								<li{{ (Request::is('admin/companies*') ? ' class="active"' : '') }}><a href="{{{ URL::to('companies') }}}">

								<!-- <i class="icon-bullhorn icon-white"></i> -->
								 Companies</a></li>
								
								<li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}">
									<a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
										

										<!-- <i class="icon-user icon-white"></i> -->
										 Users <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}">

										<i class="icon-user"></i> Users</a></li>
										<li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}">

										<i class="icon-user"></i> Roles</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li><a href="{{{ URL::to('/') }}}">View Homepage</a></li>
								<li class="divider-vertical"></li>
								<li>
									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="icon-user"></i> {{{ Auth::user()->username }}}	<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="{{{ URL::to('user/settings') }}}"><i class="icon-wrench"></i> Settings</a></li>
											<li class="divider"></li>
											<li><a href="{{{ URL::to('user/logout') }}}"><i class="icon-share"></i> Logout</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<!-- ./ nav-collapse -->
					</div>
					<!-- ./ container-fluid -->
				</div>
				<!-- ./ navbar-inner -->
			</div>
			<!-- ./ navbar -->
			@stop
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->


			<style>

			/*http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site*/

				.contentwrap{
				padding-top: 60px;
				}

				@media screen and (max-width: 979px) {
				    .contentwrap { padding-top: 0px; }
				}

			</style>
			<div class="contentwrap">

					<!-- Content -->
					@yield('main')
						<!-- ./ content -->
			</div>
					<!-- ./ container -->

					<!-- Javascripts
					================================================== -->
	        {{ Basset::show('admin-js.js') }}
	    
	        <script>
	            $('.wysihtml5').wysihtml5();
	        </script>

			 <script type="text/javascript" charset="utf-8">
			    $(prettyPrint);
			</script>

			 <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script>
	</body>
</html>
