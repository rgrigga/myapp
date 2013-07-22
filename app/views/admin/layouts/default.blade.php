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
        {{-- Basset::show('admin-css.css') --}}

<!-- // http://stackoverflow.com/questions/5506258/horizontal-scroll-overflowing-html-lis-without-knowing-width*/ -->
		@section('styles')
		<style>
	/*<!-- colors:	 -->*/
		.wrap{
			/*background-color: rgba(100,85,255,.1);*/
			background-color: rgba(20,40,60,.1);
		}

		div{
			background-color: rgba(50,89,20,.3);
		}




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



		.thumbnail{
			word-wrap:break-word;
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
<!-- <link rel="stylesheet" href="/assets/js/redactor/redactor.css" /> -->
<!-- <script src="/assets/js/redactor/redactor.js"></script> -->

<!-- <link rel="stylesheet" href="/js/redactor/redactor.css" />
<script src="/js/redactor/redactor.js"></script> -->
<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>

<!-- redactor -->
		<link rel="stylesheet" href="{{asset('assets/js/redactor/redactor.css')}}" />
		<script src="{{asset('assets/js/redactor/redactor.js')}}"></script>

		<script type="text/javascript">
		$(function() {
			$('#redactor_content').redactor();
		});
		</script>



	</head>

	<body>

<div class="wrap">
		<!-- Container -->
		<div class="container">
			<!-- Navbar -->
			<!-- admin.nav is a navbar-inner.  wrap it in a navbar -->
			<!-- so should other navbars maybe -->
			@section('nav')
			<div class="navbar navbar-inverse navbar-fixed-top">
			@include('admin.nav')
			</div>
			@show
			<!-- ./ navbar -->


			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->
			@section('logo')
			<style>
			.admin-nav{

			}
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

				@media screen and (max-width: 979px) {
				    .contentwrap { padding-top: 0px; }
					.span50{
						width: 50%;
					}
				}

			</style>
			<div class="logo">
				<img src="{{asset('assets/gristech/gristech.png')}}" alt="Company Logo">
			</div>
				<div class="logo">
				<h1>Gristech</h1>
				<img src="{{asset('assets/gristech/gristech.png')}}" alt="Company Logo">
			</div>
			@show

			<style>

			/*http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site*/

				.contentwrap{
					padding-top: 0px;
					}

				@media screen and (max-width: 979px) {
				    .contentwrap { padding-top: 0px; }
					.span50{
						width: 50%;
					}
				}


			
			</style>
			<div class="contentwrap">
<?php
    $env=App::environment();

    Session::flash('mymessage','Welcome to the <strong>'.$env.'</strong> environment.');
    if($env!=="buckeye"){
        $path='/home/ryan/MyApp6/app/views/site/pages/';
    }
    else
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
    @if (Session::has('message'))

	    <div class="flash alert">
	      <button type="button" class="close" data-dismiss="alert">&times;</button>
	      <p>{{ Session::get('message') }}</p>
	    </div>

    @endif

    @if (Session::has('mymessage'))

	    <div class="flash alert alert-info">
	      <button type="button" class="close" data-dismiss="alert">&times;</button>
	      <p>{{ Session::get('mymessage') }}</p>
	    </div>

    @endif
					<!-- Content -->
					@yield('main')
						<!-- ./ content -->
			</div>
					<!-- ./ container -->

					<!-- Javascripts
					================================================== -->
	        {{ Basset::show('admin-js.js') }}
	    
<!-- redactor -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
		<link rel="stylesheet" href="{{asset('assets/js/redactor/redactor.css')}}" />
		<script src="{{asset('assets/js/redactor/redactor.js')}}"></script>

		<script type="text/javascript">
		$(function() {
			$('.redactor').redactor();
		});
		</script>
<!-- ./redactor -->

			 <script type="text/javascript" charset="utf-8">
			    $(prettyPrint);

			</script>

			 <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script>

		<script language="javascript" type="text/javascript" src="{{asset('assets/js/jquery.equalheights.js')}}"></script>
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
                    // alert('jQuery is loaded');
                    $(document).ready(function(){
                        // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
                       // $('.thumbnail').equalHeights();
                       columnConform();

                    });
                }
            }
        </script>


	
</div>
	<script>
		
		// these are (ruh-roh) globals. You could wrap in an
		// immediately-Invoked Function Expression (IIFE) if you wanted to...
		var currentTallest = 0,
		    currentRowStart = 0,
		    rowDivs = new Array();
		
		function setConformingHeight(el, newHeight) {
			// set the height to something new, but remember the original height in case things change
			el.data("originalHeight", (el.data("originalHeight") == undefined) ? (el.height()) : (el.data("originalHeight")));
			el.height(newHeight);
		}
		
		function getOriginalHeight(el) {
			// if the height has changed, send the originalHeight
			return (el.data("originalHeight") == undefined) ? (el.height()) : (el.data("originalHeight"));
		}
		
		function columnConform() {
		
			// find the tallest DIV in the row, and set the heights of all of the DIVs to match it.
			$('.thumbnail').each(function() {
			
				// "caching"
				var $el = $(this);
				
				var topPosition = $el.position().top;
		
				if (currentRowStart != topPosition) {
		
					// we just came to a new row.  Set all the heights on the completed row
					for(currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) setConformingHeight(rowDivs[currentDiv], currentTallest);
		
					// set the variables for the new row
					rowDivs.length = 0; // empty the array
					currentRowStart = topPosition;
					currentTallest = getOriginalHeight($el);
					rowDivs.push($el);
		
				} else {
		
					// another div on the current row.  Add it to the list and check if it's taller
					rowDivs.push($el);
					currentTallest = (currentTallest < getOriginalHeight($el)) ? (getOriginalHeight($el)) : (currentTallest);
		
				}
				// do the last row
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) setConformingHeight(rowDivs[currentDiv], currentTallest);
		
			});
		
		}
		
		
		$(window).resize(function() {
			columnConform();
		});
		
		// Dom Ready
		// You might also want to wait until window.onload if images are the things that
		// are unequalizing the blocks
		$(function() {
			// columnConform();
		});
		
	</script>

	</body>
</html>
