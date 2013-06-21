@extends('site.layouts.default')
@section('content')

<!-- http://css-tricks.com/snippets/css/prevent-long-urls-from-breaking-out-of-container/ -->

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


	<h1>Notes<small> where I cut and paste stuff</small></h1>
	<!-- <h2>blah</h2> -->
	<img src="http://gristech.com/img/notes.jpg" alt="">
	<!-- <p>If you're interested...</p> -->
	<!-- <h5><em>Modular, Extensible, Testable, Expressive, Elegant, Simple</em> -->
	

</div>
<p class="muted credit">Image from <a href="http://www.flickr.com/photos/anotherphotograph/4548643188/">Flikr</a></p>
<!-- jumbotron -->


<style>

.jumbotron{


  margin-right: -20px;
  margin-left: -20px;
  position: relative;
  padding: 40px 0;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 3px rgba(0,0,0,.4), 0 0 30px rgba(0,0,0,.075);
  background: #020031; /* Old browsers */
  background: -moz-linear-gradient(45deg, #020031 0%, #6d3353 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#020031), color-stop(100%,#6d3353)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(45deg, #020031 0%,#6d3353 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(45deg, #020031 0%,#6d3353 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(45deg, #020031 0%,#6d3353 100%); /* IE10+ */
  background: linear-gradient(45deg, #aa3311 0%,rgb(53,7,4) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#020031', endColorstr='#6d3353',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
     -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
          box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
}


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

p.photocredit {
	font-style: italic;
	font-size: small;
	color: #333333;
	text-align: right;
	/*max-width: 80%;*/
	word-wrap:break-word;
}
</style>
<div class="span2 pull-right text-center foxtrot">
	      			<!-- <a href="http://http://www.siteground.com/"> -->

					<h3>Sidebar</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, repellat, provident, nobis sint consectetur eveniet deserunt dolor reiciendis autem id asperiores quo nam expedita incidunt temporibus repellendus excepturi itaque suscipit atque eos accusantium dolorum voluptatum aperiam! Magni, cumque, illum quasi voluptatibus cupiditate optio accusantium eligendi saepe culpa doloremque ad veritatis cum neque provident ea similique ab quas quae maxime iure! Perspiciatis, laborum, dolorem, cumque repellat maxime id ratione qui necessitatibus magni ab unde amet doloremque quis totam provident molestias vero adipisci repudiandae odio facere fuga autem reiciendis at rem eos! Vel, ducimus corporis voluptate tempora possimus est accusamus fugit cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, maiores, minus fugiat pariatur nulla neque omnis laboriosam nesciunt aperiam error mollitia excepturi aliquid repudiandae quibusdam enim consequatur sunt ducimus porro.	</p>
	      		</div>




<ul class="thumbnails">
	<li class="span6">
		Sorry if I ramble a bit.  I have experimented with this a great deal, and over the past few months, I have built sandbox demo sites in all of the following:

Wordpress.com
Wordpress.org
Laravel 3
Laravel 4 Beta
Laravel 4 stable

I would enjoy discussing any aspect of these in detail, please let me know if you're interested and I can provide links.

---

Laravel is more than a theme builder.

If I may extract a few phrases from the original query:

You asked: 

<blockquote>"I want to know if I can make wordpress plugins and themes using Laravel, or whether I should be doing things another way."</blockquote>

I thought you said:

<blockquote>"should i be going things the other way around"</blockquote>

rephrase: 
  -can i make wordpress plugins in laravel
  -can i make laravel plugins in wordpress
  -can i make wordpress themes in laravel
  -can i make laravel themes in wordpress

Let's now discuss plugins vs. themes:

Themes, in my opinion, are VIEWISH.  At least they should be.  I use themes to create front-end styles, and some core structure like navigation, pages vs. posts, etc.  It's all very BLOGGISH in wordpress if you ask me.   Wordpress also has nice admin interface, site stats, etc.

What is wordpress? 
What is laravel? 

Performance?


let's continue:

Wordpress vs. Laravel

Laravel itself being modular, and itself being a "laravel plugin", we should compare each available Wordpress with each available Laravel plugin:

Now that we've compared the individual plugins, let's consider the methods of adding them.  Site maintenance, extend-ability, etc.  
  -What's it take to develop a plugin in wordpress?  
  -What's it take to develop a plugin in Laravel?

PS: I read a good article the other day about how it is a big deal how Laravel has managed to decouple so many things... How does decoupling apply to wordpress?

What is the wordpress equivelent of laravel's features:
  -PHP 5.37?
  -Artisan CLI?
  -Eloquent ORM?
  -Migrations?

Are any of these tools important to you when building your application?  Will we use this work again?

Community: wordpress vs. laravel? (short and long-term)
Installation: wordpress vs. laravel? (short term)

rephrase:
wordpress vs. symfony
wordpress vs. Eloquent
wordpress vs. composer
wordpress vs. packagist
wordpress vs. TDD
wordpress vs. Jeffrey Way



    <code><pre>return View::make('you'('Winner/Laravel')</pre> </code>

Wordpress MVC Laravel MVC

<a href="http://laravel.com/" title="Laravel Features" target="_blank">http://laravel.com/</a>

Wordpress is my preferred blog tool, except for the bugs... 



Why re-write any code that you don't have to?  Use the program, or one of it's available plugins.  Make your own plugin.  Make your own theme.  Re-use it.

Wordpress Theme is comparable to Bootstrap, Symfony, Blade... Use Wordpress if all you need is quick & dirty pages, posts, stats, etc. and you are most comfortable with it.  But ask yourself this: what will it take to re-use your work?  How will you implement it?  Did you say copy and paste?

Laravel is the better all around tool to build modular flexible web applications.  If you are used to wordpress, and you need a quick & dirty, rusty old tool to fulfill your website's needs, then use wordpress.

Some keywords: 

If you're most familiar with it, use wordpress.
Not planning on maintaining it?  Wordpress.
Not building any further functionality?
Not interested in   Simple blog : use wordpress.

Laravel is tightly wound with bootstrap.

Plugins and themes...

Are you after display?  Plugins are quite different from themes, or at least they should be.  To me, themes are style-related.  Plugins are 

I also feel a lack of control at a certain point.  Wordpress is a user interface for blogging, site statistics, and themes, but falls short in "back-end".

Laravel requires php 5.3.  Wordpress requires php 4.0.

Rephrasing this point: the foundation of the Wordpress is php 4 point whatever
the foundation of Laravel is php 5.3.7.   

If you have to choose one for all around development purposes... like "which one would I rather use?"  there is no quesiton.  If you are familiar with the Wordpress tools, use them.  

tags:

Here are some links:

<a href="http://forums.laravel.io/viewtopic.php?id=5359" target="_blank">http://forums.laravel.io/viewtopic.php?id=5359</a>

<a href="http://stackoverflow.com/questions/17062182/what-problems-could-i-meet-with-laravel-4-on-php-5-3-3/17078845?noredirect=1#comment24745816_17078845" target="_blank">http://stackoverflow.com/questions/17062182/what-problems-could-i-meet-with-laravel-4-on-php-5-3-3/17078845?noredirect=1#comment24745816_17078845</a>

Connecting the two is very interesting.  Why reinvent the wheels that wordpress has solved?  Same the other way around.  

Wordpress Plugins for Bootstrap?

Jyle, it's been 4 months: how did this work out for you?  Looking back, how would you answer your own question today?

I will now attempt to build wordpress plugin for laravel.  If you look for it, you will find it.  If you build it, they will come.

you said: 


<blockquote>Input and Advice appreciated</blockquote>

http://stackoverflow.com/questions/17062182/what-problems-could-i-meet-with-laravel-4-on-php-5-3-3/17078845?noredirect=1#comment24745816_17078845

I say:
Thank you and all for the same!
	</li>

<?php

// $navpath="";
// $ideas="";
// $screenshot="";
// $input="";

// $user="";
// // $user->hasmany("links");

// $links = array("");
// $navlist = array("Home","Demo","Legal");
// $navtypes = array("","/","");

// $html="

// ";

// if ($navpath == ""){
// 		$navpath = $input;
// 		// $navpath = Url::to($input);
// 	}




?>


<ul class="thumbnails">
	<li class="span4">
		<a class="thumbnail" href="#">
			<img src="http://placehold.it/360x240" alt="">
		</a>
		<h3>Manipulating search engines</h3>
		<p>Redirect techniques are used to fool search engines. For example, one page could show popular search terms to search engines but redirect the visitors to a different target page. There are also cases where redirects have been used to "steal" the page rank of one popular page and use it for a different page, They will also redirect using searches with search engines as searches, usually involving the 302 HTTP status code of "moved temporarily."[2][3]
Search engine providers have noticed the problem and are working on appropriate actions[citation needed].
As a result, today, such manipulations usually result in less rather than more site exposure.</p>

	<a href="http://en.wikipedia.org/wiki/URL_redirection#Short_aliases_for_long_URLs">Wilipedia</a>
	</li>
	<li class="span4">
		<a class="thumbnail" href="#">
			<img src="http://placehold.it/360x240" alt="">
		</a>
		<h3>Fluid layout</h3>
		<p>Uses our new responsive, fluid grid system to create seamless liquid layout.</p>
	</li>
	<li class="span4">
		<a class="thumbnail" href="#">
			<img src="http://placehold.it/360x240" alt="">
		</a>
		<h3>Starter template</h3>
		<p>A barebones HTML document with all the Bootstrap CSS and javascript included.</p>
	</li>
</ul>

<h3>Today's Links</h3>
<ul>


<li><a href="http://www.wprecipes.com/how-to-get-the-first-image-from-the-post-and-display-it">http://www.wprecipes.com/how-to-get-the-first-image-from-the-post-and-display-it</a>
</li>
<li><a href="http://www.score.org/resources/online-presence-toolkit">http://www.score.org/resources/online-presence-toolkit</a></li>
<li><a href="http://stackoverflow.com/questions/3058/what-is-inversion-of-control">http://stackoverflow.com/questions/3058/what-is-inversion-of-control</a></li>
<li><a href="http://martinfowler.com/articles/injection.html#InversionOfControl">http://martinfowler.com/articles/injection.html#InversionOfControl</a></li>
<li><a href="http://laravel.com/docs/testing">http://laravel.com/docs/testing</a></li>
<li><a href="http://stackoverflow.com/questions/14524181/laravel-4-multiple-tenant-application-each-tenant-its-own-database-and-one-gl">http://stackoverflow.com/questions/14524181/laravel-4-multiple-tenant-application-each-tenant-its-own-database-and-one-gl</a></li>
<li><a href="http://forums.laravel.io/viewtopic.php?id=5101">http://forums.laravel.io/viewtopic.php?id=5101</a></li>
<li><a href="http://codemirror.net/doc/manual.html">Code Editor</a></li>
<li><a href="http://graphicssoft.about.com/od/inkscape/ss/Import-Color-Scheme_3.htm">http://graphicssoft.about.com/od/inkscape/ss/Import-Color-Scheme_3.htm</a></li>
</ul>

<div class="note">
	<a href="http://en.wikipedia.org/wiki/Handwriting_recognition#Software">http://en.wikipedia.org/wiki/Handwriting_recognition#Software </a>
	<a href="http://risujin.org/cellwriter/">CellWriter </a>
	<p>is an Open Source handwriting recognition program written for Linux. It was developed primarily by Michael Levin, working under the University of Minnesota's Undergraduate Research Opportunity Program. CellWriter is designed to be writer-dependent, so input training is required prior to use. It includes an English word-recognition engine to aid recognition accuracy, an on-screen keyboard and the ability to fine tune or correct mistakes through a context menu. Unlike most recognition engines, the source code and algorithms are available and free to download.</p>
	<p>CellWriter is a grid-entry natural handwriting input panel. As you write characters into the cells, your writing is instantly recognized at the character level. When you press Enter on the panel, the input you entered is sent to the currently focused application as if typed on the keyboard.</p>

	<p>Here are a few highlights from their page:
</div>
User logs in using demo/demo as password.  authenticate as demo.  no email.

<pre>
security

https://howsecureismypassword.net/

oath2.0
http://brentertainment.com/oauth2/

linux

https://www.google.com/search?client=ubuntu&channel=fs&q=linux+security&ie=utf-8&oe=utf-8

javascript security
http://stackoverflow.com/questions/3793246/javascript-security-risks

"What are the risks of using Javascript and how to avoid them?""

"There are no risks. Just possible programmer's errors. One error I can think of is to forget to url encode parameters sent to the server and it gets the wrong values. But the real security risk is in the server side code, not javascript.

"While accurate, it's appropriate to consider that using JavaScript might imply not using server-side code, i.e. he moves validation and data logic to JavaScript, which would of course be ridiculous and incredibly insecure. Worth noting, for newbies."

...

Most popular answer:

"trying to get web authors to remember to HTML-encode strings they output into web pages at the server side (eg htmlspecialchars in PHP), a new generation of webapps are using the same dumb string-concatenation hacks to create content at the client-side using JavaScript:

somediv.innerHTML= '<p>Hello, '+name+'</p>';

often using jQuery:

$('table').append('<tr title="'+row.title+'"><td>'+row.description+'</td></tr>');

This is just as vulnerable as server-side HTML injection and authors really need to stop building content this way. You can HTML-encode text content at the client side, but since JS doesn't have a built-in HTML encoder you'd have to do it yourself:

function encodeHTML(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}

somediv.innerHTML= '<p>Hello, '+encodeHTML(name)+'</p>';

However it's usually much better to use the available DOM methods and properties that obviate the need for escaping:

var p= document.createElement('p');
p.appendChild(document.createTextNode('Hello, '+name);

and with jQuery use attr(), text() and the creation shortcuts:

$('table').append(
    $('<tr>', {title: row.title}).append(
        $('<td>', {text: row.description})
    )
);"

What do you think about this?  Please elaborate!
</pre>



<a href="http://www.bythecutlawncare.com/manatee-county-grass-cutting-service/">grass cutting</a>


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

<h2>photos:</h2>
<pre>
public function listImages($dir){

	$basepath="/home/gristech/public_html/img/";
	$myfiles=array();

	foreach (glob($basepath.$dir."*.{jpg,png,gif}",GLOB_BRACE) as $filename) {
		$myfile=str_replace($basepath, "", $filename);
		// echo "MYFILE: ".$myfile."<br>";
	    array_push($myfiles,$myfile);
	}
	return $myfiles;
}

// $myphotos=self::listImages("screen/");
			// $photos=Paginator::make($myphotos,count($myphotos),10);
</pre>

		@foreach ($photos as $myfile)
			<div class="span1 thumbnail">
				<img src="http://gristech.com/img/{{$myfile}}" alt="{{$myfile}}">
				<p class="photocredit"><a href='http://gristech.com/img/{{$myfile}}'>{{$myfile}}</a></p>
			</div>
		@endforeach
	<li class="span3 thumbnail delta">
    	<!-- <div class="thumbnail delta"> -->
      		<h3>Heading 3</h3>

<!-- Image::circle("img/thinker_head_square.png", "thinker") -->
      		<img src="http://gristech.com/img/thinker.png" alt="">
      		<p class="muted credit">p.muted credit</p>


    	<!-- </div> -->
	</li>




<li>
	<pre>

learning

have you ever said: i wish i had a project to work on...
I wish I had an example...

Then, you spend an hour two researching the answer.  You may cruise:

Stack Overflow
Forums
Blogs
Google

The answers all get consolidated at Stack Overflow.


scrollspy menu here


I configured Unubtu 12.04 LTS 64bit Dual Boot with Windows 7.  

After testing both environments, I find linux is better than windows for one main reason:
The internet works on linux, so all the conventions are already established.  If 
you want to run a local machine, upload files to a web server, etc., it's all got to be done 
in linux.  80% of webservers use it for a reason.

Read about <a href="{{URL::to('security')}}"></a>

Windows 
offers a GUI and therefore it feels easy to work with.  However, there are certain limits
you will encounter later if you switch.  You'll have to re-learn it.  Unless you are
trapped in a windows environment, there is no reason to continue to use it.

Consider  I am thoroughly convinced that



<!-- //collapsing accordian buttons -->

 <div class="accordion" id="accordion">
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
<!-- heading -->
 				Collapsible Group Item #1
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse in">
 			<div class="accordion-inner">
<!-- content -->
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>


 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
<!-- heading -->
 				Collapsible Group Item #1
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse in">
 			<div class="accordion-inner">
<!-- content -->
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div> 	


 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
<!-- heading -->
 				Collapsible Group Item #1
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse in">
 			<div class="accordion-inner">
<!-- content -->
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 </div>



 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
<!-- heading -->
 				Collapsible Group Item #1
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse in">
 			<div class="accordion-inner">
<!-- content -->
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div> 	


<!-- group -->
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
<!-- heading -->
 				Collapsible Group Item #1
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse in">
 			<div class="accordion-inner">
<!-- content -->
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>

 </div>
 <!-- row -->

<h3 id='git'>Git</h3>

<a href="http://ndpsoftware.com/git-cheatsheet.html#loc=local_repo;">Git Cheatsheet</a>

<a href="http://git-scm.com/book/en/Getting-Started-First-Time-Git-Setup
">First time set up</a>
<h2>Chapter 2</h2>
<h3>Git Basics</h3>

<p>If you can read only one chapter to get going with Git, this is it. This chapter covers every basic command you need to do the vast majority of the things you’ll eventually spend your time doing with Git. By the end of the chapter, you should be able to configure and initialize a repository, begin and stop tracking files, and stage and commit changes. We’ll also show you how to set up Git to ignore certain files and file patterns, how to undo mistakes quickly and easily, how to browse the history of your project and view changes between commits, and how to push and pull from remote repositories.</p>
<a href="http://git-scm.com/book/en/Git-Basics-Getting-a-Git-Repository
">http://git-scm.com/book/en/Git-Basics-Getting-a-Git-Repository
</a>



<code>
	<pre> code-pre
		ryan@Grisbuntu:/etc$ cd ~/gristech
ryan@Grisbuntu:~/gristech$ git init
Initialized empty Git repository in /home/ryan/gristech/.git/
	</pre>
</code>


In fact, if your server disk gets corrupted, you can use any of the clones on any client to set the server back to the state it was in when it was cloned (you may lose some server-side hooks and such, but all the versioned data would be there — see Chapter 4 for more details)

It's automatically backed up to the cloud.


Composer
curl -sS https://getcomposer.org/installer | php

1. <a href="http://getcomposer.org/doc/01-basic-usage.md#installation">Step 1</a>

<pre>
	<code>pre-code

cd/etc/apache2/sites-available/
sudo cp default gristech.dev

		<VirtualHost *:80>
		    ServerName hostname2.mydomain.com
		    DocumentRoot /home/www/hostname2
		</VirtualHost>
	
	//now do:

composer.json

{
    "require": {
        "monolog/monolog": "1.0.*"
    }
}

	</code>
</pre>

ryan@Grisbuntu:~/gristech-dev$ mkdir public
ryan@Grisbuntu:~/gristech-dev$ chmod -R 777 public




rom the correct directory, place the 
http://stackoverflow.com/questions/12448912/apache-mod-rewrite-for-laravel

</pre>

</li>


  <li class="span3">
    <div class="thumbnail delta">
      <h3>Domain Names</h3>
      <img src="http://gristech.com/img/screen/scr.1465.png" alt="">
      <p>Thumbnail caption...</p>
    </div>
  </li>
   <li class="span3">
    <div class="thumbnail delta">
      <h3>Search</h3>
      <img src="http://gristech.com/img/screen/scr.1465.png" alt="">
      <p>

			<a href="http://www.thesitewizard.com/archive/searchengine.shtml">3 Ways of putting search on your site</a>
      </p>

    </div>
  </li>
     <li class="span3">
    <div class="thumbnail delta">
      <h3>Domain Names</h3>
      <img src="http://gristech.com/img/screen/scr.1465.png" alt="">
      <p>Thumbnail caption...</p>
    </div>
  </li>
     <li class="span3">
	    <div class="thumbnail delta">
	      <h3>Domain Names</h3>
	      <img src="http://gristech.com/img/screen/scr.1465.png" alt="">
	      <p>Thumbnail caption...</p>
	    </div>
  	</li>
  
<li>
	<div class="thumbnail delta">
		<a href="https://tutsplus.com/forums/topic/can-laravel-be-applied-to-wordpress/">Laravel vs. Wordpress</a>
		
	</div>
</li>
<li>
	<div class="thumbnail">
		<a href="http://webdesign.tutsplus.com/articles/workflow/backing-up-your-website-the-ultimate-guide/"><h3></h3></a>
		<a href=""></a>
	</div>
</li>

  <li class="span3">
    <div class="thumbnail delta">
      <h3>Domain Names</h3>
      <img src="http://gristech.com/img/screen/scr.1465.png" alt="">
      <p>Thumbnail caption...</p>
    </div>
  </li>
</ul>


	    <!-- Button to trigger modal -->
	    <a href="#myModal" role="button" class="btn  btn-success" data-toggle="modal">!About</a>
	     
	    <!-- Modal -->
	    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
		    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    	<h3 id="myModalLabel">Modal header</h3>
		    </div>
		    <div class="modal-body">
		    	<p>Foobar!</p>
		    	<!-- @section('contact') -->

		    </div>
		    <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			    <button class="btn btn-primary">Save changes</button>
		    </div>
		</div>


<div class="row-fluid">
	<div class="span4">
		<a href="http://en.wikipedia.org/wiki/Webring">Webring</a>
	</div>
	<div class="span4">
		<a href="http://lmgtfy.com/?q=does+it+matter+who+i+buy+my+domain+name+from"></a>
	</div>

	<div class="span4">
		 <a href="http://www.smashingmagazine.com/2009/08/26/vital-tips-for-effective-logo-design/"><img src="http://gristech.com/img/underconstruction.gif" alt="beta">http://www.smashingmagazine.com/2009/08/26/vital-tips-for-effective-logo-design/</a>
	</div>
</div>


<div class="row-fluid">
	<div class="span12">


	</div>
</div>


<h3>domain names</h3>
<ul>
	<li><a href="http://moz.com/blog/how-to-choose-the-right-domain-name">http://moz.com/blog/how-to-choose-the-right-domain-name</a></li>
</ul>

<a href="http://www.hobo-web.co.uk/best-screen-size/">Best Screen Size</a>
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
						<!-- <p>The best thing since sliced bread.</p> -->
						<a href="http://laravel.com/docs/requests#old-input"><p class="photocredit">http://laravel.com/docs/requests#old-input</p></a>
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
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://http://www.lorempixum.com/">
		      			<img src="http://www.lorempixum.com/g/350/200/city" alt="lorempixum">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li>lorempixum</li>
							<li>flickr</li>
							<li>other creative commons resources</li>
							<li><a href="http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html">About copyrighting</a></li>
						</ul>

						<!-- http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html -->
		      		</div>


		      		<div class="span4 thumbnail delta">
		      			<a href="http://http://www.sublimetext.com/">
		      			<img src="http://www.gristech.com/img/screen/sublime.png" alt="Sublime Text">
						<h4><span>Sublime Text</span></h4>
						</a>
						<h6>It's Awesome</h6>
						<p>The best thing since sliced bread.</p>
		      		</div>
				</div>
				<!-- ./ span10 -->

				<!-- sidebar -->
	      		


<h3>Chat</h3>
<ul>
	<li><a href="https://gristech.hipchat.com/chat">Hipchat</a></li>
</ul>


					  
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
	<p>landscape photo &copy; <a href="http://www.flickr.com/photos/65978013@N03/6472678173/">flickr</a></p>
</div>



		
@stop