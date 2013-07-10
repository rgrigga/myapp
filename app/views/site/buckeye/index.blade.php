@extends('site.layouts.company')

@section('title')
Buckeye Mower - Fast, Mobile Mower and Small Engine Repair
@stop

@section('styles')
@parent

    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
      background-color: rgb(240,240,207);
    }

  .hero-unit{
    text-align: center;
    background-color: rgb(214,198,150);
    box-shadow: 10px 10px 5px rgb(115,78,0);
    border-radius: 40% 40%;
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
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    .navbar .navbar-inner{
      color: yellow;
    }
    .navbar .nav > li > a {
      color: yellow;
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      color: yellow;
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 20px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(255,255,255,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
      color: green;
      background-color: yellow;
    }
    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }

    .navbar-inner{
    background: -webkit-gradient(linear, 0 100%, 0 0, from(#b4ddb4), color-stop(0.1, #83c783), color-stop(0.95, #002400), color-stop(1, #52b152), color-stop(1, #005700), to(#002400));
    background: -webkit-linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    background: -moz-linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    background: -o-linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    background: linear-gradient(#b4ddb4 0%, #83c783 10%, #002400 95%, #52b152 100%, #005700 100%, #002400 100%);
    
      }


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
      background-color: rgb(214,198,150);;
    }
    .featurette-image {

      margin-top: -20px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    @media (min-width: 980px){
      .featurette-image.pull-left {
        margin-right: 40px;
      }
      .featurette-image.pull-right {
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
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 20px auto 20px;
        /*margin-top: 30px;*/
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

.delta h1, h4{ 
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

    </style>
@stop

@section('content')
@parent
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">


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
	<div class="hero-unit">
    <!-- <img src="{{asset('assets/buckeye/crocus.jpg')}}" alt=""> -->
    <div class="row-fluid">
      <div class="span6">
        <!-- http://stackoverflow.com/questions/7055393/css-center-image-using-text-align-center -->
        <img class ="center" src="{{asset('assets/buckeye/buckeye_logo.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
      </div>
      <div class="span6">
        <!-- <h1>Buckeye Mower</h1> -->
        <h2><strong>Mobile Mower Repair</strong></h2>
        <p><em>We travel, so you don't have to...</em></p>
        <p><strong>Fast.  Affordable.  Simple.</strong></p>
      </div>
      <a href="contact" class="btn btn-success btn-large">Schedule Online Now</a>
    </div>
  </div>
</div>



<!-- END INTRO -->

      <!-- <div class="span5"> -->
      <!-- <h2>Mobile Mower Repair</h2> -->
      <!-- <div class="h2">Mobile Mower Repair</div> -->
      <!-- icon-flag on icon-circle<br> -->
      <!-- <span class="icon-stack"> -->
        <!-- <i class="icon-circle icon4x icon-stack-base"></i> -->
        <!-- <i class="icon-flag icon4x icon-light"></i> -->
      <!-- </span> -->
      
      <!-- <p>We will come to you!  -->
  <!-- <span class="icon-stack"> -->
  <!--   <i class="icon-circle icon4x icon-stack-base"></i>
    <i class="icon-rocket icon4x icon-light"></i> -->
  <!-- </span> -->
      <!-- </p> -->
    <!-- </div> -->
    <!-- <div class="span5"> -->
      <!-- <img src="{{asset('assets/buckeye/buckeye_logo2.png')}}" alt=""> -->
    <!-- </div> -->
	<!-- </div> -->
<!-- </div> -->

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">

          <img class ="center" src="{{asset('assets/buckeye/riding_button.png')}}" alt="Buckeye Mower, Mobile Engine Repair">

          <!-- <img class="img-circle" src="http://placehold.it/200x200"> -->
          <h2 #href="{{{URL::to('About')}}}">Riding Lawn Mower Service</h2>
          <ul>
            <li>Change Oil, Oil FIlter, Spark Plus(s), AIr and Fuel Filter</li>
            <li>Deck Ceaning</li>
            <li>Deck Leveling</li>
            <li>Blade Sharpening</li>
            <li>PTO CLutch Adjustment</li>
            <li>Test Battery and Charging System</li>
            <li>Tire Pressure Adjustment</li>
            <li>Grease Entire Machine</li>
            <li>Inspect all hoses, belts, pulleys, etc.</li>
          </ul>
          
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class ="center" src="{{asset('assets/buckeye/truck_button.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
          <h2>Commercial</h2>

          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class ="center" src="{{asset('assets/buckeye/push_button.png')}}" alt="Buckeye Mower, Mobile Engine Repair">
          <h2>Small Engine</h2>
          <p>Push Mower. Riding Mower.  Chainsaw.  Weedeater.  If it has a small engine, I can help you fix it.  I'll come to your house for you.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette" id="map" name="map">
        <img class="featurette-image pull-right" src="{{asset('assets/buckeye/ohio.png')}}" alt="serving central ohio">
        <h2 class="featurette-heading">I will come to you. <span class="muted">Wide Service Area.</span></h2>
        <p class="lead">We generally service the Greater Columbus Area, south of 36/37.  For Example, I've done service near Westerville, Lewis Center, Polaris, Easton, Delaware, Marysville, Hilliard, Dublin, Gahanna, Pickerington, Pataskala, New Albany and more.  If I can help you, I'll do my best!</p>
        <!-- http://openclipart.org/may-clipart-be-used-comparison -->
        <!-- http://clipartist.info/RSS/openclipart.org/2011/May/29-Sunday/lawn_mower.svg.html -->
        <!-- http://openclipart.org/detail/663/lawn-mower-by-jicjac -->
      </div>

      <hr class="featurette-divider">
<style>
  .icon6{
    font-size:10em;
  }
  .mysvg{
    width:300px;
    color: #fff;
    text-shadow: 1px 1px 1px #ccc;
  }
</style>


      <div class="featurette">

        <img class="featurette-image pull-left mysvg" src="{{asset('assets/buckeye/noun_project_13832.svg')}}" alt="serving central ohio">
        <!-- <i class="icon-cogs icon6"></i> -->
        <h2 class="featurette-heading">Factory Trained. <span class="muted">Humble Expertise.</span></h2>
        
        <p class="lead">I am <strong>Factory Trained</strong>, and I regularly work on all major brands: John Deere, Toro, Craftsman, Cub Cadet, and more.  I have a passion for this equipment: and I will treat your equipment like it was my own.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right mysvg" src="{{asset('assets/buckeye/chainsaw.svg')}}" alt="serving central ohio">
        <h2 class="featurette-heading">Not Just Mowers. <span class="muted">Any Small Engine.</span></h2>
        <p class="lead">I regularly service all brands of all kinds of equipment.  If it has an engine...</p>

        <div class="row-fluid">
          <div class="span5">
            <ul>
              <li>Compact Tractors</li>
              <li>Utility Vehicles</li>
              <li>Commercial Mowers</li>
              <li>Trimmers, Edgers, Hedgers</li>
            </ul>
          </div>
          <div class="span5">
            <ul>
              <li>Chainsaws</li>
              <li>Leaf Blowers</li>
              <li>Roto-tillers</li>
              <li>Snow Blowers</li>
            </ul>
          </div>
        </div>
        <div class="row-fluid">
          <h2>All 2-Cycle or 4 cycle Equipment</h2>
        </div>

        <div id="example">
          <ul>
                  
                  
                  
                </ul>
        </div>
        
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->






@stop

@section('footer')

<style>
  div.span12{
    font-size: 10px;
  }
</style>

<div class="span12">
  <p class="muted credit">
    <a href="http://thenounproject.com/noun/race-car/#icon-No3019" target="_blank">Race Car</a> designed by <a href="http://thenounproject.com/ianfrid" target="_blank">Ian Friday</a> from The Noun Project
  </p>
  <p class="muted credit">
    <a href="http://thenounproject.com/noun/truck/#icon-No7504" target="_blank">Truck</a> designed by <a href="http://thenounproject.com/misirlou" target="_blank">Benjamin Orlovski</a> from The Noun Project
  </p>
</div>

@stop