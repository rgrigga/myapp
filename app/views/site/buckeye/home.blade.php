@extends('layouts.scaffold')
<!-- @ extends('site.layouts.buckeye') -->
<!-- http://www.stepforth.com/resources/server-header-checker-tool -->
@section('title')
Buckeye Mower - Fast, Mobile Mower and Small Engine Repair
@stop

@section('analytics')
@include('site.buckeye.analytics')
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
      /*color: yellow;*/
      /*background-color: green;*/
      /*border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);*/
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand, .navbar .iconbar {
      /*color: yellow;*/
      padding: 14px 10px 16px 20px; /* Increase vertical padding to match navbar links */
      font-size: 24px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(255,255,255,.5);
    }

    .navbar .brand{
      color: rgba(34,120,100,1);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      /*color: yellow;*/
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
      /*margin: 60px 0;  Space out the Bootstrap <hr> more */
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

@media (min-width: 980px){
  .page-header{
    margin-top:60px;
    /*background-color: red;*/
  }
}

    @media (max-width: 979px) {

.navbar .brand{
  font-size: 18px;
  padding-bottom: 0px;
/*    padding: 5px 15px 5px; */
}
.navbar .iconbar{
  font-size: 36px;
  padding: 0px 15px 0px; 
}

.navbar .container {
  padding-left: 15px;
  padding-right: 15px;
}

.page-header{
  margin-top: 60px;
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


      .nav-tavs>li{
        margin: 0;
      }
      .nav-tabs>li>a{
        padding:5px;
        /*background-color: red;*/
      }
      .nav-tabs>li>a>h4{
        font-size:12px;
        margin: 2px;
        line-height: 16px;
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



/*.page-header{
  padding-top:40px;
  }*/
  .page-header h2{
    text-align: center;
  }

  .page-header .span12{
    margin-bottom: 20px;
  }

  .coupon {
    text-align: center;
    border-style:dashed;
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
<?php
// die(var_dump($company));
?>
@include('site.partials.nav-buckeye')
<!-- @ include('site.partials.nav-top-min') -->
@stop

@section('main')

<?php
// die(var_dump($company)); 
 ?> 
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

<!-- Storyboard -->
<!-- http://www.storyboardthat.com/userboards/rgrissinger/mower -->
<div class="row-fluid">
	<div class='page-header'>
    <!-- <img src="{{asset('assets/ico/buckeye/favicon.png')}}" alt=""> -->
    <div class="row-fluid">
      <div class="span6">

        <!-- http://stackoverflow.com/questions/7055393/css-center-image-using-text-align-center -->
        <img class ="center" src="{{asset('assets/buckeye/buckeye_logo.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
        <h2>740-507-6198</h2>
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
        <a href="#schedule" role="button" class="btn btn-large btn-warning" data-toggle="modal">
          <strong>10% Off</strong><br/>Schedule Online Now
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END INTRO -->



<!-- MODAL ************************* -->
<!-- Button to trigger modal -->
<!--   <a href="#MyModal" role="button" class="btn" data-toggle="modal">MyModal</a> -->

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />


 <script>
$(function() {
$( "#datepicker" ).datepicker({
altField: "#alternate",
altFormat: "DD, d MM, yy"
});
});
</script>


<a data-toggle="MyModal" class="btn" href="#loginModal">Log in</a>
<div class="modal hide fade" id="schedule">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">✕</button>
    <h3>Schedule Service</h3>
  </div>

  <div class="modal-body" style="text-align:center;">

    <div class="row-fluid">
      <div class="span10 offset1">
        <div id="modalTab">
          <div class="tab-content">

            <div class="tab-pane fade" id="three">
              <form method="post" action='' name="login_form">
                <p><input type="text" class="span12" name="eid" id="email" placeholder="Name"></p>
                <p><input type="password" class="span12" name="passwd" placeholder="Secret"></p>
                <p>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </p>
              </form>
            </div>

            <div class="tab-pane fade" id="two">
              <form method="post" action='' name="forgot_password">
                <p>a brief explanation of your problem will help.</p>
                <input type="text-area wysiwyg5" class="span12" name="eid" id="email" placeholder="How can we help you?">
<p>Date: <input type="text" id="datepicker" />&nbsp;<input type="text" id="alternate" size="30" /></p>

                <p><button type="submit" class="btn btn-primary">Submit</button><a href="#three">Next</a>
                </p>
              </form>
            </div>

            <div class="tab-pane active" id="one">
              <style>
              .iwrap{
                /*max-width: 300px;*/
                text-align: center;
                margin-right: auto;
                margin-left: auto;
              }

/*              @media (max-width: 760px) { 
                .page-header{
                  margin-left: -100px;
                  padding-left: 100px;

                }*/

              @media (min-width: 760px) { 
                .page-header{
                  
                  margin-top: 0px;
                  padding-top: 80px;
                  padding-bottom: 80px;
                }
                .modal{
                  width:90%;
                  /*height: 80%;*/
                  margin-left: -45%;
                }
              }
              </style>
              <div class="row-fluid">
                <div class="iwrap span8">
                  <iframe src="https://www.google.com/calendar/embed?title=Buckeye%20Appointment%20Schedule&amp;showPrint=0&amp;showTabs=0&amp;mode=WEEK&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffff00&amp;src=kr3c44msss9qmsuu96hmaddv5c%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="360" height="400" frameborder="0" scrolling="no"></iframe>
                </div>
                <div class="span4">
                  <!-- <h6>How can we help you?</h6> -->
                  <h6>Instructions:</h6> 
                  <p>You have 3 steps left.  This will take you about 5 minutes.</p>
                  <p>If you'd rather, you can also call me at:</p>
                  <h2 class="text-center" href="tel:7405076198">740-507-6198</h2>
                  <h4 class="text-center">russ@buckeyemower.com</h4>
                  <div class="coupon">
                    <h4>10% Off</h4>
                    <p>Get 10% off for mentioning this coupon. How? <strong>Just Ask!</strong></p>
                  </div>
                  <h2 class="text-center">
                    @include('site.partials.contact-buckeye')
                  </h2>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer text-center">
    <!-- <div class="row-fluid text-center"> -->
      <ul class="nav nav-pills">
        <li class="active">
          <a href="#one" data-toggle="tab" >1</a>
        </li>
        <li>
          <a href="#two" data-toggle="tab">2</a>
        </li>
        <li>
          <a href="#three" data-toggle="tab">3</a>
        </li>
      </ul>
    <!-- </div> -->
  </div>
</div>





<!-- ***********************************************8 -->

<a href="#story" role="button" class="btn btn-large pull-right" data-toggle="modal">
          <strong>:)</strong>
        </a>

<style>
  #story{
    /*width: 70%;*/
    /*margin: auto;*/
    /*height: 80%;*/
  }
</style>
    <div id="story" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-header text-center">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel2">Buckeye Mower will save your weekend.</h3>
    </div>
    <div class="modal-body">
      <img src="http://sbt.blob.core.windows.net/storyboards/rgrissinger/mower.png" alt="The Story of how Mobile Mower Repair saves a marriage" />
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      <!-- <button class="btn btn-primary">Save changes</button> -->
    </div>
  </div>




<div class="row-fluid">
  <div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#ride" data-toggle="tab">
          <h4>Riding</h4>
        </a>
      </li>

      <li>
        <a href="#walk" data-toggle="tab">
          <h4>Walking</h2>
        </a>
      </li>

      <li> 
        <a href="#fleet" data-toggle="tab">
          <h4>Commercial</h2>
        </a>
      </li>

      <li>
        <a href="#small" data-toggle="tab">
          <h4>Small Engine</h2>
        </a>
      </li>

      

    </ul>
    
    <style>
      .price{
        position:absolute;
        /*top:10%;*/
        right:7%;
        max-width: 30%;
        z-index:2;
      }
    </style>
    <div class="tab-content">

      <div class="tab-pane active featurette" id="ride">
        <!-- <div class="pull-right"> -->
        <img src="{{asset('assets/buckeye/89.png')}}" alt="Starting at $89" class="pull-right price">
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
      </div>

      <div class="tab-pane featurette" id="walk">
        <!-- <div class="pull-right"> -->
        
        <style>

        </style>
        <div class="price-star">
          <img src="{{asset('assets/buckeye/49.png')}}" alt="Starting at $49" class="pull-right price">
          <p>As Low As</p>
          <h6>$49</h6>
          <p></p>
        </div>
        
        <img class ="featurette-image myimage img-circle pull-right" src="{{asset('assets/buckeye/push.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
        <!-- </div> -->
        
        <h2 class='featurette-heading'>Push Mower Services.</h2>
          <p class='lead'>We'll get you back in business in no time!</p>
          <ul>
            <li>Change Oil, Air Filter, Spark Plug(s)</li>
            <li>Deck Cleaning</li>
            <li>Blade Sharpening</li>
            <li>Inspection of entire machine
              <ul>
                <li>Cables</li>
                <li>Belt</li>
                <li>Drive System, etc.</li>
              </ul>
            </li>
          </ul>
      </div>

      <div class="tab-pane featurette" id="fleet">
        <!-- <div class="pull-left"> -->

          <img class ="myimage img-circle featurette-image pull-left" src="{{asset('assets/buckeye/commercial.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
        <!-- </div> -->
        <h2 class='featurette-heading'>No Engine too Big.</h2>
        <p class='lead'>No account or machine is too big.  I have references available for whom I service fleets of dozens of commercial mowers.  I am also a certified deisel mechanic.  Please contact me by phone or email to discuss your fleet's maintenance needs.</p>
      </div>

      <div class="tab-pane featurette" id="small">
        <!-- <div class="pull-right"> -->
          <!-- <img class ="featurette-image myimage img-circle pull-right" src="{{asset('assets/buckeye/push.png')}}" alt="Buckeye Mower, Mobile Engine Repair"> -->
          <img class="featurette-image img-circle pull-right myimage" src="{{asset('assets/buckeye/chainsaw.svg')}}" alt="serving central ohio">
        <!-- </div> -->
        
        <h2 class='featurette-heading'>No Engine too Small.</h2>
          <p class='lead'>Push Mower. Riding Mower.  Chainsaw.  Weedeater. Snowblower.  If it has a small engine, I can help you fix it.</p>
          <p>Remember, I'll come to your house for you - no need for truck, trailer, or travel.</p>
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

        <img class="featurette-map pull-right" src="http://maps.googleapis.com/maps/api/staticmap?center=Westerville,Ohio&zoom=9&size=400x600&markers=Westerville+OH|Hilliard+OH|Columbus+OH|Gahanna+OH|Marengo+OH|Delaware+OH|Pickerington+OH|Grove+City+OH|Pataskala+OH|West+Jefferson+OH&sensor=false" alt="Central Ohio">

<!--         <img class="featurette-image pull-right" src="{{asset('assets/buckeye/ohio.png')}}" alt="serving central ohio"> -->
        <h2 class="featurette-heading">I will come to you. <span class="muted">Wide Service Area.</span></h2>
        <p class="lead">My general service area is the Greater Columbus Area, anywhere south of 36/37.  For Example, I've done service near Westerville, Lewis Center, Polaris, Easton, Delaware, Marysville, Hilliard, Dublin, Gahanna, Pickerington, Pataskala, New Albany and more.  If I can help you, I'll do my best!</p>
        <!-- http://openclipart.org/may-clipart-be-used-comparison -->
        <!-- http://clipartist.info/RSS/openclipart.org/2011/May/29-Sunday/lawn_mower.svg.html -->
        <!-- http://openclipart.org/detail/663/lawn-mower-by-jicjac -->
      </div>

      <hr class="featurette-divider">

      <div class="featurette">

        <img class="featurette-image pull-left mysvg myimage img-circle" src="{{asset('assets/buckeye/noun_project_13832.svg')}}" alt="serving central ohio">
        <!-- <i class="icon-cogs icon6"></i> -->
        <h2 class="featurette-heading">Factory Trained. <span class="muted">Any Brand.</span></h2>
        
        <p class="lead">I am <strong>Factory Trained</strong>, and I regularly work on all major brands:
<ul>
  <li>
    <a href="http://www.toro.com/en-us/homeowner/mowers/Pages/default.aspx">
      <img src="{{asset('assets/buckeye/cubcadet.jpg')}}" alt="">
    </a>
  </li>

  <li>
    <a href="http://www.toro.com/en-us/homeowner/mowers/Pages/default.aspx">
      <img src="{{asset('assets/buckeye/1968_logo.jpg')}}" alt="">
    </a>
  </li>
</ul>
         <p class="lead">Looking for a mower?  Here is the <a href="http://www.consumerreports.org/cro/lawn-mowers/buying-guide.htm">Lawn Mower Buying Guide</a> from consumer reports.</p>
         <p>
         I have a passion for this equipment: and I will treat your equipment like it was my own.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" name="services" id ="services">
        <img class="featurette-image pull-right mysvg myimage img-circle" src="{{asset('assets/buckeye/chainsaw.svg')}}" alt="serving central ohio">
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

<div class="span8 offset4" name="posts" id="posts" name="posts">
  <h1>Some More Ideas...</h1>
  
  <div class="text-center">
    {{ $posts->links() }}
  </div>

  @foreach ($posts as $post)
    <div class="row">
      <div class="span3">
        <p></p>
        <p>
      <!-- Edit/Delete Buttons -->
        <div class="metabuttons pull-left">
          @if (Auth::check())
                    @if (Auth::user()->hasRole('admin'))
              <p>
                <a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
                <a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
              | </p>
            @endif
          @endif
        </div>

        <!-- Comments -->
          &nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
          | <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
          | <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
        </p>
      </div>
    </div>
    

    <div class="well">
      {{$post->title}}
      {{$post->img}}

      <h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
      <p>
      {{ String::tidy(Str::limit($post->meta_description, 158)) }}
      </p>
      <p>
        <a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
      </p>
    </div>

    <ul class='tag'>
      <li><i class="icon-tag"></i></li>
      @foreach($post->tags() as $tag)
        
          <li><a href="{{ $tag }}">{{ $tag }}</a></li>
          
      @endforeach
    </ul>

  @endforeach
  {{ $posts->links() }}
</div>

      <!-- /END THE FEATURETTES -->
@stop

@section('footer')
<style>
  .myfooter{
    padding-top: 30px;
    background-color: rgba(189,219,123,.7);
    margin-left: 10px;
    text-align: center;
    margin-right: -60px;
    margin-left: -60px;
  }
  .page-header{
    margin-left: -60px;
    padding-left: 60px;
    margin-right: -60px;
    padding-right: 60px;
    background-color: rgba(46, 204, 113,1.0);
  }
</style>
<div class="myfooter">
  <img class="center" src="{{asset('assets/buckeye/grass2.png')}}" alt="">
  <h3 class="center" id="myfooter">Let's get your gr<em>ass</em> in gear!</h3>
  <a class="btn btn-large" href="tel:7405076198"><h2>740-507-6198</h2></a>
  <p class="muted credit">&copy; 2013, Buckeye Mower & Gristech, All Rights Reserved</p>
  <p><a href="#credits">credits</a></p>
</div>

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
    color: rgba(229,83,60,.7);
  }
</style>
<div class="hotel">
  <a href="{{URL::to('#')}}"><i class="icon-circle-arrow-up icon-4x"></i></a>
</div>
@stop