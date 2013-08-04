		<style>

		.navbar-fixed-top{
			position:fixed;
			margin-bottom: 80px;
		}
		.body{
			padding-top: 60px;
		}
		.iconbar{
			float: right;
			display: inline;
			font-size: 32px;
		}

		</style>

		<div class="navbar navbar-fixed-top">

			<div class="navbar-inner">

				<div class="container-fluid">
							<!-- <div class="pull-right"> -->
                    
                            <!-- </div> -->
					<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">

						<!-- <i class="icon-collapse icon-2x"></i> -->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					@include('site.partials.contact')
					<?php 
					
						// if(!$company){$company="MegaCorp";} 
					?>
					<a class="brand" style="margin-left:30px;" href="#">{{{$company->brand}}}</a>
					@include('site.partials.search')
					<div class="nav-collapse collapse">
						
						<ul class="nav">

<!-- 						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('#') }}}">Home</a></li> -->



						@foreach ($company->menus() as $menu)
						<li {{ (Request::is('{{{$menu}}}') ? ' class="active"' : '') }}><a href="{{{ URL::to('#'.$menu) }}}">{{{ucfirst($menu)}}}</a></li>

						@endforeach

						</ul>

						<!-- admin/user nav -->
                        <ul class="nav pull-right">
                            @if (Auth::check())
                                @if (Auth::user()->hasRole('admin'))

                                    <li{{ (Request::is('admin/blogs/create*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> New</a></li>

		                            <li><a href="{{{ URL::to('admin') }}}">Dash</a></li>
                                @endif
	                            <li><a href="{{{ URL::to('user') }}}">Name: {{{ Auth::user()->username }}}</a></li>
	                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                            @else
	                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
	                            
                            @endif

                            
                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				
				</div>

			</div>

			<!-- //this is the only place to put india! Just inside navbar.  search india for more info. -->


			<div class="india pull-right">
				<div>
					<img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design">
				</div>
			</div>
		</div>
		<!-- ./ navbar -->