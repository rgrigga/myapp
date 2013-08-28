<h1>BAM</h1>
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
		<!-- Bootstrap -->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

        <!-- Font-Awesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
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
				           var distance = layer1.outerHeight() + obj.outerHeight() * .3;            
				           var pos = this.scrollTop/$(this).innerHeight() * distance;
				           obj.css('top', pos);
				    });
				});


        }
    }


</script>
        <style> 
			#foo{
			    /*height:300px;*/
			    overflow-y:scroll;
			}
			#bar{
			    height:600px;
			    background-color:#999;
			    font-size: 28px;
			    text-shadow: -1px 0 black, 0 1px black,
			      1px 0 black, 0 -1px black;
			}
			#zim{
			    height:500px;
			    background-color:green;
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

			#zed{
				height:400px;
			    width:400px;
			    background-color:yellow;
			    color:#000;
			    position:absolute;
			    right:40px;
			    top:150px;
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

<!-- @stylesheets('myapp-css') -->
@stylesheets('mytest-css')

	</head>
	<body>
<div class="container">
	<h1>Welcome to the jungle</h1>
	<div class="foo">
		<div id="bar">

			thi part is big

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, libero accusantium repellat impedit obcaecati sed expedita laudantium iusto eaque at. Ea, eius, magni, rem earum optio maiores aspernatur perferendis consectetur neque architecto necessitatibus sequi corporis unde atque voluptatum vitae dolore. Doloremque, quis eum delectus in aliquid temporibus culpa maxime at facilis odio! Temporibus, sequi, magnam dolores modi cum praesentium ut rerum eveniet similique dolor velit ab unde sit dignissimos quas distinctio est. Unde, facere, consequatur, labore, fugiat dolor doloremque similique blanditiis maxime numquam culpa eaque non porro odio magni tenetur in odit cum fuga temporibus ducimus adipisci ea ullam doloribus earum sunt aliquam provident quia tempore illo eius sit fugit eos accusamus delectus inventore id expedita illum nobis ut a ratione quo. Tempore, itaque, ratione iste ullam facilis harum voluptas similique quam minus cumque culpa dolore tenetur voluptatum incidunt quos obcaecati saepe repellat molestias repudiandae ipsam possimus dolor distinctio nisi ipsa iusto odio exercitationem officiis ipsum deserunt. Modi, inventore, quia, praesentium maxime asperiores omnis expedita amet consectetur sapiente sed necessitatibus debitis sequi atque nostrum aperiam ipsa quibusdam ipsam laborum. Deserunt, velit, dicta, amet nemo culpa rem natus provident repudiandae laudantium voluptatum ipsum voluptatibus officiis sapiente porro quia eum ullam non esse totam odit fugiat fuga similique vero facilis illo animi vitae at doloremque consequuntur soluta obcaecati inventore magnam alias. Omnis, adipisci, optio, sit beatae laboriosam numquam dolor illum nobis tempore reiciendis asperiores molestiae facilis repellat accusamus consequatur fugit nesciunt minus. Atque, rem soluta eius est architecto dolor quod temporibus. Velit, perferendis ad provident eaque officia? Debitis, incidunt, quod, doloribus sequi nostrum ut impedit iusto cum officiis quos atque natus ipsam magni. Minus, ea omnis minima deserunt facere! Similique, totam natus adipisci impedit placeat dolores quae odio maiores error accusantium quas recusandae dolorum unde neque quo facilis aliquid labore voluptatibus ipsa a. Adipisci, vero, animi velit ea earum voluptate quaerat. Ipsam, itaque, incidunt, molestiae, doloribus necessitatibus quidem ipsa sed ab aspernatur eaque suscipit expedita. Quis, blanditiis, quibusdam, dignissimos pariatur corporis minus sunt tempora animi odio enim ducimus ratione iure libero numquam impedit mollitia debitis aut sit alias reiciendis minima quisquam maxime ab at quia! Rerum, molestiae, incidunt consequuntur at eveniet dignissimos dolorem voluptatum ullam aperiam amet dicta deleniti dolor iste odio alias voluptate praesentium quis reprehenderit quos recusandae natus optio quasi debitis rem error vitae mollitia deserunt autem eos libero laborum magnam ab illum molestias minus eaque fugiat. Mollitia, impedit, quae.
			<div id="baz">
				{{img('horseshoe','jpg');}}
				<img src="{{asset('assets/advantage/horseshoe.jpg')}}" alt="">

				this part moves.
	        </div>
	    </div>
	</div>

</div>
<!-- container -->

<!-- 				    var layer1 = $('#bar');
				    var obj1 = $('#baz'); -->

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
		// var_dump($errors);
		// echo $errors->first('success'); 
		?>

<h3>$SESSION:</h3>
<?php //var_dump($_SESSION) ?>
	</body>
</html> -->