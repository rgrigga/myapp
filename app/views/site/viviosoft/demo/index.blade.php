<h1>Demo Index</h1>
<h2>Pages:</h2>
<ul>
	@foreach ($pages as $page)
	<?php $path= "viviosoft/demo/".$page; ?>
	<li><a href="{{URL::to($path)}}">{{$page}}</a></li>
	@endforeach
</ul>