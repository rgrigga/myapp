<style>
/*body{
	padding-top: 60px;
}*/
.navbar-fixed-top{
	position:fixed;
}

</style>
		<div class="navbar navbar-fixed-top">

			<div class="navbar-inner">

				<div class="container">
<!-- 					<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
						<i class="icon-collapse icon-2x"></i>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a> -->

			<a class="brand" href="#">{{$brand}}</a>
			
			<div class="pull-right">
			    @include('site.partials.contact-buckeye')
			</div>
			
			<div class="nav-collapse collapse">
				
				<ul class="nav">
					<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a>
					</li>

					@foreach ($menus as $menu)
					<li {{ (Request::is('{{{$menu}}}') ? ' class="active"' : '') }}><a href="{{{ URL::to('#'.$menu) }}}">{{ucfirst($menu)}}</a></li>
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
	                            <!-- <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li> -->
                            @endif
                            
                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>

			</div>
			<!-- //this is the only place to put india! -->
<!-- 			<div class="india pull-right">
				<div>
					<img src="{{asset('assets/buckeye/scheduleonline.png')}}" alt="mobile mower repair">
				</div>
			</div> -->
		</div>
		<!-- ./ navbar -->
