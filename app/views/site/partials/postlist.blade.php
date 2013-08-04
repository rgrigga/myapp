<heading>{{$heading}}</heading>

<section>
	<section>
		<ul>
			@foreach ($posts as $post)
			<li>
				<a href="{{$post->url()}}">{{{$post->slug}}}</a>
				{{{$post->title}}}
			</li>
			@endforeach
		</ul>
		@include('site.partials.taglist')
		
	</section>
</section>
