@extends('site.layouts.default')
@section('content')


<style>

	.jumbotron{
		/*font-family: font-awesome;*/
	}
	.thumbnail {
		/*color: white;*/
		/*background-color: #4C58AD;*/
		/*background-opacity:50%;*/
		font-family: font-awesome;
		margin:10px;
		border-radius: 30px;
	    /*background-color: #cccccc;*/
	    box-shadow: 10px 10px 5px #666666;
	    padding: 15px;

	}

.thumbnail{
  border-width: 5px;
  /*border-color: #4C58AD;*/
}


</style>

<div class="jumbotron masthead">

	<!-- <div class="span1">&copy; Ryan Grissinger 
		<img src="http://lorempixel.com/400/200/nature.png" alt="thinker.png"></div> -->

	<h1>Tools<small> building blocks for this site include:</small></h1>
	<img src="http://gristech.com/img/mini-tools.jpg" alt="">
	<!-- <h2>PS: Help Wanted!</h2> -->
<h5><em>Modular, Extensible, Testable, Expressive, Elegant, Simple Codebase</em>
</h5>
</div>

<div class="row">
<a href="https://groups.google.com/forum/?fromgroups#!topic/twitter-bootstrap/hCUy_n1Mkks
	">BOOM</a>
	      		<div class="span1 thumbnail">
	      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
	      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
					<h5>PHP</h5></a>
					<h6>Web Application Language</h6>
					<p>Why PHP?</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<a href="http://laravel.com">
	      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
					<h5>Laravel</h5>
					</a>
					<h6>PHP Framework</h6>
					<ul>
						<li>Eloquent ORM</li>
						<li>Artisan CLI</li>
						<li>Polymorphic Relations</li>
						<li>Eager Loading</li>
					</ul>
					<p>The best thing since sliced bread.</p>
					<a href="http://laravel.com/docs/requests#old-input">http://laravel.com/docs/requests#old-input</a>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<a href="http://twitter.github.io/bootstrap/scaffolding.html#responsive">
	      			<img src="http://gristech.com/img/logo/twitter-bootstrap.jpg" alt="laravel rocks">
					<h5>Bootstrap</h5>
					</a>
					<h6>Front-End Framework (Light, Responsive CSS & Javascript)</h6>
					<p>Allows rapid development</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<a href="http://linux.com">
	      			<img src="http://gristech.com/img/logo/linux.jpg" alt="linux">
					<h5>Linux</h5>
					</a>
					<h6>It's what runs the internet.</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>


	      		<div class="span2 thumbnail">
	      			<a href="http://http://www.siteground.com/">
	      			<img src="http://gristech.com/img/screen/siteground2.png" alt="laravel rocks">
	      			<a href="http://www.siteground.com" onClick="this.href='http://www.siteground.com/index.htm?afbannercode=090922b4e36a794ded5eb252b703ad39'" ><img src="https://ua.siteground.com/img/banners/general/blue/120x600.gif" alt="Web Hosting" width="120" height="600" border="0"></a>
					<h5>Siteground</h5>
					</a>
					<h6>Webhost</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span2 thumbnail">
	      			<a href="http://http://www.lorempixum.com/">
	      			<img src="http://www.lorempixum.com/g/150/100" alt="laravel rocks">
					<h5>Free Images</h5>
					</a>
					<h6>Awesome</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

	      		<div class="span3 thumbnail">
	      			<a href="http://http://www.sublimetext.com/">
	      			<img src="http://www.lorempixum.com/g/150/100" alt="laravel rocks">
					<h5>Free Images</h5>
					</a>
					<h6>Awesome</h6>
					<p>The best thing since sliced bread.</p>
	      		</div>

				<div class="span6">
<!-- 				<img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->
				<!-- Default -->  
			<!-- <img src="http://www.lorempixum.com/400/100" alt="" />   -->
			  
			<!-- Black and White -->  
			<!-- <img src="http://www.lorempixum.com/g/400/100" alt="" />   -->
			  
			<!-- Tagged -->  
			<!-- <img src="http://www.lorempixum.com/g/400/100/nature" alt="" /> -->
				</div>
</div>

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
		
@stop