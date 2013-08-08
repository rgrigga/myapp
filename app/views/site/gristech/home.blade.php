@extends('layouts.scaffold')

@section('title')
@parent
{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent
{{$company->description}}
@stop

@section('meta_keywords')
@parent

@stop

@section('styles')
<!-- http://colorschemedesigner.com/#0k41Jw0w0w0w0 -->
<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"> -->


<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

<!-- <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'> -->
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'> -->
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<style>

/* STRUCTURAL */

/*this has ramifications:*/
.container{
	width: 100%;
}
.below{
	padding-right: 20px;
	padding-left:20px;
}

html,body {

	/*background-color: rgba(235,196,162,.2);*/
	color: white;
	font-family: 'EB Garamond', serif;

}

@font-face {
	font-family: 'Archive';
	src: url('/assets/font/Archive.otf') format("opentype");
}



.page-header{
		margin-top: 0px;
}

.page-header h1 {
color: rgba(41, 128, 185,1.0);
}

.sidebar h3{
	/*font-family: 'Mr De Haviland', cursive;*/
	/*font-family: 'Monsieur La Doulaise', cursive;*/
	font-family: 'Kaushan Script', cursive;
	/*color:#ffbe73;*/
	color: rgba(41, 128, 185,1.0);
	/*text-shadow: 8px 8px 8px #A63A00;*/
}

.sidebar h3{
	/*text-shadow: 4px 4px 4px #A63A00;*/
}

.navbar-inner{
	background-image: none;
	background-color: rgba(3,71,105,.9);
}

.navbar .brand, .navbar .nav >li >a {
	text-shadow:none;
}
.well{
	background-color: rgba(121,186,242,1);
	/*border-bottom-radius: 30px;*/
	border-bottom-left-radius: 30px;
	border-bottom-right-radius: 30px;
	/*box-shadow: 2px 2px 1px #8285E6;*/
	/*font-family: */
}
.sidebar p{
	text-align: right;
}
p {
	font-size: 24px;
}

h1,h2{
	color:rgba(18,124,166,1);
}

h1 {
	/*font-family: 'Archive', sans-serif;*/

}
h2{
	/*font-family: 'Graduate', sans-serif;*/
}

/*A:link {text-decoration: none}*/
/*A:visited {text-decoration: none}*/
/*A:active {text-decoration: none}*/
a:hover {text-decoration: none}

/* COLORS */

.accordion{
	z-index: 1;
}
.accordion-group{
	border: none;
}

.page-header{
	background-color: rgba(236, 240, 241,1.0);
}

div {
	background-color: rgba(41, 128, 185,.1)
}
.corner{
	background-color: transparent;
}

.page-header h1{
	/*line-height: 1.2em;*/
	margin-top: 90px;
	margin-bottom: 20px;
	letter-spacing:-7px;
	line-height: .5em;
	font-size: 144px;

}
.page-header h2{
	font-family: 'Archive', sans-serif;
	font-size: 40;
	margin: 0;
}
.page-header h2:hover{
	color: orange;
}
a:hover{
	color:orange;
}
.iconbar{
	font-size: 24px;
}
.well img{
	/*min-height: 100px;*/
	/*min-width: 100px;*/
	/*padding:15px;*/
	/*background-color: white;*/
}



.accordion{
	padding-left: 15%;
}
.page-header h1{
	margin-left: 15%;
}

@media (min-width: 980px){
	.accordion{
		margin-top:80px;
	}
		.affix{
      top:40px;
    }	
}

@media (max-width: 979px) {
	.page-header h1{
		font-size: 72px;
		padding-bottom: 15px;
	}
	


}


	.affix{
	/*position: fixed;*/
	/*width: 60%;*/
	/*z-index:2;
		right:20px;
		left:20px;*/
	}
	.corner{
		position: fixed;
		left:-10px;
		/*margin-top: -10px;*/
		/*margin-left: -10px;*/
	}

	.sidebar h2, .sidebar h3{
		text-align: right;
	}

	.sidebar h2{
		text-shadow: 2px 2px 2px #A63A00;
	}
	
	#side-wrapper{
		position: fixed;
		right:0;
	}	
	

/*    .affix{
      top:40px;
    }	
*/

</style>

@if(Auth::check())
<style>
    .affix{
      top:80px;
    }	
</style>
@endif

@stop



@section('favicons')
		<!-- Favicons
		================================================== -->

		<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

		<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
		<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

		<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/'.strtolower($company->brand).'/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/'.strtolower($company->brand).'/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/'.strtolower($company->brand).'/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/'.strtolower($company->brand).'/apple-touch-icon-57-precomposed.png') }}}">
		<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}"> -->
		<link rel="shortcut icon" href="{{{ asset('assets/'.strtolower($company->brand).'/ico/favicon.png') }}}">
		@stop

		@section('nav')
		@include('site.partials.nav-top-min')
		@stop



@section('main')
<?php
$env=App::environment();
	// echo "<div class='alert alert-info'>Welcome to the <strong>".$env."</strong> environment.</div>";

if($env=="local"){
	$path='/home/ryan/MyApp6/app/views/site/pages/';
}
else{
	$path='/home/gristech/myapp/app/views/site/pages/';
}
$mypages = array();
foreach (glob($path."*.blade.php") as $filename) {
	$filename=str_replace($path, "", $filename);
	$filename=str_replace(".blade.php", "", $filename);
	array_push($mypages,$filename);
        // echo "$filename" . "<br>";
}
?>


<a href="https://github.com/rgrigga/MyApp6"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png" alt="Fork me on GitHub"></a>

	<div class="page-header">
		<!-- <h1>BAM</h1> -->




		<div class="row-fluid">
			<div class="span4 pull-right" id="side-wrapper">
				<!-- <div class="sidebar well"> -->
				<div id="sidebar" class="sidebar well" data-spy="affix" data-offset='1'>
					<!-- //sidebar -->
					<!-- <img class="img-circle" src="{{asset($company->image)}}" alt="MyImage"> -->
					<div class="collapse-group">
						<div class="collapse in">
							<div class="tab-content"> 
								<div class="tab-pane active" id="about">
									<h2>What is it?</h2>
									<img class="img-circle pull-left" src="http://placehold.it/64x64/BF6230/123456">

									<h3>It's a Web App</h3>
Every client will help build and test the site.  As the site gets better for one client, it gets better for all. 

It is a tool to BUILD a website,
It is a tool to MANAGE MANY websites
It is a tool to TEACH business owners how to run their own website.
It is a tool to help developers, designers, and business owners, (customers, for that matter) LEARN about building a site, marketing, and more.
The CUSTOMER is in control of the site.  BUT - I have the ability to help with ANY part of the maintenance.

If a site would like to be split off, sold, etc... NO PROBLEM.  It can simply be forked from github, or even copied to a thumb drive!  It can also be quickly and easily <em>migrated</em> to another system.  The ORM is database-independent and super flexible & powerful.



<a href="#cool" class="btn btn-large btn-success">Cool</a>
<a href="#dumb" class="btn btn-large btn-danger">Dumb</a>
			
								</div>
								<div class="tab-pane" id="gutter">
									<h2>Gutter</h2>
									<p>Howdy, I'm gutter.</p>
								</div>
								<div class="tab-pane" id="concrete">
									<h2>Concrete</h2>
									<p>Howdy, I'm concrete.</p>
								</div>
							</div>	
						</div>
						<a class="btn" href="#">~Toggle~<i class="icon-hand-up"></i></a><h3>How can we help you?</h3>
						{{$contact}}
					</div>
				</div>
			</div>


			<div class="span7">
				<a href="#about" data-toggle="tab">
					<h1>{{$company->brand}}</h1>
				</a>
				{{--$about--}}
<h2><i class="icon-github"></i>
	<i class="icon-linux"></i>
	<i class="icon-html5"></i>
	<i class="icon-windows"></i>
	<i class="icon-apple"></i>
	<i class="icon-android"></i>
	<i class="icon-phone"></i>
</h2>

			</div>
		</div>

<!-- 	<div class="span4 pull-right">
		<div class="well" data-spy="affix" data-offset-top="200">
			<h2>Foobar</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, impedit, recusandae eius modi cumque obcaecati iusto corporis harum omnis ea expedita possimus sequi aliquam enim consequuntur soluta veniam a nihil.</p>
		</div>
	</div> -->



	<div class="tabbable"> <!-- Only required for left/right tabs -->
		<a href="#about" data-toggle="tab"> about</a>
		<a href="#contact" data-toggle="tab"> contact</a>
		<a href="#payments" data-toggle="tab">payments</a>
	</div>
	<!-- ./ tabbable -->
</div>
<!-- ./ page-header -->

<style>
.note{
	background-color: #ffa640;
	border-style:solid;
	border-width:medium;
	border-color: #a63a00;
}
</style>


<!-- ************************************** -->
<!-- BOTTOM -->

<div class="below">

	<div class="span7 pull-right">
		<h2>About The App:</h2>
			<div class="accordion" id="accordion">
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			 				<h2>Web Design</h2>
			 			</a>
			 		</div>

			 		<!-- Here's a little diddy used on this page: -->
			 		<div id="collapseOne" class="accordion-body collapse">
			 			<!-- //add in to open on load -->
			 			Here's some examples used on this page:
			 			<div class="accordion-inner">
			 				<a href="css" data-toggle="tab">
			 					<h3>CSS</h3>
			 				</a>
			 				<div id='css'>
			 					This little diddy makes the 'note':
			 					<pre class='prettyprint'><code 'lang=css'>

	.note { 
		overflow: hidden;
		margin-top: 20px;
	    position: relative; 
	    max-width: 300px;
	}

	.note > .inner{ 
		position: absolute; 
		top: 10%;
		left: 30px; 
	}

	.note > .inner span { 
		color: black; 
		font: bold 24px/45px Aescrawl, Helvetica, Sans-Serif; 
		left:20%;
		padding: 30px; 
	}
			 					</code></pre>
			 					<a href="http://stackoverflow.com/questions/514083/why-is-good-ui-design-so-hard-for-some-developers">Must Read for User, Designers, and Developers</a>
			 					<a href="http://stackoverflow.com/questions/7973/user-interface-design">User Interface</a>
			 				</div>
			 				
							
			 				<a href="interior" data-toggle="tab">
								<h3>HTML 5</h3>
			 				</a>
							<p>I beleive in standards, and try to code to them as such.</p>
							<a href="decks" data-toggle="tab">
								<h3>Responsive Design</h3>
							</a>
							<p><a class='btn btn-info' href="{{URL::to('responsive')}}"><i class="icon-code"> </i>Learn More</a></p>
			 			</div>
			 		</div>
			 	</div>
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
			 				<h2>Development</h2>
			 			</a>
			 			<p>I don't write code very fast, because I take my time to try to get things right the first time.  I write very little code in comparison to the research that I do when implementing a new feature or improving an existing one.</p>
			 			<p>A good deal of my time goes into refactor and comment the code, and document issues.</p>
			 			<p>This blog can be a good start towards a manual or developer resource.</p>
			 			<p>On the other hand, I beleive the shortest path to getting the code to work helps the development process.  This is a delicate balance.</p>
			 		</div>
			 		<div id="collapseTwo" class="accordion-body collapse">
			 			<div class="accordion-inner">
			 				
			 				<a href="#repairs" data-toggle="tab">
			 					<h3>PHP</h3>
			 				</a>

							<a href="#replacement" data-toggle="tab">
			 					<h3>Laravel</h3>
			 				</a>
							
			 				https://en.wikipedia.org/wiki/Virtual_private_server
			 			</div>
			 		</div>
			 	</div>
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							<h2>Marketing</h2>
			 			</a>
			 		</div>
			 		<div id="collapseThree" class="accordion-body collapse">

			 			<div class="accordion-inner">
			 				<a href="#power" data-toggle="tab">
								<h3>SEO</h3>
							</a>
			 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			 			</div>
			 		</div>
			 	</div>
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
			 				<h2>More</h2>
			 			</a>
			 		</div>
			 		<div id="collapseFour" class="accordion-body collapse">
			 			<div class="accordion-inner">
			 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			 			</div>
			 		</div>
			 	</div>
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
			 				<h2>Dirty Deeds</h2>
			 			</a>
			 		</div>
			 		<div id="collapseFive" class="accordion-body collapse">
			 			<div class="accordion-inner">
			 				Done dirt cheap.
			 			</div>
			 		</div>
			 		<!-- ./collapse -->
			 	</div>
			 	<!-- ./ accordian-group -->
			</div>
			<!-- ./ accordian -->
	</div>
	<!-- div span7 -->




	<style>
	.hero-unit{
		color: rgba(236, 240, 241,1.0);
		background-color:rgba(44, 62, 80,1.0);
	}

	</style>

	<div class="row-fluid">
		<div class="hero-unit">
			<h1>{{$company->brand}}</h1>
			<?php 
			$items = array('Painting','Roofing', 'Concrete', 'Blacktop');
			?>

			<ul>
				@foreach($items as $item)
				<li>{{$item}}</li> 
				@endforeach
			</ul>

			<div class="h2">We treat Your Home as our own.</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, pariatur, repudiandae, minima reprehenderit perferendis suscipit aperiam earum vitae animi a obcaecati ducimus corporis necessitatibus atque expedita harum quod ea dicta tenetur asperiores alias corrupti distinctio consequatur culpa possimus aspernatur modi fugiat consectetur facilis officia ad debitis sapiente nulla inventore error!
			</p>
		</div>
	</div>

	<div class="row-fluid">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-pills">
				@foreach($company->menus() as $menu)
				<li><a href="#{{$menu}}" data-toggle="tab"><i class="icon-rocket icon-4x"></i> {{{$menu}}}</a></li>
				@endforeach
				<li class="active"><a href="#tab1" data-toggle="tab">Section 2</a></li>
			</ul>

			<div class="tab-content">
				@foreach($company->menus() as $menu)
				<div class="tab-pane" id="{{{$menu}}}">
					<p>Howdy, I'm {{{$menu}}}.</p>
				</div>
				@endforeach
				<div class="tab-pane active" id="tab1">
					<p>Advantage Services is a family owned business with a standard of excellence in all aspects of Residential and Commercial Painting, Roofing, Deck and Fence Staining, and Power Washing. Formerly known as Advantage Painting, Advantage Services has been known throughout Columbus and it's surrounding areas as the first name in professionalism and quality, since 1990.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<!-- <div class="pull-right"> -->
			<!-- <img src="{{asset($company->image)}}" alt="MyImage"> -->
			<!-- </div> -->
			<div>ID: {{{ $company->id }}}</div>
			<div>Name: {{{ $company->name }}}</div>
			<div>Brand: {{{ $company->brand }}}</div>
			<div>Phone: {{{ $company->phone }}}</div>
			<div>Email: {{{ $company->email }}}</div>
			<div>Description: {{{ $company->description }}}</div>
			<div>Slogan: {{{ $company->slogan }}}</div>
			<div>Image: {{{ $company->image }}}</div>
			<div>Menus: {{{ $company->menus }}}</div>
		</div>
	</div>

	<div class="row-fluid" id="posts">
		<h1>Posts:</h1>
		<?
// var_dump($posts);
		?>
		<div class="text-center">
			{{ $posts->links() }}
		</div>

		@foreach ($posts as $post)
		<div class="row-fluid">
			<div class="span3">
				<p></p>
				<p>
					<!-- Edit/Delete Buttons -->
					<div class="metabuttons pull-left">
						@if (Auth::check())
						@if (Auth::user()->hasRole('admin'))
						<p>
							<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
							<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
							| </p>
							@endif
							@endif
						</div>

						<!-- Comments -->
						&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
						| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
						| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
					</p>
				</div>
			</div>
			

			<div class="well">
				{{$post->title}}
				{{$post->img}}

				<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
				<p>
					{{ String::tidy(Str::limit($post->meta_description, 158)) }}
				</p>
				<p>
					<a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
				</p>
			</div>

			<ul class='tag'>
				<li><i class="icon-tag"></i></li>
				@foreach($post->tags() as $tag)

				<li><a href="{{ $tag }}">{{ $tag }}</a></li>

				@endforeach
			</ul>

			@endforeach
			{{ $posts->links() }}
		</div>
		<!-- ./ row -->
<div class="note">
		<pre class="prettyprint"><code><p>
This is pre class = "prettyprint":
<!-- <pre class="prettyprint"></pre> --></p></code></pre>
		
</div>
	</div>
	<!-- ./below -->
	<!-- ************************************************ -->



<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://l4.gristech.com/piwik/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "2"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
	

	<!-- </div> -->

	<!-- </div> -->
	<!-- ./below -->

	@stop
@section('myjs')
    <script type="text/javascript">

                // $('.page-header').css('background-color','red');
                $('#side-wrapper').height($("#sidebar").height());
                $('.collapse-group .btn').on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var $collapse = $this.closest('.collapse-group').find('.collapse');
                        $collapse.collapse('toggle');
                    });
                    // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
                    // $('.thumbnail').equalHeights();
    </script>
@stop
