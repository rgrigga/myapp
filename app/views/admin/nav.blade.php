<?php //die('views.admin.nav'); ?>


<nav class="navbar navbar-fixed-top navbar-inverse admin-top" role="navigation">
	<div class="navbar-header">			
		<!-- <div class="container-fluid"> -->

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<!-- <span class="sr-only">Toggle navigation</span> -->
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">
			{{{$company->brand}}} Admin
		</a>
	</div>



	<!-- <div class="navbar-inner"> -->
		<div class="collapse nav-collapse navbar-ex1-collapse">

			<ul class="nav navbar-nav">
				<li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin') }}}">

				<!-- <i class="icon-home icon-white"></i> -->
				 Home</a></li>
				
				<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs') }}}">

				<!-- <i class="icon-list-alt icon-white"></i> -->
				 Blog</a></li>
				
				<li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}">

				<!-- <i class="icon-bullhorn icon-white"></i> -->
				 Comments</a></li>

				<li{{ (Request::is('companies*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/companies') }}}">

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

	<!-- dropdown:
	$req
	$slug
	$title
	https://www.google.com/analytics/web/?hl=en&pli=1#home/ -->


				<!-- example of ternary operator -->
				<li class="dropdown{{ (Request::is('admin/seo*') ? ' active' : '') }}">
					<a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/seo') }}}">

						<!-- <i class="icon-user icon-white"></i> -->
						 SEO <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="https://www.google.com/webmasters/tools/dashboard?hl=en&siteUrl=http%3A%2F%2Fbuckeyemower.com%2F">

						Webmaster Tools</a></li>
						<li><a href="https://www.google.com/analytics/web/?hl=en&pli=1#report/visitors-overview/a42520107w72287810p74604812/">Analytics</a></li>
					</ul>
				</li>

				<li class="dropdown{{ (Request::is('admin/share*|admin/social*') ? ' active' : '') }}">
					<a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
						<!-- <i class="icon-user icon-white"></i> -->
						 Share <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/share') }}}">

							<i class="icon-share"></i> Share</a>
						</li>
						<li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/social') }}}">

							<i class="icon-facebook"></i> Social</a>
						</li>
						<li>
							<div class="well">
								Coming Soon:
								
								API: programmable interface
								REST methods & resource controllers
								Unified "social" controller...

								facebook
								twitter
								google
								dropbox

								//if a user, update links with their boxes
								https://www.dropbox.com/		
							</div>
						</li>
					</ul>
				</li>
			</ul>



			<ul class="nav navbar-nav navbar-right pull-right">
				<li><a href="{{{ URL::to('/') }}}">View Homepage</a></li>
				<li>
			    	@include('site.partials.search')
			    </li>
				<li class="divider-vertical"></li>
				<li>
					<div class="btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-user"></i>
							@if(Auth::user())
							{{{ Auth::user()->username }}}
							@else
							Stranger
							@endif

							<span class="caret"></span>
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
	<!-- </div> -->
	<!-- ./ navbar-inner -->
</nav>
<!-- ./ admin-top -->


					


			