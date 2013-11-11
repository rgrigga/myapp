<!DOCTYPE html>
<html lang="en">
	<head>
		@section('styles')
		    @stylesheets("admin-css")
		    @stylesheets("bs3-css")
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
			<link rel="stylesheet" href="/assets/css/wysihtml5/bootstrap-wysihtml5.css">
			<link href="/assets/js/bootstrap-wysiwyg/index.css" rel="stylesheet">
		@show
		<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	<body>
		<div class="container">
			<div class="contentwrap theme2">
				<nav>
					@section('nav')
					@include('admin.nav')
					@show
				</nav>
				<div class="page-header">
					@yield('page-header')
				</div>
				<div class="content-secondary">
					@yield('secondary')
				</div>
				<div class="content-main">
					@yield('main')
				</div>

			</div>	
		</div>
		<footer>
			@yield('footer')
			@yield('admin-bottom')
		</footer>

{{-- Basset::show('admin-js.js') --}}
{{-- Basset::show('public.js') --}}
@javascripts('admin-js')
<!-- @ javascripts('myapp-js') -->
@javascripts('bs3-js')

<!-- <script language="javascript" type="text/javascript" src="{{asset('assets/js/jquery.equalheights.js')}}"></script> -->

	<script>
		
		// these are (ruh-roh) globals. You could wrap in an
		// immediately-Invoked Function Expression (IIFE) if you wanted to...
		var currentTallest = 0,
		    currentRowStart = 0,
		    rowDivs = new Array();
		
		function setConformingHeight(el, newHeight) {
			// set the height to something new, but remember the original height in case things change
			el.data("originalHeight", (el.data("originalHeight") == undefined) ? (el.height()) : (el.data("originalHeight")));
			el.height(newHeight);
		}
		
		function getOriginalHeight(el) {
			// if the height has changed, send the originalHeight
			return (el.data("originalHeight") == undefined) ? (el.height()) : (el.data("originalHeight"));
		}
		
		function columnConform() {
		
			// find the tallest DIV in the row, and set the heights of all of the DIVs to match it.
			$('.thumbnail').each(function() {
			
				// "caching"
				var $el = $(this);
				
				var topPosition = $el.position().top;
		
				if (currentRowStart != topPosition) {
		
					// we just came to a new row.  Set all the heights on the completed row
					for(currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) setConformingHeight(rowDivs[currentDiv], currentTallest);
		
					// set the variables for the new row
					rowDivs.length = 0; // empty the array
					currentRowStart = topPosition;
					currentTallest = getOriginalHeight($el);
					rowDivs.push($el);
		
				} else {
		
					// another div on the current row.  Add it to the list and check if it's taller
					rowDivs.push($el);
					currentTallest = (currentTallest < getOriginalHeight($el)) ? (getOriginalHeight($el)) : (currentTallest);
		
				}
				// do the last row
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) setConformingHeight(rowDivs[currentDiv], currentTallest);
		
			});
		
		}
		
		// Dom Ready
		// You might also want to wait until window.onload if images are the things that are unequalizing the blocks
		// $(function() {
		// 	// columnConform();
		// });
		
	</script>
<script>
    window.onload = function()
        {
            // alert('bam!');
            if(!window.jQuery)
            {
                alert('jQuery not loaded');
            }
            else
            {
                 // alert('jQuery is loaded');
            }
        }
$(document).ready(function(){
  // alert("bam");
  // $('.page-header').css('background-color','red');

  $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
  $('.contentwrap') .css({'padding-top': (
      $('.user-top').height()
       + $('.admin-top').height()
       + 0 )+'px'
      });

    // alert('jQuery loaded');
	$('.carousel-inner > .item:first').addClass('active');
	// $('.hero-unit').css('background-color','red');

    $('#side-wrapper').height($("#sidebar").height());
    
    // $(".nav").height()+2));
    $('.collapse-group .btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $collapse = $this.closest('.collapse-group').find('.collapse');
        $collapse.collapse('toggle');
    });

    // $('.wysihtml5').wysihtml5();
    // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
    // $('.thumbnail').equalHeights();


});

$(window).resize(function(){
        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        $('.contentwrap') .css({'padding-top': (
            $('.user-top').height()
             + $('.admin-top').height()
             + 0 )+'px'
        });
    columnConform();

});
</script>
<script>
            $(document).ready(function(){
            	$('div.pagination').find('ul').addClass('pagination');
            });
// 	$('[data-toggle=collapse]').click(function(){
	
//   	// toggle icon
//   	$(this).find("i").toggleClass("icon-angle-right icon-angle-down");
//   $(this).find("i").toggleClass("icon-angle-right icon-angle-down");
// });

// $('.collapse').on('show', function (e) {
  
//   	// hide open menus
//   	$('.collapse').each(function(){
//       if ($(this).hasClass('in')) {
//           $(this).collapse('toggle');
//       }
//     });
  
// });
// language="javascript" type="text/javascript" 

</script>
	</body>
</html>

