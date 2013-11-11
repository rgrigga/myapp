<!doctype html>
<html lang="en">
<!-- http://stackoverflow.com/questions/1461907/html-encoding-issues-character-showing-up-instead-of-nbsp -->

<!-- This is layouts.scaffold -->
<!-- check out http://flatuicolors.com/ -->
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

        <!-- if you don't include this next line, The full site appears bad on a mobile device... -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @show

<!-- STYLES **********************************-->
        
    <!-- CDN -->
    <!-- Here, we have Bootstrap and Font-Awesome -->

        <!-- HAS ICONS.  WON'T WORK WITH FONT AWESOME -->
        <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> -->

        <!-- Bootstrap -->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

        <!-- Font-Awesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- COMPILED -->
    <!-- Configure list of files as a json array, -->
    <!-- Compile them, and your webpage is faster. -->
        <!-- @ stylesheets("public-css") -->
        @stylesheets("bs3")
    
    <!-- EXTERNAL -->
        <link rel="stylesheet" href="/assets/css/style.css">
        
    <!-- http://stackoverflow.com/questions/1443465/jquery-dynamic-div-height -->

    <!-- GLOBAL INTERNAL -->
    <!-- Quick & Dirty.  Move to stylesheet for long-term. -->
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            /*body { padding-top: 20px; }*/

            /*https://developer.mozilla.org/en-US/docs/Web/HTML/Sections_and_Outlines_of_an_HTML5_document*/
            section, article, aside, footer, header, nav, hgroup {
              display:block;
            }
            .alert {
                position: relative;
                margin-right: auto;
                /*width: 100%;*/
                top: 80px;
                z-index: 10;
            }
            .navwrap{
                overflow: hidden;
            }
        </style>


        <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Sections_and_Outlines_of_an_HTML5_document -->
<!--[if lt IE 9]>
  <script>
    document.createElement("header" );
    document.createElement("footer" );
    document.createElement("section"); 
    document.createElement("aside"  );
    document.createElement("nav"    );
    document.createElement("article"); 
    document.createElement("hgroup" ); 
    document.createElement("time"   );
  </script>
  <noscript>
     <strong>Warning !</strong>
     Because your browser does not support HTML5, some elements are simulated using JScript.
     Unfortunately your browser has disabled scripting. Please enable it in order to display this page.
  </noscript>
<![endif]-->

    <!-- PAGE-SPECIFIC -->
        @yield('styles')

<!-- ANALYTICS ************************************ -->
        @section('analytics')
        @include('site.'.strtolower($company->brand).'.analytics');
        @show
    <!-- 
        *Google
        *Bing
        *Yahoo
        *TO DO: Internal
        *TO DO: Social? 
        https://bootsnipp.com/
    -->
        
<!-- FAVICONS -->
@section('favicons')
<link rel="shortcut icon" href="{{{ asset('assets/'.strtolower($company->brand).'/favicon.png') }}}">
@show

<!-- holder.js -->
<script src="{{asset('assets/js/holder.js')}}"></script>

<script>
//this must be loaded before it is called in the body.
    
    // $('img').error(function(){
    //     $(this).attr('src', 'http://placehold.it/300x300');
    // });

    function imgError(image,w,h){
        w=w||300;
        h=h||300;
        image.onerror = "";
        //could not get this to work with holder.js
        image.src = "http://placehold.it/"+w+"x"+h;
        return true;
        // onerror="imgError(this,800,600);"
    }
</script>

    </head>
    <body>
        <div class="container-fluid">
            <div class="navwrap" id="navwrap">
                <!-- // @ yield('nav') -->
                @section('nav')
                {{View::make('site.partials.nav-top-min');}}
                @show

                <!-- if (Auth::user('buckeye')) -->
                @section('admin-top')
                    
                    <!-- @ if($user->ability(array('admin',$env),'*')) -->
                    <!-- // @ if(Auth::user('buckeye')) -->
                    @if(Auth::user('admin'))
                    <!-- @ if($user->hasRole('admin')) -->
                        <?php $env=App::environment(); ?>
                        <div class="navbar navbar-inverse navbar-fixed-top admin-top">
                            <!-- <h1>Admin-top</h1><h1>Admin-top</h1><h1>Admin-top</h1> -->
                            @include('admin.nav')
                        </div>
                    @else
                    <!--<div class="navbar admin-top"><h1>yo</h1>You no admin!</div> -->
                    @endif
                @show                
            </div>

            @if (Session::has('admin'))
                
                <div class="flash alert">
                  <button type="button" class="close" data-dismiss="alert"> &times;</button>
                  <p>{{ Session::get('admin') }}</p>
                  <!-- {{var_dump($_SESSION);}} -->

                </div>

            @endif

            @if (Session::has('user'))

                <div class="flash alert alert-info" id="">
                  <button type="button" class="close" data-dismiss="alert"><span class="label label-info">Info</span> &times;</button>
                  <p>{{ Session::get('user') }}</p>
                </div>

            @endif

            
            <!-- @ yield('content') -->
            <div class="contentwrap">

            @include('notifications')
            
            <?php
                $env=App::environment();
                // Session::flash('envirMsg','Welcome to the <strong>'.$env.'</strong> environment.');
                
                // if($env!=="buckeye"){

                // }
                if(Auth::user('admin')){
// 1                    $path='/home/ryan/MyApp6/app/views/site/pages/';
                    Session::flash('adminMsg','You are an administrator.<strong> --'.$env.'</strong> environment.');
                }
                else

                // this is a global setting.
                // i would also like ability for a setting for the asset directory.
                //This should be handled in the controller.


// 2                $path='../app/views/site/pages/';

                // if($env=="local"){
                //     $path='/home/ryan/MyApp6/app/views/site/pages/';
                // }
                // else{
                //     $path='/home/gristech/myapp/app/views/site/pages/';
                // }

            // ACCOUNTS: twitter, facebook, 

// 3                $mypages = array();
//                 foreach (glob($path."*.blade.php") as $filename) {
//                     $filename=str_replace($path, "", $filename);
//                     $filename=str_replace(".blade.php", "", $filename);
//                     array_push($mypages,$filename);
//                     // echo "$filename" . "<br>";
//                 }
            ?>


                {{--var_dump($_SESSION);--}}
                    <!-- Content -->
            @yield('main')
                    
            </div>
            <!-- ./ contentwrap -->
            <!-- @ yield('main') -->
            
            
            @if(Auth::user('admin'))
                @section('admin-bottom')
                    <div class="admin-bottom">
                        <h6>Admin-bottom</h6>
                        <p>Override this text on the home page</p>
                    </div>
                @show
            @endif
            
            @yield('hotel')
        </div>
        <footer>
        @yield('footer')            
        </footer>

        @javascripts('public-js')

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
        
// ?? http://stackoverflow.com/questions/92720/jquery-javascript-to-replace-broken-images
// $("img").error(function () {
//   $(this).unbind("error").attr("src", "broken.gif");
// });
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



