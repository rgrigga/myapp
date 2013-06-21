@extends('site.layouts.default')
@section('content')


<style>

	/*.jumbotron{*/
		/*font-family: font-awesome;*/
	/*}*/
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

<div class="jumbotron masthead">


	<h1>Tools<small> building blocks for this site include:</small></h1>
	<img src="http://gristech.com/img/mini-tools.jpg" alt="">
	<h5><em>Modular, Extensible, Testable, Expressive, Elegant, Simple Codebase</em>
	</h5>
</div>
<!-- jumbotron -->


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
.kilo p{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   /*width: 100%; */
}

.kilo p{
	top: 30%;
	left: 10%;
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

</style>



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
						<ul>
							<li>Eloquent ORM</li>
							<li>Artisan CLI</li>
							<li>Polymorphic Relations</li>
							<li>Eager Loading</li>
						</ul>
						<p>The best thing since sliced bread.</p>
						<a href="http://laravel.com/docs/requests#old-input">http://laravel.com/docs/requests#old-input</a>
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
						<h5>PHP</h5></a>
						<h6>Web Application Language</h6>
						<p>Why PHP?</p>
						<p>Why use .png or .svg vs. .jpg?</p>
		      		</div>

		      		<div class="span1 thumbnail delta">
		      			<a href="http://linux.com">
		      			<img src="http://gristech.com/img/logo/linux.jpg" alt="linux">
						<h4><span>Linux</span></h4>
						</a>
						<h6>It's what runs the internet.</h6>
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://http://www.lorempixum.com/">
		      			<img src="http://www.lorempixum.com/g/150/100" alt="laravel rocks">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span4 thumbnail delta">
		      			<a href="http://http://www.sublimetext.com/">
		      			<img src="http://www.lorempixum.com/g/250/100" alt="laravel rocks">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
		      		</div>
				</div>
				<!-- ./ span10 -->

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





<div class="kilo delta">
<!-- 				<img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->

						<!-- Default -->  
	<!-- <div class="delta"> -->
	<img src="http://www.lorempixum.com/1680/1250/nature" alt="" />  
<!-- </div>				 -->
<h1><span>The New Colossus</span></h1>

<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, nostrum, ex dolore omnis ad velit beatae nemo ducimus facilis quis numquam quibusdam dicta facere blanditiis id. Hic, ipsam, tempore blanditiis magni facilis laborum earum at nesciunt voluptatibus labore sunt saepe cumque assumenda optio excepturi aliquam esse rem recusandae sequi repudiandae dolor quasi dicta praesentium aperiam est nemo molestias. Odio, laudantium, fugiat, consequuntur dolorum dignissimos sed ut rerum quibusdam eius perferendis repudiandae blanditiis ipsum consequatur hic explicabo voluptas neque ipsam adipisci. Voluptate, ducimus, quaerat est ratione tempore et aliquid magnam soluta quos nulla cumque harum odio obcaecati ex excepturi enim amet laudantium ipsum accusamus earum exercitationem deleniti quo. Sapiente, laborum culpa beatae libero possimus vel eius rem dolores illum quia! Pariatur, ipsa inventore magnam ratione quae est placeat qui eos consequatur rem id laborum non maxime beatae eveniet ducimus in officiis dignissimos provident quidem! Autem, minus ut error fugiat ad. Velit, qui, voluptatibus, nam consequatur voluptates laboriosam sed ad quidem laborum beatae nisi similique culpa autem quod rem nesciunt est dolores eos doloremque aliquam voluptate magnam repellendus amet maxime ipsam doloribus nemo accusantium voluptatum praesentium quae error repellat voluptas voluptatem suscipit repudiandae rerum perferendis. Suscipit, eius quaerat laborum amet ut debitis!</span></p>

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
<div>
	<p>
		By the way, this page is an example of a fluid grid system

	</p>
</div>



		
@stop