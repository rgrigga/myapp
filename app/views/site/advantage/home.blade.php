@extends('layouts.scaffold')

@section('nav')
@include('site.partials.nav-top-min')
@stop

@section('main')

<!-- <div class="container"> -->
	<div class="row-fluid">

		<div class="span12">
			
			 
			<h1>ajax</h1>
			<h2>{{{$company->name}}}</h2>

			<button type="button" onclick="loadXMLDoc('security')">Security</button>
			<button type="button" onclick="loadXMLDoc('notes3')">Notes</button>
			<button type="button" onclick="loadXMLDoc('backup')">Backup</button>

			<div id="myDiv"><h2>Let AJAX change this text</h2></div>



		</div>
		<!-- span12 -->

	</div>
	<!-- </div> -->

	<script>

					function loadXMLDoc(input)
					{
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  // alert(input);
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