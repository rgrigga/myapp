<!doctype html>
<html lang="en">

<!-- http://css-tricks.com/semantic-class-names/ -->

<!-- http://stackoverflow.com/questions/1461907/html-encoding-issues-character-showing-up-instead-of-nbsp -->

<!-- This is layouts.bootstrap3 -->
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

        <!-- if you forgot to stick this line in the page.  The full site appears on a mobile device... -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @show

@section('styles')

<!-- STYLES **********************************-->
        
    <!-- CDN -->
    <!-- Here, we have Bootstrap and Font-Awesome -->

        <!-- HAS ICONS.  WON'T WORK WITH FONT AWESOME -->
        <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> -->

        <!-- Bootstrap -->
        <link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

        <!-- This display's the company's less page -->
        <link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

        <script src="/assets/js/less.js" type="text/javascript"></script>
        <script>
             less.env = "development";
             less.watch();
        </script>

        <!-- Font-Awesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- COMPILED -->
    <!-- Configure list of files as a json array, -->
    <!-- basset/config.php -->
    <!-- Compile them, and your webpage is faster. -->
    <!-- @ stylesheets('myapp-css') -->
    <!-- @ stylesheets("bs3-css") -->
    
    <!-- EXTERNAL -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
        
    <!-- http://stackoverflow.com/questions/1443465/jquery-dynamic-div-height -->

    <!-- GLOBAL INTERNAL -->
    <!-- Quick & Dirty.  Move to stylesheet for long-term. -->
    <style>

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

@show



<!-- ANALYTICS ************************************ -->
        @yield('analytics')
        
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

@javascripts('myapp-js-top')
@javascripts('prettify')
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
        <div class="container">
            <!-- <div class="navwrap" id="navwrap"> -->
                <!-- // @ yield('nav') -->
                @section('nav')
                {{--View::make('site.partials.nav-top-min')--}}
                {{--View::make('site.partials.nav-top-bs3')--}}
                {{View::make('site.partials.nav-top-minimal')}}
                @show

                <!-- if (Auth::user('buckeye')) -->
                @section('admin-top')
                    <!-- <div class="admin-top"> -->
                        <!-- @ if($user->ability(array('admin',$env),'*')) -->
                        <!-- // @ if(Auth::user('buckeye')) -->
                    
                        @if(Auth::user('admin'))
                        <!-- <div class="navbar navbar-fixed-top admin-nav-top" role="navigation"> -->
                        <!-- @ if($user->hasRole('admin')) -->
                            
                            <!-- <h1>Admin-top</h1><h1>Admin-top</h1><h1>Admin-top</h1> -->
                             @include('admin.nav')
                        <!-- </div> -->
                        @else
                        <!-- <div class="navbar-inner"> -->
                            <!-- <h1>yo</h1> -->
                            <!-- You no admin! -->
                            <!-- <ul class="nav navbar-nav"> -->
                                <!-- <li>foo</li> -->
                                <!-- <li>bar</li> -->
                            <!-- </ul> -->
                        <!-- </div>  -->
                        @endif
                    <!-- </div> -->
                    <!-- /.admin-top -->
                @show                
            <!-- </div> -->
            <!-- ./ navwrap -->
            
            <!-- @ yield('content') -->
            <div class="contentwrap">

                
                
                <?php
                    $env=App::environment();
                    // echo("<h1>ERROR"."</h1>");
                    // Session::flash('mymessage','Welcome to the <strong>'.$env.'</strong> environment.');
                    
                    // if($env!=="buckeye"){

                    // }
                    if(Auth::user('admin')){
    // 1 
    // $path='/home/ryan/MyApp6/app/views/site/pages/';
                        Session::flash('message','Welcome Administrator. You are in the <strong>'.$env.'</strong> environment.');
                    }
                    else

                    // this is a global setting.
                    // i would also like ability for a setting for the asset directory.
                    //This should be handled in the controller.

    // 2
    // $path='../app/views/site/pages/';

                    // if($env=="local"){
                    //     $path='/home/ryan/MyApp6/app/views/site/pages/';
                    // }
                    // else{
                    //     $path='/home/gristech/myapp/app/views/site/pages/';
                    // }

    // ACCOUNTS: twitter, facebook, etc

    // 3             $mypages = array();
    //                 foreach (glob($path."*.blade.php") as $filename) {
    //                     $filename=str_replace($path, "", $filename);
    //                     $filename=str_replace(".blade.php", "", $filename);
    //                     array_push($mypages,$filename);
    //                     // echo "$filename" . "<br>";
    //                 }
                ?>

                @include('notifications')


                    {{--var_dump($_SESSION);--}}
                        <!-- Content -->
                <div class="page-header">
                    @yield('page-header')
                </div>
                
                
                @yield('main')
                        
            </div>
            <!-- ./ contentwrap -->

            <!-- @ yield('main') -->
            
            
            @if(Auth::user('admin'))
                @section('admin-bottom')
                    <div class="admin-bottom">
                        <h6>Admin-bottom</h6>
                        <p>Override this on the home page</p>
                    </div>
                @show
            @endif
            
            @yield('hotel')
        </div>
        <!-- /.container -->

        <footer>
        @yield('footer')            
        </footer>

        @javascripts('myapp-js-bottom')
        @javascripts('bs3-js')



<!-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script> -->
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

        // $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
        // $('.contentwrap') .css({'padding-top': (
        //     $('.user-top').height()
        //      + $('.admin-top').height()
        //      + 0 )+'px'
        // });
        // $('.india') .css({'top': (
        //     20
        //     -$('.user-top').height()
        //     - $('.admin-top').height()
        //     )+'px'
        // });

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
            // $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});

            // $('.contentwrap') .css({'padding-top': (
            //     $('.user-top').height()
            //      + $('.admin-top').height()
            //      + 0 )+'px'
            // });
            // $('.india') .css({'top': (
            //     -$('.user-top').height()
            //      - $('.admin-top').height()
            //      - 20 )+'px'
            // });
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



