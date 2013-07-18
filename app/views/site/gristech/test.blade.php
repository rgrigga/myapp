
<?php

function img($name,$type="png",$company="advantage"){
	// $string= "<img src=\"asset
	// 	('assets/'.".$company.".'/".$name.".".$type."')}}\" alt=\"foobar\">";

	$url= asset('assets/'.$company.'/'.$name.'.'.$type);
	$alt=$company." ".$name;
	$str=
	"<img src='".
	$url.
	"' alt='".
	$alt.
	"'>";
	// die(var_dump($str));
	// echo $str;
	// string="img src"
	return $str;
}

$list=array(
	'10off','10off2','advantage',
	'house',
	);


// http://stackoverflow.com/questions/3748/storing-images-in-db-yea-or-nay

// http://stackoverflow.com/questions/1347461/saving-images-files-or-blobs
?>
<html>
	<head>
		<title>
			Hello World.
		</title>
	</head>
	<body>
		@if (Session::has('message'))
		    <div class="flash alert">
		        <p>{{ Session::get('message') }}</p>
		    </div>
		@endif
		<h1>Welcome to the jungle</h1>
		Errors:
		
		<?php 
		var_dump($errors);
		echo $errors->first('success'); 
		?>

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>

<pre class='prettyprint'>
	Here's some code.
</pre>


<h3>$SESSION:</h3>
<?php var_dump($_SESSION) ?>


<div class="well">
<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, neque.</h2>

<!-- ******************************************* -->
<ulclass="nav">
	<li>
		<a href="#slider">Slider Demo</a>
	</li>
	<li>
		<a href="#code">Pretty Code</a>
	</li>
</ul>


<style> 
#foo{
    height:300px;
    overflow-y:scroll;
}
#bar{
    height:600px;
    background-color:#999;
}
#baz{
    height:60px;
    width:60px;
    background-color:yellow;
    color:#000;
    position:absolute;
    left:30px;
    top:0px;
}
/*@font-face
{
font-family: myFirstFont;
src: url(sansation_light.ttf);
}

div
{
font-family:myFirstFont;
}*/
</style>

<script>

    window.onload = function()
    {
    	// alert('bam!');
        if(!window.jQuery)
        {
            alert('jQuery not loaded');
        }
        else
        {
        		alert('jQuery is loaded');
            $(document).ready(function(){
                // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
            });

            	$(function(){
				    var layer1 = $('#bar');
				    var obj = $('#baz');
				        $('#foo').scroll(function(){             
				           var distance = layer1.outerHeight() + obj.outerHeight() + 20;            
				           var pos = this.scrollTop/$(this).innerHeight() * distance;
				           obj.css('top', pos);
				    });
				});


        }
    }


</script>

<h3>Version 1:</h3>
	<ul class="thumbnails">
		@foreach ($list as $img)
		<li class="thumbnail">
			{{img($img);}}
		</li>
		@endforeach
	</ul>

<h3>Two:</h3>
<ul>
@foreach ($list as $img)
<li>

	 {{img($img);}}
</li>
@endforeach
</ul>

<!-- http://tympanus.net/codrops/2011/01/03/parallax-slider/ -->
<div id="foo">

    <div id="bar">
Main box.  Put BIG content here.

<p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores sit quia quis. Ex odit labore cupiditate dolores perferendis voluptatem maiores impedit ducimus harum error. Unde, fugiat, quasi, alias expedita consequatur molestiae nihil corrupti placeat omnis neque tempore dolores numquam perspiciatis itaque soluta error cum possimus non ipsam laudantium a.</p>
</p>





        <div id="baz">



{{img('horseshoe','jpg');}}
<img src="{{asset('assets/advantage/horseshoe.jpg')}}" alt="">
<img src="{{asset('assets/advantage/horseshoe.jpg')}}" alt="">
this moves.
        </div>
    </div>
</div>


<!-- ************************************************ -->


@javascripts('public-js')

	</body>
</html>


<!-- <html>
	<head>
		<title>
			Hello World.
		</title>
	</head>
	<body>
		@if (Session::has('message'))
		    <div class="flash alert">
		        <p>{{ Session::get('message') }}</p>
		    </div>
		@endif
		<h1>Welcome to the jungle</h1>
		Errors:
		
		<?php 
		var_dump($errors);
		echo $errors->first('success'); 
		?>

<h3>$SESSION:</h3>
<?php var_dump($_SESSION) ?>
	</body>
</html> -->