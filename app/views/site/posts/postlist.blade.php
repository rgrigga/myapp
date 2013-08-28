<h1>Postlist</h1>
<ul>
	@foreach($posts as $post)
<li>
	<a href="{{$post->url()}}">{{$post->title}}</a>
</li>
	@endforeach
</ul>