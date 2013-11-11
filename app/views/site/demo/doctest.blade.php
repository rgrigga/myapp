<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=GrissingerResume.doc");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
	</head>
	<body>
@include('resume.content.skills')
	</body>
</html>
