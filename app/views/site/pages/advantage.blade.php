@extends('site.layouts.advantage')

@section('brand')
Advantage
@show

@section('nav')



@section('content')

<!-- <div class="container"> -->
	<div class="row-fluid">

		<div class="span12">
			
			<h3>
				Advantage Services
			</h3>

<?php
/**
* 
*/
// class ClassName extends BaseClass
// {
	
// 	function __construct(argument)
// 	{
// 		# code...
// 	}
// }

?>


@foreach(array('foo','bar') as $sec)

<div class="span3">
	<h3>{{$sec}}</h3>
	<ul class="nav nav-pills nav-stacked">
		<li class="active">
			<a onclick="loadXMLDoc('tools')"></a>
		</li>
		<li><a href="#">Profile</a></li>
		<li><a href="#">Messages</a></li>
	</ul>
</div>

@endforeach

<button type="button" onclick="loadXMLDoc('tools')">Tools</button>
<button type="button" onclick="loadXMLDoc('security')">Security</button>
<button type="button" onclick="loadXMLDoc('notes3')">Notes</button>
<button type="button" onclick="loadXMLDoc('backup')">Backup</button>
<div id="myDiv"><h2>Let AJAX change this text</h2></div>



		</div>

	</div>
<!-- </div> -->
					<script>
					// http://www.w3schools.com/js/js_popup.asp
					// https://developer.mozilla.org/en-US/docs/Web/Guide/DOM/Manipulating_the_browser_history/Example
				function loadXMLDoc(input)
				{
				var xmlhttp;
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
				    }
				  }
				xmlhttp.open("GET",input,true);
				xmlhttp.send();
				}
				</script>	
@stop