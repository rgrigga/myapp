<!doctype html>
<html lang="en">

<!-- WELCOME TO VIEW/LAYOUTS/COMPANY.BLADE.PHP -->
    <head>
    <title>
        @section('title')
        {{$company->brand}}
        @show
    </title>
<!-- META ************************************-->
    @section('meta')
        <meta charset="utf-8">
        <meta name="author" content="Ryan Grissinger" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @show

@section('styles')

<!-- STYLES **********************************-->

    <link rel="stylesheet/less" type="text/css" href="assets/css/less/{{$company->name}}.less" />

    <script src="assets/js/less.js" type="text/javascript"></script>

    <!-- Font-Awesome 3 -->
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- Font-Awesome 4 -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


    <!-- GLOBAL INTERNAL -->
    <!-- A Space for Quick & Dirty.  Move to less stylesheet for long-term. -->
    <style>
/*body{
    background-color: red;
}*/
.panel{
    border:solid 1px blue;
}
    </style>

@show


<!-- ANALYTICS ************************************ -->
@yield('analytics')
<!-- Company should have a views/site/$company/anaytics.php page -->
        
<!-- FAVICONS -->
@section('favicons')
<link rel="shortcut icon" href="{{{ asset('assets/'.strtolower($company->brand).'/favicon.png') }}}">
@show

<!-- // JAVASCRIPT-TOP -->

<!-- holder.js -->
<script src="{{asset('assets/js/holder.js')}}"></script>

<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}"></script>
<script src="{{asset('assets/js/site.js')}}"></script>

    </head>
    <body>
        <!-- <div class="container"> -->
            <!-- <div class="navwrap" id="navwrap"> -->
                <!-- // @ yield('nav') -->    
            @include('site.'.$company->brand.'.partials.nav-top-bs3')

            <!-- if (Auth::user('buckeye')) -->
            @section('admin-top')

                
                    @if(Auth::user('admin'))
                    <div class="admin-top">
                    <!-- @ if($user->ability(array('admin',$env),'*')) -->
                    <!-- // @ if(Auth::user('buckeye')) -->
                    <h6>admin-top</h6>
                    <p>Add a section to the company home page like this:</p>
<?php
$str=<<<'EOD'
echo "Hello World!";
EOD;
?>
                    <pre><code><?=e($str)?></code></pre>                    
                    </div>
                    
                    @else
                    <!-- Please login to edit this page, etc. -->
                    @endif
                 
                
            @show 
        </div>
                           

            @include('notifications')
            

            @if (Session::has('message'))
                
                <div class="flash alert">
                  <button type="button" class="close" data-dismiss="alert"> &times;</button>
                  <p>{{ Session::get('message') }}</p>
                </div>

            @endif

            @if (Session::has('mymessage'))

                <div class="flash alert alert-info">
                  <button type="button" class="close" data-dismiss="alert"><span class="label label-info">Info</span> &times;</button>
                  <p>{{ Session::get('mymessage') }}</p>
                  <!-- {{var_dump($_SESSION);}} -->
                </div>

            @endif
                {{--var_dump($_SESSION);--}}
                    <!-- Content -->

                <div class="content-wrapper">
                    <div class="page-header">
                        @yield('page-header')
                    </div>
                    <div class="content-main">
                        @yield('main')
                        @yield('content')
                    </div>
                    <div class="content-secondary">
                        @yield('secondary')
                    </div>
                </div>

                <div class="posts">
                    @yield('posts')
                </div>

            </div>
            <!-- ./ contentwrap -->
            <!-- @ yield('main') -->
            
            
            @if(Auth::user('admin'))
                @section('admin-bottom')
                    <div class="admin-bottom">
                        <h6>Admin-bottom</h6>
                        <p>You are an administrator!</p>
                        <p>Override this on the home page</p>
                    </div>
                @show
            @endif
            
            @yield('hotel')
        <!-- </div> -->
        <footer>
        @yield('footer')            
        </footer>

        @javascripts('myapp-js')
        @javascripts('bs3-js')


<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<!-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sunburst"></script> -->
<script type="text/javascript" charset="utf-8">
    // $(prettyPrint);
</script>
<!--
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script>
-->
        @yield('myjs')

        <script>
            function imgError(image){
                image.onerror = "";
                //could not get this to work with holder.js
                image.src = "http://placehold.it/300x300";
                return true;
            }
        </script>

<!-- <img src="image.png" onerror="imgError(this);"/> -->
<!--        #container:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
       #container { display: inline-block; _height: 1%; }
       /* Hides from IE-mac \*/
      #container { display: block; } -->
        <script language="javascript" type="text/javascript" src="{{asset('assets/js/jquery.equalheights.js')}}"></script>
        <!-- call with $('.thumbnail').equalHeights(); -->
        <script>
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
    var icons = $(document).find($('i[class^="icon-"]'));
    icons.each(function(element){
        var old=$(this).attr('class');
        var newclass=old.replace('icon-','fa fa-');
        $(this).removeClass().addClass(newclass);


        console.log($(this).attr('class'));
    
    });
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
        </script>
    </body>
</html>



