@extends('admin.layouts.default')

@section('title')
@parent
 admin.dashboard
@stop

@section('main')

	{{--
	<pre><code>
{{{__FILE__}}}
</br>
{{basename($_SERVER['PHP_SELF'])}}
<br>
{{basename($_SERVER["SCRIPT_FILENAME"], '.php')}}
<br>
{{basename($_SERVER['REQUEST_URI'], ".php")}}
<br>
{{pathinfo(__FILE__, PATHINFO_FILENAME);}}
<br>
</code></pre>
--}}

<!-- basename($filename, '.php')}} -->



<h1>admin dashboard</h1>
<h6>{{$company->image}}</h6>
<img src="{{URL::to($company->image)}}" alt="">


<div class="container">
	<a href="{{URL::to('admin/dashboard');}}">{{URL::to('admin/dashboard');}}</a>

<!-- <<<<<<< HEAD -->
<i class=""></i>


<div class="span12">views.admin.dashboard</div>


<!-- @ include('../../README.md') -->

<!-- http://thenounproject.com/noun/lawn-mower/#icon-No2960 -->

<div class="note">
	Note to self: Make some notes.
</div>

<hr>
<h2>to do:</h2>
<ul>
	<li>Make a to-do list widget</li>
	<li>SVG:</li>
	<li><a href="http://stackoverflow.com/questions/4476526/do-i-use-img-object-or-embed-for-svg-files">SVG Primer</a></li>
	<li><a href="http://www.sitepoint.com/add-svg-to-web-page/">Add SVG to web page</a></li>
	<li><a href="http://css-tricks.com/using-svg/">CSS Tricks</a></li>
<!-- ======= -->
<h1>admin</h1>
<div class="span12">views.admin.dashboard</div>



<h2>to do:</h2>
<ul>
<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->
	<li><a href="http://nbii-thesaurus.ornl.gov/thesaurus/"></a>Thesaurus API</li>
	<li>Educational benefits</li>
	<li><a href="http://www.youtube.com/watch?v=09geUJg11iA">8 minute Javascript Drive API App</a></li>
	<li><a href="https://developers.google.com/drive/quickstart-php">Google Drive API</a></li>
	<li>"We will not post junk on your FB wall! Or intrude in your life any way you don't want us to!"</li>
	<li><a href="https://www.google.com/webmasters/tools/data-highlighter?hl=en&siteUrl=http://gristech.com/"></a>google webmasters</li>
<!-- <<<<<<< HEAD -->
	<li><a href="https://github.com/php-loep">League of Extraordinary Packages</a></li>
	<li>Unit Testing</li>
	<li>Linux: <a href="http://www.makeuseof.com/tag/6-different-ways-to-end-unresponsive-programs-in-linux/">http://www.makeuseof.com/tag/6-different-ways-to-end-unresponsive-programs-in-linux/</a> </li>
	<li>git <a href="http://gitref.org/creating/#clone">http://gitref.org/creating/#clone</a> </li>
<!-- ======= -->
<!-- >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3 -->
</ul>

<a href="https://support.google.com/drive/?hl=en#topic=2799627">https://support.google.com/drive/?hl=en#topic=2799627</a>

<h3>please enjoy var_dump(monolog):</h3>

<?php
// <<<<<<< HEAD
// $monolog = Log::getMonolog();
// var_dump($monolog);
// =======

$monolog = Log::getMonolog();
var_dump($monolog);
// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3

?>

</div>
@stop