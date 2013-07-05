@extends('site.layouts.russ')

{{-- Content --}}
@section('content')

<style>
	h1 {
		/*font-size:big;*/
		text-align: center;
	}

</style>
	<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">

	<div class="row-fluid">

		<div class="span6">
			<img class="img-circle pull-left" src="http://gristech.com/img/russ/fire.png" alt="lawn mower repair">
		</div>

		<div class="span6">
			<h1>Need Lawn Mower Help?</h1>
			<p class="text-center"><a class="btn btn-primary btn-large" href="tel:7405076198" > Call (740)507-6198</a></p>

			<p>Why fiddle with it for 6 hours in hopes of <em>maybe</em> fixing it.  An expert technician can come to your house and do it for you.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, sint expedita ipsa ea magni laboriosam maiores quas ad at harum?</p>
			<h4>Mobile Repair Service</h4>
			<p>Save yourself time, gas, money, and hassle: no need to load your mower up and haul it somewhere, we will come to you.  </p>
		</div>

	</div>

</div>
<!-- end hero-unit -->
<div class="row-fluid">
	<div class="span3">
		<h2><a href="#">Riding Lawn Mower Service</a></h2>
		<h3>Basic Service</h3>
		<p>Approx time: 1-2 hours</p>
		<p>CHANGE OIL, OIL FILTER, SPARK  PLUG 'S', AIR and FUEL FILTER.</p>

		<ul>
<li>DECK CLEANING</li>
<li>DECK LEVELING</li>
<li>BLADE SHARPENING</li>
<li>PTO CLUTCH ADJUSTMENT IF APPLICABLE</li>
<li>TEST CHARGING SYSTEM AND BATTERY</li>
<li>TIRE PRESSURE ADJUSTMENT</li>
<li>GREASE ENTIRE MACHINE</li>
<li>INSPECTION OF ENTIRE MACHINE (belts, hoses, pulleys, etc)
</li>
</ul>
<p>$85.00 plus parts</p>
<a class="btn btn-primary btn-large" href="tel:7405076198" >(740)507-6198</a>
	</div>

	<div class="span3">
		<h2>Push Mower Service</h2>
		<ul>
			<li>CHANGE OIL, AIR FILTER, SPARK PLUG</li>
			<li>DECK CLEANING</li>
			<li>BLADE SHARPENING</li>
			<li>INSPECTION OF ENTIRE MACHINE  (belt, cables, drive system etc)</li>
		</ul>


<p>$85.00 plus parts</p>
<p>
<a class="btn btn-primary btn-large" href="tel:7405076198" >(740)507-6198</a>
</p>

	</div>

	<div class="span3">
		<h2>Other Services</h2>
		<p>Call us!</p>
		<a href="tel:6142039405">6142039405</a>
	</div>

	<!-- span8 -->
	<div id="about" name="about" class="span3 pull-right" style="background-color:orange;margin:0px;">
		<h2>The New Collossus</h2>
		<img src="http://www.loc.gov/exhibits/haventohome/images/hh0041s.jpg" alt="manuscript">
		<p></p>

	</div>
</div>
<!-- end row -->
@stop
