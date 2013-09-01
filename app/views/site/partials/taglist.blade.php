<h6>All Tags:</h6>
<ul id="alltags">
	@foreach($alltags as $tag=>$count)
	<!-- {{var_dump($tag)}} -->
	<li class="badge"><a href="tags/{{$tag}}">{{$tag}}</a></li>
	@endforeach
</ul>
