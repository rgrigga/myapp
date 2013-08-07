<!DOCTYPE html>
<html lang="en">
<!--
If you like this, you really should check out the source code on 
------------------------------------------------------------------------
-------GITHUB--github.com/rgrigga/myapp---------------------------------
------------------------------------------------------------------------
-------ryan.grissinger@gmail.com-------------------------------------
---------- @ryangrissinger--------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------
-------Thanks, I hope you enjoy.-------------------------------------
------------------------------------------------------------------------
-->

<!-- 
If you have no idea what git is, it's like time travel for a computer program.  

1.21 giga-bytes! 

Git is a version control system that allows you make changes to a program, but you can hit the rewind button.

You can also move back and forth in time, but not just for the entire project: you can rewind or pause any module or piece of code, right down to an individual line.

Then you can move back and forth.  You can also switch branches.  It's kind of like Back the Future: Marty and Doc started at the ORIGIN.  Then they went back to a 
//hashmark (create new BRANCH and CHECKOUT that.)
point in the past, and then began making changes which threatened to destroy the space-time continuuum.  


They move forward in time, make changes, 

Wait a minute... that's their story.

If you know what git is, but are just learning, I have documented everything you need to know to get started: How to connect, set up your machine, and so on.  Just contact me and I'll help you.

python gives me bad first impression-
http://docs.python.org/2/howto/webservers.html
it is not easy or simple to understand this page.

PROGRAMMERS: Demonstrate your abilities: this is a community demo site.

<!-   Just look at all these fabulous resources: -->
<!-- http://www.opensourcecms.com/ -->
<!-- Want more?  Check out /tools ('myapp/tools')-->

<!-- Our Competition/Partners: -->
<!-- http://myappinc.com/ -->

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
			background-color: rgba(50,89,20,.05);
		}




/*		.page-header{
			margin-top: 60px;
		}*/
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
		<style>

			/*http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site*/

				.contentwrap{
					padding-top: 0px;
					}

				@media screen and (max-width: 979px) {
				    .contentwrap { padding-top: 20px; }
					.span50{
						width: 50%;
					}
				}


			
			</style>
		@show

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css"> -->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/wysihtml5/bootstrap-wysihtml5.css">

<!-- <link rel="stylesheet" href="/assets/css/admin-style.css"> -->
<!-- <link rel="stylesheet" href="{{asset('assets/js/redactor/redactor.css')}}" /> -->
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
		<!-- <link rel="stylesheet" href="{{asset('assets/js/redactor/redactor.css')}}" /> -->

		<script>
		//this must be loaded before it is called in the body.
		    
			// $('img').error(function(){
			//     $(this).attr('src', 'http://placehold.it/300x300');
			// });

		    function imgError(image,w,h){
		    	w=w||300;
		    	h=h||300;
		        image.onerror = "";
		        //could not get this to work with holder.js
		        image.src = "http://placehold.it/"+w+"x"+h;
		        return true;
		        // onerror="imgError(this,800,600);"
		    }
		</script>

    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <!-- <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->

<!-- <script src="/assets/js/bootstrap-wysiwyg/external/jquery.hotkeys.js"></script> -->
<!-- <script src="/assets/js/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script> -->
<link href="/assets/js/bootstrap-wysiwyg/index.css" rel="stylesheet">
	</head>

	<body>

<div class="wrap">
		<!-- Container -->
		<div class="container">
			<!-- Navbar -->
			<!-- admin.nav is a navbar-inner.  wrap it in a navbar -->
			<!-- so should other navbars maybe -->
			@section('nav')
			<div class="navbar navbar-inverse navbar-fixed-top admin-top">
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
				<h1>{{$company->brand}}</h1>
				<img src="{{asset('assets/'.strtolower($company->brand).'/'.$company->image)}}" alt="Company Logo">
				<h1>{{{(isset($post) ? $post->id : "")}}}</h1>
			</div>
			@show


			<div class="contentwrap">
				@include('notifications')
			    @if(Session::has('message'))

				    <div class="flash alert">
				      <button type="button" class="close" data-dismiss="alert">&times;</button>
				      <p>{{ Session::get('message') }}</p>
				    </div>
			    @endif

			    @if(Session::has('mymessage'))

				    <div class="flash alert alert-info">
				      <button type="button" class="close" data-dismiss="alert">&times;</button>
				      <p>{{ Session::get('mymessage') }}</p>
				    </div>

			    @endif
					<!-- Content -->
					@yield('main')
						<!-- ./ content -->
			</div>
			<footer>		<!-- ./ container -->
			@section('footer')
			Footer!
foobar
algorithm to count words

<pre class="prettyprint">

Use a combination of str_word_count() and array_count_values():

$str = 'happy beautiful happy lines pear gin happy lines rock happy lines pear ';
$words = array_count_values(str_word_count($str, 1));
print_r($words);
gives

Array
(
    [happy] => 4
    [beautiful] => 1
    [lines] => 3
    [pear] => 2
    [gin] => 1
    [rock] => 1
)
The 1 in str_word_count() makes the function return an array of all the found words.

To sort the entries, use arsort() (it preserves keys):

arsort($words);
print_r($words);

Array
(
    [happy] => 4
    [lines] => 3
    [pear] => 2
    [rock] => 1
    [gin] => 1
    [beautiful] => 1
)

<!-- http://stackoverflow.com/questions/2984786/php-sort-and-count-instances-of-words-in-a-given-string -->

<!-- every n time, i cache my results, publish them to CDN, and the apps communicate with the CDN. This can be done with static data, or updated upon update of the table, and/or upon request. -->
</pre>

<a href="http://blog.marketo.com/blog/2013/06/7-tips-for-effective-marketing-with-twitter-lead-generation-cards.html">Twitter Lead Generation</a>

			@show
			</footer>
					<!-- Javascripts
					================================================== -->
{{ Basset::show('admin-js.js') }}
{{ Basset::show('public.js') }}
<!-- ALL ABOUT REDACTOR -->
<!-- to reimplement redactor, uncomment the lower script tag, the upper css, and the redactor funciton in the onload event. -->
<!-- <script src="{{asset('assets/js/redactor/redactor.js')}}"></script> -->

<!-- holder.js -->
<script src="{{asset('assets/js/holder.js')}}"></script>
<!-- redactor -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script> -->



			 <script type="text/javascript" charset="utf-8">
			 //this failed for some reason...
			    // $(prettyPrint);
			</script>

<!-- NO SKIN -->
<!-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=sunburst"></script> -->

<!-- NO SKIN -->
<!-- This takes waaaaayy longer to load WITH A SKIN *and* over the network... localize the css for speed, I think??? -->
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

<script language="javascript" type="text/javascript" src="{{asset('assets/js/jquery.equalheights.js')}}"></script>

<!-- $('#editor').wysiwyg(); -->
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
		
		// Dom Ready
		// You might also want to wait until window.onload if images are the things that are unequalizing the blocks
		// $(function() {
		// 	// columnConform();
		// });
		
	</script>

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

                }
            }


	    $(document).ready(function(){
			
			// $('#editor').wysiwyg();

	        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
	        $('.contentwrap') .css({'padding-top': (
	            $('.user-top').height()
	             + $('.admin-top').height()
	             + 0 )+'px'
	        	});
			// $('.redactor').redactor();
			// $('.redactor').wysiwyg();
			// $('#meta-description').wysihtml5();
			// $('.editor').wysihtml5();
			$('.wysihtml5').wysihtml5();
			// $('#editor').wysiwyg();
			
			columnConform();
		});
	    
	    $(window).resize(function(){
	        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
	        $('.contentwrap') .css({'padding-top': (
	            $('.user-top').height()
	             + $('.admin-top').height()
	             + 0 )+'px'
	        });
	        columnConform();

	    });
			
        </script>

		<script type="text/javascript">
		// $(function()
		// {
		//     $('#redactor_content').redactor({
		//         air: true
		//     });
		// });
		</script>
        <!-- out of use -->
		<script type="text/javascript">
		// $(function() {
		// 	$('#redactor_content').redactor();
		// });
		</script>
		<script type="text/javascript">
		// $(function() {
		// 	$('.redactor').redactor();
		// });
		</script>
	</body>
</html>
