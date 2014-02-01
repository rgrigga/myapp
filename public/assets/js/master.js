  //where is fixmyoverlap???
  
  $(document).ready(function(){

    //this converts font awesome 3 icons to font-awesome 4 icons.
    var icons = $(document).find($('i[class^="icon-"]'));
    icons.each(function(element){
        var oldclass=$(this).attr('class');
        var newclass=oldclass.replace('icon-','fa fa-');
        $(this).removeClass(oldclass).addClass(newclass);

        console.log("replaced \""+oldclass+"\" with \""+$(this).attr('class')+"\"");
    
    });

  console.log('adding prettyprint');
  $('pre').addClass('prettyprint');

    alert("js/master.js");
    // fixMyOverlap();
    // addClasses();
    $('pre').addClass('prettyprint');
    $('[data-toggle=offcanvas]').click(function() {
      $('.row-offcanvas').toggleClass('active');
    });
  });


  $(window).resize(function(){
    // fixMyOverlap();
  });

              window.onload = function()
            {
                if(!window.jQuery)
                {
                    alert('jQuery not loaded');
                }
                else
                {
                    // alert('jQuery is loaded');
                }
            }
// 

// http://jsperf.com/jquery-body-vs-document-body-selector
// http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site
                // alert('jQuery loaded');
    $(document).ready(function(){
// "input[name^='news']"

    // console.log($(document).find($('i')).attr('class'));

    $(window).scroll(function(){
        var posFromTop = $(window).scrollTop();

        if(posFromTop > 200){
        // if more than 200px from the top do something
        $('.user-top').fadeOut(300);
        $('.dot').fadeIn(300);
        } else {
        // otherwise do something else.
        $('.user-top').fadeIn(300);
        $('.dot').fadeOut(300);
        }
    });

        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});

        // $('.contentwrap') .css({'padding-top': (
        //     $('.user-top').height()
        //      + $('.admin-top').height()
        //      + 0 )+'px'
        // });

        $('.content-wrapper') .css({'padding-top': (
            $('.user-top').height()
             + $('.admin-top').height()
             + 0 )+'px'
        });

        $('.india') .css({'top': (
            20
            -$('.user-top').height()
            - $('.admin-top').height()
            )+'px'
        });

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

        $('.navbar-fixed-top').css('margin-bottom','0px');

    $(window).resize(function(){
        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        // $('.contentwrap') .css({'padding-top': (
        //     $('.user-top').height()
        //      + $('.admin-top').height()
        //      + 0 )+'px'
        // });
        $('.content-wrapper') .css({'padding-top': (
            $('.user-top').height()
             + $('.admin-top').height()
             + 0 )+'px'
        });
        $('.india') .css({'top': (
            -$('.user-top').height()
             - $('.admin-top').height()
             - 20 )+'px'
        });
    });
      // margin-top: 40px;
                
                $('#side-wrapper').height($("#sidebar").height());
                
                // $(".nav").height()+2));
                $('.collapse-group .btn').on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $collapse = $this.closest('.collapse-group').find('.collapse');
                    $collapse.collapse('toggle');
                });


                // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
                // $('.thumbnail').equalHeights();

                // $('.corner').css('background-color','red');

            });