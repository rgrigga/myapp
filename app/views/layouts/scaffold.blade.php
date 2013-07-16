<!doctype html>
<html lang="en">
<!-- Welcome.  This is the default layout page, and the first code the robots read... -->
    <head>

<!-- http://stackoverflow.com/questions/1987065/what-are-best-practices-to-order-elements-in-head -->

    <title>
        @section('title')
        Gristech MyApp
        @show
    </title>

<!-- META ************************************-->
    <meta charset="utf-8">
    <meta name="author" content="Ryan Grissinger" />
    <!-- Mobile Specific Metas
    ================================================== -->
    <!-- More info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->

    <!-- One time, at band camp, i forgot to stick this line in the page.  The full site appeared on a mobile device... -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('meta')

<!-- STYLES **********************************-->
        
    <!-- CDN -->
    <!-- Here, we have Bootstrap and Font-Awesome -->
        <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> -->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    
    
    
    <!-- COMPILED -->
        <!-- @stylesheets("public-css") -->
    
    <!-- EXTERNAL -->
        <link rel="stylesheet" href="/assets/css/style.css">
        
    <!-- GLOBAL INTERNAL -->
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            /*body { padding-top: 20px; }*/
        </style>

    <!-- PAGE-SPECIFIC -->
        @yield('styles')
        <!-- // This is dumb, just use styles on the page-->

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
    @yield('myjs')

    </body>

</html>