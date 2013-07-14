@extends('layouts.scaffold')

@section('title')
@parent
{{{ $company->name }}} - {{{$company->slogan}}}
@stop

@section('meta_description')
@parent
{{$company->description}}
@stop

@section('meta_keywords')
@parent

@stop

@section('styles')

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
<style>
	html,body {
		background-color: rgba(3,71,105,1);
		/*background-color: rgba(235,196,162,.2);*/
		color: white;
		font-family: 'EB Garamond', serif;

	}

	.navbar-inner{
		background-image: none;
		background-color: rgba(3,71,105,1);
	}

	.navbar .brand, .navbar .nav >li >a {
		text-shadow:none;
	}
	.well{
		background-color: rgba(121,186,242,.6);
		/*box-shadow: 2px 2px 1px #8285E6;*/
		/*font-family: */
	}

	p {
		font-size: 24px;
	}

	h1,h2{
		color:rgba(18,124,166,1);
		font-family: 'Graduate' serif;
		/*font-size: 32px;*/
		/*box-shadow: 5px 5px 3px #666666;*/
	}

	h1 {
		font-size: 72;
	}
	h2{
		font-size: 40;
	}
</style>
@stop



@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

		<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
		<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

		<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}"> -->
		<link rel="shortcut icon" href="{{{ asset('assets/ico/'.$company->name.'/favicon.png') }}}">
@stop


<!-- <h2>YO</h2> -->

@section('nav')
@include('site.partials.nav-top-min')

@show



@section('main')
<?php
	$env=App::environment();
	// echo "<div class='alert alert-info'>Welcome to the <strong>".$env."</strong> environment.</div>";

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
	.accordion-group{
		border: none;
	}
	.page-header{
		margin-top: 60px;
		border-bottom: 0;
	}
	.page-header h1{
		line-height: 1.2em;
	}
	.page-header h2{
		margin: 0;
	}
	.page-header h2:hover{
		color: orange;
	}
	.iconbar{
		font-size: 24px;
	}
</style>

<div class="page-header">
<h1>Advantage Services</h1>
	<div class="span3 pull-right">
		<!-- //sidebar -->
		<!-- <div data-spy="affix" data-offset-top="60"> -->
			<div class="iconbar" style="padding-top:5px">
			<!-- 	<div class="iconbutton">
					
				</div> -->
			    <a href="mailto:{{$company->email}}">
			        <i class="icon-envelope-alt icon-2x"></i>
			        <!-- <img src="http://gristech.com/buttons/email.png" class="img-circle"> -->
			    </a>
			    <a href="tel:{{$company->phone}}" class="social-icon">
			        <i class="icon-phone-sign icon-2x"></i>
			        <!-- <img src="http://gristech.com/buttons/email.png" class="img-circle"> -->
			    </a>
				<a href="http://facebook.com/{{$company->facebook}}" class="social-icon">
				    <!-- <img src="http://gristech.com/img/facebook.png" class="img-circle"> -->
					<i class="icon-facebook-sign icon-2x"></i>
				</a>
			    <!-- <a href="http://twitter.com/{{$company->twitter}}" class="social-icon"> -->

			    	<!-- <i class="icon-twitter-sign icon-2x"></i> -->
			        <!-- <img src="http://gristech.com/img/twitter.png" class="img-circle"> -->
			    <!-- </a> -->
			    <!-- <a href="http://linkedin.com/{{$company->linkedin}}" class="social-icon">
			    	<i class="icon-linkedin-sign icon-2x"></i> -->
			        <!-- <img src="http://gristech.com/buttons/linkedin.png" class="img-circle"> -->
			    <!-- </a> -->
			</div>
			<p>We treat your home as our own</p>
			<img src="{{asset($company->image)}}" alt="MyImage">
		<!-- </div> -->
	</div>
 <div class="accordion" id="accordion">
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
 				<h2>Painting</h2>
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse">
 			<!-- //add in to open on load -->
 			<div class="accordion-inner">
 				<h3>Exterior</h3>
				<h3>Interior</h3>
				<h3>Decks And Fences</h3>
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
 				<h2>Roofing</h2>
 			</a>
 		</div>
 		<div id="collapseTwo" class="accordion-body collapse">
 			<div class="accordion-inner">
 				
				<h3>Repairs</h3>
				<h3>Replacement</h3>
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
 				<h2>Power Washing</h2>
 			</a>
 		</div>
 		<div id="collapseThree" class="accordion-body collapse">
 			<div class="accordion-inner">
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
 				<h2>Gutter Cleaning</h2>
 			</a>
 		</div>
 		<div id="collapseFour" class="accordion-body collapse">
 			<div class="accordion-inner">
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
 				<h2>Concrete Cleaning & Sealing</h2>
 			</a>
 		</div>
 		<div id="collapseFive" class="accordion-body collapse">
 			<div class="accordion-inner">
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 </div>


	
	
		
	
	
	
	
</div>

<div class="notes">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, ratione magni illo nam iusto accusantium distinctio optio consectetur aliquid eveniet.</p>
</div>

<style> 
/*@font-face
{
font-family: myFirstFont;
src: url(sansation_light.ttf);
}

div
{
font-family:myFirstFont;
}*/
</style>

<div class="row-fluid">

	<!-- sidebar -->

	<div class="row9">
		<!-- //main area -->

	</div>
</div>

<style>
	.hero-unit{
		color: black;
	}
</style>


<div class="row-fluid">
	<div class="hero-unit">
    <h1>Advantage Services</h1>
    <?php 
        $items = array('Painting','Roofing', 'Concrete', 'Blacktop');
    ?>

    <ul>
    @foreach($items as $item)
        <li>{{$item}}</li> 
    @endforeach
    </ul>
    
    <div class="h2">We treat Your Home as our own.</div>
    <p>
    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, pariatur, repudiandae, minima reprehenderit perferendis suscipit aperiam earum vitae animi a obcaecati ducimus corporis necessitatibus atque expedita harum quod ea dicta tenetur asperiores alias corrupti distinctio consequatur culpa possimus aspernatur modi fugiat consectetur facilis officia ad debitis sapiente nulla inventore error!
    </p>
  </div>
</div>

<div class="row-fluid">
	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-pills">
		@foreach($company->menus() as $menu)
	    <li><a href="#{{$menu}}" data-toggle="tab"><i class="icon-rocket icon-4x"></i> {{{$menu}}}</a></li>
	    @endforeach
	    <li class="active"><a href="#tab1" data-toggle="tab">Section 2</a></li>
	  </ul>
	  
	  <div class="tab-content">
	    @foreach($company->menus() as $menu)
	    <div class="tab-pane" id="{{{$menu}}}">
	      <p>Howdy, I'm {{{$menu}}}.</p>
	    </div>
	    @endforeach
	    <div class="tab-pane active" id="tab1">
	      <p>Advantage Services is a family owned business with a standard of excellence in all aspects of Residential and Commercial Painting, Roofing, Deck and Fence Staining, and Power Washing. Formerly known as Advantage Painting, Advantage Services has been known throughout Columbus and it's surrounding areas as the first name in professionalism and quality, since 1990.</p>
	    </div>
	  </div>
	</div>
</div>

<div class="row-fluid">
	<div class="span4">
		<!-- <div class="pull-right"> -->
		<!-- <img src="{{asset($company->image)}}" alt="MyImage"> -->
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
</div>

	<div class="span8 offset4">
		<h1>Posts:</h1>
		<div class="text-center">
		{{ $posts->links() }}
		</div>
	
@foreach ($posts as $post)
	<div class="row-fluid">
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
</div></div>
<!-- ************************************************ -->




	

	</div>
@stop