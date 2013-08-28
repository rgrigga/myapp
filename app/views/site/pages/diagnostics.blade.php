<h1>Diagnostics</h1>


<?php foreach ($_SERVER as $key => $value): ?>
	{{$key}} : {{$value}}
	<br>
<?php endforeach ?>
<?php

// var_dump($_SERVER);
?>