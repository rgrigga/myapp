@section('main')

<h1>Index</h1>
<h2>Pages:</h2>
<ul>
	<li><a href="{{URL::to('viviosoft/demo')}}">Demos</a></li>
	@foreach ($pages as $page)
	<?php $path= "viviosoft/".$page; ?>
	<li><a href="{{URL::to($path)}}">{{$page}}</a></li>
	@endforeach
</ul>

@stop
