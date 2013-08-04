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

        @if(Entrust::hasRole('admin'))
        <style>
        @media (min-width: 980px){
                .page-header{
                    padding-top: 40px;
            }
        }
        </style>
        @endif
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
        https://bootsnipp.com/
    -->
        
<!-- FAVICONS -->
        @yield('favicons')



<!-- holder.js -->
<script src="{{asset('assets/js/holder.js')}}"></script>

    </head>
    <body>
        <div class="container">

            @yield('nav')
            <!-- if (Auth::) -->
            @section('admin-top')
            <?php $env=App::environment(); ?>
            <!-- @ if($user->ability(array('admin',$env),'*')) -->
            <!-- // @ if(Auth::user('buckeye')) -->
            @if(Entrust::hasRole('admin'))
            <!-- @ if($user->hasRole('admin')) -->

                <div class="navbar navbar-inverse navbar-fixed-top admin-top">
                    <!-- <h1>Admin-top</h1><h1>Admin-top</h1><h1>Admin-top</h1> -->
                    @include('admin.nav')
                </div>
            @else
<!--             <div class="navbar admin-top"><h1>yo</h1>You no admin!</div> -->
            @endif
            @show


            
            <!-- @ yield('content') -->
            <div class="contentwrap">

            @include('notifications')
            
            <?php
                $env=App::environment();
                // echo("<h1>ERROR"."</h1>");
                // Session::flash('mymessage','Welcome to the <strong>'.$env.'</strong> environment.');
                
                // if($env!=="buckeye"){

                // }
                if(Auth::user('admin')){
                    $path='/home/ryan/MyApp6/app/views/site/pages/';
                    Session::flash('message','Welcome to the <strong>'.$env.'</strong> environment.');
                }
                else

                // this is a global setting.
                // i would also like ability for a setting for the asset directory.

                $path='../app/views/site/pages/';
                // if($env=="local"){
                //     $path='/home/ryan/MyApp6/app/views/site/pages/';
                // }
                // else{
                //     $path='/home/gristech/myapp/app/views/site/pages/';
                // }

// ACCOUNTS: twitter, facebook, 

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
                  <!-- {{var_dump($_SESSION);}} -->
                </div>

            @endif
                {{--var_dump($_SESSION);--}}
                    <!-- Content -->
            @yield('main')
                    
            </div>
            <!-- ./ contentwrap -->
            <!-- @ yield('main') -->
            
            @section('admin-bottom')
                @if(Auth::user('admin'))
                <div class="admin-bottom">
                    <h6>Admin-bottom</h6>
                    <p>Override this on the home page</p>
                </div>
                @endif
            @show
            
            @yield('hotel')
        </div>
        <footer>
        @yield('footer')            
        </footer>

        @javascripts('public-js')


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
                    // $('.page-header').css('margin-top',($("#navbar").height()));
                    // alert('jQuery is loaded');
                    $(document).ready(function(){
                        // alert('jQuery loaded');

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



                    });
                }
            }

        </script>
    </body>
</html>


