@extends('site.layouts.min')

@section('content')

<img src="{{asset('assets/gristech/myapp.cloud.svg')}}" alt="">

<p>This is a Web Application that can be custom-tailored to any business.</p>

<p>Start by enering basic meta-info about your Company.  For example, the name of the company, the contact info, a description.</p>
<h3>Menus</h3>
<p>Enter a comma-separated list of menu items.  Dummy Menus will appear on the home page until the pages have been built out.</p>

<p>Available Features include:</p>
<ul>
	<li>User and Permission Management</li>
	<li>Bootstrap 2.3.2 or 3.0.1</li>
	<li>Private Repository in Bitbucket</li>

	<li>
		<h2>Back End</h2>
		<div>I have configured and extended a good deal of the backend, including:
			<ul>
				<li>
					Administrative interface including user management, 
				</li>
				<li>
					strict security best practices
				</li>
				<li>
					company management
				</li>
			</ul>
			My original contributions include the Company management, tag management system, overall design, implementing redactor, etc.

			I am planning to provide this application an interface directly to the wordpress database, thereby giving us the ability to import wordpress blog posts, without having to hassle with or configure anything.  As long as we have permissions, and as long as the table names are correct, we should be able to pull anything we like from wordpress.  The next step is to also push to wordpress.
			
		</div>

		<div>The site is built on php, javascript and... well, please visit "tools" or to learn more about that.</div>
		<div>At least some work has been completed on all of the following:</div>
		<div>On the slate are </div>
	</li>
	<li>
		Representational State Tranfser API
	</li>
</ul>

	several fundamental Content Management Features.</p>

<h2>UI</h2>

<h3>jQuery</h3>
<p>I perceive a divide in php-land that scoffs at implementing javascript, or at least from depending on it.  jQuery is amazing.  I am curious about other implementations of Javascript.  I am concerned about being dependent on them.  One good example is the wysiwyg editor.</p>

<p>My initial thinking was to avoid deeply implementing Redactor, because I don't want there to be an inherent dependency on it.  That, and, it's not free.  Amazingly, I recently went through the process of changing laravel's WYSIWYG editor to redactor and back, and it all occurs within 3 lines of code.  In other words, you only have to change 3 lines of code to change the editor.  The experience taught me to think more about the importance of modular design.  The developer's choices about how to implement a feature determine modularity, not necessarily the feature or program iteself.</p>

credits
http://www.vectortemplates.com/vector-web-site-templates.php

https://github.com/cheeaun/mooeditable/wiki/Alternative-Javascript-WYSIWYG-editors#lightweight-versions

Alternative Javascript WYSIWYG editors
Lightweight versions

<a href="https://github.com/cheeaun/mooeditable/wiki/Alternative-Javascript-WYSIWYG-editors#lightweight-versions">https://github.com/cheeaun/mooeditable/wiki/Alternative-Javascript-WYSIWYG-editors#lightweight-versions</a>
<!-- @ include('sites.partials.carousel') -->


<!-- http://www.vectortemplates.com/download.php?tkn=2102522996397109108 -->

@stop