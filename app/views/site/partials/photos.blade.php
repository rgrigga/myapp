<heading>{{$photo->title}}</heading>

<section>
	<section>
		<ul>
			@foreach ($photos as $photo)
			<li>
				<a href="{{$photo->url()}}">{{{$photo->url}}}</a>
				<img src="{{$photo->url}}" alt="$photo->title">
				{{{$photo->credit}}}
			</li>
			@endforeach
		</ul>
		<!-- @ include('site.partials.taglist') -->
		
	</section>
</section>
