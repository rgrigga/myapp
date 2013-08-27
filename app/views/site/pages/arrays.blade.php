@extends('site.layouts.bs3')

@section('styles')
@parent
		<!-- @ stylesheets('bs3-css') -->
		<!-- @ stylesheets('gristech') -->

		<link rel="stylesheet/less" type="text/css" href="/assets/css/less/demo.less" />

		<script src="/assets/js/less.js" type="text/javascript"></script>
		
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

	    <!-- <link href="assets/dist/css/bootstrap.css" rel="stylesheet" media="screen"> -->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
<style>
	.container {
  padding-left: 15px;
  padding-right: 15px;
}

h4 {
  margin-top: 25px;
}
.row {
  margin-bottom: 20px;
}
.row .row {
  margin-top: 10px;
  margin-bottom: 0;
}
[class*="col-"] {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #eee;
  border: 1px solid #ddd;
  background-color: rgba(86,61,124,.15);
  border: 1px solid rgba(86,61,124,.2);
}

hr {
  margin-top: 40px;
  margin-bottom: 40px;
}
</style>
@stop

@section('main')
<?php 
$desired=array(5,4,6,7); 
$array1=
array(
	"4"=>"foo",
	"5"=>"bar",
	"6"=>"baz",
	"7"=>"zed"
	);


//$desired=array(5,4,6,7) //WILL NOT WORK!!!
$desired=array("5","4","6","7");
$ex1=$desired;
array_multisort($desired,$array1,SORT_STRING);
//This works ONLY using an array of strings in $desired. Will NOT work using integers.
$ex2=$desired;
// $desired2=array("5","4","6","7");

$desired=array_flip($desired);
$ex3=$desired;



function myposts($mylist){

	function build_sorter($key) {
	    return function ($a, $b) use ($key) {
	        return strnatcmp($a[$key], $b[$key]);
	    };
	}

	function cmp($a, $b) {
	    if ($a == $b) {
	        return 0;
	    }
	    return ($a < $b) ? -1 : 1;
	}



}

?>
<h1>Arrays: Live!</h1>

Consider this data:

<pre class= "prettyprint">
$array1=array(
	"4"=>"foo",
	"5"=>"bar",
	"6"=>"baz",
	"7"=>"zed"
	);</pre>

Now, consider this list:
<pre class="prettyprint">$desired=array(5,4,6,7);</pre>

Consider how else the computer sees the data:
<pre class="prettyprint">
print_r($desired);
{{{print_r($ex1)}}}</pre>

What we really want is 
<pre class="prettyprint">
print_r($desired);
{{{print_r($ex2)}}}</pre>

What we really, really want is 
<pre class="prettyprint">
$desired=array_flip($desired);
print_r($desired);
{{{print_r($ex3)}}}</pre>


@stop