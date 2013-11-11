<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/ico/myapp/left.png">
	  
    <title>Demonstration</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/oldstyles.css" rel="stylesheet">

    <!-- LESS stylesheet -->
    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/mobile.less" />
    
    <!-- less.js, which compiles less on the fly -->
    <script src="/assets/js/less.js" type="text/javascript"></script>



  </head>

  <body>

	<div class="mobile visible-xs">
		<div class="container">
			<h1>Mobile</h1>
			<div class="target">
			<!-- fill me! -->
			</div>
		</div>
	</div>
  	<div class="desktop hidden-xs">
		<h1>Desktop</h1>
		<div class="content">

<?php
$str=<<<EOT
<meta name="viewport" content="width=device-width, initial-scale=1.0">
EOT;
?>
<pre><code><?=e($str)?></code></pre>

<a class="btn btn-danger" href="http://myapp.gristech.com/demo/viewport">Version 1</a>
<a class="btn btn-danger" href="http://myapp.gristech.com/demo/viewport2">Version 2</a>

  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, alias, odit, optio, atque at nihil vitae perferendis eius maiores fuga quisquam ullam doloremque ad. Repudiandae, in, amet, mollitia suscipit sit ipsum dolores incidunt autem unde assumenda architecto sed quidem. Eaque, recusandae dolorem necessitatibus beatae debitis esse? Doloremque, quibusdam, non, dolore cupiditate consequatur excepturi animi officia aperiam assumenda obcaecati veritatis iure distinctio magni! Nam, pariatur, deserunt harum doloribus reprehenderit nulla tenetur consequuntur voluptatibus nostrum tempora quo doloremque cupiditate modi beatae molestias quis recusandae error in aperiam at? Dolorem, placeat vitae quisquam tempora cum corporis tempore at atque iure dicta dolorum eligendi facere eius quibusdam hic ex quia ad illo odio alias sint quis autem iusto quidem rerum eum non. Facere, soluta iste veniam dignissimos dolorum alias voluptates dolore ut ducimus aliquam optio fuga officiis necessitatibus accusantium magnam cumque deserunt. Iusto, corporis, velit, officia, beatae ab voluptates repellat cum tenetur odio sed veniam omnis placeat! Voluptas, incidunt, consectetur, ipsa nobis aut excepturi ratione corrupti debitis beatae optio rem officiis mollitia eaque blanditiis repudiandae vero quos. Repellat, quia, autem mollitia maxime ullam eos praesentium. Asperiores, magni aliquam doloribus animi aliquid doloremque quia porro amet voluptates molestiae eaque eligendi aspernatur vero officiis non incidunt ratione excepturi culpa perspiciatis tempore tempora id quasi repellendus maiores provident quas error voluptas reprehenderit natus delectus sint unde quidem quam voluptatibus voluptate officia blanditiis. Numquam, expedita, minus, optio, consequuntur maxime explicabo nobis aperiam aliquam beatae iste commodi cumque vero itaque animi sed molestiae laudantium inventore voluptas tempora a voluptates quae culpa assumenda quaerat repellendus libero odit necessitatibus quas sit perferendis ullam maiores nisi illo! Odio, inventore, itaque, sapiente, quidem aperiam iure ratione officia vero rerum quod cupiditate debitis tempore ipsa consequatur reiciendis illum exercitationem! Quaerat, porro, culpa, veniam, quas aut repellat explicabo a quod cumque nulla nesciunt minus ullam.</p>
		</div>
  	</div>
    <script src="/assets/js/jquery.v1.8.3.min.js"></script>
    <script src="/assets/dist/js/bootstrap.min.js"></script>
	<script>
	$('.content').clone().appendTo('.target')
	</script>
  </body>
</html>