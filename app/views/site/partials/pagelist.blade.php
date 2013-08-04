<heading>pagelist</heading>

<section>
	<section>
		<ul>
			@foreach ($pages as $page)
			<li>{{{$page->title}}}</li>
			@endforeach
		</ul>
	</section>
</section>
