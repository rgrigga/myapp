<?php
$categories=array(
	'cat1'=>array('sub1','sub2'),
	'cat2'=>array('sub1','sub2'),
	'cat2'=>array('sub1','sub2'),
	'cat3'
	);
?>

@foreach($categories as $k => $v)
    <?php var_dump($k,$v); ?>
    <br>
@endforeach

<div class="accordion" id="accordion">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
				<h2>{{$category}}</h2>
			</a>
		</div>
		<div id="collapseOne" class="accordion-body collapse">
			<!-- //add in to open on load -->
			<div class="accordion-inner">
				<a href="#{{$subcat}}" data-toggle="tab">
					<h3>{{$subcat}}</h3>
					<p>{{$subcat->content}}</p>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- ./ accordion -->

<!-- 	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
				<h2>{{$category}}</h2>
			</a>
		</div>

		<div id="collapse{{$category}}" class="accordion-body collapse">
			<div class="accordion-inner">

				<a href="#repairs" data-toggle="tab">
					<h3>Repairs</h3>
				</a>

				<a href="#replacement" data-toggle="tab">
					<h3>Replacement</h3>
				</a>
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				<h2>Power Washing</h2>
			</a>
		</div>
		<div id="collapseThree" class="accordion-body collapse">

			<div class="accordion-inner">
				<a href="#power" data-toggle="tab">
					<h3>Power</h3>
				</a>
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
				<h2>Gutter Cleaning</h2>
			</a>
		</div>
		<div id="collapseFour" class="accordion-body collapse">
			<div class="accordion-inner">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
				<h2>Concrete Cleaning & Sealing</h2>
			</a>
		</div>
		<div id="collapseFive" class="accordion-body collapse">
			<div class="accordion-inner">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div> -->
		<!-- ./collapse -->
	<!-- </div> -->
	<!-- ./ accordian-group -->