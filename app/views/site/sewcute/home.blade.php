@extends('layouts.scaffold')

@section('admin-top')
@parent
Welcome Administrator!

@stop

@section('title')
@parent
{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent
{{{$company->description}}}
@stop


@section('meta_keywords')
@parent
<!-- //new company:
	//domain
	//environment
	//assets
	//routes
	//site.megacorp.home -->
@stop

@section('styles')
<!-- //Too many styles hurt page speed, you should only use what you need -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fawn+Script' rel='stylesheet' type='text/css'>

<!-- credits -->



<!-- <a href="http://packalyst.com/packages/package/thapp/jitimage">Image Magik</a> -->
<style>

/*images*/


/*GIMP Palette
Name: Color Palette by Color Scheme Designer #5n11Tw0w0w0w0Columns: 4

#
225   0  76     primary 1
169  42  85     primary 2
146   0  49     primary 3
240  60 121     primary 4
240 108 152     primary 5*/

/*Am I good enough?
Can my skills be applied in this business?
Am I doing the right things with my time?*/


	/*this has ramifications:*/
	.container{
		width: 100%;
	}

	html,body {
		
		/*background-color: rgba(255,0,76,.15);*/
		color: #8D003B;
		font-family: 'EB Garamond', serif;

	}

	@font-face {
	font-family: 'Archive';
	src: url('/assets/font/Archive.otf') format("opentype");
	}

	@font-face {
	font-family: 'aescrawl';
	src: url('/assets/font/aescrawl.ttf') format("truetype");
	}

	.font-test{
		font-family: 'aescrawl', serif;
	}


	.page-header{
/*		background-image: url('http://myapp.gristech.com/assets/sewcute/logo.png');
		background-repeat: no-repeat;*/
		margin-top: 0px;
		margin-left:-20px;
		margin-right:-20px;

		min-width: 100%;
		min-height:120px;
		padding-top: 60px;
		/*margin-top: 60px;*/
		/*margin-right: 0px;*/
		/*margin-left: 0px;*/
		margin-bottom: 20px;
/*169  42  85     primary 2*/
		background-color: rgba(94,196,205,.5);
		border-bottom: 0;
	}
	
	.page-header h1{
		max-width: 100%;
	/*padding-left: 10%;*/
	    margin-right: 10%;
		/*padding-left: 10%;*/
		text-align: center;
		line-height: .7em;
		margin-top: 90px;
		margin-bottom: 20px;
		/*letter-spacing:-7px;*/
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


	.page-header h1, .sidebar h3{
		/*font-family: 'Mr De Haviland', cursive;*/
		/*font-family: 'Monsieur La Doulaise', cursive;*/
		font-family: 'Fawn Script', cursive;
		/*color:#ffbe73;*/
		color: #015c65;
		text-shadow: 3px 3px 3px #A3295C;
	}

	.sidebar h3{
		text-shadow: 4px 4px 4px #A3295C;
	}

	.navbar-inner{
		background-image: none;
		background-color: rgba(30,109,116,.5);
	}

	.navbar{
		margin-bottom: 0;
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
		/*146   0  49*/
		color:rgba(146,0,49,.7);
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
</style>
@stop



@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

		<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
		<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

		<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}"> -->
		<link rel="shortcut icon" href="{{{ asset('assets/ico/'.$company->name.'/favicon.png') }}}">
@stop





<!-- //This is the correct place to put js on this page. -->
@section('myjs')
    <script type="text/javascript">

	// $('#side-wrapper').height($("#sidebar").height());

	// $('#accordian').margin-top($("#name").height());
    window.onload = function()
    {
    	// alert('bam!');
        if(!window.jQuery)
        {
            alert('jQuery not loaded');
        }
        else
        {
        	// alert('jQuery is loaded');
            $(document).ready(function(){
                // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
            	// $('.thumbnail').equalHeights(); //promoted
            });
        }
    }

	// $(document).ready(function() {
	
	// });
    // $(function(){
    //     // Ensure equal heights on thumbnail boxes
    //     $('.thumbnail').equalHeights();
    // });

    $('.collapse-group .btn').on('click', function(e) {
	    e.preventDefault();
	    var $this = $(this);
	    var $collapse = $this.closest('.collapse-group').find('.collapse');
	    $collapse.collapse('toggle');
	});
	
</script>
@stop

@section('nav')

@include('site.partials.nav-top-min')

@stop

@section('main')
	@if (Session::has('message'))
	    <div class="flash alert">
	        <p>{{ Session::get('message') }}</p>
	    </div>
	@endif
<?php
	$env=App::environment();
	// echo "<div class='alert alert-info'>Welcome to the <strong>".$env."</strong> environment.</div>";

	if($env=="local"){
		$path='/home/ryan/MyApp6/app/views/site/pages/';
		$msg='Welcome to the Jungle';
	}
	// if($env=='buckeye'){
	// 	// $brand='foo';
	// }
	// if($env=='gristech'){

	// }
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

	html{
		/*background-color:rgba(50,50,50,.5);*/
	}

	.accordion{
		z-index: 1;
	}
	.accordion-group{
		border: none;
	}

	.headline{
		/*margin-left: 15%;*/
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

	.affix{
		/*position: fixed;*/
		/*width: 40%;*/
		right:20px;
	}

	.accordion{
		padding-left: 15%;
	}


	@media (min-width: 980px){
		.accordion{
			margin-top:80px;
		}
	}

	@media (max-width: 979px) {
		
		.page-header{
			padding-top: 20px;
		}

		.page-header h1{
			font-size: 72px;
			padding-bottom: 15px;
		}

	}

	.affix{
		/*position: fixed;*/
		/*width: 60%;*/
		z-index:2;
		right:20px;
		left:20px;
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
		text-shadow: 2px 2px 2px #A3295C;
	}
	

.note2 p{ 
   position: relative; 
   /*top: 50px; */
   /*left: 0; */
   /*width: 100%; */

	top: 30%;
	left: 20%;

   color: white; 
   font:  20px/32px Helvetica, Sans-Serif; 
   /*letter-spacing: 1px;*/
   background: rgb(0, 0, 0); 
   background: rgba(0, 0, 0, 0.6);
   opacity: 70%;
   padding: 20px; 
   /*float: right;*/
   max-width: 80%;
}

.note { 
	overflow: hidden;
	
    position: relative; 
    width: 300px;
    margin: 0;
    margin-top: 20px;
    /*left:-150px;*/
}

.note > .inner {
    position: absolute;
    top: 10%;
    left: 50%;
    margin-left: -115px;
    padding: 10px;
    text-align: center;
}

.note > .inner span { 
   color: black; 
   font: bold 24px/45px Aescrawl, Helvetica, Sans-Serif; 
   left:20%;
   padding: 30px; 
}

.note img{
/*	width: 300px;
	height: 300px;*/
	/*width: 100%;*/
	/*height: cover;*/
	/*background-size: 100% 100%;*/
	/*background-size: cover;*/

}

.note .mydiv{ 
	/*background-color: red;*/
   /*position: absolute; */
   top: 50px; 
   left: 0;
   /*padding:10px;*/
   /*padding-bottom: 20px; */
   /*width: 100%; */
}
.note .mydiv{
	/*padding-left: 20px;*/
	position: absolute; 
	top: 20%;
	left: 20%;
	color: black; 
   /*left: 0;*/
	/*background-color: red;*/
	/*top:0;*/
}

.note .mydiv span {
	color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.note h1{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   /*width: 100%; */
}

.note h1 span {
	color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.note p{ 
   position: absolute; 
   /*top: 50px; */
   /*left: 0; */
   /*width: 100%; */

	top: 0%;
	left: 0%;

   color: red; 
   font:  20px/32px Helvetica, Sans-Serif; 
   /*letter-spacing: 1px;*/
   background: rgb(0, 0, 0); 
   background: rgba(0, 0, 0, 0.6);
   opacity: 70%;
   padding: 20px; 
   /*float: right;*/
   max-width: 80%;
}
.note p span {
	color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}



.note h4{ 
   position: absolute; 
   top: 50px; 
   left: 0; 

   /*width: 100%; */
}

.note h4 span { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.note{
	left:10%;
}
.headline{
	max-width: 100%;
	/*padding-left: 10%;*/
	/*margin-right: 5%;*/

  -webkit-transform: rotate(-10deg);
  -moz-transform: rotate(-10deg);
  -o-transform: rotate(-10deg);
  transform: rotate(-10deg);
}

.logo{
	text-align: center;
	margin: auto;
}

</style>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
<div class="page-header">


<div class="logo">
	<img class='logo' src="{{{asset('assets/sewcute/logo.png')}}}" alt="">
</div>


	<div class="row-fluid">
		<div class="span7">
			<a href="#" data-toggle="tab">
				<h1 class="headline">{{{$company->brand}}}</h1>
			</a>
			<h2 class='text-center'>the demo...</h2>
			<h3 class='text-center'>{{{$company->description}}}</h3>

<style>
	.MyMenu{
		margin-left:40px;
	}
</style>
<div class="MyMenu">
	<ul class="nav nav-pills">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#">Profile</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="#">Dolls</a></li>
				<li><a href="#">People</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Links <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="http://www.thechildwithin.net/dollcatalog/amgrl_type.htm#top">http://www.thechildwithin.net/dollcatalog/amgrl_type.htm#top</a>The chile within</li>
				<li><a href="https://www.facebook.com/CreativeThreadsNH">https://www.facebook.com/CreativeThreadsNH</a></li>
				<li><a href="http://www.coolmompicks.com/2013/01/best_handmade_american_girl_doll_clothes_etsy.php">American Girl Handmand Clothing Review</a></li>
				<li class="divider"></li>
				<li><a href="http://store.americangirl.com/agshop/static/home.jsp">American Girl</a></li>
				<li><a href="http://en.wikipedia.org/wiki/Outright">Outright</a></li>
			</ul>
		</li>
	</ul>
</div>


		</div>
		<!-- span7 -->
		<div class="span3">
			<!-- <h1>BAM!</h1> -->
			<div class="note">
				<!-- <h1>h1 <span>h1span</span></h1> -->
				<!-- <h4>h4 <span>h4span</span></h4> -->
				<div class = "inner">
					<style>
						.phone{
							font-size: 1.5em;
						}
					</style>
					<span>Write this down: 
					<ul class="nav">
							<li>
								<a href="#">&#10004; She's Fast</a>
							</li>
							<li>
							 	<a href="#">&#10004; She's Furious</a>
							</li>
							<li>
							 	<a href="#">&#10004; They're Cute!</a>
							</li>

						</ul>
						<div class="phone">{{{$company->phone}}}</div> 
						<div class="text-center">
							call anytime
						</div>		
						<!-- < ? php echo $contact ?>	 -->
						<!-- @ include('site.partials.contact')			 -->
					</span>
				</div>

				<img src="{{asset('assets/img/note.png')}}" alt="">

<!-- http://www.fuzzimo.com/free-vector-post-it-notes-push-pins/ -->
			</div>
			<!-- ./note -->
		</div>
<!-- ./note span3 -->

	</div>
<!-- ./row -->
<h1>But Wait, There's More!!! <i class="icon-arrow-down"></i></h1>
</div>
<!-- ./ page-header -->




<div class="row-fluid">

	<!-- sidebar -->
	<div class="span3">
		<h2>Look!</h2>
		<p>Non-web marketing is important, too.  Let's make some postcards, business cards, etc...</p>
	</div>



	<div class="span8">
		<!-- //main area -->
		<img src="{{asset('assets/gristech/flyer.png')}}" alt="flyer">

	</div>
</div>

<style>
	.hero-unit{
		color: black;
		background-image: url('http://myapp.gristech.com/assets/sewcute/lined_paper.png');
		/*background-image: url('http://myapp.gristech.com/assets/sewcute/logo.png');*/
		/*background-repeat: no-repeat;*/
	}
</style>




<div class="row-fluid">
	<div class="hero-unit" name='services' id='services'>
    <h1>{{{$company->name}}}</h1>


<?php $items=$company->menus(); ?>
    <ul>
    @foreach($items as $item)
        <li>{{{$item}}}</li> 
    @endforeach
    </ul>
    
    <h2>slogan: {{{$company->slogan}}}</h2>
    <p>
    	This section is called a Hero-Unit.  Sell your widget!
    </p>
  </div>
</div>



<div class="row-fluid">
	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-pills">
		@foreach($company->menus() as $menu)
	    <li><a href="#{{$menu}}" data-toggle="tab"><i class="icon-rocket icon-4x"></i> {{{$menu}}}</a></li>
	    @endforeach






	    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
	    <li class="active"><a href="#tab2" data-toggle="tab">Section 2</a></li>
	    <li class="active"><a href="#tab3" data-toggle="tab">Section 3</a></li>
	  </ul>
	  
	  <div class="tab-content">
<style>
.tab-pane{
	overflow: none;
}
	.tab-pane img{
		max-width: 70%;
		/*overflow: none;*/
	}
</style>

	    <div class="tab-pane active" id="tab1">
	      <p>This is all about us.</p>
	      <img src="{{{asset('assets/sewcute/path5495.png')}}}" alt="">
	    </div>
	    <div class="tab-pane" id="tab2">
	      <p>These are the services we provide.</p>
	      <img src="{{{asset('assets/sewcute/g4477.png')}}}" alt="">
	    </div>
	    <div class="tab-pane" id="tab3">
	      <img src="{{{asset('assets/sewcute/path3763-1-9-2.png')}}}" alt="">

	      <p>And of course we do this.</p>

	    </div>
	  </div>
	</div>
</div>


			<ul class="thumbnails">
			  <li class="span4">
			    <div class="thumbnail">
			      <img src="http://lorempixel.com/300/300/" alt="">
			      <h3>Thumbnail label</h3>
			      <p class='lead'>One Widget</p>
			      <p>One Thousand and One Uses.</p>

			    </div>
			  </li>

			  <li class="span4">
			    <div class="thumbnail">
			      <img src="http://lorempixel.com/300/300/" alt="">
			      <h3>Thumbnail label</h3>
			      <p class='lead'>One Widget</p>
			      <p>One Thousand and One Uses.</p>
			    </div>
			  </li>
			  <li class="span4">
			    <div class="thumbnail">
			      <img src="http://lorempixel.com/300/300/" alt="">
			      <h3>Thumbnail label</h3>
			      <p class='lead'>One Widget</p>
			      <p>One Thousand and One Uses.</p>
			    </div>
			  </li>
			</ul>

<ul class="thumbnails">
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
	<li class="span2">
		<div class="thumbnail">
			<h4>Product</h4>
			<p>This is one of our finest offerings...</p>
			<img src="{{{asset('assets/sewcute/g6472.png')}}}" alt="">
		</div>
	</li>
</ul>


<div class="row-fluid">


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
	<!-- div -->
	<div class="span4 pull-left">
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

<style>
	img{
		padding: 20px;
	}
</style>
<img src="{{{asset('assets/sewcute/path3763-1-9-1-6-7.png')}}}" alt="sewcute">

	<style> 
	#foo{
	    height:800px;
	    overflow-y:scroll;
	}
	#bar{
	    height:600px;
	    background-color:#999;
	}
	#baz{
	    height:60px;
	    width:60px;
	    background-color:yellow;
	    color:#000;
	    position:absolute;
	    left:10%;
	    top:0px;
	}
		#baz2{
	    height:60px;
	    width:60px;
	    background-color:green;
	    color:#000;
	    position:absolute;
	    left:50%;
	    top:0px;
	}
	/*@font-face
	{
	font-family: myFirstFont;
	src: url(sansation_light.ttf);
	}

	div
	{
	font-family:myFirstFont;
	}*/
	</style>



<script>

    window.onload = function()
    {
    	// alert('bam!');
        if(!window.jQuery)
        {
            alert('jQuery not loaded');
        }
        else
        {
        		alert('jQuery is loaded');
            $(document).ready(function(){
                // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});

            	$(function(){
				    var layer1 = $('#bar');
				    var layer2 = $('#bar');
				    
				    var obj = $('#baz');
				    var obj2 = $('#baz2');
				        
			        $('#foo').scroll(function(){             
			           var distance = layer1.outerHeight() + obj.outerHeight() + 20;
			           var distance2 = layer1.outerHeight() + obj2.outerHeight() *30;            
			           
			           var pos = this.scrollTop/$(this).innerHeight() * distance;
			           var pos2 = this.scrollTop/$(this).innerHeight() * distance2;

			           obj.css('top', pos);
			           obj2.css('top', pos2);
			    	});

				    // var layer1 = $('#bar');
				    // var obj = $('#baz');
				    //     $('#foo').scroll(function(){             
				    //        var distance = layer1.outerHeight() + obj.outerHeight() + 20;            
				    //        var pos = this.scrollTop/$(this).innerHeight() * distance;
				    //        obj.css('top', pos);
				    // });
				});

            });
        }
    }


</script>

@stop


<!-- 	      <div class="row">
	      	<div class="span4">
	      		<img src="http://lorempixel.com/300/300/" alt="">
	      		<p class="muted">A random image</p>
	      	</div>
	      	<div class="span4">
	      		<img src="http://lorempixel.com/300/300/" alt="">
	      		<p class="muted">A random image</p>
	      	</div>
	      	<div class="span4">
	      		<img src="http://lorempixel.com/300/300/" alt="">
	      		<p class="muted">A random image</p>
	      	</div>
	      </div>

	      <div class="row">
	      	<div class="span4">
	      		<img src="http://lorempixel.com/300/300/" alt="">
	      		<p class="muted">A random image</p>
	      	</div>
	      	<div class="span4">
	      		<img src="http://lorempixel.com/300/300/" alt="">
	      		<p class="muted">A random image</p>
	      	</div>
	      	<div class="span4">
	      		<img src="http://lorempixel.com/300/300/" alt="">
	      		<p class="muted">A random image</p>
	      	</div>
	      </div> -->