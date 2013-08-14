<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!-- Basic Page Needs
	================================================== -->
	
		<!-- Gristech Default Layout -->
		<!-- site.layouts.default -->
		<!-- should be overridden in children -->

<!-- Page Title -->
<title>
@section('title')
Layouts.Default
@show
</title>

<!-- http://moz.com/learn/seo/meta-description -->
@section('meta_description')
<meta name="description" content="Gristech will do things that will help you do what you do better.  We will make you make more money.  We will therefore make you want to give us lots of money. We will make you lots of money.">
@show

@section('meta_keywords')
<meta name="keywords" content="php, laravel, development, learning, software, business" />
@show

<meta name="author" content="Ryan Grissinger" />
<!-- Mobile Specific Metas
================================================== -->
<!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- CSS
================================================== -->

@section('styles')
    @stylesheets("public-css")

	<link rel="stylesheet" href="/assets/css/style.css">

	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<style>
		.mycontentwrap{
			margin-top: 40px;
			position: relative;
			/*z-index: -3;*/
		}

        .container-fluid{
        	/*margin-top: 60px;*/
        }
        	
		/*http://css-tricks.com/almanac/properties/z/z-index/*/
		.contentwrap{
			position: relative;
			padding-top: 60px;
			/*This was commented out for the *tags* page*/
			/*padding-top: 60px;*/
			/*z-index: -3;*/
		}
			
		footer{
			background-color: #e3e3e3;
		}
		footer img{
			max-height: 64px;
		}
	</style>
@show

<!-- prettify -->
<!-- NOTE: I had an experience with a lengthy pageload on this today.  It's a good lesson NOT to include prettify on the main layout page.  Load it in a child page where you need it? -->
<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->

@section('myjs')
<!-- I prefer to keep javascript to a minimum when possible. -->
<!-- <script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script> -->

	<!-- google.com/analytics -->
	<!-- prettify -->
	<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->
<!--
	<script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script>
-->
@show

@section('analytics')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>
<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
@show
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&skin=sunburst"></script>
@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file 
e.g. /company/assets/ico/apple-touch blah.  the path should simply be overridden in the child.-->

<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

<!-- http://www.jonathantneal.com/blog/understand-the-favicon/ -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">	
@show

</head>

<body>

	<!-- this is hard-coded into the layouts default page -->
	<!-- http://twitter.github.io/bootstrap/examples/sticky-footer-navbar.html -->
	<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
		
		<!-- Navbar -->
		
		@section('nav')
		@include('site.partials.nav-top-min')
		<!-- <h1>NAV</h1> -->
		@show

		
		<!-- Container -->
		<div class="container-fluid">



			<div class="contentwrap">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->
				<!-- Content -->
				@yield('content')
				@yield('main')
				<!-- ./ content -->
			</div>
			<!-- ./contentwrap -->
		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>

	</div>
	<!-- ./wrap -->

@section('footer')

<footer>
	<div class="container">
		<a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
</a>
<img src="{{asset('assets/img/php.png')}}" alt="PHP">
<img src="{{asset('assets/img/laravel.png')}}" alt="Laravel">
<img src="{{asset('assets/img/bootstrap-logo.png')}}" alt="Bootstrap">
		 <!-- <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew!</p> -->
		<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Beta</a></span>
	</div>
	<!-- container -->
</footer>
<!-- ./footer -->
@show

@section('hotel')
<a href="/responsive">
	<div class="hotel hotelb">
		<!-- <div style="color:black; padding-bottom:50px;">resize me</div> -->
		<div class="hotel pull-right">
			<div class="visible-phone">
				
				<i class="icon-mobile-phone icon-4x"></i>
			</div>
			<div class="visible-tablet">
				<i class="icon-tablet icon-4x"></i>
			</div>
			<div class="visible-desktop">
				<i class="icon-desktop icon-4x"></i>
			</div>
		</div>
	</div>
</a>
@show

		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
        <!-- holder.js -->
		<script src="{{asset('assets/js/holder.js')}}"></script>
		
		<!-- https://github.com/mindmup/bootstrap-wysiwyg/ -->
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
                    // $('.page-header').css('margin-top',($("#navbar").height()));
                    // alert('jQuery is loaded');
                    $(document).ready(function(){
                        // alert('jQuery loaded');
						$('.carousel-inner > .item:first').addClass('active');
						// $('.hero-unit').css('background-color','red');

                        $('#side-wrapper').height($("#sidebar").height());
                        
                        // $(".nav").height()+2));
                        $('.collapse-group .btn').on('click', function(e) {
                            e.preventDefault();
                            var $this = $(this);
                            var $collapse = $this.closest('.collapse-group').find('.collapse');
                            $collapse.collapse('toggle');
                        });

                        $('.wysihtml5').wysihtml5();
                        // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
                        // $('.thumbnail').equalHeights();


                    });
                }
            }

        </script>
</body>
</html>
