@extends('layouts.scaffold')
<h1>BLOG HOME</h1>
@section('title')
{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent
{{$company->description}}
@stop

@section('meta_keywords')
@parent
{{$company->keywords}}
@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Sections_and_Outlines_of_an_HTML5_document -->
<style>
	section, article, aside, footer, header, nav, hgroup {
	  display:block;
	}
	html,body{
		background-color: rgba(235,196,162,.1);
	}
	.well{
		background-color: rgba(121,186,242,.2);
		box-shadow: 2px 2px 1px #8285E6;
	}
	h1,h2{
		color:rgba(18,124,166,1);
		/*font-size: 32px;*/
		/*box-shadow: 5px 5px 3px #666666;*/
	}
.myDiv{
   background:url(
data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAU0lEQVQYV2NkgAIf/ov/t3zUZ4TxQTSyGIYEskJkjXCFIN3IimBsmGKwQpgikCAuNopCbCaCxEAGgE2AmYTLMyA1xCvEFRzowYUSPLjcCBInWiEArudEYZQ9fzYAAAAASUVORK5CYII=
   ) repeat;
}
	
</style>
<!--[if lt IE 9]>
  <script>
    document.createElement("header" );
    document.createElement("footer" );
    document.createElement("section"); 
    document.createElement("aside"  );
    document.createElement("nav"    );
    document.createElement("article"); 
    document.createElement("hgroup" ); 
    document.createElement("time"   );
  </script>
<![endif]-->
@stop

@section('nav')
@include('site.partials.nav-top-inverse')
<!-- @ include('site.partials.nav2') -->
	<!-- ./ nav section -->
{{-- Content --}}
@show

@section('main')
<?php
	$env=App::environment();
	echo "<div class='alert alert-info'>Welcome to the <strong>".$env."</strong> environment.</div>";

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
	.page-header{
		background-color: yellow;
	}
</style>
<div class="row page-header">
	
	<h1>Welcome</h1>
	<div class="span4">
		<!-- <div class="pull-right"> -->
		<img src="{{asset($company->image)}}" alt="MyImage">
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
	
	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-tabs">

		@foreach($company->menus() as $menu)
	    <li><a href="#{{$menu}}" data-toggle="tab">{{{$menu}}}</a></li>
	    @endforeach
	    
	    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
	  

	  </ul>
	  <div class="tab-content">

	    @foreach($company->menus() as $menu)
	    <div class="tab-pane" id="{{{$menu}}}">
	      <p>Howdy, I'm {{{$menu}}}.</p>
	    </div>
	    @endforeach

	    <div class="tab-pane active" id="tab1">
	      <p>I'm in Section 1.</p>
	    </div>
	  </div>
	</div>
</div>

<div class="span4">
	<h2>Sidebar</h2>

	<!-- Button to trigger modal -->
	<a href="#MyModal" role="button" class="btn" data-toggle="modal">MyModal</a>
	 
	<!-- Modal -->
	<div id="MyModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Modal header</h3>
	  </div>
	  <div class="modal-body">
	    <p>One fine body…</p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
	</div>

	
</div>

<div class="span8 offset4">
	<h1>Posts:</h1>
	<div class="text-center">
		{{ $posts->links() }}
	</div>

	@foreach ($posts as $post)
		<div class="row">
			<div class="span3">
				<p></p>
				<p>
			<!-- Edit/Delete Buttons -->
				<div class="metabuttons pull-left">
					@if (Auth::check())
		                @if (Auth::user()->hasRole('admin'))
							<p>
								<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
								<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
							| </p>
						@endif
					@endif
				</div>

				<!-- Comments -->
					&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
					| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
					| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
				</p>
			</div>
		</div>
		

		<div class="well">
			{{$post->title}}
			{{$post->img}}

			<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
			<p>
			{{ String::tidy(Str::limit($post->meta_description, 158)) }}
			</p>
			<p>
				<a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
			</p>
		</div>

		<ul class='tag'>
			<li><i class="icon-tag"></i></li>
			@foreach($post->tags() as $tag)
				
			    <li><a href="{{ $tag }}">{{ $tag }}</a></li>
			    
			@endforeach
		</ul>

	@endforeach
	{{ $posts->links() }}
</div>
<!-- ************************************************ -->


	<!-- <div class="row"> -->
		<div class="span3 well">
			
			<!-- Post Title -->
			<div class="row">
				<div class="span3">
					{{$post->title}}
				</div>
			</div>
			<!-- ./ post title -->

			<!-- Post Content -->
			<div class="row">
				<div class="span3">
					<a href="{{{ $post->url() }}}" class="thumbnail">
						<!-- http://placehold.it/260x180 -->
						<img src="http://gristech.com/img/{{{$post->image}}} " alt="{{{$post->image}}}">
					</a>
			<!-- Tags -->
					<p>
						<ul class='tag'>
							<li><i class="icon-tag"></i></li>
							@foreach($post->tags() as $tag)
								
							    <li><a href="{{ $tag }}">{{ $tag }}</a></li>
							    
							@endforeach
						</ul>
					</p>
				</div>
				<div class="span3">
					<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
					<p>
						{{ String::tidy(Str::limit($post->content, 300)) }}
					</p>
					<p>
						<a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
					</p>

				</div>
			</div>
			<!-- ./ post content -->

			<!-- Post Footer -->
			<div class="row">
				<div class="span3">
					<p></p>
					<p>
				<!-- Edit/Delete Buttons -->
					<div class="metabuttons pull-left">
						@if (Auth::check())
			                @if (Auth::user()->hasRole('admin'))
								<p>
									<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
									<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
								| </p>
							@endif
						@endif
					</div>

					<!-- Comments -->
						&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
						| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
						| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
					</p>

				</div>
				<!-- span8 -->
			</div>
			<!-- row -->
			<!-- ./ post footer -->
		</div>
		<!-- well -->

	</div>
<!-- row -->
	<!-- <hr /> -->


	<!-- ************************************************ -->

<div class="row">
	<!-- <img src="holder.js/200x300" alt="HOLDER"> -->
		<div class="span6 pull-right">
			<img src="http://gristech.com/img/robots.jpg" class="img-circle">
			<p class="muted credit text-center">
				<a href="http://www.flickr.com/photos/striatic/125614/">http://www.flickr.com/photos/striatic/125614/</a>
			</p>
		</div>
	<div class="span6">
	<p>Here are a few things you can try:</p>
	<h3>Pages:</h3>
		<ul class='nav nav-stacked'>
			@foreach($mypages as $page)
			<li><a href="{{URL::to($page)}}">{{$page}}</a></li>
			@endforeach

<!-- 			<li>About</li>
			<li>Tools</li>
			<li>Features</li>
			<li>Security</li>
			<li>Licensing</li>
			<li>seo</li>
			<li>search/seo</li> -->
		</ul>

		<p>You see, I have built a database of logic and structure for all of these topics.  Some pages integrate facebook.  Some integrate twitter.  Some integrate Google Products.  Here is a list of available API's:</p>
		<p>In other words, type in:</p>
		<ul>
			<li>myapp.gristech.com/<b>tools</b></li>
			<li>myapp.gristech.com/<b>security</b></li>
			<li>myapp.gristech.com/<b>seo</b></li>
		</ul>

		So those are views... but there are also controllers and underlying logic which pertain to each field.  For example, we can configure Google Analytics.
		<p>You can also <b>force</b> it to use something, like this:</p>
		<ul>
			<li>myapp.gristech.com/<b>search/seo</b></li>
			<li>myapp.gristech.com/<b>tags/development</b></li>
			<li>myapp.gristech.com/<b>blog/some-page-name</b></li>
		</ul>
		<p>So remember, that's <span class="HL">myapp.gristech.com/verb/noun</span></p>
		<p>Robots can talk to it, too.</p>
		<p>Other websites, other computers, robots: same thing.</p>
		<div class="thumbnail delta">
			<ul>
				<li><em>Did I mention content automatically optimizes itself for SEO?</em></li>
				<li><em>Did I mention it can connect to your clients via email, facebook, twitter, and even direct mail?</em></li>
				<li>How about managing your customer data and your marketing?</li>
				<li>How about plugging your front-end marketing activities to your back-end office functions?</li>
				<li>Did I mention it's custom-built, and you can do anything you want with it?</li>
			</ul>
		</div>
	</div>
	<!-- span6 -->
</div>
<!-- row -->

<div class="row-fluid">


		<div class="span6">
			<h2>What would you like it to do?</h2>
				<h3>If you build it, they will come.</h3>
			<p>That means it's designed to look good and function completely on any browser...</p>
			<p>That means that you have here all of the following:</p>
			<ul>
				<li>A desktop Web Application</li>
				<li>An ipad app</li>
				<li>An iphone app</li>
				<li>An android app</li>
			</ul>
		</div>

		<div class="span6">
			<div class="span3 thumbnail pull-left"><i class="icon-desktop icon-4x"></i> Desktop  </div>
			<div class="span3 thumbnail pull-left"><i class="icon-tablet icon-4x"></i> Tablet  </div>
			<div class="span3 thumbnail pull-left"><i class="icon-mobile-phone icon-4x"></i> Mobile  </div>
		</div>
</div>

<hr>
 <div class="accordion" id="accordion">
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
 				<h2>Preface</h2>
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse">
 			<div class="accordion-inner">
 				
<p>I presume that if you are reading this message, you are one of several kinds of people, and/or found the site in one of a few specific ways:</p>

<ul>
	<li>You found it on google, bing, etc.</li>
	<li>You followed a link from a related site or blog, twitter, etc.</li>
	<li>You may be a business owner or entrepenuer looking for website services. </li>
	<div class="thumbnail pull-right span3"><h3>Skills</h3>
<a href="http://www.bestapples.com/kids/teachers/johnnyappleseed_printout.pdf">
<img src="http://gristech.com/img/appleseed.jpg" alt="appleseed">
<p class="muted credit">Johnny Appleseed, for all ages</p></a>
	</div>
	<li>A Business Partner of mine</li>
	<li>Developer</li>
	<li>You heard about it directly from me.</li>
</ul>

<p>As of june 2013, it's <em>more</em> likely that you came to this site as a result of a personal acquaintance with me or someone I know personally: something near the bottom of the list above.  I have not actively promoted the site yet.  Nevertheless, some of my content is generating traffic... more on that later.  I am taking notes on my activities, giving advice to others, and planting seeds everywhere I go, even though I haven't.  feel like a young <a href="http://www.straightdope.com/columns/read/2141/whats-the-story-with-johnny-appleseed">Johnny Appleseed</a> with a hole in my pocket.</p>

<p>
By the way, young programmers and inexperienced programmers turn in to experienced programmers, thus education focused on best-practices and real-world experience yield knowledge and skills that can be applied in the real world.  That is a run-on sentance.  It took less words to type it like that, so I will hereone out often choose to sacrifice grammar and spelling in favor of efficiency and speed.
</p>

<blockquote>
	before I continue, please understand that this site is a living sandbox, and alot of it is not perfect.  The intent is to demonstrate what the tools are capable of.
</blockquote>

Flickr is a good example of how tags can be used, but is also a good example of how they could be used BETTER.  There are several navigation problems, and by abstacting those for the user, we can solve that problem for flickr.  Most of all, we will solve the problem for our users.  

There is a dark side to social media.

Here is an example of something that rubs me the wrong way:

I searched twitter for "small business" within "people you follow".  That yielded the following:

<ul class="thumbnails">
  <li class="span4">
    <a href="#" class="thumbnail">
      <img src="http://gristech.com/img/screen/40tweet.png" alt="Tweet">
      <p class:"photocredit">1st Link: Twitter</p>
    </a>
    <p>Clicking that tweet leads you to...</p>
  </li>

  <li class="span4">
    <a href="#" class="thumbnail">
      <img src="http://gristech.com/img/screen/40tweet.png" alt="Tweet">
      <p class:"photocredit">2nd Link: Twitter</p>
      <p>Clicking that tweet leads you to...</p>
    </a>
  </li>

</ul>

I find this tweet first:</p>
<div class="thumbnail span6 pull-right">
	//?
</div>
<p>
Which leads me to this link:
<a href="http://holykaw.alltop.com/a-step-by-step-guide-to-starting-a-small-business-website?tu4=1">holykaw</a>
which leads to this:
<a href="http://holykaw.alltop.com/a-step-by-step-guide-to-starting-a-small-business-website?tu4=1">2nd reblog</a>
<a href="">3rd reblog</a>
<a href="">Original content?</a>

On the one hand, I dislike others representing it as relavent, semi-original content.  

The extra clicks and stream of info is alot of wasted time, space, energy, and it might be diluted or warped from it's original intent.  That is the problem with this approach from a tactical point of view.  Irrelevant content, thus irrelevant users and/or bad user experience.  Not to mention the convoluted maintenance of an over complicated system.  Trust is precious thing.  

The big city market, so if you fish all the little fish.  As a user, I   I am curious: what percentage of these 

You can also "buy twitter followers".  This is ultimately a really bad idea for a number of reasons.  The bottom line is: by trying to cut corners like this, you are ultimately hurting your business.

Notice whatshisface has 1.3M twitter followers.  The thing I ask myself is: how many of their followers are real people, versus how many are robots, or programs, automated tweet things, or whatever?  75% of stats are made up, so we'll just say that the number is 75%.  Whatever.

Also keep this thing in mind when a company advertised "20,000 twitter followers guaranteed" or some such nonsense.  Who cares about 20,000 twitter followers generated by a robot?  If they are legitimately interested in your product, <em>you can find them without buying lists of robot crap</em>.  Buying leads is one thing: buying "followers" or "facebook friends" - give me a break.  Do you want to have to pay someone to be their friend?  Or pay someone else for their friends?  They're not even people.  It's a made up number.

Or is it?  Could there be some value here?

There may be value in the structural (in MVC, this is a model).  The 

I have established a many to many relationship between tags and all my other models.  Basically, everything revolves around them, be it in their noun or their verb form.  

I can say: flickr get photo

or photo flickr stream

and an app will come up to do that.  mow grass columbus
health insurance columbus



<img src="facebook-meta-description" alt="">

<a href="http://holykaw.alltop.com/a-step-by-step-guide-to-starting-a-small-business-website?tu4=1">Leecher</a>

Some people I have discussed this idea with include:
<ul>
	<li></li>
	<li>Developers with 20+ yrs experience</li>
	<li>Aspiring developers with no experience</li>
	<li>Attorneys with various expertise</li>
	<li>Finance & Insurance executives</li>
	<li>Real Estate & Mortgage Professionals</li>
	<li>College professors</li>
	<li>Business Owners in the following Industries:</li>
	<li>
		<ul>
			<li>Foo</li>
			<li>bar</li>
		</ul></li>
</ul>

Regardless of which of these group you belong to, you should be able to find good information here.  You will also find information geared toward other groups on this list.

<p>Now, </p>

 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">


 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
 				<h2>What is it?</h2>
 			</a>
 		</div>
 		<div id="collapseTwo" class="accordion-body collapse">
 			<div class="accordion-inner">
 				
	<p>I find this surprisingly difficult to explain.  I have a very clear vision of what this service will/can become, but there is a very complex set of things that have to happen between the startup and the end result that have to happen.  It's a big idea, and will require thousands of hours of collective work amongst dozens or perhaps hundreds of developers...</p>
	<p>It's also a service to small business owners, and ultimately their communities.</p>
	<p>It could also be very profitable for investors, business partners, and employees.  Please understand that I have a very up-front and transparent attitude toward this issue: I once heard: "Charge what you're worth, and be worth what you charge."</p>
	</p>It is difficult when speaking to any audience, not to get caught up in trying to explain the details of <em>how</em> this works, as opposed to getting to the point: <em>what does it do?</em>  In a way, it's kind of difficult explaining one without the other.  I am aware this lack of explanation is confusing, but I am working on it contantly.  Hopefully this letter will help...</p>
	<!-- <p>I have a "Feature-Function-Benefit"</p> -->
	<p>I find it appropriate to speak to a wide audience whenever possible... to all of those groups above.  However, being a large and complex idea, this also requires some detailed explanation geared toward <em>your</em> group.  I am a perfectionist, and I want to give you a good explanation.  That takes time.  Simultaneously, I am also trying to explain to the other groups.  And be a good provider, father, husband, and whatever I am to other people.  Time is precious.</p>
	<p>With that all said, here is an attempt at a 2-minute explanation I would give to someone at a party:</p>
	<p>Coming soon, lol</p>
	<p>Oops- one more thing: I find it best to learn by doing - so, please play around on this site a bit.  Browse some of the content, log in, leave comments on some of my posts/pages.  It will REALLY help me out to know what other people think of the ideas around this site.  To anyone who has done so: THANK YOU!</p>
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
 				<h2>What is it? (Take 2)</h2>
 			</a>
 		</div>
 		<div id="collapseThree" class="accordion-body collapse">
 			<div class="accordion-inner">
	<p>In short, this is a Web Application that can be used across a large number of industries.</p>
	<p>There is also an educational component which helps developers to learn how to program, how to manage websites, how to build web applications, and how to administer teams of people to do all of these things.  In essence, anyone in this industry has an opportunity to contribute.</p>
	<p>I am looking to monetize a community project.  Perhaps 100 people will share in $100 dollars in profit.  Perhaps 100 people will share in $1,000,000.  Tumblr just sold for over $1B.  So did Maze.  I should not declare that this project will be the next Tumblr, but I want everyone to understand and agree that there is no practical limit.  This is a unique and quite "american" opportunity, in the sense of the word "opportunity" as I have come to understand it.  For a community of like-minded people to build something... more.</p>
	<p>By the way, this is about to venture into a conversation that could turn into discussion about ponzi schemes and such.  I am talking about a large influx of ownership.  Network marketing is a sore and taboo for me.  I have never been able to get over this: in roughly 1992, my buddy asked me: "do you want to go to a party"?  It was him and one other guy.  Very much like the great movie "Go".  some doche bag convinced my buddy to invite me to an Amway meeting.  He came to me and said, "Hey, do you want to go to a party?"</p>
	<h3>Pardon my rambling :)</h3>
	<p>Could the ownership structure of something like this can be like that of </p>
	<p>It's not just a web app though: it's a <em>living</em>app.</p>
	<p>I made the mistake of describing a feature to an experienced developer as "it's like facebook" or "it does this just like gmail does".  One mistake in saying that is that is NOT facebook, or gmail, or hootsuite.  It is arrogant to assume this will be "like" facebook.  Besides, after reading some other aspirations others have written, it may be true that "everyone wants to build the next facebook" or "everyone wants to be the next gates/jobs/zuckerberg (insert current kingpin here)."</p>
	<p>If you catch me talking like that, let me apologize now.  This program will <em>not</em> encourage any reverse engineering or anything like that.  The goal is not to copy facebook.</p>
	<p>Instead, this app will USE Facebook.  Facebook already built facebook, why build it again?</p>
	<p>The concept seems foreign to some, even though we use it everyday.  In fact, it's interesting to learn that Facebook WANTS you to use them.  Their greatest commodity: the ONLY commodity, you might say, is <em>traffic</em>.  They provide and maintain an API (Application Programming Interface) which allows developers to access their services and their data.  At this time, they provide it for FREE.  Why?  The same reason they allow YOU to join for free.  More traffic = more advertising.  Facebook, Twitter, Google, and .  They are merely modern replacements for the Yellow Pages, Magazines, and Newspapers.</p>
	<p>Huh, do those sound familiar?  If I was doing "Marketing Consulting" for you 20-30 years ago, I would be selling you Yellow Pages Ads, Magazine Ads, and Newspaper or Classified Ads...</p>
	<p>Classified Ads are one of the best examples of an antiquated and obsolete technology.  Personally, I haven't looked at one in I don't know how long.  25% of Consumer Purchases are made online today, and 50% are expected to be within X years.  I'll backfill that for you and provide a reference if you like, but please assume it is correct and verified for the moment... (besides, do you beleive every statistic you read? My facebook friends said she read on the internet that 75% of statistics are made up. :)  If you are reading this, I hope you agree that the point should be for you to understand these things clearly for yourself.  I don't think it's debateable that consumer spending and consumer activity is growing rediculously fast.  Do you think Craigslist and Ebay killed classified advertising?  Me Too.</p>
	<p>Anyway, the new Web Services also collect information about you and your interest, like the man doing a survey at a Home & Garden show.  I have been that man: and the goal is to collect sales leads.  Targeted leads with demographic "meta-information" about you.  The better qualified and interested you are, the better my time is spent on you.  If you can't buy, I'm not calling you.  If don't need my product, I'm not calling you.  If you're "not interested", I'm not calling you.
	If you...</p>
	<p>	Hold on there.  I just said three things I'd like to recap:</p>
	<ol>
		<li>You are not qualified</li>
		<li>You are not interested</li>
		<li>You </li>
	</ol>
	<p>I want you to think about your industry for a moment.  Do you know salespeople in your industry who waste time trying to sell things to </p>
	<p>You're aware credit bureaus market your information like this, too, right?  Are they transparent?  Do you know what data they collect, how it's stored, shared, and with whom, and do you have access to the same data?  How is your score calculated?  <em>No One Really Knows</em>.</p>

	<p><em>Technology solves all of these problems, and more.</em></p>
	<p>Business that use the Web App gain all the advantages of it's features.  The benefits include increased efficiency in both sales and internal processing/staff interaction....</p>
	<p>Now, a developer-friend of mine recently said to me: "Web Apps Suck."  I have a question for you: Do you ever use google?  Is that not a web app?  Do you think they have figured out how to make it work good?  How about our other friends: </p>
	<p>Are those websites, web services, web apps, or what?  Yes all the way around, right?</p>
	<p>So here's the thing: you have ALL of the world's services available to you for free.  What it costs you is your personal information.</p>
	<p>Some people are VERY paranoid about sharing their personal information, and therefore about using technology in general.  And for good reason: for example: Twitter was recently hacked.//ref </p>

	<p>I have many articles mostly written, and thousands of links to great, current, relavent content: relavent to industries://list</p>
	<p>Much of my content is currently scattered and disorganized.  I sometimes have a messy desk.  Not <a href="http://articles.washingtonpost.com/2013-03-17/local/37795617_1_messy-desk-girl-scout-cookies-city-paper">Messy Desk</a>.  Not that bad, but pretty messy.</p>
	<p>I'll tell you, what, though- I get the job done though.  Ask anyone I've ever worked for or with if </p>
	<p>Also: I am intentionally <a href="http://www.mindtools.com/brainstm.html">brainstorming</a>.  </p>
	<p>I can personally teach Advanced HTML, Advanced CSS, Beginners Javascript, *Advanced PHP,...</p>
	<p class="muted">* I use the word 'Advanced' relative to the average non-developer.  I understand "advanced" PHP, Laravel, Javascript, etc., but I cannot hold a candle to the guys that invented it, wrote it, maintained it, built it, etc.  Amongst the pool of developers whom I respect the most, I am easily humbled, and sometimes a bit shy.  Relative to anyone with 5 or less years experience in this industry, I think I am qualified to hold a solid conversation and demonstrate leadership.  I have great respect for the leaders of this community.  How do I feel about the leaders of my local community?  Have I become so disgusted with Government that I am not aware of their actions?  Which is better: my government or my community?</p>
 			</div>
 		</div>
 	</div>

 	 <div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
 				<h2>What it does</h2>
 			</a>
 		</div>
 		<div id="collapseFour" class="accordion-body collapse">
 			<div class="accordion-inner">
	<p>For the business owner, it automates things, and gives the owner the ability to work faster, make less mistakes, and ultimately not let things slip through the cracks.</p>
	<p><a href="messy desk photostream">Accounting?</a></p>
 			</div>

		<div>
			<p>One thing a web app helps ME with is to organize my ideas.  By tagging, organizing, saving, and looking up my data for me, I can spend my time doing more creative and productive things.  This applies on EVERY level.   *//bank disclaimer I'm here to tell you that it applies to the banks.  (If you don't know me, I was in mortgage banking between 2001-2013 with about a 2 year break near the end.  I have thorough and extensive mortgage knowledge, and intimate understanding of how bank systems, credit bureau systems, as well as the consumer experience, customer service policies and procedures.)</p>

			I am comfortable in telling you that we did not have a single, central list or resource for the correct departments to transfer phone calls to.  We have a searchable intranet that .  This is big data at it's finest.  But the challenge is not big data: the solution is simple, object-oriented, modular models, and better designed systems.  I could DEFINITELY contribute to the high-level design of bank software.  Not the "How" but the "What" - and the "how does this benefit the company and the customer and the community?"  The "how do we apply this technology to this problem to make it a better customer experience"?  I beleive this philosphy 
			I can see how to optimize the customer experience: and increase <em>true</em> customer satisfaction.
			But you know what?  I don't want to work for the bank right now.  I don't beleive in it.  I beleive the bank is necessary, but I don't feel confident in my own ability to navigate the red tape and corporate polits necessary to make a difference.  Half of my time was done doing the job of a different department.  It's a fascinatingly complex 
			  That environment is opposite from this in many ways.  It is HIGHLY regualted.  HIGHLY organized in small details, to a. comply with regulations, b. save profits via security, transaction detail, etc.  The ultimate security systems are required because it is high-stakes, highly personal information.  It is also much to the bank's favor.
			Here's the thing... I did not mention above that the software helps to create a better experience for the customer.  Nor did I mention that it improves employee efficiency.  Never before has software been so heavily capable of being user friendly.

			Let me say that again: Never before has software been so heavily capable of being user friendly.  What I mean by that is that the technology we have today is truly amazing if you think about it in the scope of the last 10-50 years.  "They" said...

			What did "they" tell you about the stock market?  This is a fascinating thing: where on the priority scale does Improving Customer Service fall?

			Do you know why the internet is not regulated?  2 things come to mind: 
			<ol>
				<li>They can't.  It's just too big.</li>
				<li>it's public.  it self-regulates.</li>
				<li>BTW: could it be taxed?</li>
			</ol>

			I will not put in writing, but do have experience to dwell upon and knowledge of the interior processes of the banks.  Some of the processes I could describe are public to any 'intutive consumer'.  Others could violate a non-disclosure agreement I have with the bank, but I could discuss some things in an appropriate environment.
		</div>

		<div class="idea pull-right well">
			<h3>More Ideas</h3>
			<ul>
				<li>
					
				</li>
				<li>
					<p>
						Common data formats are shared by Google, Yahoo, Bing, Flickr, YouTube, Twitter, Facebook.  All we have to do is plug these things together.
					</p>

					<p>From a layman's perspective, it's very simple, right?</p>
					<p>Problem is, from a programmer's perspective it is very long and tedious process.  Especially in the past, we were talking about a large, compiled codebase optimized for X technological limitation.  </p>
					<p>Today, the only limitation is bandwidth.  We have limitless storage capabilites.  Here is a paper I wrote in Business 101 in 1996 about the future of computer technology.  //ref. I argued that the US was more interested in pop culture than in science and technology.  How things have changed over the past ~20 years... (not much in the regard... depends on who you ask, I guess.)</p>
					What is to become of the future?
				</li>
				<li>
					<a href="ow.ly/lYMIl">Hootsuite said: </a><img src="http://gristech.com/img/screen/hoottweet.png" alt="hoottweet">
				</li>
			</ul>
		</div>
 		</div>
 	</div>

 </div>



	<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<div class="row">
		<!-- <div class="span6"> -->
			<img class="pull-right img-circle" src="http://gristech.com/img/automation-busn.jpg" alt="think about it">
			<h1>The Next Level<br><small>How can a Custom Web Application help your business?</small></h1>
<p>For starters, you can...</p>
			<ul>
				<li>Generate Traffic</li>
				<li>Provide Better service for your clients</li>
				<li>Make life easier for you and your employees</li>
				<li>Save Money</li>
				<li>Make Money</li>
			</ul>
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
			
		<!-- </div> -->
		<!-- <div class="span5 text-center" style="padding:30px;"> -->
			
		<!-- </div> -->
	</div>
</div>
<!-- end hero-unit -->
	

		<h2>What is a website, anyway?</h2>
		<p>A website is a just organized text, images, video.  It is very, very simple.</p>

		<a href="http://www.whatisawebsite.com/">http://www.whatisawebsite.com/</a>

			<p>Your website is the first thing that many of your customers will know of your business, and you may only have one shot to convert "searcher" to "prospect", and "prospect" to "client".</p>
			<p>Your website helps you turn "clients" into "happy clients" and keep them that way.</p>
	
			<h3>It's not just a website...</h3>
			
			<p>
				Your website is a marketing machine.  On the front end, it is your 24/7 connection to clients.
			</p>
				<p>On the back end, it allows you to study your clients so that you may make better decisions.</p>
				<p>
					Starting/Upgrading/Updating your website is very easy to put off, because you are too busy running your business to deal with it.  It may seem too expensive.  Maybe you've researched other Web Designers, and you've found high prices.
				</p>
				<p>
					Maybe you've already got a nice website that you paid for.  Or, maybe you have been thinking about building one for youself.  
				</p>
				<p>
					This is very easy:
					<ul>
						<li>Sign Up</li>
						<li>Contact Me.  Tell me what you need, don't need, what you like, and what you don't like.  To get the juices flowing, read "Features", "Tools", and explore the "Demo".</li>
					</ul>
				</p>


<!-- <div id="foobar">
    Contact me!
</div>
<a href="#" id="toggle">Contact</a> -->
<style>
#contact
{
    display: none;
    background: grey;
    color: #FFF;
    padding: 10px;
}
.well{
	box-shadow: 10px 10px 5px #666666;
}
</style>

<script>
// $(function()
// {
//      $("a#toggle").click(function()
//      {
//          $("#foobar").slideToggle();
//          return false;
//      }); 
// });
</script>


<div class="container-fluid">
  <div class="row-fluid">

<!--     <div class="collapse-group">
      <div class="span2">
BLAH BLAH
      </div>
      <a class="btn" data-toggle="collapse" data-target=".span2">Toggle</a>
    </div> -->
    <div class="span10">
      <!--Body content-->
    </div>
  </div>
</div>
			
<div class="span12">
<!-- <ul class="tag">
	<li><i class="icon-tag"></i></li>
	<?php

		// foreach ($alltags as $mytag) {
		// 	echo "<li><a href='/tags/$mytag'>$mytag</a></li>";
		// }
		 // $mylist;	
	?>
</ul> -->
</div>


<div class="span12 text-center">
{{ $posts->links() }}
</div>
<!-- https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site/issues/49 -->

@stop

