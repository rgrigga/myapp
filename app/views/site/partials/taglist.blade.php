<h6>All Tags:</h6>
<ul id="alltags">
	@foreach($alltags as $tag)
	<li class="badge badge-warning"><a href="tags/{{$tag}}">{{$tag}}</a></li>
	@endforeach
</ul>
