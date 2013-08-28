@extends('admin/layouts/default')

<!-- http://www.tinymce.com/ -->

{{-- Web site Title --}}
@section('title')
Post Update ::
@parent
@stop

@section('styles')
@parent
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

	<!-- This display's the company's less page -->
	<!-- <link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" /> -->
	
	<script src="/assets/js/less.js" type="text/javascript"></script>
@stop


@section('secondary')


{{View::make('site.post.article',compact('post'))}}
	




	<section class="info">
		<h4>tags</h4>
		<p>Enter keywords and/or key phrases as a list separated by commas.  For example: "seo, php, security".  These also help your content appear correctly.  Your posts already automagically contain an internal tag that links your post to your site.  </p>
	<p>Once thought to be important to SEO, google stopped using keywords in 2009.  <a href="/blog/security">More info</a></p>
	<p>The keywords tag is tied to tags on this site.  So, this is a comma-separated list of tags.  It works the same way in wordpress.</p>
	</section>


			<section class="info">
				<h5>meta-description</h5>
				<p><i class="icon-facebook"></i> Meta Description is a 158 character summary of your post.  The Meta-Description may be displayed as the text for a google result, for example...</p>
				<p>It is also used on facebook</p>


				<p>There are many free <a href="https://github.com/cheeaun/mooeditable/wiki/Alternative-Javascript-WYSIWYG-editors">Alternatives to Redactor</a>-<a href="https://github.com/mindmup/bootstrap-wysiwyg/">This one</a> is buggy</p>

				<a href="http://imperavi.com/redactor/docs/">Redactor Docs</a>
			</section>	

<!-- ************************************************************** -->		
	<div class="pull-right well fixed-bottom-right">
	<h6>
		<a data-toggle="collapse" data-target="#tweet">
			<i class="icon-arrow-down"></i>Tweet
		</a>
	</h6>

		<div class="collapse in" id="tweet">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ URL::to('blog/'.$post->slug) }}" data-text="{{{$post->title}}} : {{{strip_tags($post->
			meta_description)}}}" data-via="{{{$company->twitter}}}">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			<img class="thumby" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this);">

			<h3 class="text-right">
				<a href="#tweet"><i class="icon-twitter"></i></a>
				<a href="#fb"><i class="icon-facebook"></i></a>
			</h3>


			
			<p>{{$post->title}} : {{Str::limit($post->meta_description,'10','...')}} 
				<a href="{{URL::to('blog/'.$post->slug)}}">{{URL::to('blog/'.$post->slug)}}</a> via {{{$company->twitter}}}</p>
		</div>

	</div>

<section class="icons">
	<i class="icon-facebook">icon-facebook</i>
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
</section>
@stop

<!-- end secondary -->









{{-- Content --}}
@section('main')

<div class="">
	<a href="{{{ URL::to('blog/'.$post->slug) }}}">Fullscreen: {{{ URL::to('blog/'.$post->slug) }}}</a>
</div>

<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#Example">
  <i class="icon-pencil"></i> Example
</button>

<form method="post" action="" autocomplete="off" accept-charset="UTF-8" >
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

@include('admin/navbar-post-edit')

<!-- *************************************************************** -->

		
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
      <h4 class="panel-title">

        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          
          <ul class='tag'>
			<li><i class="icon-tags"></i>
          </li>
			@foreach($post->tags() as $tag)
				<li>{{ $tag }}</li>
			@endforeach
		</ul>
        </a>


      </h4>
      {{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
			<div class="controls">
				<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', $post->meta_keywords) }}}" />
			<em>can use multiple companies to share content</em>
			</div>

      </div>
    </div>
  </div>



  <div class="panel panel-default">
    <div class="panel-heading {{{ $errors->has('content') ? 'error' : '' }}}">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#MyContent">
          <i class="icon-pencil"></i>
				Content
			  	<i class="icon-angle-down"></i>
        </a>
      </h4>
      {{ $errors->first('content', '<span class="help-inline">:message</span>') }}
    </div>
    <div id="MyContent" class="panel-collapse collapse">
      <div class="panel-body">
			<div class="controls">
				<textarea class="full-width" name="content" value="content" rows="30">{{{ Input::old('content', isset($post) ? $post->content : null) }}}</textarea>
				{{{ $errors->first('content', '<span class="help-inline">:message</span>') }}}
			</div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading {{{ $errors->has('meta-description') ? 'error' : '' }}}">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#MetaDescription">
          Meta-Description <i class="icon-angle-down"></i>
        </a>
      </h4>
      {{ $errors->first('meta-description', '<span class="help-inline">:message</span>') }}
    </div>
    <div id="MetaDescription" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="controls">
			<textarea class="full-width" name="meta-description" id="meta-description" rows='10'>{{{ Input::old('meta-description', $post->meta_description) }}}</textarea>
		</div>
      </div>
    </div>
  </div>


   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="description" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>




   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#MetaTitle">
          Meta-title
        </a>
      </h4>
    </div>
    <div id="Meta-Title" class="panel-collapse collapse">
      <div class="panel-body">
        <input type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title', $post->meta_title) }}}" />
      </div>
    </div>
  </div>



   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="description" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>















  <div class="panel panel-default">
    <div class="panel-heading {{{ $errors->has('image') ? 'error' : '' }}}">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Image
        </a>
      </h4>
      {{ $errors->first('image', '<span class="help-inline">:message</span>') }}
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
      	<img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this,800,600);">
			{{Form::checkbox('name', 'value', true)}}
			
			<input type="text" name="image" id="image" value="{{{ Input::old('image', $post->image) }}}" />
      </div>
    </div>
  </div>
</div>

<!-- /////////////////////////////////////////// -->
<!-- Stuck: -->






<!-- ************************************************************ -->
<!-- TAGS -->


	<!-- Meta Keywords -->
<!-- 	<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
		{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}} -->




			

		

	<!-- </div> -->






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
			
			<p>Meta Title is the text that appears at the top of the browser window when the user looks at your page. It also helps search engines understand what your page is about.  Therefore, it should be simple, descriptive, and use a keyword or two. <a href="https://www.google.com/search?q=seo+meta-titles&ie=utf-8&oe=utf-8">google it!</a></p>
		</div>
	</div>



	<!-- *************************************************** -->







<!-- ********************************************************* -->

					<!-- Meta Description -->


	
	<!-- ./ meta description -->

<!-- http://sebastiano.me/redactor-js-oem-for-laravel/ -->
<!-- https://twitter.com/laravelphp/statuses/294492336203902976 -->

<!-- http://imsky.github.io/holder/ -->
<!-- http://stackoverflow.com/questions/4622403/any-wysiwyg-rich-text-editor-that-doesnt-use-html-contenteditable-or-designmod -->
<!-- http://customer.io/blog/Email-wysiwyg-editor-inspired-by-jekyll.html -->
	<!-- *************************************************** -->

<!-- 	<div class="panel-group">
		<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#MyDescription">
		  <i class="icon-pencil"></i> Description
		</button>
	</div> -->







<!-- 	<div class="control-group {{{ $errors->has('content') ? 'error' : '' }}}"> -->

</form>
<style>
	.alpha{
		/*height: 400px;*/
		background-color: rgba(25,20,15,.1);
	}
	.beta{
		/*height: 400px;*/
		background-color: rgba(250,200,150,.1);
	}
</style>
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
		<script>
            function imgError(image){
                image.onerror = "";
                //could not get this to work with holder.js
                image.src = "http://placehold.it/300x300";
                return true;
            }
        </script>




<!-- <div id="fb-root"></div> -->
<script>
// google analytics
</script>
<script>
// (function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1";
//   fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
 </script>

<!-- TWITTER: -->
this button will tweet this page
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

@stop




@section('dev')


<!-- @ yield('companies.index') -->

<!-- @ stop -->

<h3></h3>
<!-- <form method="post" action="" autocomplete="off"> -->
	<!-- CSRF Token -->
	<!-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> -->
	<!-- ./ csrf token -->






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