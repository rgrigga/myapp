@extends('site.layouts.bs3')

@section('title')

{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent

@stop

@section('meta_keywords')
@parent

@stop

@section('styles')
@parent
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

	<!-- This display's the company's less page -->
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

	<script src="/assets/js/less.js" type="text/javascript"></script>

<!-- http://colorschemedesigner.com/#0k41Jw0w0w0w0 -->
<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"> -->
    <!-- @ stylesheets("bs3-css") -->
    <!-- assets/css/less/bootstrap.less -->

    <!-- @ stylesheets('myapp-css') -->
    <!-- assets/css/less/master.less -->

	<!-- @ stylesheets('gristech') -->
	<!-- assets/css/less/gristech.less -->



<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

<!-- <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'> -->
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<style>

/* STRUCTURAL */

html,body {

	/*background-color: rgba(235,196,162,.2);*/
	/*color: rgba(236, 240, 241,1.0);*/
	/*background-color:rgba(44, 62, 80,1.0);*/
	font-family: 'EB Garamond', serif;
	/*font-size: 16px;*/

}

@font-face {
	font-family: 'Archive';
	src: url('/assets/font/Archive.otf') format("opentype");
}

.main{

	
}

.navbar{
	/*background-color: rgba(189, 195, 199,1.0);*/
}

.navbar .brand{
	/*color:white;*/
}

.navbar-inner{
	background-image: none;
	background-color: rgba(3,71,105,.9);
}

.navbar .brand, .navbar .nav >li >a {
	text-shadow:none;
}

.page-header{

	margin-top: 0px;
	text-align: center;
}

.tabbable a {
	/*color: rgba(44, 62, 80,1.0);*/
}

.page-header h1 {
	/*padding-top: 60px;*/
color: rgba(41, 128, 185,1.0);
}

.page-header h2{
	text-align: center;
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


.well{
	background-color: rgba(44, 62, 80,1.0);
	/*border-bottom-radius: 30px;*/
	/*border-bottom-left-radius: 30px;*/
	/*border-bottom-right-radius: 30px;*/
	/*box-shadow: 2px 2px 1px #8285E6;*/
	/*font-family: */
}
.sidebar p{
	text-align: right;
}
p {
	font-size: 22px;
}

h1,h2{
	/*color:rgba(18,124,166,1);*/
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
a:hover {
	text-decoration: none;
	color:orange;
}
/* COLORS */

.accordion{
	z-index: 1;
}
.accordion-heading{
	background-color: rgba(189, 195, 199,1.0);
}
.accordion-group{
	border: none;
}

.page-header{
	/*background-color: rgba(236, 240, 241,1.0);*/
}

div {
	/*background-color: rgba(41, 128, 185,.1)*/
}
.corner{
	/*position: relative;*/
	background-color: transparent;
}

.page-header h1{
	/*line-height: 1.2em;*/
	/*margin-top: 90px;*/
	/*margin-bottom: 20px;*/
	letter-spacing:-7px;
	/*line-height: .5em;*/
	font-size: 144px;

}

.page-header h2{
	font-family: 'Archive', sans-serif;
	/*font-size: 40;*/
	margin: 0;
}
.page-header h2:hover{
	color: orange;
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

.page-header h1{
	text-align: center;
	/*margin-left: 15%;*/
}

@media (min-width: 980px){
	.accordion{
		margin-top:80px;
	}
	
}

@media (max-width: 979px) {
	.page-header h1{
		font-size: 110px;
		/*padding-bottom: 15px;*/
	}
	
}

/*@media (min-width: 780px){
	.accordion{
		margin-right: 30px;
	}
}*/
	.corner{
		position: fixed;
		left:-10px;
		/*margin-top: -10px;*/
		/*margin-left: -10px;*/
	}

	.main h2{
		text-align: left;
	}

	.sidebar h2, .sidebar h3{
		text-align: right;
	}

	.sidebar h2, .main h2{
		text-shadow: 2px 2px 2px #A63A00;
	}
	
	#side-wrapper{
		position: fixed;
		right:0;
	}	
	
	aside{
		/*background-color: rgba(52, 73, 94,1.0);*/
		text-align: center;
	}
	aside i{
		font-size: 24px;
	}
	aside img{
		max-width: 100px;
	}
	aside span{
		font-size: 24px;
		background-color: rgba(255,89,0,1);
	}
	</style>
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


@section('nav')
@parent
<!-- @ include('site.partials.nav-top') -->
@stop

@section('page-header')
<style>
	#ribbon{
		position: fixed;
		left: 0;
		border: 0;
	}
</style>

	<a href="https://github.com/rgrigga/MyApp6">
		<img id="ribbon" src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png" alt="Fork me on GitHub">
	</a>


<div class="row">
			<h4>Search:</h4>
		{{$searchbox}}

			<div class="col-md-5">
				<!-- <a href="#about" data-toggle="tab"> -->
				<img class="img-responsive" src="{{asset('assets/'.strtolower($company->brand).'/cloud.svg')}}" alt="">
					
				<!-- </a> -->
				{{--$about--}}
			</div>
			
			<div class="col-md-5 text-center">
				<h1>MyApp</h1>
				<aside>
					
					<div class="row">
						<!-- <div class="span4"> -->
							<a href="about"><span>ABOUT</span></a>
							<img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$company->image)}}" alt="G5">
							<a href="tools"><span>TOOLS</span></a>
					</div>
					<div class="row">
						<p>
						<i class="icon-html5"></i>
						<i class="icon-github"></i>
						<i class="icon-linux"></i>
						<i class="icon-windows"></i>
						<i class="icon-apple"></i>
						<i class="icon-android"></i>
						<i class="icon-mobile-phone"></i>
						<i class="icon-tablet"></i>
						<i class="icon-desktop"></i>
						<i class="icon-twitter"></i>
						<i class="icon-facebook"></i>
						<i class="icon-linkedin"></i>
						</p>		
					</div>
					
				</aside>

			</div>	



<!-- 	<div class="span4 pull-right">
		<div class="well" data-spy="affix" data-offset-top="200">
			<h2>Foobar</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, impedit, recusandae eius modi cumque obcaecati iusto corporis harum omnis ea expedita possimus sequi aliquam enim consequuntur soluta veniam a nihil.</p>
		</div>
	</div> -->

</div>
<div class="row">
	<p>Cloud Computing for the rest of us.</p>
	<div class="tabbable"> <!-- Only required for left/right tabs -->
		<a href="#" data-toggle="tab"> Skills</a>
		<a href="#" data-toggle="tab"> Experience</a>
		<a href="#" data-toggle="tab"> Aspirations</a>
	</div>
</div>
	<!-- ./ tabbable -->



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



<!-- <div class="wrapper">
  <div class="content-main">main...</div>
  <div class="content-secondary">secondary...</div>
</div>
 -->



<div class="main">

	<section>
		<h2>Code Samples:</h2>
		<!-- <h2>Let's get to work:</h2> -->
			<div class="accordion" id="accordion">


			 <div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
			 				<h2>Semantic HTML5</h2>
			 			</a>
			 		</div>
			 		<div id="collapseFive" class="accordion-body collapse">
			 			<div class="accordion-inner">
<p>Look how simple this is:</p>
<pre class="prettyprint">
{{{'<!DOCTYPE html>
<html>
<head></head>
	<body>
	<div class="content-wrap theme1">
		<div class="content-main">
			MAIN
		</div>
		<div class="content-secondary">
			SECONDARY
		</div>
	</div>	
	</body>
</html>'}}}
</pre>
<p>I've got all kinds of other code in there, but that's all there is to the <em>scaffolding</em> of my site.</p>
<p>Posts, pages, and other blocks of content are just that: blocks.  By using sensible and consistent class names, we can make changes and move things around with ease.</p>
<p>contrast that to something like this:</p>
<pre class="prettyprint"><code>
{{{'<div class="mypage4" class="red pull-right span7 admin large shaded">blah blah blah</div>'}}}
</code></pre>
<p>Keep reading to understand how, using LESS (or SASS) Mixins, development and maintenance is a breeze....</p>
			 				<a href="https://www.google.com/search?q=css+semantics">Research CSS Semantics</a>
			 			</div>
			 		</div>
			 		<!-- ./collapse -->
			 </div>
			 	<!-- ./ accordion-group -->



			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			 				<h2>Web Design</h2>
			 			</a>
			 		</div>

			 		<!-- Here's a little diddy used on this page: -->
			 		<div id="collapseOne" class="accordion-body collapse">
			 			<!-- //add in to open on load -->
			 			
			 			<div class="accordion-inner">
			 				<a href="css" data-toggle="tab">
			 					<h3>LESS CSS</h3>
			 				</a>
			 				<div id='css'>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sons-of-obsidian"></script>

<p>Here's an example of a "mixin" using LESS, Bootstrap, and HTML5:</p>
<p class="muted">Also, check out the <a href="{{URL::to('ajax')}}">Ajax Demo</a> to feel the power!</p>

<pre class="prettyprint" lang="less"><code lang="css">@river:#3498db;
@sunflower:#f1c40f;
#myDiv {
    .make-row();
    section{
        .make-xs-column(6);
        background-color: @river;
    }
    aside{
        .make-xs-column(6);
        background-color: @sunflower;
    }
}</code></pre>
<p>Now that this is set up, changing ONE WORD at a time can change the entire design of the site...  It's extremely powerful, and I can never see going back to doing it any other way.</p>
<p>Check this out: here's one theme:</p>

<pre class="prettyprint">
.darktheme{
  body{
    background-color: @concrete;
    // color: @clouds;
  }
  .content-wrap {
    .make-row();
  }
  .content-main {
    background-color: @asphalt;
    color: @clouds;
    // .make-xs-column(6);
    .make-md-column(7);
  }

  .content-secondary {
    background-color: @sunflower;
      
    // .make-xs-column(6);

    .make-md-column(5);
    // .make-md-column-offset();
    .border-radius;
  }
}
</pre>
<p>And here is another:</p>
<pre class="prettyprint">
.lighttheme{

  body{
    background-color: @silver;
    color: @asphalt;
  }
  .content-wrap {
    .make-row();
  }
  .content-main {
    // background-color: @concrete;
    background-color: @midnight;
    .make-xs-column(7);
    .make-md-column(8);
    .border-radius;
  }

  .content-secondary {
    background-color: @concrete;
    color: @midnight;
      .pull-right();
    .make-xs-column(4);

    .make-md-column(3);
    .make-md-column-offset(1);
    .border-radius;
  }
  .main > section{
    color:@silver;
  }
}
</pre>
<p>This is awesome because it will work regardless of changes to the rest of our code, as long as we stick to a few best practices.  It's <em>less likely</em> that a change will break something.  As long as the HTML is structured in a logical way, we can make small changes to this code to make drastic changes to the look and layout of our site, like this:</p>
<p>This is also easy to understand and to explain to someone else working on it.</p>


<!-- 			 					This little diddy makes the 'note':
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
			 					</code></pre> -->
			 					<a href="http://stackoverflow.com/questions/514083/why-is-good-ui-design-so-hard-for-some-developers">Must Read for User, Designers, and Developers</a>
			 					<a href="http://stackoverflow.com/questions/7973/user-interface-design">User Interface Design</a>
			 				</div>
			 				
							

							<p><a href="http://stackoverflow.com/questions/4781077/html5-best-practices-section-header-aside-article-tags">HTML5 best practices</a></p>

							<a href="/responsive" data-toggle="tab">
								<h3>Responsive Design</h3>
							</a>
							<p>You may have noticed this page changes when resized.  Try it, it's awesome!</p>
							<p><a class='btn btn-info' href="{{URL::to('responsive')}}"><i class="icon-code"> </i>Learn More</a></p>
							<p>I also have experience with vector graphics, color theory, typography, and more... but I'm running out of room on this page!</p>
			 			</div>
			 		</div>
			 	</div>
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
			 				<h2>Development</h2>
			 			</a>
			 		</div>
			 		<div id="collapseTwo" class="accordion-body collapse">
			 			<div class="accordion-inner">
			 				<h3>Laravel</h3>
			 				</a>
<p>I've been cramming tutorials, books, and videos, and I've been experimenting and building with Laravel for the past 3 months straight.  It's SPECTACULAR!</p>

<pre class="prettyprint">
	//Domain Routing...
	'buckeye' => array('domain' => 'buckeyemower.com'),
	'gristech' => array('domain' => 'myapp.gristech.com'),
</pre>

How about this one:

<pre class="prettyprint">
private function post_public($tag=""){
	$posts=$this->post
		->where('meta_keywords', 'LIKE', '%'.$this->company->brand.'%')
		->where('meta_keywords','LIKE','%public%')
        ->where('content','LIKE','%'.$tag.'%')
        ->paginate(5);
        View::share('posts',$posts);
        return $posts;
        // return View::make('site.posts.carousel');
}
</pre>
<p>There's alot going on here, but it's sooooo easy once you get the hang of it.  Generators, Asset Management, Mail, Caching, IOC, Symfony, Eloquent... the list of tools is just amazing.</p>
<pre class="prettyprint">
View::make('site.posts.thumbnails')->with('posts',$posts)
View::make('site.posts.carousel')->with('posts',$posts)
View::make('site.posts.list')->with('posts',$posts)
</pre>
<p>I've set up a bunch of templates like this, and Once again, by changing one word, we can alter the entire presentation of all these blocks of content.  Or, we can edit a single word, color... add or collapse a piece of content... anything you can dream!</p>
			 				<a href="#repairs" data-toggle="tab">
			 					<h3>PHP</h3>
			 				</a>
<p>I'm a huge PHP fan, and I've developed a few hundred objects that can be reused and extended.  I'm really excited to use this stuff, so please ask me about it!</p>
<p>In my free time, I read php.net for fun.</p>	
						<a href="#replacement" data-toggle="tab">
			 					
						<p>I don't write code very fast, because I take my time to try to get things right the first time.  I write very little code in comparison to the research that I do when implementing a new feature or improving an existing one.</p>
			 			<p>A good deal of my time goes into refactor and comment the code, and document issues.</p>
			 			<p>This blog can be a good start towards a manual or developer resource.</p>
			 			<p>On the other hand, I beleive the shortest path to getting the code to work helps the development process.  This is a delicate balance....</p>
		 			
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
			 			<p>I have a good head start on marketing and analytics, although I have yet to use it all.</p>
			 			<a href="#experience"><h3>Experience</h3></a>
			 			<p>I have 15 years of sales, marketing, and management experience... more on that later.</p>
<!-- 			 			<p>Identify ways we can make marketing better.</p>
			 			<p>Develop and design an automated solution</p>
			 			<p>Let's talk about it!</p> -->
			 			</div>
			 		</div>
			 	</div>

<!-- ////////////////////// -->
			 	<div class="accordion-group">
			 		<div class="accordion-heading">
			 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
			 				<h2>More</h2>
			 			</a>
			 		</div>
			 		<div id="collapseFour" class="accordion-body collapse">
			 			<div class="accordion-inner">
		<p>This needs polishing, but It's all about building a flexible foundation.  It just keeps getting better and better!</p>
						<p>
			 				I can provide dozens of references who will attest to my training skills, patience with clients, down-to-earth approach to working with people of all skill levels, and my ability to learn new things quickly.  Along with my problem-solving skills, this mix is the perfect storm of abilities to do THIS! 
			 			</p>
			 			</div>
			 		</div>
			 	</div>
<!-- ///////////////////////////// -->


			</div>
			<!-- ./ accordion -->
	</section>
	<!-- main section -->

<!-- 	<div class="row">

	</div> -->

{{View::make('company.about',compact('company'))}}
{{View::make('company.dump',compact('company'))}}



		<!-- ./ row -->

	</div>
	<!-- ./main -->
	<!-- ************************************************ -->




	

	<!-- </div> -->

	<!-- </div> -->
	<!-- ./below -->

	@stop

@section('secondary')

<div class="sidebar">
	<section>
		<h2><a href="#CSS">How-to's & Demos</a></h2>
<p class="muted credit">These are few things I have created.  Please let me know if you like them.</p>
		<!-- <article> -->
			<!-- <a href="#">link</a> -->
		<!-- </article> -->
	</section>
<!-- 	<div class="btn-group-vertical">
		<button class="btn btn-info">test</button>
		<button class="btn btn-info">test</button>
		<button class="btn btn-info">test</button>

	</div> -->
	<ul class="nav">
		<li><a class="btn btn-info" href="lesstest">Less demo page</a></li>
		<li><a class="btn btn-info" href="{{URL::to('ajax')}}">Ajax</a></li>
		<li><a class="btn btn-info" href="{{URL::to('arrays')}}">PHP arrays</a></li>
		<li><a class="btn btn-info" href="{{URL::to('pages/parallax')}}">parallax</a></li>
		<li><a class="btn btn-info" href="{{URL::to('pages/jparallax')}}">jparallax</a></li>
		http://myapp.gristech.com/pages/jparallax



<li>In the works...</li>
		<li>Git and GitHub</li>
		<li>Migrate Bootstrap 2.3.2 to 3.0</li>
		<li>More PHP & Laravel</li>
	</ul>
</div>


<div class="sunrise">
	<h2><a href="#">HELP!</a></h2>
	<p>I need a job.  If you like what you see here, please hire me, or let me know if you know anyone who could put me to good use.  Do I have what it takes?</p>
	<h1>Contact Me</h1>
	<h5>614-203-9405</h5>
	<h5>ryan.grissinger@gmail.com</h5>
	<p>For something a little different, click this button and follow the instructions:</p>
	<a class="btn btn-info" href="{{URL::to('contact')}}">Contact</a>
	<p>Let's chat, I'll buy you a cup of coffee sometime!</p>
</div>
@stop

@section('third')
	<div class="row">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-pills">
				<li class="active"><a href="#tab1" data-toggle="tab">Section 2</a></li>
				@foreach($company->menus() as $menu)
				<li><a href="#my{{$menu}}" data-toggle="tab"><i class="icon-rocket icon-4x"></i> {{{$menu}}}</a></li>
				@endforeach
				
			</ul>

			<div class="tab-content">
				@foreach($company->menus() as $menu)
				<div class="tab-pane" id="my{{{$menu}}}">
					<p>Howdy, I'm {{{$menu}}}.</p>
				</div>
				@endforeach
				<div class="tab-pane active" id="tab1">
					<h2>Welcome to Section 2</h2>
					<p>Clicking these buttons fills this area.</p>
				</div>
			</div>
		</div>
	</div>
@stop

@section('posts')
{{--View::make('site.posts.article')--}}


	<div class="row" id="posts">
		<?
// var_dump($posts);
		?>

		<div class="text-center">
			{{ $posts->links() }}
		</div>


{{--View::make('site.posts.thumbnails')->with('posts',$posts)--}}
{{View::make('site.posts.accordion')->with('posts',$posts)}}

{{--View::make('site.posts.default')->with('posts',$posts)--}}
{{--View::make('site.posts.carousel')->with('posts',$posts)--}}
{{--View::make('site.posts.mini-carousel')->with('posts',$posts)--}}

		{{ $posts->links() }}
	</div>
@stop

@section('myjs')


    <script type="text/javascript">
$(document).ready(function(){
	$("#mybutton").click(function () {
		$("#myp").toggle("slow");
	});
});
// 	$("#toggler").click(function(){
// 	  $(this).toggleClass('active, inactive');
// 	})

// })
                // $('.page-header').css('background-color','red');
                $('#side-wrapper').height($("#sidebar").height());
                $('.toggler .btn').on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var $collapse = $this.closest('.collapse-group').find('.collapse');
                        // $collapse.collapse('toggle');
                        $collapse.toggle("slow");
                    });
                    // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});

                    // $('.thumbnail').equalHeights();
    </script>
@stop

@section('admin-bottom')
	<div class="footer">
		<div class="note">
<pre class="prettyprint"><code><p>This is pre class = "prettyprint":<!-- <pre class="prettyprint"></pre> --></p></code></pre>		
		</div>	
	</div>
@stop
