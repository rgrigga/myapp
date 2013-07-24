<!doctype html>
<html lang="en">
<!-- This is layouts.scaffold -->
    <head>
    <title>
        @section('title')
        Gristech MyApp 
        <!-- layouts.scaffold -->
        @show
    </title>
<!-- META ************************************-->
    @section('meta')
        <meta charset="utf-8">
        <meta name="author" content="Ryan Grissinger" />
        <!-- Mobile Specific Metas
        ================================================== -->
        <!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->

        <!-- if you forgot to stick this line in the page.  The full site appears on a mobile device... -->
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
        <!-- @stylesheets("public-css") -->
    
    <!-- EXTERNAL -->
        <link rel="stylesheet" href="/assets/css/style.css">
        
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
                position: fixed;
                margin-right: auto;
                /*width: 100%;*/
                top: 80px;
                z-index: 10;
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
        @yield('analytics')
        
    <!-- 
        *Google
        *Bing
        *Yahoo
        *TO DO: Internal
        *TO DO: Social? 
    -->
        
<!-- FAVICONS -->
        @yield('favicons')


    </head>
    <body>
        <div class="container">

            @yield('nav')
            <!-- if (Auth::) -->
            @section('admin-top')


                @if(Auth::user('admin'))
                    <style>

                    /*http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site*/

                        .admin-top{
                            background-color: red;
                            padding-top: 40px;
                        }

                        @media screen and (max-width: 979px) {
                            /*.contentwrap { padding-top: 80px; }*/
                        }

                    </style>
                    <div class="navbar navbar-inverse admin-top">
                        <!-- <h1>Admin-top</h1><h1>Admin-top</h1><h1>Admin-top</h1> -->
                        @include('admin.nav')
                    </div>
                @else
                    <style>

                    /*http://stackoverflow.com/questions/11124777/twitter-bootstrap-navbar-fixed-top-overlapping-site*/

                        .contentwrap{
                            padding-top: 0px;
                        }

                        @media screen and (max-width: 979px) {
                            .contentwrap { padding-top: 0px; }
                        }

                    </style>
                @endif
            @show


            
            <!-- @ yield('content') -->




            <div class="contentwrap">
<?php
    $env=App::environment();
    // echo("<h1>ERROR"."</h1>");
    // Session::flash('mymessage','Welcome to the <strong>'.$env.'</strong> environment.');
    
    // if($env!=="buckeye"){

    // }
    if(Auth::user('admin')){
        $path='/home/ryan/MyApp6/app/views/site/pages/';
        Session::flash('mymessage','Welcome to the <strong>'.$env.'</strong> environment.');
    }
    else

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
        </div>

    @endif
                {{--var_dump($_SESSION);--}}
                    <!-- Content -->
                    @yield('main')
                        <!-- ./ content -->
            </div>
            <!-- @ yield('main') -->
            
            @section('admin-bottom')
                @if(Auth::user('admin'))
                <!-- <div class="bam"> -->
                    <h1>Admin-bottom</h1>
                <!-- </div> -->
                @endif
            @show
            
            @yield('hotel')
        </div>
        @yield('footer')
        @javascripts('public-js')


<!--
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script>
-->
    @yield('myjs')
        <script language="javascript" type="text/javascript" src="{{asset('assets/js/jquery.equalheights.js')}}"></script>
        <!-- call with $('.thumbnail').equalHeights(); -->
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
                    $(document).ready(function(){
                        // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
                        // $('.thumbnail').equalHeights();
                    });
                }
            }
        </script>
    </body>
</html>