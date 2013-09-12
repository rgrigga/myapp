@extends('site.layouts.bs3')


@section('content')

<h1>DEPRECIATED</h1>
try site/pages/tools
<!-- http://css-tricks.com/snippets/css/prevent-long-urls-from-breaking-out-of-container/ -->

<style>

	.jumbotron{
		font-family: font-awesome;
	}
	/*.golf {*/
		/*color: white;*/
		/*background-color: #4C58AD;*/
		/*background-opacity:50%;*/
		/*font-family: font-awesome;*/
		/*margin:10px;*/
		/*border-radius: 30px;*/
	    /*background-color: #cccccc;*/
	    /*box-shadow: 10px 10px 5px #666666;*/
	    /*padding: 0px;*/
	    /*border-width: 0px;*/
  		/*border-color: #4C58AD;*/
	/*}*/

</style>

<div class="jumbotron">

	<h1>Do you know about this stuff?<small> If you do, I would really like to talk to you.</small></h1>
	<!-- <h2>blah</h2> -->
	<img src="http://gristech.com/img/mini-tools.jpg" alt="">
	<!-- <p>If you're interested...</p> -->
	<h5><em><a href="http://stackoverflow.com/questions/3088/best-ways-to-teach-a-beginner-to-program">Reading List</a></em>
	</h5>

</div>
<!-- jumbotron -->

<section>
	<p class="lead">If you <strong>don't</strong></p> know anything about these things, but are willing to learn, I can and would enjoy helping you.</p>
	<p>If you do know about these things, I have 1001 questions for you, and I would appreciate your input in any way you see fit.  Perhaps leave a comment anywhere on this site, or send me a message however is best for you: .</p>
	<p>Either way, if you've made it to this page, I would enjoy hearing from you.  We all need human interaction: hopefully this place will become a good place to talk about code.</p>
</section>

<style>

.delta img{
	width: 100%;
}
.delta { 
	margin-top: 20px;
   position: relative; 
   /*width: 100%;  for IE 6 */
   /*background-color: blue;*/
       background-color: #cccccc;
    box-shadow: 10px 10px 5px #666666;
}

.delta h1, h4{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   /*width: 100%; */
}


.delta h4 span { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.delta p { 

}

.delta h1 span {
	color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}
.kilo p{ 
   position: absolute; 
   /*top: 50px; */
   /*left: 0; */
   /*width: 100%; */

	top: 30%;
	left: 10%;

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

.foxtrot{
	background-color: #666666;
}

p.photocredit {
	font-style: italic;
	font-size: small;
	color: #333333;
	text-align: right;
	/*max-width: 80%;*/
	word-wrap:break-word;
}

/*// http://nicolasgallagher.com/pure-css-speech-bubbles/*/
/* Bubble with an isoceles triangle
------------------------------------------ */

.triangle-isosceles {
   position:relative;
   padding:15px;
   margin:1em 0 3em;
   color:#000;
   background:#f3961c;

   /* css3 */
   -moz-border-radius:10px;
   -webkit-border-radius:10px;
   border-radius:10px;
   background:-moz-linear-gradient(top, #f9d835, #f3961c);
   background:linear-gradient(top, #f9d835, #f3961c);
}

/* creates triangle */
.triangle-isosceles:after {
   content:"";
   display:block; /* reduce the damage in FF3.0 */
   position:absolute;
   bottom:-15px;
   left:50px;
   width:0;
   border-width:15px 15px 0;
   border-style:solid;
   border-color:#f3961c transparent;
}



/* END TRIANGLES */

/* ============================================================================================================================
== BUBBLE WITH AN OBTUSE TRIANGLE
** ============================================================================================================================ */

/* THE SPEECH BUBBLE
------------------------------------------------------------------------------------------------------------------------------- */

.triangle-obtuse {
	position:relative;
	padding:15px;
	margin:1em 0 3em;
	color:#fff;
	background:#c81e2b;
	/* css3 */
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#f04349), to(#c81e2b));
	background:-moz-linear-gradient(#f04349, #c81e2b);
	background:-o-linear-gradient(#f04349, #c81e2b);
	background:linear-gradient(#f04349, #c81e2b);
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
}

/* Variant : for top positioned triangle
------------------------------------------ */

.triangle-obtuse.top {
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#c81e2b), to(#f04349));
	background:-moz-linear-gradient(#c81e2b, #f04349);
	background:-o-linear-gradient(#c81e2b, #f04349);
	background:linear-gradient(#c81e2b, #f04349);
}

/* Variant : for left positioned triangle
------------------------------------------ */

.triangle-obtuse.left {
	margin-left:50px;
	background:#c81e2b;
}

/* Variant : for right positioned triangle
------------------------------------------ */

.triangle-obtuse.right {
	margin-right:50px;
	background:#c81e2b;
}

/* THE TRIANGLE
------------------------------------------------------------------------------------------------------------------------------- */

/* creates the wider right-angled triangle */
.triangle-obtuse:before {
	content:"";
	position:absolute;
	bottom:-20px; /* value = - border-top-width - border-bottom-width */
	left:60px; /* controls horizontal position */
	border:0;
	border-right-width:30px; /* vary this value to change the angle of the vertex */
	border-bottom-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :after */
	border-style:solid;
	border-color:transparent #c81e2b;
    /* reduce the damage in FF3.0 */
    display:block; 
    width:0;
}

/* creates the narrower right-angled triangle */
.triangle-obtuse:after {
	content:"";
	position:absolute;
	bottom:-20px; /* value = - border-top-width - border-bottom-width */
	left:80px; /* value = (:before's left) + (:before's border-right/left-width)  - (:after's border-right/left-width) */
	border:0;
	border-right-width:10px; /* vary this value to change the angle of the vertex */
	border-bottom-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :before */
	border-style:solid;
	border-color:transparent #fff;
    /* reduce the damage in FF3.0 */
    display:block; 
    width:0;
}

/* Variant : top
------------------------------------------ */

.triangle-obtuse.top:before {
	top:-20px; /* value = - border-top-width - border-bottom-width */
	bottom:auto;
	left:auto;
	right:60px; /* controls horizontal position */
	border:0;
	border-left-width:30px; /* vary this value to change the width of the triangle */
	border-top-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :after */
	border-color:transparent #c81e2b;
}

.triangle-obtuse.top:after {
	top:-20px; /* value = - border-top-width - border-bottom-width */
	bottom:auto;
	left:auto;
	right:80px; /* value = (:before's right) + (:before's border-right/left-width)  - (:after's border-right/left-width) */
	border-width:0;
	border-left-width:10px; /* vary this value to change the width of the triangle */
	border-top-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :before */
	border-color:transparent #fff;
}

/* Variant : left
------------------------------------------ */

.triangle-obtuse.left:before {
	top:15px; /* controls vertical position */
	bottom:auto;
	left:-50px; /* value = - border-left-width - border-right-width */
	border:0;
	border-bottom-width:30px; /* vary this value to change the height of the triangle */
	border-left-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :after */
	border-color:#c81e2b transparent;
}

.triangle-obtuse.left:after {
	top:35px; /* value = (:before's top) + (:before's border-top/bottom-width)  - (:after's border-top/bottom-width) */
	bottom:auto;
	left:-50px; /* value = - border-left-width - border-right-width */
	border:0;
	border-bottom-width:10px; /* vary this value to change the height of the triangle */
	border-left-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :before */
	border-color:#fff transparent;
}

/* Variant : right
------------------------------------------ */

.triangle-obtuse.right:before {
	top:15px; /* controls vertical position */
	bottom:auto;
    left:auto;
	right:-50px; /* value = - border-left-width - border-right-width */
	border:0;
	border-bottom-width:30px; /* vary this value to change the height of the triangle */
	border-right-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :after */
	border-color:#c81e2b transparent;
}

.triangle-obtuse.right:after {
	top:35px; /* value = (:before's top) + (:before's border-top/bottom-width)  - (:after's border-top/bottom-width) */
	bottom:auto;
	right:-50px; /* value = - border-left-width - border-right-width */
    left:auto;
	border:0;
	border-bottom-width:10px; /* vary this value to change the height of the triangle */
	border-right-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :before */
	border-color:#fff transparent;
}


/* ============================================================================================================================
== OVER THOUGHT BUBBLE, EMPTY, WITH BORDER (more CSS3)
** ============================================================================================================================ */

.oval-thought-border {
	position:relative; 
	padding:70px 30px;
	margin:1em auto 80px;
	border:10px solid #c81e2b; 
	text-align:center;
	color:#333; 
	background:#fff;
	/* css3 */
	/*
	NOTES:
	-webkit-border-radius:240px 140px; // produces oval in safari 4 and chrome 4
	-webkit-border-radius:240px / 140px; // produces oval in chrome 4 (again!) but not supported in safari 4
	Not correct application of the current spec, therefore, using longhand to avoid future problems with webkit corrects this
	*/
	-webkit-border-top-left-radius:240px 140px;
	-webkit-border-top-right-radius:240px 140px;
	-webkit-border-bottom-right-radius:240px 140px;
	-webkit-border-bottom-left-radius:240px 140px;
	-moz-border-radius:240px / 140px;
	border-radius:240px / 140px;
}

/* creates the larger circle */
.oval-thought-border:before {
	content:""; 
	position:absolute; 
	z-index:10; 
	bottom:-40px; 
	right:100px; 
	width:50px; 
	height:50px;
	border:10px solid #c81e2b;
	background:#fff;
	/* css3 */
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
    /* reduce the damage in FF3.0 */
    display:block; 
}

/* creates the smaller circle */
.oval-thought-border:after {
	content:""; 
	position:absolute; 
	z-index:10; 
	bottom:-60px; 
	right:50px; 
	width:25px; 
	height:25px; 
	border:10px solid #c81e2b;
	background:#fff;
	/* css3 */
	-webkit-border-radius:25px;
	-moz-border-radius:25px;
	border-radius:25px;
    /* reduce the damage in FF3.0 */
    display:block; 
}
</style>


<a href="https://github.com/lokesh/lightbox2#license">Lightbox License</a>


<div id="prettified">
	
<h3>Prettified Code Snippets</h3>
<h5>Javascript:</h5>
<pre class="prettyprint">
{{{'// javascript
<script type="text/javascript">
// Say hello world until the user starts questioning
// the meaningfulness of their existence.
function helloWorld(world) {
  for (var i = 42; --i >= 0;) {
    alert(\'Hello \' + String(world));
  }
}
</script>
<style>
p { color: pink }
b { color: blue }
u { color: "umber" }
</style>'}}}</pre>

<h5>PHP</h5>
<pre class="prettyprint">
<code class="language-php">{{e('<?php
	echo "foobar!";
	die("You\'ve been hacked!");
	class Foo extends Bar{
		__construct($baz){
			//code here
		}
		echo "bar";
	}')}}</code></pre>

<h5>CSS:</h5>
<pre class="prettyprint"><code class="lang-css">{{e('/* css */
/*http://stackoverflow.com/questions/5506258/horizontal-scroll-overflowing-html-lis-without-knowing-width*/
ul.tag li{
    display: inline-block;
    background-color: orange;
    padding: 5px;
    margin:2px;
}')}}</code></pre>

</div>


<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>


<pre>
Tango Icons
------------
In the preparation of the 0.8.90 release Novell took care of tracking
down all the contributors to get them to relicense their artwork
into Public Domain.

The COPYING file of the tarball states the following:
| The icons in this repository are herefore released into the Public Domain.

Additionally the copyright status of the files was tracked in the CVS and the rdf properties of the SVGs adjusted for all files that were put into Public Domain (see rdf:about and rdf:resource).  Both fields contain a link to the Creative Commons Public Domain Dediciation[0] as reproduced below:
</pre>


<div class="span4 thumbnail delta">
	<h3>Mysql</h3>
	<a href="http://www.thegeekstuff.com/2008/09/backup-and-restore-mysql-database-using-mysqldump/">Backup and Restore</a>

<pre class="prettyprint">
	<code class="lang-php">

	</code>
</pre>
<?
$code='foo';
?>
	<p>
		{{{$code}}}
		<code>
		    gristech@serv01 [~/myapp]# mysqldump -u gristech --all > ~/sqldump/dump.sql 
		</code>
		{{{$code}}}

		<a href="http://www.bootstrapcdn.com/">http://www.bootstrapcdn.com/</a>
	</p>


	<p>
		{{e('<pre>')}}
		<pre class="prettyprint">
		    gristech@serv01 [~/myapp]# mysqldump -u gristech --all > ~/sqldump/dump.sql 
		</pre>
		{{e('</code>')}}
	</p>


	<p>The difference between code and pre tags.</p>
	<p>It is also a good example of google prettify.</p>
</div>

{{e('foobar')}}

<div class="span4">
	<a href="http://www.cssdrive.com/imagepalette/index.php">Convert Image to Color Pallete</a>

<img src="http://gristech.com/img/" alt="">
</div>

<div class="row-fluid">
	<div class="span6">
		<h2>The right tool for the job...</h2>
		<p class="HL">There are many things that might be </p>
		<ul>
			<li>Web Application Development</li>
			<li>Web Design</li>
		</ul>
			
		</p>
		<p>
			Every carpenter knows that there is nothing more time-saving than using the 
			right tool for the job.  It's faster, and your project turns out to be of better-quality,
			as compared to endless workarounds, trying to make a given tool do something it wasn't built to do.
			<!-- A web developer, web designer -->
		</p>
		<p>Each tool builds upon another: The collective end-product is the result of tens of thousands of hours of community effort.</p>

		<p>There are 2 types of workers:</p>
		<ol>
			<li>Web Designers</li>
			<li>Web Developers</li>
		</ol>
		<p>Designers work on the front end with, well, the design of a site.  
			Their tools include Javascript, CSS, HTML, and other content-related things.  
			The primary concern for the designer is the View.  Layout/Design makes the presentation look pretty.  I have some knowledge of design, and I enjoy studying it and practicing it.</p>
		<p>Developers work with the innards of the application: the back-end, behind-the-scenes, so to speak.  The main 
			concern is the <em>architechture</em> of the application.  Developer tools include the wonderful Laravel Framework. PHP, Frameworks, and Databases.
			Designers work in code: Controllers, Models, and an assembly of other tools.
			Perhaps the most important resource of all is other deveopers.  Thank you!
		</p>
	</div>
	<div class="span3 thumbnail">
		<img src="http://gristech.com/img/thinker.png" alt="think about it">

		<a href="http://nicolasgallagher.com/pure-css-speech-bubbles/demo/">Speech Bubble</a>
	</div>
	<div class="span3 triangle-obtuse">
		<p>Lorem ipsum <div class="HL">Lorem ipsum dolor.</div>dolor sit amet, consectetur adipisicing elit. Cumque, labore.</p>
		

	</div>
	<div class="span2 oval-thought-border">Lorem ipsum dolor sit amet.</div>

<a href="http://scottchacon.com/talks.html">Git Talks</a>
	<p><a href="https://crackstation.net/hashing-security.htm">https://crackstation.net/hashing-security.htm</a></p>

</div>
<h3>Search Laravel Docs:</h3>
<script>
  (function() {
    var cx = '012277204628171564007:sik_hha9myk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>

<div class="row-fluid">

	      		<!-- http://davidwalsh.name/css-circles -->

				<div class="span10">

		      		<div class="span3 thumbnail delta">
		      			<a href="http://laravel.com">
		      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
						<h4>
							<span>Laravel</span>
						</h4>
						</a>
						<h2>PHP Framework</h2>
						<p>Laravel is an implementation of PHP.  
							
							  I think of a framework as doing for programming what an assembly
							   line does for manufacturing.
							     A framework has tons of functionality built into it.  It makes for
							     more correct solutions to given probelm. Think: "standardization of parts."</p>
						
						<h5>A Few Features</h5>
						<ul>
							<li>Eloquent ORM</li>
							<li>Artisan CLI</li>
							<li>Polymorphic Relations</li>
							<li>Eager Loading</li>
							<li><a href="http://vschart.com/compare/laravel/vs/ruby-on-rails">Laravel vs. Rails</a></li>
							<li><a href="http://laravel.com/docs/requests#old-input">Old Input</a>
</li>
						</ul>
						<!-- <p>The best thing since sliced bread.</p> -->

						<h5>Some Fancy links</h5>
						<ul>
							<li><a href="http://laravel.io/">Laravel IO</a></li>
							<li><a href="http://reviewtechgame.blogspot.com/2013/04/laravel-4-elegant-php-framework-for-web.html">Recent Review of Laravel</a>
						</li>
						</ul>
						
						

		      		</div>
					
					<div class="span4 thumbnail delta">
		      			<a href="http://OAuth2.0">
		      			<img src="http://gristech.com/img/logo/twitter-bootstrap.jpg" alt="laravel rocks">
						<h5><span>OAuth</span></h5>
						</a>
						<h6>Security</h6>
						<p>Supported by many APIs</p>
		      		</div>
					

		      		<div class="span4 thumbnail delta">
		      			<a href="http://twitter.github.io/bootstrap/scaffolding.html#responsive">
		      			<img src="http://gristech.com/img/logo/twitter-bootstrap.jpg" alt="laravel rocks">
						<h5><span>Bootstrap</span></h5>
						</a>
						<h6>Front-End Framework (Light, Responsive CSS & Javascript)</h6>
						<p>Allows rapid development</p>
		      		</div>

		      		<div class="span2 thumbnail delta">
		      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
			      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
							<h5>PHP</h5>
						</a>
						<h6>Web Application Language</h6>
						<p>Why PHP?</p>
						<p>Why use .png or .svg vs. .jpg?</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://www.shamusyoung.com/twentysidedtale/?p=18309">
		      			<img src="http://gristech.com/img/penguins.jpg" alt="linux">
						<h4><span>Linux</span></h4>
						</a>
						<p class="photocredit"><a href="http://www.flickr.com/photos/linpadgham/2589167851/">photo &copy; flickr</a></p>
						<h6>It's what runs the internet.</h6>
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://opensource.org/">
		      			<img src="http://gristech.com/img/logo/osi_standard_logo.png" alt="open source">
						<h4><span>Open Source</span></h4>
						</a>
						<p class="photocredit"><a href="http://opensource.org/">logo &copy; opensource.org</a></p>
						<h6>Free (as in freedom)</h6>
						<h6>Free (as in free beer)</h6>
						<h6><a href="http://opensource.org/licenses/MIT">MIT License</a></h6>
						<p>The best thing since sliced bread.</p>
						<p>Read about <a href="{{{ URL::to('security') }}}">Security</a> </p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://lorempixum.com/">
		      			<img src="http://lorempixum.com/g/350/200/city" alt="lorempixum">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li><a href="http://clipartist.info/RSS/openclipart.org/2011/May/29-Sunday/lawn_mower.svg.html">Open Clip Art Library</a>
							</li>
							<li>lorempixum</li>
							<li><a href="http://www.flickr.com/creativecommons/">flickr</a></li>
							<li><a href="http://www.kozzi.com/?ref=146452">Kozzi</a></li>
							<li><a href="http://www.deviantart.com/"></a>deviantart</li>
							<li><a href="http://search.creativecommons.org/">Creative Commons</a></li>
							<li><a href="http://pixabay.com/en/rome-italy-fontana-statue-statues-107889/">pixabay</a></li>
							<li><a href="http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html">About copyrighting</a></li>
							<li><a href="http://www.colorpicker.com/">ColorPicker</a></li>
							<li><a href="http://thenounproject.com/">THe Noun Project</a></li>
							<li><a href="http://colorschemedesigner.com/#4r42Ew0w0w0w0">Color Scheme Designer</a></li>
						</ul>

						<!-- http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html -->
		      		</div>



		      		<div class="span4 thumbnail delta">
		      			<a href="http://www.sublimetext.com/">
		      			<img src="http://www.gristech.com/img/screen/sublime.png" alt="Sublime Text">
						<h4><span>Sublime Text</span></h4>
						</a>
						<h6>Text Editor/IDE</h6>
						<a href="http://www.chromium.org/developers/sublime-text">http://www.chromium.org/developers/sublime-text</a>
						<p>You can use it for free for a while, but DBAD.</p>
						<h5>$70</h5>
						<p>You also need the <a href="http://wbond.net/sublime_packages/sftp">SFTP Plugin for Sublime.</a> $16.</p>

		      		</div>

		      		<div class="span4 thumbnail delta">
		      			<a href="https://www.facebook.com/">
		      			<img src="http://www.gristech.com/img/screen/facebook.png" alt="facebook">
						<h4><span>Facebook</span></h4>
						</a>
						<h6>The Social Network</h6>
						<p>Like it!.</p>
						<h5>$free</h5>
						<!-- <p>You also need <a href="http://wbond.net/sublime_packages/sftp">SFTP</a> $16.</p> -->

		      		</div>

		      		<div class="span4 thumbnail delta">
		      			<a href="http://www.inkscape.com/">
		      			<img src="http://www.gristech.com/img/screen/inkscape.png" alt="Inkscape">
						<h4><span>Inkscape</span></h4>
						</a>
						<h6>Vector Images</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li><a href="http://inkscapetutorials.wordpress.com/">tutorials</a></li>
							<li><a href="">Download</a></li>
						</ul>
		      		</div>

		      		<div class="span4 thumbnail delta">
		      			<a href="http://fortawesome.github.io/Font-Awesome/">
		      			<img src="http://www.gristech.com/img/screen/font-awesome.png" alt="Sublime Text">
						<!-- <h4><span><i class="icon-font-awesome"></i>Font Awesome</span></h4> -->
						</a>
						<h6>It's Awesome (seriously!)</h6>
						<p>Version 3.2.0 - 6/13/2013</p>
						<ul>
							<li><i class="icon-beer"></i> Free! <a href="http://opensource.org/licenses/mit-license.html"> MIT License</a></li>
						</ul>
						<i class="icon-android"></i>
						<i class="icon-thumbs-up"></i>
						<i class="icon-file"></i>
						<i class="icon-comments-alt"></i>
						<p>The best thing since sliced bread.</p>
		      		</div>
					

		      		<div class="span4 thumbnail delta">
		      			<a href="http://javascript.com/">
		      			<img src="http://www.gristech.com/img/screen/javascript.png" alt="Bootswatch">
						<!-- <h4><span><i class="icon-arrow-right"></i>Javascript</span></h4> -->
						</a>
						<h6>About Javascript:</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i>Free: MIT License</a></li>
						</ul> -->
						<p>I think it is best to have as little javascript as possible.  
							I beleive in this 
							because the long-term maintenance is likely to be considerably higher... 
							I also think it is less likely 
							to be as extensible.  I'm not saying <a href="">javascript is dead</a>,
							 I am just saying 
							that the web app solution is more flexible.  PHP is server-side technology.
							  The world runs on servers.  I have dealt with and been the victim of weak client-side 
							  crap, it's rediculous.  Not to mention that we have Client
							It's not scripting: it's object oriented resource management.
							It's fully decoupled, modular system of many bits of heavily tested and 
							code.</p>

							
		      		</div>

		      		<div class="span4 thumbnail delta">
		      			<a href="http://bootswatch.com/">
		      			<img src="http://www.gristech.com/img/screen/bootswatch.png" alt="Bootswatch">
						<h4><span></i>Bootswatch</span></h4>
						</a>
						<h6>It's Awesome</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i>Free: MIT License</a></li>
						</ul> -->
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span4 thumbnail delta">
		      			<a href="http://google.com/docs">
		      			<a href=""></a>

		      			<img src="http://gristech.com/img/screen/googledocs.png" alt="Google Docs">
						<h4><span><i class="icon-file"></i>Google-Docs</span></h4>
						</a>
						<h6>It's Awesome</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i>Free: MIT License</a></li>
						</ul> -->
						<p>$5 per user per month</p>
		      		</div>
				</div>

				
				<!-- ./ span10 -->

				<!-- sidebar -->
	      		<div class="span2 pull-right text-center foxtrot">
	      			<!-- <a href="http://http://www.siteground.com/"> -->

					<h3>Siteground</h3>
					</a>
					<h6>Webhost</h6>
					<p>The best thing since sliced bread.</p>
	      			
	      			<div class="text-center">
	      			<a href="http://www.siteground.com" onClick="this.href='http://www.siteground.com/index.htm?afbannercode=090922b4e36a794ded5eb252b703ad39'" ><img  src="https://ua.siteground.com/img/banners/general/blue/120x600.gif" alt="Web Hosting" width="120" height="600" border="0"></a>
	      			</div>
	      		</div>
	




					  
					<!-- Black and White -->  
					<!-- <img src="http://www.lorempixum.com/g/400/100" alt="" />   -->
					  
					<!-- Tagged -->  
					<!-- <img src="http://www.lorempixum.com/g/400/100/nature" alt="" /> -->
		</div>

<div class="span12">
	<h3>some great things about Laravel</h3>
	<ul>
		<li>artisan</li>
		<li>Eloquent</li>
		<li>swiftmailer</li>
		<li>symfony components</li>
	</ul>
</div>

<div>
	<ul>
		<li>
			<a href="https://sites.google.com/a/webpagetest.org/docs/other-resources/optimization-resources">Webpage Speed Optimization</a>
		</li>
	</ul>
</div>

<div class="kilo delta">
<!-- 				<img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->

						<!-- Default -->  
	<!-- <div class="delta"> -->
	<img src="http://lorempixum.com/1680/1250/nature" alt="" />  
<!-- </div>				 -->
<h1><span>The New Colossus</span></h1>

<p><span>A random nature image</span></p>

</div>
<p></p>
<p><span>Not like the brazen giant of Greek fame,
With conquering limbs astride from land to land;
Here at our sea-washed, sunset gates shall stand
A mighty woman with a torch, whose flame
Is the imprisoned lightning, and her name
Mother of Exiles. From her beacon-hand
Glows world-wide welcome; her mild eyes command
The air-bridged harbor that twin cities frame.
"Keep, ancient lands, your storied pomp!" cries she
With silent lips. "Give me your tired, your poor,
Your huddled masses yearning to breathe free,
The wretched refuse of your teeming shore.
Send these, the homeless, tempest-tost to me,
I lift my lamp beside the golden door!"</span></p>
<!-- <div class="jumbotron masthead">
  <div class="container-fluid">
    <h1>Jumbotron Masthead</h1>
    <p>Not very responsive.</p>
    <p>
      <a href="assets/bootstrap.zip" class="btn btn-primary btn-large" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 2.3.2']);">Download Bootstrap</a>
    </p>
    <ul class="masthead-links">
      <li>
        <a href="http://github.com/twitter/bootstrap" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'GitHub project']);">GitHub project</a>
      </li>
      <li>
        <a href="./getting-started.html#examples" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'Examples']);">Examples</a>
      </li>
      <li>
        <a href="./extend.html" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'Extend']);">Extend</a>
      </li>
      <li>
        Version 2.3.2
      </li>
    </ul>
  </div>
</div> -->


<!-- 	<div class="jumbotron masthead">

		<a href="https://groups.google.com/forum/?fromgroups#!topic/twitter-bootstrap/hCUy_n1Mkks
		"><em>Jumbotron Masthead</em></a>

		<div class="span1">&copy; Ryan Grissinger 
			<img src="http://lorempixel.com/400/200/nature.png" alt="thinker.png"></div>

		<h1>Partners<small> This building blocks for this site include:</small></h1>
		<img src="http://gristech.com/img/mini-tools.jpg" alt="">
		 <h2>PS: Help Wanted!</h2>

	</div> -->
<div>
	<p>
		By the way, this page is an example of a fluid grid system

	</p>
	<blockquote>"I would never use beta code in a production environment.
								They must not use Facebook or Google.  Both publish beta code.  The difference between beta and production is 
								not that the .  Frankly I think it feels sort of arrogant to declare that the project is stable and complete.
								  That may be fine for small projects, but the rule should not apply to large, complex projects.
								  A major release is one thing.  

								  Packagist and Composer take care of dependancies.  Git takes care of version control.
								  Sublime SFTP automatically uploads over SFTP."</blockquote>


</div>



		
@stop