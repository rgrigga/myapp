@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Post Update ::
@parent
@stop


{{-- Content --}}
@section('main')

<style>

	.alpha{
		/*height: 400px;*/
		background-color: rgba(25,20,15,.1);
	}
	.beta{
		/*height: 400px;*/
		background-color: rgba(250,200,150,.1);
	}

	ul.tag li{
	    display: inline;
	    background-color: orange;
	    padding: 5px;
	}
	

	a:hover{
		background-color: orange;
		text-decoration: none;
	}

	.navbar-fixed-top{
		position: fixed;
	}


	.alert-block{
		position: fixed;
		z-index: 5;
		margin-top: 10%;
	}

	@media screen and (max-width: 979px) {
	    .contentwrap { padding-top: 20px; }
		.span50{
			width: 50%;
		}
	}
</style>
<script>
// 	$('[data-toggle=collapse]').click(function(){
	
//   	// toggle icon
//   	$(this).find("i").toggleClass("icon-angle-right icon-angle-down");
  
// });

// $('.collapse').on('show', function (e) {
  
//   	// hide open menus
//   	$('.collapse').each(function(){
//       if ($(this).hasClass('in')) {
//           $(this).collapse('toggle');
//       }
//     });
  
// })



</script>
<script type="text/javascript">
    $(function() {
        $('#blog').redactor({
            imageUpload: '/redactorUpload'
        });
     });
</script>
<div class="">
	<a href="{{{ URL::to('blog/'.$post->slug) }}}">Fullscreen: {{{ URL::to('blog/'.$post->slug) }}}</a>
</div>


<form method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	


@include('admin/navbar-post-edit')


<!-- ************************************************* -->

	<style>

		.stuck{
			bottom:-20px;
			position:fixed;
			right:0px;
			z-index:10;
			max-height: 30%;
			overflow: hidden;
			max-width: 300px;
		}

		img.thumby{
			/*width: 64px;*/
			float:left;
			height: 50px;
		}
	</style>

<!-- *************************************************************** -->
<!-- Stuck: -->

	<div class="pull-right well stuck">
				<h6>
					<a data-toggle="collapse" data-target="#tweet">
						<i class="icon-arrow-down"></i>Toggle
					</a>
				</h6>

		<div class="collapse in" id="tweet">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ URL::to('blog/'.$post->slug) }}" data-text="{{{$post->title}}} : {{{strip_tags($post->meta_description)}}}" data-via="{{{$company->twitter}}}">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			<img class="thumby" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">
			<h3 class="text-right">
				<a href="#tweet"><i class="icon-twitter"></i></a>
				<a href="#fb"><i class="icon-facebook"></i></a>

			</h3>


			
			<p>{{$post->title}} : {{Str::limit($post->meta_description,'75','...')}} 
				<a href="{{URL::to('blog/'.$post->slug)}}">{{URL::to('blog/'.$post->slug)}}</a> via {{{$company->twitter}}}</p>
		</div>

	</div>




<!-- ************************************************************ -->
<!-- TAGS -->


	<!-- Meta Keywords -->
	<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
		{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
		<label class="control-label" for="meta-keywords">
			<a href="#" data-toggle="collapse" data-target="#MyTags">
				<i class="icon-pencil"></i>
				Tags/Keywords
			  	<i class="icon-angle-down"></i>
			</a>
		</label>
			<ul class='tag'>
				<li><i class="icon-tag"></i> tags:</li>
				@foreach($post->tags() as $tag)
					<li>{{ $tag }}</li>
				@endforeach
			</ul>
			
		

		<div class="collapse" id="MyTags">
			<div class="controls">
				<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', $post->meta_keywords) }}}" />
			</div>
			<p>Enter keywords and/or key phrases as a list separated by commas.  For example: "seo, php, security".  These also help your content appear correctly.  Your posts already automagically contain an internal tag that links your post to your site.  </p>
			<p>Once thought to be important to SEO, google stopped using keywords in 2009.  <a href="/blog/security">More info</a></p>
			<p>The keywords tag is tied to tags on this site.  So, this is a comma-separated list of tags.  It works the same way in wordpress.</p>
		</div>
	</div>






<!-- **********************************************? -->
<!-- Form Group -->

	<div class="control-group {{{ $errors->has('title') ? 'error' : '' }}}">
		{{ $errors->first('title', '<span class="help-inline">:message</span>') }}
		<label class="control-label" for="title">
		<a href="#" data-toggle="collapse" data-target="#MyTitle">
			  <i class="icon-pencil"></i> Title <i class="icon-angle-down"></i>
			</a>
			</label>
		<h1>
			{{{$post->title}}}
		</h1>



		<div style="list-style: none;" class="collapse" id="MyTitle">
			<input type="text" name="title" id="title" value="{{{ Input::old('title', $post->title) }}}" />
		</div>	
	</div>

	<div class="control-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
		<label for="meta_title"><a href="#" data-toggle="collapse" data-target="#Meta-title">
			<i class="icon-pencil"></i>
			 meta-title
			<i class="icon-angle-down"></i>
			</a>

			</label>
		<h2>
			{{{$post->meta_title}}}
		</h2>

		{{ $errors->first('meta-title', '<span class="help-inline">:message</span>') }}
		 
		<div class="collapse" id="Meta-title">
			<input type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title', $post->meta_title) }}}" />
			<p>Meta Title is the text that appears at the top of the browser window when the user looks at your page. It also helps search engines understand what your page is about.  Therefore, it should be simple, descriptive, and use a keyword or two. <a href="https://www.google.com/search?q=seo+meta-titles&ie=utf-8&oe=utf-8">google it!</a></p>
		</div>
	</div>



	<!-- *************************************************** -->

	<div class="control-group {{{ $errors->has('image') ? 'error' : '' }}}">
		<label for="image">
			<a href="#" data-toggle="collapse" data-target="#MyImage">
			  <i class="icon-pencil"></i>
			  Main Image
			  <i class="icon-angle-down"></i>
			</a>
		</label>
		<h3>
			{{{$post->image}}}
			 <img class="thumby" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">
		</h3>
		<label 
			class="muted control-label" for="image">url: {{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}

		</label>

		{{ $errors->first('image', '<span class="help-inline">:message</span>') }}

		<div style="list-style: none;" class="collapse" id="MyImage">

		<img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">
			<input type="text" name="image" id="image" value="{{{ Input::old('image', $post->image) }}}" />
		</div>
			
	</div>



<!-- ********************************************************* -->

					<!-- Meta Description -->





	<div class="control-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
		{{ $errors->first('meta-description', '<span class="help-inline">:message</span>') }}
		<label class="control-label" for="meta-description">

			<a href="#" data-toggle="collapse" data-target="#MyDescription">
				<i class="icon-pencil"></i>
				Meta Description
			  	<i class="icon-angle-down"></i>
			</a>
		</label>

		<div class="collapse in" id="MyDescription">
			<div class="controls">
				<textarea class="redactor" name="meta-description" id="meta-description">{{{ Input::old('meta-description', $post->meta_description) }}}</textarea>
			</div>
			<p><i class="icon-facebook"></i> Meta Description is a 158 character summary of your post.  The Meta-Description may be displayed as the text for a google result, for example...</p>
			<p>It is also used on facebook</p>
			There are many free <a href="https://github.com/cheeaun/mooeditable/wiki/Alternative-Javascript-WYSIWYG-editors">Alternatives to Redactor</a>
		</div>
	</div>			
	<!-- ./ meta description -->


<!-- http://imsky.github.io/holder/ -->

	<!-- *************************************************** -->

	<div class="control-group {{{ $errors->has('content') ? 'error' : '' }}}">
		
		{{ $errors->first('content', '<span class="help-inline">:message</span>') }}
		<label class="control-label" for="content">
		<a href="#" data-toggle="collapse" data-target="#MyContent">
			<i class="icon-pencil"></i>
			Content
		  	<i class="icon-angle-down"></i>
		</a>
		</label>

		<style>
			#MyContent{
				/*max-height:400px;*/
				/*overflow: scroll; */
			}
		</style>

		<div class="collapse in" id="MyContent">
			<div class="controls">

				<textarea class="redactor" name="content" id="redactor_content">

				{{{ Input::old('content', $post->content) }}}
				</textarea>

			</div>
			<a href="http://imperavi.com/redactor/docs/">Redactor Docs</a>
		</div>
	</div>
<script type="text/javascript">
$(function()
{
    $('#redactor_content').redactor({
        air: true
    });
});
</script>
<!-- ************************************************************** -->		<i class="icon-facebook">icon-facebook</i>
<i class="icon-thumbs-up">.icon-thumbs-up</i>
<i class="icon-twitter">icon-twitter</i>
<i class="icon-skype">icon-skype</i>
<i class="icon-share">icon-share</i>
<i class="icon-linkedin">icon-linkedin</i>
<i class="icon-question-sign">icon-question-sign</i>
<i class="icon-link">icon-link</i>
<i class="icon-info-sign">icon-info-sign</i>
<i class="icon-globe">icon-globe</i>
<i class="icon-google-plus">icon-google-plus</i>
<i class="icon-gears">icon-gears</i>
<i class="icon-ok-circle">icon-ok-circle</i>



<!-- 	<div class="control-group {{{ $errors->has('content') ? 'error' : '' }}}"> -->

</form>



<h6>
<ul>
	<li class="nav-header">
	  <a href="#" data-toggle="collapse" data-target="#alpha">
	    Alpha <i class="icon-angle-right"></i>
	  </a>
	  <ul style="list-style: none;" class="collapse" id="alpha">
	    <li><a href="#">Information &amp; Stats</a></li>
	    <li><a href="#">DJ Says</a></li>
	    <li><a href="#">Request Line</a></li>
	    <li><a href="#">Timetable</a></li>
	    <li><a href="#">Banned Songs</a></li>
	  </ul>
	</li>

	<li class="nav-header">
	  <a href="#" data-toggle="collapse" data-target="#beta">
	    beta <i class="icon-angle-right"></i>
	  </a>
	  <ul style="list-style: none;" class="collapse" id="beta">
	    <li><a href="#">Information &amp; Stats</a></li>
	    <li><a href="#">DJ Says</a></li>
	    <li><a href="#">Request Line</a></li>
	    <li><a href="#">Timetable</a></li>
	    <li><a href="#">Banned Songs</a></li>
	  </ul>
	</li>

	<li class="nav-header">
	<a href="#" data-toggle="collapse" data-target="#headDJMenu">
	    Look at the post object<i class="icon-angle-right"></i>
	  </a>
	  <ul style="list-style: none;" class="collapse" id="headDJMenu">
	    <!-- <li><a href="#"><i class="icon-"></i>All Banned Songs</a></li> -->
	    <li>
	    	<?php
				var_dump($post);
			?>
	    </li>
	  </ul>
	</li>

	<li class="nav-header">
	  <a href="#" data-toggle="collapse" data-target="#myerrors">
	    errors <i class="icon-angle-right"></i>
	  </a>
	  <ul style="list-style: none;" class="collapse" id="myerrors">
	    <li>
	    	<?php
				var_dump($errors);
			?>
		</li>
	    
	  </ul>
	</li>
</ul>
</h6>

<ul>
	<li class='warning'>
		Blah
	</li>
	<li class='warning'>
		Blah
	</li>
	<li class='warning'>
		Blah
	</li>	
</ul>


<style>
.span50{
	
}
</style>


<div class="row-fluid">
	<div class="span4">
		<h1>Learn More</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, doloribus rem quos facere aspernatur autem dolorum omnis dolor itaque a!</p>
		<ul>
			<li class="active"><a href="#"><i class="icon-home"></i>Home</a></li>
			<li><a href="#"><i class="icon-envelope-alt"></i>Messages <span class="badge badge-info">4</span></a></li>
			<li><a href="#"><i class="icon-cogs"></i>Settings</a></li>
			<li><a href="#"><i class="icon-comment"></i>Shoutbox</a></li>
			<li><a href="#"><i class="icon-user"></i>Staff List</a></li>
			<li><a href="#"><i class="icon-flag"></i>My Infractions</a></li>
			<li><a href="#"><i class="icon-exclamation-sign"></i>Rules &amp; Regulations</a></li>
			<li><a href="#"><i class="icon-off"></i>Logout</a></li>
		</ul>
	</div>
	<div class="span4 pull-right">
		<h1>Learn More</h1>
		<p>This page is used for building content which will be used in many other places.  Print, social, email, flyers, web... it's very flexible!</p>
	</div>
</div>


@stop
@section('dev')


@yield('companies.index')





<!-- @ stop -->


<h3></h3>
<!-- <form method="post" action="" autocomplete="off"> -->
	<!-- CSRF Token -->
	<!-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> -->
	<!-- ./ csrf token -->








	 	<div class="accordion-group">
<!-- 	 		<em>accordian group</em> -->
	 		<div class="accordion-heading">
	 			<!-- <em>accordian heading</em> -->
	 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
	 				
	 			</a>
	 		</div>
	 		<!-- add class 'in' to the next div to expand on pageload -->
	 		<div id="collapseOne" class="accordion-body collapse">
	 			




	 			<div class="accordion-inner">

					<!-- Meta Title -->

					<p>Your image should pop!  This feature image will be seen everywhere...</p>
	 			</div>
	 		</div>
	 	</div>



					
					<!-- ./ meta title -->



					<!-- Meta Image -->
		<!-- 			<div class="control-group {{{ $errors->has('meta-image') ? 'error' : '' }}}">
						<label class="control-label" for="meta-image">Meta Image</label>
						<div class="controls">
							<input type="text" name="meta-image" id="meta-image" value="{{{ Input::old('meta-image', $post->meta_image) }}}" />
							{{{ $errors->first('meta-image', '<span class="help-inline">:message</span>') }}}
						</div>
					</div> -->
					<!-- ./ meta image -->



@stop