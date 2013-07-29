<div class="about" id="about" name="about">
	<pre><code>View::make('company/about');</code></pre>
	<h1>{{{$company->name}}}</h1>
	<h2>{{{$company->slogan}}}</h2>
	<h3>Company Asset Directory:{{{$company->directory}}}</h3>
	<img src="{{{asset('assets/'.strtolower($company->brand).'/'.$company->image)}}}" alt="logo">
	<p>Description:</p>
	<pre class='prettyprint'><code>
	<?php
	var_dump($company);
	?>
	</code></pre>
</div>
