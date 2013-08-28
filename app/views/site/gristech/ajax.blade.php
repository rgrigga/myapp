@extends('layouts.scaffold')

@section('nav')
@include('site.partials.nav-top-min')
@stop

@section('main')

<!-- <div class="container"> -->
<style>
	html, body{
		background-color: rgba(52, 152, 219,1.0);
	}
	.page-header{
		width: 100% static;
		padding-top: 60px;
		
	}
</style>



	<div class="row-fluid page-header">

		<div class="span12">
			 <ul class = "navbar">
				@foreach($company->menus() as $menu)

				<li onclick="loadXMLDoc('{{{$menu}}}')">{{{$menu}}}</li>
				@endforeach	 	
			 </ul>


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
<div class="row text-center">
	<a href="#" class="btn btn-large btn-success"><i class="icon-thumbs-up"></i> cool</a>
<a href="#" class="btn btn-large btn-danger"><i class="icon-thumbs-down"></i> dumb</a>
</div>

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

@section('admin-bottom')
<!-- @parent -->
<style>
	.admin-bottom{
		background-color:black;
	}
</style>

<a href="http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html">Bootstrap Mixins</a>
@stop