<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Ryan Grissinger's Resume</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<!--     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}"> -->
	<link rel="shortcut icon" href="{{{ asset('assets/gristech/g5.png') }}}">

@section('js-top')

@show

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/resume.less" />
    
    <!-- less.js, which compiles less on the fly -->
    <script src="/assets/js/less.js" type="text/javascript"></script>

<!-- http://lea.verou.me/css3patterns/# -->
  </head>
  <body class="one">
  	<nav class="user-top navbar noprint" role="navigation">
  		@yield('page-nav')
  	</nav>
<div class="content-wrap container">
	<!-- <div class="container"> -->
		<header id="page-header">
	  		@yield('page-header')
	  	</header>

<!--     <div class="testrow">
      <div class="testcol" id="col1">1</div>
      <div class="testcol" id="col2">2</div>
      <div class="testcol" id="col3">3
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, pariatur cum magnam distinctio voluptatem laudantium eligendi aliquid quam error at.</div>
    </div> -->

    <div id="mega-wrap">
      <section id="content-main">
        @yield('content-main')
      </section>
      <aside id="content-secondary">
        @yield('content-secondary')
      </aside>
    </div>
	</div>

  	<footer id="page-footer">
  		<div class="container">
      @yield('page-footer')  
      </div>
  	</footer>
<!-- </div> -->

	@section('js-bottom')
		<script src="/assets/js/jquery.v1.8.3.min.js"></script>
		<script src="/assets/dist/js/bootstrap.min.js"></script>

		<!-- 
		<script src="/assets/js/fixmyoverlap.js"></script>
		<script src="/assets/js/resume.js"></script>

		<script src="/assets/js/master.js"></script>
		 -->

	@show

<script>
function fixMyOverlap(){
    $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
    $('.content-wrap') .css({'padding-top': (
        $('.user-top').height()
         + $('.admin-top').height()
         + 0 )+'px'
        });
  }

function addMyClasses(){
	$('nav').first()
	.addClass('navbar-fixed-top navbar-inverse')
	;
	$('img').addClass('img-responsive');
	$('#demo-nav').addClass('nav nav-pills');
	// $('.content-wrap').addClass('container');
}
  function noClasses(){
    $("*").removeClass();
  }

  function myClass(id,myclassname){
    
    if(!id){return;}
    if(!myclassname){
      myclassname='one';
    }
    // alert(id+myclassname);
    $('#'+id)
      .removeClass()
      .addClass(myclassname);
  }

  function myTheme(classname){
    if(!classname){
      classname='one';
    }
    $('body').removeClass()
    .addClass(classname);
  }
// function equalHeights(){
// 	//This is dumb on smaller screens
// 	var highestCol = Math.max($('#content-main').height(),$('#content-secondary').height());
// 	$('#content-main').height(highestCol);
// 	$('#content-secondary').height(highestCol);
// }


  $(document).ready(function(){

    fixMyOverlap();
    addMyClasses();
    // $('pre').addClass('prettyprint');
    $('[data-toggle=offcanvas]').click(function() {
      $('.row-offcanvas').toggleClass('active');
    });
  });

  $(window).resize(function(){
  	// alert("bam");
  	// console.log('bam!');
    fixMyOverlap();
  });

</script>

  </body>
</html>