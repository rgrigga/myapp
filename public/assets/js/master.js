  //where is fixmyoverlap???
  
  $(document).ready(function(){
    alert("js/master.js");
    fixMyOverlap();
    addClasses();
    $('pre').addClass('prettyprint');
    $('[data-toggle=offcanvas]').click(function() {
      $('.row-offcanvas').toggleClass('active');
    });
  });


  $(window).resize(function(){
    fixMyOverlap();
  });