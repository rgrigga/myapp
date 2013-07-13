@extends('layouts.scaffold')

@section('title')
Buckeye Mower - Fast, Mobile Mower and Small Engine Repair
@stop

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      background-color: rgba(147,208,109,.3);
      font-family: Lato;
      color:rgba(26,92,76,1);
    }

  .hero-unit{
    color:rgba(34,120,100,.7);
    text-align: center;
    background-color: rgba(214,198,150,.7);
    box-shadow: 10px 10px 10px rgba(115,78,0,.7);
    /*border-radius: 40% 40%;*/
    }
  /*.hero-unit img {*/
    /*width: 100%;*/
  /*}*/

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      /*background-color: green;*/
/*      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);*/
    }

    .navbar .navbar-inner{
      /*color: yellow;*/
    }
    .navbar .nav > li > a {
      /*color: yellow;*/
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand, .navbar .iconbar {
      /*color: yellow;*/
      padding: 14px 10px 16px 20px; /* Increase vertical padding to match navbar links */
      font-size: 24px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(255,255,255,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    .navbar .nav > .active > a, 
    .navbar .nav > .active > a:hover, 
    .navbar .nav > .active > a:focus 
    {
      color: rgba(34,120,100,1);
      background-color: rgba(245,227,70,1);
    }
    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }

    .navbar .brand{
      color: rgba(34,120,100,1);
    }

    
/*    .navbar-inner{
    background: -webkit-gradient(linear, 0 100%, 0 0, from(#b4ddb4), color-stop(0.1, #83c783), color-stop(0.95, #002400), color-stop(1, #52b152), color-stop(1, #005700), to(#002400));
    background: -webkit-linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    background: -moz-linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    background: -o-linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    background: linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    
      }*/


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing .span4 ul{
      text-align: left;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }

  .marketing{
    /*background-color: rgb(115,78,0);  */
  }
    /* Featurettes
    ------------------------- */

    hr {
    margin: 20px 0px;
    border-right: 0px none;
    border-left: 0px none;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    border-width: 1px 0px;
    border-style: solid none;
    border-color: rgb(238, 238, 238) -moz-use-text-color rgb(255, 255, 255);
}


    .featurette-divider {
      margin: 60px 0; /* Space out the Bootstrap <hr> more */
      border-width: 3px 0px;
      border-style: solid none;
      border-color: rgb(0,0,0) 
      -moz-use-text-color rgb(20, 150, 20);
    }
    
    .featurette p{
      margin-left: 5%;
    }

    .featurette {
      padding: 40px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
      color: rgba(147,208,109,1);
      background-color: rgba(34,120,100,1);
    }
    .featurette-image {

      /*margin-top: -20px;*/
       /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    @media (min-width: 980px){
      .featurette-image.pull-left {
        margin-right: 40px;
      }
      .featurette-image.pull-right, .featurette-map.pull-right {
        margin-left: 40px;
      }
    }
    /* Thin out the marketing headings */
    .featurette-heading {
      margin-left: 5%;
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {
.navbar .container {
  padding-left: 15px;
  padding-right: 15px;
}
/*      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }*/

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette ul{
        /*color: red;*/
        margin-left: 20%;
      }

      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 50%;
        margin: 20px auto 20px;
        /*margin-top: 30px;*/
      }
      .featurette-map{
        display: block;
        float:none;
        max-width: 80%;
        margin: 20px auto 20px;
      }
    }


    @media (max-width: 767px) {

      /*.navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }*/

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

      .featurette-image{
        /*text-align: center;*/
        display: block;
        margin-left: auto;
        margin-right: auto;
      }



    }


  /* Q & D */
   img.center {
        display: block;
        margin:auto;
        /*margin-left: auto;*/
        /*margin-right: auto;*/
      }
   .india{
    background-color: rgba(82,233,58,.4);
  }


.delta { 
  margin-top: 20px;
   position: relative; 
   /*width: 100%;  for IE 6 */
   /*background-color: blue;*/
       background-color: #cccccc;
    box-shadow: 10px 10px 5px rgb(115,78,0);
}

.delta img{
  width: 100%;
}

.delta h1, .delta h4{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   /*width: 100%; */
}


.delta h4 span { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.delta p { 

}

.delta h1 span {
  color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}
.kilo p{ 
   position: absolute; 
   /*top: 50px; */
   /*left: 0; */
   /*width: 100%; */

  top: 45%;
  left: 45%;

   color: white; 
   font:  20px/32px Helvetica, Sans-Serif; 
   /*letter-spacing: 1px;*/
   background: rgb(0, 0, 0); 
   background: rgba(0, 0, 0, 0.6);
   opacity: 70%;
   padding: 20px; 
   /*float: right;*/
   max-width: 80%;
}

  .icon6{
    font-size:10em;
  }
  .mysvg{
    width:300px;
    color: #fff;
    text-shadow: 1px 1px 1px #ccc;
  }

img.myimage{
  background-color: rgba(189,219,123,.7);
}

.nav-pills {
    margin: 15px auto;
    padding: 0;
    width: 400px;
}

.nav-tabs > li{
  background-color: rgba(147,208,108,.3);
  margin-right:7px;
}

.nav-tabs>li>a{
  border-color: rgba(189,219,123,.7);
}

.nav-tabs{
  border-bottom-color: rgba(189,219,123,.7);
}

a{
  color:rgba(229,83,60,1);
}

.navbar a{
  color:rgb(80,172,106);
}

.nav-tabs>li>a:hover, 
.nav-tabs>a:focus{
  background-color: rgba(245,227,70,.4)
}

.nav-tabs>.active>a, .nav-tabs>.active>a:hover, 
.nav-tabs>.active>a:focus{
  background-color: rgba(245,227,70,.9)
}



.page-header{
  padding-top:40px;
  }
    </style>
@stop

@section('favicons')
<!-- Favicons
================================================== -->

<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->
<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->
<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->

<!-- It would be great generate these on the fly.  For now, they are located in asset file -->
<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->

<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/buckeye/apple-touch-icon-144-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/buckeye/apple-touch-icon-114-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/buckeye/apple-touch-icon-72-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/buckeye/apple-touch-icon-57-precomposed.png') }}}">

    <link rel="shortcut icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">
    <link rel="icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">

@stop

@section('nav')
@include('site.partials.nav-buckeye')
@stop

@section('main')

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container-fluid marketing">

<!-- ************* INTRO OPTION 1 **************-->
<!-- <img src="{{asset('assets/buckeye/grass.svg')}}" alt="grass.svg"> -->


<!-- ************* INTRO OPTION 2 **************-->
<!-- <div class="row-fluid">
  <div class="kilo delta">
    <img src="{{asset('assets/buckeye/yard.jpg')}}" alt="" />  
    <h1><span>Buckeye Mower</span></h1>
    <p><span><em>Time to get your grass in gear!</em></span></p>
  </div>
</div> -->


<!-- ************* INTRO OPTION 3 **************-->
<div class="row-fluid">
	<div class='page-header'>

    <!-- <img src="{{asset('assets/ico/buckeye/favicon.png')}}" alt=""> -->
    <div class="row-fluid">
      <div class="span6">
        <!-- http://stackoverflow.com/questions/7055393/css-center-image-using-text-align-center -->
        <img class ="center" src="{{asset('assets/buckeye/buckeye_logo.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
      </div>
      <div class="span6">
        <!-- <h1>Buckeye Mower</h1> -->
        <h2><strong>Mobile Mower Repair</strong></h2>
        <p><em>We travel, so you don't have to...</em></p>
        <p><strong>Fast.  Affordable.  Simple.</strong>
At Buckeye Mower, we are focused on providing <strong>Mobile Repair Services</strong> with the highest level of customer satisfaction.  With a variety of offerings to choose from, we’re sure you’ll be happy working with us. Look around our website and if you have any comments or questions, please feel free to contact us. We hope to see you again soon.
        </p>
      </div>
      <div class="text-center">
        <a href="contact" class="btn btn-large">Schedule Online Now<br/><strong>get 10% Off</strong></a>
      </div>
    </div>
  </div>
</div>

<!-- END INTRO -->



<!-- <div class="row">
    <div class="span4">

    </div>
  <div class="span4">

  </div>
  <div class="span4">

  </div>
</div> -->
<div class="row-fluid">
  <div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#tab1" data-toggle="tab">
          <h4>Residential</h4>
        </a>
      </li>

      <li> 
        <a href="#tab2" data-toggle="tab">
          <h4>Commercial</h2>
        </a>
      </li>

      <li>
        <a href="#tab3" data-toggle="tab">
          <h4>Small Engine</h2>
        </a>
      </li>
    </ul>
    
    <div class="tab-content">
      <div class="tab-pane active featurette" id="tab1">
        <!-- <div class="pull-right"> -->
          <img class ="featurette-image myimage img-circle pull-right" src="{{asset('assets/buckeye/riding.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
          <!-- <img class ="center" src="{{asset('assets/buckeye/push_button.png')}}" alt="Buckeye Mower, Mobile Engine Repair"> -->
        <!-- </div> -->
        <h2 class='featurette-heading' href="{{{URL::to('#about')}}}">Riding Lawn Mower Services</h2>
        <p class='lead'>
          <ul>
            <li>Change Oil, Oil FIlter, Spark Plus(s), Air and Fuel Filter</li>
            <li>Deck Ceaning</li>
            <li>Deck Leveling</li>
            <li>Blade Sharpening</li>
            <li>PTO CLutch Adjustment</li>
            <li>Test Battery and Charging System</li>
            <li>Tire Pressure Adjustment</li>
            <li>Grease Entire Machine</li>
            <li>Inspect all hoses, belts, pulleys, etc.</li>
          </ul>
        </p>
        <h5>Starting at $49<h5>
      </div>
      <div class="tab-pane featurette" id="tab2">
        <!-- <div class="pull-left"> -->
          <img class ="myimage img-circle featurette-image pull-left" src="{{asset('assets/buckeye/commercial.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
        <!-- </div> -->
        <h2 class='featurette-heading'>No Engine too Big.</h2>
        <p class='lead'>No account or machine is too big.  I have references available for whom I service fleets of dozens of commercial mowers.  I am also a certified deisel mechanic.  Please contact me by phone or email to discuss your fleet's maintenance needs.</p>
      </div>
      <div class="tab-pane featurette" id="tab3">
        <!-- <div class="pull-right"> -->
          <img class ="featurette-image myimage img-circle pull-right" src="{{asset('assets/buckeye/push.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
        <!-- </div> -->
        
        <h2 class='featurette-heading'>No Engine too Small.</h2>
          <p class='lead'>Push Mower. Riding Mower.  Chainsaw.  Weedeater.  If it has a small engine, I can help you fix it.  Remember, I'll come to your house for you - no need for truck, trailer, or travel.</p>
      </div>
    </div>
  <!-- //tab-content -->
  </div>
  <!-- tabbable -->
</div>
<!-- //row -->




      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <style>
        .featurette-map{

        }
      </style>

      <div class="featurette" id="map" name="map">
<!--         <img class="featurette-map pull-right" src="http://maps.googleapis.com/maps/api/staticmap?center=Westerville,Ohio&zoom=9&size=600x600&markers=color:blue%7Clabel:B%7C517+Westerville+OH|color:blue%7Clabel:B%7C517+Hilliard+OH&sensor=false" alt="Hilliard, OH"> -->

        <img class="featurette-map pull-right" src="http://maps.googleapis.com/maps/api/staticmap?center=Westerville,Ohio&zoom=9&size=600x600&markers=Westerville+OH|Hilliard+OH|Columbus+OH|Gahanna+OH|Marengo+OH|Delaware+OH|Pickerington+OH|Grove+City+OH|Pataskala+OH|West+Jefferson+OH&sensor=false" alt="Central Ohio">

<!--         <img class="featurette-image pull-right" src="{{asset('assets/buckeye/ohio.png')}}" alt="serving central ohio"> -->
        <h2 class="featurette-heading">I will come to you. <span class="muted">Wide Service Area.</span></h2>
        <p class="lead">My general service area is the Greater Columbus Area, anywhere south of 36/37.  For Example, I've done service near Westerville, Lewis Center, Polaris, Easton, Delaware, Marysville, Hilliard, Dublin, Gahanna, Pickerington, Pataskala, New Albany and more.  If I can help you, I'll do my best!</p>
        <!-- http://openclipart.org/may-clipart-be-used-comparison -->
        <!-- http://clipartist.info/RSS/openclipart.org/2011/May/29-Sunday/lawn_mower.svg.html -->
        <!-- http://openclipart.org/detail/663/lawn-mower-by-jicjac -->
      </div>

      <hr class="featurette-divider">

      <div class="featurette">

        <img class="featurette-image pull-left mysvg" src="{{asset('assets/buckeye/noun_project_13832.svg')}}" alt="serving central ohio">
        <!-- <i class="icon-cogs icon6"></i> -->
        <h2 class="featurette-heading">Factory Trained. <span class="muted">Multi-Brand Expertise.</span></h2>
        
        <p class="lead">I am <strong>Factory Trained</strong>, and I regularly work on all major brands: John Deere, Toro, Craftsman, Cub Cadet, and more.  I have a passion for this equipment: and I will treat your equipment like it was my own.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" name="services" id ="services">
        <img class="featurette-image pull-right mysvg" src="{{asset('assets/buckeye/chainsaw.svg')}}" alt="serving central ohio">
        <h2 class="featurette-heading">Not Just Mowers. <span class="muted">Any Small Engine.</span></h2>
        <p class="lead">I regularly service all brands of all kinds of equipment.  If it has an engine...</p>

        <div class="row-fluid">
          <div class="span3 offset 1">
            <ul>
              <li>Compact Tractors</li>
              <li>Utility Vehicles</li>
              <li>Commercial Mowers</li>
              <li>Trimmers, Edgers, Hedgers</li>
            </ul>
          </div>
          <div class="span3">
            <ul>
              <li>Chainsaws</li>
              <li>Leaf Blowers</li>
              <li>Roto-tillers</li>
              <li>Snow Blowers</li>
            </ul>
          </div>
        </div>
        <!-- <div class="row-fluid"> -->
          <h2 class="featurette-heading"> 2-cycle or 4-cycle, No Problem!</h2>
        <!-- </div> -->        
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
@stop

@section('footer')
<style>
  #myfooter{
    margin-left: 10px;
    text-align: center;
  }
</style>
<img class="center" src="{{asset('assets/buckeye/grass2.png')}}" alt="">
<h3 class="center" id="myfooter">Let's get your gr<em>ass</em> in gear!</h3>
<!-- <div class="span12"> -->
<!--   <p class="muted credit">
    <a href="http://thenounproject.com/noun/race-car/#icon-No3019" target="_blank">Race Car</a> designed by <a href="http://thenounproject.com/ianfrid" target="_blank">Ian Friday</a> from The Noun Project
  </p>
  <p class="muted credit">
    <a href="http://thenounproject.com/noun/truck/#icon-No7504" target="_blank">Truck</a> designed by <a href="http://thenounproject.com/misirlou" target="_blank">Benjamin Orlovski</a> from The Noun Project
  </p> -->
<!-- </div> -->



@stop

@section('hotel')
<style>
  .hotel{
    background-color: transparent;

  }
  .hotel a{
    color: green;
  }
</style>
<div class="hotel" style:"background-color:transparent">
  <a href="{{URL::to('#')}}"><i class="icon-circle-arrow-up icon-3x"></i></a>
</div>
@stop

