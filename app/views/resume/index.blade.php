@extends('resume.layout')

@section('js-top')
@parent
<script>

</script>
@stop

@section('page-nav')
<div class="hidden">
	<h2>
		If you see this text, you're either playing with themes, or bootstrap is not working.
	</h2>
	<p>Please refresh the page to reset everything.  If you think something else might be wrong, please contact support at support@gristech.com.
	</p>
</div>

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".top-nav">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><i class="icon-home"></i> RG</a>
  </div>


<div class="collapse navbar-collapse top-nav">
	<ul class="nav navbar-nav">
		<!-- <li><a href="#cover-letter">Cover Letter</a></li> -->
		<li><a href="#skills">Skills</a></li>
		<li><a href="#experience">Work History</a></li>
		<li><a href="#references">References</a></li>
	</ul>

	<ul class="nav navbar-nav pull-right">
		<li><p class="navbar-text">Themes:</p></li>
		<li><a href="#" onclick="noClasses()">nostyle</a></li>
		<li><a href="#" onclick="myTheme('one')">1</a></li>
		<li><a href="#" onclick="myTheme('two')">2</a></li>
		<li><a href="#" onclick="myTheme('three')">3</a></li>
<!-- 		<li><a href="#" onclick="myClass('mydiv','one')">1</a></li>
		<li><a href="#" onclick="myClass('mydiv','two')">2</a></li>
		<li><a href="#" onclick="myClass('mydiv','three')">3</a></li> -->
	</ul>	
</div>
@stop

@section('page-header')
<div class="print pull-right noprint">
	<a href="javascript:window.print()"><i class="icon-print"></i> Print</a>
	<a href="{{URL::to('resume/doc')}}"><i class="icon-file-text-alt"></i> .doc</a>
	<a href="#"><i class="icon-file"></i> .pdf</a>
</div>

<img id="gravatar" class="pull-left img-circle" src="{{$aurl}}" alt="{{$email}} Avatar">

<h1>Ryan Grissinger</h1>
<p>A summary of my Skills, Values, and Experience</p>
<p>
	<ul>
	<li>614.203.9405</li>
	<li>ryan.grissinger@gmail.com</li>
</ul>
</p>
@stop

@section('content-main')
	
	<section id="skills">
		@include('resume.content.skills')
		@include('resume.content.skills-more')
	</section>
	<section id="experience">
		@include('resume.content.experience')
	</section>
	<section class="more" id="references">
		<h1>References</h1>
		<p>Upon request, I can provide numerous references for any category you prefer:</p>
		<ul>
			<li>Employers/Managers</li>
			<li>Co-workers</li>
			<li>Employees</li>
			<li>Customers</li>
		</ul>
		<p>Please just ask me!</p>
	</section>
@stop


@section('content-secondary')
<!-- <div class="break"></div> -->
	<h1>Examples of my work:</h1>
	<ul id="demo-nav">
		<li><a href="{{URL::to('demo/development')}}">Development</a></li>
		<li><a href="{{URL::to('demo/design')}}">Design</a></li>
	</ul>
	<section id="contact">
		<h2>My Contact Info:</h2>
		<ul>
			<li><i class="icon-phone"></i> 614-203-9405</li>
			<li><i class="icon-envelope"></i> ryan.grissinger@gmail.com</li>
			<li><i class="icon-skype"></i> Skype</li>
		</ul>
	</section>
	<!-- <section id="theonion">
		@ include('resume.onion')
	</section> -->
	<section id="about">
		<h1>About this document</h1>
		<p>This document is an interactive resume.  Not only does it explain my qualifications, it also attempts to demonstrate a number of techniques and best practices.</p>

		<section id="more">
			<header>
				<h2>More about this page:</h2>
			</header>
			<div class="content">
				<h2>Hello world</h2>
				<p>text text text</p>
			</div>
			<footer>This is the footer</footer>
		</section>

	</section>

	<section id="cover-letter">
		@include('resume.content.cover-letter')
	</section>
@stop

@section('page-footer')
<img id="me" src="{{asset('assets/ryan/img/me.png')}}" alt="An image of Ryan">
<div class="pull-right"><a href="http://myapp.gristech.com">&Pi;</a></div>

<!-- @ include('site.partials.gravatar') -->
@stop

@section('js-bottom')
@parent
<script>
// http://learn.jquery.com/plugins/basic-plugin-creation/

(function ( $ ) {

	$.fn.shadeMe = function(){
		this.wrap("<div class='shaded'></div>");
	}

	$.fn.makeModal = function(){

		var kids = this.children();
		var title=kids.filter(":header").first().text();
		if(!title){title="more";}
		var myid="modal"+this.attr('id');
		// var mynam="";

		var mylink="<a data-toggle='modal' href='#"+myid+"' class='btn btn-primary noprint'>"+title+"</a>";
		// data-toggle='modal' href='#myModal' class='btn btn-primary btn-lg'
		// mylink.attr("href","#"+myid);

		
		var modal="<div class='modal fade' id='"+myid+"'></div>";
		var dialog="<div class='modal-dialog'></div>";
		var content="<div class='modal-content'></div>";
		var header="<div class='modal-header'></div>";
		var body="<div class='modal-body'></div>";
		var footer="<div class='modal-footer'></div>";

		var shaded="<div class='shaded'></div>";
		var modaltitle="<div class='modal-title'></div>";
		var closebutton="<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";

		

		// var newheader="title";
		// newheader.wrap("<h1></h1>");
		kids.wrapAll(body);
		// kids.before(newheader);
		// kids.filter(":header").first().insertBefore(".modal-body");

		this.before(mylink);
		// this.wrap(shaded);
		this.wrap(modal);
		this.wrap(dialog);
		this.wrap(content);


		
		// this.filter(function (index){
		// 	return index === 1;	
		// 	})

		

		// $.each(kids,function(index,item){
		// 	var mytag=item.tagName;
		// 	if(mytag=="HEADER"){
		// 		$(item).wrap(shaded);
		// 	}
		// 	console.log(item.tagName);
		// });
		// console.log(kids);

		kids.filter(":header").first()
		.wrap(header)
		;

		kids.filter(":header").first()
		.before(closebutton);
		// .css({ background: "blue", color: "yellow" });

		kids.filter("header")
			// .css({ background: "blue", color: "yellow" })
			.wrap(header);

		kids.filter(".content")
			// .css({ background: "orange", color: "black" })
			.wrap(body)
			;

		kids.filter("footer")
			// .css({ background: "red", color: "blue" })
			.wrap(footer);

		// this.children()
		// 	.filter(":header")
		// 	.append("<span> (header)</span>")
		// 	.css({ background: "#ccc", color: "blue" })
		// ;

		// this.children()
		// 	.filter("p")
		// 	.append("<span> (p)</span>")
		// 	.css({ background: "#ccc", color: "blue" })
		// ;

		// remove first heading
		// wrap in body
		// add new heading .before

		return this;
	}
}( jQuery ));

// $("h2:first-of-type").css({ background: "#ccc", color: "blue" }).append( "<span> - 1st!</span>" );
$("#about").makeModal();
// $("#skills").shadeMe();
$("#skills-more").makeModal();
$("#cover-letter").makeModal();
$("#sales-data").makeModal();
// $("#skills").makeModal();
// $("#experience").makeModal();
// .addClass('BAM')



// var jqxhr = $.ajax( "resume" )
//   .done(function() {
//     alert( "success" );
//   })
//   .fail(function() {
//     alert( "error" );
//   })
//   .always(function() {
//     alert( "complete" );
//   });
 
// // Perform other work here ...
 
// // Set another completion function for the request above
// jqxhr.always(function() {
//   alert( "second complete" );
// });

// console.log(jqxhr);

// // $(document).ready(function(){
//   $("button").click(function(){
//     $("body").load("demo");
//   });
// // });
</script>



@stop


