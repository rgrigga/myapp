		<style>
/*		.mytopnav{
			position:fixed;
		}*/
		.body{
			/*padding-top: 60px;*/
		}
		</style>
		<div class="navbar navbar-fixed-top nav-top-min">
			<div class="navbar-inner">

				<a class="brand" style="margin-left:30px;" href="#">{{{$company->brand}}}</a>


                		<ul class="nav">
					    @foreach($company->menus() as $item)
					        <li><a href="#{{{$item}}}{{--URL::to($item)--}}">{{{$item}}}</a></li> 
					    @endforeach
    					</ul>


					<!-- admin/user nav -->
                	<ul class="nav pull-right bam">

                        @if (Auth::check())
                        	<!-- User Roles go here -->
                            

                            @if (Auth::user()->hasRole('admin'))
                             <li{{ (Request::is('admin/blogs/create*') ? ' class="active"' : '') }}>
                                <a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> New</a>
                            </li>

                            <li>
                            	<a href="{{{ URL::to('admin') }}}">Dash</a>
                            </li>
                            @endif


                            <li>
                            	<a href="{{{ URL::to('user') }}}">Name: {{{ Auth::user()->username }}}</a>
                            </li>
                            <li>
                            	<a href="{{{ URL::to('user/logout') }}}">Logout</a>
                            </li>
                        @else
                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}>
                            	<a href="{{{ URL::to('user/login') }}}">Login</a>
                            </li>
                        @endif
                    </ul>
			</div>
					<!-- ./ nav-collapse -->
		</div>

			<!-- </div> -->
			<!-- //this is the only place to put india! -->
			<!-- <div class="india pull-right"> -->
					<!-- <div>phone, email, chat, anything!</div> -->
				<!-- <div> -->
					<!-- <img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design"> -->
				<!-- </div> -->
			        
			<!-- </div> -->
		<!-- </div> -->
		<!-- ./ navbar -->