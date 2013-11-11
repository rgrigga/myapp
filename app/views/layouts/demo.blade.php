<!doctype html>
<html lang="en">

<!-- WELCOME TO VIEW/LAYOUTS/DEMO.BLADE.PHP -->

<!-- http://css-tricks.com/semantic-class-names/ -->

<!-- http://stackoverflow.com/questions/1461907/html-encoding-issues-character-showing-up-instead-of-nbsp -->
    <head>
    <title>
        @section('title')
        {{$company->brand}}
        @show
    </title>
<!-- META ************************************-->
    @section('meta')
        <meta charset="utf-8">
        <!-- <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> -->
        <meta name="author" content="Ryan Grissinger" />
        <!-- Mobile Specific Metas
        ================================================== -->
        <!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->

        <!-- if you forgot to stick this line in the page.  The full site appears on a mobile device... -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @show

@section('styles')

<!-- STYLES **********************************-->

    <link rel="stylesheet/less" type="text/css" href="assets/css/less/demo.less" />

    <script src="assets/js/less.js" type="text/javascript"></script>

    <!-- Font-Awesome 3 -->
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- Font-Awesome 4 -->


    
    <!-- COMPILED -->
    <!-- 
    BASSET HAS BEEN DEPRECATED
    The author says he is no longer maintaining the package.
    Author suggests using grunt instead.
     -->

    <!-- Configure list of files as a json array, -->
    <!-- basset/config.php -->
    <!-- Compile them, and your webpage is faster. -->

    <!-- EXTERNAL -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
        
    <!-- http://stackoverflow.com/questions/1443465/jquery-dynamic-div-height -->

    <!-- GLOBAL INTERNAL -->
    <!-- A Space for Quick & Dirty.  Move to less stylesheet for long-term. -->
    <style>
/*body{
    background-color: red;
}*/
.panel{border:solid 1px blue;}
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
        <div class="container">
            <!-- <div class="navwrap" id="navwrap"> -->
                <!-- // @ yield('nav') -->    
            @include('site.partials.nav-top-bs3')

            <!-- if (Auth::user('buckeye')) -->
            @section('admin-top')

                
                    @if(Auth::user('admin'))
                    <div class="admin-top">
                    <!-- @ if($user->ability(array('admin',$env),'*')) -->
                    <!-- // @ if(Auth::user('buckeye')) -->
                    You are an admin
                    </div>
                    
                    @else
                    Please login to edit this page, etc.
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
        </div>
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

        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        $('.contentwrap') .css({'padding-top': (
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

    $(window).resize(function(){
        $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        $('.contentwrap') .css({'padding-top': (
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



