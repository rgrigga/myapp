<heading>heading</heading>

<section>
	<section>

	</section>
</section>

<ul>
	@foreach ($posts as $post)
	<li>{{{$post->title}}}</li>
	@endforeach
</ul>