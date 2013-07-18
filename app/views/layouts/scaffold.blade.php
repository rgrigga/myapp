<!doctype html>
<html lang="en">
<!-- This is layouts.scaffold -->
    <head>
    <title>
        @section('title')
        Gristech MyApp
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
        </style>

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
        @yield('favicons')
    
    </head>
    <body>
        <div class="container">
            
            @yield('nav')

            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            
            <!-- @ yield('content') -->
            @yield('main')

            
            @yield('hotel')
        </div>
        @yield('footer')

    @javascripts('public-js')
<!--
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js&skin=sunburst"></script>
-->
    @yield('myjs')

    </body>

</html>