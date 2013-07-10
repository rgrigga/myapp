<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">

			@include('site.partials.contact')

			<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
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
                </ul>
			</div>
			<!-- ./ nav-collapse -->
		</div>
		<!-- ./container-fluid -->
	</div>
	<!-- ./navbar-inner -->
	<!-- //this is the only place to put india! -->
	<div class="india pull-right">
			<!-- <div>phone, email, chat, anything!</div> -->
		<div>
			<img src="http://gristech.com/img/contactus.png" alt="Contact Us">
		</div>
	</div>
</div>
		<!-- ./ navbar -->