<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=GrissingerResume.doc");
?>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		h1,h2,h3,h4,h5,h6{
			text-align: left;
		}
		h1{
			page-break-before: always;
		}
		h4{
			font-style: italic;
			text-align: left;
			margin-top: 0in; 
			margin-bottom: 0in !important;
		}
		p{
			margin-top: 0.1in; 
			margin-bottom: 0.1in;
		}
		.break{
			page-break-before: always;
		}
		</style>
	</head>
	<body>
	<!-- This document was created with php. -->
	@yield('main')
	</body>
</html>

